<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Redirect;
use App\Category;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
  public function index()
      {

          $categorias = Categoria::paginate(5);
          return view('categoria.index',compact('categorias'));
      }

      /**
       * Show the form for creating a new resource.
       *
       * @return \Illuminate\Http\Response
       */
      public function create()
      {
          return view('categoria.create');
      }

      /**
       * Store a newly created resource in storage.
       *
       * @param  \Illuminate\Http\Request  $request
       * @return \Illuminate\Http\Response
       */
      public function store(Request $request)
      {
        Categoria::create([
          'nombre'=>$request['nombre'],
          'descripcion'=>$request['descripcion'],
        ]);
        Session::flash('message','Categoria creada correctamente');
        return Redirect::to('/categoria');
      }

      /**
       * Display the specified resource.
       *
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function show($id)
      {
          //
      }

      /**
       * Show the form for editing the specified resource.
       *
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function edit($id)
      {
          $categoria = Categoria::find($id);
          return view('categoria.edit',['categoria'=>$categoria]);
      }

      /**
       * Update the specified resource in storage.
       *
       * @param  \Illuminate\Http\Request  $request
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function update(Request $request, $id)
      {
          $categoria = Categoria::find($id);
          $categoria->fill($request->all());
          $categoria->save();
          Session::flash('message','Categoria Editada correctamente');
          return Redirect::to('/categoria');
      }

      /**
       * Remove the specified resource from storage.
       *
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function destroy($id)
      {
          Categoria::destroy($id);
          Session::flash('message','Categoria Eliminada correctamente');
          return Redirect::to('/categoria');
      }
}
