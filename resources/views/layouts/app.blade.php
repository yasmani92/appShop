<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <title>
    App-Shop
  </title>
  
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="{{ asset('css/nucleo-icons.css') }}"  rel="stylesheet"/>
  <link href="{{ asset('css/nucleo-svg.css')}}"  rel="stylesheet"/>
  <!-- Font Awesome Icons -->
  <link href="{{ asset('css/font-awesome.css') }}"  rel="stylesheet"/>
  <link href="{{ asset('css/nucleo-svg.css') }}"  rel="stylesheet"/>
  <!-- CSS Files -->
  <link href="{{ asset('css/argon-design-system.css?v=1.2.2') }}"  rel="stylesheet"/>

@yield('styles')


</head>

<body class="@yield('body-class')">
  <!-- Navbar -->
  <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light py-2 ">
    <div class="container">
      <a class="navbar-brand mr-lg-5" href="{{url('/')}}">
        AppShop
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse collapse" id="navbar_global">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="{{ url('/')}}">
                Appshop
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>                
        <ul class="navbar-nav align-items-lg-center ml-lg-auto">
          @guest
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Ingresar') }}</a>
              </li>
              @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">{{ __('Registro') }}</a>
                  </li>
              @endif
          @else
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <ul>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    @if (auth()->user()->admin) 
                    <li>
                      <a class="dropdown-item" href="{{ url('/admin/products') }}">Gestionar Productos</a>
                    </li>
                    @endif
                    <li>
                      
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Desconectarse') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
                    </li>
                  </ul>
              </li>
          @endguest



          
        </ul>
      </div>
    </div>
  </nav>

  <!-- End Navbar -->

<div>
  @yield('content')
</div>


  @include('layouts.footer')

  
  </body>

</html>