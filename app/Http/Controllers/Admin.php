<?php

namespace App\Http\Controllers;

use Dotenv\Util\Regex;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use APP\Models\Product as product;
use function Termwind\render;

class Admin extends Controller
{
    public function post (){
        return view('admin-login');
    }
    public function get (Request $request){
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
            'role' => 1,
        ]; 
         //dd(DB::table('users')->where($credentials)->exists());
        // Kiểm tra thông tin đăng nhập bằng Query Builder
        if (DB::table('users')->where($credentials)->exists()) {
            Auth::loginUsingId(1);
            return redirect()->route('dashboard/index');
        } else {
            return redirect()->back()->with("res", 'saithongtin');
        }
    }
    public function adminlogout(Request $request){
        Auth::logout(); 
        $request->session()->invalidate(); 
        $request->session()->regenerateToken(); 
        return redirect()->to('/admin'); 
    }
  
}
