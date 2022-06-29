<?php

namespace App\Http\Controllers\Backend\admin\employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {

        return view('Admin.employee.add_employee');
    }


    public function store(Request $request){

        dd($request);
    }
}
