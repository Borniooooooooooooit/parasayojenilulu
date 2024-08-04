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
                                    <li class="active"><a href="{{url('#')}}">Home</a></li>
                                    <li class="has-children">
                                        <a href="{{url('#')}}">Category</a>
                                        <ul class="dropdown">
                                            <li><a href="{{url('educ')}}">Education</a></li>
                                            <li><a href="{{url('life')}}">Lifestyle</a></li>
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

        <!-- Start all latest blog posts -->
        <section class="section bg-light">
            <div class="container">
                <div class="row align-items-stretch retro-layout">
                    <div class="col-md-4">
                        <a href="single.html" class="h-entry mb-30 v-height gradient">
                            <div class="featured-img" style="background-image: url('user/images/img_2_horizontal.jpg');"></div>

                            <div class="text">
                                <span class="date">Apr. 14th, 2022</span>
                                <h2>AI can now kill those annoying cookie pop-ups</h2>
                            </div>
                        </a>
                        <a href="single.html" class="h-entry v-height gradient">
                            <div class="featured-img" style="background-image: url('user/images/img_5_horizontal.jpg');"></div>

                            <div class="text">
                                <span class="date">Apr. 14th, 2022</span>
                                <h2>Don’t assume your user data in the cloud is safe</h2>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="single.html" class="h-entry img-5 h-100 gradient">
                            <div class="featured-img" style="background-image: url('user/images/img_1_vertical.jpg');"></div>

                            <div class="text">
                                <span class="date">Apr. 14th, 2022</span>
                                <h2>Why is my internet so slow?</h2>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="single.html" class="h-entry mb-30 v-height gradient">
                            <div class="featured-img" style="background-image: url('user/images/img_3_horizontal.jpg');"></div>

                            <div class="text">
                                <span class="date">Apr. 14th, 2022</span>
                                <h2>Startup vs corporate: What job suits you best?</h2>
                            </div>
                        </a>
                        <a href="single.html" class="h-entry v-height gradient">
                            <div class="featured-img" style="background-image: url('user/images/img_4_horizontal.jpg');"></div>

                            <div class="text">
                                <span class="date">Apr. 14th, 2022</span>
                                <h2>Thought you loved Python? Wait until you meet Rust</h2>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End all latest blog posts -->

        <!-- Start latest posts-entry Education-->
        <section class="section posts-entry">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-sm-6">
                        <h2 class="posts-entry-title">Education</h2>
                    </div>
                    <div class="col-sm-6 text-sm-end"><a href="category.html" class="read-more">View All</a></div>
                </div>
                <div class="row">
                    <div class="col-lg-4 mb-4">
                        <div class="blog-entry">
                            <a href="single.html" class="img-link">
                                <img src="{{url('user/images/img_1_sq.jpg')}}" alt="Image" class="img-fluid" />
                            </a>
                            <span class="date">Apr. 14th, 2022</span>
                            <h2><a href="single.html">Thought you loved Python? Wait until you meet Rust</a></h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel voluptas.</p>
                            <p><a href="single.html" class="btn btn-sm btn-outline-primary">Read More</a></p>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="blog-entry">
                            <a href="single.html" class="img-link">
                                <img src="{{url('user/images/img_2_sq.jpg')}}" alt="Image" class="img-fluid" />
                            </a>
                            <span class="date">Apr. 14th, 2022</span>
                            <h2><a href="single.html">Startup vs corporate: What job suits you best?</a></h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel voluptas.</p>
                            <p><a href="single.html" class="btn btn-sm btn-outline-primary">Read More</a></p>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="blog-entry">
                            <a href="single.html" class="img-link">
                                <img src="{{url('user/images/img_1_sq.jpg')}}" alt="Image" class="img-fluid" />
                            </a>
                            <span class="date">Apr. 14th, 2022</span>
                            <h2><a href="single.html">Thought you loved Python? Wait until you meet Rust</a></h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel voluptas.</p>
                            <p><a href="single.html" class="btn btn-sm btn-outline-primary">Read More</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End latest posts-entry Education -->

        <!-- Start latest posts-entry Lifestyle-->
        <section class="section posts-entry posts-entry-sm bg-light">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-sm-6">
                        <h2 class="posts-entry-title">Lifestyle</h2>
                    </div>
                    <div class="col-sm-6 text-sm-end"><a href="category.html" class="read-more">View All</a></div>
                </div>

                <div class="row">
                    <div class="col-lg-4 mb-6">
                        <div class="post-entry-alt">
                            <a href="single.html" class="img-link"><img src="{{url('user/images/img_7_horizontal.jpg')}}" alt="Image" class="img-fluid" /></a>
                            <div class="excerpt">
                                <h2><a href="single.html">Startup vs corporate: What job suits you best?</a></h2>
                                <div class="post-meta align-items-center text-left clearfix">
                                    <figure class="author-figure mb-0 me-3 float-start"><img src="{{url('user/images/person_1.jpg')}}" alt="Image" class="img-fluid" /></figure>
                                    <span class="d-inline-block mt-1">By <a href="#">David Anderson</a></span>
                                    <span>&nbsp;-&nbsp; July 19, 2019</span>
                                </div>

                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor laudantium sed optio, explicabo ad deleniti impedit facilis fugit recusandae! Illo, aliquid, dicta beatae quia porro id
                                    est.
                                </p>
                                <p><a href="#" class="read-more">Continue Reading</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="post-entry-alt">
                            <a href="single.html" class="img-link"><img src="{{url('user/images/img_6_horizontal.jpg')}}" alt="Image" class="img-fluid" /></a>
                            <div class="excerpt">
                                <h2><a href="single.html">Startup vs corporate: What job suits you best?</a></h2>
                                <div class="post-meta align-items-center text-left clearfix">
                                    <figure class="author-figure mb-0 me-3 float-start"><img src="{{url('user/images/person_2.jpg')}}" alt="Image" class="img-fluid" /></figure>
                                    <span class="d-inline-block mt-1">By <a href="#">David Anderson</a></span>
                                    <span>&nbsp;-&nbsp; July 19, 2019</span>
                                </div>

                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor laudantium sed optio, explicabo ad deleniti impedit facilis fugit recusandae! Illo, aliquid, dicta beatae quia porro id
                                    est.
                                </p>
                                <p><a href="#" class="read-more">Continue Reading</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="post-entry-alt">
                            <a href="single.html" class="img-link"><img src="{{url('user/images/img_5_horizontal.jpg')}}" alt="Image" class="img-fluid" /></a>
                            <div class="excerpt">
                                <h2><a href="single.html">Startup vs corporate: What job suits you best?</a></h2>
                                <div class="post-meta align-items-center text-left clearfix">
                                    <figure class="author-figure mb-0 me-3 float-start"><img src="{{url('user/images/person_3.jpg')}}" alt="Image" class="img-fluid" /></figure>
                                    <span class="d-inline-block mt-1">By <a href="#">David Anderson</a></span>
                                    <span>&nbsp;-&nbsp; July 19, 2019</span>
                                </div>

                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor laudantium sed optio, explicabo ad deleniti impedit facilis fugit recusandae! Illo, aliquid, dicta beatae quia porro id
                                    est.
                                </p>
                                <p><a href="#" class="read-more">Continue Reading</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-4">
                        <div class="post-entry-alt">
                            <a href="single.html" class="img-link"><img src="{{url('user/images/img_4_horizontal.jpg')}}" alt="Image" class="img-fluid" /></a>
                            <div class="excerpt">
                                <h2><a href="single.html">Startup vs corporate: What job suits you best?</a></h2>
                                <div class="post-meta align-items-center text-left clearfix">
                                    <figure class="author-figure mb-0 me-3 float-start"><img src="{{url('user/images/person_4.jpg')}}" alt="Image" class="img-fluid" /></figure>
                                    <span class="d-inline-block mt-1">By <a href="#">David Anderson</a></span>
                                    <span>&nbsp;-&nbsp; July 19, 2019</span>
                                </div>

                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor laudantium sed optio, explicabo ad deleniti impedit facilis fugit recusandae! Illo, aliquid, dicta beatae quia porro id
                                    est.
                                </p>
                                <p><a href="#" class="read-more">Continue Reading</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="post-entry-alt">
                            <a href="single.html" class="img-link"><img src="{{url('user/images/img_3_horizontal.jpg')}}" alt="Image" class="img-fluid" /></a>
                            <div class="excerpt">
                                <h2><a href="single.html">Startup vs corporate: What job suits you best?</a></h2>
                                <div class="post-meta align-items-center text-left clearfix">
                                    <figure class="author-figure mb-0 me-3 float-start"><img src="{{url('user/images/person_5.jpg')}}" alt="Image" class="img-fluid" /></figure>
                                    <span class="d-inline-block mt-1">By <a href="#">David Anderson</a></span>
                                    <span>&nbsp;-&nbsp; July 19, 2019</span>
                                </div>

                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor laudantium sed optio, explicabo ad deleniti impedit facilis fugit recusandae! Illo, aliquid, dicta beatae quia porro id
                                    est.
                                </p>
                                <p><a href="#" class="read-more">Continue Reading</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="post-entry-alt">
                            <a href="single.html" class="img-link"><img src="{{url('user/images/img_2_horizontal.jpg')}}" alt="Image" class="img-fluid" /></a>
                            <div class="excerpt">
                                <h2><a href="single.html">Startup vs corporate: What job suits you best?</a></h2>
                                <div class="post-meta align-items-center text-left clearfix">
                                    <figure class="author-figure mb-0 me-3 float-start"><img src="{{url('user/images/person_4.jpg')}}" alt="Image" class="img-fluid" /></figure>
                                    <span class="d-inline-block mt-1">By <a href="#">David Anderson</a></span>
                                    <span>&nbsp;-&nbsp; July 19, 2019</span>
                                </div>

                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor laudantium sed optio, explicabo ad deleniti impedit facilis fugit recusandae! Illo, aliquid, dicta beatae quia porro id
                                    est.
                                </p>
                                <p><a href="#" class="read-more">Continue Reading</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End latest posts-entry Lifestyle -->

        <!-- Start latest posts-entry News-->
        <div class="section posts-entry">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-sm-6">
                        <h2 class="posts-entry-title">News</h2>
                    </div>
                    <div class="col-sm-6 text-sm-end"><a href="category.html" class="read-more">View All</a></div>
                </div>

                <div class="row align-items-stretch retro-layout-alt">
                    <div class="two-col d-block d-md-flex justify-content-between">
                        <a href="single.html" class="hentry v-height img-2 gradient">
                            <div class="featured-img" style="background-image: url('user/images/img_2_sq.jpg');"></div>
                            <div class="text text-sm">
                                <span>February 12, 2019</span>
                                <h2>Don’t assume your user data in the cloud is safe</h2>
                            </div>
                        </a>
                        <a href="single.html" class="hentry v-height img-2 ms-auto float-end gradient">
                            <div class="featured-img" style="background-image: url('user/images/img_3_sq.jpg');"></div>
                            <div class="text text-sm">
                                <span>February 12, 2019</span>
                                <h2>Startup vs corporate: What job suits you best?</h2>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start latest posts-entry News-->

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
