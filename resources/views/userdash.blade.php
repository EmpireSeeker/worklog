<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="{{asset('assets/css/eff.css')}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if(session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif

    <div class="hero">
        <video autoplay loop muted plays-inline class="back-video">
            <source src="/assets/video/v1.mp4" type="video/mp4">
        </video>
        <nav>
           <h2> <a class="navbar-brand" href="#!">DEV LOGISTICS</a></h2>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Service</a></li>
                <li><a href="#">Contact Us</a></li>




            </ul>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="vo">Logout</button>
            </form>
        </nav>
        <div class="content">
            <h1>Dev Logistics</h1>
            <marquee behavior="" direction="left"><p>We are professional in ocean freight with more than 12 years of experience and have shipped more than 100k shipments.
         </p></marquee>
         <a href="{{ route('create') }}">
         <button>Get a quote</button>
        </a>
        </div>
    </div>
<!-- Responsive navbar-->


<!-- Features section-->
<section class="py-5" id="features">
    <div class="container px-5 my-5">
        <div class="row gx-5">
            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-collection"></i></div>
                <img src="/assets/img/p1.png" alt="">
                <h2 class="h4 fw-bolder">Featured title</h2>
                <p>We are professional in ocean freight with more than 12 years of experience and have shipped more than 100k shipments..</p>
                <a class="text-decoration-none" href="#!">
                    Call to action
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-building"></i></div>
                <img src="/assets/img/p2.png" alt="">
                <h2 class="h4 fw-bolder">Featured title</h2>
                <p>We are professional in ocean freight with more than 12 years of experience and have shipped more than 100k shipments.</p>
                <a class="text-decoration-none" href="#!">
                    Call to action
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
            <div class="col-lg-4">
                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                <img src="/assets/img/p3.png" alt="">
                <h2 class="h4 fw-bolder">Featured title</h2>
                <p>We are professional in ocean freight with more than 12 years of experience and have shipped more than 100k shipments.</p>
                <a class="text-decoration-none" href="#!">
                    Call to action
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- Pricing section-->
<section class="bg-light py-5 border-bottom">
    <div class="container px-5 my-5">
        <div class="text-center mb-5">
            <h1 class="fw-bolder">Choose The Best Plan</h1>
            <p class="lead mb-0">Pick your plan. Change whenever you want.
                No switching fees between packages</p>
        </div>
        <div class="row gx-5 justify-content-center">
            <!-- Pricing card free-->
            <div class="col-lg-6 col-xl-4">
                <div class="card mb-5 mb-xl-0">
                    <div class="card-body p-5">
                        <div class="small text-uppercase fw-bold text-muted"><h2>Premium</h2></div>
                        <p>Advanced features for pros who need more customization.</p>
                        <div class="mb-3">
                            <span class="display-4 fw-bold">$125</span>
                            <span class="text-muted">/ Month.</span>
                        </div>
                        <hr>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2">
                                <i class="bi bi-check text-primary"></i>

                            </li>
                            <li class="mb-2">
                                <i class="bi bi-check text-primary"></i>
                                15-Days Shipping Worldwide
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-check text-primary"></i>
                                1 Kg Weight Max /Package
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-check text-primary"></i>
                                Free Bubble Warp
                            </li>

                        </ul>
                        <div class="d-grid"><a class="btn btn-outline-primary" href="#!">View Details</a></div>
                    </div>
                </div>
            </div>
            <!-- Pricing card pro-->
            <div class="col-lg-6 col-xl-4">
                <div class="card mb-5 mb-xl-0">
                    <div class="card-body p-5">
                        <div class="small text-uppercase fw-bold">
                            <i class="bi bi-star-fill text-warning"></i>
                           <h2> Essentials</h2>
                        </div>
                        <p>All the basics for businesses that are just getting started.</p>
                        <div class="mb-3">
                            <span class="display-4 fw-bold">$89</span>
                            <span class="text-muted">/ Month.</span>
                        </div>
                        <hr>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2">
                                <i class="bi bi-check text-primary"></i>
                                <strong></strong>
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-check text-primary"></i>
                                7-Days Shipping Worldwide
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-check text-primary"></i>
                                3 Kg Weight Max /Package
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-check text-primary"></i>
                                Free Wood Crate
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-check text-primary"></i>
                                Get in touch to discuss
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-check text-primary"></i>
                                Use Personal And Commercial
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-check text-primary"></i>
                                24/7 Support
                            </li>

                        </ul>
                        <div class="d-grid"><a class="btn btn-primary" href="#!">view Details</a></div>
                    </div>
                </div>
            </div>
            <!-- Pricing card enterprise-->
            <div class="col-lg-6 col-xl-4">
                <div class="card">
                    <div class="card-body p-5">
                        <div class="small text-uppercase fw-bold text-muted"><h2>Unlimited</h2></div>
                        <p>Advanced features for pros who need more customization.</p>
                        <div class="mb-3">
                            <span class="display-4 fw-bold">$4,788</span>
                            <span class="text-muted">/ Mo</span>
                        </div>
                        <hr>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2">
                                <i class="bi bi-check text-primary"></i>
                                <strong></strong>
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-check text-primary"></i>
                                4-Days Shipping Worldwide
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-check text-primary"></i>
                                1 Kg Weight Max /Package
                            </li>

                            <li class="mb-2">
                                <i class="bi bi-check text-primary"></i>
                                24/7 Support
                            </li>
                            <li class="mb-2">

                        </ul>
                        <div class="d-grid"><a class="btn btn-outline-primary" href="#!">View Details</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonials section-->
