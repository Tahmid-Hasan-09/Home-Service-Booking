@php
$hot_deals = App\Models\Service::where('hot_deals',1)->where('discount_price','!=',NULL)->orderBy('id','DESC')->limit(3)->get();
@endphp

     <div class="sidebar-widget hot-deals wow fadeInUp outer-bottom-xs">
          <h3 class="section-title">hot deals</h3>
          <div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-ss">


   
        @foreach($hot_deals as $service)
            <div class="item">
              <div class="products">
                <div class="hot-deal-wrapper"> 
                  <div class="image"> 
                    <a href="{{ url('service/details/'.$service->id.'/'.$service->service_slug_en ) }}">
                      <img src="{{ asset($service->service_thambnail) }}" alt="">
                    </a>
                  </div>

        @php
        $amount = $service->selling_price - $service->discount_price;
        $discount = ($amount/$service->selling_price) * 100;
        @endphp   
                  
              @if ($service->discount_price == NULL)
                <div class="tag new"><span>new</span></div>
              @else
              <div class="sale-offer-tag"><span>{{ round($discount) }}%<br>
                    off</span></div>
              @endif
                  
                </div>
                <!-- /.hot-deal-wrapper -->
                
  <div class="product-info text-left m-t-20">
    <h3 class="name"><a href="{{ url('service/details/'.$service->id.'/'.$service->service_slug_en ) }}">
      @if(session()->get('language') == 'bangla') {{ $service->service_name_bn }} @else {{ $service->service_name_en }} @endif</a></h3>
    <div class="rating rateit-small"></div>

     @if ($service->discount_price == NULL)
 <div class="product-price"> <span class="price"> ৳{{ $service->selling_price }} </span>  </div>
     @else
 <div class="product-price"> <span class="price"> ৳{{ $service->discount_price }} </span> <span class="price-before-discount">৳{{ $service->selling_price }}</span> </div>
     @endif

   
    <!-- /.product-price --> 
                  
                </div>
                <!-- /.product-info -->
                
                
                <!-- /.cart --> 
              </div>
            </div>
             @endforeach <!-- // end hot deals foreach -->





          </div>
          <!-- /.sidebar-widget --> 
        </div>