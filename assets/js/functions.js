(function($){
		
		var event_type = 'click';
				
		$(document).ready(function(){	
			
			// Top Navigation functions
			// Disable link action on top level links with children
			
			$('body').on(event_type,'.menu-item-has-children > a', function(){
						
				return false;
			
			});
		});
	
		$(window).bind('load',function(){
						
		});
		
		
})(window.jQuery);