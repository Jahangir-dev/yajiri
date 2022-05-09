
@include('frontend.layout.head')
@section('sHome','active')

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
                Prestations de services et <br> location de materiel</p>
            <p class="showcase-p2">3.8 million residents and
                professional, members of <br>AlloVoisins, throughout France.</p>
        </div>
    </section>
    <!--Moments of life-->
    <section class=" text-center momentoflife momentoflifepadding">
        <div class="container text-center" id="Exchange-con">
            <p style="     font-size: 25px;
                        font-weight: bold;
                        padding-top: 59px;
                        position: relative;
                    top: -20px;">Moments of life</p>
            <div class="row">
                @foreach($momentsoflife as $life)
                <div class="col" style="width: 10rem;">
                <a href="{{route('publishrequest')}}">
                    <img src="{{asset($life->filename)}}" style="width:10rem;height:10rem" class="card-img-top" style="width: 10rem;">
                    </a>
                    <div class="card-body">
                        <p class="card-text" style=" font-size: 16px; font-weight: bold;">{{$life->title}}</p>
                    </div>
               
                </div>
                @endforeach
            </div>
            <div class="seemore">
                <button type="button" class="m-see-more btn btn-lg text-light" style="position:relative;top:20px;" onclick="document.location='{{route('realizeYourProject')}}'">See
                    More</button>
            </div>
        </div>
    </section>
    <!--Recent Requests-->
    <section class="bg-light  recentrequestpadding">
        <div class="container" style="width: 75%;">
            <p class="p-5 text-center recentrequest">Recent Requests</p>
            <div class="row">
                @foreach($request as $req)
                <div class="col pb-5">
                    <div style="width: 14rem; background-color: white; border-radius: 10px;box-shadow: 10px 10px 100px 1px #ffe8ef; padding-left: 10px; margin: auto;    height: 266px;">
                        <div class="d-flex" style="justify-content: space-between;">
                            <div class="">
                                <p class="text-start pt-2" style="color: #F82669;padding-left: 10px; font-size: 15px;">
                                 
                                   {{Str::limit($req->created_at, 10,'') }}
                                </p>
                            </div>
                            <div class="pt-2">
                                <button type="button" class="text-start" style="background-color: #fec8d9; color: #F82669; height: 25px;border: hidden;border-radius: 5px;margin-right: 1rem;">
                                    <p style="font-size: 15px;">${{$req->price}}</p>
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                            @if(Auth::User())
                            <a href="{{route('profileuser', [ 'id' =>  isset($req->user)?$req->user->id:''])}}">
                                                    @else
                                                    <a href="##">
                                                    @endif 
                                <img src="{{asset(isset($req->user)?$req->user->image:'')}}"  style="height:70px;width:80px;padding-left: 10px;"></a>
                            </div>
                            <div class="col-8">
                                <a href="ProfessionalProfile.html" style="text-decoration:none;">
                                    <div class="row">
                                    @if(Auth::User())
                            <a href="{{route('profileuser', [ 'id' =>  isset($req->user)?$req->user->id:''])}}">
                                                    @else
                                                    <a href="##">
                                                    @endif  <p class="text-start" style="padding-left: 25px; font-size: 15px; font-weight: bolder;color:black;">{{isset($req->user)?$req->user->name:''}}
                                        </p></a>
                                    </div>
                                </a>
                                <div class="row">
                                    <div class="col d-flex">
                                        <a href="ProfessionalProfile.html"><img src="{{asset('theme/icons/Group 2411.png')}}" style="width: 90px;margin-top: -10px; height: 15px;padding-left: 15px;"></a>
                                        <img src="{{asset('theme/icons/redtickarrow.png')}}" class="tickredarrow">

                                    </div>
                                </div>
                            </div>
                            <div style="padding-left: 20px;padding-top: 1rem;">
                                <p class="text-start" style="font-size: 12px;display: inline;"> <a href="{{route('view-detail',['id'=>$req->id])}}" style="text-decoration:none;color: black;"><b>{{$req->request_title}}</b>
                                    </a></p>
                                <p style="display: inline;font-size: 14px;color: #F9326D;margin-left: 10px;">{{$req->urgent}}</p>
                                <p class="text-start pt-1" style="font-size: 14.5px;">{{Str::limit($req->description, 50,'...') }}
                                    </p>
                                <div class="row" style="position: relative;
                                            top: -6px;">
                                    <div class="col d-flex lebardoiconrowtop">
                                        <a href="ProfessionalProfile.html"><img src="{{asset('theme/icons/ic_place_-2.png')}}" style="width: 15px;height: 22px;"></a>
                                        <p class="text-start" style="font-size: 13px;padding-left: 10px;">{{$req->position}}</p>
                                    </div>
                                    <div class="col d-flex">

                                        <a class="nav-item2 nav-link Contact-b1" data-bs-toggle="modal" role="button" data-bs-target="#mobilechat" data-bs-dismiss="modal">Contact</a>





                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                
                
                
                <div class="pt-2 text-center" style="padding-bottom: 3rem;">
                    <button type="button" class="m-see-more-2 btn btn-lg text-light" onclick="document.location='{{route('requestsPage')}}'">See
                        More</button>
                </div>
    </section>
    <!--Neighbors in the spotlight-->
    <section class="py-5" style="align-items: center;">
        <p class="text-center pb-5" style="font-size:25px;"><b>Neighbors in the spotlight</b></p>
        <div class="container" style="width: 75%;">
            <div class="row" style="align-items: center;">
            @foreach($users as $u)
                <div class="col pb-5">
                    <div class="pt-3 px-3" style="width: 14rem; background-color: white; border-radius: 10px; box-shadow: 10px 10px 100px 1px #dff2f7; margin: auto;">
                        <div class="row">
                            <div class="col-4" style="position: relative;">
                                <img src="{{asset($u->image)}}" class="card-img-left" style="height:70px;width:70px">
                                <img src="{{asset('theme/icons/Group 2412.png')}}" style="position: absolute; top: 3.4rem;left: 4.7rem;width: 1.3rem;">
                            </div>
                            <div class="col-8">
                                <a href="{{route('profileuser', [ 'id' =>  $u->id])}}" style="text-decoration:none;">
                                    <p class="text-start " style="color: black;padding-left: 15px;margin-bottom: 0;"><b>{{$u->name}}</b></p>
                                </a>
                                <div class="col">
                                    <img src="{{asset('theme/icons/Group 2411.png')}}" style="padding-left: 15px;width:100px;height: 15px;">
                                </div>
                            </div>
                        </div>
                        <p class="card-text text-start pt-2 particularcard"><b class="particularinner">Perticular</b></p>
                        <p class="text-start" style="font-size:14px">{{Str::limit($u->aboutme, 100,'...') }} <a style="color: #2bbcea;">more</a></p>
                        <div class="row pt-1">
                            <div class="col d-flex lebardoiconrowtop">
                                <img src="{{asset('theme/icons/ic_place_-1.png')}}" style="width: 15px;height: 22px;">
                                <p class="text-start" style="font-size: 13px;padding-left: 10px;">{{$u->address}}</p>
                            </div>

                            <div class="col d-flex">

                                <a class="nav-item2 nav-link Contactblue" data-bs-toggle="modal" role="button" data-bs-target="#mobilechatblue" data-bs-dismiss="modal">Contact</a>


                            </div>
                        </div>
                    </div>
                </div>
                
                @endforeach
                
            </div>
        </div>
        <div class="text-center">
            <button type="button" class="m-see-more btn btn-lg text-light" onclick="document.location='{{route('serviceproviders')}}'">See
                More</button>
        </div>
    </section>
    <!--Easy steps-->
    <section class="bg-light py-5 text-center">
        <p class="text-center" style="font-size: 25px; font-weight:1000;">Easy steps to find someone
            <br> who can do your work.
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
            <p class="pb-5" style="font-size: 30px;font-weight: bolder;">Exchange with confidence</p>
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
                        <div class="row">
                            <div class="col text-center">
                                <a href="MobileChatMessages.html" class="SendMessageButton">Send Message</a>
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
        <div class="modal fade" id="mobilechatblue" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" style="    border-radius: 10px;
                                                    box-shadow: 1px 2px 30px 1px #71e6e6;">
                    <div class="modal-body">
                        <div class="col text-center mb-3">
                            <img src="{{asset('theme/icons/bluecontact.png')}}" style="width: 2.3rem;">
                        </div>
                        <p class="MBText1"> </p>
                        <p class="MBText2">You can make a call or send a message
                            for the further proceedings.
                        </p>
                        <div class="row buttontop">
                            <div class="col text-center">
                                <a href="MobileChatBlueMessage.html" class="SendMessageButtonblue">Send Message</a>
                            </div>
                            <div class="col text-center">
                                <a href="" class="CallButton" data-bs-toggle="modal" data-bs-target="#callonmobileblue" data-bs-dismiss="modal">Make Call</a>
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
                            <a href="" class="CallButton2">Call</a>
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



    <script type="text/javascript">
    
  $(document).ready(function () {

     // Attach Button click event listener 
    $("#continue").click(function(){

         // show Modal
         $('#LoginRegisterModal3').modal('show');
    });
})

    </script>



   
</body></html>
