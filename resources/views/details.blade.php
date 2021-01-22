@extends('layout.mainlayout')
@section('content')

    <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Deluxe Micro Market Fixtures</h2>
                <ol>
                    <li><a href="/demo">Home</a></li>
                    <li>Details</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">

            <div class="portfolio-details-container">

                <div class="owl-carousel portfolio-details-carousel">
                    <img src="{{ url('/img/deluxe_fixtures.jpg') }}" class="img-fluid" alt="">
                    <img src="{{ url('/img/deluxe_fixtures.jpg') }}" class="img-fluid" alt="">
                    <img src="{{ url('/img/deluxe_fixtures.jpg') }}" class="img-fluid" alt="">
                </div>

                <div class="portfolio-info">
                    <h3>Additional Options</h3>
                    <ul>
                        <li>Product Pushers ($125 QTY 25)</li>
                        <li>Graphic Side Panels ($75 per side) </li>
                        <li>Custom Shaped Headers ($250 per market)</li>
                        <li>Back Access Doors ($175 per door)</li>
                    </ul>
                </div>

            </div>

            <div class="portfolio-description">
                <h2>DELUXE</h2>
                <p>Available in 3FT and 4ft Sections 35” Depth and up to 92” Height</p>
                <p>Micro Market display systems are customized to your visual specification. Panels are constructed of plywood with embedded threaded connections, and an exterior plastic clad for durability. Back panels and headers are customized to your desired appearance. Slat wall is mounted above the counter tops. Counter tops are constructed of steel with a durable power coasted hammer finish. Cabinet doors and bases are constructed out of steel with a durable power coated finish and then wrapped in 3M vinyl.</p>
                <p>Shelving is constructed out of steel wire with a durable powder coated finish. Depth of shelving is 19 inches. Shelving comes with product dividers that are adjustable in 1inch increments. Additional pegs and baskets are included for sections above your counter-tops Counter-tops have a depth of 28 inches.</p>
                <p>All sections come with stunning vertical lighting. Assembly is fast and easy with our slide in pin connectors. All panels are shipped with all the hardware preassembled. GTP's packaging is excellent and you can rest assured your fixtures will arrive to your detestation with any damages.</p>

            </div>

        </div>
    </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->
@endsection

