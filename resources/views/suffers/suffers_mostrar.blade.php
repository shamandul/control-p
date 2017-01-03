@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
      <h2>Vacaciones</h2>
      <table class="table table-bordered table-responsive">
        <thead>
          <tr class="success">
            <td>Usuario</td>
            <td>Tipo</td>
            <td>Inicio</td>
            <td>Fin</td>
          </tr>
        </thead>
        <tbody>
            @foreach ($datos as $dato)

             <tr>
              <td>{{$dato->name}}</td>
              <td>{{$dato->tipo}}</td>
              <td>{{$dato->dateStart}}</td>
              <td>{{$dato->dateEnd}}</td>
              <td class="text-center">
                <a class="btn btn-info" href='{{url("/gestion-faltas/{$dato->id}/edit")}}'>Editar</a>
                <a class="btn btn-danger" href='{{url("/gestion-faltas/delete/{$dato->id}")}}'>Borrar</a>
              </td>
            </tr>

            @endforeach
        </tbody>
      </table>
     {{-- {!! $datos->render()!!} --}}
    </div>
</div>
@endsection
