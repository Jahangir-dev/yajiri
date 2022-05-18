<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <link rel="stylesheet" href="{{asset('theme/css/ModifyCategoryEditStyle.css')}}">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
            <title>ya jari</title>
            
            <style type="text/css">


@media all and (min-width: 1300px) {


          .background-image {
     width: 128%;
    height: 150px;
    background-image: url(pictures/Group\ 3.png);
    background-position: center;
    background-size: cover;
    position: relative;
    overflow: hidden;
    border-radius: 30px;
    padding-top: 2.5rem;
    left: -140px;

        }

        
}



            @media all and (min-width: 1590px) {
            .navalign{
            padding-left: 350px;
            padding-top: 10px;
            color: #ff6e9a;
            font-weight: bold;
            display: inline-flex;
            padding-right: .5rem;
            }
            
            .cancel{
            text-decoration: none;
            text-align: center;
            height: 2.5rem;
            width: 8rem;
            color: #ff2558;
            border: 1px solid #fb597f;
            border-radius: 10px;
            margin-left: 0.8rem;
            padding-top: 0.5rem;
            }
            .socialicon {
            transform: translateX(88%);
            }
            .followus {
            position: relative;
            left: 328px;
            top: -50px;
            }
            .navalign2{
            padding-left: 390px;
            padding-top: 10px;
            color: #ff6e9a;
            font-weight: bold;
            display: inline-flex;
            }
            .nav-publish{
            
            padding-left: 20px;
            background:linear-gradient(to right,#ffacbf,#fa4d75);
            
            color: white;
            border-radius: 20px;
            align-items: center;
            padding-top: 10px;
            }
            }
            @media all and (min-width: 1920px) {
            .navalign{
            padding-left: 170px;
            padding-top: 10px;
            color: #ff6e9a;
            font-weight: bold;
            display: inline-flex;
            padding-right: .5rem;
            }
            .navalign2{
            padding-left: 920px;
            padding-top: 10px;
            color: #ff6e9a;
            font-weight: bold;
            display: inline-flex;
            }
            
            .background-image {
            width: 155%;
            height: 160px;
            background-image: url(pictures/Group\ 3.png);
            background-position: center;
            background-size: cover;
            position: relative;
            overflow: hidden;
            border-radius: 30px;
            padding-top: 2.5rem;
            margin: auto;
            left: -355px;
            }
            .sideicon {
            padding-top: 15px;
            }
            .ViewProfileButton {
            position: relative;
            left: -45px;
            }
            .MPItext1 {
            position: relative;
            top: 23px;
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
            <section class="text-center" style="padding-top: 2rem;padding-bottom: 1rem;">
                <div class="CCcontainer container text-light">
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
            <!--Modify Categories-->
            <section class="py-3">
                <div class="PIcontainer container">
                    <div class="row">
                        <div class="hideShowDIV2 row pb-4" style="margin: auto;">
                            <div class="CompletePcol2 row" style="margin: auto; padding: 20px 0;">
                                <div class="col-sm-2 col-2 text-end">
                                    <img class="CP2img" src="{{asset('theme/icons/ic_contacts_24px.png')}}">
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
                    </div>
                    <div class="hideShowDIV1 row pb-5 pt-3">
                        <div class="col-xxl-7 col-lg-6 col-md-12">
                        </div>
                        <div class="col-sm-1">
                        </div>
                        <div class="col-xxl-4 col-lg-5 col-md-12">
                            <div class="CompletePcol2 row p-3">
                                <div class="col-sm-2 text-end">
                                    <img class="CP2img" src="{{asset('theme/icons/ic_contacts_24px.png')}}">
                                </div>
                                <div class="col-sm-10 text-start">
                                    <p class="CP2text1">70% of your profile is completed</p>
                                    <p class="CP2text2">Complete your profile now</p>
                                </div>
                                <div class="row text-center">
                                    <a href="{{route('professionalProfile')}}" cl style="text-decoration: none;"><span class="ViewProfileButton">View My Profile</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Services:
                                        <form method="POST" action="{{route('userprofileservice')}}">
                                            @csrf
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" name="userid" value="{{Auth::User()->id}}">
                                    <select class="form-select" name="service" aria-label="Default select example">
                                        @foreach($category as $c)

                                        <option value="{{$c->name}}">{{$c->name}}</option>

                                        @endforeach
                                    </select>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="CCDIVcontainer">
                            <div class="row py-4">
                                <div class="col-2 col-sm-2 text-end">
                                    <img class="CCDIVimg" src="{{asset('theme/icons/Subtraction 17.png')}}">
                                </div>
                                <div class="col-10 col-sm-10 text-start">
                                    <p class="ChoseCText1">Choose the list of the category that you are goin to offer as a private
                                    person:</p>
                                    <p class="ChoseCText2">Choose the list of the category that you are goin to offer as a private:</p>
                                </div>
                            </div>
                            <div class="ChoseAddEditC row p-2">
                                <div class="col-10 col-sm-11">
                                    <div class="row pt-4">
                                        @if(!empty($categories))
                                        @foreach($categories as $cat)
                                        
                                        <div class="col-12 col-xxl-4 col-lg-6 col-md-7 col-sm-8"><p>{{ $cat->service}}
                                       <a href="{{route('deleteuserservice',[ 'id' => $cat->id ])}}"> <img src="{{asset('theme/icons/ic_cancel_24pxcolor.png')}}" style="position: relative;top: -70%;right:0%;width: 1rem;"></a></p></div>
                                        @endforeach
                                        @endif
                                        <div class="addCButton col-6">
                                            <a role="button" data-bs-toggle="modal" data-bs-target="#exampleModal1" style="font-size: 14px;font-weight: bold;padding-top: 0.5rem;">
                                                Add
                                                <img src="{{asset('theme/icons/ic_cancel_24px.png')}}" style="width: 1.5rem;">
                                            </a></div>
                                        </div>
                                        
                                    </div>
                                    <div class="col-2 col-sm-1 text-end">
                                        <a role="button">
                                            <img src="{{asset('theme/icons/Group 2390.png')}}" style="width: 1.5rem;">
                                        </a>
                                        
                                    </div>
                                </div>
                                <div class="ChoseAddEditB row pt-5">
                                    <div class="col-12 col-sm-5 col-lg-4 text-start">
                                        
                                        <div class="cancel row">
                                            <a role="button" data-bs-target="#LoginRegisterModal3" data-bs-toggle="modal"
                                                data-bs-dismiss="modal">
                                                <p >
                                                    
                                                Cancel</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-2 col-lg-4">
                                        
                                    </div>
                                    <div class="col-12 col-sm-5 col-lg-4 text-end">
                                        <div class="CCButton row">
                                            <a role="button" href=>
                                                <p style="color: white;">Confirm</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--Model1-->
                
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

                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
                        crossorigin="anonymous"></script>
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
                        crossorigin="anonymous"></script>
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                        
                        
                    </body>
                </html>