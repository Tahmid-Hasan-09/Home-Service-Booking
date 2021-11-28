@php

$tags_en = App\Models\Service::groupBy('service_tags_en')->select('service_tags_en')->get();

$tags_bn = App\Models\Service::groupBy('service_tags_bn')->select('service_tags_bn')->get();
@endphp     




     <div class="sidebar-widget product-tag wow fadeInUp">
          <h3 class="section-title">Service tags</h3>
          <div class="sidebar-widget-body outer-top-xs"> 

<div class="tag-list"> 

@if(session()->get('language') == 'bangla') 

@foreach($tags_bn as $tag)
<a class="item active" title="Phone" href="{{ url('service/tag/'.$tag->service_tags_bn) }}">
	{{ str_replace(',',' ',$tag->service_tags_bn)  }}</a> 
@endforeach

 @else 

@foreach($tags_en as $tag)
<a class="item active" title="Phone" href="{{ url('service/tag/'.$tag->service_tags_en) }}">
	{{ str_replace(',',' ',$tag->service_tags_en)  }}</a> 
@endforeach
 
  @endif
	
	 </div>
<!-- /.tag-list --> 
</div>
          <!-- /.sidebar-widget-body --> 
        </div>
        <!-- /.sidebar-widget --> 