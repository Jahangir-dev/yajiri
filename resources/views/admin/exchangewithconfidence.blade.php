@extends('template.partials.default')
@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
          <div class="section-header-breadcrumb-content">
            <h1>Status</h1>
          </div>
        </div>
        
      </div>
    </div>
    <div class="row" style="margin:0px;">
      <div class="col-12">
        <a href="{{route('exchangewithconfidence_add')}}" class="btn btn-dark" style="margin-bottom:20px;float: right;">Add New Status</a>
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
                  <th>Title</th>
                  <th>Description</th>
                  <th>File</th>
                  <th>Created At</th>
                  <th>Action</th>
                </tr>
                @php $i=1
                @endphp
               @foreach($exchange as $life)
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{$life->title }}</td>
                  <td>{{$life->description }}</td>
                  <td><img src="../{{$life->file }}" style="width:10rem;height:10rem"></td>
                  <td>{{$life->created_at }}</td>
                  <td>
                    <div class="dropdown d-inline">
                      <button class="btn btn-outline-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Action
                      </button>
                      <div class="dropdown-menu">
                      <a class="dropdown-item has-icon" href="{{route('exchangewithconfidence_edit',   ['id'=>$life->id])}}"><i class="far fa-user"></i> Edit</a>
                      <a class="dropdown-item has-icon" href="{{route('exchangewithconfidence_delete', ['id'=>$life->id] )}}"><i class="fas fa-times"></i> Delete</a>
                      </div>
                    </div>
                  </td>
                </tr>
                @endforeach
                
                
                
                
              </tbody></table>
              
            </div>
          </div>
          
        </div>
      </div>
      
      
    </div>
  </section>
</div>
@endsection()