<?php
  
       function ff(){
        $att = '$att';
        $app = "<?php include 'ox/php/ox.min.php'; ?>\n";
        $app .= "<?php links('rel=stylesheet type=text/css href=ox/css/ox.min.css') ?>\n";
        $app .= "<?php links('rel=stylesheet type=text/css href=ox/css/ox.css') ?>\n";
        $app .= "<?php\n";
        $app .= "DOCTYPE('');\n";
        $app .= "html('');\n";
        $app .= "head('');\n";
        $app .= "title(''); echo 'Tiltle goes here'; _title();\n";
        $app .= " _head();\n";
        $app .= "body('');\n";
        $app .= "\n";
        $app .= "echo '-- App comes
         in here  --'; \n";
        $app .= "\n";
        $app .= "_body();\n";
        $app .= "_html();\n";
        $app .= "\n";
        $app .= "?>\n";

        $index = "<?php include 'ox/php/ox.min.php'; ?> \n";
        $index .="<?php \n";
        $index .="style(''); \n";
        $index .="echo 'body{ \n";
        $index .="margin: 0px; \n";
        $index .="padding: 10px; \n";
        $index .="overflow: hidden; \n";
        $index .="} \n";
        $index .=".index-iframe{ \n";
        $index .="border-style: none; \n";
        $index .="width: 100%; \n";
        $index .="height: 97.5vh; \n";
        $index .="overflow: auto; \n";
        $index .="box-shadow: 0px 5px 15px #000; \n";
        $index .="transition: cubic-bezier(0.46, 0.03, 0.52, 0.96) 1s  !important; \n";
        $index .="'; \n";
        $index .="_style(); \n";
        $index .="?> \n";
        $index .=" \n";
        $index .=" \n";
        $index .=" \n";
        $index .=" \n";
        $index .=" \n";
        $index .=" \n";
        $index .= "<?php iframe('src=app.php class=index-iframe'); ?>";

        $package = "//Package file \n";
        $package .= ' {
          "name": "",
          "version": "",
          "description": "",
          "main": "",
          "directories": {
            "test": ""
          },
          "scripts": {
            "test": ""
          },
          "repository": {
            "type": "",
            "url": ""
          },
          "author": "",
          "license": "",
          "bugs": {
            "url": ""
          },
          "homepage": ""
        }';

        $composer = "//Composer file \n";
        $composer .= " { ";
        $composer .= "\n";
        $composer .= " } ";
        file_put_contents("../../../../app.php", $app);
        file_put_contents("../../../../index.php", $index);
        file_put_contents("../../../../package.json", $package);
        file_put_contents("../../../../composer.json", $composer);
        if (!file_exists('../../../../pages')) {
            mkdir('../../../../pages', 0777, true);
        }
        if (!file_exists('../../../../assets')) {
            mkdir('../../../../assets', 0777, true);
        }
       }


        ff();

          echo "<script>
                if (confirm('Directories successfully installed. Proceed to index page?') == true) {
                  window.location = '../../../../index.php';
                }else{
                  window.location = '../../install.php';
                }
              </script>";
       ?>