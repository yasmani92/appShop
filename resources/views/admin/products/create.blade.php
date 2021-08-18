@extends('layouts.principal')


@section('content')


    <div class="section features-1">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mx-auto text-center">
            <h3 class="display-3">Registrar nuevo producto</h3>
          </div>
        </div>

        <div class="row mt-5 mx-auto">
                
          <div class="col-md-12">
            <form method="POST" action="{{ url('/admin/products') }}">
            {{ csrf_field() }}

            <div class="row">
              <div class="col-md-4">
              <div class="form-group">
                <input type="text" placeholder="Nombre del producto" class="form-control is-invalid" name="name" />
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <input type="number" step="0.01" placeholder="Precio" class="form-control is-invalid" name="price"/>
              </div>
            </div>              
            
            <div class="col-md-4">
              <div class="form-group">
                <input type="text" placeholder="Descripción corta" class="form-control is-invalid" name="description" />
              </div>
            </div>
          </div>
            <div class="row">
              <div class="col-md-12">
                <textarea class="form-control my-3 is-invalid"  rows="3" placeholder="Descripción extensa del producto" name="long_description" rows="5"></textarea>
              </div>
            </div>

            <div class="text-center">
              <button  class="btn btn-warning">Registrar producto</button>
            </div>
            
          </form>
          </div>
        </div>
      </div>
    </div>

@endsection
