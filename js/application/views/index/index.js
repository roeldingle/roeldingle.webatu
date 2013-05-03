define([

	// libraries
	'jquery',
	'underscore',
	'backbone',

	// common functions
	'../../js/application/common.js',

	// templates
	'text!views/index/tpl/index.html',
	'text!views/index/tpl/home.html',
	'text!views/index/tpl/profile.html',
	'text!views/index/tpl/works.html',
	'text!views/index/tpl/services.html'

	], function(

		$, _, Backbone, 

		Common, 

		indexTpl,
		homeTpl,
		profileTpl,
		worksTpl,
		servicesTpl

		) {

		var phpData = $.parseJSON(Data);

		var indexView = Backbone.View.extend({
			el: 'body',

			render: function() {

				$(this.el).append(_.template(indexTpl, {rows: phpData}));
				Common.socialIconAnimate();
			},

			/*on load function*/
            initialize:  function(){


            },

			events: {
			  'click .menu-nav' : 'changeContent',
			  'click .mylightbox' : 'initMylightbox',
			  'click #lightbox' : 'hideMylightbox'
			},

			changeContent: function(e){
				var elem = e.currentTarget;

				switch($(elem).attr('title')){
					case "profile":
						var tpl = _.template(profileTpl, {rows: phpData});
					break;
					case "works":
						var tpl = _.template(worksTpl, {rows: phpData});

					break;
					case "services":
						var tpl = _.template(servicesTpl);
					break;
					default:
						var tpl = _.template(homeTpl);
						break;
				}
				$("#real-content").fadeOut(function(){

					$("#real-content").html(tpl);
					$("#real-content").fadeIn('slow');

				});
				
			},

			initMylightbox: function(e){
				 e.preventDefault();
		        //Get clicked link href
		        var image_href = $(e.currentTarget).attr("href");
		        
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


		});
		
		return new indexView;
	});
