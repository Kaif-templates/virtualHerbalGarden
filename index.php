<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>

<body>
    <nav id="navbar" class="flex justify-between p-4 shadow fixed w-full bg-white top-0 z-50">
        
        <div class="text-4xl text-green-800 font-semibold font-mono ">
           Ayush Herb
        </div>
    
        <!-- Desktop Menu -->
        <div class="hidden sm:flex space-x-6 text-green-900 text-lg">

            <a href="./index.html">
            <div class="hover:underline hover:text-green-500">Home</div></a>

            <a href="./login/login.php">
         <div class="hover:underline hover:text-green-500">Login</div></a>
            
            <a href="./Health/health.html"><div class="hover:underline hover:text-green-500">Health</div></a>

            <a href="./Arun/community.php"><div class="hover:underline hover:text-green-500">Community</div></a>

            <a href="./Dashboard/dashboard.php">
                <div class="hover:underline hover:text-green-500">Dashboard</div>
            </a>
        </div>
    
        
        <div class="md:hidden cursor-pointer" id="menu-btn">
            <i class="fa-solid fa-bars text-xl"></i>
        </div>
    
        
        <div class="hidden lg:flex space-x-3">
            <i class="fa-solid fa-magnifying-glass my-auto text-lg text-green-800"></i>
            <input type="text" class="flex-grow p-2 border rounded-xl border-green-300 placeholder:text-gray-400" placeholder="Search for plants...">

            <a href="http://localhost/project/quizz/quiz.php" class="inline-block">
                <div class="px-4 py-2 border border-green-800 text-green-800 rounded-xl bg-green-50 hover:bg-green-800 hover:text-white transition-colors duration-200 flex items-center">
                  <i class="fas fa-question-circle mr-2"></i> Quiz
                </div>
              </a>
              
        </div>
    
        
        <div class="hidden flex-col bg-white absolute top-14 left-0 w-full shadow-md sm:hidden" id="mobile-menu">
            <div class="p-4 hover:bg-gray-100 hover:text-green-500">Home</div>
            <a href="./login/login.php">
            <div class="p-4 hover:bg-gray-100 hover:text-green-500">Login</div>
            </a>
            <a href="./Health/health.html"><div class="p-4 hover:bg-gray-100 hover:text-green-500">Health</div></a>
            <a href="./Arun/community.php">
            <div class="p-4 hover:bg-gray-100 hover:text-green-500">Community</div>
            </a>
            <a href="./Dashboard/dashboard.php">
                <div class="p-4 hover:bg-gray-100 hover:text-green-500">Dashboard</div>
            </a>
        </div>
    </nav>
    <main>
        <div class="bg-sec-color m-4 md:m-12 lg:m-16 p-6 md:p-10 lg:p-16 shadow-lg rounded-lg flex flex-col md:flex-row space-y-8 md:space-y-0 md:space-x-8 items-center justify-center mt-20 sm:mt-0">
            <div class="flex flex-col w-full md:w-6/12 text-center md:text-left">
                <h1 class="leading-tight mb-6 md:mb-12 text-3xl md:text-5xl text-green-800 font-bold">Step Into Nature's Pharmacy: Your Virtual Herbal Haven</h1>
                <p class="text-gray-600 text-lg md:text-xl">Explore a world of traditional healing with our curated collection of medicinal plants. Unveil the ancient wisdom of AYUSH and embrace the natural way to well-being.</p>
                <button class="bg-green-800 text-white px-6 py-2 text-lg rounded-lg mt-8 w-full md:w-48 transition-transform transform hover:scale-105 hover:bg-green-600 hover:shadow-lg hover:text-gray-100 duration-300 ease-in-out">Get Started</button>
            </div>
            <div class="w-full md:w-4/12 flex justify-center md:mt-16 lg:mt-28">
                <img src="./assets/herbs img.jpg" alt="Nature" class="h-64 md:h-5/6 rounded-full object-cover lg:mb-20 lg:ml-32 ">
            </div>
        </div>
    
        <!-- Plant Listing Section -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 mx-4 sm:mx-8 md:mx-12 lg:mx-16 mt-12 md:mt-16 lg:mt-28 gap-6">


            <div  class="h-96 shadow-lg rounded-xl bg-white relative transform hover:scale-105 transition ease-in-out duration-200">
                <img src="./assets/aloevera.jpg" alt="Aloe Vera"  class="px-4 pt-3 h-72 w-full rounded-t-2xl object-cover " alt="Aloe Vera" onclick="openModal('plantModal1') ">

                <div class="px-4 py-2">
                    <p class="font-bold text-2xl text-gray-700">Aloe Vera</p>
                    <p class="text-gray-500">Succulent</p>
                </div>
                <i class="fa-solid fa-bookmark text-2xl text-gray-600 absolute bottom-12 right-6"></i>
            </div>


            <div class="h-96 shadow-lg rounded-xl bg-white relative transform hover:scale-105 transition ease-in-out duration-200">
                <img src="./assets/ashwagandha.jpg" alt="Ashwagandha" class="px-4 pt-3 h-72 w-full rounded-t-2xl object-cover" onclick="openModal('plantModal2')">
                <div class="px-4 py-2">
                    <p class="font-bold text-2xl text-gray-700">Ashwagandha</p>
                    <p class="text-gray-500">Shrub</p>
                </div>
                <i class="fa-solid fa-bookmark text-2xl text-gray-600 absolute bottom-12 right-6"></i>
            </div>


            <div class="h-96 shadow-lg rounded-xl bg-white relative transform hover:scale-105 transition ease-in-out duration-200">
                <img src="./assets/cactus.jpg" alt="Aloe Vera" class="px-4 pt-3 h-72 w-full rounded-t-2xl object-cover" onclick="openModal('plantModal3')">
                <div class="px-4 py-2">
                    <p class="font-bold text-2xl text-gray-700"> Cactus</p>
                    <p class="text-gray-500">Succulent</p>
                </div>
                <i class="fa-solid fa-bookmark text-2xl text-gray-600 absolute bottom-12 right-6"></i>
            </div>


            <div class="h-96 shadow-lg rounded-xl bg-white relative transform hover:scale-105 transition ease-in-out duration-200">
                <img src="./assets/dandelion2.webp" alt="Aloe Vera" class="px-4 pt-3 h-72 w-full rounded-t-2xl object-cover">
                <div class="px-4 py-2">
                    <p class="font-bold text-2xl text-gray-700">Dandelion</p>
                    <p class="text-gray-500">Flowering Plant</p>
                </div>
                <i class="fa-solid fa-bookmark text-2xl text-gray-600 absolute bottom-12 right-6"></i>
            </div>


            <div class="h-96 shadow-lg rounded-xl bg-white relative transform hover:scale-105 transition ease-in-out duration-200">
                <img src="./assets/eucalyptus.webp" alt="Aloe Vera" class="px-4 pt-3 h-72 w-full rounded-t-2xl object-cover">
                <div class="px-4 py-2">
                    <p class="font-bold text-2xl text-gray-700">Eucalyptus</p>
                    <p class="text-gray-500">Tree</p>
                </div>
                <i class="fa-solid fa-bookmark text-2xl text-gray-600 absolute bottom-12 right-6"></i>
            </div>

            
            <div class="h-96 shadow-lg rounded-xl bg-white relative transform hover:scale-105 transition ease-in-out duration-200">
                <img src="./assets/ginger.jpg" alt="Aloe Vera" class="px-4 pt-3 h-72 w-full rounded-t-2xl object-cover">
                <div class="px-4 py-2">
                    <p class="font-bold text-2xl text-gray-700">Ginger</p>
                    <p class="text-gray-500">Herb</p>
                </div>
                <i class="fa-solid fa-bookmark text-2xl text-gray-600 absolute bottom-12 right-6"></i>
            </div>


            <div class="h-96 shadow-lg rounded-xl bg-white relative transform hover:scale-105 transition ease-in-out duration-200">
                <img src="./assets/hibiscus.jpg" alt="Aloe Vera" class="px-4 pt-3 h-72 w-full rounded-t-2xl object-cover">
                <div class="px-4 py-2">
                    <p class="font-bold text-2xl text-gray-700">Hibiscus</p>
                    <p class="text-gray-500">Flowering Plant

                    </p>
                </div>
                <i class="fa-solid fa-bookmark text-2xl text-gray-600 absolute bottom-12 right-6"></i>
            </div>


            <div class="h-96 shadow-lg rounded-xl bg-white relative transform hover:scale-105 transition ease-in-out duration-200">
                <img src="./assets/lavender.jpg" alt="Aloe Vera" class="px-4 pt-3 h-72 w-full rounded-t-2xl object-cover">
                <div class="px-4 py-2">
                    <p class="font-bold text-2xl text-gray-700">Lavender</p>
                    <p class="text-gray-500">Flowering Plant</p>
                </div>
                <i class="fa-solid fa-bookmark text-2xl text-gray-600 absolute bottom-12 right-6"></i>
            </div>


            <div class="h-96 shadow-lg rounded-xl bg-white relative transform hover:scale-105 transition ease-in-out duration-200">
                <img src="./assets/neem.webp" alt="Aloe Vera" class="px-4 pt-3 h-72 w-full rounded-t-2xl object-cover">
                <div class="px-4 py-2">
                    <p class="font-bold text-2xl text-gray-700">Neem</p>
                    <p class="text-gray-500">Tree</p>
                </div>
                <i class="fa-solid fa-bookmark text-2xl text-gray-600 absolute bottom-12 right-6"></i>
            </div>


            <div class="h-96 shadow-lg rounded-xl bg-white relative transform hover:scale-105 transition ease-in-out duration-200">
                <img src="./assets/rosemary.jpg" alt="Aloe Vera" class="px-4 pt-3 h-72 w-full rounded-t-2xl object-cover">
                <div class="px-4 py-2">
                    <p class="font-bold text-2xl text-gray-700">Rosemary</p>
                    <p class="text-gray-500">Herb</p>
                </div>
                <i class="fa-solid fa-bookmark text-2xl text-gray-600 absolute bottom-12 right-6"></i>
            </div>


            <div class="h-96 shadow-lg rounded-xl bg-white relative transform hover:scale-105 transition ease-in-out duration-200">
                <img src="./assets/sage.webp" alt="Aloe Vera" class="px-4 pt-3 h-72 w-full rounded-t-2xl object-cover">
                <div class="px-4 py-2">
                    <p class="font-bold text-2xl text-gray-700">Sage</p>
                    <p class="text-gray-500">Herb</p>
                </div>
                <i class="fa-solid fa-bookmark text-2xl text-gray-600 absolute bottom-12 right-6"></i>
            </div>


            <div class="h-96 shadow-lg rounded-xl bg-white relative transform hover:scale-105 transition ease-in-out duration-200">
                <img src="./assets/tulsi.webp" alt="Aloe Vera" class="px-4 pt-3 h-72 w-full rounded-t-2xl object-cover">
                <div class="px-4 py-2">
                    <p class="font-bold text-2xl text-gray-700">Tulsi
                    </p>
                    <p class="text-gray-500">Herb</p>
                </div>
                <i class="fa-solid fa-bookmark text-2xl text-gray-600 absolute bottom-12 right-6"></i>
            </div>
            
           
        </div>
    
    

       <!-- Variety Section -->
