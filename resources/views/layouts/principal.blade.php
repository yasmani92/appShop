<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>AppShop</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        @include('com.styles')
    </head>
    <body class="@yield('body-class')">

<nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light py-2">
    <div class="container">
      <a class="navbar-brand mr-lg-5" href="{{ url('/') }}">
        AppShop
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse collapse" id="navbar_global">
        <div class="navbar-collapse-header">
          <div class="row">
            
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <ul class="navbar-nav align-items-lg-center ml-lg-auto">
          <li class="nav-item">
           @if (Route::has('login'))
                <div class="top-right links">
                    @auth                    
                        <a class="nav-link" data-toggle="tooltip" href="{{ url('/home') }}">{{ __('Perfil') }}</a>
                      </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" data-toggle="tooltip" href="{{ route('login') }}">{{ __('Ingresar') }}</a>
                        </li>
                         @if (Route::has('register'))
                         <li class="nav-item">
                            <a class="nav-link text-uppercase" data-toggle="tooltip" href="{{ route('register') }}">{{ __('Registro') }}</a>
                            </li>
                        @endif
                    @endauth
                </div>
            @endif 
        </ul>
      </div>
    </div>
  </nav>



       
  <div class="wrapper">
    <div class="section section-hero section-shaped">
      <div class="shape shape-style-3 shape-default">
        <span class="span-150"></span>
        <span class="span-50"></span>
        <span class="span-50"></span>
        <span class="span-75"></span>
        <span class="span-100"></span>
        <span class="span-75"></span>
        <span class="span-50"></span>
        <span class="span-100"></span>
        <span class="span-50"></span>
        <span class="span-100"></span>
      </div>
      <div class="page-header">
        <div class="container shape-container d-flex align-items-center py-lg">
          <div class="col px-0">
            <div class="row align-items-center justify-content-center">
              <div class="col-lg-6 text-center">
                <h1 class="text-white display-1">AppShop</h1>
                <h2 class="display-4 font-weight-normal text-white">El momento es ahora!</h2>
                <div class="btn-wrapper mt-4">
                  <a href="{{ url('login')}}" class="btn btn-warning btn-icon mt-3 mb-sm-0">
              
                    <span class="btn-inner--text">Comenzar</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>

    @yield('content')

  </div>

    <br /><br />


    @include('layouts.footer')
  </div>


        
    </body>
</html>
