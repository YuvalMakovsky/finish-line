<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;
use Cart;
use DB;
use Session;
use Image;

class product extends Model
{
   static public function getProducts($curl, &$data, $request){
    $products = DB::table('products as p')
    ->join('categories as c', 'c.id','=','p.categorie_id')
    ->where('c.curl','=', $curl)
    ->select('p.*', 'c.ctitle', 'c.curl')
    ->orderBy('p.price',$request['ob'])
    ->paginate(2);
    $products->appends(['ob' => $request['ob']]);
    if($products->count()>0){
        $data['products']=$products;
        $data['title'].=$data['products'][0]->ctitle . ' products';
    }
    else{
        abort(404);
    }
    

   }
   static public function getItem($purl,&$data){
       if( $product =  self::where('purl', '=', $purl)->first()){
        $data['product']=$product->toArray();
        $data['title'] .= $data['product']['ptitle'];
       }else{
           abort(404);
       }
   }
   static public function addToCart($pid){
       if($product = self::find($pid)){
          $product = $product->toArray();
          if(!Cart::get($pid)){
            Cart::add($pid, $product['ptitle'], $product['price'], 1,['image'=>$product['pimage']]);
            
          }
       }
   }
   static public function updateCart($request){
       if(!empty($request['id']) && is_numeric($request['id'])){
           if(!empty($request['op'])){
               if($product = Cart::get($request['id'])){
                   $product = $product->toArray();
                   if($request['op']=='plus'){
                       Cart::update($request['id'],['quantity'=>1]);
                   }elseif($request['op']=='minus'){
                       Cart::update($request['id'],['quantity'=>-1]);
                   }
               }
           }
       }

   }
   public static function save_new($request){

    $image_name = 'default.jpg';

    if($request->hasfile('image') && $request->file('image')->isValid()){
        $file = $request->file('image');
        $image_name = date('Y.m.d.h.m.s') . '-' . $file->getClientOriginalName();
        $request->file('image')->move(public_path() . '/images', $image_name);
        $img = Image::make(public_path() . '/images/'. $image_name);
        $img->resize(300, null, function ($constraint) {
            $constraint->aspectRatio();
        });
        $img->save();
    }
    $product = new self();
    $product->categorie_id = $request['categorie_id'];
    $product->ptitle = $request['title'];
    $product->purl = $request['url'];
    $product->particle = $request['article'];
    $product->original_price = $request['original_price'];
    $product->price = $request['price'];
    $product->pimage = $image_name;
    $product->save();
    Session::flash('toastr_pos','toast-top-center');
    Session::flash('sm','Product has been saved!');

   }

   public static function update_item($request, $id){

    $image_name = '';

    if($request->hasfile('image') && $request->file('image')->isValid()){
        $file = $request->file('image');
        $image_name = date('Y.m.d.h.m.s') . '-' . $file->getClientOriginalName();
        $request->file('image')->move(public_path() . '/images', $image_name);
        $img = Image::make(public_path() . '/images/'. $image_name);
        $img->resize(300, null, function ($constraint) {
            $constraint->aspectRatio();
        });
        $img->save();
    }
    $product = self::find($id);
    $product->categorie_id = $request['categorie_id'];
    $product->ptitle = $request['title'];
    $product->purl = $request['url'];
    $product->particle = $request['article'];
    $product->original_price = $request['original_price'];
    $product->price = $request['price'];
    if($image_name){
        $product->pimage = $image_name;
    };
    $product->save();
    Session::flash('toastr_pos','toast-top-center');
    Session::flash('sm','Product has been updated!');

   }
   static public function getAllProducts(){
    $products = DB::table('products as p')
    ->join('categories as c', 'c.id','=','p.categorie_id')
    ->select('p.*', 'c.*')
    ->get();
    return $products; 


    

   }
}
