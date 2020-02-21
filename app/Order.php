<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;
use Cart;
use DB;

class Order extends Model
{
    public static function getAll(){

        return DB::table('orders as o')
        ->join('users as u', 'u.id', '=','o.user_id')
        ->select('o.*','u.name')
        ->orderBy('o.created_at', 'desc')
        ->get();

    }

    static public function save_new(){
        $order = new self();
        $order->user_id=Session::get('user_id');
        $order->data=serialize(Cart::getContent()->toArray());
        $order->total=Cart::getTotal();
        $order->save();
        Cart::clear();
        Session::flash('toastr_pos','toast-top-center');
        Session::flash('sm','Your order saved!');
    }
}
