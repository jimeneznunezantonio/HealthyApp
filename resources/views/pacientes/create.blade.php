@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear paciente</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::open(['route' => 'pacientes.store']) !!}
                        <div class="form-group">
                            {!! Form::label('name', 'Nombre del paciente') !!}
                            {!! Form::text('name',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('surname1', 'Primer Apellido del paciente') !!}
                            {!! Form::text('surname1',null,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('surname2', 'Segundo Apellido del paciente') !!}
                            {!! Form::text('surname2',null,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('nuhsa', 'NUHSA del paciente') !!}
                            {!! Form::text('nuhsa',null,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('BornDate', 'Fecha de Nacimiento del Paciente') !!}
                            {!! Form::text('BornDate',null,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('weight', 'Peso del Paciente') !!}
                            {!! Form::text('weight',null,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('height', 'Altura del Paciente') !!}
                            {!! Form::text('height',null,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('dni', 'DNI del Paciente') !!}
                            {!! Form::text('dni',null,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('telephone', 'Teléfono del Paciente') !!}
                            {!! Form::text('telephone',null,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('email', 'Email del Paciente') !!}
                            {!! Form::text('email',null,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('password', 'Password') !!}
                            {!! Form::text('password',null,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Address', 'Dirección del Paciente') !!}
                            {!! Form::text('Address',null,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('zipCode', 'Código Postal del Paciente') !!}
                            {!! Form::text('zipCode',null,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('passport', 'Pasaporte del Paciente') !!}
                            {!! Form::text('passport',null,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('nationality', 'Nacionalidad del Paciente') !!}
                            {!! Form::text('nationality',null,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('nie', 'NIE del Paciente') !!}
                            {!! Form::text('nie',null,['class'=>'form-control', 'required']) !!}
                        </div>
                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

