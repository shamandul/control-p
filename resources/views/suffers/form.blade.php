<div class="form-group">
  <select name="user_id" class="form-control">
    @foreach ($users as $user)
    <option value="{{$user['id']}}">{{$user['name']}}</option>
    @endforeach
  </select>
</div>
<div class="form-group">
  <select name="falta_id" class="form-control">
    @foreach ($faltas as $falta)
    <option value="{{$falta['id']}}">{{$falta['tipo']}}</option>
    @endforeach
  </select>
</div>
<div class="form-group">
   <label for="tipo">Inicio</label>
   <input type="date"class="form-control" name="dateStart" value="{{$datos['dateStart']}}" >
 </div>
 <div class="form-group">
   <label for="factor">Fin</label>
   <input type="date" class="form-control" name="dateEnd" value="{{$datos['dateEnd']}}" >
 </div>
 <div class="col-md-6 col-md-offset-4">
   <button type="reset" class="btn btn-danger">Cancelar</button>
   <button type="submit" class="btn btn-success">Guardar</button>
 </div>
