<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\User;


class userProfileNav extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        if (session()->has('user_info')) {
            $user_info = session()->get('user_info','default');
            $id = $user_info['user_id'];
            $user = User::where('user_id',$id)->take(1)->first();

            return view('components.user-profile-nav')->with(['user'=>$user,'page'=>'profile']);
        }

    }
}
