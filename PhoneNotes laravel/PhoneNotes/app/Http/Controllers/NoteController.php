<?php

namespace App\Http\Controllers;

use App\Caller;
use App\Message;
use App\Note;
use App\Note_status;
use App\Status;
use Illuminate\Http\Request;

class NoteController extends Controller
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
        $route = route('note.create');
        $note = new Note();

        return view('note.create', compact('note', 'route'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $note = new Note();
        $caller = new Caller();
        $message = new Message();




        $note->employee_id = $request->input('employee_id');


        $caller->name = $request->caller_name;
        $caller->telephone_number = $request->caller_telephone_number;
        $caller->company = $request->caller_company;


        $message->message = $request->message_message;


        $caller->save();
        $message->save();

        $note->message_id = $message->id;
        $note->caller_id = $caller->id;

        $note->save();

//        $loop = $request->get('status');
//        foreach ($loop as $value){
//            $status = new Status();
//            $note_status = new Note_status();
//
//
//            $note_status->note_id = $note->id;
//            $note_status->status_id = $value;
//            dd($request->status[1]);
//            $note_status->save();
//        }

        foreach ($request->status as $val)
        {
            $note_status = new Note_status();
            $note_status->status_id = $val;
            $note_status->note_id = $note->id;
            $note_status->save();

        }

        return redirect()->back();
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
