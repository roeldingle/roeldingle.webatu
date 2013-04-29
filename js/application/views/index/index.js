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
            initialize:  function(){},

			events: {
			  'click .menu-nav' : 'changeContent'
			},

			changeContent: function(e){
				var elem = e.currentTarget;

				switch($(elem).attr('title')){
					case "profile":
						var tpl = _.template(profileTpl);
					break;
					case "works":
						var tpl = _.template(worksTpl);
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
				
			}


		});
		
		return new indexView;
	});
