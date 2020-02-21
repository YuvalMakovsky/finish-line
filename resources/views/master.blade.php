<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  <title>@if(!empty($title)){{$title}}@endif</title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Unishop - Universal E-Commerce Template">
    <meta name="keywords" content="shop, e-commerce, modern, flat style, responsive, online store, business, mobile, blog, bootstrap 4, html5, css3, jquery, js, gallery, slider, touch, creative, clean">
    <meta name="author" content="Rokaux">
    <!-- Mobile Specific Meta Tag-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- Favicon and Apple Icons-->
    <link rel="icon" type="image/x-icon" href="{{ asset('images/finis.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('images/finish.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('lib/unishop/main/Unishop/template-1/dist/touch-icon-iphone.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('lib/unishop/main/Unishop/template-1/dist/touch-icon-ipad.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('lib/unishop/main/Unishop/template-1/dist/touch-icon-iphone-retina.png') }}">
    <link rel="apple-touch-icon" sizes="167x167" href="{{ asset('lib/unishop/main/Unishop/template-1/dist/touch-icon-ipad-retina.png') }}">
    <!-- Vendor Styles including: Bootstrap, Font Icons, Plugins, etc.-->
  <link rel="stylesheet" media="screen" href="{{asset('lib/unishop/main/Unishop/template-1/dist/css/vendor.min.css')}}">
    <!-- Main Template Styles-->
  <link id="mainStyles" rel="stylesheet" media="screen" href="{{asset('lib/unishop/main/Unishop/template-1/dist/css/styles.min.css')}}">
  <link id="mainStyles" rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link id="mainStyles" rel="stylesheet" media="screen" href="{{asset('css/style.css')}}">
    <!-- Modernizr-->
  <script src="{{asset('lib/unishop/main/Unishop/template-1/dist/js/modernizr.min.js')}}"></script>
  <script>var BASE_URL="{{url('')}}/";</script>
  </head>
  <!-- Body-->
  <body>
    @php $user_role = Session::get('user_role');
     $user_id = Session::has('user_id'); 
     $user_name = Session::get('user_name');
     @endphp
     <!-- Off-Canvas Mobile Menu-->
     @include('inc.mobile')
    <!-- Topbar-->
    @include('inc.topbar')
    <!-- Navbar-->
    <header class="navbar navbar-sticky">
      @include('inc.navbar')
     </header>
     @yield('content')
      <!-- Site Footer-->
      <footer class="site-footer">
        @include('inc.footer')
      </footer>
    </div>
            <!-- Photoswipe container-->
            <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="pswp__bg"></div>
                <div class="pswp__scroll-wrap">
                  <div class="pswp__container">
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                  </div>
                  <div class="pswp__ui pswp__ui--hidden">
                    <div class="pswp__top-bar">
                      <div class="pswp__counter"></div>
                      <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                      <button class="pswp__button pswp__button--share" title="Share"></button>
                      <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                      <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                      <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                          <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                      <div class="pswp__share-tooltip"></div>
                    </div>
                    <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                    <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                    <div class="pswp__caption">
                      <div class="pswp__caption__center"></div>
                    </div>
                  </div>
                </div>
              </div>
    <!-- Back To Top Button--><a class="scroll-to-top-btn" href="#"><i class="icon-arrow-up"></i></a>
    <!-- Backdrop-->
    <div class="site-backdrop"></div>
    <!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
  <script src="{{asset('lib/unishop/main/Unishop/template-1/dist/js/vendor.min.js')}}"></script>
    <script src="{{asset('lib/unishop/main/Unishop/template-1/dist/js/scripts.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="{{asset('js/script.js')}}"></script>
    @if(Session::has('sm') && ! Session::has('toastr_pos'))
    <script>
    toastr.options.positionClass = "{{$toastr_pos}}";
    toastr.success("{{Session::get('sm')}}");
    </script>
    @endif
    @if(Session::has('toastr_pos'))
    <script>
        toastr.options.positionClass = "{{Session::get('toastr_pos')}}";
        toastr.success("{{Session::get('sm')}}");
    </script>
    @endif
  </body>
</html>