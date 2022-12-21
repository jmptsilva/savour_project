

    <div id="nearby" class="_wrap bg-[#dfdfdf] pb-14 flex flex-col justify-center items-center">

        <h2  class="text-5xl font-bold py-[50px] text-center">Find my way</h2>


            <input id="input" type="text" class="bg-white h-10 w-[300px] rounded-full text-sm focus:outline-none">
            <div id="map"
                class="_googleMap w-[300px] md:w-[400px] my-10 lg:w-[80%] h-[300px] md:h-[400px] lg:h-screen rounded-xl">
            </div>
            

        
    </div>
    <script>
        
        
       //// google map

        let map;
        let currentPosition;
        let selectedRestaurant; // our restaurants name
        let marker;
        let directionService;
        let directionRenderer;
        let infoWindow;



     
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
                        location: place.geometry.location,
                        name: place.name,
                        address: place.formatted_address,
                        phoneNumber: place.formatted_phone_number,
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
                                <h3>${selectedRestaurant.name}</h3><br>
                                <div>Address:<br>${selectedRestaurant.address}</div><br>
                                
                                <div>Walking:<br>${response.routes[0].legs[0].duration.text}</div>
                                `

                            );
                           
                                infoWindow.open({map, anchor:marker});
                           
                        }

                    })
                })
            })
        }
    </script>

    <script async
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAE12Yb5ARHXJPst9SOmcCNcVskz6jJJMY&libraries=places&callback=initMap">
    </script>
