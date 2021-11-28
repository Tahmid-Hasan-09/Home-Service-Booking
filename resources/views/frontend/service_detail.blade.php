@include('frontend.include.head')
<body>
<div id="wrapper" class="service_detail"><!--Wrapper Start--> 
  <!--Header Section Start-->
  @include('frontend.include.header')
  <!--/Header Section End--> 
  
  <!--Banner Start-->
  <section id="service_banner">
    <div class="container text-center service_banner_layer">
      <div class="banner_content">
        <div class="row text-left">
          <div class="col-md-8 col-sm-8 col-xs-12">
            <h1 class="service-heading">Book a Cleaning Service Today</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</p>
            <h2>Why choose Helpr?</h2>
            <ul class="featurs_list">
              <li><i class="fa fa-check-square-o" aria-hidden="true"></i> High end cleaning machinery</li>
              <li><i class="fa fa-check-square-o" aria-hidden="true"></i> High end cleaning machinery</li>
              <li><i class="fa fa-check-square-o" aria-hidden="true"></i> High end cleaning machinery</li>
              <li><i class="fa fa-check-square-o" aria-hidden="true"></i> High end cleaning machinery</li>
            </ul>
            <a class="btn btn-warning btn-booknow" href="#"> Book now </a> </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="quick_contact">
              <p>We Are Here To Help <br />
                You!!!</p>
              <form class="form-horizontal">
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></div>
                    <input type="text" class="form-control" id="exampleName" placeholder="Name" name="name" />
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                    <input type="text" class="form-control" id="exampleemail" placeholder="Email" name="email" />
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-mobile" aria-hidden="true"></i></div>
                    <input type="text" class="form-control" id="examplePhone" placeholder="Phone" name="phone" />
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-comment" aria-hidden="true"></i></div>
                    <textarea class="form-control" rows="2"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="quick_btn">
                    <button type="submit" class="btn btn-default btn-skin">Send Your Message</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!--/Banner End--> 
  
  <!--How it works Section Satrt-->
  <section id="howitwork">
    <div class="container text-center">
      <h1 class="panel-heading">How it works</h1>
      <div class="row">
        <div class="col-md-3 col-xs-offset-0 step-one"><img src="images/02home/book2.png" alt="book2" />
          <h4>Book</h4>
          <p>Select the date and time you'd like<br />
            your perofessional to show up</p>
        </div>
        <div class="col-md-1 hidden-xs hidden-sm"> </div>
        <div class="col-md-3 step-two"> <img  src="images/02home/Schedule2.png" alt="Schedule2" />
          <h4>Schedule</h4>
          <p>Certified Taskers comes over<br/>
            and done your task</p>
        </div>
        <div class="col-md-1 hidden-xs hidden-sm"> </div>
        <div class="col-md-3"> <img  src="images/02home/Relax2.png" alt="Relax2" />
          <h4>Relax</h4>
          <p>your task is completed to your<br/>
            satisfaction - guranteed</p>
        </div>
      </div>
    </div>
  </section>
  <!--How it works Section End--> 
  
  <!--Trust Security Section Satrt-->
  <section id="What_offer">
    <div class="container text-center">
      <h1 class="panel-heading">What we offer</h1>
      <div class="row text-left">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="icon_box_one">
            <div class="icons"><img src="images/service_detail/cleaning.png" alt="cleaning" /></div>
            <div class="box_content">
              <h4>Bathroom Cleaning</h4>
              <p>Give your home a sparkling new makeover</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="icon_box_one">
            <div class="icons"><img src="images/service_detail/Bathroom.png" alt="Bathroom" /></div>
            <div class="box_content">
              <h4>Kitchen Cleaning</h4>
              <p>Give your home a sparkling new makeover</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="icon_box_one">
            <div class="icons"><img src="images/service_detail/Kitchen.png" alt="Kitchen" /></div>
            <div class="box_content">
              <h4>Kitchen Cleaning</h4>
              <p>Give your home a sparkling new makeover</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="icon_box_one">
            <div class="icons"><img src="images/service_detail/Sofa.png" alt="Sofa" /></div>
            <div class="box_content">
              <h4>Sofa Cleaning</h4>
              <p>Give your home a sparkling new makeover</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="icon_box_one">
            <div class="icons"><img src="images/service_detail/toilet.png" alt="toilet" /></div>
            <div class="box_content">
              <h4>Toilet Cleaning</h4>
              <p>Give your home a sparkling new makeover</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="icon_box_one">
            <div class="icons"><img src="images/service_detail/Windows.png" alt="Windows" /></div>
            <div class="box_content">
              <h4>Windows Cleaning</h4>
              <p>Give your home a sparkling new makeover</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Trust Security Section End--> 
  
  <!--Trust Security Section Satrt-->
  <section id="service-faq">
    <div class="container text-center">
      <h1 class="panel-heading">Frequently asked questions</h1>
      <div class="row text-left">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="qa_box_one">
            <div class="question"><strong>Q.</strong>
              <h4>Lorem Ipsum is simply dummy text industry.</h4>
            </div>
            <div class="answer"><strong>A.</strong>
              <p>We helps you live smarter, giving you time to foLorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled .</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="qa_box_one">
            <div class="question"><strong>Q.</strong>
              <h4>Lorem Ipsum is simply dummy text industry.</h4>
            </div>
            <div class="answer"><strong>A.</strong>
              <p>We helps you live smarter, giving you time to foLorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled .</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="qa_box_one">
            <div class="question"><strong>Q.</strong>
              <h4>Lorem Ipsum is simply dummy text industry.</h4>
            </div>
            <div class="answer"><strong>A.</strong>
              <p>We helps you live smarter, giving you time to foLorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled .</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="qa_box_one">
            <div class="question"><strong>Q.</strong>
              <h4>Lorem Ipsum is simply dummy text industry.</h4>
            </div>
            <div class="answer"><strong>A.</strong>
              <p>We helps you live smarter, giving you time to foLorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled .</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="qa_box_one">
            <div class="question"><strong>Q.</strong>
              <h4>Lorem Ipsum is simply dummy text industry.</h4>
            </div>
            <div class="answer"><strong>A.</strong>
              <p>We helps you live smarter, giving you time to foLorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled .</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="qa_box_one">
            <div class="question"><strong>Q.</strong>
              <h4>Lorem Ipsum is simply dummy text industry.</h4>
            </div>
            <div class="answer"><strong>A.</strong>
              <p>We helps you live smarter, giving you time to foLorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled .</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Trust Security Section End--> 
  
  <!--Service Provider Satrt-->
  <section id="service_provider">
    <div class="container text-center">
      <h1 class="panel-heading">Worldwide largest home service provider</h1>
      <div class="row">
        <div class="col-md-12"> 
          <!--counter box-->
          <div class="counter_box">
            <div class="counter_number_right">
              <div class="counter_number counter"><span class="stat-count">20000</span>+</div>
              <h4 class="counter_name">HAPPY CUSTOMERS</h4>
            </div>
          </div>
          <!--counter box end--> 
          <!--counter box-->
          <div class="counter_box">
            <div class="counter_number_right">
              <div class="counter_number counter"><span class="stat-count">10000</span>+</div>
              <h4 class="counter_name">SERVICE PROVIDERS</h4>
            </div>
          </div>
          <!--counter box end--> 
        </div>
      </div>
    </div>
  </section>
  <!--/Service Provider Satrt End--> 
  
  <!--Testimonails Section Satrt-->
  <section id="testimonails">
    <div class="container text-center">
      <h1 class="panel-heading">Testimonails</h1>
      <div class="row">
        <div class="col-md-12">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel "> <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner text-center">
              <div class="item active">
                <div class="avatar"><img class="img-circle" src="images/clinte1.png" alt="circle" /></div>
                <h3>Kevin Austin</h3>
                <strong>Lorem Ipsum</strong>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, a</p>
              </div>
              <div class="item">
                <div class="avatar"><img class="img-circle" src="images/testimonails2.png" alt="circle" /></div>
                <h3>Kevin Austin</h3>
                <strong>Lorem Ipsum</strong>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, a</p>
              </div>
              <div class="item">
                <div class="avatar"><img class="img-circle" src="images/testimonails3.png" alt="circle" /></div>
                <h3>Kevin Austin</h3>
                <strong>Lorem Ipsum</strong>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, a</p>
              </div>
            </div>
            <!-- Controls --> <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"> <span class="fa fa-angle-left"></span> </a> <a class="right carousel-control" href="#carousel-example-generic" data-slide="next"> <span class="fa fa-angle-right"></span> </a> </div>
        </div>
      </div>
    </div>
  </section>
  <!--Testimonails Section End--> 
  
  <!--Tenancy Deposit Satrt-->
  <section id="tenancy_deposit">
    <div class="container text-center">
      <h1 class="panel-heading">Get your tenancy deposit backa</h1>
      <div class="row">
        <div class="col-md-12">
          <div class="book-now-home-btn">
            <button class="btn btn-primary btn-outline active" type="button"> Book now </button>
            <button class="btn btn-primary btn-outline" type="button"> Request a quote </button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/Tenancy Deposit Satrt End--> 
  
  <!--Explore our Services Satrt-->
  <section id="explore_services">
    <div class="container text-center">
      <h1 class="panel-heading">Explore our Services</h1>
      <ul class="services-list">
        <li><a href="service_detail.php"><img src="images/services-icons/electrical.png" alt="electrical" /><br />
          Electrical</a></li>
        <li><a href="service_detail.php"><img src="images/services-icons/plumbing.png" alt="plumbing" /><br />
          Plumbing</a></li>
        <li><a href="#"><img src="images/services-icons/appliances.png" alt="appliances" /><br />
          Appliances</a></li>
        <li><a href="service_detail.php"><img src="images/services-icons/carpentry.png" alt="carpentry" /><br />
          Carpentry</a></li>
        <li><a href="service_detail.php"><img src="images/services-icons/more.png" alt="more" /><br />
          View More</a></li>
      </ul>
    </div>
  </section>
  <!--Explore our Services End--> 
  
  <!--Footer-->
  @include('frontend.include.footer')
  <!--/Footer--> 
  
</div>
<!--/Wrapper End--> 

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="frontend/js/bootstrap.min.js"></script> 
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