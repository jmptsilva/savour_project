<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Savour - Save the food, save the planet</title>
</head>

<body>
    @include('welcome/navbar')
    <section class="py-20 bg-white">
        <div class="flex flex-col px-8 mx-auto space-y-12 max-w-7xl xl:px-12">
            <div class="relative">
                <h2 class="w-full text-3xl font-bold text-center sm:text-4xl md:text-5xl"> WHO WE ARE</h2>
                <p class="w-full py-8 mx-auto -mt-2 text-lg text-center text-gray-700 intro sm:max-w-3xl">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio perferendis, incidunt iste rem quibusdam aliquid nemo omnis quisquam dignissimos rerum ullam itaque, officia earum magni enim similique alias consectetur quae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam earum quisquam nulla, distinctio sint quia quo voluptates error, nisi, laborum saepe dicta id cumque nobis blanditiis debitis accusantium dolor eaque?</p>
            </div>
            <div class="flex flex-col mb-8 animated fadeIn sm:flex-row">
                <div class="flex items-center mb-8 sm:w-1/2 md:w-5/12 sm:order-last">
                    <img class="rounded-lg shadow-xl" src="assets/img/carry-food.jpeg" alt="">
                </div>
                <div class="flex flex-col justify-center mt-5 mb-8 md:mt-0 sm:w-1/2 md:w-7/12 sm:pr-16">
                    <p class="mb-2 text-sm font-semibold leading-none text-left text-[#057840] uppercase">For User</p>
                    <h3 class="mt-2 text-2xl sm:text-left md:text-4xl">WHAT WE DO</h3>
                    <p class="mt-5 text-lg text-gray-700 text md:text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit vel reprehenderit ipsam, iure provident minus officiis tempore ex error. Repellat blanditiis animi temporibus facilis qui natus magni pariatur ullam aliquid.</p>
                </div>
            </div>
            <div class="flex flex-col mb-8 animated fadeIn sm:flex-row">
                <div class="flex items-center mb-8 sm:w-1/2 md:w-5/12">
                    <img class="rounded-lg shadow-xl" src="assets/img/foodwaste.jpeg" alt="">
                </div>
                <div class="flex flex-col justify-center mt-5 mb-8 md:mt-0 sm:w-1/2 md:w-7/12 sm:pl-16">
                    <p class="mb-2 text-sm font-semibold leading-none text-left text-[#00391d] uppercase">For restaurant</p>
                    <h3 class="mt-2 text-2xl sm:text-left md:text-4xl">WHAT WE OFFER</h3>
                    <p class="mt-5 text-lg text-gray-700 text md:text-left">Backed by data, these templates have been crafted for ultimate optimization. Now, converting your visitors into customers is easier than ever before.</p>
                </div>
            </div>
            <div class="flex flex-col mb-8 animated fadeIn sm:flex-row">
                <div class="flex items-center mb-8 sm:w-1/2 md:w-5/12 sm:order-last">
                    <img class="rounded-lg shadow-xl" src="/assets/img/food-recycling.png" alt="">
                </div>
                <div class="flex flex-col justify-center mt-5 mb-8 md:mt-0 sm:w-1/2 md:w-7/12 sm:pr-16">
                    <p class="mb-2 text-sm font-semibold leading-none text-left text-[#00391d] uppercase">For our planet</p>
                    <h3 class="mt-2 text-2xl sm:text-left md:text-4xl">WE DO CARE</h3>
                    <p class="mt-5 text-lg text-gray-700 text md:text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem delectus laboriosam, repudiandae ducimus magni nam quo sit eos quam voluptates, nisi voluptate saepe sapiente et vel tempora rem officiis veniam!</p>
                </div>
            </div>

        </div>
    </section>
    <!--MEET OUR TEAM-->
    <div class="ml-3  h-1 w-[200px] bg-green-700"></div>
    <div class="ml-3 text-[25px] lg:text-[35px] mt-2 font-medium mb-3">MEET OUR TEAM</div>
    <!--MEET OUR TEAM-->
    <div class="flex flex-wrap">
        <!-- Member #1 -->
        <div class="w-full md:w-6/12 lg:w-4/12 mb-6 px-6 sm:px-6 lg:px-4">
            <div class="flex flex-col">
                <!-- Avatar -->
                <a href="#" class="mx-auto">
                    <img class="rounded-2xl drop-shadow-md hover:drop-shadow-xl transition-all duration-200 delay-100" src="/assets/profile-img/1.png">
                </a>
                <!-- Details -->
                <div class="text-center mt-6">
                    <!-- Name -->
                    <h1 class="text-gray-900 text-xl font-bold mb-1">
                        Afonso Palma Morais
                    </h1>

                    <!-- Title -->
                    <div class="text-gray-700 font-light mb-2">
                        Founder & Specialist
                    </div>
                    <!-- Social Icons -->
                    <div class="flex items-center justify-center opacity-50 hover:opacity-100
                                transition-opacity duration-300">
                        <!-- Linkedin -->
                        <a href="#" class="flex rounded-full hover:bg-indigo-50 h-10 w-10">
                            <svg class="w-6 h-6 text-blue-500 fill-current mx-auto mt-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Member #2 -->
        <div class="w-full md:w-6/12 lg:w-4/12 mb-6 px-6 sm:px-6 lg:px-4">
            <div class="flex flex-col">
                <!-- Avatar -->
                <a href="#" class="mx-auto">
                    <img class="rounded-2xl drop-shadow-md hover:drop-shadow-xl transition-all duration-200 delay-100" src="/assets/profile-img/2.png">
                </a>
                <!-- Details -->
                <div class="text-center mt-6">
                    <!-- Name -->
                    <h1 class="text-gray-900 text-xl font-bold mb-1">
                        Ning Hsin Lee
                    </h1>

                    <!-- Title -->
                    <div class="text-gray-700 font-light mb-2">
                        Founder & Specialist
                    </div>
                    <!-- Social Icons -->
                    <div class="flex items-center justify-center opacity-50 hover:opacity-100
                                transition-opacity duration-300">
                        <!-- Linkedin -->
                        <a href="#" class="flex rounded-full hover:bg-indigo-50 h-10 w-10">
                            <svg class="w-6 h-6 text-blue-500 fill-current mx-auto mt-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Member #3 -->
        <div class="w-full md:w-6/12 lg:w-4/12 mb-6 px-6 sm:px-6 lg:px-4">
            <div class="flex flex-col">
                <!-- Avatar -->
                <a href="#" class="mx-auto">
                    <img class="rounded-2xl drop-shadow-md hover:drop-shadow-xl transition-all duration-200 delay-100" src="/assets/profile-img/3.png">
                </a>
                <!-- Details -->
                <div class="text-center mt-6">
                    <!-- Name -->
                    <h1 class="text-gray-900 text-xl font-bold mb-1">
                        João Silva
                    </h1>

                    <!-- Title -->
                    <div class="text-gray-700 font-light mb-2">
                        Founder & Specialist
                    </div>
                    <!-- Social Icons -->
                    <div class="flex items-center justify-center opacity-50 hover:opacity-100
                                transition-opacity duration-300">
                        <!-- Linkedin -->
                        <a href="#" class="flex rounded-full hover:bg-indigo-50 h-10 w-10">
                            <svg class="w-6 h-6 text-blue-500 fill-current mx-auto mt-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Member #4 -->
        <div class="w-full md:w-4/12 lg:w-4/12 mb-6 px-6 sm:px-6 lg:px-4">
            <div class="flex flex-col">
                <!-- Avatar -->
                <a href="#" class="mx-auto">
                    <img class="rounded-2xl drop-shadow-md hover:drop-shadow-xl transition-all duration-200 delay-100" src="/assets/profile-img/5.png">
                </a>
                <!-- Details -->
                <div class="text-center mt-6">
                    <!-- Name -->
                    <h1 class="text-gray-900 text-xl font-bold mb-1">
                        Chayanee Sornprayoon
                    </h1>

                    <!-- Title -->
                    <div class="text-gray-700 font-light mb-2">
                        Founder & Specialist
                    </div>
                    <!-- Social Icons -->
                    <div class="flex items-center justify-center opacity-50 hover:opacity-100
                                transition-opacity duration-300">
                        <!-- Linkedin -->
                        <a href="#" class="flex rounded-full hover:bg-indigo-50 h-10 w-10">
                            <svg class="w-6 h-6 text-blue-500 fill-current mx-auto mt-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Member blank -->
        <div class="w-full md:w-4/12 lg:w-4/12 mb-6 px-6 sm:px-6 lg:px-4">
            <div class="flex flex-col">
                <!-- Avatar -->
                <a href="#" class="mx-auto">
                    <img class="rounded-2xl drop-shadow-md hover:drop-shadow-xl transition-all duration-200 delay-100" src="">
                </a>
                <!-- Details -->
                <div class="text-center mt-6">
                    <!-- Name -->
                    <h1 class="text-gray-900 text-xl font-bold mb-1">

                    </h1>

                    <!-- Title -->
                    <div class="text-gray-700 font-light mb-2">

                    </div>
                    <!-- Social Icons -->
                    <div class="flex items-center justify-center opacity-50 hover:opacity-100
                                transition-opacity duration-300">
                        <!-- Linkedin -->
                        <a href="#" class="flex rounded-full hover:bg-indigo-50 h-10 w-10">

                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Member #5 -->
        <div class="w-full md:w-4/12 lg:w-4/12 mb-6 px-6 sm:px-6 lg:px-4">
            <div class="flex flex-col">
                <!-- Avatar -->
                <a href="#" class="mx-auto">
                    <img class="rounded-2xl drop-shadow-md hover:drop-shadow-xl transition-all duration-200 delay-100" src="/assets/profile-img/4.png">
                </a>
                <!-- Details -->
                <div class="text-center mt-6">
                    <!-- Name -->
                    <h1 class="text-gray-900 text-xl font-bold mb-1">
                        Mark Whicher
                    </h1>

                    <!-- Title -->
                    <div class="text-gray-700 font-light mb-2">
                        Founder & Specialist
                    </div>
                    <!-- Social Icons -->
                    <div class="flex items-center justify-center opacity-50 hover:opacity-100
                                transition-opacity duration-300">
                        <!-- Linkedin -->
                        <a href="#" class="flex rounded-full hover:bg-indigo-50 h-10 w-10">
                            <svg class="w-6 h-6 text-blue-500 fill-current mx-auto mt-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @include('welcome/footer')
        <script>
            about.classList.add("_activePage");
            contact.classList.remove("_activePage");
            _menu.classList.remove("_activePage");
            welcome.classList.remove("_activePage")
        </script>
</body>

</html>