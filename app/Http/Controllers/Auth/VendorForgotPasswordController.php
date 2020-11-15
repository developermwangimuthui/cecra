<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vendor;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use App\Notifications\VendorResetPassword;

class VendorForgotPasswordController extends Controller
{

    public function getVendorEmail()
    {
        return view('Auth.Vendor_forgot-password');
    }

    public function postVendorEmail(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
        ]);

        // // dd($request);
        // dd($request->email);
        $email = $request->email;

        $exists = Vendor::where('raw_email', $email)->first();

        // dd($exists);
        if ($exists != null) {
            # code...
        $token = Str::random(60);

        DB::table('password_resets')->insert(
            ['email' => $exists->raw_email, 'token' => $token, 'created_at' => Carbon::now()]
        );



        Notification::route('mail', $request->email)->notify(new VendorResetPassword($token));



        return redirect()->back()->with('msg', 'Si su correo es valido le hemos enviado un correo electrónico con un link para que pueda restablecer su contraseña. Por favor revise la carpeta de Correo No Deseado.');


        } else {


        return redirect()->back()->with('msg', 'Correo Electrónico Inexistente');
        }


    }
}
