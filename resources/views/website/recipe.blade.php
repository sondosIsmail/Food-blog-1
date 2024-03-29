<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Dish a Day - Food blog</title>

    <link href="assets/img/favicon.ico" rel="icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Nunito:600,700" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/lib/flaticon/font/flaticon.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/Cat.css">

        </head>
        <body>

    <!-- Start Bar End -->
    <div class="navbar navbar-expand-lg bg-light navbar-light">
        <div class="container-fluid">
            <a href="index.html" class="navbar-brand">DISH A <span>DAY</span></a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto">
                    <a href="index.html" class="nav-item nav-link active">Home</a>
                    <a href="#" class="nav-item nav-link">About</a>
                    <a href="#" class="nav-item nav-link">Chef</a>
                    <a href="Catagroies.html" class="nav-item nav-link">Category</a>
                    <a href="#" class="nav-item nav-link">Contact</a>
                </div>
            </div>
        </div>
    </div>
<!-- Nav Bar End -->
<!-- The four columns -->
<div class="row1">
    <div class="column">
      <img src="assets/img/1.jpg" id ="Food1" onclick="myFunction(this);">
    </div>
    <div class="column">
      <img src="assets/img/2.jpg" id="Food2" onclick="myFunction(this);">
    </div>
    <div class="column">
      <img src="assets/img/5.jpg" id ="Food3"onclick="myFunction(this);">
    </div>
    <div class="column">
      <img src="assets/img/4.jpg" id="Food4" onclick="myFunction(this);">
    </div>


  <div class="container">
{{--    <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>--}}
    <img id="expandedImg" >
    <div id="imgtext">
    </div>
  </div>
  <div class="comment">
    <div id ="icon">
    <p><i class="fas fa-heart"></i>Love</p>
    <p><i class="fa fa-plus" aria-hidden="true"></i>Add to wishlist</p>
  </div>
    <h2 id ="h2-comment">Write your comment here </h2>
    <input type="textarea">

  </div>

</div>
<div class="footer">

    <div class="copyright">
        <div class="container">
            <p>Copyright &copy; <a href="#">Your Site Name</a>, All Right Reserved.</p>
            <p>Designed By <a href="#">Food Blog</a></p>
        </div>
    </div>
</div>
<!-- Footer End -->
<script src="assets/js/Cat.js"></script>
</body>
</html>
