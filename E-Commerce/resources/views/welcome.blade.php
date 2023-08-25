@extends('layouts.app')
@section('title')
	Home Page
@endsection

@section('cont')

	<div class="header_bottom">
		<div class="header_bottom_left">



@for ($i = 0; $i < 2; $i++)
<div class="section group">
	@if ($i == 0)
		@for ($a = 0; $a < count($products)-2; $a++)
			{{-- {{$products[$a]}} --}}
			<div class="listview_1_of_2 images_1_of_2">
				<div class="listimg listimg_2_of_1">
						<a href="preview.html"> <img src="{{$products[$a]->image_path}}" alt="" /></a>
						</div>
						<div class="text list_2_of_1">
							<h2>{{$products[$a]->name}}</h2>
							<p>{{$products[$a] ->description}}</p>
						<div class="button"><span><a href="preview.html">Add to cart</a></span></div>
				</div>
			</div>   
		@endfor
	@endif
	@if ($i==1)
		@for ($a = 2; $a < count($products); $a++)
		<div class="listview_1_of_2 images_1_of_2">
			<div class="listimg listimg_2_of_1">
					<a href="preview.html"> <img src="{{$products[$a]->image_path}}" alt="" /></a>
					</div>
					<div class="text list_2_of_1">
						<h2>{{$products[$a]->name}}</h2>
						<p>{{$products[$a] ->description}}</p>
					<div class="button"><span><a href="preview.html">Add to cart</a></span></div>
			</div>
		</div>   
		@endfor
	@endif
</div> 
@endfor
			<div class="clear"></div>
		</div>



{{-- End first  --}}




			 <div class="header_bottom_right_images">
		   <!-- FlexSlider -->
              <section class="slider">
				  <div class="flexslider">
					<ul class="slides">
						@foreach ($categories as $category)
						@if (empty($category->image_path))
						@continue
						@else
						<li><img style="width: 500px ; max-height: 300px;" src="{{ $category->image_path }}" alt=""/></li>
						@endif
							
						@endforeach
				    </ul>
				  </div>
	      </section>
<!-- FlexSlider -->
	    </div>
	  <div class="clear"></div>
  </div>	
</div>
 <div class="main">
    <div class="content">
    	<div class="content_top">
    		<div class="heading">
    		<h3>Feature Products</h3>
    		</div>
    		<div class="sort">
    		<p>Sort by:
    			<select>
    				<option>Lowest Price</option>
    				<option>Highest Price</option>
    				<option>Lowest Price</option>
    				<option>Lowest Price</option>
    				<option>Lowest Price</option>
    				<option>In Stock</option>  				   				
    			</select>
    		</p>
    		</div>
    		<div class="show">
    		<p>Show:
    			<select>
    				<option>4</option>
    				<option>8</option>
    				<option>12</option>
    				<option>16</option>
    				<option>20</option>
    				<option>In Stock</option>  				   				
    			</select>
    		</p>
    		</div>
    		<div class="page-no">
    			<p>Result Pages:<ul>
    				<li><a href="#">1</a></li>
    				<li class="active"><a href="#">2</a></li>
    				<li><a href="#">3</a></li>
    				<li>[<a href="#"> Next>>></a >]</li>
    				</ul></p>
    		</div>
    		<div class="clear"></div>
    	</div>
	      <div class="section group">

				@foreach ($features as $feature)
					<div class="grid_1_of_4 images_1_of_4">
						  <a href="preview-3.html"><img src="{{$feature->image_path}}" alt="" /></a>
						  <h2>{{$feature->name}}</h2>
						  <p>{{$feature->description}}</p>
						  <p><span class="strike">{{$feature->strike}}</span><span class="price">{{$feature->price}}</span></p>
						   <div class="button"><span><img src="images/cart.jpg" alt="" /><a href="preview-3.html" class="cart-button">Add to Cart</a></span> </div>
						  <div class="button"><span><a href="preview-3.html" class="details">Details</a></span></div>
					</div>
			
					 @endforeach

			
			</div>
			<div class="content_bottom">
    		<div class="heading">
    		<h3>New Products</h3>
    		</div>
    		<div class="sort">
    		<p>Sort by:
    			<select>
    				<option>Lowest Price</option>
    				<option>Highest Price</option>
    				<option>Lowest Price</option>
    				<option>Lowest Price</option>
    				<option>Lowest Price</option>
    				<option>In Stock</option>  				   				
    			</select>
    		</p>
    		</div>
    		<div class="show">
    		<p>Show:
    			<select>
    				<option>4</option>
    				<option>8</option>
    				<option>12</option>
    				<option>16</option>
    				<option>20</option>
    				<option>In Stock</option>  				   				
    			</select>
    		</p>
    		</div>
    		<div class="page-no">
    			<p>Result Pages:<ul>
    				<li><a href="#">1</a></li>
    				<li class="active"><a href="#">2</a></li>
    				<li><a href="#">3</a></li>
    				<li>[<a href="#"> Next>>></a >]</li>
    				</ul></p>
    		</div>
    		<div class="clear"></div>
    	</div>
			<div class="section group">
				@foreach ($newproducts as $newproduct)
									<div class="grid_1_of_4 images_1_of_4">
					 <a href="preview-3.html"><img src="{{ $newproduct->image_path }}" alt="" /></a>
					 <div class="discount">
					 <span class="percentage">40%</span>
					</div>
					 <h2>{{ $newproduct->name }} </h2>
					 <p>{{ $newproduct->description }} </p>
					 <p><span class="strike">{{ $newproduct->strike }}</span><span class="price">{{ $newproduct->price }}</span></p>
				     <div class="button"><span><img src="images/cart.jpg" alt="" /><a href="preview-3.html" class="cart-button">Add to Cart</a></span> </div>
				     <div class="button"><span><a href="preview-3.html" class="details">Details</a></span></div>
				</div>
				@endforeach



			</div>
    </div>
 </div>
</div>

@endsection 

