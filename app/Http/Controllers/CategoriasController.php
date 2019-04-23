<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Categoria;

class CategoriasController extends Controller
{
  public function getAll()
  {

    $data = Categoria::where('estado', 1)
            ->get();

    return view('categorias.list-categorias')
                ->with(compact('data'));

    // var_dump($data);

  }

  public function nueva(){

    return view('categorias.nueva-categoria');
  }

  // public function save()
  public function save(Request $request)
  {
    $nombre =  $request->input('nombre');
    $descripcion =  $request->input('descripcion');

    $categoria = new Categoria() ;
    $categoria->nombre = $nombre ;
    $categoria->descripcion = $descripcion ;
    $categoria->estado = 1 ;
    $status = $categoria->save() ;

    return redirect()->route('categorias');

    // var_dump($status);

  }

  public function editar($id)
  {
    $data =  Categoria::find($id);
    return view('categorias.editar-categoria')
                ->with(compact('data'));;
  }

  public function update(Request $request)
  {
    $id          = $request->input('id');
    $nombre      = $request->input('nombre');
    $descripcion = $request->input('descripcion');

    $categoria = Categoria::find($id);

    if(!empty($categoria))
    {
      $categoria->nombre = $nombre ;
      $categoria->descripcion = $descripcion ;
      $status = $categoria->save() ;
    }
    else {
       $message = "Registros no exite" ;
    }


    return redirect()->route('categorias');

    // var_dump($status);

  }


  public function eliminar($id)
  {
    $data =  Categoria::find($id);
    return view('categorias.eliminar-categoria')
                ->with(compact('data'));;
  }

  public function borrar(Request $request)
  {
    $id          = $request->input('id');

    $categoria = Categoria::find($id);

    if(!empty($categoria))
    {
      $categoria->estado = 0 ;
      $status = $categoria->save() ;
    }
    else {
       $message = "Registros no exite" ;
    }


    return redirect()->route('categorias');

    // var_dump($status);

  }





}
