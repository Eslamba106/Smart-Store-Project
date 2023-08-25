@extends('layouts.app')
@section('cont')


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

@endsection