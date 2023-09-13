<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function addempage()
    {
        return view('customers.add_customer');
    }

    public function postcustomer(Request $request)
    {
        $request->validate([
            'name' => 'required|max:200',
            'email' => 'required|email|unique:employees,email|max:255',
            'phone' => 'required',
            'nid_no' => 'required|max:30|unique:employees,nid_no',
            'address' => 'required',
            'photo' => 'required',
            'account_holder' => 'required',
            'account_number' => 'required',
            'bank_name' => 'required',
            'bank_brance' => 'required',
        ]);

        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['address'] = $request->address;
        $data['shopname'] = $request->shopname;
        $data['nid_no'] = $request->nid_no;
        $data['account_holder'] = $request->account_holder;
        $data['account_number'] = $request->account_number;
        $data['bank_name']=$request->bank_name;
        $data['bank_brance']=$request->bank_brance;
        $data['city'] = $request->city;
        $image = $request->file('photo');

        //dd($file);

        if ($image) {
            $file_name = Str::random(7);
            $ext = strtolower($image->getClientOriginalExtension());
            $file_full_name = $file_name . '.' . $ext;

            $upload_path = 'customer/';
            $file_url = $upload_path . $file_full_name;

            $success = $image->move($upload_path, $file_full_name);

            if ($success) {
                $data['photo'] = $file_url;
                DB::table('customers')->insert($data);
                return redirect()->back()->with('message', 'Customer inserted');
            } else {
                return redirect()->back()->with('message', 'something wrong');
            }
        }
    }
}
