@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
      <table class="table table-bordered">
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
            </tr>
            @endforeach
          
        </tbody>

      </table>
    </div>
</div>
@endsection
