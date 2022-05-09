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
         <form method="POST" action="{{route('momentsoflife_add')}}" enctype="multipart/form-data">
         @csrf   
          <div class="card-body">
          <div class="form-group">
              <label>title</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  
                </div>
                <input type="text" class="form-control" name="title" >
              </div>
            </div>
            <div class="form-group">
              <label>File :</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  
                </div>
                <input type="file" class="form-control" name="file" >
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