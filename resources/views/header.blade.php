<header class="header header-fixed navbar">
    <div class="brand">
        <a href="javascript:;" class="ti-menu off-left visible-xs" data-toggle="offscreen" data-move="ltr"></a>
        <a href="{{ url('dashboard') }}" class="navbar-brand"> <img src="{{ asset('assets/img') }}/wilogo.png" alt=""> <span class="heading-font">BelajarAPI</span> </a>
    </div>
    <ul class="nav navbar-nav navbar-right">

        @if(Auth::check())
          <li class="off-right"> <a href="javascript:;" data-toggle="dropdown"><span class="hidden-xs ml10">Currency</span> <i class="ti-angle-down ti-caret hidden-xs"></i> </a>
            <ul class="dropdown-menu animated fadeInRight">
              <li> <a href="{{ url('cronGetCurrency') }}">Get Data</a> </li>
              <li> <a href="{{ url('master/currency') }}">View Data</a> </li>
            </ul>
          </li>
          <li class="off-right"> <a href="javascript:;" data-toggle="dropdown"><span class="hidden-xs ml10">Language</span> <i class="ti-angle-down ti-caret hidden-xs"></i> </a>
            <ul class="dropdown-menu animated fadeInRight">
              <li> <a href="{{ url('cronGetLanguage') }}">Get Data</a> </li>
              <li> <a href="{{ url('master/language') }}">View Data</a> </li>
            </ul>
          </li>
          <li class="off-right"> <a href="javascript:;" data-toggle="dropdown"><span class="hidden-xs ml10">Country</span> <i class="ti-angle-down ti-caret hidden-xs"></i> </a>
            <ul class="dropdown-menu animated fadeInRight">
              <li> <a href="{{ url('cronGetCountry') }}">Get Data</a> </li>
              <li> <a href="{{ url('master/country') }}">View Data</a> </li>
            </ul>
          </li>
          <li class="off-right"> <a href="javascript:;" data-toggle="dropdown"><span class="hidden-xs ml10">Airport</span> <i class="ti-angle-down ti-caret hidden-xs"></i> </a>
            <ul class="dropdown-menu animated fadeInRight">
              <li> <a href="{{ url('cronGetAirport') }}">Get Data</a> </li>
              <li> <a href="{{ url('master/airport') }}">View Data</a> </li>
            </ul>
          </li>
          <li class="off-right"> <a href="javascript:;" data-toggle="dropdown"><img src="{{ asset('assets/img/profile/default.jpg') }}" class="header-avatar img-circle" alt="user" title="user"> <span class="hidden-xs ml10">@if(Auth::check()){{Auth::user()->name}}@endif</span> <i class="ti-angle-down ti-caret hidden-xs"></i> </a>
            <ul class="dropdown-menu animated fadeInRight">
              <li> <a href="{{ url('auth/logout') }}">Logout</a> </li>
            </ul>
          </li>
        @endif
    </ul>
</header>
