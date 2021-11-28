<header class="header-style-1"> 

  <!-- ============================================== TOP MENU ============================================== -->
  <div class="top-bar animate-dropdown">
    <div class="container">
      <div class="header-top-inner">
        <div class="cnt-account">
          <ul class="list-unstyled">
            <li><a href="{{ route('wishlist') }}"><i class="icon fa fa-heart"></i>Wishlist</a></li>
            <li><a href="{{ route('mycart') }}"><i class="icon fa fa-shopping-cart"></i>My Cart</a></li>
            
            <li><a href="" type="button" data-toggle="modal" data-target="#trackbooking"><i class="icon fa fa-check"></i>Track Booking</a></li>
 
          </ul>
        </div>
        <!-- /.cnt-account -->
        
        <div class="cnt-block">
          <ul class="list-unstyled list-inline">
            
            <li class="dropdown dropdown-small"> <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="value">
              @if(session()->get('language') == 'bangla') ভাষা: বাংলা @else Language @endif
                </span><b class="caret"></b></a>
              <ul class="dropdown-menu">
                @if(session()->get('language') == 'bangla')       
        <li><a href="{{ route('english.language') }}">English</a></li>
        @else
        <li><a href="{{ route('bangla.language') }}">বাংলা</a></li>
         @endif   
              </ul>
            </li>
          </ul>
          <!-- /.list-unstyled --> 
        </div>
        <!-- /.cnt-cart -->
        <div class="clearfix"></div>
      </div>
      <!-- /.header-top-inner --> 
    </div>
    <!-- /.container --> 
  </div>
  <!-- /.header-top --> 
  <!-- ============================================== TOP MENU : END ============================================== -->
  <div class="main-header">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-3 logo-holder"> 
          @php
         $setting = App\Models\SiteSetting::find(1);
          @endphp
          <!-- ============================================================= LOGO ============================================================= -->
          <div class="logo"> <a href="{{ url('/') }}"> <img src="{{ asset($setting->logo) }}" alt="logo"> </a> </div>
          <!-- /.logo --> 
          <!-- ============================================================= LOGO : END ============================================================= --> </div>
        <!-- /.logo-holder -->
        <div class="col-xs-7 col-sm-7 col-md-5"></div>
        <div class="col-xs-7 col-sm-7 col-md-4 top-search-holder"> 
          <!-- /.contact-row --> 
          <!-- ============================================================= SEARCH AREA ============================================================= -->
          <div class="search-area">
            <form method="post" action="{{ route('service.search') }}">
              @csrf
              <div class="control-group">
               
     <input class="search-field" onfocus="search_result_show()" onblur="search_result_hide()" id="search" name="search" placeholder="Search here..." />
                <button class="search-button" type="submit"></button> </div>
            </form>
            <div id="searchServices"></div>
          </div>
          <!-- /.search-area --> 
          <!-- ============================================================= SEARCH AREA : END ============================================================= --> </div>
        <!-- /.top-search-holder -->
        
        {{-- <div class="col-xs-12 col-sm-12 col-md-2 animate-dropdown top-cart-row"> 

          <!-- ===== === SHOPPING CART DROPDOWN ===== == -->
          
          <div class="dropdown dropdown-cart"> <a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
            <div class="items-cart-inner">
              <div class="basket"> <i class="glyphicon glyphicon-shopping-cart"></i> </div>
    <div class="basket-item-count"><span class="count" id="cartQty"> </span></div>
              <div class="total-price-basket"> <span class="lbl">cart -</span> 
                <span class="total-price"> <span class="sign">৳</span>
                <span class="value" id="cartSubTotal"> </span> </span> </div>
            </div>
            </a>
            <ul class="dropdown-menu">
              <li>
         <!--   // Mini Cart Start with Ajax -->

         <div id="miniCart">
           
         </div>
 
<!--   // End Mini Cart Start with Ajax -->


                <div class="clearfix cart-total">
                  <div class="pull-right"> <span class="text">Sub Total <span style="font-size: 10px">(inc.tax)</span> :</span>
                    <span class='price'  id="cartSubTotal">  </span> </div>
                  <div class="clearfix"></div>
                  <a href="{{ route('checkout') }}" class="btn btn-upper btn-primary btn-block m-t-20">Checkout</a> </div>
                <!-- /.cart-total--> 
                
              </li>
            </ul>
            <!-- /.dropdown-menu--> 
          </div>
          <!-- /.dropdown-cart --> 
          
          <!-- == === SHOPPING CART DROPDOWN : END=== === --> </div> --}}

          
        <!-- /.top-cart-row --> 
      </div>
      <!-- /.row --> 
      
    </div>
    <!-- /.container --> 
    
  </div>
  <!-- /.main-header --> 
  
  <!-- ============================================== NAVBAR ============================================== -->
  <div class="header-nav animate-dropdown">
    <div class="container">
      <div class="yamm navbar navbar-default" role="navigation">
        <div class="navbar-header">
        <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> 
        <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div class="nav-bg-class">
          <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
            <div class="nav-outer">
              <ul class="nav navbar-nav">

