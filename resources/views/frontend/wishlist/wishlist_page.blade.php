@extends('frontend.home_layout')
@section('home_content')
{{-- <section class="shoping-cart spad">

   
       
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
           

                <div class="shoping__cart__table">
                    <table>
                        <thead>
                            <tr>
                                <th class="shoping__product">Products</th>
                                <th>Price</th>
                            
                                <th>Cart</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($all_wishlists as $row)
                                
                           
                            <tr>
                                <td class="shoping__cart__item">
                                    <img src="{{asset($row->relationWithProduct->image_one)}}" style="height: 70px; width:70px;">
                                <h5>{{$row->relationWithProduct->product_name}}</h5>
                                </td>
                                <td class="shoping__cart__price">
                                    {{$row->relationWithProduct->price}}
                                </td>
                                
                                
                                <td class="shoping__cart__item__close">
                                <a href="{{URL::to('cart_remove/'. $row->id)}}">
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
</section> --}}

    
@endsection