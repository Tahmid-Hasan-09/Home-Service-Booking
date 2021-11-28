@php
$setting = App\Models\SiteSetting::find(1);
@endphp

<footer>
    <div class="container-fluid footerbg">
      <div class="container">
        <div class="row">
          <div class="col-md-4"> 
              <h4 >Contact Us</h4>
            
            <div class="about_info">
              
              <p><i class="fa fa-map-marker" aria-hidden="true"></i>{{ $setting->company_name }}, {{ $setting->company_address }}</p>
              <p><i class="fa fa-envelope" aria-hidden="true"></i> {{ $setting->email }}</p>
              <p><i class="fa fa-phone" aria-hidden="true"></i> {{ $setting->phone_one }}</p>
            </div>
          </div>
          <div class="col-md-2">
            <h4>Services</h4>
@php
$categories = App\Models\Category::orderBy('category_name_en','DESC')->limit(5)->get();
@endphp 

            <ul>
              @foreach($categories as $category)
              <li><a href="{{ url('category/service/'.$category->id.'/'.$category->category_slug_en ) }}"><i class="fa fa-caret-right" aria-hidden="true"></i>
                @if(session()->get('language') == 'bangla') {{ $category->category_name_bn }} @else {{ $category->category_name_en }} @endif </a>
              </li>
              @endforeach
            </ul>
            
          </div>
          <div class="col-md-2">
            <h4>About Us</h4>
            <ul>
              <li><a href="{{ url('/') }}">Home</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <h4>Sign up Newsletter</h4>

            <form action="{{ route('newsletter.email') }}" method="post" class="newsletter">
              @csrf

              <div class="input-group">
                <input type="text" name="email" class="form-control" placeholder="Enter Email Address">
                <span class="input-group-btn">
                  <button class="btn btn-default" type="submit"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                </span> 
              </div>
              <!-- /input-group -->
            </form>

            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
          </div>
        </div>
        <div class="top_awro pull-right" id="back-to-top"><i class="fa fa-chevron-up" aria-hidden="true"></i> </div>
      </div>
    </div>
    
    <!--Boottom Footer-->
    <div class="container-fluid bottom-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p class="copyright pull-left">&copy; Home Service  2021 All Right Reserved</p>
            <ul class="footer-scoails pull-right">
              <li><a href="{{ $setting->facebook }}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="{{ $setting->twitter }}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
              <li><a href="{{ $setting->linkedin }}"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
              <li><a href="{{ $setting->youtube }}"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>

 