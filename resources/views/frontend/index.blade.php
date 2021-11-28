@extends('frontend.main_master')
@section('content')

@section('title')
Home Service Solution
@endsection

<div class="body-content outer-top-xs" id="top-banner-and-menu">
  <div class="container">
    <div class="row"> 
      <!-- ============================================== SIDEBAR ============================================== -->
      <div class="col-xs-12 col-sm-12 col-md-3 sidebar"> 
        
          <!-- === == TOP NAVIGATION == ==== -->
       @include('frontend.common.vertical_menu')
       <!-- ===== ==== TOP NAVIGATION : END ==== ===== --> 
        
        <!-- === ===== HOT DEALS ======= ===== -->
        @include('frontend.common.hot_deals')
        <!-- === === HOT DEALS: END ====== ===== -->

        
        <!-- ============================================== SPECIAL OFFER ============================================== -->
        
        <div class="sidebar-widget outer-bottom-small wow fadeInUp">
          <h3 class="section-title">Special Offer</h3>
          <div class="sidebar-widget-body outer-top-xs">
            <div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">



              <div class="item">
                <div class="products special-product">

  @foreach($special_offer as $service)
  <div class="product">
    <div class="product-micro">
      <div class="row product-micro-row">
        <div class="col col-xs-5">
          <div class="product-image">
            <div class="image"> <a href="{{ url('service/details/'.$service->id.'/'.$service->service_slug_en ) }}"> <img src="{{ asset($service->service_thambnail) }}" alt=""> </a> </div>
            <!-- /.image --> 
            
          </div>
          <!-- /.product-image --> 
        </div>
        <!-- /.col -->
        <div class="col col-xs-7">
          <div class="product-info">
            <h3 class="name"><a href="{{ url('service/details/'.$service->id.'/'.$service->service_slug_en ) }}">@if(session()->get('language') == 'bangla') {{ $service->service_name_bn }} @else {{ $service->service_name_en }} @endif</a></h3>
            <div class="rating rateit-small"></div>
 <div class="product-price"> <span class="price"> ৳{{ $service->selling_price }} </span> </div>
            <!-- /.product-price --> 
            
          </div>
        </div>
        <!-- /.col --> 
      </div>
      <!-- /.product-micro-row --> 
    </div>
    <!-- /.product-micro --> 
    
  </div>
@endforeach <!-- // end special offer foreach -->




                  
    </div>
  </div>










            </div>
          </div>
          <!-- /.sidebar-widget-body --> 
        </div>
        <!-- /.sidebar-widget --> 
        <!-- ============================================== SPECIAL OFFER : END ============================================== --> 


  <!-- ===== ===== PRODUCT TAGS ==== ====== -->
   @include('frontend.common.service_tags')
  <!-- ==== ===== PRODUCT TAGS : END ======= ==== --> 


         <!-- ============================================== SPECIAL DEALS ============================================== -->
        
         <div class="sidebar-widget outer-bottom-small wow fadeInUp">
          <h3 class="section-title">Special Deals</h3>
          <div class="sidebar-widget-body outer-top-xs">
            <div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">


              <div class="item">
                <div class="products special-product">

   @foreach($special_deals as $service)
      <div class="product">
        <div class="product-micro">
          <div class="row product-micro-row">
            <div class="col col-xs-5">
              <div class="product-image">
                <div class="image"> <a href="{{ url('service/details/'.$service->id.'/'.$service->service_slug_en ) }}"> <img src="{{ asset($service->service_thambnail) }}"  alt=""> </a> </div>
                <!-- /.image --> 
                
              </div>
              <!-- /.product-image --> 
            </div>
            <!-- /.col -->
            <div class="col col-xs-7">
              <div class="product-info">
                <h3 class="name"><a href="{{ url('service/details/'.$service->id.'/'.$service->service_slug_en ) }}">@if(session()->get('language') == 'bangla') {{ $service->service_name_bn }} @else {{ $service->service_name_en }} @endif</a></h3>
                <div class="rating rateit-small"></div>
                <div class="product-price"> <span class="price"> ৳{{ $service->selling_price }} </span> </div>
                <!-- /.product-price --> 
                
              </div>
            </div>
            <!-- /.col --> 
          </div>
          <!-- /.product-micro-row --> 
        </div>
        <!-- /.product-micro --> 
        
      </div>
      @endforeach <!-- // end special deals foreach -->



              
                </div>
              </div>



            </div>
          </div>
          <!-- /.sidebar-widget-body --> 
        </div>
        <!-- /.sidebar-widget --> 
        <!-- ============================================== SPECIAL DEALS : END ============================================== --> 
        
        <div class="home-banner"> <img src="{{ asset('frontend/assets/images/banners/LHS-banner.jpg') }}" alt="Image"> </div>
      </div>
      <!-- /.sidemenu-holder --> 
      <!-- ============================================== SIDEBAR : END ============================================== --> 
      
      <!-- ============================================== CONTENT ============================================== -->
      <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder"> 
        
        
        <!--Banner Start-->
        <section id="banner" class="home-one">
          <div class="text-center parallax-section">
            <div class="row text-center">
              <div class="col-md-12">
                <h1 class="panel-heading">Ready to Live Smarter?</h1>
                <p class="caption">Book Expert home cleaners and handymen at a moment's notice. just pick a<br/>
                  time and we'll do the rest</p>
