<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbarcustom textcolor" >
                <a class="navbar-brand textcolor" href="{{ url('/') }}" style="color:white">
                    <img alt="BOL Logo" src="{{ asset('img/brothersofliberation.png') }}" class="img-fluid" id="BOllogo">
                </a>        
            
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item ">
                      <a class="nav-link textcolor" href="/leden ">Leden</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link textcolor" href="#">Link</a>
                    </li>
                  </ul>
                  @guest
                  <li class="nav-item">
                      <a style="color:white" class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>
                  {{-- @if (Route::has('register'))
                      <li class="nav-item">
                          <a style="color:white" class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                      </li>
                  @endif --}}
              @else
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle textcolor" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>

                      <div class="dropdown-menu dropdown-menu-right textcolor" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/home">
                           Dashboard
                         </a>
                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                      </div>
                  </li>
              @endguest
                </div>
              </nav>

        <main class="py-4" id="page-content">
            @yield('content')
        </main>
    </div>
    {{-- <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
            <div class="container text-center">
              <small>Copyright &copy; Your Website</small>
            </div>
          </footer> --}}
</body>
</html>
