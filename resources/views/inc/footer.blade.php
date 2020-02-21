<div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6">
        <!-- Contact Info-->
        <section class="widget widget-light-skin">
          <h3 class="widget-title">Get In Touch With Us</h3>
          <p class="text-white">Phone: 052-5259020</p>
          <ul class="list-unstyled text-sm text-white">
            <li><span class="opacity-50">Sunday-Friday:</span>&nbsp 09:00 - 20.00</li>
            
          </ul>
          <p><a class="navi-link-light" href="#">Yuval.mak@gmail.com</a></p><a class="social-button shape-circle sb-facebook sb-light-skin" href="#"><i class="socicon-facebook"></i></a><a class="social-button shape-circle sb-twitter sb-light-skin" href="#"><i class="socicon-twitter"></i></a><a class="social-button shape-circle sb-instagram sb-light-skin" href="#"><i class="socicon-instagram"></i></a><a class="social-button shape-circle sb-google-plus sb-light-skin" href="#"><i class="socicon-googleplus"></i></a>
        </section>
      </div>
      <div class="col-lg-3 col-md-6">
        <!-- Mobile App Buttons-->
        <section class="widget widget-light-skin">
          <h3 class="widget-title">Our Mobile App</h3><a class="market-button apple-button mb-light-skin" href="#"><span class="mb-subtitle">Download on the</span><span class="mb-title">App Store</span></a><a class="market-button google-button mb-light-skin" href="#"><span class="mb-subtitle">Download on the</span><span class="mb-title">Google Play</span></a><a class="market-button windows-button mb-light-skin" href="#"><span class="mb-subtitle">Download on the</span><span class="mb-title">Windows Store</span></a>
        </section>
      </div>
      <div class="col-lg-3 col-md-6">
        <!-- About Us-->
        <section class="widget widget-links widget-light-skin">
          <h3 class="widget-title">Finish Line</h3>
          <ul>
            <li><a href="{{url('/')}}"><span>Home</span></a></li>
            <li><a href="{{url('about')}}"><span>About</span></a></li>
            <li><a href="{{url('shop')}}"><span>Shop</span></a></li>
            @foreach($menus as $menu)
            <li><a href="{{url($menu['murl'])}}"><span>{{$menu['link']}}</span></a></li>
            @endforeach
          </ul>
        </section>
      </div>
      <div class="col-lg-3 col-md-6">
        <!-- Account / Shipping Info-->
        <section class="widget widget-links widget-light-skin">
          <h3 class="widget-title">Account</h3>
          <ul>
            <li class="sub-menu-user">
              <div class="user-info">
                <h6 class="user-name text-white">{{$user_name}}@if($user_role=='Administrator'), Administrator @endif</h6>
              </div>
            </li>
            @if($user_role=='Administrator')<li><a href="{{url('cms/dashboard')}}">Admin Panel</a></li>@endif
            @if($user_id )<li><a href="{{url('user/profile')}}">My Profile</a></li>
              <li><a href="account-orders.html">Orders List</a></li>
              <li><a href="account-wishlist.html">Wishlist</a></li>
              @endif
              @if(!$user_id)<li>
              <li><a href="{{url('user/signin')}}"><span>Sign In</span></a></li>
             <li><a href="{{url('user/signup')}}"><span>Sign Up</span></a></li>
             @else
            <li class="sub-menu-separator"></li>
            <li><a href="{{url('user/logout')}}"> <i class="icon-unlock"></i>Logout</a></li>@endif
          </ul>
        </section>
      </div>
    </div>
    <hr class="hr-light mt-2 margin-bottom-2x">
    <div class="row">
      <div class="col-md-7 padding-bottom-1x">
        <!-- Payment Methods-->
        <div class="margin-bottom-1x" style="max-width: 615px;"><img src="{{ asset('lib/unishop/main/Unishop/template-1/dist/img/payment_methods.png') }}" alt="Payment Methods">
        </div>
      </div>
      <div class="col-md-5 padding-bottom-1x">
        <div class="margin-top-1x hidden-md-up"></div>
        <!--Subscription-->
        <form class="subscribe-form" action="//rokaux.us12.list-manage.com/subscribe/post?u=c7103e2c981361a6639545bd5&amp;amp;id=1194bb7544" method="post" target="_blank" novalidate>
          <div class="clearfix">
            <div class="input-group input-light">
              <input class="form-control" type="email" name="EMAIL" placeholder="Your e-mail"><span class="input-group-addon"><i class="icon-mail"></i></span>
            </div>
            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
            <div style="position: absolute; left: -5000px;" aria-hidden="true">
              <input type="text" name="b_c7103e2c981361a6639545bd5_1194bb7544" tabindex="-1">
            </div>
            <button class="btn btn-primary" type="submit"><i class="icon-check"></i></button>
          </div><span class="form-text text-sm text-white opacity-50">Subscribe to our Newsletter to receive early discount offers, latest news, sales and promo information.</span>
        </form>
      </div>
    </div>
    <!-- Copyright-->
    <p class="footer-copyright">© All rights reserved. Made with &nbsp;<i class="icon-heart text-danger"></i>&nbsp;by Yuval Makovsky</a></p>
  </div>
