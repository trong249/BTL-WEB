<?php
    // Kiểm tra nếu đăng nhập với quyền admin thì mới dc truy cập 
    // mô phỏng
    session_start();

    $login = false;
    $vaitro = 0;
 
    // Check if the user is logged in, if not then redirect him to login page
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        $login = true;
        $vaitro = $_SESSION["vai_tro"];
    }

    if($vaitro==1 && $login){
        
    }
    else{
        echo "Bạn không thể truy cập trang này! Quay lại trang chủ sau 10s";
        sleep(10);
        header("Location: logout.php");
        exit;
    }

?>