@php
$services = App\Models\Service::orderBy('service_name_en','ASC')->get();
@endphp 
      
                <form class="form-inline book-now-home">
                  <div class="form-group">
                    <div class="input-group">
                      <div class="dropdown category-dropdown text-left"> <a data-toggle="dropdown" href="#"><i class="fa fa-list" aria-hidden="true"></i> <span class="change-text">Select Service</span> <i class="fa fa-caret-down pull-right" aria-hidden="true"></i> </a>
                        <ul class="dropdown-menu category-change">
                          @foreach ($services as $service)
                          <li><a href="{{ url('service/details/'.$service->id.'/'.$service->service_slug_en ) }}">                             
                                  {{ $service->service_name_en }}  
                              </a>                                                                                      
                          </li>
                          @endforeach
        
                        
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    
                  </div>
                  <button type="submit" class="btn btn-primary booknow btn-skin">Book now</button>
                </form>
              </div>
            </div>
          </div>
        </section>

        <!--/Banner End--> 


      <!--How it works Section Satrt-->
      <section id="howitwork">
        <div class="text-center">
          <h1 class="panel-heading">How it works</h1>
          <div class="row">
            <div class="col-md-3 col-xs-offset-0 step-one"> <img  src="{{ asset('frontend/images/Book.png') }}" alt="Book" class="img-circle htw" />
              <h4>Book</h4>
              <p>Select the date and time like<br />
                your perofessional to show up</p>
            </div>
            <div class="col-md-1 hidden-xs hidden-sm"> </div>
            <div class="col-md-3 step-two"> <img  src="{{ asset('frontend/images/Schedule.png') }}" alt="Schedule" class="img-circle" />
              <h4>Schedule</h4>
              <p>Certified Taskers comes over<br/>
                and done your task</p>
            </div>
            <div class="col-md-1 hidden-xs hidden-sm"> </div>
            <div class="col-md-3"> <img  src="{{ asset('frontend/images/Relax.png') }}" alt="Relax" class="img-circle" />
              <h4>Relax</h4>
              <p>your task is completed to your<br/>
                satisfaction - guranteed</p>
            </div>
          </div>
        </div>
      </section>



<!--How it works Section End--> 
    
        
        <!-- = ===== SCROLL TABS =============== ========== -->

        <div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
          <div class="more-info-tab clearfix ">
            <h3 class="new-product-title pull-left">New Services</h3>
            <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
              <li class="active"><a data-transition-type="backSlide" href="#all" data-toggle="tab">All</a></li>

              @foreach($categoriesLimit as $categorylimit)
  <li><a data-transition-type="backSlide" href="#category{{ $categorylimit->id }}" data-toggle="tab">{{ $categorylimit->category_name_en }}</a></li>
              @endforeach
              
            </ul>
            <!-- /.nav-tabs --> 
          </div>
          <div class="tab-content outer-top-xs">



            <div class="tab-pane in active" id="all">
              <div class="product-slider">
                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">

                  @foreach($services as $service)
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
       <div class="image">
        <a href="{{ url('service/details/'.$service->id.'/'.$service->service_slug_en ) }}">
        <img  src="{{ asset($service->service_thambnail) }}" alt=""></a> 
      </div>
                          <!-- /.image -->

        @php
        $amount = $service->selling_price - $service->discount_price;
        $discount = ($amount/$service->selling_price) * 100;
        @endphp                  
                          
          <div>
            @if ($service->discount_price == NULL)
            <div class="tag new"><span>new</span></div>
            @else
            <div class="tag hot"><span>{{ round($discount) }}%</span></div>
            @endif
          </div>
                         </div>

                        <!-- /.product-image -->
                        
        <div class="product-info text-left">
          <h3 class="name"><a href="{{ url('service/details/'.$service->id.'/'.$service->service_slug_en ) }}">
