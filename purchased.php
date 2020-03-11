<?php
echo"<!DOCTYPE><HTML><BODY>";
$connect=mysqli_connect("127.0.0.1","root","","intocart");

$createtable="CREATE TABLE intocart.bill ( Product_id INT not null primary key, price int( 150 ) not null, quantity int( 150 ) not null, totalcost int( 150 ) not null )";
 if(mysqli_query($connect,$createtable)){
    echo "created table";
}


echo "<h1 style=text-align:center;color:blue>PRODUCTS IN YOUR CART</h2><BR><BR><BR>";

$database="SELECT * FROM  intocart.cart";
$i=0;
$q1=mysqli_query($connect,$database);
while ($row=mysqli_fetch_array($q1,MYSQLI_ASSOC)) {
    
    $db="SELECT * FROM  intocart.imagerecord";
    $q2=mysqli_query($connect,$db);
    if($q2){ 
    echo "<div style=display:inline;float:left;padding:20px;><form method=post action=discard.php>";
while ($row2=mysqli_fetch_array($q2,MYSQLI_ASSOC)) {
if($row['Product_id']==$row2['Product_id']) {
    $total=$row['price']*$row['quantity'];  
    if($total!=0){ 
    echo "<img style=width:200px;height:300px src=".$row2['imagelocation']." />";
    echo "<br><br><div style=border-radius:5px;background-color:blueviolet;font-size:20px;padding:8px;width:250px;>
    <label>Code:</label><input style=border-style:none;background-color:blueviolet;  name=code type=text value=".$row['Product_id']." />  <br>  
    <lable>Unit Cost:".$row['price']."</label><br>
    <label>Quantiy: ".$row['quantity']."</label>
    <br>
    <lable>Total Cost:<span style=color:white>".$total."</span></label>
    <br></div></div>";
    $insertintotable="INSERT INTO intocart.bill (Product_id, price, quantity, totalcost) VALUES ('".$row['Product_id']."','".$row['price']."','".$row['quantity']."','".$total."')";
    if(mysqli_query($connect,$insertintotable)){
        echo "";
    }



$i++;}}


}  
}
else{
    echo "error";
}

}
echo "<input style=color:white;background-color:blue;font-size:25px; type=submit value=DiscardAnyProduct  />

</form>
<br>
<br>
<br>
<form action=bill.php>
<input style=color:white;background-color:blue;font-size:25px; type=submit value=PrepareBill />
</form>

</BODY>"; 
//echo $html;
echo "</html>";

$connect=mysqli_connect("127.0.0.1","root","","intocart");

$createtable="CREATE TABLE intocart.comment ( Name VARCHAR( 100 ) not null , EMAIL VARCHAR( 150 ) not null, COMMENT VARCHAR( 550 ) not null )";
 if(mysqli_query($connect,$createtable)){
    echo "created table";
}
echo "

<br>
<br>
<br>


<form action=comment.php method=post>

<textarea name=comment rows=4 cols=50 placeholder=EnterYourComment ></textarea>
<input type=submit /></form>";



$database="SELECT * FROM  intocart.comment";
$q1=mysqli_query($connect,$database);
while ($row=mysqli_fetch_array($q1,MYSQLI_ASSOC)) {
 echo $row['COMMENT'];   
}
?>