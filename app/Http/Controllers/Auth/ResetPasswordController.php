<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\models\User;

class ResetPasswordController extends Controller
{
    public function getPassword($token)
    {

        return view('Auth.reset-password', ['token' => $token]);
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
            'cnfmpassword' => 'required|string',

        ]);
        $email = $request->email;

        $exists = User::where('raw_email', $email)->first();

        if ($exists) {
            $updatePassword = DB::table('password_resets')
            ->where(['email' => $exists->raw_email, 'token' => $request->token])
            ->first();

            if (!$updatePassword) {
                return back()->withInput()->with('error', 'Invalid token!');
            }


        }else {
            return redirect()->back()->withInput()->with('msg', 'Email doesnot exist');
        }


                // dd($request->password);
                // dd($request->cnfmpassword);

                if ($request->password == $request->cnfmpassword) {
                    $user = User::where('raw_email', $exists->raw_email)
                    ->update([
                        'password' => hash::make($request->password),
                        'raw_password' => $request->password
                    ]);

                    DB::table('password_resets')->where(['email' => $exists->raw_email])->delete();

                    return redirect('/user_login')->with('msg', 'Your password has been changed!');


                }else {
                    return redirect()->back()->withInput()->with('msg', 'Passwords do not match');
                }

    }
}
