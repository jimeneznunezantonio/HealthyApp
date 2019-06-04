<?php

namespace App\Http\Controllers;

use App\Enf_Pac;
use App\Enfermedad;
use App\Paciente;
use Illuminate\Http\Request;

class Enf_PacController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $enf_pacs = Enf_Pac::all();

        return view('enf_pacs/index',['enf_pacs'=>$enf_pacs]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $enfermedades= Enfermedad::all()->pluck('name','id');

        $pacientes = Paciente::all()->pluck('full_name','id');


        return view('enf_pacs/create',['enfermedades'=>$enfermedades, 'pacientes'=>$pacientes]);
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
        $this->validate($request, [
        'enf_startDate' => 'required|date|after:now',
        'enf_endDate' => 'required|date|after:now',
        'paciente_id' => 'required|exists:pacientes,id',
        'enfermedad_id' => 'required|exists:enfermedads,id',

    ]);

        $enf_pac = new Enf_Pac($request->all());
        $enf_pac->save();


        flash('Enf_Pac creado correctamente');

        return redirect()->route('enf_pacs.index');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Enf_Pac  $enf_Pac
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Enf_Pac  $enf_Pac
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $enf_pac = Enf_Pac::find($id);

        $pacientes = Paciente::all()->pluck('full_name','id');

        $enfermedades = Enfermedad::all()->pluck('name','id');


        return view('enf_pacs/edit',['enf_pac'=> $enf_pac, 'pacientes'=>$pacientes, 'enfermedades'=>$enfermedades]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Enf_Pac  $enf_Pac
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this->validate($request, [
            'enf_startDate' => 'required|date|after:now',
            'enf_endDate' => 'required|date|after:now',
            'paciente_id' => 'required|exists:pacientes,id',
            'enfermedad_id' => 'required|exists:enfermedads,id',

        ]);
        $enf_pac = Enf_Pac::find($id);
        $enf_pac->fill($request->all());

        $enf_pac->save();

        flash('Enfermedad modificada correctamente');

        return redirect()->route('enf_pacs.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Enf_Pac  $enf_Pac
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $enf_pac = Cita::find($id);
        $enf_pac->delete();
        flash('Enfermedad borrada correctamente');

        return redirect()->route('enf_pacs.index');
        //
    }
}
