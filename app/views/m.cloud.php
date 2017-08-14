<html>
	<head>
	<style>
	*{
		box-sizing: border-box;
		margin: 0;
		padding: 0
	}
	body {
		color: #eee;
		text-shadow: 0 -1px 0 rgba( 0, 0, 0, .6 );
		font-family: 'Open Sans', sans-serif;
		font-size: 13px;
		line-height: 16px;
		overflow: hidden;
		background: black;
	}
	#viewport {
		-webkit-perspective: 1000;
		-moz-perspective: 1000;
		-o-perspective: 1000;
		perspective: 1000;
		position: absolute;
		left: 0;
		top: 0;
		right: 0;
		bottom: 0;
		overflow: hidden;
		/* background-image: linear-gradient(bottom, rgb(69,132,180) 28%, rgb(31,71,120) 64%);
		background-image: -o-linear-gradient(bottom, rgb(69,132,180) 28%, rgb(31,71,120) 64%);
		background-image: -moz-linear-gradient(bottom, rgb(69,132,180) 28%, rgb(31,71,120) 64%);
		background-image: -webkit-linear-gradient(bottom, rgb(69,132,180) 28%, rgb(31,71,120) 64%);
		background-image: -ms-linear-gradient(bottom, rgb(69,132,180) 28%, rgb(31,71,120) 64%); */

		 /* background-image: -webkit-gradient(
			linear,
			left bottom,
			left top,
			color-stop(0.28, rgb(69,132,180)),
			color-stop(0.64, rgb(31,71,120))
		);  */
		width:140%;
		height: 130%;
		z-index: 1;
	}

	#world {
		position: absolute;
		left: 50%;
		top: 50%;
		margin-left: -156px;
		margin-top: -356px;
		height: 512px;
		width: 512px;
		/* background-color: rgba( 255, 0, 0, .2 ); */
		-webkit-transform-style: preserve-3d;
		-moz-transform-style: preserve-3d;
		-o-transform-style: preserve-3d;
		z-index: 1;
	}

	#world div {
		-webkit-transform-style: preserve-3d;
		-moz-transform-style: preserve-3d;
		-o-transform-style: preserve-3d;
		margin-left:-100px;
	}

	.cloudBase {
		/* background-color: rgba( 255, 0, 255, .5 ); */
		position: absolute;
		width: 100%;
		height: 100%;
		/* background-image: url('cloud.png'); */
		margin-left: -10px;
		margin-top: -10px;
		z-index: 0;
	}

	.cloudLayer {
		position: absolute;
		left: 50%;
		top: 50%;
		width: 256px;
		height: 256px;
		margin-left: -128px;
		margin-top: -128px;
		/* background-color: rgba( 0, 255, 255, .1 ); */
		-webkit-transition: opacity .5s ease-out;
		-moz-transition: opacity .5s ease-out;
		-o-transition: opacity .5s ease-out;
		transition: opacity 0.5s ease-out;
		z-index: 0;
	}
		
		.movingCloud1{
			left: 0;
			-webkit-animation: cloudAnimation linear 20s infinite;
			animation: cloudAnimation linear 20s infinite;
		}

	#title{
		height:50px;
		opacity: 0;
		padding-left: 290px;
		position: absolute;
		/* width:600px; */
		margin-left: -190px;
		-webkit-transition: 50s;
		-moz-transition: 50s;
		-o-transition: 50s;
		transition: 20s;
		z-index: 3;
	}
	#titleBase{
		height:500px;
		width:600px;
		z-index: 1;
	}
	.bimg3{
		-webkit-transition: 40s;
		-moz-transition: 40s;
		-o-transition: 40s;
		transition: 18s;
		position:fixed;
	}
	#logo{
		-webkit-transition: 40s;
		-moz-transition: 40s;
		-o-transition: 40s;
		transition: 40s;
		position: relative;
		z-index: 7;
		padding-top: 50px;
		padding-left: 35px;
	}
	#comingSoon{
		-webkit-transition: 40s;
		-moz-transition: 40s;
		-o-transition: 40s;
		transition: 40s;
		position: relative;
		z-index: 7;
		height: 70px;
		/*width:600px;*/
		/*display: inline;*/
		/*padding-top: 470px;*/
		margin-left: 85px;
		margin-top: -50px;
	}
	#Date{
		-webkit-transition: 40s;
		-moz-transition: 40s;
		-o-transition: 40s;
		transition: 40s;
		position: relative;
		z-index: 7;
		height: 70px;
		/*width:600px;*/
		/*display: inline;*/
		/*padding-top: 470px;*/
		margin-left: 85px;
		margin-top: -20px;
	}
	.lightning{
		-webkit-filter: brightness(3);
		filter: brightness(3);
		-o-filter: brightness(3);
		-moz-filter: brightness(3);
	}
	/*Now just a opacity animation*/
	.flashit{
	-webkit-animation: flash ease-out 10s infinite;
	animation: flash ease-out 10s infinite;
	-webkit-animation-delay: 1s;
			animation-delay: 1s;
	}

	.flashit2{
	-webkit-animation: flash ease-out 15s infinite;
	animation: flash ease-out 15s infinite;
	-webkit-animation-delay: 1s;
			animation-delay: 1s;
	}

	@-webkit-keyframes flash {
		from { opacity: 0; } 
	92% { opacity: 0; }
		93% { opacity: 0.6; }
	94% { opacity: 0.2; }
	96% { opacity: 0.9; } 
		to { opacity: 0; }
	}

	@keyframes flash {
		from { opacity: 0; } 
		92% { opacity: 0; }
		93% { opacity: 0.6; }
		94% { opacity: 0.2; }
		96% { opacity: 1; } 
		to { opacity: 0; }
	}

	@keyframes cloudAnimation {
		0% { left:-20%;} 
		100% { left: 120%; }
	}
	.bimg31{
		transform: perspective(1000px) translateZ( 845px ) translateX(50px);
	}
	.bimg4{
		transform: perspective(1000px) translateX(-250px) translateY(100px) translateZ( 500px );
	}
