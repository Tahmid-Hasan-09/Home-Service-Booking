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

                 <td class="col-md-1">
                  <label for=""> Complain Issues </label>
                </td>

                 <td class="col-md-2">
                  <label for=""> Complain Status</label>
                </td>

                
                
              </tr>


              @foreach($bookings as $booking)
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
                  <label for=""> {{ $booking->complain_reason }}</label>
                </td>

                 <td class="col-md-2">
                  <label for=""> 

   @if($booking->complain_booking == 0) 
 <span class="badge badge-pill badge-warning" style="background: #418DB9;"> No Complains !! </span>
 @elseif($booking->complain_booking == 1)
 <span class="badge badge-pill badge-warning" style="background: #800000;"> Processing(Verifying) </span>
 <span class="badge badge-pill badge-warning" style="background:red;">Complain Recieved </span>

 @elseif($booking->complain_booking == 2)
  <span class="badge badge-pill badge-warning" style="background: #008000;">Accepted </span>
@elseif($booking->complain_booking == 3)
  <span class="badge badge-pill badge-warning" style="background: #fa0a0a;">Rejected </span>
  @endif
                    

                    </label>
                </td>

         
                
              </tr>
              @endforeach





            </tbody>
            
          </table>
          
        </div>




         
       </div> <!-- / end col md 8 -->

		 

		 
			
		</div> <!-- // end row -->
		
	</div>
	
</div>
 

@endsection