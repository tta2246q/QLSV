
<header>
    <div class="hero_area">
        <!-- header section strats -->
        <div class="brand_box">
            <a class="navbar-brand" href="index.html">
                <span>
                    TTA2246Q
                </span>
            </a>
        </div>
        <!-- end header section -->
        <!-- slider section -->
        <section class=" slider_section position-relative">
            <div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="img-box">
                            <img src="/access/images/slider-img.jpg" alt="">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="img-box">
                            <img src="/access/images/slider-img.jpg" alt="">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="img-box">
                            <img src="/access/images/slider-img.jpg" alt="">
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>
        <!-- end slider section -->
    </div>
    <section class="nav_section">
        <div class="container">
            <div class="custom_nav2">
                <nav class="navbar navbar-expand custom_nav-container ">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="d-flex  flex-column flex-lg-row align-items-center">
                            <ul class="navbar-nav  ">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{route('home')}}">Home <span
                                            class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('about')}}">About </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('product')}}">Product </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('blog')}}">Blog </a>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('login')}}">Login</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </section>
</header>
