<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use App\Models\Diner;
use Route;
use DB;

class FoodController extends Controller
{
    public function show() {
        $data = Food::all();
        $dinerID = Route::current()->parameter('dinerid');
        $dataDiners = Diner::all();
        $dinerName = DB::table('diners')->where('id', $dinerID)->value('name');
        return view('food',compact('data','dataDiners','dinerName','dinerID'));
    }
}
