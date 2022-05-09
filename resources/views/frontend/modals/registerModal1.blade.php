<div class="modal fade" id="LoginRegisterModal2" tabindex="-1" aria-labelledby="LoginRegisterModal2Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title" id="LoginRegisterModal2Label">Login or registration</p>
                </div>
                <div class="modal-body">
                    <p class="MBText1"><b>Welcome to Ya jari</b></p>

                        {{csrf_field()}}
                    <div class="input-group mb-3">
                        <input type="email" required name="email" id="userEmail"  class="FCinput2 form-control" placeholder="Email Address" aria-label="Email Address" aria-describedby="basic-addon1">
                        <span class="col-md-12" id="userEmailalert" style="display:none;color:red">* Email field is required</span>
                    </div>
                    <div class="LRM1Button row">
                        <button  type="button" class="continueWithEmail" style="
    background-color: #f35081;
    border: none;
    border-radius: 5px;">
                            <p style="color: white;margin-top: 10px;cursor: pointer;">Continue</p>
                        </button>
                    </div>
                    <div class="row d-flex mb-3">
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
                    <div class="LRMmobileB LRMmobileB1 row">
                        <div class="col-3">
                            <img style="margin-top: 10px;" src="{{asset('theme/icons/ic_phonelink_lock_24pxBlack.png')}}">
                        </div>
                        <div class="col-9">
                            <a role="button" data-bs-target="#LoginRegisterModal1" data-bs-toggle="modal" data-bs-dismiss="modal">
                                <p style="margin-top: 10px;">Continue with Mobile</p>
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