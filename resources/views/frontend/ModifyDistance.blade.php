<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('theme/css/ModifyDistanceStyle.css')}}">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
        <title>ya jari</title>
        <style type="text/css">
        @media (min-width: 1024px) {
        }
        @media all and (min-width: 1300px) {
        .MPItext1 {
        font-size: 25px;
        font-weight: bolder;
        padding-top: 10px;
        }
        }
        @media all and (min-width: 1440px) {
        .ViewProfileButton {
        color: white;
        font-size: 14px;
        padding: 0.3rem 1rem;
        background: linear-gradient(to right, #ff89a4, #ff0b44);
        border-radius: 5px;
        position: relative;
        left: -22px;
        }
        .MPItext1 {
        font-size: 25px;
        font-weight: bolder;
        padding-top: 10px;
        }
        }
        @media (min-width: 1590px) {
        .navalign {
        padding-left: 173px;
        padding-top: 10px;
        color: #ff6e9a;
        font-weight: bold;
        display: inline-flex;
        padding-right: .5rem;
        }
        .sideicon {
        padding-top: 0px;
        }
        .MPItext1 {
        font-size: 30px;
        font-weight: bolder;
        padding-top: 8px;
        }
        .cancel {
        margin: auto;
        text-align: center;
        height: 2.5rem;
        border-radius: 10px;
        margin-bottom: 2rem;
        border: 1px solid #ff406c;
        width: 9rem;
        position: relative;
        left: -50px;
        }
        .CCButton {
        margin: auto;
        text-align: center;
        height: 2.5rem;
        background: linear-gradient(to right, #ff89a4, #ff0b44);
        border-radius: 10px;
        margin-bottom: 2rem;
        width: 9rem;
        position: relative;
        left: 51px;
        }
        .navalign2 {
        padding-left: 570px;
        padding-top: 10px;
        color: #ff6e9a;
        font-weight: bold;
        display: inline-flex;
        }
        .nav-publish {
        padding-left: 20px;
        background: linear-gradient(to right, #ffacbf, #fa4d75);
        color: white;
        border-radius: 20px;
        align-items: center;
        padding-top: 10px;
        }
        .ViewProfileButton {
        position: relative;
        left: -35px;
        }
        .socialicon {
        transform: translateX(88%);
        }
        .followus {
        position: relative;
        left: 328px;
        top: -50px;
        }
        }
        @media all and (min-width: 1920px) {
        .navalign {
        padding-left: 170px;
        padding-top: 10px;
        color: #ff6e9a;
        font-weight: bold;
        display: inline-flex;
        padding-right: .5rem;
        }
        .navalign2 {
        padding-left: 920px;
        padding-top: 10px;
        color: #ff6e9a;
        font-weight: bold;
        display: inline-flex;
        }
        .sideicon {
        padding-top: 15px;
        }
        .MPItext1 {
        font-size: 30px;
        font-weight: bolder;
        padding-top: 20px;
        }
        .ViewProfileButton {
        position: relative;
        left: -45px;
        }
        }
        </style>
    </head>
    <body style="zoom:90%">
        <!--Nav Bar-->
        @if(Auth::user())
    @include('frontend.layout.navbar2')
@else
@include('frontend.layout.navbar')
@endif
        <!--Show Case-->
        <section class="text-center pt-3">
            <div class="container-fluid text-light">
                <div class="background-image row" style="    background-image: url(theme/pictures/Group\ 3.png);">
                    <div class="col-5 col-xxl-5 col-lg-5 col-md-3 col-sm-4 text-end">
                        <img src="{{asset('theme/icons/Path -1.png')}}" class="sideicon">
                    </div>
                    <div class="col-7 col-xxl-7 col-lg-7 col-md-8 col-sm-8 text-start">
                        <p class="MPItext1">Modify Account Settings</p>
                    </div>
                </div>
            </div>
        </section>
        <!--Modify Distance-->
        <section class="py-3">
            <div class="PIcontainer container">
                <div class="row">
                    <div class="hideShowDIV2 row pb-4" style="margin: auto;">
                        <div class="CompletePcol2 row" style="margin: auto; padding: 20px 0;">
                            <div class="col-sm-2 col-2 text-end">
                                <img class="CP2img" src="{{asset('theme/icons/ic_contacts_24px.png')}}">
                            </div>
                            <div class="col-sm-10 col-10 text-start">
                                <p class="CP2text1">70% of your profile is completed</p>
                                <p class="CP2text2">Complete your profile now</p>
                            </div>
                            <div class="row text-center">
                                <a href="{{route('professionalProfile')}}" class="viewmyprofile" style="text-decoration: none;"><span class="ViewProfileButton">View My Profile</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hideShowDIV1 row pb-5 pt-3">
                    <div class="col-xxl-7 col-lg-6 col-md-12">
                    </div>
                    <div class="col-sm-1">
                    </div>
                    <div class="col-xxl-4 col-lg-5 col-md-12">
                        <div class="CompletePcol2 row p-3">
                            <div class="col-sm-2 text-end">
                                <img class="CP2img" src="{{asset('theme/icons/ic_contacts_24px.png')}}">
                            </div>
                            <div class="col-sm-10 text-start">
                                <p class="CP2text1">70% of your profile is completed</p>
                                <p class="CP2text2">Complete your profile now</p>
                            </div>
                            <div class="row text-center">
                                <a href="{{route('professionalProfile')}}" style="text-decoration: none;"><span class="ViewProfileButton">View My Profile</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="CCDIVcontainer py-3">
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

                            @csrf
                        <div class="CDtext row pb-3">
                               <form method="post" action="{{route('user_save_distance')}}" id="distanceForm">
                                    @csrf
                                    <div class="col-6 col-sm-6">
                                        <p style="font-size: 18px;font-weight: bolder;margin-bottom: 0;"><strong>Distance:</strong></p>
                                    </div>
                                    <div class="col-6 col-sm-6 text-end">
                                        <p style="font-size: 18px;font-weight: bolder;margin-bottom: 0;"><strong><span id="distance_m">{{isset($distance)?$distance->distance:5}}</span> km</strong></p>
                                    </div>
                                    <input type="hidden" name="modified" value="1">
                                    <input type="hidden" name="lat" id="lat" value="{{isset($distance)?$distance->lat:0.00000}}">
                                    <input type="hidden" name="lng" id="lng" value="{{isset($distance)?$distance->lng:0.00000}}">
                                    <div class="col-12 col-sm-12">
                                    <input type="range" class="form-range" id="customRange1" name="distance_range" step="0.1" value="{{isset($distance)?$distance->distance:5}}" min="5" max="20">
                                </div>
                            
                                </form>
                            </div>

                        <div class="ChoseAddEditC row p-2" >
                        <div id="map" ></div>
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
                    </div>
                </div>
            </div>
        </section>

        @include('frontend.layout.footer')
        @include('frontend.layout.scripts')





         <script type="text/javascript">
        
        // let map;
        var lat1='{{isset($distance)?$distance->lat:NULL}}';var lng1='{{isset($distance)?$distance->lng:NULL}}';
        function initMap() {
            console.log('lat: '+lat1);
          lat = Number(lat1?lat1:33.604544); lng = Number(lng1?lng1:73.604544);  

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
                        lat = Number(lat??position.coords.longitude); lng = Number(lng??position.coords.longitude); 
/*                            lat = position.coords.latitude;
                            lng = position.coords.longitude;*/
                      marker = new google.maps.Marker({
                        position: { lat: lat, lng: lng },
                        map
                      });       

                  $('#lat').val(lat);
                  $('#lng').val(lng);                  
                    console.log(lat,lng);
                    map.setCenter(marker.getPosition());                   
                     wellCircle = new google.maps.Circle({
                        strokeColor: '#FF0000',
                        strokeOpacity: 0.8,
                        strokeWeight: 2,
                        fillColor: '#FF0000',
                        fillOpacity: 0.35,
                        map: map,
                        center: new google.maps.LatLng(marker.getPosition()),
                        radius: 1000 * 0.621371,
                    });
                }   

        $(window).on('load', function(){
            getLocation();
         })       
        

          $(document).on('input', '#customRange1', function() {
            $('#distance_m').html( $(this).val() );

          /*  wellCircle = new google.maps.Circle({
                        strokeColor: '#FF0000',
                        strokeOpacity: 0.8,
                        strokeWeight: 2,
                        fillColor: '#FF0000',
                        fillOpacity: 0.35,
                        map: map,
                        center: new google.maps.LatLng(marker.getPosition()),
                        radius: $(this).val() * 0.621371,
                    });
                  */

        });   


        $('#submitForm').click(function(){

            $('#distanceForm').submit();

        });
    </script>

    </body>
</html>
