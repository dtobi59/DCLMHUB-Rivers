<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConvertController extends Controller
{
   public function store(Request $request){
    //   dd($request->converts[0]['phone']);
    //   return;

      $count = 0;
      $converts = $request->converts;

      foreach ($converts as $convert) {
        \App\Models\Convert::firstOrCreate(
            [
                'phone'=>$convert['phone']
            ],
            [
                'name' => $convert['name'], 
                'date' => $convert['date'], 
                'address' => $convert['address']
            ]);

        $count += 1;
      }

      return response()->json([
        'success' => true,
        'message' => "$count convert(s) created" ,
        'data' => []
    ],200);



   }
}
