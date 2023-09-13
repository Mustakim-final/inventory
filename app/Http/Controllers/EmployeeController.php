<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class EmployeeController extends Controller
{

    public function addempage()
    {
        return view('Employee.add_employe');
    }

    public function postemploye(Request $request)
    {
        $request->validate([
            'name' => 'required|max:200',
            'email' => 'required|email|unique:employees,email|max:255',
            'phone' => 'required',
            'nid_no' => 'required|max:30|unique:employees,nid_no',
            'address' => 'required',
            'photo' => 'required',
            'salary' => 'required'
        ]);

        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['address'] = $request->address;
        $data['experience'] = $request->experience;
        $data['nid_no'] = $request->nid_no;
        $data['salary'] = $request->salary;
        $data['vacation'] = $request->vacation;
        $data['city'] = $request->city;
        $image = $request->file('photo');

        //dd($file);

        if ($image) {
            $file_name = Str::random(7);
            $ext = strtolower($image->getClientOriginalExtension());
            $file_full_name = $file_name . '.' . $ext;

            $upload_path = 'photo/';
            $file_url = $upload_path . $file_full_name;

            $success = $image->move($upload_path, $file_full_name);

            if ($success) {
                $data['photo'] = $file_url;
                DB::table('employees')->insert($data);
                return redirect()->back()->with('message', 'Employe inserted');
            } else {
                return redirect()->back()->with('message', 'something wrong');
            }
        }
    }

    public function allemploye()
    {
        $eployees = Employee::all();
        //dd($eployees);
        return view('Employee.all_employe', compact('eployees'));
    }

    public function employedelete($id)
    {
        $employee = Employee::find($id);
        File::delete($employee->photo);
        $employee->delete();
        return redirect()->back()->with('message', 'Delete Employee');
    }

    public function employeview($id)
    {
        $employee = Employee::find($id);
        //dd($employee);
        return view('Employee.profile', compact('employee'));
    }

    public function employeupdate(Request $request, $id)
    {
        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['experience'] = $request->experience;
        $data['nid_no'] = $request->nid_no;
        $data['salary'] = $request->salary;
        $data['vacation'] = $request->vaction;
        $data['address'] = $request->location;
        $data['city'] = $request->city;

        $image = $request->file('photo');

        if ($image) {
            $file_name = Str::random(7);
            $ext = strtolower($image->getClientOriginalExtension());
            $file_full_name = $file_name . '.' . $ext;

            $upload_path = 'photo/';
            $file_url = $upload_path . $file_full_name;

            $success = $image->move($upload_path, $file_full_name);

            if ($success) {
                $data['photo'] = $file_url;
                $employee = Employee::find($id);
                File::delete($employee->photo);
                DB::table('employees')->where('id', $id)->update($data);
                return redirect()->back()->with('message', 'Employee profile update');
            } else {
                return redirect()->back()->with('message', 'something wrong');
            }
        }

        DB::table('employees')->where('id', $id)->update($data);
        return redirect()->back()->with('message', 'Employee profile update without photo');
    }
}
