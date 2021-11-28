@extends('frontend.main_master')
@section('content')

@section('title')
{{ $service->service_name_en }} Service Details
@endsection

<style>
	.checked {
  color: orange;
}
</style>

<!-- ===== ======== HEADER : END ============================================== -->
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="{{ url('/') }}">Home</a></li>
				@foreach ($breadservice_cat as $category)
				<li style="display:inline"><a href="{{ url('category/service/'.$category->category->id.'/'.$category->category->category_slug_en ) }}">{{ $category->category->category_name_en }}</a></li>
				@endforeach

				@foreach ($breadservice_subcat as $subcategory)
				<li style="display:inline"><a href="{{ url('subcategory/service/'.$subcategory->subcategory->id.'/'.$subcategory->subcategory->subcategory_slug_en ) }}">{{ $subcategory->subcategory->subcategory_name_en }}</a></li>
				@endforeach		

				<li class='active'>{{ $service->service_name_en }}</li>
								
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->
<div class="body-content outer-top-xs">
	<div class='container'>
		<div class='row single-product'>
			<div class='col-md-3 sidebar'>
				<div class="sidebar-module-container">
				<div class="home-banner outer-top-n">
<img src="{{ asset('frontend/assets/images/banners/LHS-banner.jpg') }}" alt="Image">
</div>		
  
    
   <!-- ====== === HOT DEALS ==== ==== -->
   @include('frontend.common.hot_deals')
<!-- ===== ===== HOT DEALS: END ====== ====== --> 
    	
				</div>
			</div><!-- /.sidebar -->
			<div class='col-md-9'>
            <div class="detail-block">
				<div class="row  wow fadeInUp">
                
					     <div class="col-xs-12 col-sm-6 col-md-5 gallery-holder">
    <div class="product-item-holder size-big single-product-gallery small-gallery">

        <div id="owl-single-product">
            
@foreach($multiImag as $img)         
<div class="single-product-gallery-item" id="slide{{ $img->id }}">
    <a data-lightbox="image-1" data-title="Gallery" href="{{ asset($img->photo_name) }}">
        <img class="img-responsive" alt="" src="{{ asset($img->photo_name)  }}" data-echo="{{ asset($img->photo_name ) }}" />
    </a>
</div><!-- /.single-product-gallery-item -->
@endforeach
            

        </div><!-- /.single-product-slider -->


        <div class="single-product-gallery-thumbs gallery-thumbs">

            <div id="owl-single-product-thumbnails">
                
                
@foreach($multiImag as $img)
<div class="item">
    <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="1" href="#slide{{ $img->id }}">
    <img class="img-responsive" width="85" alt="" src="{{ asset($img->photo_name ) }} " data-echo="{{ asset($img->photo_name ) }} " />
    </a>
</div>
@endforeach

              
            </div><!-- /#owl-single-product-thumbnails -->

            

        </div><!-- /.gallery-thumbs -->

    </div><!-- /.single-product-gallery -->
</div><!-- /.gallery-holder -->        			
					<div class='col-sm-6 col-md-7 product-info-block'>
						<div class="product-info">
        
							<h1 class="name" id="pname">
        @if(session()->get('language') == 'bangla') {{ $service->service_name_bn }} @else {{ $service->service_name_en }} @endif
                            </h1>
							
							<div class="rating-reviews m-t-20">
								<div class="row">
									<div class="col-sm-3">
										<div class="rating rateit-small"></div>
									</div>
									<div class="col-sm-8">
										<div class="reviews">
											<a href="#" class="lnk">(13 Reviews)</a>
										</div>
									</div>
								</div><!-- /.row -->		
							</div><!-- /.rating-reviews -->

							<div class="stock-container info-container m-t-10">
								<div class="row">
									<div class="col-sm-2">
										<div class="stock-box">
											<span class="label">Availability :</span>
										</div>	
									</div>
									<div class="col-sm-9">
										<div class="stock-box">
											<span class="value">Available Now </span>
										</div>	
									</div>
								</div><!-- /.row -->	
							</div><!-- /.stock-container -->

    <div class="description-container m-t-20">
        @if(session()->get('language') == 'bangla') {!! $service->short_descp_bn !!} @else {!! $service->short_descp_en !!} @endif
    </div><!-- /.description-container -->
							<div class="price-container info-container m-t-20">
								<div class="row">
									

    <div class="col-sm-6">
        <div class="price-box">
        @if ($service->discount_price == NULL)
        <span class="price">৳{{ $service->selling_price }}</span>
        @else
        <span class="price">৳{{ $service->discount_price }}</span>
            <span class="price-strike">৳{{ $service->selling_price }}</span>
        @endif
            
        </div>
    </div>


	</div><!-- /.row -->
</div><!-- /.price-container -->



