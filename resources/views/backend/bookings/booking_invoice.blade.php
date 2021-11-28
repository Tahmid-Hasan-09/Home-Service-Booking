<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Invoice</title>

<style type="text/css">
    * {
        font-family: Verdana, Arial, sans-serif;
    }
    table{
        font-size: x-small;
    }
    tfoot tr td{
        font-weight: bold;
        font-size: x-small;
    }
    .gray {
        background-color: lightgray
    }
    .font{
      font-size: 15px;
    }
    .authority {
        /*text-align: center;*/
        float: right
    }
    .authority h5 {
        margin-top: -10px;
        color: green;
        /*text-align: center;*/
        margin-left: 35px;
    }
    .thanks p {
        color: green;;
        font-size: 16px;
        font-weight: normal;
        font-family: serif;
        margin-top: 20px;
    }
</style>

</head>
<body>

  <table width="100%" style="background: #F7F7F7; padding:0 20px 0 20px;">
    <tr>
        <td valign="top">
          <!-- {{-- <img src="" alt="" width="150"/> --}} -->
          <h2 style="color: green; font-size: 26px;"><strong>HomeServiceSolution</strong></h2>
        </td>
        <td align="right">
            <pre class="font" >
                HomeServiceSolution INC.
                Email:support@easylearningbd.com <br>
                Mob: +8801700000000 <br>
                Department Of CSE,PUST <br>
              
            </pre>
        </td>
    </tr>

  </table>


  <table width="100%" style="background:white; padding:2px;""></table>

  <table width="100%" style="background: #F7F7F7; padding:0 5 0 5px;" class="font">
    <tr>
        <td>
          <p class="font" style="margin-left: 20px;">
            <strong>Name:</strong> {{ $booking->name }}<br>
            <strong>Email:</strong> {{ $booking->email }} <br>
            <strong>Phone:</strong> {{ $booking->phone }} <br>

           @php
            $div = $booking->division->division_name;
            $dis = $booking->district->district_name;
            $city = $booking->city->city_name;
           @endphp
            
            <strong>Address:</strong> {{ $booking->address }},<br>{{ $city }},{{ $dis }}.{{ $div }}. <br>
            <strong>Post Code:</strong> {{ $booking->post_code }}
         </p>
        </td>
        <td>
          <p class="font">
            <h3><span style="color: green;">Invoice:</span> #{{ $booking->invoice_no}}</h3>
            Booking Date: {{ $booking->booking_date }} <br>
            Delivery Date: {{ $booking->delivered_date }} <br>
            Payment Type : {{ $booking->payment_method }} </span>
         </p>
        </td>
    </tr>
  </table>
  <br/>
  <h3>Services</h3>


  <table width="100%">
    <thead style="background-color: green; color:#FFFFFF;">
      <tr class="font">
        <th>Image</th>
        <th>Service Name</th>
        <th>Code</th>
        <th>Quantity</th>
        <th>Unit Price </th>
        <th>Total Amount </th>
      </tr>
    </thead>
    <tbody>

        @foreach($bookingItem as $item)
        <tr class="font">
          <td align="center">
              <img src="{{ public_path($item->service->service_thambnail)  }}" height="60px;" width="60px;" alt="">
          </td>
          <td align="center"> {{ $item->service->service_name_en }}</td>
          
          <td align="center">{{ $item->service->service_code }}</td>
          <td align="center">{{ $item->qty }}</td>
          <td align="center">{{ $item->price }} bdt</td>
          <td align="center">{{ $item->price * $item->qty }} bdt</td>
        </tr>
        @endforeach
      
    </tbody>
  </table>
  <br>
  <table width="100%" style=" padding:0 10px 0 10px;">
    <tr>
        <td align="right" >
            <h2><span style="color: green;">Subtotal:</span>{{ $booking->amount }} bdt</h2>
            <h2><span style="color: green;">Total:</span> {{ $booking->amount }} bdt</h2>
            {{-- <h2><span style="color: green;">Full Payment PAID</h2> --}}
        </td>
    </tr>
  </table>
  <div class="thanks mt-3">
    <p>Thanks For Booking Our Services..!!</p>
  </div>
  <div class="authority float-right mt-5">
      <p>-----------------------------------</p>
      <h5>Authority Signature:</h5>
    </div>
</body>
</html>