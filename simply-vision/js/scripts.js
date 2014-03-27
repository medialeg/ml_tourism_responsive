/*
	scripts.js
	
	License: GNU General Public License v3.0
	License URI: http://www.gnu.org/licenses/gpl-3.0.html
	
	Copyright: (c) 2014 Modern WP Themes
*/


    
/*  Scroll To Top
/* ------------------------------------ */
	
	$(function(){
		$window=$(window);
			$link=$("#scrollToTop");
				$link.click(function(){$("html, body").animate({scrollTop:0},"slow")});
			$window.scroll(function(){if($window.scrollTop()<=0){$link.fadeOut("fast")}else{$link.fadeIn("fast")}})}
		);

    
 /*  Sticky Nav
/* ------------------------------------ */
  
			$(document).ready(function() {  
		var stickyNavTop = $('.header-fix').offset().top;  
  
			var stickyNav = function(){  
			var scrollTop = $(window).scrollTop();  
       
				if (scrollTop > stickyNavTop) {   
    				$('.header-fix').addClass('sticky-nav');  
				} else {  
    				$('.header-fix').removeClass('sticky-nav');   
				}  
		};  
  
			stickyNav();  
  
				$(window).scroll(function() {  
    			stickyNav();  
			});  
		});     

	


