<!-- Navbar goes here -->
<nav class="bg-[#161616] shadow-lg sticky top-0 w-screen z-10">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex justify-between">
            <div class="flex space-x-7">
                <div>
                    <!-- Website Logo -->
                    <a href="#" class="flex items-center py-4 px-2">
                        <img src="/assets/img/logotry-removebg-preview.png" alt="Logo" class="w-24 mr-2">

                    </a>
                </div>
                <!-- Primary Navbar items -->
                <div class="hidden md:flex items-center space-x-1">
                    <a href="" class="py-4 px-2 text-white border-b-4 border-[#d49a3d] font-semibold ">Home</a>
                    <a href="" class="py-4 px-2 text-white font-semibold hover:text-[#d49a3d] transition duration-300">Menu</a>
                    <a href="" class="py-4 px-2 text-white font-semibold hover:text-[#d49a3d] transition duration-300">Contact</a>
                    <a href="" class="py-4 px-2 text-white font-semibold hover:text-[#d49a3d] transition duration-300">About
                        Us</a>
                </div>
            </div>
            <!-- Secondary Navbar items -->

            <div class="hidden md:flex items-center space-x-3 ">

                <a href="#" class="py-2 px-2 font-medium text-white hover:text-[#d49a3d] transition duration-300">Login |
                    Register</a>
                <div class="_cartBtn fill-white"><svg xmlns="http://www.w3.org/2000/svg" height="42" width="42">
                        <path d="M9 44q-1.2 0-2.1-.9Q6 42.2 6 41V14.5q0-1.2.9-2.1.9-.9 2.1-.9h5.5q0-3.95 2.65-6.725Q19.8 2 23.75 2q3.95 0 6.85 2.775 2.9 2.775 2.9 6.725H39q1.2 0 2.1.9.9.9.9 2.1V41q0 1.2-.9 2.1-.9.9-2.1.9Zm0-3h30V14.5H9V41Zm15-14.5q3.95 0 6.85-2.9 2.9-2.9 2.9-6.85h-3q0 2.75-2 4.75t-4.75 2q-2.75 0-4.75-2t-2-4.75h-3q0 3.95 2.9 6.85 2.9 2.9 6.85 2.9Zm-6.5-15h13q0-2.75-1.875-4.625T24 5q-2.75 0-4.625 1.875T17.5 11.5ZM9 41V14.5 41Z" />
                    </svg></div>
            </div>
            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <div class="_cartBtn">
                    <svg class="fill-white" xmlns="http://www.w3.org/2000/svg" height="30" width="30">
                        <path d="M9 44q-1.2 0-2.1-.9Q6 42.2 6 41V14.5q0-1.2.9-2.1.9-.9 2.1-.9h5.5q0-3.95 2.65-6.725Q19.8 2 23.75 2q3.95 0 6.85 2.775 2.9 2.775 2.9 6.725H39q1.2 0 2.1.9.9.9.9 2.1V41q0 1.2-.9 2.1-.9.9-2.1.9Zm0-3h30V14.5H9V41Zm15-14.5q3.95 0 6.85-2.9 2.9-2.9 2.9-6.85h-3q0 2.75-2 4.75t-4.75 2q-2.75 0-4.75-2t-2-4.75h-3q0 3.95 2.9 6.85 2.9 2.9 6.85 2.9Zm-6.5-15h13q0-2.75-1.875-4.625T24 5q-2.75 0-4.625 1.875T17.5 11.5ZM9 41V14.5 41Z" />
                    </svg>
                </div>
                <button class="outline-none mobile-menu-button">
                    <svg class="w-6 h-6 text-white hover:text-[#d49a3d] " x-show="!showMenu" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <!-- mobile menu -->
    <div class="hidden mobile-menu">
        <ul class="">
            <li class="active"><a href="index.html" class="block text-sm px-2 py-4 text-white bg-[#d49a3d] font-semibold">Home</a></li>
            <li><a href="#services" class="block text-sm px-2 py-4 hover:bg-[#d49a3d] transition duration-300">Services</a></li>
            <li><a href="" class="block text-sm px-2 py-4 hover:bg-[#d49a3d] transition duration-300">About</a>
            </li>
            <li><a href="#contact" class="block text-sm px-2 py-4 hover:bg-[#d49a3d] transition duration-300">Contact
                    Us</a></li>
        </ul>
    </div>
    <script>
        const btn = document.querySelector("button.mobile-menu-button");
        const menu = document.querySelector(".mobile-menu");
      
        btn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });

    </script>
</nav>