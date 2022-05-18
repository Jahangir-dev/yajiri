@include('frontend.layout.head')
@section('professionalprofile','active')
<link rel="stylesheet" href="{{asset('theme/css/ProfessionalProfileStyle.css')}}">
<link href='https://api.mapbox.com/mapbox-gl-js/v2.4.1/mapbox-gl.css' rel='stylesheet' />
<style type="text/css">
    @media all and (min-width: 1280px) {
        .joined {
            position: relative;
            left: 315px;
        }

        .card-img-top {
            width: 10rem;
        }
    }

    @media all and (min-width: 1440px) {
        .joined {
            position: relative;
            left: 315px;
        }

        .loadmore {
            text-decoration: none;
            color: #08B1E7;
            font-size: 16px;
            font-weight: 600;
            position: relative;
            left: 243px;
            top: 16px;
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


        .whitestar {
            position: relative;
            top: -3px;
            width: 33px;
        }

        .ahre {
            padding-left: 2rem;
        }

        .centertick {
            width: 50px;
        }

        .sendfont {
            font-size: 15px;
        }

        .servicesicon {
            font-weight: 600;
            border-radius: 5px;
            font-size: 12px;
            color: #08B1E7;
            background-color: #cbf2ff;
            text-align: center;
            padding: 0.5rem .5rem;
            margin: .5rem;
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
            left: 328px;
        }

        .upload-Picture {
            width: 9rem !important;
            height: 9rem !important;
            margin-left: 0rem !important;
            margin-top: 0.3rem !important;
            border-style: dashed !important;
            border-color: rgb(175, 175, 175);
        }

        /*
            .iconsettingprofile {
                width: 3rem;
                position: relative;
                left: 66px;
                top: 60px;
            }
*/

        .ReportCol {

            margin-right: 18rem;
        }

        .navalign2 {
            padding-left: 730px;
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

        .SendRequestButton {
            background: linear-gradient(to right, #77EDF9, #0FB5E8);
            text-decoration: none;
            text-align: center;
            width: 10rem;
            padding: 0.5rem 0;
            color: white;
            border-radius: 5px;
            font-size: 13px;
            margin: auto;
            padding-right: 0;
        }

        .previews {
            background: linear-gradient(to right, #77EDF9, #0FB5E8);
            text-decoration: none;
            text-align: center;
            width: 15rem;
            padding: 0.5rem 0;
            color: white;
            border-radius: 5px;
            font-size: 16px;
            margin: auto;
            padding-right: 0;
            height: 2.7rem;
        }

        .followus {
            position: relative;
            left: 325px;
            top: -50px;
        }

        .socialicon {
            transform: translateX(75%);
        }
    }

    }

    @media (min-width: 1600px) {
        .previews {
            background: linear-gradient(to right, #77EDF9, #0FB5E8);
            text-decoration: none;
            text-align: center;
            width: 15rem;
            padding: 0.5rem;
            color: white;
            border-radius: 5px;
            font-size: 16px;
            margin: auto;
            padding-right: 0;
            height: 2.7rem;
        }
    }


    @media all and (min-width: 1800px) {

        .joined {
            position: relative;
            left: 401px;
        }


        .whitestar {
            position: relative;
            top: -3px;
            width: 31px;
        }


    }




    @media all and (min-width: 1920px) {
        .joined {
            position: relative;
            left: 555px;
        }

        .SendRequestButton {
            background: linear-gradient(to right, #77EDF9, #0FB5E8);
            text-decoration: none;
            text-align: center;
            width: 12rem;
            padding: 0.8rem;
            font-size: 16px;
            margin: auto;
            padding-right: 0;
        }

        .socialicon {
            transform: translateX(75%);
        }

        .followus {
            position: relative;
            left: 326px;
            top: -50px;
        }


        .whitestar {
            position: relative;
            top: -3px;
            width: 33px;
        }

        .navalign {
            padding-left: 173px;
            padding-top: 10px;
            color: #ff6e9a;
            font-weight: bold;
            display: inline-flex;
            padding-right: .5rem;
        }

        .sendfont {
            font-size: 18px;
        }

        .upload-Picture {
            width: 13.5rem !important;
            height: 13.5rem !important;
            margin-left: 0.3rem;
            margin-top: 0.51rem;
            border-style: dashed;
            border-color: rgb(175, 175, 175);
        }

        .previews {
            background: linear-gradient(to right, #77EDF9, #0FB5E8);
            text-decoration: none;
            text-align: center;
            width: 20rem;
            padding: 0.5rem 0;
            color: white;
            border-radius: 5px;
            font-size: 20px;
            margin: auto;
            padding-right: 0;
            height: 3.5rem;
            padding-top: 12px;
        }

        .centertick {
            width: 65px;
        }

        .mrgin_leftt {
            margin-left: 0px
        }

    }


    @media all and (min-width: 2400px) {

        .joined {
            position: relative;
            left: 755px;
        }


        .upload-Picture {
            width: 16.5rem !important;
            height: 17.5rem !important;
            margin-left: 0.3rem !important;
            margin-top: 0.51rem !important;
            border-style: dashed !important;
            border-color: rgb(175, 175, 175) !important;
        }

        .iconsettingprofile {
            width: 3rem;
            position: relative;
            left: 40% !important;
            top: 115px;
        }

        .sendfont {
            font-size: 24px;
        }


        .centertick {
            width: 125px;
        }

    }
    .image-upload>input {
        display: none;
    }

        .selected_image{
                    padding: 10px;
        }
</style>


<body style="zoom:90%;" class="bodyheight">
    <!--Nav Bar-->
    @if(Auth::user())
    @include('frontend.layout.navbar2')
    @else
    @include('frontend.layout.navbar')
    @endif
    <!--Show Case-->
    <section class="pding-topp text-center">
        <div class="container-fluid">

             @php
                                    if(isset($usersdetail->coverphoto)){
                                        $cimage = asset($usersdetail->coverphoto);
                                    }else{
                                        $cimage = 'https://wise.edu.pk/wp-content/uploads/2021/03/placeholder.png';
                                    }    

                                @endphp

            <div class="background-image text-end" style="border-radius: 15px;background-image: url('{{$cimage}}');">
                    <label for="file_input_c" class="BackgroundChangeImg" style="right: 10px;">
                    <img src="{{asset('theme/icons/ic_photo_camera_24px.png')}}" class="BackgroundChangeImg">
                                    </label>

                    <form action="{{route('updatecoverpicture')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                    <input id="file_input_c" accept="image/*" name="image" style="display:none"  onchange="this.form.submit()" type="file" />
                    </form>
            </div>

                            @php
                                    if(isset($usersdetail->image)){
                                        $image = asset($usersdetail->image);
                                    }else{
                                        $image = 'https://wise.edu.pk/wp-content/uploads/2021/03/placeholder.png';
                                    }    

                                @endphp
                                

            <div class="row">
                <div class="col-12 col-md-3 col-sm-12" style="height: 6rem;">
                    <div class="ProfilePicCard card">
<!--                         <img src="{{ $usersdetail->image }} " class="profilepic"> -->
                        <div class="card-img-overlay" style="padding: 0;">
                            <div class="text-center" style="background-image:url('{{ $image }}');background-repeat: no-repeat;background-position: center;height: 200px;border-radius: 50%;background-size: cover;">
                                <img src="{{asset('theme/pictures/Scroll Group 1.png')}}" class="RealizeTextImg1">
                                <div class="image-upload">
                                    <label for="file-input">
                                    <img src="{{asset('theme/icons/ic_photo_camera_24px.png')}}"
                                        class="RealizeTextImg2">
                                    </label>
                                    <form action="{{route('updateprofilepicture')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                    <input id="file-input" accept="image/*" name="image" style="display:none"  onchange="this.form.submit()" type="file" />
                                    </form>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-12 col-md-9 col-sm-12">
                    


                    <div class="row">
                        <div class="col-md-9 col-sm-12 col-lg-9">

                            <div class="mrgin_leftt">
                                    <div class="row" style="text-align: left;margin-top: 1rem;">
                                        <div class="col d-flex">
                                            <p class="ProfileText1">{{ $usersdetail->first_name}} {{ $usersdetail->last_name}}</p>
                                             @if($usersdetail->usertype)
                                            <p class="mt-2" style="margin-left: 1rem;" data-bs-toggle="modal"
                                                data-bs-target="#exampleModalll"><span
                                                    class="Privatetext">{{$usersdetail->usertype}}</span></p>
                                            @else
                                            <p class="mt-2" style="margin-left: 1rem;" data-bs-toggle="modal"
                                                data-bs-target="#exampleModalll"><span class="Privatetext">Private</span>
                                            </p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row addressofjohn">
                                        <div class="col d-flex">
                                            <img src="{{asset('theme/icons/ic_place_-1.png')}}" class="ProfileAddressImg">
                                            <p class="ProfileText3">{{ $usersdetail->address}} {{ $usersdetail->country}} </p>
                                        </div>
                                    </div>
                                </div>

                        </div>

                        <div class="col-md-3 col-sm-12 col-lg-">

                            <div class="mt-3">

                            <p style="text-align:end;" class="ProfileText2"><img src="{{asset('theme/icons/ic_date_range_-1.png')}}" class="ProfileDateImg" style="margin-top: 0px;"> {{date('F d, Y H:i A')}}</p>
                            </div>
                            <div class="iconfb" style="top:0px;text-align: end;">

                                <img src="{{asset('theme/icons/Group 2394.png')}}" class="VerficationImg" style="    position: relative;
                                            left: -40px;">
                                <img src="{{asset('theme/icons/Group 2395.png')}}" class="VerficationImg" style="    position: relative;
                                            left: -20px;">
                                <img src="{{asset('theme/icons/Group 2396.png')}}" class="VerficationImg" style="    position: relative;
                                            left: -5px;">

                            </div>

                        </div>
                    </div>
                


                </div>





                </div>
            </div>
        </div>

                <div class="modal fade" id="exampleModalll" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <form action="{{route('updateusertype')}}" method="post" >
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Update User Type</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">

                                                   @csrf
                                                    <div class="mb-3 form-check">
                                                    <select class="form-select" name="usertype" aria-label="Default select example">
                                                    <option value="">Select</option>
                                                    <option value="Professional">Professional</option>
                                                    <option value="Private">Private</option>

                                                    </select>
                                                    </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Submit</button>

                                            </div>
                                        </div>
                                    </form>
                                    </div>
                                </div>


                <div class="modal fade" id="exampleModalf" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                            <form action="{{route('updatenames')}}" method="post">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Update First Name and Last
                                                Name</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">

                                                @csrf
                                                <div class="mb-3">

                                                    <input type="text" class="form-control"
                                                        value="{{$usersdetail->first_name}}" name="firstname"
                                                        id="exampleInputEmail1" aria-describedby="emailHelp">

                                                </div>
                                                <div class="mb-3">

                                                    <input type="text" class="form-control"
                                                        value="{{$usersdetail->last_name}}" name="lastname"
                                                        id="exampleInputPassword1">
                                                </div>


                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>


    </section>
    <!--About me and Map-->
    <section class="pt-5 pb-2">
        <div class="AboutMeContainer">
            <div class="row">
                <div class="col-12 col-md-7 col-sm-12 mb-5 aboutmetop">
                    <div class="AboutMeRow1">
                        <div class="row">
                            <div class="col text-start">
                                <p style="font-size: 16px;"><b>About me:</b></p>
                            </div>
                            <div class="col text-end">
                                <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <img src="{{asset('theme/icons/Group -1.png')}}" style="width: 1.5rem;">
                                </a>
                            </div>
                        </div>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form method="POST"
                                        action="{{route('updateuserprofile',['id' => $usersdetail->id])}}">
                                        <div class="modal-body">
                                            <div class="form-floating">

                                                @csrf
                                                <textarea name="aboutme" class="form-control"
                                                    placeholder="Leave a comment here" id="floatingTextarea2"
                                                    style="height: 200px">
  {{ $usersdetail->aboutme}}
</textarea>


                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <p style="font-size: 14px;">{{ $usersdetail->aboutme}} </p>
                    </div>
                </div>
                <div class="AboutMeRow2" style="margin-top: 1rem;">
                    <div class="row">
                        <div class="col text-start">
                            <p style="font-size: 16px;"><b>Services:</b></p>
                        </div>
                        <div class="col text-end">
                            <button data-bs-toggle="modal" data-bs-target="#exampleModal1" style="background-color: transparent;border: none;padding-left: 0px;padding-right: 0px;">
                                <img src="{{asset('theme/icons/Group -1.png')}}" style="width: 1.5rem;">
                            </button>
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
                                    <input type="hidden" name="userid" value="{{$usersdetail->id}}">
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
                        <div class="col-xs-12">

                           <div class="row">
                           @if($userprofileservice->count()) 
                            @foreach($userprofileservice as $u)
                                   <div class="col-md-3 mt-3" style="padding-right:0px;padding-left:0px;">
                                    <span class="servicesicon " id="vechile2">{{$u->service}}</span>
                                </div>
                            @endforeach
                           @else
                                <p style="text-align:center;">No Services Added</p>
                           @endif 
                        </div>

                        </div>
<!--                         <div class="col-xs-12" style="padding-top:20px;padding-bottom: 30px;padding-right:0px;padding-left:0px;">
                                <span class="servicesicon" id="vechile2">{{ $usersdetail->services}}</span>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-1 col-sm-12"></div>
            <div class="col-12 col-md-4 col-sm-12 maptop">
            <form method="POST" action="{{route('updatemapofuser')}}">
                                            @csrf
            <input type="hidden"  name="position" id="lat"
                                        class="Position-fromImg form-control" placeholder="Le Berdo">
                                    <input type="hidden" name="position2" onchange="this.form.submit()" id="lng"
                                        class="Position-fromImg form-control" placeholder="Le Berdo">

                                    <div id="map" style="height:500px;width: 500px;"></div>

                                    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
                                    <script
                                        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBikMgCY_d1NwtVzeM4mIviqZBBDrAFEko&callback=initMap&v=weekly&channel=2"
                                        async></script>

                                    <script type="text/javascript">
                                        function initMap() {
                                            var lat = "<?php echo $lat ?>";
                                            var lng = "<?php echo $lat ?>";
                                            const myLatlng = {
                                                lat: parseFloat(lat),
                                                lng: parseFloat(lng)
                                            };
                                            const map = new google.maps.Map(document.getElementById("map"), {
                                                zoom: 13,
                                                center: myLatlng,
                                            });
                                            // Create the initial InfoWindow.
                                            let infoWindow = new google.maps.InfoWindow({
                                                content: "{{Auth::user()->address}}!",
                                                position: myLatlng,
                                            });

                                            infoWindow.open(map);
                                            // Configure the click listener.
                                           /* map.addListener("click", (mapsMouseEvent) => {
                                                // Close the current InfoWindow.
                                                infoWindow.close();
                                                // Create a new InfoWindow.
                                                infoWindow = new google.maps.InfoWindow({
                                                    position: mapsMouseEvent.latLng,
                                                });

                                                document.getElementById('lat').value = mapsMouseEvent.latLng
                                                    .lat();
                                                document.getElementById('lng').value = mapsMouseEvent.latLng
                                                    .lng();
                                                infoWindow.setContent(
                                                    JSON.stringify(mapsMouseEvent.latLng.toJSON(), null, 2)
                                                );
                                                infoWindow.open(map);
                                            });*/
                                        }

                                    </script></form>
            </div>
        </div>
        </div>
    </section>
    <section class=" pb-2 photogallery">
        <div class="AboutMeContainer">
            <div class="row">
                <div class="col-12 col-md-7 col-sm-12 mb-5">

                    <div class="AboutMeRow2 row" style="margin-top: 1rem;">
                        <div class="row">
                            <div class="col-lg-6">
                                <p style="font-size: 16px;" class="gallerycenter"><b>Photo Gallery:</b></p>
                            </div>


                        </div>
                        <div class="row">
                                
    
                            <div class="col-md-4">
                                
                                <form method="post" action="{{route('updatephotogallary')}}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    
                                    <div class="col-md-12" style="width:650px;">
                                        <!-- <div class="row">                                               
                                                @if($gallery->count())
                                                    @foreach($gallery as $g)
                                                        <div class="col-md-4">
                                                           <img height="160" class="loaded_images" data-button="btnr{{$g->id}}" src="{{ $g->image}}" width="175" title="WhatsApp Image 2022-04-15 at 10.24.03 PM.jpeg" style="height: 160px; width: 175px; padding-left: 0px; padding-right: 0px; margin-right: 10px;">  
                                                                                                              
                                                            <a href="{{route('delete_gallery',['id'=>$g->id])}}" id="btnr{{$g->id}}" class="btn btn-outline-danger mt-1 btn-block">x</a>              
                                                        </div>

                                                    @endforeach
                                                @endif       
                                            </div> -->
                                       <!--  <div id="myImg">
                                                

                                               <div class="upload-Picture" style="margin-left:0px !important;width: 10rem;display: inline-block; ">
                                                    <img class="upload-PictureIMG"
                                                        src="{{('theme/icons/ic_add_a_photo_24px.png')}}"><input type="file" style="opacity: 0;
                                                    margin-left: 15px;
                                                    margin-top: 22px;" name="image[]" accept="image/*" id="file" multiple>

                                                </div> 

                                        </div> -->


                                        <div class="row" id="myImg">
                                        @if($gallery->count())
                                           @foreach($gallery as $img)
                                          <div class="col-md-3" style="text-align: center;">
                                                <img class="loaded_images" data-button="btnr{{$g->id}}" src="{{ $img->image}}"  style="width:100%;height: 150px;">
                                                <a  href="{{route('delete_gallery',['id'=>$img->id])}}" id="btnr{{$img->id}}">Remove</a>
                                          </div>
                                         @endforeach
                                         @endif
                                         <div class="col-md-3 mt-1" id="uploader_div">
                                                <div class="upload-Picture" style="width:10rem">
                                                    <img class="upload-PictureIMG" src="{{asset('theme/icons/ic_add_a_photo_24px.png')}}"><input type="file" name="image[]" id="file" accept="image/*" multiple  style="opacity: 0;
                                                    margin-left: 15px;
                                                    margin-top: 22px;">
                                                    
                                                </div>
                                            </div>

                                            <!-- <div id="newImages" class="row">
                                            </div> -->
                                            
                                     </div>

                                        

                                    </div>


                                    <div id="btnn"></div>
                                </form>

                            </div>

                            <!-- <p><img id="output" width="200" /></p> -->

                        </div>


                    </div>

                </div>

                <div class="col-12 col-md-1 col-sm-12"></div>
                <div class="col-12 col-md-4 col-sm-12 sendrequest">
                    <div class="ReviewContainer" style="width:95%;     position: relative;
                                    top: 15px;">
                        <div class="SendRequestRow row" style="max-width: 500px;">
                            <div class="col text-center">
                                <img src="{{asset('theme/icons/Group 1458.png')}}" class="centertick">
                            </div>
                            <div class="row text-center" style="padding-right: 0;">
                                <p style="font-size: 16px;padding-right: 0;"><b class="sendfont">Send your request
                                        privately</b></p>
                            </div>
                            <div class="row" style="position: relative;left: 12px;">
                                <a class=" nav-item nav-link SendRequestButton" data-bs-toggle="modal" role="button"
                                    data-bs-target="#staticBackdrop" data-bs-dismiss="modal">
                                    Connect Privately</a>
                                <a class=" nav-item nav-link SendRequestButtonmobile" data-bs-toggle="modal"
                                    role="button" data-bs-target="#mobilemodal" data-bs-dismiss="modal">
                                    Connect Privately </a>
                            </div>
                        </div>
                    </div>
                    <div class="ReviewContainer" style="width:95%;     position: relative;
                                    top: 15px;">



                        <div class="row" style="position: relative;top: 15px;">
                            <a href="{{route('LeaveReviewBlue', 'id')}}" class=" nav-item nav-link previews"><img
                                    src="{{asset('theme/icons/whitestar.png')}}" class="whitestar" alt="">
                                Leave your review</a>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Categories-->

    <!--Pictures-->

    <!--Reviews-->
    <section class="pb-5 reviewtop" style="display:none">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12">
                    <div class="d-flex reviewparagraph">
                        <p class="ReviewText"><b> Reviews as service provider</b></p>
                        <img src="{{asset('theme/icons/Polygon 21.png')}}" class="starimage">
                        <p class="ReviewText"><b> 4.5/5</b></p>
                        <p class="ReviewText"><b> (30)</b></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="ReviewContainer">
            <div class="row" style="margin-bottom:20px;">
                <div class="col-lg-6 cardbottom">

                    <div class="onlineCard card">
                        <div class="row g-0">
                            <div class="col-2 col-sm-3 col-md-2 col-xxl-2 text-end">
                                <img src="{{asset('theme/icons/Ellipse -1.png')}}" class="CardImg">
                            </div>
                            <div class="col-10 col-sm-9 col-md-10 col-xxl-10">
                                <div class="card-body">
                                    <div class="row">
                                        <p class="ReviewProfileName">Cristina Röhmer</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-sm-12 d-flex" style="position: relative;
                                                        top: -5px;">
                                            <img src="{{asset('theme/icons/Group 2411.png')}}" class="ReviewStarImg">
                                            <p><b>4.5</b></p>
                                            <p class="ReviewDate">07-11-2021</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <p class="ReviewTextEnd">In publishing and graphic design,Lorem ipsum is a
                                            placeholder
                                            text commonly</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 cardbottom">

                    <div class="onlineCard card">
                        <div class="row g-0">
                            <div class="col-2 col-sm-3 col-md-2 col-xxl-2 text-end">
                                <img src="{{asset('theme/icons/Ellipse -1.png')}}" class="CardImg">
                            </div>
                            <div class="col-10 col-sm-9 col-md-10 col-xxl-10">
                                <div class="card-body">
                                    <div class="row">
                                        <p class="ReviewProfileName">Cristina Röhmer</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-sm-12 d-flex" style="position: relative;
                                                        top: -5px;">
                                            <img src="{{asset('theme/icons/Group 2411.png')}}" class="ReviewStarImg">
                                            <p><b>4.5</b></p>
                                            <p class="ReviewDate">07-11-2021</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <p class="ReviewTextEnd">In publishing and graphic design,Lorem ipsum is a
                                            placeholder
                                            text commonly</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-lg-6 cardbottom">

                    <div class="onlineCard card">
                        <div class="row g-0">
                            <div class="col-2 col-sm-3 col-md-2 col-xxl-2 text-end">
                                <img src="{{asset('theme/icons/Ellipse -1.png')}}" class="CardImg">
                            </div>
                            <div class="col-10 col-sm-9 col-md-10 col-xxl-10">
                                <div class="card-body">
                                    <div class="row">
                                        <p class="ReviewProfileName">Cristina Röhmer</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-sm-12 d-flex" style="position: relative;
                                                        top: -5px;">
                                            <img src="{{asset('theme/icons/Group 2411.png')}}" class="ReviewStarImg">
                                            <p><b>4.5</b></p>
                                            <p class="ReviewDate">07-11-2021</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <p class="ReviewTextEnd">In publishing and graphic design,Lorem ipsum is a
                                            placeholder
                                            text commonly</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 cardbottom">

                    <div class="onlineCard card">
                        <div class="row g-0">
                            <div class="col-2 col-sm-3 col-md-2 col-xxl-2 text-end">
                                <img src="{{asset('theme/icons/Ellipse -1.png')}}" class="CardImg">
                            </div>
                            <div class="col-10 col-sm-9 col-md-10 col-xxl-10">
                                <div class="card-body">
                                    <div class="row">
                                        <p class="ReviewProfileName">Cristina Röhmer</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-sm-12 d-flex" style="position: relative;
                                                        top: -5px;">
                                            <img src="{{asset('theme/icons/Group 2411.png')}}" class="ReviewStarImg">
                                            <p><b>4.5</b></p>
                                            <p class="ReviewDate">07-11-2021</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <p class="ReviewTextEnd">In publishing and graphic design,Lorem ipsum is a
                                            placeholder
                                            text commonly</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-lg-6 cardbottom">

                    <div class="onlineCard card">
                        <div class="row g-0">
                            <div class="col-2 col-sm-3 col-md-2 col-xxl-2 text-end">
                                <img src="{{asset('theme/icons/Ellipse -1.png')}}" class="CardImg">
                            </div>
                            <div class="col-10 col-sm-9 col-md-10 col-xxl-10">
                                <div class="card-body">
                                    <div class="row">
                                        <p class="ReviewProfileName">Cristina Röhmer</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-sm-12 d-flex" style="position: relative;
                                                        top: -5px;">
                                            <img src="{{asset('theme/icons/Group 2411.png')}}" class="ReviewStarImg">
                                            <p><b>4.5</b></p>
                                            <p class="ReviewDate">07-11-2021</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <p class="ReviewTextEnd">In publishing and graphic design,Lorem ipsum is a
                                            placeholder
                                            text commonly</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 cardbottom">

                    <div class="onlineCard card">
                        <div class="row g-0">
                            <div class="col-2 col-sm-3 col-md-2 col-xxl-2 text-end">
                                <img src="{{asset('theme/icons/Ellipse -1.png')}}" class="CardImg">
                            </div>
                            <div class="col-10 col-sm-9 col-md-10 col-xxl-10">
                                <div class="card-body">
                                    <div class="row">
                                        <p class="ReviewProfileName">Cristina Röhmer</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-sm-12 d-flex" style="position: relative;
                                                        top: -5px;">
                                            <img src="{{asset('theme/icons/Group 2411.png')}}" class="ReviewStarImg">
                                            <p><b>4.5</b></p>
                                            <p class="ReviewDate">07-11-2021</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <p class="ReviewTextEnd">
                                            In publishing and graphic design,Lorem ipsum is a placeholder text commonly
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-lg-6 cardbottom">
                    <div class="onlineCard card">
                        <div class="row g-0">
                            <div class="col-2 col-sm-3 col-md-2 col-xxl-2 text-end">
                                <img src="{{asset('theme/icons/Ellipse -1.png')}}" class="CardImg">
                            </div>
                            <div class="col-10 col-sm-9 col-md-10 col-xxl-10">
                                <div class="card-body">
                                    <div class="row">
                                        <p class="ReviewProfileName">Cristina Röhmer</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-sm-12 d-flex" style="position: relative;
                                                        top: -5px;">
                                            <img src="{{asset('theme/icons/Group 2411.png')}}" class="ReviewStarImg">
                                            <p><b>4.5</b></p>
                                            <p class="ReviewDate">07-11-2021</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <p class="ReviewTextEnd">In publishing and graphic design,Lorem ipsum is a
                                            placeholder
                                            text commonly</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 cardbottom">

                    <div class="onlineCard card">
                        <div class="row g-0">
                            <div class="col-2 col-sm-3 col-md-2 col-xxl-2 text-end">
                                <img src="{{asset('theme/icons/Ellipse -1.png')}}" class="CardImg">
                            </div>
                            <div class="col-10 col-sm-9 col-md-10 col-xxl-10">
                                <div class="card-body">
                                    <div class="row">
                                        <p class="ReviewProfileName">Cristina Röhmer</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-sm-12 d-flex" style="position: relative;
                                                        top: -5px;">
                                            <img src="{{asset('theme/icons/Group 2411.png')}}" class="ReviewStarImg">
                                            <p><b>4.5</b></p>
                                            <p class="ReviewDate">07-11-2021</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <p class="ReviewTextEnd">In publishing and graphic design,Lorem ipsum is a
                                            placeholder
                                            text commonly</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center col-sm-12 col-md-12 col-lg-9 col-xxl-7">
                <a href="" class="loadmore">Load more
                    <img src="{{asset('theme/icons/ic_arrow_forward_24px.png')}}" alt="">
                </a>
            </div>
        </div>
    </section>
    <section>
        <div class="modal fade" id="mobilemodal" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content modalbody">
                    <div class="modal-body">
                        <div class="col text-center mb-3">
                            <img src="{{asset('theme/icons/bluecontact.png')}}" style="width: 2.3rem;">
                        </div>
                        <p class="MBText1"> </p>
                        <p style="font-size: 12px;margin-bottom: 0.5rem;text-align: center;">
                            You can make a call or send a message for the further proceedings.
                        </p>
                        <div class="row" style="position: relative;top: 20px;">
                            <div class="col text-center">
                                <a href="MobileChatBlueMessage.html" class="SendMessageButton">Send Message</a>
                            </div>
                            <div class="col text-center">
                                <a href="" class="CallButton" data-bs-toggle="modal" data-bs-target="#callonmobile"
                                    data-bs-dismiss="modal">Make Call</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="modal fade" id="callonmobile" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdrop2Label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content callonmobilebody">
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
    <!--Send Request-->
    <section>
        <div class="modal fade" id="staticBackdrop" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="col text-center mb-3">
                            <img src="{{asset('theme/icons/bluecontact.png')}}" style="width: 2.3rem;">
                        </div>
                        <p class="MBText1"> </p>
                        <p class="MBText2">You can make a call or send a message
                            for the further proceedings.
                        </p>
                        <div class="row">
                            <div class="col text-center">
                                <a href="Chat.html" class="SendMessageButton">Send Message</a>
                            </div>
                            <div class="col text-center">
                                <a href="" class="CallButton" data-bs-toggle="modal" data-bs-target="#staticBackdrop2"
                                    data-bs-dismiss="modal">Make Call</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="modal fade" id="staticBackdrop2" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdrop2Label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="col text-center mb-3">
                            <img src="{{asset('theme/icons/bluecontact.png')}}" style="width: 3rem;height:3rem;">
                        </div>
                        <p class="MBText3"><b>742 009 993 23</b></p>
                        <div class="col text-center">
                            <a href="" class="CallButtongrey">Call</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Footer-->
    @include('frontend.layout.footer')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>


                            function previewImages() {

                              var preview = document.querySelector('#myImg');
                             $('.selected_image').remove();  
                              if (this.files) {
                                [].forEach.call(this.files, readAndPreview);
                              }

                              function readAndPreview(file) {

                                // Make sure `file.name` matches our extensions criteria
                                if (!/\.(jpe?g|png|gif)$/i.test(file.name)) {
                                  return alert(file.name + " is not an image");
                                } // else...
                                
                                var reader = new FileReader();
                                
                                reader.addEventListener("load", function() {
                                  var image = new Image();
                                  image.height = 160;
                                  image.width = 175;
                                  image.className   ="selected_image";
                                  image.title  = file.name;
                                  image.src    = this.result;
                                   image.style.height = '160px';
                                   image.style.width = '10rem';
                                   image.style.paddingLeft = '0px';
                                   image.style.paddingRight = '0px';
                                   image.style.marginRight = '10px';
                                   preview.prepend(image);
                                });
                                
                                reader.readAsDataURL(file);
                                 document.getElementById("btnn").innerHTML =
                "<button type='submit' class='btn btn-primary mt-1' >Submit</button>"; 
                              }

                            }

                            document.querySelector('#file').addEventListener("change", previewImages);

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.4.1/mapbox-gl.js'></script>
    <script>
        var lat = "<?php echo $lat ?>";
        var lng = "<?php echo $lat ?>";
        mapboxgl.accessToken =
            'pk.eyJ1IjoiYW1tYXIxMjMxMjMiLCJhIjoiY2tydzJsMm9jMGNpajJucnh4M2pmaTVsZCJ9.ZxNGpJR7Qw9t3ONgdZmbQA';
        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11',
            center: [parseFloat(lat), parseFloat(lng)],
            zoom: 15,
        });
        const marker1 = new mapboxgl.Marker()
            .setLngLat([parseFloat(lat), parseFloat(lng)])
            .addTo(map);

    </script>

    <script type="text/javascript">
        
        $('.loaded_images').hover(function(){

            id = $(this).data('button');
                $('#'+id).show(1000);
            });

    </script>
</body>

</html>
