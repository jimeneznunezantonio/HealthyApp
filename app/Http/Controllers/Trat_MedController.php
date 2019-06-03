<?php

namespace App\Http\Controllers;

use App\Medicamento;
use App\Trat_Med;
use App\Tratamiento;
use Illuminate\Http\Request;

class Trat_MedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $trat_meds = Trat_Med::all();

        return view('trat_meds/index',['trat_meds'=>$trat_meds]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tratamientos= Tratamiento::all()->pluck('start_date','end_date','id');

        $medicamentos = Medicamento::all()->pluck('name','id');


        return view('trat_meds/create',['tratamientos'=>$tratamientos, 'medicamentos'=>$medicamentos]);
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
            'medicamento_id' => 'required|exists:medicamentos,id',
            'tratamiento_id' => 'required|exists:tratamientos,id',
            'startMedDate' => 'required|date|after:now',
            'endMedDate' => 'required|date|after:now',

        ]);

        $trat_med = new Trat_Med($request->all());
        $trat_med->save();


        flash('Tratamiento creado correctamente');

        return redirect()->route('trat_meds.index');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Trat_Med  $trat_Med
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Trat_Med  $trat_Med
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $trat_med = Trat_Med::find($id);

        $tratamientos = Tratamiento::all()->pluck('start_date','end_date','id');

        $medicamentos = Medicamento::all()->pluck('name','id');


        return view('trat_meds/edit',['trat_med'=> $trat_med, 'tratamientos'=>$tratamientos, 'medicamentos'=>$medicamentos]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Trat_Med  $trat_Med
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this->validate($request, [
            'tratamiento_id' => 'required|exists:tratamientos,id',
            'medicamento_id' => 'required|exists:medicamentos,id',
            'startMedDate' => 'required|date|after:now',
            'endMedDate' => 'required|date|after:now',

        ]);
        $trat_med = Trat_Med::find($id);
        $trat_med->fill($request->all());

        $trat_med->save();

        flash('Tratamiento modificado correctamente');

        return redirect()->route('trat_meds.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Trat_Med  $trat_Med
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $trat_med = Trat_Med::find($id);
        $trat_med->delete();
        flash('Tratamiento borrado correctamente');

        return redirect()->route('trat_meds.index');
        //
    }
}
