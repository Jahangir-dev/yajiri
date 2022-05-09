@extends('template.partials.default')
@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
          <div class="section-header-breadcrumb-content">
            <h1>User List</h1>
          </div>
        </div>
        
      </div>
    </div>
    <div class="row" style="margin:0px;">
      <div class="col-12">
        <a href="{{route('admin-add-new-user')}}" class="btn btn-dark" style="margin-bottom:20px;float: right;">Add New Category</a>
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
                  <th>Role</th>
                  <th>Status</th>
                  <th>First Name</th>
                  <th>Company Name</th>
                  <th>Email</th>
                  <th>Phone </th>
                  <th>Select Profile</th>
                  <th>Address</th>
                  <th>Phone No</th>
                  <th>Action</th>
                </tr>
                @php $i=1
                @endphp
                @foreach($users as $u)
                <tr>
                  <td>{{$i++}}</td>
                  @switch($u->role_id )
                  @case(1)
                  <td>Admin</td>
                  @break
                  @case(2)
                  <td>User</td>
                  @break
                  @default
                  <td>Something went wrong, please try again</td>
                  @endswitch
                  <td>
                    @if($u->login_status==0)
                    <strong class="btn btn-icon btn-dark"> <i class="fas fa-times"></i></strong>
                    @elseif ($u->login_status==1)
                    <strong class="btn btn-icon btn-success"><i class="fas fa-check"></i></strong>
                    
                    @endif
                  </td>
                  <td>{{$u->first_name}}</td>
                  <td>{{$u->company_name}}</td>
                  <td>{{$u->email}}</td>
                  <td>{{$u->phone_number}}</td>
                  <td>
                    @if($u->registration_type==0)
                    <strong>Null</strong>
                    @elseif ($u->registration_type==1)
                    <strong>Professional</strong>
                    @elseif ($u->registration_type==2)
                    <strong>Private</strong>
                    
                    @endif
                  </td>
                  <td>{{$u->address}}</td>
                  <td>{{$u->phone_number}}</td>
                  <td>
                    <div class="dropdown d-inline">
                      <button class="btn btn-outline-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Action
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item has-icon" href="{{route('admin-user-edit',['id'=>$u->user_id])}}"><i class="far fa-user"></i> Edit</a>
                        <a class="dropdown-item has-icon" href="{{route('admin-user-delete',['id'=>$u->user_id])}}"><i class="fas fa-times"></i> Delete</a>
                        
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