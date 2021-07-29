@extends('layouts.principal')


@section('content')
  <div class="section features-1">    <div class="container">
        <div class="row">
          <div class="col-md-8 mx-auto text-center">
            <!-- <table class="table">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Categoría</th>
                        <th class="text-right">Precio</th>
                        <th class="text-right">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($products as $product)
                   <tr>
                        <td class="text-center">1</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->category-name }}</td>
                        <td class="text-right">&euro; {{ $product->price }}</td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" class="btn btn-info btn-icon btn-sm " data-original-title="" title="">
                            Ver
                          </button>
                          <button type="button" rel="tooltip" class="btn btn-success btn-icon btn-sm " data-original-title="" title="">
                            Editar
                          </button>
                          <button type="button" rel="tooltip" class="btn btn-danger btn-icon btn-sm " data-original-title="" title="">
                            Eliminar
                            </button>
                        </td>
                    </tr>
                    @endforech
                </tbody>
            </table> -->
          </div>
      </div>
   </div>
</div>
@endsection