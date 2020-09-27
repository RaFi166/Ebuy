@extends('frontend.home_layout')
@section('home_content')
<section class="shoping-cart spad">

    @if (session('cart_remove'))
	   <div class="alert alert-danger alert-dismissible fade show" role="alert">
	      <strong> {{ session('cart_remove') }}</strong>
	<button type="button" class="close" data-dismiss="alert" area-label="close">
	<span aria-hidden="true"> &times; </span>
	</button>
	   </div>
	   @endif
       
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                @if (session('cart_remove'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                   <strong> {{ session('cart_remove') }}</strong>
             <button type="button" class="close" data-dismiss="alert" area-label="close">
             <span aria-hidden="true"> &times; </span>
             </button>
                </div>
                @endif

                @if (session('cart_update'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                   <strong> {{ session('cart_update') }}</strong>
                 <button type="button" class="close" data-dismiss="alert" area-label="close">
                 <span aria-hidden="true"> &times; </span>
                 </button>
                </div>
              @endif

                <div class="shoping__cart__table">
                    <table>
                        <thead>
                            <tr>
                                <th class="shoping__product">Products</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($carts as $cart)
                                
                           
                            <tr>
                                <td class="shoping__cart__item">
                                    <img src="{{asset($cart->relationWithProduct->image_one)}}" style="height: 70px; width:70px;">
                                <h5>{{$cart->relationWithProduct->product_name}}</h5>
                                </td>
                                <td class="shoping__cart__price">
                                    {{$cart->price}}
                                </td>
                                <td class="shoping__cart__quantity">
                                    <div class="quantity">
                                    <form action="{{URL::to('cart_update/'. $cart->id)}}" method="POST">
                                            @csrf
                                        <div class="pro-qty">
                                        <input type="text" name="qty" value="{{$cart->qty}}">                                      
                                        </div>
                                        <button type="submit" class="btn btn-sm btn-success">Update</button>
                                    </form>
                                    </div>
                                </td>
                                <td class="shoping__cart__total">
                                    {{$cart->price * $cart->qty}}
                                </td>
                                <td class="shoping__cart__item__close">
                                <a href="{{URL::to('cart_remove/'. $cart->id)}}">
                                    <span class="icon_close"></span>

                                </a>
                                    
                                </td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__btns">
                <a href="{{route('home_page')}}" class="primary-btn cart-btn">CONTINUE SHOPPING</a>      
                </div>
            </div>
           
            <div class="col-lg-12">
                <div class="shoping__checkout">
                    <h5>Cart Total</h5>
                    <ul>
                    <li>Subtotal <span>{{$sub_total}}</span></li>
                       
                    </ul>
                    <a href="#" class="primary-btn">PROCEED TO CHECKOUT</a>
                </div>
            </div>
        </div>
    </div>
</section>

    
@endsection