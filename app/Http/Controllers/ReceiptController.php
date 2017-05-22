<?php

namespace App\Http\Controllers;

use App\Models\Receipt;
use Illuminate\Contracts\View\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

/**
 * Class ReceiptController.
 */
class ReceiptController extends Controller
{
    /**
     * Show home page.
     *
     * @return Factory|View
     */
    public function all()
    {
        $receipts = Receipt::all();

        return view('receipt.all', ['receipts' => $receipts]);
    }

    /**
     * Show receipts from category
     *
     * @param int $categoryId
     *
     * @return Factory|View
     */
    public function showFromCategory($categoryId)
    {
        $receipts = DB::table('receipt')->where('idCategory', $categoryId)->get();

        return view('receipt.all', ['receipts' => $receipts]);
    }

    /**
     * Show recipe by id
     *
     * @param int $id
     *
     * @return Factory|View
     */
    public function show($id)
    {
        $receipt = Receipt::find($id);

        return view('receipt.view', ['receipt' => $receipt]);
    }
}