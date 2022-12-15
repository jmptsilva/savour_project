<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="_wrap  bg-[#dfdfdf]">

        <h2 class="text-5xl font-bold py-5">Nearby Me</h2>

        <div class="grid md:grid-cols-2 justify-center">
            <div id="map"
                class="_googleMap w-[300px] md:w-[400px] lg:w-[600px] grid-cols-2 h-[300px] md:h-[400px] lg:h-screen rounded-xl">
            </div>
            <div>
                <input id="input" type="text">
                <div class="_restaurantList grid-cols-3 overflow-scroll h-[500px] ">

                    <div class="_restaurantCard w-[300px] md:w-[450px] my-3">
                        <a href="#"
                            class="flex items-center bg-white border rounded-lg shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-[#00391d] dark:hover:bg-green-800">
                            <img class="object-cover rounded py-2 pl-2 md:h-auto w-[150px] md:w-20 "
                                src="https://i.ibb.co/C2nC113/Screenshot-2022-12-09-at-22-34-18.png" alt="">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h5
                                    class="_restaurantName mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    Burger King</h5>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Address: Lorem ipsum dolor
                                    sit amet.</p>
                            </div>
                        </a>
                    </div>



                </div>
            </div>

        </div>
    </div>

    <script>
        let map;
        let currentPosition;
        let selectedRestaurant; // our restaurants name
        let marker;
        let directionService;
        let directionRenderer;
        let infoWindow;

        let restaurantCards = document.querySelectorAll('._restaurantCard')
        let restaurantNames = document.querySelector('._restaurantName').innerText

        // restaurantCards.addListener('click',function () {
        //     let name = document.querySelector('._restaurantName').innerText
        //     console.log(e.name)
        // })


        //     restaurantCards.forEach(e => {


        //         let name = document.querySelector('._restaurantName').innerText
        //         console.log(e.name)
        //     });
        //    console.log(restaurantNames)

        // put and set the first location
        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: {
                    lat: 49.8153,
                    lng: 6.1296
                },
                zoom: 9,
            });
            navigator.geolocation.getCurrentPosition(function(position) {
                currentPosition = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude,
                };

                map.setCenter(currentPosition); // set center to
                map.setZoom(12);



                const autocomplete = new google.maps.places.Autocomplete(



                    // why i cant get the restaurant name!!!!!!! with query selector!!!!
                    document.getElementById('input'), {
                        types: ['restaurant'],
                        bounds: {
                            east: currentPosition.lng + 0.001,
                            west: currentPosition.lng - 0.001,
                            south: currentPosition.lat - 0.001,
                            north: currentPosition.lat + 0.001,
                        },
                        strictBounds: false,
                    }
                );

                autocomplete.addListener('place_changed', function() {
                    const place = autocomplete.getPlace();
                    
                    

                    selectedRestaurant = {
                        // the details you wand from the restaurant
                        name: place.name,
                        address: place.formatted_address,
                        rating: place.rating,
                        placeId: place.place_id
                    };

                    map.setCenter(selectedRestaurant.location);

                    if (!marker) {
                        marker = new google.maps.Marker({
                            map: map,
                        })
                    }

                    marker.setPosition(selectedRestaurant.location);

                    if (!directionService) {
                        directionService = new google.maps.DirectionsService();
                    }

                    if (!directionRenderer) {
                        directionRenderer = new google.maps.DirectionsRenderer({
                            map: map,
                        });
                    }

                    directionRenderer.set('directions', null);

                    directionService.route({
                        origin: new google.maps.LatLng(
                            currentPosition.lat,
                            currentPosition.lng
                        ),
                        destination: {
                            placeId: selectedRestaurant.placeId,
                        },
                        travelMode: "WALKING",
                    }, function(response, status) {
                        if (status === google.maps.places.PlacesServiceStatus.OK) {
                            directionRenderer.setDirections(response);

                            if (!infoWindow) {
                                infoWindow = new google.maps.InfoWindow();
                            }

                            infoWindow.setContent(
                                `
                                <h3>${selectedRestaurant.name}</h3>
                                <div>How long takes to go :${response.routes[0].legs[0].duration.text}</div>
                                `
                                
                            );
                            infoWindow.open(map, marker);
                        }
                        
                    })
                })
            })
        }
    </script>

    <script async
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAE12Yb5ARHXJPst9SOmcCNcVskz6jJJMY&libraries=places&callback=initMap">
    </script>
</body>

</html>
