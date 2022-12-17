<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
    @include('navbar')

    <div class="flex flex-row">
        <div class="flex flex-col items-center mt-10">
            <!----Profile Picture---->

            <img src="https://vojislavd.com/ta-template-demo/assets/img/profile.jpg" class="w-40 border-4 border-white rounded-full">

            <!----Profile Name---->

            <p class="text-2xl">{{Auth::user()->first_name}} {{Auth::user()->last_name}}</p>
            <div class="my-4 flex flex-col 2xl:flex-row space-y-4 2xl:space-y-0 2xl:space-x-4">
                <div class="w-full flex flex-col 2xl:w-1/3">
                    <div class="flex-1 bg-white rounded-lg shadow-xl p-8">

                        <!----Personal Information---->

                        <div class="flex flex-row justify-between">
                            <h4 class="text-xl text-gray-900 font-bold">Personal Info</h4>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                            </svg>
                        </div>

                        <ul class="mt-2 text-gray-700">
                            <li class="flex border-y py-2">
                                <span class="font-bold w-24">Full name:</span>
                                <span class="text-gray-700">{{Auth::user()->first_name}} {{Auth::user()->last_name}}</span>

                            </li>
                            <li class="flex border-b py-2">
                                <span class="font-bold w-24">Email</span>
                                <span class="text-gray-700">{{Auth::user()->email}}</span>
                            </li>
                            <li class="flex border-b py-2">
                                <span class="font-bold w-24">Joined:</span>
                                @if(Auth::user()->create_at !== NULL)
                                <span class="text-gray-700">{{Auth::user()->created_at->format('d-M-Y')}}</span>
                                <span class="text-gray-700 sumDay"> </span>
                                @else
                                <span>N/A</span>
                                @endif
                            </li>
                        </ul>
                    </div>
                </div>

                <!----Record Section ---->

                <div class="flex-1 bg-white rounded-lg shadow-xl mt-4 p-8">
                    <h4 class="text-xl text-gray-900 font-bold">Record</h4>
                    <div class="px-6 py-6 gap-8 mt-4 bg-gray-100 border border-gray-300 rounded-lg shadow-xl">
                        <div class="flex items-center justify-between">
                            <span class="font-bold text-lg text-[#00391d]">Total Food Save</span>
                        </div>
                        <div class="flex items-center justify-between mt-6">
                            <div>
                                <svg class="w-20 h-20 p-2.5 bg-[#00391d]/20 bg-opacity-20 rounded-full text-[#00391d] border border-[#00391d]" fill="none" stroke="currentColor" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">

                                    <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#00391d" stroke="none">
                                        <path d="M2423 4115 c-29 -8 -72 -24 -95 -36 -53 -27 -140 -113 -166 -165 -19
    -38 -25 -41 -82 -52 -150 -28 -257 -127 -295 -272 l-11 -45 -82 -3 c-75 -3
    -83 -5 -103 -30 -20 -25 -21 -34 -16 -152 13 -265 101 -480 271 -659 334 -350
    861 -410 1263 -144 84 55 203 173 263 259 111 160 167 333 177 544 5 118 4
    127 -16 152 -20 25 -28 27 -103 30 l-82 3 -11 45 c-44 172 -205 292 -372 278
    l-54 -5 -26 50 c-51 101 -165 185 -282 207 -70 13 -114 12 -178 -5z m228 -161
    c65 -35 113 -97 135 -170 10 -36 24 -60 40 -71 24 -15 29 -15 78 0 29 10 68
    17 87 17 42 0 126 -39 156 -71 22 -24 53 -88 53 -109 0 -7 -207 -10 -640 -10
    -711 0 -659 -6 -621 68 41 79 123 124 220 120 71 -3 84 6 107 75 23 69 103
    150 170 171 70 22 150 15 215 -20z m755 -626 c-21 -223 -101 -399 -247 -547
    -106 -106 -216 -172 -366 -218 -78 -23 -104 -26 -233 -26 -129 0 -155 3 -233
    26 -150 46 -260 111 -367 219 -144 143 -227 326 -245 536 l-8 82 853 0 853 0
    -7 -72z" />
                                        <path d="M1903 2235 c-74 -20 -161 -66 -221 -117 -28 -24 -195 -211 -371 -416
    -235 -273 -321 -380 -321 -398 0 -27 40 -74 64 -74 8 0 22 3 30 6 9 4 166 180
    350 393 271 314 344 392 389 419 102 61 109 62 564 62 400 0 414 -1 433 -20
    25 -25 26 -61 3 -89 -15 -18 -52 -28 -213 -58 -210 -38 -240 -51 -240 -103 0
    -58 20 -64 349 -108 l305 -42 260 106 c636 257 666 269 684 257 19 -12 25 -33
    14 -49 -13 -20 -945 -597 -995 -616 -43 -16 -85 -18 -495 -18 -359 0 -452 -3
    -473 -14 -57 -29 -319 -256 -325 -281 -13 -53 49 -100 97 -75 12 7 81 61 154
    121 l132 108 454 3 454 3 60 25 c34 15 241 138 460 275 624 388 595 367 616
    447 30 111 -56 219 -173 218 -32 -1 -154 -46 -492 -183 l-449 -183 -69 10 -69
    9 36 32 c43 40 74 107 75 161 0 58 -42 136 -92 170 l-41 29 -446 2 c-359 2
    -456 -1 -498 -12z" />
                                    </g>
                                </svg>
                            </div>
                            <div>
                                <span class="text-[50px] font-bold">30</span>
                                <span class="text-xl  font-bold">Plates</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!----Order History---->
        <div>
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 mt-10">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            Order Number
                        </th>

                        <th scope="col" class="py-3 px-6">
                            Restaurant Name
                        </th>

                        <th scope="col" class="py-3 px-6">
                            ADDRESS
                        </th>

                        <th scope="col" class="py-3 px-6">
                            Order Date
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Order Time
                        </th>
                        <th scope="col" class="py-3 px-6">
                            See more
                        </th>
                    </tr>
                </thead>

                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="py-3 px-6">
                            ABC 123
                        </td>

                        <td class="py-3 px-6">
                            <div ">BomBay</div>
                    </td>
    
                    <td class=" py-3 px-6">
                                <div> 123 Rue de Strassbourg Centre Ville</div>
                        </td>

                        <td class="py-3 px-6">
                            <div>12 Dec 2030</div>
                        </td>
                        <td class="py-3 px-6">
                            <div>12:00</div>
                        </td>
                        <td class="py-3 px-6">
                            <a href="" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">more</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>

<script>
    const numberDay = document.querySelector(".numberDay")
    var date_1 = new Date();
    var date_2 = new Date("{{ date('Y-m-d', strtotime(Auth::user()->created_at)) }}");

    console.log(date_1)
    console.log(date_2)
    let difference = date_1.getTime() - date_2.getTime();

    let TotalDays = Math.ceil(difference / (1000 * 3600 * 24));
    numberDay.innerHTML = "( " + TotalDays + " Days" + " " + "ago" + ")"
    console.log(TotalDays);
</script>