@extends('layouts.main')


@section('main-content')
    <!-- banner-area -->
    <section class="banner-area padding-top-100 padding-bottom-150">
        <div class="banner-shapes">
            <span class="b-shape-1 item-animateOne"><img src="assets/images/img/5.png" alt="" /></span>
            <span class="b-shape-2 item-animateTwo"><img src="assets/images/img/6.png" alt="" /></span>
            <span class="b-shape-3 item-bounce"><img src="assets/images/img/7.png" alt="" /></span>
            <span class="b-shape-4"><img src="assets/images/img/9.png" alt="" /></span>
            <span class="b-shape-5"><img src="assets/images/shapes/18.png" alt="" /></span>
        </div>
        <div class="container padding-top-145">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-12 col-lg-6 col-xl-6">
                    <div class="banner-content">
                        <h1>enjoy our delicious <span>food</span></h1>
                        <!-- buyone-shape -->
                        <div class="buyone-shape">
                            <div class="banner-tag">
                                <h5>buy one. get one</h5>
                            </div>
                            <span class="banner-badge">free</span>
                        </div>
                        <!-- pricing -->
                        <div class="price">price : <span>₹10.50</span></div>

                        <!-- order-box -->
                        <div class="order-box">
                            <span class="order-img"><img src="assets/images/icons/1.png" alt="" /></span>
                            <div class="order-content">
                                <p>delivery order num.</p>
                                <span>123-59794069</span>
                            </div>
                            <a href="#" class="btn">try it now</a>
                        </div>
                    </div>
                </div>
                <div class="d-none d-lg-block col-lg-6 col-xl-6">
                    <div class="banner-img">
                        <div class="pizza-shapes">
                            <span class="p-shape-1"><img src="assets/images/img/2.png" alt="" /></span>
                            <span class="p-shape-2"><img src="assets/images/img/3.png" alt="" /></span>
                            <span class="p-shape-3"><img src="assets/images/img/4.png" alt="" /></span>
                            <span class="p-shape-4"><img src="assets/images/img/8.png" alt="" /></span>
                        </div>
                        <img src="assets/images/img/1.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- form-area -->
    <section class="form-area">
        <div class="container">
            <div class="form-box padding-top-110 padding-bottom-80">
                <div class="form-shapes">
                    <span class="fs-1"><img src="assets/images/shapes/f-shape-1.png" alt="" /></span>
                    <span class="fs-2"><img src="assets/images/shapes/f-shape-2.png" alt="" /></span>
                    <span class="fs-3 item-animateOne"><img src="assets/images/shapes/f-shape-7.png"
                            alt="" /></span>
                    <span class="fs-5"><img src="assets/images/shapes/4.png" alt="" /></span>
                    <span class="fs-6"><img src="assets/images/shapes/5.png" alt="" /></span>
                    <span class="fs-7 item-animateTwo"><img src="assets/images/shapes/7.png" alt="" /></span>
                    <span class="fs-8 item-animateOne"><img src="assets/images/shapes/9.png" alt="" /></span>
                </div>
                <div class="common-title-area text-center padding-bottom-50 wow fadeInUp">
                    <h3>Online Booking</h3>
                    <h2>Table <span>Booking</span></h2>
                </div>
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 col-md-12">
                        <div class="form-wraper padding-bottom-40">
                            <form action="#">
                                <select class="form-item2">
                                    <option value="">4 people</option>
                                    <option value="">3 people</option>
                                    <option value="">2 people</option>
                                    <option value="">1 people</option>
                                </select>
                                <input class="form-item2" type="date" />
                                <select class="form-item2">
                                    <option value="">07:24 pm</option>
                                    <option value="">07:24 pm</option>
                                    <option value="">07:24 pm</option>
                                    <option value="">07:24 pm</option>
                                </select>
                                <button type="submit">find table</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- about us -->
    <section class="about-area padding-top-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 wow fadeInLeft">
                    <div class="about-left">
                        <div class="about-l-shapes">
                            <span class="als-1"><img src="assets/images/shapes/2.png" alt="" /></span>
                        </div>
                        <div class="row">
                            <div
                                class="
                col-lg-4 col-md-4 col-sm-4 col-4
                d-flex
                align-items-end
                justify-content-end
                margin-bottom-20
              ">
                                <div class="about-gallery-1">
                                    <img src="assets/images/gallery/1.jpg" alt="" />
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-8 margin-bottom-20">
                                <div class="about-gallery-2">
                                    <img src="assets/images/gallery/2.jpg" alt="" />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <div class="about-gallery-3">
                                    <img src="assets/images/gallery/3.jpg" alt="" />
                                </div>
                            </div>
                            <div
                                class="
                col-lg-5 col-md-5 col-sm-5 col-5
                d-flex
                align-items-start
              ">
                                <div class="about-gallery-4 text-center">
                                    <img class="mp" src="assets/images/icons/3.png" alt="" />
                                    <div class="items counter">2000</div>
                                    <p>food item</p>
                                    <span class="g-s-4"><img src="assets/images/shapes/10.png" alt="" /></span>
                                    <span class="g-s-5"><img src="assets/images/shapes/14.png" alt="" /></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 offset-lg-1 wow fadeInRight">
                    <div class="about-right">
                        <div class="about-r-shapes">
                            <span class="as-1 item-bounce"><img src="assets/images/shapes/1.png" alt="" /></span>
                        </div>
                        <h2>
                            Fresh taste at a great price, only for
                            <span>hungry people.</span>
                        </h2>
                        <p>
                            Food is a restaurant, bar and coffee roastery located on a busy
                            corner site in Farringdon's Exmouth Market. With glazed.
                        </p>
                        <div class="garlic-burger-card">
                            <div class="garlic-burger-img">
                                <img class="price-badge" src="assets/images/icons/4.png" alt="" />
                                <img src="assets/images/icons/2.png" alt="" />
                            </div>
                            <div class="garlic-burger-content">
                                <h5>garlic burger parties</h5>
                                <p>
                                    It is a long established fact that a reader BBQ food
                                    Chicken.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--popula-menu-area -->
    <section class="menu-area padding-bottom-120">
        <div class="container">
            <div class="common-title-area text-center padding-50 wow fadeInUp">
                <h3>food items</h3>
                <h2>popular <span>menu</span></h2>
            </div>
            <!-- menu-nav-wrapper -->
            <div class="menu-nav-wrapper">
                <div class="container">
                    <div class="row">
                        <ul class="nav" id="menuAreaTab" role="tablist">
                            <!-- menu-nav-1 -->
                            @foreach ($foods_category as $category)
                                <li class="nav-item" role="presentation">
                                    <div class="nav-link {{ $category == 'Main Course' ? 'active' : '' }}" id="menu1-tab"
                                        data-bs-toggle="tab" data-bs-target="#menu1-tab-pane" role="tab"
                                        aria-controls="menu1-tab-pane" aria-selected="true">
                                        <div class="single-menu-nav text-center">
                                            <div class="menu-img margin-bottom-10">
                                                <img src="assets/images/menu-item/pizza.png" alt="" />
                                            </div>
                                            <h6>{{ $category }}</h6>
                                            <span class="g-s-4"><img src="assets/images/shapes/{{ $category }}"
                                                    alt="" /></span>
                                            <span class="g-s-5"><img src="assets/images/shapes/14.png"
                                                    alt="" /></span>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <!-- new-items -->
            <!-- menu-items-wrapper -->
            <div class="tab-content" id="nav-tabContent">
                <!-- menu-items-1 -->
                <div class="tab-pane fade show active" id="menu1-tab-pane" role="tabpanel" aria-labelledby="menu1-tab"
                    tabindex="0">
                    <div class="menu-items-wrapper menu-custom-padding margin-top-50" id="popularMenu">
                        <div class="menu-i-shapes">
                            <span class="mis-1"><img src="assets/images/shapes/28.png" alt="" /></span>
                            <span class="mis-2"><img src="assets/images/shapes/12.png" alt="" /></span>
                            <span class="mis-3"><img src="assets/images/shapes/7.png" alt="" /></span>
                            <span class="mis-4"><img src="assets/images/shapes/17.png" alt="" /></span>
                        </div>
                        <!-- first-row -->
                        <div class="row row-gap-4">
                            @foreach ($foods_data as $food)
                                <div class="col-lg-4 col-md-4">

                                    <div class="single-menu-item d-flex justify-content-between align-items-center h-100">
                                        <span class="badge">{{$food->badge}}</span>
                                        <div class="menu-img">
                                            <img src="/assets/images/menu-item/{{ $food->image }}" alt="" />
                                        </div>

                                        <div class="menu-content">
                                                                                 
                                            <h5><a href="{{ route('single.food', $food->id) }}">{{ $food->name }}</a>
                                            </h5>
                                            <p>{{ $food->ingredient }}</p>
                                            <span>price :₹{{ ($food->price*(100 - $food->discount_price))/100 }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <hr />

                        <div class="menu-btn text-center">
                            <a href="{{ route('food.page') }}" class="btn">order now</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- popular-dishes -->
    <section class="popular-dishes-area padding-top-110">
        <div class="pshapes">
            <span class="ps-1 item-animateTwo"><img src="assets/images/shapes/11.png" alt="" /></span>
            <span class="ps-2 item-animateTwo"><img src="assets/images/shapes/12.png" alt="" /></span>
            <span class="ps-3 item-bounce"><img src="assets/images/shapes/13.png" alt="" /></span>
            <span class="ps-4 item-bounce"><img src="assets/images/shapes/14.png" alt="" /></span>
            <span class="ps-5"><img src="assets/images/shapes/15.png" alt="" /></span>
            <span class="ps-6"><img src="assets/images/shapes/16.png" alt="" /></span>
        </div>
        <div class="container">
            <nav
                class="
        popular-tab-nav
        d-flex
        flex-wrap
        justify-content-between
        align-items-center
      ">
                <div class="common-title-area padding-bottom-30 wow fadeInLeft">
                    <h3>food items</h3>
                    <h2>popular <span>dishes</span></h2>
                </div>

                <ul class="nav padding-bottom-30" id="popularDishesTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <div class="nav-link food-category menu-text active" id="all-items-tab" data-bs-toggle="tab"
                            data-bs-target="#all-items-tab-pane" role="tab" aria-controls="all-items-tab-pane"
                            aria-selected="true">
                            all items</div>
                    </li>
                    @foreach ($foods_category as $category)
                        <li class="nav-item" role="presentation">
                            <div class="nav-link food-category menu-text @if($category == 'all items') {{ "active" }} @endif" id="all-items-tab" data-bs-toggle="tab"
                                data-bs-target="#all-items-tab-pane" role="tab" aria-controls="all-items-tab-pane"
                                aria-selected="true">
                                {{ $category }}</div>
                        </li>
                    @endforeach

            </nav>

            <!-- main-content -->
            <div class="tab-content" id="popularDishesTabContent">
                <!-- all items -->
                <div class="tab-pane fade show active" id="all-items-tab-pane" role="tabpanel"
                    aria-labelledby="all-items-tab" tabindex="0">
                    <div class="row">
                        @foreach ($food_item as $fooddish)
                            <div class="col-xl-3 col-lg-3 col-md-6">
                                

                                <div class="single-dishes">
                                    <div class="dish-img">
                                        <img src="/assets/images/menu-item/{{ $fooddish->image }}" style="width: inherit"
                                            alt="" />
                                    </div>
                                                                      
                                    <div class="dish-content">
                                        <h5><a href="{{ route('single.food', $fooddish->id) }}">{{ $fooddish->name }}
                                            </a>
                                        </h5>
                                        <p>{{ $fooddish->description }}</p>
                                        <span class="price">price :₹{{ $fooddish->price }}</span>
                                    </div>
                                    <span class="badge">{{$fooddish->badge}}</span>
                                    <div class="cart-opt">
                                        <span>
                                            <a href="{{ route('add.wishlist', $fooddish->id) }}"><i
                                                    class="fas fa-heart"></i></a>
                                        </span>
                                        <span>
                                            <a href="{{ route('add.shopping.cart', $fooddish->id) }}"><i
                                                    class="fas fa-shopping-basket"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- banner-gallery -->
    <section class="banner-gallery padding-top-100 padding-bottom-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12">
                    <div class="row">
                        <div class="col-lg-8 col-md-8">
                            <div class="gallery-img-1">
                                <h3>Buzzed Burger</h3>
                                <p>Sale off 50% only this week</p>
                                <a href="{{ route('food.page') }}" class="btn">order now</a>
                                <img src="assets/images/gallery/24.png" alt="" />
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div
                                class="gallery-img-2                d-flex                align-items-end                justify-content-end">
                                <img src="assets/images/gallery/26.png" alt="" />
                                <img src="assets/images/shapes/38.png" alt="" class="s11" />
                                <span class="gprice-1">₹15</span>
                                <div class="gimg-content">
                                    <h5>Super Delicious Pizza</h5>
                                    <a href="{{ route('food.page') }}">order now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row margin-top-30">
                        <div class="col-lg-4 col-md-4">
                            <div class="gallery-img-3">
                                <h5>Super Combo Burger</h5>
                                <a href="{{ route('food.page') }}">order now</a>
                                <img src="assets/images/gallery/23.png" alt="" />
                                <img src="assets/images/shapes/layer2.png" alt="" class="s12" />
                                <img src="assets/images/shapes/113.png" alt="" class="s13" />
                                <span class="gprice-2">₹15</span>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div
                                class="gallery-img-2                d-flex                align-items-end                justify-content-end">
                                <img src="assets/images/gallery/26.png" alt="" />
                                <img src="assets/images/shapes/38.png" alt="" class="s11" />
                                <span class="gprice-1">₹15</span>
                                <div class="gimg-content">
                                    <h5>Super Delicious Pizza</h5>
                                    <a href="{{ route('food.page') }}">order now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="gallery-img-3">
                                <h5>Super Combo Burger</h5>
                                <a href="{{ route('food.page') }}">order now</a>
                                <img src="assets/images/gallery/23.png" alt="" />
                                <img src="assets/images/shapes/layer2.png" alt="" class="s12" />
                                <img src="assets/images/shapes/113.png" alt="" class="s13" />
                                <span class="gprice-2">₹15</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12">
                    <div class="gallery-img-4">
                        <h5>Super Combo Burger</h5>
                        <a href="{{ route('food.page') }}" class="btn">order now</a>
                        <img src="assets/images/gallery/22.png" alt="" />
                        <img src="assets/images/shapes/leaves.png" alt="" class="s14" />
                        <img src="assets/images/shapes/transparent2.png" alt="" class="s15" />
                        <span class="gprice-4"><img src="assets/images/gallery/25.png" alt="" /></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- countdown -->
    <section class="countdown-area padding-top-120 padding-bottom-120">
        <div class="container">
            <div class="countdown-shapes">
                <span class="cs-1 item-bounce"><img src="assets/images/shapes/24.png" alt="" /></span>
                <span class="cs-3 item-bounce"><img src="assets/images/shapes/26.png" alt="" /></span>
                <span class="cs-4 item-animateOne"><img src="assets/images/shapes/27.png" alt="" /></span>
                <span class="cs-5"><img src="assets/images/shapes/18.png" alt="" /></span>
                <span class="cs-6"><img src="assets/images/shapes/22.png" alt="" /></span>
                <span class="cs-7"><img src="assets/images/shapes/30.png" alt="" /></span>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 margin-bottom-20">
                    <div class="countdown-left">
                        <span class="cs-1"><img src="assets/images/shapes/25.png" alt="" /></span>
                        <span class="cs-2"><img src="assets/images/shapes/Leaf.png" alt="" /></span>
                        <span class="cs-3"><img src="assets/images/shapes/Leaf4.png" alt="" /></span>
                        <span class="cs-4"><img src="assets/images/img/3.png" alt="" /></span>
                        <span class="cs-5"><img src="assets/images/shapes/tomato.png" alt="" /></span>
                        <span class="cs-6"><img src="assets/images/shapes/onions.png" alt="" /></span>
                        <span class="cs-7"><img src="assets/images/shapes/Leaf2.png" alt="" /></span>
                        <span class="cs-8"><img src="assets/images/shapes/Leaf3.png" alt="" /></span>
                        <img src="assets/images/img/21.png" alt="" />
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 col-md-12 col-sm-12 col-12">
                    <div class="countdown-right">
                        <div class="common-title-area padding-bottom-20">
                            <h3>coming soon</h3>
                            <h2>Spicy Chicken Pizza <span>Food </span></h2>
                            <p>feel hunger! order your favourite food.</p>
                        </div>
                        <div class="count-box countdown">
                            <div>
                                <span class="days">00</span>
                                <p class="days_ref">days</p>
                            </div>
                            <span class="seperator">:</span>
                            <div>
                                <span class="hours">00</span>
                                <p class="hours_ref">hour</p>
                            </div>
                            <span class="seperator">:</span>
                            <div>
                                <span class="minutes">00</span>
                                <p class="minutes_ref">minutes</p>
                            </div>
                            <span class="seperator">:</span>
                            <div>
                                <span class="seconds">00</span>
                                <p class="seconds_ref">seconds</p>
                            </div>
                        </div>
                        <a href="{{ route('food.page') }}" class="btn">order now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- testimonial -->
    <section class="testimonial padding-bottom-120 padding-top-110">
        <div class="container">
            <div class="testi-shapes">
                <span class="ts-1"><img src="assets/images/img/31.png" alt="" /></span>
                <span class="ts-2"><img src="assets/images/img/32.png" alt="" /></span>
                <span class="ts-3 item-animateTwo"><img src="assets/images/shapes/7.png" alt="" /></span>
                <span class="ts-4"><img src="assets/images/shapes/26.png" alt="" /></span>
            </div>
            <div class="common-title-area text-center padding-bottom-50 wow fadeInUp">
                <h3>testimonial</h3>
                <h2>client <span>feedback</span></h2>
            </div>
            <div class="testimonial-active">
                <div class="single-testimonial">
                    <div class="testi-top">
                        <div class="tin-shapes">
                            <span class="tsin-1"><img src="assets/images/shapes/33.png" alt="" /></span>
                        </div>
                        <div class="testi-img">
                            <img src="assets/images/testimonial/testi-1.png" alt="" />
                        </div>
                        <div class="testi-meta">
                            <h6>Christ Deo</h6>
                            <p>CEO A4Tech Ltd.</p>
                            <div class="testi-rating">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                    <p>
                        Food Khan is a gret Restaurant from the University of Texas at
                        Austin has been researching the benefits of frequent testing and
                        the feedback leads to. He explains that in the history of the
                        study.
                    </p>
                </div>
                <div class="single-testimonial">
                    <div class="testi-top">
                        <div class="tin-shapes">
                            <span class="tsin-1"><img src="assets/images/shapes/33.png" alt="" /></span>
                        </div>
                        <div class="testi-img">
                            <img src="assets/images/testimonial/testi-2.png" alt="" />
                        </div>
                        <div class="testi-meta">
                            <h6>Lipayka Maya</h6>
                            <p>CEO SoftTechit Ltd.</p>
                            <div class="testi-rating">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                    <p>
                        Food Khan is a gret Restaurant from the University of Texas at
                        Austin has been researching the benefits of frequent testing and
                        the feedback leads to. He explains that in the history of the
                        study.
                    </p>
                </div>
                <div class="single-testimonial">
                    <div class="testi-top">
                        <div class="tin-shapes">
                            <span class="tsin-1"><img src="assets/images/shapes/33.png" alt="" /></span>
                        </div>
                        <div class="testi-img">
                            <img src="assets/images/testimonial/testi-1.png" alt="" />
                        </div>
                        <div class="testi-meta">
                            <h6>Christ Deo</h6>
                            <p>CEO A4Tech Ltd.</p>
                            <div class="testi-rating">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                    <p>
                        Food Khan is a gret Restaurant from the University of Texas at
                        Austin has been researching the benefits of frequent testing and
                        the feedback leads to. He explains that in the history of the
                        study.
                    </p>
                </div>
                <div class="single-testimonial">
                    <div class="testi-top">
                        <div class="tin-shapes">
                            <span class="tsin-1"><img src="assets/images/shapes/33.png" alt="" /></span>
                        </div>
                        <div class="testi-img">
                            <img src="assets/images/testimonial/testi-2.png" alt="" />
                        </div>
                        <div class="testi-meta">
                            <h6>Lipayka Maya</h6>
                            <p>CEO SoftTechit Ltd.</p>
                            <div class="testi-rating">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                    <p>
                        Food Khan is a gret Restaurant from the University of Texas at
                        Austin has been researching the benefits of frequent testing and
                        the feedback leads to. He explains that in the history of the
                        study.
                    </p>
                </div>
                <div class="single-testimonial">
                    <div class="testi-top">
                        <div class="tin-shapes">
                            <span class="tsin-1"><img src="assets/images/shapes/33.png" alt="" /></span>
                        </div>
                        <div class="testi-img">
                            <img src="assets/images/testimonial/testi-1.png" alt="" />
                        </div>
                        <div class="testi-meta">
                            <h6>Christ Deo</h6>
                            <p>CEO A4Tech Ltd.</p>
                            <div class="testi-rating">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                    <p>
                        Food Khan is a gret Restaurant from the University of Texas at
                        Austin has been researching the benefits of frequent testing and
                        the feedback leads to. He explains that in the history of the
                        study.
                    </p>
                </div>
                <div class="single-testimonial">
                    <div class="testi-top">
                        <div class="tin-shapes">
                            <span class="tsin-1"><img src="assets/images/shapes/33.png" alt="" /></span>
                        </div>
                        <div class="testi-img">
                            <img src="assets/images/testimonial/testi-2.png" alt="" />
                        </div>
                        <div class="testi-meta">
                            <h6>Lipayka Maya</h6>
                            <p>CEO SoftTechit Ltd.</p>
                            <div class="testi-rating">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                    <p>
                        Food Khan is a gret Restaurant from the University of Texas at
                        Austin has been researching the benefits of frequent testing and
                        the feedback leads to. He explains that in the history of the
                        study.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- slider-gallery-img -->
    <div class="slider-gallery-img">
        <div class="container-fluid">
            <div class="slider-gallery-active">
                <div class="single-gallery-img">
                    <img src="assets/images/gallery/gm1.jpg" alt="" />
                    <a href="gallery.html"><span><i class="fas fa-image"></i></span></a>
                </div>
                <div class="single-gallery-img">
                    <img src="assets/images/gallery/gm2.jpg" alt="" />
                    <a href="gallery.html"><span><i class="fas fa-image"></i></span></a>
                </div>
                <div class="single-gallery-img">
                    <img src="assets/images/gallery/gm3.jpg" alt="" />
                    <a href="gallery.html"><span><i class="fas fa-image"></i></span></a>
                </div>
                <div class="single-gallery-img">
                    <img src="assets/images/gallery/gm4.jpg" alt="" />
                    <a href="gallery.html"><span><i class="fas fa-image"></i></span></a>
                </div>
                <div class="single-gallery-img">
                    <img src="assets/images/gallery/gm5.jpg" alt="" />
                    <a href="gallery.html"><span><i class="fas fa-image"></i></span></a>
                </div>
                <div class="single-gallery-img">
                    <img src="assets/images/gallery/gm6.jpg" alt="" />
                    <a href="gallery.html"><span><i class="fas fa-image"></i></span></a>
                </div>
            </div>
        </div>
    </div>

    <!-- delivery-area -->
    <section class="delivery-area padding-top-115 padding-bottom-90">
        <div class="del-shapes">
            <span class="ds-1 item-bounce"><img src="assets/images/shapes/35.png" alt="" /></span>
            <span class="ds-2"><img src="assets/images/shapes/34.png" alt="" /></span>
            <span class="ds-3 item-bounce"><img src="assets/images/shapes/17.png" alt="" /></span>
            <span class="ds-4 item-animateOne"><img src="assets/images/shapes/6.png" alt="" /></span>
        </div>
        <div class="container">
            <div class="row">
                <div
                    class="
          col-lg-6
          align-self-lg-center
          col-md-12
          margin-bottom-20
          wow
          fadeInLeft
        ">
                    <div class="delivery-left">
                        <img src="assets/images/bg/delivery-img.png" alt="" />
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 wow fadeInRight">
                    <div class="delivery-right">
                        <div class="common-title-area padding-bottom-40">
                            <h3>delivery</h3>
                            <h2>
                                A Moments of Delivered <span> On Right Time & Place </span>
                            </h2>
                            <p>
                                Food Khan is a restaurant, bar and coffee roastery located on
                                a busy corner site in Farringdon's Exmouth Market. With glazed
                                frontage on two sides of the building, overlooking the market
                                and a bustling London inteon.
                            </p>
                            <div class="order-box d-flex align-items-end">
                                <span class="order-img"><img src="assets/images/icons/1.png" alt="" /></span>
                                <div class="order-content">
                                    <p>delivery order num.</p>
                                    <span>123-59794069</span>
                                </div>
                                <a href="{{ route('food.page') }}" class="btn">order now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- blog-area -->
    <section class="blog-area padding-top-110 padding-bottom-120">
        <div class="blog-shapes">
            <span class="bs-1"><img src="assets/images/img/37.png" alt="" /></span>
        </div>
        <div class="container">
            <div class="common-title-area text-center padding-bottom-60 wow fadeInUp">
                <h3>food khan</h3>
                <h2>blog & <span> news </span></h2>
            </div>
            <div class="blog-slider-active">
                <div class="single-blog">
                    <div class="blog-img">
                        <a href="blog-single.html">
                            <img src="assets/images/blog/b-1.jpg" alt="" /></a>
                        <div class="b-badge">
                            <span class="date"><a href="#">02</a></span><br />
                            <span class="month"><a href="#">dec</a></span>
                        </div>
                    </div>
                    <div class="blog-meta d-flex justify-content-between">
                        <span><a href="#"><i class="fas fa-tags"></i> chicken burger</a></span>
                        <span><a href="#"><i class="fas fa-user-circle"></i> milone hridoy</a></span>
                    </div>
                    <h4>
                        <a href="blog-single.html">Game day Burger with Homemade</a>
                    </h4>
                </div>
                <div class="single-blog">
                    <div class="blog-img">
                        <a href="blog-single.html">
                            <img src="assets/images/blog/b-2.jpg" alt="" /></a>
                        <div class="b-badge">
                            <span class="date"><a href="#">02</a></span><br />
                            <span class="month"><a href="#">dec</a></span>
                        </div>
                    </div>
                    <div class="blog-meta d-flex justify-content-between">
                        <span><a href="#"><i class="fas fa-tags"></i> pizza</a></span>
                        <span><a href="#"><i class="fas fa-user-circle"></i> milone hridoy</a></span>
                    </div>
                    <h4>
                        <a href="blog-single.html">Delicious pizza with on a wooden</a>
                    </h4>
                </div>
                <div class="single-blog">
                    <div class="blog-img">
                        <a href="blog-single.html">
                            <img src="assets/images/blog/b-3.jpg" alt="" /></a>
                        <div class="b-badge">
                            <span class="date"><a href="#">02</a></span><br />
                            <span class="month"><a href="#">dec</a></span>
                        </div>
                    </div>
                    <div class="blog-meta d-flex justify-content-between">
                        <span><a href="#"><i class="fas fa-tags"></i> chicken burger</a></span>
                        <span><a href="#"><i class="fas fa-user-circle"></i> milone hridoy</a></span>
                    </div>
                    <h4>
                        <a href="blog-single.html">Game day Burger with Homemade</a>
                    </h4>
                </div>
                <div class="single-blog">
                    <div class="blog-img">
                        <a href="blog-single.html">
                            <img src="assets/images/blog/b-1.jpg" alt="" /></a>
                        <div class="b-badge">
                            <span class="date"><a href="#">02</a></span><br />
                            <span class="month"><a href="#">dec</a></span>
                        </div>
                    </div>
                    <div class="blog-meta d-flex justify-content-between">
                        <span><a href="#"><i class="fas fa-tags"></i> chicken burger</a></span>
                        <span><a href="#"><i class="fas fa-user-circle"></i> milone hridoy</a></span>
                    </div>
                    <h4>
                        <a href="blog-single.html">Game day Burger with Homemade</a>
                    </h4>
                </div>
                <div class="single-blog">
                    <div class="blog-img">
                        <a href="blog-single.html">
                            <img src="assets/images/blog/b-2.jpg" alt="" /></a>
                        <div class="b-badge">
                            <span class="date"><a href="#">02</a></span><br />
                            <span class="month"><a href="#">dec</a></span>
                        </div>
                    </div>
                    <div class="blog-meta d-flex justify-content-between">
                        <span><a href="#"><i class="fas fa-tags"></i> pizza</a></span>
                        <span><a href="#"><i class="fas fa-user-circle"></i> milone hridoy</a></span>
                    </div>
                    <h4>
                        <a href="blog-single.html">Delicious pizza with on a wooden</a>
                    </h4>
                </div>
                <div class="single-blog">
                    <div class="blog-img">
                        <a href="blog-single.html">
                            <img src="assets/images/blog/b-3.jpg" alt="" /></a>
                        <div class="b-badge">
                            <span class="date"><a href="#">02</a></span><br />
                            <span class="month"><a href="#">dec</a></span>
                        </div>
                    </div>
                    <div class="blog-meta d-flex justify-content-between">
                        <span><a href="#"><i class="fas fa-tags"></i> chicken burger</a></span>
                        <span><a href="#"><i class="fas fa-user-circle"></i> milone hridoy</a></span>
                    </div>
                    <h4>
                        <a href="blog-single.html">Game day Burger with Homemade</a>
                    </h4>
                </div>
            </div>
        </div>
    </section>
@endsection
