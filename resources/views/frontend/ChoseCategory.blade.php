<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('theme/css/ChoseCategoryStyle.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>ya jari</title>

    <style type="text/css">
        
        .selected_category{

            background-color: #ffbac8 !important;

        }

    </style>
</head>

<body style="zoom:90%">

    <!--Nav Bar-->

    <nav class="navbar navbar-expand-xl navbar-light fixed-top"
        style="background-color: white;box-shadow: 0px 2px 5px #acacac;">
        <div class="container" style="display: block;">
            <div class="row">
                <div class="col">
                </div>
                <div class="col text-center">
                    <a class="navbar-brand" href="#">
                        <img class="yajari-removebg-preview-1" src="{{asset('theme/icons/yajari-removebg-preview-1.png')}}">
                    </a>
                </div>
                <div class="col text-end">
                    <div class="CCdropdown dropdown">
                        <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{asset('theme/icons/1280px-Flag_of_France.svg.png')}}" alt="">
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="#">English</a></li>
                            <li><a class="dropdown-item" href="#">French</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!--Show Case-->

    <section class="pt-4 text-center">
        <div class="CCcontainer container text-light">
            <div class="background-image text-center row">
                <div class="col col-sm-3">
                    <img class="CCimg1" src="{{asset('theme/icons/Group 1916.png')}}">
                </div>
                <div class="col col-sm-6 text-center">
                    <p class="CCShowtext1" style="color:black">Choose categories</p>
                </div>
                <div class="col col-sm-3">
                    <img class="CCimg2" src="{{asset('theme/icons/Group 1916.png')}}">
                </div>
            </div>
        </div>
    </section>


    <!--Chose Category-->

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
                        <div style="cursor: pointer;" class="col-12 col-xxl-4 col-lg-6 col-md-7 col-sm-8" ><p data-id="{{$c->id}}" class="select_cate">{{$c->name}}</p></div>
                    @endforeach
<!--                     <div class="col-12 col-xxl-4 col-lg-6 col-md-7 col-sm-8"><p>Garden Maintenance</p></div>
                    <div class="col-12 col-xxl-4 col-lg-6 col-md-7 col-sm-8"><p>Office Maintenance</p></div>
                    <div class="col-12 col-xxl-3 col-lg-6 col-md-7 col-sm-8"><p>Home Maintenance</p></div>
                    <div class="col-12 col-xxl-3 col-lg-6 col-md-7 col-sm-8"><p>Washroom repair</p></div>
                    <div class="col-12 col-xxl-3 col-lg-5 col-md-7 col-sm-7"><p>Kitchen repair</p></div>
                    <div class="col-12 col-xxl-3 col-lg-5 col-md-6 col-sm-7"><p>Furniture work</p></div> -->
                </div>
                    
                </div>
                <div class="col-2 col-sm-1 text-end">
                   <!--  <a href="EditCategory.html">
                    <img src="{{asset('theme/icons/Group 1889.png')}}" style="width: 1.5rem;">
                </a> -->
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
    <!--Footer-->

    <section class="py-5">
        <div class="container" style="width: 80%;">
            <div class="row" style="margin: auto;">
                <img src="{{asset('theme/icons/Group 2117.png')}}" style="width: 12rem;height: 2rem;margin: auto;">
            </div>

        </div>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script type="text/javascript">
        
        $('.select_cate').click(function(){

             if($(this).hasClass('selected_category')){
                $(this).removeClass('selected_category');
            }else{
                $(this).addClass('selected_category');                
            }

            var selectedId = [];
            $('.select_cate').each(function(){

                 if($(this).hasClass('selected_category')){

                    selectedId.push($(this).data('id'));

                 }

            })


            $('#selected_category').val(selectedId);
        });

        $('#submit_form').click(function(){

            if($('#selected_category').val()==''){
                $('#selected_category_error').show();
            }else{
                $('#selected_category_form').submit();                
            }



        });

    </script>  

</body>

</html>