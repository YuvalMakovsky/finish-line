<div class="offcanvas-container mobile-zindex" id="mobile-menu"><a class="account-link" href="{{ asset('lib/unishop/main/Unishop/template-1/dist/account-orders.html')}}">
  <div class="user-ava"><img src="{{ asset('lib/unishop/main/Unishop/template-1/dist/img/account/user-ava-md.jpg') }}" alt="{{Session::get('user_name')}}">
  </div>
  <div class="user-info">
    <h6 class="user-name">{{$user_name}}@if($user_role=='Administrator'), Administrator @endif </h6><span class="text-sm text-white opacity-60">290 Reward points</span>
  </div></a>
<nav class="offcanvas-menu">
  <ul class="menu">
      @if($user_role=='Administrator')<li><a href="{{url('cms/dashboard')}}">Admin Panel</a></li>@endif
      @if($user_id )<li><a href="{{url('user/profile')}}"><span>My Profile</span></a></li>@endif
      <li><a href="{{url('/')}}"><span>Home</span></a></li>
      <li><a href="{{url('about')}}"><span>About</span></a></li>
      <li><a href="{{url('shop')}}"><span>Shop</span></a></li>
      @foreach ($menus as $menu)
      <li><a href="{{url($menu['murl'])}}"><span>{{$menu['link']}}</span></a></li>
      @endforeach
      @if(!$user_id )
      <li><a href="{{url('user/signin')}}"><span>Sign In</span></a></li>
      <li><a href="{{url('user/signup')}}"><span>Sign Up</span></a></li>
      @else
      <li><a href="{{url('user/logout')}}"><span>Logout</span></a></li>
      @endif
  </ul>
</nav>
</div>