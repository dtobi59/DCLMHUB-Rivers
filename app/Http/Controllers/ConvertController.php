<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConvertController extends Controller
{
   public function store(Request $request){
      logger($request->converts);
   }
}
