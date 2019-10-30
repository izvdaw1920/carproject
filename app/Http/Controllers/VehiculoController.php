<?php

namespace App\Http\Controllers;

use App\Vehiculo;
use App\Fabricante;

use Illuminate\Http\Request;

// IMPORTANTE
use App\Http\Requests\VehiculoRequest;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //var_dump(Vehiculo::all()); exit;
        // $x = Vehiculo::all();
        // foreach($x as $y) {
        //     var_dump($y);
        //     exit;
        // }
        return view('car')->with(['vehiculos' => Vehiculo::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fabricantes = Fabricante::all();
        return view('create')->with(['fabricantes' => $fabricantes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VehiculoRequest $request)
    {
        return 'hola';
        //\Debugbar::enable();
        $vehiculo = new Vehiculo($request->validated());
        try {
            //$result = $vehiculo->save();
        } catch(\Exception $e) {
            //return redirect(route('vehiculo.create'));
        }
        //return redirect(route('vehiculo.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function show(Vehiculo $vehiculo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehiculo $vehiculo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehiculo $vehiculo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehiculo $vehiculo)
    {
        //
    }
}
