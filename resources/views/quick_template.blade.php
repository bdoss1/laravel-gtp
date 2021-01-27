@extends('layout.mainlayout')
@section('content')
    <!-- Page Content -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="row">
                    <div class="col-lg-6">
                        <img class="img-fluid" src="{{ url('/img/forms/template1.jpg') }}" alt="Quick Designs">
                    </div>
                    <div class="col-lg-6">


                        <form class="montform" id="reused_form" enctype="multipart/form-data"; >


                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Contact Person:</label>
                                    <input type="text" class="form-control" id="name" name="name" required data-validation-required-message="name">
                                    <p class="help-block"></p>
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
                                    <label>Company:</label>
                                    <input type="text" class="form-control" id="company" name="company" required data-validation-required-message="Company">
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
                                    <label for="location">Select Template</label>

                                    <select name="template" id="template">
                                        <option value="Tempate 1">Template 1 </option>
                                        <option value="Template 2">Template 2</option>
                                        <option value="Template 3">Template 3</option>
                                        <option value="Template 4">Template 4</option>
                                        <option value="Template 5">Template 5</option>
                                        <option value="Template 6">Template 6</option>
                                        <option value="Template 7">Template 7</option>
                                        <option value="Template 8">Template 8</option>
                                        <option value="Template 9">Template 9</option>
                                    </select>
                                    <p class="help-block"></p>
                                </div>
                            </div>


                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Location:</label>
                                    <input type="text" class="form-control" id="location" name="location" required data-validation-required-message="Please enter your location.">
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
