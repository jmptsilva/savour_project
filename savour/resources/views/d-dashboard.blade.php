<!-- Statistics Cards -->
<div class="ml-[350px]">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 p-4 gap-4">
        <div class="bg-[#1d2816] dark:bg-[#1d2816] shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-[#3e5631] dark:border-gray-600 text-white font-medium group">
            <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-black dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                </svg>
            </div>
            <div class="text-right">
                <p class="text-2xl">557</p>
                <p>Orders</p>
            </div>
        </div>
        <div class="bg-[#1d2816] dark:bg-[#1d2816] shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-[#3e5631] dark:border-gray-600 text-white font-medium group">
            <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-black dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                </svg>
            </div>
            <div class="text-right">
                <p class="text-2xl">€11,257</p>
                <p>Sales</p>
            </div>
        </div>
        <div class="bg-[#1d2816] dark:bg-[#1d2816] shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-[#3e5631] dark:border-gray-600 text-white font-medium group">
            <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
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
                                <button name="daily" class="dailyBtn py-2 px-4 bg-gray-500 dark:bg-gray-800 rounded ease-in duration-150 text-xs text-white dark:text-white hover:bg-gray-200">Daily</button>
                                <button name="weekly" class="weeklyBtn py-2 px-4 bg-gray-500 dark:bg-gray-800 rounded ease-in duration-150 text-xs text-white dark:text-white hover:bg-gray-200">Weekly</button>
                                <button name="monthly" class="monthlyBtn py-2 px-4 bg-gray-500 dark:bg-gray-800 rounded ease-in duration-150 text-xs text-white dark:text-white hover:bg-gray-200">Monthly</button>
                            </div>

                        </div>
                    </div>
                    <div class="flex items-end mt-6">
                        <h3 class="text-black leading-5 text-lg md:text-2xl ">€9234</h3>
                    </div>
                </div>

                <div class="shadow-lg rounded-lg overflow-hidden">
                    <div class="py-3 px-5 bg-gray-50">Line chart</div>

                    <canvas class="p-10 chartLineDaily" id="chartLineDaily"></canvas>
                    <canvas class="p-10 chartLineWeekly" id="chartLineWeekly"></canvas>
                    <canvas class="p-10 chartLineMonthly" id="chartLineMonthly"></canvas>
                </div>
            </div>
            <!-- Required chart.js -->
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script>
                const dailyBtn = document.querySelector(".dailyBtn")
                const weeklyBtn = document.querySelector(".weeklyBtn")
                const monthlyBtn = document.querySelector(".monthlyBtn")
                const chartLineDaily = document.querySelector(".chartLineDaily")
                const chartLineWeekly = document.querySelector(".chartLineWeekly")
                const chartLineMonthly = document.querySelector(".chartLineMonthly")


                dailyBtn.addEventListener("click", () => {
                    document.getElementById("chartLineDaily").style.display = "block";
                    document.getElementById("chartLineWeekly").style.display = "none";
                    document.getElementById("chartLineMonthly").style.display = "none";

                    dailyBtn.classList.add("bg-[#1d2816]");
                    weeklyBtn.classList.remove("bg-[#1d2816]");
                    monthlyBtn.classList.remove("bg-[#1d2816]");

                    const labels = ["Morning Service", "Lunch Service", "Evening Service"];
                    const data = {
                        labels: labels,
                        datasets: [{
                            label: "Revenue",
                            backgroundColor: "#1d2816",
                            borderColor: "#3e5631",
                            data: [0, 10, 5],
                        }, ],
                    };

                    const configLineChart = {
                        type: "line",
                        data,
                        options: {},
                    };

                    var chartLineDaily = new Chart(
                        document.getElementById("chartLineDaily"),
                        configLineChart
                    );

                })

                weeklyBtn.addEventListener("click", () => {
                    document.getElementById("chartLineWeekly").style.display = "block";
                    document.getElementById("chartLineDaily").style.display = "none";
                    document.getElementById("chartLineMonthly").style.display = "none";

                    weeklyBtn.classList.add("bg-[#1d2816]");
                    dailyBtn.classList.remove("bg-[#1d2816]");
                    monthlyBtn.classList.remove("bg-[#1d2816]");


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

                    var chartLineWeekly = new Chart(
                        document.getElementById("chartLineWeekly"),
                        configLineChart
                    );


                });


                monthlyBtn.addEventListener("click", () => {
                    document.getElementById("chartLineMonthly").style.display = "block";
                    document.getElementById("chartLineWeekly").style.display = "none";
                    document.getElementById("chartLineDaily").style.display = "none";

                    monthlyBtn.classList.add("bg-[#1d2816]");
                    dailyBtn.classList.remove("bg-[#1d2816]");
                    weeklyBtn.classList.remove("bg-[#1d2816]");


                    const labels = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
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

                    var chartLineMonthly = new Chart(
                        document.getElementById("chartLineMonthly"),
                        configLineChart
                    );
                });

                function Cleanchart() {
                    document.getElementById("chartLineDaily").style.display = "none";
                    document.getElementById("chartLineWeekly").innerHTML = "";
                    document.getElementById("chartLineMonthly").innerHTML = "";
                }
            </script>