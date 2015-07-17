<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
	<title>Sneaker List Home Page</title>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="keywords" content="" />
	<meta name="description" content="" />
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

    <link rel="stylesheet" href="css/reset.css" type="text/css" />
	<link rel="stylesheet" href="css/style.css" type="text/css" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">

    <!-- simple line icons -->
	<link rel="stylesheet" type="text/css" href="css/simpleline-icons/simple-line-icons.css" media="screen" />

    <!-- et linefont icons -->
    <link rel="stylesheet" href="css/et-linefont/etlinefont.css">

    <!-- animations -->
    <link href="js/animations/css/animations.min.css" rel="stylesheet" type="text/css" media="all" />

    <!-- responsive devices styles -->
	<link rel="stylesheet" media="screen" href="css/responsive-leyouts.css" type="text/css" />

    <!-- shortcodes -->
    <link rel="stylesheet" media="screen" href="css/shortcodes.css" type="text/css" />



    <!-- mega menu -->
    <link href="js/mainmenu/bootstrap.min.css" rel="stylesheet">
	<link href="js/mainmenu/demo.css" rel="stylesheet">
	<link href="js/mainmenu/menu4.css" rel="stylesheet">

    <!-- MasterSlider -->
    <link rel="stylesheet" href="js/masterslider/style/masterslider2.css" />
    <link rel="stylesheet" href="js/masterslider/skins/default/style.css" />
    <link href='js/masterslider/style/ms-tabs-style2.css' rel='stylesheet' type='text/css'>
    <link href='js/masterslider/style/ms-phone-style.css' rel='stylesheet' type='text/css'>

    <!-- cubeportfolio -->
    <link rel="stylesheet" type="text/css" href="js/cubeportfolio/cubeportfolio.min.css">

    <!-- owl carousel -->
    <link href="js/carouselowl/owl.transitions.css" rel="stylesheet">
    <link href="js/carouselowl/owl.carousel.css" rel="stylesheet">

    <!-- tabs -->
    <link rel="stylesheet" type="text/css" href="js/tabs/assets/css/responsive-tabs.css">
    <link rel="stylesheet" type="text/css" href="js/tabs/assets/css/responsive-tabs2.css">
    <link rel="stylesheet" type="text/css" href="js/tabs/assets/css/responsive-tabs3.css">

</head>
@include('inc.form-errors')
@include('inc.flash-messages')

@yield('content')

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
<script type="text/javascript" src="js/universal/jquery.js"></script>
<script src="js/style-switcher/styleselector.js"></script>
<script src="js/animations/js/animations.min.js" type="text/javascript"></script>
<script src="js/mainmenu/bootstrap.min.js"></script>
<script src="js/mainmenu/customeUI.js"></script>
<script src="js/masterslider/masterslider.min.js"></script>
<script src="js/masterslider/jquery.easing.min.js"></script>

<script type="text/javascript">
(function($) {
 "use strict";
   var slider = new MasterSlider();
    slider.control('thumblist' , {autohide:false ,dir:'h', type:'tabs',width:400,height:116, align:'bottom', space:0 , margin:-12, hideUnder:100});

    slider.setup('masterslider' , {
        width:1170,
        height:800,
        space:0,
        layout:'fullwidth',
        autoplay:true,
        preload:'all',
        view:'basic'
    });

    var slider = new MasterSlider();
    slider.setup('masterslider2' , {
        width:210,
        height:360,
        speed:20,
        loop:true,
        autoplay:true,
        preload:0
    });
    slider.control('arrows');
    slider.control('bullets',{autohide:false});

})(jQuery);
</script>
<script src="/js/scrolltotop/totop.js" type="text/javascript"></script>
<script type="text/javascript" src="/js/mainmenu/sticky.js"></script>
<script type="text/javascript" src="/js/mainmenu/modernizr.custom.75180.js"></script>
<script type="text/javascript" src="/js/cubeportfolio/jquery.cubeportfolio.min.js"></script>
<script type="text/javascript" src="/js/cubeportfolio/main6.js"></script>
<script type="text/javascript" src="js/cubeportfolio/main3.js"></script>

<script src="js/tabs2/index.js"></script>
<script>
$('.accordion, .tabs').TabsAccordion({
    hashWatch: true,
    pauseMedia: true,
    responsiveSwitch: 'tablist',
    saveState: sessionStorage
});
</script>

<script src="js/aninum/jquery.animateNumber.min.js"></script>
<script src="/js/carouselowl/owl.carousel.js"></script>
<script src="js/handlebars-v3.0.3.js"></script>
<script type="text/javascript" src="/js/accordion/jquery.accordion.js"></script>
<script type="text/javascript" src="/js/accordion/custom.js"></script>
<script src="/js/tabs/assets/js/responsive-tabs.min.js" type="text/javascript"></script>

<script src="js/timeline/modernizr.js"></script>

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

</body>
</html>
