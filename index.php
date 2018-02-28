<?php include 'ox/php/ox.min.php'; ?> 
<?php 
style(''); 
echo 'body{ 
margin: 0px; 
padding: 10px; 
overflow: hidden; 
} 
.index-iframe{ 
border-style: none; 
width: 100%; 
height: 97.5vh; 
overflow: auto; 
box-shadow: 0px 5px 15px #000; 
transition: cubic-bezier(0.46, 0.03, 0.52, 0.96) 1s  !important; 
'; 
_style(); 
?> 
 
 
 
 
 
 
<?php iframe('src=app.php class=index-iframe'); ?>