<?php
nav($att="class='navbar container nav-outset navbar-expand-md ox-bg-dark ox-nav-top-outset fixed-bottom p-3'");
	a($att="class='navbar-brand mt-0 text-white text-outset'"); _a();
	button($att="class='navbar-toggler m-2' type='button' data-toggle='collapse' data-target='#oxnavdropdownfooter' aria-controls='oxnavdropdownfooter' aria-expanded='false' aria-label='Toggle navigation'");
		span($att='class="navbar-toggler-icon"');i('class="fa fa-angle-up text-white" style="font-size:30px;"');_i();  _span();
	_button();
	div($att='class="collapse navbar-collapse" id="oxnavdropdownfooter"');
		form('class="form-group col-lg-12"');
			input('class="form-control" type="text" name="msg" placeholder="Write a message.." ');
			input('class="form-control text-white" type="submit" name="send" value="SEND" ');
		_form();
	_div();
_nav();
?>