@if(session()->get('language') == 'bangla') {{ $service->service_name_bn }} @else {{ $service->service_name_en }} @endif
            </a></h3>
          <div class="rating rateit-small"></div>
          <div class="description"></div>

         @if ($service->discount_price == NULL)
    <div class="product-price"> <span class="price">৳ {{ $service->selling_price }} </span>  </div>
         @else
 <div class="product-price"> <span class="price">৳ {{ $service->discount_price }} </span> <span class="price-before-discount">৳ {{ $service->selling_price }}</span> </div>
         @endif

         
          <!-- /.product-price --> 
          
        </div>
        <!-- /.product-info -->
        <div class="cart clearfix animate-effect">
          <div class="action">
            <ul class="list-unstyled">
              <li class="add-cart-button btn-group">
                <li class="add-cart-button btn-group">
       
                  <button class="btn btn-primary icon" type="button" title="Add Cart" data-toggle="modal" data-target="#exampleModal" id="{{ $service->id }}" onclick="serviceView(this.id)"> <i class="fa fa-shopping-cart"></i> </button>
                  
                  <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                </li>         
                <button class="btn btn-primary icon" type="button" title="Wishlist" id="{{ $service->id }}" onclick="addToWishList(this.id)"> <i class="fa fa-heart"></i> </button>
            </ul>
          </div>
          <!-- /.action --> 
        </div>
        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  @endforeach<!--  // end all optionproduct foreach  -->


                  
                  
                </div>
                <!-- /.home-owl-carousel --> 
              </div>
              <!-- /.product-slider --> 
            </div>
            <!-- /.tab-pane -->




            @foreach($categories as $category)
            <div class="tab-pane" id="category{{ $category->id }}">
              <div class="product-slider">
                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">

@php
  $catwiseService = App\Models\Service::where('category_id',$category->id)->orderBy('id','DESC')->get(); 
@endphp
                  

                  @forelse($catwiseService as $service)
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="{{ url('service/details/'.$service->id.'/'.$service->service_slug_en ) }}"><img  src="{{ asset($service->service_thambnail) }}" alt=""></a> </div>
                          <!-- /.image -->

        @php
        $amount = $service->selling_price - $service->discount_price;
        $discount = ($amount/$service->selling_price) * 100;
        @endphp                  
                          
          <div>
            @if ($service->discount_price == NULL)
            <div class="tag new"><span>new</span></div>
            @else
            <div class="tag hot"><span>{{ round($discount) }}%</span></div>
            @endif
          </div>
                         </div>

                        <!-- /.product-image -->
                        
        <div class="product-info text-left">
          <h3 class="name"><a href="{{ url('service/details/'.$service->id.'/'.$service->service_slug_en ) }}">
