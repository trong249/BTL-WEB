<?php

    $sql=mysqli_connect("mysql5038.site4now.net","a85bff_ishine","n24v9t2001","db_a85bff_ishine");
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