@extends('frontend.home_layout')
@section('home_content')
  
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Featured Products</h2>
                    </div>                
                </div>
            </div>
            @if (session('wishlist'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
               <strong> {{ session('wishlist') }}</strong>
             <button type="button" class="close" data-dismiss="alert" area-label="close">
             <span aria-hidden="true"> &times; </span>
             </button>
            </div>
          @endif

     

            <div class="row featured__filter">

                @foreach ($all_products as $products)

               

                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{asset($products-> image_one)}}">
                            <ul class="featured__item__pic__hover">
                            <li><a href="{{URL::to('/wishlist/'.$products->id)}}"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                
                            <form action="{{url('/add_to_cart/'. $products->id)}}" method="POST">
                                @csrf
                            
                                <li> <button type="submit"><i class="fa fa-shopping-cart"></i></button></li>
                                <input type="hidden" name="price" value="{{$products->price}}" id="">
                            </form>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                        <h6><a href="{{URL::to('/product_details/'.$products->id)}}">{{$products->product_name}}</a></h6>
                        <h5>Taka {{$products->price}}</h5>
                        <h5>Quantity {{$products->product_quantity}}</h5>
                        </div>
                    </div>
                </div>  
                @endforeach           
            </div> 

    </section>
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/banner/banner-1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/banner/banner-2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Latest Product Section Begin -->
   

    <!-- Blog Section Begin -->

@endsection