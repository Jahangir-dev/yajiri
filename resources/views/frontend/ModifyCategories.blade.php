<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('theme/css/ModifyCategoriesStyle.css')}}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <title>ya jari</title>
        <style type="text/css">
        .form-group {
        margin-bottom: 15px
        }
        .navpublish {
        width: auto;
        }
        @media all and (min-width: 1300px) {

        .socialicon {
        transform: translateX(75%);
        }
        .followus {
        position: relative;
        left: 285px;
        top: -50px;
        }
        }
        @media all and (min-width: 1440px) {
        .ViewProfileButton {
        color: white;
        font-size: 14px;
        padding: 0.3rem 1rem;
        background: linear-gradient(to right, #ff89a4, #ff0b44);
        border-radius: 5px;
        position: relative;
        left: -22px;
        }
        }
        @media all and (min-width: 1590px) {
        .socialicon {
        transform: translateX(88%);
        }
        .followus {
        position: relative;
        left: 328px;
        top: -50px;
        }
        .sideicon {
        padding-top: 0px;
        }
        .MPItext1 {
        font-size: 30px;
        font-weight: bolder;
        padding-top: 10px;
        }
        .ViewProfileButton {
        position: relative;
        left: -35px;
        }
        }
        @media all and (min-width: 1920px) {
        .sideicon {
        padding-top: 15px;
        }
        .MPItext1 {
        font-size: 30px;
        font-weight: bolder;
        padding-top: 20px;
        }
        .ViewProfileButton {
        position: relative;
        left: -45px;
        }
        }
        .selected_div{
            background-color: #da5e77 !important;
            color: white !important;
        }

         .selected_category{

            background-color: #ffbac8 !important;

        }
        </style>
    </head>
    <body style="zoom:90%">
        <!--Nav Bar-->
        @if(Auth::user())
    @include('frontend.layout.navbar2')
@else
@include('frontend.layout.navbar')
@endif
        <!--Show Case-->
        <section class="text-center pt-3">
            <div class="container-fluid text-light">
                <div class="background-image row" style="background-image: url(theme/pictures/Group\ 3.png);">
                    <div class="col-4 col-xxl-5 col-lg-4 col-md-3 col-sm-4 text-end">
                        <img src="{{asset('theme/icons/Path -1.png')}}" class="sideicon">
                    </div>
                    <div class="col-8 col-xxl-7 col-lg-8 col-md-8 col-sm-8 text-start">
                        <p class="MPItext1">Modify Account Settings</p>
                    </div>
                </div>
            </div>
        </section>
        <!--Modify Categories-->
        <section class="py-3">
        <div class="CCDIVcontainer container">
            <div class="row py-4">
                <div class="col-2 col-sm-2 text-end">
                    <img class="CCDIVimg" src="{{asset('theme/icons/Subtraction 17.png')}}">
                </div>
                <div class="col-10 col-sm-10 text-start">
                    <p class="ChoseCText1">Choose the list of the category that you are going to offer as a private
                        person:</p>
                    <p class="ChoseCText2">Choose the list of the category that you are going to offer as a private:</p>
                </div>
            </div>
            <div class="ChoseAddEditC row p-2">
                <div class="col-10 col-sm-11">
                    <span id="selected_category_error" style="display: none;color: red;font-size: 15px;">* Select Category</span>
                    <div class="row pt-4">
                    @foreach($category as $c)    
                       @if(in_array($c->id, $my_categories)) 
                        <div style="cursor: pointer;" class="col-12 col-xxl-4 col-lg-6 col-md-7 col-sm-8 " >
                         <a href="{{route('user_categories_remove',['id'=>$c->id])}}"><i class="fa fa-times-circle checked_circle" style="font-size: 20px;float: right;color: #ff0734;display: none;"></i></a>  
                            <p data-id="{{$c->id}}" class="select_cate <?php if(in_array($c->id, $my_categories)) echo '' ?>">{{$c->name}}
                        </p>
                        </div>
                        @endif
                    @endforeach

                    <div style="cursor: pointer;display:none" id="show_add_btn" class="col-12 col-xxl-4 col-lg-6 col-md-7 col-sm-8 " >
                            <button data-toggle="modal" id="showchooseCategoryModal" data-target="#chooseCategoryModal" data-backdrop="false" style="background-color:#bfbabb;color: black;" class="btn btn-default">Add New</button>
                        </div> 
<!--                     <div class="col-12 col-xxl-4 col-lg-6 col-md-7 col-sm-8"><p>Garden Maintenance</p></div>
                    <div class="col-12 col-xxl-4 col-lg-6 col-md-7 col-sm-8"><p>Office Maintenance</p></div>
                    <div class="col-12 col-xxl-3 col-lg-6 col-md-7 col-sm-8"><p>Home Maintenance</p></div>
                    <div class="col-12 col-xxl-3 col-lg-6 col-md-7 col-sm-8"><p>Washroom repair</p></div>
                    <div class="col-12 col-xxl-3 col-lg-5 col-md-7 col-sm-7"><p>Kitchen repair</p></div>
                    <div class="col-12 col-xxl-3 col-lg-5 col-md-6 col-sm-7"><p>Furniture work</p></div> -->
                </div>
                    
                </div>
                <div class="col-2 col-sm-1 text-end">
                    <a href="javascript:void(0)" class="edit_categories">
                    <img src="{{asset('theme/icons/Group 1889.png')}}" style="width: 1.5rem;">
                </a>
                </div>
            </div>
            <div class="ChoseAddEditB row pt-5">
                <div class="col-4 col-sm-5 col-lg-4 text-start">
                    

                    <div class="form-button2 row">
                        <a>
                            <p>
                               
                                Cancel</p>
                        </a>
                    </div>
                </div>
                <div class="col-4 col-sm-2 col-lg-4">

                </div>
                <div class="col-4 col-sm-5 col-lg-4 text-end">
                    <div class="CCButton row">

                        <a role="button" href="#" id="submit_form">
                            <p style="color: white;">Continue</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <form method="post" action="{{route('user_save_categories')}}" id="selected_category_form">
    @csrf
    <input type="hidden" name="selected_category" id="selected_category">
</form>
        @include('frontend.modals.chooseCategory')
        @include('frontend.layout.footer')

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        @include('frontend.layout.scripts')
    <script type="text/javascript">
        
        $('.select_cate').click(function(){
            $('.select_cate').removeClass('selected_category');    
            $(this).addClass('selected_category');
            var id = $(this).data('id');
            $('#selected_category').val(id);
        });

        $('#submit_form').click(function(){

            if($('#selected_category').val()==''){
                $('#selected_category_error').show();
            }else{
                $('#selected_category_form').submit();                
            }

        });

        $('.edit_categories').click(function(){

            $('.checked_circle').show();
            $('#show_add_btn').show();

        });

        $('#showchooseCategoryModal').click(function(){

            $('#chooseCategoryModal').modal('show');

        });

        $('#save_btn_categories_user').click(function(){
                $('#save_btn_categories_user_form').submit();
        });

    </script>  


    </body>
</html>
