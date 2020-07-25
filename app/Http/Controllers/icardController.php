<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\i_card;

class icardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $details = i_card::all();
        
        return view('index',compact('details'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         $input =  $request->all();
        // return "record successfully submited";
        //  i_card::create($request->all());

         $icard = new i_card;
        $icard->name = $request->name;
        $icard->student_id = $request->student_id;
        $icard->program = $request->program;
        $icard->dob = $request->dob;
        $icard->address = $request->address;
        
        $icard->save();

        return redirect('/icard');
          
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
      
        $details = i_card::find($id);

        // return $details->all();
        return view('icard',compact('details'));
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
        $details = i_card::find($id);
        // return $detail->name;
        return view('edit',compact('details'));
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
        return "welcome in updated ";
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
