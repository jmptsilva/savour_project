<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>

    <!--HERO BG-->
    <div class="bg-[url('/Applications/MAMP/htdocs/Final-Project/savour_project/savour/public/assets/img/hero.jpg')] w-screen h-[844px] lg:max-w-screen-xl lg:h-[790px] bg-cover bg-no-repeat opacity-80">

        <!--HERO TEXT & LOGO-->

        <div class="flex flex-col-reverse items-center lg:flex-row lg:ml-[250px] lg:items-center">
            <div class=" bg-white/60 w-[300px] h-[500px] m-3 rounded-xl lg:w-[500px]  lg:h-[500px] p-5">
                <div class="text-black-500 font-extrabold leading-tight text-[25px] lg:text-[40px]">
                    SAVOUR THE PLATE
                </div>
                <div class="text-black-500 font-extrabold leading-tight text-[25px] lg:text-[40px]">
                    SAVE OUR PLANET
                </div>
                <div class="text-black font-semibold text-l mt-10">

                    In Luxembourg alone, an average of 118 kg <br>of food waste per person ends up in the bin each year.
                    <br> Creating food consumes a lot of energy and often results <br>in long transport routes.<br><br> Our goal is to offer restaurants the opportunity to sell meals through our website at a discounted price before they expire.
                </div>

                <!--Button & More info -->

                <div class="flex items-center">

                    <a href="{{route('menu')}}" class="bg-[#13361C] hover:bg-[#20582e] text-white font-bold py-2 px-8 rounded-full mt-10 lg:mt-20 ">
                        Order Now
                    </a>
                    <!--Add link at more info -->
                    <a href="{{route('about')}}" class="mt-10 ml-10 lg:mt-20 underline underline-offset-8 lg:ml-20">More Info</a>
                </div>
            </div>

            <!--Logo here has to insert-->
            <div class="w-[300px] h-[250px] lg:mt-[5px] lg:w-[800px] lg:h-[800px]">
                <img src="/assets/img/logo.PNG">
            </div>
        </div>
    </div>

</body>

</html>