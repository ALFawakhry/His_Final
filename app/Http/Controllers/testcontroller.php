<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
class testcontroller extends Controller
{
    public function show(){

        $d = DB::select('select * from users');
        return dd($d);
    }
}
