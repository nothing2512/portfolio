<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Portfolio | Maintenance</title>

    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes"/>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <!-- Favicon
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ portfolio("img/apple-touch-icon.png") }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ portfolio("img/favicon.png") }}">

    <!-- Stylesheets
    ================================================== -->
    <!-- Bootstrap core CSS -->
    <link href="{{ admin("css/bootstrap/bootstrap.min.css") }}" rel="stylesheet">
    <link href="{{ portfolio("css/bootstrap.min.css") }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ portfolio("css/style.css") }}" rel="stylesheet">
    <link href="{{ portfolio("css/responsive.css") }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
    <script src="{{ portfolio("js/html5shiv.js") }}"></script>
    <script src="{{ portfolio("js/respond.min.js") }}"></script>
    <![endif]-->

    <style>
        .center-screen {
            height: 100%;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .border {
            border: 3px !important;
            position: relative;
        }

        .border::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 77%;
            height: 100%;
            border-bottom: 7px solid #dee2e6;
            border-top: 7px solid #dee2e6;
            border-left: 7px solid #dee2e6;
        }

        .border::after {
            content: '';
            position: absolute;
            bottom: 0;
            right: 0;
            width: 46.3%;
            height: 100%;
            border-bottom: 7px solid #ffffff;
            border-top: 7px solid #ffffff;
            border-right: 7px solid #ffffff;
        }

        .border-sm::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 77%;
            height: 100%;
            border-bottom: 3px solid #dee2e6;
            border-top: 3px solid #dee2e6;
            border-left: 3px solid #dee2e6;
        }

        .border-sm::after {
            content: '';
            position: absolute;
            bottom: 0;
            right: 0;
            width: 46.3%;
            height: 100%;
            border-bottom: 3px solid #ffffff;
            border-top: 3px solid #ffffff;
            border-right: 3px solid #ffffff;
        }

        .text-maintenance {
            font-size: 52pt;
            font-weight: bold;
        }
    </style>

</head>
<body>

<header id="masthead" class="site-header" data-anchor-target=".hero"
        data-top="background: rgba(255,255,255,0); padding: 30px 0; box-shadow: 0px 0px 20px 6px rgba(0, 0, 0, 0);"
        data-top-bottom="background: rgba(255,255,255,1); padding: 10px 0; box-shadow: 0px 0px 20px 6px rgba(0, 0, 0, 0.2);" style="padding: 30px">
    <nav id="primary-navigation" class="site-navigation">
        <div class="container">
            <div class="navbar-header page-scroll">

                <button type="button" class="navbar-toggle collapsed" data-target="#portfolio-perfect-collapse"
                        aria-expanded="false">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a href="#hero" class="site-logo">
                    {{--                    <img src="{{ portfolio("img/logo.png") }}" alt="logo">--}}
                    <h3 class="text-logo">PORTFOLIO</h3>
                </a>

            </div><!-- /.navbar-header -->

        </div>
    </nav><!-- /.primary-navigation -->
</header><!-- /#header -->

<div id="hero" class="hero">
    <div class="container">
        <div class="center-screen">

            <div class="border p-3">
                <div class="border border-sm p-3">
                    <span class="text-maintenance">UNDER MAINTENANCE</span>
                </div>
            </div>

        </div>
    </div>
</div><!-- /.hero -->

{{--<footer id="colophon" class="site-footer">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-sm-4 col-xs-12">--}}
{{--                <a class="custom-icon facebook-bg" href="https://facebook.com/robet.amr">--}}
{{--                    <i class="fab fa-facebook fa-2x"></i>--}}
{{--                </a>--}}
{{--                <a class="custom-icon github-bg" href="https://github.com/nothing2512">--}}
{{--                    <i class="fab fa-github fa-2x"></i>--}}
{{--                </a>--}}
{{--                <a class="custom-icon instagram-bg" href="https://instagram.com/robet.amr">--}}
{{--                    <i class="fab fa-instagram fa-2x"></i>--}}
{{--                </a>--}}
{{--                <a class="custom-icon linkedin-bg" href="{{ $social->linkedin }}">--}}
{{--                    <i class="fab fa-linkedin fa-2x"></i>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="col-sm-4 col-sm-offset-0 col-xs-6 col-xs-offset-3"><p class="copyright">2021. All Rights Reserved</p></div>--}}
{{--            <div class="col-sm-4 col-xs-3">--}}
{{--                <div class="text-right page-scroll">--}}
{{--                    <a class="icon icon-up-bg" href="#hero"><i class="icon-up"></i></a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</footer><!-- /#footer -->--}}

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ portfolio("js/jquery.min.js") }}"></script>
<script src="{{ portfolio("js/bootstrap.min.js") }}"></script>

</body>
</html>
