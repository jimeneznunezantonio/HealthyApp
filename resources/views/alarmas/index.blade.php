@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Alarmas</div>

                    <div class="panel-body">
                        @include('flash::message')

                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Fecha Alarma</th>
                                <th>Nombre del Usuario</th>



                            </tr>

                            @foreach ($alarmas as $alarma)


                                <tr>
                                    <td>{{ $alarma->date_hour }}</td>
                                    <td>{{ $alarma->user->full_name}}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection