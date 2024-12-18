@extends('layouts.main')
@section('main-content')
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
                    <h2 class="page-title">Wishlist Page</h2>
                    <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> Wishlist Page</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- wishlist-area -->
    <section class="wishlist-area padding-top-120 padding-bottom-120  food-area  popular-dishes-area">
        <div class="container">
            <h3 class="text-center margin-bottom-30">My Wishlist</h3>
            <div class="table-responsive">
                <table class="table align-middle">
                    <thead>
                        <tr>
                            <th colspan="2">Product</th>
                            <th>Price</th>
                            <th>Available Stock</th>
                            <th>Action</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($wishlists as $wishlist_item)
                            <tr>
                                <td><img class="product-img" src="/assets/images/menu-item/{{ $wishlist_item->image }}"
                                        alt="product-img">
                                </td>
                                <td><a href="#">{{ $wishlist_item->name }}</a></td>
                                <td>₹{{ $wishlist_item->price }}</td>
                                <td>{{ $wishlist_item->is_available }}</td>
                                <td> <a href="{{ route('add.shopping.cart', $wishlist_item->food_id) }}">Add To Cart</a>
                                </td>
                                <td><a class="delete-product"
                                        href="{{ route('delete.wishlist', $wishlist_item->food_id) }}"><i
                                            class="fa-regular fa-trash-can"></i></a></td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">No Items in Wishlist</td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>



        </div>
        <!-- pagination area  -->
        {{ $wishlists->links() }}
    </section>
@endsection
