<?php
	$dirname = '../../../../app.php';
	rmdir($dirname);
	unlink('../../../../app.php');
	unlink('../../../../composer.json');
	unlink('../../../../index.php');
	unlink('../../../../package.json');
	echo "<script> alert('Uninstall successful'); window.location= '../../install.php'</script>";
?>