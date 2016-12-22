<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/app.css" rel="stylesheet">
    <title>Lista de usuarios</title>
  </head>
  <body>
    <header>
      <h1>Lista de usuarios </h1>
    </header>
    <section>
      <table class="table table-bordered">
        <thead>
          <tr class="success">
            <td>Nombre</td>
            <td>Email</td>
            <td>Rol</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            @foreach ($datos as $dato)
              <td>{{$dato['name']}}</td>
              <td>{{$dato['email']}}</td>
              <td>{{$dato['role']}}</td>
            @endforeach
          </tr>
        </tbody>

      </table>
    </section>
  </body>
</html>
