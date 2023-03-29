<?php

namespace App\Http\Controllers;

use App\Models\Ganancia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Ganancias extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titulo = "Inicio";
        $pago = DB::table('ganancia')->where('tipo','=','pago')->sum('cantidad');
        $gasto = DB::table('ganancia')->where('tipo','=','gasto')->sum('cantidad');
        return view('welcome', compact('titulo', 'pago', 'gasto'));
    }
    public function historial()
    {
        $titulo = "Historial";
        $items = Ganancia::all();
        return view('historial', compact('titulo', 'items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $titulo = "anadir";
        return view('anadir', compact('titulo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = new Ganancia();
        $item->tipo = $request->tipo;
        $item->categoria = $request->categoria;
        $item->cantidad = $request->cantidad;
        $item->descripcion = $request->descripcion;
        $item->save();
        toast('Se guardo el registro exitosamente','success');
        return redirect('/historial');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $titulo = "Eliminar";
        $items = Ganancia::find($id);
        return view("eliminar", compact('titulo','items'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $titulo = "Editar registro";
        $items = Ganancia::find($id);
        return view('actualizar',compact('titulo','items'));
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
        $item = Ganancia::find($id);
        $item->tipo = $request->tipo;
        $item->categoria = $request->categoria;
        $item->cantidad = $request->cantidad;
        $item->descripcion = $request->descripcion;
        $item->save();
        toast('Se actualizo la informacion del registro exitosamente','warning');
        return redirect('/historial');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Ganancia::find($id);
        $item->delete();
        toast('Se borro el registro de forma correcta','error');
        return redirect('/historial');
    }
}
