<?php
nav($att="class='navbar container nav-outset navbar-expand-md ox-bg-dark navbar-outset fixed-top p-3'");
	a($att="class='navbar-brand mt-0 text-white text-outset'"); echo "OX v1.5"; _a();
	button($att="class='navbar-toggler m-2' type='button' data-toggle='collapse' data-target='#oxnavdropdown' aria-controls='oxnavdropdown' aria-expanded='false' aria-label='Toggle navigation'");
		span($att='class="navbar-toggler-icon"');i('class="fa fa-angle-down text-white" style="font-size:30px;"');_i();  _span();
	_button();
	div($att='class="collapse navbar-collapse" id="oxnavdropdown"');
		ul($att='class="navbar-nav mr-auto "');
			li($att='class="nav-item active"');a('href="../app.php" class="text-white"');echo "Home";_a(); _li();
			li($att='class="nav-item"'); _li();
		_ul();
		if (isset($_COOKIE['user'])) {
			form($att='class="form-inline my-2 my-md-0"');
			input($att='class="form-control" type="text" placeholder="Search"');
			_form();
		}else{
			a('class="btn p-2 text-white ox-bg-error" href="index-login.php"'); echo "Login to join the conversations"; _a();
		}
	_div();
_nav();
?>