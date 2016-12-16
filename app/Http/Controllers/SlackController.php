<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SlackController extends Controller
{
  function index()
  {
      //Algnas configuraciones extras
      $settings = [
          'username'   => 'JesusLaravel', //Nombre de usuario que envía el mensaje
          'link_names' => true    //Activar que el nombre de usuario sea un link
      ];

      //Instanciar la clase
      $client = new \Maknz\Slack\Client(config('slack.endpoint'), $settings);

      //Utilizar el método to es para elegir el canal donde se enviará el mensaje
      //El método send para indicar el texto
      $client->to('#general')->send('Enviando mensaje desde laravel');

      return 'Enviado';

  }
}
