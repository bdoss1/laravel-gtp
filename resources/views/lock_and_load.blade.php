@extends('layout.mainlayout')
@section('content')
    <!-- Page Content -->
    <section class="py-5">
        <div class="container">
            <img class="img-fluid" src="{{ url('/img/displays/lock_and_load/main.JPG') }}" alt="TUFFFRONTS on sale $39.95 when you buy 10 kits. Micro Markets starting at $750, free shipping on all micro markets. In continental US only.">

            <p class="page-head">LOCK AND LOAD DISPLAYS</p>

            <p class="page-text">TEXT</p>
        </div>
        <!--Display Page Bottom -->
        <div class="container">
            <p class="page-head">Display Options:</p>
            <div class="row">
                <div class="col-lg-4">
                    <img class="img-fluid" src="{{ url('/img/displays/lock_and_load/lock_and_load-A.JPG') }}" alt="Lock and Load">
                    <p class="lnl-bold">MODEL: L&L-A</p>
                    <p class="lnl-text">
                        (7) 19" Wire Shelves<br>
                        (1) Graphic Sign 18"H
                    </p>
                </div>
                <div class="col-lg-4">
                    <img class="img-fluid" src="{{ url('/img/displays/lock_and_load/lock_and_load-B.JPG') }}" alt="Lock and Load">
                    <p class="lnl-bold">MODEL: L&L-B</p>
                    <p class="lnl-text">
                        (3) 19" Wire Shelves<br>
                        (1) 19" Steel Metal Counter top<br>
                        (1) Slatwall<br>
                        (1) Graphic Sign 18"H
                    </p>
                </div>
                <div class="col-lg-4">
                    <img class="img-fluid" src="{{ url('/img/displays/lock_and_load/lock_and_load-C.JPG') }}" alt="Lock and Load">
                    <p class="lnl-bold">MODEL: L&L-C</p>
                    <p class="lnl-text">
                        (3) 19" Wire Shelves<br>
                        (1) 19" Steel Metal Counter top<br>
                        (1) Gridwall<br>
                        (1) Graphic Sign 18"H
                    </p>
                </div>
                <div class="col-lg-4">
                    <img class="img-fluid" src="{{ url('/img/displays/lock_and_load/lock_and_load-D.JPG') }}" alt="Lock and Load">
                    <p class="lnl-bold">MODEL: L&L-A</p>
                    <p class="lnl-text">
                        (6) 19" Steel Shelves<br>
                        (1) Graphic Sign 18"H
                    </p>
                </div>
                <div class="col-lg-4">
                    <img class="img-fluid" src="{{ url('/img/displays/lock_and_load/lock_and_load-D.JPG') }}" alt="Lock and Load">
                    <p class="lnl-bold">MODEL: L&L-</p>
                    <p class="lnl-text">
                        text
                    </p>
                </div>
                <div class="col-lg-4">
                    <img class="img-fluid" src="{{ url('/img/displays/lock_and_load/lock_and_load-D.JPG') }}" alt="Lock and Load">
                    <p class="lnl-bold">MODEL: L&L-</p>
                    <p class="lnl-text">
                        text
                    </p>
                </div>

            </div>
        </div>
    </section>
@endsection
