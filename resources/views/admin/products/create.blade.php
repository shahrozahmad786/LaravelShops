@extends('admin.layouts.app')

@section('content')

{!! Html::style('admin/assets/css/style.css')!!}

<div class="main-panel">

	<section class="content">
		
 <div class="advance-table">
        <h3 class="h2">Products Management</h3>
        @if(Session::has('message'))
            <div class="alert custom-dark-alert-info alert-dismissible">
                <button class="close" data-dismiss="alert"><span>×</span></button>
                <strong><i class="fa fa-check"></i>Success!</strong> {{Session::get('message')}}.
            </div>
        @endif

        <div class="alert custom-dark-alert-danger alert-dismissible" style="display: none;">
            <button class="close" data-dismiss="alert"><span>×</span></button>
            <strong><i class="fa fa-check"></i>Success!</strong> Products deleted successfully.
        </div>
		 	 <div class="col-md-12">
		 	 	 <div class="box box-primary" >
		 	 	 	     <div class="card" style="padding: 15px">
		 	    <div class="card-header  card-header-primary">
		 	 	 	 	<h3 class="card-title">Products:</h3>
		 	 	 	 	 	<br>
                        </div>
	 	
	  {{Form::open(['url'=>'/admin-product.store','enctype'=>'multipart/form-data', 'class' => 'user-form  loading-form'])}}

                         <div class="form-group">
		 	 	 	 	&nbsp;<h4 for="name">Product Name</h4>
		 	 	 	 		<input type="text" class="form-control" id="name" name="name" required=""  placeholder="Enter Name">
		 	 	 	 		</div>    



            <div class="form-group">
            &nbsp;<h4 for="about">About</h4>
              <input type="text" class="form-control" id="about" name="about" required=""  placeholder="About">
              </div>   

  <div class="form-group">
            &nbsp;<h4 for="highlight">Highlight</h4>
              <input type="text" class="form-control" id="highlight" name="highlight" required=""  placeholder="Highlight">
              </div>   

  <div class="form-group">
            &nbsp;<h4 for="direction">Direction To Use</h4>
              <input type="text" class="form-control" id="direction" name="direction" required=""  placeholder="Enter Direction">
              </div>   

  <div class="form-group">
            &nbsp;<h4 for="availability">Availability</h4>
              <input type="text" class="form-control" id="availability" name="availability" required=""  placeholder="Enter Availability">
              </div>   


  <div class="form-group">
            &nbsp;<h4 for="delivery">Delivery</h4>
              <input type="text" class="form-control" id="delivery" name="delivery" required=""  placeholder="Enter Delivery">
              </div>   





           <div class="form-group">
                            <select name="cat_id" class="form-control cat-form text-capitalize category_list select2" required>
                                <option value="">Select Category*</option>
                                @foreach($categories as $category)
                                    <option class="text-capitalize" value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
             </div>

    <div class="form-group">
                            <select name="type_id" class="form-control cat-form text-capitalize category_list select2" required>
                                <option value="">Select Type*</option>
                                @foreach($types as $type)
                                    <option class="text-capitalize" value="{{$type->id}}">{{$type->name}}</option>
                                @endforeach
                            </select>
             </div>


              <div class="form-group">
                            <select name="feature_id" class="form-control cat-form text-capitalize category_list select2" required>
                                <option value="">Select Feature*</option>
                                @foreach($features as $feature)
                                    <option class="text-capitalize" value="{{$feature->id}}">{{$feature->name}}</option>
                                @endforeach
                            </select>
             </div>



		 	 	 	 	<div class="form-group">
		 	 	 	 	<h4 for="description"> Description</h4>
		 	 	 	 		<input type="text" class="form-control" id="description" required="" name="description"  placeholder="Enter Description">
		 	 	 	 	</div>


            <div class="form-group">
            <h4 for="price"> Price</h4>
              <input type="number" class="form-control" id="price" required="" name="price"  placeholder="Enter price">
            </div>
   					

             <div class="form-group">
            <h4 for="price"> Weight</h4>
              <input type="number" class="form-control" id="weight" required="" name="weight"  placeholder="Enter weight">
            </div>


            <div class="form-group">
            <h4 for="ingredients"> Ingredients</h4>
              <input type="text" class="form-control" id="ingredients" required="" name="ingredients"  placeholder="Enter ingredients">
            </div>

            

   		        	<div class="form-group img-fluid">
             
              {{Form::label('featured_image','Upload Image')}}
      {{Form::file('featured_image',['id'=>'featured_image'])}}
                

                        </div>

<div id="thumb-output">
  
</div>


                    
  
		 	 	 	 </div>
		 	 	 </div>
		 	 </div>

		 	 <div class="box-footer">
		 	 	<button type="submit" class="btn btn-success ">Submit</button>
		 	 	<a href="{{route('admin-product')}}" class="btn btn-primary ">Back</a>
		 	 </div>
		 	{{Form::close()}}
		 </div>
	</section>
</div>




@section('section-footer')  

<script>


    </script>

{!! Html::script('admin/assets/js/parsley.min.js')!!}
{!! Html::script('admin/assets/js/select2.min.js')!!}
{!! Html::script('admin/assets/js/script.js')!!}
<!----Select2-->
<script type="text/javascript">
  $('.select2-multi').select2();
</script>


    @endsection

@stop


