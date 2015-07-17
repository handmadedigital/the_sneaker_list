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

                <li class=""><a href="/logout">Logout</a></li>

              </ul>

            </nav>

          </div>

      </div>

    </div>

</header>