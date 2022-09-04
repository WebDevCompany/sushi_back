<?php

namespace App\View\Components\mainPage;

use Illuminate\View\Component;
use App\Models\Products;
use Illuminate\Support\Facades\DB;

class MainContent extends Component
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
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $productsNew = DB::table('products')
        ->leftJoin('images', 'products.id', '=', 'images.product_id')
        ->orderBy('images.updated_at', 'DESC')
        ->take(3)
	    ->get();


        return view('components.mainPage.mainContent', ['productsNew' => $productsNew]);
    }
}
