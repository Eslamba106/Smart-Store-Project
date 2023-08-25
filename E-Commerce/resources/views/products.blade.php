@extends('layouts.app')
@section('title')
   Products Page 
@endsection
@section('cont')
    
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
			@for ($i=0 ; $i < count($features) ; $i++)

                @if ($features[$i]->name == "cam")
                    @continue
                @else
                    <div class="grid_1_of_4 images_1_of_4">
                        <a href="preview-3.html"><img src="{{ $features[$i]->image_path }}" alt="" /></a>
                        <h2>{{ $features[$i]->name }}</h2>
                        <p>{{ $features[$i]->description }}</p>
                        <p><span class="strike">{{ $features[$i]->strike }}</span><span class="price">{{ $features[$i]->price }}</span></p>
                        <div class="button"><span><img src="images/cart.jpg" alt="" /><a href="preview-3.html" class="cart-button">Add to Cart</a></span> </div>
                        <div class="button"><span><a href="preview-3.html" class="details">Details</a></span></div>            
                    </div>
                @endif        

            @endfor
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
@for ($n=0; $n<count($newproducts) ; $n++)
    @if ($newproducts[$n]->name == "Camera 2" || $newproducts[$n]->name == "camera 3")
    @continue
    @else
        <div class="grid_1_of_4 images_1_of_4">
            <a href="preview-3.html"><img src="{{ $newproducts[$n]->image_path }}" alt="" /></a>
            <div class="discount">
            <span class="percentage">40%</span>
            </div>
            <h2>{{ $newproducts[$n]->name }}</h2>
            <p><span class="strike">{{ $newproducts[$n]->strike }}</span><span class="price">{{ $newproducts[$n]->price }}</span></p>
            <div class="button"><span><img src="images/cart.jpg" alt="" /><a href="preview-3.html" class="cart-button">Add to Cart</a></span> </div>
            <div class="button"><span><a href="preview-3.html" class="details">Details</a></span></div>
        </div>
    @endif
@endfor



				
				
			</div>
    </div>
 </div>
</div>

@endsection