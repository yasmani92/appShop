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
          <div class="px-5">
            <div class="row justify-content-center mb-5 pb-5">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image image-cropper">
                  
                    <img src="{{ $product->featured_image_url }}" class="rounded-circle">
                  
                </div>
              </div>      
            </div>

            <div class="row mt-5 pt-5">
              <div class="mx-auto text-center"> 

              @if (session('notification'))
                  <div class="alert alert-success" role="alert">
                      {{ session('notification') }}
                  </div>
              @endif   
                          
              <h3>{{ $product->name }}<span class="font-weight-light"> &euro; {{ $product->price }}</span></h3>
              <div class="h6 font-weight-300"><i class="ni location_pin mr-2"></i> {{ $product->category ? $product->category->name : 'General'  }}</div>
              <div class="h6 mt-4"><i class="ni business_briefcase-24 mr-2"></i>{{ $product->description }}</div>
            </div>
            <div class="mt-5 py-5 border-top text-center">
              <div class="row justify-content-center">
                <div class="col-lg-9">
                  <p>{{ $product->long_description }}</p>
                </div>
                <div class="text-center">
                @if (auth()->check())
                    <button type="button" class="btn btn-block btn-primary mb-3" data-toggle="modal" data-target="#modalAddToCart">
                      <i class="ni ni-fat-add"></i> Añadir al carrito de compras
                    </button>
                     

                @else
                    <a href="{{ url('/login?redirect_to='.url()->current()) }}" class="btn btn-primary btn-round">
                        <i class="ni ni-fat-add"></i> Añadir al carrito de compras
                    </a>
                @endif
            </div> 

              </div>
            </div>           
                <div class="row">
                    <div class="col-md-4 mx-auto">
                        @foreach ($imagesLeft as $image)
                           <div class="panel">
                              <img src="{{ $image->url }}" class="img-rounded pb-5" width="350px"/>
                           </div>
                        @endforeach
                    </div>
                    <div class="col-md-4">
                        @foreach ($imagesRight as $image)
                             <div class="panel">
                              <img src="{{ $image->url }}" class="img-rounded pb-5" width="350px"/>
                            </div>
                        @endforeach
                    </div>
                </div>             
            </div>           
          </div>
        </div>
      </div>
    </section>
  </div>


 <!-- Modal -->

    <div class="modal fade" id="modalAddToCart" tabindex="-1" role="dialog" aria-labelledby="modalAddToCart" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-body p-0">
            <div class="card bg-secondary shadow border-0 mb-0">
              <div class="card-header bg-gradient-default pb-5">
                <div class="text-white text-center mb-3">
                  <small>Añadir al carrito de compras</small>
                </div>

              </div>
              <div class="card-body bg-gradient-default px-lg-5 py-lg-5">

                <form  method="post" action="{{ url('/cart') }}">
                  {{ csrf_field() }}
                  <input type="hidden" name="product_id" value="{{ $product->id }}">
                  <div class="form-group mb-3">
                    <div class="input-group input-group-alternative">
                   <input type="number" name="quantity" value="1" class="form-control">
                    </div>
                  </div>             
                  <div class="text-center">
                     <button type="submit" class="btn btn-primary">Añadir al carrito</button>
                     <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection