<div class="h-screen flex">
    <div class="flex w-1/2 bg-black i justify-around items-center">
        <!--PROCEED AS A GUEST-->

        <div>
            <h1 class="text-white font-bold text-4xl font-sans">Proceed as a guest</h1>
            <p class="text-white mt-1">You can create an accout by clicking <a href="" class="underline ">here</a></p>

            <!-----PAY WITH OUTSOURCE----->

            <div class="flex flex-row-reverse">
                <div class="flex flex-col ml-3 mt-20">

                    <!-----CASH PAYMENT----->

                    <button data-modal-toggle="cashPayment" type="button" class="text-white bg-black hover:bg-slate-500 focus:ring-4 focus:ring-purple-500/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-purple-500/50 mr-2 mb-2">
                        <svg class="ml-2 mr-1 w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                        </svg>
                        Cash Payment
                    </button>


                    <!-----PAYPAL----->

                    <button type="button" class="text-white bg-black hover:bg-slate-500 focus:ring-4 focus:ring-purple-500/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-purple-500/50 mr-2 mb-2">
                        <svg class="mr-2 ml-1 w-4 h-4" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="paypal" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                            <path fill="currentColor" d="M111.4 295.9c-3.5 19.2-17.4 108.7-21.5 134-.3 1.8-1 2.5-3 2.5H12.3c-7.6 0-13.1-6.6-12.1-13.9L58.8 46.6c1.5-9.6 10.1-16.9 20-16.9 152.3 0 165.1-3.7 204 11.4 60.1 23.3 65.6 79.5 44 140.3-21.5 62.6-72.5 89.5-140.1 90.3-43.4 .7-69.5-7-75.3 24.2zM357.1 152c-1.8-1.3-2.5-1.8-3 1.3-2 11.4-5.1 22.5-8.8 33.6-39.9 113.8-150.5 103.9-204.5 103.9-6.1 0-10.1 3.3-10.9 9.4-22.6 140.4-27.1 169.7-27.1 169.7-1 7.1 3.5 12.9 10.6 12.9h63.5c8.6 0 15.7-6.3 17.4-14.9 .7-5.4-1.1 6.1 14.4-91.3 4.6-22 14.3-19.7 29.3-19.7 71 0 126.4-28.8 142.9-112.3 6.5-34.8 4.6-71.4-23.8-92.6z"></path>
                        </svg>
                        Check out with PayPal
                    </button>

                    <!-----APPLE PAY----->

                    <button type="button" class="text-white bg-black hover:bg-slate-500 focus:ring-4 focus:ring-purple-500/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-purple-500/50 mr-2 mb-2">
                        <svg class="ml-2 mr-1 w-5 h-5" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="apple" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                            <path fill="currentColor" d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z"></path>
                        </svg>
                        Check out with Apple Pay
                    </button>
                </div>

                <!-- PAY BY CARD -->
                <div class="w-[300px]">
                    <div class="mt-4">
                        <label class=" text-white font-bold md:text-right mb-1 md:mb-0 pr-4" for="card-holdername">
                            Card Holder Name
                        </label>
                        <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" value="">
                    </div>
                    <div class="mt-4">
                        <label class=" text-white font-bold md:text-right mb-1 md:mb-0 pr-4" for="card_number">
                            Card Number
                        </label>
                        <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" value="" placeholder="0000 0000 0000 0000">
                    </div>
                    <div class="mt-4 flex gap-5 ">
                        <div>
                            <label class=" text-white font-bold md:text-right mb-1 md:mb-0 pr-4" for="expiry">
                                Expiry
                            </label>
                            <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" value="" placeholder="mm/yy">
                        </div>
                        <div>
                            <label class=" text-white font-bold md:text-right mb-1 md:mb-0 pr-4" for="cvvnumber">
                                CVV
                            </label>
                            <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" value="" placeholder="000">
                        </div>
                    </div>

                    <p class="text-lg text-center mt-4 text-white font-semibold">Payment amount: €50.98</p>
                    <div class="flex justify-center mt-4"> <button class="outline-none pay h-12 bg-purple-500 text-white mb-3 hover:bg-purple-300 rounded-lg w-1/2 cursor-pointer transition-all">Pay</button> </div>
                </div>
            </div>
        </div>
    </div>

    <!-----SIGN IN SECTION----->

    <div class="flex w-1/2 justify-center items-center bg-white">
        <form class="bg-white">
            <h1 class="text-gray-800 font-bold text-2xl mb-1">Hello Again!</h1>
            <p class="text-sm font-normal text-gray-600 mb-7">Welcome Back</p>
            <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                </svg>
                <input class="pl-2 outline-none border-none" type="text" name="" id="" placeholder="Email Address" />
            </div>
            <div class="flex items-center border-2 py-2 px-3 rounded-2xl">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                </svg>
                <input class="pl-2 outline-none border-none" type="text" name="" id="" placeholder="Password" />
            </div>
            <button type="submit" class="block w-full bg-purple-500 mt-4 py-2 rounded-2xl text-white font-semibold mb-2">Login</button>
            <span class="text-sm ml-2 hover:text-blue-500 cursor-pointer">Forgot Password ?</span>
        </form>
    </div>
</div>