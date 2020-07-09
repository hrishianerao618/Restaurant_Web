<?php
session_start();
$username1 = "root";
$password1 = "";
$db="foodDb";

$conn = new mysqli('localhost',$username1,$password1,$db);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


echo "<center>SIGN-IN TABLE <br>";
echo "<br><center><table border=1>
        <tr>
        <td>id</td>
        <td>name</td>
        <td>email</td>
        <td>city</td>
        <td>username</td>
        <td>password</td>
        </tr>";
$sql = "SELECT * FROM signin ";
$query=mysqli_query($conn,$sql);
//echo $sql;
while($row = mysqli_fetch_array($query))
{
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['city'] . "</td>";
echo "<td>" . $row['username'] . "</td>";
echo "<td>" . $row['password'] . "</td>";
echo "</tr>";
}
echo "</table>";


echo "<center><br><br>MENU TABLE <br>";
echo "<br><center><table border=1>
        <tr>
        <td>mid</td>
        <td>mname</td>
        <td>price</td>
        <td>description</td>
        </tr>";
$sql = "SELECT * FROM menu ";
$query=mysqli_query($conn,$sql);
//echo $sql;
while($row = mysqli_fetch_array($query))
{
echo "<tr>";
echo "<td>" . $row['mid'] . "</td>";
echo "<td>" . $row['mname'] . "</td>";
echo "<td>" . $row['price'] . "</td>";
echo "<td>" . $row['description'] . "</td>";
echo "</tr>";
}
echo "</table>";


echo "<center><br><br>ORDER TABLE <br>";
echo "<br><center><table border=1>
        <tr>
        <td>oid</td>
        <td>username</td>
        <td>food</td>
        <td>cost</td>
        <td>date</td>
        <td>time</td>
        </tr>";
$sql = "SELECT * FROM order1 ";
$query=mysqli_query($conn,$sql);
//echo $sql;
while($row = mysqli_fetch_array($query))
{
echo "<tr>";
echo "<td>" . $row['oid'] . "</td>";
echo "<td>" . $row['username'] . "</td>";
echo "<td>" . $row['food'] . "</td>";
echo "<td>" . $row['cost'] . "</td>";
echo "<td>" . $row['date'] . "</td>";
echo "<td>" . $row['time'] . "</td>";
echo "</tr>";
}
echo "</table>";


echo "<center><br><br>CONTACT US TABLE <br>";
echo "<br><center><table border=1>
        <tr>
        <td>cid</td>
        <td>name</td>
        <td>email</td>
        <td>message</td>
        </tr>";
$sql = "SELECT * FROM contact ";
$query=mysqli_query($conn,$sql);
//echo $sql;
while($row = mysqli_fetch_array($query))
{
echo "<tr>";
echo "<td>" . $row['cid'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['message'] . "</td>";
echo "</tr>";
}
echo "</table>";


echo "<center><br><br>ORDERING SIGN-IN TABLE IN ALPHABETICAL ORDER OF THEIR USERNAME<br>";
echo "<br><center><table border=1>
        <tr>
        <td>id</td>
        <td>username</td>
        <td>email</td>
        </tr>";
$sql = "SELECT id,username,email FROM signin ORDER BY username";
$query=mysqli_query($conn,$sql);
//echo $sql;
while($row = mysqli_fetch_array($query))
{
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['username'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "</tr>";
}
echo "</table>";


echo "<center><br><br>TO SEE THE MESSAGES OF THOSE WHO HAVE CONTACTED US AND ARE REGISTERED USER<br>";
echo "<br><center><table border=1>
<tr>
<td>cid</td>
<td>name</td>
<td>email</td>
<td>message</td>
</tr>";
$sql = "SELECT * FROM contact INNER JOIN signin ON contact.email=signin.email";
$query=mysqli_query($conn,$sql);
//echo $sql;
while($row = mysqli_fetch_array($query))
{
  echo "<tr>";
  echo "<td>" . $row['cid'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['message'] . "</td>";
  echo "</tr>";
}
echo "</table>";


echo "<center><br><br>NUMBER OF TIME HRISHI_ANE ORDERED ,HIS TOTAL SUM AND AVERAGE COST <br>";
echo "<br><center><table border=1>
<tr>
<td>No. of times Ordered</td>
<td>Total Sum</td>
<td>Average</td>
</tr>";

$sql = "SELECT count(cost),sum(cost),avg(cost) FROM order1 WHERE username='Hrishi_Ane'";
$query=mysqli_query($conn,$sql);
//echo $sql;
while($row = mysqli_fetch_array($query))
{
  echo "<tr>";
  echo "<td>" . $row[0] . "</td>";
  echo "<td>" . $row[1] . "</td>";
  echo "<td>" . $row[2] . "</td>";
  echo "</tr>";
}
echo "</table>";


echo "<center><br><br>NUMBER OF TIME mo_ka ORDERED ,HIS TOTAL SUM AND AVERAGE COST <br>";
echo "<br><center><table border=1>
<tr>
<td>No. of times Ordered</td>
<td>Total Sum</td>
<td>Average</td>
</tr>";
$sql = "SELECT count(cost),sum(cost),avg(cost) FROM order1 WHERE username='mo_ka'";
$query=mysqli_query($conn,$sql);
//echo $sql;
while($row = mysqli_fetch_array($query))
{
  echo "<tr>";
  echo "<td>" . $row[0] . "</td>";
  echo "<td>" . $row[1] . "</td>";
  echo "<td>" . $row[2] . "</td>";
  echo "</tr>";
}
echo "</table>";


echo "<center><br><br>NUMBER OF TIME hkl22 ORDERED ,HIS TOTAL SUM AND AVERAGE COST <br>";
echo "<br><center><table border=1>
<tr>
<td>No. of times Ordered</td>
<td>Total Sum</td>
<td>Average</td>
</tr>";
$sql = "SELECT count(cost),sum(cost),avg(cost) FROM order1 WHERE username='hkl22'";
$query=mysqli_query($conn,$sql);
//echo $sql;
while($row = mysqli_fetch_array($query))
{
  echo "<tr>";
  echo "<td>" . $row[0] . "</td>";
  echo "<td>" . $row[1] . "</td>";
  echo "<td>" . $row[2] . "</td>";
  echo "</tr>";
}
echo "</table>";

echo "<center><br><br>NUMBER OF TIME Naruto2946 ORDERED ,HIS TOTAL SUM AND AVERAGE COST <br>";
echo "<br><center><table border=1>
<tr>
<td>No. of times Ordered</td>
<td>Total Sum</td>
<td>Average</td>
</tr>";
$sql = "SELECT count(cost),sum(cost),avg(cost) FROM order1 WHERE username='Naruto2946'";
$query=mysqli_query($conn,$sql);
//echo $sql;
while($row = mysqli_fetch_array($query))
{
  echo "<tr>";
  echo "<td>" . $row[0] . "</td>";
  echo "<td>" . $row[1] . "</td>";
  echo "<td>" . $row[2] . "</td>";
  echo "</tr>";
}
echo "</table>";
?>
