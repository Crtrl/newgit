<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function Index()
    {
    	return view('admin/admin');
    }

       public function common()
    {
    	return view('common/admin');
    }
}
