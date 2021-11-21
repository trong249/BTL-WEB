<?php

    $sql=mysqli_connect("localhost","root","","data_ishine");
/****************************************************************************************/  

    if(isset($_REQUEST['user'])){
        // xoa nguoi dung
        $user=$_REQUEST['user'];
        $delete="DELETE FROM users WHERE username='$user'";
        $sql->query($delete);
        // xoa don hang nguoi dung
        $delete="DELETE FROM don_hang WHERE user='$user'";
        $sql->query($delete);
        

        // xoa gio hang nguoi dung
        $delete="DELETE FROM gio_hang WHERE user='$user'";
        $sql->query($delete);
        // xoa binh luan nguoi dung
        $delete="DELETE FROM binh_luan WHERE user='$user'";
        $sql->query($delete);
    }





    header("location: user.php");
/****************************************************************************************/ 
    $sql->close();
?>  