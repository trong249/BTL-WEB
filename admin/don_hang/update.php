<?php
    $sql=mysqli_connect("mysql5038.site4now.net","a85bff_ishine","n24v9t2001","db_a85bff_ishine");
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