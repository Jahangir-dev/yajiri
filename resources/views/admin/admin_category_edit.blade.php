@extends('template.partials.default')
@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
          <div class="section-header-breadcrumb-content">
            <h1>Category Update</h1>
          </div>
        </div>
        
      </div>
    </div>
    <div class="row">
      
      <div class="col-12 col-md-8 col-lg-8">
        <div class="card">
          <form method="POST" action="{{route('admin-category-update')}}">
            @csrf
            <input type="hidden" name="id" value="{{$edit->id}}">
            <div class="card-body">
              <div class="form-group">
                <label>Category Name:</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                  </div>
                  <input type="text" class="form-control" value="{{$edit->name}}" name="category_name" required>
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