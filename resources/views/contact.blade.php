@extends('layout.mainlayout')
@section('content')
    <!-- Page Content -->
    <section class="py-5">
        <div class="container">
            <div class="row">

             <div class="col-6">
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Your Name (required)</label>
                            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Phone Number:</label>
                            <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Your Email (required):</label>
                            <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Your Message:</label>
                            <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary" id="sendMessageButton">Send Message</button>
            </form>
             </div>
                <div class="col-6">
                    <p class="main-header">Get in Touch</p>
                    <p class="main-text">Please contact us regarding any questions or issues you may have or come visit us at our North Dallas location. We will be glad to help you with any projects you are planning on starting or point you in the right direction. Complete the form below and we will respond as soon as possible.</p>

                    <p class="contact">
                        Graphics That Pop<br>
                        1620 E SH 121 Business<br>
                        Building A, Suite 100<br>
                        Lewisville, TX 75056<br>
                        Phone: (972) 905-3523</p>

                    <p class="contact">Business Hours<br>
                        Monday – Friday – 8am to 5pm<br>
                        Saturday – 9am to 12pm<br>
                        Sunday – Closed</p>
                </div>
                </div>
            </div>
    </section>
@endsection


<!-- Include
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>
-->
