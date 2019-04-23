@extends('layouts.app')

<div class="container">
<h1> Editar Categoria </h1>

  <div class="row">
    <div class="col-12 mb-3">
        <form action="/categorias/update" method="POST">
          @csrf
          <input type="hidden" name="id" id="id" value="{{$data->id}}">
          <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" value="{{$data->nombre}}">
          </div>

          <div class="form-group">
            <label for="descripcion">descripcion</label>
            <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="descripcion" value="{{$data->descripcion}}">
          </div>

          <button type="submit" class="btn btn-primary"> Grabar </button>

        </form>

    </div>
  </div>
</div>