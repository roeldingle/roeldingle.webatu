define([
    'jquery',
    'underscore',
    'backbone',
    ], function($, _, Backbone) {

    var Common = {

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
        }


    }
        return Common;
});