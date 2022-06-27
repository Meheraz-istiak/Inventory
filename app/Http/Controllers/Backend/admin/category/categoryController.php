<?php

namespace App\Http\Controllers\Backend\admin\category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function index()
    {
        return view('Admin.category.category');
    }
}
