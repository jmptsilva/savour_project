<div class="_container bg-[#DFDFDF] py-4 mx-auto">

    <div class="_wrap flex flex-col m-4">
        <div class="_infoBarLine flex flex-col md:flex-row justify-around mx-auto items-center max-w-5xl">
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
            <a href="javascript: scrolltoId();">
                <div
                    class="w-[150px] px-5 py-2 bg-green-800 hover:bg-[#D49A3D] rounded-lg text-center text-white cursor-pointer">
                    Find My Way</div>
            </a>


        </div>

        <div class="_mainlist flex flex-col md:flex-row items-center justify-center">

            <div class="_filter flex w-[250px] flex-col gap-4 self-start">
                <h3
                    class="text-2xl py-3 md:py-0 md:pl-4 cursor-pointer md:cursor-default hover:scale-105 hover:text-green-800 md:hover:text-black md:hover:scale-100 ">
                    Filter</h3>
                <hr>
                <div class="_boxOfCategory hidden md:flex md:flex-col">

                    <div class="md:pl-4">
                        <p class="text-xl my-4">By Restaurant</p>
                        <div class="_categories flex flex-col">

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
            <div id="results" class="_cards grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">




            </div>
        </div>
    </div>
</div>





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
                htmlResult += `<div class="_productCard flex scale-100 transition-all hover:scale-105">
                    <div class="flex flex-col items-center rounded-lg shadow-lg bg-white m-4">
                        <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">
                            <img class="rounded-t-lg bg-cover bg-no-repeat bg-center w-[200px] h-[150px]  pt-1 bg-cover"
                                src="assets/foods/${offer.image}" alt="" />
                            
                        </a>
                        <div class="p-6">
                            <div class="flex justify-between items-baseline">
                                <h5 class="_foodName w-[100px] text-ellipsis whitespace-nowrap text-gray-900 text-[18px] text-boldfont-medium mb-2">${offer.name}</h5>
                                <p class="_price text-red-500 text-xl">$${offer.price}</p>
                            </div>
                            <p class="_restaurant text-gray-700 text-base mb-1">
                                ${offer.rest_name}
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
                        <img src="assets/foods/${offer.image}" alt="pic" class="w-[250px] h-[200px] bg-cover">
                        <div class="flex flex-col gap-3">
                            <div class="flex justify-between items-center pt-1">
                                <h4 class="text-xl font-bold">${offer.name}</h4>
                                <p class="text-2xl text-red-500" >$ ${offer.price}</p>
                            </div>
                            <div class="flex flex-col gap-3">
                                <p> Description: ${offer.description}</p>
                                <p> Restaurant: ${offer.rest_name}</p>
                                <p> Address: ${offer.address}</p>
                                <p> Phone number: ${offer.phone_number}</p>
                            </div>
                            <div class="flex justify-end ">
                                <button type="submit" onclick="addToCart(${offer.id})"
                                class="_addBtn inline-block px-6 py-2.5 bg-green-800 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-[#D49A3D] hover:shadow-lgfocus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out">Order</button>
                            </div>
                        </div>
                    </dialog>
                </div>`
            });
            document.getElementById('results').innerHTML = htmlResult;

            const modals = document.querySelectorAll('.modal');
            const openModals = document.querySelectorAll('._detail');
            const closeModals = document.querySelectorAll('._close');



            openModals.forEach((open, index) => {
                open.addEventListener('click', (event) => {
                    //event.preventDefault();
                    modals[index].showModal();
                })

            })
            closeModals.forEach((close, index) => {

                close.addEventListener('click', (event) => {
                    //event.preventDefault();
                    modals[index].close();
                })
            })


        });




    /// filter fetch

    fetch("{{ route('all_restaurant') }}", {
            method: 'get',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        }).then(res => res.json())
        .then(function(restaurants) {
            let result = "";
            console.log(restaurants)
            restaurants.forEach(r => {
                result += `<div >
                                <input class="restaurant_filter" type="checkbox" value="${r.id}" name="${r.name}" id="${r.id}">
                                <label for="${r.name}">${r.name}</label>
                            </div>`
            });
            document.querySelector('._categories').innerHTML = result;

            const filterClicked = new Set()

            document.querySelectorAll('.restaurant_filter').forEach(filter => {
                filter.addEventListener('input', function() {
                    filterClicked.add(filter.value)

                    console.log(filterClicked)
                })
            })


        })
</script>
<script>
    //scroll to nearby when click

    function scrolltoId() {
        let access = document.getElementById("nearby");
        access.scrollIntoView({
            behavior: 'smooth'
        });
    }

    //toggle the filter
    const filterClick = document.querySelector("._filter");
    const categoris = document.querySelector("._boxOfCategory");


    filterClick.addEventListener("click", () => {
        categoris.classList.toggle("hidden");
    });
</script>
