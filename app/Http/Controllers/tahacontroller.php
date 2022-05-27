<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class tahacontroller extends Controller
{
    // public function getall()
    // {
    //     $users  =DB::table('appointment')
    //         ->join('users' ,'appointment.userid' , '=' ,'users.id')
    //         ->select('users.fullname' ,'users.id','users.email','appointment.userid','appointment.appointmentdate', 'appointment.phone')
    //         ->get();
    //     return $users[0];
    // }
    // public function getid()
    // {
    //     $afterapp = $this->getall();
    //     return view('afterapp')->with('afterapp',$afterapp);
    // }

    public function showappointment()
    {
        return view('appointment');
    }
    public function appointment(Request $request)
    {
        $request->validate([

            "email"=>'required|email',
            "phone"=>'required',
            "doc_spec"=>'required',
            "date"=>'required',
        ]);

        $email= $request->email;
        $phone=$request->phone;
        $doc_spec = $request->doc_spec;
        $fees = 100;
        $date = $request->date;
        $cheak = DB::select('select email from appointment where email = ? ', [$email]);
        $userid = DB::select('select * from users where email = ?' , [$email]);

        if($cheak)
        {
                return redirect()->back()->with('error', 'Already Appointment !');
        }
        else
        {
                DB::insert('insert into appointment (userid,email,phone,doctorSpecialization,fees,appointmentdate) values ( ? ,? , ? ,? , ? , ? )',
                [$userid[0]->id ,$email ,$phone, $doc_spec ,$fees , $date]);
                    return redirect()->back()->with('massage', 'Make Appointment Successfully !');
        }

            // DB::insert('insert into appointment (userid,email,phone,doctorSpecialization,fees,appointmentdate) values ( ? ,? , ? ,? , ? , ? )',
            // [$userid[0]->id ,$email ,$phone, $doc_spec ,$fees , $date]);

            // if($cheak==true)
            // {
            //         return redirect()->back()->with('error', 'This patient already appointment!');
            // }
            // elseif($cheak==false)
            // {
            //         return redirect()->back()->with('error2', 'Email is Invalid ! Try agin');
            // }
            // else
            // {

            //     DB::insert('insert into appointment (userid,email,phone,doctorSpecialization,fees,appointmentdate) values ( ? ,? , ? ,? , ? , ? )',
            //         [$userid[0]->id ,$email ,$phone, $doc_spec ,$fees , $date]);
            //         return redirect()->back()->with('message', 'Make Appointment Successfully !');

            // }



        #get last Appointment Id
        $appointment_id = DB::getPdo()->lastInsertId();

        #to cheack empty of data
        // $appointment = null;
        // if($result==true)
        // {
        // #select first raw
        // $appointment = $result[0];
        // }
        // if($)
        // return redirect()->back()->with('message', 'Make Appointment Successfully !');
        // return view('/afterapp')->with(['message' =>'Make Appointment Successfully !' , 'result'=>$appointment]);

    }

}
