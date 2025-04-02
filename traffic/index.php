<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Traffic Management System</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</head>
<body>
    <div class="container">
        <header>
            <h1>AI Traffic Management System</h1>
            <div class="header-controls">
                <div class="time-display">
                    <span id="current-time"></span>
                    <div class="day-night-toggle">
                        <span>Day</span>
                        <label class="switch">
                            <input type="checkbox" id="day-night-toggle">
                            <span class="slider round"></span>
                        </label>
                        <span>Night</span>
                    </div>
                </div>
                <div class="last-updated" id="lastUpdated">Last updated: Just now</div>
            </div>
        </header>
        
        <div class="dashboard">
            <div class="traffic-intersection">
                <div class="road horizontal">
                    <div class="lane west">
                        <div class="vehicle-container" id="west-vehicles"></div>
                        <div class="vehicle-count">0</div>
                        <div class="traffic-light" id="west-light">
                            <div class="light red active"></div>
                            <div class="light yellow"></div>
                            <div class="light green"></div>
                        </div>
                        <div class="pedestrian-crossing">
                            <div class="pedestrian-light" id="west-pedestrian">
                                <div class="ped-light walk"></div>
                                <div class="ped-light wait active"></div>
                            </div>
                            <div class="pedestrian" id="west-pedestrian-figure">🚶</div>
                        </div>
                    </div>
                    <div class="lane east">
                        <div class="vehicle-container" id="east-vehicles"></div>
                        <div class="vehicle-count">0</div>
                        <div class="traffic-light" id="east-light">
                            <div class="light red active"></div>
                            <div class="light yellow"></div>
                            <div class="light green"></div>
                        </div>
                        <div class="pedestrian-crossing">
                            <div class="pedestrian-light" id="east-pedestrian">
                                <div class="ped-light walk"></div>
                                <div class="ped-light wait active"></div>
                            </div>
                            <div class="pedestrian" id="east-pedestrian-figure">🚶</div>
                        </div>
                    </div>
                </div>
                
                <div class="road vertical">
                    <div class="lane north">
                        <div class="vehicle-container" id="north-vehicles"></div>
                        <div class="vehicle-count">0</div>
                        <div class="traffic-light" id="north-light">
                            <div class="light red active"></div>
                            <div class="light yellow"></div>
                            <div class="light green"></div>
                        </div>
                        <div class="pedestrian-crossing">
                            <div class="pedestrian-light" id="north-pedestrian">
                                <div class="ped-light walk"></div>
                                <div class="ped-light wait active"></div>
                            </div>
                            <div class="pedestrian" id="north-pedestrian-figure">🚶</div>
                        </div>
                    </div>
                    <div class="lane south">
                        <div class="vehicle-container" id="south-vehicles"></div>
                        <div class="vehicle-count">0</div>
                        <div class="traffic-light" id="south-light">
                            <div class="light red active"></div>
                            <div class="light yellow"></div>
                            <div class="light green"></div>
                        </div>
                        <div class="pedestrian-crossing">
                            <div class="pedestrian-light" id="south-pedestrian">
                                <div class="ped-light walk"></div>
                                <div class="ped-light wait active"></div>
                            </div>
                            <div class="pedestrian" id="south-pedestrian-figure">🚶</div>
                        </div>
                    </div>
                </div>
                
                <div class="intersection-center">
                    <div class="emergency-alert" id="emergency-alert">🚨 Emergency Vehicle Detected</div>
                </div>
            </div>
            
            <div class="stats-panel">
                <div class="traffic-stats">
                    <h2>Traffic Statistics</h2>
                    <div class="stat-grid">
                        <div class="stat-item">
                            <span class="stat-label">Westbound:</span>
                            <span class="stat-value" id="westbound-stat">0 vehicles</span>
                            <div class="stat-trend" id="west-trend">→</div>
                        </div>
                        <div class="stat-item">
                            <span class="stat-label">Eastbound:</span>
                            <span class="stat-value" id="eastbound-stat">0 vehicles</span>
                            <div class="stat-trend" id="east-trend">→</div>
                        </div>
                        <div class="stat-item">
                            <span class="stat-label">Northbound:</span>
                            <span class="stat-value" id="northbound-stat">0 vehicles</span>
                            <div class="stat-trend" id="north-trend">→</div>
                        </div>
                        <div class="stat-item">
                            <span class="stat-label">Southbound:</span>
                            <span class="stat-value" id="southbound-stat">0 vehicles</span>
                            <div class="stat-trend" id="south-trend">→</div>
                        </div>
                    </div>
                    
                    <div class="stat-item">
                        <span class="stat-label">Current Cycle:</span>
                        <span class="stat-value" id="current-cycle">30 sec</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-label">System Efficiency:</span>
                        <span class="stat-value" id="system-efficiency">85%</span>
                    </div>
                </div>
                
                <div class="chart-container">
                    <div id="trafficChart"></div>
                </div>
            </div>
        </div>
        
        <div class="control-panel">
            <div class="control-section">
                <h2>Control Panel</h2>
                <div class="controls">
                    <button id="pedestrian-btn">Request Pedestrian Crossing</button>
                    <button id="auto-mode" class="active">Auto Mode</button>
                    <button id="manual-mode">Manual Mode</button>
                    <div class="manual-controls" id="manual-controls" style="display: none;">
                        <button class="direction-btn" data-direction="north">North Green</button>
                        <button class="direction-btn" data-direction="south">South Green</button>
                        <button class="direction-btn" data-direction="east">East Green</button>
                        <button class="direction-btn" data-direction="west">West Green</button>
                    </div>
                    <div class="time-control">
                        <label for="cycle-time">Cycle Time (sec):</label>
                        <input type="number" id="cycle-time" min="10" max="120" value="30">
                    </div>
                    <button id="emergency-btn">Simulate Emergency</button>
                </div>
            </div>
            
            <div class="ai-settings">
                <h3>AI Settings</h3>
                <div class="setting">
                    <label for="sensitivity">Traffic Sensitivity:</label>
                    <input type="range" id="sensitivity" min="1" max="10" value="5">
                    <span id="sensitivity-value">5</span>
                </div>
                <div class="setting">
                    <label for="pedestrian-priority">Pedestrian Priority:</label>
                    <input type="checkbox" id="pedestrian-priority">
                </div>
                <div class="setting">
                    <label for="emergency-priority">Emergency Priority:</label>
                    <input type="checkbox" id="emergency-priority" checked>
                </div>
                <div class="setting">
                    <label for="peak-hours">Peak Hours Mode:</label>
                    <input type="checkbox" id="peak-hours">
                </div>
            </div>
            
            <div class="history-section">
                <h3>Historical Data</h3>
                <div class="history-controls">
                    <select id="history-range">
                        <option value="1">Last Hour</option>
                        <option value="6">Last 6 Hours</option>
                        <option value="24" selected>Last 24 Hours</option>
                        <option value="168">Last Week</option>
                    </select>
                    <button id="view-history">View</button>
                </div>
                <div id="historyChart"></div>
            </div>
        </div>
    </div>
    
    <script src="script.js"></script>
</body>
</html>