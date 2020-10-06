@extends('frontend.home_layout')
@section('home_content')


<section class="checkout spad">
    <div class="container">
        
        <div class="checkout__form">
            <h4>Billing Details</h4>
            <form action="#" method="POST">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Fist Name<span>*</span></p>
                                    <input type="text">
                                </div>
                            </div>                        
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Email<span>*</span></p>
                                    <input type="text">
                                </div>
                            </div>                        
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Address<span>*</span></p>
                                    <input type="text">
                                </div>
                            </div>                        
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Bkash No<span>*</span></p>
                                    <input type="text">
                                </div>
                            </div>                        
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Bkash Transaction ID<span>*</span></p>
                                    <input type="text">
                                </div>
                            </div>                        
                        </div>   
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="checkout__order">
                            <h4>Your Order</h4>
                            <div class="checkout__order__products">Products <span>Total</span></div>
                            <ul>
                                <li>Vegetable’s Package <span>$75.99</span></li>
                                <li>Fresh Vegetable <span>$151.99</span></li>
                                <li>Organic Bananas <span>$53.99</span></li>
                            </ul>
                            <div class="checkout__order__subtotal">Subtotal <span>$750.99</span></div>
                            <div class="checkout__order__total">Total <span>$750.99</span></div>
                           
                            <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua.</p>
                           
                            
                            <button type="submit" class="site-btn">Confirm ORDER</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>


@endsection