<div class="quantity-container info-container">
	<div class="row">
		
		

		<input type="hidden" id="service_id" value="{{ $service->id }}" min="1">

		<div class="col-sm-7">
			<button type="submit" onclick="addToCart()" class="btn btn-primary"><i class="fa fa-shopping-cart inner-right-vs"></i> ADD TO CART</button>
		</div>

		
	</div><!-- /.row -->
</div><!-- /.quantity-container -->

							
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<div class="addthis_inline_share_toolbox_8tvu"></div>
							

							
						</div><!-- /.product-info -->
					</div><!-- /.col-sm-7 -->
				</div><!-- /.row -->
                </div>
				
				<div class="product-tabs inner-bottom-xs  wow fadeInUp">
					<div class="row">
						<div class="col-sm-3">
							<ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
								<li class="active"><a data-toggle="tab" href="#description">DESCRIPTION</a></li>
								<li><a data-toggle="tab" href="#review">REVIEW</a></li>
								<li><a data-toggle="tab" href="#tags">TAGS</a></li>
							</ul><!-- /.nav-tabs #product-tabs -->
						</div>
						<div class="col-sm-9">

							<div class="tab-content">
								
    <div id="description" class="tab-pane in active">
        <div class="product-tab">
            <p class="text">@if(session()->get('language') == 'bangla') 
                {!! $service->long_descp_bn !!} @else {!! $service->long_descp_en !!} @endif</p>
        </div>
    </div><!-- /.tab-pane -->


	<div id="review" class="tab-pane">
		<div class="product-tab">
													
			<div class="product-reviews">
				<h4 class="title">Customer Reviews</h4>

				@php
				$reviews = App\Models\Review::where('service_id',$service->id)->latest()->limit(5)->get();
				@endphp			
				
					<div class="reviews">
							
						@foreach($reviews as $item)
						@if($item->status == 0)
				
						@else
				
						<div class="review">
				
						<div class="row">
							<div class="col-md-6">
							<img style="border-radius: 50%" src="{{ (!empty($item->user->profile_photo_path))? url('upload/user_images/'.$item->user->profile_photo_path):url('upload/no_image.jpg') }}" width="40px;" height="40px;"><b> {{ $item->user->name }}</b>
				
					@if($item->rating == NULL)
				
					@elseif($item->rating == 1)
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star"></span>
				<span class="fa fa-star"></span>
				<span class="fa fa-star"></span>
				<span class="fa fa-star"></span>
					@elseif($item->rating == 2)
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star"></span>
				<span class="fa fa-star"></span>
				<span class="fa fa-star"></span>
				
					@elseif($item->rating == 3)
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star"></span>
				<span class="fa fa-star"></span>
				
					@elseif($item->rating == 4)
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star"></span>
					@elseif($item->rating == 5)
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
				
				@endif
				
				
				
							</div>
				
							<div class="col-md-6">
								
							</div>			
						</div> <!-- // end row -->
				
				
				
							<div class="review-title"><span class="summary">{{ $item->summary }}</span><span class="date"><i class="fa fa-calendar"></i><span> {{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }} </span></span></div>
							<div class="text">"{{ $item->comment }}"</div>
							</div>
				
							@endif
					@endforeach
					</div><!-- /.reviews -->
				
				
						</div><!-- /.product-reviews -->
														
				
														
				<div class="product-add-review">
					<h4 class="title">Write your own review</h4>
					<div class="review-table">
							
					</div><!-- /.review-table -->
															
						<div class="review-form">
							@guest
				<p> <b> For Add Service Review. You Need to Login First <a href="{{ route('login') }}">Login Here</a> </b> </p>
				
							@else 
				
							<div class="form-container">
				
					<form role="form" class="cnt-form" method="post" action="{{ route('review.store') }}">
						@csrf
				
						<input type="hidden" name="service_id" value="{{ $service->id }}">
				
				
				<table class="table">	
					<thead>
						<tr>
							<th class="cell-label">&nbsp;</th>
							<th>1 star</th>
							<th>2 stars</th>
							<th>3 stars</th>
							<th>4 stars</th>
							<th>5 stars</th>
						</tr>
					</thead>	
					<tbody>
						<tr>
							<td class="cell-label">Quality</td>
							<td><input type="radio" name="quality" class="radio" value="1"></td>
							<td><input type="radio" name="quality" class="radio" value="2"></td>
							<td><input type="radio" name="quality" class="radio" value="3"></td>
							<td><input type="radio" name="quality" class="radio" value="4"></td>
							<td><input type="radio" name="quality" class="radio" value="5"></td>
						</tr>
							
					</tbody>
				</table>
					
				
				
					
					<div class="row">
						<div class="col-sm-6">
								
							<div class="form-group">
								<label for="exampleInputSummary">Summary <span class="astk">*</span></label>
						<input type="text" name="summary" class="form-control txt" id="exampleInputSummary" placeholder="">
							</div><!-- /.form-group -->
						</div>
				
						<div class="col-md-6">
							<div class="form-group">
								<label for="exampleInputReview">Review <span class="astk">*</span></label>
					<textarea class="form-control txt txt-review" name="comment" id="exampleInputReview" rows="4" placeholder=""></textarea>
							</div><!-- /.form-group -->
						</div>
					</div><!-- /.row -->
					
					<div class="action text-right">
						<button type="submit" class="btn btn-primary btn-upper">SUBMIT REVIEW</button>
					</div><!-- /.action -->
				
				</form><!-- /.cnt-form -->
							</div><!-- /.form-container -->
				
					@endguest
				
				
						</div><!-- /.review-form -->
				
					</div><!-- /.product-add-review -->										
					
				</div><!-- /.product-tab -->
				</div><!-- /.tab-pane -->

								<div id="tags" class="tab-pane">
									<div class="product-tag">
										
										<h4 class="title">Product Tags</h4>
										<form role="form" class="form-inline form-cnt">
											<div class="form-container">
									
												<div class="form-group">
													<label for="exampleInputTag">Add Your Tags: </label>
													<input type="email" id="exampleInputTag" class="form-control txt">
													

												</div>

												<button class="btn btn-upper btn-primary" type="submit">ADD TAGS</button>
											</div><!-- /.form-container -->
										</form><!-- /.form-cnt -->

										<form role="form" class="form-inline form-cnt">
											<div class="form-group">
												<label>&nbsp;</label>
												<span class="text col-md-offset-3">Use spaces to separate tags. Use single quotes (') for phrases.</span>
											</div>
										</form><!-- /.form-cnt -->

									</div><!-- /.product-tab -->
								</div><!-- /.tab-pane -->

							</div><!-- /.tab-content -->
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.product-tabs -->

				<!-- ===== ======= UPSELL PRODUCTS ==== ========== -->
<section class="section featured-product wow fadeInUp">
	<h3 class="section-title">Releted Services</h3>
	<div class="owl-carousel home-owl-carousel upsell-product custom-carousel owl-theme outer-top-xs">



		@foreach($relatedService as $service)
	    	
		<div class="item item-carousel">
			<div class="products">
				
	<div class="product">		
		<div class="product-image">
			<div class="image">
				<a href="{{ url('service/details/'.$service->id.'/'.$service->service_slug_en ) }}"><img  src="{{ asset($service->service_thambnail) }}" alt=""></a>
			</div><!-- /.image -->			

			            <div class="tag sale"><span>Active</span></div>            		   
		</div><!-- /.product-image -->
			
		
		<div class="product-info text-left">
			<h3 class="name"><a href="{{ url('service/details/'.$service->id.'/'.$service->service_slug_en ) }}">
				@if(session()->get('language') == 'bangla') {{ $service->service_name_bn }} @else {{ $service->service_name_en }} @endif</a></h3>
			<div class="rating rateit-small"></div>
			<div class="description"></div>


 @if ($service->discount_price == NULL)
<div class="product-price">	
				<span class="price">
					৳{{ $service->selling_price }}	 </span> 
			</div><!-- /.product-price -->
 @else

<div class="product-price">	
				<span class="price">
					৳{{ $service->discount_price }}	 </span>
			  <span class="price-before-discount">৳{{ $service->selling_price }}</span>								
			</div><!-- /.product-price -->
 @endif


			
			
		</div><!-- /.product-info -->
					<div class="cart clearfix animate-effect">
				<div class="action">
					<ul class="list-unstyled">
						<li class="add-cart-button btn-group">
							<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
								<i class="fa fa-shopping-cart"></i>													
							</button>
							<button class="btn btn-primary cart-btn" type="button">Add to cart</button>
													
						</li>
	                   
		                <li class="lnk wishlist">
							<a class="add-to-cart" href="detail.html" title="Wishlist">
								 <i class="icon fa fa-heart"></i>
							</a>
						</li>

						<li class="lnk">
							<a class="add-to-cart" href="detail.html" title="Compare">
							    <i class="fa fa-signal"></i>
							</a>
						</li>
					</ul>
				</div><!-- /.action -->
			</div><!-- /.cart -->
			</div><!-- /.product -->
      
			</div><!-- /.products -->
		</div><!-- /.item -->
	
	 	@endforeach





			</div><!-- /.home-owl-carousel -->
</section><!-- /.section -->
<!-- ============================================== UPSELL PRODUCTS : END ============================================== -->
			
			</div><!-- /.col -->
			<div class="clearfix"></div>
		</div><!-- /.row -->

    </div>





<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5e4b85f98de5201f"></script> 


@endsection
