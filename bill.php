<?php
echo"<!DOCTYPE><HTML><BODY>";
$connect=mysqli_connect("127.0.0.1","root","","intocart");
$TOTAL=0;
$database="SELECT * FROM  intocart.bill";

$q1=mysqli_query($connect,$database);
echo "<br><br><h2 style=margin-left:200px>THE AMOUNT YOU WILL HAVE TO PAY</h2>";
echo "<table style=margin-left:300px  border='1'><tr><td>PRODUCT ID</td><td>UNIT COST</td><td>QUANTITY</td><td>TOTAL</td></tr>";
while ($row=mysqli_fetch_array($q1,MYSQLI_ASSOC)) {
echo "<tr><td>".$row['Product_id']."</td><td>".$row['price']."</td><td>".$row['quantity']."</td><td>".$row['totalcost']."</td></tr>";
$TOTAL+=$row['totalcost'];


}


echo "</table>";
echo "<br><br><h2 style=margin-left:500px>Total Amount: ".$TOTAL."</h2>";
echo "<form action=clearall.php style=margin-top:100px;margin-left:200px;background-color:gray;padding:40px;width:400px;border-style:double 2px black; ><label>Credit Card Number</label>
<input style=width:250px;type=number /></BR><br>
<lable >Password:         </label><input style=padding-left:100px; type=password name=pwd><br><br>
<input type=submit value=ENTER /></form></HTML>";

?>