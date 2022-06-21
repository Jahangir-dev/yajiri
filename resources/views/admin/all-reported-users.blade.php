@extends('template.partials.default')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="section-header-breadcrumb-content">
                        <h1>All Reported users</h1>
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
                                        <th>User</th>
                                        <th>Reported Message</th>
                                        <th>Reported</th>
                                        <th>Created At</th>
                                    </tr>
                                    @php $i=1
                                    @endphp
                                    @foreach($reports as $rep)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$rep->user->name }}</td>
                                        <td>{{$rep->reason }}</td>
                                        <td>{{$rep->reporter->name }}</td>
                                        <td>{{date('d/m/Y', strtotime($rep->created_at)) }}</td>
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
@endsection