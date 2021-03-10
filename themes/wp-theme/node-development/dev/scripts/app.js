(function bcAppJS() {
	/* global Flickity */
	const debug = true; 
	/* 
		GSAP Get Started tests
		https://greensock.com/get-started/ 
	*/  
	console.log('WP Base Theme here');
	if (debug) {	
		console.log('Debug is go');
		console.log('===========');
		console.log('...');
	}
	
	
	/* Main site navigation */
	
	function mainNavigationSetup() {
		if (window.outerWidth >= 1024 ) {
			return true;
		}
		const $siteHeader = document.querySelector('.bc-site-header');
		const $siteHeaderMenuLink = document.querySelector('.bc-site-header__menu-link');
		const $siteHeaderMainNav = document.querySelector('.bc-site-header__main-navigation');
		if (($siteHeader && $siteHeader !== undefined) && ($siteHeaderMenuLink && $siteHeaderMenuLink !== undefined) && ($siteHeaderMainNav && $siteHeaderMainNav !== undefined)) {
			if (debug) {
				console.log(`Main navigation set up`);
				console.log(`----------------------`);
				
				console.log(`window.outerWidth is ${window.outerWidth}`);
			}
		}	
		
		/* 
			start
			-- nav hidden --
			onclick navLink
			-- nav visible --
			onclick navLink
			-- nav visible --
		*/
		$siteHeaderMenuLink.addEventListener('click', (evt) => {
			evt.preventDefault();
			console.log(`Header class list: ${$siteHeader.classList}`);
			$siteHeader.classList.toggle('bc-is-active'); 
		});
		
		
	}//mainNavigationSetup()
	mainNavigationSetup();
	
	/* Flickity Sliders */
	const $bcFlkSliders = document.querySelectorAll('.bc-flickity');
	function setUpSliders (sliders) {
		Array.from(sliders).forEach(($bcFlkSlider, idx) => {
			if (debug) {
				console.log(`Sliders foreach`);
				console.log(`Sliders idx: ${idx}`);
			}
			const sliderType = ($bcFlkSlider.classList.contains('bc-flickity--text-slider')) ? 'text-slider' : ($bcFlkSlider.classList.contains('bc-flickity--card-slider')) ? 'card-slider' : 'video-slider'; 
			if (debug) {
				console.log(`Slider type: ${sliderType}`);
			}
			
			const flkSlider = new Flickity($bcFlkSlider, {
				adaptiveHeight: (sliderType === 'text-slider' ) ? true : false,
				cellAlign: (sliderType === 'card-slider' ) ? 'left' : 'center',
				groupCells: true
			});
			flkSlider.select(0);
			//const $button = $bcFlkSlider.querySelector('.flickity-button');
			
			flkSlider.on('change', () => {
				
				const videoSlides = $bcFlkSlider.querySelectorAll('.bc-flickity__slide--video');
				
				if (videoSlides && videoSlides.length > 0) {
					Array.from(videoSlides).forEach((slide) => {
						slide.querySelector('iframe').stopVideo();
					});
				}
			});
		});//end foreach bcFlkSliders
	}//end setUpSliders()
	if ($bcFlkSliders &&  $bcFlkSliders.length > 0) {
		if (debug) {
			console.log('Flickity slider set up.');
			console.log('-----------------------');
			console.log(`$bcFlkSliders length is ${$bcFlkSliders.length}`);
		}
		setUpSliders($bcFlkSliders);
		
		window.addEventListener('resize', () => {
			setUpSliders($bcFlkSliders);
		});
		
	}//end if $bcFlkSliders
	
	window.addEventListener('resize', () => {
		mainNavigationSetup();
	});
	
	
})(window);
/* App.js */

