@extends('frontend.main_master')
@section('content')

<div class="body-content">
	<div class="container">
		<div class="row">
			 @include('frontend.common.user_sidebar')

       <div class="col-md-2">
       </div>

       <div class="col-md-8">

        <div class="table-responsive">
          <table class="table">
            <tbody>
  
              <tr style="background: #e2e2e2;">
                <td class="col-md-1">
                  <label for=""> Date</label>
                </td>

                <td class="col-md-3">
                  <label for=""> Total</label>
                </td>

                <td class="col-md-3">
                  <label for=""> Payment</label>
                </td>


                <td class="col-md-2">
                  <label for=""> Invoice</label>
                </td>

                 <td class="col-md-2">
                  <label for=""> Booking</label>
                </td>

                 <td class="col-md-1">
                  <label for=""> Action </label>
                </td>
                
              </tr>


              @forelse($bookings as $booking)
       <tr>
                <td class="col-md-1">
                  <label for=""> {{ $booking->booking_date }}</label>
                </td>

                <td class="col-md-3">
                  <label for=""> ৳{{ $booking->amount }}</label>
                </td>


                 <td class="col-md-3">
                  <label for=""> {{ $booking->payment_method }}</label>
                </td>

                <td class="col-md-2">
                  <label for=""> {{ $booking->invoice_no }}</label>
                </td>

                 <td class="col-md-2">
                  <label for=""> 
                    <span class="badge badge-pill badge-warning" style="background: #418DB9;">{{ $booking->status }} </span>

                    </label>
                </td>

         <td class="col-md-1">
          <a href="{{ url('user/booking_details/'.$booking->id ) }}" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i> View</a>

           <a target="_blank" href="{{ url('user/invoice_download/'.$booking->id ) }}" class="btn btn-sm btn-danger" style="margin-top: 5px;"><i class="fa fa-download" style="color: white;"></i> Invoice </a>
          
        </td>
                
              </tr>

              @empty
              <h2 class="text-danger">Booking Not Found</h2>

              @endforelse





            </tbody>
            
          </table>
          
        </div>




         
       </div> <!-- / end col md 8 -->

		 

		 
			
		</div> <!-- // end row -->
		
	</div>
	
</div>
 

@endsection