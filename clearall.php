<?php
$connect=mysqli_connect("127.0.0.1","root","","intocart");

$createtable="DROP TABLE  bill ";
 if(mysqli_query($connect,$createtable)){
    echo "created table";
}
$createtable="DROP TABLE  cart  ";
 if(mysqli_query($connect,$createtable)){
    echo "created table2";
}
header("location:IAD.html");


?>