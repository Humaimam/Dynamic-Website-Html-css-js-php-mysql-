<?php
echo $_POST['code'];
echo $_POST['price'];
echo $_POST['qty'];

$connect=mysqli_connect("127.0.0.1","root","","accountingCyclea");
$database="CREATE DATABASE intocart";
if(mysqli_query($connect,$database)){
    echo "created database";
}
 $createtable="CREATE TABLE intocart.cart ( Product_id INT not null primary key, price int( 150 ) not null, quantity int( 150 ) not null )";
 if(mysqli_query($connect,$createtable)){
    echo "created table";
}

$insertintotable="INSERT INTO intocart.cart (Product_id, price, quantity) VALUES ('".$_POST['code']."','".$_POST['price']."','".$_POST['qty']."')";
if(mysqli_query($connect,$insertintotable)){
    echo "insert into table";
}

header("location:lawn.html");


?>