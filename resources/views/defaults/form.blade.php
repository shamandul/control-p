<div class="form-group">
   <label for="tipo" class="col-md-4 control-label">Tipo</label>
   <input type="text" class="col-md-4 form-control" name="tipo" value="{{$falta['tipo']}}" placeholder="Escribe un tipo">
 </div>
 <div class="form-group">
   <label for="factor">Factor</label>
   <input type="number" class="form-control" name="factor" step="any" value="{{$falta['factor']}}" placeholder="0.0">
 </div>
 <div class="form-group">
   <label for="num_faltas">Número de faltas</label>
   <input type="number" class="form-control" name="num_faltas" value="{{$falta['num_faltas']}}"  placeholder="0">
 </div>
 <div class="form-group">
   <label for="comentario">Comentario</label>
   <textarea  class="form-control" rows="3" name="comentario" placeholder="Escribe un comentario">{{$falta['comentario']}}</textarea>
 </div>
 <div class="col-md-6 col-md-offset-4">
   <button type="reset" class="btn btn-danger">Cancelar</button>
   <button type="submit" class="btn btn-success">Guardar</button>
 </div>
