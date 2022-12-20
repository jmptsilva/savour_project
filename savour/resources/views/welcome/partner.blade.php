 <!-----------Partner session------------------>
 <section class="_partner w-full bg-[#17191C] flex flex-col items-center pb-14">
     <h3 class="text-4xl lg:text-6xl mt-6 p-3 py-10 text-white">OUR PARTNERS</h3>
     <div class="flex items-center justify-center w-[800px] py-8 sm:py-8 px-10">
         <button aria-label="slide backward" class="absolute z-30 left-[-10px] md:left-[60px] xl:left-[100px] ml-10 cursor-pointer" id="prev">
             <svg class="fill-white hover:fill-orange-400" xmlns="http://www.w3.org/2000/svg" height="48" width="48">
                 <path d="m24 31.3 2.1-2.1-3.7-3.7h9.1v-3h-9.1l3.7-3.7-2.1-2.1-7.3 7.3ZM24 44q-4.1 0-7.75-1.575-3.65-1.575-6.375-4.3-2.725-2.725-4.3-6.375Q4 28.1 4 24q0-4.15 1.575-7.8 1.575-3.65 4.3-6.35 2.725-2.7 6.375-4.275Q19.9 4 24 4q4.15 0 7.8 1.575 3.65 1.575 6.35 4.275 2.7 2.7 4.275 6.35Q44 19.85 44 24q0 4.1-1.575 7.75-1.575 3.65-4.275 6.375t-6.35 4.3Q28.15 44 24 44Zm0-3q7.1 0 12.05-4.975Q41 31.05 41 24q0-7.1-4.95-12.05Q31.1 7 24 7q-7.05 0-12.025 4.95Q7 16.9 7 24q0 7.05 4.975 12.025Q16.95 41 24 41Zm0-17Z" />
             </svg>
         </button>
         <div class="relative flex items-center justify-center">
             <div class="w-[200px] md:w-[500px] lg:w-[700px] xl:w-[850px] mx-auto overflow-x-hidden overflow-y-hidden">
                 <div id="slider" class="flex lg:gap-6 md:gap-4 gap-16 items-center justify-start transition ease-out duration-700">
                     <div class="_partnerCard">
                         <img class="w-36" src="https://i.ibb.co/jZxXkKM/Screenshot-2022-12-09-at-22-29-24.png" alt="#">
                     </div>
                     <div class="_partnerCard">
                         <img class="w-36" src="https://i.ibb.co/pyyhCZ9/Screenshot-2022-12-09-at-22-32-21.png" alt="#">
                     </div>
                     <div class="_partnerCard">
                         <img class="w-36" src="https://i.ibb.co/tZxK1x6/Screenshot-2022-12-09-at-22-32-59.png" alt="#">
                     </div>
                     <div class="_partnerCard">
                         <img class="w-36" src="https://i.ibb.co/RHtWtWt/Screenshot-2022-12-09-at-22-33-44.png" alt="#">
                     </div>
                     <div class="_partnerCard">
                         <img class="w-36" src="https://i.ibb.co/C2nC113/Screenshot-2022-12-09-at-22-34-18.png" alt="#">
                     </div>
                     <div class="_partnerCard">
                         <img class="w-36" src="https://i.ibb.co/4MMg2XD/Screenshot-2022-12-09-at-22-35-06.png" alt="#">
                     </div>
                 </div>
             </div>
         </div>
         <button aria-label="slide forward" class="absolute z-30 mr-10 right-[-10px] md:right-[60px] xl:right-[100px]" id="next">
             <svg class="_nextBtn fill-white hover:fill-orange-400" xmlns="http://www.w3.org/2000/svg" height="48" width="48">
                 <path d="m24 31.3 7.3-7.3-7.3-7.3-2.1 2.1 3.7 3.7h-9.1v3h9.1l-3.7 3.7ZM24 44q-4.1 0-7.75-1.575-3.65-1.575-6.375-4.3-2.725-2.725-4.3-6.375Q4 28.1 4 24q0-4.15 1.575-7.8 1.575-3.65 4.3-6.35 2.725-2.7 6.375-4.275Q19.9 4 24 4q4.15 0 7.8 1.575 3.65 1.575 6.35 4.275 2.7 2.7 4.275 6.35Q44 19.85 44 24q0 4.1-1.575 7.75-1.575 3.65-4.275 6.375t-6.35 4.3Q28.15 44 24 44Zm0-3q7.1 0 12.05-4.975Q41 31.05 41 24q0-7.1-4.95-12.05Q31.1 7 24 7q-7.05 0-12.025 4.95Q7 16.9 7 24q0 7.05 4.975 12.025Q16.95 41 24 41Zm0-17Z" />
             </svg>
         </button>
     </div>
     @if(Auth::check())
     <div class="_contactUs flex items-center gap-4 py-6">
         <a class="text-white underline text-base hover:text-[#d49a3d]" href="{{route('restaurant.dashboard')}}">Restaurant Owner?</a>
         @else
         <div class="_contactUs flex items-center gap-4 py-6">
             <a class="text-white underline text-base hover:text-[#d49a3d]" href="{{route('restaurant.login')}}">Restaurant Owner?</a>
             @endif
             <a class="_joinUs text-white px-8 py-2 bg-gray-600 rounded-3xl hover:bg-white hover:text-orange-400" href="{{route('contact')}}">JOIN US</a>
         </div>
 </section>



 </div>
 </body>

 <script>
     // Partner session js

     let defaultTransform = 0;

     function goNext() {
         defaultTransform = defaultTransform - 280;
         let slider = document.getElementById("slider");
         if (Math.abs(defaultTransform) >= slider.scrollWidth / 1.7) defaultTransform = 0;
         slider.style.transform = "translateX(" + defaultTransform + "px)";
     }
     next.addEventListener("click", goNext);

     function goPrev() {
         let slider = document.getElementById("slider");
         if (Math.abs(defaultTransform) === 0) defaultTransform = 0;
         else defaultTransform = defaultTransform + 280;
         slider.style.transform = "translateX(" + defaultTransform + "px)";
     }
     prev.addEventListener("click", goPrev);
 </script>