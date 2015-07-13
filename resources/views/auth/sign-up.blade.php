<!-- READ ME -->
<!--

I wrote the HTML as if I was actually setting
it up how I would write it so you can see an
idea how to set up HTML and name inputs,
classes, and IDS.

Things to notice:
- notice how all of the elements(div, input, form, etc.)
have the same convention for their attributes. So form
example notice how in the `input` element its attributes
are always (type, name, class, placeholder). Another example
is the `form` element the attribute order is always (method, action, id)

- notice how every div that is a wrapper like `col-md-6`
or `row` that's its only job no other classes or IDS.

- notice just the naming convention the main id is the
pages `name+wrapper` (signUpWrapper). then if im wrapping
something like a form in this case its very simple its the name
of the `name+element(in this case `form`)+wrapper` (register-form-wrapper)

- notice the comments to break apart each section makes it super easy
to find everything even in a lengthy and messy type page like this one

-notice the name of the css classes like `form-title` again its the element
plus its representation in this case `title` so its so simple to understand


-->

<!-- I only added bootstrap so the demo is more impactful lol -->
<!-- DELETE ME -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<style>
    #signUpWrapper{
        padding: 30px;
    }
    .form-title{
        font-size: 24px;
        font-weight: 100;
    }
</style>

<div id="signUpWrapper">
    @include('inc.form-errors')
    @include('inc.flash-messages')


    <!-- START FORMS -->
    <div class="row">
        <div class="col-md-6">
            <div class="register-form-wrapper">
                <h1 class="form-title">Sign Up</h1>
                <form method="post" action="/auth/register" id="registerForm">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="first_name" class="form-control" placeholder="First Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="last_name" class="form-control" placeholder="Last Name">
                            </div>
                        </div>
                    </div>
                    <!-- END NAMES -->
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <input type="text" name="address" class="form-control" placeholder="Street Address">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <input type="text" name="city" class="form-control" placeholder="City">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <input type="text" name="state" class="form-control" placeholder="State">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <input type="number" name="zip_code" class="form-control" placeholder="Zip Code">
                            </div>
                        </div>
                    </div>
                    <!-- END ADDRESS -->
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email Address">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <!-- END CREDENTIALS -->
                    <button type="submit" class="btn btn-primary">Sign Up!</button>
                </form>
            </div>
        </div>
        <!-- END REGISTRATION -->
        <div class="col-md-6">
            <div class="login-form-wrapper">
                <h1 class="form-title">Login</h1>
                <form method="post" action="/auth/login" id="LoginForm">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email Address">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <button class="btn btn-primary">Sign Up!</button>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- DELETE ME -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>