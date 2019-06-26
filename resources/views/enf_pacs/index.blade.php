@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Enf_Pacs</div>

                    <div class="panel-body">
                        @include('flash::message')
                        {!! Form::open(['route' => 'enf_pacs.create', 'method' => 'get']) !!}
                        {!!   Form::submit('Crear enfermedad personal', ['class'=> 'btn btn-primary'])!!}
                        {!! Form::close() !!}

                        <br><br>
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Fecha Inicio Enfermedad</th>
                                <th>Fecha Fin Enfermedad</th>
                                <th>Enfermedad</th>
                                <th>Paciente</th>


                                <th colspan="2">Acciones</th>
                            </tr>

                            @foreach ($enf_pacs as $enf_pac)


                                <tr>
                                    <td>{{ $enf_pac->enf_startDate }}</td>
                                    <td>{{ $enf_pac->enf_endDate }}</td>
                                    <td>{{ $enf_pac->enfermedad->name }}</td>
                                    <td>{{ $enf_pac->paciente->full_name}}</td>
                                    <td>
                                        {!! Form::open(['route' => ['enf_pacs.edit',$enf_pac->id], 'method' => 'get']) !!}
                                        {!!   Form::submit('Editar', ['class'=> 'btn btn-warning'])!!}
                                        {!! Form::close() !!}
                                    </td>
                                    <td>
                                        {!! Form::open(['route' => ['enf_pacs.destroy',$enf_pac->id], 'method' => 'delete']) !!}
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