<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\SigninRequest;
use App\Http\Requests\SignupRequest;
use App\User;
use Session;

class UserController extends MainController
{
  public function __construct(){
   parent::__construct();
   $this->middleware('userauth',['except'=>['logout']]);
}


public function getSignin(){
  self::$data['title'] .= 'Sign in Page';
  return view ('forms.signin', self::$data);
}

public function postSignin(SigninRequest $request ){

$ref = !empty($request['ref'])?$request['ref']:'';
  if(User::attempt($request['email'],$request['password'])){
    return redirect($ref);
  }else{
    return back()->with('attm_error','Wrong Email or Password combination');
  }
}

public function getSignup(){
  self::$data['title'].='Sign Up Page';
  return view('forms.signup',self::$data);
}
public function postSignup(SignupRequest $request){
  User::save_new($request);
  return redirect('user/signin');
}

public function logout(){
     Session::flush();
     return redirect('user/signin');
}
}
