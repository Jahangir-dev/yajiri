
@include('frontend.layout.head')
@section('validatingRequest1','active')

<link rel="stylesheet" href="{{asset('theme/css/validatingRequest1Style.css')}}">
<style type="text/css">
    @media all and (min-width: 1590px) {
        .navalign {
            padding-left: 173px;
            padding-top: 10px;
            color: #ff6e9a;
            font-weight: bold;
            display: inline-flex;
            padding-right: .5rem;
        }

        .ReportCol {

            margin-right: 18rem;
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

        .CRButton2 {
            text-align: center;
            height: 2.5rem;
            width: 8rem;
            background: linear-gradient(to right, #ff6d99, #fd0d55);
            border-radius: 6px;
            position: relative;
            left: -43px;
            font-size: 16px;
            font-weight: bolder;
        }

        .CRButton1 {
            background: white;
            border-color: #ff3b72;
            height: 2.5rem;
            width: 8rem;
            font-size: 16px;
            font-weight: bolder;
            border-radius: 8px;
            color: #ff4b7e;
            position: relative;
            left: 41px;
        }

    }

    .CRButton2 p {
        padding-top: 0.7rem;
        font-weight: normal !important;
        font-size: 13px;
    }

    .CRButton1 p {
        padding-top: 0.7rem;
        font-weight: normal !important;
        font-size: 13px;
    }

    @media (min-width: 1600px) {
        .CRButton1 {
            background: white;
            border-color: #ff3b72;
            height: 2.5rem;
            width: 8rem;
            font-size: 14px;
            font-weight: bolder;
            border-radius: 8px;
            color: #ff4b7e;
            position: relative;
            left: 41px;

        }

        .CRButton2 {
            text-align: center;
            height: 2.5rem;
            width: 8rem;
            background: linear-gradient(to right, #ff6d99, #fd0d55);
            border-radius: 6px;
            position: relative;
            left: -43px;
            font-size: 16px;
            font-weight: bolder;

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


        .CRButton1 {
            background: white;
            border-color: #ff3b72;
            height: 2.5rem;
            width: 8rem;
            font-size: 16px;
            font-weight: bolder;
            border-radius: 8px;
            color: #ff4b7e;
            position: relative;
            left: 104px;
        }

        .CRButton2 {
            position: relative;
            left: -110px;
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

    <section class="text-center imagetop">
        <div class="container-fluid text-light">
            <div class="background-image text-center row" style="background-image: url(theme/pictures/Group\ 12.png);width: 100%;border-radius: 20px;">
                <div class="row">
                 <div class="col-3 col-md-4 col-lg-5 text-end">
                    <img class="SCimg" src="{{asset('theme/icons/ic_settings_applications_24px.png')}}">
                </div>
                <div class="col-9 col-md-8 col-lg-7 text-start">
                    <p class="showcase-text1">Validating your request</p>
                </div>   
                </div>
                
            </div>
        </div>
    </section>
    <!--Validating Request-->
    <section style="
                padding-bottom: 3rem!important;">
        <div class="VRcontainer container">
            <div class="row">
                <img class="VRimg" src="{{asset('theme/icons/yajari-removebg-preview.png')}}">
            </div>
            <div class="row text-center">
                <p class="VRtext1">Your request in under the validation at this time. Your request will be posted after the validation will be completed.</p>
                <p class="VRtext1"><b>So be patient and stay connected</b></p>
            </div>
            <div class="d-flex flex-wrap" style="justify-content: space-between;">
                <div class="CRButton1 mb-3">
                    
                    <a  href="{{route('view-request1',[ 'id' => $requestid])}}">

                        <p>View Request</p>
                    </a>
                </div>
                <div class="CRButton2">
                    <a href="{{route('home')}}">
                        <p>Go to Home</p>
                    </a>
                </div>
            </div>
        </div>
    </section>
     @include('frontend.layout.footer')
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body></html>
