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
                                    <li class="has-children active">
                                        <a href="{{url('#')}}">Lifestyle</a>
                                        <ul class="dropdown">
                                            <li><a href="{{url('educ')}}">Education</a></li>
                                            <li><a href="{{url('news')}}">News</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{url('blog')}}">Blog</a></li>
                                    <li><a href="{{url('about')}}">About</a></li>
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

        <!-- Start News Blogs Design -->
        <div class="section search-result-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="heading">Category: Lifestyle</div>
                    </div>
                </div>
                <div class="row posts-entry">
                    <div class="col-lg-8">
                        <div class="blog-entry d-flex blog-entry-search-item">
                            <a href="single.html" class="img-link me-4">
                                <img src="{{url('user/images/img_1_sq.jpg')}}" alt="Image" class="img-fluid" />
                            </a>
                            <div>
                                <span class="date">Apr. 14th, 2022 &bullet; <a href="#">Lifestyle</a></span>
                                <h2><a href="single.html">Thought you loved Python? Wait until you meet Rust</a></h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel voluptas.</p>
                                <p><a href="single.html" class="btn btn-sm btn-outline-primary">Read More</a></p>
                            </div>
                        </div>

                        <div class="blog-entry d-flex blog-entry-search-item">
                            <a href="single.html" class="img-link me-4">
                                <img src="{{url('user/images/img_2_sq.jpg')}}" alt="Image" class="img-fluid" />
                            </a>
                            <div>
                                <span class="date">Apr. 14th, 2022 &bullet; <a href="#">Lifestyle</a></span>
                                <h2><a href="single.html">Thought you loved Python? Wait until you meet Rust</a></h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel voluptas.</p>
                                <p><a href="single.html" class="btn btn-sm btn-outline-primary">Read More</a></p>
                            </div>
                        </div>

                        <div class="blog-entry d-flex blog-entry-search-item">
                            <a href="single.html" class="img-link me-4">
                                <img src="{{url('user/images/img_3_sq.jpg')}}" alt="Image" class="img-fluid" />
                            </a>
                            <div>
                                <span class="date">Apr. 14th, 2022 &bullet; <a href="#">Lifestyle</a></span>
                                <h2><a href="single.html">Thought you loved Python? Wait until you meet Rust</a></h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel voluptas.</p>
                                <p><a href="single.html" class="btn btn-sm btn-outline-primary">Read More</a></p>
                            </div>
                        </div>

                        <div class="blog-entry d-flex blog-entry-search-item">
                            <a href="single.html" class="img-link me-4">
                                <img src="{{url('user/images/img_4_sq.jpg')}}" alt="Image" class="img-fluid" />
                            </a>
                            <div>
                                <span class="date">Apr. 14th, 2022 &bullet; <a href="#">Lifestyle</a></span>
                                <h2><a href="single.html">Thought you loved Python? Wait until you meet Rust</a></h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel voluptas.</p>
                                <p><a href="single.html" class="btn btn-sm btn-outline-primary">Read More</a></p>
                            </div>
                        </div>

                        <div class="blog-entry d-flex blog-entry-search-item">
                            <a href="single.html" class="img-link me-4">
                                <img src="{{url('user/images/img_5_sq.jpg')}}" alt="Image" class="img-fluid" />
                            </a>
                            <div>
                                <span class="date">Apr. 14th, 2022 &bullet; <a href="#">Lifestyle</a></span>
                                <h2><a href="single.html">Thought you loved Python? Wait until you meet Rust</a></h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel voluptas.</p>
                                <p><a href="single.html" class="btn btn-sm btn-outline-primary">Read More</a></p>
                            </div>
                        </div>

                        <div class="row text-start pt-5 border-top">
                            <div class="col-md-12">
                                <div class="custom-pagination">
                                    <span>1</span>
                                    <a href="#">2</a>
                                    <a href="#">3</a>
                                    <a href="#">4</a>
                                    <span>...</span>
                                    <a href="#">15</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End News Blogs Design -->

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