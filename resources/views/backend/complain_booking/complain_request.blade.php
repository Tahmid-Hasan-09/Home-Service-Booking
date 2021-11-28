@extends('admin.admin_master')
@section('admin')


  <!-- Content Wrapper. Contains page content -->
  
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		 

		<!-- Main content -->
		<section class="content">
		  <div class="row">
			   
		 

			<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Booking Complains List</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Date </th>
								<th>Invoice </th>
								<th>Amount </th>
								<th>Payment </th>
								<th>Status </th>
								<th>Action</th>
								 
							</tr>
						</thead>
						<tbody>
	 @foreach($bookings as $item)
	 <tr>
		<td> {{ $item->booking_date }}  </td>
		<td> {{ $item->invoice_no }}  </td>
		<td> ৳{{ $item->amount }}  </td>

		<td> {{ $item->payment_method }}  </td>
		<td>
		@if($item->complain_booking == 1)
      <span class="badge badge-pill badge-primary">Processing </span>
       @elseif($item->complain_booking == 2)
       <span class="badge badge-pill badge-success">Success </span>
		@endif

		  </td>

		<td width="25%">
  <a href="{{ route('complain.approve',$item->id) }}" class="btn btn-danger">Approve </a>
  <a href="{{ route('complain.reject',$item->id) }}" class="btn btn-danger">Reject </a>
		</td>
							 
	 </tr>
	  @endforeach
						</tbody>
						 
					  </table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->

			          
			</div>
			<!-- /.col -->

 

 


		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>
  



@endsection