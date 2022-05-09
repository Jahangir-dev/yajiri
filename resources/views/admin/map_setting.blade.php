@extends('template.partials.default')
@section('content')

<div class="main-content">
    <section class="section">
      <div class="section-header">
        <div class="row">
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <div class="section-header-breadcrumb-content">
              <h1>Map Setting</h1>
            </div>
          </div>

        </div>
      </div>
      {{-- <div class="row" style="margin:0px;">
        <div class="col-12">
          <a href="" class="btn btn-dark" style="margin-bottom:20px;float: right;"></a>
        </div>
      </div> --}}
      <div class="row">
        <div class="col-6 col-md-4 col-lg-12">

          <div class="card">
               <div class="card-body">

                <form method="post" action="{{route('store.settings')}}">
                    @csrf
                    <div class="row">
                    <div class="form-group col">
                      <label for="exampleInputEmail1">Latitude</label>
                      <input type="number" name="latitude" class="form-control" id="exampleInputEmail1" aria-describedby="">

                    </div>
                    <div class="form-group col">
                      <label for="exampleInputPassword1">Longitude</label>
                      <input type="number"  name="longitude"  class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="form-group col">
                        <label for="exampleInputPassword1">Distance</label>
                        <input type="number"  name="distance" class="form-control" id="exampleInputPassword1">
                      </div>
                    </div>


                 <button type="submit" class="btn btn-primary">Submit</button>

                </form>

                      </div>
                    </td>
                  </tr>






              </div>
            </div>

          </div>
        </div>


      </div>
    </section>
  </div>


@endsection
