<?php

  session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Main-Page</title>
    <script>
      var modal = document.getElementById('modal-wrapper');
      window.onclick = function(event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      }

      function alertuser() {
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;
        if (username == '' || password == '') {
          window.alert("Please fill in all the details!");

        }


      }
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <link rel="stylesheet" href="main_page_css.css">
    <script src="main_page_js.js"></script>
  </head>
  <body>
    <div class="wrapper">
      <header>
        <nav>
          <div class="logo">
            LOGO
          </div>
          <div class="menu">
            <ul>
              <li><a href="#" class="cool-link">Home</a></li>
              <li><a href="#" class="cool-link">About</a></li>
              <li><a href="#" class="cool-link">Blog</a></li>
              <li><a href="contact_us_html.html" class="cool-link">Contact</a></li>
              <button onclick="document.getElementById('modal-wrapper-login').style.display='block'" type="button" id="logInButton">Log-In</button>
              <button onclick="document.getElementById('modal-wrapper').style.display='block'" type="button" id="signInButton">Create An Account!</button>
              <button type="button" name="button" id="placeAnOrderButton"><a href="place_an_order.html">Place An Order!</a></button>
            </ul>
          </div>
        </nav>
      </header>
      <div id="modal-wrapper" class="modal">
        <form class="modal-content animate" action="Signup.php" method="post">
          <div class="img-container">
            <h1 style="text-align: center">Please, fill all the details!</h1>
            <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Exit">&times;</span>
          </div>
          <div class="form-container">
            <input type="text" name="name" placeholder="Enter Your Name">
            <input type="text" name="username" placeholder="Enter Your User Name">
            <input type="text" name="email" placeholder="Enter Your Email">
            <input type="text" name="city" placeholder="Enter Your City">
            <input type="password" name="password" placeholder="Enter Your Password">
            <input type="password" name="confirmPassword" placeholder="Re-Type Your Password"><br>
            <button id="submitButton" type="submit" name="submitButton">Sign-Up</button>
          </div>
        </form>
      </div>
      <div id="modal-wrapper-login" class="modal-login">
        <form class="modal-content-login animate" action="login.php" method="post">
          <div class="img-container-login">
            <h1 style="text-align: center">Please, fill all the details!</h1>
            <span onclick="document.getElementById('modal-wrapper-login').style.display='none'" class="close" title="Exit">&times;</span>
          </div>
          <div class="form-container-login">
            <input id="username" type="text" name="username" placeholder="Enter Your User Name">
            <input id="password" type="password" name="password" placeholder="Enter Your Password">
            <button id="submitButton"  onclick="alertuser()" type="submit" name="submitButton">Login</button>
          </div>
          <?php
            if(isset($_SESSION["error"])){
              $error=$_SESSION["error"];
              echo "<script>window.alert('Username or Password is incorrect!!');</script>";
            }

            /*if(isset($_SESSION['username'])){
                header('location:place_an_order.html');
            }

            if(!isset($_SESSION['username'])){
                header('location:main_page.php');
            }*/
          ?>
        </form>
      </div>
      <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
  </body>
</html>
<?php
  unset($_SESSION["error"]);
?>
