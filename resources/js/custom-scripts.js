$(document).ready(function () {
    
  'use strict';

  var navigation = new TimelineLite({paused:true, reversed:true});
  navigation.to("#navigationWrap", 0.2, {opacity: 1, display: 'block'})
            .to(".navbar", 0.2, {opacity: 0}, "-=0.1")
            .to(".close", 0.2, {display: "block", opacity: 1}, "-=0.1")
            .from(".menu", 0.2, {opacity: 0, y: 30})
            .from(".social", 0.3, {opacity: 0});
  
  $(".navbar, .close").click (function() {
    navigation.reversed() ? navigation.play() : navigation.reverse();
  })

  var calculateHeight;

  calculateHeight = function () {
    var $content, contentHeight, finalHeight, windowHeight;
    $content = $('#overlay-content');
    contentHeight = parseInt($content.height()) + parseInt($content.css('margin-top')) + parseInt($content.css('margin-bottom'));
    windowHeight = $(window).height();
    finalHeight = windowHeight > contentHeight ? windowHeight : contentHeight;
    return finalHeight;
  };

  $(document).ready(function () {
    $(window).resize(function () {
      if ($(window).height() < 560 && $(window).width() > 600) {
        $('#overlay').addClass('short');
      } else {
        $('#overlay').removeClass('short');
      }
      return $('#overlay-background').height(calculateHeight());
    });
    $(window).trigger('resize');

    // open
    $('#popup-trigger').click(function () {
      return $('#overlay').addClass('open').find('.signup-form input:first').select();
    });

    // close
    return $('#overlay-background,#overlay-close').click(function () {
      return $('#overlay').removeClass('open');
    });
  });
  if (!localStorage.getItem('cookieconsent')) {
		document.body.innerHTML += `\
		<div class="cookieconsent" style="position:fixed;padding:20px;left:0;bottom:0;background-color:#000;color:#FFF;text-align:center;width:100%;z-index:99999;">\
			This site uses cookies. By continuing to use this website, you agree to their use. \
			<a href="#" style="color:#0f8;">I Understand</a>\ | 	<a href="${window.location.pathname.split('/')[1]}/privacy-policy" style="color:#0f8;">Privacy Policy</a>
		</div>\
		`;
		document.querySelector('.cookieconsent a').onclick = function(e) {
			e.preventDefault();
			document.querySelector('.cookieconsent').style.display = 'none';
			localStorage.setItem('cookieconsent', true);
		};
	}
} (jQuery) );