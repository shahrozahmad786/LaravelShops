@extends('admin.layouts.app')

@section('content')

{!! Html::style('admin/assets/css/style.css')!!}

<div class="main-panel">

	<section class="content">
		
 <div class="advance-table">
        <h3 class="h2">Product Management</h3>
        @if(Session::has('message'))
            <div class="alert custom-dark-alert-info alert-dismissible">
                <button class="close" data-dismiss="alert"><span>×</span></button>
                <strong><i class="fa fa-check"></i>Success!</strong> {{Session::get('message')}}.
            </div>
        @endif

        <div class="alert custom-dark-alert-danger alert-dismissible" style="display: none;">
            <button class="close" data-dismiss="alert"><span>×</span></button>
            <strong><i class="fa fa-check"></i>Success!</strong> Product deleted successfully.
        </div>


		 	 <div class="col-md-12">
		 	 	 <div class="box box-primary">
		 	 	 	     <div class="card" style="padding: 15px">
		 	    <div class="card-header card-header-primary">
		 	 	 	 	<h3 class="card-title">Products:</h3>
		 	 	 	 	 	<br>
                        </div>
		 	 	 	 	
		 	{!!Form::open(['url'=> ['admin-product',$products->id,'edit'], 'method' => 'post','files'=>true]) !!}

                        <div class="form-group">
		 	 	 	 		<h4 for="name">Product Name</h4>
		 	 	 	 		<input type="text" class="form-control" id="name" name="name" value="{{$products->name}}" placeholder="Enter Name">
		 	 	 	 		</div>  



            <div class="form-group">
            &nbsp;<h4 for="about">About</h4>
              <input type="text" class="form-control" id="about" name="about" value="{{$products->about}}"  required=""  placeholder="About">
              </div>   

  <div class="form-group">
            &nbsp;<h4 for="highlight">Highlight</h4>
              <input type="text" class="form-control" id="highlight" name="highlight" value="{{$products->highlight}}"  required=""  placeholder="Highlight">
              </div>   

  <div class="form-group">
            &nbsp;<h4 for="direction">Direction To Use</h4>
              <input type="text" class="form-control" id="direction" name="direction" value="{{$products->direction}}"  required=""  placeholder="Enter Direction">
              </div>   

  <div class="form-group">
            &nbsp;<h4 for="availability">Availability</h4>
              <input type="text" class="form-control" id="availability" name="availability" value="{{$products->availability}}"  required=""  placeholder="Enter Availability">
              </div>   


  <div class="form-group">
            &nbsp;<h4 for="delivery">Delivery</h4>
              <input type="text" class="form-control" id="delivery" name="delivery" value="{{$products->delivery}}"  required=""  placeholder="Enter Delivery">
              </div>   

                 



                             <div class="form-group">
                            <select name="cat_id" class="form-control cat-form text-capitalize category_list select2" required>
                                <option value="{{$products->Categories->id}}" selected>{{$products->Categories->name}}</option>
                                @foreach($categories as $category)
                                    <option class="text-capitalize" value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>



                     <div class="form-group">
                      <select name="type_id" class="form-control cat-form text-capitalize category_list select2" required>
                                <option value="{{$products->types->id}}" selected>{{$products->types->name}}</option>
                                @foreach($types as $type)
                                    <option class="text-capitalize" value="{{$type->id}}">{{$type->name}}</option>
                                @endforeach
                            </select>
                        </div>

                       

                             <div class="form-group">
                            <select name="feature_id" class="form-control cat-form text-capitalize category_list select2" required>
                    <option value="{{$products->features->id}}" selected>{{$products->features->name}}</option>
                                @foreach($features as $feature)
                                    <option class="text-capitalize" value="{{$feature->id}}">{{$feature->name}}</option>
                                @endforeach
                            </select>
                        </div>

                       



		 	 	 	 	<div class="form-group">
		 	 	 	 		<h4 for="description"> Description</h4>
		 	 	 	 		<input type="text" class="form-control" id="description" name="description" value="{{$products->description}}" placeholder="Enter Description">
		 	 	 	 	</div>

		 	 	 	 	   <div class="form-group">
            <h4 for="price"> Price</h4>
              <input type="number" class="form-control" id="price" required="" name="price" value="{{$products->price}}"  placeholder="Enter price">
            </div>

               <div class="form-group">
            <h4 for="price"> Weight</h4>
              <input type="number" class="form-control" id="weight" required="" name="weight" value="{{$products->weight}}"  placeholder="Enter weight">
            </div>


            <div class="form-group">
            <h4 for="ingredients"> Ingredients</h4>
              <input type="text" class="form-control" id="ingredients" required="" value="{{$products->ingredients}}" name="ingredients"  placeholder="Enter ingredients">
            </div>


            
   		        	<div class="form-group img-fluid">
 
{{Form::label('featured_image','Update featured Image:',['class'=>'form-spacing-top'])}}
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
		 	 </form>
		 </div>
	</section>
</div>



@section('section-footer')  <!--required to apply ajax-->

    <script>

    </script>



<script type="text/javascript">

</script>
{!! Html::script('admin/assets/js/script.js')!!}

@endsection



@stop