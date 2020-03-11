<?php



$connect=mysqli_connect("127.0.0.1","root","","intocart");
$database="SELECT * FROM  intocart.cart";
$i=0;
$q1=mysqli_query($connect,$database);
echo "<h2 style=text-align:center;color:blue>Select product ID to Discard</h2>";
echo "<form method=post action=delete.php><select style=margin-left:20%;;width:300px;height:50px;font-size:30px; value=SelectProductCode name=slct>";
while ($row=mysqli_fetch_array($q1,MYSQLI_ASSOC)) {
echo "<option style=width:300px;height:50px;font-size:30px;>".$row['Product_id']."</option>";
}
echo "</select><input style=margin-left:50px;width:200px;height:50px;font-size:40px; type=submit value=Discard /></form>";
//header("location:purchased.php");
 

?>