<li class="active dropdown yamm-fw"> <a href="{{ url('/') }}" data-hover="dropdown" class="dropdown-toggle" >
  @if(session()->get('language') == 'bangla') হোমপেজ @else Home @endif
    </a> 
</li>
               
  <li class="dropdown yamm mega-menu"> <a href="{{ url('/') }}" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">
    @if(session()->get('language') == 'bangla') সেবা @else Service @endif
    </a>
    <ul class="dropdown-menu container">
      <li>
        <div class="yamm-content ">
          <div class="row">

<!--   // Get Category Table Data -->
@php
$categories = App\Models\Category::orderBy('category_name_en','ASC')->get();
@endphp

  @foreach($categories as $category)
            <div class="col-xs-12 col-sm-6 col-md-2 col-menu">

          <a href="{{ url('category/service/'.$category->id.'/'.$category->category_slug_en ) }}">

              <h2 class="title">
@if(session()->get('language') == 'bangla') {{ $category->category_name_bn }} @else {{ $category->category_name_en }} @endif
                </h2> </a>


    <!--   // Get SubCategory Table Data -->
    @php
    $subcategories = App\Models\SubCategory::where('category_id',$category->id)->orderBy('subcategory_name_en','ASC')->get();
    @endphp         

   @foreach($subcategories as $subcategory)
            
              <ul class="col-xs-12 col-sm-6 col-md-2 col-menu links">
                <li>


  <a href="{{ url('subcategory/service/'.$subcategory->id.'/'.$subcategory->subcategory_slug_en ) }}">
@if(session()->get('language') == 'bangla') {{ $subcategory->subcategory_name_bn }} @else {{ $subcategory->subcategory_name_en }} @endif
              
                  </a></li>
                
              </ul>
     @endforeach <!-- // End SubCategory Foreach -->

            </div>
            <!-- /.col -->
            @endforeach <!-- // End Category Foreach -->
           
            
            
            <!-- /.yamm-content --> 
          </div>
        </div>
      </li>
    </ul>
  </li>

                <li class="dropdown yamm-fw"> <a href="#" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">
                  @if(session()->get('language') == 'bangla') আমাদের সম্পর্কে @else About Us @endif
                </a> </li>
  
                <li class="dropdown yamm-fw"> <a href="#" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">
                  @if(session()->get('language') == 'bangla') যোগাযোগ @else Contact @endif
                </a> </li>

                <li class="dropdown  yamm-fw"> <a href="{{ route('home.blog') }}">
                  @if(session()->get('language') == 'bangla') ব্লগ @else Blog  @endif </a>
                </li>
                
                @auth
                <li class="dropdown  navbar-right special-menu"> 
                  <a href="{{ route('login') }}"><i class="icon fa fa-user"></i>User Profile  </a>
                </li>
                @else
                <li class="dropdown  navbar-right special-menu"> 
                  <a href="{{ route('login') }}"><i class="icon fa fa-lock"></i>Login  </a>
                </li>
                @endauth

                @auth
                @else
                <li class="dropdown  navbar-right"> 
                  <a href="{{ route('register') }}">Register  </a>
                </li>
                @endauth
              
                
              
              </ul>
              <!-- /.navbar-nav -->
              <div class="clearfix"></div>
            </div>
            <!-- /.nav-outer --> 
          </div>
          <!-- /.navbar-collapse --> 
          
        </div>
        <!-- /.nav-bg-class --> 
      </div>
      <!-- /.navbar-default --> 
    </div>
    <!-- /.container-class --> 
    
  </div>
  <!-- /.header-nav --> 
  <!-- ============================================== NAVBAR : END ============================================== --> 

  <!-- Order Traking Modal -->
<div class="modal fade" id="trackbooking" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Track Your Booking </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         
        <form method="post" action="{{ route('track.booking') }}">
          @csrf
         <div class="modal-body">
          <label>Invoice Code</label>
          <input type="text" name="code" required="" class="form-control" placeholder="Your Booking Invoice Number">           
         </div>

         <button class="btn btn-danger" type="submit" style="margin-left: 17px;"> Track Now </button>
          
        </form> 


      </div>
       
    </div>
  </div>
</div>
  
</header>

<style>
  
  .search-area{
    position: relative;
  }
  
    #searchServices {
      position: absolute;
      top: 100%;
      left: 0;
      width: 100%;
      background: #ffffff;
      z-index: 999;
      border-radius: 8px;
      margin-top: 5px;
    }
  
  
  </style>
  
  
  <script>
    function search_result_hide(){
      $("#searchServices").slideUp();
    }
  
     function search_result_show(){
        $("#searchServices").slideDown();
    }
  
  
  </script>