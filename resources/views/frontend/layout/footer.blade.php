<section class="bg-light py-5">
        <div class="container" style="width: 90%;">
            <div class="row f-img " style="padding-top:0rem;">
                <div class="col-lg-3">
                    <img src="{{asset('theme/icons/yajari-removebg-preview-1.png')}}" style="width: 16rem;position: relative;top: -15px;">
                </div>
                <div class="col-lg-9 d-flex pt-5">
                    <p style="font-size: 16px; font-weight: 900;padding-top: 15px;" class="followus">{{__('messages.follow_up')}}:</p>
                    <div class="text-end socialicon">
                        <img src="{{asset('theme/icons/Group 1611.png')}}" class="follow-img">
                        <img src="{{asset('theme/icons/Group 1613.png')}}" class="follow-img">
                        <img src="{{asset('theme/icons/Group 1614.png')}}" class="follow-img">
                        <img src="{{asset('theme/icons/Group 1615.png')}}" class="follow-img">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <p style="font-size: 16px; font-weight:900;"><b>{{__('messages.frequently_asked_question_help')}}</b></p>
                    <div class="row">
                        <a class="btn text-start" style="font-size: 12px; font-weight: bold;">{{__('messages.i_can_t_log_into_my_account')}}</a>
                        <a class="btn text-start" style="font-size: 12px; font-weight: bold;">{{__('messages.i_can_t_register_to_my_account')}}</a>
                        <a class="btn text-start" style="font-size: 12px; font-weight: bold;">{{__('messages.how_to_reset_change_password')}}</a>
                        <a class="btn text-start" style="font-size: 12px; font-weight: bold;">{{__('messages.i_can_t_find_my_password_anymore')}}</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <p style="font-size: 16px; font-weight:900;"><b>{{__('messages.presentation')}}</b></p>
                    <div class="row">
                        <a href="" class="btn text-start" style="font-size: 12px; font-weight: bold;">{{__('messages.who_are_we')}}?</a>
                        <a href="{{route('how-it-works')}}" class="btn text-start" style="font-size: 12px; font-weight: bold;">{{__('messages.how_it_works')}}?</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <p style="font-size: 16px; font-weight:900;"><b>{{__('messages.legal_information')}}</b></p>
                    <div class="row">
                        <a href="{{route('contactus')}}" class="btn text-start" style="font-size: 12px; font-weight: bold;">{{__('messages.contact_us')}}</a>
                        <a class="btn text-start" style="font-size: 12px; font-weight: bold;">{{__('messages.general_conditions_of_sale_and_use')}}</a>
                        <a class="btn text-start" style="font-size: 12px; font-weight: bold;">{{__('messages.confidentiality_and_privacy_policy')}}</a>
                        <a class="btn text-start" style="font-size: 12px; font-weight: bold;">{{__('messages.legal_notice')}}</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <p style="font-size: 16px; font-weight:900;"><b>{{__('messages.our_applications')}}</b></p>
                    <div class="row">
                        <a class="btn text-start" style="font-size: 12px; font-weight: bold;"><img src="{{asset('theme/icons/Group 2387.png')}}" style="width: 10rem;"></a>
                        <a class="btn text-start" style="font-size: 12px; font-weight: bold;"><img src="{{asset('theme/icons/Group 2388.png')}}" style="width: 10rem;"></a>
                    </div>
                </div>
            </div>

    </section>
    @include('sweetalert::alert')
