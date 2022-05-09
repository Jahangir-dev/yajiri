<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <link rel="stylesheet" href="{{asset('theme/css/ConformPublishStyle.css')}}">
            <link href="https://api.mapbox.com/mapbox-gl-js/v2.4.1/mapbox-gl.css" rel="stylesheet">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
            <title>ya jari</title>
            
            <style type="text/css">
            @media all and (min-width: 1300px) {
            .background-image{
            background-image: url(../theme/pictures/Group\ 12.png);
            height: 180px;
            }
            @media all and (min-width: 1590px) {
            .navalign {
            padding-left: 350px;
            padding-top: 10px;
            color: #ff6e9a;
            font-weight: bold;
            display: inline-flex;
            padding-right: .5rem;
            }
            .ahre {
            padding-left: 2rem;
            }
            .ReportCol {
            margin-right: 18rem;
            }
            .navalign2 {
            padding-left: 390px;
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
            .searchbardown {
            position: relative;
            top: -10px;
            left: -160px
            }
            .col-xxl-7 {
            flex: 0 0 auto;
            width: 100%;
            }
            .searchbar {
            position: relative;
            width: 160%;
            left: -160px;
            }
            .lastpic {
            position: relative;
            top: 7px;
            left: 35px;
            }
            
            .CRButton1 {
            text-decoration: none;
            text-align: center;
            height: 2.5rem;
            width: 8rem;
            color: black;
            border: 1px solid #fb597f;
            border-radius: 10px;
            margin-left: 0.8rem;
            }
            .CRButton1 p {
            padding-top: 0.5rem;
            }
            .CRButton2 p {
            padding-top: 0.5rem;
            font-weight: bolder;
            }
            .CRButton3 {
            width: 6rem;
            height: 2rem;
            position: relative;
            top: 0px;
            left: -126px;
            }
            }
            @media all and (min-width: 1600px) {
            .CRButton3 {
            width: 6rem;
            height: 2rem;
            position: relative;
            top: 0px;
            left: -95px;
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
            .ahre {
            padding-left: 2rem;
            }
            .ReportCol {
            margin-right: 18rem;
            }
            .navalign2 {
            padding-left: 939px;
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
            .CRButton2 {
            text-decoration: none;
            text-align: center;
            height: 3.5rem !important;
            width: 13rem !important;
            background: linear-gradient(to right, #ff6d99, #fd0d55);
            position: relative;
            left: -200px;
            }
            .CRButton3 {
            width: 9rem;
            height: 2rem;
            }
            .imgtopurgent {
            position: relative;
            left: -393px;
            top: 92px;
            }
            }
            .CRButton3 {
                    text-align: center;
                    width: 5rem;
                    height: 2.5rem;
                    background-color: white;
                    border: 2px solid #fd6794;
                    border-radius: 6px;
                }

.CRButton3 a {
    font-size: 16px;
    text-decoration: none;
    color: #F9326D;
}

.CRButton3 p {
    padding-top: 0.5rem;
}              

.CRButton2 a {
    font-size: 16px;
    text-decoration: none;
    color: white;
}

.CRButton1 p, .CRButton2 p {
    padding-top: 0.9rem;
    font-weight: bolder;
}

@media (min-width: 1200px){
.flex-container {
    position: absolute;
    right: 60px;
    top: 20px;
}
}

            </style>
            <body style="zoom:90%;height:295px;">
                <!--Nav Bar-->
                
                @if(Auth::user())         
    @include('frontend.layout.navbar2')       
@else
@include('frontend.layout.navbar')       
@endif
                <section class="pt-3 text-center">
                    <div class="container-fluid">
                        <div class="row" style="margin:0px">
                            <div class="col-lg-12 col-sm-12 col-12">
                                <div  class="background-image" style="width: 100%;border-radius: 20px;">
                                    <p class="showcase-text1" style="color:white">Publish your requests</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--Confrom Request-->

                  @if(isset(Auth::user()->image)) 
                    @php $image = asset(Auth::user()->image); @endphp
                  @else
                    @php $image = 'https://wise.edu.pk/wp-content/uploads/2021/03/placeholder.png'; @endphp
                  @endif

                <form method="POST" action="{{route('user-confirm-published-save')}}" id="my_form">
                    @csrf
                    <input type="hidden" name="id" value="{{$request->id}}">
                <section class="py-5 cardtop">
                    <div class="CRequestContainer container">
                    <div class="CRBoxCont row">
                        <div class="col-lg-8 col-md-12" style="margin: auto;">
                            <div class="" style=" margin: auto;">
                                <div class="row">
                                    <p class="responses-date1 text-start">{{$request->created_at->diffForHumans()}}</p>
                                </div>
                                <div class="row">
                                    <div class="col-3 col-sm-4 col-md-4 col-lg-4 col-xxl-3">
                                        <img class="requestFaceImg1" src="{{$image}}">
                                    </div>
                                    <div class="col-9 col-sm-8 col-md-8 col-lg-8 col-xxl-9 text-start ConformRequestCol2">
                                        <div class="d-flex" style="justify-content: space-between;">
                                            <div class="d-flex flex-wrap">
                                                <p class="Responses-Name1 text-start">
                                                {{Auth::user()->name}}</p>
                                                @if($request->user->registration_type==1)<p class="CRperticularT">Professional</p>@elseif($request->user->registration_type==2)<p class="CRperticularT">Private</p>@endif
                                            </div>
                                            
                                            
                                            <div class="d-flex flex-wrap">
                                                
                                                <p class="CRperticularT">USD {{number_format($request->price,2)}}</p>
                                                <!-- <p class="responses-tQ2"></p> -->
                                            </div>
                                            
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col d-flex" style="justify-content: space-between;">
                                                <div class="d-flex">
                                                    <img src="{{asset('theme/icons/ic_place_-2.png')}}" style="width: 12px;height: 17px;">
                                                    <p class="Position-t1 text-start">{{$request->formated_address}}</p>
                                                </div>
                                                <div>
                                                    <div class="CRButton3">
                                                        <a href="">
                                                             @if($request->urgent=='Urgent')<p>Urgent</p> @endif
                                                             @if($request->professional=='Only Professional')<p>Only Professional</p> @endif
                                                             @if($request->phone_number=='Show Phone Number')<p>Show Phone Number</p> @endif
                                                            
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col d-flex">
                                                <img class="responses-star1" src="{{asset('theme/icons/Group 2411.png')}}">
                                                <p class="Responses-starText text-start">
                                                    5/5
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row py-2">
                                    <p id="request-textID1">{{$request->request_title}}</p>
                                    <p id="request-textID2" class="text-start pt-1">{{$request->description}}</p>
                                </div>
                                <div class="row">
                                    <p class="CRPhotosT">Photos:</p>
                                    <div class="col">
                                          @foreach($publish_image as $img)
                                            <img class="CRPhotosImg" src="{{asset($img->images)}}">
                                            @endforeach
<!--                                         <img class="CRPhotosImg" src="pictures/boris-debusscher-1.png">
                                        <img class="CRPhotosImg" src="pictures/cdc-T-1.png">
                                        <img class="CRPhotosImg" src="pictures/cdc-wz-1.png"> -->
                                    </div>
                                </div>
                                <div class="row pt-5">
                                    <div class="col-sm-5 col pb-3">
                                        <div class="CRButton1" style=" height: 3.5rem !important;width: 13rem !important;">
                                            <a href="{{route('UpdatePublishRequest',['id'=>$request->id])}}">
                                                <p>Modify</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-7 col">
                                        <div class="CRButton2" style=" height: 3.5rem !important;width: 13rem !important;left: 0px;">
                                            <a onclick="document.getElementById('my_form').submit();" href="javascript:void">
                                                <p>Publish</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mapDIVP col-lg-4 col-md-12">
                            <div class="mapDIV">
                                <div id='map'></div>
                            </div>
                        </div>
                    </div>
                </div>
                </section>

                </form>
                <!--Model-->
                <section>
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header row">
                                    <div class="col-4 col-sm-4">
                                        <button type="button" data-bs-dismiss="modal" aria-label="Close" style="background-color: white;border: none;">
                                        <img class="model-img1" src="{{asset('theme/icons/ic_keyboard_arrow_right_24Blackpx.png')}}">
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
                                        <img class="MFImg" src="{{asset('theme/icons/yajari-removebg-preview.png')}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--Footer-->
                
                @include('frontend.layout.footer')
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
                <script src='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'></script>
                <script>
                mapboxgl.accessToken = 'pk.eyJ1IjoiYW1tYXIxMjMxMjMiLCJhIjoiY2tydzJsMm9jMGNpajJucnh4M2pmaTVsZCJ9.ZxNGpJR7Qw9t3ONgdZmbQA';
                var map = new mapboxgl.Map({
                container: 'map',
                style: 'mapbox://styles/mapbox/streets-v11',
                center: ['{{$request->position2}}', '{{$request->position}}'],
                zoom: 15,
                attributionControl: false
                });
                const marker1 = new mapboxgl.Marker()
                .setLngLat(['{{$request->position2}}', '{{$request->position}}'])
                .addTo(map);
                </script>
            </body></html>