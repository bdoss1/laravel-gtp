@extends('layout.mainlayout')
@section('content')


    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Send Us a Message</h2>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->


    <div class="containerForm">
    <form action="" method="post" action="{{ route('contact.store') }}">

        @csrf

        <div class="form-row">
            <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'error' : '' }}"  id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
            </div>

            <!-- Error -->
            @if ($errors->has('name'))
                <div class="error">
                    {{ $errors->first('name') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email" id="email">

            @if ($errors->has('email'))
                <div class="error">
                    {{ $errors->first('email') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>Phone</label>
            <input type="text" class="form-control {{ $errors->has('phone') ? 'error' : '' }}" name="phone" id="phone">

            @if ($errors->has('phone'))
                <div class="error">
                    {{ $errors->first('phone') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>Message</label>
            <textarea class="form-control {{ $errors->has('comment') ? 'error' : '' }}" name="comment" id="comment"
                      rows="4"></textarea>

            @if ($errors->has('comment'))
                <div class="error">
                    {{ $errors->first('comment') }}
                </div>
            @endif
        </div>

        <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
    </form>

    </div>



@endsection
