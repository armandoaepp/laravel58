@extends('layouts.app')

<h1> Nueva Categoria </h1>
<div class="container">

  <div class="row">
    <div class="col-12 mb-3">
        <form action="/categorias/save" method="POST">
          @csrf
          <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
          </div>

          <div class="form-group">
            <label for="descripcion">descripcion</label>
            <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="descripcion">
          </div>

          <button type="submit" class="btn btn-primary"> Grabar </button>

        </form>

    </div>
  </div>
</div>