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
                                <label for="First Name">First Name*</label><input type="text" name="first_name" required>
                            </div>
                            <div class="checkout_single_input">
                                <label for="Last Name">Last Name*</label><input type="text" name="last_name" required>
                            </div>
                            <div class="checkout_single_input">
                                <label for="Email">Email*</label><input name="email" type="email">
                            </div>
                            <div class="checkout_single_input">
                                <label for="Phone Number">Phone Number*</label><input id="phone" name="phone_number" type="text" required>
                            </div>
                            <div class="checkout_single_input">
                                <label for="Street Address">Full Address*</label><input type="text" name="street_address" required>
                            </div>
                            <div class="checkout_single_input">
                                <label for="City">City*</label><input type="text" name="city" required>
                            </div>
                            <div class="checkout_single_input">
                                <label for="City">State*</label><input type="text" name="state" required>
                            </div>
                            <div class="checkout_single_input">
                                <label for="Zip Code">Zip Code*</label><input type="number" name="zip_code" required>
                            </div>
                            <div class="checkout_notes checkout_single_input">
                                <label for="notes">Notes</label><textarea name="notes" id="checkout_more_info" cols="30" rows="10" placeholder="Please write notes here."></textarea>
                            </div>
                            {{-- <div class="submit_checkout">
                                <button type="submit" class="primary-btn">Submit</button>
                            </div> --}}

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
                                    <p class="order_name">{{$order_name}} ({{$taxi_name}})</p>

                                    <p class="order_price"><span>{{$order_price}}</span> </p>
                                </div>
                                {{-- <div class="checkout_single_item">
                                    <p class="item_name">Camry Makkah to Madinah</p>

                                    <p class="item_price"><span>2000</span> Rs.</p>
                                </div> --}}
                            </div>
                            <div class="checkout_total">
                                <p class="grand_total">Your Total is <span>{{$order_price}}</span></p>
                            </div>
                            <div class="more-shopping-btn">
                                <button type="submit" class="primary-btn">Confirm Order</button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        @endsection


