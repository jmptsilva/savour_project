<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
    @include('/restaurant/sidebar')
    <script scr="http://unpkg.com/tailwindcss-jit-cdn"></script>
    <div class="ml-[300px]">
        <!--Table Head -->
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 table-fixed m-auto">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th class="py-3">ORDER NUMBER</th>
                    <th class="py-3">CUSTOMER NAME</th>
                    <th class="py-3">TOTAL</th>
                    <th class="py-3">ORDER TIME</th>
                    <th class="py-3">ORDER DATE</th>
                    <th class="py-3">STATUS</th>
                    <th class="py-3">DETAILS</th>

                </tr>
            </thead>
        </table>
        <!--Table Data 1 -->
        <table>
            <div class="border-t mr-5 w-full dataApi">

            </div>
        </table>
        <script>
            // DATA FOR TABLE ROW // 
            fetch("{{ route('active',['id'=>Auth::user()->id] ) }}", {
                    method: 'get',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    }
                }).then(res => res.json())
                .then(function(results) {
                    activeOrder = results;
                    console.log(activeOrder)
                    let value = "";

                    activeOrder.forEach(order => {
                        value += `<label>
                    <input class="absolute opacity-0 peer" type="checkbox" />
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 table-fixed m-auto">
                        <tbody>
                                <tr class="bg-white border-b  dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="py-2">${order.id}</td>
                                <td class="py-2">${order.first_name} ${order.last_name}</td>
                                <td class="py-2">${order.total}</td>
                                <td class="py-2">${order.created_at.substring(11,19)}</td>
                                <td class="py-2">${order.created_at.substring(0,10)}</td>
                                <td class="py-2">Active</td>
                                <td class="py-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 cursor-pointer border-2 rounded">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                    </svg>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="bg-gray-100 max-h-0 peer-checked:max-h-screen flex flex-row overflow-hidden">
                        <div class="ml-10 p-2">
                           <!-- <div class="flex flex-row">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 m-auto">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 3.03v.568c0 .334.148.65.405.864l1.068.89c.442.369.535 1.01.216 1.49l-.51.766a2.25 2.25 0 01-1.161.886l-.143.048a1.107 1.107 0 00-.57 1.664c.369.555.169 1.307-.427 1.605L9 13.125l.423 1.059a.956.956 0 01-1.652.928l-.679-.906a1.125 1.125 0 00-1.906.172L4.5 15.75l-.612.153M12.75 3.031a9 9 0 00-8.862 12.872M12.75 3.031a9 9 0 016.69 14.036m0 0l-.177-.529A2.25 2.25 0 0017.128 15H16.5l-.324-.324a1.453 1.453 0 00-2.328.377l-.036.073a1.586 1.586 0 01-.982.816l-.99.282c-.55.157-.894.702-.8 1.267l.073.438c.08.474.49.821.97.821.846 0 1.598.542 1.865 1.345l.215.643m5.276-3.67a9.012 9.012 0 01-5.276 3.67m0 0a9 9 0 01-10.275-4.835M15.75 9c0 .896-.393 1.7-1.016 2.25" />
                                </svg>
                                <div class="text-[20px] plate plateSaved.${order.id}">2 PlatesSaved</div>
                            </div>-->
                            <br>
                            <div class="mb-3 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white">Contact</div>

                            <div>Email:${order.email}</div>
                        </div>
                    </div>
            </div>
        </div>
        </label>`
                    });
                    document.querySelector(".dataApi").innerHTML = value;
                })
        </script>
</body>

</html>