<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use App\Models\Diner;
use Route;
use DB;
use Auth;

class FoodController extends Controller
{
    public function show() {
        $data = Food::all();
        $dinerID = Route::current()->parameter('dinerid');
        $loggedInUserID = Auth::user()->id;
        $dataDiners = Diner::all();
        //$foodID = DB::table('food')->value('id');
        $dinerName = DB::table('diners')->where('id', $dinerID)->value('name');
        return view('food',compact('data','dataDiners','dinerName','dinerID','loggedInUserID'));
    }
}
