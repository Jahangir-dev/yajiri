<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <link rel="stylesheet" href="ContactUsStyle.css">
    
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.4.1/mapbox-gl.css' rel='stylesheet' />
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
    <title>ya jari</title>
    <style>
        body {
    font-family: 'Poppins', sans-serif;
    padding-top: 5.4rem;
}

@media (min-width: 992px){
.navbar-expand-lg .navbar-collapse {
    display: flex!important;
    flex-basis: auto;
}
}

.yajari-removebg-preview-1 {
    width: 200px;
    padding-left: 50px;
}

#nav-publish {
    margin-left: 30px;
    padding-left: 20px;
    background: linear-gradient(to right, #ffacbf, #fa4d75);
    width: 170px;
    color: white;
    border-radius: 20px;
    align-items: center;
    padding-top: 10px;
}

#nav-home {
    color: palevioletred;
}

.BackgroundImg {
    margin-top: 0.51rem;
    width: 100%;
    height: 200px;
    background-image: url(theme/pictures/Group\ 4.png);
    background-position: center;
    background-size: cover;
    position: relative;
    overflow: hidden;
}

.ShowCasetext1 {
    font-size: 30px;
    color: white;
    font-weight: bolder;
    margin-left: 1rem;
}

.ShowCasetext2 {
    font-size: 26px;
    color: white;
    font-weight: bolder;
    text-align: center;
}

.ShowCasetext3 {
    font-size: 16px;
    color: white;
    font-weight: bolder;
    text-align: center;
}

.ShowCaseImg {
    width: 2rem;
    height: 2.5rem;
    margin-top: 0.3rem;
}

.ShowCaseRow1 {
    transform: translateX(40%);
}

.ContactInfotext1 {
    font-size: 26px;
    color: #F82168;
}

.ContactInfotext2 {
    font-size: 26px;
    font-weight: bolder;
}

.ContactInfotext3 {
    font-size: 14px;
    font-weight: 400;
}

.ContactInfotext4 {
    font-size: 26px;
    font-weight: bolder;
}

.ContactInfoContainer {
    width: 70%;
    margin: auto;
}

.ContactInfotext5 {
    font-size: 14px;
}

.ContactInfoImg {
    width: 2rem;
    margin-top: 0.4rem;
}

.ContactInfoImg1 {
    width: 1.7rem;
}

.ContactSocialContainer {
    padding: 3rem 7rem;
    border-radius: 20px;
}

.MessageUsCol {
    box-shadow: 1px 3px 20px 1px #ffe0ea;
    border-radius: 20px;
    padding: 3rem;
}

.MessageUsCol input {
    height: 3rem;
    border-radius: 10px;
    background-color: #F3F7F8;
    box-shadow: 1px 7px 5px 1px #F3F7F8;
}

.MessageUsCol input::placeholder {
    font-size: 14px;
    font-weight: 600;
}

#exampleInputtext13::placeholder {
    position: absolute;
    top: 0.7rem;
    left: 0, 7rem;
}

.SendMessageButton {
    background: linear-gradient(to right, #ff93b5, #F82168);
    color: white;
    font-size: 14px;
    font-weight: 400;
    height: 2.5rem;
    border-color: #ff87af;
}

#map {
    width: 100%;
    height: 300px;
    border-radius: 20px;
}

.MessageMapContainer {
    width: 70%;
}

.WhoAreWeContainer {
    padding: 5rem 5rem;
    border-radius: 20px;
}

.WhoAreWeButton {
    background: linear-gradient(to right, #ff93b5, #F82168);
    color: white;
    font-size: 14px;
    font-weight: 400;
    width: 9rem;
    height: 2.5rem;
    border-color: #ff87af;
    margin-top: 2rem;
}

.WhoAreWetext2 {
    font-size: 20px;
}

.WhoAreWetext3 {
    font-size: 16px;
    font-weight: 500;
}

.WhoAreWeImg {
    width: 35rem;
    height: 25rem;
}

.BecomeProfessionalButton {
    background: linear-gradient(to right, #ff93b5, #F82168);
    color: white;
    font-size: 16px;
    font-weight: bold;
    width: 12rem;
    height: 3rem;
    border-color: #ff87af;
    margin-top: 3rem;
}

.BecomeProfessionalContainer {
    padding: 5rem;
    border-radius: 20px;
    margin-bottom: 2rem;
}

.follow-img {
    width: 4rem;
}

@media (max-width: 420px) {
    .follow-img {
        width: 40px;
        padding-top: 0.6rem;
    }
}

@media (max-width: 460px) {
    #Logo-view1 {
        display: none;
    }

    .yajari-removebg-preview-1 {
        width: 120px;
        padding-left: 20px;
    }

    #nav-publish1 {
        display: none;
    }

    #nav-publish2 {
        padding-bottom: 30vh;
    }
}

