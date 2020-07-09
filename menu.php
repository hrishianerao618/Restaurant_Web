<html>
   <head>
      <title>HHM</title>
    </head>
	<body>
		<?php
    session_start();
    $username1 = "root";
		$password1 = "";
		$db="foodDb";

		$conn = new mysqli('localhost',$username1,$password1,$db);
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
    $food=$_POST["message"];
    //echo explode(",",$food);

    $amount=$_POST["amount"];//if i uncomment this nothing will be inserted in ur databse
    $username=$_SESSION["username"];
    $sql="insert into order1(username,food,cost) values ('$username','$food',$amount)";
    $query=mysqli_query($conn,$sql);
}//else{  header('Location:place_an_order.php');}

		//echo "Connected successfully<br>";
    //$sql="insert into menu(mid,mname,desciption,price) values ()";
    //$sql="select * from signin where username='$username' and password='$password'";

    ?>
	</body>
</html>
