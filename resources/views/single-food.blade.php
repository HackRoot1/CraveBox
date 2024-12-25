@extends('layouts.main')


@section('main-content')
    <!-- breadcrumb-area -->
    <div class="banner-area breadcrumb-area padding-top-120 padding-bottom-90">
        <div class="bread-shapes">
            <span class="b-shape-1 item-bounce"><img src="{{ asset('assets/images/img/5.png') }}" alt=""></span>
            <span class="b-shape-2"><img src="{{ asset('assets/images/img/6.png') }}" alt=""></span>
            <span class="b-shape-3"><img src="{{ asset('assets/images/img/7.png') }}" alt=""></span>
            <span class="b-shape-4"><img src="{{ asset('assets/images/img/9.png') }}" alt=""></span>
            <span class="b-shape-5"><img src="{{ asset('assets/images/shapes/18.png') }}" alt=""></span>
            <span class="b-shape-6 item-animateOne"><img src="{{ asset('assets/images/img/7.png') }}" alt=""></span>
        </div>
        <div class="container padding-top-120">
            <div class="row justify-content-center">
                <nav aria-label="breadcrumb">
                    <h2 class="page-title">{{ $food_data->name }}</h2>
                    <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="index.html">Home </a> / <a href="index.html"> food shop</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $food_data->name }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- chicken-recipe-area -->
    <section class="chicken-recipe-area padding-top-115 padding-bottom-80">
        <div class="recipe-shapes">
            <span class="rs1"><img src="{{ asset('assets/images/shapes/12.png') }}" alt=""></span>
            <span class="rs2"><img src="{{ asset('assets/images/shapes/13.png') }}" alt=""></span>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 margin-bottom-30 wow fadeInLeft">
                    <div class="recipe-left">
                        <div class="slider-for">
                            <div class="single-slide">
                                <div class="product-content">
                                    <img class="mp" src="/assets/images/menu-item/{{ $food_data->image }}" alt="">
                                    <img class="pbadge" src="{{ asset('assets/images/icons/pbadge.png') }}" alt="">
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="product-content">
                                    <img class="mp" src="{{ asset('assets/images/img/br2.png') }}" alt="">
                                    <img class="pbadge" src="{{ asset('assets/images/icons/pbadge.png') }}" alt="">
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="product-content">
                                    <img class="mp" src="{{ asset('assets/images/img/br3.png') }}" alt="">
                                    <img class="pbadge" src="{{ asset('assets/images/icons/pbadge.png') }}" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="slider-nav margin-top-30">
                            <div class="div">
                                <div class="pnav">
                                    <img src="/assets/images/menu-item/{{ $food_data->image }}" alt="">
                                </div>
                            </div>
                            <div class="div">
                                <div class="pnav">
                                    <img src="{{ asset('assets/images/img/br2.png') }}" alt="">
                                </div>
                            </div>
                            <div class="div">
                                <div class="pnav">
                                    <img src="{{ asset('assets/images/img/br3.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 wow fadeInRight">
                    <div class="recipe-right">
                        <h2>{{ $food_data->name }}</h2>
                        <form action="#">
                            <div class="chickens-inforbar d-flex justify-content-around align-items-center">
                                <span class="cp">₹ <span id="currentPrice">@if ($food_data->discount_price > 0) {{ ($food_data->price*(100 - $food_data->discount_price))/100 }} @else {{ $food_data->price }} @endif @if ($food_data->discount_price > 0)</span> <del>₹{{ $food_data->price }}</del> @endif</span>
                                <span class="rate"> 5<i class="fas fa-star"></i></span>
                                <span> <span class="colored"><i class="fas fa-comments"></i></span> comment</span>
                                <span> <span class="colored"><i class="fas fa-heart"></i></span> 200+ like</span>
                            </div>
                            <p>{{ $food_data->description }}</p>
                            <div class="chickens-details d-flex justify-content-between">
                                <span><input type="hidden" id="food_id" value="{{ $food_data->id }}"></span>
                                <span><input type="hidden" id="user_id" value="{{ Auth::user()->id }}"></span>
                                <span><input type="number" value="01" class="buy-quantity" placeholder="01"></span>
                                <span> <label for="size">size</label>
                                    <select name="foodSize" id="size">
                                        <option value="S">S</option>
                                        <option value="M">M</option>
                                        <option value="L">L</option>
                                    </select>
                                </span>
                                <span>
                                    <label for="stock">Available stock</label>
                                    <input id="stock" type="text" class="available-quantity" disabled
                                        value="{{ $food_data->is_available }}">
                                </span>
                            </div>
                            <div class="chickens-meta">
                                <ul class="d-flex justify-content-between">
                                    <li>Tag : SKU: <span>Food-Collections</span></li>
                                    <li>Category: <span>{{ $food_data->category }}</span></li>
                                </ul>
                            </div>
                            <a href="{{ route('add.shopping.cart', $food_data->id) }}" class="btn">add to cart</a>
                            <a href="#" id="buyItem" class="btn">Buy Now</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- product-description -->
    <section class="product-des-area">
        <div class="pdes-shapes">
            <span class="pds1"><img src="{{ asset('assets/images/img/32.png') }}" alt=""></span>
            <span class="pds2"><img src="{{ asset('assets/images/shapes/7.png') }}" alt=""></span>

        </div>
        <div class="container">
            <div class="product-des-nav margin-bottom-30">
                <ul class="nav" id="productDesTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <div class="nav-link active" id="des-tab" data-bs-toggle="tab" data-bs-target="#des"
                            role="tab" aria-controls="des" aria-selected="true">Description</div>
                    </li>
                    <li class="nav-item" role="presentation">
                        <div class="nav-link" id="info-tab" data-bs-toggle="tab" data-bs-target="#info" role="tab"
                            aria-controls="info" aria-selected="false">Additional information</div>
                    </li>
                    <li class="nav-item" role="presentation">
                        <div class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews"
                            role="tab" aria-controls="reviews" aria-selected="false">Reviews</div>
                    </li>
                </ul>

            </div>
            <div class="product-des-content">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="des" role="tabpanel" aria-labelledby="info-tab">
                        <div class="pd-inner-content">
                            <div class="pd-shapes">
                                <span class="pds1"><img src="{{ asset('assets/images/shapes/17.png') }}"
                                        alt=""></span>
                                <span class="pds2"><img src="{{ asset('assets/images/shapes/7.png') }}"
                                        alt=""></span>
                                <span class="pds3"><img src="{{ asset('assets/images/shapes/28.png') }}"
                                        alt=""></span>
                            </div>

                            <p>{{ $food_data->description }}</p>
                            <p> <b>Ingredients </b>{{ $food_data->ingredient }} </p>
                            <h6 class="margin-bottom-30">burger size</h6>
                            <div class="table-box d-flex flex-wrap">
                                <table class="margin-bottom-30">
                                    <tr>
                                        <th rowspan="3" class="heading">burger <br>king <br>regular <br>fries</th>
                                        <th>s</th>
                                        <td>128</td>
                                        <td>340</td>
                                        <td>15</td>
                                    </tr>
                                    <tr>
                                        <th>m</th>
                                        <td>128</td>
                                        <td>340</td>
                                        <td>15</td>
                                    </tr>
                                    <tr>
                                        <th>l</th>
                                        <td>128</td>
                                        <td>340</td>
                                        <td>15</td>
                                    </tr>
                                </table>
                                <table>
                                    <tr>
                                        <th rowspan="3" class="heading">burger <br>king <br>satisfries</th>
                                        <th>value</th>
                                        <td>87</td>
                                        <td>190</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <th>s</th>
                                        <td>87</td>
                                        <td>190</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <th>m</th>
                                        <td>87</td>
                                        <td>190</td>
                                        <td>8</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="info" role="tabpanel" aria-labelledby="info">
                        <div class="pd-inner-content">
                            <p>A hamburger (also burger for short) is a sandwich consisting of one or more cooked
                                patties of ground meat, usually beef, placed inside a sliced bread roll or bun. The
                                patty may be pan fried, grilled, smoked or flame broiled. Hamburgers are often served
                                with cheese.</p>
                            <p> <b>Ingredients </b> Focaccia bun, Balsamic Vinaigrette, Pesto, Tomato, Swiss Cheese</p>
                            <h6 class="margin-bottom-30">burger size</h6>

                            <div class="table-box d-flex flex-wrap">
                                <table class="margin-bottom-30">
                                    <tr>
                                        <th rowspan="3" class="heading">burger <br>king <br>regular <br>fries</th>
                                        <th>s</th>
                                        <td>128</td>
                                        <td>340</td>
                                        <td>15</td>
                                    </tr>
                                    <tr>
                                        <th>m</th>
                                        <td>128</td>
                                        <td>340</td>
                                        <td>15</td>
                                    </tr>
                                    <tr>
                                        <th>l</th>
                                        <td>128</td>
                                        <td>340</td>
                                        <td>15</td>
                                    </tr>
                                </table>
                                <table>
                                    <tr>
                                        <th rowspan="3" class="heading">burger <br>king <br>satisfries</th>
                                        <th>value</th>
                                        <td>87</td>
                                        <td>190</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <th>s</th>
                                        <td>87</td>
                                        <td>190</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <th>m</th>
                                        <td>87</td>
                                        <td>190</td>
                                        <td>8</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                        <div class="pd-inner-content">
                            <p>A hamburger (also burger for short) is a sandwich consisting of one or more cooked
                                patties of ground meat, usually beef, placed inside a sliced bread roll or bun. The
                                patty may be pan fried, grilled, smoked or flame broiled. Hamburgers are often served
                                with cheese.</p>
                            <p> <b>Ingredients </b> Focaccia bun, Balsamic Vinaigrette, Pesto, Tomato, Swiss Cheese</p>
                            <h6 class="margin-bottom-30">burger size</h6>
                            <div class="table-box d-flex flex-wrap">
                                <table class="margin-bottom-30">
                                    <tr>
                                        <th rowspan="3" class="heading">burger <br>king <br>regular <br>fries</th>
                                        <th>s</th>
                                        <td>128</td>
                                        <td>340</td>
                                        <td>15</td>
                                    </tr>
                                    <tr>
                                        <th>m</th>
                                        <td>128</td>
                                        <td>340</td>
                                        <td>15</td>
                                    </tr>
                                    <tr>
                                        <th>l</th>
                                        <td>128</td>
                                        <td>340</td>
                                        <td>15</td>
                                    </tr>
                                </table>
                                <table>
                                    <tr>
                                        <th rowspan="3" class="heading">burger <br>king <br>satisfries</th>
                                        <th>value</th>
                                        <td>87</td>
                                        <td>190</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <th>s</th>
                                        <td>87</td>
                                        <td>190</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <th>m</th>
                                        <td>87</td>
                                        <td>190</td>
                                        <td>8</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- related-product -->
    <div class="related-product padding-top-115 padding-bottom-100">
        <div class="related-shapes">
            <span class="rs1"><img src="{{ asset('assets/images/shapes/16.png') }}" alt=""></span>
        </div>
        <div class="container wow fadeInUp">
            <h3>relates <span>product</span></h3>
            <div class="related-product-inner">
                <div class="row">
                    @foreach ($relatedProducts as $relatedFood)
                        <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                            <div class="single-dishes">
                                <div class="dish-img">
                                    <img src="/assets/images/menu-item/{{ $relatedFood->image }}" style="width: inherit;"
                                        alt="">
                                </div>
                                <div class="dish-content">
                                    <h5><a
                                            href="{{ route('single.food', $relatedFood->id) }}">{{ $relatedFood->name }}</a>
                                    </h5>
                                    <p>{{ $relatedFood->description }}</p>
                                    <span class="price">price :₹{{ $relatedFood->price }}</span>
                                </div>
                                <span class="badge">hot</span>
                                <div class="cart-opt">
                                    <span>
                                        <a href="#"><i class="fas fa-heart"></i></a>
                                    </span>
                                    <span>
                                        <a href="shopping-cart.html"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection
