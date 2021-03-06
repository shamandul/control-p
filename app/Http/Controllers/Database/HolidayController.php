<?php

namespace App\Http\Controllers\Database;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Holiday;

class HolidayController extends Controller
{


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      $vacaciones = new Holiday;
      $vacaciones->dateStart = "";
      $vacaciones->dateEnd = "";
      $vacaciones->maxDay = "";
      $vacaciones->Enjoyed = "";
      $vacaciones->comment = "";
      return view('holidays.holidays_insert', ['datos'=>$vacaciones]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $vacaciones = new Holiday;
      $vacaciones->dateStart = $request->dateStart;
      $vacaciones->dateEnd = $request->dateEnd;
      $vacaciones->maxDay = $request->maxDay;
      $vacaciones->Enjoyed = $request->Enjoyed;
      $vacaciones->comment = $request->comment;

      $vacaciones->save(); 
      return redirect('/vacaciones/show');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
      $vacaciones = Holiday::all();
      return view('holidays.holidays_mostrar', ['datos'=> $vacaciones]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $vacaciones = Holiday::find($id);
      return view('holidays.holidays_modificar', ['datos'=>$vacaciones]);
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
      $vacaciones = Holiday::find($id);
      $vacaciones->dateStart = $request->dateStart;
      $vacaciones->dateEnd = $request->dateEnd;
      $vacaciones->maxDay = $request->maxDay;
      $vacaciones->Enjoyed = $request->Enjoyed;
      $vacaciones->comment = $request->comment;

      $vacaciones->save(); 
      return redirect('/vacaciones/show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $vacaciones = Holiday::find($id);
      $vacaciones->delete();
      return redirect('/vacaciones/show');
    }
}