<div class="text-center mt-16 px-6 md:px-12 lg:px-20">
    <div class="text-4xl sm:text-5xl font-bold text-green-800">
        Discover the Power of Natural Healing
    </div>
    <div class="mt-4 sm:mt-6 text-lg sm:text-xl opacity-70">
        Explore a wide variety of time-honored practices designed to promote holistic wellness and rejuvenate
        your body and mind.
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 sm:gap-8 mt-8 sm:mt-12">
        
        <div class="p-4 sm:p-6 bg-green-50 rounded-lg shadow-md hover:shadow-lg transition-transform hover:scale-105 duration-300">
            <div class="text-4xl sm:text-5xl mb-4 text-center">🌿</div>
            <h3 class="text-lg sm:text-2xl font-semibold text-gray-800 mb-2 text-center">Ayurveda</h3>
            <p class="text-gray-600 text-sm sm:text-base text-center">
                Harness the power of ancient Ayurvedic remedies to restore balance and vitality in your life.
            </p>
            <p class="text-center font-bold text-green-600 mt-4">Find Your Balance</p>
        </div>

        <div class="p-4 sm:p-6 bg-yellow-50 rounded-lg shadow-md hover:shadow-lg transition-transform hover:scale-105 duration-300">
            <div class="text-4xl sm:text-5xl mb-4 text-center">🧘</div>
            <h3 class="text-lg sm:text-2xl font-semibold text-gray-800 mb-2 text-center">Yoga & Naturopathy</h3>
            <p class="text-gray-600 text-sm sm:text-base text-center">
                Embrace the union of body and mind through Yoga and natural therapies for a healthier you.
            </p>
            <p class="text-center font-bold text-yellow-600 mt-4">Connect Mind & Body</p>
        </div>

        <div class="p-4 sm:p-6 bg-indigo-50 rounded-lg shadow-md hover:shadow-lg transition-transform hover:scale-105 duration-300">
            <div class="text-4xl sm:text-5xl mb-4 text-center">🌱</div>
            <h3 class="text-lg sm:text-2xl font-semibold text-gray-800 mb-2 text-center">Unani</h3>
            <p class="text-gray-600 text-sm sm:text-base text-center">
                Explore the time-tested Unani system that promotes holistic health with natural healing techniques.
            </p>
            <p class="text-center font-bold text-indigo-600 mt-4">Holistic Healing</p>
        </div>

        <div class="p-4 sm:p-6 bg-red-50 rounded-lg shadow-md hover:shadow-lg transition-transform hover:scale-105 duration-300">
            <div class="text-4xl sm:text-5xl mb-4 text-center">🌼</div>
            <h3 class="text-lg sm:text-2xl font-semibold text-gray-800 mb-2 text-center">Siddha</h3>
            <p class="text-gray-600 text-sm sm:text-base text-center">
                Discover Siddha medicine, a traditional system that emphasizes balance and natural treatments.
            </p>
            <p class="text-center font-bold text-red-600 mt-4">Ancient Wisdom, Modern Health</p>
        </div>

        <div class="p-4 sm:p-6 bg-teal-50 rounded-lg shadow-md hover:shadow-lg transition-transform hover:scale-105 duration-300">
            <div class="text-4xl sm:text-5xl mb-4 text-center">💧</div>
            <h3 class="text-lg sm:text-2xl font-semibold text-gray-800 mb-2 text-center">Homeopathy</h3>
            <p class="text-gray-600 text-sm sm:text-base text-center">
                Unlock the gentle power of Homeopathy to address ailments and improve overall well-being.
            </p>
            <p class="text-center font-bold text-teal-600 mt-4">Gentle, Effective Care</p>
        </div>

    </div>
