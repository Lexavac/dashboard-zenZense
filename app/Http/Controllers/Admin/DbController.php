<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\User;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderItem;

class DbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $cust = Users::where("level", "Customer")->count();
        $seller = Users::where("level", "Seller")->count();
        $pro = Product::where("isActive", "1")->count();
        $transaksi = Order::where("id","<" ,"100")->count();
        $ourseller = User::all();

        $trans = Order::all();



        // $bestseller = OrderItem::all()  ;



        // $order=
            $order1 = OrderItem::where("products_id","5")->count();
            $order2 = OrderItem::where("products_id","6")->count();
            $order3 = OrderItem::where("products_id","7")->count();
            $order4 = OrderItem::where("products_id","8")->count();
            $order5 = OrderItem::where("products_id","9")->count();
            $order6 = OrderItem::where("products_id","10")->count();
            $order7 = OrderItem::where("products_id","12")->count();
            $order8 = OrderItem::where("products_id","14")->count();
        // ;


        // $order=
        //     $order1 = OrderItem::where("products_id", "<", "100")->count();

        //     OrderItem::orderBy('products_id', 'desc')->get()
        // ;
        // $order= OrderItem::select(
        //     'products_id as id',
        //     'product_qty as qty')
        //     ('id * qty as total_sale')
        // ->orderBy('total_sale', 'desc');


        return view('pages/dashboard-admin', compact(
            'cust',
            'seller',
            'pro',
            'transaksi',
            'trans',
            'ourseller',
            // 'bestseller',
            // 'order',
            'order1', 'order2', 'order3', 'order4', 'order5', 'order6', 'order7', 'order8'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
