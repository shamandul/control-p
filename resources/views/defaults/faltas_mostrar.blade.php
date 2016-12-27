@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
      <table class="table table-bordered table-responsive">
        <thead>
          <tr class="success">
            <td>Tipo</td>
            <td>Factor</td>
            <td>Núm. faltas</td>
            <td>Comentario</td>
          </tr>
        </thead>
        <tbody>
            @foreach ($datos as $dato)
            <tr>
              <td>{{$dato['tipo']}}</td>
              <td>{{$dato['factor']}}</td>
              <td>{{$dato['num_faltas']}}</td>
              <td>{{$dato['comentario']}}</td>
              <td class="text-center"><a class="btn btn-info" href='{{url("/falta/update/{$dato->id}")}}'>Editar</a></td>
              <td class="text-center"><a class="btn btn-danger" href='{{url("/falta/delete/{$dato->id}")}}'>Borrar</a></td>
            </tr>
            @endforeach
        </tbody>

      </table>
    </div>
</div>
@endsection
