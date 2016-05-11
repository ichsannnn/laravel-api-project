@extends('app')

@section('title')
  Airport
@endsection

@section('content')
  <section class="main-content">
    <div class="content-wrap">
      <div class="wrapper">
        <div class="row">
          <div class="col-md-12">
            <section class="panel no-b">
              <div class="panel-body">
                <div class="table-responsive">
                  <table class="striped">
                          <thead>
                            <tr>
                                <th>No</th>
                                <th>Airport Name</th>
                                <th>Location</th>
                                <th>Country</th>
                            </tr>
                          </thead>

                          <tbody>
                            @foreach($data as $key => $row)
                              <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$row->airport_name}} ({{$row->airport_code}})</td>
                                <td>{{$row->location_name}}</td>
                                <td>{{$row->country_name}}</td>
                              </tr>
                            @endforeach
                          </tbody>
                        </table>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>
    <a class="exit-offscreen"></a>
  </section>
@endsection
