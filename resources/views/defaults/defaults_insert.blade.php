@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Agregar falta</h3></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" action="{{url('/falta/insertar')}}" method="POST">
                      {{ csrf_field() }}
                      <div class="form-group">
                         <label for="tipo" class="col-md-4 control-label">Tipo</label>
                         <input type="text" class="col-md-4 form-control" name="tipo" placeholder="Escribe un tipo">
                       </div>
                       <div class="form-group">
                         <label for="factor">Factor</label>
                         <input type="number" class="form-control" name="factor" step="any" placeholder="0.0">
                       </div>
                       <div class="form-group">
                         <label for="num_faltas">Número de faltas</label>
                         <input type="number" class="form-control" name="num_faltas" placeholder="0">
                       </div>
                       <div class="form-group">
                         <label for="comentario">Comentario</label>
                         <textarea  class="form-control" rows="3" name="comentario" placeholder="Escribe un comentario"></textarea>
                       </div>
                       <div class="col-md-6 col-md-offset-4">
                         <button type="reset" class="btn btn-danger">Cancelar</button>
                         <button type="submit" class="btn btn-success">Guardar</button>
                       </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
