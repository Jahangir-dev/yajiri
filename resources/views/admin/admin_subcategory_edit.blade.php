@extends('template.partials.default')
@section('content')
<div class="main-content">
  <section class="section">
  <div class="section-header">
      <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
          <div class="section-header-breadcrumb-content">
            <h1>SubCategory Edit</h1>
          </div>
        </div>
        
      </div>
    </div>


    <div class="row">
      
      <div class="col-12 col-md-8 col-lg-8">
        <div class="card">
         <form method="POST" action="{{route('admin-subcategory-update')}}">
         @csrf   
         <input type="hidden" name="id" class="form-control" value="{{$edit->id}}">
          <div class="card-body">
            <div class="form-group">
              <label>Category Name:</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  
                </div>
                <select class="form-control" name="category_id">
                  <option value="{{Null}}">Choose</option>
                  @foreach($category as $c)
                  <option value="{{$c->id}}" {{ ( $c->id == $edit->category_id) ? 'selected' : '' }}  >{{$c->name}}</option>
                  @endforeach()
                </select>
              </div>
            </div>
            <div class="form-group">
              <label>SubCategory Name:</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  
                </div>
                <input type="text" name="subcategory_name" value="{{$edit->subcategory_name}}" class="form-control">
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