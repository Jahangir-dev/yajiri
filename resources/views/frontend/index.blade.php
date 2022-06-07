
@include('frontend.layout.head')
@section('sHome','active_nav')

<style type="text/css">



    .modal-header p {
    font-size: 14px;
    font-weight: bolder;
}
.modal-body {
    padding: 2rem 4rem 4rem 4rem;
}
.MBText1 {
    text-align: center;
    font-size: 16px;
    font-weight: bold;
    color: #ff155b;
}
.form-group {
    margin-bottom: 15px;
}
.FCselect1 {
    border-radius: 10px 10px 10px 10px;
    height: 3rem;
    background-image: url(theme/icons/ic_keyboard_arrow_right_-3.png), url(theme/icons/1280px-Flag_of_France.svg.png);
    background-repeat: no-repeat, no-repeat;
    background-position: right 0.75rem center, left 0.75rem center;
    background-size: 13px 7px, 30px 15px;
    padding-left: 3rem;
}
.LRM1Button {
    margin: auto;
    text-align: center;
    height: 3rem;
    background: linear-gradient(to right, #ff6388, #ff0b44);
    border-radius: 10px;
    margin-bottom: 2rem;
}
.LRMmobileB {
    margin: auto;
    border: 1px solid rgb(173, 173, 173);
    border-radius: 10px;
    height: 3rem;
    margin-bottom: 2rem;
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

.FCinput1 {
    border-radius: 10px 10px 10px 10px;
    height: 3rem;
}
    
    .background-image {
    width: 100%;
    height: 90vh;
    background-image: url({{asset('theme/icons/homebackground.png')}});
    background-position: center;
    background-size: cover;
    position: relative;
    overflow: hidden;
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


    .navpublish {
        padding-left: 20px;
        width: 200px;
        background: linear-gradient(to right, #ffacbf, #fa4d75);
        color: white;
        border-radius: 20px;
        align-items: center;
        padding-top: 10px;
    }



    .Contact-b1 {
        height: 25px;
        background: linear-gradient(to right, #ff7a97, #ff3161);
        width: 80px;
        color: white;
        border-radius: 5px;
        font-size: 12px;
        text-align: center;
        padding-top: 4px;
        float: right;
        position: relative;
        left: -6px;
        top: -5px;
    }

    .seemore {
        padding-bottom: 4rem;
    }

    .Contactblue {
        height: 25px;
        background: linear-gradient(to right, #76EDF9, #13B7E9);
        width: 80px;
        color: white;
        border-radius: 5px;
        font-size: 12px;
        text-align: center;
        padding-top: 3px;
        position: relative;
        top: -5px;
    }

    .modal-content {
        box-shadow: 1px 2px 30px 1px #ff99b8;
    }

    .MBText1 {
        text-align: center;
        font-size: 16px;
        font-weight: bold;
        color: #ff155b;
    }

    .MBText2 {
        text-align: center;
        font-size: 14px;
    }

    .SendMessageButton {
        font-size: 12px;
        padding: 0.6rem 1rem;
        border-radius: 5px;
        background: linear-gradient(to right, #ff719b, #ff155b);
        text-decoration: none;
        color: white;
    }

    .CallButton {
        padding: 0.6rem 2rem;
        font-size: 12px;
        border-radius: 5px;
        text-decoration: none;
        color: white;
        background: grey;
    }

    .MBText3 {
        font-size: 22px;
        text-align: center;
        margin: 2rem auto;
    }

    .CallButton2 {
        background: gray;
        padding: 0.6rem 5rem;
        text-decoration: none;
        color: white;
        font-size: 14px;
        background: grey;
        padding: 0.6rem 2rem;
        border-radius: 5px;
    }

    .SendMessageButtonblue {
        text-decoration: none;
        color: white;
        font-size: 12px;
        background: linear-gradient(to right, #9bd6e2, #21beea);
        padding: 0.6rem 1rem;
        border-radius: 5px;
    }


    .buttontop {
        padding-bottom: 10px;
        padding-top: 12px;
    }

    .cardcontent {
        border-radius: 10px;
        box-shadow: 1px 2px 30px 1px #71e6e6;
    }

    .socialicon {
        transform: translateX(10%);
    }

    .followus {
        position: relative;
    }


    .requestnav {
        padding-left: 0px;
        text-decoration: none;
    }

    .servicesnav {
        padding-left: 0px;
        padding-right: 20px;
        text-decoration: none;
    }

    .publishnavbar {
        position: relative;
        left: -10px;
        text-align: center;
    }

}







@media (max-width: 425px) {

    .contactusred {
        box-shadow: 1px 2px 30px 1px #ff99b8;
        border-radius: 10px;
        position: relative;
        top: 15px;
    }

    .Contact-home {
    display: block;
    width: 80px;
    height: 27px;

    background: linear-gradient(to right, #ff7a97, #ff3161);
    color: white;
    border-radius: 5px;
    font-size: 12px;
    text-align: center;
    padding-top: 6px;
    float: right;
    margin-right: 20px;
}

    .momentoflife {
        padding-bottom: 0rem;
    }


    .urgentpicture {
        position: relative;
        width: 15px;
        left: 9px;
        top: -3px;
    }

    .requestnav {
        padding-left: 0px;
        text-decoration: none;
    }

    .servicesnav {
        padding-left: 0px;
        padding-right: 0px;
        text-decoration: none;
    }





    .seemore {
        padding-bottom: 1rem;
    }



    .lebardoiconrowtop {
        position: relative;
        top: -2px;
    }


    .momentoflife {
        position: relative;
        top: -40px;
    }


    .tickredarrow {
        position: relative;
        left: -99px;
        top: 15px;
        width: 1.3rem;
    }



    .contactusblue {
        border-radius: 10px;
        box-shadow: 1px 2px 30px 1px #71e6e6;
        position: relative;
        top: 25px;
        width: 100%;
        height: 189px;
    }


    .callbluebutton {
        background: gray;
        font-size: 12px;
        padding: 0.8rem 2rem;
        border-radius: 5px;
        text-decoration: none;
        color: white;
    }

    .cardcontentblue {
        border-radius: 10px;
        box-shadow: 1px 2px 30px 1px #71e6e6;
    }


    .SendMessageButtonblue {

        text-decoration: none;
        color: white;
        font-size: 12px;
        background: linear-gradient(to right, #9bd6e2, #21beea);
        padding: 0.6rem 1rem;
        border-radius: 5px;

    }

    .SendMessageButton {
        font-size: 12px;
        padding: 0.6rem 1rem;
        border-radius: 5px;

        background: linear-gradient(to right, #ff719b, #ff155b);
        text-decoration: none;
        color: white;
    }

    .CallButton {
        padding: 0.6rem 2rem;
        font-size: 12px;
        border-radius: 5px;
        text-decoration: none;
        color: white;
        background: grey;



    }

    .MBText1 {
        text-align: center;
        font-size: 16px;
        font-weight: bold;
        color: #ff155b;
    }

    .MBText2 {
        text-align: center;
        font-size: 14px;

    }


    .callcard {
        box-shadow: 1px 2px 30px 1px #ff99b8;
        position: relative;
        top: 20px;
    }


    .MBText3 {
        font-size: 22px;
        text-align: center;
        margin: 2rem auto;
    }

    .CallButton2 {
        background: gray;
        padding: 0.6rem 5rem;

        text-decoration: none;
        color: white;
        font-size: 14px;
        background: grey;
        padding: 0.6rem 2rem;
        border-radius: 5px;
    }

    .Contact-b1 {
        height: 25px;
        background: linear-gradient(to right, #ff7a97, #ff3161);
        width: 80px;
        color: white;
        border-radius: 5px;
        font-size: 12px;
        text-align: center;
        padding-top: 4px;
        float: right;
        position: relative;
        left: -6px;
        top: -5px;
    }

    .Contactblue {
        height: 25px;
        background: linear-gradient(to right, #76EDF9, #13B7E9);
        width: 80px;
        color: white;
        border-radius: 5px;
        font-size: 12px;
        text-align: center;
        padding-top: 5px;
        position: relative;
        top: -5px;
    }

    .navpublish {
        padding-left: 20px;
        width: 200px;
        background: linear-gradient(to right, #ffacbf, #fa4d75);
        color: white;
        border-radius: 20px;
        align-items: center;
        padding-top: 10px;
    }

    .navalign {
        padding-left: 30px;
        padding-top: 10px;
        color: #ff6e9a;
        font-weight: bold;
    }

    .navalign2 {
        padding-left: 30px;
        padding-top: 10px;
        color: #ff6e9a;
        font-weight: bold;
    }

    .recentrequest {
        font-size: 25px;
        font-weight: bold;
    }


    .socialicon {
        transform: translateX(10%);
    }
    .publishnavbar {
    position: relative;
    left: -40px;
    text-align: center;
    width: 50%;
}


}
@media (max-width: 411px) {
    .momentoflife {
        position: relative;
        top: -100px;
    }

}



@media (max-width: 375px) {

    .contactusred {
        box-shadow: 1px 2px 30px 1px #ff99b8;
        border-radius: 10px;
        position: relative;
        top: 15px;
    }

    .Contactblue {
        height: 25px;
        background: linear-gradient(to right, #76EDF9, #13B7E9);
        width: 80px;
        color: white;
        border-radius: 5px;
        font-size: 12px;
        text-align: center;
        padding-top: 3px;
        position: relative;
        top: -5px;
    }

    .momentoflife {
        position: relative;
        top: -40px;
    }


    .recentrequest {

        font-size: 23px;
        font-weight: bold;
    }



    .Contact-b1 {
        height: 25px;
        background: linear-gradient(to right, #ff7a97, #ff3161);
        width: 80px;
        color: white;
        border-radius: 5px;
        font-size: 12px;
        text-align: center;
        padding-top: 4px;
        float: right;
        position: relative;
        left: -6px;
        top: -5px;
    }



    .nav-publish {
        padding-left: 20px;
        width: 200px;
        background: linear-gradient(to right, #ffacbf, #fa4d75);
        color: white;
        border-radius: 20px;
        align-items: center;
        padding-top: 10px;
    }

    .callbluebutton {
        background: gray;
        font-size: 12px;
        padding: 0.6rem 2rem;
        border-radius: 5px;
        text-decoration: none;
        color: white;
    }

    .tickredarrow {
        position: relative;
        left: -99px;
        top: 15px;
        width: 1.3rem;
    }


    .cardcontentblue {
        border-radius: 10px;
        box-shadow: 1px 2px 30px 1px #71e6e6;
        position: relative;
        top: 10px;
    }


    .SendMessageButtonblue {

        text-decoration: none;
        color: white;
        font-size: 12px;
        background: linear-gradient(to right, #9bd6e2, #21beea);
        padding: 0.5rem 1rem;
        border-radius: 5px;

    }



    .contactusblue {
        border-radius: 10px;
        box-shadow: 1px 2px 30px 1px #71e6e6;
        position: relative;
        top: 25px;
        width: 100%;
    }

    .SendMessageButton {
        font-size: 12px;
        padding: 0.6rem 1rem;
        border-radius: 5px;

        background: linear-gradient(to right, #ff719b, #ff155b);
        text-decoration: none;
        color: white;
    }

    .CallButton {
        background: gray;
        font-size: 12px;
        text-decoration: none;
        color: white;
        padding: 0.5rem 1.5rem;
        border-radius: 5px;
    }

    .CallButton2 {
        background: gray;
        padding: 0.6rem 5rem;

        text-decoration: none;
        color: white;
        font-size: 14px;
        background: grey;
        padding: 0.6rem 2rem;
        border-radius: 5px;
    }



    .MBText1 {
        text-align: center;
        font-size: 16px;
        font-weight: bold;
        color: #ff155b;
    }

    .MBText2 {
        text-align: center;
        font-size: 14px;

    }


    .callcard {
        box-shadow: 1px 2px 30px 1px #ff99b8;
        position: relative;
        top: 20px;
    }

    .MBText3 {
        font-size: 22px;
        text-align: center;
        margin: 2rem auto;
    }


    .navpublish {
        padding-left: 20px;
        width: 200px;
        background: linear-gradient(to right, #ffacbf, #fa4d75);
        color: white;
        border-radius: 20px;
        align-items: center;
        padding-top: 10px;
    }

    .navalign {
        padding-left: 30px;
        padding-top: 10px;
        color: #ff6e9a;
        font-weight: bold;
    }

    .navalign2 {
        padding-left: 30px;
        padding-top: 10px;
        color: #ff6e9a;
        font-weight: bold;
    }





}



@media (max-width: 360px) {
    .SendMessageButton {
        font-size: 12px;
        padding: 0.5rem 1rem;
        border-radius: 5px;
        background: linear-gradient(to right, #ff719b, #ff155b);
        text-decoration: none;
        color: white;
    }

    .recentrequest {
        font-size: 21px;
        font-weight: bold;
    }

    .seemore {
        padding-bottom: 0rem;
    }



    .CallButton {
        padding: 0.5rem 1.9rem;
        font-size: 12px;
        border-radius: 5px;
        text-decoration: none;
        color: white;
        background: grey;
    }

    .Contactblue {
        height: 25px;
        background: linear-gradient(to right, #76EDF9, #13B7E9);
        width: 80px;
        color: white;
        border-radius: 5px;
        font-size: 12px;
        text-align: center;
        padding-top: 4px;
        position: relative;
        top: -5px;
    }


    .navpublish {
        padding-left: 20px;
        width: 200px;
        background: linear-gradient(to right, #ffacbf, #fa4d75);
        color: white;
        border-radius: 20px;
        align-items: center;
        padding-top: 10px;
    }

    .navalign {
        padding-left: 30px;
        padding-top: 10px;
        color: #ff6e9a;
        font-weight: bold;
    }

    .navalign2 {
        padding-left: 30px;
        padding-top: 10px;
        color: #ff6e9a;
        font-weight: bold;
    }



    .momentoflife {
        position: relative;
        top: -100px;
    }

    .recentrequestpadding {
        position: relative;
        top: -40px;
    }


}



@media (max-width: 320px) {

    .momentoflife {
        position: relative;
        top: -50px;
    }


    .recentrequest {
        font-size: 17px;
        font-weight: bold;
    }

    .contactusred {
        box-shadow: 1px 2px 30px 1px #ff99b8;
        border-radius: 10px;
        position: relative;
        top: 15px;
    }

    .CallButton {
        background: gray;
        font-size: 11px;
        text-decoration: none;
        color: white;
        padding: 0.6rem 1.5rem;
        border-radius: 5px;
    }

    .tickredarrow {
        position: relative;
        left: -99px;
        top: 15px;
        width: 1.3rem;
    }


    .cardcontentblue {
        border-radius: 10px;
        box-shadow: 1px 2px 30px 1px #71e6e6;
        position: relative;
        top: 10px;
    }


    .SendMessageButtonblue {

        text-decoration: none;
        color: white;
        font-size: 13px;
        background: linear-gradient(to right, #9bd6e2, #21beea);
        padding: 0.5rem 1rem;
        border-radius: 5px;

    }


    .contactusblue {
        border-radius: 10px;
        box-shadow: 1px 2px 30px 1px #71e6e6;
        position: relative;
        top: 25px;
        width: 100%;
    }

    .callbluebutton {
        background: gray;
        font-size: 12px;
        padding: 0.5rem 1.5rem;
        border-radius: 5px;
        text-decoration: none;
        color: white;
    }




    .CallButton2 {
        background: gray;
        padding: 0.6rem 5rem;

        text-decoration: none;
        color: white;
        font-size: 14px;
        background: grey;
        padding: 0.6rem 2rem;
        border-radius: 5px;
    }

    .MBText3 {
        font-size: 22px;
        text-align: center;

    }

    .callcard {
        box-shadow: 1px 2px 30px 1px #ff99b8;
        position: relative;
        top: 20px;
    }

    .navalign {
        padding-left: 30px;
        padding-top: 10px;
        color: #ff6e9a;
        font-weight: bold;
    }

    .SendMessageButton {
        font-size: 12px;
        padding: 0.5rem 0.8rem;
        border-radius: 5px;

        background: linear-gradient(to right, #ff719b, #ff155b);
        text-decoration: none;
        color: white;
    }

    .MBText1 {
        text-align: center;
        font-size: 13px;
        font-weight: bold;
        color: #ff155b;
    }

    .MBText2 {
        text-align: center;
        font-size: 12px;
        font-weight: bold;

    }



    .navalign2 {
        padding-left: 30px;
        padding-top: 10px;
        color: #ff6e9a;
        font-weight: bold;
    }

    .Contact-b1 {
        height: 25px;
        background: linear-gradient(to right, #ff7a97, #ff3161);
        width: 80px;
        color: white;
        border-radius: 5px;
        font-size: 12px;
        text-align: center;
        padding-top: 4px;
        float: right;
        position: relative;
        left: -6px;
        top: -5px;
    }

    .Contactblue {
        height: 25px;
        background: linear-gradient(to right, #76EDF9, #13B7E9);
        width: 80px;
        color: white;
        border-radius: 5px;
        font-size: 12px;
        text-align: center;
        padding-top: 3px;
        position: relative;
        top: -5px;
    }


    .navpublish {
        padding-left: 20px;
        width: 200px;
        background: linear-gradient(to right, #ffacbf, #fa4d75);
        color: white;
        border-radius: 20px;
        align-items: center;
        padding-top: 10px;
    }

    .SendMessageButtonblue {
        text-decoration: none;
        color: white;
        background: linear-gradient(to right, #9bd6e2, #21beea);
        font-size: 11px;
        padding: 0.6rem 1rem;
        border-radius: 5px;

    }
}

.item {
    text-align: center;
}


@media (min-width: 1200px){
.flex-container {
    position: absolute;
    right: 60px;
    top: 20px;
}
}

.navbar-brand {
    padding-top: 0.3125rem;
    padding-bottom: 0.3125rem;
    margin-right: 1rem;
    font-size: 1.25rem;
    text-decoration: none;
    white-space: nowrap;
}

@media (min-width: 992px){
.navbar-expand-lg .navbar-collapse {
    display: flex!important;
    flex-basis: auto;
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

</style>






<body style="zoom:90%">
    <!--Nav Bar-->
   

    @if(Auth::user())         
    @include('frontend.layout.navbar2')       
@else
@include('frontend.layout.navbar')       
@endif
    <!--Show Case-->
    <section>
        <div class="background-image text-light text-center">
            <p class="showcase-p1">
                {{__('messages.services_and')}} <br> {{__('messages.equipment_rental')}}</p>
            <p class="showcase-p2">{{__('messages.million_residents')}}</p>
        </div>
    </section>
    <!--Moments of life-->
    <section class=" text-center momentoflife momentoflifepadding">
        <div class="container text-center" id="Exchange-con">
            <p style="     font-size: 25px;
                        font-weight: bold;
                        padding-top: 59px;
                        position: relative;
                    top: -20px;">{{__('messages.moments_of_life')}}</p>
            <div class="row">
                @foreach($momentsoflife as $life)
                @php
                $href_text = Auth::check() ? route('publishrequest') : '#LoginRegisterModal8';
                @endphp
                <div class="col" style="width: 10rem;">
                <a class="<?= Auth::check() ? 'cat_home_listing' : 'open-login'?>" href="{{$href_text}}">
                    <img src="{{asset($life->filename)}}" style="width:10rem;height:10rem" class="card-img-top" style="width: 10rem;">
                    </a>
                    <div class="card-body">
                        <p class="card-text" style=" font-size: 16px; font-weight: bold;">{{$life->title}}</p>
                    </div>
               
                </div>
                @endforeach
            </div>
            <div class="seemore">
                @if(Auth::check())
                <button type="button" class="m-see-more btn btn-lg text-light" style="position:relative;top:20px;" onclick="document.location='{{route('realizeYourProject')}}'">{{__('messages.see_more')}}</button>
                @else
                <button type="button" class="m-see-more btn btn-lg text-light open-login" style="position:relative;top:20px;">{{__('messages.see_more')}}</button>
                @endif
            </div>
        </div>
    </section>
    <!--Recent Requests-->
    <section class="bg-light  recentrequestpadding">
        <div class="container" style="width: 75%;">
            <p class="p-5 text-center recentrequest">{{__('messages.recent_requests')}}</p>
            <div class="row">
                @foreach($request as $req)
                <div class="col pb-5">
                    <div style="width: 14rem; background-color: white; border-radius: 10px;box-shadow: 10px 10px 100px 1px #ffe8ef; padding-left: 10px; margin: auto;    height: 266px;">
                        <div class="d-flex" style="justify-content: space-between;">
                            <div class="">
                                <p class="text-start pt-2" style="color: #F82669;padding-left: 10px; font-size: 15px;">
                                 
                                   {{$req->created_at->diffForHumans()}}
                                </p>
                            </div>
                            <div class="pt-2">
                                <button type="button" class="text-start" style="background-color: #fec8d9; color: #F82669; height: 25px;border: hidden;border-radius: 5px;margin-right: 1rem;">
                                    <p style="font-size: 15px;">${{number_format($req->price,2)}}</p>
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                            @if(Auth::User() && isset($req->user))
                                <a href="{{route('profileuser', [ 'id' =>  isset($req->user)?$req->user->id:''])}}">
                                    @else
                                        <a class="open-login" href="javascript:void(0)">
                                    @endif 

                                @if(isset($req->user->image))
                                    <img src="{{asset(isset($req->user)?$req->user->image:'')}}"  style="height:70px;width:80px;padding-left: 10px;"></a>                            
                                @else
                                    <img src="https://wise.edu.pk/wp-content/uploads/2021/03/placeholder.png"  style="height:70px;width:80px;padding-left: 10px;"></a>
                                @endif    


                            </div>
                            <div class="col-8">
                                    <div class="row">
                                    @if(Auth::User() && isset($req->user))
                                        <a href="{{route('profileuser', [ 'id' =>  isset($req->user)?$req->user->id:''])}}" style="text-decoration:none;">
                                                    @else
                                                    <a href="##">
                                                    @endif  <p class="text-start" style="padding-left: 25px; font-size: 15px; font-weight: bolder;color:black;">{{isset($req->user)?$req->user->name:''}}
                                        </p>
                                    </a>
                                    </div>
                                <div class="row">
                                    <div class="col d-flex">
                                        <a href="javascript:void(0)"><img src="{{asset('theme/icons/Group 2411.png')}}" style="width: 90px;margin-top: -10px; height: 15px;padding-left: 15px;"></a>
                                        <img src="{{asset('theme/icons/redtickarrow.png')}}" class="tickredarrow">

                                    </div>
                                </div>
                            </div>
                            @if(Auth::user())
                            <a href="{{route('view-detail',['id'=>$req->id])}}" style="text-decoration:none;color: black;"> 
                            @else 
                            <a class="open-login" href="#" style="text-decoration:none;color: black;"> 
                            @endif
                            <div style="padding-left: 20px;padding-top: 1rem;">
                                <p class="text-start" style="font-size: 12px;display: inline;"> <b>{{$req->request_title}}</b>
                                    </p>
                                <p style="display: inline;font-size: 14px;color: #F9326D;margin-left: 10px;">{{$req->urgent}}</p>
                                <p class="text-start pt-1" style="font-size: 14.5px;">{{Str::limit($req->description, 50,'...') }}
                                    </p>
                                <div class="row" style="position: relative;
                                            top: -6px;">
                                    <div class="col d-flex lebardoiconrowtop">
                                        <a href="javascript:void(0)"><img src="{{asset('theme/icons/ic_place_-2.png')}}" style="width: 15px;height: 22px;"></a>
                                        <p class="text-start" style="font-size: 13px;padding-left: 10px;">{{!empty($req->formated_address) ? $req->formated_address : (isset($req->user->address) ? $req->user->address : '')}}</p>
                                    </div>
                                    <div class="col d-flex">
                                        @if(Auth::user())
                                        <a style="color: white !important;padding-top: 4px;padding-bottom: 4px" class="nav-item2 nav-link Contact-b1" data-bs-toggle="modal" role="button" data-bs-target="#mobilechat{{$req->id}}" data-bs-dismiss="modal">{{__('messages.contact')}}</a>
                                        @else
                                        <a data-bs-toggle="modal" role="button" href="#LoginRegisterModal8" style="color: white !important;padding-top: 4px;padding-bottom: 4px" class="nav-item2 nav-link Contact-b1">{{__('messages.contact')}}</a>
                                        @endif



                                    </div>
                                </div>
                            </div>

                            </a>

                        </div>
                    </div>
                </div>


                        <div class="modal fade modal-backdrop.show" id="mobilechat{{$req->id}}" data-bs-keyboard="false" tabindex="-1" aria-labelledby="" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="col text-center mb-3">
                                            <img src="{{asset('theme/icons/ic_contacts_-1.png')}}" style="width: 2.3rem;">
                                        </div>
                                        <p class="MBText1">{{__('messages.contact_via_messages_or_make_a_call')}}</p>
                                        <p class="MBText2">{{__('messages.you_can_make_a_call_or_send_a_message_for_the_further_proceedings')}}.
                                        </p>
                                        <div class="row">
                                            <div class="col text-center">
                                                <a href="{{url('chat',['id'=>isset($req->user)?$req->user->id:1])}}" class="SendMessageButton">{{__('messages.send_message')}}</a>
                                            </div>
                                            <div class="col text-center">
                                                <a href="" class="CallButton" data-bs-toggle="modal" data-bs-target="#mobilecall{{$req->id}}" data-bs-dismiss="modal">{{__('messages.make_call')}}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="mobilecall{{$req->id}}" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop2Label" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="col text-center mb-3">
                                            <img src="{{asset('theme/icons/ic_contact_phone_24px.png')}}" style="width: 4rem;height:3rem;">
                                        </div>
                                        <p class="MBText3"><b>{{$req->phone_number}}</b></p>
                                        <div class="col text-center">
                                            <a href="tel:{{$req->phone_number}}" class="CallButton2">{{__('messages.call')}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                @endforeach
                
                
               @if($request->count() && Auth::check())     
                <div class="pt-2 text-center" style="padding-bottom: 3rem;">
                    <button type="button" class="m-see-more-2 btn btn-lg text-light" onclick="document.location='{{route('requestsPage')}}'">{{__('messages.see_more')}}</button>
                </div>
              @else
                <div class="pt-2 text-center" style="padding-bottom: 3rem;">
                    <button type="button" class="m-see-more-2 btn btn-lg text-light open-login">{{__('messages.no_more_results')}}</button>
                </div>                
              @endif  
    </section>
    <!--Neighbors in the spotlight-->
    <section class="py-5" style="align-items: center;">
        <p class="text-center pb-5" style="font-size:25px;"><b>{{__('messages.neighbors_in_the_spotlight')}}</b></p>
        <div class="container" style="width: 75%;">
            <div class="row" style="align-items: center;">
            @foreach($users as $u)
                <div class="col pb-5">
                    <div class="pt-3 px-3" style="min-height: 230px;width: 14rem; background-color: white; border-radius: 10px; box-shadow: 10px 10px 100px 1px #dff2f7; margin: auto;">
                        <div class="row">
                            <div class="col-4" style="position: relative;">
                <a <?php if(!Auth::check()) echo 'data-bs-toggle="modal" role="button" href="#LoginRegisterModal8"'; ?> href="{{Auth::user()!=NULL?route('profileuser', [ 'id' =>  $u->id]):'#'}}" style="text-decoration:none">

                                @if($u->image)
                                <img src="{{asset($u->image)}}" class="card-img-left" style="height:70px;width:70px">
                                @else
                                <img src="https://wise.edu.pk/wp-content/uploads/2021/03/placeholder.png" class="card-img-left" style="height:70px;width:70px">
                                @endif
                                <img src="{{asset('theme/icons/Group 2412.png')}}" style="position: absolute; top: 3.4rem;left: 4.7rem;width: 1.3rem;">
</a>
                            </div>
                            <div class="col-8">
                                
                                    <p class="text-start " style="color: black;padding-left: 15px;margin-bottom: 0;"><b>{{$u->name}}</b></p>

                                <div class="col">
                                    <img src="{{asset('theme/icons/Group 2411.png')}}" style="padding-left: 15px;width:100px;height: 15px;">
                                </div>
                            </div>
                        </div>
                        <p class="card-text text-start pt-2 particularcard"><b class="particularinner">{{__('messages.perticular')}}</b></p>
                        <div class="row pt-1">
                            <p class="text-start" style="font-size:10px;color: black;font-weight: bolder;">{{Str::limit($u->aboutme, 50,'...') }} </p>
                                <!-- <a style="color: #2bbcea;">{{__('messages.more')}}</a> -->
                        </div>
                        <div class="row pt-1">
                            <div class="col d-flex lebardoiconrowtop">
                                <img src="{{asset('theme/icons/ic_place_-1.png')}}" style="width: 15px;height: 22px;">
                                <p class="text-start" style="font-size: 13px;padding-left: 10px;width: 150px;">{{$u->address}}</p>
                            </div>

                            <!-- <div class="col d-flex">

                                <a class="nav-item2 nav-link Contactblue" data-bs-toggle="modal" role="button" data-bs-target="#mobilechatblue" data-bs-dismiss="modal">Contact</a>


                            </div> -->
                        </div>
                    </div>
                </div>
                
                @endforeach
                
            </div>
        </div>

    @if(sizeof($users)>0)             
        <div class="text-center">
            <button type="button" class="m-see-more btn btn-lg text-light" onclick="document.location='{{route('serviceproviders')}}'">{{__('messages.see_more')}}</button>
        </div>
    @else

    <div class="text-center">
            <button type="button" class="m-see-more btn btn-lg text-light">{{__('messages.no_more_results')}}...</button>
        </div>
        
    @endif
    </section>
    <!--Easy steps-->
    <section class="bg-light py-5 text-center">
        <p class="text-center" style="font-size: 25px; font-weight:1000;">{{__('messages.easy_steps_to_find_someone')}}
            <br> {{__('messages.who_can_do_your_work')}}.
        </p>
        <div class="container py-5" style="width: 71%;">
            <div class="row">
            @foreach($easystepstofind as $easy )
                <div class="col-12 col-md-4">
                    <img src="{{asset($easy->file)}}" style="height:4rem" alt="">
                    <p class="pt-4" style="font-size: 16px; font-weight:1000;">{{ $easy->title}}</p>
                </div>
               @endforeach

            </div>
        </div>
    </section>
    <!--Exchange with confidence-->
    <section class="py-5 text-center">
        <div class="container text-center" id="Exchange-con">
            <p class="pb-5" style="font-size: 30px;font-weight: bolder;">{{__('messages.exchange_with_confidence')}}</p>
            <div class="row">
                @foreach($exchangewithconfidence as $c)
                <div class="col pb-5">
                    <div class="p-3" style="width: 18rem;height: 16rem; background-color: white; border-radius: 10px; box-shadow: 10px 10px 100px 1px #eafaff;margin: auto;">
                        <img src="{{asset($c->file)}}" style="width: 4rem;">
                        <p class="pt-3"><b>{{$c->title}}</b></p>
                        <p style="font-size: 14px;">{{$c->description}}</p>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>

    </section>
    <!--Logo Carosal items-->
    <section class="pb-5">
        <div class="container bg-light py-5" style="width: 90%; border-radius: 20px;">
            <!--  slider    -->


            <div class="owl-carousel">
               
                @foreach($companylogo as $logo)
                <div class="item">
                    <img src="{{asset('uploads/'.$logo->file)}}" style="width: 6rem;">
                </div>
                @endforeach
            
                
               

            </div>
        </div>
    </section>
    
    <section>
        <div class="modal fade" id="mobilechatblue" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" style="    border-radius: 10px;
                                                    box-shadow: 1px 2px 30px 1px #71e6e6;">
                    <div class="modal-body">
                        <div class="col text-center mb-3">
                            <img src="{{asset('theme/icons/bluecontact.png')}}" style="width: 2.3rem;">
                        </div>
                        <p class="MBText1"> </p>
                        <p class="MBText2">{{__('messages.you_can_make_a_call_or_send_a_message_for_the_further_proceedings')}}.
                        </p>
                        <div class="row buttontop">
                            <div class="col text-center">
                                <a href="MobileChatBlueMessage.html" class="SendMessageButtonblue">{{__('messages.send_message')}}</a>
                            </div>
                            <div class="col text-center">
                                <a href="" class="CallButton" data-bs-toggle="modal" data-bs-target="#callonmobileblue" data-bs-dismiss="modal">{{__('messages.make_call')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="modal fade" id="callonmobileblue" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop2Label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content cardcontent">
                    <div class="modal-body">
                        <div class="col text-center mb-3">
                            <img src="{{asset('theme/icons/bluecontact.png')}}" style="width: 3rem;height:3rem;">
                        </div>
                        <p class="MBText3"><b>742 009 993 23</b></p>
                        <div class="col text-center">
                            <a href="" class="CallButton2">{{__('messages.call')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Model1-->
    
    <!--Model2-->
    
    <!--Model3-->
    <section>
        
    </section>
    <!--Model4-->
    <section>
        
    </section>
    <!--Model5-->
    <section>
        
    </section>
    <!--Model6-->
    
    <!--Model7-->
    
    <!--Modal8-->
    
    <!--Footer-->
    @include('frontend.layout.footer')
    @include('frontend.layout.scripts')
    @include('frontend.layout.loadModal')


    <script type="text/javascript">
    
  $(document).ready(function () {
    $('.open-login').click(function(){
        $('#LoginRegisterModal8').modal('show');
    });
     // Attach Button click event listener 
    $("#continue").click(function(){

         // show Modal
         $('#LoginRegisterModal3').modal('show');
    });
})

    </script>



   
</body></html>
