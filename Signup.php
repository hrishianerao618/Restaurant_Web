<html>
   <head>
      <title>SIGN-UP</title>
    </head>


	<body>
		<?php
			 $nameErr=$usernameErr = $emailErr = $cityErr = $passErr = $repass ="";
         $name=$username = $email = $age = $city = $password = $confirmPassword = "";

    $username=$_POST["username"];
		 $name=$_POST["name"];
		$email=$_POST["email"];
		$city=$_POST["city"];
		$password=$_POST["password"];
    //$password=crypt($password);
    $salt=substr($username,0,2);
    $password=crypt($password,$salt);
		$confirmPassword=$_POST["confirmPassword"];
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
           if (empty($_POST["name"])) {
              $nameErr = "Name is required!!";
              die("Connection failed: " . $nameErr);
           }

           if (preg_match('~[0-9]~', $_POST['name'])) {
               $nameErr = "Name should not contain numbers !!";
              die("Connection failed: " . $nameErr);
             }

            if (empty($_POST["username"])) {
               $usernameErr = "Username is required!!";
			         die("Connection failed: " . $usernameErr);
            }

      		if (empty($_POST["email"])) {
      			$emailErr = "Email is required!!";
      			die("Connection failed: " . $emailErr);

      		}

      		$email=$_POST["email"];
      		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format(must conatin @ and .com)";
      			die("Connection failed: " . $emailErr);
            }

            if (empty($_POST["city"])) {
				$cityErr = "City is required";
				die("Connection failed: " . $cityErr);
            }

            if (empty($_POST["password"])) {
				$passErr = "Password is required";
				die("Connection failed: " . $passErr);
            }

            if (empty($_POST["confirmPassword"])) {
				$repass = "Please Re-type Password";
				die("Connection failed: " . $repass);
            }

            if ($_POST["password"]!=$_POST["confirmPassword"]) {
				$repass = "Password didnt match";
				die("Connection failed: " . $repass);
            }
            header('Location:main_page.html');
        }

		$username1 = "root";
		$password1 = "";
		$db="foodDb";
		$conn = new mysqli('localhost',$username1,$password1,$db);
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		echo "Connected successfully<br>";
		$sql="insert into signin(name,username,email,city,password) values ('$name','$username','$email','$city','$password')";

		$query=mysqli_query($conn,$sql);
		if($query){
			echo "Data Inserted Successfully<br>";
		}
		else{
			echo "Insertion Fail<br>". $conn->error;
		}
    //mail("$email","TRYING SIGN UP REGISTRATION EMAIL","THANK YOU FOR REGISTERING!!!");
		?>
	</body>
</html>
