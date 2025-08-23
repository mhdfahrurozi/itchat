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

    <title>Login</title>
  </head>
  <body>
  

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url({{asset('assets/images/bg_1.jpg')}});"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            
 
            @if(session('success'))
              <div class="alert alert-success">
                <strong>Success!</strong> {{session('success')}}.
              </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger">
                  <strong>Error!</strong> {{session('error')}}.
                </div>
            @endif

            <h3>Login <strong>Account</strong></h3>
            <p class="mb-4">Mulai percakapan dengan teman anda!</p>

            <form method="POST" action="{{ route('login') }}">
              @csrf
              <div class="form-group first">
                <label for="email">Email</label> 
                <input type="email" class="form-control" placeholder="your-email@gmail.com" name="email" id="email" required>
              </div>
              <div class="form-group last mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" placeholder="Your Password" name="password" id="password" required>
              </div>
              <div class="form-group last mb-3">
                <label for="ip">My Network</label>
                <input type="text" class="form-control" name="network" value="" id="ip" readonly required>
              </div>

              <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
              <script type="text/javascript" >

                      $.getJSON("https://api.ipify.org/?format=json", function(data){
                          let ip = data.ip;
                          document.getElementById("ip").value = ip;
                      });
              </script>
              
              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
              </div>

              <button type="submit" class="btn btn-block btn-primary">
                {{ __('Login') }}
              </button>
            </form>
            <br><br>
              <div class="row justify-content-md-center">
                <a href="{{url('/register')}}">
                  <button type="button" class="btn btn-outline-warning">Don't have an account? Register Here</button>
                </a>
              </div>
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