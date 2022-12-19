<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

</head>

<body>
    @include('/restaurant/sidebar')
    <!-- Statistics Cards -->
    <div class="ml-[350px]">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 p-4 gap-4">
            <div class="_chartBtn">
                <div class="_flexCardChart">
                    <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-black dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <div class="text-right">
                    <p class="text-2xl">557</p>
                    <p>Orders</p>
                </div>
            </div>
            <div class="_chartBtn">
                <div class="_flexCardChart">
                    <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-black dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                    </svg>
                </div>
                <div class="text-right">
                    <p class="text-2xl">€11,257</p>
                    <p>Sales</p>
                </div>
            </div>
            <div class="_chartBtn">
                <div class="_flexCardChart">
                    <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-black dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div class="text-right">
                    <p class="text-2xl">200 Plates</p>
                    <p>Food Save</p>
                </div>
            </div>
        </div>
        <!-- ./Statistics Cards -->
        <!-- CHART -->
        <div class="flex ">
            <div class="lg:w-2/3">
                <div class="flex flex-col justify-between h-full">
                    <div>
                        <div class="lg:flex w-full justify-between">
                            <h3 class="text-gray-600 dark:text-gray-400 leading-5 text-base md:text-xl font-bold">Selling Overview</h3>

                            <div class="flex items-center justify-between lg:justify-start mt-2 md:mt-4 lg:mt-0">
                                <div class="flex items-center">
                                    <button name="daily" class="dailyBtn _buttonChangeChart">Daily</button>
                                    <button name="weekly" class="weeklyBtn _buttonChangeChart">Weekly</button>
                                    <button name="monthly" class="monthlyBtn _buttonChangeChart">Monthly</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="shadow-lg rounded-lg overflow-hidden">
                        <div class="flex row">
                            <div class="_chartSummary">FoodSave Total</div>
                            <div class="_chartSummary sumFoodSave">84</div>
                            <div class="_chartSummary">Plates</div>
                        </div>
                        <canvas class="p-10 chartLineFood" id="chartLineFood"></canvas>
                    </div>
                    <br>
                    <div class="shadow-lg rounded-lg overflow-hidden">
                        <div class="flex row">
                            <div class="_chartSummary">Revenue Total</div>
                            <div class="_chartSummary sumRevenue">500</div>
                            <div class="_chartSummary">€</div>
                        </div>
                        <canvas class="p-10 chartLine" id="chartLine"></canvas>
                    </div>
                </div>
                <!-- Required chart.js -->
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                <script>
                    const dailyBtn = document.querySelector(".dailyBtn")
                    const weeklyBtn = document.querySelector(".weeklyBtn")
                    const monthlyBtn = document.querySelector(".monthlyBtn")
                    /** ------ Do after call ajax ------  */
                    const sumRevenue = document.querySelector(".sumRevenue")
                    const sumFoodSave = document.querySelector(".sumFoodSave")

                    /** ------ Revenue Chart Default ------  */

                    const labels = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
                    const data = {
                        labels: labels,
                        datasets: [{
                            label: "Revenue",
                            backgroundColor: "#1d2816",
                            borderColor: "#3e5631",
                            data: [0, 10, 5, 2, 20, 30, 45],
                        }, ],
                    };
                    const configLineChart = {
                        type: "line",
                        data,
                        options: {},
                    };
                    var revenueChart = new Chart(
                        document.getElementById("chartLine"),
                        configLineChart
                    );

                    /** ------ Food Chart Default------  */

                    const myChart2 = document.getElementById('chartLineFood');
                    const foodChart = new Chart(myChart2, {
                        type: 'line',
                        data: {
                            labels: ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
                            datasets: [{
                                label: 'Plates',
                                data: [12, 19, 3, 5, 2, 3, 6],
                                backgroundColor: "#1d2816",
                                borderColor: "#3e5631",
                                borderWidth: 1,
                            }]
                        },
                    });

                    /** ------ Function Add Data  ------  */

                    function addData(chart, labels, data) {
                        labels.forEach((label) => {
                            chart.data.labels.push(label);
                        })
                        data.forEach((d) => {
                            chart.data.datasets[0].data.push(d)
                        })
                        chart.update();
                    }

                    /** ------ Function Add ColorButton  ------  */
                    function addColor(btn) {
                        btn.classList.add("bg-red-500")
                    }
                    /** ------ Function Remove ColorButton  ------  */
                    function removeColor(btn) {
                        btn.classList.remove("bg-red-500")
                    }

                    /** ------ Function Remove Data  ------  */

                    function removeData(chart) {
                        while (chart.data.labels.length > 0) {
                            chart.data.labels.pop();
                        }
                        chart.data.datasets.forEach((dataset) => {
                            while (dataset.data.length > 0) {
                                dataset.data.pop();
                            }
                        });
                        chart.update();
                    }


                    dailyBtn.addEventListener("click", () => {
                        addColor(dailyBtn);
                        removeColor(weeklyBtn);
                        removeColor(monthlyBtn);


                        removeData(revenueChart)
                        removeData(foodChart)
                        addData(revenueChart, ["Morning Service", "Afternoon Service", "Evening Service"], [10, 20, 60])
                        addData(foodChart, ["Morning Service", "Afternoon Service", "Evening Service"], [20, 20, 60])

                    })


                    weeklyBtn.addEventListener("click", () => {
                        addColor(weeklyBtn);
                        removeColor(dailyBtn);
                        removeColor(monthlyBtn);

                        removeData(revenueChart)
                        removeData(foodChart)
                        addData(revenueChart, ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"], [10, 50, 60, 100, 400, 20, 200])
                        addData(foodChart, ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"], [10, 50, 60, 100, 500, 20, 200])
                    });

                    monthlyBtn.addEventListener("click", () => {
                        addColor(monthlyBtn);
                        removeColor(dailyBtn);
                        removeColor(weeklyBtn);


                        removeData(revenueChart)
                        removeData(foodChart)
                        addData(revenueChart, ["January", "Febuary", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"], [10, 20, 200, 100, 400, 20, 150, 80, 20, 40, 32, 12])
                        addData(foodChart, ["January", "Febuary", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"], [10, 20, 200, 100, 400, 20, 150, 80, 20, 40, 32, 12])
                    });
                </script>
            </div>
        </div>
    </div>
</body>

</html>