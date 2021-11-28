@php
  $prefix = Request::route()->getPrefix();
  $route = Route::current()->getName();
 
@endphp

<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">	
		
        <div class="user-profile">
			<div class="ulogo">
				 <a href="{{ url('admin/dashboard') }}">
				  <!-- logo for regular state and mobile devices -->
					 <div class="d-flex align-items-center justify-content-center">					 	
						  <img src="{{ asset('backend/images/logo-dark.png') }}" alt="">
						  <h3><b>HOME</b>Service </h3>
					 </div>
				</a>
			</div>
        </div>
      
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">  
		  
		<li class="{{ ($route == 'dashboard')? 'active':'' }}">
          <a href="{{ url('admin/dashboard') }}">
            <i data-feather="pie-chart"></i>
			<span>Dashboard</span>
          </a>
        </li>  

        @php
        $category = (auth()->guard('admin')->user()->category == 1);
        $service = (auth()->guard('admin')->user()->service == 1);
        $coupons = (auth()->guard('admin')->user()->coupons == 1);
        $shipping = (auth()->guard('admin')->user()->shipping == 1);
        $blog = (auth()->guard('admin')->user()->blog == 1);
        $setting = (auth()->guard('admin')->user()->setting == 1);
        $complainbooking = (auth()->guard('admin')->user()->complainbooking == 1);
        $review = (auth()->guard('admin')->user()->review == 1);
        $bookings = (auth()->guard('admin')->user()->bookings == 1);
        $stock = (auth()->guard('admin')->user()->stock == 1);
        $reports = (auth()->guard('admin')->user()->reports == 1);
        $alluser = (auth()->guard('admin')->user()->alluser == 1);
        $adminuserrole = (auth()->guard('admin')->user()->adminuserrole == 1);

        @endphp


		@if($category == true)  
        <li class="treeview {{ ($prefix == '/category')?'active':'' }}">
          <a href="#">
            <i data-feather="folder"></i> <span>Category</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ ($route == 'all.category')? 'active':'' }}"><a href="{{ route('all.category') }}"><i class="ti-more"></i>All Category</a></li>
            <li class="{{ ($route == 'all.subcategory')? 'active':'' }}"><a href="{{ route('all.subcategory') }}"><i class="ti-more"></i>All SubCategory</a></li>
          </ul>
        </li>
    @else
    @endif

    @if($service == true)
        <li class="treeview {{ ($prefix == '/service')?'active':'' }}  ">
          <a href="#">
            <i data-feather="file"></i>
            <span>Services</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ ($route == 'add-service')? 'active':'' }}"><a href="{{ route('add-service') }}"><i class="ti-more"></i>Add Service</a></li>
            <li class="{{ ($route == 'manage-service')? 'active':'' }}"><a href="{{ route('manage-service') }}"><i class="ti-more"></i>Manage Service</a></li>
          </ul>
        </li> 		  
    @else
    @endif


        @if($coupons == true)

        <li class="treeview {{ ($prefix == '/coupons')?'active':'' }}  ">
          <a href="#">
            <i data-feather="file"></i>
            <span>Coupons</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ ($route == 'manage-coupon')? 'active':'' }}"><a href="{{ route('manage-coupon') }}"><i class="ti-more"></i>Manage Coupon</a></li>
          </ul>
        </li>      
        @else
        @endif


        @if($shipping == true)

         <li class="treeview {{ ($prefix == '/shipping')?'active':'' }}  ">
          <a href="#">
            <i data-feather="file"></i>
            <span>Shipping Area</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ ($route == 'manage-division')? 'active':'' }}"><a href="{{ route('manage-division') }}"><i class="ti-more"></i>Ship Division</a></li>

            <li class="{{ ($route == 'manage-district')? 'active':'' }}"><a href="{{ route('manage-district') }}"><i class="ti-more"></i>Ship District</a></li>

            <li class="{{ ($route == 'manage-city')? 'active':'' }}"><a href="{{ route('manage-city') }}"><i class="ti-more"></i>Ship City</a></li>
          </ul>
        </li> 
        @else
        @endif

        @if($blog == true)

        <li class="treeview {{ ($prefix == '/blog')?'active':'' }}  ">
          <a href="#">
            <i data-feather="file"></i>
            <span>Manage Blog</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
        <li class="{{ ($route == 'blog.category')? 'active':'' }}"><a href="{{ route('blog.category') }}"><i class="ti-more"></i>Blog Category</a></li>

        <li class="{{ ($route == 'list.post')? 'active':'' }}"><a href="{{ route('list.post') }}"><i class="ti-more"></i>Blog Post List</a></li>

        <li class="{{ ($route == 'add.post')? 'active':'' }}"><a href="{{ route('add.post') }}"><i class="ti-more"></i>Add Blog Post</a></li>
  
          </ul>
        </li>       

        @else
        @endif

        @if($setting == true)

