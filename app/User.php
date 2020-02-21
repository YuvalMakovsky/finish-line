<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Hash;
use Session;

class User extends Model
{
    static public function attempt($email,$password){
    $valid = false;

    $user= DB::table('users as u')
    ->join('users_roles as ur', 'u.id','=','ur.user_id')
    ->join('roles as r','r.id','=','ur.role_id')
    ->select('u.*','r.id as rid','r.rname')
    ->where('u.email','=',$email)
    ->first();

    if($user){
        if(Hash::check($password,$user->password)){
           $valid=true; 
           Session::put([
               'user_id'=>$user->id,
               'user_name'=>$user->name,
               'user_role'=>$user->rname,
               'user_role_id'=>$user->rid,

           ]);
           Session::flash('toastr_pos','toast-top-center');
           Session::flash('sm','You are now signed in!');
        }
    }

    return $valid;
    }
    static public function save_new($request){
        $user=new self();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = Hash::make($request['password']);
        $user->save();
        DB::insert("INSERT INTO users_roles VALUES (?,?)", [$user->id,2]);
        Session::flash('toastr_pos','toast-top-center');
        Session::flash('sm','You signup successfully, Now you can signin');

    }
}
