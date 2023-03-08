<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drivers;

class DatosDriversController extends Controller
{
    public function getListaDeDatos()
    {
        $datos = Drivers::get();

        return response()->json($datos, status:200);
    }

    public function edit(Request $request, $ID_drivers)
{
    $driver = Drivers::findOrFail($ID_drivers);
    $driver->first_name = $request->input('first_name');
    $driver->last_name = $request->input('last_name');
    $driver->address = $request->input('address');
    $driver->phone = $request->input('phone');
    $driver->active = $request->input('active');
    $driver->save();
    return response()->json([
        'message' => 'El conductor ha sido actualizado exitosamente',
        'driver' => $driver
    ], 200);
}
public function store(Request $request)
{
    $driver = Drivers::create($request->all());

    return response()->json([
        'data' => $driver,
        'message' => 'Driver added successfully'
    ]);
}


}
