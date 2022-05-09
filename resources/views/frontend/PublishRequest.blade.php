            @include('frontend.layout.head')
            @section('publishrequests','active')
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
                integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT"
                crossorigin="anonymous"></script>
            <link rel="stylesheet" href="{{asset('theme/css/PublishRequestStyle.css')}}">
            <style type="text/css">
                .chatDIV {
                    display: block;
                }

                .chatDIV2 {
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

                .mainpicture {
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

                    .background-image {
                        left: 8px;
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

                    .background-image {
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


                #pac-container {
                  padding-bottom: 12px;
                  margin-right: 12px;
                  margin-top: 250px !important;
                }

                .selected_image{
                    padding: 10px;
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
                        <form action="{{route('confirm-publish-save')}}" method="Post" enctype="multipart/form-data" onsubmit="return validateR()">
                            @csrf

                            <div class="row">
                                <label for="Select" class="form-label">
                                    <p class="Form-Categoryt1">Request Title</p>
                                </label>
                                <div class="col-sm-6 col-12 pb-3">
                                    <input type="text" id="request_title" value="{{old('request_title')}}" name="request_title" class="form-control"
                                        placeholder="Request title" required>
                                        <span id="title_error"  style="display: none;color: red;font-size: 13px;">* Title cannot contain only numbers</span>
                                </div>
                            </div>
                            <div class="row">
                                <label for="Select" class="form-label">
                                    <p class="Form-Categoryt1">Choose Category and sub category:</p>
                                </label>
                                <div class="col-sm-6 col-12 pb-3">
                                    <select id="selectCategory" name="category" value="{{old('category')}}" class="form-select">
                                        <option value="{{Null}}">Choose</option>
                                        @foreach($category as $c)
                                        <option <?php if(old('category')!=NULL && old('category')==$c->id) echo 'selected="selected"' ?> value="{{$c->id}}">{{$c->name}}</option>
                                        @endforeach()
                                    </select>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <select id="SelectSubcate" name="sub_category" value="{{old('sub_category')}}" class="form-select">
                                        <option value="{{Null}}">Choose</option>
                                        <option value="subcategory">SubCategory</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row pb-2">
                                <div class="col-sm-6 col-12">
                                    <label for="Select" class="form-label">
                                        <p class="Form-Categoryt1">Budget:</p>
                                    </label>
                                    <select id="Select" name="budget" value="{{old('budget')}}" class="form-select">
                                        <option value="{{Null}}">Choose</option>
                                        <option <?php if(old('budget')!=NULL && old('budget')=='Per Hour') echo 'selected="selected"' ?> value="Per Hour">Per Hour</option>
                                        <option <?php if(old('budget')!=NULL && old('budget')=='Weekly') echo 'selected="selected"' ?> value="Weekly">Weekly</option>
                                        <option <?php if(old('budget')!=NULL && old('budget')=='Monthly') echo 'selected="selected"' ?> value="Monthly">Montly</option>
                                        <option <?php if(old('budget')!=NULL && old('budget')=='Package') echo 'selected="selected"' ?> value="Package">Package</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <label for="Select" class="form-label">
                                        <p class="Form-Categoryt1">Price:</p>
                                    </label>
                                    <input type="number" id="TextInput" value="{{old('price')}}" required name="price" class="form-control"
                                        placeholder="Price">
                                </div>
                            </div>
                            <div class="row" style="    padding-bottom: 1rem!important;">
                                <div class="col-sm-6 col-12">
                                    <label for="Select" class="form-label">
                                        <p class="Form-Categoryt1">Position:</p>
                                    </label>
                                     <input type="text" class="Modal4input3 form-control inputField" placeholder="Address" style="width:100% !important" id="pac-input" aria-label="Address" aria-describedby="basic-addon1" placeholder="formated_address">

                                    <input type="hidden" name="position" id="lat" value="{{old('position')}}" id="TextInput"
                                        class="Position-fromImg form-control" placeholder="Le Berdo">
                                    <input type="hidden" name="position2" id="lng" value="{{old('position2')}}" id="TextInput"
                                        class="Position-fromImg form-control" placeholder="Le Berdo">
                                        <input type="hidden" name="formated_address" id="formated_address">
                                    <div id="map" style="height:500px;margin-top: 5px;"></div>                                    
                                </div>
                            </div>
                            <div class="pt-3">
                                <div class="form-check">
                                    <input class="form-check-input" <?php if(old('urgent')!=NULL) echo 'checked="checked"' ?> name="urgent"  value="Urgent" type="checkbox"
                                        id="FieldsetCheck" >
                                    <label class="form-check-label" for="FieldsetCheck">
                                        <p class="Form-Categoryt1" style="padding-top: 0.2rem;">Urgent?</p>
                                    </label>
                                </div>
                            </div>
                            <div class="pt-3">
                                <div class="form-check">
                                    <input class="form-check-input" name="professional" value="Only Professional"
                                        type="checkbox" id="FieldsetCheck" <?php if(old('professional')!=NULL) echo 'checked="checked"' ?>>
                                    <label class="form-check-label" for="FieldsetCheck">
                                        <p class="Form-Categoryt1" style="padding-top: 0.2rem;">Only Professional?</p>
                                    </label>
                                </div>
                            </div>
                            <div class="pt-3">
                                <div class="form-check">
                                    <input class="form-check-input" name="phone_number" value="Show Phone Number"
                                        type="checkbox" id="FieldsetCheck" <?php if(old('phone_number')!=NULL) echo 'checked="checked"' ?>>
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
                                            <h6 style="text-align:right"><text id="textlimit">0</text>/1000</h6>
                                        </div>
                                    </div>

                                    <textarea type="text" id="textlimitdes" onkeydown="myFunction()" maxlength="1000" minlength="20" 
                                        name="description" class="from-description1 form-control"
                                        placeholder="Detailed description">{{old('description')}}</textarea>
                                </div>
                            </div>
                            <div class="row pt-3" style="padding-bottom: 20px;">
                                <div class="col-md-9 col-sm-12 col-12">
                                    <div class="Form-DescriptionAlertShadow d-flex pt-3">
                                        <img src="{{('theme/icons/Icon ionic-md-warning.png')}}"
                                            style="width: 2.5rem;height: 1.2rem;padding-left: 20px;" class="dangericon">
                                            <p class="Form-DescriptionAlert1">Minimum 20 characters</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="padding-bottom: 10px;">
                                <div class="col-md-9 col-sm-12 col-12" style="padding-left: 25px;">
                                    <label for="Select" class="form-label pb-3">
                                        <p class="Form-Categoryt1">Pictures of the work to be done:</p>
                                    </label>
                                     <div class="row">
                                        <div class="col-md-12" style="padding-left:2px;padding-right: 2px;">
                                            <div id="myImg">

                                                <div class="upload-Picture" style="display:inline-block;">
                                                    <img class="upload-PictureIMG"
                                                        src="{{('theme/icons/ic_add_a_photo_24px.png')}}">
                                                        <input type="file"
                                                        name="file[]" id="file" accept="image/*" value="{{old('file')}}" style="opacity: 0;
                                                    margin-left: 15px;
                                                    margin-top: 22px;" multiple>

                                                </div>

                                                
                                            </div>




                                        </div>
                                    </div>
                                    
                                   
                                </div>
                                <div class="row pt-3" style="padding-bottom: 20px;">
                                    <div class="col-md-9 col-sm-12 col-12">
                                        <div class="Form-DescriptionAlertShadow d-flex pt-3">
                                            <img src="{{('theme/icons/Icon ionic-md-warning.png')}}" id
                                                style="width: 2.5rem;height: 1.2rem;padding-left: 20px;"
                                                class="dangericon">

                                            <p class="Form-DescriptionAlert1">Minimum of 2 MB File</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-xs-6 col-6">
                                        <button class="form-button2 btn btn-primary">Cancel</button>
                                    </div>
                                    <div class="col-md-6 col-xs-6 col-6 pl-11">
                                        <button class="form-button1 btn btn-primary confirmcancel"
                                            type="submit">Continue</button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </section>
                <!--Footer-->


                @include('frontend.layout.footer')
                @include('frontend.layout.scripts')


                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
                    crossorigin="anonymous"></script>
                <script type="text/javascript">
                    var dropdownElementList = [].slice.call(document.querySelectorAll('.dropdown-toggle'))
                    var dropdownList = dropdownElementList.map(function (dropdownToggleEl) {
                        return new bootstrap.Dropdown(dropdownToggleEl)
                    })

                </script>
                <script>
                    function myFunction() {

                        var txt = document.getElementById('textlimitdes').value;
                        var len = txt.length;

                        document.getElementById('textlimit').innerHTML = len;

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
                <script>
                   /* $(function () {
                        $(":file").change(function () {
                            if (this.files && this.files[0]) {
                                for (var i = 0; i < this.files.length; i++) {
                                    var reader = new FileReader();
                                    reader.onload = imageIsLoaded;
                                    reader.readAsDataURL(this.files[i]);
                                }
                            }
                        });
                    });

                    function imageIsLoaded(e) {
                        $('.loaded_image').remove();
                        $('#myImg').append('<img class="loaded_image" src=' + e.target.result + ' style="heigh:150px ; width:150px; margin-top:10px;">');
                    };*/


                    function previewImages() {

                             $('.selected_image').remove();  
                              var preview = document.querySelector('#myImg');
                              
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
                                  image.width = 163;
                                  image.className   ="selected_image";
                                  image.title  = file.name;
                                  image.src    = this.result;
                                  image.style.height = '160px';
                                  image.style.width = '163px';
                                  preview.prepend(image);
                                });
                                
                                reader.readAsDataURL(file);
                                
                              }

                            }

                            document.querySelector('#file').addEventListener("change", previewImages);


                    $('#selectCategory').change(function(){

                        $.ajax({
                            type:'POST',
                            url:'{{route("get_subcategory")}}',
                            data:{_token: "{{ csrf_token() }}",id:$(this).val()
                            },
                            success: function( msg ) {
                                if(msg!=-1){
                                    $('#SelectSubcate').html(msg);
                                }
                            }
                        });

                    })


                </script>

            </body>

            </html>
