<?php

namespace Database\Seeders;
use DB;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('diners')->insert([
            'name' =>'Piciņa',
            'type' =>'Picērija',
            'address' => 'Lielā iela 86',
            'email' =>'picina'.'@gmail.com',
            'phone' => '21234567',
            'rating' => '4.5',
        ]);
        
        DB::table('diners')->insert([
            'name' =>'Lienes Virtuve',
            'type' =>'Mājas Virtuve',
            'address' => 'Pagalma bulvāris 2a',
            'email' =>'lienesvirtuve'.'@gmail.com',
            'phone' => '25687461',
            'rating' => '4.7',
        ]);
                
        DB::table('diners')->insert([
            'name' =>'Osaka',
            'type' =>'Austrumu virtuve',
            'address' => 'Papardes gatve 27',
            'email' =>'osakarestaurant'.'@gmail.com',
            'phone' => '24678165',
            'rating' => '4.3',
        ]);
        
        DB::table('diners')->insert([
            'name' =>'Kebabnīca',
            'type' =>'Kebabi',
            'address' => 'Sānu iela 18',
            'email' =>'kebabforlife'.'@gmail.com',
            'phone' => '27895612',
            'rating' => '4.8',
        ]);
        
        DB::table('food')->insert([
            'name' => 'Siera Pica 25cm',
            'diner_id'=> '1',
            'ingredients'=>'siers, tomātu mērce, picu mīkla',
            'allergens'=>'gluten, soja, piens',
            'description'=>'Vienkārša siera pica',
            'type'=>'veģetārs',
            'price'=>'5.5',
        ]);
            
        DB::table('food')->insert([
            'name' => 'Desu Pica 25cm',
            'diner_id'=> '1',
            'ingredients'=>'siers, tomātu mērce, salami, picu mīkla',
            'allergens'=>'gluten, soja, piens',
            'description'=>'Mūsu slavenā desu pica',
            'type'=>'',
            'price'=>'6.5',
            
        ]);
        
        DB::table('food')->insert([
            'name' => 'Miso zupa',
            'diner_id'=> '3',
            'ingredients'=>'tofu, jūras zāles',
            'allergens'=>'soja',
            'description'=>'Tradicionālā miso zupa',
            'type'=>'vegan',
            'price'=>'3.8',
            
        ]);
        DB::table('food')->insert([
            'name' => 'Avokado maki',
            'diner_id'=> '3',
            'ingredients'=>'rīsi, rīsu etiķis,rīsi, wasabi',
            'allergens'=>'soja, gluten',
            'description'=>'',
            'type'=>'vegan',
            'price'=>'4.8',
            
        ]);
        
        DB::table('food')->insert([
            'name' => 'Vārīti karteupeļi',
            'diner_id'=> '2',
            'ingredients'=>'kartupeļi',
            'allergens'=>'',
            'description'=>'',
            'type'=>'vegan',
            'price'=>'1.5',
            
        ]);
        
        DB::table('food')->insert([
            'name' => 'Vistas kebabs',
            'diner_id'=> '4',
            'ingredients'=>'vistas gaļa, kāposti, sīpoli, tomāti, lavašs',
            'allergens'=>'gluten, soja',
            'description'=>'Tradicionāls vistas kebabs',
            'type'=>'',
            'price'=>'6',
            
        ]);
        
        DB::table('food')->insert([
            'name' => 'Mix kebabs',
            'diner_id'=> '4',
            'ingredients'=>'vistas gaļa, liellopa gaļa, kāposti, sīpoli, tomāti, lavašs',
            'allergens'=>'gluten, soja',
            'description'=>'Kebabs ar vistas un liellopa gaļu',
            'type'=>'',
            'price'=>'7',
            
        ]);
        
        DB::table('users')->insert([
            'name' => 'Jānis',
            'last_name'=> 'Ozols',
            'role'=> '',
            'phone'=> '24568379',
            'email'=> 'jozols@gmail.com',
            'alias'=>'MrOak',
            
        ]);
        
        DB::table('users')->insert([
            'name' => 'Marta',
            'last_name'=> 'Bērziņa',
            'role'=> '',
            'phone'=> '26549878',
            'email'=> 'martina123@gmail.com',
            'alias'=>'martux',
            
        ]);
        
        DB::table('feedback')->insert([
            'content' => 'Ļoti labas picas!',
            'diner_id'=> '1',
            'user_id'=> '1',
            
        ]);
        
        DB::table('feedback')->insert([
            'content' => 'Labas cenas, lielas porcijas, garšīgs ēdiens!',
            'diner_id'=> '3',
            'user_id'=> '1',
            
        ]);
        
        DB::table('feedback')->insert([
            'content' => 'Labākā siera pica pilsētā!',
            'diner_id'=> '1',
            'user_id'=> '2',
            
        ]);
        
        
        
        DB::table('purchases')->insert([
            'price' => '12.0',
            'status'=>'pieņemts',
            'user_id'=> '1',
            
        ]);

        DB::table('foodpurchases')->insert([
            'food_id'=> '1',
            'purchase_id'=> '1',
            
        ]);
        DB::table('foodpurchases')->insert([
            'food_id'=> '2',
            'purchase_id'=> '1',
            
        ]);
        
    }
}
