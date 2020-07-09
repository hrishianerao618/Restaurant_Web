<html>
   <head>
      <title>LOG-IN</title>
    </head>


	<body>
		<?php
    session_start();
			 $usernameErr = $emailErr="";

        $username =$password = "";

		 $username=$_POST["username"];
     /*if (isset($_SESSION["username"])) {
	       header("Location: main_page.php");
       }*/
    //$password=$_POST["password"];
    $password=$_POST["password"];
    $error="username or password incorrect";
    //$password=crypt($password);
    $salt=substr($username,0,2);
    $password=crypt($password,$salt);


		if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["username"])) {
                header('Location:main_page.html');
				exit();
            }

            if (empty($_POST["password"])) {
		              header('Location:main_page.html');
					exit();
		        }
        }

		$username1 = "root";
		$password1 = "";
		$db="foodDb";
		$conn = new mysqli('localhost',$username1,$password1,$db);
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		echo "Connected successfully<br>";
		//$sql="insert into login(username,password) values ('$username','$password')";
    $sql="select * from signin where username='$username' and password='$password'";
		$query=mysqli_query($conn,$sql);
		if($query){
			$count=mysqli_num_rows($query);
      //echo $count;
      //$to="mohitkambli8@gmail.com";
      //$sub="sajsuszkia";
      //$txt="order";
      //$header="From : hrishianerao618@gmail.com";
      //mail($to,$sub,$txt,$header);
      if($count==1){
        $_SESSION["username"] = $username;
          header("Location:place_an_order.php");
      }
      else {
        $_SESSION["error"]=$error;
        header("Location:main_page.php");
          }
		}
		else{
			echo "Login Failed<br>". $conn->error;
    }


		?>
	</body>
</html>
