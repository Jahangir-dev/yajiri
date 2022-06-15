<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.3.1/flatly/bootstrap.min.css">
    <script src="https://use.fontawesome.com/5ac93d4ca8.js"></script>
    <script src="{{asset('bootstrap4-rating-input.js')}}"></script>
    <link rel="stylesheet" href="{{asset('LeaveReviewStyle.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>ya jari</title>
    <style type="text/css">
.rating-input .fa{
    font-size: 25px;
    padding: 5px;
    cursor: pointer;
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
            

            
            .navalign2{
            padding-left: 730px;
            padding-top: 10px;
            color: #ff6e9a;
            font-weight: bold;
            display: inline-flex;
            }
            .nav-publish{
            
            padding-left: 20px;
            background:linear-gradient(to right,#ffacbf,#fa4d75);
            
            color: white;
            border-radius: 20px;
            align-items: center;
            padding-top: 10px;
            }
            




}
 @media all and (min-width: 1920px) {

.navalign {
    padding-left: 173px;
    padding-top: 10px;
    color: #ff6e9a;
    font-weight: bold;
    display: inline-flex;
    padding-right: .5rem;
}





 }

            </style>
</head>

<body style="zoom:90%">

    <!--Nav Bar-->

    @include('frontend.layout.navbar2')


    <!--Leave Review-->

    <section class="LeaveReviewSection">
        <div class="ReviewContainer">
        <form action="{{route('save_serviceprovider')}}" method="post">
                @csrf
            <div class="row">
                <img src="{{asset('icons/reviewblue.png')}}" class="ReviewImg1">
                <p class="ReviewText1">Leave a review here</p>
            </div>
            <div class="row mb-3" style="margin-top: 1rem;">
                <div class="col d-flex" style="justify-content: center;">
                <input type="number" name="rating" id="rating1" class="rating text-warning" data-clearable="remove"/>
                    <!-- <img src="{{asset('icons/Group 2411.png')}}" class="ReviewImg2">
                    <p>4.5</p> -->
                </div>
            </div>
            
            <div class="row">
                <input type="hidden" name="serviceproviderid" value="{{$id}}">
                <input type="hidden" name="userid" value="@if(Auth::user()){{Auth::user()->id}}@endif">
                <textarea class="form-control" name="review" aria-label="With textarea"  placeholder="Describe your experience with the seller" rows="3"></textarea>
            </div>
            <div class="row">
                <button  type="submit" class="PostReviewButton">Post Review</button>
            </div>
            </form>
        </div>

    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
        <!-- <script src="{{asset('bootstrap4-rating-input.js')}}"></script> -->
</body>

</html>
@include('sweetalert::alert')