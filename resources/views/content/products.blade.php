@extends('master')
@section('content')
     <!-- Off-Canvas Wrapper-->
     <div class="offcanvas-wrapper">
      <!-- Page Title-->
      <div class="page-title">
        <div class="container">
          <div class="column">
            <h1>{{$products[0]->ctitle}}</h1>
          </div>
          <div class="column">
            <ul class="breadcrumbs">
              <li>{{ Breadcrumbs::render('products',$products[0]->ctitle, $products[0]->curl ) }}</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Page Content-->
      <div class="container padding-bottom-3x mb-1">
        <div class="row">
          <!-- Products-->
          <div class="col-xl-9 col-lg-8 order-lg-2">
            <!-- Shop Toolbar-->
            <div class="shop-toolbar padding-bottom-1x mb-2">
              <div class="column">
                <div class="shop-sorting">
                  <label for="sorting">Sort by:</label>
                    <button class = "btn btn-outline-secondary btn-sm" value="{{url('shop/' . $products[0]->curl . '?ob=asc') }}" onclick="location=this.value;">Low - High Price <i style = "color:green" class="fas fa-dollar-sign fa-xs"></i><i class="fas fa-long-arrow-alt-up fa-xs"></i></button>
                    <button class = "btn btn-outline-secondary btn-sm" value="{{url('shop/' . $products[0]->curl . '?ob=desc') }}" onclick="location=this.value;">High - Low Price <i style = "color:green" class="fas fa-dollar-sign fa-xs"></i><i class="fas fa-long-arrow-alt-down fa-xs"></i></button>
                </div>
              </div>
              <div class="column">
                <div class="shop-view"><a class="grid-view active" href="shop-grid-ls.html"><span></span><span></span><span></span></a><a class="list-view" href="shop-list-ls.html"><span></span><span></span><span></span></a></div>
              </div>
            </div>
            <!-- Products Grid-->
            <div class="isotope-grid cols-3 mb-2">
              <div class="gutter-sizer"></div>
              <div class="grid-sizer"></div>
              <!-- Product-->
              @foreach ($products as $product)
              <div class="grid-item ">
                <div class="product-card">
                  <a class="product-thumb" href="{{url('shop/' . $product->curl .'/'. $product->purl)}}">
                  <img style="height:200px" src="{{asset('images/' . $product->pimage)}}" alt="Product"></a>
                  <h3 class="product-title"><a href="{{url('shop/' . $product->curl .'/'. $product->purl)}}">{{$product->ptitle}}</a></h3>
                  <h4 class="product-price">
                    {{$product->price}}$
                  </h4>
                  <div class="product-buttons">
                    <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                    @if(!Cart::get($product->id))
                  <button data-id="{{$product->id}}" class="add-to-cart-btn btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="bottomCenter" data-toast-icon="icon-circle-check" data-toast-title="{{$product->ptitle}}" data-toast-message="successfuly added to cart!">Add to Cart</button>
                  @else 
                  <button disabled="disabled" class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">In cart!</button>
                  @endif
                  </div>
                </div>
              </div>
              @endforeach
            </div>
            <!-- Pagination-->
            <nav class="pagination">
              <div class="column">
                <ul class="pages">
                  <li class="active">{{$products->links()}}</li>
                </ul>
              </div>
            </nav>
          </div>
          @include('components.leftsidebar')
        </div>
      </div>
    </div>
      @endsection