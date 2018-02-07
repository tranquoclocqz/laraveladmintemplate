<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\test_simple;
class testController extends Controller
{
    public function test(){
    	$pg = DB::table('table_test_simple')->paginate(15);
    	return view('frontend/template/index',['pg'=>$pg]);
    }
}
