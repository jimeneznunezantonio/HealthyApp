@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Enfermedad</div>

                <div class="panel-body">
                    @include('flash::message')

                    {!! Form::model($enf_pac, [ 'route' => ['enf_pacs.update',$enf_pac->id], 'method'=>'PUT']) !!}

                    <div class="form-group">
                        {!! Form::label('enf_startDate', 'Fecha y hora de inicio de la enfermedad') !!}
                        <input type="datetime-local" id="enf_startDate" name="enf_startDate" class="form-control" value="{{Carbon\Carbon::now()->format('Y-m-d\Th:i')}}" />
                    </div>
                    <div class="form-group">
                        {!! Form::label('enf_endDate', 'Fecha y hora de finalización de la enfermedad') !!}
                        <input type="datetime-local" id="enf_endDate" name="enf_endDate" class="form-control" value="{{Carbon\Carbon::now()->format('Y-m-d\Th:i')}}" />


                    </div>

                    <div class="form-group">
                        {!!Form::label('paciente_id', 'Paciente') !!}
                        <br>
                        {!! Form::select('paciente_id', $pacientes, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('enfermedad_id', 'Enfermedad') !!}
                        <br>
                        {!! Form::select('enfermedad_id', $enfermedades, ['class' => 'form-control']) !!}
                    </div>
                    {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection