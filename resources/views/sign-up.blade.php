<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
    <title>Sneaker List Sign Page</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">




    <link rel="shortcut icon" type="image/png" href="images/favicon.png"/>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- this styles only adds some repairs on idevices  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google fonts - witch you want to use - (rest you can just remove) -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Dancing+Script:400,700' rel='stylesheet' type='text/css'>


    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- ######### CSS STYLES ######### -->

    <link rel="stylesheet" href="/css/reset.css" type="text/css" />
    <link rel="stylesheet" href="/css/style.css" type="text/css" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="/css/font-awesome/css/font-awesome.min.css">

    <!-- simple line icons -->
    <link rel="stylesheet" type="text/css" href="/css/simpleline-icons/simple-line-icons.css" media="screen" />

    <!-- et linefont icons -->
    <link rel="stylesheet" href="/css/et-linefont/etlinefont.css">

    <!-- animations -->
    <link href="/js/animations/css/animations.min.css" rel="stylesheet" type="text/css" media="all" />

    <!-- responsive devices styles -->
    <link rel="stylesheet" media="screen" href="/css/responsive-leyouts.css" type="text/css" />

    <!-- shortcodes -->
    <link rel="stylesheet" media="screen" href="/css/shortcodes.css" type="text/css" />



    <!-- mega menu -->
    <link href="/js/mainmenu/bootstrap.min.css" rel="stylesheet">
    <link href="/js/mainmenu/demo.css" rel="stylesheet">
    <link href="/js/mainmenu/menu4.css" rel="stylesheet">

    <!-- MasterSlider -->
    <link rel="stylesheet" href="/js/masterslider/style/masterslider.css" />
    <link rel="stylesheet" href="/js/masterslider/skins/default/style.css" />

    <!-- cubeportfolio -->
    <link rel="stylesheet" type="text/css" href="/js/cubeportfolio/cubeportfolio.min.css">

    <!-- owl carousel -->
    <link href="/js/carouselowl/owl.transitions.css" rel="stylesheet">
    <link href="/js/carouselowl/owl.carousel.css" rel="stylesheet">

    <!-- tabs 2 -->
    <link href="/js/tabs2/tabacc.css" rel="stylesheet" />
    <link href="/js/tabs2/detached2.css" rel="stylesheet" />

    <!-- accordion -->
    <link rel="stylesheet" type="text/css" href="/js/accordion/style.css" />

    <!-- timeline -->
    <link rel="stylesheet" href="/js/timeline/timeline.css">

</head>

<body class="request-body">

<div class="site_wrapper">

    @include('inc.header')



    <!-- Slider
    ======================================= -->

    <!-- masterslider -->
    <div class="about-us-header">


        <h2 class="title25">Sign up<em> Sign Up Now! and receive your first shoe request for FREE!</em>
            <span class="line"></span></h2>


        <div class="about-sneaker-position last animate" data-anim-type="fadeIn" data-anim-delay="300">

            <img src="/images/shoe-cut-out-flip.png" alt="" />

        </div><!-- end section -->

    </div>





</div>
<!-- end of masterslider -->

<div class="clearfix margin_top10"></div>
<div class="featured_section73">
    <div class="container">

        <div class="one_full stcode_title9">



        </div>

        


        <div class="shoe-request-wrapper">
            <div id="topRedBar"><span id="topBarInner"></span></div>
        
            
            <h2 class="title26">Register
                <span class="line"></span>
            </h2>
            <div class="space-60"></div>
            <div id="signUpFormWraper">
                <form method="post" action="/auth/register" id="registerForm">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="first_name" class="form-input" placeholder="First Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="last_name" class="form-input" placeholder="Last Name">
                            </div>
                        </div>
                    </div>
                    <!-- END NAMES -->
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <input type="text" name="address" class="form-input" placeholder="Street Address">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <input type="text" name="city" class="form-input" placeholder="City">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <input type="text" name="state" class="form-input" placeholder="State">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <input type="number" name="zip_code" class="form-input" placeholder="Zip Code">
                            </div>
                        </div>
                    </div>
                    <!-- END ADDRESS -->
                    <div class="form-group">
                        <input type="email" name="email" class="form-input" placeholder="Email Address">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-input" placeholder="Password">
                    </div>
                    <!-- END CREDENTIALS -->
                    <button type="submit" class="gallery-image-submit">Sign Up!</button>
                    <button type="submit" class="gallery-image-submit">Login</button>
                </form>
            </div>  

                
        </div>
    
        
    </div>
</div><!-- end featured section 73 -->

<div class="clearfix"></div>


