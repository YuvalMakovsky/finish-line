<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;

class Menu extends Model
{
    static public function save_new($request){
        $menu = new self();
        $menu->link=$request['link'];
        $menu->murl=$request['url'];
        $menu->mtitle=$request['title'];
        $menu->save();
        Session::flash('toastr_pos','toast-top-center');
        Session::flash('sm','Menu has been saved!');

    }
    public static function update_item($request, $id){
        $menu = self::find($id);
        $menu->link=$request['link'];
        $menu->murl=$request['url'];
        $menu->mtitle=$request['title'];
        $menu->save();
        Session::flash('toastr_pos','toast-top-center');
        Session::flash('sm','Menu has been updated!');
    }

}
