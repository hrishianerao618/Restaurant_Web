<html>
   <head>
      <title>LOG-IN</title>
    </head>
	<body>
		<?php
    session_start();
    session_unset();  // where $_SESSION["nome"] is your own variable. if you do not have one use only this as follow **session_unset();**

    header("Location: main_page.php");
      /*session_start();
      if(isset($_SESSION['username'])){
        session_destroy();
        //header('Location:main_page.php');
      }
      else{
        header('Location:main_page.php');
      }*/
    ?>
	</body>
</html>
