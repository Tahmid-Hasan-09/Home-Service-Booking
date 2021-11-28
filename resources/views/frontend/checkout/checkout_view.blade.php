@extends('frontend.main_master')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

@section('title')
My Checkout
@endsection


<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="home.html">Home</a></li>
                <li class='active'>Checkout</li>
            </ul>
        </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
</div><!-- /.breadcrumb --> 




<div class="body-content">
    <div class="container">
        <div class="checkout-box ">
            <div class="row">
                <div class="col-md-8">
                    <div class="panel-group checkout-steps" id="accordion">
                        <!-- checkout-step-01  -->
<div class="panel panel-default checkout-step-01">

    <!-- panel-heading -->
     
    <!-- panel-heading -->

    <div id="collapseOne" class="panel-collapse collapse in">

        <!-- panel-body  -->
        <div class="panel-body">
            <div class="row">       

                <!-- guest-login -->            
             <div class="col-md-6 col-sm-6 already-registered-login">
         <h4 class="checkout-subtitle"><b>Booking Address</b></h4>
                     
    <form class="register-form" action="{{ route('checkout.store') }}" method="POST">
        @csrf


        <div class="form-group">
        <label class="info-title" for="exampleInputEmail1"><b>Name</b>  <span>*</span></label>
        <input type="text" name="shipping_name" class="form-control unicase-form-control text-input" id="exampleInputEmail1" placeholder="Full Name" value="{{ Auth::user()->name }}" required="">
      </div>  <!-- // end form group  -->
     

<div class="form-group">
        <label class="info-title" for="exampleInputEmail1"><b>Email </b> <span>*</span></label>
        <input type="email" name="shipping_email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" placeholder="Email" value="{{ Auth::user()->email }}" required="">
      </div>  <!-- // end form group  -->


<div class="form-group">
        <label class="info-title" for="exampleInputEmail1"><b>Phone</b>  <span>*</span></label>
        <input type="number" name="shipping_phone" class="form-control unicase-form-control text-input" id="exampleInputEmail1" placeholder="Phone" value="{{ Auth::user()->phone }}" required="">
      </div>  <!-- // end form group  -->


      <div class="form-group">
        <label class="info-title" for="exampleInputEmail1"><b>Postal Code </b> <span>*</span></label>
        <input type="text" name="post_code" class="form-control unicase-form-control text-input" id="exampleInputEmail1" placeholder="Post Code" required="">
      </div>  <!-- // end form group  -->

     
     
                </div>  
                <!-- guest-login -->


 


                <!-- already-registered-login -->
                <div class="col-md-6 col-sm-6 already-registered-login">
                     

<div class="form-group">
    <h5><b>Division Select </b> <span class="text-danger">*</span></h5>
    <div class="controls">
        <select name="division_id" class="form-control" required="" >
            <option value="" selected="" disabled="">Select Division</option>
            @foreach($divisions as $item)
 <option value="{{ $item->id }}">{{ $item->division_name }}</option>    
            @endforeach
        </select>
        @error('division_id') 
     <span class="text-danger">{{ $message }}</span>
     @enderror 
     </div>
         </div> <!-- // end form group -->


         <div class="form-group">
    <h5><b>District Select</b>  <span class="text-danger">*</span></h5>
    <div class="controls">
        <select name="district_id" class="form-control" required="" >
            <option value="" selected="" disabled="">Select District</option>
             
        </select>
        @error('district_id') 
     <span class="text-danger">{{ $message }}</span>
     @enderror 
     </div>
         </div> <!-- // end form group -->


         <div class="form-group">
    <h5><b>City Select</b> <span class="text-danger">*</span></h5>
    <div class="controls">
        <select name="city_id" class="form-control" required="" >
            <option value="" selected="" disabled="">Select City</option>
             
        </select>
        @error('city_id') 
     <span class="text-danger">{{ $message }}</span>
     @enderror 
     </div>
         </div> <!-- // end form group -->

    <div class="form-group">
    <label class="info-title" for="exampleInputEmail1">Address</label>
        <textarea class="form-control" cols="30" rows="5" placeholder="Area/Road/Flat" name="address"></textarea>
    </div>  <!-- // end form group  -->
                 
                     
    <div class="form-group">
     <label class="info-title" for="exampleInputEmail1">Notes</label>
         <textarea class="form-control" cols="30" rows="5" placeholder="Your Notes (If Any)" name="notes"></textarea>
    </div>  <!-- // end form group  -->



                    



                    
                </div>  
                <!-- already-registered-login -->       

            </div>          
        </div>
        <!-- panel-body  -->

    </div><!-- row -->
</div>
<!-- End checkout-step-01  -->


                        
                        
                    </div><!-- /.checkout-steps -->
                </div>




                <div class="col-md-4">
                    <!-- checkout-progress-sidebar -->
