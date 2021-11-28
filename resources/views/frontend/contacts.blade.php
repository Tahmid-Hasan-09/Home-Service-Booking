@include('frontend.include.head')

<body>
<div id="wrapper" class="inner_page contacts_page"><!--Wrapper Start--> 
  <!--Header Section Start-->
  @include('frontend.include.header')
  <!--/Header Section End--> 
  <!--Page Title Section Satrt-->
  <div id="page_title">
    <div class="container text-center">
      <div class="panel-heading">contact us</div>
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">Contact us</li>
      </ol>
    </div>
  </div>
  <!--Page Title Section End--> 
  
  <!--Contacts Section Satrt--> 
  <!--Contacts Section End--> 
  
  <!--Contact Form Start-->
  <section id="Contact_form">
    <div class="contacts_mape">
      <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Pabna%20University&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-8 col-xs-12">
          <div class="booking_form">
            <div class="container-fluid">
              <div class="row">
                <form method="post">
                  <h2>Contact Form</h2>
                  <div class="form-group col-md-6 col-sm-6 col-xs-12">
                    <input class="form-control" id="name" name="name" placeholder="Full Name" type="text"/>
                  </div>
                  <div class="form-group col-md-6 col-sm-6 col-xs-12">
                    <input class="form-control" id="Email" name="Email" placeholder="Email" type="text"/>
                  </div>
                  <div class="form-group col-md-6 col-sm-6 col-xs-12">
                    <input class="form-control" id="Subject" name="Subject" placeholder="Subject*" type="text"/>
                  </div>
                  <div class="form-group col-md-6 col-sm-6 col-xs-12">
                    <input class="form-control" id="Phone_number" name="Phone_number" placeholder="Phone Number" type="text"/>
                  </div>
                  <div class="form-group col-md-12 col-sm-12 col-xs-12">
                    <div class="input-group">
                      <textarea class="form-control" rows="6" placeholder="Message"></textarea>
                    </div>
                  </div>
                  <div class="form-group col-md-6 col-sm-6 col-xs-12">
                    <button class="btn btn-primary btn-skin" name="submit" type="submit"> Send Message</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="about_info">
            <h2>Contact info</h2>
            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Lorem Ipsum is simply dummy</p>
            <p><i class="fa fa-envelope" aria-hidden="true"></i> infor@example.com</p>
            <p><i class="fa fa-phone" aria-hidden="true"></i> +8801700000000</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Contact Form End--> 
  
  <!--Footer-->
  @include('frontend.include.footer')
  <!--/Footer--> 
  
</div>
<!--/Wrapper End--> 

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 

<script src="frontend/js/bootstrap.min.js"></script> 
<script  src="frontend/js/datetime/moment.js"></script> 
<script  src="frontend/js/datetime/bootstrap-datetimepicker.min.js"></script> 
<script src="frontend/js/owlcarousel/owl.carousel.min.js"></script> 
<script src="frontend/js/custom.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-106074231-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>