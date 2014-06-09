<?php $videos = getVideos(); ?>

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

			$('.feature-video-link').click(function(evt){
            	evt.preventDefault();
            	showVideo(0);
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










			/* Placeholders.js v3.0.2 */
			(function(t){"use strict";function e(t,e,r){return t.addEventListener?t.addEventListener(e,r,!1):t.attachEvent?t.attachEvent("on"+e,r):void 0}function r(t,e){var r,n;for(r=0,n=t.length;n>r;r++)if(t[r]===e)return!0;return!1}function n(t,e){var r;t.createTextRange?(r=t.createTextRange(),r.move("character",e),r.select()):t.selectionStart&&(t.focus(),t.setSelectionRange(e,e))}function a(t,e){try{return t.type=e,!0}catch(r){return!1}}t.Placeholders={Utils:{addEventListener:e,inArray:r,moveCaret:n,changeType:a}}})(this),function(t){"use strict";function e(){}function r(){try{return document.activeElement}catch(t){}}function n(t,e){var r,n,a=!!e&&t.value!==e,u=t.value===t.getAttribute(V);return(a||u)&&"true"===t.getAttribute(D)?(t.removeAttribute(D),t.value=t.value.replace(t.getAttribute(V),""),t.className=t.className.replace(R,""),n=t.getAttribute(F),parseInt(n,10)>=0&&(t.setAttribute("maxLength",n),t.removeAttribute(F)),r=t.getAttribute(P),r&&(t.type=r),!0):!1}function a(t){var e,r,n=t.getAttribute(V);return""===t.value&&n?(t.setAttribute(D,"true"),t.value=n,t.className+=" "+I,r=t.getAttribute(F),r||(t.setAttribute(F,t.maxLength),t.removeAttribute("maxLength")),e=t.getAttribute(P),e?t.type="text":"password"===t.type&&M.changeType(t,"text")&&t.setAttribute(P,"password"),!0):!1}function u(t,e){var r,n,a,u,i,l,o;if(t&&t.getAttribute(V))e(t);else for(a=t?t.getElementsByTagName("input"):b,u=t?t.getElementsByTagName("textarea"):f,r=a?a.length:0,n=u?u.length:0,o=0,l=r+n;l>o;o++)i=r>o?a[o]:u[o-r],e(i)}function i(t){u(t,n)}function l(t){u(t,a)}function o(t){return function(){m&&t.value===t.getAttribute(V)&&"true"===t.getAttribute(D)?M.moveCaret(t,0):n(t)}}function c(t){return function(){a(t)}}function s(t){return function(e){return A=t.value,"true"===t.getAttribute(D)&&A===t.getAttribute(V)&&M.inArray(C,e.keyCode)?(e.preventDefault&&e.preventDefault(),!1):void 0}}function d(t){return function(){n(t,A),""===t.value&&(t.blur(),M.moveCaret(t,0))}}function g(t){return function(){t===r()&&t.value===t.getAttribute(V)&&"true"===t.getAttribute(D)&&M.moveCaret(t,0)}}function v(t){return function(){i(t)}}function p(t){t.form&&(T=t.form,"string"==typeof T&&(T=document.getElementById(T)),T.getAttribute(U)||(M.addEventListener(T,"submit",v(T)),T.setAttribute(U,"true"))),M.addEventListener(t,"focus",o(t)),M.addEventListener(t,"blur",c(t)),m&&(M.addEventListener(t,"keydown",s(t)),M.addEventListener(t,"keyup",d(t)),M.addEventListener(t,"click",g(t))),t.setAttribute(j,"true"),t.setAttribute(V,x),(m||t!==r())&&a(t)}var b,f,m,h,A,y,E,x,L,T,N,S,w,B=["text","search","url","tel","email","password","number","textarea"],C=[27,33,34,35,36,37,38,39,40,8,46],k="#ccc",I="placeholdersjs",R=RegExp("(?:^|\\s)"+I+"(?!\\S)"),V="data-placeholder-value",D="data-placeholder-active",P="data-placeholder-type",U="data-placeholder-submit",j="data-placeholder-bound",q="data-placeholder-focus",z="data-placeholder-live",F="data-placeholder-maxlength",G=document.createElement("input"),H=document.getElementsByTagName("head")[0],J=document.documentElement,K=t.Placeholders,M=K.Utils;if(K.nativeSupport=void 0!==G.placeholder,!K.nativeSupport){for(b=document.getElementsByTagName("input"),f=document.getElementsByTagName("textarea"),m="false"===J.getAttribute(q),h="false"!==J.getAttribute(z),y=document.createElement("style"),y.type="text/css",E=document.createTextNode("."+I+" { color:"+k+"; }"),y.styleSheet?y.styleSheet.cssText=E.nodeValue:y.appendChild(E),H.insertBefore(y,H.firstChild),w=0,S=b.length+f.length;S>w;w++)N=b.length>w?b[w]:f[w-b.length],x=N.attributes.placeholder,x&&(x=x.nodeValue,x&&M.inArray(B,N.type)&&p(N));L=setInterval(function(){for(w=0,S=b.length+f.length;S>w;w++)N=b.length>w?b[w]:f[w-b.length],x=N.attributes.placeholder,x?(x=x.nodeValue,x&&M.inArray(B,N.type)&&(N.getAttribute(j)||p(N),(x!==N.getAttribute(V)||"password"===N.type&&!N.getAttribute(P))&&("password"===N.type&&!N.getAttribute(P)&&M.changeType(N,"text")&&N.setAttribute(P,"password"),N.value===N.getAttribute(V)&&(N.value=x),N.setAttribute(V,x)))):N.getAttribute(D)&&(n(N),N.removeAttribute(V));h||clearInterval(L)},100)}M.addEventListener(t,"beforeunload",function(){K.disable()}),K.disable=K.nativeSupport?e:i,K.enable=K.nativeSupport?e:l}(this);










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
				  
				  $('#subscribe-button').removeClass('ajax-spinner');
				  spinner.stop();

				  if( $("html").hasClass("lt-ie10") ){
                  	$('.subscribe-input-cell').hide();
                  	$('.subscribe-button-cell').hide();
                  	$('.subscribe-success-message').show();
				  }
				  else{
					  $('.subscribe-success-message').fadeIn(100);
				  }

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

		var videos = new Array('<?php echo $videos[0]['video']; ?>', '<?php echo $videos[1]['video']; ?>', '<?php echo $videos[2]['video']; ?>', '<?php echo $videos[3]['video']; ?>', '<?php echo $videos[4]['video']; ?>');

        </script>
    </div></body></html>