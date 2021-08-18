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
          
          <h2 class="heading-title text-center text-default pb-5">Dashboard</h2>
              @if (session('notification'))
                  <div class="alert alert-success" role="alert">
                      {{ session('notification') }}
                  </div>
              @endif
             <ul class="nav nav-pills nav-pills-circle mb-3" id="tabs_2" role="tablist">
                <li class="nav-item">
                  <a href="#tabs_2_1" class="nav-link rounded-circle active" id="home-tab" data-toggle="tab"  role="tab" aria-controls="home" aria-selected="true">
                    <span class="nav-link-icon d-block"><i class="ni ni-cart"></i></span>
                  </a>
                </li>
                <li class="nav-item">
                  <a  href="#tabs_2_3" class="nav-link" id="contact-tab" data-toggle="tab" role="tab" aria-controls="contact" aria-selected="false">
                    <span class="nav-link-icon d-block"><i class="ni ni-bullet-list-67"></i></span>
                  </a>
                </li>
              </ul>

              <hr>

              <div id="tabs_2_1">
              @if (auth()->user()->cart->details->count()==0)

              <p>Su carrito de compras está vacío. </p>

              @elseif(auth()->user()->cart->details->count()==1)

              <p>Su carrito de compras presenta {{ auth()->user()->cart->details->count() }} producto.</p>

              @else
                  <p>Su carrito de compras presenta {{ auth()->user()->cart->details->count() }} productos.</p>
              @endif

              <table class="table">
              <thead>
                  <tr>
                      <th class="col-md-3 text-center">Imagen</th>
                      <th class="col-md-3 text-center">Nombre</th>
                      <th class="text-center">Precio</th>
                      <th class="text-center">Cantidad</th>
                      <th class="text-center">Subtotal</th>
                      <th class="col-md-2 text-right">Opciones</th>
                  </tr>
              </thead>

              <tbody>
                @foreach (auth()->user()->cart->details as $detail)
                  <tr>
                    <td class="text-center">
                      <img src="{{ $detail->product->featured_image_url }}" height="50px">
                    </td>
                    <td>
                      <a href="{{ url('/products/'.$detail->product->id) }}" target="_blank">{{ $detail->product->name }}</a>
                    </td>
                    <td class="text-center">&euro; {{ $detail->product->price }}</td>
                    <td class="text-center">{{ $detail->quantity }}</td>
                    <td class="text-center">&euro; {{ $detail->quantity * $detail->product->price }}</td>
                    <td class="td-actions text-right">
                      <form method="POST" action="{{ url('/cart') }}" >
                        {{ csrf_field() }}
                         {{ method_field('DELETE') }}
                        <input type="hidden" name="cart_detail_id" value="{{  $detail->id }}">
                      <a href="{{ url('/products/'.$detail->product->id) }}" type="button" rel="tooltip" target="_blank" class="btn btn-info btn-icon btn-sm " data-original-title="" title="Ver producto" data-animation="true">
                        <!-- /admin/products/'.$detail->product->id -->
                        <i class="ni ni-circle-08 pt-1"></i>
                      </a>
                      <button type="submit" rel="tooltip" class="btn btn-danger btn-icon btn-sm " data-original-title="" title="Eliminar producto">
                        <i class="ni ni-fat-remove pt-1"></i>
                        </button>
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
            <div class="text-center">
            <form method="post" action="{{ url('/order') }}">
              {{ csrf_field() }}
              <button type="button" class="btn btn-primary mb-3">
                <i class="ni ni-check-bold"></i> Realizar pedido
              </button>
            </form>
            </div>
              </div>
        </div>
      </div>
    </div>
    </section>
    
  </div>


@endsection
