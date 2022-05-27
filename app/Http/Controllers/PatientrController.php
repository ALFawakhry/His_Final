<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PatientrController extends Controller
{
  public function medical_record(){
    $medical_rec=DB::select('select * from mrn where patient_id = ?',[session('userId')]);
    return view('medical_record',['medical_rec'=>$medical_rec]);
    }
}
