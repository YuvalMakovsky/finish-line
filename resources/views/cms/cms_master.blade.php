<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  <title>Finish Line Admin Panel</title>

    <!-- Modernizr-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="http://getbootstrap.com/docs/4.1/examples/dashboard/dashboard.css">
    <link id="mainStyles" rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
  <script>var BASE_URL="{{url('')}}/";</script>
  </head>
  <!-- Body-->
  <body>
    @php $user_role = Session::get('user_role');
     $user_id = Session::has('user_id'); 
     $user_name = Session::get('user_name');
     @endphp
     <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="{{url('cms/dashboard')}}">Finish Line Admin Panel</a>
     
      <ul class="nav px-3">
          <li class="nav-item">
              <a target="_blank" class="nav-link text-white" href="{{url('')}}">Back To Site</a>
            </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="{{url('user/logout')}}">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="{{url('cms/dashboard')}}">Dashboard</a>
              </li> 
              <li class="nav-item">
                  <a class="nav-link" href="{{url('cms/menu')}}">Menu</a>
              </li>
              <li class="nav-item">
                    <a class="nav-link" href="{{url('cms/content')}}">Content</a>
               </li>
                <li class="nav-item">
                      <a class="nav-link" href="{{url('cms/categories')}}">Categories</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="{{url('cms/products')}}">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('cms/orders')}}">Orders</a>
            </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
         @yield('cms_content')
        </main>
      </div>
    </div>
    <!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script>
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
    <script>
      $('#article').summernote({
        height:300
      });
    </script>
  </body>
</html>