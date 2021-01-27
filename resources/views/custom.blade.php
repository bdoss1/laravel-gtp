@extends('layout.mainlayout')
@section('content')
    <!-- Page Content -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="row">
                    <div class="col-lg-6">
                        <!-- Left side GIF -->
                       <img class="img-fluid" src="{{ url('/img/vending/custom_vending.gif') }}" alt="Quick Designs">
                    </div>
                    <div class="col-lg-6">
                        <!-- ADD Form handler -->
                        <h3>Free Design Presentation</h3>
                        <form class="montform" id="reused_form" enctype="multipart/form-data"; >


                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Contact Person:</label>
                                    <input type="text" class="form-control" id="name" name="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block"></p>
                                </div>
                            </div>

                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Company:</label>
                                    <input type="text" class="form-control" id="company" name="company" required data-validation-required-message="Please enter company.">
                                    <p class="help-block"></p>
                                </div>
                            </div>




                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Phone Number:</label>
                                    <input type="tel" class="form-control" id="phone" name="phone" required data-validation-required-message="Please enter your phone number.">
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Email Address:</label>
                                    <input type="email" class="form-control" id="email" name="email" required data-validation-required-message="Please enter your email address.">
                                </div>
                            </div>


                            <div class="control-group form-group">
                                <div class="controls">
                                    <h4>Design Type</h4>
                                    <label for="type">Vending Machines</label>

                                    <input type="radio" name="radio" id="vending" value="vending" />
                                    <label for="type">Headers</label>

                                    <input type="radio" name="radio" id="headers" value="headers" />

                                    <label for="type">Vending and Headers</label>
                                    <input type="radio" name="radio" id="both" value="both" />
                                    <label for="type">Other</label>
                                    <input type="radio" name="radio" id="other" value="other" />

                                </div>
                            </div>



                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Machine Quty:</label>
                                    <input type="text" class="form-control" id="machine" name="machine" required data-validation-required-message="Please enter your quanity.">
                                </div>
                            </div>


                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Model:</label>
                                    <input type="text" class="form-control" id="model" name="model" required data-validation-required-message="Please enter your Machine Model.">
                                </div>
                            </div>




                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Message:</label>
                                    <textarea rows="2" cols="100" class="form-control" id="message" name="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                                </div>
                            </div>


                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Upload Images: 150mb max size</label>

                                    <p class="file">
                                        <input name="image" type="file" id="file" class="feedback-input">
                                    </p>
                                </div>
                            </div>


                            <div id="success"></div>
                            <!-- For success/fail messages -->
                            <button type="submit" class="btn btn-primary" id="sendMessageButton">Send Message</button>
                        </form>




                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
