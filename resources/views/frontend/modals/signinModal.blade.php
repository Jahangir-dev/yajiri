<div class="modal fade" id="LoginRegisterModal1" tabindex="-1" aria-labelledby="LoginRegisterModal1Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title" id="LoginRegisterModal1Label">Login or registration</p>
                </div>
                <div class="modal-body">
                    <p class="MBText1"><b>Welcome to Ya jari</b></p>
                    <div class="form-group">
                        <select id="registrationCountrySelect" class="FCselect1 form-select registrationCountrySelect">
                            <option value="+33">
                                France (+33)
                            </option>
                            <option value="+92">
                                Pakistan (For Testing) (+92)
                            </option>

                              <option selected value="+216">
                                Tunisia (+216)
                            </option>
                        </select>
                    </div>
                    <div class="form-group">

                        <div class="input-group mb-3">
                            
                               <input type="tel" id="registrationPhoneNumber" pattern="[0-9]+" class="FCinput1 form-control registrationPhoneNumber" placeholder="Telephone Number e.g (12 345 678)" aria-label="Telephone Number" aria-describedby="basic-addon1">
                               <!--   -->

                            <span class="col-md-12 registrationPhoneNumberAlert" id="registrationPhoneNumberAlert" style="display:none;color:red;font-size:12px;"><small style="color:red">* This field is required</small></span>
                        </div>
                    </div>
                    <div class="LRM1Button row">
                        <a role="button" id="continueWithPhone" class="continueWithPhone" style="text-decoration:none !important">
                            <p style="color: white;margin-top: 10px;">Continue</p>
                        </a>
                    </div>
                    <div class="row d-flex">
                        <div class="col">
                            <hr>
                        </div>
                        <div class="col-1 text-center">
                            <p class="OrText">Or</p>
                        </div>
                        <div class="col">
                            <hr>
                        </div>
                    </div>
                    <div class="LRMmobileB row">
                        <div class="col-3">
                            <img src="{{asset('theme/icons/ic_mail_outline_24pxblack.png')}}" style="padding-top: 0.3rem;;margin-top: 10px;">
                        </div>
                        <div class="col-9">
                            <a role="button" data-bs-target="#LoginRegisterModal2" data-bs-toggle="modal" data-bs-dismiss="modal">
                                <p style="margin-top: 10px;">Continue with Email</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="margin: auto;border: none;">
                    <div class="row">
                        <img src="{{asset('theme/icons/yajari-removebg-preview.png')}}">
                    </div>
                </div>
            </div>
        </div>
    </div>