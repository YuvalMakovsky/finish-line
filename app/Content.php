<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Session;


class Content extends Model
{ 
    static public function getContents($murl,&$data){
    $contents = DB::table('contents as c')
    ->join('menus as m', 'm.id','=','c.menu_id')
    ->where('m.murl','=', $murl)
    ->select('c.*', 'm.mtitle', 'm.murl')
    ->get();


    if($contents->count()>0){
        $data['contents']=$contents;
        $data['title'].=$data['contents'][0]->mtitle;
    }
    else{
        abort(404);
    }
}
   public static function save_new($request){
       $content = new self();
       $content->menu_id=$request['menu_id'];
       $content->ctitle=$request['title'];
       $content->carticle=$request['article'];
       $content->save();
       Session::flash('toastr_pos','toast-top-center');
       Session::flash('sm','Content has been saved!');
       
   }

   public static function update_item($request, $id){
     
       $content = self::find($id);
       $content->menu_id=$request['menu_id'];
       $content->ctitle=$request['title'];
       $content->carticle=$request['article'];
       $content->save();
       Session::flash('toastr_pos','toast-top-center');
       Session::flash('sm','Content has been updated!');
   }
}
