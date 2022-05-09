<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('theme/css/viewdetail.css')}}">
        <link href="https://api.mapbox.com/mapbox-gl-js/v2.4.1/mapbox-gl.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <title>ya jari</title>
        <style type="text/css">
        .navpublish{
        padding-left: 20px;
        background: linear-gradient(to right, #ffacbf, #fa4d75);
        color: white;
        border-radius: 20px;
        align-items: center;
        padding-top: 10px;
        }
        .requestnav {
        padding-left: 25px;
        text-decoration: none;
        }
        .servicesnav {
        padding-left: 20px;
        padding-right: 20px;
        text-decoration: none;
        }
        @media all and (min-width: 1024px) {
        .uploadPicture {
        width: 8rem;
        height: 7rem;
        border-style: dashed;
        border-color: rgb(175, 175, 175);
        position: relative;
        top: -16px;
        }
        .buttonfile{
        opacity: 0;
        }
        .CRButton1 {
        text-align: center;
        width: 7rem;
        height: 2.2rem;
        background-color: white;
        border: 2px solid #fd6794;
        border-radius: 6px;
        }
        .CRButton1 p {
        padding-top: 0.3rem;
        }
        .CRButton2 {
        text-align: center;
        width: 7rem;
        height: 2.2rem;
        background: linear-gradient(to right, #ff6d99, #fd0d55);
        border-radius: 6px;
        position: relative;
        left: 61px;
        }
        .CRButton2 p{
        padding-top: 0.3rem;
        color: white;
        }
        }
        @media all and (min-width: 1300px) {
        .navalign {
        /*        padding-left: 240px;*/
        margin-left: 6%;
        padding-top: 10px;
        color: #ff6e9a;
        font-weight: bold;
        display: inline-flex;
        padding-right: .5rem;
        }
        .CRButton2 {
        text-align: center;
        width: 7rem;
        height: 2.2rem;
        background: linear-gradient(to right, #ff6d99, #fd0d55);
        border-radius: 6px;
        position: relative;
        left: 61px;
        }
        .uploadPicture {
        width: 8rem;
        height: 8rem;
        border-style: dashed;
        border-color: rgb(175, 175, 175);
        position: relative;
        top: -16px;
        }
        .upload-PictureIMG {
        position: relative;
        top: 10px;
        }
        .buttonfile {
        opacity: 0;
        position: relative;
        top: -15px;
        width: 100%;
        }
        .reportcard {
        position: relative;
        left: 276px;
        }
        .contactincard {
        position: relative;
        left: 278px;
        }
        .col1 {
        position: relative;
        left: 100px;
        }
        .col2 {
        position: relative;
        left: 25px;
        }
        .topsiderbarbutton {
        background-color: white;
        color: black;
        width: 115%;
        text-align: left;
        border: 1px solid #a6a4a4;
        position: relative;
        left: -44px;
        border-radius: 15px;
        }
        .btn-primary:hover {
        color: #060606;
        background-color: white;
        border-color: black;
        }
        .btn-check:active + .btn-primary,
        .btn-check:checked + .btn-primary,
        .btn-primary.active,
        .btn-primary:active,
        .show > .btn-primary.dropdown-toggle {
        color: #060606;
        background-color: white;
        border-color: black;
        }
        .bottomslider {
        width: 85%;
        margin: auto;
        box-shadow: 0 0 10px 0 rgb(207, 207, 207);
        border-radius: 10px;
        }
        .bottomslider2 {
        width: 100%;
        margin: auto;
        box-shadow: 0 0 10px 0 rgb(207, 207, 207);
        border-radius: 10px;
        position: relative;
        left: 30px;
        }
        .searchbar {
        margin: auto;
        position: relative;
        width: 75%
        }
        .sidebar1 {
        background-color: white;
        border-radius: 10px;
        box-shadow: 10px 10px 100px 1px #ffe8ef;
        padding-left: 10px;
        margin: auto;
        position: relative;
        left: 40px;
        top: -22px;
        border: 1px solid;
        border-color: #64e2f5;
        }
        .searchbardown {
        position: relative;
        top: -20px;
        }
        .sidebarcard2 {
        position: relative;
        top: 70px;
        left: 35px;
        }
        .leftsidebar {
        width: 80%;
        margin: auto;
        position: relative;
        bottom: 20px;
        left: 30px;
        }
        .bottomsidebar {
        width: 75%;
        margin: auto;
        position: relative;
        top: 30px;
        }
        /*
        .ahre {
        padding-left: 2rem;
        }
        */
        /*
        .mainpicture {
        padding-left: 100px;
        }
        */
        .down {
        transform: rotate(45deg);
        -webkit-transform: rotate(45deg);
        }
        .navalign2 {
        /*        padding-left: 200px;*/
        padding-top: 10px;
        color: #ff6e9a;
        font-weight: bold;
        display: inline-flex;
        margin-left: auto;
        }
        .nav-publish {
        padding-left: 20px;
        background: linear-gradient(to right, #ffacbf, #fa4d75);
        color: white;
        border-radius: 20px;
        align-items: center;
        padding-top: 10px;
        }
        .search {
        padding-right: 5rem;
        }
        .smallbutton {
        position: relative;
        left: -80px;
        }
        
        .fontdummy {
        font-size: 12px;
        text-align: justify;
        }
        .confirmpublish {
        position: relative;
        left: -35px;
        }
        .lebardolocation {
        position: relative;
        left: -35px;
        }
        .star {
        position: relative;
        left: -35px;
        }
        .urgent {
        text-align: center;
        width: 5rem;
        font-size: 14px;
        font-weight: bolder;
        border: 1px solid rgb(180, 178, 178);
        border-radius: 3px;
        margin-bottom: 0.8rem;
        margin-left: 1rem;
        }
        .CRButton3 {
        text-align: center;
        width: 5rem;
        font-size: 14px;
        font-weight: bolder;
        margin-bottom: 0.8rem;
        margin-left: 1rem;
        height: 1.2rem;
        background-color: white;
        position: relative;
        left: -388px;
        top: 96px;
        }
        .CRButton1 {
        text-align: center;
        width: 8rem;
        height: 2.5rem;
        background-color: white;
        border: 2px solid #fd6794;
        border-radius: 6px;
        }
        .CRButton1 p {
        padding-top: 0.5rem;
        }
        .CRButton2 {
        text-align: center;
        width: 8rem;
        height: 2.5rem;
        color: white;
        background: linear-gradient(to right, #ff6d99, #fd0d55);
        border-radius: 6px;
        position: relative;
        left: 12px;
        }
        .CRButton2 p {
        padding-top: 0.5rem;
        }
        }
        @media all and (min-width: 1440px) {
        .CRButton2 {
        text-align: center;
        width: 7rem;
        height: 2.2rem;
        background: linear-gradient(to right, #ff6d99, #fd0d55);
        border-radius: 6px;
        position: relative;
        left: -3px;
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
        .ReportCol {
        margin-right: 18rem;
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
        .CRButton2 {
        text-decoration: none;
        text-align: center;
        height: 2.5rem;
        width: 8rem;
        background: linear-gradient(to right, #ff6d99, #fd0d55);
        position: relative;
        left: -68px;
        display: block;
        color: white;
        }
        .CRButton2 p {
        padding-top: 0.5rem;
        font-weight: bolder;
        }
        .CRButton3 {
        text-align: center;
        width: 5rem;
        font-size: 14px;
        font-weight: bolder;
        margin-bottom: 0.8rem;
        margin-left: 1rem;
        height: 1.2rem;
        background-color: white;
        position: relative;
        left: -510px;
        top: 86px;
        }
        }
        @media (min-width: 1920px) {
        .navalign {
        padding-left: 173px;
        padding-top: 10px;
        color: #ff6e9a;
        font-weight: bold;
        display: inline-flex;
        padding-right: .5rem;
        }
        .CRButton2 {
        text-decoration: none;
        text-align: center;
        height: 2.5rem;
        width: 8rem;
        background: linear-gradient(to right, #ff6d99, #fd0d55);
        position: relative;
        left: 160px;
        display: block;
        color: white;
        }
        .navalign2 {
        padding-left: 921px;
        padding-top: 10px;
        color: #ff6e9a;
        font-weight: bold;
        display: inline-flex;
        }
        .CRButton3 {
        text-align: center;
        width: 5rem;
        font-size: 14px;
        font-weight: bolder;
        margin-bottom: 0.8rem;
        margin-left: 1rem;
        height: 1.2rem;
        background-color: white;
        position: relative;
        left: -568px;
        top: 86px;
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
        <section class="pt-3 text-center">
            <div class="row" style="margin:0px">
                <div class="col-lg-12 mainpicture">
                    <div class="background-image text-center backgroundimage" style="background-image: url(../theme/pictures/Group\ 12.png);">
                        <p class="showcase-text1" style="color:white">View your requests</p>
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
                                <p class="responses-date1 text-start">{{ date('d M Y - H:i:s', $detail->created_at->timestamp) }}</p>
                            </div>
                            <div class="row">
                                <div class="col-3 col-sm-4 col-md-4 col-lg-4 col-xxl-3">
                                    <img class="requestFaceImg1" src="{{asset(isset($detail->user)?$detail->user->image:'')}}" style="    border-radius: 10px;">
                                </div>
                                <div class="col-9 col-sm-8 col-md-8 col-lg-8 col-xxl-9 text-start ConformRequestCol2">
                                    <div class="d-flex" style="justify-content: space-between;">
                                        <div class="d-flex flex-wrap confirmpublish">
                                            <p class="Responses-Name1 text-start">
                                            {{isset($detail->user)?$detail->user->name:''}}</p>
                                            @if($detail->user->registration_type==1)<p class="CRperticularT">Professional</p> @elseif($detail->user->registration_type==2) <p class="CRperticularT">Private</p>@endif
                                        </div>
                                        <div class="d-flex flex-wrap">
                                            <span class="QuotationButton">${{$detail->price}}</span>
                                          
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col d-flex" style="justify-content: space-between;">
                                            <div class="d-flex lebardolocation">
                                                <img src="{{asset('theme/icons/ic_place_-2.png')}}" style="width: 12px;height: 17px;">
                                                <p class="Position-t1 text-start">{{$detail->position}} {{$detail->position2}}</p>
                                            </div>
                                            <div>
                                                @if($detail->urgent=='Urgent')
                                                <p style="display: inline;font-size: 14px;color: #F9326D;margin-left: 10px;" class="CRButton3">Urgent</p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col d-flex star">
                                            <img class="responses-star1" src="{{asset('theme/icons/Group 2411.png')}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row py-2 lookingformove">
                                <p id="request-textID1">{{$detail->request_title}}</p>
                                <p class="pt-1 fontdummy">{{$detail->description}}.</p>
                            </div>
                            <div class="row photogallerymove">
                                <p class="CRPhotosT">Photos:</p>
                                <div class="col">
                                   
<!--
                                    <button class="uploadPicture">
                                    <input type="file" class="buttonfile" name="upload_fle"></button>
    -->
                                </div>
                            </div>
                            <div class="row">
                            
                            @if(!empty($publish_image))
                            @foreach($publish_image as $p)
                                        <img class="CRPhotosImg" src="{{asset($p->images)}}">
                                        @endforeach
                                        @endif
    </div>
                        </div>
                    </div>
                    <!-- <div class="col-12 col-md-4 col-sm-12 maptop">
                        <div class="row mb-5" id="map"></div>
                    </div> -->
                    <div class=" col-lg-4 col-md-12 maptop320">
                    <iframe src = "https://maps.google.com/maps?q={{$detail->position}},{{$detail->position2}}&hl=es;z=14&amp;output=embed" style="height:300px;width:300px"></iframe>

                    </div>
                    <div class="row pt-5 buttontop">
                        <div class="col-sm-5 col pb-3">
                            <div class="CRButton1 modifytop">
                                <a href="{{route('requests')}}">
                                    <p>Go Back</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-7 col">
                            <div class="CRButton2 publishtop">
                                <a role="button" data-bs-toggle="modal" role="button" data-bs-target="#staticBackdrop" data-bs-dismiss="modal">
                                    <p>Contact</p>
                                </a>
                            </div>
                            <div class="CRButton6 crbutton6postion">
                                <a role="button" data-bs-toggle="modal" role="button" data-bs-target="#mobilechat" data-bs-dismiss="modal">
                                    <p>Contact</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Model-->
        <section>
            <div class="modal fade modal-backdrop.show" id="staticBackdrop" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="col text-center mb-3">
                                <img src="{{asset('theme/icons/ic_contacts_-1.png')}}" style="width: 2.3rem;">
                            </div>
                            <p class="MBText1">Contact via messages or make a call</p>
                            <p class="MBText2">You can make a call or send a message
                                for the further proceedings.
                            </p>
                            <div class="row">
                                <div class="col text-center">
                                    <a href="{{route('chat',isset($detail->user)?$detail->user->id:1)}}" class="SendMessageButton">Send Message</a>
                                </div>
                                <div class="col text-center">
                                    <a href="" class="CallButton" data-bs-toggle="modal" data-bs-target="#mobilecall" data-bs-dismiss="modal">Make Call</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            
            <div class="modal fade modal-backdrop.show" id="mobilechat" data-bs-keyboard="false" tabindex="-1" aria-labelledby="" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="col text-center mb-3">
                                <img src="{{asset('theme/icons/ic_contacts_-1.png')}}" style="width: 2.3rem;">
                            </div>
                            <p class="MBText1">Contact via messages or make a call</p>
                            <p class="MBText2">You can make a call or send a message
                                for the further proceedings.
                            </p>
                            <div class="row mobilecardbuttontop">
                                <div class="col text-center">
                                    <a href="{{route('mobile-chat-message')}}" class="SendMessageButton">Send Message</a>
                                </div>
                                <div class="col text-center">
                                    <a href="" class="CallButton" data-bs-toggle="modal" data-bs-target="#mobilecall" data-bs-dismiss="modal">Make Call</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>
        <section>
            <div class="modal fade" id="mobilecall" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop2Label" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="col text-center mb-3">
                                <img src="{{asset('theme/icons/ic_contact_phone_24px.png')}}" style="width: 4rem;height:3rem;">
                            </div>
                            <p class="MBText3"><b>{{$detail->phone_number}}</b></p>
                            <div class="col text-center">
                                <a href="tel:{{$detail->phone_number}}" class="CallButton2">Call</a>
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
        center: [74.515225, 32.467766],
        zoom: 15,
        });
        const marker1 = new mapboxgl.Marker()
        .setLngLat([74.515225, 32.467766])
        .addTo(map);
        </script>
    </body>
</html>