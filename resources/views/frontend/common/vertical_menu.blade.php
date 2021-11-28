@php
$categories = App\Models\Category::orderBy('category_name_en','ASC')->get();
@endphp 


 <div class="side-menu animate-dropdown outer-bottom-xs">
        <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> 
            @if(session()->get('language') == 'bangla') বিভাগ @else Categories @endif
        </div>
          <nav class="yamm megamenu-horizontal">
            <ul class="nav">


              @foreach($categories as $category)
              <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon {{ $category->category_icon }}" aria-hidden="true"></i>
@if(session()->get('language') == 'bangla') {{ $category->category_name_bn }} @else {{ $category->category_name_en }} @endif
                </a>
                <ul class="dropdown-menu mega-menu">
                  <li class="yamm-content">
                    <div class="row">

   <!--   // Get SubCategory Table Data -->
  @php
  $subcategories = App\Models\SubCategory::where('category_id',$category->id)->orderBy('subcategory_name_en','ASC')->get();
  @endphp                   

             @foreach($subcategories as $subcategory)
                      <div class="col-sm-12 col-md-3">


  <a href="{{ url('subcategory/service/'.$subcategory->id.'/'.$subcategory->subcategory_slug_en ) }}">                    
 <h2 class="title">
@if(session()->get('language') == 'bangla') {{ $subcategory->subcategory_name_bn }} @else {{ $subcategory->subcategory_name_en }} @endif
  </h2> </a>

<!--   // Get Service Table Data -->
@php
$services = App\Models\Service::where('subcategory_id',$subcategory->id)->orderBy('service_name_en','ASC')->get();
@endphp                

@foreach($services as $service)         
      <ul class="links col-xs-12 col-sm-6 col-md-2 col-menu">
  <li>
    <a href="{{ url('service/details/'.$service->id.'/'.$service->service_slug_en ) }}">
    @if(session()->get('language') == 'bangla') {{ $service->service_name_bn }} @else {{ $service->service_name_en }} @endif</a>
  </li>
                                            
                            </ul>
                    @endforeach <!-- // End Service Foreach -->

                      </div>
                      <!-- /.col -->
                 @endforeach  <!-- End SubCategory Foreach -->      
                       
                    </div>
                    <!-- /.row --> 
                  </li>
                  <!-- /.yamm-content -->
                </ul>
                <!-- /.dropdown-menu --> </li>
              <!-- /.menu-item -->
              @endforeach  <!-- End Category Foreach -->
  
            </ul>
            <!-- /.nav --> 
          </nav>
          <!-- /.megamenu-horizontal --> 
        </div>
        <!-- /.side-menu --> 