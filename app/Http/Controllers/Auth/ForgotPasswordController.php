<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use App\Notifications\ResetPassword;



class ForgotPasswordController extends Controller
{
    //

    public function getEmail()
    {
        return view('Auth.forgot-password');
    }

    public function postEmail(Request $request)
    {

            $request->validate([
                'email' => 'required|email',
            ]);

            // dd($request->email);
            $email= $request->email;

            $exists = User::where('raw_email', $email)->first();

            // dd($exists->raw_email);
        if ($exists != null) {
            # code...
            $token = Str::random(60);

            DB::table('password_resets')->insert(
                ['email' => $exists->raw_email, 'token' => $token, 'created_at' => Carbon::now()]
            );


            Notification::route('mail', $request->email)->notify(new ResetPassword($token));

            return redirect()->back()->with('msg', '¡Hemos enviado un correo electrónico con el enlace de restablecimiento de contraseña!');
        }else{

            return redirect()->back()->with('msg', 'Email does not exist');
        }


    }


}
