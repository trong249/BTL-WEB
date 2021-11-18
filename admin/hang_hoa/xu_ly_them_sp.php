<?php
    require_once "../check_admin.php";
?>

<?php 

$sql=mysqli_connect("localhost","root","","data_ishine");

if(isset($_POST['add'])){
    $id=$_POST['ma_hh'];
    $brand=$_POST['ma_loai'];
    $ten_hh=$_POST['ten_hh'];
    $hinh=basename($_FILES["hinh"]["name"]);
    $don_gia=$_POST['don_gia'];
    $giam_gia=$_POST['giam_gia'];
    $mo_ta=$_POST['mo_ta'];
    
    $data ="INSERT INTO hang_hoa (id, brand, ten_hh, hinh, don_gia, giam_gia, mo_ta)
            VALUES('$id','$brand','$ten_hh','$hinh','$don_gia','$giam_gia','$mo_ta')";
    $sql->query($data);

    echo $ten_hh;
    /*************************************/
    // code upload hình
    $target_dir = "../../img/san_pham/"; 
    $target_file = $target_dir.basename($_FILES["hinh"]["name"]);
    move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
}
 header("location: them.php");
$sql->close();
?>