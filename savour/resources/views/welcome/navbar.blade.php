<!-- Navbar goes here -->
<nav class="bg-[#161616] shadow-lg sticky top-0 w-screen z-10">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex justify-between">
            <div class="flex space-x-7">
                <div>
                    <!-- Website Logo -->
                    <a href="{{ route('welcome') }}" class="flex items-center py-4 px-2">
                        <img src="/assets/img/logotry-removebg-preview.png" alt="Logo" class="w-24 mr-2">

                    </a>
                </div>
                <!-- Primary Navbar items -->
                <div class="hidden md:flex items-center space-x-1">
                    <a href="{{ route('welcome') }}"
                        class="_welcome py-4 px-2 text-white hover:text-[#d49a3d] transition duration-300 font-semibold ">Home</a>
                    <a href="{{ route('menu') }}"
                        class="_menu py-4 px-2 text-white font-semibold hover:text-[#d49a3d] transition duration-300">Menu</a>
                    <a href="{{ route('contact') }}"
                        class="_contact py-4 px-2 text-white font-semibold hover:text-[#d49a3d] transition duration-300">Contact</a>
                    <a href="{{ route('about') }}"
                        class="_about py-4 px-2 text-white font-semibold hover:text-[#d49a3d] transition duration-300">About
                        Us</a>
                </div>
            </div>
            <!-- Secondary Navbar items -->

            <div class="hidden md:flex items-center space-x-3 ">
                @if (Auth::check())
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <input type="submit" value="Logout"
                            class="py-2 px-2 font-medium text-white hover:text-[#d49a3d] transition duration-300">
                        </input>
                    </form>
                @else
                    <a href="{{ route('login') }}"
                        class="py-2 px-2 font-medium text-white hover:text-[#d49a3d] transition duration-300">
                        Login |
                        Register</a>
                @endif

                <div class="_cartBtn relative cursor-pointer fill-white"><svg xmlns="http://www.w3.org/2000/svg"
                        height="42" width="42">
                        <path
                            d="M9 44q-1.2 0-2.1-.9Q6 42.2 6 41V14.5q0-1.2.9-2.1.9-.9 2.1-.9h5.5q0-3.95 2.65-6.725Q19.8 2 23.75 2q3.95 0 6.85 2.775 2.9 2.775 2.9 6.725H39q1.2 0 2.1.9.9.9.9 2.1V41q0 1.2-.9 2.1-.9.9-2.1.9Zm0-3h30V14.5H9V41Zm15-14.5q3.95 0 6.85-2.9 2.9-2.9 2.9-6.85h-3q0 2.75-2 4.75t-4.75 2q-2.75 0-4.75-2t-2-4.75h-3q0 3.95 2.9 6.85 2.9 2.9 6.85 2.9Zm-6.5-15h13q0-2.75-1.875-4.625T24 5q-2.75 0-4.625 1.875T17.5 11.5ZM9 41V14.5 41Z" />
                    </svg>
                    <div class="bg-red-500 absolute w-5 h-5 top-8 right-[-5px] rounded-full">
                        <span class="_cartIconNb absolute top-[-3px] right-[5px] text-white ">0</span>
                    </div>
                </div>
            </div>
            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <div class="_cartBtn absolute right-12 cursor-pointer">
                    <svg class="fill-white" xmlns="http://www.w3.org/2000/svg" height="30" width="30">
                        <path
                            d="M9 44q-1.2 0-2.1-.9Q6 42.2 6 41V14.5q0-1.2.9-2.1.9-.9 2.1-.9h5.5q0-3.95 2.65-6.725Q19.8 2 23.75 2q3.95 0 6.85 2.775 2.9 2.775 2.9 6.725H39q1.2 0 2.1.9.9.9.9 2.1V41q0 1.2-.9 2.1-.9.9-2.1.9Zm0-3h30V14.5H9V41Zm15-14.5q3.95 0 6.85-2.9 2.9-2.9 2.9-6.85h-3q0 2.75-2 4.75t-4.75 2q-2.75 0-4.75-2t-2-4.75h-3q0 3.95 2.9 6.85 2.9 2.9 6.85 2.9Zm-6.5-15h13q0-2.75-1.875-4.625T24 5q-2.75 0-4.625 1.875T17.5 11.5ZM9 41V14.5 41Z" />
                    </svg>
                    <div class="bg-red-500 absolute w-4 h-4 top-5 rounded-full">
                        <span class="_cartIconNb absolute top-[-4px] right-[3px] text-white ">0</span>
                    </div>
                </div>
            </div>
            <button class=" md:hidden outline-none mobile-menu-button">
                <svg class="w-6 h-6 text-white hover:text-[#d49a3d] " x-show="!showMenu" fill="none"
                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </div>
    </div>
    <!-- mobile menu -->
    <div class="hidden mobile-menu">
        <ul class="">
            <li class="active"><a href="{{ route('welcome') }}"
                    class="block text-sm px-2 py-4 text-white bg-[#d49a3d] font-semibold">Home</a></li>
            <li><a href="{{ route('menu') }}"
                    class="block text-sm px-2 py-4 text-white hover:bg-[#d49a3d] transition duration-300">Menu</a></li>
            <li><a href="{{ route('contact') }}"
                    class="block text-sm px-2 py-4 text-white hover:bg-[#d49a3d] transition duration-300">Contact</a>
            </li>
            <li><a href="{{ route('about') }}"
                    class="block text-sm px-2 py-4 text-white hover:bg-[#d49a3d] transition duration-300">About
                </a></li>
        </ul>
    </div>
    {{-- shopping cart --}}

    <div class="cartBox hidden fixed overflow-hidden mx-5 bg-gray-200 shadow-2xl top-[86px] right-0 rounded p-5">
        <div class="cart ">
            <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 inline-block sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                            <table class="_cartItemsList min-w-full">
                                <thead class="border-b">
                                    <tr>
                                        <th scope="col"
                                            class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                            Item
                                        </th>
                                        <th scope="col"
                                            class="hidden md:inline-block text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                            Restaurant
                                        </th>
                                        <th scope="col"
                                            class="hidden md:inline-block text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                            Pick-Up time
                                        </th>
                                        <th scope="col"
                                            class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                            Quantity
                                        </th>
                                        <th scope="col"
                                            class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                            Price
                                        </th>

                                    </tr>
                                </thead>
                                <tbody class="_itemWrap">

                                </tbody>
                            </table>
                            <div id="label"></div>
                            <div class="flex justify-end items-center gap-4 m-4">
                                <div class="cart-total">
                                    <strong class="cart-total-title">Total</strong>
                                    <span class="cart-total-price">$0</span>
                                </div>
                                @if (Auth::check())
                                <form action="{{ route('log.checkout') }}" method="GET">
                                    @csrf
                                <button class="_purchaseBtn px-4 py-2 bg-green-400 rounded mr-4"
                                    type="submit">PURCHASE</button>
                                </form>
                                @else
                                <form action="{{ route('checkout') }}" method="GET">
                                    
                                <button class="_purchaseBtn px-4 py-2 bg-green-400 rounded mr-4"
                                    type="submit">PURCHASE</button>
                                </form>

                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</nav>
