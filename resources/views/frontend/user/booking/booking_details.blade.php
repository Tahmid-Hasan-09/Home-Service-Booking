@extends('frontend.main_master')
@section('content')

<div class="body-content">
	<div class="container">
		<div class="row">
			 @include('frontend.common.user_sidebar')

      <div class="col-md-5">
        <div class="card">
          <div class="card-header"><h4>Shipping Details</h4></div>
         <hr>
         <div class="card-body" style="background: #E9EBEC;">
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
              <th> Post Code : </th>
               <th> {{ $booking->post_code }} </th>
            </tr>

            <tr>
                <th> Address : </th>
                 <th>{{ $booking->address }} </th>
            </tr>

            <tr>
              <th> Booking Date : </th>
               <th> {{ $booking->booking_date }} </th>
            </tr>
             
           </table>


         </div> 
          
        </div>
        
      </div> <!-- // end col md -5 -->



<div class="col-md-5">
        <div class="card">
          <div class="card-header"><h4>Booking Details
<span class="text-danger"> Invoice : {{ $booking->invoice_no }}</span></h4>
          </div>
         <hr>
         <div class="card-body" style="background: #E9EBEC;">
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
              <th> Status : </th>
               <th>   
                <span class="badge badge-pill badge-warning" style="background: #418DB9;">{{ $booking->status }} </span> </th>
            </tr>
           </table>


         </div> 
          
        </div>
        
      </div> <!-- // 2ND end col md -5 -->


      <div class="row">


        <div class="col-md-12">

            <div class="table-responsive">
              <table class="table">
                <tbody>
      
                  <tr style="background: #e2e2e2;">
                    <td class="col-md-1">
                      <label for=""> Image</label>
                    </td>
    
                    <td class="col-md-3">
                      <label for=""> Service Name </label>
                    </td>
    
                    <td class="col-md-3">
                      <label for=""> Service Code</label>
                    </td>
    
                    <td class="col-md-1">
                      <label for=""> Quantity </label>
                    </td>
    
                    <td class="col-md-1">
                      <label for=""> Amount </label>
                    </td>
    
                     <td class="col-md-1">
                      <label for=""> Download </label>
                    </td>
                    
                  </tr>
    
    
                  @foreach($bookingItem as $item)
           <tr>
                    <td class="col-md-1">
                      <label for=""><img src="{{ asset($item->service->service_thambnail) }}" height="50px;" width="50px;"> </label>
                    </td>
    
                    <td class="col-md-3">
                      <label for=""> {{ $item->service->service_name_en }}</label>
                    </td>
    
    
                     <td class="col-md-3">
                      <label for=""> {{ $item->service->service_code }}</label>
                    </td>                    
    
                     <td class="col-md-2">
                      <label for=""> {{ $item->qty }}</label>
                    </td>
    
              <td class="col-md-2">
                      <label for=""> ৳{{ $item->price }}  ( ৳ {{ $item->price * $item->qty}} ) </label>
                    </td>
    
    
    @php 
    
    $file = App\Models\Service::where('id',$item->service_id)->first();
    @endphp
    
                 <td class="col-md-1">
                  @if($booking->status == 'pending')  
                  <strong>
     <span class="badge badge-pill badge-success" style="background: #418DB9;"> No File</span>  </strong> 
                    
                  @elseif($booking->status == 'confirmed')  
    
    <a target="_blank" href="{{ asset('upload/pdf/'.$file->digital_file) }}">  
      <strong>
     <span class="badge badge-pill badge-success" style="background: #FF0000;"> Download Ready</span>  </strong> </a> 
                  @endif
    
    
                    </td>
    
    
    
    
                    
                  </tr>
                  @endforeach
    
    
    
    
    
                </tbody>
                
              </table>
              
            </div>
     
             
           </div> <!-- / end col md 8 --> 
            
          </div> <!-- // END ORDER ITEM ROW -->
    
          @if($booking->status !== "delivered")
          
          @else
    
          @php 
          $booking = App\Models\Booking::where('id',$booking->id)->where('complain_reason','=',NULL)->first();
          @endphp
    
    
          @if($booking)
          <form action="{{ route('complain.booking',$booking->id) }}" method="post">
            @csrf
    
      <div class="form-group">
        <label for="label">Complain Box(If Any)</label>
        <textarea name="complain_reason" id="" class="form-control" cols="30" rows="05"> You have Complains? Please Let Us Know</textarea>    
      </div>
    
      <button type="submit" class="btn btn-danger">Submit</button>
    
    </form>
       @else
    
       <span class="badge badge-pill badge-warning" style="background: red">We got your complains about this service,Please give us some time</span>
       
       @endif 
    
    
    
      @endif
    <br><br>
    
    
             
                
            </div> <!-- // end row -->
            
        </div>
        
    </div>
     
    
    @endsection