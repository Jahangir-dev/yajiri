<div class="modal fade" id="LoginRegisterModal8" tabindex="-1" aria-labelledby="LoginRegisterModal8Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title" id="LoginRegisterModal8Label">{{__('messages.sign_in')}}</p>
                </div>
                <div class="modal-body" style="padding-top: 1rem;">
                    <p class="MBText1"><b>{{__('messages.welcome_to_ya_jari')}}</b></p>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <input type="text" required id="emailLogin" class="form-control"  name="email" placeholder="{{__('messages.telephone_number_or_email_address')}}" style="height: 3rem;border-radius: 10px 10px 10px 10px;">
                            <span class="error_message semail_error_require" id="semail_error_require" style="display: none;font-size: 10px;color: red;">* Email or phone number required</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <input type="text" id="passwordLogin" oninput="this.type='password'" required class="form-control" name="password" onkeyup="//checksLoginPassword()" id="exampleInputPassword3" placeholder="{{__('messages.password')}}" style="height: 3rem;border-radius: 10px 10px 10px 10px;">
                                <div class="input-group-addon">
                                    <a href="javascript:void(0)" onclick="Modal4input6('exampleInputPassword3')"><img class="passwordEye" src="{{asset('theme/icons/ic_visibility_off_24px.png')}}" style="position:relative; top: -2.2rem;left: 85%;width: 1.2rem;"></a>
                                <span class="error_message spassword_error_require" id="spassword_error_require" style="display: none;font-size: 10px;color: red;">* Password required</span>
                            </div>
                            <span class="error_message spassword_error_login" style="display: none;font-size: 10px;color: red;">* {{__('messages.password_must_include_1_upper_case_letter_1_special_character_and_length_must_be_less_than_10_characters')}}</span>                                
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <a data-bs-toggle="modal" role="button" href="#forget-modal" style="float: right;" class="nav-item nav-link">Forget Password</a>
                        </div>
                    </div>

                    <div class="LRM1Button row">
                        <a role="button" id="login_btn" style="background-color: #f31c5d;
    border-radius: 10px;
    border: none;">
                            <p style="color: white;margin-top: 10px;">{{__('messages.continue')}}</p>
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