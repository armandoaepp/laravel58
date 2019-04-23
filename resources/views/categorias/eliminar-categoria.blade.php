@extends('layouts.app')

<div class="container">
<h1> Eliminar Categoria </h1>

  <div class="row">
    <div class="col-12 mb-3">
        <form action="/categorias/borrar" method="POST">
          @csrf
          <input type="hidden" name="id" id="id" value="{{$data->id}}">

          <div class="col-12">
          <p>
            Esta seguro de eliminar el Registro: {{ $data->nombre }}?
          </p>
          </div>


          <a href="/categorias">Cancelar</a>
          <button type="submit" class="btn btn-primary"> Si </button>

        </form>

    </div>
  </div>
</div>