<?php include '../php/ox.min.php'; ?>
<?php

       if(isset($_POST['install'])){

          script('');
           echo " if (confirm('Are you sure you dont have OX previously installed?...Reinstalling OX would rewrite your index,app,package and composer files. Proceed?') == false) {
                    window.location = 'install.php';
                  }else{
                    window.location = 'vendor/others/install.php';
                  }
                  ";
          _script();
       }
       if (isset($_POST['uninstall'])) {
          script('');
           echo " if (confirm('Are you sure you want to remove OX?') == false) {
                    window.location = 'install.php';
                  }else{
                    window.location = 'vendor/others/uninstall.php';
                  }
                  ";
          _script();
       }
    ?>
<?php  links('rel="stylesheet" type="text/css" href="vendor/css/ox.min.css"') ?>
<?php  links('rel="stylesheet" type="text/css" href="vendor/css/ox.css"') ?>
<?php  links('rel="stylesheet" type="text/css" href="vendor/css/install.css"') ?>
<?php  links('rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css"') ?>
<?php  links('rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap-grid.min.css"') ?>
<?php  links('rel="stylesheet" type="text/css" href="vendor/font-awesome-4.7.0/css/font-awesome.min.css"') ?>
<?php  links('rel="icon" href="images/logo.jpg"'); ?>
<?php script("src='vendor/jquery/jquery.min.js'"); _script(); ?>
<?php script("src='vendor/popper/popper.min.js'"); _script(); ?>
<?php script("src='vendor/js/bootstrap.min.js'"); _script(); ?>

