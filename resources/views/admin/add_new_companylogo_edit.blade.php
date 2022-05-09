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
         <form method="POST" action="{{route('add_new_companylogo_edit_save', [ 'id' => $request->id ])}}" enctype="multipart/form-data">
         @csrf   
          <div class="card-body">
            <div class="row">
              <div class="col-auto">
              <div class="form-group">
              <label>Name :</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  
                </div>
                <input type="file" class="form-control" name="file" value="{{$request->file}}" required>
              </div>
            </div>
              </div>
              <div class="col-auto">
                <img src="../../uploads/{{$request->file}}" style="width:100%">
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