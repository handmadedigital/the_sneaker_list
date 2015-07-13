(function($) {
	$.fn.alert = function() {

		
		return this.each(function() {
			var self = $(this);

			self.on('click', '.small-menu', function() {
				$('.big-menu-only').addClass('close-menu');
				$('.admin-side-menu').addClass('small');
				$('.menu-container').addClass('small');
				$('.admin-content').addClass('small');
				$('.small-menu').addClass('big-menu').removeClass('small-menu');
			});	

			self.on('click', '.big-menu', function() {
				$('.big-menu-only').removeClass('close-menu');
				$('.admin-side-menu').removeClass('small');
				$('.menu-container').removeClass('small');
				$('.admin-content').removeClass('small');
				$('.big-menu').addClass('small-menu').removeClass('big-menu');
			});

			$('.admin-side-menu').mouseenter(
			  function() {
			    $('.big-menu-only').addClass('menu-hover');
				$('.admin-side-menu').addClass('hover');
				$('.menu-container').addClass('hover');
				$('.admin-content').addClass('hover');
			  }
			);

			$('.admin-side-menu').mouseleave(
			  function() {
			    $('.big-menu-only').removeClass('menu-hover');
				$('.admin-side-menu').removeClass('hover');
				$('.menu-container').removeClass('hover');
				$('.admin-content').removeClass('hover');
			  }
			);
			
		});
				
	};
}(jQuery))


$('.menu-toggle').alert();


