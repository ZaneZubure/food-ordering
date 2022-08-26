<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchase;
use App\Models\Foodpurchase;
use DB;
use Route;
use Auth;


class PurchaseController extends Controller
{
     public function show() {
        $data = Purchase::all();
        return view('purchase',['purchases'=>$data]);
    }
    
    public function store(Request $request){
        $loggedInUserID = Auth::user()->id;
        $FoodID = Route::current()->parameter('foodid');
        $FoodPrice = DB::table('food')->where('id', $FoodID)->value('price');
        $PurchaseID = DB::table('purchases')->where('user_id', $loggedInUserID)->value('id');
        $dinerID=DB::table('food')->where('id', $FoodID)->value('diner_id');
        
        if ($PurchaseID==NULL){
            $Purchase = new Purchase;        
            $Purchase->user_id=$loggedInUserID;
            $Purchase->price=$FoodPrice;
            $Purchase->status='veikts';
                    
            $Purchase->save();

            $Foodpurchase = new Foodpurchase;
            $Foodpurchase->food_id= $FoodID;
            $Foodpurchase->purchase_id = $Purchase->id;
            $Foodpurchase->save();
        }else{
             $this->update($PurchaseID, $FoodPrice);
        }

        
        return redirect()->route('food',$dinerID);
    }
    public function update($PurchaseID, $FoodPrice){
        $loggedInUserID = Auth::user()->id;
        $Purchase=Purchase::find($PurchaseID);
        $Purchase->price+=$FoodPrice;
        $Purchase->update();
    }
}
