@extends('layouts.principal')

@section('title', 'Imágenes de producto')

@section('content')


    <div class="section features-1">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mx-auto text-center">
            <h3 class="display-3">Imágenes del "{{ $product->name }}"</h3>
          </div>
        </div>
      <div class="row mt-5">     
        
          <form action="" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="file" name="photo" required>
                <button type="submit" class="btn btn-primary btn-round mb-4">Subir nueva imagen</button>   
                <a href="{{ url('admin/products') }}" type="button" class="btn btn-secondary btn-round mb-4">Volver al listado de productos</a>
          </form>
         </div>  
      
      <hr>
      <div class="row">
        @foreach ($images as $image)
        <div class="col-md-4 mx-auto text-center" >
          <div class="panel panel-default shadow">
            <div class="panel-body">
              <img src="{{ $image->url }}" class="pt-3" width="250px" height="250px">
              <!-- <img src="{{ asset('img/storages').'/'.$image->image}}" class="pt-3"> -->
              <form action="" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <div class="text-center py-2">
                  <input type="hidden" name="image_id" value="{{ $image->id }}">
                  <button type="submit" class="btn btn-danger btn-round mb-4">Eliminar imagen</button>

                  @if ($image->featured)                       
                  <button type="button" class="btn btn-secondary btn-fab btn-icon btn-round mb-4 " rel="tooltip" title="Imagen destacada actualmente">
                    <i class="ni ni-favourite-28"></i>
                  </button>
                  @else
                  <a href="{{ url('admin/products/'.$product->id.'/images/select/'.$image->id) }} " class="btn btn-primary btn-fab btn-icon btn-round mb-4">
                    <i class="ni ni-favourite-28"></i>
                  </a>
                  @endif
                </div>
              </form>
              
            </div>
          </div>
        </div>
        @endforeach
      </div>      
    </div>
  </div>

@endsection
