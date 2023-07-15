<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function store(Request $request)
    {
        $employee = new Employee();
        $employee->name = $request->username;
        $employee->email = $request->email;
        $employee->mobileno = $request->mobileno;
        $employee->gender = $request->gender;
        $skills = implode(",",$request->skill);
        $employee->skill = $skills;
        $employee->city = $request->city;
        $employee->save();
        session()->flash('message',"Your Data Inserted Successfully..");
        return redirect('userdetails');
    }

    public function index(){
       $employeeData = Employee::all();
       return view('admin.userdetails',['empData'=>$employeeData]);
    }

    public function viewPersonalDetail($empId){
       $personalDetail = Employee::find($empId);
    //    dd($personalDetail->toArray());
    return view('admin.viewpersonaldetail',['personaldata'=>$personalDetail]);
    }

    public function edit($empId){
        $employeeData = Employee::find($empId);
        // dd($employeeData['skill']);
        $empSkill = explode(",",$employeeData['skill']);
        return view('admin/editemployee',['empdata'=>$employeeData,'empSkill'=>$empSkill]);
    }

    public function update(Request $request){
        $employee =  Employee::where("id",$request->empId)->first();
        $employee->name = $request->username;
        $employee->email = $request->email;
        $employee->mobileno = $request->mobileno;
        $employee->gender = $request->gender;
        $skills = implode(",",$request->skill);
        $employee->skill = $skills;
        $employee->city = $request->city;
        $employee->save();
       session()->flash('message',"Your Data Has Been Updated.");
       return redirect('userdetails');
    }

    public function delete($empId){
       $employee = Employee::find($empId);
       $employee->delete();
       session()->flash('message',"Record Has Been Deleted..");
       return redirect('userdetails');
    }
}
