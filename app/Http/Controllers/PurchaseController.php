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
}