@if(session()->get('language') == 'bangla') {{ $service->service_name_bn}} @else {{ $service->service_name_en }} @endif
            </a></h3>
          <div class="rating rateit-small"></div>
          <div class="description"></div>

         @if ($service->discount_price == NULL)
    <div class="product-price"> <span class="price">৳ {{ $service->selling_price }} </span>  </div>
         @else
 <div class="product-price"> <span class="price">৳ {{ $service->discount_price }} </span> <span class="price-before-discount">$ {{ $service->selling_price }}</span> </div>
         @endif

         
          <!-- /.product-price --> 
          
        </div>
        <!-- /.product-info -->
        <div class="cart clearfix animate-effect">
          <div class="action">
            <ul class="list-unstyled">
              <li class="add-cart-button btn-group">
       
                <button class="btn btn-primary icon" type="button" title="Add Cart" data-toggle="modal" data-target="#exampleModal" id="{{ $service->id }}" onclick="serviceView(this.id)"> <i class="fa fa-shopping-cart"></i> </button>
                
                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
              </li>
        
              <button class="btn btn-primary icon" type="button" title="Wishlist" id="{{ $service->id }}" onclick="addToWishList(this.id)"> <i class="fa fa-heart"></i> </button>

            </ul>
          </div>
          <!-- /.action --> 
        </div>
        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->

                  @empty
                  <h5 class="text-danger">No Services Found</h5>

                  @endforelse<!--  // end all optionproduct foreach  -->


                  
                  
                </div>
                <!-- /.home-owl-carousel --> 
              </div>
              <!-- /.product-slider --> 
            </div>
            <!-- /.tab-pane -->
            @endforeach <!-- end categor foreach -->


 
            
            
          </div>
          <!-- /.tab-content --> 
        </div>
        <!-- /.scroll-tabs --> 
        <!-- ============================================== SCROLL TABS : END ============================================== --> 
        
        
        
  
        <!-- ============================================== WIDE PRODUCTS ============================================== -->
        <div class="wide-banners wow fadeInUp outer-bottom-xs">
          <div class="row">
            <div class="col-md-7 col-sm-7">
              <div class="wide-banner cnt-strip">
                <div class="image"> <img class="img-responsive" src="{{ asset('frontend/assets/images/banners/home-banner1.jpg') }}" alt=""> </div>
              </div>
              <!-- /.wide-banner --> 
            </div>
            <!-- /.col -->
            <div class="col-md-5 col-sm-5">
              <div class="wide-banner cnt-strip">
                <div class="image"> <img class="img-responsive" src="{{ asset('frontend/assets/images/banners/home-banner2.jpg') }}" alt=""> </div>
              </div>
              <!-- /.wide-banner --> 
            </div>
            <!-- /.col --> 
          </div>
          <!-- /.row --> 
        </div>
        <!-- /.wide-banners --> 
        
        <!-- ============================================== WIDE PRODUCTS : END ============================================== --> 
        
        
        
        <!-- == === FEATURED PRODUCTS == ==== -->

        <section class="section featured-product wow fadeInUp">
          <h3 class="section-title">Featured Services</h3>
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">


            @foreach($featured as $service)
            <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="{{ url('service/details/'.$service->id.'/'.$service->service_slug_en ) }}"><img  src="{{ asset($service->service_thambnail) }}" alt=""></a> </div>
                          <!-- /.image -->

        @php
        $amount = $service->selling_price - $service->discount_price;
        $discount = ($amount/$service->selling_price) * 100;
        @endphp                  
                          
          <div>
            @if ($service->discount_price == NULL)
            <div class="tag new"><span>new</span></div>
            @else
            <div class="tag hot"><span>{{ round($discount) }}%</span></div>
            @endif
          </div>
        </div>

                        <!-- /.product-image -->
                        
        <div class="product-info text-left">
          <h3 class="name"><a href="{{ url('service/details/'.$service->id.'/'.$service->service_slug_en ) }}">
@if(session()->get('language') == 'bangla') {{ $service->service_name_bn }} @else {{ $service->service_name_en }} @endif
            </a></h3>
          <div class="rating rateit-small"></div>
          <div class="description"></div>

         @if ($service->discount_price == NULL)
    <div class="product-price"> <span class="price"> ৳{{ $service->selling_price }} </span>  </div>
         @else
 <div class="product-price"> <span class="price"> ৳{{ $service->discount_price }} </span> <span class="price-before-discount"> ৳{{ $service->selling_price }}</span> </div>
         @endif

         
          <!-- /.product-price --> 
          
        </div>
        <!-- /.product-info -->
<div class="cart clearfix animate-effect">
  <div class="action">
    <ul class="list-unstyled">
      <li class="add-cart-button btn-group">
       
        <button class="btn btn-primary icon" type="button" title="Add Cart" data-toggle="modal" data-target="#exampleModal" id="{{ $service->id }}" onclick="serviceView(this.id)"> <i class="fa fa-shopping-cart"></i> </button>
        
        <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
      </li>

      <button class="btn btn-primary icon" type="button" title="Wishlist" id="{{ $service->id }}" onclick="addToWishList(this.id)"> <i class="fa fa-heart"></i> </button>
      
     
    </ul>
</div>
          <!-- /.action --> 
        </div>
        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
            <!-- /.item -->
            @endforeach
            
           
          </div>
          <!-- /.home-owl-carousel --> 
        </section>
        <!-- /.section --> 
        <!-- == ==== FEATURED PRODUCTS : END ==== === --> 


        <!-- == === skip_product_0 PRODUCTS == ==== -->

        <section class="section featured-product wow fadeInUp">
          <h3 class="section-title">
