@extends('homepage.layouts.app')
 
@section('title', 'Homepage')
 
@section('content')
       
        @include('homepage.includes.nav')

        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
             <div class="masthead-subheading">Welcome To HELMETOLOGY</div>
                <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a>
            </div>
        </header>
        
<!-- Announcement Section-->
<section class="page-section" id="Announcement"> 
    <div class="container">
    <div class="text-center">
            <h2 class="fst-italic badge bg-primary text-wrap section-heading text-uppercase">Annou</h2>
    </div>
    <div class="carousel" data-flickity='{ "autoPlay": true }'>
    @foreach ($sliders as $sliderItems)
        <div class="carousel-cell" style="background-image: url({{ asset($sliderItems->image)}})"></div>
    @endforeach
    </div>
    </div>

        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">PRODUCT BRANDS</h2>
                    <h3 class="section-subheading text-muted">HELMETOLOGY SERVE YOU THE BEST QUALITY HELMET</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/1.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">EVO</div>
                                <div class="portfolio-caption-subheading text-muted">HELMET</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/2.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">SPYDER</div>
                                <div class="portfolio-caption-subheading text-muted">HELMET</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/3.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">KYT</div>
                                <div class="portfolio-caption-subheading text-muted">HELMET</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/4.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">GILLE</div>
                                <div class="portfolio-caption-subheading text-muted">HELMET</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/5.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">RYZEN</div>
                                <div class="portfolio-caption-subheading text-muted">HELMET</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/6.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">SEC</div>
                                <div class="portfolio-caption-subheading text-muted">HELMET</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- LOCATION-->
        <section class="page-section bg-light" id="team">
            <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9374.018493725749!2d125.5271887825243!3d8.945469421111776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3301c12f307efdb9%3A0x672fe5c6af1494de!2sHelmetology%20Butuan!5e0!3m2!1sen!2sph!4v1675183986392!5m2!1sen!2sph" width="1469" height="720" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" ></iframe>
            </div>
        </section>
   <!-- Footer-->
 <footer class="footer py-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website</div>
            <div class="col-lg-4 my-3 my-lg-0">
                <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
            </div>
        </div>
    </div>
</footer>

        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">EVO HELMET</h2>
                                    <p class="item-intro text-muted">EVO GT-PRO Valiant II Full Face Dual Visor Helmet Motorcycle With Free Clear Lens</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/1.jpg" alt="..." />
                                    <p>Features:
                                        • DOT Certified (American Standard)
                                        • ICC Certified
                                        • ABS Composite Shell
                                        • Dual Visor Technology
                                        • Dura-flex washable foam set
                                        • Aerodynamic vents</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>PRICE:</strong>
                                            ₱3,800.00
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            HELMET
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">SPYDER</h2>
                                    <p class="item-intro text-muted">Spyder Official Store

                                        Brand New Item
                                        
                                        Authentic Spyder Product</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/2.jpg" alt="..." />
                                    <p>FEATURES:
                                          Polycarbonate Distortion Free Visor
                                        • Quick Release Retention System
                                        • Dual Visor
                                        • ECE Rated, with ICC Sticker
                                        • Dual Density EPS Liner
                                        • Cooling Aero Vents
                                        • Removable and Washable Lining
                                        • Quick Release Visor
                                        • Weight : 1550g.
                                        </p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>PRICE:</strong>
                                            ₱4,800.00
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            HELMET
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">KYT</h2>
                                    <p class="item-intro text-muted">Integral Motorcycle Helmet KYT NF-R STEEL</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/3.jpg" alt="..." />
                                    <p>Safety:

                                        Shell produced in ADT-advanced, a mix of thermoplastic resins with high impact resistance. The NF-R shell is produced in two sizes: M and L.
                                        Number of shell sizes: 2
                                        Micrometric quick release closure
                                        Approval: ECE 22.05
                                        Weight: 1500 +/- 50gr</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>PRICE:</strong>
                                            ₱9,784.14
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            HELMET
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 4 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">GILLE</h2>
                                    <p class="item-intro text-muted">Gille Squadron Solid Full Face Dual Sports Convertible to Half Face, Single Visor Motorcycle Helmet</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/4.jpg" alt="..." />
                                    <p>Product Description
                                        - Action Camera Ready
                                        
                                        - With freebie (2) Iridium Silver lens
                                        
                                        - Single visor
                                        
                                        - Convertible to Half Face
                                        
                                        - Dual Sports</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>PRICE:</strong>
                                            ₱4,100 - ₱4,299
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            HELMET
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 5 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">RYZEN</h2>
                                    <p class="item-intro text-muted">RYZEN ZX550 Mono Color Single Visor Helmet
                                    </p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/5.jpg" alt="..." />
                                    <p>RYZEN ZX550 FULL FACE HELMET WITH SINGLE VISOR
                                        * FULL-FACED
                                        * SMOKE LENS
                                        * SINGLE VISOR
                                        * ECE CERTIFIED (EUROPEAN STANDARD)
                                        * ICC CERTIFIED HELMET</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>PRICE:</strong>
                                            ₱2,800

                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            HELMET
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 6 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">SEC</h2>
                                    <p class="item-intro text-muted">SEC Whirlwind-Runner Modular Helmet</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/6.jpg" alt="..." />
                                    <p>We provide clear pictures, measurements where possible. Please check as much as possible to make sure the item is the one that you need.



                                        2. Installation Instructions is not included. Professional Installation Is Highly Recommended!
                                        
                                        
                                        
                                        3. The color of the actual items may slightly different from the listing images due to different computer screen, thanks for your understanding.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>PRICE:</strong>
                                            ₱2,999
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            HELMET
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     
@endsection