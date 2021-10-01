<?php $i = 0; ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Portfolio | {{ $user->name }}</title>

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
    <link href="{{ portfolio("css/bootstrap.min.css") }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ portfolio("css/style.css") }}" rel="stylesheet">
    <link href="{{ portfolio("css/responsive.css") }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
    <script src="{{ portfolio("js/html5shiv.js") }}"></script>
    <script src="{{ portfolio("js/respond.min.js") }}"></script>
    <![endif]-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>

        .skill {
            padding-top: 1rem !important;
        }

        .sp-icon {
            width: 45px;
            height: 45px;
        }

        .social-container {
            display: flex;
            flex-direction: row;
            padding-top: 1rem;
        }

        .social-icon {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            border: 1px solid black;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16pt;
            padding: .5rem;
            margin: .5rem;
        }

        .social-icon:hover {
            background-color: black;
            box-shadow: 0 .5rem .5rem rgba(0,0,0,.15);
        }

        .social-icon:hover a {
            color: white;
        }

        .social-icon a {
            color: black;
        }

        .modal .img-res {
            object-fit: fill;
            height: unset;
        }

        .modal-header {
            height: fit-content;
        }

        .portfolio-item {
            overflow: hidden;
        }

        .portfolio-item img.img-res {
            transition: all .2s;
        }

        .portfolio-item:hover img.img-res {
            transform: scale(1.2);
        }

        .col-md-4.col-xs-6.mb-3 {
            margin-bottom: 1rem;
        }

        .d-none {
            display: none !important;
        }

        .show-more {
            font-weight: bold;
            align-self: center;
            display: inline-flex;
            flex-direction: column;
        }

        .show-more:hover {
            cursor: pointer;
        }

        .show-more:hover:after {
            width: 110%;
            margin-left: -5%;
            border-bottom: 2px solid black;
            transition: all .1s;
        }

        .show-more:after {
            content: '';
            border-bottom: 1px solid black;
            width: 80%;
            margin-left: 10%;
        }
    </style>
</head>
<body>

<header id="masthead" class="site-header" data-anchor-target=".hero"
        data-top="background: rgba(255,255,255,0); padding: 30px 0; box-shadow: 0px 0px 20px 6px rgba(0, 0, 0, 0);"
        data-top-bottom="background: rgba(255,255,255,1); padding: 10px 0; box-shadow: 0px 0px 20px 6px rgba(0, 0, 0, 0.2);">
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
                    <h3 class="text-logo">PORTFOLIO</h3>
                </a>

            </div><!-- /.navbar-header -->

            <div class="main-menu" id="portfolio-perfect-collapse">

                <ul class="nav navbar-nav navbar-right">

                    <li class="page-scroll"><a href="#hero">Home</a></li>
                    <li class="page-scroll"><a href="#about">About</a></li>
                    <li class="page-scroll"><a href="#service">Service</a></li>
                    <li class="page-scroll"><a href="#portfolio">Portfolio</a></li>
                    <li class="page-scroll"><a href="#contact">Contact</a></li>

                </ul><!-- /.navbar-nav -->

            </div><!-- /.navbar-collapse -->

        </div>
    </nav><!-- /.primary-navigation -->
</header><!-- /#header -->

<div id="hero" class="hero">
    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <h1>{{ $user->name }}</h1>
                <div class="page-scroll">
                    <p class="job-title">{{ $user->job }}</p>
                    <a href="#contact" class="btn btn-fill ">Hire me</a>
                    <div class="clearfix visible-xxs"></div>
                    <a href="#portfolio" class="btn btn-border">Explore more</a>
                </div>
                <div class="social-container">

                    <div class="social-icon">
                        <a href="{{ $social->github }}" target="_blank">
                            <i class="fab fa-github-alt"></i>
                        </a>
                    </div>

                    <div class="social-icon">
                        <a href="{{ $social->instagram }}" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>

                    <div class="social-icon">
                        <a href="{{ $social->facebook }}" target="_blank">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </div>

                    <div class="social-icon">
                        <a href="{{ $social->linkedin }}" target="_blank">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>

                </div>
            </div>

            <div class="col-md-6 text-right">
                <img src="{{ $user->cover }}" alt="{{ $user->name }}">
            </div>

        </div>
    </div>
</div><!-- /.hero -->

