@extends('template.partials.default')
@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
          <div class="section-header-breadcrumb-content">
            <h1>Publish Request  List</h1>
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
                <tbody>
                  <tr>
                  <th>#</th>
                  <th>Request Title</th>
                  <th>Category</th>
                  <th>Sub Category</th>
                  <th>Location</th>
                  <th>Price</th>
                  <th>Description</th>
                  <th >Status</th>
                  <th>Action</th>
                </tr>
             @php $i=1
             @endphp
                @foreach($publishrequest as $p)
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{$p->request_title}}</td>
                  <td>{{isset($p->category_rel)?$p->category_rel->name:''}}</td>
                  <td>{{$p->sub_category}}</td>
                  <td>{{$p->position}}</td>
                  <td>{{$p->price}}</td>
                  <td>{{$p->description}}</td>
                  <td>@if($p->status==0)<button class="btn btn-dark">Pending</button>@elseif($p->status==1)<button class="btn btn-primary">Request Approved</button>@elseif($p->status==-1)<button class="btn btn-danger" style="background-color:#f32347!important">Request DisApproved</button>@endif</td>
                  
                  <td><div class="dropdown d-inline">
                      <button class="btn btn-outline-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Action
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item has-icon" href="{{route('admin-request-approve',['id'=>$p->id])}}"><i class="far fa-user"></i> Approve</a>
                        
                        <a class="dropdown-item has-icon" href="{{route('admin_request_disapproe_givereason',['id'=>$p->id])}}"><i class="far fa-user"></i> DisApprove</a>
                      <!--
                        <a class="dropdown-item has-icon" href="{{route('admin-request-disapprove',['id'=>$p->id])}}"><i class="far fa-user"></i> DisApprove</a>
-->
                          <a class="dropdown-item has-icon" href="{{route('admin-publish-request-delete',['id'=>$p->id])}}"><i class="fas fa-times"></i> Delete</a>
                        
                      </div>
                    </div></td>
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