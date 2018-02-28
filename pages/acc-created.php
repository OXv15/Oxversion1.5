<?php include '../ox/php/ox.min.php'; ?>
<?php style('');
	   echo '  /* CUSTOMIZE THE CAROUSEL
	    -------------------------------------------------- */
	    
	    /* Carousel base class */
	    .carousel {
	    	height: 100vh !important;
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
	      height: 100%;
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
	      background: linear-gradient( rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8) ), url(../assets/imgs/art.jpg) !important;
	      background-size: cover !important;
	    }
	    .c2{
	      background: linear-gradient( rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8) ), url(../assets/imgs/ox1.png) !important;
	      background-size: cover !important;
	    }
	    .c3{
	      background: linear-gradient( rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8) ), url(../assets/imgs/ox2.png) !important;
	      background-size: cover !important;
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
	    .login-form{
	    	position: absolute;
	    	top: 50%;
	    	left: 50%;
	    	transform: translate(-50%,-50%);
	    	width: 50%;
	    	z-index: 10000000000000000000000000000000000000000;
	    }
	    .dark{
	    	background: #272822 !important;
	    }';
_style();
?>
<?php links('rel=stylesheet type=text/css href=../ox/css/ox.min.css') ?>
<?php links('rel=stylesheet type=text/css href=../ox/css/ox.css') ?>
<?php
DOCTYPE('');
html('');
head('');
title(''); echo 'OX | Account created'; _title();
links("rel=stylesheet type='text/css'  href='../assets/bootstrap/css/bootstrap.min.css'");
links("rel=stylesheet type='text/css'  href='../assets/font-awesome-4.7.0/css/font-awesome.min.css'");
script("src='../assets/bootstrap/js/bootstrap.min.js'"); _script();
script("src='../assets/popper/popper.min.js'"); _script();
script("src='../assets/bootstrap/js/carousel.js'"); _script();
script("src='../assets/bootstrap/js/collapse.js'"); _script();
script("src='../assets/bootstrap/js/popover.js'"); _script();
script("src='../assets/bootstrap/js/modal.js'"); _script();
script("src='../assets/jquery/jquery.min.js'"); _script();
script("src='../assets/bootstrap/js/dropdown.js'"); _script();
script("src='../assets/jquery/jquery.min.js'"); _script();
script("src='../assets/popper/popper.min.js'"); _script();
script("src='../assets/js/bootstrap.min.js'"); _script();
script("src='../assets/js/interaction.js'"); _script();
script("src='../assets/js/index.js'"); _script();
script("src='../assets/js/materialize.min.js'"); _script();
script("src='../assets/js/init.js'"); _script();
 _head();
body('class="ox-bg-dark"');

	div($att='id="myCarousel" class="carousel slide ox-bg-dark" data-ride="carousel"');
      ol($att='class="carousel-indicators"');
        li($att='data-target="#myCarousel" data-slide-to="0" class="active"'); _li();
        li($att='data-target="#myCarousel" data-slide-to="1"'); _li();
        li($att='data-target="#myCarousel" data-slide-to="2"'); _li();
      _ol();
      div($att='class="carousel-inner"'); 
        div($att='class="carousel-item active c1"'); 
          div($att='class="container"'); 
          _div();
        _div();

        div($att='class="carousel-item c2"'); 
          div($att='class="container"'); 
          _div();
        _div();

        div($att='class="carousel-item   c3"'); 
          div($att='class="container"');  
          _div();
        _div();
      _div();
    _div();

    div('class="login-form p-5"');
    	div('class="p-5 ox-bg-success"');
    		/* Displays user information and some useful messages */
			session_start();

			// Check if user is logged in using the session variable
			if ( $_SESSION['logged_in'] != 1 ) {
				echo "<script>alert('User must login to view this page');</script>";
			  header("location: index-register.php");  
			}
			else {
			    // Makes it easier to read
			    $first_name = $_SESSION['first_name'];
			    $last_name = $_SESSION['last_name'];
			    $email = $_SESSION['email'];
			    $active = $_SESSION['active'];
			}
			h4('class="text-center"'); echo 'WELCOME';_h4();

    	_div();
    _div();

_body();
_html();

?>
