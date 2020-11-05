<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\models\Vendor;


class VendorResetPasswordController extends Controller
{
    //
    public function getVendorPassword($token)
    {

        return view('Auth.Vendor_reset-password', ['token' => $token]);
    }

    public function updateVendorPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
            'cnfmpassword' => 'required|string',

        ]);
        $email = $request->email;

        $exists = Vendor::where('raw_email', $email)->first();

        // dd($request->password);


        $updatePassword = DB::table('password_resets')
            ->where(['email' => $exists->raw_email, 'token' => $request->token])
            ->first();

        if (!$updatePassword) {

            return back()->withInput()->with('error', 'Invalid token!');
        }

        Vendor::where('raw_email', $exists->raw_email)
            ->update(
                // ['password' => hash::make($request->password)]
                ['password' => $request->password]
            );
        // ->update(['password' => $request->password]);

        DB::table('password_resets')->where(['email' => $exists->raw_email])->delete();

        return redirect('bus/signin')->with('msg', 'Your password has been changed!');
    }
}