@media (min-width: 461px) {
    #Logo-view2 {
        display: none;
    }

    #nav-publish2 {
        display: none;
    }
}

@media (max-width: 768px) {
    .nav-item2 {
        height: 3rem;
        border-bottom: 1px solid gray;
    }

    #nav-publish {
        margin-top: 1rem;
    }

    .ShowCasetext1 {
        font-size: 18px;
    }

    .ShowCasetext2 {
        font-size: 16px;
    }

    .ShowCasetext3 {
        font-size: 14px;
    }

    .ShowCaseImg {
        width: 1.3rem;
        height: 1.7rem;
        margin-top: 0;
    }

    .ShowCaseRow1 {
        transform: translateX(32%);
    }

    .ContactInfotext4 {
        font-size: 18px;
    }

    .ContactInfoContainer {
        width: 95%;
    }

    .ContactInfoImg1 {
        width: 1.3rem;
    }

    .ContactInfoImg {
        width: 1.5rem;
    }

    .ContactInfotext1 {
        font-size: 18px;
    }

    .ContactInfotext2 {
        font-size: 18px;
    }

    .ContactSocialContainer {
        padding: 2rem 1rem;
    }

    .MessageMapContainer {
        width: 90%;
    }

    .MessageUsCol {
        padding: 2rem 1rem;
    }

    .WhoAreWetext2 {
        font-size: 16px;
    }

    .WhoAreWetext3 {
        font-size: 14px;
    }

    .WhoAreWeImg {
        width: 18rem;
        height: 12rem;
    }

    .WhoAreWeContainer,
    .BecomeProfessionalContainer {
        padding: 3rem 2rem;
    }

    .BecomeProfessionalButton {
        height: 2.5rem;
        width: 9rem;
        font-size: 14px;
    }

    body {
        padding-top: 4rem;
    }
}

@media (max-width: 800px) {
    .nav-item2 {
        height: 3rem;
        border-bottom: 1px solid gray;
    }

    #nav-publish {
        margin-top: 1rem;
    }

    .ShowCasetext1 {
        font-size: 18px;
    }

    .ShowCasetext2 {
        font-size: 16px;
    }

    .ShowCasetext3 {
        font-size: 14px;
    }

    .ShowCaseImg {
        width: 1.3rem;
        height: 1.7rem;
        margin-top: 0;
    }

    .ShowCaseRow1 {
        transform: translateX(32%);
    }

    .ContactInfotext4 {
        font-size: 18px;
    }

    .ContactInfoContainer {
        width: 95%;
    }

    .ContactInfoImg1 {
        width: 1.3rem;
    }

    .ContactInfoImg {
        width: 1.5rem;
    }

    .ContactInfotext1 {
        font-size: 18px;
    }

    .ContactInfotext2 {
        font-size: 18px;
    }

    .ContactSocialContainer {
        padding: 2rem 1rem;
    }

    .MessageMapContainer {
        width: 90%;
    }

    .MessageUsCol {
        padding: 2rem 1rem;
    }

    .WhoAreWetext2 {
        font-size: 16px;
    }

    .WhoAreWetext3 {
        font-size: 14px;
    }

    .WhoAreWeImg {
        width: 18rem;
        height: 12rem;
    }

    .WhoAreWeContainer,
    .BecomeProfessionalContainer {
        padding: 3rem 2rem;
    }

    .BecomeProfessionalButton {
        height: 2.5rem;
        width: 9rem;
        font-size: 14px;
    }

    body {
        padding-top: 4rem;
    }
}

.pading-top {
    padding-top: 0rem
}

@media(max-width:768px) {

    .socialicon {
        transform: translateX(-40%) !important;
    }

    .followus {
        position: relative;
        left: 10px !important;
        top: -50px;
    }
}

.socialicon {
    transform: translateX(65%);
}

.followus {
   position: relative;
    left: 0px;
    top: -50px;
}
.ml-auto{
    margin-left: auto
}
.ContactInfotext1{
    padding-top: 2.5rem
}
@media (min-width: 992px){
.navbar-expand-lg .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
}
}

