<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchase;
use App\Models\Foodpurchase;
use App\Models\Food;
use DB;
use Route;
use Auth;


class PurchaseController extends Controller
{
     public function show() {
        $loggedInUserID = Auth::user()->id;
        $purchasedata = Purchase::all();
        $fooddata = Food::all();
        $datas = Foodpurchase::all();
        return view('purchase', compact('purchasedata','fooddata','datas','loggedInUserID'));
        //return view('purchase',['purchases'=>$purchasedata],['loggedinuserid'=>$loggedInUserID],['fooddata'=>$fooddata],['datas'=>$data]);
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
        $FoodID = Route::current()->parameter('foodid');
        
        $Purchase=Purchase::find($PurchaseID);
        $Purchase->price+=$FoodPrice;
        $Purchase->update();
        
        $Foodpurchase = new Foodpurchase;
        $Foodpurchase->food_id= $FoodID;
        $Foodpurchase->purchase_id = $Purchase->id;
        $Foodpurchase->save();
    }
}
