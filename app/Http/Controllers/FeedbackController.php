<?php

namespace App\Http\Controllers;

//use Illuminate\Routing\Route;
use App\Models\Feedback;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Diner;
use Route;
use DB;

class FeedbackController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //\Log::info(json_encode($request->all()));
        $feedback = new Feedback;
        $feedback->content=$request->feedbacktext;
        $feedback->user_id=$request->userid;
        $dinerID = Route::current()->parameter('dinerid');
        $feedback->diner_id=$dinerID;
        //$feedback->is_complete =0;
        $feedback->save();
        
        
//        $data = Feedback::all();
//        $dataUsers = User::all();       
//        $dinerID = Route::current()->parameter('dinerid');
//        $dataDiners = Diner::all();
//        $dinerName = DB::table('diners')->where('id', $dinerID)->value('name');
        return redirect()->route('feedback',$dinerID);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function show(Feedback $feedback)
    {
        $data = Feedback::all();
        $dataUsers = User::all();       
        $dinerID = Route::current()->parameter('dinerid');
        $dataDiners = Diner::all();
        $dinerName = DB::table('diners')->where('id', $dinerID)->value('name');
        return view('feedback', compact('data','dataUsers','dataDiners','dinerName','dinerID'));
        //return view('feedback',['feedbacks'=>$data],['users'=>$dataUsers],['diners'=>$dataDiners]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function edit(Feedback $feedback)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Feedback $feedback)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feedback $feedback)
    {
        //
    }
}
