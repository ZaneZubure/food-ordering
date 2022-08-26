<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diner;
use Auth;

class DinerController extends Controller
{
    public function show() {
        $data = Diner::all();
        $loggedInUserID = Auth::user()->id;
        //return view('diner', compact('data'));
        //echo $loggedInUserID;
        //return view('diner', compact('data','loggedInUserID'));
        return view('diner',['diners'=>$data]);
    }
    
    public function create() {
        return view('addDiner');
    }
    public function store() {
        
        
        
        $feedback = new Feedback;
        $feedback->content=$request->feedbacktext;
        $dinerID = Route::current()->parameter('dinerid');
        $loggedInUserID = Auth::user()->id;
        $feedback->diner_id=$dinerID;
        $feedback->user_id=$loggedInUserID;

        $feedback->save();
        
        return redirect()->route('feedback',$dinerID);
        
        
        
        return view('addDiner');
    }
}
