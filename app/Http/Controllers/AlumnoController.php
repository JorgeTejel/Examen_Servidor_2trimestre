<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAlumnoRequest;
use App\Http\Requests\UpdateAlumnoRequest;
use App\Models\Alumno;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $alumnos = Alumno::all();
        return view("alumnos/alumnos", ["alumnos" => $alumnos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("alumnos.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAlumnoRequest $request)
    {
        //
        $alumno = new Alumno($request->input());
        $alumno->saveOrFail();

        $alumnos = Alumno::all();
        return view("alumnos/alumnos",["alumnos"=>$alumnos]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Alumno $alumno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumno $alumno)
    {
        //
        return view("alumnos.edit", ["alumno" => $alumno]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAlumnoRequest $request, Alumno $alumno)
    {
        //
        $valores = $request->input();
        $alumno->update($valores);
        $alumnos = Alumno::all();
        return view("alumnos/alumnos",["alumnos"=>$alumnos]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumno $alumno)
    {
        //
        $alumno->delete();
        $alumnos = Alumno::all();
        return view("alumnos/alumnos",["alumnos"=>$alumnos]);
    }
}
