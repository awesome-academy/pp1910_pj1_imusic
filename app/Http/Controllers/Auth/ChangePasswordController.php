<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePasswordRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    function ChangePassword(Request $request){
        $currentPassword = $request->password;
        
        $user = auth()->user();
        if (Hash::check($currentPassword, $user->password)) {
            $user->password = Hash::make($request->new_password);
            $user->save();
            return view ('auth.login');
        }
        return view ('auth.changepassword');
    }
}