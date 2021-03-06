<?php

namespace App\Http\Controllers\Empleado;

use App\Empleado;
use App\Objetivo;
use App\Vendedor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmpleadoObjetivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Empleado $empleado)
    {
        $objetivo = $empleado->vendedor->objetivo;
        $ultimo_objetivo = $empleado->vendedor->objetivo->last();
        if ($ultimo_objetivo != null) {
            $ultimo_objetivo = explode("-", $ultimo_objetivo->fecha);
            $ultimo_objetivo = $ultimo_objetivo[0]. "-" . $ultimo_objetivo[1];
        }
        return view('empleado.ventas.view', ['empleado' => $empleado, 'objetivos' => $objetivo, 'fecha_ul_obje' => $ultimo_objetivo]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $objetivo = new Objetivo;
        $objetivo->num_clientes = $request->objetivo_cliente;
        $objetivo->ventas = $request->objetivo_venta;
        $objetivo->fecha = $request->fecha;
        $objetivo->vendedor_id = $request->vendedor;
        $objetivo->save();
        $objetivos_ven = Vendedor::find($objetivo->vendedor_id)->objetivo;
        return response(['objetivos'=>$objetivos_ven], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit(Empleado $empleado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empleado $empleado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empleado $empleado)
    {
        //
    }
}
