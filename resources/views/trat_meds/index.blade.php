@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Trat_Meds</div>

                    <div class="panel-body">
                        @include('flash::message')
                        {!! Form::open(['route' => 'trat_meds.create', 'method' => 'get']) !!}
                        {!!   Form::submit('Crear tratamiento personal', ['class'=> 'btn btn-primary'])!!}
                        {!! Form::close() !!}

                        <br><br>
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Fecha Inicio Medicamento</th>
                                <th>Fecha Fin Medicamento</th>
                                <th>Dósis</th>
                                <th>Nombre del tratamiento</th>
                                <th>Medicamento</th>


                                <th colspan="2">Acciones</th>
                            </tr>

                            @foreach ($trat_meds as $trat_med)


                                <tr>
                                    <td>{{ $trat_med->startMedDate }}</td>
                                    <td>{{ $trat_med->endMedDate }}</td>
                                    <td>{{ $trat_med->dose }}</td>
                                    <td>{{ $trat_med->tratamiento->name }}</td>
                                    <td>{{ $trat_med->medicamento->name}}</td>
                                    <td>
                                        {!! Form::open(['route' => ['trat_meds.edit',$trat_med->id], 'method' => 'get']) !!}
                                        {!!   Form::submit('Editar', ['class'=> 'btn btn-warning'])!!}
                                        {!! Form::close() !!}
                                    </td>
                                    <td>
                                        {!! Form::open(['route' => ['trat_meds.destroy',$trat_med->id], 'method' => 'delete']) !!}
                                        {!!   Form::submit('Borrar', ['class'=> 'btn btn-danger' ,'onclick' => 'if(!confirm("¿Está seguro?"))event.preventDefault();'])!!}
                                        {!! Form::close() !!}

                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection