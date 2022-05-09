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
        <div class="card">
         <form method="POST" action="{{route('admin-serviceprovider-update')}}">
         @csrf   
         <input type="hidden" class="form-control" name="id" value="{{ $edit->id}}" required
          <div class="card-body">
            <div class="form-group">
              <label>Name :</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  
                </div>
                <input type="text" class="form-control" name="name" value="{{ $edit->name}}" required>
              </div>
            </div>
            <div class="form-group">
              <label>Description :</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  
                </div>
                <input type="text" class="form-control" name="description" value="{{ $edit->description}}" required>
              </div>
            </div>
            <div class="form-group">
              <label>Date :</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  
                </div>
                <input type="date" class="form-control" name="date" value="{{ $edit->date}}" required>
              </div>
            </div>

            <div class="form-group">
              <label>Location :</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  
                </div>
                <input type="text" class="form-control" name="location" value="{{ $edit->location}}" required>
              </div>
            </div>

            <div class="form-group">
              <label>Category :</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  
                </div>
                 <select class="form-control" name="category" aria-label="Default select example">
                 <option value="{{ $edit->category}}">{{ $edit->category}}</option>
                @foreach($category as $cate)
                <option value="{{$cate->name}}">{{$cate->name}}</option>
                @endforeach
                
                </select>
              </div>
            </div>
            <div class="form-group">
              <label>Distance :</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  
                </div>
                <input type="text" class="form-control" name="distance" value="{{$edit->distance}}" required>
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