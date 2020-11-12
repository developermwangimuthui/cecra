<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Category;


class userNavBar extends Component
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
        $categories = Category::where('business_type_id', 1)->get();
        $unique = $categories->sortBy('category_name')->all();

        return view('components.user-nav-bar')->with(['Scategories' => $unique]);;
    }
}
