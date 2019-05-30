@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Pacientes</div>

                    <div class="panel-body">
                        @include('flash::message')
                        {!! Form::open(['route' => 'pacientes.create', 'method' => 'get']) !!}
                        {!! Form::submit('Crear paciente', ['class'=> 'btn btn-primary'])!!}
                        {!! Form::close() !!}

                        <br><br>
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Nombre</th>
                                <th>Apellido1</th>
                                <th>Apellido2</th>
                                <th>Nuhsa</th>
                                <th>FechaNacimiento</th>
                                <th>Peso</th>
                                <th>Altura</th>
                                <th>DNI</th>
                                <th>Teléfono</th>
                                <th>Email</th>
                                <th>Contraseña</th>
                                <th>Dirección</th>
                                <th>CódigoPostal</th>
                                <th>Pasaporte</th>
                                <th>Nacionalidad</th>
                                <th>NIE</th>
                                <th colspan="2">Acciones</th>
                            </tr>

                            @foreach ($pacientes as $paciente)


                                <tr>
                                    <td>{{ $paciente->name }}</td>
                                    <td>{{ $paciente->surname1 }}</td>
                                    <td>{{ $paciente->surname2 }}</td>
                                    <td>{{ $paciente->nuhsa }}</td>
                                    <td>{{ $paciente->BornDate }}</td>
                                    <td>{{ $paciente->weight }}</td>
                                    <td>{{ $paciente->height }}</td>
                                    <td>{{ $paciente->dni }}</td>
                                    <td>{{ $paciente->telephone }}</td>
                                    <td>{{ $paciente->email }}</td>
                                    <td>{{ $paciente->password }}</td>
                                    <td>{{ $paciente->Address }}</td>
                                    <td>{{ $paciente->zipCode }}</td>
                                    <td>{{ $paciente->passport }}</td>
                                    <td>{{ $paciente->nationality }}</td>
                                    <td>{{ $paciente->nie }}</td>
                                    <td>
                                        {!! Form::open(['route' => ['pacientes.edit',$paciente->id], 'method' => 'get']) !!}
                                        {!!   Form::submit('Editar', ['class'=> 'btn btn-warning'])!!}
                                        {!! Form::close() !!}
                                    </td>
                                    <td>
                                        {!! Form::open(['route' => ['pacientes.destroy',$paciente->id], 'method' => 'delete']) !!}
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