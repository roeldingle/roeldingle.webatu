$(function(){


	$("body").queryLoader2({
        barColor: "#fff",
        backgroundColor: "#0088cc",
        percentage: true,
        barHeight: 5,
        completeAnimation: "grow",
        minimumTime: 100
    });

    $("body").removeClass('body-preload');

	
	var indexMethods = getIndexMethods();
	var indexEvents = getIndexEvents(indexMethods);
	indexEvents.load();
	
	
	
});



function getIndexEvents( method ) {
	return {
		
		load : function() {
			var self = this;
			self.events();
			$('#index-menu').show();
			method.socialIconAnimate();

		},
		
		/*clicked events*/
		events : function() {
			
			$('.menu-nav').live('click',function () {
			    method.changeContent($(this).attr('title'));
			});

			$('.mylightbox').click(function(elem) {

				elem.preventDefault();
			    method.initMylightbox(this);
			});

			$('#lightbox').live('click',function () {
			    method.hideMylightbox();
			});

			
			
			
		}
	}
}

function getIndexMethods() {
	
	return {
		
		 /*animate the social icons*/
        socialIconAnimate: function(){
            $('.web-icons img').load(function() {
                $(this).data('height', this.height);
            }).bind('mouseenter mouseleave', function(e) {
                var enter = e.type === 'mouseenter',
                    height = $(this).data('height');
                
                $(this).stop().animate({
                    'margin-top': (enter ? 10 : 0),
                    opacity: (enter ? 1 : 0.7),
                    height: height * (enter ? 1.05 : 1)
                });
            });
        },

        changeContent: function(page){
        	$('.contents-menu').hide();
        	$('#'+page+'-menu').fadeIn("slow");
		},

		initMylightbox: function(elem){
					
		        //Get clicked link href
		        var image_href = $(elem).attr("href");
		        
	            var lightbox =
	            '<div id="lightbox">' +
	                '<p>Click to close</p>' +
	                '<div id="content">' + //insert clicked link's href into img src
	                    '<img src="' + image_href +'" />' +
	                '</div>' +
	            '</div>';
		           
		         $(lightbox).appendTo('body').hide().fadeIn('slow');

			},

			hideMylightbox: function(){
				$('#lightbox').fadeOut("slow").remove();

			}
		
		
	}
	
}