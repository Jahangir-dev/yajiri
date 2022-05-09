            @include('frontend.layout.head')
            @section('publishrequests','active')
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="{{asset('theme/css/PublishRequestStyle.css')}}">
            <style type="text/css">
            .chatDIV{
                display: block;
            }
            .chatDIV2{
                display: none;
            }


            .form-button2 {
            background: white;
            border-color: #ff3b72;
            height: 40px;
            font-size: 15px;
            font-weight: bolder;
            border-radius: 8px;
            color: #ff4b7e;
            width: 25%;
            }
            .form-button1 {
            background: linear-gradient(to right, #ff8dad, #ff2160);
            border-color: #ffc2d3;
            width: 33%;
            height: 40px;
            font-size: 16px;
            font-weight: bolder;
            border-radius: 8px;
            }
            .mainpicture{
            padding-left: 0px;
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
            .form-button1 {
            background: linear-gradient(to right, #ff8dad, #ff2160);
            border-color: #ffc2d3;
            width: 36%;
            height: 40px;
            font-size: 16px;
            font-weight: bolder;
            border-radius: 8px;
            }
            .form-button2 {
            background: white;
            border-color: #ff3b72;
            height: 40px;
            font-size: 15px;
            font-weight: bolder;
            border-radius: 8px;
            color: #ff4b7e;
            width: 30%;
            }
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
            .buton {
            position: relative;
            left: -83px;
            }
            .from-description1 {
            height: 100px;
            }
            .socialicon {
            transform: translateX(78%);
            }
            .followus {
            position: relative;
            left: 327px;
            top: -50px;
            }
            .background-image{
            left: -40px;
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
            .showcase-text1 {
            font-size: 30px;
            font-weight: 900;
            padding-top: 4rem;
            }
            .background-image{
            width: 100%;
            height: 180px;
            position: relative;
            left: -25px;
            }
            .form-button1 {
            background: linear-gradient(to right, #ff8dad, #ff2160);
            border-color: #ffc2d3;
            width: 33%;
            height: 40px;
            font-size: 16px;
            font-weight: bolder;
            border-radius: 8px;
            }
            .form-button2 {
            background: white;
            border-color: #ff3b72;
            height: 40px;
            font-size: 15px;
            font-weight: bolder;
            border-radius: 8px;
            color: #ff4b7e;
            width: 25%;
            }
            }


.pac-card {
  background-color: #fff;
  border: 0;
  border-radius: 2px;
  box-shadow: 0 1px 4px -1px rgba(0, 0, 0, 0.3);
  margin: 10px;
  padding: 0 0.5em;
  font: 400 18px Roboto, Arial, sans-serif;
  overflow: hidden;
  font-family: Roboto;
  padding: 0;
}

#pac-container {
  padding-bottom: 12px;
  margin-right: 12px;
  margin-top: 180px;
}

.pac-controls {
  display: inline-block;
  padding: 5px 11px;
}

.pac-controls label {
  font-family: Roboto;
  font-size: 13px;
  font-weight: 300;
}

#pac-input {
  text-overflow: ellipsis;
    /*margin-left: 0px;
        padding-right: 13px;
        padding-left: 13px;
        width: 373px;*/
        width: 370px;
}

#pac-input:focus {
  border-color: #4d90fe;
}
.pac-container {
        z-index: 99999999999 !important;
}

            </style>
            <body style="zoom:90%">
                <!--Nav Bar-->
                @if(isset($islogin))
    @if($islogin =='true')         
    @include('frontend.layout.navbar2')       
@else
@include('frontend.layout.navbar')       
@endif
@else
@include('frontend.layout.navbar')  
@endif

                <!--Show Case-->
                <section class="pt-3 text-center">
                    <div class="row" style="margin:0px">
                        <div class="col-lg-12 mainpicture">
                            <div class="background-image text-center">
                                <p class="showcase-text1" style="color: white;">Publish your requests</p>
                            </div>
                        </div>
                    </div>
                </section>
                <!--Form-->
                <section class="py-5 cardtopsection">
                    <div class="Form-Container container">
                    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                        <form action="{{route('confirm-publish-save-update')}}" method="Post" enctype="multipart/form-data" onsubmit="return validateR()">
                            @csrf
                           <input type="hidden" name="id" value="{{$request->id}}" >
                            <div class="row">
                                <label for="Select" class="form-label">
                                    <p class="Form-Categoryt1">Request Title</p>
                                </label>
                                <div class="col-sm-6 col-12 pb-3">
                                    <input type="text" id="request_title" name="request_title" value="{{$request->request_title}}" class="form-control" placeholder="Request title">
                                </div>
                            </div>
                            <div class="row">
                                <label for="Select" class="form-label">
                                    <p class="Form-Categoryt1">Choose Category and sub category:</p>
                                </label>
                                <div class="col-sm-6 col-12 pb-3">
                                    <select id="Select" name="category" class="form-select">
                                       
                                        @foreach($category as $c)
                                        @if($request->category==$c->id)
                                        <option value="{{$c->id}}">{{$c->name}}</option>
                                        @endif
                                        @endforeach
                                        @foreach($category as $c)
                                        <option value="{{$c->id}}">{{$c->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <select id="Select" name="sub_category" class="form-select">
                                     
                                        @foreach($category as $c)
                                        @if($request->sub_category==$c->name)
                                        <option value="{{$c->name}}">{{$c->name}}</option>
                                        @endif
                                        @endforeach
                                        <option value="subcategory">SubCategory</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row pb-2">
                                <div class="col-sm-6 col-12">
                                    <label for="Select" class="form-label">
                                        <p class="Form-Categoryt1">Budget:</p>
                                    </label>
                                    <select id="Select" name="budget" class="form-select">
                                        <option value="{{$request->budget}}">{{$request->budget}}</option>

                                        <option <?php if($request->budget=='Per Hour') echo 'selected="selected"'; ?> value="Per Hour">Per Hour</option>
                                        <option <?php if($request->budget=='Weekly') echo 'selected="selected"'; ?> value="Weekly">Weekly</option>
                                        <option <?php if($request->budget=='Monthly') echo 'selected="selected"'; ?> value="Monthly">Montly</option>
                                        <option <?php if($request->budget=='Package') echo 'selected="selected"'; ?> value="Package">Package</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <label for="Select" class="form-label">
                                        <p class="Form-Categoryt1">Price:</p>
                                    </label>
                                    <input type="text" id="TextInput" name="price" value="{{$request->price}}" class="form-control" placeholder="price">
                                </div>
                            </div>
                            <div class="row" style="    padding-bottom: 1rem!important;">
                                <div class="col-sm-6 col-12">
                                    <label for="Select" class="form-label">
                                        <p class="Form-Categoryt1">Position:</p>
                                    </label>
                                     <input type="text" class="Modal4input3 form-control inputField" placeholder="Address" id="pac-input" style="width: 100% !important" aria-label="Address" aria-describedby="basic-addon1" placeholder="Address" value="{{$request->formated_address}}">

                                     <input type="hidden" name="formated_address" id="formatted_address">
                                    <input type="hidden" name="position" id="lat" value="{{$request->position}}" id="TextInput"
                                        class="Position-fromImg form-control" placeholder="Le Berdo">
                                    <input type="hidden" name="position2" id="lng" value="{{$request->position2 }}" id="TextInput"
                                        class="Position-fromImg form-control" placeholder="Le Berdo">
<!--                                         <input type="text" name="formated_address" id="formated_address"> -->
                                    <div id="map" style="height:500px;margin-top: 5px;"></div>                                    
                                </div>
                            </div>
                            <div class="pt-3">
                                <div class="form-check">
                                @if($request->urgent)
                                <input class="form-check-input" checked name="urgent" value="{{$request->urgent}}" value="Urgent" type="checkbox" id="FieldsetCheck">
                                    @else
                                    <input class="form-check-input" name="urgent"  value="Urgent" type="checkbox" id="FieldsetCheck">
                                    @endif
                                    
                                    <label class="form-check-label" for="FieldsetCheck">
                                        <p class="Form-Categoryt1" style="padding-top: 0.2rem;">Urgent?</p>
                                    </label>
                                </div>
                            </div>
                            <div class="pt-3">
                                <div class="form-check">
                                    @if($request->professional)
                                    <input class="form-check-input" name="professional" checked value="{{$request->professional}}" value="1" type="checkbox" id="FieldsetCheck">
                                    @else
                                    <input class="form-check-input" name="professional"  value="1" type="checkbox" id="FieldsetCheck">
                                    @endif
                                   
                                    <label class="form-check-label" for="FieldsetCheck">
                                        <p class="Form-Categoryt1" style="padding-top: 0.2rem;">Only Professional?</p>
                                    </label>
                                </div>
                            </div>
                            <div class="pt-3">
                                <div class="form-check">
                                @if($request->phone_number)
                                <input class="form-check-input" name="phone_number" checked value="{{$request->phone_number}}" value="1" type="checkbox" id="FieldsetCheck">
                                  
                                    @else
                                    <input class="form-check-input" name="phone_number"  value="1" type="checkbox" id="FieldsetCheck">
                                  
                                    @endif
                                    
                                    <label class="form-check-label" for="FieldsetCheck">
                                        <p class="Form-Categoryt1" style="padding-top: 0.2rem;">Show Phone Number</p>
                                    </label>
                                </div>
                            </div>
                            <div class="row pt-5 descriptiontop">
                                <div class="col-md-9 col-sm-12 col-12">
                                <div class="row">
                                    <div class="col-md-6">
                                    <p class="Form-Categoryt1">Detailed description:</p>
                                    </div>
                                    <div class="col-md-6">
                                    <h6  style="text-align:right"><text id="textlimit">{{isset($request->description)?strlen($request->description):0}}</text>/1000</h6>
                                    </div>
                                    </div>
                                    
                                    <textarea type="text" id="textlimitdes" onkeydown="myFunction()" maxlength="1000" minlength="20" name="description" value="{{$request->description}}" class="from-description1 form-control" placeholder="Detailed description">{{$request->description}}</textarea>
                                        
                                </div>
                            </div>
                            <div class="row pt-3" style="padding-bottom: 20px;">
                                <div class="col-md-9 col-sm-12 col-12">
                                    
                                    <div class="Form-DescriptionAlertShadow d-flex pt-3">
                                        <img src="{{asset('theme/icons/Icon ionic-md-warning.png')}}" style="width: 2.5rem;height: 1.2rem;padding-left: 20px;" class="dangericon">
                                        <p class="Form-DescriptionAlert1">Minimum of 1000 letters</p>

                                    </div>
                                </div>
                            </div>
                            <div class="row" style="padding-bottom: 10px;">
                                <div class="col-md-9 col-sm-12 col-12">
                                    <label for="Select" class="form-label pb-3">
                                        <p class="Form-Categoryt1">Pictures of the work to be done:</p>
                                    </label>
                                    <div class="row" id="myImg">
                                         @foreach($publish_image as $img)
                                          <div class="col-md-3" style="text-align: center;">
                                                <img src="{{asset($img->images)}}" style="width:100%;height: 150px;">
                                                <a href="{{route('modify_delete_image',['id'=>$img->id])}}">Remove</a>
                                          </div>
                                         @endforeach

                                         <div class="col-md-3 mt-1" id="uploader_div">
                                                <div class="upload-Picture">
                                                    <img class="upload-PictureIMG" src="{{asset('theme/icons/ic_add_a_photo_24px.png')}}"><input type="file" name="file[]" id="file" accept="image/*" multiple value="{{$request->file}}" style="opacity: 0;
                                                    margin-left: 15px;
                                                    margin-top: 22px;">
                                                    
                                                </div>
                                            </div>

                                            <!-- <div id="newImages" class="row">
                                            </div> -->
                                            
                                     </div>
                                   
                                  
                                </div>
                                
                            <div class="row pt-3" style="padding-bottom: 20px;">
                                <div class="col-md-9 col-sm-12 col-12">
                                    <div class="Form-DescriptionAlertShadow d-flex pt-3">
                                        <img src="{{asset('theme/icons/Icon ionic-md-warning.png')}}" style="width: 2.5rem;height: 1.2rem;padding-left: 20px;" class="dangericon">
                                        <p class="Form-DescriptionAlert1">Minimum of 2 MB File</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-xs-6 col-6">
                                    <button class="form-button2 btn btn-primary">Cancel</button>
                                </div>
                                <div class="col-md-6 col-xs-6 col-6 pl-11">
                                    <button class="form-button1 btn btn-primary confirmcancel" type="submit">Confirm</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
                <!--Footer-->
                
                
                @include('frontend.layout.footer')
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                
                
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
                <script type="text/javascript">
                var dropdownElementList = [].slice.call(document.querySelectorAll('.dropdown-toggle'))
                var dropdownList = dropdownElementList.map(function (dropdownToggleEl) {
                return new bootstrap.Dropdown(dropdownToggleEl)
                })
                </script>
                                  <script>
                    function previewImages() {

                              var preview = document.querySelector('#myImg');
                              
                              if (this.files) {
                                [].forEach.call(this.files, readAndPreview);
                              }

                              function readAndPreview(file) {

                                // Make sure `file.name` matches our extensions criteria
                                if (!/\.(jpe?g|png|gif)$/i.test(file.name)) {
                                  return alert(file.name + " is not an image");
                                } // else...
                                
                                $('.newSelectedImages').remove('');    
                                var reader = new FileReader();
                                
                                reader.addEventListener("load", function() {
                                  var image = new Image();
                                  image.height = 100;
                                  image.title  = file.name;
                                  image.src    = this.result;
                                  $('#uploader_div').before(`<div class="mt-1 col-md-3 newSelectedImages"><img style="width:100%;height:150px;" src="`+this.result+`"</div>`);
                                });
                                
                                reader.readAsDataURL(file);
                                
                              }

                            }

                            document.querySelector('#file').addEventListener("change", previewImages);
  </script>
  <script>
                    function myFunction()
                    {
                       
                       var txt=document.getElementById('textlimitdes').value;
                       var len = txt.length;
                       
                       document.getElementById('textlimit').innerHTML=len;
                       
                    }

                       function validateR() {
                        /*                        var regExp = /[a-z]/i*/
                        title = $('#request_title').val();
/*                        if(regExp.test(title)){
                            $('#title_error').show();
                            $("html, body").animate({ scrollTop: 0 }, "slow");
                            return false;
                        } else {
                            $('#title_error').false();
                            return true;
                        }*/

                         if(title.match(/^[0-9]+$/) != null)
                            {
                            $('#title_error').show();
                            $("html, body").animate({ scrollTop: 0 }, "slow");
                            return false;
                            }
                            else
                            {
                                $('#title_error').false();
                                return true;                            
                            }


                    }

                    
                    </script>


                                    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
                                    <script
                                        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBikMgCY_d1NwtVzeM4mIviqZBBDrAFEko&callback=initMap1&v=weekly&libraries=places&channel=2"
                                        async></script>

                                    <script type="text/javascript">
                                        function initMap1() {
                                            const myLatlng = {
                                                lat: {{(float)$request->position}},
                                                lng: {{(float)$request->position2}}
                                            };
                                            const map1 = new google.maps.Map(document.getElementById("map"), {
                                                zoom: 15,
                                                center: myLatlng,
                                            });
                                            // Create the initial InfoWindow.
                                            let infoWindow = new google.maps.InfoWindow({
                                                content: "Click the map to get Lat/Lng!",
                                                position: myLatlng,
                                            });


                                                  const card = document.getElementById("pac-card");
                                                  const input1 = document.getElementById("pac-input");
                                                  const biasInputElement = document.getElementById("use-location-bias");
                                                  const strictBoundsInputElement = document.getElementById("use-strict-bounds");
                                                  const options = {
                                                    componentRestrictions: { country: "tn" },
                                                    fields: ["formatted_address", "geometry", "name"],
                                                    strictBounds: false,
                                                    types: ["establishment"],
                                                  };

                                                  map1.controls[google.maps.ControlPosition.TOP_LEFT].push(card);

                                                  const autocomplete = new google.maps.places.Autocomplete(input1, options);

                                                  // Bind the map's bounds (viewport) property to the autocomplete object,
                                                  // so that the autocomplete requests use the current map bounds for the
                                                  // bounds option in the request.
                                                  autocomplete.bindTo("bounds", map1);

                                                  const infowindow = new google.maps.InfoWindow();
                                                  const infowindowContent = document.getElementById("infowindow-content");

                                                  infowindow.setContent(infowindowContent);

                                                  const marker = new google.maps.Marker({
                                                    map1,
                                                    anchorPoint: new google.maps.Point(0, -29),
                                                  });

                                                  autocomplete.addListener("place_changed", () => {
                                                    infowindow.close();
                                                    marker.setVisible(false);

                                                    const place = autocomplete.getPlace();
                                                    document.getElementById('lat').value = place.geometry.location.lat();
                                                    document.getElementById('lng').value = place.geometry.location.lng()                    
                                                    document.getElementById('formatted_address').value = place.formatted_address;                                                    
/*                                                    $('#lat').val(place.geometry.location.lat());
                                                    $('#lng').val(place.geometry.location.lng());    */
                                                    if (!place.geometry || !place.geometry.location) {
                                                      // User entered the name of a Place that was not suggested and
                                                      // pressed the Enter key, or the Place Details request failed.
                                                      window.alert("No details available for input: '" + place.name + "'");
                                                      return;
                                                    }

                                                    // If the place has a geometry, then present it on a map.
                                                    if (place.geometry.viewport) {
                                                      map1.fitBounds(place.geometry.viewport);
                                                    } else {
                                                      map1.setCenter(place.geometry.location);
                                                      map1.setZoom(17);
                                                    }

                                                    marker.setPosition(place.geometry.location);
                                                    marker.setVisible(true);
                                                    infowindowContent.children["place-name"].textContent = place.name;
                                                    infowindowContent.children["place-address"].textContent =
                                                      place.formatted_address;
                                                    infowindow.open(map1, marker);
                                                  });



                                            infoWindow.open(map1);
                                            // Configure the click listener.
                                            map1.addListener("click", (mapsMouseEvent) => {
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
                                                infoWindow.open(map1);
                                            });
                                        }

                                    </script>

            </body>
            </html>