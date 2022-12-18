<div class="_container bg-[#DFDFDF] py-4 mx-auto">

    <div class="_wrap flex flex-col m-4">
        <div class="_infoBarLine flex flex-col md:flex-row justify-around items-center">
            {{-- search bar --}}
            <div class="flex text-gray-600 py-5 gap-3">
                <input type="search" name="serch" placeholder="Search"
                    class="bg-white h-10 left-0 w-[300px] lg:w-[600px] rounded-full text-sm focus:outline-none ">
                <button type="submit">
                    <svg class="h-4 w-4 mr-5 md:mr-10 fill-current" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px"
                        y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
                        xml:space="preserve" width="512px" height="512px">
                        <path
                            d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                    </svg>
                </button>
            </div>
            <a href="#">
                <div class="w-[150px] px-5 py-2 bg-green-800 hover:bg-[#D49A3D] rounded-lg text-white cursor-pointer">
                    Nearby me</div>
            </a>


        </div>

        <div class="_mainlist flex flex-col md:flex-row items-center justify-center">

            <div class="_filter flex w-[250px] flex-col gap-4 ">
                <h3
                    class="text-2xl py-3 md:py-0 md:pl-4 cursor-pointer md:cursor-default hover:scale-105 hover:text-green-800 md:hover:text-black md:hover:scale-100 ">
                    Filter</h3>
                <hr>
                <div class="_boxOfCategory hidden md:flex md:flex-col">
                    <div class="md:pl-4">
                        <p class="text-xl my-4">By Category</p>
                        <div class="_categories flex flex-col">
                            <div>
                                <input type="checkbox" name="appetizer" id="appetizer">
                                <label for="appetizer">Appetizer</label>
                            </div>
                            <div>
                                <input type="checkbox" name="meal" id="Meal">
                                <label for="Meal">Meal</label>
                            </div>
                            <div>
                                <input type="checkbox" name="dessert" id="dessert">
                                <label for="dessert">Dessert</label>
                            </div>
                            <div>
                                <input type="checkbox" name="soup" id="soup">
                                <label for="soup">Soup</label>
                            </div>
                        </div>
                    </div>
                    <div class="md:pl-4">
                        <p class="text-xl my-4">By Restaurant</p>
                        <div class="_categories flex flex-col">
                            <div>
                                <input type="checkbox" name="burger" id="burger">
                                <label for="burger">Burger King</label>
                            </div>
                            <div>
                                <input type="checkbox" name="partigiano" id="partigiano">
                                <label for="partigiano">Partigiano</label>
                            </div>
                            <div>
                                <input type="checkbox" name="kfc" id="kfc">
                                <label for="kfc">KFC</label>
                            </div>

                        </div>
                    </div>
                </div>




            </div>

            {{-- cards --}}
            <div id="results" class="_cards grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4">




            </div>
        </div>
    </div>
</div>

{{-- shopping cart

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
</div> --}}



<script>
    fetch("{{ route('active_offers') }}", {
            method: 'get',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        }).then(res => res.json())
        .then(function(results) {
            // Once AJAX call is done
            console.log(results);
            let htmlResult = "";
            results.forEach(offer => {
                htmlResult += `<div class="_productCard flex scale-100 transition-all max-w-[320px] hover:scale-105">
                    <div class="flex flex-col items-center rounded-lg shadow-lg bg-white m-4">
                        <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">
                            <img class="rounded-t-lg w-40 lg:w-48"
                                src="https://i.ibb.co/C2nC113/Screenshot-2022-12-09-at-22-34-18.png" alt="" />
                            {{-- should add heart for save? --}}
                        </a>
                        <div class="p-6">
                            <div class="flex justify-between items-baseline">
                                <h5 class="_foodName w-[100px] text-ellipsis whitespace-nowrap text-gray-900 text-[18px] text-boldfont-medium mb-2">${offer.name}</h5>
                                <p class="_price text-red-500 text-2xl">$${offer.price}</p>
                            </div>
                            <p class="_restaurant text-gray-700 text-base mb-1">
                                ${offer.restaurant_id}
                            </p>
                            <p class="_pickup text-gray-700 text-base mb-4">
                                <span>19:00 12/12</span>
                            </p>
                            <div class="flex justify-between items-end">
                                <a class="_detail mr-3 text-sm underline" href="#">View Detail</a>
                                <button type="button" onclick="addToCart(${offer.id})"
                                    class="_addBtn inline-block px-6 py-2.5 bg-green-800 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-[#D49A3D] hover:shadow-lgfocus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out">Order</button>
                            </div>
                        </div>
                    </div>
                    <dialog class="modal relative w-[350px] m-auto" id="modal">
                        <p class="_close absolute right-5 font-bold hover:text-red-500 cursor-pointer">X</p>
                        <img src="https://i.ibb.co/C2nC113/Screenshot-2022-12-09-at-22-34-18.png" alt="pic" class="w-[150px] h-[150px]">
                        <div class="flex flex-col gap-3">
                            <div class="flex justify-between items-center">
                                <h4 class="text-xl">${offer.name}</h4>
                                <p class="text-2xl text-red-500" >$50</p>
                            </div>
                            <div class="flex flex-col gap-3">
                                <p> description: ${offer.description}</p>
                                <p> restaurant: ${offer.restaurant_id}</p>
                                <p> address</p>
                                <p> phone number:</p>
                            </div>
                            <div class="flex justify-end ">
                                
                                <button type="button"
                                class="_addBtn inline-block px-6 py-2.5 bg-green-800 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-[#D49A3D] hover:shadow-lgfocus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out">Order</button>
                            </div>
                        </div>
                    </dialog>
                </div>`
            });
            document.getElementById('results').innerHTML = htmlResult;

           
        });
</script>

<script>
    const modals = document.querySelectorAll('.modal');
    const openModals = document.querySelectorAll('._detail');
    const closeModals = document.querySelectorAll('._close');

    modals.forEach(modal => {


        openModals.forEach(open => {
            open.addEventListener('click', () => {
                modal.showModal();
            })

        })
        closeModals.forEach(close => {

            close.addEventListener('click', () => {
                modal.close();
            })
        })


    });



    //toggle the filter
    const filterClick = document.querySelector("._filter");
    const categoris = document.querySelector("._boxOfCategory");


    filterClick.addEventListener("click", () => {
        categoris.classList.toggle("hidden");
    });

    // //toggle the cart list
    // const cartBtns = document.querySelectorAll("._cartBtn");
    // const cartList = document.querySelector(".cartBox");

    // cartBtns.forEach(btn => {
    //     btn.addEventListener("mouseenter", () => {
    //         cartList.classList.toggle("hidden");
    //     });
    // });
</script>
