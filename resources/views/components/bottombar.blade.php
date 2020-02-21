<div class="row">
    <div class="col-lg-4">
      <!-- Widget Categories-->
      <section class="widget widget-categories">
        <h3 class="widget-title">Shop Categories</h3>
        <ul>
            <ul>
                @foreach ($categories as $category)
                <li class="has-children"><a href="#">{{$category['ctitle']}}</a>
                    <ul>
                        @foreach ($productsComp as $product)
                      @if($product->ctitle==$category['ctitle'])
                      <li><a href="{{url('shop/' . $product->curl .'/'. $product->purl)}}">{{$product->ptitle}}</a></li>
                      @endif
                        @endforeach
                    </ul>
                  </li>
                  @endforeach 
            </ul>
          </li> 
        </ul>
      </section>
    </div>
    <div class="col-lg-4">
      <!-- Widget Brand Filter-->
      <section class="widget">
        <h3 class="widget-title">Filter Widget</h3>
        <div class="custom-control custom-checkbox">
          <input class="custom-control-input" type="checkbox" id="adidas">
          <label class="custom-control-label" for="adidas">Adidas&nbsp;<span class="text-muted">(254)</span></label>
        </div>
        <div class="custom-control custom-checkbox">
          <input class="custom-control-input" type="checkbox" id="bilabong">
          <label class="custom-control-label" for="bilabong">Bilabong&nbsp;<span class="text-muted">(39)</span></label>
        </div>
        <div class="custom-control custom-checkbox">
          <input class="custom-control-input" type="checkbox" id="klein">
          <label class="custom-control-label" for="klein">Calvin Klein&nbsp;<span class="text-muted">(128)</span></label>
        </div>
        <div class="custom-control custom-checkbox">
          <input class="custom-control-input" type="checkbox" id="nike">
          <label class="custom-control-label" for="nike">Nike&nbsp;<span class="text-muted">(310)</span></label>
        </div>
        <div class="custom-control custom-checkbox">
          <input class="custom-control-input" type="checkbox" id="bahama">
          <label class="custom-control-label" for="bahama">Tommy Bahama&nbsp;<span class="text-muted">(42)</span></label>
        </div>
      </section>
    </div>
    <div class="col-lg-4">
      <!-- Widget Price Range-->
      <section class="widget widget-categories">
        <h3 class="widget-title">Price Range Widget</h3>
        <form class="price-range-slider" method="post" data-start-min="250" data-start-max="650" data-min="0" data-max="1000" data-step="1">
          <div class="ui-range-slider"></div>
          <footer class="ui-range-slider-footer">
            <div class="column">
              <button class="btn btn-outline-primary btn-sm" type="submit">Filter</button>
            </div>
            <div class="column">
              <div class="ui-range-values">
                <div class="ui-range-value-min">$<span></span>
                  <input type="hidden">
                </div>&nbsp;-&nbsp;
                <div class="ui-range-value-max">$<span></span>
                  <input type="hidden">
                </div>
              </div>
            </div>
          </footer>
        </form>
      </section>
    </div>
  </div>