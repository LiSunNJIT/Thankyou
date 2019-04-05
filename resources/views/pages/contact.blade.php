@extends('layouts.default')

@section('content')
    <br>
    <br>
    <div class="card mt-3 pl-2 pr-2">
        <br>
        <div class="class-title">
            <h1>This is my Contact Page</h1>

            <p class="lead">Please use this form to contact the site owner.</p></div>

        <div class="card-body">


            <form role="form" id="contact-form" class="contact-form" method="Post" action="{{route('contact.store')}}">

                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">Name</label>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Names">
                </div>

                <div class="form-group">
                    <label for="email">Email address</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com">
                </div>

                <div class="form-group">
                    <label for="body">Message</label>
                    <textarea name="body" class="form-control" id="body" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mb-2">Submit</button>
            </form>
        </div>
    </div>
@endsection
