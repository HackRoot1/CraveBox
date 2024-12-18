@extends('layouts.main')
@section('main-content')
    <!-- breadcrumb-area -->
    <div class="banner-area breadcrumb-area padding-top-120 padding-bottom-90">
        <div class="bread-shapes">
            <span class="b-shape-1 item-bounce"><img src="assets/images/img/5.png" alt=""></span>
            <span class="b-shape-2"><img src="assets/images/img/6.png" alt=""></span>
            <span class="b-shape-3"><img src="assets/images/img/7.png" alt=""></span>
            <span class="b-shape-4"><img src="assets/images/img/9.png" alt=""></span>
            <span class="b-shape-5"><img src="assets/images/shapes/18.png" alt=""></span>
            <span class="b-shape-6 item-animateOne"><img src="assets/images/img/7.png" alt=""></span>
        </div>
        <div class="container padding-top-120">
            <div class="row justify-content-center">
                <nav aria-label="breadcrumb">
                    <h2 class="page-title">Checkout</h2>
                    <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="index.html">Home / </a> <a href="shopping-cart.html">
                                Shopping
                                Cart</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- checkout-area -->
    <div class="checkout-area padding-top-120 padding-bottom-120">
        <div class="cshapes">
            <span class="cs-1"><img src="assets/images/img/6.png" alt=""></span>
            <span class="cs-2 item-bounce"><img src="assets/images/shapes/12.png" alt=""></span>
            <span class="cs-3"><img src="assets/images/shapes/13.png" alt=""></span>
            <span class="cs-4"><img src="assets/images/shapes/14.png" alt=""></span>
            <span class="cs-5"><img src="assets/images/img/32.png" alt=""></span>
            <span class="cs-6"><img src="assets/images/shapes/16.png" alt=""></span>
        </div>
        <div class="container">
            <form action="#">
                <div class="row">
                    <div class="col-lg-6  wow fadeInUp">
                        <div class="checkout-left">
                            <h4>Billing Details</h4>
                            <input type="text" placeholder="first name" required>
                            <input type="text" placeholder="last name" required>
                            <input type="text" placeholder="company name">
                            <select name="#" id="#">
                                <option value="#">Country</option>
                                <option value="#">Country-1</option>
                                <option value="#">Country-2</option>
                                <option value="#">Country-3</option>
                            </select>
                            <input type="text" placeholder="street address">
                            <input type="text" placeholder="town/city" required>
                            <input type="number" placeholder="zip">
                            <input type="tel" placeholder="phone" required>
                            <input type="email" placeholder="email address" required>
                            <input type="text" placeholder="order notes(optional)">
                            <input type="hidden" id="razorpay-key" value="{{ $key }}">
                        </div>
                    </div>
                    <div class="col-lg-6  wow fadeInUp ">
                        <div class="checkout-right">
                            <h4>Your Order</h4>
                            <div class="pricing-box">
                                <ul class="p-head">
                                    <li class="uppercase">product</li>
                                    <li class="uppercase">total</li>
                                </ul>
                                <div class="divider"></div>
                                @foreach ($orders as $order)
                                    <ul>
                                        <li>{{ $order->name }}</li>
                                        <li>₹<span class="itemsTotalPrice">{{ $order->total_price }}</span></li>
                                    </ul>
                                @endforeach
                                <ul>
                                    <li class="uppercase"><b>subtotal</b></li>
                                    <li><b>₹<span class="subTotalPrice">5,699</span></b></li>
                                </ul>
                                <ul>
                                    <li class="uppercase"><b>Perched</b></li>
                                    <li>Flat rate: ₹5.00</li>
                                    <li>Bank Transfer</li>
                                    <li>free</li>
                                </ul>
                                <ul class="bg-white">
                                    <li class="uppercase">total</li>
                                    <li class="total"><b>₹<span class="totalPrice">5,699</span></b></li>
                                </ul>
                            </div>
                            <br>
                            <div class="payment-img">
                                <input type="radio" name="order-type" id="bank">
                                <label for="bank">
                                    <img src="assets/images/img/payment.png" alt="">
                                </label>
                            </div>
                            <input type="radio" name="order-type" id="cash">
                            <label for="cash">CASH ON DELIVERY</label>
                            <br>

                            <input type="radio" id="terms" required>
                            <label for="terms">I’ve read and accept the <a href="#">terms & conditions
                                    *</a></label>
                            <br>
                            <button type="submit" id="checkoutOrder" class="btn">place order</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