<div class="row">
    <div class="col-md-12 order-md-4 mb-4">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Your cart</span>
            <span class="badge badge-secondary badge-pill">3</span>
        </h4>
        
        <ul class="list-group mb-3">
            @foreach($carts as $item)
            <li class="list-group-item d-flex justify-content-between lh-condensed">
                <strong>Service: </strong> {{ $item->name }}
                <div style="float: right"><strong>Qty: </strong><span class="badge badge-secondary badge-pill">{{ $item->qty }} </span> </div>
            </li>
            @endforeach

        @if(Session::has('coupon'))
            <li class="list-group-item d-flex justify-content-between lh-condensed">
                <strong>SubTotal <span style="font-size: 10px">(inc.tax)</span>: </strong><div style="float: right"> ৳{{ $cartTotal }} </div>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
                <strong>Coupon Name : </strong> <div style="float: right"> {{ session()->get('coupon')['coupon_name'] }}
                            ( {{ session()->get('coupon')['coupon_discount'] }} % ) </div>
            </li>

            <li class="list-group-item d-flex justify-content-between lh-condensed">
                <strong>Coupon Discount : </strong><div style="float: right"> ৳{{ session()->get('coupon')['discount_amount'] }} </div>
            </li>

            <li class="list-group-item d-flex justify-content-between">
                <strong> Grand Total(BDT) : </strong><div style="float: right"> ৳{{ session()->get('coupon')['total_amount'] }}<div style="float: right">
            </li>
        @else
            <li class="list-group-item d-flex justify-content-between lh-condensed">
                <strong>SubTotal: </strong><div style="float: right"> ৳{{ $cartTotal }}</div>
            </li>

            <li class="list-group-item d-flex justify-content-between">
                <strong>Grand Total : </strong><div style="float: right"> ৳{{ $cartTotal }}</div>
            </li>
        @endif    
        </ul>
    </div>
<!-- checkout-progress-sidebar --> </div>


<div class="checkout-progress-sidebar ">
	<div class="panel-group">
		<div class="panel panel-default">
			<div class="panel-heading">
		    	<h4 class="unicase-checkout-title">Select Payment Method</h4>
		    </div>


		    <div class="row">
		    	<div class="col-md-4">
		   <label for="">Stripe</label> 		
       <input type="radio" name="payment_method" value="stripe">
       <img src="{{ asset('frontend/assets/images/payments/4.png') }}">		    		
		    	</div> <!-- end col md 4 -->

		    	<div class="col-md-4">
		    		<label for="">sslcz</label> 		
       <input type="radio" name="payment_method" value="ssl">	
		<img src="{{ asset('frontend/assets/images/payments/3.png') }}">    		
		    	</div> <!-- end col md 4 -->

		    	<div class="col-md-4">
		    		<label for="">Cash</label> 		
       <input type="radio" name="payment_method" value="cash">	
		  <img src="{{ asset('frontend/assets/images/payments/6.png') }}">  		
		    	</div> <!-- end col md 4 -->

				 	
			</div> <!-- // end row  -->
            <hr>

<button type="submit" class="btn btn-primary btn-lg btn-block">Pay Now</button>
  



        </div>
    </div>
</div> 
<!-- checkout-progress-sidebar --> </div>



 



</form>
            </div><!-- /.row -->
        </div><!-- /.checkout-box -->
        
</div><!-- /.container -->
</div><!-- /.body-content -->



 
 <script type="text/javascript">
      $(document).ready(function() {
        $('select[name="division_id"]').on('change', function(){
            var division_id = $(this).val();
            if(division_id) {
                $.ajax({
                    url: "{{  url('/district-get/ajax') }}/"+division_id,
                    type:"GET",
                    dataType:"json",
                    success:function(data) {
                        $('select[name="city_id"]').empty(); 
                       var d =$('select[name="district_id"]').empty();
                          $.each(data, function(key, value){
                              $('select[name="district_id"]').append('<option value="'+ value.id +'">' + value.district_name + '</option>');
                          });
                    },
                });
            } else {
                alert('danger');
            }
        });



 $('select[name="district_id"]').on('change', function(){
            var district_id = $(this).val();
            if(district_id) {
                $.ajax({
                    url: "{{  url('/city-get/ajax') }}/"+district_id,
                    type:"GET",
                    dataType:"json",
                    success:function(data) {
                       var d =$('select[name="city_id"]').empty();
                          $.each(data, function(key, value){
                              $('select[name="city_id"]').append('<option value="'+ value.id +'">' + value.city_name + '</option>');
                          });
                    },
                });
            } else {
                alert('danger');
            }
        });
 

    });
    </script>


@endsection