<footer class="footer4">
    <div class="container">

        <div class="fmlinks"><a href="#">Home</a> <a href="#">About</a> <a href="#">Shoe Request</a> <a href="#">Blog</a> <a href="#">How It Works</a> <a href="#">Gallery</a> <a href="#">Contact</a></div>

        Copyright © 2015 The Good Life Designs. All rights reserved.  <a href="#">Terms of Use</a> | <a href="#">Privacy Policy</a>

        <div class="footer_social_links4">
            <a href="#" class="animate" data-anim-type="zoomIn" data-anim-delay="100"><i class="fa fa-facebook"></i></a>
            <a href="#" class="animate" data-anim-type="zoomIn" data-anim-delay="150"><i class="fa fa-twitter"></i></a>
            <a href="#" class="animate" data-anim-type="zoomIn" data-anim-delay="100"><i class="fa fa-google-plus"></i></a>
            <a href="#" class="animate" data-anim-type="zoomIn" data-anim-delay="150"><i class="fa fa-linkedin"></i></a>
            <a href="#" class="animate" data-anim-type="zoomIn" data-anim-delay="100"><i class="fa fa-rss"></i></a>
        </div>


    </div><!-- end footer -->
</footer>



<a href="#" class="scrollup">Scroll</a><!-- end scroll to top of the page-->




<!-- ######### JS FILES ######### -->
<!-- get jQuery used for the theme -->
<script type="text/javascript" src="/js/universal/jquery.js"></script>
<script src="/js/style-switcher/styleselector.js"></script>
<script src="/js/shoe-request-form-cleanup.js"></script>
<script src="/js/animations/js/animations.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css"></link>
<script src="/https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script src="/js/mainmenu/bootstrap.min.js"></script>
<script src="/js/mainmenu/customeUI.js"></script>
<script src="/js/masterslider/jquery.easing.min.js"></script>
<script src="/js/masterslider/masterslider.min.js"></script>
<script type="text/javascript">
    (function($) {
        "use strict";
        var slider = new MasterSlider();
        // adds Arrows navigation control to the slider.

        slider.setup('masterslider' , {
            width:1400,    // slider standard width
            height:500,   // slider standard height
            space:0,
            speed:45,
            layout:'fullwidth',
            loop:true,
            preload:0,
            autoplay:true,
            view:"fade"
        });
    })(jQuery);
</script>
<script src="/js/scrolltotop/totop.js" type="text/javascript"></script>
<script type="text/javascript" src="/js/mainmenu/sticky.js"></script>
<script type="text/javascript" src="/js/mainmenu/modernizr.custom.75180.js"></script>
<script type="text/javascript" src="/js/cubeportfolio/jquery.cubeportfolio.min.js"></script>
<script type="text/javascript" src="/js/cubeportfolio/main3.js"></script>
<script src="/js/tabs2/index.js"></script>
<script>
    $('.accordion, .tabs').TabsAccordion({
        hashWatch: true,
        pauseMedia: true,
        responsiveSwitch: 'tablist',
        saveState: sessionStorage,
    });
</script>
<script src="/js/aninum/jquery.animateNumber.min.js"></script>
<script src="/js/carouselowl/owl.carousel.js"></script>
<script src="/js/handlebars-v3.0.3.js"></script>
<script type="text/javascript" src="/js/accordion/jquery.accordion.js"></script>
<script type="text/javascript" src="/js/accordion/custom.js"></script>
<script src="/js/timeline/modernizr.js"></script>
<script>
    (function($) {
        "use strict";

        jQuery(document).ready(function($){
            var $timeline_block = $('.cd-timeline-block');

            //hide timeline blocks which are outside the viewport
            $timeline_block.each(function(){
                if($(this).offset().top > $(window).scrollTop()+$(window).height()*0.75) {
                    $(this).find('.cd-timeline-img, .cd-timeline-content').addClass('is-hidden');
                }
            });

            //on scolling, show/animate timeline blocks when enter the viewport
            $(window).on('scroll', function(){
                $timeline_block.each(function(){
                    if( $(this).offset().top <= $(window).scrollTop()+$(window).height()*0.75 && $(this).find('.cd-timeline-img').hasClass('is-hidden') ) {
                        $(this).find('.cd-timeline-img, .cd-timeline-content').removeClass('is-hidden').addClass('bounce-in');
                    }
                });
            });
        });

    })(jQuery);
</script>
<script type="text/javascript" src="/js/universal/custom.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="//cdn.jsdelivr.net/bootstrap.material-design/0.3.0/css/material-wfont.min.css">
<link rel="stylesheet" href="//cdn.jsdelivr.net/bootstrap.material-design/0.3.0/css/material.min.css">
<link rel="stylesheet" href="//cdn.jsdelivr.net/bootstrap.material-design/0.3.0/css/ripples.min.css">
<script src="//cdn.jsdelivr.net/bootstrap.material-design/0.3.0/js/material.min.js"></script>
<script src="//cdn.jsdelivr.net/bootstrap.material-design/0.3.0/js/ripples.min.js"></script>
</body>
</html>
