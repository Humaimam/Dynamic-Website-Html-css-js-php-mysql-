<?php

$connect=mysqli_connect("127.0.0.1","root","","intocart");

$insertintotable="UPDATE intocart.cart SET quantity='".$_POST['quantity']."' WHERE Product_id='".$_POST['code']."'";
if(mysqli_query($connect,$insertintotable)){
    echo "done";
}

header("location:purchased.php");
 

?>