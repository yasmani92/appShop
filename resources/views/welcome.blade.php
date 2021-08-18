@extends('layouts.principal')

@section('styles')
<style>
  .row .col-md-4 {
    margin-bottom: 5em;

  } 
</style>
@endsection

@section('content')

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
                <a href="#" class="text-info">Ver más</a>
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
            <h3 class="display-3 mb-5">Productos disponibles</h3>
          </div>
        </div>

        <div class="row ">
          @foreach ($products as $product)
          <div class="col-md-4 mb-3">
              
              <a href="{{ url('/products/'.$product->id) }}">
                <h6 class="info-title text-uppercase text-primary">{{ $product->name }}</h6>
              </a>
              <div class="col-sm-6">
                <!-- asset('storages').'/'.$product->images()->first()->image 
                  img/storages').'/'.$product->images()->first()->image -->
                
              <img src="{{ $product->featured_image_url }}" alt="Raised rounded-circle image" class="img-fluid rounded-circle shadow" >
              </div>

              <p class="description opacity-8">{{ $product->category ? $product->category->name : 'General' }}</p>
              <p class="description opacity-8">{{ $product->description }}</p>
              <p class="description opacity-8">{{ $product->long_description }}</p>
              <p class="description opacity-8">{{ $product->price }}</p>
              <a href="{{ url('/products/'.$product->id) }}" class="text-primary">Ver Producto
                
              </a>
            </div>
            @endforeach
          </div>
          <div class="text-center">
            {{ $products->links() }}
            
          </div>
        </div>
      </div>

@endsection
