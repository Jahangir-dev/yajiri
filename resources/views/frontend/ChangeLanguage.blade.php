<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('theme/css/ChangePasswordStyle.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>ya jari</title>
    <style type="text/css">
        .form-group {
            margin-bottom: 15px
        }

        .modal-body {
            padding: 2rem 4rem 4rem 4rem;
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

            .ahre {
                padding-left: 2rem;
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
                margin-left: 14.6rem;
                padding-top: 0.5rem;
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

            .PIbutton1 {
                text-decoration: none;
                color: white;
                text-align: center;
                height: 2.5rem;
                width: 8rem;
                background: linear-gradient(to right, #ffacbf, #fa4d75);
                border-radius: 10px;
                margin-left: 19rem;
                padding-top: 0.5rem;
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

            .MPItext1 {
                font-size: 30px;
                font-weight: bolder;
                padding-top: 28px;
            }

            .sideicon {
                padding-top: 20px;
            }

            .ViewProfileButton {
                position: relative;
                left: -35px;
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
                padding-top: 8px;
                position: relative;
                left: 5px;
            }

            .socialicon {
                transform: translateX(88%);
            }

            .followus {
                position: relative;
                left: 328px;
                top: -50px;
            }
        }

        @media all and (min-width: 1800px) {
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
                margin-left: 22rem;
                padding-top: 0.5rem;
            }

            .MPItext1 {
                font-size: 30px;
                font-weight: bolder;
                padding-top: 28px;
            }

            .ViewProfileButton {
                position: relative;
                left: -45px;
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
                padding-top: 8px;
                position: relative;
                left: 5px;
            }

            .sideicon {
                padding-top: 15px;
            }

            .MPItext1 {
                font-size: 30px;
                font-weight: bolder;
                padding-top: 23px;
            }

            .PIcontainer {
                padding-bottom: 35px;
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
                margin-left: 22rem;
                padding-top: 0.5rem;
            }

            .MPItext1 {
                font-size: 30px;
                font-weight: bolder;
                padding-top: 28px;
            }

            .ViewProfileButton {
                position: relative;
                left: -45px;
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
                padding-top: 8px;
                position: relative;
                left: 5px;
            }

            .sideicon {
                padding-top: 15px;
            }

            .MPItext1 {
                font-size: 30px;
                font-weight: bolder;
                padding-top: 23px;
            }

            .PIcontainer {
                padding-bottom: 35px;
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
    <!--Change Password-->
    <section class="py-3">
        <div class="PIcontainer container">
            <div class="row">
                <div class="hideShowDIV2 row pb-4" style="margin: auto;">
                    <div class="CompletePcol2 row" style="margin: auto; padding: 20px 0;">
                        <div class="col-sm-2 col-2 text-end">
                            <img class="CP2img" src="icons/ic_contacts_24px.png">
                        </div>
                        <div class="col-sm-10 col-10 text-start">
                            <p class="CP2text1">70% of your profile is completed</p>
                            <p class="CP2text2">Complete your profile now</p>
                        </div>
                        <div class="row text-center">
                            <a href="{{route('professionalProfile')}}" class="viewmyprofile" style="text-decoration: none;"><span class="ViewProfileButton">View My Profile</span></a>
                        </div>
                    </div>
                </div>
                <div class="col d-flex">
                    <img src="icons/ic_language_24px.png" style="width: 1.8rem;height: 1.8rem;">
                    <p class="MPItext2">Change Language</p>
                </div>
            </div>
            <div class="row pb-5">
                <div class="CompletePcol1 col-xxl-7 col-lg-6 col-md-12">
                    <form name="change-user-language" method="POST" action="{{route('changeUserLanguage')}}">
                        @csrf
                        <div class="row mb-3 mx-3">
                            <div class="form-check">
                                <input {{Auth::user()->language == 'ar' ? 'checked' : ''}} style="height: 20px;" class="form-check-input" type="radio" name="language" id="language2" value="ar">
                                <label class="form-check-label" for="language2">
                                    Arabic
                                </label>
                            </div>
                        </div>
                        <div class="row mb-3 mx-3">
                            <div class="form-check">
                                <input {{Auth::user()->language == 'en' ? 'checked' : ''}} style="height: 20px;" class="form-check-input" type="radio" name="language" id="language3" value="en">
                                <label class="form-check-label" for="language3">
                                    English
                                </label>
                            </div>
                        </div>
                        <div class="row mb-5 mx-3">
                            <div class="form-check">
                                <input {{Auth::user()->language == 'fr' ? 'checked' : ''}} style="height: 20px;" class="form-check-input" type="radio" name="language" id="language1" value="fr">
                                <label class="form-check-label" for="language1">
                                    French
                                </label>
                            </div>
                        </div>
                        <div class="row pt-3">
                            <a href="" role="button" class="cancel">
                                <p style="color: #f71349;">Cancel</p>
                            </a>
                            <button role="button" type="submit" class="PIbutton1">
                                <p>Confirm</p>
                            </button>


                        </div>
                    </form>
                </div>
                <div class="col-sm-1">

                </div>
                <div class="hideShowDIV1 col-xxl-4 col-lg-5 col-md-12">
                    <div class="CompletePcol2 row p-3">
                        <div class="col-sm-2 text-end">
                            <img class="CP2img" src="icons/ic_contacts_24px.png">
                        </div>
                        <div class="col-sm-10 text-start">
                            <p class="CP2text1">70% of your profile is completed</p>
                            <p class="CP2text2">Complete your profile now</p>
                        </div>
                        <div class="row text-center">
                            <a href="{{route('professionalProfile')}}" style="text-decoration: none;"><span class="ViewProfileButton">View My Profile</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Model2-->

    <!--Model3-->

    <!--Model4-->

    <!--Model5-->

    <!--Model6-->

    <!--Model7-->

    <!--Modal8-->

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
</body>

</html>