<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('BlueChat.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>ya jari</title>

    <style type="text/css">
        .dot {
            height: 15px;
            width: 15px;
            background-color: green;
            border-radius: 50%;
            display: inline-block;

        }

        @media all and (min-width: 1440px) {
            .chatM2 {
                position: relative;
                left: 8px;
            }

            .chatM3 {
                position: relative;
                left: -10px;
            }

        }

        @media all and (min-width: 1590px) {
            .navalign {
                padding-left: 173px;
                padding-top: 10px;
                color: #ff6e9a;
                font-weight: bold;
                display: inline-flex;
                padding-right: .5rem;
            }

            .chatM2 {
                position: relative;
                left: 5px;
            }

            .chatM3 {
                position: relative;
                left: -20px;
            }

            .ahre {
                padding-left: 2rem;
            }

            .navalign2 {
                padding-left: 390px;
                padding-top: 10px;
                color: #ff6e9a;
                font-weight: bold;
                display: inline-flex;
            }

            .nav-publish {

                padding-left: 20px;
                background: linear-gradient(to right, #ffacbf, #fa4d75);

                color: white;
                border-radius: 20px;
                align-items: center;
                padding-top: 10px;
            }

            .SendMessageButton {
                position: relative;
                top: -45%;
                left: 86%;
            }

        }

        @media all and (min-width: 1920px) {


            .chatM3 {
                position: relative;
                left: -40px;
            }

            .ahre {
                padding-left: 2rem;
            }


            .SendMessageButton {
                position: relative;
                top: -45%;
                left: 87%;
            }

        }

    </style>
</head>

<body class="bg-light">
    <!--Nav Bar-->
    @include('frontend.layout.navbar2')
    <!--Chat-->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-sm-12">
                    <p style="font-size: 20px; font-weight: bolder;">Active Chats</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-12 col-12">
                    <div class="row mb-3">
                        <input class="ChatSearchButton form-control mb-2" type="search" placeholder="Search" aria-label="Search">
                    </div>

                    @foreach($user_list_c as $l)
                    <a href="{{route('chat',['id'=>$l['user']->id])}}" style="text-decoration:none;color: black;">
                    <div class="row mb-2">
                        <div class="card car_heightmobile" style="max-width: 540px;height: 85px;">
                            <div class="row g-0">
                                <div class="col-xxl-2 col-lg-3 col-md-2">
                                    @if($l['user']->image)
                                    <img src="{{asset($l['user']->image)}}" class="CardImg" style="width: 64px;height: 64px;border-radius: 50%;">                                
                                    @else
                                        <img src="https://wise.edu.pk/wp-content/uploads/2021/03/placeholder.png" class="CardImg" style="width: 64px;height: 64px;border-radius: 50%;">
                                    @endif

                                </div>
                                <div class="col-xxl-10 col-lg-9 col-md-10">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xxl-8 col-lg-7 col-md-8">
                                                <p class="chatcardtext1">{{$l['user']->name}}</p>
                                            </div>
                                            <div class="col-xxl-4 col-lg-5 col-md-4 text-end">
                                                <p class="chatcardtext2">{{$l['time']}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                                <p class="chatcardtext3" id="recent_text_message">{{$l['mesageR']}}<i style="display:none">Typing...</i></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

                    @endforeach

                    
                    
                </div>
                <div class="col-md-6 col-sm-12 col-12 mr-l_00">
                    <div class="LookingForMoveRow1 row" style="position: relative;">
                        <p class="chattext1">Looking for a move</p>
                        <p class="chattext2">{{$user->aboutme}}</p>
                        <a class="ChatViewRequestButton" href="ViewRequest.html">
                            <img src="{{asset('icons/blueeyes.png')}}" alt="">
                        </a>
                    </div>
                    <div class="LookingForMoveRow2 row">
                       @if($id!='all')
                        <div class="ChatMessagesRow row pt-5">
                            @foreach($auth_user_chat as $c)

                            @if($c->user_id == Auth::user()->id)
                            <div class="row" style="padding:10px;">
                                <div class="col-xxl-11 col-lg-9 col-md-10 text-end">

                                    <p><span class="chatM2">{{$c->message}}</span></p>

                                </div>
                                @php

                                    if(isset($c->from_user->image)){
                                        $image = asset($c->from_user->image);
                                    }else{
                                        $image = 'https://wise.edu.pk/wp-content/uploads/2021/03/placeholder.png';
                                    }    

                                @endphp
                                <div class="col-xxl-1 col-lg-3 col-md-2 text-end">
                                    <a href="javascript:void(0)"> <img alt="{{$image}}" src="{{$image}}" style="width:44px;height: 44px;border-radius: 50%;"></a>
                                </div>
                            </div>
                            @else

                            @php

                                    if(isset($user->image)){
                                        $image = asset($user->image);
                                    }else{
                                        $image = 'https://wise.edu.pk/wp-content/uploads/2021/03/placeholder.png';
                                    }    

                                @endphp

                            <div class="row" style="padding:10px;">
                                <div class="col-xxl-2 col-lg-3 col-md-2 text-start">
                                    <a href="javascript:void(0)"> <img alt="{{$image}}" src="{{$image}}" style="width:44px;height: 44px;border-radius: 50%;"></a>
                                </div>
                                <div class="col-xxl-10 col-lg-9 col-md-10 text-start">
                                    <p class="chatM3">{{$c->message}}</p>


                                </div>
                            </div>
                            @endif
                            @endforeach

                        </div>
                        <div class="row" style="display: block; height: 8rem;">
                            <p class="Chattext3" id="typingDiv" style="display: none;">Franky is typing…</p>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter your message here">
                            <a href="javascript:void(0)" onclick="sendMessage()" class="SendMessageButton">
                                <img src="{{asset('icons/blueicon.png')}}">
                            </a>
                        </div>
                        @else

                        <div class="ChatMessagesRow row pt-5" style="overflow:hidden;">

                            <div class="row" style="text-align: center;">
                                <h4>Select user to start conversation</h4>
                            </div>
                        </div>

                        @endif
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 col-12">
                    <div class="row">
                        <div class="onlineCard card" style="max-width: 540px;height: 115px;">
                            <div class="row g-0">
                                <div class="col-md-3 col-sm-4 col-4">
                                    <a href="javascript:void(0)"> 
                                    @if(isset($l) && $l['user']->image)
                                    <img src="{{asset($l['user']->image)}}" class="CardImg" style="width: 64px;height: 64px;border-radius: 50%;">                                
                                        <img src="https://wise.edu.pk/wp-content/uploads/2021/03/placeholder.png" class="CardImg" style="width: 64px;height: 64px;margin-top: 1rem;border-radius: 50%;">
                                                                            @else
                                        <img src="https://wise.edu.pk/wp-content/uploads/2021/03/placeholder.png" class="CardImg" style="width: 64px;height: 64px;margin-top: 1rem;border-radius: 50%;">
                                    @endif

                                    </a>
                                    <span class="dot dotgreen"></span>
                                </div>
                                <div class="col-md-9 col-sm-8 col-8">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                <p class="chatcardtext1">{{$user->first_name}}{{$user->last_name}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                <p style="color: #08c8f9;font-weight: 500;margin-left: 0.7rem;margin-bottom: 0;margin-top: 0.5rem;">
                                                {{$user->services}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ReviewRow row" style="position: relative;">
                        <div class="row mb-2">
                            <div class="col d-flex">
                                <img src="{{asset('icons/ic_place_-8.png')}}" style="width: 1rem; height: 1.5rem;">
                                <p class="ReviewText1">{{$user->address}}</p>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col d-flex">
                                <img src="{{asset('icons/Group 2411.png')}}" style="width: 7rem; height: 1rem; margin-top: 0.15rem;">
                                <p class="ReviewText1"><b>4.5</b></p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col d-flex">
                                <img src="{{asset('icons/ic_date_range_-1.png')}}" style="width: 1rem; height: 1.2rem;">
                                <p class="ReviewText1">{{$user->created_at->diffForHumans()}}</p>
                            </div>
                        </div>
                        <div class="row mb-4">

                        </div>
                        <div class="row">
                           
                            <a href="{{route('LeaveReviewBlue',[ 'id' => $id])}}" style="background: linear-gradient(to right,#9bd6e2,#21beea);
                                        background: linear-gradient(to right,#9bd6e2,#21beea);
                                        border: none;
                                        width: 200px;
                                        height: 40px;
                                        font-size: 14px;
                                        
                                        border-radius: 8px;
                                        color: white;
                                        padding: 8px 10px;"><img src="{{asset('icons/whitestar.png')}}" style="    position: relative;
                                        top: -2px;
                                        padding-inline: 5px;" alt="">Leave your review</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container" style="width: 80%;">
            <div class="row" style="margin: auto;">
                <img src="{{asset('icons/yajari-removebg-preview-1.png')}}" style="width: auto;
                            height: auto;
                            margin: auto;
                            opacity: .30;">
            </div>
        </div>
    </section>
    <!--Modal 2 Report-->
    <section>
        <div class="modal fade" id="staticBackdropReport" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropReportLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="col text-center mb-3">
                            <img src="{{asset('icons/Icon ionic-md-warning.png')}}" style="width: 3rem;">
                        </div>
                        <p class="MBText2 text-center mt-4">Are you sure to want to report this request ?
                        </p>
                        <div class="row pt-3">
                            <div class="col text-center mt-4">
                                <a href="" class="NoButton">No</a>
                            </div>
                            <div class="col text-center mt-4">
                                <a href="" data-bs-toggle="modal" data-bs-target="#staticBackdropReport2" data-bs-dismiss="modal" class="YesButton">Yes</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="modal fade" id="staticBackdropReport2" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropReport2Label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-body ReportModalBody">
                        <div class="col text-center mb-3">
                            <img src="{{asset('icons/Icon ionic-md-warning.png')}}" style="width: 3rem;">
                        </div>
                        <p class="MBText2 text-center mt-4">Give a valid reason to report this user.
                        </p>
                        <textarea class="form-control" aria-label="With textarea" rows="5" placeholder="Give a valid reason to report this user."></textarea>
                        <div class="row pt-5">
                            <div class="text-center">
                                <a href="" class="YesButton">Report</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Footer-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pusher/7.0.6/pusher.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
    

     var pusher = new Pusher('{{env("MIX_PUSHER_APP_KEY")}}', {
      cluster: '{{env("PUSHER_APP_CLUSTER")}}',
      encrypted: true
    });

    var channel = pusher.subscribe('notification-send');
    channel.bind('App\\Events\\NotificationEvent', function(data) {
        
        var x;    
        if(data.to_user_id=='{{Auth::user()->id}}'){
            x = `<div class="row" style="padding:10px;">
                                <div class="col-xxl-2 col-lg-3 col-md-2 text-start">
                                    <a href="javascript:void(0)"> <img style="width:44px;height: 44px;border-radius: 50%;" src="{{asset($user->image)}}" style="width: 3rem;"></a>
                                </div>
                                <div class="col-xxl-10 col-lg-9 col-md-10 text-start">
                                    <p class="chatM3">`+data.message+`</p>


                                </div>
                            </div>`;

        }else{
            x = `<div class="row" style="padding:10px;">
                                <div class="col-xxl-11 col-lg-9 col-md-10 text-end">
                                    <p><span class="chatM2">`+data.message+`</span></p>
                                </div>
                                <div class="col-xxl-1 col-lg-3 col-md-2 text-end">
                                    <a href="javascript:void(0)"> <img style="width:44px;height: 44px;border-radius: 50%;" src="{{asset(Auth::user()->image)}}" style="width: 3rem;"></a>
                                </div>
                            </div>`;
        }


        $('#recent_text_message').html(data.message);
        $('.ChatMessagesRow').append(x);    
        $('.ChatMessagesRow').scrollTop($('.ChatMessagesRow')[0].scrollHeight);
    });

    function sendMessage(){

    text = $('#exampleFormControlInput1').val();
    user_id = '{{$id}}';    
    $.ajax({
                type:'POST',
                url:'{{route("sendMessage")}}',
                data:{_token: "{{ csrf_token() }}",msg:text,user_id,user_id,
                },
                success: function( msg ) {

                    $('#exampleFormControlInput1').val('');

                }
            });

    }


    $(document).ready(function(){
        $('.ChatMessagesRow').scrollTop($('.ChatMessagesRow')[0].scrollHeight);
    })

</script>

</body>

</html>
@include('sweetalert::alert')