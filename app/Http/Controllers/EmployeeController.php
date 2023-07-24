<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use PhpParser\Node\Expr\Empty_;
use Illuminate\Support\Facades\Gate;

class EmployeeController extends Controller
{
    public function store(Request $request)
    {
        $employee = new Employee();
        $employee->name = $request->username;
        $employee->email = $request->email;
        $employee->mobileno = $request->mobileno;
        $employee->gender = $request->gender;
        $skills = implode(",", $request->skill);
        $employee->skill = $skills;
        $employee->city = $request->city;
        $image = $request->file('image');
        $ext = $image->extension();
        $image_name = time() . '.' . $ext;
        $image->storeAs('public/Media', $image_name);
        $employee->image = $image_name;
        $employee->save();
        session()->flash('message', "Your Data Inserted Successfully..");
        return redirect('userdetails');
    }

    public function index()
    {
        $employeeData = Employee::all();
        return view('admin.userdetails', ['empData' => $employeeData]);
    }

    public function viewPersonalDetail($empId)
    {
        $personalDetail = Employee::find($empId);
        if (Gate::denies('isAdmin', $personalDetail)) {
            abort(403, "you can not access this page");
        }
        return view('admin.viewpersonaldetail', ['personaldata' => $personalDetail]);
    }

    public function edit($empId)
    {
        $employeeData = Employee::find($empId);
        if (Gate::denies('isAdmin', $employeeData)) {
            abort(403, "you can not access this page");
        }
        $empSkill = explode(",", $employeeData['skill']);
        return view('admin/editemployee', ['empdata' => $employeeData, 'empSkill' => $empSkill]);
    }

    public function update(Request $request)
    {
        $employee =  Employee::where("id", $request->empId)->first();
        if (Gate::denies('isAdmin', $employee)) {
            abort(403, "you can not access this page");
        }
        $employee->name = $request->username;
        $employee->email = $request->email;
        $employee->mobileno = $request->mobileno;
        $employee->gender = $request->gender;
        $skills = implode(",", $request->skill);
        $employee->skill = $skills;
        $employee->city = $request->city;
        //   dd($request->file('image'));
        if ($request->file('image') != '') {
            $path = public_path('storage/Media/');

            if ($employee->Image != ''  && $employee->Image != null) {
                $file_old = $path . $employee->Image;
                // dd($file_old);
                unlink($file_old);
            }
            $image = $request->file('image');
            $ext = $image->extension();
            $image_name = time() . '.' . $ext;
            $image->storeAs('public/Media', $image_name);
            $employee->image = $image_name;
        }
        $employee->save();
        session()->flash('message', "Your Data Has Been Updated.");
        return redirect('userdetails');
    }

    public function delete($empId)
    {
        $employee = Employee::find($empId);
        if (Gate::denies('isAdmin', $employee)) {
            abort(403, "you can not access this page");
        }
        $employee->delete();
        session()->flash('message', "Record Has Been Deleted..");
        return redirect('userdetails');
    }

    public function admin()
    {
        $totalEmployee = Employee::all()->count();
        return view('admin.dashboard', ['totalEmployee' => $totalEmployee]);
    }
}
