<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
  <title>@yield('title')</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="{{asset('assets/css/materialize.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="{{asset('assets/css/style.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <script src="{{asset('assets/js/jquery.min.js')}}"></script>
  <script type="text/javascript">
  // $.ajaxSetup({
  //   headers: {
  //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  //   }
  // });
  </script>
</head>
<body>

  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="{{url('airline/flight')}}" class="brand-logo">Flight<b>Airline</b></a>
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <h2 class="header center orange-text">@yield('title')</h2>
      @yield('content')
    </div>
  </div>

  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="{{asset('assets/js/materialize.min.js')}}"></script>
  <script src="{{asset('assets/js/init.js')}}"></script>
  @yield('js')
  </body>
</html>
