@include('frontend.layout.head')
@section('sHome','active_nav')
<link rel="stylesheet" href="{{asset('theme/css/ContactUsStyle.css')}}">
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



</style>






<body style="zoom:90%">
    <!--Nav Bar-->
   

    @if(Auth::user())         
    @include('frontend.layout.navbar2')       
@else
@include('frontend.layout.navbar')       
@endif
    <!--Show Case-->
    <section class="pading-top">
        <div class="container">
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
    <!--Recent Requests-->
    
    <!--Neighbors in the spotlight-->
    
    <!--Easy steps-->
    
    <!--Exchange with confidence-->
    
    <!--Logo Carosal items-->
    
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
    
    
    <section class="pb-5">
        <div class="MessageMapContainer container">
            <div class="row">
                <div class="MessageUsCol col-sm-7">
                    <form action="{{route('contactus_save')}}" method="POST" enctype="multipart/form-data"> 
                        @csrf
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="mb-4">
                                    <input type="text" name="first_name" required class="form-control" placeholder="First Name" id="exampleInputtext1">
                                </div>
                            </div>

                            <div class="col-12 col-sm-6">
                                <div class="mb-4">
                                    <input type="text" name="last_name" required class="form-control" placeholder="Last Name" id="exampleInputtext1">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="mb-4">
                                    <input type="email" name="email" class="form-control" required placeholder="Email" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                            </div>

                            <div class="col-12 col-sm-6">
                                <div class="mb-4">
                                    <input type="number" name="phone" class="form-control" placeholder="Phone" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                            </div>


                        </div>
                        <div class="mb-4">
                            <input type="text" name="subject" class="form-control" placeholder="Subject" id="exampleInputtext2" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-4">
                            <input type="text" name="message" class="form-control" placeholder="Message" id="exampleInputtext13" aria-describedby="emailHelp" style="height: 6rem;">
                        </div>

                        <div class="mb-4">
                            <input type="file" name="files[]" class="form-control" placeholder="Choose Files" id="exampleInputtext13" aria-describedby="emailHelp" multiple style="height:2.5rem" accept=".xlsx,.xls,image/*,.doc, .docx,.ppt, .pptx,.txt,.pdf">
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
