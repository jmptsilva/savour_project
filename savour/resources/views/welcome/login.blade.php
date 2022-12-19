<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

</head>

<body>
    @include('navbar')
    <div class="flex flex-col lg:flex lg:flex-row lg:ml-40 lg:mt-10">

        <!--VECTOR-->
        <img src="/assets/img/meal-prep.webp" alt="meal preparation" class="hidden lg:block lg:w-[600px] lg:h-[600px] ">

        <!--FORM-->

        <div class="h-screen lg:h-[600px] lg:w-[400px] p-6 bg-[#13361C] border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">

            <!--GROUP BUTTON -->
            <div class="flex justify-center">
                <div class="inline-flex rounded-md shadow-sm" role="group">
                    <button type="button" class="loginBtn rounded-l-lg border _loginButton" name="loginBtn">
                        LOG IN
                    </button>
                    <button type="button" class="registerBtn rounded-r-md border _loginButton" name="registerBtn">
                        REGISTER
                    </button>
                </div>
            </div>
            <!--SIGN IN WITH OTHER APPS-->
            <p class="signinWith mb-3 font-normal text-white mt-2">Sign in with</p>

            <!--BUTTON FACEBOOK-->
            <div class="flex justify-around">
                <button type="button" class="_socialButtons">
                    <!--ICON FACEBOOK-->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="w-7 h-7" style="color: #1877f2;">
                        <path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z" />
                    </svg>
                </button>

                <!--BUTTON GMAIL-->
                <button type="button" class="_socialButtons">
                    <!--ICON GMAIL-->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-7 h-7" style="color: #c13584;">
                        <path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                    </svg>
                </button>

                <!--BUTTON GOOGLE-->
                <button type="button" class="_socialButtons">
                    <!--ICON  GOOGLE-->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512" class="w-7 h-7" style="color: #ea4335;">

                        <path fill="currentColor" d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z" />
                    </svg>
                </button>
            </div>
            <div class="flex items-center py-1">
                <div class="flex-grow h-px bg-gray-400"></div>
                <div class="items-center text-gray-400">
                    or continue with
                </div>
                <div class="flex-grow h-px bg-gray-400"></div>
            </div>
            <!--FORM LOGIN AND REGISTER-->
            <form action="{{ route('login')}}" method="POST" class="block loginForm login">
                @csrf
                <div class="form-group mb-6">
                    <!--FORM Email -->
                    <input type="email" name="email" class="form-control _formControl" aria-describedby="emailHelp" placeholder="Email" required>
                </div>

                <!--FORM PASSWORD-->
                <input type="password" name="password" class="form-control focus:z-4 _formControl" id="exampleInputPassword1" placeholder="Password" required>

                <a href="{{route('password.request')}}" class="text-gray-300 hover:text-[#826343] focus:text-[#826343] transition duration-200 ease-in-out ">
                    Forgot password?</a>
                <div class="flex items-center mr-4 mb-4">
                    <input checked type="checkbox" value="" class="w-4 h-4 text-[#826343] bg-gray-100 rounded border-gray-300 focus:ring-[#826343] dark:focus:ring-[#826343] dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label class=" form-check-label inline-block text-white" for="exampleCheck1">Remember me</label>
                </div>
                <button type="submit" class="px-6 py-2.5 bg-[#826343] text-white
      font-medium
      text-xs
      leading-tight
      uppercase
      rounded
      shadow-md
      hover:bg-[#826343] hover:shadow-lg
      focus:bg-[#826343] focus:shadow-lg focus:outline-none focus:ring-0
      active:bg-[#826343] active:shadow-lg
      transition
      duration-150
      ease-in-out">Log In
                </button>


            </form>

            <!--Register Form -->
            <form action="{{route('register')}}" method="POST" class="hidden registerForm register">
                @csrf
                <div class="form-group flex flex-row mb-6">
                    <input type="text" class="mr-2 form-control focus:z-4 _formControl" placeholder="Firstname" name="first_name" required>
                    <input type="text" class="form-control focus:z-4 _formControl" placeholder="Lastname" name="last_name" required>
                </div>

                <div class="mb-6">
                    <input type="email" class="form-control _formControl" aria-describedby="emailHelp" placeholder="Email" name="email" required>
                </div>

                <div class="mb-6">
                    <input type="password" class="form-control focus:z-4 _formControl" placeholder="Password" name="password" required>
                </div>
                <input type="password" class="form-control focus:z-4 _formControl" placeholder="Confirm Password" name="password_confirmation" required>
                <div class="mt-3 form-group form-check mb-6">
                    <div class="flex items-center mr-4 mb-4">
                        <input checked type="checkbox" value="" class="w-4 h-4 text-[#826343] bg-gray-100 rounded border-gray-300 focus:ring-[#826343] dark:focus:ring-[#826343] dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label class=" form-check-label inline-block text-white" for="exampleCheck1">I agree to the
                            <strong>Terms of Service</strong> and <strong>Privacy Policy</strong>
                        </label>
                    </div>
                </div>



                <button type="submit" class="
      px-6
      py-2.5
      bg-[#826343]
      text-white
      font-medium
      text-xs
      leading-tight
      uppercase
      rounded
      shadow-md
      hover:bg-[#826343] hover:shadow-lg
      focus:bg-[#826343] focus:shadow-lg focus:outline-none focus:ring-0
      active:bg-[#826343] active:shadow-lg
      transition
      duration-150
      ease-in-out">Register</button>
            </form>
        </div>
    </div>
    </div>
    <script>
        const loginBtn = document.querySelector(".loginBtn")
        const registerBtn = document.querySelector(".registerBtn")
        const login = document.querySelector(".login")
        const register = document.querySelector(".register")
        const change = document.querySelector(".signinWith")

        registerBtn.addEventListener("click", () => {
            login.classList.add("hidden");
            change.innerHTML = "Register with";
            register.classList.remove("hidden");
        })

        loginBtn.addEventListener("click", () => {
            register.classList.add("hidden");
            change.innerHTML = "Sign in with";
            login.classList.remove("hidden");
        })
    </script>
</body>

</html>