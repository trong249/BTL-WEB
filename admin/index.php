<?php
    // Kiểm tra nếu đăng nhập với quyền admin thì mới dc truy cập 
    // mô phỏng
    $a=1;
    if($a==1){
        header('location:./trang_chu/trang_chu.php');
    }
    else{
        echo "Bạn không thể truy cập trang này !";
    }
?>