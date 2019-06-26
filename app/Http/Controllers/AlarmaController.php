<?php

namespace App\Http\Controllers;

use App\Alarma;
use App\User;
use DB;

use Carbon\Carbon;
use Illuminate\Http\Request;

class AlarmaController extends Controller
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
        $alarmas = Alarma::all();

        return view('alarmas/index',['alarmas'=>$alarmas]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $users = User::all()->pluck('full_name','id');

        return view('alarmas/create',['users'=>$users]);
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

        $alarma = new Alarma();
        $ahora = Carbon::now();
        $ahora->tz = 'Europe/Madrid';
        $alarma->date_hour = $ahora;

        $alarma->user_id = \Auth::user()->id;


        $alarma->save();
//        dd($alarma);
        return redirect()->route('alarmas.index');






    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Alarma  $alarma
     * @return \Illuminate\Http\Response
     */
    public function show(Alarma $alarma)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Alarma  $alarma
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Alarma  $alarma
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Alarma  $alarma
     * @return \Illuminate\Http\Response
     */

}
