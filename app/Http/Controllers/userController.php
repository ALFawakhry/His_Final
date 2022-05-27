<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{

   function check(Request $request){
       //validate
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|',
        ]);


}

public function check2(Request $request){

    //validation
    $request->validate([
        'fullName'=> 'required|max:100',
        'email'=> 'required|email|unique:users',
        'password'=> 'required|confirmed|min:8'
    ]);

}
/*
     // data store in DB
     $name = $request->fullName;
     $email = $request->email;
     $password = $request->password;
     //$address = $request->address;
     $passwordEnc = Hash ::make($password);
     // $phone = $request->phone
     DB::insert('insert into users (fullName, email , password ) values (?, ? , ? )', [$name, $email ,$passwordEnc]);
     // make user as loged in
     $userId = DB::getPdo()->lastInsertId();
     $result = DB::select('select id,name,email from users where id - ?', [$userId]);


     $user=null;
     if($result){
     $user=$result[0];
     return redirect('options');
     }
     else {
        return redirect('signup')->withInput();
    }
     if($user==null){
      return back()->with(['erorr'=>'unexpected error happened during registration'])->withInput();

     }
     session([
     'loggedIn' => ture,
     'userId' => $userId,
     'user' => $user
     ]);

  return redirect('options')->with (['success_message' => 'YourAccount was successfully created!']);
}
*/
}

