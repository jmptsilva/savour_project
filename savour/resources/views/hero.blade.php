<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <!--HERO BG-->
    <div class="bg-[url('/Applications/MAMP/htdocs/Final-Project/savour_project/savour/public/assets/img/hero.jpg')] w-screen h-[844px] lg:m-w-screen lg:h-[790px] bg-cover bg-no-repeat opacity-80">

        <!--HERO TEXT & LOGO-->

        <div class="flex flex-col-reverse items-center lg:flex-row lg:justify-around lg:items-center">
            <div class=" bg-white/50 w-[300px] h-[500px] m-3 lg:w-[500px] lg:mt-[100px] lg:h-[500px] p-5">
                <div class="text-black-500 font-extrabold leading-tight text-[25px] lg:text-[40px]">
                    SAVOUR THE PLATE
                </div>
                <div class="text-black-500 font-extrabold leading-tight text-[25px] lg:text-[40px]">
                    SAVE OUR PLANET
                </div>
                <div class="text-black-500 text-sm mt-10">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi esse assumenda totam quis, optio ipsa magni veritatis perferendis minus iure suscipit voluptas quisquam quam qui harum, quod unde modi vitae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur optio, ullam iusto laborum quae ut dolore aliquid exercitationem eligendi assumenda molestiae eius sequi labore. Culpa, similique. Voluptatibus exercitationem fuga iure.
                </div>

                <!--Button & More info -->

                <div class="flex items-center">
                    <button class="bg-[#13361C] hover:bg-[#20582e] text-white font-bold py-2 px-8 rounded-full mt-10 lg:mt-20 ">
                        Order Now
                    </button>
                    <!--Add link at more info -->
                    <a href="" class="mt-10 ml-10 lg:mt-20 underline underline-offset-8 lg:ml-20">More Info</a>
                </div>
            </div>

            <!--Logo here has to insert-->
            <div class="w-[300px] h-[250px] lg:mt-[100px] lg:w-[540px] lg:h-[500px]">
                <img src="/assets/img/logo.PNG">
            </div>
        </div>
    </div>
    <!-- 3 Cards for Eco-Friendly -->
    <div class="flex flex-col items-center w-m-screen-sm lg:flex-row justify-around w-m-screen-lg">
        <!-- Card1 Food Save-->
        <div class="flex flex-row">
            <div class="mt-10 w-[280px] h-[250px] m-auto p-4 bg-white border rounded-lg shadow-md  dark:bg-gray-800 dark:border-gray-700">
                <img src="/assets/img/hand-rice.png" class="w-[120px] h-[120px]">
                <div class="flex flex-row ml-5 items-center">
                    <div class=" text-[30px] font-normal">{TEXT HERE} </div>
                    <div class="ml-3 text-[20px]">KGS</div>
                </div>
                <div class="text-slate-500 text-[20px] font-normal ml-5">Food Save</div>
            </div>
        </div>

        <!-- Card2 Emission Save-->
        <div class="flex flex-row">
            <div class="mt-10 w-[280px] h-[250px] m-auto p-4 bg-white border rounded-lg shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                <img src="/assets/img/methane.png" class="w-[120px] h-[120px]">
                <div class="flex flex-row ml-5 lg:ml-3 items-center">
                    <div class=" text-[30px] font-normal">{TEXT HERE} </div>
                    <div class="ml-3 text-[20px]">G</div>
                </div>
                <div class="text-slate-500 text-[20px] lg:text-[18px] font-normal ml-5">Less methane emission</div>
            </div>
        </div>

        <!-- Card3 Savour warrior-->
        <div class="flex flex-row">
            <div class="mt-10 w-[280px] h-[250px] m-auto p-4 bg-white border rounded-lg shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                <img src="/assets/img/think-green.png" class="w-[100px] h-[100px]">
                <div class="flex flex-row ml-5 items-center">
                    <div class=" text-[30px] font-normal">{TEXT HERE}</div>
                    <div class="ml-3 text-[25px]"></div>
                </div>
                <div class="text-slate-500 text-[20px] font-normal ml-5">Savour user</div>
            </div>
        </div>
    </div>
</body>

</html>