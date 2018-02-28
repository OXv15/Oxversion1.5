<?php 

function put(){

                $pagename = $_POST['title'];
                
                $att = '$att';
                $app = "<?php include '../ox/php/ox.min.php'; ?>\n";
                $app .= "<?php links('rel=stylesheet type=text/css href=../ox/css/ox.min.css') ?>\n";
                $app .= "<?php links('rel=stylesheet type=text/css href=../ox/css/ox.css') ?>\n";
                $app .= "<?php\n";
                $app .= "DOCTYPE('');\n";
                $app .= "html('');\n";
                $app .= "head('');\n";
                $app .= "title(''); echo '$pagename'; _title();\n";
                $app .= " _head();\n";
                $app .= "body('');\n";
                $app .= "\n";
                $app .= "echo '-- App goes in here  --'; \n";
                $app .= "\n";
                $app .= "_body();\n";
                $app .= "_html();\n";
                $app .= "\n";
                $app .= "?>\n";
                $put = file_put_contents("../../../../pages/$pagename.php", $app);
}
                    put();
                    echo "<script>alert('Page added!'); window.location= '../../install.php';</script>";

?>

