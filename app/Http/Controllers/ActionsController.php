<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;


class ActionsController extends Controller
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
        $question=Event::find(1);  //todo: This needst to be dynamically modified to correspond witht he event No

        return view('act/create_actions', compact('question'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate(request(), [

           'ini_gift' => 'boolean', //Todo what to put in if not required?
            'a1' => 'boolean', //Todo: what is the input of the yes/no button
            'a2' => 'boolean', //Todo: what is the input of the yes/no button
            'pda1' => 'integer|max:1',
            'pda2' => 'integer|max:1',
            'pda3' => 'integer|max:1',
            'pda4' => 'integer|max:1',
            'pda5' => 'integer|max:1',


           'tda1' => 'integer|max:1', // Todo: why required does not work here
            'tda2' => 'integer|max:1',
            'tda3' => 'integer|max:1',
            'tda4' => 'integer|max:1',
            'tda5' => 'integer|max:1',
            'sda' => 'integer|max:2' //todo: To be changed to the sldier in the future
            // THIS IS A VERSION WHICH GOES AS FAR AS TOP THE DIAMOND
           ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function show($id)
//    {
//    }

    public function show(Event $event)
    {
        return view('act/create_actions', compact('event'));// ToDo: should not here be a dollar sign?
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