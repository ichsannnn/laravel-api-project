@extends('app')@section('title')Country @endsection @section('content') <section class="main-content">

<div class="content-wrap">

<div class="wrapper">

<div class="row">

<div class="col-md-12"> <section class="panel no-b">

<div class="panel-body">

<div class="table-responsive">
  <table class="striped">
          <thead>
            <tr>
                <th>No</th>
                <th>Country Id</th>
                <th>Country Name</th>
                <th>Country Area Code</th>
            </tr>
          </thead>

          <tbody>
            @foreach($data as $key => $row)
              <tr>
                <td>{{$key+1}}
                </td>
                <td>{{$row->country_id}}
                </td>
                <td>{{$row->country_name}}
                </td>
                <td>{{$row->country_areacode}}
                </td>
              </tr> @endforeach
          </tbody>
        </table>
</div>
</div> </section>
</div>
</div>
</div>
</div> <a class="exit-offscreen"></a> </section>@endsection
