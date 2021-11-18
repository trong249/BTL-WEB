<?php
    // Kiểm tra nếu đăng nhập 

    $login = false;
    $vaitro = 0;
 
    //check is there's a login session
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        $login = true;
        $vaitro = $_SESSION["vai_tro"];
    }

    if($login){
        
    }
    else{
        echo "Bạn không thể truy cập trang này !";
        header("refresh:3;url=logout.php");
        exit;
    }

?>