<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>AGRIFAST - Agriculture Logistics</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="<?= base_url('assets/img/favicon.ico')?>" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url('assets/lib/owlcarousel/assets/owl.carousel.min.css.')?>" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css')?>">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark">
        <div class="row py-2 px-lg-5">
            <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center text-white">
                    <small><i class="fa fa-phone-alt mr-2"></i>+62 878 0250 0434</small>
                    <small class="px-3">|</small>
                    <small><i class="fa fa-envelope mr-2"></i>agrifast@gmail.com</small>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-white px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-white pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-lg-5">
            <a href="<?= site_url('pages/index')?>" class="navbar-brand ml-lg-3">
                <h1 class="m-0 display-5 text-uppercase text-success"><i class="fa fa-truck mr-2"></i>AgriFast</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav m-auto py-0">
                    <a href="<?= site_url('pages/index')?>" class="nav-item nav-link active">Home</a>
                    <a href="<?= site_url('pages/about')?>" class="nav-item nav-link">About</a>
                    <a href="<?= site_url('pages/service')?>" class="nav-item nav-link">Service</a>
                    <a href="<?= site_url('pages/price')?>" class="nav-item nav-link">Price</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="<?= site_url('pages/blog')?>" class="dropdown-item">Blog</a>
                            <a href="<?= site_url('pages/detail')?>" class="dropdown-item">Detail</a>
                        </div>
                    </div>
                    <a href="<?= site_url('pages/contact')?>" class="nav-item nav-link">Contact</a>
                </div>
                <a href="" class="btn btn-success py-2 px-4 d-none d-lg-block">Get A Quote</a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid mb-5">
        <div class="container text-center py-5">
            <h1 class="text-success mb-4">Safe & Faster</h1>
            <h1 class="text-white display-3 mb-5">Agriculture Logistics</h1>
            <div class="mx-auto" style="width: 100%; max-width: 600px;">
                <div class="input-group">
                    <input type="text" class="form-control border-light" style="padding: 30px;" placeholder="Tracking Id">
                    <div class="input-group-append">
                        <button class="btn btn-success px-3">Track & Trace</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 pb-4 pb-lg-0">
                    <img class="img-fluid w-100" src="<?= base_url('assets/img/agri-logistics.jpg')?>" alt="">
                    <div class="bg-success text-dark text-center p-4">
                        <h3 class="m-0">Safe & Faster</h3>
                    </div>
                </div>
                <div class="col-lg-7">
                    <h6 class="text-success text-uppercase font-weight-bold">About Us</h6>
                    <h1 class="mb-4">Trusted & Faster Logistic Service Provider</h1>
                    <p class="mb-4">AgriFast is a trusted agricultural logistics in charge of sending and distributing agricultural products to all regions in Indonesia.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!--  Quote Request Start -->
    <div class="container-fluid bg-secondary my-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 py-5 py-lg-0">
                    <h6 class="text-success text-uppercase font-weight-bold">Get A Rating</h6>
                    <h1 class="mb-4">Give Your Rating</h1>
                    <p class="mb-4">Your assessment will affect the improvement of the quality of our services.</p> <br><br>
                    <p class="mb-4">The following is our experience:</p>
                    <div class="row">
                        <div class="col-sm-4">
                            <h1 class="text-success mb-2" data-toggle="counter-up">225</h1>
                            <h6 class="font-weight-bold mb-4">Skilled Experts</h6>
                        </div>
                        <div class="col-sm-4">
                            <h1 class="text-success mb-2" data-toggle="counter-up">1050</h1>
                            <h6 class="font-weight-bold mb-4">Happy Clients</h6>
                        </div>
                        <div class="col-sm-4">
                            <h1 class="text-success mb-2" data-toggle="counter-up">2500</h1>
                            <h6 class="font-weight-bold mb-4">Complete Projects</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="bg-success py-5 px-4 px-sm-5">
                        <form class="py-5">
                            <div class="form-group">
                                <input type="text" class="form-control border-0 p-4" placeholder="Your Name" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control border-0 p-4" placeholder="Your Email" required="required" />
                            </div>
                            <div class="form-group">
                                <select class="custom-select border-0 px-4" style="height: 47px;">
                                    <option selected>Select A Rating</option>
                                    <option value="1">Very Good</option>
                                    <option value="2">Quite Good</option>
                                    <option value="3">Bad</option>
                                </select>
                            </div>
                            <div>
                                <button class="btn btn-dark btn-block border-0 py-3" type="submit">Get A Rating</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote Request End -->


    <!-- Services Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <h6 class="text-success text-uppercase font-weight-bold">Our Services</h6>
                <h1 class="mb-4">Best Logistic Services</h1>
            </div>
            <div class="row pb-3">
                <div class="col-lg-3 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center bg-success mb-4 p-4">
                        <i class="fa fa-2x fa-plane text-dark pr-3"></i>
                        <h6 class="text-white font-weight-medium m-0">Air Freight</h6>
                    </div>
                    <p>The air freight we use when trasnporting and sending harvest from abroad.</p>
                    <a class="border-bottom text-decoration-none" href="">Read More</a>
                </div>
                <div class="col-lg-3 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center bg-success mb-4 p-4">
                        <i class="fa fa-2x fa-ship text-dark pr-3"></i>
                        <h6 class="text-white font-weight-medium m-0">Ocean Freight</h6>
                    </div>
                    <p>We use ocean freight when transporting and sending harvest outside the island.</p>
                    <a class="border-bottom text-decoration-none" href="">Read More</a>
                </div>
                <div class="col-lg-3 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center bg-success mb-4 p-4">
                        <i class="fa fa-2x fa-truck text-dark pr-3"></i>
                        <h6 class="text-white font-weight-medium m-0">Land Transport</h6>
                    </div>
                    <p>Land transportation is used to distribute crops from city to city</p>
                    <a class="border-bottom text-decoration-none" href="">Read More</a>
                </div>
                <div class="col-lg-3 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center bg-success mb-4 p-4">
                        <i class="fa fa-2x fa-store text-dark pr-3"></i>
                        <h6 class="text-white font-weight-medium m-0">Cargo Storage</h6>
                    </div>
                    <p>We use cargo storage to distribute harvest to shops and distributors to be sent to customers</p>
                    <a class="border-bottom text-decoration-none" href="">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Features Start -->
    <div class="container-fluid bg-secondary my-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid w-100" src="<?= base_url('assets/img/delivery.jpg')?>" alt="">
                </div>
                <div class="col-lg-7 py-5 py-lg-0">
                    <h6 class="text-success text-uppercase font-weight-bold">Why Choose Us</h6>
                    <h1 class="mb-4">Faster, Safe and Trusted Logistics Services</h1>
                    <p class="mb-4">We are a safe, fast, and trusted agricultural logistics service. You don't need to hesitate to use us in sending harvest.</p>
                    <ul class="list-inline">
                        <li><h6><i class="far fa-dot-circle text-success mr-3"></i>Best In Indonesia</h6>
                        <li><h6><i class="far fa-dot-circle text-success mr-3"></i>Emergency Services</h6></li>
                        <li><h6><i class="far fa-dot-circle text-success mr-3"></i>24/7 Customer Support</h6></li>
                    </ul>
                    <a href="" class="btn btn-success mt-3 py-2 px-4">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Pricing Plan Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <h6 class="text-success text-uppercase font-weight-bold">Pricing Plan</h6>
                <h1 class="mb-4">Affordable Pricing Packages</h1>
            </div>
            <div class="row">
                <div class="col-md-4 mb-5">
                    <div class="bg-secondary">
                        <div class="text-center p-4">
                            <h1 class="display-4 mb-0">
                                <small class="align-top text-muted font-weight-medium" style="font-size: 22px; line-height: 45px;">Rp.</small>499,000<small class="align-bottom text-muted font-weight-medium" style="font-size: 16px; line-height: 40px;">/Bln</small>
                            </h1>
                        </div>
                        <div class="bg-success text-center p-4">
                            <h3 class="m-0">Basic</h3>
                        </div>
                        <div class="d-flex flex-column align-items-center py-4">
                            <p>Intercity Delivery</p>
                            <p>5 times Delivery</p>
                            <p>Free Packing</p>
                            <p>Maximum 50 kilograms</p>
                            <a href="" class="btn btn-success py-2 px-4 my-2">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="bg-secondary">
                        <div class="text-center p-4">
                            <h1 class="display-4 mb-0">
                                <small class="align-top text-muted font-weight-medium" style="font-size: 22px; line-height: 45px;">Rp.</small>999,000<small class="align-bottom text-muted font-weight-medium" style="font-size: 16px; line-height: 40px;">/Bln</small>
                            </h1>
                        </div>
                        <div class="bg-success text-center p-4">
                            <h3 class="m-0">Premium</h3>
                        </div>
                        <div class="d-flex flex-column align-items-center py-4">
                            <p>Intercity and/or Inter-island Shipping (Choose One):</p>
                            <p>- 11 times only intercity delivery</p>
                            <p>- 4 times only inter-island delivery</p>
                            <p>- 4 times intercity & 2 inter-island delivery</p>
                            <a href="" class="btn btn-success py-2 px-4 my-2">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="bg-secondary">
                        <div class="text-center p-4">
                            <h1 class="display-4 mb-0">
                                <small class="align-top text-muted font-weight-medium" style="font-size: 22px; line-height: 45px;">Rp.</small>1,499,000<small class="align-bottom text-muted font-weight-medium" style="font-size: 14px; line-height: 40px;">/Bln</small>
                            </h1>
                        </div>
                        <div class="bg-success text-center p-4">
                            <h3 class="m-0">Business</h3>
                        </div>
                        <div class="d-flex flex-column align-items-center py-4">
                            <p>Inter-island and/or Overseas Delivery</p>
                            <p>Delivery limit depends on area</p>
                            <p>Free Packing</p>
                            <p>For the Jakarta area, the harvest is picked up from the customer.</p>
                            <a href="" class="btn btn-success py-2 px-4 my-2">Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->


    <!-- Team Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <h6 class="text-success text-uppercase font-weight-bold">Delivery Team</h6>
                <h1 class="mb-4">Meet Our Delivery Team</h1>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team card position-relative overflow-hidden border-0 mb-5">
                        <img class="card-img-top" src="<?= base_url('assets/img/air.jpg')?>" alt="">
                        <div class="card-body text-center p-0">
                            <div class="team-text d-flex flex-column justify-content-center bg-secondary">
                                <h5 class="font-weight-bold">Air Freight Team</h5>
                                <span>Swipe</span>
                            </div>
                            <div class="team-social d-flex align-items-center justify-content-center bg-success">
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-dark btn-social" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team card position-relative overflow-hidden border-0 mb-5">
                        <img class="card-img-top" src="<?= base_url('assets/img/ocean.jpg')?>" alt="">
                        <div class="card-body text-center p-0">
                            <div class="team-text d-flex flex-column justify-content-center bg-secondary">
                                <h5 class="font-weight-bold">Ocean Freight Team</h5>
                                <span>Swipe</span>
                            </div>
                            <div class="team-social d-flex align-items-center justify-content-center bg-success">
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-dark btn-social" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team card position-relative overflow-hidden border-0 mb-5">
                        <img class="card-img-top" src="<?= base_url('assets/img/land.jpg')?>" alt="">
                        <div class="card-body text-center p-0">
                            <div class="team-text d-flex flex-column justify-content-center bg-secondary">
                                <h5 class="font-weight-bold">Land Transport Team</h5>
                                <span>Swipe</span>
                            </div>
                            <div class="team-social d-flex align-items-center justify-content-center bg-success">
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-dark btn-social" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team card position-relative overflow-hidden border-0 mb-5">
                        <img class="card-img-top" src="<?= base_url('assets/img/storage.jpg')?>" alt="">
                        <div class="card-body text-center p-0">
                            <div class="team-text d-flex flex-column justify-content-center bg-secondary">
                                <h5 class="font-weight-bold">Cargo Storage</h5>
                                <span>Swipe</span>
                            </div>
                            <div class="team-social d-flex align-items-center justify-content-center bg-success">
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-dark btn-social" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center pb-2">
                <h6 class="text-success text-uppercase font-weight-bold">Testimonial</h6>
                <h1 class="mb-4">Our Clients Say</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="position-relative bg-secondary p-4">
                    <i class="fa fa-3x fa-quote-right text-success position-absolute" style="top: -6px; right: 0;"></i>
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid rounded-circle" src="<?= base_url('assets/img/testimonial-1.jpg')?>" style="width: 60px; height: 60px;" alt="">
                        <div class="ml-3">
                            <h6 class="font-weight-semi-bold m-0">Mr. Steven</h6>
                            <small>- Lead of SayurExpress</small>
                        </div>
                    </div>
                    <p class="m-0">Products are delivered quickly and safely.</p>
                </div>
                <div class="position-relative bg-secondary p-4">
                    <i class="fa fa-3x fa-quote-right text-success position-absolute" style="top: -6px; right: 0;"></i>
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid rounded-circle" src="<?= base_url('assets/img/testimonial-2.jpg')?>" style="width: 60px; height: 60px;" alt="">
                        <div class="ml-3">
                            <h6 class="font-weight-semi-bold m-0">Mr. Joseph</h6>
                            <small>- Manager of SukaTani</small>
                        </div>
                    </div>
                    <p class="m-0">Fast and trusted delivery service. Thank you AgriFast</p>
                </div>
                <div class="position-relative bg-secondary p-4">
                    <i class="fa fa-3x fa-quote-right text-success position-absolute" style="top: -6px; right: 0;"></i>
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid rounded-circle" src="<?= base_url('assets/img/testimonial-3.jpg')?>" style="width: 60px; height: 60px;" alt="">
                        <div class="ml-3">
                            <h6 class="font-weight-semi-bold m-0">Mr. Hendrick</h6>
                            <small>- Manager of BerasKita</small>
                        </div>
                    </div>
                    <p class="m-0">The best service we choose to deliver our products to customers. Very safe and trusted.</p>
                </div>
                <div class="position-relative bg-secondary p-4">
                    <i class="fa fa-3x fa-quote-right text-success position-absolute" style="top: -6px; right: 0;"></i>
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid rounded-circle" src="<?= base_url('assets/img/testimonial-4.jpg')?>" style="width: 60px; height: 60px;" alt="">
                        <div class="ml-3">
                            <h6 class="font-weight-semi-bold m-0">Mr. Cristh</h6>
                            <small>- Lead of Teh Nusantara</small>
                        </div>
                    </div>
                    <p class="m-0">The product safely reaches the customer. Best service, Thanks AgriFast</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <h6 class="text-success text-uppercase font-weight-bold">Our Blog</h6>
                <h1 class="mb-4">Latest From Blog</h1>
            </div>
            <div class="row">
                <div class="col-md-6 mb-5">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="<?= base_url('assets/img/blog1.png')?>" alt="">
                        <div class="position-absolute bg-success d-flex flex-column align-items-center justify-content-center rounded-circle"
                            style="width: 60px; height: 60px; bottom: -30px; right: 30px;">
                            <h4 class="font-weight-bold mb-n1">30</h4>
                            <small class="text-white text-uppercase">April</small>
                        </div>
                    </div>
                    <div class="bg-secondary" style="padding: 30px;">
                        <div class="d-flex mb-3">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle" style="width: 40px; height: 40px;" src="<?= base_url('assets/img/user.jpg')?>" alt="">
                                <a class="text-muted ml-2" href="">John Doe</a>
                            </div>
                            <div class="d-flex align-items-center ml-4">
                                <i class="far fa-bookmark text-success"></i>
                                <a class="text-muted ml-2" href="">Web Design</a>
                            </div>
                        </div>
                        <h4 class="font-weight-bold mb-3">Strengthening the Distribution System of Agriculture and MSME Products by Using Agrifast Logistics</h4>
                        <p>In addition to helping with marketing for farmers and planters throughout Indonesia, the Government is also making efforts to cooperate with a logistics company, namely Agrifast, to further strengthen distribution support for agricultural products and MSME products and encourage the development of a food logistics system.</p>
                        <a class="border-bottom border-success text-uppercase text-decoration-none" href="">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 mb-5">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="<?= base_url('assets/img/blog-2.jpg')?>" alt="">
                        <div class="position-absolute bg-success d-flex flex-column align-items-center justify-content-center rounded-circle"
                            style="width: 60px; height: 60px; bottom: -30px; right: 30px;">
                            <h4 class="font-weight-bold mb-n1">07</h4>
                            <small class="text-white text-uppercase">May</small>
                        </div>
                    </div>
                    <div class="bg-secondary" style="padding: 30px;">
                        <div class="d-flex mb-3">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle" style="width: 40px; height: 40px;" src="<?= base_url('assets/img/user.jpg')?>" alt="">
                                <a class="text-muted ml-2" href="">John Doe</a>
                            </div>
                            <div class="d-flex align-items-center ml-4">
                                <i class="far fa-bookmark text-success"></i>
                                <a class="text-muted ml-2" href="">Web Design</a>
                            </div>
                        </div>
                        <h4 class="font-weight-bold mb-3">Seed Logistics Building a Progressive, Independent and Sustainable Seed System</h4>
                        <p>The development of seed logistics is part of efforts to increase production, added value and competitiveness of plantations. The development of seed logistics must be carried out because so far many seeds are produced outside the development area. Therefore, the government sends various seeds throughout Indonesia through AgriFast.</p>
                        <a class="border-bottom border-success text-uppercase text-decoration-none" href="">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-7 col-md-6">
                <div class="row">
                    <div class="col-md-6 mb-5">
                        <h3 class="text-success mb-4">Get In Touch</h3>
                        <p><i class="fa fa-map-marker-alt mr-2"></i>Jagakarsa, Jakarta, Indonesia</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>+62 878 0250 0434</p>
                        <p><i class="fa fa-envelope mr-2"></i>agrifast@gmail.com</p>
                        <div class="d-flex justify-content-start mt-4">
                            <a class="btn btn-outline-light btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <h3 class="text-success mb-4">Quick Links</h3>
                        <div class="d-flex flex-column justify-content-start">
                        <a class="text-white mb-2" href="<?= site_url('pages/index')?>"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-white mb-2" href="<?= site_url('pages/about')?>"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                            <a class="text-white mb-2" href="<?= site_url('pages/service')?>"><i class="fa fa-angle-right mr-2"></i>Our Services</a>
                            <a class="text-white mb-2" href="<?= site_url('pages/price')?>"><i class="fa fa-angle-right mr-2"></i>Pricing Plan</a>
                            <a class="text-white" href="<?= site_url('pages/contact')?>"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 mb-5">
                <h3 class="text-success mb-4">Join With Us</h3>
                <p>Join us to find out the latest info from us.</p>
                <div class="w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border-light" style="padding: 30px;" placeholder="Your Email Address">
                        <div class="input-group-append">
                            <button class="btn btn-success px-4">Sign Up</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: #3E3E4E !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">&copy; <a href="#">AgriFast</a>. All Rights Reserved. 
				
				<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
				Designed by <a href="https://htmlcodex.com">HTML Codex</a>
                </p>
            </div>
            <div class="col-lg-6 text-center text-md-right">
                <ul class="nav d-inline-flex">
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Privacy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Terms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Help</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-success back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/lib/easing/easing.min.js')?>"></script>
    <script src="<?= base_url('assets/lib/waypoints/waypoints.min.js')?>"></script>
    <script src="<?= base_url('assets/lib/counterup/counterup.min.js')?>"></script>
    <script src="<?= base_url('assets/lib/owlcarousel/owl.carousel.min.js')?>"></script>

    <!-- Contact Javascript File -->
    <script src="<?= base_url('assets/mail/jqBootstrapValidation.min.js')?>"></script>
    <script src="<?= base_url('assets/mail/contact.js')?>"></script>

    <!-- Template Javascript -->
    <script src="<?= base_url('assets/js/main.js')?>"></script>
</body>

</html>