<li class="treeview {{ ($prefix == '/setting')?'active':'' }}  ">
          <a href="#">
            <i data-feather="file"></i>
            <span>Manage Setting</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
        <li class="{{ ($route == 'site.setting')? 'active':'' }}"><a href="{{ route('site.setting') }}"><i class="ti-more"></i>Site Setting</a></li>

        <li class="{{ ($route == 'seo.setting')? 'active':'' }}"><a href="{{ route('seo.setting') }}"><i class="ti-more"></i>Seo Setting</a></li>
 
  
          </ul>
        </li>

        @else
        @endif

        @if($complainbooking == true)

        <li class="treeview {{ ($prefix == '/complain')?'active':'' }}  ">
          <a href="#">
            <i data-feather="file"></i>
            <span>Booking Complains</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
        <li class="{{ ($route == 'complain.request')? 'active':'' }}"><a href="{{ route('complain.request') }}"><i class="ti-more"></i>Complain Request</a></li>

        <li class="{{ ($route == 'all.request')? 'active':'' }}"><a href="{{ route('all.request') }}"><i class="ti-more"></i>All Request</a></li>
 
  
          </ul>
        </li>    

        @else
        @endif

        @if($review == true)


        <li class="treeview {{ ($prefix == '/review')?'active':'' }}  ">
        <a href="#">
          <i data-feather="file"></i>
          <span>Manage Review</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
      <li class="{{ ($route == 'pending.review')? 'active':'' }}"><a href="{{ route('pending.review') }}"><i class="ti-more"></i>Pending Review</a></li>

      <li class="{{ ($route == 'publish.review')? 'active':'' }}"><a href="{{ route('publish.review') }}"><i class="ti-more"></i>Publish Review</a></li>


        </ul>
      </li>    

      @else
      @endif

		 
        <li class="header nav-small-cap">User Interface</li>
		  
        @if($bookings == true)
        <li class="treeview {{ ($prefix == '/bookings')?'active':'' }}  ">
          <a href="#">
            <i data-feather="file"></i>
            <span>Bookings </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ ($route == 'pending-bookings')? 'active':'' }}"><a href="{{ route('pending-bookings') }}"><i class="ti-more"></i>Pending Bookings</a></li>
            <li class="{{ ($route == 'confirmed-bookings')? 'active':'' }}"><a href="{{ route('confirmed-bookings') }}"><i class="ti-more"></i>Confirmed Bookings</a></li>
            <li class="{{ ($route == 'processing-bookings')? 'active':'' }}"><a href="{{ route('processing-bookings') }}"><i class="ti-more"></i>Processing Bookings</a></li>
            <li class="{{ ($route == 'shipped-bookings')? 'active':'' }}"><a href="{{ route('shipped-bookings') }}"><i class="ti-more"></i> Shipped Bookings</a></li>
            <li class="{{ ($route == 'delivered-bookings')? 'active':'' }}"><a href="{{ route('delivered-bookings') }}"><i class="ti-more"></i> Delivered Bookings</a></li>
            <li class="{{ ($route == 'cancel-bookings')? 'active':'' }}"><a href="{{ route('cancel-bookings') }}"><i class="ti-more"></i> Cancel Bookings</a></li>
          </ul>
        </li>         
        @else
        @endif

        

        

        @if($stock == true)
 <li class="treeview {{ ($prefix == '/stock')?'active':'' }}  ">
          <a href="#">
            <i data-feather="file"></i>
            <span>Manage Stock </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
        <li class="{{ ($route == 'service.stock')? 'active':'' }}"><a href="{{ route('service.stock') }}"><i class="ti-more"></i>Service Availablity</a></li>

        
          </ul>
        </li>    

		    @else
        @endif

    @if($reports == true)
		 <li class="treeview {{ ($prefix == '/reports')?'active':'' }}  ">
          <a href="#">
            <i data-feather="file"></i>
            <span>All Reports </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
        <li class="{{ ($route == 'all-reports')? 'active':'' }}"><a href="{{ route('all-reports') }}"><i class="ti-more"></i>All Reports</a></li>

        
          </ul>
        </li>         
        @else
        @endif

        @if($alluser == true)

     <li class="treeview {{ ($prefix == '/alluser')?'active':'' }}  ">
          <a href="#">
            <i data-feather="file"></i>
            <span>All Users </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
        <li class="{{ ($route == 'all-users')? 'active':'' }}"><a href="{{ route('all-users') }}"><i class="ti-more"></i>All Users</a></li>

        
          </ul>
        </li>    
        @else
        @endif

        @if($adminuserrole == true)

        <li class="treeview {{ ($prefix == '/adminuserrole')?'active':'' }}  ">
          <a href="#">
            <i data-feather="file"></i>
            <span>Admin User Role </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
        <li class="{{ ($route == 'all.admin.user')? 'active':'' }}"><a href="{{ route('all.admin.user') }}"><i class="ti-more"></i>All Admin User </a></li>

        
          </ul>
        </li>    

        @else
        @endif
		
		
      </ul>
    </section>
  </aside>