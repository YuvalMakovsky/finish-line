<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;
use App\Content;
use App\Product;
use DB;

class PagesController extends MainController
{
   public function home(){
       self::$data['title'] .= 'Home Page';
       self::$data['categories'] = Categorie::all()->toArray();
       return view('content.home',self::$data);
   }
   public function about(){
    self::$data['title'] .= 'About Us';
    return view('content.about',self::$data);
   }
   public function content($murl){
    Content::getContents($murl,self::$data);
    return view('content.content',self::$data);
   }

   public function search(Request $request){
    $search  = $request['search'];
    if($search  != ""){
        $products = DB::table('products as p')
        ->join('categories as c', 'c.id','=','p.categorie_id')
        ->select('p.*', 'c.*')
        ->where('p.ptitle','Like', '%'.$search. '%' )
                           ->orwhere('p.particle','Like', '%'.$search. '%')
                           ->get()->toArray();
     if(count($products)>0){  
     echo json_encode($products);
    
     
    }  
    
}


}
}
