<?php

use App\Categorie;

Breadcrumbs::for('home', function ($trail) {
  $trail->push('Home', route('home'));
});
Breadcrumbs::for('about', function ($trail) {
  $trail->parent('home');
  $trail->push('About', route('about'));
});
Breadcrumbs::for('shop', function ($trail) {
  $trail->parent('home');
  $trail->push('Shop', route('shop'));
});
Breadcrumbs::for('products', function ($trail, $ctitle, $curl) {
  $trail->parent('shop');
  $trail->push($ctitle, route('products',[$curl]));
});
Breadcrumbs::for('item', function ($trail, $ptitle, $curl, $purl ) {
  $category = Categorie::where('curl','=',$curl)->first()->toArray();
  $trail->parent('products',$category['ctitle'],$curl);
  $trail->push($ptitle, route('item', [$curl,$purl] ));
});
Breadcrumbs::for('signin', function ($trail) {
  $trail->parent('home');
  $trail->push('Sign In', route('signin'));
});
Breadcrumbs::for('signup', function ($trail) {
  $trail->parent('home');
  $trail->push('Sign Up', route('signup'));
});
Breadcrumbs::for('murl', function ($trail, $mtitle, $murl) {
  $trail->parent('home');
  $trail->push($mtitle, route('murl',[$murl]));
});
