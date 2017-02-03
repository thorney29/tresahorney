

$(document).ready(function(){
   
      var url = window.location.pathname, 
        urlRegExp = new RegExp(url == '/' ? window.location.origin + '/?$' : url.replace(/\/$/,'')); // create regexp to match current url pathname and remove trailing slash if present as it could collide with the link in navigation in case trailing slash wasn't present there
        // now grab every link from the navigation
        $('.nav a').each(function(){
            // and test its normalized href against the url pathname regexp
            if(urlRegExp.test(this.href.replace(/\/$/,''))){
                $(this).addClass('current');
            }
        });
	$('img[title]').qtip({
		position: {
			my: 'top center',
			at: 'center'
		},
		style: {
			classes: 'ui-tooltip-cream ui-tooltip-rounded'
		}
	});
	//  The function to change the class
	var changeClass = function (r,className1,className2) {
		var regex = new RegExp("(?:^|\\s+)" + className1 + "(?:\\s+|$)");
		if( regex.test(r.className) ) {
			r.className = r.className.replace(regex,' '+className2+' ');
	    }
	    else{
			r.className = r.className.replace(new RegExp("(?:^|\\s+)" + className2 + "(?:\\s+|$)"),' '+className1+' ');
	    }
	    return r.className;
	};	

	//  Creating our button for smaller screens
	var menuElements = document.getElementById('menu');
	menuElements.insertAdjacentHTML('afterBegin','<button type="button" id="menutoggle" class="navtoogle" aria-hidden="true"><i aria-hidden="true" class="icon-menu"> </i> Menu</button>');

	//  Toggle the class on click to show / hide the menu
	document.getElementById('menutoggle').onclick = function() {
		changeClass(this, 'navtoogle active', 'navtoogle');
	}

	// document click to hide the menu
	// http://tympanus.net/codrops/2013/05/08/responsive-retina-ready-menu/comment-page-2/#comment-438918
	document.onclick = function(e) {
		var mobileButton = document.getElementById('menutoggle'),
			buttonStyle =  mobileButton.currentStyle ? mobileButton.currentStyle.display : getComputedStyle(mobileButton, null).display;

		if(buttonStyle === 'block' && e.target !== mobileButton && new RegExp(' ' + 'active' + ' ').test(' ' + mobileButton.className + ' ')) {
			changeClass(mobileButton, 'navtoogle active', 'navtoogle');
		}
	}
	// This was the original parallax code
	//Create cross browser requestAnimationFrame method:
	// window.requestAnimationFrame = window.requestAnimationFrame
	// || window.mozRequestAnimationFrame
	// || window.webkitRequestAnimationFrame
	// || window.msRequestAnimationFrame
	// || function(f){setTimeout(f, 1000/60)}

	// // get this url to check for currrent menu item
	// var url = window.location.href; 
	// if(url.indexOf("/ ") === 1) {
	// var bubble1 = document.getElementById('bubbles1');
	// var bubble2 = document.getElementById('bubbles2');
 
	// function parallaxbubbles() {
	// 	var scrolltop = window.pageYOffset // get number of pixels document has scrolled vertically
	// 	bubble1.style.top = -scrolltop * .2 + 'px' // move bubble1 at 20% of scroll rate
	// 	bubble2.style.top = -scrolltop * .5 + 'px' //move bubble2 at 50% of scroll rate
	// }
	// window.addEventListener('scroll', function(){ //on page scroll
	// 	requestAnimationFrame(parallaxbubbles) // call parallaxbubbles() on next available screen paint
	// },false)
	// }

	// This is the parallax code for the two bubble like images on the home page
	 var myBoxes = $('.bubbles');     
	 $(window).scroll(function(){
     	var scrollTop = $(window).scrollTop();
     	myBoxes.each(function(){
			var $this = $(this);
			var scrollspeed = parseInt($this.data('scroll-speed')), offset = - scrollTop / scrollspeed;
		 	$this.css('transform',   'translateY(' + offset + 'px)');
		});
	});
}); 


