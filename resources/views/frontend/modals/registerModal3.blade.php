    <style type="text/css">
      
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
#map {
  height: 100%;
}



#infowindow-content .title {
  font-weight: bold;
}

#infowindow-content {
  display: none;
}

#map #infowindow-content {
  display: inline;
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

#title {
  color: #fff;
  background-color: #4d90fe;
  font-size: 25px;
  font-weight: 500;
  padding: 6px 12px;
}
.pac-container {
        z-index: 99999999999 !important;
}

    </style>

<div class="modal fade" id="LoginRegisterModal4" data-bs-keyboard="false" tabindex="-1" aria-labelledby="LoginRegisterModal4Label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="MHmodel3 modal-header row">
                        <div class="col-3 col-sm-4">
                            <button type="button" class="reloadModal" data-bs-dismiss="modal" aria-label="Close" style="background-color: white;border: none;">
                                <img class="model-img1" src="{{asset('theme/icons/ic_keyboard_arrow_right_24Blackpx.png')}}">
                            </button>
                        </div>
                        <div class="col-9 col-sm-8">
                            <p class="modal-title text-startt" id="LoginRegisterModal4Label">Login or registration</p>
                        </div>
                    </div>
                    <div class="Modal4Body modal-body">
                        <p class="MBText1"><b>Welcome to Yajari</b></p>
                        <div class="input-group mb-1">
                            <select class="Modal4select1 form-select form-select-sm purpose inputField"  id="userType" aria-label="Default select example" style="font-size: 12px;border-radius: 10px">
                                <option value="{{Null}}">Choose</option>
                                <option value="Professional">Professional</option>
                                <option selected="selected" value="Private">Private</option>
                            </select>
                            <span class="col-md-12 inputError" for="userType">Type field is required</span>
                        </div>
                        <div class="input-group mb-1 private" style="display:flex;">
                            <input type="text" name="first_name"  class="Modal4input5 form-control alpha_type" placeholder="First Name" id="userFirstName" aria-label="First Name" aria-describedby="basic-addon1">
                            <span class="col-md-12 inputError" for="userFirstName">First name field is required</span>
                        </div>
                        <div class="input-group mb-1 private" style="display:flex;">
                            <input type="text" name="last_name" class="Modal4input2 form-control alpha_type" placeholder="Last Name" id="userLastName" aria-label="Last Name" aria-describedby="basic-addon1">
                            <span class="col-md-12 inputError" for="userLastName">Last name field is required</span>
                        </div>
                        <div class="input-group mb-1 professional" style="display:none;">
                            <input type="text" class="Modal4input1 form-control alpha_type" placeholder="Company Name" id="userCompanyName" aria-label="Company Name" aria-describedby="basic-addon1">
                            <span class="col-md-12 inputError" for="userCompanyName" id="userCompanyNameError">Company Name is required</span>
                        </div>

                        <div class="input-group mb-1" id="pac-card">
                            <div id="pac-container">
                                <input type="text" class="Modal4input3 form-control inputField formated_address_first prof_address" placeholder="Address" id="pac-input" name="formated_address" aria-label="Address" aria-describedby="basic-addon1">
                            </div>

                            <span class="col-md-12 inputError" id="prof_address_error" for="pac-input">Address field is required</span>

                            <div class="pac-card" id="pac-card">

     <!--  <div id="pac-container">
        <input id="pac-input" type="text" placeholder="Enter a location" />
      </div> -->
    </div>


    <div id="map" style="width:0px;height: 0px;"></div>
    <div id="infowindow-content">
      <span id="place-name" class="title"></span><br />
      <span id="place-address"></span>
    </div>

                        </div>
                        <input type="hidden" name="lat" id="lat">
                        <input type="hidden" name="lng" id="lng">

                        <div class="input-group mb-1 professional" style="display:none;">
                            <input type="text" class="Modal4input4 form-control inputField_c" placeholder="SIRET Number" id="userSiretNumber" aria-label="SIRET Number" aria-describedby="basic-addon1" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="13" size="13">
                            <span class="col-md-12 inputError" style="font-size:12px;" for="userSiretNumber">SIRET Number field is required</span>
                        </div>

                        <div class="input-group mb-1">

                            <input type="text" oninput="this.type='email'"  class="form-control inputField" placeholder="Email" id="userEmailS" aria-label="email" aria-describedby="basic-addon1">
                            <span class="col-md-12 inputError" style="font-size:12px;" id="userEmailSalert" for="userEmailS">Enter valid email address</span>
                            <span class="col-md-12 inputError" style="font-size:12px;" id="userEmailexist" for="userEmailS">Email already exist</span>

                        </div>
                        <div class="input-group mb-1">
                            <input type="text" class="Modal4input5 form-control inputField inputTypeNumber" placeholder="Phone Number" id="userPhoneNumber" aria-label="Phone Number" oninput="" aria-describedby="basic-addon1">
                            <span class="col-md-12 inputError" style="font-size:12px;" id="userPhoneNumberAlert" for="userPhoneNumber">Phone Number field is required</span>
                        </div>

<!--                         javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1'); -->
                        <div class="input-group mb-1">

                            

                            <input type="text" oninput="this.type='password'"  class="form-control inputField" onkeyup="checksPassword()" placeholder="Password" id="userPassword" aria-label="password" aria-describedby="basic-addon1">
                            <span class="Modal4input6" onclick="Modal4input6('userPassword')" style="width: 41px;z-index: 9999999999;position: absolute;right: 0;cursor: pointer;"></span>
                            <span class="col-md-12 inputError" style="font-size:12px;" for="userPassword">Password field is required</span>
                            <span class="error_message spassword_error" style="display: none;font-size: 10px;color: red;">* Password must include 1 UPPER CASE letter, 1 special character and minimum 5 characters required</span>
                        </div>
                        <div class="">
                            <div class="form-check">
                                <input class="form-check-input terms_and_conditions" type="checkbox" id="FieldsetCheck" style="height: 1.2rem;">
                                <label class="form-check-label" for="FieldsetCheck">
                                    <p class="Modal4Form-Categoryt1" style="padding-top: 0.2rem;">I accept <a style="color: #F82268;text-decoration: none;" href="">general terms and conditions.</a> </p>
                                </label>
                                <br>
                                <span class="col-md-12 inputError" id="terms_and_conditions_checkbox" for="FieldsetCheck" style="font-size:10px">* Check Terms and Conditions checkbox.</span>                                
                            </div>
                        </div>
                        <div class="pt-1 mb-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="FieldsetCheck" style="height: 1.2rem;">
                                <label class="form-check-label" for="FieldsetCheck">
                                    <p class="Modal4Form-Categoryt1" style="padding-top: 0.2rem;">Receive information from our partners.</p>
                                </label>
                            </div>
                        </div>

                        <div class="LRM1Button row" style="margin-bottom: 0.2rem;">
                            <a role="button" disabled id="registerModal3Continuebtn">
                                <p style="color: white;margin-top: 10px;">Continue</p>
                            </a>
                        </div>
                    </div>
                    <div class="Modal4footer modal-footer">
                        <div class="row" style="margin: auto;">
                            <img class="MFImg" src="{{asset('theme/icons/yajari-removebg-preview.png')}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>