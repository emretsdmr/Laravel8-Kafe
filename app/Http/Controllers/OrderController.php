<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Orderproducts;
use App\Models\Shopcart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist=Order::where('user_id',Auth::id())->get();
        return view('home.user_order',['datalist'=>$datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $total = $request->input('total');
        return view('home.user_order_add',['total'=>$total]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new Order;
        $data->user_id = Auth::id();
        $data->tableno = $request->input('tableno');
        $data->total = $request->input('total');
        $data->note = $request->input('note');
        $data->IP=$_SERVER['REMOTE_ADDR'];
        $data->save();

        $datalist=Shopcart::where('user_id',Auth::id())->get();
        foreach($datalist as $rs)
        {
            $data2=new Orderproducts;
            $data2->user_id=Auth::id();
            $data2->product_id=$rs->product_id;
            $data2->order_id=$data->id;
            $data2->quantity=$rs->quantity;
            $data2->price=$rs->product->price;
            $data2->amount=$rs->product->price * $rs->quantity;
            $data2->note=$data->note;
            $data2->IP=$_SERVER['REMOTE_ADDR'];
            $data2->amount=$rs->quantity * $rs->product->price;
            $data2->save();
        }
        $data3=Shopcart::where('user_id',Auth::id());
        $data3->delete();

        return redirect()->route('user_orders');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order,$id)
    {
        $datalist=Orderproducts::where('user_id',Auth::id())->where('order_id',$id)->get();
        return view('home.user_order_product',['datalist'=>$datalist]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
