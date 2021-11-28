@extends('admin.admin_master')
@section('admin')


  <!-- Content Wrapper. Contains page content -->
  
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		 

		<!-- Main content -->
		<section class="content">
		  <div class="row">
			   
		 

			 


<!--   ------------ Add Brand Page -------- -->


          <div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Edit Blog Post </h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">


 <form method="post" action="{{ route('blogpost.update',$blogpost->id) }}" enctype="multipart/form-data">
	 	@csrf
	 <input type="hidden" name="id" value="{{ $blogpost->id }}">	
	 <input type="hidden" name="old_image" value="{{ $blogpost->post_image }}">			   

	 <div class="form-group">
		<h5>Post Category  <span class="text-danger">*</span></h5>
		<div class="controls">

    <select name="category_id" class="form-control" required="">
        <option value="" disabled="">{{ $blogpost->category->blog_category_name_en }}</option>
        @foreach ($blogcategory as $category)
            <option value="{{ $category->id }}">{{ $category->blog_category_name_en }}</option>
        @endforeach
    </select>

	 @error('blog_category_name_en') 
	 <span class="text-danger">{{ $message }}</span>
	 @enderror 
	    </div>
	</div>


	<div class="form-group">
		<h5>Post Title English <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text" name="post_title_en" class="form-control" value="{{ $blogpost->post_title_en }}" >
     @error('post_title_en') 
	 <span class="text-danger">{{ $message }}</span>
	 @enderror 
	  </div>
	</div>

    <div class="form-group">
		<h5>Post Title Bangla <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text" name="post_title_bn" class="form-control" value="{{ $blogpost->post_title_bn  }}" >
     @error('post_title_bn') 
	 <span class="text-danger">{{ $message }}</span>
	 @enderror 
	  </div>
	</div>



	<div class="form-group">
		<h5>Post Image <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="file" name="post_image" class="form-control" >
     @error('post_image') 
	 <span class="text-danger">{{ $message }}</span>
	 @enderror 
	  </div>
	</div>

    

    <div class="form-group col-md-8">
        <h5>Post Details English <span class="text-danger">*</span></h5>
        <div class="controls">
<textarea id="editor1" name="post_details_en" rows="10" cols="80" required="">
    {{ $blogpost->post_details_en }}
</textarea>  
        </div>
    </div>
            
        

     <div class="form-group col-md-8">
        <h5>Post Details Bangla <span class="text-danger">*</span></h5>
        <div class="controls">
<textarea id="editor2" name="post_details_bn" rows="10" cols="80">
    {{ $blogpost->post_details_bn }}
</textarea>       
        </div>
    </div>
             
            
     

					 

			 <div class="text-xs-right">
	<input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update">					 
						</div>
					</form>




					  
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box --> 
			</div>

 


		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>
  



@endsection