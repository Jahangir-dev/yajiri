<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('theme/css/ModifyPersonalinfoStyle.css')}}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <title>ya jari</title>
        <style type="text/css">
        .form-group {
        margin-bottom: 15px
        }
        body{
        overflow-x: hidden;
        }
        @media all and (min-width: 1024px) {
        .background-image {
        height: 160px;
        background-image: url(theme/pictures/Group\ 3.png);
        background-position: center;
        background-size: cover;
        position: relative;
        overflow: hidden;
        border-radius: 30px;
        padding-top: 2.5rem;
        margin: auto;
        }
        .PIbutton1 {
        text-decoration: none;
        color: white;
        text-align: center;
        height: 2.5rem;
        width: 8rem;
        background: linear-gradient(to right, #ffacbf, #fa4d75);
        border-radius: 10px;
        margin-left: 5rem;
        padding-top: 0.5rem;
        border: none !important;
        }
        }
        @media all and (min-width: 1165px) {
        .navalign {
        padding-left: 240px;
        padding-top: 10px;
        color: #ff6e9a;
        font-weight: bold;
        display: inline-flex;
        padding-right: .5rem;
        }
        .navalign2 {
        padding-left: 200px;
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
        .followus {
        position: relative;
        left: 284px;
        top: -50px;
        }
        .socialicon {
        transform: translateX(73%);
        }
        }
        @media all and (min-width: 1440px) {
        .PIbutton1 {
        text-decoration: none;
        color: white;
        text-align: center;
        height: 2.5rem;
        width: 8rem;
        background: linear-gradient(to right, #ffacbf, #fa4d75);
        border-radius: 10px;
        margin-left: 18.6rem;
        padding-top: 0.5rem;
        border: none !important;
        }
        .socialicon {
        transform: translateX(80%);
        }
        .followus {
        position: relative;
        left: 330px;
        top: -50px;
        }
        .ViewProfileButton {
        color: white;
        font-size: 14px;
        padding: 0.3rem 1rem;
        background: linear-gradient(to right, #ff89a4, #ff0b44);
        border-radius: 5px;
        position: relative;
        left: -22px;
        }
        .background-image {
        width: 100%;
        height: 160px;
        background-image: url(theme/pictures/Group\ 3.png);
        background-position: center;
        background-size: cover;
        position: relative;
        overflow: hidden;
        border-radius: 30px;
        padding-top: 2.5rem;
        margin: auto;
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
        .background-image {
        height: 160px;
        background-image: url(theme/pictures/Group\ 3.png);
        background-position: center;
        background-size: cover;
        position: relative;
        overflow: hidden;
        border-radius: 30px;
        padding-top: 2.5rem;
        margin: auto;
        }
        .PIbutton1 {
        text-decoration: none;
        color: white;
        text-align: center;
        height: 2.5rem;
        width: 8rem;
        background: linear-gradient(to right, #ffacbf, #fa4d75);
        border-radius: 10px;
        margin-left: 18.5rem;
        padding-top: 0.5rem;
        border: none !important;
        }
        .navalign2 {
        padding-left: 570px;
        padding-top: 10px;
        color: #ff6e9a;
        font-weight: bold;
        display: inline-flex;
        padding-right: .5rem;
        }
        .nav-publish {
        padding-left: 20px;
        background: linear-gradient(to right, #ffacbf, #fa4d75);
        color: white;
        border-radius: 20px;
        align-items: center;
        padding-top: 10px;
        }
        .MPItext1 {
        font-size: 30px;
        font-weight: bolder;
        padding-top: 30px;
        }
        .cancel {
        text-decoration: none;
        text-align: center;
        height: 2.5rem;
        width: 8rem;
        border: 1px solid #fb597f;
        margin-left: 0.8rem;
        font-size: 16px;
        font-weight: bolder;
        border-radius: 8px;
        color: #ff4b7e;
        padding-top: 7px;
        position: relative;
        left: 5px;
        }
        .sideicon {
        padding-top: 20px;
        }
        .ViewProfileButton {
        position: relative;
        left: -35px;
        }
        .followus {
        position: relative;
        left: 328px;
        top: -50px;
        }
        .socialicon {
        transform: translateX(88%);
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
        .PIbutton1 {
        text-decoration: none;
        color: white;
        text-align: center;
        height: 2.5rem;
        width: 8rem;
        background: linear-gradient(to right, #ffacbf, #fa4d75);
        border-radius: 10px;
        margin-left: 18.8rem;
        padding-top: 0.5rem;
        border: none !important;
        }
        .sideicon {
        padding-top: 15px;
        }
        .cancel {
        text-decoration: none;
        text-align: center;
        height: 2.5rem;
        width: 8rem;
        border: 1px solid #fb597f;
        margin-left: 0.8rem;
        font-size: 16px;
        font-weight: bolder;
        border-radius: 8px;
        color: #ff4b7e;
        padding-top: 7px;
        position: relative;
        left: 5px;
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
        .background-image {
        height: 160px;
        background-image: url(theme/pictures/Group\ 3.png);
        background-position: center;
        background-size: cover;
        position: relative;
        overflow: hidden;
        border-radius: 30px;
        padding-top: 2.5rem;
        margin: auto;
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

        <?php
            $total = 100;
            if(Auth::user()->first_name==''){
                $total = $total - 12.5;
            }
            if(Auth::user()->last_name==''){
                $total = $total - 12.5;
            }
            if(Auth::user()->siret_number==''){
                $total = $total - 12.5;
            }
            if(Auth::user()->phone_number==''){
                $total = $total - 12.5;
            }
            if(Auth::user()->email==''){
                $total = $total - 12.5;
            }
            if(Auth::user()->image==''){
                $total = $total - 12.5;
            }
            if(Auth::user()->address==''){
                $total = $total - 12.5;
            }
            if(Auth::user()->facebook_profile_url==NULL){
                $total = $total - 12.5;
            }            

        ?>


        <!--Show Case-->
        <section class="text-center pt-3">
            <div class="container-fluid text-light">
                <div class="background-image row" style="background-image: url(theme/pictures/Group\ 3.png);">
                    <div class="col-4 col-xxl-5 col-lg-4 col-md-3 col-sm-4 text-end">
                        <img src="{{asset('theme/icons/Path -1.png')}}" class="sideicon">
                    </div>
                    <div class="col-8 col-xxl-7 col-lg-8 col-md-8 col-sm-8 text-start">
                        <p class="MPItext1">Modify Account Settings</p>
                    </div>
                </div>
            </div>
        </section>
        <!--Personal Info-->
        <section class="py-3">
            <div class="container">
                <div class="row">
                    <div class="hideShowDIV2 row pb-4" style="margin: auto;">
                        <div class="CompletePcol2 row" style="margin: auto; padding: 20px 0;">
                            <div class="col-sm-2 col-2 text-end">
                                <img class="CP2img" src="{{asset('theme/icons/ic_contacts_24px.png')}}">
                            </div>
                            <div class="col-sm-10 col-10 text-start">
                                <p class="CP2text1">{{$total}}% of your profile is completed</p>
                                 @if($total!=100)
                                    <p class="CP2text2">Complete your profile now</p>
                                @endif
                            </div>
                            <div class="row text-center">
                                <a href="{{route('professionalProfile')}}" class="viewmyprofile" style="text-decoration: none;"><span class="ViewProfileButton">View My Profile</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex">
                        <img src="{{asset('theme/icons/Group 1887.png')}}" style="width: 2rem;height: 1.8rem;">
                        <p class="MPItext2">Personal Information</p>
                    </div>
                </div>
                <style>
                .image-upload > input
                {
                display: none;
                }
                .image-upload img
                {
                width: 80px;
                cursor: pointer;
                }
                </style>


                <form method="post" action="{{route('updateprofile')}}" enctype="multipart/form-data">
                    @csrf

                                @php
                                    if(isset($userdetail->image)){
                                        $image = asset($userdetail->image);
                                    }else{
                                        $image = 'https://wise.edu.pk/wp-content/uploads/2021/03/placeholder.png';
                                    }    

                                @endphp

                    <div class="row pb-5">
                        <div class="CompletePcol1 col-xxl-7 col-lg-6 col-md-12">
                            <div class="row imagetop">
                                <div class="col d-flex">
                                    <img class="profileimg" id="imagePreview" src="{{asset($image)}}" style="height:135px;width: 160px;">
                                    <div class="image-upload">
                                        <label for="file-input">
                                            <img src="{{asset('theme/icons/Group 1889.png')}}" style="width: 1.5rem;position: relative;top:65%;left: 6%;padding-top:70px">
                                        </label>
                                        <input id="file-input" accept="image/*" name="image" value="{{$userdetail->image}}" type="file"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label for="input1" class="form-label">
                                    <p class="formlabeltext">First Name:</p>
                                </label>
                                <div class="col-10 col-sm-9 col-md-10">
                                    <div class="input-group mb-4">
                                        <input type="text" value="{{$userdetail->first_name}}" name="first_name" class="form-control" id="input1" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-2 col-sm-3 col-md-2">
                                </div>
                            </div>
                            <div class="row">
                                <label for="input2" class="form-label">
                                    <p class="formlabeltext">Last Name:</p>
                                </label>
                                <div class="col-10 col-sm-9 col-md-10">
                                    <div class="input-group mb-4">
                                        <input type="text" value="{{$userdetail->last_name}}" name="last_name"  class="form-control" id="input2" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="col-2 col-sm-3 col-md-2">
                                </div>
                            </div>
                            <div class="row">
                                <label for="input3" class="form-label">
                                    <p class="formlabeltext">SIRET Number:</p>
                                </label>
                                <div class="col-10 col-sm-9 col-md-10">
                                    <div class="input-group mb-4">
                                        <input type="text" value="{{$userdetail->siret_number}}" name="siret_number" class="form-control" id="input3" placeholder="112121">
                                    </div>
                                </div>
                                <div class="col-2 col-sm-3 col-md-2">
                                </div>
                            </div>
                            <div class="row">
                                <label for="input4" class="form-label">
                                    <p class="formlabeltext">Phone Number:</p>
                                </label>
                                <div class="col-10 col-sm-9 col-md-10">
                                    <div class="input-group mb-4">
                                        <input type="text" value="{{$userdetail->phone_number}}" name="phone_number" class="form-control" id="input4" placeholder="1287879 00">
                                    </div>
                                </div>
                                <div class="col-2 col-sm-3 col-md-2">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled" style="height: 1.2rem;margin-top: 0.6rem;" disabled>
                                </div>
                            </div>
                            <div class="row">
                                <label for="input5" class="form-label">
                                    <p class="formlabeltext">Email Address:</p>
                                </label>
                                <div class="col-10 col-sm-9 col-md-10">
                                    <div class="input-group mb-4">
                                        <input type="text"  value="{{$userdetail->email}}" name="email" class="form-control" id="input5" placeholder="Example@email.com">
                                    </div>
                                </div>
                                <div class="col-2 col-sm-3 col-md-2">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled" style="height: 1.2rem;margin-top: 0.6rem;" disabled>
                                </div>
                            </div>
                            <div class="row">
                                <label for="input6" class="form-label">
                                    <p class="formlabeltext">Address:</p>
                                </label>
                                <div class="col-10 col-sm-9 col-md-10">
                                    <div class="input-group mb-4">
                                        <input type="text" value="{{$userdetail->address}}" name="address" class="form-control" id="input6" placeholder="Location">
                                    </div>
                                </div>
                                <div class="col-2 col-sm-3 col-md-2">
                                </div>
                            </div>
                            <div class="row">
                                <label for="input7" class="form-label">
                                    <p class="formlabeltext">Facebook Account:</p>
                                </label>
                                <div class="col-10 col-sm-9 col-md-10">
                                    <div class="input-group mb-4">
                                        <input type="text" class="form-control" value="{{$userdetail->facebook_profile_url}}" id="input7" placeholder="Facebook.com/useraccountname" name="facebook_profile_url">
                                    </div>
                                </div>
                                <div class="col-2 col-sm-3 col-md-2">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled" style="height: 1.2rem;margin-top: 0.6rem;" disabled>
                                </div>
                            </div>
                            <div class="row">
                                <label for="input7" class="form-label">
                                    <p class="formlabeltext">Enter Current Password:</p>
                                </label>
                                <div class="col-10 col-sm-9 col-md-10">
                                    <div class="input-group mb-4">
                                        <input type="text" onfocus="this.type='password'" name="password" class="form-control" required id="input7">
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-3">
                                <a href="" role="button" class="cancel">
                                    <p style="    color: #f13d66;">Cancel</p>
                                </a>
                                <button type="submit"   class="PIbutton1">
                                <p>Confirm</p>
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="col-sm-1">
                    </div>
                    <div class="hideShowDIV1 col-xxl-4 col-lg-5 col-md-12">
                        <div class="CompletePcol2 row p-3">
                            <div class="col-sm-2 text-end">
                                <img class="CP2img" src="{{asset('theme/icons/ic_contacts_24px.png')}}">
                            </div>
                            <div class="col-sm-10 text-start">
                                <p class="CP2text1">{{$total}}% of your profile is completed</p>
                                @if($total!=100)
                                    <p class="CP2text2">Complete your profile now</p>
                                @endif
                            </div>
                            <div class="row text-center">
                                <a href="{{route('professionalProfile')}}" style="text-decoration: none;"><span class="ViewProfileButton">View My Profile</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="modal fade" id="LoginRegisterModal1" tabindex="-1" aria-labelledby="LoginRegisterModal1Label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header" style="justify-content: center;">
                        <p class="modal-title" id="LoginRegisterModal1Label">Login or registration</p>
                    </div>
                    <div class="modal-body">
                        <p style="text-align: center;
                            font-size: 13px;
                            font-weight: bold;
                        color: #ff155b;"><b>Welcome to Ya jari</b></p>
                        <div class="form-group">
                            <select id="Select" class="FCselect1 form-select">
                                <option>
                                    France (+33)
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <input type="text" class="FCinput1 form-control" placeholder="Telephone Number" aria-label="Telephone Number" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="LRM1Button row">
                            <a role="button" data-bs-target="#LoginRegisterModal3" data-bs-toggle="modal" data-bs-dismiss="modal">
                                <p style="color: white;position: relative;top:12px;">Continue</p>
                            </a>
                        </div>
                        <div class="row d-flex mb-3">
                            <div class="col">
                                <hr>
                            </div>
                            <div class="col-1 text-center">
                                <p class="OrText">Or</p>
                            </div>
                            <div class="col">
                                <hr>
                            </div>
                        </div>
                        <div class="LRMmobileB row">
                            <div class="col-3">
                                <img src="{{asset('theme/icons/ic_mail_outline_24pxblack.png')}}" style="padding-top: 0.9rem;">
                            </div>
                            <div class="col-9">
                                <a role="button" data-bs-target="#LoginRegisterModal2" data-bs-toggle="modal" data-bs-dismiss="modal">
                                    <p style="position: relative;top: 12px;">Continue with Email</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer" style="margin: auto;border: none;">
                        <div class="row">
                            <img src="icons/yajari-removebg-preview.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Model2-->
        <div class="modal fade" id="LoginRegisterModal2" tabindex="-1" aria-labelledby="LoginRegisterModal2Label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header" style="justify-content:center;">
                        <p class="modal-title" id="LoginRegisterModal2Label">Login or registration</p>
                    </div>
                    <div class="modal-body">
                        <p class="MBText1"><b>Welcome to Ya jari</b></p>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" style="height: 3rem;
                            border-radius: 10px;" placeholder="Email Address" aria-label="Email Address" aria-describedby="basic-addon1">
                        </div>
                        <div class="LRM1Button row">
                            <a role="button" data-bs-target="#LoginRegisterModal4" data-bs-toggle="modal" data-bs-dismiss="modal">
                                <p style="color: white;position: relative;top: 12px;">Continue</p>
                            </a>
                        </div>
                        <div class="row d-flex mb-3">
                            <div class="col">
                                <hr>
                            </div>
                            <div class="col-1 text-center">
                                <p class="OrText">Or</p>
                            </div>
                            <div class="col">
                                <hr>
                            </div>
                        </div>
                        <div class="LRMmobileB LRMmobileB1 row">
                            <div class="col-3">
                                <img src="icons/ic_phonelink_lock_24pxBlack.png" style="position:relative;top: 12px;">
                            </div>
                            <div class="col-9">
                                <a role="button" data-bs-target="#LoginRegisterModal1" data-bs-toggle="modal" data-bs-dismiss="modal">
                                    <p style="position: relative;top: 12px;"> Continue with Mobile</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer" style="margin: auto;border: none;">
                        <div class="row">
                            <img src="icons/yajari-removebg-preview.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Model3-->
        <section>
            <div class="modal fade" id="LoginRegisterModal3" data-bs-keyboard="false" tabindex="-1" aria-labelledby="LoginRegisterModal3Label" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="MHmodel3 modal-header row">
                            <div class="col-3 col-sm-3">
                                <button type="button" data-bs-dismiss="modal" aria-label="Close" style="background-color: white;border: none;">
                                <img class="model-img1" src="icons/ic_keyboard_arrow_right_24Blackpx.png">
                                </button>
                            </div>
                            <div class="col-9 col-sm-9">
                                <p class="text-start" style="font-size: 14px;
                                    font-weight: bolder;    position: relative;
                                top: 10px;" id="LoginRegisterModal3Label">Conform Telephone Number</p>
                            </div>
                        </div>
                        <div class="Modal3Body modal-body">
                            <p style="font-size: 14px;
                            text-align: center;">Enter the code sent to your Telephone number through SMS </p>
                            <div class="Modal3IputDIV d-flex">
                                <input type="text" class="Model3input form-control" placeholder="  1" aria-label="1">
                                <input type="text" class="Model3input form-control" placeholder=" 2" aria-label="2">
                                <input type="text" class="Model3input form-control" placeholder=" 3" aria-label="3">
                                <input type="text" class="Model3input form-control" placeholder=" 4" aria-label="4">
                                <input type="text" class="Model3input form-control" placeholder=" 5" aria-label="5">
                                <input type="text" class="form-control" placeholder="6" aria-label="  6">
                            </div>
                        </div>
                        <div class="Modal3footer modal-footer">
                            <div class="row">
                                <div class="col-8 col-sm-7 text-end">
                                    <p class="Modal3Ftext">Did not receive any code?</p>
                                </div>
                                <div class="col-4 col-sm-5">
                                    <a role="button" data-bs-target="#LoginRegisterModal4" data-bs-toggle="modal" data-bs-dismiss="modal">
                                        <p class="Modal3Ftext"><b>Send again</b></p>
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
        </section>
        <!--Model4-->
        <section>
            <div class="modal fade" id="LoginRegisterModal4" data-bs-keyboard="false" tabindex="-1" aria-labelledby="LoginRegisterModal4Label" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="MHmodel3 modal-header row">
                            <div class="col-3 col-sm-4">
                                <button type="button" data-bs-dismiss="modal" aria-label="Close" style="background-color: white;border: none;">
                                <img class="model-img1" src="icons/ic_keyboard_arrow_right_24Blackpx.png">
                                </button>
                            </div>
                            <div class="col-9 col-sm-8">
                                <p class="modal-title text-startt" id="LoginRegisterModal4Label">Login or registration</p>
                            </div>
                        </div>
                        <div class="Modal4Body modal-bodylogin">
                            <p class="MBText1"><b>Welcome to Yajari</b></p>
                            <div class="input-group mb-2">
                                <select class="Modal4select1 form-select form-select-sm purpose" aria-label="Default select example" style="font-size: 12px;">
                                    <option value="{{Null}}">Choose</option>
                                    <option value="1">Professional</option>
                                    <option value="2">Private</option>
                                </select>
                            </div>
                            <div class="input-group mb-2">
                                <input type="text" style="display:none;height: 2.5rem;
                                background-image: url(icons/ic_person_-1.png);
                                background-repeat: no-repeat;
                                background-size: 12px 12px;
                                background-position: right 2rem center;
                                font-size: 12px;
                                border-radius: 10px 10px 0 0;" class="Modal4input1 form-control private" placeholder="First Name" aria-label="First Name" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-2">
                                <input type="text" style="display:none;    height: 2.5rem;
                                background-image: url(icons/ic_person_-1.png);
                                background-repeat: no-repeat;
                                background-size: 12px 12px;
                                background-position: right 2rem center;
                                font-size: 12px;border-radius: 0 0 10px 10px;" class="Modal4input2 form-control private" placeholder="Last Name" aria-label="Last Name" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-2">
                                <input type="text" style="display:none;height: 2.5rem;
                                background-image: url(icons/ic_person_-1.png);
                                background-repeat: no-repeat;
                                background-size: 12px 12px;
                                border-radius: 10px 10px 0 0;
                                background-position: right 2rem center;font-size: 12px;" class=" form-control professional" placeholder="Company Name" aria-label="Company Name" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-2">
                                <input type="text" class="Modal4input3 form-control" placeholder="Address" aria-label="Address" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-2">
                                <input type="text" style="display:none;border-radius: 10px 10px 0 0;font-size: 12px;" class="Modal4input4 form-control professional" placeholder="SIRET Number" aria-label="SIRET Number" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-2">
                                <input type="text" class="Modal4input5 form-control" placeholder="Phone Number" aria-label="Phone Number" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-2">
                                <input type="text" class="Modal4input6 form-control" placeholder="Password" aria-label="password" aria-describedby="basic-addon1">
                            </div>
                            <div class="">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="FieldsetCheck" style="height: 1.2rem;">
                                    <label class="form-check-label" for="FieldsetCheck">
                                        <p class="Modal4Form-Categoryt1" style="padding-top: 0.2rem;">I accept <a style="color: #F82268;text-decoration: none;" href="">general terms and conditions.</a> </p>
                                    </label>
                                </div>
                            </div>
                            <div class="pt-1 mb-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="FieldsetCheck" style="height: 1.2rem;">
                                    <label class="form-check-label" for="FieldsetCheck">
                                        <p class="Modal4Form-Categoryt1" style="padding-top: 0.2rem;">Receive information from our partners.</p>
                                    </label>
                                </div>
                            </div>
                            <div class="LRM1Button row" style="margin-bottom: 0.2rem;">
                                <a role="button" data-bs-target="#LoginRegisterModal5" data-bs-toggle="modal" data-bs-dismiss="modal">
                                    <p style="color: white;position: relative;
                                    top: 13px;">Continue</p>
                                </a>
                            </div>
                        </div>
                        <div class="Modal4footer modal-footer">
                            <div class="row" style="margin: auto;">
                                <img class="MFImg" src="icons/yajari-removebg-preview.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Model5-->
        <section>
            <div class="modal fade" id="LoginRegisterModal5" data-bs-keyboard="false" tabindex="-1" aria-labelledby="LoginRegisterModal5Label" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="MHmodel3 modal-header row">
                            <div class="col-3 col-sm-4">
                                <button type="button" data-bs-dismiss="modal" aria-label="Close" style="background-color: white;border: none;">
                                <img class="model-img1" src="icons/ic_keyboard_arrow_right_24Blackpx.png">
                                </button>
                            </div>
                            <div class="col-9 col-sm-8">
                                <p class="modal-title text-startt" id="LoginRegisterModal5Label">Create your profile</p>
                            </div>
                        </div>
                        <div class="Modal5Body modal-body">
                            <div class="row" style="margin: auto;">
                                <img class="Modal5Img" src="icons/yajari-removebg-preview.png">
                            </div>
                            <p class="Modal5Text1 pt-1"><b>Welcome to Yajari</b></p>
                            <p class="Modal5Text2">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document </p>
                            <div class="LRM1Button row" style="margin-bottom: 0.2rem;">
                                <a role="button" data-bs-target="#LoginRegisterModal6" data-bs-toggle="modal" data-bs-dismiss="modal">
                                    <p style="color: white;position: relative;top: 12px;">Continue</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Model6-->
        <div class="modal fade" id="LoginRegisterModal6" tabindex="-1" aria-labelledby="LoginRegisterModal6Label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" style="border-radius:20px;">
                    <div class="modal-header" style="justify-content: center;">
                        <p class="modal-title" id="LoginRegisterModal6Label">Create your profile</p>
                    </div>
                    <div class="Modal6Body">
                        <p class="Modal6Text1"><b>Welcome to Ya jari</b></p>
                        <div>
                            <select id="Select" class="FCselect1 form-select">
                                <option>
                                    France (+33)
                                </option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="FCinput1 form-control" placeholder="Telephone Number" aria-label="Telephone Number" aria-describedby="basic-addon1">
                        </div>
                        <p class="Modal6Text2">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document</p>
                        <div class="pt-1 mb-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="FieldsetCheck" style="height: 1.2rem;">
                                <label class="form-check-label" for="FieldsetCheck">
                                    <p class="Modal6Text3" style="padding-top: 0.2rem;">Send Code Through SMS</p>
                                </label>
                            </div>
                        </div>
                        <div class="LRM1Button row">
                            <a role="button" data-bs-target="#LoginRegisterModal7" data-bs-toggle="modal" data-bs-dismiss="modal">
                                <p style="color: white;position: relative;top: 13px;">Continue</p>
                            </a>
                        </div>
                    </div>
                    <div class="modal-footer" style="margin: auto;border: none;">
                        <div class="row">
                            <img src="icons/yajari-removebg-preview.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Model7-->
        <div class="modal fade" id="LoginRegisterModal7" tabindex="-1" aria-labelledby="LoginRegisterModal7Label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header" style="justify-content: center;">
                        <p class="modal-title" id="LoginRegisterModal7Label">Create your profile</p>
                    </div>
                    <div class="Modal7Body">
                        <p class=" text-center" style="font-size: 14px;"><b>Check your email</b></p>
                        <div class="input-group mb-3">
                            <input type="text" style="border-radius: 10px;
                            height: 3rem;" class="form-control" placeholder="Example@email.com" aria-label="Example@email.com" aria-describedby="basic-addon1">
                        </div>
                        <p class="Modal6Text2 mb-5">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document</p>
                        <div class="LRM1Button row" style="margin: auto;">
                            <a role="button" href="ChoseCategory.html" style="text-decoration:none;">
                                <p style="color: white;font-size: 13px;position: relative;
                                top: 15px;">Continue</p>
                            </a>
                        </div>
                        <div class="row" style="margin: auto;">
                            <a role="button" data-bs-target="#LoginRegisterModal2" data-bs-toggle="modal" data-bs-dismiss="modal">
                                <p class="text-center pt-2" style="font-size: 12px;"><b>Update Email</b></p>
                            </a>
                        </div>
                    </div>
                    <div class="modal-footer" style="margin: auto;border: none;">
                        <div class="row">
                            <img src="icons/yajari-removebg-preview.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Modal8-->
        <div class="modal fade" id="LoginRegisterModal8" tabindex="-1" aria-labelledby="LoginRegisterModal8Label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header" style="justify-content: center;">
                        <p class="modal-title" id="LoginRegisterModal8Label">Sign In</p>
                    </div>
                    <div class="modal-bodysignin" style="padding-top: 1rem;">
                        <p class="MBText1"><b>Welcome to Ya jari</b></p>
                        <div class="row">
                            <div class="form-group">
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Telephone Number or Email Address" style="height: 3rem;border-radius: 10px 10px 10px 10px;">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3">
                                <div class="form-group">
                                    <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password" style="height: 3rem;border-radius:10px 10px 10px 10px;">
                                    <div class="input-group-addon">
                                        <a href=""><img class="passwordEye" src="icons/ic_visibility_off_24px.png" style="position:relative; top: -2.2rem;left: 85%;width: 1.2rem;"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="LRM1Button row">
                            <a role="button" data-bs-target="#LoginRegisterModal3" data-bs-toggle="modal" data-bs-dismiss="modal">
                                <p style="color: white;    position: relative;
                                top: 10px;">Continue</p>
                            </a>
                        </div>
                    </div>
                    <div class="modal-footer" style="margin: auto;border: none;">
                        <div class="row">
                            <img src="icons/yajari-removebg-preview.png" style="    width: 8rem;
                            margin: 0px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Footer-->
        @include('frontend.layout.footer')
        @include('frontend.layout.scripts')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript">
        $(document).ready(function() {
        $('.purpose').on('change', function() {
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
                    

                      function readURL(input) {
                            if (input.files && input.files[0]) {
                                var reader = new FileReader();

                                reader.onload = function (e) {
                                    $('#imagePreview').attr('src', e.target.result);
                                }

                                reader.readAsDataURL(input.files[0]);
                            }
                        }

                        $("#file-input").change(function(){
                            readURL(this);
                        });


                </script>


    </body>
</html>