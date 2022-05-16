<div class="modal fade" id="forgetNewPassword" tabindex="-1" aria-labelledby="forgetNewPasswordLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title" id="forgetNewPasswordLabel">{{__('messages.sign_in')}}</p>
                </div>
                <div class="modal-body" style="padding-top: 1rem;">
                    <p class="MBText1"><b>{{__('messages.welcome_to_ya_jari')}}</b></p>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <input type="password" required class="form-control" id="new_password"  name="password" placeholder="{{__('messages.new_password')}}" style="height: 3rem;border-radius: 10px 10px 10px 10px;">
                            </div>
                        </div>
                    </div>

                    <div class="LRM1Button row">
                        <button type="button" id="send_new_password" style="background-color: #f31c5d;
    border-radius: 10px;
    border: none;">
                            <p style="color: white;margin-top: 10px;">{{__('messages.continue')}}</p>
                        </button>
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