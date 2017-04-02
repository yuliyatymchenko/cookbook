<?php

namespace App\Http\Controllers;

use App\Models\Receipt;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

/**
 * Class ReceiptController.
 */
class ReceiptController extends Controller
{
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