@if(session()->get('language') == 'hbangla') {{ $skip_category_0->category_name_bn }} @else {{ $skip_category_0->category_name_en }} @endif
            </h3>
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">


            @foreach($skip_service_0 as $service)
            <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="{{ url('service/details/'.$service->id.'/'.$service->service_slug_en ) }}"><img  src="{{ asset($service->service_thambnail) }}" alt=""></a> </div>
                          <!-- /.image -->

        @php
        $amount = $service->selling_price - $service->discount_price;
        $discount = ($amount/$service->selling_price) * 100;
        @endphp                  
                          
          <div>
            @if ($service->discount_price == NULL)
            <div class="tag new"><span>new</span></div>
            @else
            <div class="tag hot"><span>{{ round($discount) }}%</span></div>
            @endif
          </div>
                         </div>

                        <!-- /.product-image -->
                        
        <div class="product-info text-left">
          <h3 class="name"><a href="{{ url('service/details/'.$service->id.'/'.$service->service_slug_en ) }}">
@if(session()->get('language') == 'bangla') {{ $service->service_name_bn }} @else {{ $service->service_name_en }} @endif
            </a></h3>
          <div class="rating rateit-small"></div>
          <div class="description"></div>

         @if ($service->discount_price == NULL)
    <div class="product-price"> <span class="price"> ৳{{ $service->selling_price }} </span>  </div>
         @else
 <div class="product-price"> <span class="price"> ৳{{ $service->discount_price }} </span> <span class="price-before-discount">৳{{ $service->selling_price }}</span> </div>
         @endif

         
          <!-- /.product-price --> 
          
        </div>
        <!-- /.product-info -->
        <div class="cart clearfix animate-effect">
          <div class="action">
            <ul class="list-unstyled">
              <li class="add-cart-button btn-group">

                <li class="add-cart-button btn-group">
       
                  <button class="btn btn-primary icon" type="button" title="Add Cart" data-toggle="modal" data-target="#exampleModal" id="{{ $service->id }}" onclick="serviceView(this.id)"> <i class="fa fa-shopping-cart"></i> </button>
                  
                  <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                </li>
          
                <button class="btn btn-primary icon" type="button" title="Wishlist" id="{{ $service->id }}" onclick="addToWishList(this.id)"> <i class="fa fa-heart"></i> </button>

            </ul>
          </div>
          <!-- /.action --> 
        </div>
        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
            <!-- /.item -->
            @endforeach
            
           
          </div>
          <!-- /.home-owl-carousel --> 
        </section>
        <!-- /.section --> 
        <!-- == ==== skip_product_0 PRODUCTS : END ==== === --> 


        <!-- == === skip_product_1 PRODUCTS == ==== -->

        <section class="section featured-product wow fadeInUp">
          <h3 class="section-title">
@if(session()->get('language') == 'bangla') {{ $skip_category_1->category_name_bn }} @else {{ $skip_category_1->category_name_en }} @endif
            </h3>
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">


            @foreach($skip_service_1 as $service)
            <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="{{ url('service/details/'.$service->id.'/'.$service->service_slug_en ) }}"><img  src="{{ asset($service->service_thambnail) }}" alt=""></a> </div>
                          <!-- /.image -->

        @php
        $amount = $service->selling_price - $service->discount_price;
        $discount = ($amount/$service->selling_price) * 100;
        @endphp                  
                          
          <div>
            @if ($service->discount_price == NULL)
            <div class="tag new"><span>new</span></div>
            @else
            <div class="tag hot"><span>{{ round($discount) }}%</span></div>
            @endif
          </div>
                         </div>

                        <!-- /.product-image -->
                        
        <div class="product-info text-left">
          <h3 class="name"><a href="{{ url('service/details/'.$service->id.'/'.$service->service_slug_en ) }}">
