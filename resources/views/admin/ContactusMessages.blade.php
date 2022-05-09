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
        <a href="{{route('easystepstofind_add')}}" class="btn btn-dark" style="margin-bottom:20px;float: right;">Add New Status</a>
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
                  <th>Name</th>
                  <th>Email</th>
                  <th>Subject</th>
                  <th>Description</th>
                  <th>Created At</th>
                  <th>Action</th>
                </tr>
                @php $i=1
                @endphp
               @foreach($contactus as $contact)
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{$contact->name }}</td>
                  <td>{{$contact->email }}</td>
                  <td>{{$contact->subject }}</td>
                  <td>{{$contact->description }}</td>
                  
                  <td>{{$contact->created_at }}</td>
                  <td>
                    <div class="dropdown d-inline">
                      <button class="btn btn-outline-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Action
                      </button>
                      <div class="dropdown-menu">
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