<?php

namespace App\Http\Controllers;

use App\Action;
use Illuminate\Http\Request;
use App\Event;
use Illuminate\Support\Facades\Auth;


class ActionsController extends Controller
{

    /**
     * ActionsController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


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
        $question = Event::find(1);  //todo: This needst to be dynamically modified to correspond witht he event No

        return view('act/create_actions', compact('question'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [

            'ini_gift' => 'integer|max:1', //Todo what to put in if not required?
            'a1' => 'integer|max:1', //Todo: what is the input of the yes/no button
            'a2' => 'integer|max:1', //Todo: what is the input of the yes/no button
            'pda1' => 'integer|max:5',
            'pda2' => 'integer|max:5',
            'pda3' => 'integer|max:5',
            'pda4' => 'integer|max:5',
            'pda5' => 'integer|max:5',


            'tda1' => 'integer|max:5', // Todo: why required does not work here
            'tda2' => 'integer|max:5',
            'tda3' => 'integer|max:5',
            'tda4' => 'integer|max:5',
            'tda5' => 'integer|max:5',
            'sda' => 'integer|max:100', //todo: To be changed to the sldier in the future
            'user_id' => 'integer'
            // THIS IS A VERSION WHICH GOES AS FAR AS TOP THE DIAMOND
        ]);

        $data = $request->all();
        $data['user_id'] = Auth::user()->id;

//        Action::create($request->all());
        Action::create($data);

        Return redirect("/home");
    }
    /**
     * Display the specified resource.
     *
     * @param  int $id
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
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
