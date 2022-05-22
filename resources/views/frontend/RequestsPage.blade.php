<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('theme/css/RequestStyle.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css" rel="stylesheet" />
    <title>ya jari</title>
    @section('sRequests','active_nav')
    <style type="text/css">

        .active_nav{
    color: #ff6e9a !important;
    }

    @media (min-width: 1200px){
.flex-container {
    position: absolute;
    right: 60px;
    top: 20px;
}
}
        @media all and (min-width: 1300px) {
            .Realize-text1 {
                margin-left: 3.5rem;
            }

            .request-textID2 {
                font-size: 14px;
                font-weight: 500;
            }

            .requestFaceImg1 {
                width: 70px;
                height: 70px;
            }

            .Contact-b1 {
                display: block;
                height: 30px;
                padding-top: 7px;
                margin-right: 11px;
            }

            .background-image {
                width: 100%;
                height: 180px;
                border-radius: 2%;
                background-image: url('theme/pictures/Group\ 12.png');
                background-position: center;
                background-size: cover;
                position: relative;
                overflow: hidden;
            }

            .tickredarrow {
                position: relative;
                top: 28px;
                left: -15px;
                width: 1.3rem;
            }

            .navpublish {
                padding-left: 20px;
                background: linear-gradient(to right, #ffacbf, #fa4d75);
                color: white;
                border-radius: 20px;
                align-items: center;
                padding-top: 10px;
            }
        }

        @media all and (min-width: 1440px) {
            .searchbar {
                margin: auto;
                position: relative;
                width: 108%;
                left: 7px;
            }

            .Realize-text1 {
                margin-left: 2.5rem;
            }

            .socialicon {
                transform: translateX(80%);
            }

            .followus {
                position: relative;
                left: 330px;
                top: -50px;
            }
        }

        @media all and (min-width: 1590px) {
            .col1 {
                position: relative;
                left: 100px;
            }

            .Realize-text1 {
                margin-left: 2.5rem;
            }

            .col3 {
                position: relative;
                left: 0px;
            }

            .realizeproject {
                margin-left: 2.9rem;
            }

            .realizetext2 {
                margin-left: 2.8rem;
            }

            .navalign {
                padding-left: 173px;
                padding-top: 10px;
                color: #ff6e9a;
                font-weight: bold;
                display: inline-flex;
                padding-right: .5rem;
            }

            .navalign2 {
                padding-left: 570px;
                padding-top: 10px;
                color: #ff6e9a;
                font-weight: bold;
                display: inline-flex;
            }

            .distance {
                position: relative;
                top: .5px;
            }

            .thebardos {
                position: relative;
                left: 100px;
            }

            .allstatus {
                position: relative;
                left: 2px;
            }

            .allcategories {
                position: relative;
                left: 60px;
            }

            .responseside {
                position: relative;
                left: 10px;
                top: 3px;
            }

            .responsetop {
                position: relative;
                top: 2px;
            }

            .categoriestop {
                position: relative;
                top: -18px;
                left: 0px;
            }

            .categories {
                position: relative;
                top: .5px;
            }

            .distanceshow {
                display: none;
            }

            .LRM1Button {
                margin: auto;
                text-align: center;
                height: 3rem;
                background: linear-gradient(to right, #ff6388, #ff0b44);
                border-radius: 10px;
                margin-bottom: 2rem;
            }

            .services {
                padding-top: 30px;
                font-size: 18px;
                padding-left: 67px;
                font-weight: bold;
            }

            .ahre {
                padding-left: 2rem;
            }

            /*
        .Contact-b1 {
        height: 30px;
        background: linear-gradient(to right, #ff7a97, #ff3161);
        width: 100px;
        color: white;
        border-radius: 5px;
        font-size: 12px;
        text-align: center;
        padding-top: 7px;
        float: right;
        position: relative;
        }
        */
            .lastlogo {
                position: relative;
                left: -4px;
                width: 100%;
            }

            .contactus {
                position: relative;
                left: 67px;
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
                top: -20px;
                left: -104px;
                width: 138%;
            }

            .col-xxl-7 {
                flex: 0 0 auto;
                width: 100%;
            }

            .searchbar {
                margin: auto;
                position: relative;
                width: 108%;
                left: 5px;
            }

            .lastpic {
                position: relative;
                top: 7px;
                left: 35px;
            }

            .backgroundimage {
                border-radius: 25px;
                width: 95%;
                height: 180px;
                position: relative;
                left: 45px;
            }

            .categoryicon1920 {
                position: relative;
                top: 2px;
            }

            .leftsidebar {
                width: 100%;
                margin: auto;
                position: relative;
                bottom: 20px;
                left: 30px;
            }

            .socialicon {
                transform: translateX(80%);
            }

            .followus {
                position: relative;
                left: 328px;
                top: -50px;
            }
        }

        @media all and (min-width: 1600px) {
            .col1 {
                position: relative;
                left: 100px;
            }

            .col3 {
                position: relative;
                left: 0px;
            }

            .realizeproject {
                margin-left: 2.9rem;
            }

            .realizetext2 {
                margin-left: 2.8rem;
            }

            .navalign {
                padding-left: 173px;
                padding-top: 10px;
                color: #ff6e9a;
                font-weight: bold;
                display: inline-flex;
                padding-right: .5rem;
            }

            .navalign2 {
                padding-left: 570px;
                padding-top: 10px;
                color: #ff6e9a;
                font-weight: bold;
                display: inline-flex;
            }

            .distance {
                position: relative;
                top: .5px;
            }

            .thebardos {
                position: relative;
                left: 100px;
            }

            .allstatus {
                position: relative;
                left: 2px;
            }

            .allcategories {
                position: relative;
                left: 60px;
            }

            .responseside {
                position: relative;
                left: 10px;
                top: 3px;
            }

            .responsetop {
                position: relative;
                top: 2px;
            }

            .categoriestop {
                position: relative;
                top: -18px;
                left: 0px;
            }

            .categories {
                position: relative;
                top: .5px;
            }

            .distanceshow {
                display: none;
            }

            .LRM1Button {
                margin: auto;
                text-align: center;
                height: 3rem;
                background: linear-gradient(to right, #ff6388, #ff0b44);
                border-radius: 10px;
                margin-bottom: 2rem;
            }

            .services {
                padding-top: 30px;
                font-size: 18px;
                padding-left: 67px;
                font-weight: bold;
            }

            .ahre {
                padding-left: 2rem;
            }

            /*
        .Contact-b1 {
        height: 30px;
        background: linear-gradient(to right, #ff7a97, #ff3161);
        width: 100px;
        color: white;
        border-radius: 5px;
        font-size: 12px;
        text-align: center;
        padding-top: 7px;
        float: right;
        position: relative;
        left: -1px;
        }
        */
            .lastlogo {
                position: relative;
                left: -4px;
                width: 100%;
            }

            .contactus {
                position: relative;
                left: 67px;
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
                top: -20px;
                left: -104px;
                width: 138%;
            }

            .col-xxl-7 {
                flex: 0 0 auto;
                width: 100%;
            }

            .searchbar {
                margin: auto;
                position: relative;
                width: 108%;
                left: 5px;
            }

            .lastpic {
                position: relative;
                top: 7px;
                left: 35px;
            }

            .backgroundimage {
                border-radius: 25px;
                width: 95%;
                height: 180px;
                position: relative;
                left: 45px;
            }

            .categoryicon1920 {
                position: relative;
                top: 2px;
            }

            .leftsidebar {
                width: 100%;
                margin: auto;
                position: relative;
                bottom: 20px;
                left: 30px;
            }

            .socialicon {
                transform: translateX(80%);
            }

            .followus {
                position: relative;
                left: 328px;
                top: -50px;
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

            .subcategoryallign {
                position: relative;
                left: 74px;
                top: -16px;
            }

            .navalign2 {
                padding-left: 912px;
                padding-top: 10px;
                color: #ff6e9a;
                font-weight: bold;
                display: inline-flex;
            }

            .socialicon {
                transform: translateX(78%);
            }

            .followus {
                position: relative;
                left: 324px;
                top: -50px;
            }

            .categoryicon1920 {
                position: relative;
                top: 2px;
            }

            .subcategoryul {
                position: relative;
                left: 8px;
            }

            .subcategory {
                padding-top: 15px;
                font-size: 15px;
                padding-left: 80px;
                font-weight: bold;
            }

            .distance {
                position: relative;
                top: .5px;
            }

            .thebardos {
                position: relative;
                left: 100px;
            }

            .allstatus {
                position: relative;
                left: 2px;
            }

            .allcategories {
                position: relative;
                left: 60px;
            }

            .responseside {
                position: relative;
                left: 10px;
                top: 3px;
            }

            .responsetop {
                position: relative;
                top: 2px;
            }

            .categoriestop {
                position: relative;
                top: -18px;
                left: 0px;
            }

            .categories {
                position: relative;
                top: .5px;
            }

            .distanceshow {
                display: none;
            }

            .LRM1Button {
                margin: auto;
                text-align: center;
                height: 3rem;
                background: linear-gradient(to right, #ff6388, #ff0b44);
                border-radius: 10px;
                margin-bottom: 2rem;
            }

            .services {
                padding-top: 30px;
                font-size: 18px;
                padding-left: 67px;
                font-weight: bold;
            }

            .ahre {
                padding-left: 2rem;
            }

            .Contact-b1 {
                height: 28px;
                background: linear-gradient(to right, #ff7a97, #ff3161);
                width: 100px;
                color: white;
                border-radius: 5px;
                font-size: 12px;
                text-align: center;
                padding-top: 6px;
                float: right;
                margin-right: 30px;
                display: block;
            }

            .lastlogo {
                width: 100%;
                position: relative;
                left: -4px;
            }

            .contactus {
                position: relative;
                left: 67px;
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
                top: -20px;
                left: -27px;
            }

            .col-xxl-7 {
                flex: 0 0 auto;
                width: 100%;
            }

            .searchbar {
                margin: auto;
                position: relative;
                width: 105%;
                left: -10px;
            }

            .lastpic {
                position: relative;
                top: 7px;
                left: 35px;
            }

            .backgroundimage {
                border-radius: 25px;
                height: 230px;
                position: relative;
                left: 55px;
            }

            .mainpicbutton {
                background-color: white;
                color: #FA4673;
                height: 40px;
                border-color: #FA4673;
                border-width: 2px;
                border-radius: 10px;
                position: relative;
            }

            .showcase-text2 {
                position: relative;
                top: -10px;
            }

            .leftsidebar {
                width: 100%;
                margin: auto;
                position: relative;
                bottom: 20px;
                left: 30px;
            }

            .bottomslider {
                width: 100%;
                margin: auto;
                box-shadow: 0 0 10px 0 rgb(207 207 207);
                border-radius: 10px;
                position: relative;
                left: 30px;
            }

            .bottomsidebar {
                width: 100%;
                margin: auto;
                position: relative;
                top: 30px;
                left: 30px;
            }

            .showcase-text1 {
                font-size: 30px;
                font-weight: 900;
                padding-top: 3rem;
                color: white;
                padding-bottom: 1rem;
            }

            .searchbardown {
                position: relative;
                width: 138%;
                left: -105px;
            }

            .cntctbtn-padding {
                padding-right: 0px !important
            }

            .mobile {
                display: none;
            }

            .Realize-text1 {
                margin-left: 4.5rem;
            }
        }

        @media (min-width: 2400px) {
            .backgroundimage {
                border-radius: 25px;
                height: 230px;
                position: relative;
                left: 80px;
            }

            .subcategory {
                padding-top: 15px;
                font-size: 15px;
                padding-left: 125px;
                font-weight: bold;
            }

            .subcategoryallign {
                position: relative;
                left: 121px;
                top: -16px;
            }

            .Realize-text1 {
                margin-left: 7.5rem;
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


    <!--Show Case-->
    <section class="pt-3 text-center">
        <div class="row" style="margin:0px">
            <div class="col-lg-12">
                <div class="background-image text-center backgroundimage">
                    <p class="showcase-text1">Hundreds of requests every day in order
                        to solve them</p>
                    <p class="showcase-text2" style="color:white;">Publish the request and resolve your
                        issue</p>
                    @if(Auth::check())
                    <a href="{{route('publishrequest')}}" class="btn btn-small mainpicbutton" type="button">
                        <p style="font-size: 18px; font-weight: bolder;">Publish Request</p>
                    </a>
                    @else

                    <a data-bs-toggle="modal" role="button" href="#LoginRegisterModal8" class="btn btn-small mainpicbutton" type="button">
                        <p style="font-size: 18px; font-weight: bolder;">Publish Request</p>
                    </a>

                    @endif
                </div>
            </div>
        </div>
    </section>
    <!--My favourties-->
    <section class="pt-5" id="favourtiesIDWidth" style="margin: auto;">
        <div class="row" style="margin: auto;">
            <div class="col-lg-4">
            </div>
            <!--Search-->
            <div class="col-lg-8 col-md-8 search" style="padding-bottom:35px;">
                <div class="row searchbar">
                    <form action="" method="get" class="form-f1 d-flex">
                        <input name="search" class="form-control" type="search" placeholder="What are you looking for?"
                            aria-label="Search" value="{{\Request::has('search')?\Request::get('search'):''}}" 
                            style="background-color: rgb(247, 244, 244);border: 0px;box-shadow: none;outline: none;">
                        <button class="form-button1 btn" type="submit"><img class="form-img1"
                                src="{{asset('theme/icons/Group 2032.png')}}" alt=""></button>
                    </form>
                </div>
                <div class="row pt-5 text-start searchbardown">
                    <!-- <div class="col col1">
                        <div class="dropdown">
                            <button class="btn dropdown-toggle allstatus allstatusfont" type="button"
                                id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false"
                                style="color: #F91B66;">
                                @if(\Request::has('status'))
                                    @foreach($allstatus as $status)
                                    @if($status->id==\Request::get('status'))
                                        {{$status->status}}
                                    @endif
                                   @endforeach        
                                @else
                                    {{'All Status'}}
                                @endif
                                
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                @foreach($allstatus as $status)
                                <li><a class="dropdown-item <?php if(\Request::has("status") &&  \Request::get("status")==$status->id) echo "active"; ?>" href="?status={{$status->id}}">{{$status->status}}</a></li>
                                @endforeach

                            </ul>
                        </div>
                    </div> -->
                    <div class="col col2">
                        <div class="dropdown">
                            <button class="btn dropdown-toggle allcategories allcategoriesfont " type="button"
                                id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false"
                                style="color: #F91B66;">
                                @if(\Request::has('category'))
                                   @foreach($category as $cate)
                                    @if($cate->id==\Request::get('category'))
                                        {{$cate->name}}
                                    @endif
                                   @endforeach        
                                @else
                                    {{'All Categories'}}
                                @endif
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                @foreach($category as $cate)
                                <li value="{{$cate->id}}"><a class="dropdown-item <?php if(\Request::has("category") &&  \Request::get("category")==$cate->id) echo "active"; ?>"
                                        href='?category={{$cate->id}}'>{{$cate->name}}</a></li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                    <!-- <div class="col col3">
                        <div class="dropdown">
                            <button class="btn dropdown-toggle thebardos thebardosfont " type="button"
                                id="dropdownMenuButton4" data-bs-toggle="dropdown" aria-expanded="false"
                                style="color: #F91B66;">
                                The Bardos
                            </button>
                            <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton4">
                                <li><a class="dropdown-item active" href="#">Action</a></li>
                                @foreach($thebardos as $bar)

                                <li value="{{$bar->name}}"><a class="dropdown-item"
                                        href='?bardos={{$bar->name}}'>

                                        {{$bar->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!--Categories And Contacts-->
    <section>
        <div class="col" id="MyFavouritesID">
            <div class="row" style="align-content: center;">
                <!--Categories-->
                <div class="col-xxl-5 col-xl-12" id="CategoriesColHide" style="width: 28rem;margin-right: 3rem;">
                    <!--Invite Contacts-->
                </div>
                <!--Search and Recent Work-->
                <div class="row" style="margin:0px;">
                    <div class="col-lg-1">
                    </div>
                    <div class="col-lg-3 categoriestop">
                        
                    </div>
                    <div class="col-lg-7 sidebartop">
                        <div class="col-xxl-7 col-xl-12" style="width:100%;" id="CategoriesColShow">
                            @foreach($request as $r)
                            @php
                            $auth = false;
                            $condition = true;
                            if(Auth::check())
                            {
                                $auth = true;
                                if($r->distance <= $distance)
                                {
                                    $condition = false;
                                }
                            }
                            @endphp
                            @if($condition)
                            <div class="col pb-5 leftsidebar">  
                                <div class="py-3 cardheight cardleft"
                                    style="background-color: white; border-radius: 10px;box-shadow: 10px 10px 100px 1px #ffe8ef; padding-left: 10px; margin: auto;">
                                    <div class="row">
                                        <div class="col">
                                            <p class="responses-date1 text-start pt-2">
                                                {{ date('d M Y', $r->created_at->timestamp) }} - {{$r->created_at->diffForHumans() }}</p>
                                        </div>
                                        <div class="col pt-2 text-end" style="padding-right: 30px;">
                                            <!-- Heart Image -->
                                            @if($auth)
                                            <a style="text-decoration: none" href="{{route('favouriterequest',[ 'user_id' =>  $r->auth_id  , 'requestid' =>  $r->id ] )}}"
                                                role="button">
                                                
                                               @if($r->user_fvrt)
                                                <img class="responses-heart1"
                                                    src="{{asset('theme/icons/ic_favorite_224px.png')}}">
                                                @else
                                                <img class="responses-heart1"
                                                    src="{{asset('theme/icons/ic_favorite_border_24px.png')}}">
                                                @endif    
                                                </a>
                                                @else
                                                <a href="#LoginRegisterModal8" style="text-decoration:none;" data-bs-toggle="modal" role="button"><img class="responses-heart" src="{{asset('theme/icons/ic_favorite_border_24px.png')}}"></a>
                                                @endif
                                            <button type="button" class="responses-buttonQ1">
                                                <p class="responses-tQ1">${{number_format($r->price,2)}}</p>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-wrap">
                                        <div class="" style="padding-right: 20px;">
                                            <div class="d-flex">
                                                <div class="" style="margin: auto;">
                                                @if($r->user)
                                                    <a href="{{route('profileuser', [ 'id' =>  isset($r->user)?$r->user->id:''])}}"
                                                            style="text-decoration:none">
                                                    @else
                                                    <a href="#">
                                                    @endif 

                                                    @if($r->file)    
                                                    <img

                                                            class="requestFaceImg1" src="{{asset($r->file)}}">
                                                    @else
                                                                                                        <img
                                                            class="requestFaceImg1" src="https://wise.edu.pk/wp-content/uploads/2021/03/placeholder.png">

                                                    @endif        

                                                        </a>
                                                    <img src="{{asset('theme/icons/redtickarrow.png')}}"
                                                        class="tickredarrow">
                                                </div>
                                                <div class="text-start">
                                                    <div class="row">
                                                    @if($r->user)
                                                    <a href="{{route('profileuser', [ 'id' =>  isset($r->user)?$r->user->id:''])}}"
                                                            style="text-decoration:none">
                                                    @else
                                                    <a href="#">
                                                    @endif

                                                            <p class="Responses-Name1 text-start"
                                                                style="margin-bottom: 0.5rem; text-decoration:none; color:black;">
                                                                {{isset($r->user)?$r->user->name:''}}</p>
                                                        </a>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col d-flex">
                                                            <img class="responses-star1"
                                                                src="{{asset('theme/icons/Group 2411.png')}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="" style="padding-left: 10px;">
                                            <a href="{{route('view-detail',['id'=>$r->id])}}"
                                                style="text-decoration:none;color: black;">
                                                <p id="request-textID1" style="display: inline;">
                                                    <b>{{$r->request_title}}</b> </p>
                                                @if($r->urgent=='Urgent')
                                                <p
                                                    style="display: inline;font-size: 14px;color: #F9326D;margin-left: 10px;">
                                                    Urgent</p>
                                                @endif
                                                @if($r->professional=='Only Professional')
                                                <p
                                                    style="display: inline;font-size: 14px;color: #F9326D;margin-left: 10px;">
                                                    Only Professional</p>
                                                @endif
                                                @if($r->phone_number=='Show Phone Number')
                                                <p
                                                    style="display: inline;font-size: 14px;color: #F9326D;margin-left: 10px;">
                                                    Show Phone Number</p>
                                                @endif
                                            </a>
                                            <p class="request-textID2 text-start pt-1">
                                                {{$r->description}}</p>
                                        </div>
                                    </div>
                                    <div id="responsesID1" class="col-12 responsecard" style="padding-left: 10px;">
                                        <img src="{{asset('theme/icons/ic_textsms_-1.png')}}" class="responseicon"
                                            style="width: 15px;height: 20px;padding-top: 5px;">
                                        <p class="responses-buttons1234 text-start responsetext">2 Responses</p>
                                    </div>
                                    <hr id="LineID1" class="hrclass"
                                        style="width: 92%;margin: auto;height: 2px;position: relative;left: -8px;">
                                    <div class="row pt-3 cardfotter" style="padding-left: 10px;">
                                        <div class="col-md-3 col-sm-4 col-6 d-flex paddingmobile">
                                            <img src="{{asset('theme/icons/ic_place_-2.png')}}" class="lebardoicon"
                                                style="width: 15px;height: 22px;">
                                            <p class="responses-buttons1234 text-start lebardotext">{{$r->formated_address}}</p>
                                        </div>
                                        <div id="responsesID2" class="col-md-2 col-sm-4 col-12 pt-1">
                                            <img src="{{asset('theme/icons/ic_label_24px.png')}}"
                                                style="width: 22px;height: 17px;padding-top: 2px;"
                                                class="categoryicon1920">
                                            <p class="responses-buttons1234 text-start categories">
                                                {{isset($r->category_rel)?$r->category_rel->name:''}}</p>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-6 d-flex " style="padding-top: 4px;
                                                    padding-left: 30px;">
                                            <img src="{{asset('theme/icons/Union 21.png')}}" class="arrow" style="width: 22px;
                                                    height: 16px;
                                                    padding-top: 4px;">
                                            <p class="responses-buttons1234 text-start distance">{{(int)$r->distance}}Km</p>
                                        </div>
                                        <div id="responsesID2" class="col-md-3 col-sm-4 col-12 responseside">
                                            <img src="{{asset('theme/icons/ic_textsms_-1.png')}}"
                                                style="width: 15px;height: 20px;padding-top: 5px;">
                                            <p class="responses-buttons1234 text-start responsetop"><a class="click"
                                                    style="text-decoration:none">0</a> Responses</p>
                                        </div>
                                        <div class="col-md-2 col-sm-12 col-12 pb-2">
                                            <div class="row">
                                                <div class="col pt-2 text-end cntctbtn-padding">
                                                    @if(Auth::user())
                                                    <a href="" style="text-decoration:none;" class="Contact-b1"
                                                        onclick="editForm(this)" data-id="{{$r->id}}"
                                                        data-bs-toggle="modal" role="button"
                                                        data-bs-target="#staticBackdrop{{$r->id}}"
                                                        data-bs-dismiss="modal">Contact</a>
                                                    @else
                                                    <a href="#LoginRegisterModal8" style="text-decoration:none;" class="Contact-b1"
                                                    data-bs-toggle="modal" role="button"
                                                        >Contact</a>
                                                    @endif


                                                </div>
                                                <section>
                                                    <div class="modal fade modal-backdrop.show"
                                                        id="staticBackdrop{{$r->id}}" data-bs-keyboard="false"
                                                        tabindex="-1" aria-labelledby="staticBackdropLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <div class="col text-center mb-3">
                                                                        <img src="{{asset('theme/icons/ic_contacts_-1.png')}}"
                                                                            style="width: 2.3rem;">
                                                                    </div>
                                                                    <p class="MBText1">Contact via messages or make a
                                                                        call{{$r->id}}</p>
                                                                    <p class="MBText2">You can make a call or send a
                                                                        message
                                                                        for the further proceedings.
                                                                    </p>
                                                                    <div class="row">
                                                                        <div class="col text-center">
                                                                            <a href="{{route('user-chat',[ 'id' => $r->id ])}}"
                                                                                class="SendMessageButton">Send
                                                                                Message</a>
                                                                        </div>
                                                                        <div class="col text-center">
                                                                            <a href="" class="CallButton"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#staticBackdrop2"
                                                                                data-bs-dismiss="modal">Make Call</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                            <div class="col" style="padding-right: 32px;">
                                                <div class="row ">
                                                    <div class="">
                                                        <a class="nav-item2 nav-link mobile" data-bs-toggle="modal"
                                                            role="button" data-bs-target="#mobilechat"
                                                            data-bs-dismiss="modal">Contactdsf</a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-4 col-12 distanceshow">
                                            <img src="{{asset('theme/icons/ic_label_24px.png')}}"
                                                class="responsedownarrow">
                                            <p class="responses-buttons1234 text-start categoriesside">Categories</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach


                            <!--Realize Your Project-->
                            <div class="row py-4 bottomslider slider320">
                                <p class="Realize-text1" style="font-weight: bold;margin-bottom: 1px;">Realize Your
                                    Projects!
                                </p>
                                <p class="Realize-text1">Find at a glance all the services dedicated to your current
                                    needs!</p>
                                <div id="RealizeCarousel" class="carousel slide mt-3" data-bs-ride="carousel">
                                    <div class="carousel-inner" id="RealizeCarouselID" role="listbox">
                                        @php
                                        $count=0;
                                        @endphp
                                        @foreach($slider as $s)
                                        @if($count++==0)

                                        <div class="carousel-item active">
                                            <div class="col">
                                                <div class="card text-white"
                                                    style="width: 10rem;border-radius: 10px;margin: auto;">
                                                    <img src="{{asset('uploads/'.$s->file)}}"
                                                        style="width: 10rem;height: 10rem;">
                                                    <div class="card-img-overlay" style="padding: 0;">
                                                        <div class="RealizeImg-text text-center">
                                                            <p style="padding-top: 0.5rem;font-size: 14px;">
                                                                {{$s->filename}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @else
                                        <div class="carousel-item">
                                            <div class="col">
                                                <div class="card text-white"
                                                    style="width: 10rem;border-radius: 10px;margin: auto;">
                                                    <img src="{{asset('uploads/'.$s->file)}}"
                                                        style="width: 10rem;height: 10rem;">
                                                    <div class="card-img-overlay" style="padding: 0;">
                                                        <div class="RealizeImg-text text-center">
                                                            <p style="padding-top: 0.5rem;font-size: 14px;">
                                                                {{$s->filename}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        @endif
                                        @endforeach
                                    </div>
                                    <button class="carousel-control-prev" type="button" style="padding-right: 50px;"
                                        data-bs-target="#RealizeCarousel" data-bs-slide="prev">
                                        <img src="{{asset('theme/icons/Group 2137.png')}}">
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" style="padding-left: 50px;"
                                        data-bs-target="#RealizeCarousel" data-bs-slide="next">
                                        <img src="{{asset('theme/icons/Group 1546.png')}}">
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                                <!--Carosal Mobile View-->
                                <div id="carouselMobile" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="col">
                                                <div class="card text-white"
                                                    style="width: 10rem;border-radius: 10px;margin: auto;">
                                                    <img src="{{asset('theme/pictures/Group 7.png')}}"
                                                        style="width: 10rem;height: 10rem;">
                                                    <div class="card-img-overlay" style="padding: 0;">
                                                        <div class="RealizeImg-text text-center">
                                                            <p style="padding-top: 0.5rem;font-size: 14px;">Maintain the
                                                                vehicle
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="col">
                                                <div class="card text-white"
                                                    style="width: 10rem;border-radius: 10px;margin: auto;">
                                                    <img src="{{asset('theme/pictures/Group 8.png')}}"
                                                        style="width: 10rem;height: 10rem;">
                                                    <div class="card-img-overlay" style="padding: 0;">
                                                        <div class="RealizeImg-text text-center">
                                                            <p style="padding-top: 0.5rem;font-size: 14px;">Preparing
                                                                for moving
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="col">
                                                <div class="card text-white"
                                                    style="width: 10rem;border-radius: 10px;margin: auto;">
                                                    <img src="{{asset('theme/pictures/Group 8.png')}}"
                                                        style="width: 10rem;height: 10rem;">
                                                    <div class="card-img-overlay" style="padding: 0;">
                                                        <div class="RealizeImg-text text-center">
                                                            <p style="padding-top: 0.5rem;font-size: 14px;">Preparing
                                                                for moving
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselMobile"
                                        data-bs-slide="prev">
                                        <img src="{{asset('theme/icons/Group 2137.png')}}">
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselMobile"
                                        data-bs-slide="next">
                                        <img src="{{asset('theme/icons/Group 1546.png')}}">
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>





                            <!--Publish Request-->
                            <section class="pb-5 text-center lastpic mt-4">
                                <div class="text-light ">
                                    <div class="background-image2 lastlogo" style="border-radius: 5px;">
                                        <div class="col-8 text-start" style="margin: auto;">
                                            <p class="Publish-text1">Now you can post your request</p>
                                            @if(Auth::check())
                                            <button class="btn btn-small" type="button"
                                                style="background-color:white; color: #FA4673; height: 40px;border-color: #FA4673; border-width: 2px; border-radius: 10px;display: block; margin-left:auto;margin-right: auto;">
                                                <p onclick="window.location.href='{{route('publishrequest')}}'"
                                                    style="font-size: 18; font-weight: bolder;">Publish Request</p>
                                            </button>
                                            @else

                                            <button data-bs-toggle="modal" role="button" href="#LoginRegisterModal8" class="btn btn-small" type="button"
                                                style="background-color:white; color: #FA4673; height: 40px;border-color: #FA4673; border-width: 2px; border-radius: 10px;display: block; margin-left:auto;margin-right: auto;">
                                                <p
                                                    style="font-size: 18; font-weight: bolder;">Publish Request</p>
                                            </button>


                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!--Pagination-->
                            <div class="row" style="padding-bottom: 10%;">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="modal fade modal-backdrop.show" id="staticBackdrop" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                                <a href="" class="SendMessageButton">Send Message</a>
                            </div>
                            <div class="col text-center">
                                <a href="" class="CallButton " data-bs-toggle="modal" data-bs-target="#staticBackdrop2"
                                    data-bs-dismiss="modal">Make Call</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="modal fade" id="staticBackdrop2" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdrop2Label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="col text-center mb-3">
                            <img src="{{asset('theme/icons/ic_contact_phone_24px.png')}}"
                                style="width: 4rem;height:3rem;">
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
    <section>
        <div class="modal fade modal-backdrop.show" id="mobilechat" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="" aria-hidden="true">
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
                                <a href="MobileChatMessages.html" class="SendMessageButton">Send Message</a>
                            </div>
                            <div class="col text-center">
                                <a href="" class="CallButton" data-bs-toggle="modal" data-bs-target="#mobilecall"
                                    data-bs-dismiss="modal">Make Call</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="modal fade" id="mobilecall" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdrop2Label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="col text-center mb-3">
                            <img src="{{asset('theme/icons/ic_contact_phone_24px.png')}}"
                                style="width: 4rem;height:3rem;">
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
    <!--Modal 2 Report-->
    <section>
        <div class="modal fade" id="staticBackdropReport" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropReportLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="col text-center mb-3">
                            <img src="{{asset('theme/icons/Icon ionic-md-warning.png')}}" style="width: 3rem;">
                        </div>
                        <p class="MBText2 text-center mt-4">Are you sure to want to report this request ?
                        </p>
                        <div class="row pt-3">
                            <div class="col text-center mt-4">
                                <a href="" class="NoButton">No</a>
                            </div>
                            <div class="col text-center mt-4">
                                <a href="" data-bs-toggle="modal" data-bs-target="#staticBackdropReport2"
                                    data-bs-dismiss="modal" class="YesButton">Yes</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="modal fade" id="staticBackdropReport2" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropReport2Label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-body ReportModalBody">
                        <div class="col text-center mb-3">
                            <img src="{{asset('theme/icons/Icon ionic-md-warning.png')}}" style="width: 3rem;">
                        </div>
                        <p class="MBText2 text-center mt-4">Give a valid reason to report this user.
                        </p>
                        <textarea class="form-control" aria-label="With textarea" rows="5"
                            placeholder="Give a valid reason to report this user."></textarea>
                        <div class="row pt-5">
                            <div class="text-center">
                                <a href="" class="YesButton">Report</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Modal-->

    <!--Model2-->

    <!--Model3-->

    <!--Model4-->

    <!--Model5-->
    <!--Model6-->

    <!--Model7-->

    <!--Modal8-->

    <!--Footer-->
    @include('frontend.layout.footer')
    @include('frontend.modals.registerModal1')
    @include('frontend.modals.registerModal2')
    @include('frontend.modals.registerModal3')
    @include('frontend.modals.registerModal4')
    @include('frontend.modals.registerModal5')
    @include('frontend.modals.registerModal6')
    @include('frontend.modals.registerModal7')
    @include('frontend.modals.signinModal')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.purpose').on('change', function () {
                if (this.value == '1')
                //.....................^.......
                {
                    $(".professional").show();
                    $(".private").hide();
                } else if (this.value == '2') {
                    $(".private").show();
                    $(".professional").hide();
                } else {
                    $(".professional").hide();
                    $(".private").hide();
                }
            });
        });

    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.categories').on('change', function () {
                if (this.value == '1') {
                    $(".homemaintenance").removeClass('d-none');
                    $(".homemaintenance").show();
                    $(".officemaintenance").hide();
                    $(".electricity").hide();
                    $(".computerrepair").hide();
                    $(".mobilerepair").hide();
                } else if (this.value == '2') {
                    $(".officemaintenance").removeClass('d-none');
                    $(".officemaintenance").show();
                    $(".homemaintenance").hide();
                    $(".electricity").hide();
                    $(".computerrepair").hide();
                } else if (this.value == '3') {
                    $(".electricity").removeClass('d-none');
                    $(".electricity").show();
                    $(".homemaintenance").hide();
                    $(".officemaintenance").hide();
                    $(".computerrepair").hide();
                } else if (this.value == '4') {
                    $(".computerrepair").removeClass('d-none');
                    $(".computerrepair").show();
                    $(".homemaintenance").hide();
                    $(".officemaintenance").hide();
                    $(".electricity").hide();
                } else if (this.value == '5') {
                    $(".mobilerepair").removeClass('d-none');
                    $(".mobilerepair").show();
                    $(".homemaintenance").hide();
                    $(".officemaintenance").hide();
                    $(".electricity").hide();
                    $(".computerrepair").hide();
                } else {
                    $(".homemaintenance").hide();
                    $(".officemaintenance").hide();
                    $(".electricity").hide();
                    $(".computerrepair").hide();
                    $(".mobilerepair").hide();
                }
            });
        });

    </script>
    <script>
        let items = document.querySelectorAll('#RealizeCarouselID .carousel-item')
        items.forEach((el) => {
            const minPerSlide = 3
            let next = el.nextElementSibling
            for (var i = 1; i < minPerSlide; i++) {
                if (!next) {
                    // wrap carousel by using first child
                    next = items[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                next = next.nextElementSibling
            }
        });
        let items2 = document.querySelectorAll('#FavoritesCarouselID .carousel-item')
        items2.forEach((el) => {
            const minPerSlide = 2
            let next = el.nextElementSibling
            for (var i = 1; i < minPerSlide; i++) {
                if (!next) {
                    // wrap carousel by using first child
                    next = items2[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                next = next.nextElementSibling
            }
        });

    </script>
    <script type="text/javascript">
        setTimeout(function () {
            var max = 130;
            var tot, str;
            $('.request-textID2').each(function () {
                str = String($(this).html());
                tot = str.length;
                str = (tot <= max) ?
                    str :
                    str.substring(0, (max + 1)) + "...";
                $(this).html(str);
            });
        }, 500);

    </script>
    <script type="text/javascript">
        function editForm(aid) {
            id = $(aid).data("id");
            var count = 0;
            $(".CallButton").on('click', function () {
                count++;
                $(".click").text(count);
            });
        }

    </script>
</body>

</html>
