@extends('layouts.app')

<h1> Categorias </h1>
<div class="container">

<div class="row">
  <div class="col-12 mb-3">
    <a href="/categorias/nueva"  class="btn btn-primary">Nuevo</a>
  </div>
</div>


<table class="table">
  <tr>
    <th>Id</th>
    <th>Nombre</th>
    <th>Descripcion</th>
    <th>Estado</th>
  </tr>
  <tbody>
    @foreach($data as $row)
    <tr>
      <td>{{ $row->id }} </td>
      <td>{{ $row->nombre }} </td>
      <td>{{ $row->descripcion }} </td>
      <td>{{ $row->estado }} </td>
      <td>
        <a href="/categorias/editar/{{$row->id}}" >Editar</a>
      </td>

      <td>
        <a href="/categorias/eliminar/{{$row->id}}" >Eliminar</a>
      </td>

    </tr>

    @endforeach
  </tbody>
</table>
</div>


