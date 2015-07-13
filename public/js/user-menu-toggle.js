(function($) {
	$.fn.menuToggle = function() {

		
		return this.each(function() {
			var self = $(this);

			self.on('click', '.small-menu', function() {
				$('.big-menu-only').addClass('close-menu');
				$('.user-side-menu').addClass('small');
				$('.fa.fa-times').removeClass('fa-times').addClass('fa-plus');
				$('.user-menu-toggle').addClass('small');
				$('.menu-container').addClass('small');
				$('.user-content').addClass('small');
				$('.small-menu').addClass('big-menu').removeClass('small-menu');
			});	

			self.on('click', '.big-menu', function() {
				$('.big-menu-only').removeClass('close-menu');
				$('.user-side-menu').removeClass('small');
				$('.fa.fa-plus').removeClass('fa-plus').addClass('fa-times');
				$('.user-menu-toggle').removeClass('small');
				$('.menu-container').removeClass('small');
				$('.user-content').removeClass('small');
				$('.big-menu').addClass('small-menu').removeClass('big-menu');
			});

			$('.user-admin-info-wrapper').on('transitionend webkitTransitionEnd oTransitionEnd', function() {
				$('.user-side-menu').mouseenter(
			  function() {
			    $('.big-menu-only').addClass('menu-hover');
				$('.user-side-menu').addClass('hover');
				$('.user-menu-toggle').addClass('hover');
				$('.menu-container').addClass('hover');
				$('.user-content').addClass('hover');
			  }
			);

			$('.user-side-menu').mouseleave(
			  function() {
			    $('.big-menu-only').removeClass('menu-hover');
				$('.user-side-menu').removeClass('hover');
				$('.user-menu-toggle').removeClass('hover');
				$('.menu-container').removeClass('hover');
				$('.user-content').removeClass('hover');
			  }
			);
			});
		});

			
			
		
				
	};
}(jQuery))


$('.user-menu-toggle').menuToggle();





