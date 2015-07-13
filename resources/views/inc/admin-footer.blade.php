</div>
</body>



<!-- ######### JS FILES ######### -->
<!-- get jQuery used for the theme -->
<script type="text/javascript" src="/js/universal/jquery.js"></script>
<script src="/js/style-switcher/styleselector.js"></script>
<script src="/js/menu-toggle.js"></script>
<script src="/js/jquery.tablesorter.js"></script>
<script type="text/javascript">
    $(document).ready(function()
            {
                $("#ordersTable").tablesorter();
            }
    );

</script>

<script src="/js/animations/js/animations.min.js" type="text/javascript"></script>
<script src="/js/mainmenu/bootstrap.min.js"></script>
<script src="/js/mainmenu/customeUI.js"></script>
<script src="/js/masterslider/masterslider.min.js"></script>

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
