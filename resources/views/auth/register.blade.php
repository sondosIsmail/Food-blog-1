<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/signUp.css">
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Tangerine">

    <link href="assets/img/favicon.ico" rel="icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Nunito:600,700" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/lib/flaticon/font/flaticon.css" rel="stylesheet">
    <title> SignUp </title>
</head>
<body>

<!-- start navbar -->
<div class="navbar navbar-expand-lg bg-light navbar-light">
    <div class="container-fluid">
        <a href="index.html" class="navbar-brand">DISH A <span>DAY</span></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto">
                <a href="{{route('website.index')}}" class="nav-item nav-link active">Home</a>

            </div>
        </div>
    </div>
</div>
<!-- Nav Bar End -->
<div class="container">
    <section>

        <div class="input">
            <h1 id ="h1">  Welcome SignUp!  </h1>



            <form method="POST" action="{{ route('register') }}">
                @csrf

                <input name="name" id ="input" type="text" placeholder="Enter Username"> <br>
                @error('name')
                <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
             </span>
                @enderror

                <input name="email" type="text" id ="input" placeholder="Enter your Email" >  <br>
                @error('email')
                <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
          </span>
                @enderror
                <input name="password" type="password"  id ="input" placeholder="Enter your password"> <br>
                @error('password')
                <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
             </span>
                @enderror
                <input name="password_confirmation"type="password" id ="input" placeholder="confirm your password"> <br>
                <button type="submit" id ="signup"> Sign-up </button>
            </form>

        </div>

        <div class="img">
            <img src="assets/img/signup.jpg" alt="dishes">

        </div>

    </section>

</div>


<!-- Footer Start -->
<div class="footer">

    <div class="copyright">
        <div class="container">
            <p>Copyright &copy; <a href="#"> Food Bloger </a>, All Right Reserved.</p>
            <p>Designed By <a href="#"> Eman</a></p>
        </div>
    </div>
</div>

<script src="assets/js/Validation.js"> </script>
<!-- Footer End -->
</body>
</html>
