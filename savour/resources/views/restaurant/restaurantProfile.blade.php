<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Savour - Save the food, save the planet</title>
    @vite('resources/css/app.css')
</head>

<body>
    @include('/restaurant/sidebar')
    <div class="ml-[350px] flex flex-col items-center mt-10">
        <!----Profile Picture---->

        <img src="https://i.pinimg.com/originals/f6/1a/98/f61a984d21609f70bfccbcac1af212f1.png" class="w-40 border-4 border-white rounded-full">

        <!----Profile Name---->

        <p class="text-2xl text-black">{{Auth::user()->name}}</p>
        <div class=" w-full my-4 flex flex-col 2xl:flex-row space-y-4 2xl:space-y-0 2xl:space-x-4">
            <div class="w-full flex flex-col 2xl:w-1/3">
                <div class="flex-1 bg-white rounded-lg shadow-xl p-8">

                    <!----Personal Information---->

                    <div class="flex flex-row justify-between">
                        <h4 class="text-xl text-gray-900 font-bold">Infomation</h4>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                        </svg>
                    </div>

                    <ul class="mt-2 text-gray-700">
                        <li class="flex border-y py-2">
                            <span class="font-bold w-24">Name of the restaurant:</span>
                            <span class="text-gray-700">{{Auth::user()->name}}</span>
                        </li>
                        <li class="._dashProps">
                            <span class="font-bold w-24">Address</span>
                            <span class="text-gray-700">{{Auth::user()->address}}</span>
                        </li>
                        <li class="._dashProps">
                            <span class="font-bold w-24">City</span>
                            <span class="text-gray-700">{{Auth::user()->city}}</span>
                        </li>
                        <li class="._dashProps">
                            <span class="font-bold w-24">Tel</span>
                            <span class="text-gray-700">{{Auth::user()->phone_number}}</span>
                        </li>
                        <li class="._dashProps">
                            <span class="font-bold w-24">Email</span>
                            <span class="text-gray-700">{{Auth::user()->email}}</span>
                        </li>
                        <li class="._dashProps">
                            <span class="font-bold w-24">Joined:</span>
                            @if(Auth::user()->created_at !== NULL)
                            <span class="text-gray-700">{{Auth::user()->created_at->format('d-M-Y')}}</span>
                            <span class="text-gray-700 sumDay"> </span>
                            @else
                            <span>N/A</span>
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    </div>
    <script>
        const sumDay = document.querySelector(".sumDay")
        var date_1 = new Date();
        var date_2 = new Date("{{ date('Y-m-d', strtotime(Auth::user()->created_at)) }}");

        console.log(date_1)
        console.log(date_2)
        let difference = date_1.getTime() - date_2.getTime();

        let TotalDays = Math.ceil(difference / (1000 * 3600 * 24));
        sumDay.innerHTML = "( " + TotalDays + " Days" + " " + "ago" + ")"
        console.log(TotalDays);
    </script>
</body>