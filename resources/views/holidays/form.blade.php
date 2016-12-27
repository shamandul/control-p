<div class="form-group">
   <label for="tipo">Inicio</label>
   <input type="date"class="form-control" name="dateStart" value="{{$datos['dateStart']}}" >
 </div>
 <div class="form-group">
   <label for="factor">Fin</label>
   <input type="date" class="form-control" name="dateEnd" value="{{$datos['dateEnd']}}" >
 </div>
 <div class="form-group">
   <label for="num_faltas">máximos días</label>
   <input type="number" class="form-control" name="maxDay" value="{{$datos['maxDay']}}"  placeholder="0">
 </div>
 <div class="form-group">
   <label for="num_faltas">Disfrutados</label>
   <input type="number" class="form-control" name="Enjoyed" value="{{$datos['Enjoyed']}}"  placeholder="0">
 </div>
 <div class="form-group">
   <label for="comentario">Comentario</label>
   <textarea  class="form-control" rows="3" name="comment" placeholder="Escribe un comentario">{{$datos['comment']}}</textarea>
 </div>
 <div class="col-md-6 col-md-offset-4">
   <button type="reset" class="btn btn-danger">Cancelar</button>
   <button type="submit" class="btn btn-success">Guardar</button>
 </div>
