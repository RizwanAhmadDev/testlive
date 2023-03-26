@extends('admin.layout.layout-user')
@section('content')
<div class="checkout-section">
            <div class="container">
                <div class="checkout_heading">
                    <h1>Checkout</h1>
                </div>
                <div class="checkout_block_holder">
                <div class="checkout_form">
                        <div class="checkout_billing_details">
                            <h2>Billing Details</h2>
                        </div>
                        <form action="">
                            <div class="checkout_single_input">
                                <label for="First Name">First Name*</label><input type="text" name="First Name" required>
                            </div>
                            <div class="checkout_single_input">
                                <label for="Last Name">Last Name*</label><input type="text" name="Last Name" required>
                            </div>
                            <div class="checkout_single_input">
                                <label for="Email">Email*</label><input name="Email" type="email">
                            </div>
                            <div class="checkout_single_input">
                                <label for="Phone Number">Phone Number*</label><input id="phone" name="Phone Number" type="number" required>
                            </div>
                            <div class="checkout_single_input">
                                <label for="Street Address">Full Address*</label><input type="text" name="Street Address" required>
                            </div>
                            <div class="checkout_single_input">
                                <label for="City">City*</label><input type="text" name="City" required>
                            </div>
                            <div class="checkout_single_input">
                                <label for="City">State*</label><input type="text" name="State" required>
                            </div>
                            <div class="checkout_single_input">
                                <label for="Zip Code">Zip Code*</label><input type="number" name="Zip Code" required>
                            </div>
                            <div class="checkout_notes checkout_single_input">
                                <label for="More Info">Notes</label><textarea name="More Info" id="checkout_more_info" cols="30" rows="10" placeholder="Please write notes here."></textarea>
                            </div>
                            <div class="submit_checkout">
                                <button type="submit" class="primary-btn">Submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="your_order_checkout">
                        <div class="your_order_heading">
                            <h2>Your Order</h2>
                        </div>
                        <div class="your_order_holder">
                            <div class="your_order_header">
                                <h4>Product</h4>
                                <h4>Price</h4>
                            </div>
                            <div class="checkout_products_holder">
                                <div class="checkout_single_item">
                                    <p class="item_name">Camry Makkah to Madinah</p>
                                    
                                    <p class="item_price"><span>2000</span> Rs.</p>
                                </div>
                                <div class="checkout_single_item">
                                    <p class="item_name">Camry Makkah to Madinah</p>
                                    
                                    <p class="item_price"><span>2000</span> Rs.</p>
                                </div> 
                            </div>
                            <div class="checkout_total">
                                <p class="grand_total">Your Total is <span>4000</span> Rs.</p>
                            </div>
                            <div class="more-shopping-btn">
                                <a class="primary-btn" href="#">Confirm Order</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection


