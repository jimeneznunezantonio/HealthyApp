@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar tratamiento</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::model($trat_med, [ 'route' => ['trat_meds.update',$trat_med->id], 'method'=>'PUT']) !!}

                        <div class="form-group">
                            {!! Form::label('startMedDate', 'Fecha y hora de inicio del Medicamento') !!}
                            <input type="datetime-local" id="startMedDate" name="startMedDate" class="form-control" value="{{Carbon\Carbon::now()->format('Y-m-d\Th:i')}}" />
                        </div>
                        <div class="form-group">
                            {!! Form::label('endMedDate', 'Fecha y hora de finalización del Medicamento') !!}
                            <input type="datetime-local" id="endMedDate" name="endMedDate" class="form-control" value="{{Carbon\Carbon::now()->format('Y-m-d\Th:i')}}" />


                        </div>
                        <div class="form-group">
                            {!! Form::label('dose', 'Dósis del medicamento') !!}
                            {!! Form::text('dose',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        <div class="form-group">
                            {!!Form::label('tratamiento_id', 'Tratamiento') !!}
                            <br>
                            {!! Form::select('tratamiento_id', $tratamientos, ['class' => 'form-control']) !!}
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