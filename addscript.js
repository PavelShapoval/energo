// (function($){

// 	$(document).ready(function(){


// 	});
		
// }(jQuery))


$(function() {

    if(!location.href.match(/reviews/)) {

        $("#jc").hide();

    }

});                       
/*проверки по урл на js*/

		/*add>*/
		// jQuery(function(){
	 //    	var test = window.location.href.length;
		
	 //    	console.log(test);
	 //    	if (test > 20){
	 //    		jQuery('.slider-head-text').text('123');
	 //    	}
	 //    });

	   	jQuery(function(){
	    	var test = window.location.href.length;
	    	//console.log(test);
	    	if (test <= 20){
			    jQuery(window).scroll(function(){
			        if(jQuery(this).scrollTop()>700){
			            jQuery('.header-phone p a').css('color', '#8ac535');
			        }
			        else if (jQuery(this).scrollTop()<700){
			            jQuery('.header-phone p a').css('color','#fff');
			        }
			    });
			}
	    });
