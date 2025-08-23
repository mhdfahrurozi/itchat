<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ asset('images') }}/logochat.jpg" />
    <link rel="stylesheet" href="{{asset('assets/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <title>Register</title>
  </head>
  <body>
  

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url({{asset('assets/images/bg_1.jpg')}});"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <h3>Register an <strong>Account</strong></h3>
            <p class="mb-4">Mulai percakapan dengan teman anda!</p>

            <form method="POST" action="{{ route('register') }}">
                @csrf
              <div class="form-group first">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Your Name" id="name">
              </div>
              <div class="form-group first">
                <label for="email">Email Address</label>
                <input type="email" class="form-control" name="email" placeholder="your-email@gmail.com" id="email">
              </div>
              <div class="form-group first">
                <label for="pass">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Your Password" id="pass">
              </div>
              <div class="form-group last mb-3">
                <label for="password">Confirm Password</label>
                <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
              </div>
              
              <div class="d-flex mb-5 align-items-center">
              <button type="submit" class="btn btn-block btn-primary">
                  {{ __('Register') }}
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
  </body>
</html>