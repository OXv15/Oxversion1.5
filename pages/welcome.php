<?php links('assets/css/ox.main.css'); ?>
<style type="text/css">
	      /* CUSTOMIZE THE CAROUSEL
-------------------------------------------------- */

/* Carousel base class */
.carousel {
}
/* Since positioning the image, we need to help out the caption */
.carousel-cap {
position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  z-index: 10;
}

/* Declare heights because of positioning of img element */
.carousel-item {
width: 100%;
  height: 80vh;
  background-color: #777;
}
.carousel-item > img {
  position: absolute;
  top: 0px;
  left: 0px;
  width: 100% !important;
  height: 100% !important;
}
.c1{;
  background: linear-gradient( rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8) ), url(assets/imgs/ox1.png) !important;
  background-size: cover !important;
}
.c2{
  background: linear-gradient( rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8) ), url(assets/imgs/ox2.png) !important;
  background-size: cover !important;
}
.c3{
  background: linear-gradient( rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8) ), url(assets/imgs/art.jpg) !important;
  background-size: cover !important;
}

.ox-card-img{
  width: 100%;
  height: 300px;
}
@media screen and (max-width: 1204px){
  .doc{
    display: none !important;
  }
  .nav-desktop{
    display: none !important;
  }
  .main-div{
    margin-top: 0px !important;
  }
}

@media screen and (min-width: 1204px){
  .nav-mobile{
    display:none !important;
  }
}
</style>
<?php
div($att='class="row"');
	div($att='class="col-lg-2 p-4 ox-bg-dark doc text-white"');
		h4($att='class="text-white text-center"'); echo "Documentation"; _h4();
		hr($att='class="bg-white"');
		p($att="class='text-center'");
			echo "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dol.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua,	 Ut enim ad minim veniam,
				quis nostrud exercitation.";
		_p();
		form($att=' class="nav-item justify-content-cent er my-auto d-flex" method="POST" action="index-functions.php"');
			input($att='class="nav-link text-dark bg-white border-none btn p-3	" type="submit" name="documentation" value="Documentation"');
		_form();
	_div();
	div($att='class="col-lg-10 ox-bg-dark"');
		div($att='id="myCarousel" class="carousel slide ox-bg-dark" data-ride="carousel"');
			ol($att='class="carousel-indicators"');
				li($att='data-target="#myCarousel" data-slide-to="0" class="active"'); _li();
				li($att='data-target="#myCarousel" data-slide-to="1"'); _li();
				li($att='data-target="#myCarousel" data-slide-to="2"'); _li();
			_ol();
			div($att='class="carousel-inner"'); 
				div($att='class="carousel-item active c1"'); 
					div($att='class="container"'); 
						div($att='class="carousel-cap  text-center"');
							i($att='class="fa fa-quote-left fa fa-3x"'); _i();
							h1($att='class="text-white fa-3x"'); echo "WE BRING THE FUTURE"; _h1();
							p($att='class="fa-2x"'); echo "Building webapps in ease with a strong backend"; _p();
						_div();
					_div();
				_div();

				div($att='class="carousel-item c2"'); 
					div($att='class="container"'); 
						div($att='class="carousel-cap  text-center"');
							i($att='class="fa fa fxz\-quote-left fa fa-3x"'); _i();
							h1($att='class="text-white fa-3x"'); echo "WE CREATE A CHANGE"; _h1();
							p($att='class="fa-2x"'); echo "Changing the idea behinde webapps with php"; _p();
						_div();
					_div();
				_div();

				div($att='class="carousel-item 	 c3"'); 
					div($att='class="container"');  
						div($att='class="carousel-cap  text-center"');
							i($att='class="fa fa-quote-left fa fa-3x"'); _i();
							h1($att='class="text-white fa-3x"'); echo "WE BRING THE FUTURE"; _h1();
							p($att='class="fa-2x"'); echo "Building webapps in ease with a strong backend"; _p();
						_div();
					_div();
				_div();
			_div();
		_div();
	_div();
_div();

div($att='class="text-dark mt-3 mb-5 container-fluid justify-content-center my-auto d-flex ox-bg-dark"');
	div($att='class="row container"'); 
		div($att='class="col-lg-4"');
			div($att='class="card mb-3 mt-3"');
				img($att='src="assets/imgs/cover.png" class="img-responsive ox-card-img"');
				div($att='class="card-footer"');
					p($att='class="text-dark text-center"');
						echo "Download free courses on creating webapps with ox";
					_p();
					p('');
						button($att='class="btn ox-bg-dark container-fluid text-white"'); echo "Download $0.00 <i class='fa fa-shopping-cart'></i>"; _button();
					_p();
				_div();
			_div();
		_div();

		
		div($att='class="col-lg-4"');
			div($att='class="card mb-3 mt-3"');
				img($att='src="assets/imgs/cover.png" class="img-responsive ox-card-img"');
				div($att='class="card-footer"');
					p($att='class="text-dark text-center"');
						echo "Download beginner courses on creating webapps with ox";
					_p();
					p('');
						button($att='class="btn ox-bg-dark container-fluid text-white"'); echo "Download $9.99 <i class='fa fa-shopping-cart'></i>"; _button();
					_p();
				_div();
			_div();
		_div();

		
		div($att='class="col-lg-4"');
			div($att='class="card mb-3 mt-3"');
				img($att='src="assets/imgs/cover.png" class="img-responsive ox-card-img"');
				div($att='class="card-footer"');
					p($att='class="text-dark text-center"');
						echo "Download advanced courses on creating webapps with ox";
					_p();
					p('');
						button($att='class="btn ox-bg-dark container-fluid text-white"'); echo "Download $13.50 <i class='fa fa-shopping-cart'></i>"; _button();
					_p();
				_div();
			_div();
		_div();
	_div();
_div();

div($att='class="row bg-white ox-text-dark"');
	div($att='class="container"');
		h1($att='class="text-center fa-4x ox-text-outset"'); echo "SHOWCASE"; _h1();
		hr($att='class="featurette-divider"');
		div($att='class="row featurette"');
			div($att='class="col-md-7"');
				h2($att='class="featurette-heading"'); echo "First featurette heading";
					span($att='class="text-muted"'); _span();
				_h2();
				p($att='class="lead"'); echo "Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo."; _p();
			_div();
			div($att='class="col-md-5"');
				img($att='class="featurette-image img-fluid mx-auto" src="assets/imgs/gal.jpg" height="350px" alt="Generic placeholder image"');
			_div();
		_div();

		hr($att='class="featurette-divider"');

		div($att='class="row featurette"');
			div($att='class="col-md-7 order-md-2"');
				h2($att='class="featurette-heading"'); echo "First featurette heading";
					span($att='class="text-muted"'); _span();
				_h2();
				p($att='class="lead"'); echo "Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo."; _p();
			_div();
			div($att='class="col-md-5 order-md-1"');
				img($att='class="featurette-image img-fluid mx-auto" src="assets/imgs/gal.jpg" height="350px" alt="Generic placeholder image"');
			_div();
		_div();

		hr('');
		
		div($att='class="row featurette"');
			div($att='class="col-md-7"');
				h2($att='class="featurette-heading"'); echo "First featurette heading";
					span($att='class="text-muted"'); _span();
				_h2();
				p($att='class="lead"'); echo "Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo."; _p();
			_div();
			div($att='class="col-md-5"');
				img($att='class="featurette-image img-fluid mx-auto" src="assets/imgs/gal.jpg" height="350px" alt="Generic placeholder image"');
			_div();
		_div();
	_div();
_div();


?>
