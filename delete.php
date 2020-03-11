<?php



$connect=mysqli_connect("127.0.0.1","root","","intocart");
$insertintotable="DELETE FROM  intocart.cart WHERE Product_id='".$_POST['slct']."'";
if(mysqli_query($connect,$insertintotable)){

    $insertintotable="DELETE FROM  intocart.bill WHERE Product_id='".$_POST['slct']."'";
    if(mysqli_query($connect,$insertintotable)){
    echo "run";
    }


    header("location:purchased.php");
}
else{
    header("location:lawn.html");
}

 

?>