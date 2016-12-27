<?php

namespace App\Http\Controllers\Database;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Holiday;

class HolidayController extends Controller
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
