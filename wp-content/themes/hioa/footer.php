		<div class="footer">
			<div class="footer-inner">
				<p> Ønsker du å komme i kontakt? Send en mail til: <a href="vp@hioa.no">vp@hioa.no</a></p>
			</div>
		</div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/magnific-popup.js"></script> 
  		<script src="<?php bloginfo('template_directory'); ?>/js/modernizr.custom.js"></script>
  		<script src="<?php bloginfo('template_directory'); ?>/js/spin.min.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>




		<div class="overlay overlay-hugeinc">
			<span class="sprite close"></span>

			<div class="overlay-inner">
				<div class="video-container">
					<iframe src="//www.youtube.com/embed/FXarRyX20p0"></iframe>
				</div>
			</div>
		</div>
		<script src="<?php bloginfo('template_directory'); ?>/js/codrops/classie.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/codrops/demo1.js"></script>



        <script>
            function resizeOverlay(){

            	var padding = 200;

            	if($(window).width() < 800)
            		padding = 150;

            	if($(window).width() < 600)
            		padding = 100;


            	var width = ($(window).width() - padding);

            	var windowHeight = $(window).height();

            	if(windowHeight < 300)
            		windowHeight = 300;

				if(windowHeight - padding < $(window).width() * 56.25){
					width = (windowHeight - padding) * 1.7777777778;
				}

				if(width > $(window).width() - padding)
					width = ($(window).width() - padding);

				$('.overlay-inner').css("width", width + 'px');

				var videoMarginTop = $(window).height() / 2 - $('.overlay-inner').height() / 2;

				$('.overlay-inner').css('margin-top', videoMarginTop)

				var marginLeft = ($(window).width() / 2 + width / 2);

            	if($(window).width() < 500)
            		;//marginLeft -= $('.close').width()

				$('.close').css("margin-left", marginLeft + 'px');
				$('.close').css("margin-top", videoMarginTop - $('.close').height() + 'px');
            }

            $(window).resize(function() {
            	resizeOverlay();
			});

			$('#feature-video-link').click(function(evt){
            	evt.preventDefault();
            	showVideo(1);
			})

            $('.video-link').click(function(){
            	videoID = $(this).attr('id').replace('video-id-', '');

            	showVideo(videoID);
            });

            function showVideo(videoID){
            	videoURL = videos[videoID];

            	var iframeCode = '<iframe src="' + videoURL + '"></iframe>';

            	$('.video-container').html(iframeCode);

            	toggleOverlay();

             	resizeOverlay();

            }

			$('.overlay-hugeinc').click(function(){
				closeOverlay();
			});

			function closeOverlay(){
				$('.video-container').html('');
				toggleOverlay();
			}

			$(document).keyup(function(e) {
			  if (e.keyCode == 27){
			  	if($('.open')[0])
			  		closeOverlay();
			  }   // esc
			});





			$(document).ready(function(){

			if(!Modernizr.input.placeholder){

				$('[placeholder]').focus(function() {
				  var input = $(this);
				  if (input.val() == input.attr('placeholder')) {
					input.val('');
					input.removeClass('placeholder');
				  }
				}).blur(function() {
				  var input = $(this);
				  if (input.val() == '' || input.val() == input.attr('placeholder')) {
					input.addClass('placeholder');
					input.val(input.attr('placeholder'));
				  }
				}).blur();
				$('[placeholder]').parents('form').submit(function() {
				  $(this).find('[placeholder]').each(function() {
					var input = $(this);
					if (input.val() == input.attr('placeholder')) {
					  input.val('');
					}
				  })
				});

			}
		});


		$('#subscribe-button').click(function(){

			// alert("SEND");



		var opts = {
		  lines: 13, // The number of lines to draw
		  length: 6, // The length of each line
		  width: 2, // The line thickness
		  radius: 6, // The radius of the inner circle
		  corners: 1, // Corner roundness (0..1)
		  rotate: 0, // The rotation offset
		  direction: 1, // 1: clockwise, -1: counterclockwise
		  color: '#fff', // #rgb or #rrggbb or array of colors
		  speed: 1, // Rounds per second
		  trail: 60, // Afterglow percentage
		  shadow: false, // Whether to render a shadow
		  hwaccel: false, // Whether to use hardware acceleration
		  className: 'spinner', // The CSS class to assign to the spinner
		  zIndex: 2e9, // The z-index (defaults to 2000000000)
		  top: '50%', // Top position relative to parent
		  left: '50%' // Left position relative to parent
		};

		$('#subscribe-button').addClass('no-text');
		$('#subscribe-button').addClass('ajax-spinner');

		var target = document.getElementById('subscribe-button');
		var spinner = new Spinner(opts).spin(target);

			jQuery.ajax({
			  type: 'POST',
			  url: '/wp-admin/admin-ajax.php',
			  data: {
			  action: 'RegisterSubscriber',
			  email: 'daniel.mathiesen@gmail.com'
			  },

			  success: function(data, textStatus, XMLHttpRequest){
			  	// alert("SUCCESS");
				  // jQuery("#test-div1").html('');
				  // jQuery("#test-div1").append(data);
				  // alert(data);
				  $('.subscribe-success-message').fadeIn(250);
				  
				  $('#subscribe-button').removeClass('ajax-spinner');
				  spinner.stop();

				  /*
					$('#overlay-content-container').fadeOut(200, function(){
					  	spinner.stop();
					  	var jsonData = jQuery.parseJSON(data);
					  	$('#overlay-content-container').html(jsonData["members"]);
						setTimeout(function(){
							$('#overlay-content-container').fadeIn(500);
							centerContent();
						}, 50);
					});
					*/

				  /*
				  var jsonData = jQuery.parseJSON(data);
				  $(jsonData["members"]).appendTo('#member-list-thumbnail').hide().fadeIn(500);

				  if(jsonData["more"] == 0){
				  	$('#spinner-container').hide();
				  }
				  else{
					$('#spinner-container').waypoint(function(direction) {

						APP.members.loadMore();
						$('#spinner-container').waypoint('destroy');
					
					}, { offset: 'bottom-in-view' })

				  }
				  */
			  },
			  error: function(MLHttpRequest, textStatus, errorThrown){
			  	// alert(errorThrown);
			  }
			  });


		})

		var videos = new Array('//www.youtube.com/embed/FXarRyX20p0', '//www.youtube.com/embed/F8C-bx6Ske4', '//www.youtube.com/embed/FXarRyX20p0', '//www.youtube.com/embed/F8C-bx6Ske4');

        </script>
    </div></body></html>