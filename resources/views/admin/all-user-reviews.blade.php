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
                <tbody>
                  <tr>
                    <th>#</th>
                    <th>Service Provider</th>
                    <th>Review By</th>
                    <th>Review</th>
                    <th>Rating (Stars)</th>
                    <th>Created At</th>
                    <th>Status</th>
                    <th>Action</th>
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
                    <td>
                      @if($review->status)
                      @if($review->status == 2)
                      <label class="badge badge-danger">Rejected</label>
                      @else
                      <label class="badge badge-success">Accepted</label>
                      @endif
                      @else
                      <label class="badge badge-info">Pending</label>
                      @endif
                    </td>
                    <td>
                      @if($review->status != 1)
                      <a style="background-color: #28a745;" class="has-icon btn btn-success" onclick="return confirm('Are you sure to accept this review?')" href="{{route('acceptReview',['id'=>$review->id])}}"><i class="fa fa-check"></i> Accept</a>
                      @endif
                      @if($review->status != 2)
                      <button style="background-color: #c82333;" data-toggle="modal" data-target="#rejectReviewModal" data-id="{{$review->id}}" class="reject-review has-icon btn btn-danger"><i class="fa fa-ban"></i> Reject</button>
                      @endif
                    </td>
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




          </tbody>
          </table>

        </div>
      </div>

    </div>
</div>


</div>
</section>
<!-- Modal -->
<div class="modal fade" id="rejectReviewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form name="reject-review-form" method="POST" action="{{route('rejectReview')}}">
        @csrf
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Reason Note to reject this Review</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body"> <input type="hidden" name="review_id" id="review_id" value="" />
          <textarea name="reject_reason" class="form-control"></textarea>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Continue</button>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  $(document).ready(function() {
    console.log('here in ready function');
    $('.reject-review').on('click', function() {
      console.log($(this).data('id'));
      $('#review_id').val($(this).data('id'));
    });
  });
</script>
@endsection