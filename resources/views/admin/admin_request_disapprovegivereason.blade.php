@extends('template.partials.default')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="section-header-breadcrumb-content">
                        <h1>Add New Status</h1>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">

            <div class="col-12 col-md-8 col-lg-8">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <div class="card">
                    <form method="POST" action="{{route('admin-request-disapprove',[ $id ])}}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label>Give Reason to Disapprove to the this user :</label>
                                <div class="input-group">
                                    
                                   
                                        <textarea class="form-control" name="disapprovereason"
                                            placeholder="Leave a comment here" id="floatingTextarea2"
                                            style="height: 400px"></textarea>
                                       
                                    
                                </div>
                            </div>





                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary" style="float: right;">Save</button>
                                </div>
                            </div>





                        </div>
                    </form>
                </div>


            </div>

        </div>
    </section>
</div>
@endsection()
