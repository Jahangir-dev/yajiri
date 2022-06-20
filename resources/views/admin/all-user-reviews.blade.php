@extends('template.partials.default')
@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
          <div class="section-header-breadcrumb-content">
            <h1>All Service Provider Reviews</h1>
          </div>
        </div>
        
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
                  <th>Service Provider</th>
                  <th>Review By</th>
                  <th>Review</th>
                  <th>Rating (Stars)</th>
                  <th>Created At</th>
                  <!-- <th>Action</th> -->
                </tr>
                @php $i=1
                @endphp
               @foreach($reviews as $review)
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{$review->service_provider->name }}</td>
                  <td>{{$review->user->name }}</td>
                  <td>{{$review->review }}</td>
                  <td>{{$review->rating }}</td>
                  <td>{{date('d/m/Y', strtotime($review->created_at)) }}</td>
                  {{-- <td>
                    <div class="dropdown d-inline">
                      <button class="btn btn-outline-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Action
                      </button>
                      <div class="dropdown-menu">
                      <a class="dropdown-item has-icon" href="{{route('admin-status-edit',['id'=>$status->id])}}"><i class="far fa-user"></i> Edit</a>
                      <a class="dropdown-item has-icon" href="{{route('admin-status-delete', ['id'=>$status->id] )}}"><i class="fas fa-times"></i> Delete</a>
                        
                      </div>
                    </div>
                  </td> --}}
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