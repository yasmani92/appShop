@extends('layouts.app')

@section('content')
<div class="wrapper">
	<section class="section section-shaped section-lg">
      <div class="shape shape-style-1 bg-gradient-info">
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
            <div class="text-muted text-center mb-3"><h5>Regístrese</h5></div>
          </div>

          <div class="card-body px-lg-5 py-lg-5">
            <div class="text-center text-muted mb-4">
              <h6>Complete sus datos</h6>
            </div>

            	<form role="form" method="POST" action="{{ url('register') }}">
                  @csrf
                  <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"></span>
                        <!-- <i class="ni ni-hat-3"></i> -->
                      </div>
                      <input id="name" type="text" placeholder="Nombre" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required   autofocus>
                    </div>
                   </div>


                  <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"></span>
                        <!-- <i class="ni ni-email-83"></i> -->
                      </div>
                        <input id="email" type="email" placeholder="Correo" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required >
                    </div>
                  </div>

                  <div class="form-group focused">
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"></span>
                        <!-- <i class="ni ni-lock-circle-open"></i> -->
                      </div>
                      <input id="password" type="password" placeholder="Contraseña" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                    </div>
                  </div>


				 <div class="form-group">
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"></span>
                        <!-- <i class="ni ni-lock-circle-open"></i> -->
                    </div>
                   <input id="password-confirm" type="password" placeholder="Confirme Contraseña" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password_confirmation" required>
                  </div>
                 </div>

                 <div class="text-center">
                    <button type="submit" class="btn btn-info btn-wd btn-lg mt-4">
                    {{ __('Confirmar Registro') }}
                </button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>

@endsection
