<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Categorie;
use App\Product;




class MainController extends Controller
{
   static public $data=[
     'title'=> 'Finish Line | ',
     'toastr_pos' => 'toast-bottom-center',
    ];
  public function __construct(){
  self::$data['menus'] = Menu::all()->toArray();
  self::$data['productsComp'] = Product::getAllProducts();
  self::$data['categories'] = Categorie::all()->toArray();
  


       
  
}
}
