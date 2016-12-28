@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
      <h2>Vacaciones</h2>
      <table class="table table-bordered table-responsive">
        <thead>
          <tr class="success">
            <td>inicio</td>
            <td>Fin</td>
            <td>Máx. días</td>
            <td>Disfrutados</td>
            <td>Comentario</td>
          </tr>
        </thead>
        <tbody>
            @foreach ($datos as $dato)
            <tr>
              <td>{{$dato['dateStart']}}</td>
              <td>{{$dato['dateEnd']}}</td>
              <td>{{$dato['maxDay']}}</td>
              <td>{{$dato['Enjoyed']}}</td>
              <td>{{$dato['comment']}}</td>
              <td class="text-center"><a class="btn btn-info" href='{{url("/vacaciones/{$dato->id}/edit")}}'>Editar</a></td>
              <td class="text-center"><a class="btn btn-danger" href='{{url("/vacaciones/delete/{$dato->id}")}}'>Borrar</a></td>
            </tr>
            @endforeach
        </tbody>

      </table>
    </div>
</div>
@endsection