.navpublish {
    padding-left: 20px;
    background: linear-gradient(to right, #ffacbf, #fa4d75);
    color: white;
    border-radius: 20px;
    align-items: center;
    padding-top: 10px;
}

@media (min-width: 1200px){
.flex-container {
    position: absolute;
    right: 60px;
    top: 20px;
}
}

@media (min-width: 992px){
.navbar-expand-lg .navbar-nav {
    flex-direction: row;
}
}

.nav-link {
    display: block;
    padding: 0.5rem 1rem;
    color: #0d6efd;
    text-decoration: none;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out;
}

.navbar-nav {
    display: flex;
    flex-direction: column;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
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

@media (min-width: 1300px){
.navpublish {
    padding-left: 20px;
    background: linear-gradient(to right, #ffacbf, #fa4d75);
    color: white;
    border-radius: 20px;
    align-items: center;
    padding-top: 10px;
}
}

 .form-group {
            margin-bottom: 15px !important;
        }


.navpublish {
    padding-left: 20px;
    background: linear-gradient(to right, #ffacbf, #fa4d75);
    color: white;
    border-radius: 20px;
    align-items: center;
    padding-top: 10px;
}
.active_nav {
    color: #ff6e9a !important;
}

.modal-backdrop.show {
    opacity: 0 !important;
}

.modal-header p {
    font-size: 14px;
    font-weight: bolder;
}
.modal-content {
    border-radius: 10px;
    box-shadow: 1px 2px 30px 1px #ff99b8;
}
.modal-body {
    padding: 2rem 4rem 4rem 4rem;
}

.modal-footer img {
    width: 8rem;
    margin: auto;
}

.modal-content {
    border-radius: 10px;
    box-shadow: 1px 2px 30px 1px #ff99b8;
}

.Model3input {
    margin-right: 5%;
}
.Modal3IputDIV input {
    height: 3rem;
}

.Modal3footer {
    display: block;
}
.Modal3Ftext {
    font-size: 14px;
}
.modal-footer img {
    width: 8rem;
    margin: auto;
}

.Modal4select1 {
    height: 2.5rem;
    border-radius: 10px;
    background-position: right 1rem center;
}

.Modal4input3 {
    height: 5rem;
    border-radius: 10px;
}

.Modal4input1, .Modal4input2 {
    height: 2.5rem;
    background-image: url(icons/ic_person_-1.png);
    background-repeat: no-repeat;
    background-size: 12px 12px;
    background-position: right 1rem center;
}

.Modal4input1 {
    border-radius: 9px;
}
.Modal4input4, .Modal4input5 {
    height: 2.5rem;
}
.Modal4input4 {
    border-radius: 9px;
}
.Modal4input5 {
    background-image: url(icons/ic_person_-1.png);
    background-repeat: no-repeat;
    background-size: 12px 12px;
    background-position: right 1rem center;
}
.Modal4input4, .Modal4input5 {
    height: 2.5rem;
}
.Modal4input5 {
    border-radius: 10px 10px 0 0;
}
.Modal4input6 {
    height: 2.5rem;
    border-radius: 10px;
    background-image: url(icons/ic_visibility_24px.png);
    background-repeat: no-repeat;
    background-size: 16px 12px;
    background-position: right 1rem center;
    border-radius: 0 0 10px 10px;
}
.form-check-input {
    width: 1.2rem;
    height: 1.2rem;
    border-radius: 0.2rem;
    margin-right: 10px;
}
.Modal4Form-Categoryt1 {
    font-size: 13px;
    margin: 0;
}

.MHmodel3 {
    justify-content: unset;
    border-bottom: 1px solid #dee2e6;
    --bs-gutter-x: 0;
}
.Modal5Body {
    padding: 2rem 3rem 2rem 3rem;
}
.Modal5Img {
    width: 9rem;
    height: 3rem;
    margin: auto;
}
.Modal5Text1 {
    font-size: 15px;
    text-align: center;
}
.Modal5Text2 {
    font-size: 13px;
    text-align: center;
}


@media (max-width: 768px) {
    .Modal5Text1 {
        font-size: 13px;
    }

    .Modal5Text2 {
        font-size: 11px;
    }

    .Modal4Form-Categoryt1 {
        font-size: 11px;
    }

    .modal-dialog {
        width: 80%;
        margin: auto;

    }

    

    .OrText {
        font-size: 11px;
    }

    .modal-header p {
        font-size: 12px;
    }

    .modal-body {
        padding: 1rem;
    }

    .modal-body p a {
        font-size: 12px;
    }

    .modal-body input {
        height: 3rem;
    }

    .Modal4Body input {
        height: 2.5rem;
    }

    .LRM1Button a {
        margin-top: 0.8rem;
    }

    .LRM1Button {
        height: 3rem;
        margin-bottom: 2rem;
    }

    .LRMmobileB p {
        font-size: 12px;
        margin-top: 0.9rem;
    }

    .modal-footer img {
        width: 6rem;
    }

    .Modal3Ftext,
    .Moda3Text1 {
        font-size: 11px;
    }

    .Modal3IputDIV input {
        height: 2.2rem;
        padding: 0.5rem;
    }

    .Modal3IputDIV input::placeholder {
        font-size: 11px;
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

    <section class="pading-top">
        <div class="container-fluid">
            <div class="BackgroundImg">
                <div class="row pt-4">
                    <div class="ShowCaseRow1 col d-flex">
                        <img class="ShowCaseImg" src="icons/ic_contacts_-2.png">
                        <p class="ShowCasetext1">Contact Us</p>
                    </div>
                </div>
                <div class="row">
                    <p class="ShowCasetext2">Do you need any assistance? You can now contact us any time</p>
                    <p class="ShowCasetext3">Yajari provides assistance to every user and service provider</p>
                </div>
            </div>
        </div>
    </section>


    <!--Contact info-->

    <section class="pb-5">
        <div class="ContactInfoContainer container">
            <div class="row">
                <p class="ContactInfotext1">LET'S TALK US</p>
            </div>
            <div class="row">
                <p class="ContactInfotext2">Drop A Message:</p>
            </div>
            <div class="row">
                <p class="ContactInfotext3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus,
                    luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
            </div>
            <div class="d-flex flex-wrap" style="justify-content: space-between;">
                <div class="">
                    <div class="row">
                        <div class="col-3 text-end">
                            <img class="ContactInfoImg1" src="icons/ic_place_-6.png" alt="">
                        </div>
                        <div class="col-9 text-start">
                            <p class="ContactInfotext4">Office</p>
                            <p class="ContactInfotext5">Lac 2, Tunis, Tunisie,
                                France</p>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="d-flex">
                        <div class="" style="padding-left: 0;">
                            <img class="ContactInfoImg mx-3" src="icons/ic_call_-1.png" alt="">
                        </div>
                        <div class="" style="margin-left: 0.3rem;">
                            <p class="ContactInfotext4">Call</p>
                            <p class="ContactInfotext5">+33 6 98 59 05 22</p>
                            <p class="ContactInfotext5">+33 6 99 16 51 37</p>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="row">
                        <div class="col-3 text-end">
                            <img class="ContactInfoImg" src="icons/ic_email_24px.png" alt="">
                        </div>
                        <div class="col-9 text-start">
                            <p class="ContactInfotext4">Email</p>
                            <p class="ContactInfotext5">Nader.hedi@yajari.tn</p>
                            <p class="ContactInfotext5">wissem.othmen@yajari.tn</p>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="row">
                        <p class="ContactInfotext4">SOCIAL MEDIA</p>
                    </div>
                    <div class="row">
                        <div class="col d-flex">
                            <a href="">
                                <img src="icons/Subtraction 26.png" alt="">
                            </a>
                            <a href="">
                                <img src="icons/Group 2369.png" alt="">
                            </a>
                            <a href="">
                                <img src="icons/Group 2370.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!--Message Us and Map-->

    <section class="pb-5">
        <div class="MessageMapContainer container">
            <div class="row">
                <div class="MessageUsCol col-sm-7">
                    <form action="{{route('contactus_save')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="mb-4">
                                    <input type="text" name="name" class="form-control" placeholder="Name" id="exampleInputtext1">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="mb-4">
                                    <input type="email" name="email" class="form-control" placeholder="Email" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <input type="text" name="subject" class="form-control" placeholder="Subject" id="exampleInputtext2" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-4">
                            <input type="text" name="message" class="form-control" placeholder="Message" id="exampleInputtext13" aria-describedby="emailHelp" style="height: 6rem;">
                        </div>
                        <button type="submit" class="SendMessageButton btn">Send Message</button>
                    </form>
                </div>
                <div class="col-sm-1">

                </div>
                <div class="col-sm-4 pt-5">
                    <div class="row p-2" id="map">

                    </div>
                </div>
            </div>
        </div>

    </section>

    <!--Who are we-->

    <section class="pb-5">
        <div class="WhoAreWeContainer container bg-light">
            <div class="row">
                <div class="col">
                    <img class="WhoAreWeImg" src="{{asset('theme/pictures/contactus_who.png')}}">
                </div>
                <div class="col pt-5">
                    <p class="WhoAreWetext2"><b>Who are we?</b></p>
                    <p class="WhoAreWetext3">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate
                        the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum
                        may be used as a placeholder before final copy is available.</p>
                    <button class="WhoAreWeButton btn">See more</button>
                </div>
            </div>
        </div>
    </section>


    <!--Become Professional-->

    <section>
        <div class="BecomeProfessionalContainer container bg-light">
            <div class="row">
                <div class="col-12 col-sm-12 col-lg-9">
                    <p class="WhoAreWetext2"><b>Become A Professional</b></p>
                    <p class="WhoAreWetext3">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to
                        demonstrate the visual form of a document or a typeface without relying on meaningful content.
                        Lorem ipsum may be used as a placeholder before final copy is available.</p>
                </div>
                <div class="col-12 col-sm-12 col-lg-3">
                    <button class="BecomeProfessionalButton btn">Register NOW</button>
                </div>
            </div>
        </div>
    </section>

    <!--Footer-->

    <section class="bg-light py-5">
        <div class="container" style="width: 90%;">
            <div class="row f-img " style="padding-top:0rem;">
                <div class="col-lg">
                    <img src="icons/yajari-removebg-preview-1.png" style="width: 16rem;">
                </div>
                <div class="col-lg d-flex pt-5">
                    <p style="font-size: 16px; font-weight: 900;padding-top: 15px;" class="followus">Follow Us:</p>
                    <div class="text-end" style="transform: translateX(-30%);">
                        <img src="icons/Group 1611.png" class="follow-img">
                        <img src="icons/Group 1613.png" class="follow-img">
                        <img src="icons/Group 1614.png" class="follow-img">
                        <img src="icons/Group 1615.png" class="follow-img">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <p style="font-size: 16px; font-weight:900;"><b>FREQUENTLY ASKED QUESTION / HELP</b></p>
                    <div class="row">
                        <a class="btn text-start" style="font-size: 12px; font-weight: bold;">I can't log into my
                            account</a>
                        <a class="btn text-start" style="font-size: 12px; font-weight: bold;">I can't register to my
                            account</a>
                        <a class="btn text-start" style="font-size: 12px; font-weight: bold;">How to reset / change
                            password</a>
                        <a class="btn text-start" style="font-size: 12px; font-weight: bold;">I can't find my password
                            anymore</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <p style="font-size: 16px; font-weight:900;"><b>PRESENTATION</b></p>
                    <div class="row">
                        <a class="btn text-start" style="font-size: 12px; font-weight: bold;">Who are we?</a>
                        <a class="btn text-start" style="font-size: 12px; font-weight: bold;">How it works?</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <p style="font-size: 16px; font-weight:900;"><b>LEGAL INGORMATION</b></p>
                    <div class="row">
                        <a href="ContactUs.html" class="btn text-start" style="font-size: 12px; font-weight: bold;">Contact Us</a>
                        <a class="btn text-start" style="font-size: 12px; font-weight: bold;">General Conditions of Sale
                            and Use</a>
                        <a class="btn text-start" style="font-size: 12px; font-weight: bold;">Confidentiality and
                            privacy policy</a>
                        <a class="btn text-start" style="font-size: 12px; font-weight: bold;">Legal Notice</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <p style="font-size: 16px; font-weight:900;"><b>OUR APPLICATIONS</b></p>
                    <div class="row">
                        <a class="btn text-start" style="font-size: 12px; font-weight: bold;"><img src="icons/Group 2387.png" style="width: 10rem;"></a>
                        <a class="btn text-start" style="font-size: 12px; font-weight: bold;"><img src="icons/Group 2388.png" style="width: 10rem;"></a>
                    </div>
                </div>
            </div>

    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.4.1/mapbox-gl.js'></script>
    <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoiYW1tYXIxMjMxMjMiLCJhIjoiY2tydzJsMm9jMGNpajJucnh4M2pmaTVsZCJ9.ZxNGpJR7Qw9t3ONgdZmbQA';
        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11',
            center: [74.515225, 32.467766],
            zoom: 13,
        });
        const marker1 = new mapboxgl.Marker()
            .setLngLat([74.515225, 32.467766])
            .addTo(map);
    </script>
     @include('sweetalert::alert')
</body></html>