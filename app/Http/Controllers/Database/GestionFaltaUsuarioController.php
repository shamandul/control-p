<?php

namespace App\Http\Controllers\Database;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\User;
use App\models\Suffer;
use App\models\Falta;
use Carbon\Carbon;

class GestionFaltaUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

      $suffer = new Suffer;
      $suffer->dateStart = new Carbon();
      $suffer->dateEnd = new Carbon();
      $suffer->user_id = "";
      $suffer->falta_id = "";
      $users = User::all();
      $faltas = Falta::all();
      return view('suffers.suffers_insert', ['datos'=>$suffer, 'users' =>$users, 'faltas'=>$faltas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $suffer = new Suffer;
      $suffer->dateStart = $request->dateStart;
      $suffer->dateEnd =$request->dateEnd;
      $suffer->user_id = $request->user_id;
      $suffer->falta_id = $request->falta_id;

      $suffer->save(); 
      return redirect('/gestion-faltas/all');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      if($id==='all'){
        // $suffers = Suffer::orderBy('id', 'ASC')->simplePaginate(15);
        $suffers = DB::table('suffers')
          ->join('users', 'user_id','=','users.id')
          ->join('faltas', 'falta_id', '=', 'faltas.id')
          ->select('suffers.id','users.name',
            'faltas.tipo','suffers.dateStart',
            'suffers.dateEnd')->paginate(8);

        return view('suffers.suffers_mostrar')->with('datos', $suffers);
      }else{
        $suffers = Suffer::find($id);
        dd($suffers);
        //TODO crear una vista para esto
        return view('suffers.suffers_mostrar', ['datos'=> $suffers]);
      }

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $users = User::all();
      $faltas = Falta::all();
      $suffer = Suffer::find($id);
      return view('suffers.suffers_edit', ['datos'=>$suffer, 'users' =>$users, 'faltas'=>$faltas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $suffer = Suffer::find($id);
      $suffer->dateStart = $request->dateStart;
      $suffer->dateEnd = $request->dateEnd;
      $suffer->user_id = $request->user_id;
      $suffer->falta_id = $request->falta_id;

      $suffer->save(); 
      return redirect('/gestion-faltas/all');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $suffer = Suffer::find($id);
        $suffer->delete();
        return redirect('/gestion-faltas/all');
    }
}
