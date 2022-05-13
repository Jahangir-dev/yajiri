<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('theme/css/ChoseDistanceStyle.css')}}">

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>ya jari</title>
    <style type="text/css">

        .mapboxgl-marker{
            position: relative !important;
        }

    </style>
</head>

<body style="zoom:90%">

    <!--Nav Bar-->

    <nav class="navbar navbar-expand-xl navbar-light fixed-top"
        style="background-color: white;box-shadow: 0px 2px 5px #acacac;">
        <div class="container" style="display: block;">
            <div class="row">
                <div class="col">
                </div>
                <div class="col text-center">
                    <a class="navbar-brand" href="#">
                        <img class="yajari-removebg-preview-1" src="{{asset('theme/icons/yajari-removebg-preview-1.png')}}">
                    </a>
                </div>
                <div class="col text-end">
                    <div class="CCdropdown dropdown">
                        <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{asset('theme/icons/1280px-Flag_of_France.svg.png')}}" alt="">
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="#">English</a></li>
                            <li><a class="dropdown-item" href="#">French</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!--Show Case-->

    <section class="pt-4 text-center">
        <div class="CCcontainer container text-light">
            <div class="background-image text-center row">
                <div class="col col-sm-3">
                    <img class="CCimg1" src="{{asset('theme/icons/Group 1916.png')}}">
                </div>
                <div class="col col-sm-6 text-center">
                    <p class="CCShowtext1">Choose Distance</p>
                </div>
                <div class="col col-sm-3">
                    <img class="CCimg2" src="{{asset('theme/icons/Group 1916.png')}}">
                </div>
            </div>
        </div>
    </section>


    <!--Choose Distance-->

    <section class="py-3">
        <div class="CCDIVcontainer container">
            <div class="row py-3">
                <div class="col-2 col-sm-2 text-end">
                    <img class="CCDIVimg" src="{{asset('theme/icons/Subtraction 17.png')}}">
                </div>
                <div class="col-10 col-sm-10 text-start">
                    <p class="ChoseCText1">Choose the distance within which you are going to provide your services:</p>
                    <p class="ChoseCText2">Your choosen area must be minimum 5 kilometers. Maximum can be according to
                        your wish:</p>
                </div>
            </div>
            <div class="CDtext row pb-3">
               <form method="post" action="{{route('user_save_distance')}}" id="distanceForm">
                    @csrf
                    <div class="col-6 col-sm-6">
                        <p style="font-size: 18px;font-weight: bolder;margin-bottom: 0;"><strong>Distance:</strong></p>
                    </div>
                    <div class="col-6 col-sm-6 text-end">
                        <p style="font-size: 18px;font-weight: bolder;margin-bottom: 0;"><strong><span id="distance_m">20</span> km</strong></p>
                    </div>
                    <input type="hidden" name="lat" value="{{isset($lat) ? $lat : ''}}" id="lat">
                    <input type="hidden" name="lng" value="{{isset($lng) ? $lng : ''}}" id="lng">
                    <div class="col-12 col-sm-12">
                    <input type="range" class="form-range" id="customRange1" name="distance_range" step="1" value="5" min="5" max="20">
                </div>

                </form>
            </div>
            <div class="ChoseAddEditC row p-2" id="map">

            </div>
            <div class="ChoseAddEditB row pt-4">
                <div class="col-4 col-sm-5 col-lg-4 text-start">


                    <div class="form-button2 row">
                        <a>
                            <p>

                                Cancel
                            </p>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-2 col-lg-4">

                </div>
                <div class="col-4 col-sm-5 col-lg-4 text-end">
                    <div class="CCButton row">
                        <a role="button" id="submitForm" href="javascript:void(0)">
                            <p style="color: white;">Continue</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--Footer-->

    <section class="py-5">
        <div class="container" style="width: 80%;">
            <div class="row" style="margin: auto;">
                <img src="{{asset('theme/icons/Group 2117.png')}}" style="width: 12rem;height: 2rem;margin: auto;">
            </div>

        </div>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBikMgCY_d1NwtVzeM4mIviqZBBDrAFEko&callback=initMap&v=weekly&channel=2"
      async
    ></script>

    <script type="text/javascript">

        let map;
var circle;
        function initMap() {

lat = parseFloat($('#lat').val());
lng = parseFloat($('#lng').val());
console.log(lat,lng);
          map = new google.maps.Map(document.getElementById("map"), {
            center: { lat: lat, lng: lng },
            zoom: 12,
          });

                                            let infoWindow = new google.maps.InfoWindow({
                                                content: "Click the map to get Lat/Lng!",
                                                position: [lat,lng],
                                            });

                                            infoWindow.open(map);
                                            // Configure the click listener.
                                            map.addListener("click", (mapsMouseEvent) => {
                                                // Close the current InfoWindow.
                                                infoWindow.close();
                                                // Create a new InfoWindow.
                                                infoWindow = new google.maps.InfoWindow({
                                                    position: mapsMouseEvent.latLng,
                                                });

                                                document.getElementById('lat').value = mapsMouseEvent.latLng
                                                    .lat();
                                                document.getElementById('lng').value = mapsMouseEvent.latLng
                                                    .lng();
                                                infoWindow.setContent(
                                                    JSON.stringify(mapsMouseEvent.latLng.toJSON(), null, 2)
                                                );
                                                infoWindow.open(map);
                                            });


        }
            var wellCircle;var marker
           function getLocation() {

                  if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(showPosition);
                  }
                }

                function showPosition(position) {
//                     lat_ = position.coords.latitude;
// lng_ = position.coords.longitude;
                    lat = parseFloat($('#lat').val());
                    lng = parseFloat($('#lng').val());

                            // lat = 36.83901
                            // lng = 10.23931;
                  marker = new google.maps.Marker({
                        position: { lat: lat, lng: lng },
                        map
                      });

                //   $('#lat').val(lat);

                //   $('#lng').val(lng);
                  console.log(lat,lng);
                    map.setCenter(marker.getPosition());

                    circle = new google.maps.Circle({
                        strokeColor: "#FF0000",
                        strokeOpacity: 0.8,
                        strokeWeight: 2,
                        fillColor: "#FF0000",
                        fillOpacity: 0.35,
                        map: map,
                        radius: 500
                    });
                    circle.bindTo('center', marker, 'position');


                }





          $(document).on('input', '#customRange1', function( ) {
           var vl= $('#distance_m').html( $(this).val() );
            // alert($(this).val());
              circle.setRadius($(this).val()*100);



        });






$(document).ready(function(){
    getLocation();

});
        // $(window).on('load', function(){
        //     getLocation();

        // })


        $('#submitForm').click(function(){

            $('#distanceForm').submit();

        });
    </script>

</body>

</html>
