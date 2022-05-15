 <input type="hidden" id="lastModal">
 <input type="hidden" id="continueWith">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


 <script type="text/javascript">
     $(document).ready(function() {
         $('#forget-modal').click(function(){
             console.log('hereeee');
            $('#LoginRegisterModal8').modal('hide');
         });
         $('#send_forget_button').on('click', function(){
             var emailorpassword = $('#emailorpassword').val();
             console.log(emailorpassword);
             if(emailorpassword != '')
             {
                $.ajax({
                        type: 'POST',
                        url: '{{route("forgetPassword")}}',
                        data: {
                            _token: "{{ csrf_token() }}",
                            emailorpassword: emailorpassword
                        },
                        success: function(res) {
                            if (res.status == 200) {
                                $('#forget-modal').modal('hide');
                                $('#forgetVerificationModal').modal('show');
                                console.log('success true', res);
                                // $('#userEmailexist').show();
                                // $('#userEmailSalert').hide();
                                // userEmailS = 1;
                            } else {
                                console.log('false', res);
                                // $('#userEmailexist').hide();
                                // $('#userEmailSalert').hide();
                                // userEmailS = 0;
                            }
                        }
                    });
                }
                else{
                    console.log('empty validation goes here');
                }
         });
         $('#forget_verify_submit').on('click', function(){
            var verify_code = -1;
         $('.phone_Number_code').each(function() {
             if (verify_code == -1) {
                verify_code = $(this).val();
             } else {
                verify_code = verify_code + '' + $(this).val();
             }

         });
             console.log(verify_code);
             if(verify_code != '')
             {
                $.ajax({
                        type: 'POST',
                        url: '{{route("forgetPasswordVerification")}}',
                        data: {
                            _token: "{{ csrf_token() }}",
                            verify_code: verify_code
                        },
                        success: function(res) {
                            if (res.status == 200) {
                                $('#forget-modal').modal('hide');
                                $('#forgetVerificationModal').modal('show');
                                console.log('success true', res);
                                // $('#userEmailexist').show();
                                // $('#userEmailSalert').hide();
                                // userEmailS = 1;
                            } else {
                                console.log('false', res);
                                // $('#userEmailexist').hide();
                                // $('#userEmailSalert').hide();
                                // userEmailS = 0;
                            }
                        }
                    });
                }
                else{
                    console.log('empty validation goes here');
                }
         });
         $('.purpose').on('change', function() {

             if (this.value == 'Professional')
             //.....................^.......
             {
                 $(".professional").show();
                 $(".private").hide();
             } else if (this.value == 'Private') {
                 $(".private").show();
                 $(".professional").hide();
             } else {
                 $(".professional").hide();
                 $(".private").hide();
             }
         });

         $(".owl-carousel").owlCarousel({
             autoPlay: 2000,
             items: 4,
             itemsDesktop: [1199, 3],
             itemsDesktopSmall: [979, 3],
             center: true,
             nav: true,
             loop: true,
             responsive: {
                 600: {
                     items: 4
                 }
             }
         });

     });
 </script>

 <script type="text/javascript">
     $('#registerModal1Continuebtn').click(function() {
         $('.inputError').hide();
         if ($('#userEmail').val() == '' || $('#userEmail').val() == null) {
             $('.inputError[for="userEmail"]').show();
         } else {
             $('#LoginRegisterModal2').modal('hide');
             // $('#registerEmail').val($('#userEmail').val());
             //call ajax

             $('#LoginRegisterModal4').modal('show');
         }



     });

     $('#registerModal3Continuebtn').click(function() {
         $('.inputError').hide();

         var email = $('#userEmailS').val();
         var password, userCompanyName, inputField_c, userFirstName, inputField, userEmailS, terms_and_conditions = 0;

         if ($('#userType').val() == 1) {
             if ($('#userCompanyName').val() == '' || $('#userCompanyName').val() == null) {
                 $('.inputError[for="userCompanyName"]').show();
                 userCompanyName = 1;
             } else {
                 userCompanyName = 0;
             }
             $('#LoginRegisterModal4 .inputField_c').each(function() {
                 var forType = $(this).attr('id');
                 if ($(this).val() == '' || $(this).val() == null) {
                     $('.inputError[for="' + forType + '"]').show();
                     inputField_c = 1;

                 } else {
                     inputField_c = 0;
                 }
             });

         } else {
             if ($('#userFirstName').val() == '' || $('#userFirstName').val() == null) {
                 $('.inputError[for="userFirstName"]').show();
                 userFirstName = 1;

             } else {
                 userFirstName = 0;
             }

             if ($('#userLastName').val() == '' || $('#userLastName').val() == null) {
                 $('.inputError[for="userLastName"]').show();
                 userLastName = 1;
             } else {
                 userLastName = 0;
             }

             $('#LoginRegisterModal4 .inputField').each(function() {
                 var forType = $(this).attr('id');
                 if ($(this).val() == '' || $(this).val() == null) {
                     $('.inputError[for="' + forType + '"]').show();
                     inputField = 1;
                 } else {
                     inputField = 0;
                 }
             });


         }

         var mailValidation = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

         if (!$('#userEmailS').val().match(mailValidation)) {
             $('#userEmailSalert').show();
             $('#userEmailexist').hide();
             userEmailS = 1;
         } else {
             $.ajax({
                 type: 'POST',
                 url: '{{route("email-check")}}',
                 data: {
                     _token: "{{ csrf_token() }}",
                     email: email
                 },
                 success: function(msg) {
                     if (msg == 1) {
                         $('#userEmailexist').show();
                         $('#userEmailSalert').hide();
                         userEmailS = 1;
                     } else {
                         $('#userEmailexist').hide();
                         $('#userEmailSalert').hide();
                         userEmailS = 0;
                     }
                 }
             });
         }

         // Password check validation
         var passwordCheck = checksPassword();
         if (passwordCheck == false) {
             password = 1;
             $('.spassword_error').show();

         } else {
             password = 0;
             $('.spassword_error').hide();

         }

         if ($('.terms_and_conditions').prop('checked') == false) {
             $('#terms_and_conditions_checkbox').show();
             terms_and_conditions = 1;
         }

         if ($('#userType').val() == "Professional" && (password == 1 || userCompanyName == 1 || inputField_c == 1 || userEmailS == 1 || terms_and_conditions == 1)) {
             return false;
         } else if ($('#userType').val() == "Private" && (password == 1 || userFirstName == 1 || inputField == 1 || userEmailS == 1 || terms_and_conditions == 1)) {
             return false;
         } else {

             $('#registerEmail').val($('#userEmailS').val());
             $('#LoginRegisterModal4').modal('hide');
             $('#registerFirstName').val($('#userFirstName').val());
             $('#registerLastName').val($('#userLastName').val());
             $('#registerCompanyName').val($('#userCompanyName').val());
             $('#registerAddress').val($('.formated_address_first').val());
             $('#registerSiretNumber').val($('#userSiretNumber').val());
             $('#registerPhoneNumber').val($('#userPhoneNumber').val());
             $('#registerPassword').val($('#userPassword').val());
             $('#registerLat').val($('#lat').val());
             $('#registerLng').val($('#lng').val());
             if ($('#continueWith').val() == 'continueWithPhone') {
                 $('#LoginRegisterModal7').modal('show');
             } else {
                 $('#LoginRegisterModal6').modal('show');
             }

             $('.registrationPhoneNumber').val($('#userPhoneNumber').val());

         }
     });


     $('#registerModal5Continuebtn').click(function() {


         $('.inputError').hide();
         if ($('#userPhoneNumber1').val() == '' || $('#userPhoneNumber1').val() == undefined) {
             $('.inputError[for="userPhoneNumber1"]').show();
         } else {
             $('#LoginRegisterModal6').modal('hide');
             $('#registerCountrySelect').val($('#userCountrySelect').val());
             $('#registerPhoneNumber1').val($('#userPhoneNumber1').val());
             $('#registerSendCodeViaSMS').val($('#userSendCodeViaSMS').val());
             $('#LoginRegisterModal7').modal('show');
         }



     });

     $('#registerModal6Continuebtn').click(function() {
         $('#registrationForm').submit();
     });



     $('.continueWithPhone').click(function() {

         $('#lastModal').val('LoginRegisterModal1');
         $('#continueWith').val('continueWithPhone');
         if ($('.registrationPhoneNumber').val() != '') {

             var phone_number = $('.registrationPhoneNumber').val();


             var pre_phone_number = $('.registrationPhoneNumber').val();
             var registrationCountrySelect = $('.registrationCountrySelect').val();
             phone_number = registrationCountrySelect + '' + phone_number;

             $('#userPhoneNumber').val(pre_phone_number);
             $('#registerPhoneNumberCode').val(registrationCountrySelect);




             $.ajax({
                 type: 'POST',
                 url: '{{route("phone_number_check")}}',
                 data: {
                     _token: "{{ csrf_token() }}",
                     phone_number: phone_number,
                     pre_phone_number: pre_phone_number
                 },
                 success: function(msg) {

                     if (msg == 1) {
                         $('#registrationPhoneNumberAlert').html('* Phone Number Exists');
                         $('#registrationPhoneNumberAlert').show();
                     } else {


                         $('#LoginRegisterModal1').modal('hide');
                         $('#LoginRegisterModal3').modal('show');
                         $('.registrationPhoneNumberAlert').hide();
                         $('#twillio_code_verification').show();

                         $.ajax({
                             type: 'POST',
                             url: '{{route("send-twillio-code")}}',
                             data: {
                                 _token: "{{ csrf_token() }}",
                                 phone_number: phone_number
                             },
                             success: function(msg) {

                                 if (msg == 1) {
                                     $('#twillio_code_verification').show();
                                     $('#phoneNumbersent').html(phone_number);
                                     $('#wentwrongtwillio').hide();
                                     $('#notmatchedsendedphoneNumberAlert').hide();
                                 } else {
                                     $('#wentwrongtwillio').show();
                                     $('#notmatchedsendedphoneNumberAlert').html(msg);
                                     $('#notmatchedsendedphoneNumberAlert').show();
                                 }
                             }
                         });



                     }
                 }
             });






         } else {
             $('.registrationPhoneNumberAlert').show();

             var code = -1;
             $('.email_Number_code').each(function() {
                 if (code == -1) {
                     code = $(this).val();
                 } else {
                     code = code + '' + $(this).val();
                 }

             });

             var userEmail = $('#userEmail').val();
             userEmail = userEmail;

             $.ajax({
                 type: 'POST',
                 url: '{{route("verify-email-code")}}',
                 data: {
                     _token: "{{ csrf_token() }}",
                     userEmail: userEmail,
                     code,
                     code
                 },
                 success: function(msg) {
                     if (msg == 1) {
                         $('.registrationPhoneNumberAlert').show();
                     } else {
                         $('#notmatchedsendedemailAlert').show();
                         $('#matchedsendedemailAlert').hide();
                     }
                 }
             });




         }

     });


     $(".phone_Number_code").keyup(function() {
         if (this.value.length == this.maxLength) {
             $(this).next('.phone_Number_code').focus();
         }
     });

     $(".email_Number_code").keyup(function() {
         if (this.value.length == this.maxLength) {
             $(this).next('.email_Number_code').focus();
         }
     });


     $('#phone_Number_code_verify').click(function() {


         /*                for testing*/

         /*$('#notmatchedsendedphoneNumberAlert').hide();
                                         $('#LoginRegisterModal3').modal('hide');
                                         $('#matchedsendedphoneNumberAlert').show();
                                         $('#LoginRegisterModal4').modal('show');   */

         /*                    for testing*/

         var code = -1;
         $('.phone_Number_code').each(function() {
             if (code == -1) {
                 code = $(this).val();
             } else {
                 code = code + '' + $(this).val();
             }

         });

         var phone_number = $('.registrationPhoneNumber').val();
         $('#userPhoneNumber').val(phone_number);
         var registrationCountrySelect = $('.registrationCountrySelect').val();
         phone_number = registrationCountrySelect + '' + phone_number;

         $.ajax({
             type: 'POST',
             url: '{{route("verify-twillio-code")}}',
             data: {
                 _token: "{{ csrf_token() }}",
                 phone_number: phone_number,
                 code,
                 code
             },
             success: function(msg) {
                 if (msg == 1) {
                     $('#notmatchedsendedphoneNumberAlert').hide();
                     $('#LoginRegisterModal3').modal('hide');
                     $('#matchedsendedphoneNumberAlert').show();
                     $('#LoginRegisterModal4').modal('show');
                 } else {
                     $('#notmatchedsendedphoneNumberAlert').show();
                     $('#matchedsendedphoneNumberAlert').hide();
                 }
             }
         });

     });
 </script>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js" integrity="sha512-DNeDhsl+FWnx5B1EQzsayHMyP6Xl/Mg+vcnFPXGNjUZrW28hQaa1+A4qL9M+AiOMmkAhKAWYHh1a+t6qxthzUw==" crossorigin="anonymous"></script>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js" integrity="sha512-BNZ1x39RMH+UYylOW419beaGO0wqdSkO7pi1rYDYco9OL3uvXaC/GTqA5O4CVK2j4K9ZkoDNSSHVkEQKkgwdiw==" crossorigin="anonymous"></script>



 <script>
     /*            var input = document.querySelector("#registrationPhoneNumber");
            window.intlTelInput(input, {
                separateDialCode: true,
                initialCountry:"FR",
                customPlaceholder: function (
                    selectedCountryPlaceholder,
                    selectedCountryData
                ) {
                    return "e.g. " + selectedCountryPlaceholder;
                },
            });*/

     $('.continueWithEmail').click(function() {

         if ($('#userEmail').val() == '') {
             $('#userEmailalert').show();
             $('#userEmailalert').html('* Email is required');
         } else {


             var mailValidation = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;


             if ($('#userEmail').val().match(mailValidation)) {
                 $('#userEmailalert').hide();
             } else {
                 $('#userEmailalert').show();
                 $('#userEmailalert').html('* Enter valid email');
                 return false;
             }

             var email = $('#userEmail').val();
             $('#userEmailS').val(email);
             $.ajax({
                 type: 'POST',
                 url: '{{route("email-check")}}',
                 data: {
                     _token: "{{ csrf_token() }}",
                     email: email
                 },
                 success: function(msg) {
                     if (msg == 1) {
                         $('#userEmailalert').html('Email Exists!');
                         $('#userEmailalert').show();


                     } else {

                         $('#registerEmail').val($('#userEmail').val());
                         $('#LoginRegisterModal2').modal('hide');
                         $('#LoginRegisterModal4').modal('show');
                         $('#lastModal').val('LoginRegisterModal2');
                         $('#continueWith').val('continueWithEmail');

                     }
                 }
             });



         }



         /*              
                         if($('#userEmail').val()==''){
                             $('#userEmailalert').show();
                             $('#userEmailalert').html('Email is required');
                         }else{
                             $('#userEmailalert').hide();
                             var email = $('#userEmail').val();
                              $.ajax({
                                 type:'POST',
                                 url:'{{route("email-Verification-opt")}}',
                                 data:{_token: "{{ csrf_token() }}",email:email
                                 },
                                 success: function( msg ) {
                                     if(msg==1){
                                         $('#LoginRegisterModal2').modal('hide');
                                         $('#LoginRegisterModal4').modal('show');

                                     }else{
                                         $('#userEmailalert').html('Something went wrong');
                                         $('#userEmailalert').show();
                                     }
                                 }
                             });



                         }*/

     });

     $('.reloadModal').click(function() {

         /*var close_target = $(this).data('close_target');
         var open_target = $(this).data('open_target');
         
         $('#'+close_target).modal('hide');    
         $('#'+open_target).modal('show');*/

         $('.modal').modal('hide');
         $('#' + $('#lastModal').val()).modal('show');

     });


     $('#registerModal5Continuebtn').click(function() {
         $('#LoginRegisterModal6').modal('hide');
         $('#LoginRegisterModal7').modal('show');
     });

     $('#skipMobileRegistration').click(function() {
         $('#LoginRegisterModal6').modal('hide');
         $('#LoginRegisterModal7').modal('show');
     });

     $('#LoginRegisterModal6btn').click(function() {
         $('#LoginRegisterModal5').modal('hide');
         if ($('#continueWith').val() == 'continueWithPhone') {
             $('#LoginRegisterModal6').modal('hide');
             $('#LoginRegisterModal7').modal('show');
         } else {
             $('#LoginRegisterModal6').modal('show');
         }

     });
 </script>


 <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBikMgCY_d1NwtVzeM4mIviqZBBDrAFEko&callback=initMap&libraries=places&v=weekly&channel=2" async></script>


 <script type="text/javascript">
     // This example requires the Places library. Include the libraries=places
     // parameter when you first load the API. For example:
     // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
     var map;

     function initMap() {
         map = new google.maps.Map(document.getElementById("map"), {
             center: {
                 lat: 40.749933,
                 lng: -73.98633
             },
             zoom: 13,
             mapTypeControl: false,
         });

         const myLatlng = {
             lat: -25.363,
             lng: 131.044
         };

         const card = document.getElementById("pac-card");
         const input = document.getElementById("pac-input");
         const biasInputElement = document.getElementById("use-location-bias");
         const strictBoundsInputElement = document.getElementById("use-strict-bounds");
         const options = {
             componentRestrictions: {
                 country: "tn"
             },
             fields: ["formatted_address", "geometry", "name"],
             strictBounds: false,
             types: ["establishment"],
         };

         map.controls[google.maps.ControlPosition.TOP_LEFT].push(card);

         const autocomplete = new google.maps.places.Autocomplete(input, options);

         // Bind the map's bounds (viewport) property to the autocomplete object,
         // so that the autocomplete requests use the current map bounds for the
         // bounds option in the request.
         autocomplete.bindTo("bounds", map);

         const infowindow = new google.maps.InfoWindow();
         const infowindowContent = document.getElementById("infowindow-content");

         infowindow.setContent(infowindowContent);

         const marker = new google.maps.Marker({
             map,
             anchorPoint: new google.maps.Point(0, -29),
         });

         autocomplete.addListener("place_changed", () => {
             infowindow.close();
             marker.setVisible(false);

             const place = autocomplete.getPlace();

             $('#lat').val(place.geometry.location.lat());
             $('#lng').val(place.geometry.location.lng());
             if (!place.geometry || !place.geometry.location) {
                 // User entered the name of a Place that was not suggested and
                 // pressed the Enter key, or the Place Details request failed.
                 window.alert("No details available for input: '" + place.name + "'");
                 return;
             }

             // If the place has a geometry, then present it on a map.
             if (place.geometry.viewport) {
                 map.fitBounds(place.geometry.viewport);
             } else {
                 map.setCenter(place.geometry.location);
                 map.setZoom(17);
             }

             marker.setPosition(place.geometry.location);
             marker.setVisible(true);
             infowindowContent.children["place-name"].textContent = place.name;
             infowindowContent.children["place-address"].textContent =
                 place.formatted_address;
             infowindow.open(map, marker);
         });

         // Sets a listener on a radio button to change the filter type on Places
         // Autocomplete.
         function setupClickListener(id, types) {
             const radioButton = document.getElementById(id);

             radioButton.addEventListener("click", () => {
                 autocomplete.setTypes(types);
                 input.value = "";
             });
         }




         let infoWindow = new google.maps.InfoWindow({
             content: "Click the map to get Lat/Lng!",
             position: myLatlng,
         });

         infoWindow.open(map);
         // Configure the click listener.
         map.addListener("click", (mapsMouseEvent) => {
             // Close the current InfoWindow.
             infoWindow.close();
             // Create a new InfoWindow.

             infoWindow = new google.maps.InfoWindow({
                 position: mapsMouseEvent.latLng,
             });

             geocoder = new google.maps.Geocoder();
             google.maps.event.addListener(map, 'click', function(event) {
                 geocoder.geocode({
                     'latLng': event.latLng
                 }, function(results, status) {
                     if (status == google.maps.GeocoderStatus.OK) {
                         if (results[0]) {
                             $('#formated_address').val(results[0].formatted_address);
                             infoWindow.setContent(
                                 JSON.stringify(results[0].formatted_address, null, 2)
                             );
                             infoWindow.open(map);
                         }
                     }
                 });
             });

             document.getElementById('lat').value = mapsMouseEvent.latLng
                 .lat();
             document.getElementById('lng').value = mapsMouseEvent.latLng
                 .lng();

         });





         setupClickListener("changetype-all", []);
         setupClickListener("changetype-address", ["address"]);
         setupClickListener("changetype-establishment", ["establishment"]);
         setupClickListener("changetype-geocode", ["geocode"]);
         setupClickListener("changetype-cities", ["(cities)"]);
         setupClickListener("changetype-regions", ["(regions)"]);
         biasInputElement.addEventListener("change", () => {
             if (biasInputElement.checked) {
                 autocomplete.bindTo("bounds", map);
             } else {
                 // User wants to turn off location bias, so three things need to happen:
                 // 1. Unbind from map
                 // 2. Reset the bounds to whole world
                 // 3. Uncheck the strict bounds checkbox UI (which also disables strict bounds)
                 autocomplete.unbind("bounds");
                 autocomplete.setBounds({
                     east: 180,
                     west: -180,
                     north: 90,
                     south: -90
                 });
                 strictBoundsInputElement.checked = biasInputElement.checked;
             }

             input.value = "";
         });
         strictBoundsInputElement.addEventListener("change", () => {
             autocomplete.setOptions({
                 strictBounds: strictBoundsInputElement.checked,
             });
             if (strictBoundsInputElement.checked) {
                 biasInputElement.checked = strictBoundsInputElement.checked;
                 autocomplete.bindTo("bounds", map);
             }

             input.value = "";
         });
     }




     var wellCircle;
     var marker

     function getLocation() {

         if (navigator.geolocation) {
             navigator.geolocation.getCurrentPosition(showPosition);
         }
     }

     function showPosition(position) {
         lat = position.coords.latitude;
         lng = position.coords.longitude;
         marker = new google.maps.Marker({
             position: {
                 lat: lat,
                 lng: lng
             },
             map
         });

         $('#lat').val(lat);

         $('#lng').val(lng);
         console.log(lat, lng);
         map.setCenter(marker.getPosition());


         wellCircle = new google.maps.Circle({
             strokeColor: '#FF0000',
             strokeOpacity: 0.8,
             strokeWeight: 2,
             fillColor: '#FF0000',
             fillOpacity: 0.35,
             map: map,
             center: new google.maps.LatLng(marker.getPosition()),
             radius: 1000 * 0.621371,
         });

     }

     $(window).on('load', function() {
         getLocation();

     })

     function validate(evt) {
         var theEvent = evt || window.event;

         // Handle paste
         if (theEvent.type === 'paste') {
             key = event.clipboardData.getData('text/plain');
         } else {
             // Handle key press
             var key = theEvent.keyCode || theEvent.which;
             key = String.fromCharCode(key);
         }
         var regex = /[0-9]|\./;
         if (!regex.test(key)) {
             theEvent.returnValue = false;
             if (theEvent.preventDefault) theEvent.preventDefault();
         }
     }

     function checksPassword() {

         var password = $('#userPassword').val();
         var pattern = /^.*(?=.{6,9})(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%&!-_]).*$/;

         var valid_password = isValid(password);
         console.log(valid_password);
         if (valid_password == false) {
             $(".spassword_error").show();
             return false;
         } else if (password.length < 5) {
             $(".spassword_error").show();
             return false;
         } else if (password.length == 0) {
             $(".spassword_error").hide();
             return false;
         } else if (!pattern.test(password)) {
             $(".spassword_error").show();
             return false;
         } else if (password.length < 5) {
             $(".spassword_error").show();
             return false;
         } else {

             $(".spassword_error").hide();
             return true;

         }




     }


     function isValid(str) {
         console.log(str);
         var iChars = "~`!#$%^&*+=-[]\\\';,/{}|\":<>?@()|\\//.";

         for (var i = 0; i < str.length; i++) {
             if (iChars.indexOf(str.charAt(i)) != -1) {
                 return true;
             }
         }
         return false;
     }


     function checksLoginPassword() {

         var password = $('#exampleInputPassword3').val();
         var pattern = /^.*(?=.{6,9})(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%&!-_]).*$/;

         if (password.length != 9) {
             $(".spassword_error_login").show();
             $('#login_btn').prop('disabled', true);
             return false;
         } else {
             $(".spassword_error_login").hide();
             $('#login_btn').prop('disabled', false);
             return true;

         }

         if (password.length == 0) {
             $(".spassword_error_login").hide();
             $('#login_btn').prop('disabled', true);
             return false;

         }


         if (!pattern.test(password)) {
             $(".spassword_error_login").show();
             $('#login_btn').prop('disabled', true);
             return false;

         } else {
             $(".spassword_error_login").hide();
             $('#login_btn').prop('disabled', false);
             return true;

         }



         if (password.length != 9) {
             $(".spassword_error_login").show();
             $('#login_btn').prop('disabled', true);
             return false;
         } else {
             $(".spassword_error_login").hide();
             $('#login_btn').prop('disabled', false);
             return true;
         }

         if (password.length == 0) {
             $(".spassword_error_login").hide();
             $('#login_btn').prop('disabled', true);
             return false;
         }

     }

     function Modal4input6(uid) {

         if ($('#' + uid).attr('type') == 'text') {
             $('#' + uid).attr('type', 'password');
         } else {
             $('#' + uid).attr('type', 'text');
         }

     }

     function onlyAlpha(event) {
         var value = String.fromCharCode(event.which);
         var pattern = new RegExp(/[a-zåäö ]/i);
         return pattern.test(value);
     }

     $('.alpha_type').bind('keypress', onlyAlpha);
     $('.phone_Number_code').keyup(function(e) {
         if (e.keyCode == 8) $(this).prev('.phone_Number_code').focus();
     })

     $('#Register-MView').click(function() {

         $('.modal input').val('');
         $('.modal tel').val('');
     });


     $('modal').on('shown.bs.modal', function() {
         $(".modal-backdrop.in").hide();
     })
     toastr.options = {
  "debug": false,
  "positionClass": "toast-bottom-right",
  "onclick": null,
  "fadeIn": 300,
  "fadeOut": 1000,
  "timeOut": 5000,
  "extendedTimeOut": 1000
}
     $('#login_btn').click(function() {

        var email = $('#emailLogin').val();
        var password = $('#passwordLogin').val();
        var va_email, va_password = 0;

        if(email.length == 0)
        {
            $('#semail_error_require').show();
            va_email = 1;
        } else {
            $('#semail_error_require').hide();
            va_email = 0;
            var mailValidation = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            let isnum = /^\d+$/.test(email);
            if(isnum)
            {
                va_email = 0;
            } else if (!$('#emailLogin').val().match(mailValidation)) { 
                $('#semail_error_require').text('* Please enter valid email');
                $('#semail_error_require').show();
                va_email = 1;
            } else {
                $('#semail_error_require').hide();
                va_email = 0;
            }
        }
       
        if(password.length == 0)
        {
            $('#spassword_error_require').show();
            va_password = 1;
        } else {
            $('#spassword_error_require').hide();
            va_password = 0;
        }
        if(va_email == 0 && va_password == 0)
        {
            $.ajax({
                type: 'POST',
                url: '{{route("userLogin")}}',
                data: {
                    _token: "{{ csrf_token() }}",
                    email: email,
                    password:password
                },
                success: function(msg) {
                    if(msg.login == 0)
                    {
                        toastr.error(msg.msg)
                    } else if(msg.login == 1) {
                        window.location.href = "{{ route('user_categories')}}";
                    } else {
                        window.location.href = "{{ route('admin-home')}}";
                    }
                    
                }
            });
        }
     });
 </script>

 @include('sweet::alert')