<section class="pt">
    <div class="container px-5 my-5 px-5">
        <div class="text-center mb-5">
            <h2 class="fw-bolder">Customer testimonials</h2>
            <p class="lead">Our customers love working with us</p>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-6">
                <!-- Testimonial 1-->
                <div class="card mb-4">
                    <div class="card-body p-4">
                        <div class="d-flex">
                            <div class="flex-shrink-0"><i class="bi bi-chat-right-quote-fill text-primary fs-1"></i></div>
                            <div class="ms-4">
                                <p class="mb-1">Thank you for putting together such a great product. We loved working with you and the whole team, and we will be recommending you to others!</p>
                                <div class="small text-muted">- Client Name, Location</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Testimonial 2-->
                <div class="card">
                    <div class="card-body p-4">
                        <div class="d-flex">
                            <div class="flex-shrink-0"><i class="bi bi-chat-right-quote-fill text-primary fs-1"></i></div>
                            <div class="ms-4">
                                <p class="mb-1">The whole team was a huge help with putting things together for our company and brand. We will be hiring them again in the near future for additional work!</p>
                                <div class="small text-muted">- Client Name, Location</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact section-->
<section class="pr">
    <div class="container px-5 my-5 px-5">
        <div class="text-center mb-5">
            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
            <h2 class="fw-bolder">Get in touch</h2>
            <p class="lead mb-0">We'd love to hear from you</p>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-6">
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <!-- Name input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                        <label for="name">Full name</label>
                        <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                    </div>
                    <!-- Email address input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                        <label for="email">Email address</label>
                        <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                        <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                    </div>
                    <!-- Phone number input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                        <label for="phone">Phone number</label>
                        <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                    </div>
                    <!-- Message input-->
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                        <label for="message">Message</label>
                        <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                    <!-- Submit Button-->
                    <div class="d-grid"><button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Submit</button></div>
                </form>
            </div>
        </div>
    </div>
</section>
<footer >
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .footer {
            background-image: url('/assets/img/d11.jpg');
          background-size: cover;
           background-position: center;
            background-repeat: no-repeat;
            padding: 20px;
            font-size: 16px;

            text-align: center;
            opacity :80%;
        }

        .footer p {
            font-size: 14px;
            line-height: 1.6;
            color: rgba(255, 255, 255, 0.8);
        }

        .footer .container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: flex-start;
        }

        .footer .container > div {
            flex: 0 0 30%;
            margin-bottom: 20px;
        }

        .footer .container > div.links {
            text-align: left;
        }

        .gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
            padding: 20px;
            background-color: #f2f2f2;
        }

        .gallery img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }

        /* Responsive styles */
        @media screen and (max-width: 768px) {
            .footer .container > div {
                flex: 0 0 100%;
            }
        }
    </style>
</head>
<>
    <div class="footer">
        <div class="container">
            <div>
                <p><strong>Dev Logistics</strong><br>
                We fuse our global network with our depth of expertise in air freight, ocean freight, railway transportation, trucking, and multi-mode transportation, also we are providing sourcing, warehousing, E-commercial fulfillment, and value-added service to our customers including kitting, assembly, customized package and business inserts, etc.</p>
            </div>
            <div class="links">
                <p><strong>Follow Us</strong><br>
                <a href="#">Facebook</a> | <a href="#">Twitter</a> | <a href="#">LinkedIn</a></p>
            </div>
            <div class="links">
                <p><strong>Company</strong><br>
                <a href="#">Mission & Vision</a> | <a href="#">Our Team</a> | <a href="#">Careers</a> | <a href="#">Press & Media</a> | <a href="#">Advertising</a> | <a href="#">Testimonials</a></p>
            </div>
            <div class="links">
                <p><strong>Industries</strong><br>
                <a href="#">Global coverage</a> | <a href="#">Distribution</a> | <a href="#">Accounting Tools</a> | <a href="#">Freight Recovery</a> | <a href="#">Supply Chain</a> | <a href="#">Warehousing</a></p>
            </div>
            <div class="links">
                <p><strong>Services</strong><br>
                <a href="#">Air Freight</a> | <a href="#">Ocean Freight</a> | <a href="#">Railway Freight</a> | <a href="#">Warehousing</a> | <a href="#">Distribution</a> | <a href="#">Value added</a></p>
            </div>
        </div>
    </div>


    <div class="container px-5"><p class="m-0 text-center text-white">Copyright &copy; Cleon Website 2023</p></div>
</footer>

<script src="{{asset('assets/js/js/styles.js')}}" charset="utf-8"></script>



</body>
</html>
