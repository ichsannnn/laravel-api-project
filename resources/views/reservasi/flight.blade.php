@extends('app_flight')

@section('title')
  Search Flight
@endsection

@section('content')
  <div class="">
    <div class="row">
      <div class="col 12">
        <div class="row">
          <div class="input-field col s6">
            <select name="from" id="from">
              @foreach($airport as $key)
                <option value="{{ $key->airport_code }}">{{ $key->airport_name }} ({{ $key->airport_code }})</option>
              @endforeach
            </select>
            <label>From</label>
          </div>
          <div class="input-field col s6">
            <select name="to" id="to">
              @foreach($airport as $key)
                <option value="{{ $key->airport_code }}">{{ $key->airport_name }} ({{ $key->airport_code }})</option>
              @endforeach
            </select>
            <label>To</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s2">
            <select name="type" id="type">
              <option value="OW">Oneway</option>
              <option value="RT">Roundtrip</option>
            </select>
          </div>
          <div class="input-field col s2">
            <label>Depart Date</label>
            <input type="text" class="for_date" name="depart_date" id="depart_date">
          </div>
          {{-- <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea"></textarea>
          <label for="textarea1">Textarea</label>
        </div> --}}
          <div class="input-field col s2">
            <label for="return_date">Return Date</label>
            <input type="text" disabled class="for_date" name="return_date" id="return_date" >
          </div>
          <div class="input-field col s1">
            <select class="" name="adult" id="adult">
              @for($i=1; $i < 6; $i++)
                <option value="{{$i}}">{{$i}}</option>
              @endfor
            </select>
          </div>
          <div class="input-field col s1">
            <select class="" name="child" id="child">
              @for($i=0; $i < 6; $i++)
                <option value="{{$i}}">{{$i}}</option>
              @endfor
            </select>
          </div>
          <div class="input-field col s1">
            <select class="" name="infant" id="infant">
              @for($i=0; $i < 6; $i++)
                <option value="{{$i}}">{{$i}}</option>
              @endfor
            </select>
          </div>
          <div class="input-field col s3">
            <span class="btn" onclick="search()">Search</span>
          </div>
        </div>

      </div>
    </div>

  </div>
  <div id="result"></div>


@endsection

@section('js')
  <script type="text/javascript">

  function search() {
    $.ajax({
      url: '{{route("ajax_search_flight")}}',
      type: 'POST',
      data: {
        from: $('#from').val(),
        to: $('#to').val(),
        type: $('#type').val(),
        depart_date: $('#depart_date').val(),
        return_date: $('#return_date').val(),
        adult: $('#adult').val(),
        child: $('#child').val(),
        infant: $('#infant').val(),
        _token: '{{csrf_token()}}'
      },
      success: function(data){
        $('#result').html(data);
      }
    })
  }

  $(".for_date").datepicker();
  $(document).ready(function() {
    $('select').material_select();
  });

  $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 50 // Creates a dropdown of 15 years to control year
  });

  $('select[name=type]').change(function() {
    var value = $('select[name=type]').val();

    if (value == "OW") {
      $('#return_date').attr('disabled', true);
    } else {
      $('#return_date').removeAttr('disabled');
    }
  });
  </script>
@endsection
