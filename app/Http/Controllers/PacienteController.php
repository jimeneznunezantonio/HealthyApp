<?php

namespace App\Http\Controllers;

use App\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //
        $pacientes= Paciente::all();
        return view('pacientes/index',['pacientes'=>$pacientes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pacientes/create');
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
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'surname2' => 'required|max:255',
            'nuhsa' => 'required|nuhsa|max:255',
            'bornDate' => 'required|date|before:now',
            'weight'=> 'required|numeric',
            'heigth'=> 'required|numeric',
            'dni'=>'required|max:9',
            'telephone'=>'required|max:9',
            'email'=>'required|max:255',
            'password'=>'required|max:255',
            'address'=>'required|max:255',
            'zipCode'=>'required|max:255',
            'passport'=>'required|max:255',
            'nationality'=>'required|max:255',
            'nie'=>'required|max:255'

        ]);
        $paciente = new Paciente($request->all());
        $paciente->save();
        flash('Paciente creado correctamente');

        return redirect()->route('pacientes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function show(Paciente $paciente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function edit($nuhsa)
    {
        //
        $paciente = Paciente::find($nuhsa);

        return view('pacientes/edit',['paciente'=> $paciente ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paciente $paciente)
    {
        //
        $this->validate($request, [
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'surname2' => 'required|max:255',
            'nuhsa' => 'required|nuhsa|max:255',
            'bornDate' => 'required|date|before:now',
            'weight'=> 'required|numeric',
            'heigth'=> 'required|numeric',
            'dni'=>'required|max:9',
            'telephone'=>'required|max:9',
            'email'=>'required|max:255',
            'password'=>'required|max:255',
            'address'=>'required|max:255',
            'zipCode'=>'required|max:255',
            'passport'=>'required|max:255',
            'nationality'=>'required|max:255',
            'nie'=>'required|max:255'

        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paciente $paciente)
    {
        //
    }
}
