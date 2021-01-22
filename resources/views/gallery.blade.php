@extends('layout.mainlayout')
@section('content')

    <section id="get-started" class="padd-section text-center">

        <div class="container" data-aos="fade-up">
            <div class="section-title text-center">

                <h2>Gallery</h2>
                <p class="separator">Integer cursus bibendum augue ac cursus .</p>

            </div>
        </div>

        <div class="container">
            <div class="row">

                <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="feature-block">

                        <!--<img src="{{ url('/img/svg/cloud.svg') }}" alt="img" class="img-fluid">-->
                        <h4>Deluxe Display Systems</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                        <a href="/gallery_deluxe">read more</a>

                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="feature-block">

                  <!--  <img src="{{ url('/img/svg/planet.svg') }}" alt="img" class="img-fluid"> -->
                        <h4>Value Grid Display</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                      <a class="btn btn-primary" href="/gallery_value" role="button">View</a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="feature-block">

                       <!-- <img src="{{ url('/img/svg/asteroid.svg') }}" alt="img" class="img-fluid">-->
                        <h4>Vending Graphics</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                        <a href="/gallery_vending">read more</a>

                    </div>
                </div>

            </div>
        </div>

    </section><!-- End Get Started Section -->

@endsection
