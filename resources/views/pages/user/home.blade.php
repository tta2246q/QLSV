@extends('index')
@section('title-user', 'Home')
@section('content-user')

    <section class="shop_section layout_padding">
        <div class="container">
            <div class="box">
                <div class="detail-box">
                    <h2>
                        Fruit shop
                    </h2>
                    <p>
                        There are many variations of passages of Lorem Ipsum available
                    </p>
                </div>
                <div class="img-box">
                    <img src="access/images/shop-img.jpg" alt="">
                </div>
                <div class="btn-box">
                    <a href="">
                        Buy Now
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- end shop section -->

    <!-- about section -->

    <section class="about_section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 px-0">
                    <div class="img-box">
                        <img src="access/images/about-img.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="detail-box">
                        <div class="heading_container">
                            <hr>
                            <h2>
                                About Our Fruit Shop
                            </h2>
                        </div>
                        <p>
                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                            alteration in some form, by injected humour
                        </p>
                        <a href="">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end about section -->

    <!-- fruit section -->

    <section class="fruit_section layout_padding">
        <div class="container">
            <div class="heading_container">
                <hr>
                <h2>
                    Fresh Fruit
                </h2>
            </div>
        </div>
        <div class="container-fluid">

            <div class="fruit_container">
                @forelse($products as $product)
                    <div class="box">
                        <img src="{{ asset('storage/' . $product->image) }}" alt="">
                        <div class="link_box">
                            <h5>{{ $product->name }}</h5>
                              <h6>{{ $product->price }} VND</h6>
                            <a href="">Buy Now</a>
                        </div>
                    </div>
                @empty
                    <p>Không có sản phẩm nào.</p>
                @endforelse
                {{-- <div class="box">
          <img src="access/images/f-2.jpg" alt="">
          <div class="link_box">
            <h5>
              Blueberry
            </h5>
            <a href="">
              Buy Now
            </a>
          </div>
        </div>
        <div class="box">
          <img src="access/images/f-3.jpg" alt="">
          <div class="link_box">
            <h5>
              Banana
            </h5>
            <a href="">
              Buy Now
            </a>
          </div>
        </div>
        <div class="box">
          <img src="access/images/f-4.jpg" alt="">
          <div class="link_box">
            <h5>
              Apple
            </h5>
            <a href="">
              Buy Now
            </a>
          </div>
        </div>
        <div class="box">
          <img src="access/images/f-5.jpg" alt="">
          <div class="link_box">
            <h5>
              Mango
            </h5>
            <a href="">
              Buy Now
            </a>
          </div>
        </div>
        <div class="box">
          <img src="access/images/f-6.jpg" alt="">
          <div class="link_box">
            <h5>
              Strawberry
            </h5>
            <a href="">
              Buy Now
            </a>
          </div>
        </div> --}}
            </div>
        </div>
    </section>

    <!-- end fruit section -->


    <!-- client section -->

    <section class="client_section layout_padding-bottom">
        <div class="container ">
            <div class="heading_container">
                <h2>
                    What Syas Cutomer
                </h2>
                <hr>
            </div>
            <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="client_container layout_padding-top">
                            <div class="img-box">
                                <img src="access/images/client-img.png" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Jone Mark
                                </h5>
                                <p>
                                    <img src="access/images/left-quote.png" alt="">
                                    <span>
                                        Lorem ipsum dolor sit amet,
                                    </span>
                                    <img src="access/images/right-quote.png" alt=""> <br>
                                    consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim
                                    veniam, quis nostrud exercitation ullamco laboris ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="client_container layout_padding-top">
                            <div class="img-box">
                                <img src="access/images/client-img.png" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Jone Mark
                                </h5>
                                <p>
                                    <img src="access/images/left-quote.png" alt="">
                                    <span>
                                        Lorem ipsum dolor sit amet,
                                    </span>
                                    <img src="access/images/right-quote.png" alt=""> <br>
                                    consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim
                                    veniam, quis nostrud exercitation ullamco laboris ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="client_container layout_padding-top">
                            <div class="img-box">
                                <img src="access/images/client-img.png" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Jone Mark
                                </h5>
                                <p>
                                    <img src="access/images/left-quote.png" alt="">
                                    <span>
                                        Lorem ipsum dolor sit amet,
                                    </span>
                                    <img src="access/images/right-quote.png" alt=""> <br>
                                    consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim
                                    veniam, quis nostrud exercitation ullamco laboris ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>
    </section>

@endsection