<?php
  DOCTYPE('');
  html('');
  head('');
    title(''); echo "Ox | Install"; _title();
  _head();
  body('class="ox-bg-dark"');
    nav($att="class='navbar container navbar-expand-md navbar-dark ox-bg-dark ox-nav-outset-dark  nav-desktop fixed-top p-3'");
      a($att="class='navbar-brand mt-0 text-white text-outset'"); echo "Ox v1.5"; _a();
      button($att="class='navbar-toggler m-2' type='button' data-toggle='collapse' data-target='#oxnavdropdown' aria-controls='oxnavdropdown' aria-expanded='false' aria-label='Toggle navigation'");
        span($att='class="navbar-toggler-icon"');  _span();
      _button();
      div($att='class="collapse navbar-collapse" id="oxnavdropdown"');
        ul($att='class="navbar-nav mr-auto "');
          li($att='class="nav-item text-white"'); 
            a('href="#" class="nav-link text-white"  data-toggle="modal" data-target="#details-1" onclick=""'); echo "Install Ox"; _a();
          _li();
          li($att='class="nav-item text-white"'); 
            a('href="#" class="nav-link text-white"  data-toggle="modal" data-target="#details-2" onclick=""'); echo "Add a webpage"; _a();
          _li();
          li($att='class="nav-item text-white"'); 
            a('href="#" class="nav-link text-white"  data-toggle="modal" data-target="#details-3" onclick=""'); echo "Mail us"; _a();
          _li();
          if (file_exists('../../index.php')) {
          li($att='class="nav-item text-white"'); 
            a('href="../../index.php" class="nav-link text-white" target="_blank"'); echo "Veiw your app"; _a();
          _li();
          }
          li('class="nav-item"'); a('href="http://ox.com" class="nav-link text-white"'); echo "Visit our webpage"; _a(); _li();
        _ul();
        ul($att='class="form-inline my-2 my-md-0"');
        _ul();
      _div();
    _nav();
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
              i($att='class="fa fa-quote-left fa fa-3x text-white"'); _i();
              h1($att='class="text-white fa-3x"'); echo "WE BRING THE FUTURE"; _h1();
              p($att='class="fa-2x text-white"'); echo "Building webapps in ease with a strong backend"; _p();
            _div();
          _div();
        _div();

        div($att='class="carousel-item c2"'); 
          div($att='class="container"'); 
            div($att='class="carousel-cap  text-center"');
              i($att='class="fa fa fa-quote-left fa fa-3x text-white"'); _i();
              h1($att='class="text-white fa-3x"'); echo "WE CREATE A CHANGE"; _h1();
              p($att='class="fa-2x text-white"'); echo "Changing the idea behinde webapps with php"; _p();
            _div();
          _div();
        _div();

        div($att='class="carousel-item   c3"'); 
          div($att='class="container"');  
            div($att='class="carousel-cap  text-center"');
              i($att='class="fa fa-quote-left fa fa-3x text-white"'); _i();
              h1($att='class="text-white fa-3x"'); echo "WE BAKE THE WEB"; _h1();
              p($att='class="fa-2x text-white"'); echo "Building webapps in ease with a strong backend"; _p();
            _div();
          _div();
        _div();
      _div();
    _div();

      ///////////////////////// modal for install ////////////////////
    div('class="modal fade details-1" id="details-1" tabindex="-1" role="dialog" aria-labelledby="details-1" aria-hidden="false"');
      div('class=" modal-content p-4"');
        div('class="container-fluid"');
          div('class="modal-header"');
            h4('class="modal-title text-center green-font"');
              i('class="fa fa-download"');_i(); echo " Install OX";
            _h4();
            button('class="close" type="" data-dismiss="modal" aria-label="close"');
              span('aria-hidden="true" class=" modal-dialog"');
                i('class="fa fa-close" style="background-color: #fff;"');_i();
               _span();
            _button();
          _div();
          div('class="modal-body text-dark text-center"');
            form('method="POST" action="install.php"');
              button('class="btn container text-white ox-bg-dark m-1 p-4" name="install"'); echo "INSTALL OX"; _button();
              button('class="btn container text-white ox-bg-error m-1 p-4" name="uninstall"'); echo "UNINSTALL OX"; _button();
            _form();
          _div();
        _div();
      _div();
    _div();
  //////////////////////////////////////////////////////////////////////////////////
  /////////////////////////////////////////////////////////////////////////////////////
      ///////////////////////// modal for Adding a webpage ////////////////////
    div('class="modal fade details-2" id="details-2" tabindex="-2" role="dialog" aria-labelledby="details-2" aria-hidden="false"');
      div('class=" modal-content p-4"');
        div('class="container-fluid"');
          div('class="modal-header"');
            h4('class="modal-title text-center green-font"');
              i('class="fa fa-plus"');_i(); echo " Add a webpage";
            _h4();
            button('class="close" type="" data-dismiss="modal" aria-label="close"');
              span('aria-hidden="true" class=" modal-dialog"');
                i('class="fa fa-close" style="background-color: #fff;"');_i();
               _span();
            _button();
          _div();
          div('class="modal-body text-dark text-center"');
            form('class="container" method="POST" action="vendor/others/add.php" ');
              input('class="form-control text-center p-4" type="text" name="title" placeholder="Webpage title" required');
              button('class="btn container-fluid text-white ox-bg-dark p-4" name="addpage" '); echo "ADD WEBPAGE"; _button();
            _form();
          _div();
        _div();
      _div();
    _div();
  //////////////////////////////////////////////////////////////////////////////////
  /////////////////////////////////////////////////////////////////////////////////////
      ///////////////////////// modal for Mailing us ////////////////////
    div('class="modal fade details-3" id="details-3" tabindex="-3" role="dialog" aria-labelledby="details-3" aria-hidden="false"');
      div('class=" modal-content p-4"');
        div('class="container-fluid"');
          div('class="modal-header"');
            h4('class="modal-title text-center green-font"');
              i('class="fa fa-envelope"');_i(); echo " Mail us!";
            _h4();
            button('class="close" type="" data-dismiss="modal" aria-label="close"');
              span('aria-hidden="true" class=" modal-dialog"');
                i('class="fa fa-close" style="background-color: #fff;"');_i();
               _span();
            _button();
          _div();
          div('class="modal-body text-dark text-center"');
            form('class="container"');
              input('class="form-control text-center p-4" type="text" name="mail" placeholder="Message..."');
              button('class="btn container-fluid text-white ox-bg-dark p-4"'); echo "MAIL US"; _button();
            _form();
          _div();
        _div();
      _div();
    _div();
  //////////////////////////////////////////////////////////////////////////////////
  /////////////////////////////////////////////////////////////////////////////////////
  _body();
  _html();
?>
 

