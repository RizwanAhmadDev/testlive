@extends('admin.layout.layout-user')
@section('content')
<section class="inner-banner">
            <div class="banner-container">
                <div class="banner-content">
                    <h1>Contact Us!</h1>
                    <p><strong>Umrah Taxi Service Umrah Taxi Service Umrah Taxi Service Umrah Taxi Service</strong></p>
                </div>
            </div>
        </section>

        <section class="inner-content">
            <div class="container">
                <div class="content-wrapper contact-content">
                    <div class="section-1">
                        <div class="form-holder">
                            <div class="row">
                                <div class="column column_01">
                                    <div class="contact-info">
                                        <div class="contact-holder">
                                            <h2>Let's Get In Touch</h2>
                                            <p>We're open for any suggesstions or just to have a chat.</p>
                                            <ul id="contact-list">
                                               
                                                <li><i class="fa fa-solid fa-phone"></i><a href="https://wa.me/447999451002">+44 7999 451002</a></li>
                                                <li><i class="fa fa-solid fa-envelope"></i><a href="info@mahiltaxibooking.com">info@mahiltaxibooking.com</a></li>
                                                <li><i class="fa fa-solid fa-globe"></i><a href="#" target="_blank">mahiltaxibooking.com</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="column column_02">
                                    <div class="form-wrap">
                                        <h2>Submit form Right now!</h2>
                                        <form action="">
                                            <input type="text" name="name" placeholder="Name">
                                            <input type="email" name="email" placeholder="Email">
                                            <input type="text" name="subject" placeholder="Subject">
                                            <textarea name="message" id="message" cols="30" rows="3" placeholder="Your Message"></textarea>
                                            <button class="primary-btn" type="submit" name="submit">Send Message</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endsection


