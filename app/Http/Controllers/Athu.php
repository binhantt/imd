<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
class Athu extends Controller
{
    public function getlogin(Request $request){
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
            'role' => 1,
        ]; 
        //  dd(DB::table('users')->where($credentials)->exists());
        // Kiểm tra thông tin đăng nhập bằng Query Builder
        if (DB::table('users')->where($credentials)->exists()) {
            Auth::loginUsingId(1);
            return redirect()->route('page/index');
        } else {
            return redirect()->back()->with("res", 'saithongtin');
        }

    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->to('/');
    }
}
