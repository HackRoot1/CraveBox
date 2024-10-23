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
                <h2 class="page-title">Profile Page</h2>
                <ol class="breadcrumb text-center">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Profile Page</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<!-- profile-area -->
<section class="profile-area padding-top-120 padding-bottom-120">
    <div class="container">
        <div class="row align-items-start">
            <!-- tab-buttons -->
            <div class="col-md-4 col-lg-3">
                <div class="profile-tabs nav flex-column nav-pills me-3" role="tablist" aria-orientation="vertical">
                    <button class="nav-link active text-start" id="dahoboard-tab" data-bs-toggle="pill"
                        data-bs-target="#dahoboard" type="button" role="tab" aria-controls="dahoboard"
                        aria-selected="true">
                        <i class="fa-solid fa-sliders inline-block"></i>
                        Dashboard
                    </button>
                    <button class="nav-link text-start" id="order-tab" data-bs-toggle="pill" data-bs-target="#order"
                        type="button" role="tab" aria-controls="order" aria-selected="false">
                        <i class="fa-solid fa-cart-plus"></i>
                        Orders
                    </button>
                    <button class="nav-link text-start" id="track-order-tab" data-bs-toggle="pill"
                        data-bs-target="#track-order" type="button" role="tab" aria-controls="track-order"
                        aria-selected="false">
                        <i class="fa-solid fa-cart-shopping"></i>
                        Track Order
                    </button>
                    <button class="nav-link text-start" id="address-tab" data-bs-toggle="pill"
                        data-bs-target="#address" type="button" role="tab" aria-controls="address"
                        aria-selected="false">
                        <i class="fa-solid fa-location-dot"></i>
                        My Address
                    </button>
                    <button class="nav-link text-start" id="account-details-tab" data-bs-toggle="pill"
                        data-bs-target="#account-details" type="button" role="tab" aria-controls="account-details"
                        aria-selected="false">
                        <i class="fa-regular fa-user"></i>
                        Account Details
                    </button>
                </div>
            </div>
            <!-- tab-content -->
            <div class="col-md-8 col-lg-9">
                <div class="tab-content">
                    <!-- dahoboard-tab -->
                    <div class="tab-pane fade show active" id="dahoboard" role="tabpanel"
                        aria-labelledby="dahoboard-tab" tabindex="0">
                        <h5 class="tab-title">Hello <span>Alex!</span> </h5>
                        <p>
                            From your account dashboard. you can easily check &amp; view your recent
                            orders,<br> manage your shipping and billing addresses and edit your password and
                            account details.
                        </p>
                        <div class="recent-orders margin-top-40">
                            <h5 class="margin-bottom-30">Recent Orders</h5>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Branch</th>
                                            <th>Total</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Kesar Royal Milkshake</td>
                                            <td>March 45, 2020</td>
                                            <td>Processing</td>
                                            <td>Uttara Branch</td>
                                            <td>$125.00</td>
                                            <td><a href="#" class="btn-small d-block">Cancel Order</a></td>
                                        </tr>
                                        <tr>
                                            <td>Double Cheese pizza</td>
                                            <td>June 29, 2020</td>
                                            <td>Completed</td>
                                            <td>Dhaka Branch</td>
                                            <td>$364.00</td>
                                            <td><a href="#" class="btn-small d-block">Cancel Order</a></td>
                                        </tr>
                                        <tr>
                                            <td> Indian Fries</td>
                                            <td>August 02, 2020</td>
                                            <td>Completed</td>
                                            <td>USA Branch</td>
                                            <td>$280.00</td>
                                            <td><a href="#" class="btn-small d-block">Cancel Order</a></td>
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
                    </div>
                    <!-- order-tab -->
                    <div class="tab-pane fade" id="order" role="tabpanel" aria-labelledby="order-tab" tabindex="0">
                        <h5 class="margin-bottom-30">Your Orders</h5>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Branch</th>
                                        <th>Total</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Kesar Royal Milkshake</td>
                                        <td>March 45, 2020</td>
                                        <td>Processing</td>
                                        <td>Uttara Branch</td>
                                        <td>$125.00</td>
                                        <td><a href="#" class="btn-small d-block">Cancel Order</a></td>
                                    </tr>
                                    <tr>
                                        <td>Double Cheese pizza</td>
                                        <td>June 29, 2020</td>
                                        <td>Completed</td>
                                        <td>Dhaka Branch</td>
                                        <td>$364.00</td>
                                        <td><a href="#" class="btn-small d-block">Cancel Order</a></td>
                                    </tr>
                                    <tr>
                                        <td> Indian Fries</td>
                                        <td>August 02, 2020</td>
                                        <td>Completed</td>
                                        <td>USA Branch</td>
                                        <td>$280.00</td>
                                        <td><a href="#" class="btn-small d-block">Cancel Order</a></td>
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
                    <!-- track-order-tab -->
                    <div class="tab-pane fade" id="track-order" role="tabpanel" aria-labelledby="track-order-tab"
                        tabindex="0">
                        <h5 class="tab-title">Orders tracking</h5>
                        <p>To track your order please enter your OrderID in the box below and press "Track" button.
                            This
                            was given to you on your
                            receipt and in the confirmation email you should have received.
                        </p>
                        <form>
                            <div class="mb-3">
                                <label for="order-id" class="form-label">Order Id</label>
                                <input type="text" class="form-control" id="order-id"
                                    aria-describedby="helpingLine">
                                <div id="helpingLine" class="form-text">Found in your order confirmation email</div>
                            </div>
                            <div class="mb-3">
                                <label for="billing-email" class="form-label">Billing email</label>
                                <input type="email" class="form-control" id="billing-email">
                            </div>
                            <button type="submit" class="btn btn-primary">Track</button>
                        </form>
                    </div>
                    <!-- address-tab -->
                    <div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="address-tab"
                        tabindex="0">
                        <div class="front-address" id="front-address">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h5 class="tab-title">Billing Address</h5>
                                    <ul>
                                        <li>Uttara, Dhaka</li>
                                        <li>Yello Road, Bangladesh</li>
                                        <li>Dhaka</li>
                                        <li>1230</li>
                                        <li><a href="#" class="edit-address">Edit</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <h5 class="tab-title">Shipping Address</h5>
                                    <ul>
                                        <li>4299 Express Lane</li>
                                        <li>Sarasota,</li>
                                        <li>FL 34249 USA.</li>
                                        <li>Phone: 1.941.227.4444</li>
                                        <li>Sarasota</li>
                                        <li><a href="#" class="edit-address">Edit</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="edit-address-form" id="edit-address-form">
                            <form>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h5 class="tab-title">Billing Address</h5>
                                        <div class="mb-3">
                                            <label for="billing-address-1" class="form-label">Address Line 1</label>
                                            <input type="text" class="form-control" id="billing-address-1"
                                                value="Uttara Dhaka">
                                        </div>
                                        <div class="mb-3">
                                            <label for="billing-address-2" class="form-label">Address Line 2</label>
                                            <input type="text" class="form-control" id="billing-address-2"
                                                value="Yello Road, Bangladesh">
                                        </div>
                                        <div class="mb-3">
                                            <label for="billing-town" class="form-label">Town</label>
                                            <input type="text" class="form-control" id="billing-town" value="Dhaka">
                                        </div>
                                        <div class="mb-3">
                                            <label for="billing-zip" class="form-label">Post / Area / Zip
                                                Code</label>
                                            <input type="text" class="form-control" id="billing-zip" value="1230">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <h5 class="tab-title">Shipping Address</h5>
                                        <div class="mb-3">
                                            <label for="address-1" class="form-label">Address Line 1</label>
                                            <input type="text" class="form-control" id="address-1"
                                                value="Uttara Dhaka">
                                        </div>
                                        <div class="mb-3">
                                            <label for="address-2" class="form-label">Address Line 2</label>
                                            <input type="text" class="form-control" id="address-2"
                                                value="Yello Road, Bangladesh">
                                        </div>
                                        <div class="mb-3">
                                            <label for="town" class="form-label">Town</label>
                                            <input type="text" class="form-control" id="town" value="Dhaka">
                                        </div>
                                        <div class="mb-3">
                                            <label for="zip" class="form-label">Post / Area / Zip
                                                Code</label>
                                            <input type="text" class="form-control" id="zip" value="1230">
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary">Save</button>
                                <button class="btn btn-primary" id="back-btn">Back</button>
                            </form>
                        </div>
                    </div>
                    <!-- account-details -->
                    <div class="tab-pane fade" id="account-details" role="tabpanel"
                        aria-labelledby="account-details-tab" tabindex="0">

                        <form>
                            <!-- account-details -->
                            <div class="account-details">
                                <h5 class="tab-title">Account Details</h5>
                                <div class="mb-3">
                                    <label for="userName" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="userName">
                                </div>
                                <div class="mb-3">
                                    <label for="userPhone" class="form-label">Phone Number</label>
                                    <input type="text" class="form-control" id="userPhone">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" class="form-control" id="email">
                                </div>
                            </div>
                            <!-- password-change -->
                            <div class="password-change">
                                <h5 class="tab-title">Change Password</h5>
                                <div class="mb-3">
                                    <label for="currentPass" class="form-label">Current Password</label>
                                    <input type="password" class="form-control" id="currentPass">
                                </div>
                                <div class="mb-3">
                                    <label for="newPass" class="form-label">New Password</label>
                                    <input type="password" class="form-control" id="newPass">
                                </div>
                                <div class="mb-3">
                                    <label for="conPass" class="form-label">Confirm New Password</label>
                                    <input type="password" class="form-control" id="conPass">
                                </div>
                            </div>
                            <button class="btn btn-primary">Save Changes</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection