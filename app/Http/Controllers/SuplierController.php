<?php

namespace App\Http\Controllers;

use App\Models\Suplier;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class SuplierController extends Controller
{
    public function addempage()
    {
        return view('supliers.add_supliers');
    }

    public function postsuplier(Request $request)
    {
        //dd($request->all());

        $request->validate([
            'name' => 'required|max:200',
            'email' => 'required|email|unique:supliers,email|max:255',
            'phone' => 'required',
            'type' => 'required',
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
        $data['type'] = $request->type;
        $data['account_holder'] = $request->account_holder;
        $data['account_number'] = $request->account_number;
        $data['bank_name']=$request->bank_name;
        $data['bank_brance']=$request->bank_brance;
        $data['city'] = $request->city;
        $image = $request->file('photo');

        //dd($data);

        if ($image) {
            $file_name = Str::random(7);
            $ext = strtolower($image->getClientOriginalExtension());
            $file_full_name = $file_name . '.' . $ext;

            $upload_path = 'suplier/';
            $file_url = $upload_path . $file_full_name;

            $success = $image->move($upload_path, $file_full_name);

            if ($success) {
                $data['photo'] = $file_url;
                DB::table('supliers')->insert($data);
                return redirect()->back()->with('message', 'supliers inserted');
            } else {
                return redirect()->back()->with('message', 'something wrong');
            }
        }
    }

    public function allsupliers()
    {
        $suplier = Suplier::all();
        //dd($suplier);
        return view('supliers.all_supliers', compact('suplier'));
    }
}
