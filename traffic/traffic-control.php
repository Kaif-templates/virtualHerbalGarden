<?php
header('Content-Type: application/json');
require_once 'config.php';

// Function to get current traffic data
function getTrafficData($conn) {
    $query = "SELECT * FROM traffic_data ORDER BY timestamp DESC LIMIT 4";
    $result = $conn->query($query);
    
    $data = [
        'north' => 0,
        'south' => 0,
        'east' => 0,
        'west' => 0
    ];
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $data[$row['direction']] = $row['vehicle_count'];
        }
    }
    
    return $data;
}

// Function to determine which light should be green
function determineGreenLight($trafficData, $sensitivity = 5, $emergencyDirection = null, $pedestrianPriority = false, $peakHours = false) {
    // Emergency vehicle gets absolute priority if enabled
    if ($emergencyDirection) {
        return $emergencyDirection;
    }
    
    // Pedestrian priority - alternate between vehicle and pedestrian phases
    static $pedestrianPhase = false;
    if ($pedestrianPriority) {
        // Check if pedestrians are waiting (simulated)
        $pedestriansWaiting = rand(1, 10) > 7; // 30% chance
        
        if ($pedestriansWaiting) {
            $pedestrianPhase = !$pedestrianPhase;
            if ($pedestrianPhase) {
                // Return null to indicate pedestrian phase
                return null;
            }
        }
    }
    
    // Peak hours adjustment - prioritize main roads
    if ($peakHours) {
        $trafficData['east'] *= 1.3;
        $trafficData['west'] *= 1.3;
    }
    
    // Calculate traffic density ratios
    $total = array_sum($trafficData);
    if ($total == 0) $total = 1; // prevent division by zero
    
    $ratios = [];
    foreach ($trafficData as $dir => $count) {
        $ratios[$dir] = $count / $total;
    }
    
    // Apply sensitivity factor (higher sensitivity favors busier directions more)
    foreach ($ratios as $dir => $ratio) {
        $ratios[$dir] = pow($ratio, $sensitivity / 5);
    }
    
    // Normalize
    $sumRatios = array_sum($ratios);
    foreach ($ratios as $dir => $ratio) {
        $ratios[$dir] = $ratio / $sumRatios;
    }
    
    // Select direction with highest adjusted ratio
    arsort($ratios);
    return key($ratios);
}

// Function to update traffic light status
function updateTrafficLights($conn, $greenDirection) {
    $directions = ['north', 'south', 'east', 'west'];
    
    // First set all to red
    foreach ($directions as $dir) {
        $query = "UPDATE traffic_lights SET status = 'red' WHERE direction = '$dir'";
        $conn->query($query);
    }
    
    if ($greenDirection) {
        // Set the green direction
        $query = "UPDATE traffic_lights SET status = 'green' WHERE direction = '$greenDirection'";
        $conn->query($query);
        
        // Set perpendicular directions to red
        $perpendicular = ($greenDirection == 'north' || $greenDirection == 'south') 
            ? ['east', 'west'] 
            : ['north', 'south'];
        
        foreach ($perpendicular as $dir) {
            $query = "UPDATE traffic_lights SET status = 'red' WHERE direction = '$dir'";
            $conn->query($query);
        }
        
        // Log the change
        $query = "INSERT INTO light_changes (green_direction) VALUES ('$greenDirection')";
        $conn->query($query);
    } else {
        // Pedestrian phase - all red
        $query = "INSERT INTO light_changes (green_direction) VALUES ('pedestrian')";
        $conn->query($query);
    }
}

// Main logic
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($conn->connect_error) {
    die(json_encode(['error' => 'Database connection failed']));
}

// Get parameters
$mode = isset($_GET['mode']) ? $_GET['mode'] : 'auto';
$sensitivity = isset($_GET['sensitivity']) ? intval($_GET['sensitivity']) : 5;
$pedestrianPriority = isset($_GET['pedestrian']) ? filter_var($_GET['pedestrian'], FILTER_VALIDATE_BOOLEAN) : false;
$emergencyPriority = isset($_GET['emergency']) ? filter_var($_GET['emergency'], FILTER_VALIDATE_BOOLEAN) : false;
$peakHours = isset($_GET['peak']) ? filter_var($_GET['peak'], FILTER_VALIDATE_BOOLEAN) : false;
$emergencyDirection = isset($_GET['emergency_direction']) ? $_GET['emergency_direction'] : null;

if ($mode == 'auto') {
    // Auto mode - AI decides
    $trafficData = getTrafficData($conn);
    $greenDirection = determineGreenLight($trafficData, $sensitivity, 
        ($emergencyPriority ? $emergencyDirection : null), $pedestrianPriority, $peakHours);
    updateTrafficLights($conn, $greenDirection);
} else {
    // Manual mode - use provided direction
    if (isset($_GET['direction']) && in_array($_GET['direction'], ['north', 'south', 'east', 'west'])) {
        $greenDirection = $_GET['direction'];
        updateTrafficLights($conn, $greenDirection);
    }
}

if ($mode == 'pedestrian') {
    // Set all lights to RED for pedestrians
    $query = "UPDATE traffic_lights SET status = 'red'";
    $conn->query($query);
    
    // Log pedestrian phase
    $query = "INSERT INTO light_changes (green_direction) VALUES ('pedestrian')";
    $conn->query($query);
}



// Get current light statuses
$query = "SELECT direction, status FROM traffic_lights";
$result = $conn->query($query);
$lightStatus = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $lightStatus[$row['direction']] = $row['status'];
    }
}

// Get traffic data for response
$trafficData = getTrafficData($conn);

$response = [
    'lights' => $lightStatus,
    'traffic' => $trafficData,
    'timestamp' => date('Y-m-d H:i:s')
];

echo json_encode($response);

$conn->close();
?>