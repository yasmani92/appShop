@extends('layouts.app')

@section('body-class', 'profile-page')
@section('content')
<div class="wrapper">
    <section class="section-profile-cover section-shaped my-0">
      <!-- Circles background -->
      <img class="bg-image" src="{{ asset('img/pages/mohamed.jpg') }}" style="width: 100%;">
      <!-- SVG separator -->
      <div class="separator separator-bottom separator-skew">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-secondary" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </section>

    <section class="section bg-secondary">
      <div class="container">
        <div class="card card-profile shadow mt--300">
          <div class="px-4 py-5">
          <!-- 
            <div class="row justify-content-center">
              
          </div>

         -->
          <h2 class="heading-title text-center text-default pb-5">Dashboard</h2>
              @if (session('status'))
                  <div class="alert alert-success" role="alert">
                      {{ session('status') }}
                  </div>
              @endif
             <ul class="nav nav-pills nav-pills-circle mb-3" id="tabs_2" role="tablist">
                <li class="nav-item">
                  <a class="nav-link rounded-circle active" id="home-tab" data-toggle="tab" href="#tabs_2_1" role="tab" aria-controls="home" aria-selected="true">
                    <span class="nav-link-icon d-block"><i class="ni ni-credit-card"></i></span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="contact-tab" data-toggle="tab" href="#tabs_2_3" role="tab" aria-controls="contact" aria-selected="false">
                    <span class="nav-link-icon d-block"><i class="ni ni-bag-17"></i></span>
                  </a>
                </li>
              </ul>


        </div>
      </div>
    </div>
    </section>
    
  </div>


@endsection
