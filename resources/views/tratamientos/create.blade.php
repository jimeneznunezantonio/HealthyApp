@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear tratamiento</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::open(['route' => 'tratamientos.store']) !!}
                        <div class="form-group">
                            {!! Form::label('start_date', 'Fecha y hora de inicio del tratamiento') !!}


                            <input type="datetime-local" id="start_date" name="start_date" class="form-control" value="{{Carbon\Carbon::now()->format('Y-m-d\Th:i')}}" />


                        </div>
                        <div class="form-group">
                            {!! Form::label('end_date', 'Fecha y hora de fin del tratamiento') !!}


                            <input type="datetime-local" id="end_date" name="end_date" class="form-control" value="{{Carbon\Carbon::now()->format('Y-m-d\Th:i')}}" />


                        </div>

                        <div class="form-group">
                            {!!Form::label('medico_id', 'Medico') !!}
                            <br>
                            {!! Form::select('medico_id', $medicos, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!!Form::label('paciente_id', 'Paciente') !!}
                            <br>
                            {!! Form::select('paciente_id', $pacientes, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!!Form::label('medicamento_id', 'Medicamento') !!}
                            <br>
                            {!! Form::select('medicamento_id', $medicamentos, ['class' => 'form-control']) !!}
                        </div>

                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection