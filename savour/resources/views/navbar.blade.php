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
            <li><a href="#services"
                    class="block text-sm px-2 py-4 hover:bg-[#d49a3d] transition duration-300">Services</a></li>
            <li><a href="" class="block text-sm px-2 py-4 hover:bg-[#d49a3d] transition duration-300">About</a>
            </li>
            <li><a href="#contact" class="block text-sm px-2 py-4 hover:bg-[#d49a3d] transition duration-300">Contact
                    Us</a></li>
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

                                </tbody>
                            </table>
                            <div class="flex justify-end items-center gap-4 m-4">
                                <div class="cart-total">
                                    <strong class="cart-total-title">Total</strong>
                                    <span class="cart-total-price">$0</span>
                                </div>
                                <button class="_purchaseBtn px-4 py-2 bg-green-400 rounded mr-4"
                                    type="button">PURCHASE</button>
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
    const about = document. querySelector("._about");
        welcome.classList.add("_activePage");




    window.onload = function() {

        // adding data to localstorage
        const addToCartButtons = document.getElementsByClassName('_addBtn')
        let items = []
        for (let i = 0; i < addToCartButtons.length; i++) {
            addToCartButtons[i].addEventListener('click', function(event) {
                let btn = addToCartButtons[i]
                if (typeof(Storage) !== 'undefined') {

                    let shopItem = btn.parentElement.parentElement;

                    let item = {
                        id: i + 1, // should change to the offer id
                        name: shopItem.getElementsByClassName('_foodName')[0].innerText,
                        price: shopItem.getElementsByClassName('_price')[0].innerText,
                        restaurant: shopItem.getElementsByClassName('_restaurant')[0].innerText,
                        pickup: shopItem.getElementsByClassName('_pickup')[0].innerText,
                        qty: 1,
                    };
                    if (JSON.parse(localStorage.getItem('items')) === null) {
                        items.push(item);
                        localStorage.setItem("items", JSON.stringify(items));
                        window.location.reload();
                    } else {
                        const localItems = JSON.parse(localStorage.getItem('items'));
                        localItems.map(data => {

                            if (item.id == data.id) {
                                item.qty = data.qty + 1;

                            } else {
                                items.push(data);
                            }
                        });
                        items.push(item);
                        localStorage.setItem('items', JSON.stringify(items));
                        window.location.reload();
                    }
                } else {
                    alert('local storage is not working on your browser');
                }
            })
        }

        //adding data to shopping cart
        //this is to put the amount on the cart

        const cartIconNbs = document.querySelectorAll('._cartIconNb');
        cartIconNbs.forEach(nb => {

            let qty = 0;
            JSON.parse(localStorage.getItem('items')).map(data => {
                qty = qty + data.qty;
            });
            nb.innerHTML = qty;
        });



        `              
//                             `
        //adding cartbox data in table
        const cardBoxTable = document.querySelector('._cartItemsList');
        let tableData = '';
        tableData += `<thead class="border-b">
                        <tr>

                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
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
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Quantity
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Price
                            </th>

                        </tr>
                    </thead>
                    <tbody class="_itemWrap">`


        ;
        if (JSON.parse(localStorage.getItem('items'))[0] === null) {
            tableData += '<tr><td>No items found</td></tr>'
        } else {
            JSON.parse(localStorage.getItem('items')).map(data => {
                tableData += `  <tr class="_cart-row">
                     
                        <td class="align-baseline _foodInCart text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">${data.name}
                        </td>
                        <td class="align-baseline hidden md:inline-block text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            ${data.restaurant}
                        </td>
                        <td class="align-baseline hidden md:inline-block text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            ${data.pickup}
                        </td>
                        <td class="align-baseline text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            <input class="_cart-quantity-input w-[50px]" min="0" type="number" value="${data.qty}">
                        </td>
                        <td class="align-baseline _price text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            ${data.price}
                        </td>
                        <td class="align-baseline text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            <button class="_removeBtn text-md underline"
                                type="button" onclick=Delete(e);>REMOVE</button>
                        </td>
                        </tr>
                    `;
            });

        }
        cardBoxTable.innerHTML = tableData;
        updateCartTotal()
    }
    // purchase click
    document.querySelector('._purchaseBtn').addEventListener('click', function purchaseClicked(event) {

        alert('Thank you for your purchase!')
        let cartItems = document.getElementsByClassName('_itemWrap')[0]
        while (cartItems.hasChildNodes()) {
            cartItems.removeChild(cartItems.firstChild)
        }
        updateCartTotal()
    })

    //remove items

    // let removeCartItemBtns = document.getElementsByClassName('_removeBtn')

    // for (let i = 0; i < removeCartItemBtns.length; i++) {
    //     let btn = removeCartItemBtns[i]
    //     btn.addEventListener('click', function(event) {
    //         let btnClicked = event.target;
    //         btnClicked.parentElement.parentElement.remove();
    //         updateCartTotal();
    //     })

    //}
    //update cart total
    // const cartIconNbs = document.querySelectorAll('._cartIconNb');
    // cartIconNbs.forEach(nb => {

    //     let qty = 0;
    //     JSON.parse(localStorage.getItem('items')).map(data=>{
    //         qty = qty+data.qty;	
    //     });
    //     nb.innerHTML = qty;
    // });


    function updateCartTotal() {
        let cartItemContainer = document.getElementsByClassName('_cartItemsList')[0]
        let cartRows = cartItemContainer.querySelectorAll('._cart-row')
        let total = 0
        for (let i = 0; i < cartRows.length; i++) {
            let cartRow = cartRows[i]
            let priceElement = cartRow.getElementsByClassName('_price')[0]
            let quantityElement = cartRow.getElementsByClassName('_cart-quantity-input')[0]

            let price = parseFloat(priceElement.innerText.replace('$', ''))
            let quantity = quantityElement.value
            total = total + (price * quantity);

        }
        total = Math.round(total * 100) / 100
        document.getElementsByClassName('cart-total-price')[0].innerText = '$' + total;
    }

    //update and avoid minus quantity

    let quantityInputs = document.getElementsByClassName('_cart-quantity-input')
    console.log(quantityInputs)
    for (let i = 0; i < quantityInputs.length; i++) {
        let input = quantityInputs[i]

        input.addEventListener('change', function quantityChanged(event) {
            let input = event.target
            if (isNaN(input.value) || input.value <= 0) {
                input.value = 1
            }
            updateCartTotal();
        })


    }
</script>
