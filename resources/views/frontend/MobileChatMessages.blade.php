<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('theme/css/MobileChatMessagesStyle.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>ya jari</title>

    <style type="text/css">
         @media all and (min-width: 1590px) {
        .navalign{
     padding-left: 300px;
    padding-top: 10px;
    color: #ff6e9a;
    font-weight: bold;
    display: inline-flex;
    padding-right: .5rem;
    }

    .ahre{
            padding-left: 2rem;
    }

   

.navalign2{
     padding-left: 730px;
    padding-top: 10px;
    color: #ff6e9a;
    font-weight: bold;
    display: inline-flex;
    }    

    .nav-publish{
    
    padding-left: 20px;
    background:linear-gradient(to right,#ffacbf,#fa4d75);
  
    color: white;
    border-radius: 20px;
    align-items: center;
    padding-top: 10px;
}



    </style>
</head>

<body class="bg-light" style="zoom:90%;height:320px;">

    <!--Nav Bar-->

    @if(Auth::user())         
    @include('frontend.layout.navbar2')       
@else
@include('frontend.layout.navbar')       
@endif


    <!--Chat-->

    <section>
        <div class="container">
            <div class="row px-2">
                <div class="col-12 col-sm-12" style="margin: auto;">
                    <div class="row">
                        <div class="onlineCard card" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-3 col-sm-3 text-end">
                                    <a href="{{route('mobile-chat-profile')}}">
                                    <img src="{{asset('theme/icons/Ellipse -1.png')}}" class="CardImg"
                                        style="width: 4rem;margin-top: 1rem;">
                                    </a>
                                </div>
                                <div class="col-9 col-sm-9">
                                    <div class="card-body">
                                        <div class="row">
                                            <p class="chatcardtext1">Cristina Röhmer</p>
                                        </div>
                                        <div class="row">
                                            <div class="OnlineText dropdown">
                                                <a class="btn dropdown-toggle" href="#" role="button"
                                                    id="dropdownMenuLink" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    Online
                                                </a>

                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <li><a class="dropdown-item" href="#">Offline</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="LookingForMoveRow2 row">
                        <div class="ChatMessagesRow row pt-3">
                            <div class="row text-end" style="padding-right:0;">
                                    <p><span class="chatM1">Hello Franky!</span></p>
                                    <p><span class="chatM2">How are you doing today?</span></p>
                                    <p class="chattime">09:35</p>
                            </div>
                            <div class="row text-start">
                                <p><span class="chatM3">Hello Franky!</span></p>
                                <p><span class="chatM4">How are you doing today?</span></p>
                                <p class="chattime">09:35</p>
                            </div>
                        </div>
                        <div class="row" style="display: block; height: 8rem;">
                            <p class="Chattext3">Franky is typing…</p>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="Enter your message here">
                            <a href="">
                                <img src="{{asset('theme/icons/Group 2391.png')}}" style="width: 2.5rem;" class="chaticon">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Footer-->

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>