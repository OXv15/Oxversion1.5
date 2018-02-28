<?php

$file = fopen("ox.tags.php","r");

// exclusive lock
flock($file,LOCK_EX));