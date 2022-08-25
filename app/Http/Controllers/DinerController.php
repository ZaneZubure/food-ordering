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
    
}