<main id="main" class="site-main">

    <section id="about" class="site-section section-about text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h2>About</h2>
                    <img src="{{ portfolio("img/lines.svg") }}" class="img-lines" alt="lines">
                    <p>{{ $user->bio }}</p>
                    <a href="{{ $user->cv }}" class="btn btn-fill" target="_blank" download>Download my cv</a>
                </div>
            </div>
        </div>
    </section><!-- /.secton-about -->

    <section class="site-section section-skills">
        <div class="container">
            <div class="text-center">
                <h3>My Skills</h3>
                <img src="{{ portfolio("img/lines.svg") }}" class="img-lines" alt="lines">
            </div>
            <div class="row">

                @foreach($skills as $item)
                    <div class="col-md-4">
                        <div class="skill">
                            <h4>{{ $item->name }}</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-transitiongoal="{{ $item->value }}"></div>
                                <!-- /.progress-bar -->
                            </div><!-- /.progress -->
                        </div><!-- /.skill -->
                    </div>
                @endforeach

            </div>
        </div>
    </section><!-- /.secton-skills -->

    <section id="service" class="site-section section-services overlay text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>What i do</h3>
                    <img src="{{ portfolio("img/lines.svg") }}" class="img-lines" alt="lines">
                </div>

                @foreach($specializations as $item)
                    <div class="col-sm-4">
                        <div class="service">
                            @if($item->iconType == "svg")
                                <embed src="{{ $item->icon }}" class="sp-icon">
                            @else
                                <img src="{{ $item->icon }}" alt="{{ $item->name }}">
                            @endif

                            <h4>{{ $item->title }}</h4>
                            <p>{{ $item->description }}</p>
                        </div><!-- /.service -->
                    </div>
                @endforeach

            </div>
        </div>
    </section><!-- /.secton-services -->

    <section id="portfolio" class="site-section section-portfolio">
        <div class="container">
            <div class="text-center">
                <h3>My recent Works</h3>
                <img src="{{ portfolio("img/lines.svg") }}" class="img-lines" alt="lines">
            </div>
            <div class="row">

                @foreach($projects as $item)
                    <div class="col-md-4 col-xs-6 mb-3 {{ $i < 6 ? '' : 'd-none' }}">
                        <div class="portfolio-item">
                            <img src="{{ $item->image }}" class="img-res" alt="">
                            <div class="portfolio-item-info">
                                <h4>{{ $item->title }}</h4>
                                <a onclick="showModal('{{ json_encode($item) }}')">
                                    <span class="glyphicon glyphicon-eye-open"></span></a>
                                <a href="{{ $item->link }}"><span class="glyphicon glyphicon-link"></span></a>
                            </div><!-- /.portfolio-item-info -->
                        </div><!-- /.portfolio-item -->
                    </div>
                    <?php $i++ ?>
                @endforeach
            </div>

            <div class="text-center">
                <span class="show-more" data-toggle="portfolio">Show More</span>
            </div>
        </div>
    </section><!-- /.secton-portfolio -->

    <section class="site-section section-counters text-center">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <p class="counter start" data-to="{{ $user->experience }}" data-speed="500">0</p>
                    <h4>Years Experience</h4>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <p class="counter start" data-to="{{ $totalProjects }}" data-speed="500">0</p>
                    <h4>Projects Delivered</h4>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <p id="infinity" class="counter" data-from="0" data-to="1" data-speed="1000">0</p>
                    <h4>Seconds on this site!<br>What are you waiting for?</h4>
                </div>
            </div>
        </div>
    </section><!-- /.section-counters -->

    <section id="contact" class="site-section section-form text-center">
        <div class="container">

            <h3>Contact</h3>
            <img src="{{ portfolio("img/lines.svg") }}" class="img-lines" alt="lines">
            <form>
                <div class="row">
                    <div class="col-sm-6">
                        <input type="text" name="name" class="form-control mt-x-0" placeholder="Name" required>
                    </div>
                    <div class="col-sm-6">
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="col-sm-12">
                        <textarea name="message" id="mesaage" class="form-control" placeholder="Message"
                                  required></textarea>
                    </div>
                </div>
                <button href="#" class="btn btn-border" type="submit">Hire Me <span
                        class="glyphicon glyphicon-send"></span></button>
            </form>
        </div>
    </section><!-- /.section-form -->

</main><!-- /#main -->

<footer id="colophon" class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-xs-12">
                <a class="custom-icon facebook-bg" href="{{ $social->facebook }}" target="_blank">
                    <i class="fab fa-facebook fa-2x"></i>
                </a>
                <a class="custom-icon github-bg" href="{{ $social->github }}" target="_blank">
                    <i class="fab fa-github fa-2x"></i>
                </a>
                <a class="custom-icon instagram-bg" href="{{ $social->instagram }}" target="_blank">
                    <i class="fab fa-instagram fa-2x"></i>
                </a>
                <a class="custom-icon linkedin-bg" href="{{ $social->linkedin }}" target="_blank">
                    <i class="fab fa-linkedin fa-2x"></i>
                </a>
            </div>
            <div class="col-sm-4 col-sm-offset-0 col-xs-6 col-xs-offset-3"><p class="copyright">2021. All Rights Reserved</p></div>
            <div class="col-sm-4 col-xs-3">
                <div class="text-right page-scroll">
                    <a class="icon icon-up-bg" href="#hero"><i class="icon-up"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer><!-- /#footer -->

<!-- Modals -->
<div id="portfolio-modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a class="close" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></a>
                <img class="img-res" src="#" alt="" id="portfolio-modal-image">
            </div>
            <div class="modal-body">
                <h4 class="modal-title" id="portfolio-modal-title"></h4>
                <p id="portfolio-modal-description"></p>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-fill" id="portfolio-modal-link">Visit Page</a>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ portfolio("js/jquery.min.js") }}"></script>
<script src="{{ portfolio("js/bootstrap.min.js") }}"></script>
<script src="{{ portfolio("js/jquery.easing.min.js") }}"></script>
<script src="{{ portfolio("js/skrollr.min.js") }}"></script>
<script src="{{ portfolio("js/bootstrap-progressbar.min.js") }}"></script>
<script src="{{ portfolio("js/jquery.countTo.min.js") }}"></script>
<script src="{{ portfolio("js/script.js") }}"></script>

<script>
    function showModal(data) {
        data = JSON.parse(data)
        $("#portfolio-modal-title").html(data.title)
        $("#portfolio-modal-description").html(data.description)
        $("#portfolio-modal-image").attr("src", data.image)
        $("#portfolio-modal-link").attr("href", data.link)
        $("#portfolio-modal").modal('show')
    }

    $(".show-more").each(function(_) {
        const toggle = $(this).data("toggle")
        $(this).on('click', function(e) {
            e.preventDefault();
            $(`#${toggle} .d-none`).each(function(_) {
                $(this).removeClass("d-none")
            })
            $(this).addClass("d-none")
        })
    })
</script>

</body>
</html>
