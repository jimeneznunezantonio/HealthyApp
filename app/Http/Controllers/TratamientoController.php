<?php

namespace App\Http\Controllers;

use App\Medicamento;
use App\Tratamiento;
use Illuminate\Http\Request;
use App\Cita;
use App\Medico;
use App\Paciente;

class TratamientoController extends Controller
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
        //
        $tratamientos = Tratamiento::all();

        return view('tratamientos/index',['tratamientos'=>$tratamientos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medicos = Medico::all()->pluck('full_name','id');

        $pacientes = Paciente::all()->pluck('full_name','id');

        $medicamentos=Medicamento::all()->pluck('name','id');

        //
        return view('tratamientos/create',['medicos'=>$medicos, 'pacientes'=>$pacientes,'medicamentos'=>$medicamentos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'start_date' => 'required|date|after:now',
            'end_date' => 'required|date|after:now',
            'medico_id' => 'required|exists:medicos,id',
            'paciente_id' => 'required|exists:pacientes,id',
            'medicamento_id' => 'required|exists:medicamentos,id',
        ]);


        $tratamiento = new Tratamiento($request->all());
        $tratamiento->save();

        flash('Tratamiento creado correctamente');

        return redirect()->route('tratamientos.index');



    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Tratamiento  $tratamiento
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tratamiento  $tratamiento
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $tratamiento = Tratamiento::find($id);
        $medicos = Medico::all()->pluck('full_name','id');
        $pacientes = Paciente::all()->pluck('full_name','id');
        $medicamentos = Medicamento::all()->pluck('name','id');

        return view('tratamientos/create',['tratamiento'=> $tratamiento,'medicos'=>$medicos, 'pacientes'=>$pacientes,'medicamentos'=>$medicamentos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tratamiento  $tratamiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'start_date' => 'required|date|after:now',
            'end_date' => 'required|date|after:now',
            'medico_id' => 'required|exists:medicos,id',
            'paciente_id' => 'required|exists:pacientes,id',
            'medicamento_id' => 'required|exists:medicamentos,id',

        ]);

        $tratamiento = Tratamiento::find($id);
        $tratamiento->fill($request->all());

        $tratamiento->save();

        flash('Tratamiento modificado correctamente');

        return redirect()->route('tratamientos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tratamiento  $tratamiento
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $tratamiento = Tratamiento::find($id);
        $tratamiento->delete();
        flash('Tratamiento eliminado correctamente');

        return redirect()->route('tratamientos.index');
    }
}
