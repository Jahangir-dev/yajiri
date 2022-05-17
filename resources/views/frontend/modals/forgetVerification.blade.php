<div class="modal fade" id="forgetVerificationModal" data-bs-keyboard="false" tabindex="-1" aria-labelledby="forgetVerificationModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="MHmodel3 modal-header row">
                        <div class="col-3 col-sm-3">
                            <button type="button" data-bs-dismiss="modal" data-close_target="LoginRegisterModal3" data-open_target="LoginRegisterModal1" aria-label="Close" style="background-color: white;border: none;" class="reloadModal">
                                <img class="model-img1" src="{{asset('theme/icons/ic_keyboard_arrow_right_24Blackpx.png')}}">
                            </button>
                        </div>
                        <div class="col-9 col-sm-9">
                            <p class="modal-title text-start" id="forgetVerificationModalLabel">Confirm Email or Phone Number</p>
                        </div>
                    </div>
                    <div class="Modal3Body modal-body">
                        <span id="sendedphoneNumberAlert" style="color:green;font-size: 11px;">Verification code has been sent <span id="phoneNumbersent"></span></span>
                        <p class="Moda3Text1">Enter the code </p>
                        <div class="Modal3IputDIV d-flex">
                            <input type="text"  onkeypress='validate(event)' style="text-align:center;" autofocus="1" size="1" maxlength="1" class="phone_Number_code code_field Model3input form-control" placeholder="1" aria-label="1">
                            <input type="text"  onkeypress='validate(event)' style="text-align:center;" size="1" maxlength="1" class="phone_Number_code code_field Model3input form-control" placeholder="2" aria-label="2">
                            <input type="text"  onkeypress='validate(event)' style="text-align:center;" size="1" maxlength="1" class="phone_Number_code code_field Model3input form-control" placeholder="3" aria-label="3">
                            <input type="text"  onkeypress='validate(event)' style="text-align:center;" size="1" maxlength="1" class="phone_Number_code code_field Model3input form-control" placeholder="4" aria-label="4">
                            <input type="text"  onkeypress='validate(event)' style="text-align:center;" size="1" maxlength="1" class="phone_Number_code code_field Model3input form-control" placeholder="5" aria-label="5">
                            <input type="text"  onkeypress='validate(event)' style="text-align:center;" size="1" maxlength="1" class="phone_Number_code code_field Model3input form-control" placeholder="6" aria-label="6">
                        </div>
                        <div id="invalid-code" class="errors">
                                </div>
                        <!-- <span id="notmatchedsendedphoneNumberAlert" style="color:red;font-size: 11px;display: none;">Verification doesnot match</span> <span id="matchedsendedphoneNumberAlert" style="color:green;font-size: 11px;display: none;">Verification matched</span>                         -->
                    </div>
                    <div class="row LRM1Button" style="width:30%;">
                       
                            <a  role="button" style="text-decoration:none" id="forget_verify_submit">
                                <p style="color: white;margin-top: 10px;cursor: pointer;">Continue</p>
                            </a>
                       
                        
                    </div>
                    <div class="Modal3footer modal-footer">
                        <div class="row">
                            <div class="col-8 col-sm-7 text-end">
                                <p class="Modal3Ftext">Did not receive any code?</p>
                            </div>
                            <div class="col-4 col-sm-5">
                                <a style="cursor: pointer;" class="continueWithPhone">
                                    <p class="Modal3Ftext" ><b>Send again</b></p>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <img class="MFImg" src="{{asset('theme/icons/yajari-removebg-preview.png')}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>