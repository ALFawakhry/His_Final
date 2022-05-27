<?php

use Illuminate\Http\Request;
use App\Http\Controllers\testcontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\tahaController;
use App\Http\Controllers\patientrController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/test' , [testcontroller::class , 'show']);

Route::get('/', function () {
    return view('index');
});

Route::get('/signup', function () {
    return view('signup');
});
#taha

#taha

Route::get('/index', function () {
    return view('index');
});
Route::get('/index2', function () {
    return view('index2');
});
Route::get('/index_mayar', function () {
    return view('index_mayar');
});
Route::get('/index3', function () {
    return view('index3');
});
Route::get('/index4', function () {
    return view('index4');
});
Route::get('/index5', function () {
    return view('index5');
});
Route::get('/index6', function () {
    return view('index6');
});
Route::get('/index7', function () {
    return view('index7');
});


Route::view('/contact','contactform')->name('contactform');
// Route::post('/send',[App\Http\Controllers\contactcontroller::class,'send'])->namespace('send.email');
Route::post('/send', 'App\Http\Controllers\contactcontroller@send')->name('send.email');
Route::post('/auth/check',[userController::class,'check'])->name('auth.check');
///////////Authentication/////////////

Route::group(['middleware' => 'myauth'], function(){

    // Route::get('/appointment', function () {
    //   return view('appointment');
    // });
    Route::get('/logout',function(){
        session()->flush();
        return redirect('index');
    });
    Route::get('/options', function () {
        return view('options');
    });
    Route::get('/mrn',[PatientrController::class ,'medical_record']);

    Route::get('/appointment', [tahacontroller::class , 'showappointment']);
    Route::post('/appointment',[tahacontroller::class , 'appointment']);

});
//////////Guest///////////
Route::group(['middleware' => 'myguest'], function(){
    Route::get('/login', function () {
        return view('login');
    });
    Route::post('/login', function(){
        $email =request('email');
        $password = request('password');
        $result = DB::select('select * from users where email = ? and password = ?',[$email,$password]);
     if($result)
        {
            $user = $result[0];
           // session(['loggedIn'=>true]);
            session()->regenerate();
            session([
                'loggedIn'=>true,
                'userId'=>$user->id,
                'email'=>$user->email

            ]);
            return redirect('options');
        }
        else {
            return redirect('login')->withInput()->with(['message' => 'Wrong email or password']);
        }

    });
});
Route::post('/signup',function(Request $request)
{
    //validation
    $request->validate([
        'fullName'=> 'required',
        'email'=> 'required|email',
        'password'=> 'required'
    ]);

     // data store in DB
     $name =$request->fullName;
     $email = $request->email;
     $address = $request->address;
     $gender = $request->gender;
     $password =$request->password;
     DB::insert('insert into users (fullName,email,address, gender, password) values (?, ? , ? , ? , ?)', [$name, $email , $address , $gender, $password]);
      #make user as loged in

     $userId = DB::getPdo()->lastInsertId();
    //  $result = DB::select('select id,name,email from users where id - ?', [$userId]);


    //  $user=null;
    //  if($result){
    //  $user=$result[0];
    //  }

    //  if($user==null){
    //   return back()->with(['erorr'=>'unexpected error happened during registration'])->withInput();

    //  }
    //  session([
    //  'loggedIn' =>ture,
    //  'userId' => $userId,
    //  'user' => $user
    //  ]);

  return redirect('options');//->with (['success_message' => 'YourAccount was successfully created!']);
});
// Route::post('/check2', [UserController::class,'check2']);
