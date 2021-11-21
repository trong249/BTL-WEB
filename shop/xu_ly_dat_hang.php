<?php
    $sql=mysqli_connect("localhost","root","","data_ishine");
/****************************************************************************************/ 
    // danh sach thông tin sản phẩm
    $selectData = "SELECT * FROM hang_hoa";
    $row=$sql->query($selectData);
    $arr=array();
    while($res=$row->fetch_assoc()){
        array_push($arr,$res);
    }
    $san_pham=json_encode($arr);    
/****************************************************************************************/ 
    //  lấy  bảng giỏ hàng
    $selectData = "SELECT * FROM gio_hang";
    $row=$sql->query($selectData);
    $arr_gio_hang =array();
    while($res=$row->fetch_assoc()){
        array_push($arr_gio_hang,$res);
    }
    $gio_hang=json_encode($arr_gio_hang);
/*********************************************************************************************************/
    $username;
    $name;
    $phone;
    $address;
    $email;
    $note;
    if(isset($_REQUEST['name'])){
        
        $name=$_REQUEST['name'];
        $username=$_REQUEST['username'];
        $phone=$_REQUEST['phone'];
        $address=$_REQUEST['address'];
        $email=$_REQUEST['email'];
        $note=$_REQUEST['note'];
    }
/*********************************************************************************************************/
    $sql->close();

?> 