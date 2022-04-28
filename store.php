<!DOCTYPE html>
<html>
  <body>
<style>
table, th, td {
  text-align: center;
}
b1 {
   font-weight: bold;
   font-size: 40px;
}
</style>
<?php 
$email = $_POST["email"]; 
$password = $_POST["password"]; 
$shoes = $_POST["number1"]; 
$helicopter = $_POST["number2"];
$fire = $_POST["number3"]; 
$option = $_POST["options"];
$shoestotal = $shoes * 500;
$helicoptertotal = $helicopter * 1;
$firetotal = $fire * 100000;
$shippingcost = 0;





if ($option == "7 Days") 
{ 
  $shippingcost = 0;
}
else if ($option == "Overnight") 
{ 
  $shippingcost = 50;
}
else if ($option == "3-Day") 
{ 
  $shippingcost = 5;
}
$totalcost = $shoestotal + $helicoptertotal + $firetotal + $shippingcost;

if($shoestotal == 0 && $helicoptertotal == 0 && $firetotal == 0)
{
  $shippingcost = 0;
  $totalcost = 0;
}
echo "<h1>Welcome, " . $email . "</h1>";
echo "<p><b>Your Password is: " . $password . "</b></p>";

echo "<p><b1> Receipt: </b1></p>";
echo "<table border='2' style='width:4500px'>";
  echo "<tr style='height:50px'>";
    echo "<th></th>";
    echo "<th> Amount </th>";
    echo "<th> Item Cost</td>";
    echo "<th> Sub Total</td>";
  echo "</tr>";



  echo "<tr style='height:50px'>";
    echo "<th>Shoes</th>";
    echo "<td>$shoes</td>";
    echo "<td>$500.00</td>";
    echo "<td>$$shoestotal</td>";
  echo "</tr>";




  echo "<tr style='height:50px'>";
    echo "<th> Helicopters </th>";
    echo "<td>$helicopter</td>";
    echo "<td>$1.00</td>";
    echo "<td>$$helicoptertotal</td>";
  echo "</tr>";




  echo "<tr style='height:50px'>";
    echo "<th> Fire </th>";
    echo "<td>$fire</td>";
    echo "<td>$100000.00</td>";
    echo "<td>$$firetotal</td>";
  echo "</tr>";



  echo "<tr style='height:50px'>";
    echo "<th>Shipping</th>";
    echo "<th colspan='2'> $option</th>";
    echo "<td>$$shippingcost</td>";
  echo "</tr>";



  
  echo "<tr style='height:50px'>";
    echo "<th colspan='3'>Total Cost</th>";
    echo "<td>$$totalcost</td>";
  echo "</tr>";
echo "</table>";
?> 



  </body>
</html>