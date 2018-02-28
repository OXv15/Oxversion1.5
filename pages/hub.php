<style type="text/css">
@media screen and (max-width: 1204px){
  .activeusers{
    display: none !important;
  }
}
</style>
<?php include '../ox/php/ox.min.php'; ?>
<?php links('rel=stylesheet type=text/css href=../ox/css/ox.min.css') ?>
<?php links('rel=stylesheet type=text/css href=../ox/css/ox.css') ?>
<?php
DOCTYPE('');
html('');
head('');
title(''); echo 'OX | Hub'; _title();
links("rel=stylesheet type='text/css'  href='../assets/css/ox.main.css'");
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

	/////////////////// CHAT NAV //////////////////////
	include 'chatnav.php';
	///////////////////////////////////////////////////
	////////////////// MAIN DIV ///////////////////////
	div('class="container-fluid ox-bg-dark p-5" style="height: 100vh;"');
		div('class="container-fluid ox-bg-dark ox-outset" style="height: 90vh;"');
			div('class="row ox-bg-dark"');
				div('class="col-lg-2 activeusers ox-bg-dark container-fluid" style="height: 100%;"');
					div('class="container-fluid bg-white ox-outset mt-5 mb-5" style="height: 80%;overflow-y:scroll;"');
						h3('class="text-center"'); echo "ACTIVE USERS";_h3();
						hr('class="ox-bg-dark featurette-divider"');
						for ($i=0; $i < 20; $i++) { 
							p('class="text-center"');echo "John Deo Gideon ";i('class="fa fa-check"');_i();_p();
						}
					_div();
				_div();
				div('class="col-lg-10 ox-bg-dark"');
					div('class="container-fluid bg-white ox-outset mt-5 mb-5" style="height: 80%;overflow-y:scroll;"');
						h3('class="text-center"'); echo "CHATROOM";_h3();
						hr('class="ox-bg-dark featurette-divider"');
						for ($i=0; $i < 20; $i++) { 
							div('class="ox-bg-dark p-3 text-white m-3" style="border-radius: 10px;"');
								h5('class=""');echo "John Deo Gideon ";i('class="fa fa-envelope"');_i();_h5();
								 p('class="text-left"');echo " Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";_p();
							_div();
						}
					_div();
				_div();
			_div();
		_div();
	_div();
	//////////////////////////////////////////////////
	////////////////// FOOTER ///////////////////////
	include 'chatfooter.php';
	/////////////////////////////////////////////////

_body();
_html();

?>
