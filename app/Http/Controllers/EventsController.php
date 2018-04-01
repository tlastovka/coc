<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     * It will respond to: GET:.../events
     * @return \Illuminate\Http\Response
     **/

    public function index()
    {

        $events = Event::orderBy('created_at', 'asc') ->get();                 //I have ordered all Events in asscending order
        return view('admin/admin_list_events', compact('events'));  //Tl note: a place, where I will display events created by the create method below and pulled out from the DB
    }

    /**
     * Show the form for creating a new resource.
     * It will respond to: GET:.../events/create
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/admin_create_events');
    }

    /**
     * Store a newly created resource in storage.
     * It will respond to: POST:.../events
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//
//      Todo: put all the validation to dedicated "form request" validation class - researach laravel
        $this->validate(request(), [
            'event_date' => 'required|date|after:created_at',
            'event_time' => 'required', //Todo: insert appropriate validation rules for time
            'event_title' => 'required|string|max:50',
            'event_descr' => 'required|string|max:170',
            'intro_speech' => 'required|string',
//            'ini_gift' //Todo what to put in if not required?
            'q1' => 'required', //Todo: what is the input of the yes/no button - is it binary? if so then how can I validate binary on the browser side
            'q2' => 'required', //Todo: what is the input of the yes/no button - is it binary? if so then how can I validate binary on the browser side
            'pdm1' => 'string|max:50', //Todo: why required does not work here
            'pdm2' => 'string|max:50',
            'pdm3' => 'string|max:50',
            'pdm4' => 'string|max:50',
            'pdm5' => 'string|max:50',
            'solutions_speech' => 'required|string',
            'sdm1' => 'string|size:50', // Todo: why required does not work here
            'sdm2' => 'string|max:50',
            'sdm3' => 'string|max:50',
            'sdm4' => 'string|max:50',
            'sdm5' => 'string|max:50',
            'targets_speech' => 'required|string',
            'tdm1' => 'string|max:50', // Todo: why required does not work here
            'tdm2' => 'string|max:50',
            'tdm3' => 'string|max:50',
            'tdm4' => 'string|max:50',
            'tdm5' => 'string|max:50',
            'funding_required' => 'integer', //,Todo what to put in if not required?
//            'funding_descr' => 'required|string',Todo what to put in if not required?
            'exclusion' => 'integer',  //Todo what to put in if not required?
//            'exclusion_rule' => 'string', //Todo what to put in if not required?
            'preaching' => 'required|string',
            'voting_question' => 'required|string',

            ]);




            Event::create($request->all());

            Return redirect("/admin/events/list");
    }

    /**
     * Display the specified resource.
     * It will respond to: GET /events/{id}
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view('act.show', compact('event'));// ToDo: should not here be a dollar sign?
    }

    /**
     * Show the form for editing the specified resource.
     * It will respond to: GET /events/{id}/edit
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * It will respond to: PATCH /events/{id}
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
     * It will respond to: DELETE /events/{id}
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
