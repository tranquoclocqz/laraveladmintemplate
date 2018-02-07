<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class admin_indexController extends Controller
{
    function indexadmin(){
    	return view('backend/template/index');
    }
    function calendar(){
    	return view('backend/template/calendar');
    }
    function btn(){
        return view('backend/template/buttons');
    }
    function charts(){
    	return view('backend/template/charts');
    }
    function chat(){
    	return view('backend/template/chat');
    }
    function l403(){
    	return view('backend/template/error403');
    }
    function l404(){
    	return view('backend/template/error404');
    }
    function l405(){
    	return view('backend/template/error405');
    }
    function l500(){
    	return view('backend/template/error500');
    }
    function common(){
    	return view('backend/template/form-common');
    }
    function val(){
    	return view('backend/template/form-validation');
    }
    function wiz(){
    	return view('backend/template/form-wizard');
    }
    function gal(){
    	return view('backend/template/gallery');
    }
    function grid(){
    	return view('backend/template/grid');
    }
    function index2(){
    	return view('backend/template/index2');
    }
    function interface_f(){
    	return view('backend/template/interface_tpl');
    }
    function inv(){
    	return view('backend/template/invoice');
    }
    function table(){
    	return view('backend/template/tables');
    }
    function wig(){
    	return view('backend/template/widgets');
    }
}
