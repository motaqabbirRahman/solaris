<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use App\HTTP\Requests;

use Session;

Session_start();

class SuperAdminController extends Controller
{
    public function dashboard(){
        $this->AdminAuthCheck();
         return view('admin.dashboard');
        // return view('admin.category.create');
    }

    public function logout(){
        Session::flush();
        return Redirect::to('/admin');
    }
public function AdminAuthCheck(){
    $admin_id=Session::get('admin_id');
    if ($admin_id){
        return;
    }
    else{
        return Redirect::to('/admin')->send();
    }
}
}
