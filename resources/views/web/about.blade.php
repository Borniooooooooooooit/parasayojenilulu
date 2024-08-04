<!-- /*
* Template Name: Blogy
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="author" content="Untree.co" />
        <link rel="shortcut icon" href="favicon.png" />

        <meta name="description" content="" />
        <meta name="keywords" content="bootstrap, bootstrap5" />

        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600;700&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="{{url('user/fonts/icomoon/style.css')}}" />
        <link rel="stylesheet" href="{{url('user/fonts/flaticon/font/flaticon.css')}}" />

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" />

        <link rel="stylesheet" href="{{url('user/css/tiny-slider.css')}}" />
        <link rel="stylesheet" href="{{url('user/css/aos.css')}}" />
        <link rel="stylesheet" href="{{url('user/css/glightbox.min.css')}}" />
        <link rel="stylesheet" href="{{url('user/css/style.css')}}" />

        <link rel="stylesheet" href="{{url('user/css/flatpickr.min.css')}}" />

        <title>Blogy &mdash; Free Bootstrap 5 Website Template by Untree.co</title>
    </head>
    <body>
        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close">
                    <span class="icofont-close js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        <!-- Start Header Design -->
        <nav class="site-nav">
            <div class="container">
                <div class="menu-bg-wrap">
                    <div class="site-navigation">
                        <div class="row g-0 align-items-center">
                            <div class="col-2">
                                <a href="index.html" class="logo m-0 float-start">E-Blog MO<span class="text-primary">.</span></a>
                            </div>
                            <div class="col-8 text-center">
                                <form action="#" class="search-form d-inline-block d-lg-none">
                                    <input type="text" class="form-control" placeholder="Search..." />
                                    <span class="bi-search"></span>
                                </form>

                                <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto">
                                    <li><a href="{{url('/')}}">Home</a></li>
                                    <li class="has-children">
                                        <a href="{{url('#')}}">Category</a>
                                        <ul class="dropdown">
                                            <li><a href="{{url('educ')}}">Education</a></li>
                                            <li><a href="{{url('life')}}">Lifestyle</a></li>
                                            <li><a href="{{url('news')}}">News</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{url('blog')}}">Blog</a></li>
                                    <li class="active"><a href="{{url('#')}}">About</a></li>
                                </ul>
                            </div>
                            <div class="col-2 text-end">
                                <a href="#" class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light">
                                    <span></span>
                                </a>
                                <form action="#" class="search-form d-none d-lg-inline-block">
                                    <input type="text" class="form-control" placeholder="Search..." />
                                    <span class="bi-search"></span>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- End Header Design -->

        <!-- Start About us Design -->
        <div class="site-cover site-cover-sm same-height overlay single-page" style="background-image: url('user/images/5.jpg');">
            <div class="container">
                <div class="row same-height justify-content-center">
                    <div class="col-md-6">
                        <div class="post-entry text-center">
                            <h1 class="mb-4">About Us</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End About us Design -->

        <!-- Start Team Design -->
        <div class="section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-5 mx-auto text-center" data-aos="fade-up">
                        <h2 class="heading text-primary">Group Six</h2>
                        <p>Advanced Programming - Final Project</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 mb-4 text-center" data-aos="fade-up" data-aos-delay="0">
                        <img src="{{url('user/images/1.jpg')}}" alt="Image" class="img-fluid w-50 rounded-circle mb-3" />
                        <h5 class="text-black">Sheryn Mae V. Aguado</h5>
                        <p>
                            GROUP LEADER <br />
                            "If God is for us, who can be against us?" <br />
                            Romans 8:31
                        </p>
                    </div>
                    <div class="col-lg-6 mb-4 text-center" data-aos="fade-up" data-aos-delay="200">
                        <img src="{{url('user/images/3.jpg')}}" alt="Image" class="img-fluid w-50 rounded-circle mb-3" />
                        <h5 class="text-black">Bornio Asley G. Nuqui</h5>
                        <p>GROUP MEMBER</p>
                    </div>

                    <div class="col-lg-6 mb-4 text-center" data-aos="fade-up" data-aos-delay="0">
                        <img src="{{url('user/images/4.jpg')}}" alt="Image" class="img-fluid w-50 rounded-circle mb-3" />
                        <h5 class="text-black">Joshua S. Catabay</h5>
                        <p>GROUP MEMBER</p>
                    </div>
                    <div class="col-lg-6 mb-4 text-center" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{url('user/images/2.jpg')}}" alt="Image" class="img-fluid w-50 rounded-circle mb-3" />
                        <h5 class="text-black">Maria Angelica D. Garcia</h5>
                        <p>GROUP MEMBER</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Team Design -->

        <!-- Start Footer Design-->
        <footer class="site-footer">
            <div class="container">
                <!-- 
		  **==========
		  NOTE: 
		  Please don't remove this copyright link unless you buy the license here https://untree.co/license/  
		  **==========
		-->

                <p>
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script>
                    . All Rights Reserved. &mdash; Designed with love by Group 6. Distributed by <a href="https://themewagon.com">ThemeWagon</a>
                    <!-- License information: https://untree.co/license/ -->
                </p>
            </div>
            <!-- /.container -->
        </footer>
        <!-- End Footer Design -->

        <!-- Preloader -->
        <div id="overlayer"></div>
        <div class="loader">
            <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>

        <script src="{{url('user/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{url('user/js/tiny-slider.js')}}"></script>

        <script src="{{url('user/js/flatpickr.min.js')}}"></script>

        <script src="{{url('user/js/aos.js')}}"></script>
        <script src="{{url('user/js/glightbox.min.js')}}"></script>
        <script src="{{url('user/js/navbar.js')}}"></script>
        <script src="{{url('user/js/counter.js')}}"></script>
        <script src="{{url('user/js/custom.js')}}"></script>
    </body>
</html>
