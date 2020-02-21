    @extends('master')
    @section('content')
     <!-- Off-Canvas Wrapper-->
     <div class="offcanvas-wrapper">
         
        <!-- Page Content-->
        <!-- Main Slider-->
        <section class="fw-section padding-bottom-5x" style="background-image: url(images/finishline.jpg);">
          <div class="container padding-top-2x text-center">
            <h1 class="text-black font-weight-bold mb-2">Finish Line</h1>
            <h6 class="text-black text-bold opacity-80 mb-4">The race begins here</h6>
            <a class="btn btn-dark text-bold scroll-to" href="{{url('shop')}}">View Collection</a>
          </div> 
        </section>

        <!-- Top Categories-->
        <section class="container padding-top-3x">
          <h3 class="text-center mb-30">Top Categories</h3>
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
                  <p class="text-muted">{!!$category['carticle']!!}</p><a class="btn btn-outline-primary btn-sm" href="{{url('shop/' . $category['curl'])}}">View Products</a>
                </div>
              </div>
            </div>
            @endforeach
            @else
            <div class="col-12">
                <p><i>No categorie avilable in shop...</i></p>
            </div>
            @endif
          </div>
        <div class="text-center"><a class="btn btn-outline-secondary margin-top-none" href="{{url('shop')}}">All Categories</a></div>
        </section>
    
   
        <!-- Featured Products Carousel-->
        <section class="container padding-top-3x padding-bottom-3x">
          <h3 class="text-center mb-30">Featured Products</h3>
       @include('components.crosale')
        </section>
        <!-- Product Widgets-->
        <section class="container padding-bottom-2x">
          <div class="row">
            <div class="col-md-4 col-sm-6">
              <div class="widget widget-featured-products">
                <h3 class="widget-title">Top Sellers</h3>
                <!-- Entry-->
                @foreach ($productsComp as $product)
                <div class="entry">
                  <div class="entry-thumb"><a href="{{url('shop/' . $product->curl .'/'. $product->purl)}}"><img src="{{asset('images/'. $product->pimage)}}" alt="Product"></a></div>
                  <div class="entry-content">
                    <h4 class="entry-title"><a href="{{url('shop/' . $product->curl .'/'. $product->purl)}}">{{$product->ptitle}}</a></h4><span class="entry-meta">{{$product->price}}$</span>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="widget widget-featured-products">
                <h3 class="widget-title">New Arrivals</h3>
                <!-- Entry-->
                @foreach ($productsComp as $product)
                <div class="entry">
                  <div class="entry-thumb"><a href="{{url('shop/' . $product->curl .'/'. $product->purl)}}"><img src="{{asset('images/'. $product->pimage)}}" alt="Product"></a></div>
                  <div class="entry-content">
                    <h4 class="entry-title"><a href="{{url('shop/' . $product->curl .'/'. $product->purl)}}">{{$product->ptitle}}</a></h4><span class="entry-meta">{{$product->price}}$</span>
                  </div>
                </div>
                @endforeach

              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="widget widget-featured-products">
                <h3 class="widget-title">Best Rated</h3>
                <!-- Entry-->
                @foreach ($productsComp as $product)
                <div class="entry">
                  <div class="entry-thumb"><a href="{{url('shop/' . $product->curl .'/'. $product->purl)}}"><img src="{{asset('images/'. $product->pimage)}}" alt="Product"></a></div>
                  <div class="entry-content">
                    <h4 class="entry-title"><a href="{{url('shop/' . $product->curl .'/'. $product->purl)}}">{{$product->ptitle}}</a></h4><span class="entry-meta">{{$product->price}}$</span>
                  </div>
                </div>
                @endforeach
        
              </div>
            </div>
          </div>
        </section>

        <!-- Services-->
        <section class="container padding-top-3x padding-bottom-2x">
          <div class="row">
            <div class="col-md-3 col-sm-6 text-center mb-30"><img class="d-block w-90 img-thumbnail rounded-circle mx-auto mb-3" src="{{ asset('lib/unishop/main/Unishop/template-1/dist/img/services/01.png') }}" alt="Shipping">
              <h6>Free Worldwide Shipping</h6>
              <p class="text-muted margin-bottom-none">Free shipping for all orders over $100</p>
            </div>
            <div class="col-md-3 col-sm-6 text-center mb-30"><img class="d-block w-90 img-thumbnail rounded-circle mx-auto mb-3" src="{{ asset('lib/unishop/main/Unishop/template-1/dist/img/services/02.png') }}" alt="Money Back">
              <h6>Money Back Guarantee</h6>
              <p class="text-muted margin-bottom-none">We return money within 30 days</p>
            </div>
            <div class="col-md-3 col-sm-6 text-center mb-30"><img class="d-block w-90 img-thumbnail rounded-circle mx-auto mb-3" src="{{ asset('lib/unishop/main/Unishop/template-1/dist/img/services/03.png') }}" alt="Support">
              <h6>24/7 Customer Support</h6>
              <p class="text-muted margin-bottom-none">Friendly 24/7 customer support</p>
            </div>
            <div class="col-md-3 col-sm-6 text-center mb-30"><img class="d-block w-90 img-thumbnail rounded-circle mx-auto mb-3" src="{{ asset('lib/unishop/main/Unishop/template-1/dist/img/services/04.png') }}" alt="Payment">
              <h6>Secure Online Payment</h6>
              <p class="text-muted margin-bottom-none">We posess SSL / Secure Certificate</p>
            </div>
          </div>
        </section>
      </div>
        @endsection