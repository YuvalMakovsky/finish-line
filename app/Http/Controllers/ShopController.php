<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Categorie;
use App\Product;
use Cart;
use Session;
use App\Order;




class ShopController extends MainController
{
   
    public function categories(){
        self::$data['title'].= 'Shop Categories';
        self::$data['categories'] = Categorie::all()->toArray();
        return view('content.categories',self::$data);
    }
    public function products($curl, Request $request){
        product::getProducts($curl,self::$data, $request);
        return view ('content.products',self::$data);
    }
    public function item($curl,$purl){
        self::$data['curl'] = $curl;
        Product::getItem($purl, self::$data);
        return view('content.item',self::$data);
   }
   public function addToCart(Request $request){
       Product::addToCart($request['pid']);

   }
   public function cart(){
       self::$data['title'] .= 'Cart Page';
       $cartCollection = Cart::getContent();
       $cart = $cartCollection->toArray();
       sort($cart);
       self::$data['cart'] = $cart;
       return view('content.cart',self::$data); 
   }
   public function updateCart(Request $request){
   Product::updateCart($request);
   return redirect('shop/cart');

   }
   public function removeItem(Request $request){
    Cart::remove($request['id']);  
    return redirect('shop/cart');
   }
   public function clearCart(){
    Cart::clear();
    return redirect('shop/cart');

   }
   public function order(){
       if(Cart::isEmpty()){
           return redirect('shop/cart');
       }else{
        if(!Session::has('user_id')){
            return redirect('user/signin?ref=shop/cart');
        }else{
            Order::save_new();
            return redirect ('shop');
        }

       }
   }
}
