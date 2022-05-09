@extends('template.partials.default')
@section('content')
<div class="main-content">
  <section class="section">
     <div class="section-header">
      <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
          <div class="section-header-breadcrumb-content">
            <h1>SubCategory List</h1>
          </div>
        </div>
        
      </div>
    </div>
    <div class="row" style="margin:0px;">
      <div class="col-12"> 
        <a href="{{route('add-new-subcategory')}}" style="float:right;margin-bottom: 20px;" class="btn btn-dark">Add New SubCategory</a>
      </div>
      
    </div>


    <div class="row">
      <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
          
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-md">
                <tbody><tr>
                  <th>#</th>
                  <th>Category Name</th>
                  <th>SubCategory Name</th>
                  <th>Action</th>
                </tr>

                @php $i=1
                @endphp
                @foreach($sub_category as $c)
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{isset($c->subcategory)?$c->subcategory->name:''}}</td>
                  <td>{{$c->subcategory_name}}</td>
                  <td>
                    <div class="dropdown d-inline">
                      <button class="btn btn-outline-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Action
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item has-icon" href="{{route('admin-subcategory-edit',['id'=>$c->id])}}"><i class="far fa-user"></i> Edit</a>
                        <a class="dropdown-item has-icon" href="{{route('admin-subcategory-delete',['id'=>$c->id])}}"><i class="fas fa-times"></i> Delete</a>
                        
                      </div>
                    </div>
                  </td>
                </tr>
                @endforeach()
                
                
                
                
                
              </tbody></table>
              
            </div>
          </div>
          
        </div>
      </div>
      
      
    </div>



  </section>
</div>


@endsection()