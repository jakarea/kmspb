<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function registration()
    {

         return view('registration');
    }

    public function store(Request $request)
    {
 
         $request->validate([

               'name'=>'required',
               'batch'=>'required',
               'phone'=>'required',
               'bkash_number'=>'required',
               'trnx_id'=>'required'
         ]);


         $member = new Member();
         $member->name = $request->name;
         $member->batch = $request->batch;
         $member->phone = $request->phone;
         $member->bkash_number = $request->bkash_number;
         $member->trnx_id = $request->trnx_id;
         $member->save();

         return redirect()->back();


    }

    public function members()
    {

        return view('member');
    }
}
