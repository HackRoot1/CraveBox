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
<section class="wishlist-area padding-top-120 padding-bottom-120">
    <div class="container">
        <h3 class="text-center margin-bottom-30">My Wishlist</h3>
        <div class="table-responsive">
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th colspan="2">Product</th>
                        <th>Price</th>
                        <th>Stock status</th>
                        <th>Action</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img class="product-img" src="assets/images/menu-item/drinks.png" alt="product-img">
                        </td>
                        <td><a href="#">Drinks</a></td>
                        <td>$29.99</td>
                        <td>Stock</td>
                        <td> <a href="#">Add To Cart</a></td>
                        <td><a class="delete-product" href="#"><i class="fa-regular fa-trash-can"></i></a></td>
                    </tr>
                    <tr>
                        <td><img class="product-img" src="assets/images/menu-item/chicken.png" alt="product-img">
                        </td>
                        <td><a href="#">Chicken</a></td>
                        <td>$29.99</td>
                        <td>Stock</td>
                        <td> <a href="#">Add To Cart</a></td>
                        <td><a href="#"><i class="fa-regular fa-trash-can"></i></a></td>
                    </tr>
                    <tr>
                        <td><img class="product-img" src="assets/images/menu-item/chicken-banner.png"
                                alt="product-img">
                        </td>
                        <td><a href="#">Chicken Covy</a></td>
                        <td>$29.99</td>
                        <td>Out of Stock</td>
                        <td> <a href="#">Add To Cart</a></td>
                        <td><a href="#"><i class="fa-regular fa-trash-can"></i></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="pagination order-pagination">
            <ul>
                <li class="prev"><a href="#">Prev</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li class="pagination-dot">...</li>
                <li><a href="#">10</a></li>
                <li class="next"><a href="#">Next</a></li>
            </ul>
        </div>
    </div>
</section>

@endsection