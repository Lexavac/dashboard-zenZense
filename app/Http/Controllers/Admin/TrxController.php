<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TrxController extends Controller
{

    public function index()
    {
        // $trx = Order::all();
        $trx = Order::with(['Item', 'Shipping', 'User'])->get();

        return view('pages.transaction-list', compact('trx'));
    }

    public function show($id)
    {
        $faker = Order::findOrFail($id);

        return view('pages.transaction-detail', compact('faker'));
    }

}
