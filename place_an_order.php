<?php
  include 'menu.php';
  //session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <link rel="stylesheet" href="place_an_order_css.css">
    <script type="text/javascript" src="main_page_js.js"></script>
    <title>Order</title>
  </head>
  <body>
    <header>
      <nav>
        <!--<div class="logo">
          LOGO
        </div>-->
        <ul class="proper-align">
          <li><a href="#" class="cool-link">Home</a></li>
          <li><a href="#" class="cool-link">About</a></li>
          <li><a href="#" class="cool-link">Blog</a></li>
          <li><a href="#" class="cool-link">Contact</a></li>
          <li class="right-align cool-link"><a href="logout.php">Logout</a></li>
          <!--<button id="myButton" class="right-align" type="button" name="button">Logout</button>-->
          <li class="right-align"><?php echo $_SESSION['username'];?></li>
          <li class="right-align"><img id="userImage" src="user.jpg"></li>
        </ul>
      </nav>
      <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <!--<a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Clients</a>
        <a href="#">Contact</a>-->
        <p>Your Cart</p>
        <!--<button onclick="calculate()" onclick="final()" name="button">Check-Out!</button>
        <ol id="list">
        </ol>
        <ul id="amount">
        </ul>-->
        <form class="" action="" method="post">
          <textarea readonly id="insertText" name="message" rows="10" cols="30"></textarea>
          <input type="hidden" id="amt" name="amount" value="**i want to store amount somewhere**"/>;//i am usig this hidden to store the amount from js which is extracted from line 320 smething by document.getelementbyid("id").value
          <input type="submit" name="submit" onclick="calculate();" value="Submit!">
        </form>
        <!--<p id="demo"></p>-->
      </div>
      <button id="cartButton" onclick="openNav()" type="button" name="button" >Check your Cart!</button>

      <div class="menu">
        <div class="row">
          <div class="column animated fadeInLeft">
            <br>
            <img src="asnim-asnim-142813-unsplash.jpg" alt="Sandwich Image">
            <?php
              $sql="SELECT * FROM `menu` WHERE mid=1";
              $result=mysqli_query($conn,$sql);
              if(mysqli_num_rows($result)>0){
                $row=mysqli_fetch_assoc($result);
                echo "Name: ".$row['mname'];
                echo "<br>";
                echo "Price: ".$row['price'];
                echo "<br>";
                echo "Description: ".$row['description'];
              }
              else{
                echo "Item not available !!Sorry for inconvenience :(";
              }
             ?>
             <script> var price1="<?php echo $row['price'];?>"</script>
             <br>
             <br>
             <button id="sandwich" onclick="sandwich('insertText',name)" name="<?php echo $row['mname'];?>" >Purchase</button>

          </div>

          <div class="column animated fadeInLeft">
            <img src="thomas-tucker-391058-unsplash.jpg" alt="Pizza Image">
            <?php
              $sql="SELECT * FROM `menu` WHERE mid=3";
              $result=mysqli_query($conn,$sql);
              if(mysqli_num_rows($result)>0){
                $row=mysqli_fetch_assoc($result);
                echo "Name: ".$row['mname'];
                echo "<br>";
                echo "Price: ".$row['price'];
                echo "<br>";
                echo "Description: ".$row['description'];
              }
              else{
                echo "Item not available !!Sorry for inconvenience :(";
              }
             ?>
             <script> var price2="<?php echo $row['price'];?>"</script>
             <br>
             <br>
             <button id="pizza" onclick="pizza('insertText',name)" name="<?php echo $row['mname'];?>">Purchase</button>

          </div>

          <div class="column animated fadeInLeft">
            <br>
            <img src="thali_625x350_51500894939.jpg" alt="Thali Image">

            <?php
            $sql="SELECT * FROM `menu` WHERE mid=7";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0){
              $row=mysqli_fetch_assoc($result);
              echo "Name: ".$row['mname'];
              echo "<br>";
              echo "Price: ".$row['price'];
              echo "<br>";
              echo "Description: ".$row['description'];
            }
            else{
              echo "Item not available !!Sorry for inconvenience :(";
            }
            ?>
            <script> var price3="<?php echo $row['price'];?>"</script>
            <br>
            <br>
            <button id="thali" onclick="thali('insertText',name)" name="<?php echo $row['mname'];?>">Purchase</button>
        </div>

        <div class="row">

          <div class="column animated fadeInLeft">
            <img src="coffee.jpg" alt="Coffee image">
            <?php
              $sql="SELECT * FROM `menu` WHERE mid=5";
              $result=mysqli_query($conn,$sql);
              if(mysqli_num_rows($result)>0){
                $row=mysqli_fetch_assoc($result);
                echo "<br>Name: ".$row['mname'];
                echo "<br>";
                echo "Price: ".$row['price'];
                echo "<br>";
                echo "Description: ".$row['description'];
              }
              else{
                echo "Item not available !!Sorry for inconvenience :(";
              }
             ?>
             <script> var price4="<?php echo $row['price'];?>"</script>
             <br>
             <br>
             <button id="coffee" onclick="coffee('insertText',name)" name="<?php echo $row['mname'];?>">Purchase</button>
          </div>

          <div class="column animated fadeInLeft">
            <img src="icecream.jpg" alt="Icecream image">
            <?php
              $sql="SELECT * FROM `menu` WHERE mid=10";
              $result=mysqli_query($conn,$sql);
              if(mysqli_num_rows($result)>0){
                $row=mysqli_fetch_assoc($result);
                echo "<br>Name: ".$row['mname'];
                echo "<br>";
                echo "Price: ".$row['price'];
                echo "<br>";
                echo "Description: ".$row['description'];
              }
              else{
                echo "Item not available !!Sorry for inconvenience :(";
              }
             ?>
             <script> var price5="<?php echo $row['price'];?>"</script>
             <br>
             <br>
             <button id="icecream" onclick="icecream('insertText',name)" name="<?php echo $row['mname'];?>">Purchase</button>
          </div>



          <div class="column animated fadeInLeft">
            <img src="brownies_dessert_cream_chocolate_106818_1920x1080.jpg" alt="">
            <?php
              $sql="SELECT * FROM `menu` WHERE mid=8";
              $result=mysqli_query($conn,$sql);
              if(mysqli_num_rows($result)>0){
                $row=mysqli_fetch_assoc($result);
                echo "<br>Name: ".$row['mname'];
                echo "<br>";
                echo "Price: ".$row['price'];
                echo "<br>";
                echo "Description: ".$row['description'];
              }
              else{
                echo "Item not available !!Sorry for inconvenience :(";
              }
             ?>
             <script> var price6="<?php echo $row['price'];?>"</script>
             <br>
             <br>
            <button id="pastry" onclick="pastry('insertText',name)" name="<?php echo $row['mname'];?>">Purchase</button>
          </div>
        </div>
      </div>
    </header>

    <script>

      var amount=0 ;
      var foodStr="";
      var food=[];
      function sandwich(insertText, name) {
      	var element = document.getElementById(insertText);
        element.innerHTML += name + "\n";
        amount = amount + parseInt(price1);
        food.push(name);
        //console.log(food);
        foodStr=food.toString();
        console.log(foodStr);

        /*var li = document.createElement("LI");
        var foodItem = document.getElementById("sandwich");
        li.innerHTML = foodItem.name + '  ----' + price1 +'/-';
        food=food + foodItem;
        amount = amount + parseInt(price1);
        document.getElementById("list").appendChild(li);
        console.log(foodItem);*/
      }

      function pizza(insertText, name) {
      	var element = document.getElementById(insertText);
        element.innerHTML += name + "\n";
        amount = amount + parseInt(price2);
        food.push(name);
        //console.log(food);
        foodStr=food.toString();
        console.log(foodStr);

        /*var li = document.createElement('LI');
        var foodItem = document.getElementById("pizza");
        li.innerHTML = foodItem.name + '  ----' + price2 +'/-';
        food=food + " " + foodItem;
        amount = amount + parseInt(price2);
        document.getElementById("list").appendChild(li);
        console.log(foodItem);*/
      }

      function thali(insertText, name) {
      	var element = document.getElementById(insertText);
        element.innerHTML += name + "\n";
        amount = amount + parseInt(price3);
        food.push(name);
        //console.log(food);
        foodStr=food.toString();
        console.log(foodStr);

        /*var li = document.createElement("LI");
        var foodItem = document.getElementById("thali");
        li.innerHTML = foodItem.name + '  ----' + price3 +'/-';
        food=food + " " + foodItem;
        amount = amount + parseInt(price3);
        document.getElementById("list").appendChild(li);
        console.log(foodItem);*/
      }

      function coffee(insertText, name) {
      	var element = document.getElementById(insertText);
        element.innerHTML += name + "\n";
        amount = amount + parseInt(price4);
        food.push(name);
        //console.log(food);
        foodStr=food.toString();
        console.log(foodStr);

        /*var li = document.createElement("LI");
        var foodItem = document.getElementById("coffee");
        li.innerHTML = foodItem.name + '  ----' + price4 +'/-';
        food=food + " " + foodItem;
        amount = amount + parseInt(price4);
        document.getElementById("list").appendChild(li);
        console.log(foodItem);*/
      }

      function icecream(insertText, name) {
      	var element = document.getElementById(insertText);
        element.innerHTML += name + "\n";
        amount = amount + parseInt(price5);
        food.push(name);
        //console.log(food);
        foodStr=food.toString();
        console.log(foodStr);

        /*var li = document.createElement("LI");
        var foodItem = document.getElementById("icecream");
        li.innerHTML = foodItem.name + '  ----' + price5 +'/-';
        food=food + " " + foodItem;
        amount = amount + parseInt(price5);
        document.getElementById("list").appendChild(li);
        console.log(foodItem);*/
      }

      function pastry(insertText, name) {
      	var element = document.getElementById(insertText);
        element.innerHTML += name + "\n";
        amount = amount + parseInt(price6);
        food.push(name);
        //console.log(food);
        foodStr=food.toString();
        console.log(foodStr);

        /*var li = document.createElement("LI");
        var foodItem = document.getElementById("pastry");
        li.innerHTML = foodItem.name + '  ----' + price6 +'/-';
        food=food + " " + foodItem;
        amount = amount + parseInt(price6);
        document.getElementById("list").appendChild(li);
        console.log(foodItem);
        */

      }

      function calculate() {
        document.getElementById("amt").value=amount;
        console.log(amount);
        //var li = document.createElement("LI");
        //li.innerHTML = "Amount: " + amount;
        //document.getElementById("amount").appendChild(li);
        var check=confirm("Are you sure you want to place the order? TOTAL AMOUNT= "+amount);
        if (check == true) {
          //console.log(foodStr);
        } else {

        }
      }

      function openNav() {
        document.getElementById("mySidenav").style.width="250px";
      }

      function closeNav() {
        document.getElementById("mySidenav").style.width="0";
      }
    </script>
  </body>
</html>
