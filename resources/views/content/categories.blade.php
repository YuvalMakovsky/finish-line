
@extends('master')
@section('content')
<!-- Off-Canvas Wrapper-->
<div class="offcanvas-wrapper">
      <!-- Page Title-->
      <div class="page-title">
        <div class="container">
          <div class="column">
            <h1>Shop</h1>
          </div>
          <div class="column">
            <ul class="breadcrumbs">
              <li>{{ Breadcrumbs::render('shop') }}</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Page Content-->
      <div class="container padding-bottom-2x mb-2">
        <div class="row">
          <!-- Sidebar   -->
          <div class="col-lg-3">
            <button class="sidebar-toggle position-left" data-toggle="modal" data-target="#modalShopCategories"><i class="icon-layout"> </i></button>
            <aside class="sidebar sidebar-offcanvas">
              <section class="widget widget-categories">
                <h3 class="widget-title">Popular Brands</h3>
                <ul>
                  <li><a href="#">Adidas</a><span>(254)</span></li>
                  <li><a href="#">Bilabong</a><span>(39)</span></li>
                  <li><a href="#">Brooks</a><span>(205)</span></li>
                  <li><a href="#">Calvin Klein</a><span>(128)</span></li>
                  <li><a href="#">Cole Haan</a><span>(104)</span></li>
                  <li><a href="#">Columbia</a><span>(217)</span></li>
                  <li><a href="#">New Balance</a><span>(95)</span></li>
                  <li><a href="#">Nike</a><span>(310)</span></li>
                  <li><a href="#">Nine West</a><span>(134)</span></li>
                  <li><a href="#">Oakley</a><span>(73)</span></li>
                  <li><a href="#">Puma</a><span>(446)</span></li>
                  <li><a href="#">Scechers</a><span>(87)</span></li>
                  <li><a href="#">Tommy Bahama</a><span>(42)</span></li>
                  <li><a href="#">Tommy Hilfiger</a><span>(289)</span></li>
                  <li><a href="#">Valentino</a><span>(68)</span></li>
                </ul>
              </section>
            </aside>
          </div>
          <!-- Categories-->
          <div class="col-lg-9">
            <!-- Promo banner-->
            <div class="alert alert-image-bg alert-dismissible fade show text-center mb-4" style="background-image: url(images/sport-rope.jpg);"><span class="alert-close text-white" data-dismiss="alert"></span>
              <div class="h3 text-medium text-white padding-top-1x padding-bottom-1x"><i class="icon-clock" style="font-size: 33px; margin-top: -5px;"></i>&nbsp;&nbsp;Check our Limited Offers. Save up to 50%&nbsp;&nbsp;&nbsp;
                <div class="mt-3 hidden-xl-up"></div><a class="btn btn-primary" href="#">View Offers</a>
              </div>
            </div>
            <div class="row">
                @if($categories)
                @foreach ($categories as $category)
                <div class="col-md-4 col-sm-6">
                <div class="card mb-30"><a class="card-img-tiles" href="{{url('shop/' . $category['curl'])}}">
                      <div class="inner">
                        <div class="main-img"><img src="{{ asset('images/' . $category['cimage']) }}" alt="{{$category['ctitle']}}"></div>
                      </div></a>
                    <div class="card-body text-center">
                      <h4 class="card-title">{{$category['ctitle']}}</h4>
                      <p class="text-muted">{!!$category['carticle']!!}</p>
                      <a class="btn btn-outline-primary btn-sm" href="{{url('shop/' . $category['curl'])}}">View Products</a>
                    </div>
                  </div>
                </div>
                @endforeach
                @else
                <div class="col-12">
                    <p><i>No categories avilable in shop...</i></p>
                </div>
                @endif
            </div>
          </div>
        </div>
      </div>
    </div>
     
@endsection