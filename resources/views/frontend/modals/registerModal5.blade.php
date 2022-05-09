<div class="modal fade" id="LoginRegisterModal6" tabindex="-1" aria-labelledby="LoginRegisterModal6Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title" id="LoginRegisterModal6Label">Create your profile</p>
                </div>
                <div class="Modal6Body modal-body">
                    <p class="Modal6Text1"><b>Welcome to Ya jari</b></p>
                    <div>
                        <select id="userCountrySelect" class="FCselect1 form-select registrationCountrySelect">
                            <option  value="+33">
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
                    <div class="input-group mb-3">
                        <input type="tel" id="registrationPhoneNumber_2" pattern="[0-9]+" class="FCinput1 form-control registrationPhoneNumber" placeholder="Telephone Number" aria-label="Telephone Number" aria-describedby="basic-addon1" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                               <!--   -->

                            <span class="col-md-12 registrationPhoneNumberAlert" id="registrationPhoneNumberAlert" style="display:none;color:red;font-size:12px;"><small style="color:red">* This field is required</small></span> 

                            <span class="col-md-12" id="wentwrongtwillio" style="display:none"><small style="color:red">* Something went wrong. Please try again</small></span>                       
                    </div>
                    <p class="Modal6Text2">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document</p>
                    <div class="pt-1 mb-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="FieldsetCheck" id="userSendCodeViaSMS" style="height: 1.2rem;">
                            <label class="form-check-label" for="FieldsetCheck">
                                <p class="Modal6Text3" style="padding-top: 0.2rem;">Send Code Through SMS</p>
                            </label>
                        </div>
                    </div>
                    <div class="LRM1Button row">
                        <a role="button" class="" id="registerModal5Continuebtn" style="text-decoration: none;">
                            <p style="color: white;margin-top: 10px;">Continue</p>
                        </a>

                         <a role="button" class="" id="skipMobileRegistration" style="text-decoration: none;">
                            <p style="color: black;margin-top: 10px;">Skip</p>
                        </a>
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