</div>

<!-- Footer Section -->
<footer class=" text-green-800 py-12 px-6 md:px-10 lg:px-20 shadow-xl border-t-2 border mt-6">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 items-center">
        
        <div class="flex justify-center lg:justify-start">
            <h1 class="text-6xl font-bold font-sans">Ayush Herb</h1>
        </div>

        
        <div class="text-center lg:text-left">
            <div class="flex items-center justify-center lg:justify-start mb-4">
                <i class="fa-solid fa-location-dot text-green-800 text-2xl mr-4"></i>
                <p class="text-lg text-green-800">
                    <span class="block">Lovely Professional University,</span>
                    Jalandhar, 144411 (Punjab)
                </p>
            </div>
            <div class="flex items-center justify-center lg:justify-start mb-4">
                <i class="fa-solid fa-envelope text-green-800 text-2xl mr-4"></i>
                <p class="text-lg text-green-800">2784alok@gmail.com</p>
            </div>
        </div>

        
        <div class="text-center lg:text-left">
            <span class="text-xl font-bold text-green-800">Technology Stack Used:</span>
            <div class="flex justify-center lg:justify-start mt-6 space-x-4">
                <a href="#" class="text-3xl hover:text-sub-color">
                    <i class="fab fa-node-js text-4xl text-green-500"></i>
                </a>
                <a href="#" class="text-3xl hover:text-sub-color">
                    <i class="fas fa-database text-4xl text-yellow-500"></i>
                </a>
                <a href="#" class="text-3xl hover:text-sub-color">
                    <i class="fas fa-vr-cardboard text-4xl text-purple-500"></i>
                </a>
                <a href="#" class="text-3xl hover:text-sub-color">
                    <i class="fab fa-css3-alt text-4xl text-blue-600"></i>
                </a>
                <a href="#" class="text-3xl hover:text-sub-color">
                    <i class="fa-brands fa-php text-4xl text-blue-500"></i>
                </a>
            </div>
        </div>

    </div>

    
    <h3 class="text-center mt-10 pt-6 border-t-2 border-gray-300 text-lg font-medium">
        © Copyright 2025 AYUSH Herb - All Rights Reserved. Designed and Developed by Alok, Arun, Kaif & Gaurav
    </h3>
