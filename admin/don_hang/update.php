<?php
    $sql=mysqli_connect("localhost","root","","data_ishine");
    $status_update;
    if(isset($_REQUEST['status'])){
        $id=$_REQUEST['id'];
        $status_update=$_REQUEST['status'];
        $req="UPDATE don_hang SET tinh_trang='$status_update' WHERE ma_don=$id";
        $sql->query($req);
    }
/****************************************************************************************/ 
header("location: don_hang.php"); 
?>