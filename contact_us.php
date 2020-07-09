<html>
   <head>
      <title>SIGN-UP</title>
    </head>
    <body>
      <?php
        $name=$_POST["name"];
        $email=$_POST["email"];
        $message=$_POST["message"];
        $username1 = "root";
        $password1 = "";
        $db="foodDb";
        $conn = new mysqli('localhost',$username1,$password1,$db);
        if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
        }
        $sql="insert into contact(name,email,message) values ('$name','$email','$message')";
        $query=mysqli_query($conn,$sql);
        if($query){
          header('Location: contact_us_html.html');
        }
        else{
          echo "Insertion Fail<br>". $conn->error;
        }
      ?>
    </body>
</html>
