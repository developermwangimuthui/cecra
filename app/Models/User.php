<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\CanResetPassword;
use App\Notifications\ResetPassword as ResetPasswordNotification;

class User extends Model
{
    use HasFactory;
    use Notifiable;

    protected $table = 'users';

    /**
     * Route notifications for the mail channel.
     *
     * @return string
     */
    public function routeNotificationForMail()
    {
        return $this->raw_email;
    }
  /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['firstname','lastname','profile_name','email','raw_email','mobile',
                           'password','raw_password','street','street_no','country','city','postal_code'];

    public function checkLogin($email,$password){
        $login = DB::select("select * from users where raw_email=? and raw_password=?",[$email,$password]);
        return $login;
    }
    public function checkEmailExists($email){
        $login = DB::select("select * from users where raw_email=?",[$email]);
        return $login;
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }
}