</footer>

    </main>






    <!-- popup images codes -->


    <!-- Modal Hidden by Default -->
    <div id="plantModal1"
        class="fixed top-0 left-0 w-full h-full  bg-transparent flex items-center justify-center hidden">
        <div class="bg-white rounded-lg w-3/4 h-screen p-4 relative overflow-hidden">
            <button onclick="closeModal('plantModal1')"
                class="absolute top-2 right-3 text-3xl font-bold text-gray-700">&times;</button>

            <div class="flex flex-col md:flex-row gap-4 h-full">

                
                <div class="w-full md:w-1/2 flex flex-col overflow-y-auto pr-2 ">
                    <iframe title="Aloe vera plant" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share width="w-full" height="50%" src="https://sketchfab.com/models/66c6699e50ab4863989777f920a981dd/embed?dnt=1"> </iframe> 

                    <div class="overflow-x-auto flex gap-3 pb-2 ">
                        <img src="./assets/aloevera2.jpg" class="w-full h-60 rounded-lg object-cover">
                        
                        <img src="./assets/aloevera3.jpg" class=" h-60 rounded-lg object-cover">
                        <img src="./assets/aloevera4.jpg" class=" h-60 rounded-lg object-cover">
                    </div>
                </div>

                <div class="w-full md:w-1/2 flex flex-col gap-3 overflow-y-auto pr-2 h-full text-gray-700">

                    <h2 class="text-2xl font-bold">Aloe Vera</h2>

                    <div class=" flex flex-col gap-3 overflow-y-auto pr-2 h-2/4 w-full text-xl">
                        <p class="text-gray-700">Aloe vera is a succulent plant valued for its medicinal properties,
                            especially for skin care, wound healing, and digestion. It has been used in Ayurveda and
                            traditional medicine systems for centuries.</p>
                        <p class="text-gray-700"><strong>Region:</strong> Tropical</p>
                        <p class="text-gray-700"><strong>Common Names:</strong> English: Aloe Vera, Hindi: Ghritkumari, Tamil: Sotru Katralai,
                            Telugu: Kalabanda, Sanskrit: Kumari</p>
                        <p class="text-gray-700"><strong>Type:</strong>Succulent</p>

                        <p class="text-gray-700"><strong> Habitat:</strong> Found in hot, arid climates and well-drained soils. Thrives in dry regions with minimal water. It can grow both outdoors and indoors, making it popular as a houseplant.</p>
                        <p class="text-gray-700"><strong> Botanical Name:</strong> Aloe barbadensis miller</p>
                        <p class="text-gray-700"><strong> Medicinal Uses:</strong> Aloe vera is renowned for its wide range of health benefits: Skin Care: Helps soothe burns, wounds, and sunburns. Anti-inflammatory: Reduces inflammation in the skin and joints. Digestive Aid: Aloe juice helps relieve constipation and promotes digestion. Immune System: Contains antioxidants that boost immunity. Wound Healing: Accelerates the healing of cuts and abrasions. Anti-aging: Used in cosmetics for moisturizing and reducing wrinkles. Hair Care: Promotes hair growth and treats scalp conditions.</p>

                        <p class="text-gray-700"><strong>Methods of Cultivation:</strong>Climate Requirements: Requires a warm climate with temperatures between 25°C to 40°C. Does not tolerate frost or extreme cold. Can grow indoors or outdoors in sunny or partially shaded areas. Soil Requirements: Prefers well-drained sandy or loamy soil with good aeration. Optimal pH: 6.0–7.5 (slightly acidic to neutral). It thrives even in poor soils, provided they do not retain excess water. Propagation: Grown from offshoots (pups): Small plants that grow at the base of the parent plant. These pups are removed and replanted in new locations. Irrigation: Requires minimal water. Water only when the soil is completely dry. Overwatering should be avoided as it can cause root rot. Watering once every 3-4 weeks is sufficient in dry conditions. Planting Season: Best time to plant is spring or early summer for optimal growth. Can also be planted in monsoon regions, provided the soil is well-drained. Pest and Disease Control: Aloe vera is relatively resistant to pests. However, it can occasionally be affected by mealybugs, aphids, or fungal infections. Use organic insecticides or neem oil if needed. Harvesting: Ready for harvest after 6-8 months of planting. Outer leaves are removed carefully without damaging the inner core. Fresh leaves are cut and processed to extract the gel, which can be used immediately or stored.

                        </p>

                        <p class="text-gray-700"> <strong> ExtractionProcess: </strong>Leaf Harvesting: Fully matured leaves (outermost) are selected. Washing and Cleaning: The leaves are cleaned to remove any dirt or bacteria. Filleting: The thick outer layer of the leaf is removed, leaving the inner gel. Stabilization: The gel is stabilized through cold processing to maintain its bioactive components. Filtration: The gel is filtered to remove any unwanted particles or fibers. Packaging: Finally, the pure Aloe Vera gel is packaged for use in various industries.

                        </p>

                        <p class="text-gray-700"> <strong> Environmental Impact: </strong>Water Conservation: Aloe Vera requires minimal water and can thrive in arid, drought-prone regions. Soil Conservation: Aloe Vera cultivation helps prevent soil erosion due to its strong root system. Sustainable Crop: As it grows in poor soils and needs low maintenance, it’s considered an eco-friendly crop.
                        </p>
                        
                        <p class="text-gray-700"><strong> Reasons To Grow Outdoors: </strong>Natural Habitat: Aloe Vera is a desert plant, so it naturally thrives in hot, arid environments with plenty of sunlight. Larger Growth: Outdoor Aloe Vera plants can grow larger and produce more "pups" (offshoots) that can be replanted. Direct Sunlight: Outdoors, Aloe Vera can enjoy full sunlight (6-8 hours) and will grow more vigorously. Minimal Watering: Outdoor Aloe Vera requires little water and is drought-tolerant, making it easy to care for in dry climates. Where to Place Aloe Vera Outdoors: Sunlight: Place it in an area where it receives full sun but ensure it's protected from intense afternoon heat in extremely hot climates. Soil: Plant it in well-drained, sandy, or loamy soil. Raised beds or pots with good drainage are ideal. Temperature: It should be placed in a spot where the temperature stays between 25°C to 40°C (77°F to 104°F). Aloe Vera cannot tolerate frost or freezing temperatures, so if you live in a cooler climate, bring the plant indoors during winter or cover it. Why Aloe Vera Helps in Both Settings: Indoors: Aloe Vera improves air quality and offers easy access to its gel for skincare or minor burns, cuts, and insect bites. Outdoors: Aloe Vera benefits from the natural sun, thriving in warm climates and contributing to outdoor garden aesthetics. It's drought-tolerant and helps in soil conservation due to its root system.
                        </p>


                        <p class="text-gray-700"><strong> Nutritional Benefits:</strong> Minerals: Contains calcium, magnesium, zinc, chromium, sodium, iron, potassium, and manganese. Amino Acids: Out of the 22 essential amino acids required by humans, Aloe Vera provides 18. Fatty Acids: Includes both cholesterol-lowering and anti-inflammatory fatty acids. Enzymes: The gel contains various enzymes like lipase and amylase that assist in the breakdown of sugars and fats.
                        </p>


                        <p class="text-gray-700"><strong> Products: </strong>Aloe Vera is used in a variety of forms in the market: Aloe Vera Gel: Used in skincare and for direct application to burns, cuts, and other skin conditions. Aloe Vera Juice: Consumed for digestive benefits and detoxification. Aloe Vera Powder: Used in making capsules, supplements, and cosmetics. Aloe Vera Creams and Lotions: Used in beauty products to hydrate, soothe, and rejuvenate the skin. Aloe Vera Capsules/Tablets: Available as dietary supplements for general health and wellness. Future Trends in Aloe Vera Research: Nanotechnology: Research is exploring the use of Aloe Vera in nanoparticle production for drug delivery systems. Bioplastics: The gel and fibers of Aloe Vera are being studied for their potential use in creating biodegradable plastics. Agricultural Applications: Aloe Vera extracts are being explored as natural pesticides and fertilizers due to their antimicrobial properties.Indoor Plant: Aloe Vera is an excellent indoor plant, especially for homes or offices where you want to enjoy its air-purifying qualities and easy care.
                        </p>
                        
                       
                        
                    </div>


                    <!-- Audio -->
                    <audio controls class="w-full">
                        <source src="./audio/aloe vera.mp3" type="audio/mpeg">
                    </audio>

                    <!-- Notes -->
                    <label for="notes" class="text-gray-700 font-bold">Notes:</label>
                    <textarea id="notes" rows="4" class="border rounded-md p-2 w-full h-56"
                        placeholder="Write your notes here..."></textarea>

                    <!-- Buttons -->
                    <div class="flex gap-3 mt-2">
                       <a href="./assets/aloevera.jpg" ><button class="bg-blue-500 text-white px-4 py-2 rounded-md">Download</button></a>
                        <button class="bg-green-500 text-white px-4 py-2 rounded-md">Share</button>
                        <button class="bg-gray-500 text-white px-4 py-2 rounded-md">Comment</button>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- Plant 2 -->
    
    <div id="plantModal2"
        class="fixed top-0 left-0 w-full h-full  bg-transparent flex items-center justify-center hidden">
        <div class="bg-white rounded-lg w-3/4 h-screen p-4 relative overflow-hidden">
            <button onclick="closeModal('plantModal2')"
                class="absolute top-2 right-3 text-3xl font-bold text-gray-700">&times;</button>

            <div class="flex flex-col md:flex-row gap-4 h-full">

                
                <div class="w-full md:w-1/2 flex flex-col overflow-y-auto pr-2 ">
                    <iframe title="Ficus ginseng" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share width="w-full" height="50%" src="https://sketchfab.com/models/88b1bf03a6254dc2b56cec4dce3f22f1/embed"> </iframe> 

                    <div class="overflow-x-auto flex gap-3 pb-2 ">
                        <img src="./assets/aloevera2.jpg" class="w-full h-60 rounded-lg object-cover">
                        
                        <img src="./assets/aloevera3.jpg" class=" h-60 rounded-lg object-cover">
                        <img src="./assets/aloevera4.jpg" class=" h-60 rounded-lg object-cover">
                    </div>
                </div>

                <div class="w-full md:w-1/2 flex flex-col gap-3 overflow-y-auto pr-2 h-full text-gray-700">

                    <h2 class="text-2xl font-bold">Ashwagandha</h2>

                    <div class=" flex flex-col gap-3 overflow-y-auto pr-2 h-2/4 w-full text-xl">
                        <p class="text-gray-700">Ashwagandha (Withania somnifera), also known as Indian ginseng or winter cherry, is a highly valued herb in Ayurvedic medicine. It is known for its adaptogenic properties, helping the body resist stress, enhance energy levels, and improve overall well-being.</p>
                        <p class="text-gray-700"><strong>Region:</strong> Arid</p>
                        <p class="text-gray-700"><strong>Common Names:</strong>  Sanskrit: Ashwagandha (meaning "smell of horse") Hindi: Asgandh English: Indian Ginseng, Winter Cherry Tamil: Amukkara Telugu: Penneru Gadda</p>
                        <p class="text-gray-700"><strong>Type:</strong>Shrub</p>

                        <p class="text-gray-700"><strong> Habitat:</strong> FHabitat: Thrives in dry and subtropical climates. Found naturally in rocky and sandy soils, such as in parts of Rajasthan, Madhya Pradesh, and Gujarat in India. </p>
                        <p class="text-gray-700"><strong> Botanical Name:</strong> Withania somnifera</p>
                        <p class="text-gray-700"><strong> Medicinal Uses:</strong> Ashwagandha has been used in Ayurvedic medicine for centuries to treat various ailments: Stress relief: Reduces cortisol levels, helping alleviate stress and anxiety. Energy and stamina: Boosts physical endurance and energy levels. Cognitive function: Improves memory, concentration, and mental clarity. Immunity: Enhances the body’s immune system. Anti-inflammatory: Helps with conditions like arthritis. Sleep aid: Promotes restful sleep and treats insomnia. Hormonal balance: Improves reproductive health and fertility.</p>

                        <p class="text-gray-700"><strong>Methods of Cultivation:</strong> Climate Requirements: Grows best in semi-arid and subtropical regions. Requires moderate rainfall (600-750 mm), but too much water can harm the plant. Can tolerate temperatures between 20°C to 35°C. Soil Requirements: Prefers well-drained sandy or loamy soil with good aeration. pH range: 7.5 to 8 (neutral to slightly alkaline). Propagation: Grown from seeds: Seeds are sown directly in the soil or started in nursery beds. Optimal seed rate: 5-7 kg per hectare. Planting Season: Best sown during the early monsoon season (June-July). Transplanting can be done once seedlings are 30-35 days old. Irrigation: Requires minimal water; irrigation is needed only during dry spells. Overwatering can lead to root rot. Pest and Disease Control: Susceptible to leaf spot disease and root rot in poorly drained soils. Insects like aphids can be controlled with organic insecticides. Harvesting: Ready for harvest 150-180 days after planting. Roots are the primary medicinal part. They are dug out, cleaned, dried, and processed. Yields around 400-500 kg of roots per hectare.</p>

                        <p class="text-gray-700"> <strong> ExtractionProcess: </strong>

                        </p>

                        <p class="text-gray-700"> <strong> Environmental Impact: </strong>
                        </p>
                        
                        <p class="text-gray-700"><strong> Reasons To Grow Outdoors: </strong>Natural Habitat: Aloe Vera is a desert plant, so it naturally thrives in hot, arid environments with plenty of sunlight. Larger Growth: Outdoor Aloe Vera plants can grow larger and produce more "pups" (offshoots) that can be replanted. Direct Sunlight: Outdoors, Aloe Vera can enjoy full sunlight (6-8 hours) and will grow more vigorously. Minimal Watering: Outdoor Aloe Vera requires little water and is drought-tolerant, making it easy to care for in dry climates. Where to Place Aloe Vera Outdoors: Sunlight: Place it in an area where it receives full sun but ensure it's protected from intense afternoon heat in extremely hot climates. Soil: Plant it in well-drained, sandy, or loamy soil. Raised beds or pots with good drainage are ideal. Temperature: It should be placed in a spot where the temperature stays between 25°C to 40°C (77°F to 104°F). Aloe Vera cannot tolerate frost or freezing temperatures, so if you live in a cooler climate, bring the plant indoors during winter or cover it. Why Aloe Vera Helps in Both Settings: Indoors: Aloe Vera improves air quality and offers easy access to its gel for skincare or minor burns, cuts, and insect bites. Outdoors: Aloe Vera benefits from the natural sun, thriving in warm climates and contributing to outdoor garden aesthetics. It's drought-tolerant and helps in soil conservation due to its root system.
                        </p>


                        <p class="text-gray-700"><strong> Nutritional Benefits:</strong> Minerals: Contains calcium, magnesium, zinc, chromium, sodium, iron, potassium, and manganese. Amino Acids: Out of the 22 essential amino acids required by humans, Aloe Vera provides 18. Fatty Acids: Includes both cholesterol-lowering and anti-inflammatory fatty acids. Enzymes: The gel contains various enzymes like lipase and amylase that assist in the breakdown of sugars and fats.
                        </p>


                        <p class="text-gray-700"><strong> Products: </strong>Aloe Vera is used in a variety of forms in the market: Aloe Vera Gel: Used in skincare and for direct application to burns, cuts, and other skin conditions. Aloe Vera Juice: Consumed for digestive benefits and detoxification. Aloe Vera Powder: Used in making capsules, supplements, and cosmetics. Aloe Vera Creams and Lotions: Used in beauty products to hydrate, soothe, and rejuvenate the skin. Aloe Vera Capsules/Tablets: Available as dietary supplements for general health and wellness. Future Trends in Aloe Vera Research: Nanotechnology: Research is exploring the use of Aloe Vera in nanoparticle production for drug delivery systems. Bioplastics: The gel and fibers of Aloe Vera are being studied for their potential use in creating biodegradable plastics. Agricultural Applications: Aloe Vera extracts are being explored as natural pesticides and fertilizers due to their antimicrobial properties.Indoor Plant: Aloe Vera is an excellent indoor plant, especially for homes or offices where you want to enjoy its air-purifying qualities and easy care.
                        </p>
                        
                       
                        
                    </div>


                    <!-- Audio -->
                    <audio controls class="w-full">
                        <source src="./audio/ashwaganda.mp3" type="audio/mpeg">
                    </audio>

                    <!-- Notes -->
                    <label for="notes" class="text-gray-700 font-bold">Notes:</label>
                    <textarea id="notes" rows="4" class="border rounded-md p-2 w-full h-56"
                        placeholder="Write your notes here..."></textarea>

                    <!-- Buttons -->
                    <div class="flex gap-3 mt-2">
                       <a href="./assets/aloevera.jpg" ><button class="bg-blue-500 text-white px-4 py-2 rounded-md">Download</button></a>
                        <button class="bg-green-500 text-white px-4 py-2 rounded-md">Share</button>
                        <button class="bg-gray-500 text-white px-4 py-2 rounded-md">Comment</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>