@if(session()->get('language') == 'bangla') {{ $service->service_name_bn }} @else {{ $service->service_name_en }} @endif
            </a></h3>
          <div class="rating rateit-small"></div>
          <div class="description"></div>

         @if ($service->discount_price == NULL)
    <div class="product-price"> <span class="price"> ৳{{ $service->selling_price }} </span>  </div>
         @else
 <div class="product-price"> <span class="price"> ৳{{ $service->discount_price }} </span> <span class="price-before-discount">$ {{ $service->selling_price }}</span> </div>
         @endif

         
          <!-- /.product-price --> 
          
        </div>
        <!-- /.product-info -->
        <div class="cart clearfix animate-effect">
          <div class="action">
            <ul class="list-unstyled">
              <li class="add-cart-button btn-group">

                <li class="add-cart-button btn-group">
       
                  <button class="btn btn-primary icon" type="button" title="Add Cart" data-toggle="modal" data-target="#exampleModal" id="{{ $service->id }}" onclick="serviceView(this.id)"> <i class="fa fa-shopping-cart"></i> </button>
                  
                  <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                </li>
          
                <button class="btn btn-primary icon" type="button" title="Wishlist" id="{{ $service->id }}" onclick="addToWishList(this.id)"> <i class="fa fa-heart"></i> </button>

            </ul>
          </div>
          <!-- /.action --> 
        </div>
        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
            <!-- /.item -->
            @endforeach
            
           
          </div>
          <!-- /.home-owl-carousel --> 
        </section>
        <!-- /.section --> 
        <!-- == ==== skip_product_1 PRODUCTS : END ==== === -->


        <!-- ============================================== WIDE PRODUCTS ============================================== -->
        <div class="wide-banners wow fadeInUp outer-bottom-xs">
          <div class="row">
            <div class="col-md-12">
              <div class="wide-banner cnt-strip">
                <div class="image"> <img class="img-responsive" src="{{ asset('frontend/assets/images/banners/home-banner.png') }}" alt=""> </div>
                <div class="strip strip-text">
                  <div class="strip-inner">
                    <h2 class="text-right">New Mens Fashion<br>
                      <span class="shopping-needs">Save up to 40% off</span></h2>
                  </div>
                </div>
                <div class="new-label">
                  <div class="text">NEW</div>
                </div>
                <!-- /.new-label --> 
              </div>
              <!-- /.wide-banner --> 
            </div>
            <!-- /.col --> 
            
          </div>
          <!-- /.row --> 
        </div>
        <!-- /.wide-banners --> 
        <!-- ============================================== WIDE PRODUCTS : END ============================================== --> 
        
        
        <!-- =========================== BLOG SLIDER ========================== -->
        <section class="section latest-blog outer-bottom-vs wow fadeInUp">
          <h3 class="section-title">latest form blog</h3>
          <div class="blog-slider-container outer-top-xs">
            <div class="owl-carousel blog-slider custom-carousel">
              

  @foreach($blogpost as $blog)
              <div class="item">
                <div class="blog-post">
                  <div class="blog-post-image">
                    <div class="image"> <a href="{{ route('post.details',$blog->id) }}"><img src="{{ asset($blog->post_image) }}" alt=""></a> </div>
                  </div>
                  <!-- /.blog-post-image -->
                  
                  <div class="blog-post-info text-left">
                    <h3 class="name"><a href="#">@if(session()->get('language') == 'bangla') {{ $blog->post_title_bn }} @else {{ $blog->post_title_en }} @endif</a></h3>


                    <span class="info">{{ Carbon\Carbon::parse($blog->created_at)->diffForHumans()  }}</span>

                    <p class="text">@if(session()->get('language') == 'bangla') {!! Str::limit($blog->post_details_bn, 100 )  !!} @else {!! Str::limit($blog->post_details_en, 100 )  !!} @endif</p>


                    <a href="{{ route('post.details',$blog->id) }}" class="lnk btn btn-primary">Read more</a> </div>
                  <!-- /.blog-post-info --> 
                  
                </div>
                <!-- /.blog-post --> 
              </div>
              <!-- /.item -->
          @endforeach 
             
              
            </div>
            <!-- /.owl-carousel --> 
          </div>
          <!-- /.blog-slider-container --> 
        </section> 
        <!-- ============================================== BLOG SLIDER : END ============================================== --> 
        
      </div>
      <!-- /.homebanner-holder --> 
      <!-- ============================================== CONTENT : END ============================================== --> 
    </div>
    <!-- /.row --> 
    <!-- ============================================== BRANDS CAROUSEL ============================================== -->
    @include('frontend.include.brands')
    <!-- /.logo-slider --> 
    <!-- ============================================== BRANDS CAROUSEL : END ============================================== --> 
  </div>
  <!-- /.container --> 
</div>
@endsection