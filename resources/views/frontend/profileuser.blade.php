@include('frontend.layout.head')
@section('professionalprofile','active')
<link rel="stylesheet" href="{{asset('theme/css/ProfessionalProfileStyle.css')}}">
<link href='https://api.mapbox.com/mapbox-gl-js/v2.4.1/mapbox-gl.css' rel='stylesheet' />
    <style type="text/css">
        @media all and (min-width: 1280px) {
            .joined {
                position: relative;
                left: 315px;
            }
            .card-img-top {
    width: 10rem;
}
        }

        @media all and (min-width: 1440px) {
            .joined {
                position: relative;
                left: 274px;
            }

            .loadmore {
                text-decoration: none;
                color: #08B1E7;
                font-size: 16px;
                font-weight: 600;
                position: relative;
                left: 243px;
                top: 16px;
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


            .whitestar {
                position: relative;
                top: -3px;
                width: 33px;
            }

            .ahre {
                padding-left: 2rem;
            }

            .centertick {
                width: 50px;
            }

            .sendfont {
                font-size: 15px;
            }

            .servicesicon {
                font-weight: 600;
                border-radius: 5px;
                font-size: 12px;
                color: #08B1E7;
                background-color: #cbf2ff;
                text-align: center;
                padding: 0.5rem .5rem;
                margin: .5rem;
            }

            .loadmore {
                text-decoration: none;
                color: #08B1E7;
                font-size: 16px;
                font-weight: 600;
                position: relative;
                left: 20px;
                top: 16px;
            }

            .joined {
                position: relative;
                left: 328px;
            }

            .upload-Picture {
                width: 12rem;
                height: 10.9rem;
                margin-left: 0.3rem;
                margin-top: 0.3rem;
                border-style: dashed;
                border-color: rgb(175, 175, 175);
            }

            /*
            .iconsettingprofile {
                width: 3rem;
                position: relative;
                left: 66px;
                top: 60px;
            }
*/

            .ReportCol {

                margin-right: 18rem;
            }

            .navalign2 {
                padding-left: 730px;
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

            .CRButton2 {
                text-align: center;
                width: 13rem;
                height: 3.5rem;
                background: linear-gradient(to right, #ff6d99, #fd0d55);
                border-radius: 6px;
                position: relative;
                left: -100px;
            }

            .SendRequestButton {
                background: linear-gradient(to right, #77EDF9, #0FB5E8);
                text-decoration: none;
                text-align: center;
                width: 10rem;
                padding: 0.5rem 0;
                color: white;
                border-radius: 5px;
                font-size: 13px;
                margin: auto;
                padding-right: 0;
            }

            .previews {
                background: linear-gradient(to right, #77EDF9, #0FB5E8);
                text-decoration: none;
                text-align: center;
                width: 15rem;
                padding: 0.5rem 0;
                color: white;
                border-radius: 5px;
                font-size: 16px;
                margin: auto;
                padding-right: 0;
                height: 2.7rem;
            }

            .followus {
                position: relative;
                left: 325px;
                top: -50px;
            }

            .socialicon {
                transform: translateX(75%);
            }
        }

        }

        @media (min-width: 1600px) {
            .previews {
                background: linear-gradient(to right, #77EDF9, #0FB5E8);
                text-decoration: none;
                text-align: center;
                width: 15rem;
                padding: 0.5rem;
                color: white;
                border-radius: 5px;
                font-size: 16px;
                margin: auto;
                padding-right: 0;
                height: 2.7rem;
            }
        }


        @media all and (min-width: 1800px) {

            .joined {
                position: relative;
                left: 401px;
            }


            .whitestar {
                position: relative;
                top: -3px;
                width: 31px;
            }


        }




        @media all and (min-width: 1920px) {
            .joined {
                position: relative;
                left: 555px;
            }

            .SendRequestButton {
                background: linear-gradient(to right, #77EDF9, #0FB5E8);
                text-decoration: none;
                text-align: center;
                width: 12rem;
                padding: 0.8rem;
                font-size: 16px;
                margin: auto;
                padding-right: 0;
            }

            .socialicon {
                transform: translateX(75%);
            }

            .followus {
                position: relative;
                left: 326px;
                top: -50px;
            }


            .whitestar {
                position: relative;
                top: -3px;
                width: 33px;
            }

            .navalign {
                padding-left: 173px;
                padding-top: 10px;
                color: #ff6e9a;
                font-weight: bold;
                display: inline-flex;
                padding-right: .5rem;
            }

            .sendfont {
                font-size: 18px;
            }

            .upload-Picture {
                width: 13.5rem;
                height: 13.5rem;
                margin-left: 0.3rem;
                margin-top: 0.51rem;
                border-style: dashed;
                border-color: rgb(175, 175, 175);
            }

            .previews {
                background: linear-gradient(to right, #77EDF9, #0FB5E8);
                text-decoration: none;
                text-align: center;
                width: 20rem;
                padding: 0.5rem 0;
                color: white;
                border-radius: 5px;
                font-size: 20px;
                margin: auto;
                padding-right: 0;
                height: 3.5rem;
                padding-top: 12px;
            }

            .centertick {
                width: 65px;
            }
                .mrgin_leftt {
        margin-left: 0px
    }

        }


  @media all and (min-width: 2400px) {

  .joined {
    position: relative;
    left: 755px;
}


.upload-Picture {
    width: 16.5rem;
    height: 17.5rem;
    margin-left: 0.3rem;
    margin-top: 0.51rem;
    border-style: dashed;
    border-color: rgb(175, 175, 175);
}

.iconsettingprofile {
    width: 3rem;
    position: relative;
    left: 40% !important;
    top: 115px;
}

.sendfont {
    font-size: 24px;
}


.centertick {
    width: 125px;
}

  }






        

    </style>


<body style="zoom:90%;" class="bodyheight">
    <!--Nav Bar-->
    @if(Auth::user())         
    @include('frontend.layout.navbar2')       
@else
@include('frontend.layout.navbar')       
@endif
    <!--Show Case-->
    <section class="pding-topp text-center">
        <div class="container-fluid">
            <div class="background-image text-end" style="border-radius: 15px;">
                <a href="">
                    <img src="{{asset('theme/icons/ic_photo_camera_24px.png')}}" class="BackgroundChangeImg">
                </a>
            </div>

                                @php

                                    if(isset($usersdetail->image)){
                                        $image = asset($usersdetail->image);
                                    }else{
                                        $image = 'https://wise.edu.pk/wp-content/uploads/2021/03/placeholder.png';
                                    }    

                                @endphp

            <div class="row">
                <div class="col-12 col-md-3 col-sm-12" style="height: 6rem;">
                    <div class="ProfilePicCard card"  style="background-image:url('{{$image}}');background-repeat: no-repeat;background-position: center;height: 200px;border-radius: 50%;background-size: cover;"> 
                        <div class="card-img-overlay" style="padding: 0;">
                            <div class="text-center">
                                <img src="{{asset('theme/pictures/Scroll Group 1.png')}}" class="RealizeTextImg1">
                                <a href="">
                                    <img src="{{asset('theme/icons/ic_photo_camera_24px.png')}}" class="RealizeTextImg2">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-9 col-sm-12">
                    <div class="row">
                        <div class="col-md-9 col-sm-12 col-lg-9">

                            <div class="mrgin_leftt">
                                    <div class="row" style="text-align: left;margin-top: 1rem;">
                                        <div class="col d-flex">
                                            <p class="ProfileText1" data-bs-toggle="modal" data-bs-target="#exampleModalf">{{ $usersdetail->first_name}} {{ $usersdetail->last_name}}</p>
                                             @if($usersdetail->usertype)
                                            <p class="mt-2" style="margin-left: 1rem;" data-bs-toggle="modal"
                                                data-bs-target="#exampleModalll"><span
                                                    class="Privatetext">{{$usersdetail->usertype}}</span></p>
                                            @else
                                            <p class="mt-2" style="margin-left: 1rem;" data-bs-toggle="modal"
                                                data-bs-target="#exampleModalll"><span class="Privatetext">Private</span>
                                            </p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row addressofjohn">
                                        <div class="col d-flex">
                                            <img src="{{asset('theme/icons/ic_place_-1.png')}}" class="ProfileAddressImg">
                                            <p class="ProfileText3">{{ $usersdetail->address}} {{ $usersdetail->country}} </p>
                                        </div>
                                    </div>
                                </div>

                        </div>

                        <div class="col-md-3 col-sm-12 col-lg-">

                            <div class="mt-3">

                            <p style="text-align:end;" class="ProfileText2"><img src="{{asset('theme/icons/ic_date_range_-1.png')}}" class="ProfileDateImg" style="margin-top: 0px;"> {{date('F d, Y H:i A',strtotime($usersdetail->created_at))}}</p>
                            </div>
                            <div class="iconfb" style="top:0px;text-align: end;">

                                <img src="{{asset('theme/icons/Group 2394.png')}}" class="VerficationImg" style="    position: relative;
                                            left: -40px;">
                                <img src="{{asset('theme/icons/Group 2395.png')}}" class="VerficationImg" style="    position: relative;
                                            left: -20px;">
                                <img src="{{asset('theme/icons/Group 2396.png')}}" class="VerficationImg" style="    position: relative;
                                            left: -5px;">

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About me and Map-->
    <section class="pt-5 pb-2">
        <div class="AboutMeContainer">
            <div class="row">
                <div class="col-12 col-md-7 col-sm-12 mb-5 aboutmetop">
                    <div class="AboutMeRow1">
                        <div class="row">
                            <div class="col text-start">
                                <p style="font-size: 16px;"><b>About me:</b></p>
                            </div>
                            <div class="col text-end">
<!--                                 <a href="">
                                    <img src="{{asset('theme/icons/Group -1.png')}}" style="width: 1.5rem;">
                                </a> -->
                            </div>
                        </div>
                        <div class="row mt-2">
                            <p style="font-size: 14px;">{{$usersdetail->aboutme}}  </p>
                        </div>
                    </div>
                    <div class="AboutMeRow2" style="margin-top: 1rem;">
                        <div class="row">
                            <div class="col text-start">
                                <p style="font-size: 16px;"><b>Services:</b></p>
                            </div>
                            <div class="col text-end">
<!--                                 <a href="">
                                    <img src="{{asset('theme/icons/Group -1.png')}}" style="width: 1.5rem;">
                                </a> -->
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-xs-12">
<!--                             <span class="servicesicon" id="vechile2">{{ $usersdetail->services}}</span> -->
                            
                            @if($userprofileservice->count())
                                @foreach($userprofileservice as $u)
                                <span class="servicesicon" id="vechile2">{{  $u->service}}</span>
                                @endforeach
                            @else
                                 <p style="text-align:center;">No Services Added</p>
                            @endif    
                            <!--   <span class="servicesicon">Vehicle Maintenence</span>

                               <span class="servicesicon" id="vechile">Vehicle Maintenence</span> -->
                        </div>
                        <div class="col-xs-12" style="padding-top:20px;padding-bottom: 30px;">
                         
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-12 col-md-1 col-sm-12"></div>
                <div class="col-12 col-md-4 col-sm-12" style="width:32% !important;" id="map">
 
                    <iframe src="https://goo.gl/maps/zpF5FeszrAn7vmsg8" width="347";
    height="340"; style="border:0;border-radius:15px" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>
    <section class=" pb-2 photogallery">
        <div class="AboutMeContainer">
            <div class="row">
                <div class="col-12 col-md-7 col-sm-12 mb-5">

                    <div class="AboutMeRow2 row" style="margin-top: 1rem;">
                        <div class="row">
                            <div class="col-lg-6">
                                <p style="font-size: 16px;" class="gallerycenter"><b>Photo Gallery:</b></p>
                            </div>


                        </div>
                        <div class="row">
<!--                             <div class="col piccenter" style="width: 10rem;">
                                <img src="{{asset($usersdetail->photogallery1)}}" class="card-img-top imagewidth">

                            </div>
                            <div class="col" style="width: 10rem;">
                                <img src="{{asset($usersdetail->photogallery2)}}" class="card-img-top imagewidth">

                            </div>

                            -->


                        </div>


                    </div>
                </div>
                <div class="col-12 col-md-1 col-sm-12"></div>
                <div class="col-12 col-md-4 col-sm-12 sendrequest">
                    <div class="ReviewContainer" style="width:95%;     position: relative;
                                    top: 15px;">
                        <div class="SendRequestRow row" style="max-width: 500px;">
                            <div class="col text-center">
                                <img src="{{asset('theme/icons/Group 1458.png')}}" class="centertick">
                            </div>
                            <div class="row text-center" style="padding-right: 0;">
                                <p style="font-size: 16px;padding-right: 0;"><b class="sendfont">Send your request privately</b></p>
                            </div>
                            <div class="row" style="position: relative;left: 12px;">
                                <a class=" nav-item nav-link SendRequestButton" data-bs-toggle="modal" role="button" data-bs-target="#staticBackdrop" data-bs-dismiss="modal">
                                    Connect Privately</a>
                                <a class=" nav-item nav-link SendRequestButtonmobile" data-bs-toggle="modal" role="button" data-bs-target="#mobilemodal" data-bs-dismiss="modal">
                                    Connect Privately </a>
                            </div>
                        </div>
                    </div>
                    <div class="ReviewContainer" style="width:95%;     position: relative;
                                    top: 15px;">



                        <div class="row" style="position: relative;top: 15px;">
                            <a href="LeaveReview.html" class="nav-item nav-link previews"><img src="{{asset('theme/icons/whitestar.png')}}" class="whitestar" alt="">
                                Leave your review</a>

                        </div>

                        <div class="row" style="position: relative;top: 20px;">
                            <a href="{{route('reportUser', ['id' => $usersdetail->id])}}" class="nav-item nav-link previews" style="background: linear-gradient(to right, #ffacbf, #fa4d75)"><img src="{{asset('theme/icons/Icon ionic-md-warning.png')}}" style="width:10%;" class="whitestar" alt="">
                                Report</a>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Categories-->

    <!--Pictures-->

    <!--Reviews-->
    <section class="pb-5 reviewtop">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12">
                    <div class="d-flex reviewparagraph">
                        <p class="ReviewText"><b> Reviews as service provider</b></p>
                        <img src="{{asset('theme/icons/Polygon 21.png')}}" class="starimage">
                        <p class="ReviewText"><b> 4.5/5</b></p>
                        <p class="ReviewText"><b> (30)</b></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="ReviewContainer">
            <div class="row" style="margin-bottom:20px;">
                <div class="col-lg-6 cardbottom">

                    <div class="onlineCard card">
                        <div class="row g-0">
                            <div class="col-2 col-sm-3 col-md-2 col-xxl-2 text-end">
                                <img src="{{asset('theme/icons/Ellipse -1.png')}}" class="CardImg">
                            </div>
                            <div class="col-10 col-sm-9 col-md-10 col-xxl-10">
                                <div class="card-body">
                                    <div class="row">
                                        <p class="ReviewProfileName">Cristina Röhmer</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-sm-12 d-flex" style="position: relative;
                                                        top: -5px;">
                                            <img src="{{asset('theme/icons/Group 2411.png')}}" class="ReviewStarImg">
                                            <p><b>4.5</b></p>
                                            <p class="ReviewDate">07-11-2021</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <p class="ReviewTextEnd">In publishing and graphic design,Lorem ipsum is a
                                            placeholder
                                            text commonly</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 cardbottom">

                    <div class="onlineCard card">
                        <div class="row g-0">
                            <div class="col-2 col-sm-3 col-md-2 col-xxl-2 text-end">
                                <img src="{{asset('theme/icons/Ellipse -1.png')}}" class="CardImg">
                            </div>
                            <div class="col-10 col-sm-9 col-md-10 col-xxl-10">
                                <div class="card-body">
                                    <div class="row">
                                        <p class="ReviewProfileName">Cristina Röhmer</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-sm-12 d-flex" style="position: relative;
                                                        top: -5px;">
                                            <img src="{{asset('theme/icons/Group 2411.png')}}" class="ReviewStarImg">
                                            <p><b>4.5</b></p>
                                            <p class="ReviewDate">07-11-2021</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <p class="ReviewTextEnd">In publishing and graphic design,Lorem ipsum is a
                                            placeholder
                                            text commonly</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-lg-6 cardbottom">

                    <div class="onlineCard card">
                        <div class="row g-0">
                            <div class="col-2 col-sm-3 col-md-2 col-xxl-2 text-end">
                                <img src="{{asset('theme/icons/Ellipse -1.png')}}" class="CardImg">
                            </div>
                            <div class="col-10 col-sm-9 col-md-10 col-xxl-10">
                                <div class="card-body">
                                    <div class="row">
                                        <p class="ReviewProfileName">Cristina Röhmer</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-sm-12 d-flex" style="position: relative;
                                                        top: -5px;">
                                            <img src="{{asset('theme/icons/Group 2411.png')}}" class="ReviewStarImg">
                                            <p><b>4.5</b></p>
                                            <p class="ReviewDate">07-11-2021</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <p class="ReviewTextEnd">In publishing and graphic design,Lorem ipsum is a
                                            placeholder
                                            text commonly</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 cardbottom">

                    <div class="onlineCard card">
                        <div class="row g-0">
                            <div class="col-2 col-sm-3 col-md-2 col-xxl-2 text-end">
                                <img src="{{asset('theme/icons/Ellipse -1.png')}}" class="CardImg">
                            </div>
                            <div class="col-10 col-sm-9 col-md-10 col-xxl-10">
                                <div class="card-body">
                                    <div class="row">
                                        <p class="ReviewProfileName">Cristina Röhmer</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-sm-12 d-flex" style="position: relative;
                                                        top: -5px;">
                                            <img src="{{asset('theme/icons/Group 2411.png')}}" class="ReviewStarImg">
                                            <p><b>4.5</b></p>
                                            <p class="ReviewDate">07-11-2021</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <p class="ReviewTextEnd">In publishing and graphic design,Lorem ipsum is a
                                            placeholder
                                            text commonly</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-lg-6 cardbottom">

                    <div class="onlineCard card">
                        <div class="row g-0">
                            <div class="col-2 col-sm-3 col-md-2 col-xxl-2 text-end">
                                <img src="{{asset('theme/icons/Ellipse -1.png')}}" class="CardImg">
                            </div>
                            <div class="col-10 col-sm-9 col-md-10 col-xxl-10">
                                <div class="card-body">
                                    <div class="row">
                                        <p class="ReviewProfileName">Cristina Röhmer</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-sm-12 d-flex" style="position: relative;
                                                        top: -5px;">
                                            <img src="{{asset('theme/icons/Group 2411.png')}}" class="ReviewStarImg">
                                            <p><b>4.5</b></p>
                                            <p class="ReviewDate">07-11-2021</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <p class="ReviewTextEnd">In publishing and graphic design,Lorem ipsum is a
                                            placeholder
                                            text commonly</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 cardbottom">

                    <div class="onlineCard card">
                        <div class="row g-0">
                            <div class="col-2 col-sm-3 col-md-2 col-xxl-2 text-end">
                                <img src="{{asset('theme/icons/Ellipse -1.png')}}" class="CardImg">
                            </div>
                            <div class="col-10 col-sm-9 col-md-10 col-xxl-10">
                                <div class="card-body">
                                    <div class="row">
                                        <p class="ReviewProfileName">Cristina Röhmer</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-sm-12 d-flex" style="position: relative;
                                                        top: -5px;">
                                            <img src="{{asset('theme/icons/Group 2411.png')}}" class="ReviewStarImg">
                                            <p><b>4.5</b></p>
                                            <p class="ReviewDate">07-11-2021</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <p class="ReviewTextEnd">
                                            In publishing and graphic design,Lorem ipsum is a placeholder text commonly</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-lg-6 cardbottom">
                    <div class="onlineCard card">
                        <div class="row g-0">
                            <div class="col-2 col-sm-3 col-md-2 col-xxl-2 text-end">
                                <img src="{{asset('theme/icons/Ellipse -1.png')}}" class="CardImg">
                            </div>
                            <div class="col-10 col-sm-9 col-md-10 col-xxl-10">
                                <div class="card-body">
                                    <div class="row">
                                        <p class="ReviewProfileName">Cristina Röhmer</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-sm-12 d-flex" style="position: relative;
                                                        top: -5px;">
                                            <img src="{{asset('theme/icons/Group 2411.png')}}" class="ReviewStarImg">
                                            <p><b>4.5</b></p>
                                            <p class="ReviewDate">07-11-2021</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <p class="ReviewTextEnd">In publishing and graphic design,Lorem ipsum is a
                                            placeholder
                                            text commonly</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 cardbottom">

                    <div class="onlineCard card">
                        <div class="row g-0">
                            <div class="col-2 col-sm-3 col-md-2 col-xxl-2 text-end">
                                <img src="{{asset('theme/icons/Ellipse -1.png')}}" class="CardImg">
                            </div>
                            <div class="col-10 col-sm-9 col-md-10 col-xxl-10">
                                <div class="card-body">
                                    <div class="row">
                                        <p class="ReviewProfileName">Cristina Röhmer</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-sm-12 d-flex" style="position: relative;
                                                        top: -5px;">
                                            <img src="{{asset('theme/icons/Group 2411.png')}}" class="ReviewStarImg">
                                            <p><b>4.5</b></p>
                                            <p class="ReviewDate">07-11-2021</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <p class="ReviewTextEnd">In publishing and graphic design,Lorem ipsum is a
                                            placeholder
                                            text commonly</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center col-sm-12 col-md-12 col-lg-9 col-xxl-7">
                <a href="" class="loadmore">Load more
                    <img src="{{asset('theme/icons/ic_arrow_forward_24px.png')}}" alt="">
                </a>
            </div>
        </div>
    </section>
    <section>
        <div class="modal fade" id="mobilemodal" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content modalbody">
                    <div class="modal-body">
                        <div class="col text-center mb-3">
                            <img src="{{asset('theme/icons/bluecontact.png')}}" style="width: 2.3rem;">
                        </div>
                        <p class="MBText1"> </p>
                        <p style="font-size: 12px;margin-bottom: 0.5rem;text-align: center;">
                            You can make a call or send a message for the further proceedings.
                        </p>
                        <div class="row" style="position: relative;top: 20px;">
                            <div class="col text-center">
                                <a href="MobileChatBlueMessage.html" class="SendMessageButton">Send Message</a>
                            </div>
                            <div class="col text-center">
                                <a href="" class="CallButton" data-bs-toggle="modal" data-bs-target="#callonmobile" data-bs-dismiss="modal">Make Call</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="modal fade" id="callonmobile" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop2Label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content callonmobilebody">
                    <div class="modal-body">
                        <div class="col text-center mb-3">
                            <img src="{{asset('theme/icons/bluecontact.png')}}" style="width: 3rem;height:3rem;">
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
    <!--Send Request-->
    <section>
        <div class="modal fade" id="staticBackdrop" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="col text-center mb-3">
                            <img src="{{asset('theme/icons/bluecontact.png')}}" style="width: 2.3rem;">
                        </div>
                        <p class="MBText1"> </p>
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
                            <img src="{{asset('theme/icons/bluecontact.png')}}" style="width: 3rem;height:3rem;">
                        </div>
                        <p class="MBText3"><b>742 009 993 23</b></p>
                        <div class="col text-center">
                            <a href="" class="CallButtongrey">Call</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Footer-->
    @include('frontend.layout.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.4.1/mapbox-gl.js'></script>
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
