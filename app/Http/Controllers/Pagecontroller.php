<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class Pagecontroller extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function lang($locale)
    {
        App::setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }
    public function locale()
    {
        if(request()->ajax()) {
            //dd(\request()->post('locale'));
            App::setLocale(\request()->post('locale'));
            session()->put('locale', \request()->post('locale'));
            $this->data['redirect'] = redirect()->back();
            $this->data['message'] = 'Changed';
            return response()->json([$this->data],200);
        }
    }

    public function howToCreateYourBusiness() {
        $this->data['title'] = 'How to Create Your Business';
        return view('pages.how-to-create-your-business', $this->data);
    }
}
