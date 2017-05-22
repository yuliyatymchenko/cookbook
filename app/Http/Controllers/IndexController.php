<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

/**
 * Class IndexController.
 */
class IndexController extends Controller
{
    /**
     * Show home page.
     *
     * @return Factory|View
     */
    public function show()
    {
        $categories = Category::all();

        return view('home', ['categories' => $categories]);
    }
}