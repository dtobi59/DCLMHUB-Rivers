<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConvertController extends Controller
{

  public function all_converts(Request $request){
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

  public function index(Request $request){
    if($request->has('date')){

    }
    $converts_phone = \App\Models\Convert::whereNotIn('sent_1',[1])->get('phone');

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

  public function mark_phone($sent_number, Request $request){
    
    $phones = $request->phones;

    if (!$sent_number) {
      return "Error";
    }

    foreach ($phones as $phone) {
       $current_phone = \App\Models\Convert::where('phone',$phone)->first();

       if($current_phone && $current_phone->{'sent_'.$sent_number} != 1 ){
        $current_phone->{'sent_'.$sent_number} = 1;
        $current_phone->save();
       }

    }

    return response()->json([
      'success' => true,
      'message' => "Done & Dusted" ,
      'data' => [ ]
  ],200);

  }
   public function store(Request $request){
    //   dd($request->converts[0]['phone']);
    //   return;

      $count = 0;
      $update_count = 0;
      $converts = $request->converts;

      foreach ($converts as $convert) {
        $type = null;

        if(array_key_exists('type', $convert)){
          $type = $convert['type'];
        }

        $create_convert = \App\Models\Convert::firstOrNew(
            [
                'phone'=>$convert['phone'],
            ],
            [
                'name' => $convert['name'],
                'type' => $type,  
                'date' => $convert['date'], 
                'address' => $convert['address'],
                'old_group_id' => $convert['old_group_id']
            ]);

            if (!isset($create_convert->id)){
              $count += 1;
              $create_convert->save();
            }

            if($type && isset($create_convert->id) ){
              $update_count += 1;
              $create_convert->type = $type;
              $create_convert->save();
            }
        
      }

      return response()->json([
        'success' => true,
        'message' => "$count convert(s) created" ,
        'data' => [
          'update_count' => $update_count,
          'created_count' => $count,
          'duplicate_count' => count($converts) - $count
        ]
    ],200);



   }
}
