<?php

namespace App\Http\Controllers;

use App\Models\Receipt;
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
        $receipts = Receipt::all();

        return view('home', ['receipts' => $receipts]);
    }
}