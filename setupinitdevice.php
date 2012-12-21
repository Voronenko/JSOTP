<?php
  session_start();
  $secretcode = $_SESSION['secretcode'];
  if (empty($secretcode)) {
    die('Sorry, device is not supported /'.$_COOKIE["PHPSESSID"].'/ while'.session_id(). '  AND #'.$_SESSION['secretcode'].'#');
  }


  $url = "http://".$_SERVER["HTTP_HOST"].str_replace(basename($_SERVER["SCRIPT_NAME"]),"",$_SERVER["SCRIPT_NAME"])."index.html";
?>
<html>
  <head>
    <meta http-equiv="refresh" content="2;url=<?php print $url?>">
    <script type="text/javascript">
        if (!window.localStorage) {
           alert('Sorry! this device is not supported');
        }  

        localStorage.setItem('CLUE', '<?php print $secretcode?>');
        alert(localStorage.getItem('CLUE'));
    </script>
  </head>
  <body>
    <a href="<?php print $url?>">If this page did not redirect you, press here</a>
  </body>
</html>