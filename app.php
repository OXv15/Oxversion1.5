<?php include 'ox/php/ox.min.php'; ?>
<?php links('rel=stylesheet type=text/css href=ox/css/ox.min.css') ?>
<?php links('rel=stylesheet type=text/css href=ox/css/ox.css') ?>
<?php
DOCTYPE('');
html('');
head('');
title(''); echo 'OX | Home'; _title();
links("rel=stylesheet type='text/css'  href='assets/css/ox.main.css'");
links("rel=stylesheet type='text/css'  href='assets/bootstrap/css/bootstrap.min.css'");
links("rel=stylesheet type='text/css'  href='assets/font-awesome-4.7.0/css/font-awesome.min.css'");
script("src='assets/bootstrap/js/bootstrap.min.js'"); _script();
script("src='assets/popper/popper.min.js'"); _script();
script("src='assets/bootstrap/js/carousel.js'"); _script();
script("src='assets/bootstrap/js/collapse.js'"); _script();
script("src='assets/bootstrap/js/popover.js'"); _script();
script("src='assets/bootstrap/js/modal.js'"); _script();
script("src='assets/jquery/jquery.min.js'"); _script();
script("src='assets/bootstrap/js/dropdown.js'"); _script();
script("src='assets/jquery/jquery.min.js'"); _script();
script("src='assets/popper/popper.min.js'"); _script();
script("src='assets/js/bootstrap.min.js'"); _script();
script("src='assets/js/interaction.js'"); _script();
script("src='assets/js/index.js'"); _script();
script("src='assets/js/materialize.min.js'"); _script();
script("src='assets/js/init.js'"); _script();
 _head();
body('class="ox-bg-dark"');

//////////////////////////  DESKTOP  NAVBAR /////////////////////////////////
		nav($att="class='navbar container navbar-expand-md navbar-dark ox-bg-dark ox-nav-outset-dark  nav-desktop fixed-top p-3'");
			a($att="class='navbar-brand mt-0 text-white text-outset'"); echo "OX v1.5"; _a();
			button($att="class='navbar-toggler m-2' type='button' data-toggle='collapse' data-target='#oxnavdropdown' aria-controls='oxnavdropdown' aria-expanded='false' aria-label='Toggle navigation'");
				span($att='class="navbar-toggler-icon"');  _span();
			_button();
			div($att='class="collapse navbar-collapse" id="oxnavdropdown"');
				ul($att='class="navbar-nav mr-auto "');
					li($att='class="nav-item text-white active"'); a('href="app.php" class="nav-link"');echo "Home"; _a(); _li();
					li($att='class="nav-item"'); 
						a($att='class="container-fluid dropdown-toggle nav-link text-white " href="http://example.com" id="oxnavdropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"');
							echo "Get started"; 
						_a();
						div($att='class="dropdown-menu p-3 ox-bg-dark " aria-labelledby="oxnavdropdown1"');
							form($att='class="" method="POST" action="app.php"');
								input($att='type="submit" name="documentation" 	value="Documentation" class="btn container-fluid text-white  p-3"');
							_form();
							form($att='class="" method="POST" action="ox.zip"');
								input($att='type="submit" name="download" 	value="Download source" class="btn container-fluid text-white  p-3"');
							_form();
							form($att='class="" method="POST" action="app.php"');
								input($att='type="submit" name="contact" 	value="Contact us" class="btn container-fluid text-white p-3"');
							_form();
						_div();
					_li();
					li($att='class="nav-item text-white active"'); a('href="pages/hub.php" class="nav-link"');echo "Visit our hub ";i('class="fa fa-home"');_i(); _a(); _li();
				_ul();
				form($att='class="form-inline my-2 my-md-0"');
					input($att='class="form-control" type="text" placeholder="Search"');
				_form();
			_div();
		_nav();
		////////////////////////////////////////////////////////////////////
		/////////////////////// MOBILE NAVBAR //////////////////////////////
			include 'pages/mobilenav.php';
		///////////////////////////////////////////////////////////////////




		//////////////////////////  MAIN DIV /////////////////////////////////
		//////////////////////////////////////////////////////////////////////

		div($att='class="ox-bg-dark text-white main-div" style="margin-top: 5em;"');
			if (filter_has_var(INPUT_POST, 'documentation')) {
				include 'pages/documentation.php';
			}elseif (filter_has_var(INPUT_POST, 'contact')) {
				include 'pages/contact.php';
			}elseif (filter_has_var(INPUT_POST, 'home')) {
				require 'pages/welcome.php';
			}else{
				include 'pages/welcome.php';
			}
		_div();


		footer($att='class="ox-bg-dark p-3 text-center text-white" ');
			div($att='class="row"');
				div($att='class="col-lg-2"');
					img($att='src="assets/imgs/art.jpg" style="width: 100%;height:250px;"');
				_div();
				div($att='class="col-lg-3"');
					h3($att='class="text-white text-center"'); echo "ABOUT US"; _h3();
					//hr($att='class="bg-white"');
					p($att='class="text-center"'); echo "lorekdjbds xjb mxblxhm xjbcbx xjxxb"; _p();
				_div();
				div($att='class="col-lg-3 text-center"');
					div($att='class="row container-fluid"');
						div($att='class="col-lg-6"');
							h3($att='class="text-white text-center"'); echo "Other topics"; _h3();
							//hr($att='class="bg-white"');
							p($att='class="text-center"'); echo "lorekdjbds xjb mxblxhm xjbcbx xjxxb"; _p();
						_div();
						div($att='class="col-lg-6 text-center"');
							h3($att='class="text-white text-center"'); echo "Contacts"; _h3();
							//hr($att='class="bg-white"');
							p($att='');
								i($att='class="fa fa-facebook text-center"');_i(); echo " Facebook";
							_p();
							p($att='');
								i($att='class="fa fa-twitter text-center"');_i(); echo " Twitter";
							_p();
							p($att='');
								i($att='class="fa fa-instagram text-center"');_i(); echo " Instagram";
							_p();
							p($att='');
								i($att='class="fa fa-google text-center"');_i(); echo " Gmail";
							_p();
						_div();
					_div();
				_div();
				div($att='class="col-lg-4"');
					iframe($att='src="gg.php" style="width:100%;border-style: none;height:250px;	"');
				_div();
			_div();
		_footer();

_body();
_html();

?>
