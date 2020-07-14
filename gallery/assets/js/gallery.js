$(document).ready(function() {
    "use strict";
	var menuTrigger = $('#header-menu-trigger'),
	       nav             = $('#menu-nav-wrap'),
	       closeButton     = nav.find('.close-button'),
	       siteBody        = $('body'),
	       mainContents    = $('section, footer');

		// open-close menu by clicking on the menu icon
		menuTrigger.on('click', function(e){
			e.preventDefault();
			menuTrigger.toggleClass('is-clicked');
			siteBody.toggleClass('menu-is-open');
			$('#header-menu-trigger').toggleClass('hidden');
		});

		// close menu by clicking the close button
		closeButton.on('click', function(e){
			e.preventDefault();
			menuTrigger.trigger('click');
			$('#header-menu-trigger').removeClass('hidden');
		});

		// close menu clicking outside the menu itself
		siteBody.on('click', function(e){		
			if( !$(e.target).is('#menu-nav-wrap, #header-menu-trigger, #header-menu-trigger span') ) {
				menuTrigger.removeClass('is-clicked');
				siteBody.removeClass('menu-is-open');
				$('#header-menu-trigger').removeClass('hidden');
			}
		});
	
	//events toggles
		$('#events').on('click',function(e){
			e.preventDefault();
			$('#events-description').removeClass('hidden');
		});
		$('#cse').on('click',function(e){
			e.preventDefault();
			$('#cse-description').removeClass('hidden');
		});
		$('#me').on('click',function(e){
			e.preventDefault();
			$('#me-description').removeClass('hidden');
		});
		$('#eee').on('click',function(e){
			e.preventDefault();
			$('#eee-description').removeClass('hidden');
		});
		$('#ece').on('click',function(e){
			e.preventDefault();
			$('#ece-description').removeClass('hidden');
		});
		$('#it').on('click',function(e){
			e.preventDefault();
			$('#it-description').removeClass('hidden');
		});
	
	//hide
		$('#event-close').on('click',function(e){
			e.preventDefault();
			$('#events-description').addClass('hidden');
		});
		$('#cse-close').on('click',function(e){
			e.preventDefault();
			$('#cse-description').addClass('hidden');
		});
		$('#ece-close').on('click',function(e){
			e.preventDefault();
			$('#ece-description').addClass('hidden');
		});
		$('#eee-close').on('click',function(e){
			e.preventDefault();
			$('#eee-description').addClass('hidden');
		});
		$('#me-close').on('click',function(e){
			e.preventDefault();
			$('#me-description').addClass('hidden');
		});
		$('#it-close').on('click',function(e){
			e.preventDefault();
			$('#it-description').addClass('hidden');
		});
		 $('#scroll-btn').click(function(){
         $('html,body').animate({scrollTop: $(document).height()}, 900);
      return false;
   });

   

});
