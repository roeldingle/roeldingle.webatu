$(function(){

    var methods = basicMethod();
	var events = basicEvents(methods);
	events.load();
    
    
    

});

function basicEvents( method ) {
	return {
        
        load: function(){
            var self = this;
            self.initialized();
        },
        
        initialized: function(){
            method.socialIconAnimate();
        },

        events:
    }
}


function basicMethod( ) {
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
        
        test: function(){
            alert(123);
        }
    }
}




