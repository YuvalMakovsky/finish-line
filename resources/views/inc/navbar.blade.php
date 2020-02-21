<!-- Search-->
<form action="" class="site-search" method="get" autocomplete="off">
  @csrf
    <input type="text" name="search" id = "search" placeholder="Type to search products...">
    <div class="search-tools">
      <button style="display:none;" class="search-btn" type="submit" name="submit" id="submit"></button>
      <span class="clear-search">Clear</span>
      <span class="close-search">
        <i class="icon-cross"></i>
      </span>
    </div>
  </form>
  <div class="site-branding">
    <div class="inner">
     
      <!-- Off-Canvas Toggle (#mobile-menu)--><a class="offcanvas-toggle menu-toggle" href="#mobile-menu" data-toggle="offcanvas"></a>
      <!-- Site Logo--><a class="site-logo font-weight-bold btn btn-outline-light mt-3 ml-2" style="color:darkblue" href="{{ url('/')  }}">Finish Line<i class="fas fa-flag-checkered fa-lg text-dark pl-1"></i></a>
    </div>
  </div>
  <!-- Main Navigation-->
  <nav class="site-menu">
    <ul>
      <li><a href="{{url('/')}}"><span>Home</span></a></li>
      <li><a href="{{url('about')}}"><span>About</span></a></li>
      <li><a href="{{url('shop')}}"><span>Shop</span></a></li>
      @foreach ($menus as $menu)
      <li><a href="{{url($menu['murl'])}}"><span>{{$menu['link']}}</span></a></li>
      @endforeach
    </ul>
  </nav>
  <!-- Toolbar-->
  <div class="toolbar">
    <div class="inner">
      <div class="tools">
        <div class="search"><i class="icon-search"></i></div>
        <div class="account"><a href="account-orders.html"></a><i class="icon-head"></i>
          <ul class="toolbar-dropdown">
            <li class="sub-menu-user">
              <div class="user-ava"><img src="{{ asset('lib/unishop/main/Unishop/template-1/dist/img/account/user-ava-sm.jpg') }}" alt="{{Session::get('user_name')}}">
              </div>
              <div class="user-info">
                <h6 class="user-name">{{$user_name}}@if($user_role=='Administrator'), Administrator @endif</h6><span class="text-xs text-muted">290 Reward points</span>
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
        </div>
        
      <div class="cart"><a href="{{url('shop/cart')}}"></a><i class="icon-bag"></i>
        @if(!Cart::isEmpty())<span class="count">{{Cart::getTotalQuantity()}}</span><span class="subtotal">{{Cart::getTotal()}}$</span>
        
          <div class="toolbar-dropdown">
            @foreach ($cartCollection = Cart::getContent()->toArray() as $item)
          <div class="dropdown-product-item">
              <span class="dropdown-product-remove"><a class="remove-from-cart" href="{{url('shop/remove-item?id=' . $item['id'] )}}" ><i class="icon-cross text-danger"></i></a></span>
            <a class="dropdown-product-thumb" href="{{url('shop/cart')}}">
              {{-- <img  style="height:50px" src="{{asset('images/'. $item['attributes']['image'])}}" alt="Product"> --}}
            </a>
            <div class="dropdown-product-info">
              <a class="dropdown-product-title" href="{{url('shop/cart')}}">{{$item['name']}}</a>
              <span class="dropdown-product-details">{{$item['quantity']}} x {{$item['price']}}</span>
            </div>
          </div>
            @endforeach
            <div class="toolbar-dropdown-group">
              <div class="column"><span class="text-lg">Total:</span></div>
              <div class="column text-right"><span class="text-lg text-medium">{{Cart::getTotal()}}$&nbsp;</span></div>
            </div>
            <div class="toolbar-dropdown-group">
              <div class="column"><a class="btn btn-sm btn-block btn-secondary" href="{{url('shop/cart')}}">View Cart</a></div>
              <div class="column"><a class="btn btn-sm btn-block btn-success" href="{{url('shop/order')}}">Checkout</a></div>
            </div>
          </div>
          @else
          <div class="toolbar-dropdown">
            <div class="toolbar-dropdown-group">
              <div class="column"><a class="btn btn-sm btn-block btn-success" href="{{url('shop')}}">Shop Now!</a></div>
            </div>
          </div>
          @endif
        </div>
      </div>
    </div>
  </div>
