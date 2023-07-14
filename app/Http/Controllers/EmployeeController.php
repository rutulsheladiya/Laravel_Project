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
        return redirect('manage_userdetail')->with('status',"Your Data Inserted Successfully..");
    }
}
