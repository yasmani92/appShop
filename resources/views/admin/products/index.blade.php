@extends('layouts.principal')


@section('content')
  <div class="section features-1">
    <div class="container">
      <div class="row">
        <div class="col-md-8 mx-auto text-center">
          <h3 class="display-3">Listado de productos</h3>
        </div>
      </div>

      <div class="row mt-5">
          <div class="col-sm-4 text-center mx-auto">
            @if (session('notificacion'))
                  <div class="alert alert-success" role="alert">
                      {{ session('notificacion') }}
                  </div>
              @endif   
              
          <a href="{{ url('admin/products/create') }}" type="button" class="btn btn-primary btn-round btn-block btn-default mb-4">Nuevo Producto</a>
          </div>
        <table class="table">
              <thead>
                  <tr>
                      <th>#</th>
                      <th class="col-md-2 text-center">Nombre</th>
                      <th class="col-md-3 text-center">Descripción</th>
                      <th>Categoría</th>
                      <th class="text-center">Precio</th>
                      <th class="col-md-3 text-right">Opciones</th>
                  </tr>
              </thead>

              <tbody>
                @foreach ($products as $product)
                  <tr>
                    <td class="text-center">{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product-> description}}</td>
                    <td>{{ $product->long_description}}</td>
                    <td class="text-center">&euro; {{ $product->price }}</td>
                    <td class="td-actions text-right">
                      <form method="POST" action="{{ url('/admin/products/'.$product->id.'/delete') }}" >
                        {{ csrf_field() }}
                      <a type="button" rel="tooltip" class="btn btn-info btn-icon btn-sm " data-original-title="" title="Ver producto" data-animation="true">
                        <i class="ni ni-circle-08 pt-1"></i>
                      </a>
                      <a href="{{ url('/admin/products/'.$product->id.'/edit') }}" type="button" rel="tooltip" class="btn btn-success btn-icon btn-sm " data-original-title="" title="Editar producto">
                        <i class="ni ni-settings-gear-65 pt-1"></i>
                      </a >
                      <a href="{{ url('/admin/products/'.$product->id.'/images') }}" type="button" rel="tooltip" class="btn btn-warning btn-icon btn-sm " data-original-title="" title="Imágenes del producto">
                      <i class="ni ni-image pt-1"></i>
                      </a >

                        <button type="submit" rel="tooltip" class="btn btn-danger btn-icon btn-sm " data-original-title="" title="Eliminar producto">
                        <i class="ni ni-fat-remove pt-1"></i>
                        </button>
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>

          </table>
          {{ $products->links() }}
      </div>
    </div>
  </div>
@endsection
