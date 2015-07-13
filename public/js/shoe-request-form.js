(function($) {
    $.fn.stepsForm = function() {



        var shoeFormWidth = $('#shoeRequestForm').width();
        var shoeRequestWrapperFullWidth = $('.shoe-request-wrapper').innerWidth();
        var shoeRequestWrapperFullHeight = $('.shoe-request-wrapper').outerHeight();
        var shoeRequestWrapperWidth = $('.shoe-request-wrapper').width();
        var shoeRequestPadding = -Math.abs((shoeRequestWrapperFullWidth - shoeRequestWrapperWidth)/2);
        var shoeRequestWrapperRadius = $('.shoe-request-wrapper').css('border-radius');
        var step1Height = $('#step1').outerHeight();
        var step2Height = $('#step2').outerHeight();
        var shoeRequestHeightRemainder = shoeRequestWrapperFullHeight - step1Height;

        $('#topRedBar').html("<div id='topBarInner'></div>");

        $(window).load(console.log(step1Height));
        $(window).load(console.log(step1Height));


        $('#topRedBar').width(shoeRequestWrapperFullWidth).css({
            "margin-left": shoeRequestPadding,
            "margin-top": shoeRequestPadding,
            "position": 'absolute',
            "height": '10px',
            "overflow": 'hidden'
        });

        $('#topBarInner').css({
            "width": '100%',
            "height": '50px',
            "border-radius": shoeRequestWrapperRadius,
            "background": '#F9393F'
        });



        $('.steps').width(shoeFormWidth);



        $('.shoe-brand').click(function() {
        // Step One Shoe Brand Fade-out on radio button checked
            if($('.shoe-brand').is(':checked')) {
                $('#step1').removeClass( "steps-active", function(){
                        $(this).on('transitionend webkitTransitionEnd oTransitionEnd', function() {
                            $('#step1').remove();
                            $('#step2').removeClass("steps-absolute").addClass("steps-active");
                            $('.next-model').addClass("model-next-active");
                    });
                });

                // Confirm Details Brand Output
                var brandChosen = $(this).attr('value');
                $("#brandName").html(brandChosen);

            }

        });

        $('.next-model').click(function() {
        // Step Two Shoe Model Fade in
        // Fade-out on radio button Next checked( Effect was not working with .click on <a> tag so used this as alternative
            if($('#ModelNext').is(':checked')) {
                $('#step2').removeClass( "steps-active" );
                $('#step3').addClass( "steps-active" );
                $('.size-model').addClass( "size-next-active" );

                setTimeout(function() {
                    $('#sliderToolTip').addClass( "active" );
                }, 800);


                // Confirm Details Model Output
                var modelChosen = $('#modelNameInput').val();
                console.log(modelChosen);
                $("#modelName").html(modelChosen);

                $('#step2').on('transitionend webkitTransitionEnd oTransitionEnd', function() {
                    $('#step2').remove();
                });
            }
        });

        $('#modelNameInput').keyup(function() {

            $('#imgTitle').addClass( "show" );
            $('#shoeModelGallery').addClass( "show" );
            //  Flicker Images Fade In Effect
            $('.gallery-image-match').each(function(i){
                var row = $(this);
                setTimeout(function() {
                    row.addClass("images-fade-in");
                }, 500*i);
            });

        });

        $(function() {

            $( "#sliderToolTip" )
                .mouseover(function() {
                    $(this).removeClass( "active" );
                });






        // Step Three Shoe Size Slider Effect
            $( "#slider" ).slider({
                value:10,
                min: 6,
                max: 14,
                step:.5,
                slide: function( event, ui ) {
                    var ShoeSizeM = $( "#amount" ).val(ui.value).val(); //Men Shoe Size
                    var ShoeSizeW =  parseFloat(ShoeSizeM)-1.5; //Woman Shoe Size
                    var ShoeSizeK =  parseFloat(ShoeSizeM)-1; //Kids Shoe Size

                    $( "#shoeSizeM" ).val(  ShoeSizeM ); //Radio Input Men Value
                    $( "#shoeSizeW" ).val( ShoeSizeW ); //Radio Input Women Value
                    $( "#shoeSizeK" ).val( ShoeSizeK ); //Radio Input Kids Value
                    $("#mensShoeSize").html( "<em>" + ShoeSizeM + "</em><br/> Men Size" ); //Radio Input Men Label
                    $("#womanShoeSize").html( "<em>" + ShoeSizeW + "</em><br/> Woman Size"); //Radio Input Women Label
                    $("#kidsShoeSize").html( "<em>" + ShoeSizeK + "</em><br/> Kids Size"); //Radio Input Kids Label
                }
            });

            $('#amount').keyup(function(e) {
                $("#usaShoeSize").html($(this).val());
            }).keypress(function(e) {
                return /[a-z0-9.-]/i.test(String.fromCharCode(e.which));
            });

            $( "#amount" ).val( $( "#slider" ).slider( "value" ) );

            $('.shoe-size').click(function() {

                if($('.shoe-size').is(':checked')) {

                    // Step Three Shoe Size Fade-out on radio button checked
                    $('#step3').removeClass( "steps-active" );
                    $('#step4').addClass( "steps-active" );


                    // Confirm Details Size Output
                    var sizeChosenId = $(this).attr('id');
                    var sizeChosenM =  $('#mensShoeSize').text();
                    var sizeChosenW =  $('#womanShoeSize').text();
                    var sizeChosenK =  $('#kidsShoeSize').text();

                    if(sizeChosenId == 'shoeSizeM') {
                        $("#shoeSize").html(sizeChosenM);
                    }
                    else if(sizeChosenId == 'shoeSizeW') {
                        $("#shoeSize").html(sizeChosenW);
                    }
                    else if(sizeChosenId == 'shoeSizeK') {
                        $("#shoeSize").html(sizeChosenK);
                    }
                }
            });












    };
    }(window.jQuery, window, document));


//  Add form id below
$('#shoeRequestForm').stepsForm();



