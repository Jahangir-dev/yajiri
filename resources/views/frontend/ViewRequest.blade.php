@include('frontend.layout.head')
@section('viewrequests','active')
<link rel="stylesheet" href="{{asset('theme/css/ViewRequestStyle.css')}}">
    <style type="text/css">
        @media all and (min-width: 1280px) {
            .CRButton3 {
                position: relative;
                left: -412px;
                top: 97px;
            }

            .CRButton1 {
                margin-left: -0.3rem;
            }
        }

        @media all and (min-width: 1590px) {
            .navalign {
                padding-left: 173px;
                padding-top: 10px;
                color: #ff6e9a;
                font-weight: bold;
                display: inline-flex;
                padding-right: .5rem;
            }

            .CRButton3 {
                position: relative;
                left: -514px;
                top: 81px;
            }

            .ahre {
                padding-left: 2rem;
            }

            .navalign2 {
                padding-left: 570px;
                padding-top: 10px;
                color: #ff6e9a;
                font-weight: bold;
                display: inline-flex;
            }

            .navpublish {

                padding-left: 20px;
                background: linear-gradient(to right, #ffacbf, #fa4d75);

                color: white;
                border-radius: 20px;
                align-items: center;
                padding-top: 10px;
            }

            .johnydavid {
                position: relative;
                left: 0px;
            }

            .labardoloation {
                position: relative;
                left: 0px;
                top: 0px;
            }

            .CRButton1 {
                height: 2.5rem;
                width: 8rem;
                background: white;
                border-color: #ff3b72;
                color: #ff4b7e;
                font-size: 16px;
                font-weight: bolder;
                border-radius: 8px;
                color: #ff4b7e;
                padding-top: 7px;
            }

            .CRButton1 p {

                font-weight: bolder;
                color: #ff4b7e;
            }

            .CRButton1 a {
                font-size: 16px;
                text-decoration: none;
                color: white;
            }
        }

        @media (min-width: 1600px) {
            .CRButton3 {
                position: relative;
                left: -516px;
                top: 97px;
            }

            @media all and (min-width: 1800px) {


                .CRButton3 {
                    position: relative;
                    left: -554px;
                    top: 96px;
                }
            }




            @media all and (min-width: 1920px) {
                .navalign {
                    padding-left: 173px;
                    padding-top: 10px;
                    color: #ff6e9a;
                    font-weight: bold;
                    display: inline-flex;
                    padding-right: .5rem;
                }

                .navalign2 {
                    padding-left: 921px;
                    padding-top: 10px;
                    color: #ff6e9a;
                    font-weight: bold;
                    display: inline-flex;
                }

                .CRButton1 {
                    height: 2.5rem;
                    width: 8rem;
                    background: white;
                    border-color: #ff3b72;
                    color: #ff4b7e;
                    font-size: 16px;
                    font-weight: bolder;
                    border-radius: 8px;
                    color: #ff4b7e;
                    padding-top: 7px;
                    position: relative;
                    left: -7px;
                }

                .CRButton3 {
                    position: relative;
                    left: -567px;
                    top: 81px;
                }

            }
    </style>

<body style="zoom:90%">
    <!--Nav Bar-->
    @if(Auth::user())         
    @include('frontend.layout.navbar2')       
@else
@include('frontend.layout.navbar')       
@endif
    <!--Show Case-->
    <section class="pt-3 text-center">
        <div class="row" style="margin:0px">

            <div class="col-lg-12">
                <div class="background-image text-center backgroundimage" style="background-image: url(theme/pictures/Group\ 12.png);">
                    <p class="showcase-text1" style="color:white">Request Details</p>


                </div>
            </div>


        </div>


    </section>

    <!--Confrom Request-->
    <section class="py-5 cardtop">
        <div class="CRequestContainer container">
            <div class="CRBoxCont row">
                <div class="col-lg-8 col-md-12" style="margin: auto;">
                    <div class="" style=" margin: auto;">
                        <div class="row">
                            <p class="responses-date1 text-start">{{$confirm_publish->created_at->diffForHumans()}}</p>
                        </div>
                        <div class="row">
                            <div class="col-3 col-sm-4 col-md-4 col-lg-4 col-xxl-3">
                                <img class="requestFaceImg1" class="requestFaceImg1" src="{{asset('theme/icons/asset-1.png')}}">
                            </div>
                            <div class="col-9 col-sm-8 col-md-8 col-lg-8 col-xxl-9 text-start ConformRequestCol2">
                                <div class="d-flex" style="justify-content: space-between;">
                                    <div class="d-flex flex-wrap confirmpublish">
                                        <p class="Responses-Name1 text-start">
                                        {{Auth::user()->name}}</p>
                                        <p class="CRperticularT">Perticular</p>
                                    </div>


                                    <div class="d-flex flex-wrap">

                                        <span class="QuotationButton">${{$confirm_publish->price}}</span>

                                    </div>



                                </div>
                                <div class="row">
                                    <div class="col d-flex" style="justify-content: space-between;">
                                        <div class="d-flex lebardolocation">
                                            <img src="{{asset('theme/icons/ic_place_-2.png')}}" style="width: 12px;height: 17px;">
                                            <p class="Position-t1 text-start"> {{$confirm_publish->formated_address}}</p>
                                        </div>
                                        <div>
                                            <div class="">
                                                @if($confirm_publish->urgent)
                                                <button class="btn btn-default btn-block imgtopurgent mt-1" style="color:#f72556;border: 2px solid;border-radius: 6px;min-width: 190px;">{{$confirm_publish->urgent}}</button><br>
                                                @endif
                                                @if($confirm_publish->professional)                                                                                                
                                                <button class="btn btn-default btn-block imgtopurgent mt-1" style="color:#f72556;border: 2px solid;border-radius: 6px;min-width: 190px;">{{$confirm_publish->professional}}</button><br>
                                                @endif
                                                @if($confirm_publish->phone_number)
                                                <button class="btn btn-default btn-block imgtopurgent mt-1" style="color:#f72556;border: 2px solid;border-radius: 6px;min-width: 190px;">{{$confirm_publish->phone_number}}</button>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col d-flex star">
                                   <!-- <img class="responses-star1" src="icons/Group 2411.png"> -->

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row py-2 lookingformove">
                            <p id="request-textID1">{{$confirm_publish->request_title}}</p>
                            <p id="request-textID2" class="text-start pt-1">{{$confirm_publish->description}}</p>
                        </div>
                        <div class="row photogallery">
                            <p class="CRPhotosT">Photos:</p>
                            <div class="col">
                            @foreach($publish_image as $img)
                                <img class="CRPhotosImg" src="{{asset($img->images)}}">
                               @endforeach
                            </div>
                        </div>

                    </div>
                </div>
                <div class="mapDIVP col-lg-4 col-md-12">
                <iframe src = "https://maps.google.com/maps?q={{$confirm_publish->position}},{{$confirm_publish->position2}}&hl=es;z=14&amp;output=embed" style="height:300px;width:300px"></iframe>

                </div>
                <div class="row" style="margin:0px;padding-bottom: 30px;">
                    <div class="col-sm-3 col-lg-12 col-md-6 ">
                        <div class="CRButton1">
                            <a href="{{route('publishrequest')}}">
                                <p class="ptop">Go Back</p>
                            </a>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </section>
    <section>
        <div class="modal fade" id="staticBackdrop" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="col text-center mb-3">
                            <img src="icons/ic_contacts_-1.png" style="width: 2.3rem;">
                        </div>
                        <p class="MBText1">Contact via messages or make a call</p>
                        <p class="MBText2">You can make a call or send a message
                            for the further proceedings.
                        </p>
                        <div class="row">
                            <div class="col text-center">
                                <a href="Chat.html" class="SendMessageButton">Send Message</a>
                            </div>
                            <div class="col text-center">
                                <a href="" class="CallButton" data-bs-toggle="modal" data-bs-target="#staticBackdrop2" data-bs-dismiss="modal">Make Call</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="modal fade" id="staticBackdrop2" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop2Label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="col text-center mb-3">
                            <img src="icons/ic_contact_phone_24px.png" style="width: 4rem;height:3rem;">
                        </div>
                        <p class="MBText3"><b>742 009 993 23</b></p>
                        <div class="col text-center">
                            <a href="" class="CallButton2">Call</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Model-->
    <!-- <section>
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header row">
                                <div class="col-4 col-sm-4">
                                    <button type="button" data-bs-dismiss="modal" aria-label="Close"
                                    style="background-color: white;border: none;">
                                    <img class="model-img1" src="icons/ic_keyboard_arrow_right_24Blackpx.png">
                                    </button>
                                </div>
                                <div class="col-7 col-sm-7">
                                    <p class="modal-title text-start" id="staticBackdropLabel">Posting First Request</p>
                                </div>
                            </div>
                            <div class="modal-body">
                                <p class="MBText1">Validate your telephone number</p>
                                <p class="MBText2">Enter the code sent to your Telephone number through SMS </p>
                                <p class="MBText2">08:20</p>
                                <div class="MIputDIV d-flex">
                                    <input type="text" class="Modelinput form-control" placeholder="1" aria-label="1">
                                    <input type="text" class="Modelinput form-control" placeholder="2" aria-label="2">
                                    <input type="text" class="Modelinput form-control" placeholder="3" aria-label="3">
                                    <input type="text" class="Modelinput form-control" placeholder="4" aria-label="4">
                                    <input type="text" class="Modelinput form-control" placeholder="5" aria-label="5">
                                    <input type="text" class="form-control" placeholder="6" aria-label="6">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="row">
                                    <div class="col-8 col-sm-7 text-end">
                                        <p class="MFtext">Did not receive any code?</p>
                                        
                                    </div>
                                    <div class="col-4 col-sm-5">
                                        <a href="validatingRequest1.html">
                                            <p class="MFtext"><b>Send again</b></p>
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <img class="MFImg" src="icons/yajari-removebg-preview.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
    <!--Footer-->
    
    @include('frontend.layout.footer')
    @include('frontend.layout.scripts')
<script src='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'></script>
    <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoiYW1tYXIxMjMxMjMiLCJhIjoiY2tydzJsMm9jMGNpajJucnh4M2pmaTVsZCJ9.ZxNGpJR7Qw9t3ONgdZmbQA';
        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11',
            center: [74.515225, 32.467766],
            zoom: 15,
        });
        const marker1 = new mapboxgl.Marker()
            .setLngLat([74.515225, 32.467766])
            .addTo(map);
    </script>

</body></html>