<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Document</title>
	<link href="https://fonts.googleapis.com/css?family=Alegreya|Alegreya+Sans|Merriweather|Merriweather+Sans|Nunito|Nunito+Sans|Quattrocento|Quattrocento+Sans|Roboto|Roboto+Mono|Roboto+Slab&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/style.css" />
</head>  
<body> 
	<section class="container">
		<article class="feature-section gsap-test">
			<h1 class="gsap-test__heading">I <span class='past'>animated</span> this</h1>
			<div class="gsap-test__dots">
				<span class="gsap-test__dots__dot"></span>
				<span class="gsap-test__dots__dot"></span>
				<span class="gsap-test__dots__dot"></span>
				<span class="gsap-test__dots__dot"></span> 
			</div>
			<div class="gsap-test__dots-controllers">
					<button id="dots-tween-play">Play</button>
					<button id="dots-tween-pause">Pause</button>
					<button id="dots-tween-resume">Resume</button> 
					<button id="dots-tween-reverse">Reverse</button>
					<button id="dots-tween-current-progress">Current progress</button>
					<button id="dots-tween-progress-20">Progress to 20%</button>
					<button id="dots-tween-go-to-end">Go to end</button>
					<button id="dots-tween-reset">Reset</button>
				</div>
		</article>
		<article class="gsap-test-svg">
			<h2>SVG test</h2>
			<div class="gsap-test-svg__svg">
				<svg id="ah-logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 158.03"> 
					<title>Ann Hinds - leadership matters</title>
					<g id="mark-only">
						<circle id="outer-elipse-center" class="ah-outer-elipse" cx="255.67" cy="79.02" r="78.52" style="fill:none;stroke:#d1679b;stroke-miterlimit:10"/>
						<circle id="outer-elipse-right" class="ah-outer-elipse" cx="334.19" cy="79.02" r="78.52" style="fill:none;stroke:#d1679b;stroke-miterlimit:10"/>
						<circle id="outer-elipse-left" class="ah-outer-elipse"  cx="176.6" cy="79.02" r="78.52" style="fill:none;stroke:#d1679b;stroke-miterlimit:10"/>
						<line id="align-line" class="ah-align-line"  x1="256" x2="256"  y1="79.02" y2="79.02" style="fill:none;stroke:#d1679b;stroke-miterlimit:10;stroke-width:6px"/>
						<circle id="inner-elipse-right" class="ah-inner-elipse" cx="334.73" cy="79.02" r="39.2" style="fill:#fff;stroke:#d1679b;stroke-miterlimit:10;stroke-width:6px"/>
						<circle id="inner-elipse-center" class="ah-inner-elipse" cx="256.05" cy="79.02" r="39.2" style="fill:#fff;stroke:#d1679b;stroke-miterlimit:10;stroke-width:6px"/>
						<circle id="inner-elipse-left" class="ah-inner-elipse" cx="177.6" cy="79.02" r="39.2" style="fill:#fff;stroke:#d1679b;stroke-miterlimit:10;stroke-width:6px"/>
						<circle id="cell-center" class="ah-cell" cx="256.05" cy="79.02" r="15.72" style="fill:#45508c"/>
						<circle id="cell-right" class="ah-cell" cx="334.58" cy="79.02" r="9.71" style="fill:#45508c"/>
						<circle id="cell-left" class="ah-cell" cx="177.6" cy="79.02" r="9.71" style="fill:#45508c"/>
					</g>
				</svg>	
			</div>
			
		</article>
	</section>
	<section class="container">  
		<div class="hero">
			<div class="hero__header"></div>
			<div class="hero__body">
				<h1>Hello</h1>
				<p>Now. This is a paragraph</p>
				<p>This is yet another paragraph</p>
				<svg class="svg-icon">
					<use xlink:href="/media/svg/bc-svgs.svg#arrow--down"></use>
				</svg>
			</div>
			<div class="hero__footer"></div>
			<div class="hero__image-overlay"></div>  
		</div>
	</section>
	<section class="container">
		<div class="feature-section">
			<h1>Hello</h1>
			<p>Now. This is a paragraph</p>
			<p>This is another paragraph</p>
		</div>
	</section>  
	<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.0.5/gsap.min.js"></script>-->
	<script src="assets/scripts/app-concat.js"></script>  
</body>
</html> 