<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Receipt;
use Illuminate\Contracts\View\Factory;
use Illuminate\Support\Facades\DB;
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
        $topReceipts = Receipt::latest(10)->get();

        return view('home', ['receipts' => $topReceipts]);
    }
}