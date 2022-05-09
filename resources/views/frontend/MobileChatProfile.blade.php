<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('theme/css/MobileChatProfileStyle.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>ya jari</title>
</head>

<body class="bg-light" style="zoom:90%">

    <!--Nav Bar-->

    @include('frontend.layout.navbar2')


    <!--Chat-->

    <section class="pb-5 px-2">
        <div class="container">
            <div class="row">
                <div class="onlineCard card" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-3 col-sm-3 text-end">
                            <img src="{{asset('theme/icons/Ellipse -1.png')}}" class="CardImg"
                                style="width: 4rem;margin-top: 1rem;">
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
                                <div class="row">
                                    <p
                                        style="color: #F91C67;font-weight: 500;margin-bottom: 0;margin-left: 0.7rem;">
                                        Private</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ReviewRow row">
                <div class="row mb-2">
                    <div class="col d-flex">
                        <img src="{{asset('theme/icons/ic_place_24px.png')}}" style="width: 1rem; height: 1.5rem;">
                        <p class="ReviewText1">Librada, france</p>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col d-flex">
                        <img src="{{asset('theme/icons/Group 2411.png')}}" style="width: 7rem; height: 1rem; margin-top: 0.15rem;">
                        <p class="ReviewText1"><b>4.5</b></p>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col d-flex">
                        <img src="{{asset('theme/icons/ic_date_range_24px.png')}}" style="width: 1rem; height: 1.2rem;">
                        <p class="ReviewText1">Joined by May 2020</p>
                    </div>
                </div>
                
                <div class="row">
                    <a href="{{route('pink-leave-review')}}" style="background: linear-gradient(to right,#ff8dad,#ff2160);text-decoration: none;
    background: linear-gradient(to right,#ff8dad,#ff2160);
    border: none;
    width: 200px;
    height: 40px;
    font-size: 14px;
    border-radius: 8px;
    color: white;
    padding: 8px 10px;padding-inline: 20px;">
                        <img src="{{asset('theme/icons/whitestar.png')}}" alt="" class="whitestar">Leave your review
                    </a>
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
                            <img src="icons/Icon ionic-md-warning.png" style="width: 3rem;">
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
    <!--Footer-->

    <section class="py-5">
        <div class="container" style="width: 80%;">
            <div class="row" style="margin: auto;">
                <img src="{{asset('theme/icons/Group 2117.png')}}" style="width: 12rem;height: 2rem;margin: auto;">
            </div>

        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>