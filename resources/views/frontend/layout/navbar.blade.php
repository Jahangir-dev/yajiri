@include('frontend.layout.useralert')
<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="    background-color: white;
                box-shadow: 0px 2px 5px #acacac;">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">
                <img src="{{asset('theme/icons/yajari-removebg-preview-1.png')}}" class="yajari-removebg-preview-1" alt="Yajiri">
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse" style="margin-left:6%">
                <div class="navbar-nav">
                    <a style=" padding-top: 10px;color: #3B3B3B;font-weight: bold;text-decoration: none;" href="{{route('home')}}" class="nav-item nav-link @yield('sHome')">{{ __('messages.home') }}</a>
                    <a style=" padding-top: 10px;color: #3B3B3B;font-weight: bold;text-decoration: none;" href="{{route('requests')}}" class="nav-item  requestnav @yield('sRequests')">{{ __('messages.requests') }}</a>
                    <a style=" padding-top: 10px;color: #3B3B3B;font-weight: bold;text-decoration: none;" href="{{route('serviceproviders')}}" class="nav-item servicesnav @yield('sServiceProviders')">{{ __('messages.service_providers') }}</a>
                    <a style=" padding-top: 10px;color: white;font-weight: bold;text-decoration: none;" data-bs-toggle="modal" data-bs-backdrop="false" role="button" href="#LoginRegisterModal8"  class="nav-item nav-link navpublish publishnavbar @yield('sPublishRequest')">{{ __('messages.publish_a_requests') }}</a>
                </div>
                @if(Auth::check())
                <div class="navbar-nav ms-auto">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" style=" padding-top: 10px;color: #3B3B3B;font-weight: bold;    padding-right: 40px;" class="nav-item nav-link">{{ __('messages.logout') }}</a>
                </div>

                @else
                <div class="navbar-nav ms-auto">
                    <a data-bs-toggle="modal" role="button" href="#LoginRegisterModal8" style=" padding-top: 10px;color: #3B3B3B;font-weight: bold;padding-right: 20px;" class="nav-item nav-link">{{ __('messages.sign_in') }}</a>
                    <a data-bs-toggle="modal" href="#LoginRegisterModal1" role="button" id="Register-MView" style=" padding-top: 10px;color: #3B3B3B;font-weight: bold;    padding-right: 40px;" class="nav-item nav-link">{{ __('messages.register') }}</a>
                </div>
                @endif
                <div style="margin-left: 20px;">
                                        <div class="dropdown languagesside">
                                            <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <img src="{{asset('theme/icons/1280px-Flag_of_France.svg.png')}}" alt="">
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="right: 32px;position: absolute;right: 0px !important;left: -83px;">
                                                <li><a class="dropdown-item" href="{{route('lang/change',['lang'=>'en'])}}">English</a></li>
                                                <li><a class="dropdown-item" href="{{route('lang/change',['lang'=>'fr'])}}">French</a></li>
                                                <li><a class="dropdown-item" href="{{route('lang/change',['lang'=>'ar'])}}">عربي</a></li>
                                            </ul>
                                        </div>
                                    </div>
            </div>
        </div>
    </nav>

 <form id="logout-form" action="{{ route('logout') }}" method="get" class="d-none">
                                        @csrf
</form>
@include('frontend.layout.loadModal')