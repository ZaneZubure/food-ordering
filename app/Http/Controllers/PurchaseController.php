<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchase;

class PurchaseController extends Controller
{
     public function show() {
        $data = Purchase::all();
        return view('purchase',['purchases'=>$data]);
    }
    
    public function store(Request $request){
        //\Log::info(json_encode($request->all()));
        $Purchase = new Purchase;
        //$Purchase->content=$request->feedbacktext;
        //$feedback->user_id=$request->userid;
        //$feedback->diner_id=1;
        //$feedback->is_complete =0;
       // $feedback->save();
        
        
//        $data = Feedback::all();
//        $dataUsers = User::all();       
//        $dinerID = Route::current()->parameter('dinerid');
//        $dataDiners = Diner::all();
//        $dinerName = DB::table('diners')->where('id', $dinerID)->value('name');
        return redirect ('diner');
    }
}
