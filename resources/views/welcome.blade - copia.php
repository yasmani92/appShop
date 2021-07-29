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
    <body>

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
            <!-- <div class="col-6 collapse-brand">
              <a href="{{ url('/') }}">
                <img src="{{ asset('img/brand/blue.png') }}">
              </a>
            </div> -->
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
          <li class="nav-item dropdown">
            <a href="{{ url('/') }}" class="nav-link" data-toggle="dropdown" href="{{ url('/') }}" role="button">
              <i class="ni ni-ui-04 d-lg-none"></i>
              <span class="nav-link-inner--text">Components</span>
            </a>
            <div class="dropdown-menu dropdown-menu-xl">
              <div class="dropdown-menu-inner">
                <a href="https://demos.creative-tim.com/argon-design-system/docs/getting-started/overview.html" class="media d-flex align-items-center">
                  <div class="icon icon-shape bg-gradient-primary rounded-circle text-white">
                    <i class="ni ni-spaceship"></i>
                  </div>
                  <div class="media-body ml-3">
                    <h6 class="heading text-primary mb-md-1">Getting started</h6>
                    <p class="description d-none d-md-inline-block mb-0">Learn how to use compiling Scss, change brand colors and more.</p>
                  </div>
                </a>
                <a href="https://demos.creative-tim.com/argon-design-system/docs/foundation/colors.html" class="media d-flex align-items-center">
                  <div class="icon icon-shape bg-gradient-success rounded-circle text-white">
                    <i class="ni ni-palette"></i>
                  </div>
                  <div class="media-body ml-3">
                    <h6 class="heading text-primary mb-md-1">Foundation</h6>
                    <p class="description d-none d-md-inline-block mb-0">Learn more about colors, typography, icons and the grid system we used for .</p>
                  </div>
                </a>
                <a href="https://demos.creative-tim.com/argon-design-system/docs/components/alerts.html" class="media d-flex align-items-center">
                  <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
                    <i class="ni ni-ui-04"></i>
                  </div>
                  <div class="media-body ml-3">
                    <h5 class="heading text-warning mb-md-1">Components</h5>
                    <p class="description d-none d-md-inline-block mb-0">Browse our 50 beautiful handcrafted components offered in the Free version.</p>
                  </div>
                </a>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">
              <i class="ni ni-collection d-lg-none"></i>
              <span class="nav-link-inner--text">Examples</span>
            </a>
            <div class="dropdown-menu">
              <a href="{{ url('/') }}" class="dropdown-item">Landing</a>
              <a href="{{ url('/') }}" class="dropdown-item">Profile</a>
              <a href="{{ url('/') }}" class="dropdown-item">Login</a>
              <a href="{{ url('/') }}" class="dropdown-item">Register</a>
            </div>
          </li>
        </ul> -->
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
                <h2 class="display-4 font-weight-normal text-white">The time is right now!</h2>
                <div class="btn-wrapper mt-4">
                  <a href="{{ url('login')}}" class="btn btn-warning btn-icon mt-3 mb-sm-0">
                    <!-- <span class="btn-inner--icon"><i class="ni ni-button-play"></i></span> -->
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
    <div class="section features-6">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="info info-horizontal info-hover-primary">
              <div class="description pl-4">
                <h5 class="title">Atendemos tus dudas</h5>
                <p>Atendemos rápidamente cualquier duda que tengas vía chat. No estás sólo, sino que siempre estamos atentos a tus inquietudes</p>
                <a href="#" class="text-info">Ver más</a>
              </div>
            </div>
            <div class="info info-horizontal info-hover-primary mt-5">
              <div class="description pl-4">
                <h5 class="title">Pago Seguro</h5>
                <p>Todo pedido que hagas será confirmado a través de una llamada. Si no confías en los pagos en línea puedes pagar contra entrega el valor acordado.</p>
                <a href="#" class="text-info">Ver más</a>
              </div>
            </div>
            <div class="info info-horizontal info-hover-primary mt-5">
              <div class="description pl-4">
                <h5 class="title">Información privada</h5>
                <p>Los pedidos que realices sólo los conocerás tú, a través de tu panel de usuario. Nadie más tiene acceso a esta información. </p>
                <a href="#" class="text-info">Learn more</a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-10 mx-md-auto">
            <img class="ml-lg-5" src="{{ asset('img/ill/ill.png') }}" width="100%">
          </div>
        </div>
      </div>
    </div>
    <div class="section features-1">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mx-auto text-center">
            <h3 class="display-3">Productos disponibles</h3>
            </div>
        </div>

        <div class="row mt-5">
          @foreach ($products as $product)
          <div class="col-md-4">
            <!-- <div class="info">
              <div class="icon icon-lg icon-shape icon-shape-primary shadow rounded-circle">
                <i class="ni ni-settings-gear-65"></i>
              </div> -->
              <h6 class="info-title text-uppercase text-primary">{{ $product->name }}</h6>
              <p class="description opacity-8">{{ $product->category }}</p>
              <p class="description opacity-8">{{ $product->description }}</p>
              <p class="description opacity-8">{{ $product->long_description }}</p>
              <p class="description opacity-8">{{ $product->price }}</p>
              <a href="javascript:;" class="text-primary">More about us
                <!-- <i class="ni ni-bold-right text-primary"></i> -->
              </a>
            </div>
            @endforeach
          </div>
          
        </div>
      </div>
    </div>
    <br /><br />
    <footer class="footer">
      <div class="container">
        <div class="row row-grid align-items-center mb-5">
          <div class="col-lg-6">
            <h3 class="text-primary font-weight-light mb-2">Muchas gracias por utilizar nuestros servicios!</h3>
            <h4 class="mb-0 font-weight-light">Nos complace trabajar para usted.</h4>
          </div>
          <!-- <div class="col-lg-6 text-lg-center btn-wrapper">
            <button target="_blank" href="https://twitter.com/creativetim" rel="nofollow" class="btn btn-icon-only btn-twitter rounded-circle" data-toggle="tooltip" data-original-title="Follow us">
              <span class="btn-inner--icon"><i class="fa fa-twitter"></i></span>
            </button>
            <button target="_blank" href="https://www.facebook.com/CreativeTim/" rel="nofollow" class="btn-icon-only rounded-circle btn btn-facebook" data-toggle="tooltip" data-original-title="Like us">
              <span class="btn-inner--icon"><i class="fab fa-facebook"></i></span>
            </button>
            <button target="_blank" href="https://dribbble.com/creativetim" rel="nofollow" class="btn btn-icon-only btn-dribbble rounded-circle" data-toggle="tooltip" data-original-title="Follow us">
              <span class="btn-inner--icon"><i class="fa fa-dribbble"></i></span>
            </button>
            <button target="_blank" href="https://github.com/creativetimofficial" rel="nofollow" class="btn btn-icon-only btn-github rounded-circle" data-toggle="tooltip" data-original-title="Star on Github">
              <span class="btn-inner--icon"><i class="fa fa-github"></i></span>
            </button>
          </div> -->
        </div>
        <hr>
        <div class="row align-items-center justify-content-md-between">
          <div class="col-md-6">
            <div class="copyright">
              <p>&copy; Copyright <?php echo date('Y'); ?>.</p>
              <a href="" target="_blank">Yasmani Ferrera</a>.
            </div>
          </div>
          <div class="col-md-6">
            <ul class="nav nav-footer justify-content-end">
              <li class="nav-item">
                <a href="" class="nav-link" target="_blank">Yancarlos Ferrera</a>
              </li>
              <!-- <li class="nav-item">
                <a href="" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link" target="_blank">License</a>
              </li> -->
            </ul>
          </div>
        </div>
      </div>
    </footer>

    @include('com.scripts')
  </div>


        
    </body>
</html>
