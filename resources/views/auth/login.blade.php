@extends('layouts.app')

@section('content')
 <section class="section section-shaped section-lg">
    <div class="shape shape-style-1 bg-gradient-primary">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
    <div class="container pt-lg-7">
      <div class="row justify-content-center">
        <div class="col-lg-5">
          <div class="card bg-white shadow border-0">
            <div class="card-header bg-white pb-5">
              <div class="text-warning text-center mb-3"><h5>Inicio de sesión</h5></div>

            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <h6>Ingrese sus datos</h6>
              </div>
              <form role="form" method="POST" action="{{ url('login') }}">
                @csrf
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"></span>
                      <!-- <i class="ni ni-email-83"></i> -->
                    </div>
                    <input id="email" type="email" placeholder="Correo" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                  </div>
                </div>
                <div class="form-group focused">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                       <span class="input-group-text"></span>
                      <!--<i class="ni ni-lock-circle-open"></i> -->
                    </div>
                    <input id="password" type="password" placeholder="Contraseña" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                  </div>
                </div>
                <div class="custom-control custom-control-alternative custom-checkbox">
                  <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                  <label class="custom-control-label" for=" customCheckLogin"><span>{{ __('Recuerdame') }}</span></label>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary my-4">{{ __('Acceder') }}</button>
                </div>
              </form>
            </div>
          </div>
          <div class="row mt-3 mx-3">
            <div class="col-6">
              <a href="{{ route('password.request') }}" class="text-light"><small>Recuperar contraseña</small></a>
            </div>
            <div class="col-6 text-right mx-3">
              <a href="{{ url('register') }}" class="text-light"><small>Registrarse</small></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
