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

    <!-- mega menu -->
    <link href="/js/mainmenu/bootstrap.min.css" rel="stylesheet">

    <!-- Admin Css -->
    <link rel="stylesheet" href="/css/admin.css">

    <!-- User Css -->
    <link rel="stylesheet" href="/css/user-orders.css">

    <!-- UAlert Css -->
    <link rel="stylesheet" href="/css/alert.css">

</head>

<body>

<div class="site_wrapper user-orders">

<header class="header">

	<div class="container-full">

    <!-- Logo -->
    <div class="logo">
        <a href="/" id="logo"></a>
    </div>



    <div class="navbar yamm navbar-default">

          <div class="navbar-header">
            <div class="navbar-toggle .navbar-collapse .pull-right " data-toggle="collapse" data-target="#navbar-collapse-1"  > <span>Menu</span>
              <button type="button" > <i class="fa fa-bars"></i></button>
            </div>
          </div>

          <div class="user-nav" id="navbar-collapse-1" class="navbar-collapse collapse pull-right">

            <nav>


             <div class="search-box">
                    <form id="site-search" action="#na">
                        <input type="search" class="form-control" placeholder="Type here for search...">
                        <button type="accpet"><i class="fa fa-search"></i></button>
                    </form>
            </div>


              <ul class="nav navbar-nav">

                <li > <a href="/" class=" active">Home</a>


                </li>

                <li class=""><a href="/about-us" >About</a>

                </li>

                <li > <a href="/shoe-request" >Shoe Request</a>


                </li>

                <li class=""><a href="/how-it-works" >How It Works</a>

                </li>

                <li > <a href="/gallery" >Gallery</a>

                </li>

                <li class=""> <a href="/blog" >Blog </a>

                </li>

                <li class=""><a href="/contact" >Contact</a>

                </li>

                <li><a href="/{{Auth::user()->id}}/orders">{{Auth::user()->last_name}}</a></li>

                <li class=""><a>Logout</a></li>

              </ul>

            </nav>

          </div>

      </div>

    </div>

</header>

<div class="side-menu-toggle">

    <div class="user-side-menu">
        <div class="user-menu-toggle">
            <a href="#" class="small-menu">
                <i class="fa fa-times"></i>

            </a>
        </div>
        <div id="userSidebar">
            <div class="big-menu-only user-admin-info-wrapper">
                <h4>Full Name:</h4>
                <div class="user-admin-info">
                    <h6>{{ucwords(Auth::user()->first_name)}} {{ucwords(Auth::user()->last_name)}}</h6>
                </div>
            </div>
            <div class="big-menu-only user-admin-info-wrapper">
                <h4>Email:</h4>
                <div class="user-admin-info">
                    <h6>{{Auth::user()->email}}</h6>
                </div>
            </div>
            <div class="big-menu-only user-admin-info-wrapper">
                <h4>Address:</h4>
                <div class="user-admin-info">
                    <h6>{{Auth::user()->address}}, {{Auth::user()->city}}, {{Auth::user()->state}}</h6>
                </div>
            </div>

        </div>

        <div class="big-menu-only admin-footer">
            <p>2015 © Handmade Digital</p>
        </div>
    </div>
</div>

<div class="user-content">
        <div class="alert success">
            Welcome To The Sneaker List, below you will find all your current orders!
            <a href="#" class="close">&times;</a>
        </div>
        <div id="adminOrders">
            <table class="full-width striped" id="ordersTable">
                <thead>
                    <tr>
                        <th>Order # <i class="fa fa-sort-amount-asc"></i> <i style="display: none" class="fa fa-sort-amount-desc"></i><i class="fa fa-sort-amount-asc"></i> <i style="display: none" class="fa fa-sort-amount-desc"></i></th>
                        <th>Time <i class="fa fa-sort-amount-asc"></i> <i style="display: none" class="fa fa-sort-amount-desc"></i></th>
                        <th>Brand <i class="fa fa-sort-amount-asc"></i> <i style="display: none" class="fa fa-sort-amount-desc"></i></th>
                        <th>Model <i class="fa fa-sort-amount-asc"></i> <i style="display: none" class="fa fa-sort-amount-desc"></i></th>
                        <th>Price Quote <i class="fa fa-sort-amount-asc"></i> <i style="display: none" class="fa fa-sort-amount-desc"></i></th>
                        <th>Status <i class="fa fa-sort-amount-asc"></i> <i style="display: none" class="fa fa-sort-amount-desc"></i></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{$order->order_number}}</td>
                            <td>{{$order->created_at}}</td>
                            <td>{{$order->brand}}</td>
                            <td>{{$order->model}}</td>
                            @if($order->price == null)
                                <td>Still Looking</td>
                            @else
                                <td>{{$order->price}}</td>
                            @endif
                            <td><button class="orders-btn price-not-found">{{ucwords($order->status)}}</button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
</div>

</div>
</body>



<!-- ######### JS FILES ######### -->
<!-- get jQuery used for the theme -->
<script type="text/javascript" src="/js/universal/jquery.js"></script>
<script src="/js/style-switcher/styleselector.js"></script>
<script src="/js/user-menu-toggle.js"></script>
<script src="/js/jquery.tablesorter.js"></script>
<script src="/js/alert.js"></script>
<script src="/js/animations/js/animations.min.js" type="text/javascript"></script>
<script src="/js/mainmenu/bootstrap.min.js"></script>
<script src="/js/mainmenu/customeUI.js"></script>
<script src="/js/masterslider/masterslider.min.js"></script>
<script type="text/javascript">
$(document).ready(function()
    {
        $("#ordersTable").tablesorter();
    }
);

</script>

<script type="text/javascript">
(function($) {
 "use strict";
   var slider = new MasterSlider();
    slider.control('thumblist' , {autohide:false ,dir:'h', type:'tabs',width:400,height:116, align:'bottom', space:0 , margin:-12, hideUnder:400});

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
<script src="/js/carouselowl/owl.carousel.js"></script>
<script type="text/javascript" src="/js/accordion/jquery.accordion.js"></script>
<script type="text/javascript" src="/js/accordion/custom.js"></script>
<script src="/js/tabs/assets/js/responsive-tabs.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/js/universal/custom.js"></script>

</body>
</html>
