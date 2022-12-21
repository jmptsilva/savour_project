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

        <img src="data:image/png;base64,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" class="w-40 border-4 border-white rounded-full">

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