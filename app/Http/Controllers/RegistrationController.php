<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RegistrationController extends Controller
{
    public function registration()
    {

        return view('registration');
    }

    public function store(Request $request)
    {

        $request->validate([

            'name' => 'required',
            'batch' => 'required',
            'phone' => 'required',
            'bkash_number' => 'required',
            'trnx_id' => 'required',
            'image'=>'mimes:jpg,jpeg,png'
        ]);


        //image upload
        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $slug = Str::slug($request->name);
            if (isset($image)) {
                $currentDate = Carbon::now()->toDateString();
                $imagename = $slug . '-' . $currentDate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
                if (!file_exists('uploads/members')) {
                    mkdir('uploads/members', 0777, true);
                }
                $image->move('uploads/members', $imagename);
            }
        }else{

            $imagename = NULL;
        }

        $member = new Member();
        $member->name = $request->name;
        $member->batch = $request->batch;
        $member->phone = $request->phone;
        $member->bkash_number = $request->bkash_number;
        $member->trnx_id = $request->trnx_id;
        $member->image = $imagename;

        $member->save();

        return redirect()->back();
    }

    public function members()
    {

       $members = Member::orderBy('id', 'DESC')->paginate(24);
        return view('member', compact('members'));
    }
}
