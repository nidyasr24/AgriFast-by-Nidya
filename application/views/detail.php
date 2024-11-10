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
    <link href="<?= base_url('assets/lib/owlcarousel/assets/owl.carousel.min.css')?>" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url('assets/css/style.css')?>" rel="stylesheet">
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
                <h1 class="m-0 display-5 text-uppercase text-success"><i class="fa fa-truck mr-2"></i>AGRIFASI</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav m-auto py-0">
                    <a href="<?= site_url('pages/index')?>" class="nav-item nav-link">Home</a>
                    <a href="<?= site_url('pages/about')?>" class="nav-item nav-link">About</a>
                    <a href="<?= site_url('pages/service')?>" class="nav-item nav-link">Service</a>
                    <a href="<?= site_url('pages/price')?>" class="nav-item nav-link">Price</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="<?= site_url('pages/blog')?>" class="dropdown-item">Blog</a>
                            <a href="<?= site_url('pages/detail')?>" class="dropdown-item active">Detail</a>
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
            <h1 class="text-white display-3">Our Blog</h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="">Home</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">Blog Detail</p>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Blog Start -->
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8">
                <!-- Blog Detail Start -->
                <div class="pb-3">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="<?= base_url('assets/img/blog1.png')?>" alt="">
                        <div class="position-absolute bg-success d-flex flex-column align-items-center justify-content-center rounded-circle"
                            style="width: 60px; height: 60px; bottom: -30px; right: 30px;">
                            <h4 class="font-weight-bold mb-n1">30</h4>
                            <small class="text-white text-uppercase">April</small>
                        </div>
                    </div>
                    <div class="bg-secondary mb-3" style="padding: 30px;">
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
                        <p>In addition to helping with marketing for farmers and planters throughout Indonesia, 
                            the Government is also making efforts to cooperate with a logistics company, namely Agrifast, to further strengthen distribution support for agricultural products and MSME products and encourage the development of a food logistics system.</h4>
                        <p>Deputy for Food and Agribusiness Coordination at the Coordinating Ministry for Economic Affairs 
                            Musdhalifah Machmud, represented by Assistant Deputy for Horticultural Agribusiness 
                            Development Yuli Sri Wilanti together with Garut Regent Rudy Gunawan and AgriFast 
                            Logistics signed a Memorandum of Understanding (MoU) on Cooperation in the Delivery 
                            of Agricultural Products and Mode-Based MSME Products Train and Other Supporting Modes, at the Garut Regency Hall.</p>
                        <p>The synergy was marked by the implementation of the pilot delivery of agricultural 
                            products from Poktan Eptilu through AgriFast Logistics the day before. The products 
                            sent were 480 kilograms of vegetables which were sent to Paskomnas and Eden Farm.</p> <br><br>
                        <h4 class="mb-3">Seed Logistics Building a Progressive, Independent and Sustainable Seed System</h4>
                        <img class="img-fluid w-50 float-left mr-4 mb-2" src="<?= base_url('assets/img/blog-2.jpg')?>">
                        <p>The development of seed logistics is part of efforts to increase production, added value and competitiveness of plantations. 
                            The development of seed logistics must be carried out because so far many seeds are produced outside the development area. 
                            Therefore, the government sends various seeds throughout Indonesia through AgriFast. 
                            With conditions like this, it is difficult for people to get quality seeds. 
                            As a result, the adoption rate of Good Agricultural Practices/technical culture 
                            standards for cultivation is low. With the development of seed logistics, 
                            it is hoped that seeds will be produced in or around the plantation development area. 
                            Shipping costs and the risk of seed spoilage are low. The plan is that by 2024 there 
                            will be 150 nurseries and modern seed source gardens for rubber, coffee, cocoa, coconut, nutmeg, pepper, cloves, sugar cane, cashew.</p>
                        <h5 class="mb-3">The Policy of the Minister of Agriculture to Build Large-Scale Food Logistics Begins to Be Realized</h5>
                        <img class="img-fluid w-50 float-right ml-4 mb-2" src="<?= base_url('assets/img/blog-1.jpg')?>">
                        <p>The policy of the Minister of Agriculture in developing food logistics, especially 
                            large-scale horticultural commodities in order to accelerate exports, has begun 
                            to materialize. The Ministry of Agriculture together with investors and business 
                            actors assisted by AgriFast Shipping Services designed to build warehouses and 
                            wholesalers in big cities such as Surabaya, Semarang, Makassar, Banjarmasin, Medan 
                            and others. Products containing fruit, vegetables and other local Indonesian products 
                            are planned to be sent to Indonesian warehouses and wholesalers overseas such as Singapore, 
                            Malaysia, China, Hong Kong, Japan and others. Currently, the focus of the warehouse is at Suncity Biz Sidoarjo.
                        </p>
                    </div>
                </div>
                <!-- Blog Detail End -->

                <!-- Comment List Start -->
                <div class="bg-secondary" style="padding: 30px; margin-bottom: 30px;">
                    <h3 class="mb-4">3 Comments</h3>
                    <div class="media mb-4">
                        <img src="<?= base_url('assets/img/testimonial-1.jpg')?>" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                        <div class="media-body">
                            <h6><a href="">Mr. Steven</a> <small><i>07 May 2022</i></small></h6>
                            <p>Wow great news! Keep the spirit AgriFast Logistics.</p>
                            <button class="btn btn-sm btn-light">Reply</button>
                        </div>
                    </div>
                    <div class="media">
                        <img src="<?= base_url('assets/img/testimonial-2.jpg')?>" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                        <div class="media-body">
                            <h6><a href="">Mr. Joseph</a> <small><i>08 May 2022 at 10:00pm</i></small></h6>
                            <p>Wow good news! I hope Indonesia's agriculture will get better.</p>
                            <button class="btn btn-sm btn-light">Reply</button>
                            <div class="media mt-4">
                                <img src="<?= base_url('assets/img/testimonial-3.jpg')?>" alt="Image" class="img-fluid mr-3 mt-1"
                                    style="width: 45px;">
                                <div class="media-body">
                                    <h6><a href="">Mr. Hendrick</a> <small><i>09 Jan 2045 at 09:00am</i></small></h6>
                                    <p>Good news for Indonesia. Hope everything goes according to plan. Spirit!</p>
                                    <button class="btn btn-sm btn-light">Reply</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Comment List End -->

                <!-- Comment Form Start -->
                <div class="bg-secondary mb-3" style="padding: 30px;">
                    <h3 class="mb-4">Leave a comment</h3>
                    <form>
                        <div class="form-group">
                            <label for="name">Name *</label>
                            <input type="text" class="form-control border-0" id="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="email" class="form-control border-0" id="email">
                        </div>
                        <div class="form-group">
                            <label for="website">Website</label>
                            <input type="url" class="form-control border-0" id="website">
                        </div>

                        <div class="form-group">
                            <label for="message">Message *</label>
                            <textarea id="message" cols="30" rows="5" class="form-control border-0"></textarea>
                        </div>
                        <div class="form-group mb-0">
                            <input type="submit" value="Leave a comment"
                                class="btn btn-success font-weight-semi-bold py-2 px-3">
                        </div>
                    </form>
                </div>
                <!-- Comment Form End -->
            </div>

            <!-- Sidebar Start -->
            <div class="col-lg-4 mt-5 mt-lg-0">
                <!-- Search Form Start -->
                <div class="mb-5">
                    <div class="bg-secondary" style="padding: 30px;">
                        <div class="input-group">
                            <input type="text" class="form-control border-0 p-4" placeholder="Keyword">
                            <div class="input-group-append">
                                <span class="input-group-text bg-success border-success text-white"><i
                                        class="fa fa-search"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Search Form End -->

                <!-- Category Start -->
                <div class="mb-5">
                    <h3 class="mb-4">Categories</h3>
                    <div class="bg-secondary" style="padding: 30px;">
                        <ul class="list-inline m-0">
                            <li class="mb-1 py-2 px-3 bg-light d-flex justify-content-between align-items-center">
                                <a class="text-dark" href="#"><i class="fa fa-angle-right text-success mr-2"></i>Web Design</a>
                                <span class="badge badge-secondary badge-pill">150</span>
                            </li>
                            <li class="mb-1 py-2 px-3 bg-light d-flex justify-content-between align-items-center">
                                <a class="text-dark" href="#"><i class="fa fa-angle-right text-success mr-2"></i>Web Development</a>
                                <span class="badge badge-secondary badge-pill">131</span>
                            </li>
                            <li class="mb-1 py-2 px-3 bg-light d-flex justify-content-between align-items-center">
                                <a class="text-dark" href="#"><i class="fa fa-angle-right text-success mr-2"></i>Online Marketing</a>
                                <span class="badge badge-secondary badge-pill">78</span>
                            </li>
                            <li class="mb-1 py-2 px-3 bg-light d-flex justify-content-between align-items-center">
                                <a class="text-dark" href="#"><i class="fa fa-angle-right text-success mr-2"></i>Keyword Research</a>
                                <span class="badge badge-secondary badge-pill">56</span>
                            </li>
                            <li class="py-2 px-3 bg-light d-flex justify-content-between align-items-center">
                                <a class="text-dark" href="#"><i class="fa fa-angle-right text-success mr-2"></i>Email Marketing</a>
                                <span class="badge badge-secondary badge-pill">98</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Category End -->

                <!-- Recent Post Start -->
                <div class="mb-5">
                    <h3 class="mb-4">Recent Post</h3>
                    <div class="d-flex mb-3">
                        <img class="img-fluid" src="<?= base_url('assets/img/blog1.png')?>" style="width: 80px; height: 80px; object-fit: cover;" alt="">
                        <a href="" class="d-flex align-items-center bg-secondary text-dark text-decoration-none px-3" style="height: 80px;">
                            Strengthening the Distribution System of Agriculture and...
                        </a>
                    </div>
                    <div class="d-flex mb-3">
                        <img class="img-fluid" src="<?= base_url('assets/img/blog-2.jpg')?>" style="width: 80px; height: 80px; object-fit: cover;" alt="">
                        <a href="" class="d-flex align-items-center bg-secondary text-dark text-decoration-none px-3" style="height: 80px;">
                            Seed Logistics Building a Progressive, Independent and Sustainable...
                        </a>
                    </div>
                    <div class="d-flex mb-3">
                        <img class="img-fluid" src="<?= base_url('assets/img/blog-1.jpg')?>" style="width: 80px; height: 80px; object-fit: cover;" alt="">
                        <a href="" class="d-flex align-items-center bg-secondary text-dark text-decoration-none px-3" style="height: 80px;">
                            The Policy of the Minister of Agriculture to Build Large-Scale Food Logistics...
                        </a>
                    </div>
                    <div class="d-flex mb-3">
                        <img class="img-fluid" src="<?= base_url('assets/img/storage.jpg')?>" style="width: 80px; height: 80px; object-fit: cover;" alt="">
                        <a href="" class="d-flex align-items-center bg-secondary text-dark text-decoration-none px-3" style="height: 80px;">
                            Together with AgriFast, Logistics Management in the Fresh Food Products..
                        </a>
                    </div>
                    <div class="d-flex mb-3">
                        <img class="img-fluid" src="<?= base_url('assets/img/agri-logistics.jpg')?>" style="width: 80px; height: 80px; object-fit: cover;" alt="">
                        <a href="" class="d-flex align-items-center bg-secondary text-dark text-decoration-none px-3" style="height: 80px;">
                            More than 50 million AgriFast Users Leave Positive Comments and...
                        </a>
                    </div>
                </div>
                <!-- Recent Post End -->

                <!-- Image Start -->
                <div class="mb-5">
                    <img src="<?= base_url('assets/img/blog1.png')?>" alt="" class="img-fluid">
                </div>
                <!-- Image End -->

                <!-- Tags Start -->
                <div class="mb-5">
                    <h3 class="mb-4">Tag Cloud</h3>
                    <div class="d-flex flex-wrap m-n1">
                        <a href="" class="btn btn-secondary m-1">Design</a>
                        <a href="" class="btn btn-secondary m-1">Development</a>
                        <a href="" class="btn btn-secondary m-1">Marketing</a>
                        <a href="" class="btn btn-secondary m-1">SEO</a>
                        <a href="" class="btn btn-secondary m-1">Writing</a>
                        <a href="" class="btn btn-secondary m-1">Consulting</a>
                    </div>
                </div>
                <!-- Tags End -->

                <!-- Image Start -->
                <div class="mb-5">
                    <img src="<?= base_url('assets/img/blog-2.jpg')?>" alt="" class="img-fluid">
                </div>
                <!-- Image End -->

                <!-- Plain Text Start -->
                <div>
                    <h3 class="mb-4">Plain Text</h3>
                    <div class="bg-secondary text-center" style="padding: 30px;">
                        <p>The development of seed logistics is part of efforts to increase production, added value and competitiveness of plantations. The development of seed logistics must be carried out because so far many seeds are produced outside the development area. Therefore, the government sends various seeds throughout Indonesia through AgriFast.</p>
                        <a href="" class="btn btn-success py-2 px-4">Read More</a>
                    </div>
                </div>
                <!-- Plain Text End -->
            </div>
            <!-- Sidebar End -->
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
                        <p><i class="fa fa-map-marker-alt mr-2"></i>Jagakarsa, Jakarta, Indonesia/p>
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