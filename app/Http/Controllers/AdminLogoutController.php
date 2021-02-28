<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminLogoutController extends Controller
{
    function logout(){
		session()->forget("admin_auth");
		return redirect("/admin/home");
	}
}
