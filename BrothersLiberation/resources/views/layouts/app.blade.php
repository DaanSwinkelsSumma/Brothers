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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/yourcode.js"></script>

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
                        <a class="nav-link textcolor" href="/galerij">Galerij</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link textcolor" href="/agenda">Agenda</a>
                    </li>
                    @if(getenv('WEBSHOP_STATUS') == 1)
                      <li class="nav-item">
                          <a class="nav-link textcolor" href="/webshop">Webshop</a>
                      </li>
                    @endif
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

        <main class="py-4" id="page-content" style="  position: relative; min-height: 100vh;">
            @yield('content')
            <!-- Footer -->
            <br>
            <footer class="page-footer font-small special-color-dark pt-4">
            <br><br>
            <!-- Footer Elements -->
            <div class="container-fluid" style="padding:0;">
                <div id="hrline"></div>  
                <br>

              <!-- Social buttons -->
              <ul class="list-unstyled list-inline text-center">
                <li class="list-inline-item">
                  <a href="https://www.instagram.com/brothersofliberation/" class="btn-floating btn-fb mx-1">
                      <img src="{{ asset('img/instagram.png') }}" class="img-fluid" id="insta" height="50px" width="50px">
                    </a>
                </li>
              </ul>

            </div>
            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2019 Copyright</div>
            <!-- Copyright -->

          </footer>
          <!-- Footer -->
        </main>
        
    </div>

</body>
</html>
