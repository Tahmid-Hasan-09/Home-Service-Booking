@include('frontend.include.head')

<body>
<div id="wrapper" class="inner_page blog_post"> 
  <!--Wrapper Start--> 
  <!--Header Section Start-->
 @include('frontend.include.header')
  <!--/Header Section End--> 
  <!--Page Title Section Satrt-->
  <div id="page_title">
    <div class="container text-center">
      <div class="panel-heading">blog post</div>
      <ol class="breadcrumb">
        <li><a href="/homepage">Home</a></li>
        <li class="active">Blog Post</li>
      </ol>
    </div>
  </div>
  <!--Page Title Section End--> 
  
  <!--Blog Page Start-->
  <section id="blog-area" class="blog-with-sidebar-area">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="blog-post"> 
            <!--Start single blog post-->
            <div class="single-blog-post">
              <div class="img-holder"> <img src="images/blog/blog3.png" alt="blog3" />
                <div class="date_more">
                  <div class="overlay-style-two"> 9<br />
                    jan </div>
                  <div class="text-holder">
                    <h3 class="blog-title">5 Tips Of Hiring Office Cleaners</h3>
                    <div class="meta-info clearfix">
                      <ul class="post-info">
                        <li><i class="fa fa-user" aria-hidden="true"></i><a href="#">Mano</a></li>
                        <li><i class="fa fa-eye" aria-hidden="true"></i><a href="#">95 Views</a></li>
                        <li><i class="fa fa-comment-o" aria-hidden="true"></i> <a href="#">5 Comments</a></li>
                        <li><i class="fa fa-tags" aria-hidden="true"></i><a href="#">Business, Seminar</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="text">
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                  <p class="blog_p col-md-offset-1">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, </p>
                  <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
              </div>
              <div class="blog_post_barr">
                <div class="Share pull-left">
                  <ul>
                    <li>Share: </li>
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i> </a></li>
                    <li><a href="#"><i class="fa fa-google-plus-official" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i> </a></li>
                    <li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i> </a></li>
                  </ul>
                </div>
                <ul class="pager pull-right">
                  <li class="previous"> <a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i> Prev</a> </li>
                  <li class="next"> <a href="#">Next <i class="fa fa-angle-right" aria-hidden="true"></i></a> </li>
                </ul>
              </div>
              <div class="clearfix"></div>
              <hr />
              <div class="media">
                <h1 class="panel-heading">About The Author</h1>
                <a class="pull-left" href="#"> <img class="media-object" src="images/blank.png" alt="blank" /> </a>
                <div class="media-body">
                  <h4 class="media-heading">Mr.John Christopher</h4>
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing </div>
              </div>
              <div class="media">
                <h1 class="panel-heading">Comments (2)</h1>
                <a class="pull-left" href="#"> <img class="media-object" src="images/blank.png" alt="blank" /> </a>
                <div class="media-body">
                  <h4 class="media-heading">Johny Rewalt<br />
                    <small>17 August 2015 at 12.00pm / <a href="#">Reply</a></small></h4>
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing </div>
              </div>
              <hr />
              <div class="media col-md-offset-1"> <a class="pull-left" href="#"> <img class="media-object" src="images/blank.png" alt="blank" /> </a>
                <div class="media-body">
                  <h4 class="media-heading">Johny Rewalt<br />
                    <small>17 August 2015 at 12.00pm / <a href="#">Reply</a></small></h4>
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing </div>
              </div>
              <hr />
              <div class="row">
                <div class="col-md-8">
                  <form method="post">
                    <h1 class="panel-heading">Leave a Reply</h1>
                    <div class="row">
                      <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        <input class="form-control" id="name" name="name" placeholder="Full Name" type="text"/>
                      </div>
                      <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        <input class="form-control" id="Email" name="Email" placeholder="Email" type="text"/>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <div class="input-group">
                          <textarea class="form-control" rows="6" placeholder="Message"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <button class="btn btn-primary btn-skin" name="submit" type="submit"> Send Message</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Blog Page End--> 
  
  <!--Footer-->
  @include('frontend.include.footer')
  <!--/Footer--> 
  
</div>
<!--/Wrapper End--> 

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 

<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script> 
<script  src="{{ asset('frontend/js/datetime/moment.js') }}"></script> 
<script  src="{{ asset('frontend/js/datetime/bootstrap-datetimepicker.min.js') }}"></script> 
<script src="{{ asset('frontend/js/owlcarousel/owl.carousel.min.js') }}"></script> 
<script src="{{ asset('frontend/js/custom.js') }}"></script>
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