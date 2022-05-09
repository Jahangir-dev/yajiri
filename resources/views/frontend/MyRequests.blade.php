<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('theme/css/RecentRequestStyle.css')}}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css" rel="stylesheet" />
        <title>ya jari</title>
        @section('my-request','active')

        <style type="text/css">
        .request-textID2{
        font-size: 14px;
        font-weight: 500;
        }
        @media all and (min-width: 1300px) {
        .background-image{
        background-image: url(theme/pictures/Group\ 12.png);
        height: 180px;
        }
        .background-image2 {
        width: 65%;
        height: 150px;
        background-position: center;
        background-size: cover;
        position: relative;
        overflow: hidden;
        top: -50px;
        margin: 0 auto;
        background-image: url(theme/pictures/Group\ 2382.png);
        }
        .arrow {
        position: relative;
        /* top: 2px; */
        }
        .distance {
        position: relative;
        top: 1px;
        }
        .response2 {
        position: relative;
        top: 2px;
        }
        }
        @media all and (min-width: 1440px) {
        .socialicon {
        transform: translateX(80%);
        }
        .followus {
        position: relative;
        left: 330px;
        top: -50px;
        }
        }
        .form-group {
        margin-bottom: 15px;
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
        .navalign2 {
        padding-left: 570px;
        padding-top: 10px;
        color: #ff6e9a;
        font-weight: bold;
        display: inline-flex;
        }
        .ReportContactFlex {
        justify-content: right;
        position: relative;
        left: 76px;
        }
        .arrow {
        position: relative;
        top: 1px
        }
        .distance {
        position: relative;
        top: 1px;
        }
        .smallbutton {
        position: relative;
        top: 40px;
        left: -190px;
        }
        .lastimgtext {
        position: relative;
        top: -25px;
        left: 73px;
        }
        .categorytop {
        position: relative;
        top: 0px;
        }
        .ahre {
        padding-left: 2rem;
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
        left: 665px;
        }
        .reviewparagraph {
        justify-content: center;
        position: relative;
        left: 311px;
        }
        .upload-Picture {
        width: 19rem;
        height: 19.4rem;
        margin-left: 0.3rem;
        margin-top: 0.3rem;
        border-style: dashed;
        border-color: rgb(175, 175, 175);
        }
        .ReportCol {
        margin-right: 18rem;
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
        .response2 {
        position: relative;
        top: 2px;
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
        .pagnationtop {
        position: relative;
        top: -20px;
        }
        .background-image {
        border-radius: 25px;
        width: 100%;
        height: 200px;
        position: relative;
        background-position: center;
        background-size: cover;
        overflow: hidden;
        }
        }
        .showcase-text1 {
        font-size: 26px;
        font-weight: 900;
        padding-top: 2rem
        }
        </style>
    </head>
    <body style="zoom:90%">
    @if(Auth::user())
    @include('frontend.layout.navbar2')
@else
@include('frontend.layout.navbar')
@endif
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <!--Nav Bar-->
        <section class="pt-3 text-center">
            <div class="row" style="margin:0px">
                <div class="col-lg-12 mainpicture">
                    <div class=" background-image text-center ">
                        <p class="showcase-text1" style="color:white">My Requests</p>
                        <p class="showcase-text2" style="font-size: 22; font-weight:500;color: white;">Publish the request and resolve your
                        issue</p>
                        <a href="{{route('publishrequest')}}" class="btn btn-small publishbutton" type="button" style="background-color:white; color: #FA4673; height: 40px;border-color: #FA4673; border-width: 2px; border-radius: 10px;  ">
                        <p style="font-size: 18; font-weight: bolder;">Publish Request</p>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!--Show Case-->
        <!--Recent Requests-->
        <section class="py-5 myrequesttop">
            <div class="container" style="max-width: 70rem;">
                <div class="row" style="width: 92%;margin: auto;">
                    <p class="NeighborsSText1">My Requests</p>
                </div>
                @foreach($myrequest as  $m)
                <a href="{{route('view-request',['id'=>$m])}}" style="text-decoration:none;">
                    <div class="col pb-5" style="width: 90%;margin: auto;">
                        <div class="RequestDIVP">
                            <div class="d-flex" style="justify-content: space-between;padding-bottom: 10px;">
                                <div class="">
                                    <p class="responses-date1 text-start">{{$m->created_at->diffForHumans()}}</p>
                                </div>
                                <div class="text-end d-flex">
                                    <button type="button" class="QuotationButton">
                                    <p class="responses-tQ1">${{$m->price}}</p>
                                    </button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 col-12 picturebottom">
                                    <div class="d-flex" style="justify-content: left;">
                                        <div class="" style="position: relative;">
                                            <a href="{{route('professionalProfile')}}"> <img class="requestFaceImg1" src="{{$m->file}}"></a>
                                        </div>
                                        <div class="text-start CardNameStar">
                                            <div class="row">
                                                <a href="{{route('professionalProfile')}}" style="text-decoration:none">
                                                    <p class="Responses-Name1 text-start" style="margin-bottom: 0.5rem;color: black;">
                                                        <b>{{isset($m->user)?$m->user->name:''}}</b>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="row">
                                                <div class="col d-flex">
                                                    <img class="responses-star1 mt-1 starticon" src="{{asset('theme/icons/Group 2411.png')}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-7 col-sm-12 col-12" style="padding-left: 20px;">
                                    <p style="margin-bottom: 0.5rem;" class="looking"><b>{{$m->request_title}}</b></p>
                                    <p  class="request-textID2 text-start">
                                    {{$m->description}}. </p>
                                </div>
                            </div>
                            <div id="responsesID1" class="col-12 response responsetop" style="padding-left: 10px;">
                                <img src="{{asset('theme/icons/ic_textsms_-1.png')}}" class="responseicon" style="width: 16px;height: 15px;margin-top: 5px;">
                                <p class="responses-buttons1234 text-start responsetext">2 Responses</p>
                            </div>
                            <hr id="LineID1" class="hrtop">
                            <div class="row pt-3 rowtop" style="padding-left: 10px;">
                                <div class="col-md-2 col-sm-4 col-6 d-flex pt-1">
                                    <img src="{{asset('theme/icons/ic_place_-2.png')}}" class="lebardoicon" style="width: 15px;height: 22px;">
                                    <p class="responses-buttons1234 text-start lebardotext">{{$m->formated_address}}</p>
                                </div>
                                <div class="col-md-3 col-sm-4 col-6 d-flex pt-1 categorytop">
                                    <img src="{{asset('theme/icons/ic_label_24px.png')}}" class="categryicon iconcategory" style="    width: 21px;
                                    height: 13px;
                                    margin-top: 3px;">
                                    <p class="responses-buttons1234 text-start  categorytext">{{isset($m->category_rel)?$m->category_rel->name:''}}</p>
                                </div>
                                <div class="col-md-2 col-sm-4 col-6 d-flex pt-1 distanceside">
<!--                                     <img src="{{asset('theme/icons/Union 21.png')}}" class="arrow" style="    width: 22px;
                                    height: 15px;
                                    padding-top: 3px;">
                                    <p class="responses-buttons1234 text-start distance">5.2Km</p> -->
                                </div>
                                <div id="responsesID2" class="col-md-2 col-sm-4 col-12 pt-1 ">
                                    <img src="{{asset('theme/icons/ic_textsms_-1.png')}}" style="width: 16px;height: 15px;margin-top: 5px;">
                                    <p class="responses-buttons1234 text-start response2 responsetop">2 Responses</p>
                                </div>
                                <div class="col-md-1 col-sm-4 col-12 pt-1 myrequest">
                                </div>
                                <div class="col-md-2 col-sm-4 col-12 pt-1 myrequest" style="text-align:right;padding-right:0px;">
                                    <!-- <img src="icons/button.png" id="start" class="Contact-b1">
                                    -->
                                    <div class="dropdown">
                                            <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                               Choose
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                @if($m->status=='')

                                                <li><a href="{{route('cancel', [ 'id' => $m->id ])}}" class="btn">Cancel </a></li>
                                                @endif

                                                @if($m->status=="1")

                                                 <li><a href="{{route('close', [ 'id' => $m->id ])}}" class="btn"> Close  </a></li>
                                                 @endif



                                            </ul>
                                        </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach



            </div>
        </section>
        <!--Publish Request-->
        <section class="pb-5 text-center lastimagetop">
            <div class="text-light">
                <div class="background-image2" style="border-radius: 5px;">
                    <div class="text-start d-flex flex-wrap PublishRequestROW" style="justify-content:center;">
                        <p class="Publish-text1 mt-2 lastimgtext">Now you can post
                        your request</p>
                        <a  href="{{route('publishrequest')}}" class="btn btn-small smallbutton" type="button" style="background-color:white; color: #FA4673; height: 40px;border-color: #FA4673; border-width: 2px; border-radius: 10px;">
                        <p style="font-size: 18; font-weight: bolder;">Publish Request</p>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!--Pagination-->
        <div class="container">
            <div class="row pagnationtop" style="padding-bottom: 55px;">
                <nav aria-label="Page navigation example">
                    <ul class="pagination" style="justify-content: space-between;width: 20rem;margin: auto;">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous" style="border:none;">
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" id="pagination-num" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" id="pagination-num" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" id="pagination-num" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" id="pagination-num" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" id="pagination-num" href="#">5</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next" style="border:none;">
                                <span aria-hidden="true">
                                    <img src="{{asset('theme/icons/ic_keyboard_arrow_right_-1.png')}}" style="width:0.5rem;">
                                    <img src="{{asset('theme/icons/ic_keyboard_arrow_right_-1.png')}}" style="width:0.5rem;">
                                </span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!--Model Message Or call-->
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
        <!--Modal 2 Report-->
        <section>
            <div class="modal fade" id="staticBackdropReport" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropReportLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="col text-center mb-3">
                                <img src="icons/Icon ionic-md-warning.png" style="width: 3rem;">
                            </div>
                            <p class="MBText2 text-center mt-4">Are you sure to want to report this request ?
                            </p>
                            <div class="row pt-3">
                                <div class="col text-center mt-4">
                                    <a href="" class="NoButton">No</a>
                                </div>
                                <div class="col text-center mt-4">
                                    <a href="" data-bs-toggle="modal" data-bs-target="#staticBackdropReport2" data-bs-dismiss="modal" class="YesButton">Yes</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="modal fade" id="staticBackdropReport2" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropReport2Label" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-body ReportModalBody">
                            <div class="col text-center mb-3">
                                <img src="icons/Icon ionic-md-warning.png" style="width: 3rem;">
                            </div>
                            <p class="MBText2 text-center mt-4">Give a valid reason to report this user.
                            </p>
                            <textarea class="form-control" aria-label="With textarea" rows="5" placeholder="Give a valid reason to report this user."></textarea>
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
        <div class="modal fade" id="LoginRegisterModal1" tabindex="-1" aria-labelledby="LoginRegisterModal1Label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header" style="justify-content: center;">
                        <p class="modal-title" id="LoginRegisterModal1Label">Login or registration</p>
                    </div>
                    <div class="modal-body">
                        <p style="text-align: center;font-size: 13px;font-weight: bold;color: #ff155b;"><b>Welcome to Ya jari</b></p>
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
                                <img src="icons/ic_mail_outline_24pxblack.png" style="padding-top: 0.9rem;">
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
                                <select class="Modal4select1 form-select form-select-sm purpose" style="font-size: 12px" aria-label="Default select example">
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
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Telephone Number or Email Address" style="height: 3rem;border-radius: 10px 10px 10px 10px;">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password" style="height: 3rem;border-radius: 1px0 10px 10px 10px;">
                                <div class="input-group-addon">
                                    <a href=""><img class="passwordEye" src="icons/ic_visibility_off_24px.png" style="position:relative; top: -2.2rem;left: 85%;width: 1.2rem;"></a>
                                </div>
                            </div>
                        </div>
                        <div class="LRM1Button row">
                            <a role="button" data-bs-target="#LoginRegisterModal3" data-bs-toggle="modal" data-bs-dismiss="modal">
                                <p style="color: white;position: relative;top: 10px;">Continue</p>
                            </a>
                        </div>
                    </div>
                    <div class="modal-footer" style="margin: auto;border: none;">
                        <div class="row">
                            <img src="icons/yajari-removebg-preview.png" style="width: 8rem;margin: 0px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Footer-->
        @include('frontend.layout.footer')
        @include('frontend.layout.scripts')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
        setTimeout(function()
        {
        var max = 130;
        var tot, str;
        $('.request-textID2').each(function() {
        str = String($(this).html());
        tot = str.length;
        str = (tot <= max)
        ? str
        : str.substring(0,(max + 1))+"...";
        $(this).html(str);
        });
        },500);
        </script>
    </body>
</html>
