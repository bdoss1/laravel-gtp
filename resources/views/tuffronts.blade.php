@extends('layout.mainlayout')
@section('content')
    <!-- Page Content -->
        <div class="container">
            <center><p class="page-head-lg">TUFFRONTS®</p></center>

            <div class="row">
                <div class="col-lg-6">
                    <p class="tuff-head">Increased The Appearances &  Profitability of Your Vending Machines</p>
                    <p class="tuff-text">TUFFRONTS® are rugged, pre-cut black, ABS plastic panels. This durable panel replaces  the existing front and side panels on vending machines. TUFFRONTS® are affordable, yet durable products that quickly restore the appearance of older or damaged machines. Their appearance increase the value & profitability of your vending machines.</p>
                    <p class="tuff-text">All panels are pre-cut to fit, and are easily modified. No tearing, liquid adhesives or air bubbles. Simply remove the old panels and replace them with our rugged, plastic panels, that will make your vending machine look brand new.  Do not use vinyl contact paper to refurbish vending machines. It is an inferior product, difficult to work with, flimsy, easily torn and often shows air bubbles. You wouldn’t put a Band-Aid on your machine, would you? Studies have shown that customers are inherently more trusting of machines that appear well-maintained.</p>
                    <p class="tuff-bold">Custom Made to Order TUFFRONTS ready to ship within 3 days.</p>
                </div>
                <div class="col-lg-6">
                    <video width="100%" controls muted autoplay>
                        <source src="{{ url('/img/video/tuffvid.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>

            <div class="row">
                <p class="tuff-bold2 spacer">Pricing:</p>
            </div>

            <div class="row">
                <div class="col-lg-3">
                    <img class="img-fluid" src="{{ url('/img/tuffronts/front.jpg') }}" alt="TUFFRONTS® fronts">
                </div>
                <div class="col-lg-3">
                    TODO: Add text. Previous page used image for text
                </div>
                <div class="col-lg-3">
                    <img class="img-fluid" src="{{ url('/img/tuffronts/side.jpg') }}" alt="TUFFRONTS® Side Panel Set">
                </div>
                <div class="col-lg-3">
                TODO: Add text. Previous page used image for text
                </div>
            </div>
        </div>
@endsection
