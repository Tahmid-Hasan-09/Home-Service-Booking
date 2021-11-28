@extends('admin.admin_master')
@section('admin')


  <!-- Content Wrapper. Contains page content -->
  
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		 

<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Booking Details</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Booking Details</li>
								 
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>



		<!-- Main content -->
		<section class="content">
		  <div class="row">
			   
		 
<div class="col-md-6 col-12">
				<div class="box box-bordered border-primary">
				  <div class="box-header with-border">
					<h4 class="box-title"><strong>Shipping Details</strong> </h4>
				  </div>
				  

<table class="table">
            <tr>
              <th> Booking Name : </th>
               <th> {{ $booking->name }} </th>
            </tr>

             <tr>
              <th> Booking Phone : </th>
               <th> {{ $booking->phone }} </th>
            </tr>

             <tr>
              <th> Booking Email : </th>
               <th> {{ $booking->email }} </th>
            </tr>

             <tr>
              <th> Division : </th>
               <th> {{ $booking->division->division_name }} </th>
            </tr>

             <tr>
              <th> District : </th>
               <th> {{ $booking->district->district_name }} </th>
            </tr>

             <tr>
              <th> City : </th>
               <th>{{ $booking->city->city_name }} </th>
            </tr>

            <tr>
                <th> Address : </th>
                 <th>{{ $booking->address }} </th>
            </tr>

            <tr>
              <th> Post Code : </th>
               <th> {{ $booking->post_code }} </th>
            </tr>

            <tr>
              <th> Booking Date : </th>
               <th> {{ $booking->booking_date }} </th>
            </tr>
             
           </table>
 


				</div>
			  </div> <!--  // cod md -6 -->


<div class="col-md-6 col-12">
				<div class="box box-bordered border-primary">
				  <div class="box-header with-border">
					<h4 class="box-title"><strong>Booking Details</strong><span class="text-danger"> Invoice : {{ $booking->invoice_no }}</span></h4>
				  </div>
				   

<table class="table">
            <tr>
              <th>  Name : </th>
               <th> {{ $booking->user->name }} </th>
            </tr>

             <tr>
              <th>  Phone : </th>
               <th> {{ $booking->user->phone }} </th>
            </tr>

             <tr>
              <th> Payment Type : </th>
               <th> {{ $booking->payment_method }} </th>
            </tr>

             <tr>
              <th> Tranx ID : </th>
               <th> {{ $booking->transaction_id }} </th>
            </tr>

             <tr>
              <th> Invoice  : </th>
               <th class="text-danger"> {{ $booking->invoice_no }} </th>
            </tr>

             <tr>
              <th> Total Amount : </th>
               <th>৳{{ $booking->amount }} </th>
            </tr>

            <tr>
              <th> Booking : </th>
               <th>   
                <span class="badge badge-pill badge-warning" style="background: #418DB9;">{{ $booking->status }} </span> </th>
            </tr>


            <tr>
              <th>  </th>
               <th> 
               	@if($booking->status == 'pending')
               	<a href="{{ route('pending-confirm',$booking->id) }}" class="btn btn-block btn-success" id="confirm">Confirm Booking</a>

               	@elseif($booking->status == 'confirmed')
               	<a href="{{ route('confirm.processing',$booking->id) }}" class="btn btn-block btn-success" id="processing"> Process Booking</a>

               	@elseif($booking->status == 'processing')
               	<a href="{{ route('processing.shipped',$booking->id) }}" class="btn btn-block btn-success" id="shipped">Ship Booking</a>

               	@elseif($booking->status == 'shipped')
                <a href="{{ route('shipped.delivered',$booking->id) }}" class="btn btn-block btn-success" id="delivered">Deliver Booking</a>

               	@endif

                 </th>
            </tr>

           
             
           </table>
 


				</div>
			  </div> <!--  // cod md -6 -->





<div class="col-md-12 col-12">
				<div class="box box-bordered border-primary">
				  <div class="box-header with-border">
					 
				  </div>



 <table class="table">
            <tbody>
  
              <tr>
                <td width="10%">
                  <label for=""> Image</label>
                </td>

                 <td width="20%">
                  <label for=""> Service Name </label>
                </td>

             <td width="10%">
                  <label for=""> Service Code</label>
                </td>


                  <td width="10%">
                  <label for=""> Quantity </label>
                </td>

               <td width="10%">
                  <label for=""> Price </label>
                </td>
                
              </tr>


              @foreach($bookingItem as $item)
       <tr>
               <td width="10%">
                  <label for=""><img src="{{ asset($item->service->service_thambnail) }}" height="50px;" width="50px;"> </label>
                </td>

               <td width="20%">
                  <label for=""> {{ $item->service->service_name_en }}</label>
                </td>


                <td width="10%">
                  <label for=""> {{ $item->service->service_code }}</label>
                </td>

                <td width="10%">
                  <label for=""> {{ $item->qty }}</label>
                </td>

         <td width="10%">
                  <label for=""> ৳{{ $item->price }}  ( ৳ {{ $item->price * $item->qty}} ) </label>
                </td>
                
              </tr>
              @endforeach





            </tbody>
            
          </table>










				  
				</div>
			  </div>  <!--  // cod md -12 -->









 

 

 


		  </div>
		  <!-- /. end row -->
		</section>
		<!-- /.content -->
	  
	  </div>
  



@endsection