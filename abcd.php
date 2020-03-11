<?php
$connect=mysqli_connect("127.0.0.1","root","","intocart");

$insertintotable="INSERT INTO intocart.comment (Name, EMAIL, COMMENT) VALUES ('".$_POST['nm']."','".$_POST['nm']."','".$_POST['nm']."')";
if(mysqli_query($connect,$insertintotable)){
    echo "";
}

?>