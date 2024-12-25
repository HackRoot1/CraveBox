$(document).ready(function () {
    // On home page Popular dishes filter API
    $(document).on("click", "#popularDishesTab .nav-link", function () {
        let filterValue = $(this).text().trim();

        $.ajax({
            url: "/api/popular-dishes",
            type: "POST",
            ContentType: "application/json",
            data: { filterValue: filterValue },
            success: function (data) {
                let content = "";
                data.filterData.forEach((element) => {
                    content += `<div class="col-xl-3 col-lg-3 col-md-6">
                                <div class="single-dishes">
                                    <div class="dish-img">
                                        <img src="/assets/images/menu-item/${element.image}" style="width: inherit"
                                            alt="" />
                                    </div>
                                    <div class="dish-content">
                                        <h5><a href="/single-food/${element.id}">${element.name}
                                            </a>
                                        </h5>
                                        <p>${element.description}</p>
                                        <span class="price">price :${element.price}</span>
                                    </div>
                                    <span class="badge">hot</span>
                                    <div class="cart-opt">
                                        <span>
                                            <a href="/wishlist/${element.id}"><i
                                                    class="fas fa-heart"></i></a>
                                        </span>
                                        <span>
                                            <a href="/add-shopping-cart/${element.id}"><i
                                                    class="fas fa-shopping-basket"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>`;
                });
                console.log(content);
                $("#popularDishesTabContent .row").html(content);
            },
            error: function (xhr, status, error) {
                console.log("Error" + xhr.responseText);
            },
        });
    });

    // On home page Popular menu API
    $(document).on("click", "#menuAreaTab .nav-link", function () {
        let filterValue = $(this).text();

        $.ajax({
            url: "/api/popular-menu",
            type: "POST",
            ContentType: "application/json",
            data: { filterValue: filterValue },
            success: function (data) {
                let content = "";
                data.filterData.forEach((element) => {
                    content += `<div class="col-lg-4 col-md-4">
                                    <div class="single-menu-item d-flex justify-content-between align-items-center h-100">
                                        <div class="menu-img">
                                            <img src="/assets/images/menu-item/${element.image}" alt="" />
                                        </div>
                                        <div class="menu-content">
                                            <h5><a href="/single-food/${element.id}">${element.name}</a>
                                            </h5>
                                            <p>${element.ingredient}</p>
                                            <span>price :${element.price}</span>
                                        </div>
                                    </div>
                                </div>`;
                });
                $("#popularMenu .row").html(content);
            },
            error: function (xhr, status, error) {
                console.log("Error" + xhr.responseText);
            },
        });
    });

    // sending data on checkout page of a specific item with quantity and size
    $(document).on("click", "#buyItem", function () {
        let user_id = $("#user_id").val();
        let food_id = $("#food_id").val();
        let buyQuantity = $(".buy-quantity").val();
        let foodSize = $("#size").val();
        let totalPrice = parseInt($("#currentPrice").text()) * buyQuantity;

        $.ajax({
            url: "/api/buy-item",
            type: "POST",
            ContentType: "application/json",
            data: {
                user_id: user_id,
                food_id: food_id,
                buyQuantity: buyQuantity,
                foodSize: foodSize,
                totalPrice: totalPrice,
            },
            success: function (data) {
                if (data.status) {
                    location.href = "/checkout";
                }
            },
            error: function (xhr, status, error) {
                console.log("Error" + xhr.responseText);
            },
        });
    });


    // payment related API
    $(document).on("click", "#checkoutOrder", async function () {
        let totalAmount = $(".totalPrice").text();

        try {
            // Create Razorpay Order
            let orderResponse = await $.ajax({
                url: "/api/checkout",
                type: "POST",
                contentType: "application/json",
                
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                data: JSON.stringify({ totalAmount: totalAmount }),
            });

            console.log(orderResponse);

            // Razorpay Options
            var options = {
                key: $("#razorpay-key").val(), // Razorpay Key
                amount: orderResponse.amount,
                currency: orderResponse.currency,
                name: "Your Company Name",
                description: "Test Transaction",
                order_id: orderResponse.order_id,
                handler: async function (response) {
                    try {
                        // Verify Payment
                        let verifyResponse = await $.ajax({
                            url: "/payment/verify",
                            type: "POST",
                            contentType: "application/json",
                            headers: {
                                "X-CSRF-TOKEN": $(
                                    'meta[name="csrf-token"]'
                                ).attr("content"),
                            },
                            data: JSON.stringify(response),
                        });

                        console.log(verifyResponse);
                    } catch (err) {
                        console.error("Payment Verification Error:", err);
                    }
                },
            };

            var rzp = new Razorpay(options);
            rzp.open();
        } catch (err) {
            console.error("Checkout Error:", err);
        }
    });
});
