<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConvertController extends Controller
{

  public function index(Request $request){
    if($request->has('date')){

    }
    $converts_phone = \App\Models\Convert::all('phone');

    $phones = [];
    foreach ($converts_phone as $item) {
      if($item->phone == "0") continue;
      $phones[] = $item->phone;
    }
    return response()->json([
      'success' => true,
      'message' => "Data Retrived" ,
      'data' => [
        'phones' => $phones,
        'phone_count' => count($phones),
      ]
  ],200);
  }
   public function store(Request $request){
    //   dd($request->converts[0]['phone']);
    //   return;

      $count = 0;
      $converts = $request->converts;

      foreach ($converts as $convert) {

        $create_convert = \App\Models\Convert::firstOrNew(
            [
                'phone'=>$convert['phone'],
                'name' => $convert['name'], 
            ],
            [
                'date' => $convert['date'], 
                'address' => $convert['address'],
                'old_group_id' => $convert['old_group_id']
            ]);

            if (!isset($create_convert->id)){
              $count += 1;
              $create_convert->save();
            }
        
      }

      return response()->json([
        'success' => true,
        'message' => "$count convert(s) created" ,
        'data' => [
          'created_count' => $count,
          'duplicate_count' => count($converts) - $count
        ]
    ],200);



   }
}
