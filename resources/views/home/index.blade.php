@extends('home.layouts.master')

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero">
        <div id="slider" class="sl-slider-wrapper">

            <div class="sl-slider">
                <!-- slide -->
                <div class="sl-slide bg-1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                    <div class="sl-slide-inner" style="background-image: url(assets/home/img/hero-bg.jpg);">
                        <div class="container">
                            <h2>This is <span class="text-primary">Italiano restaurant</span></h2>
                            <h1>Bootstrap Template</h1>
                            <p>An elegant Bootstrap template brought to you by <a href="https://bootstraptemple.com/" target="_blank">Bootstrap Temple</a>.</p>
                        </div>
                    </div>
                </div>
                <!-- slide -->
                <div class="sl-slide bg-2" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
                    <div class="sl-slide-inner" style="background-image: url(assets/home/img/hero-bg02.jpg);">
                        <div class="container">
                            <h1>lorem ipsum dolor sit amit</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        </div>
                    </div>
                </div>
                <!-- slide -->
                <div class="sl-slide bg-3" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
                    <div class="sl-slide-inner" style="background-image: url(assets/home/img/hero-bg03.jpg);">
                        <div class="container">
                            <h2>Visit <span class="text-primary">italiano restaurant</span></h2>
                            <h1>lorem ipsum dolor sit amit</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        </div>
                    </div>
                </div>
            </div><!-- End sl-slider -->

            <!-- slider pagination -->
            <nav id="nav-dots" class="nav-dots">
                <span class="nav-dot-current"></span>
                <span></span>
                <span></span>
            </nav>

            <!-- scroll down btn -->
            <a id="scroll-down" href="#about" class="hidden-xs"></a>

            <!-- social icons menu -->
            <div class="social">
                <div class="wrapper">
                    <ul class="list-unstyled">
                        <li><a href="#" title="facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" title="twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" title="pinterest" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#" title="instagram" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                    <span>Follow us on</span>
                </div>
            </div>
        </div><!-- End slider-wrapper -->
    </section><!-- End Hero Section -->


    <!-- Details -->
    <section id="details" class="details">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="heading text-center">
                        <p>Call Us Now For</p>
                        <h5>Home Delivery</h5>
                    </div>
                    <a href="tel:9870988764" class="phone">987 098 8764</a>
                </div>

                <div class="col-sm-6">
                    <div class="heading text-center">
                        <p>Check Our Clients'</p>
                        <h5>Rating &amp; Reviews</h5>
                    </div>
                    <a href="#" class="reviews btn-unique"><i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Details-->


    <!-- About Section -->
    <section id="about" class="about">
        <div class="container text-center">
            <header>
                <h2>About Restaurant</h2>
                <h3>Check our story</h3>
            </header>
            <p class="lead">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur</p>
        </div>
    </section>
    <!-- End About Section -->

    <!-- Services Section -->
    <section id="services" class="services text-gray-lighter">
        <div class="container text-center">
            <header>
                <h2 class="white">We provide the following</h2>
                <h3 class="text-gray-light">Our Specialities</h3>
            </header>

            <div class="row">
                <!-- item -->
                <div class="col-sm-4 service">
                    <div class="icon">
                        <i class="icon-like"></i>
                    </div>
                    <div class="text">
                        <h4 class="text-gray-light">Misión</h4>
                        <p class="text-gray-lighter">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                    </div>
                </div>

                <!-- item -->
                <div class="col-sm-4 service">
                    <div class="icon">
                        <i class="icon-hat"></i>
                    </div>
                    <div class="text">
                        <h4 class="text-gray-light">Visión</h4>
                        <p class="text-gray-lighter">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                    </div>
                </div>

                <!-- item -->
                <div class="col-sm-4 service">
                    <div class="icon">
                        <i class="icon-plate"></i>
                    </div>
                    <div class="text">
                        <h4 class="text-gray-light">Valores</h4>
                        <p class="text-gray-lighter">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services Section -->

    <!-- End Booking Section -->
    <section id="contact" class="contact">
        <div id="map"></div>
        <div class="container text-center">
            <div class="form-holder">
                <header>
                    <h2>Contact Us</h2>
                    <h3>Feel free to contact us</h3>
                </header>

                <form method="get" action="#" id="contact-form">
                    <div class="row">
                        <label for="user-name" class="col-sm-6 unique">Name
                            <input type="text" name="username" id="user-name" required>
                        </label>
                        <label for="user-email" class="col-sm-6 unique">Email
                            <input type="email" name="useremail" id="user-email" required>
                        </label>
                        <label for="message" class="col-sm-12 unique">Your Message
                            <textarea name="message" id="message" required></textarea>
                        </label>
                        <div class="col-sm-12">
                            <button type="submit" class="btn-unique" id="submit">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- End Booking Section -->


@endsection