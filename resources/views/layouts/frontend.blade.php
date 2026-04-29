<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description"
        content="Revive Pinnacle provides advanced home security solutions including smart CCTV cameras, alarm systems, video doorbells, and remote monitoring. Protect your home and family with reliable, modern security technology and 24/7 protection.">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="/frontend/my_img/favicon.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="/frontend/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/frontend/assets/css/meanmenu.css">
    <link rel="stylesheet" href="/frontend/assets/css/animate.css">
    <link rel="stylesheet" href="/frontend/assets/css/swiper-bundle.css">
    <link rel="stylesheet" href="/frontend/assets/css/slick.css">
    <link rel="stylesheet" href="/frontend/assets/css/backtotop.css">
    <link rel="stylesheet" href="/frontend/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="/frontend/assets/css/nice-select.css">
    <link rel="stylesheet" href="/frontend/assets/css/ui-icon.css">
    <link rel="stylesheet" href="/frontend/assets/css/font-awesome-pro.css">
    <link rel="stylesheet" href="/frontend/assets/css/flaticon.css">
    <link rel="stylesheet" href="/frontend/assets/css/spacing.css">
    <link rel="stylesheet" href="/frontend/assets/css/style.css">
    <link rel="stylesheet" href="/frontend/assets/css/my.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.5.1/css/all.css">
</head>

