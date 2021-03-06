<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('isAdmin');
    }


    public function logout()
    {
        try {
            Auth::logout();
            session()->flush();
            return response()->json([
                'success' => true ,
                'message' => 'Admin Logouted Successfully'
            ], 200);

        } catch (\Throwable $th) {
            return response()->json([
                'success' => false ,
                'message' => 'Failed to logout as admin'
            ], 401);
        }
    }
    protected function guard(){
        return Auth::guard('admin');
    }
}