</style>
<script>
	var titleFunc = function(){
	    var Dateimg = document.getElementById('Date');
		var thunder = document.getElementById('thunder');
		var title = document.getElementById('title');
		var logo = document.getElementById('logo');
		var comingSoon = document.getElementById('comingSoon');
		title.style.height= "300px";
		title.style.opacity="1";
		title.style.paddingLeft="0px";
		// title.style.transform = "translateY(100px)";
		document.getElementsByName('bimg3').forEach(function(cloud){
			cloud.style.opacity="0.2";
		});
		setTimeout(function(){
			title.style.height = "150px";
			title.style.paddingLeft="190px";
			title.style.transform = "translateY(-50px)";
			setTimeout(()=>{
				logo.style.opacity="1";
				setTimeout(()=>{
				    comingSoon.style.opacity="1";
				    setTimeout((()=>{
				        Dateimg.style.opacity="1";
					}))
				}, 1000);
			}, 1000);
		}, 11000);
//		setTimeout(()=>{
//			setInterval(()=>{
//				thunder.play();
//			}, 2000);
//		}, 2000);
//		setTimeout(()=>{
//			setInterval(()=>{
//				thunder.play();
//			}, 4500);
//		}, 4500);
		// let flag = 1;
		// let viewport = document.getElementById("viewport");
		// setInterval(()=>{
			// let time = Math.random() * 3700;
			// while(time<2000){
			// 	time = Math.random() * 3700;
			// }
			// console.log(Math.random());
			// let id = setInterval(()=>{
			// 	viewport.style.background = "white";
			// 	setTimeout(()=>{
			// 		viewport.style.background = "black";
			// 		setTimeout(()=>{
			// 			viewport.style.background = "white";
			// 			setTimeout(()=>{
			// 				viewport.style.background = "black";
			// 			}, 100);
			// 		}, 150);
			// 	}, 100);
			// }, time);
			// clearInterval(id);
		// }, 3000);
	}
	</script>
	</head>
	<body onload="titleFunc()">
	<audio autoplay loop>
		 <source src="http://www.takshak.in/2017/public/sounds/bgm.mp3" type="audio/mpeg"> 
	</audio>
	<audio id="thunder">
		<source src="http://www.takshak.in/2017/public/sounds/thuder1.mp3" type="audio/mpeg">
	</audio>
	<div id="viewport" >
		<div id="world" >
			<div id="titleBase">
				<!-- <img id="title" src="http:/localhost/Takshak17/public/images/Takshak.png"/> -->
				<img id="title" src="http://www.takshak.in/2017/public/images/Takshak.png"/>
				<!-- <img id="logo" src="http:/localhost/Takshak17/public/images/logo.png" style="opacity:0"/> -->
				<img id="logo" src="http://www.takshak.in/2017/public/images/logo.png" style="opacity:0"/>
				<!-- <img id="comingSoon" src="http:/localhost/Takshak17/public/images/comingSoon.png" style="opacity:0"/> -->
				<img id="comingSoon" src="http://www.takshak.in/2017/public/images/comingSoon.png" style="opacity:0"/>
				<img id="Date" src="http://www.takshak.in/2017/public/images/Date.png" style="opacity:0"/>
				<!-- <img id="comingSoon" src="./images/comingSoon.png"/> -->
				<!-- <img class="cloudLayer bimg3" name="bimg3" style="opacity:1" src="./images/cloud.png"/>  -->
			</div>
		</div>
	</div>
	<div id="cloudBase">
		<!-- <img class="cloudLayer lightning flashit" id="bimg" style="opacity:0.3" src="./images/cloud.png"/>
        <img class="cloudLayer lightning flashit" id="bimg2" style="opacity:0.4" src="./images/cloud.png"/>  -->
	</div>
	<img class="cloudLayer bimg3 bimg31" name="bimg3" style="opacity:1" src="http://www.takshak.in/2017/public/images/cloud.png"/>
	<img class="cloudLayer bimg3 bimg31 lightning flashit" name="bimg3" style="opacity:1" src="http://www.takshak.in/2017/public/images/cloud.png"/>
	<img class="cloudLayer bimg3 bimg4" name="bimg4" style="opacity:0.2" src="http://www.takshak.in/2017/public/images/cloud.png"/>
	<img class="cloudLayer bimg3 bimg4 lightning flashit2" name="bimg4" style="opacity:1" src="http://www.takshak.in/2017/public/images/cloud.png"/>
	<script>

	(function() {
		var lastTime = 0;
		var vendors = ['ms', 'moz', 'webkit', 'o'];
		for(var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
			window.requestAnimationFrame = window[vendors[x]+'RequestAnimationFrame'];
			window.cancelRequestAnimationFrame = window[vendors[x]+
			  'CancelRequestAnimationFrame'];
		}

		if (!window.requestAnimationFrame)
			window.requestAnimationFrame = function(callback, element) {
				var currTime = new Date().getTime();
				var timeToCall = Math.max(0, 16 - (currTime - lastTime));
				var id = window.setTimeout(function() { callback(currTime + timeToCall); },
				  timeToCall);
				lastTime = currTime + timeToCall;
				return id;
			};

		if (!window.cancelAnimationFrame)
			window.cancelAnimationFrame = function(id) {
				clearTimeout(id);
			};
	}())

	var layers = [],
		objects = [],

		world = document.getElementById( 'world' ),
		viewport = document.getElementById( 'viewport' ),

		d = 0,
		p = 400,
		worldXAngle = 0,
		worldYAngle = 0;

	viewport.style.webkitPerspective = p;
	viewport.style.MozPerspective = p;
	viewport.style.oPerspective = p;

	generate();

	function createCloud() {

		var div = document.getElementById('cloudBase');
		div.className = 'cloudBase';
		// var x = 256 - ( Math.random() * 512 );
		// var y = 256 - ( Math.random() * 512 );
		// var z = 256 - ( Math.random() * 512 );
		// var t = 'translateX( ' + x + 'px ) translateY( ' + y + 'px ) translateZ( ' + z + 'px )';
		// div.style.webkitTransform = t;
		// div.style.MozTransform = t;
		// div.style.oTransform = t;
		// world.appendChild( div );

		// var bimg = document.getElementById('bimg');
		// var t = 'translateZ( 400px )';
		// bimg.style.webkitTransform = t;
		// bimg.style.MozTransform = t;
		// bimg.style.oTransform = t;
		// var bimg2 = document.getElementById('bimg2');
		// var t = 'translateZ( 400px )';
		// bimg2.style.webkitTransform = t;
		// bimg2.style.MozTransform = t;
		// bimg2.style.oTransform = t;
		// document.getElementsByName('bimg3').forEach(function(cloud){
		// 	var t = 'translateZ( 400px )';
		// 	cloud.style.webkitTransform = t;
		// 	cloud.style.MozTransform = t;
		// 	cloud.style.oTransform = t;
		// 	// world.appendChild( div );
		// 	// layers.push(bimg);
		// });
		// document.getElementsByName('bimg4').forEach(function(cloud){
		// 	var t = 'translateZ( 250px ) translateX(550px) translateY(150px)';
		// 	cloud.style.webkitTransform = t;
		// 	cloud.style.MozTransform = t;
		// 	cloud.style.oTransform = t;
		// 	// world.appendChild( div );
		// 	// layers.push(bimg);
		// });
		var size = Math.round( Math.random() * 10 );
		console.log(size);
		for( var j = 0; j < 5 + size; j++ ) {
			var cloud = document.createElement( 'img' );
			cloud.style.opacity = 0;
			var r = Math.random();
			var src = 'http://www.takshak.in/2017/public/images/cloud.png';
			( function( img ) { img.addEventListener( 'load', function() {
				img.style.opacity = .4;
			} ) } )( cloud );
			cloud.setAttribute( 'src', src );

			var randomCloudClass = Math.random();
			cloud.className = 'cloudLayer movingCloud1';

			if(Math.random() > 0.5){
				cloud.style.animationDirection = "reverse";
			}	
			cloud.style.animationDuration = (22+(Math.random() * 800))+"s";
			cloud.style.animationDelay =  "-"+(10+Math.random() * 1000)+"s";
			
			var x = 256 - ( Math.random() * 512 );
			var y = 256 - ( Math.random() * 512 );
			var z = 1000 - ( Math.random() * 200 );
			console.log("z: "+z);
			var a = Math.random() * 360;
			var s = .75 + Math.random();
			x *= .2; y *= .2;
			cloud.data = {
				x: x,
				y: y,
				z: z,
				a: a,
				s: s,
				speed: .1 * Math.random()
			};
			var t = 'translateX(0px ) translateY( ' + (y) + 'px ) translateZ( ' + (z) + 'px ) scale( ' + s + ')';
			cloud.style.webkitTransform = t;
			cloud.style.MozTransform = t;
			cloud.style.oTransform = t;

			div.appendChild( cloud );
			layers.push( cloud );
		}

		return div;
	}

	// window.addEventListener( 'mousewheel', onContainerMouseWheel );
	// window.addEventListener( 'DOMMouseScroll', onContainerMouseWheel );
	// window.addEventListener( 'mousemove', onMouseMove );
	// window.addEventListener( 'touchmove', onMouseMove );

	function onMouseMove ( e ) {

		var x = e.clientX || e.touches[ 0 ].clientX;
		var y = e.clientY || e.touches[ 0 ].clientY;

		worldYAngle = -( .5 - ( x / window.innerWidth ) ) * 180;
		worldXAngle = ( .5 - ( y / window.innerHeight ) ) * 180;
		updateView();
		event.preventDefault();

	}

	function onContainerMouseWheel( event ) {

		event = event ? event : window.event;
		d = d - ( event.detail ? event.detail * -5 : event.wheelDelta / 8 );
		updateView();
		event.preventDefault();

	}

	function generate() {

		objects = [];

		// if ( world.hasChildNodes() ) {
		// 	while ( world.childNodes.length >= 1 ) {
		// 		world.removeChild( world.firstChild );
		// 	}
		// }
		
		objects.push(document.getElementById('bimg'));
		for( var j = 0; j < 1; j++ ) {
			objects.push( createCloud() );
		}

	}

	function updateView() {
		var t = 'translateZ( ' + d + 'px ) rotateX( ' + worldXAngle + 'deg) rotateY( ' + worldYAngle + 'deg)';
		world.style.webkitTransform = t;
		world.style.MozTransform = t;
		world.style.oTransform = t;
	}
	var zbing = 60;
	var zspeed = 0.01;
	function update (){

		for( var j = 0; j < layers.length; j++ ) {
			var layer = layers[ j ];
			layer.data.a += layer.data.speed;
            // var t = 'translateX( ' + layer.data.x + 'px ) translateY( ' + layer.data.y + 'px ) translateZ( ' + layer.data.z + 'px ) rotateY( ' + ( - worldYAngle ) + 'deg ) rotateX( ' + ( - worldXAngle ) + 'deg ) rotateZ( ' + layer.data.a + 'deg ) scale( ' + layer.data.s + ')';
			var t = 'translateX(0px) translateY( ' + (layer.data.y*j) + 'px ) translateZ( ' + (layer.data.z*j) + 'px ) rotateY( ' + ( - worldYAngle ) + 'deg ) rotateX( ' + ( - worldXAngle ) + 'deg ) rotateZ( ' + layer.data.a + 'deg ) scale( ' + layer.data.s + ')';
			layer.style.webkitTransform = t;
			layer.style.MozTransform = t;
			layer.style.oTransform = t;
		}
		// var layer = document.getElementById('bimg');
		// zbing = zbing + zspeed;
		// // layer.data.a += layer.data.speed;
		// // var t = 'translateX( ' + layer.data.x + 'px ) translateY( ' + layer.data.y + 'px ) translateZ( ' + layer.data.z + 'px ) rotateY( ' + ( - worldYAngle ) + 'deg ) rotateX( ' + ( - worldXAngle ) + 'deg ) rotateZ( ' + layer.data.a + 'deg ) scale( ' + layer.data.s + ')';
		// var t = 'translateZ( 345px ) rotateY( ' + ( - worldYAngle ) + 'deg ) rotateX( ' + ( - worldXAngle ) + 'deg ) rotateZ('+zbing+'deg)';
		// layer.style.webkitTransform = t;
		// layer.style.MozTransform = t;
		// layer.style.oTransform = t;
		// var layer = document.getElementById('bimg2');
		// zbing = zbing + zspeed;
		// // layer.data.a += layer.data.speed;
		// // var t = 'translateX( ' + layer.data.x + 'px ) translateY( ' + layer.data.y + 'px ) translateZ( ' + layer.data.z + 'px ) rotateY( ' + ( - worldYAngle ) + 'deg ) rotateX( ' + ( - worldXAngle ) + 'deg ) rotateZ( ' + layer.data.a + 'deg ) scale( ' + layer.data.s + ')';
		// var t = 'translateX(100px) translateZ( 270px ) rotateY( ' + ( - worldYAngle ) + 'deg ) rotateX( ' + ( - worldXAngle ) + 'deg ) rotateZ('+(-zbing)+'deg)';
		// layer.style.webkitTransform = t;
		// layer.style.MozTransform = t;
		// layer.style.oTransform = t;
		// var layer = document.getElementsByName('bimg3');
		// layer.forEach(function(cloud) {
		// 	zbing = zbing + zspeed;
		// 	// layer.data.a += layer.data.speed;
		// 	// var t = 'translateX( ' + layer.data.x + 'px ) translateY( ' + layer.data.y + 'px ) translateZ( ' + layer.data.z + 'px ) rotateY( ' + ( - worldYAngle ) + 'deg ) rotateX( ' + ( - worldXAngle ) + 'deg ) rotateZ( ' + layer.data.a + 'deg ) scale( ' + layer.data.s + ')';
		// 	var t = 'translateZ( 345px ) rotateY( ' + ( - worldYAngle ) + 'deg ) rotateX( ' + ( - worldXAngle ) + 'deg ) rotateZ('+(-zbing)+'deg)';
		// 	cloud.style.webkitTransform = t;
		// 	cloud.style.MozTransform = t;
		// 	cloud.style.oTransform = t;
		// }, this);
		// var layer = document.getElementsByName('bimg4');
		// layer.forEach(function(cloud) {
		// 	zbing = zbing + zspeed;
		// 	// layer.data.a += layer.data.speed;
		// 	// var t = 'translateX( ' + layer.data.x + 'px ) translateY( ' + layer.data.y + 'px ) translateZ( ' + layer.data.z + 'px ) rotateY( ' + ( - worldYAngle ) + 'deg ) rotateX( ' + ( - worldXAngle ) + 'deg ) rotateZ( ' + layer.data.a + 'deg ) scale( ' + layer.data.s + ')';
		// 	var t = 'translateX(-250px) translateY(100px) translateZ( 250px )  rotateY( ' + (worldYAngle) + 'deg ) rotateX( ' + ( - worldXAngle ) + 'deg ) rotateZ('+(zbing)+'deg)';
		// 	cloud.style.webkitTransform = t;
		// 	cloud.style.MozTransform = t;
		// 	cloud.style.oTransform = t;
		// }, this);
		requestAnimationFrame( update );

	}

	update();

	</script>

	</body>
</html>