<body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->

    <a href="tel:+18883826410" class="call-float">
        <i class="fa-solid fa-phone"></i>
    </a>

    <!-- pre loader area start -->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <!-- loading content here -->
            </div>
        </div>
    </div>
    <!-- pre loader area end -->

    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- back to top end -->

    <!-- header start -->
    <header>
        <div class="header-notification-area black-bg pt-10 pb-10">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="notification-text text-center">
                            <p class="m-0 head"><b>Limited Time Offer:</b> Talk To Our Security Experts &amp; Get
                                3 Months Free Monitoring Services</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-area-flat pl-25 pr-25">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-6 col-md-5 col-7">
                        <div class="logo">
                            <a href="/" contenteditable="false" style="cursor: pointer;"><img
                                    src="/frontend/my_img/logo.png" alt="logo"
                                    style="width:220px; height:70px;"></a>
                        </div>
                    </div>
                    <div class="col-xl-6 d-none d-xl-block">
                        <div class="tp-main-menu text-center">
                            <nav id="mobile-menu" style="display: block;">
                                <ul>
                                    <li><a href="/" contenteditable="false" style="cursor: pointer;">Home</a></li>
                                    <li><a href="/#about" contenteditable="false" style="cursor: pointer;">About Us</a>
                                    </li>
                                    <li><a href="/#contact" contenteditable="false" style="cursor: pointer;">Contact
                                            Us</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-7 col-5">
                        <div class="search-main p-relative">
                            <div class="tp-header-right">
                                <a href="tel:+18883826410" class="tp-btn-2 ml-20 d-none d-md-inline-block"
                                    contenteditable="false" style="cursor: pointer;">Get In Touch</a>
                                <a href="#" class="tp-menu-toggle tp-header-icon ml-20 d-xl-none"
                                    contenteditable="false" style="cursor: pointer;"><i
                                        class="fa-solid fa-bars"></i></a>
                            </div>
                            <div class="search-form">
                                <form method="GET">

                                    <button type="submit"><i class="fal fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->
    @yield('content')
    <!-- footer-area-start -->
    <footer>
        <div class="footer-widget-area footer-bg pt-50 pb-10">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-6">
                        <div class="logo mb-3">
                            <a href="/" contenteditable="false" style="cursor: pointer;"><img
                                    src="/frontend/my_img/logo.png" alt="logo"
                                    style="width:230px; height:70px;"></a>
                        </div>
                        <div class="footer-widget footer-col-1 mb-50">
                            <p>
                                <b>Revive Pinnacle</b> provides trusted security solutions for homes and
                                businesses.
                                Explore our range of cameras, alarms, and smart safety accessories.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6">
                        <div class="footer-widget footer-col-3 mb-50">
                            <h3 class="footer-widget-title">Main Pages</h3>
                            <ul
                                style="
                            list-style:none;margin:0;padding:0;
                            display:block !important;
                            -webkit-column-count:1 !important; column-count:1 !important;
                            flex-direction:column !important; flex-wrap:nowrap !important;
                            grid-template-columns:none !important;">
                                <li style="display:block !important; width:100% !important; margin:0 0 8px 0;">
                                    <a href="/" contenteditable="false" style="cursor: pointer;">Home</a>
                                </li>
                                <li style="display:block !important; width:100% !important; margin:0 0 8px 0;">
                                    <a href="/#about" contenteditable="false" style="cursor: pointer;">About Us</a>
                                </li>
                                <li style="display:block !important; width:100% !important; margin:0;">
                                    <a href="/#contact" contenteditable="false" style="cursor: pointer;">Contact
                                        Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget footer-col-2 mb-50">
                            <h3 class="footer-widget-title">Get In Touch</h3>
                            <div class="footer-contact">
                                <div class="footer-contact-item">
                                    <!-- <p>
                                    21 Glenside <br>
                                    Annandale, NJ, 08801
                                </p> -->
                                </div>
                                <div class="footer-contact-item">
                                    <p><a href="tel:+18883826410" contenteditable="false"
                                            style="cursor: pointer;">+1(888) 382-6410</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="copyright-area theme-bg pt-20 pb-20">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-7 text-lg-start col-12 text-center">
                        <div class="copyright-text">
                            <p>Copyright © 2026 <a href="https://nextusglobalservices.com/" contenteditable="false"
                                    style="cursor: pointer;"> Nextus Global Services</a> All Rights Reserved.</p>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 text-lg-end col-12 text-center">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="/privacy-policy" contenteditable="false"
                                        style="cursor: pointer;">Privacy Policy</a></li>
                                <li><a href="/terms-and-condition" contenteditable="false"
                                        style="cursor: pointer;">Terms &amp; Condition</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-area-end -->

    <div class="modal fade" id="securityModal" tabindex="-1" aria-labelledby="securityModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content custom-modal text-center">

                <!-- Close Button -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    style="position: absolute; top: 15px; right: 15px;"></button>
                <!-- Logo -->
                <div class="mb-3">
                    <img src="/frontend/my_img/logo.png" alt="Logo" class="modal-logo">
                </div>

                <!-- Title -->
                <h4 class="fw-bold modal-title-text" id="securityModalLabel">Talk To Security Experts</h4>

                <p class="modal-subtext">Get 3 Months Free Monitoring Services</p>

                <!-- Button -->
                <div style="text-align: center; margin-top: 5px;">
                    <a class="tp-btn" href="tel:+18883826410"
                        style="display:inline-block; padding:1px 39px; font-size:19px; width:auto; min-width:80px;">
                        <i class="fa-solid fa-phone"></i> Call Now
                    </a>
                </div>

            </div>
        </div>
    </div>

    <style>
        .custom-modal {
            border-radius: 15px;
            padding: 30px 20px;
            background: linear-gradient(135deg, #ffffff, #f8f9fa);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            animation: fadeInUp 0.5s ease;
        }

        .modal-logo {
            max-width: 180px;
            transition: transform 0.3s ease;
        }

        .modal-logo:hover {
            transform: scale(1.05);
        }

        .modal-title-text {
            font-size: 22px;
            color: #222;
            margin-bottom: 10px;
        }

        .modal-subtext {
            font-size: 16px;
            color: #666;
            margin-bottom: 25px;
        }

        .call-btn:hover {

            transform: translateY(-2px);
        }

        /* Animation */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            setTimeout(function() {
                var myModal = new bootstrap.Modal(document.getElementById('securityModal'));
                myModal.show();
            }, 3000); // Delay for 3000ms = 3 seconds
        });
    </script>



    <!-- JS here -->
    <script src="/frontend/assets/js/vendor/jquery.js"></script>
    <script src="/frontend/assets/js/vendor/waypoints.js"></script>
    <script src="/frontend/assets/js/bootstrap-bundle.js"></script>
    <script src="/frontend/assets/js/meanmenu.js"></script>
    <script src="/frontend/assets/js/slick.js"></script>
    <script src="/frontend/assets/js/magnific-popup.js"></script>
    <script src="/frontend/assets/js/backtotop.js"></script>
    <script src="/frontend/assets/js/nice-select.js"></script>
    <script src="/frontend/assets/js/counterup.js"></script>
    <script src="/frontend/assets/js/isotope-pkgd.js"></script>
    <script src="/frontend/assets/js/imagesloaded-pkgd.js"></script>
    <script src="/frontend/assets/js/ajax-form.js"></script>
    <script src="/frontend/assets/js/main.js"></script>
</body>

</html>
