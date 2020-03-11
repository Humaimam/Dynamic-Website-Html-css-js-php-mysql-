<?php


$connect=mysqli_connect("127.0.0.1","root","","accountingCyclea");
$database="CREATE DATABASE intocart";
if(mysqli_query($connect,$database)){
    echo "created database";
}
 $createtable="CREATE TABLE intocart.imagerecord ( Product_id INT not null primary key, price int( 150 ) not null, imagelocation varchar( 100 ) not null )";
 if(mysqli_query($connect,$createtable)){
    echo "created table";
}
$insertintotable="INSERT INTO intocart.imagerecord ( Product_id, price, imagelocation) VALUES ('1711' ,'2200' ,'kurti2.jpg')";
if(mysqli_query($connect,$insertintotable)){
    echo "insert into table";
}
$insertintotable="INSERT INTO intocart.imagerecord ( Product_id, price, imagelocation) VALUES ('1712' ,'3200' ,'kurti_5.jpg')";
if(mysqli_query($connect,$insertintotable)){
    echo "insert into table";
}

$insertintotable="INSERT INTO intocart.imagerecord ( Product_id, price, imagelocation) VALUES ('1713' ,'1200' ,'kurta.jpg')";
if(mysqli_query($connect,$insertintotable)){
    echo "insert into table";
}
$insertintotable="INSERT INTO intocart.imagerecord ( Product_id, price, imagelocation) VALUES ('1714' ,'2000' ,'offwhite.jpg')";
if(mysqli_query($connect,$insertintotable)){
    echo "insert into table";
}
$insertintotable="INSERT INTO intocart.imagerecord ( Product_id, price, imagelocation) VALUES ('1715' ,'1200' ,'pink.jpg')";
if(mysqli_query($connect,$insertintotable)){
    echo "insert into table";
}
$insertintotable="INSERT INTO intocart.imagerecord ( Product_id, price, imagelocation) VALUES ('1716' ,'5200' ,'purple.jpg')";
if(mysqli_query($connect,$insertintotable)){
    echo "insert into table";
}
$insertintotable="INSERT INTO intocart.imagerecord ( Product_id, price, imagelocation) VALUES ('1717' ,'8200' ,'red.jpg')";
if(mysqli_query($connect,$insertintotable)){
    echo "insert into table";
}
$insertintotable="INSERT INTO intocart.imagerecord ( Product_id, price, imagelocation) VALUES ('1718' ,'200' ,'white.jpg')";
if(mysqli_query($connect,$insertintotable)){
    echo "insert into table";
}
$insertintotable="INSERT INTO intocart.imagerecord ( Product_id, price, imagelocation) VALUES ('1719' ,'9200' ,'yellow.jpg')";
if(mysqli_query($connect,$insertintotable)){
    echo "insert into table";
}




?>