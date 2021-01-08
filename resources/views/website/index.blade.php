@extends('layouts.website.app')

@section('content')

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

                    <a href="#chef" class="nav-item nav-link">Chef</a>
                    <a href="#categories" class="nav-item nav-link">Category</a>
                    <a href="#contact" class="nav-item nav-link">Contact</a>
                    @if(Auth::user())
                        <a href="{{route('profile')}}" class="nav-item nav-link">My profile</a>

                        <a class="nav-item nav-link" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf

                        </form>
                    @endif

                    @if(!Auth::user())
                    <div class="btn">
                        <a class="btn custom-btn" href="{{route('register')}}">Sign-up</a>
                        <a class="btn custom-btn" href="{{route('login')}}">Log-in</a>
                    </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
    <!-- Nav Bar End -->


    <!-- Carousel Start -->
    <div class="carousel" >
        <div class="container-fluid">
            <div class="owl-carousel">
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="assets/img/carousel-1.jpg" alt="Image">
                    </div>
                    <div class="carousel-text">
                        <h1>Best <span>Quality</span> Ingredients</h1>
                        <p>
                            Lorem ipsum dolor sit amet elit. Phasellus ut mollis mauris. Vivamus egestas eleifend dui ac consequat at lectus in malesuada
                        </p>

                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="assets/img/carousel-2.jpg" alt="Image">
                    </div>
                    <div class="carousel-text">
                        <h1>World’s <span>Best</span> Chef</h1>
                        <p>
                            Lorem ipsum dolor sit amet elit. Phasellus ut mollis mauris. Vivamus egestas eleifend dui ac consequat at lectus in malesuada
                        </p>

                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="assets/img/carousel-3.jpg" alt="Image">
                    </div>
                    <div class="carousel-text">
                        <h1>Variety of dishes
                            <span>around the world</span></h1>
                        <p>
                            Lorem ipsum dolor sit amet elit. Phasellus ut mollis mauris. Vivamus egestas eleifend dui ac consequat at lectus in malesuada
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->
    <!-- Food Start -->
    <div class="food" id="categories">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <div class="food-item">
                        <i class="flaticon-burger"></i>
                        <h2>food</h2>
                        <p>
                            Lorem ipsum dolor sit amet elit. Phasel nec pretium mi. Curabit facilis ornare velit non vulputa. Aliquam metus tortor auctor quis sem.
                        </p>
                        <a href="Catagroies.html">View Category</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="food-item">
                        <i class="flaticon-snack"></i>
                        <h2>Snacks</h2>
                        <p>
                            Lorem ipsum dolor sit amet elit. Phasel nec pretium mi. Curabit facilis ornare velit non vulputa. Aliquam metus tortor auctor quis sem.
                        </p>
                        <a href="Catagroies.html">View Category</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="food-item">
                        <i class="flaticon-cocktail"></i>
                        <h2>Drinks</h2>
                        <p>
                            Lorem ipsum dolor sit amet elit. Phasel nec pretium mi. Curabit facilis ornare velit non vulputa. Aliquam metus tortor auctor quis sem.
                        </p>
                        <a href="Catagroies.html">View Category</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Food End -->


    <!-- Blog Start -->
    <div class="blog">
        <div class="container">
            <div class="section-header text-center">
                <p>Food Blog</p>
                <h2>Latest From Food Blog</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="assets/img/blog-1.jpg" alt="Blog">
                        </div>
                        <div class="blog-content">
                            <h2 class="blog-title"> Hamburger</h2>
                            <div class="blog-meta">
                                <p><i class="far fa-user"></i>Admin</p>
                                <p><i class="far fa-list-alt"></i>Food</p>
                                <p><i class="far fa-calendar-alt"></i>01-Jan-2045</p>
                                <p><i class="far fa-comments"></i>10</p>
                            </div>
                            <div class="blog-text">
                                <p>
                                    Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor. Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte
                                </p>
                                <a class="btn custom-btn" href="">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="assets/img/blog-2.jpg" alt="Blog">
                        </div>
                        <div class="blog-content">
                            <h2 class="blog-title"> Orange juice</h2>
                            <div class="blog-meta">
                                <p><i class="far fa-user"></i>Admin</p>
                                <p><i class="far fa-list-alt"></i>Food</p>
                                <p><i class="far fa-calendar-alt"></i>01-Jan-2045</p>
                                <p><i class="far fa-comments"></i>10</p>
                            </div>
                            <div class="blog-text">
                                <p>
                                    Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor. Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte
                                </p>
                                <a class="btn custom-btn" href="">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->
    <!-- Team Start -->
    <div class="team" id="chef">
        <div class="container">
            <div class="section-header text-center">
                <p>Our Team</p>
                <h2>Our Master Chef</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="assets/img/team-1.jpg" alt="Image">
                            <div class="team-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-text">
                            <h2>Adam Phillips</h2>
                            <p>CEO, Co Founder</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="assets/img/team-2.jpg" alt="Image">
                            <div class="team-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-text">
                            <h2>Dylan Adams</h2>
                            <p>Master Chef</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="assets/img/team-3.jpg" alt="Image">
                            <div class="team-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-text">
                            <h2>Jhon Doe</h2>
                            <p>Master Chef</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="assets/img/team-4.jpg" alt="Image">
                            <div class="team-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-text">
                            <h2>Josh Dunn</h2>
                            <p>Master Chef</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Contact Start -->
    <div class="contact" id="contact">
        <div class="container">
            <div class="section-header text-center">
                <p>Contact Us</p>
                <h2>Contact For Any Query</h2>
            </div>
            <div class="row align-items-center contact-information">
                <div class="col-md-6 col-lg-3">
                    <div class="contact-info">
                        <div class="contact-icon">
                            <i class="fa fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Address</h3>
                            <p>123 Street, NY, USA</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="contact-info">
                        <div class="contact-icon">
                            <i class="fa fa-phone-alt"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Call Us</h3>
                            <p>+012 345 6789</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="contact-info">
                        <div class="contact-icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Email Us</h3>
                            <p>info@example.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="contact-info">
                        <div class="contact-icon">
                            <i class="fa fa-share"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Follow Us</h3>
                            <div class="contact-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-youtube"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Contact End -->
@endsection
