<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Orders;
use App\Models\Orderdetail;
use App\Models\Users;
use App\Models\Goods;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       

        $orders = DB::table('orders')->get();
        foreach ($orders as $k1 => $v1) {
            $uid = ($v1->uid);
            $users = DB::table('users')->where('id','=',$uid)->get();
            $Users[] = $users;
                
        }
        // dump($Users);
        // dump($Users);
        foreach ($Users as $k2 => $v2) {
            foreach ($v2 as $k3 => $v3) {
                $uname[] = ($v3->uname);
            }
        }
        dump($uname);
        dump($orders);

        return view('Admin.Orders.orders',['orders'=>$orders,'uname'=>$uname]);
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

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //通过商品订单号  查询出商品详情表中  对应订单号 的所有内容
        $orderdetail = DB::table('orderdetail')->where('oid','=',$id)->get();
        //遍历一个订单号里的信息  拿出商品id
        foreach ($orderdetail as $k => $v) {
            $gid = $v->gid;    //拿出商品id
            //通过商品id  查询出商品信息
            $gid1[] = DB::table('goods')->where('id','=',$gid)->first();
            //然后把查询出来的多条商品信息  打包到一个数组中
        }
        // dump($gid1);
        // dump($orderdetail);

        return view('Admin.Orders.orderdetail',['goods'=>$gid1,'orderdetail'=>$orderdetail]);
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