<script>
    const btn = document.querySelector("button.mobile-menu-button");
    const menu = document.querySelector(".mobile-menu");

    btn.addEventListener("click", () => {
        menu.classList.toggle("hidden");
    });


    //toggle the cart list
    const cartBtns = document.querySelectorAll("._cartBtn");
    const cartList = document.querySelector(".cartBox");

    cartBtns.forEach(btn => {
        btn.addEventListener("mouseenter", () => {
            cartList.classList.toggle("hidden");
        });
    });

    // change the underline

    const welcome = document.querySelector("._welcome");
    const _menu = document.querySelector("._menu");
    const contact = document.querySelector("._contact");
    const about = document.querySelector("._about");
    welcome.classList.add("_activePage");


    // shoping cart
    const total = document.querySelector('.cart-total-price')
    const cartIconNbs = document.querySelectorAll('._cartIconNb')
    const cartWrap = document.querySelector("._itemWrap")

    //cart array to save all items in the cart
    let cart = JSON.parse(localStorage.getItem("CART")) || [];
    
    updateCart();

    // add to cart
    function addToCart(id) {
        fetch("{{ route('active_offers') }}", {
                method: 'get',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            }).then(res => res.json())
            .then(function(results) {
                // Once AJAX call is done

                //check if product already exist in cart
                if(cart.some((item) => item.id === id)){
                    changeNBofUnites("plus",id)
                }else{

                    const item = results.find((product) => product.id === id)
                    cart.push(
                        {...item,
                        qtyInCart: 1}
                    );
                }
                updateCart();
            })
    }

 
    //calculate total
  
    function rendertotal(totalEl) {
        let totalPrice=0 , totalItems = 0;

        cart.forEach((item)=>{
            totalPrice += item.price *item.qtyInCart;
            totalItems += item.qtyInCart;

        })

        totalEl.innerHTML =`$ ${totalPrice.toFixed(2)}`
        cartIconNbs.forEach(nb => {
            nb.innerHTML = totalItems;
        });

    }

    // render cart item
    
    function renderCartItems(cartwrap) {
        cartwrap.innerHTML=""; // clear cart element
        cart.forEach((data)=>{
            cartwrap.innerHTML += `  <tr class="_cart-row _item-id-${data.id}">

                         <td class="align-baseline _foodInCart text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">${data.name}
                         </td>
                         <td class="align-baseline hidden md:inline-block text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                             ${data.restaurant}
                         </td>
                         <td class="align-baseline hidden md:inline-block text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                             19:00 12/25 2022
                         </td>
                        <td class="align-baseline text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            
                            
                            <p class="_cart-quantity-input text-xl text-center px-2 w-[50px]"><span onclick="changeNBofUnites('minus',${data.id})" class="minus cursor-pointer text-2xl text-green-500">-</span> ${data.qtyInCart} <span onclick="changeNBofUnites('plus',${data.id})" class="plus cursor-pointer text-xl text-green-500">+</span> </p>
            
                            
                         </td>
                         <td class="align-baseline _price text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                             $${data.price}
                         </td>
                         <td class="align-baseline text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                             <button onclick="removeItemFromCart(${data.id})"class="_removeBtn text-md underline"
                                 type="button" onclick=Delete(e);>REMOVE</button>
                         </td>
                         </tr>
                     `;
        })
    }
       //update cart

       function updateCart() {
        renderCartItems(cartWrap);
        rendertotal(total);

        //save cart to local storage

        localStorage.setItem("CART",JSON.stringify(cart))
    }


    //remove item from cart

    function removeItemFromCart(id) {
        cart = cart.filter((item)=>item.id !== id);

        updateCart();
    }

    //change number of units for an items
    
    function changeNBofUnites(action,id) {

        cart = cart.map((item)=>{
            
            let qtyInCart = item.qtyInCart
            if(item.id === id){
                if(action === "minus" && qtyInCart >1){
                    qtyInCart--;
                }else if(action === "plus" && qtyInCart < item.quantity){
                    qtyInCart++;
                }
            }
            
            return {
                ...item,
                qtyInCart,

            };
        })
        updateCart();
        
    }

    


</script>
