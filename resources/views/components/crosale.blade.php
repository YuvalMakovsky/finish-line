  <!-- Carousel-->
  <div class="owl-carousel" data-owl-carousel="{ &quot;nav&quot;: false, &quot;dots&quot;: true, &quot;margin&quot;: 30, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;576&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3},&quot;991&quot;:{&quot;items&quot;:4},&quot;1200&quot;:{&quot;items&quot;:4}} }">
      @foreach ($productsComp as $product)
            <!-- Product-->
            <div class="grid-item">
                <div class="product-card">
                  <div class="product-badge text-danger">{{round(($product->original_price-$product->price)/$product->original_price*100)}}% Off</div><a class="product-thumb" href="{{url('shop/' . $product->curl .'/'. $product->purl)}}">
                    <img style="height:170px" src="{{asset('images/'. $product->pimage)}}" alt="Product"></a>
                  <h3 class="product-title"><a href="{{url('shop/' . $product->curl .'/'. $product->purl)}}">{{$product->ptitle}}</a></h3>
                  <h4 class="product-price">
                    <del>{{$product->original_price}}</del>{{$product->price}}
                  </h4>
                </div>
              </div>
        @endforeach
    </div>