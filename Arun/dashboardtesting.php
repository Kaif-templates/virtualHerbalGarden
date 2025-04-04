<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Dashboard - AYUSH Herb</title>
</head>
<body class="font-sans">
    <?php
    session_start(); // Start the session
    // Check if user is logged in
    if (!isset($_SESSION['user_email'])) {
        header("Location: ../login/login.php"); // Redirect to login if not authenticated
        exit();
    }
    $user_email = $_SESSION['user_email']; // Get the user's email from session
    ?>

    <!-- Navigation Bar -->
    <nav class="flex justify-between p-4 shadow fixed w-full bg-white top-0 z-50 md:hidden relative">
        <div class="text-4xl text-green-800 font-semibold font-mono">
            AyushHerb
        </div>
        <div class="hidden sm:flex space-x-6 text-green-900 text-lg">
            <a href="../index.html"><div class="hover:underline hover:text-green-500">Home</div></a>
            <a href="../login/login.php"><div class="hover:underline hover:text-green-500">Login</div></a>
            <div class="hover:underline hover:text-green-500">Health</div>
            <a href="./community.html"><div class="hover:underline hover:text-green-500">Community</div></a>
            <a href="./dashboard.php"><div class="hover:underline hover:text-green-500">Dashboard</div></a>
        </div>
        <div class="md:hidden cursor-pointer" id="menu-btn">
            <i class="fa-solid fa-bars text-xl"></i>
        </div>
        <div class="hidden lg:flex space-x-3">
            <i class="fa-solid fa-magnifying-glass my-auto text-lg text-green-800"></i>
            <input type="text" class="flex-grow p-2 border rounded-xl border-green-300 placeholder:text-gray-400" placeholder="Search for plants...">
            <button class="px-4 py-2 border border-green-800 text-green-800 rounded-xl bg-green-50 hover:bg-green-800 hover:text-white transition-colors duration-200">
                <i class="fa-solid fa-question-circle mr-2"></i>Quiz
            </button>
        </div>
        <div class="hidden flex-col bg-white absolute top-14 left-0 w-full shadow-md sm:hidden" id="mobile-menu">
            <a href="../index.html"><div class="p-4 hover:bg-gray-100 hover:text-green-500">Home</div></a>
            <a href="../login/login.php"><div class="p-4 hover:bg-gray-100 hover:text-green-500">Login</div></a>
            <div class="p-4 hover:bg-gray-100 hover:text-green-500">Health</div>
            <a href="./community.html"><div class="p-4 hover:bg-gray-100 hover:text-green-500">Community</div></a>
            <a href="./dashboard.php"><div class="p-4 hover:bg-gray-100 hover:text-green-500">Dashboard</div></a>
        </div>
    </nav>

    <!-- Main Dashboard Content -->
        <!-- Sidebar (Visible on medium screens and up) -->
        <div class="bg-green-900 text-white flex flex-col w-64 p-5 h-screen hidden md:flex fixed">
            <div>
                <h1 class="text-3xl font-bold">Ayush Herb</h1>
            </div>
            <div class="space-y-8 text-[21px] flex flex-col mt-10 flex-grow">
                <a href="../index.html">
                    <div class="flex gap-4 hover:bg-green-600 hover:rounded-md pl-2 text-lg font-semibold pt-2 pb-2">
                        <i class="fa-solid fa-house"></i>
                        <h2>Home</h2>
                    </div>
                </a>
                <a href="./bookmark.html">
                    <div class="flex gap-4 hover:bg-green-600 hover:rounded-md pl-2 text-lg font-semibold pt-2 pb-2">
                        <i class="fa-solid fa-leaf"></i>
                        <h2>My Herbs</h2>
                    </div>
                </a>
                <a href="../index.html">
                    <div class="flex gap-4 hover:bg-green-600 hover:rounded-md pl-2 text-lg font-semibold pt-2 pb-2">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <h2>Explore Herbs</h2>
                    </div>
                </a>
                <a href="./gardeningtips.html">
                    <div class="flex gap-4 hover:bg-green-600 hover:rounded-md pl-2 text-lg font-semibold pt-2 pb-2">
                        <i class="fa-solid fa-seedling"></i>
                        <h2>Gardening Tips</h2>
                    </div>
                </a>
                <a href="./community.html">
                    <div class="flex gap-4 hover:bg-green-600 hover:rounded-md pl-2 text-lg font-semibold pr-2 pt-2 pb-2">
                        <i class="fa-solid fa-comments"></i>
                        <h2>Community Forum</h2>
                    </div>
                </a>
            </div>
            <a href="../login/logout.php" class="mt-auto">
                <div class="flex justify-center">
                    <button class="bg-red-400 hover:bg-red-500 py-2 px-20 rounded-md font-semibold">Logout</button>
                </div>
            </a>
        </div>

        <!-- Main Content Area -->
        <div class="bg-green-50 flex-1 p-7 md:pl-72 w-full">
            <div class="text-3xl">
                <h1 class="text-green-900 font-bold">Welcome Back, <?php echo htmlspecialchars($user_email); ?>!</h1>
            </div>
            <p class="text-gray-600 mt-2">Explore your personalized dashboard for herbal insights and more.</p>

            <!-- Quick Access Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5 mt-10">
                <a href="./bookmark.html">
                    <div class="w-full bg-green-200 rounded-xl p-6 space-y-2 shadow-md hover:scale-105 hover:shadow-xl transition-transform">
                        <div class="text-green-900 text-4xl">
                            <i class="fa-solid fa-leaf"></i>
                        </div>
                        <div class="text-green-900 text-xl font-bold">
                            <h1>View My Herbs</h1>
                        </div>
                        <div class="text-gray-600 text-lg">
                            <p>Check out your saved herbs and their details.</p>
                        </div>
                    </div>
                </a>
                <a href="../index.html">
                    <div class="w-full bg-green-200 rounded-xl p-6 space-y-2 shadow-md hover:scale-105 hover:shadow-xl transition-transform">
                        <div class="text-green-900 text-4xl">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                        <div class="text-green-900 text-xl font-bold">
                            <h1>Explore New Herbs</h1>
                        </div>
                        <div class="text-gray-600 text-lg">
                            <p>Discover new herbs and their benefits.</p>
                        </div>
                    </div>
                </a>
                <a href="./gardeningtips.html">
                    <div class="w-full bg-green-200 rounded-xl p-6 space-y-2 shadow-md hover:scale-105 hover:shadow-xl transition-transform">
                        <div class="text-green-900 text-4xl">
                            <i class="fa-solid fa-seedling"></i>
                        </div>
                        <div class="text-green-900 text-xl font-bold">
                            <h1>Gardening Tips</h1>
                        </div>
                        <div class="text-gray-600 text-lg">
                            <p>Learn tips and tricks for herb gardening.</p>
                        </div>
                    </div>
                </a>
                <a href="./community.html">
                    <div class="w-full bg-green-200 rounded-xl p-6 space-y-2 shadow-md hover:scale-105 hover:shadow-xl transition-transform">
                        <div class="text-green-900 text-4xl">
                            <i class="fa-solid fa-comments"></i>
                        </div>
                        <div class="text-green-900 text-xl font-bold">
                            <h1>Community Forum</h1>
                        </div>
                        <div class="text-gray-600 text-lg">
                            <p>Join discussions with fellow herb enthusiasts.</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Community Forum Section -->
            <div class="bg-green-200 mt-10 p-8 rounded-xl space-y-4 shadow-xl relative">
                <h1 class="text-green-900 text-2xl font-bold">Community Forum</h1>
                <div class="bg-white p-4 rounded-xl">
                    <h1 class="text-gray-600 text-xl font-bold">Can I connect with you</h1>
                    <p class="text-gray-500 text-lg">Started by ayush@gmail.com - 0 replies</p>
                </div>
                <div class="bg-white p-4 rounded-xl">
                    <h1 class="text-gray-600 text-xl font-bold">Can I connect with you</h1>
                    <p class="text-gray-500 text-lg">Started by ayush@gmail.com - 0 replies</p>
                </div>
                <div class="bg-white p-4 rounded-xl">
                    <h1 class="text-gray-600 text-xl font-bold">Can I connect with you</h1>
                    <p class="text-gray-500 text-lg">Started by ayush@gmail.com - 0 replies</p>
                </div>
                <div class="absolute text-green-800 hover:text-green-900 right-10 bottom-1 font-semibold">
                    <a href="community.html">View All Discussions</a>
                </div>
            </div>

            <!-- Latest News Section -->
            <div class="bg-green-200 mt-10 p-8 rounded-xl space-y-4 shadow-xl">
                <h1 class="text-2xl text-green-900 font-bold">Latest News</h1>
                <p class="text-red-400 font-semibold">We will update soon. Stay Alert</p>
            </div>
        </div>

    <!-- Scripts -->
    <script src="../script.js"></script>
</body>
</html>