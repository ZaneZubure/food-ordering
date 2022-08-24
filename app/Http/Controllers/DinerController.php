<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diner;

class DinerController extends Controller
{
    public function show() {
        $data = Diner::all();
        return view('diner',['diners'=>$data]);
    }
    
}
