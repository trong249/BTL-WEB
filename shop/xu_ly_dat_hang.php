<?php
    $sql=mysqli_connect("mysql5037.site4now.net","a7cc8e_dapoet1","123456aA@","db_a7cc8e_dapoet1");
/****************************************************************************************/ 
    // danh sach thông tin sản phẩm
    $selectData = "SELECT * FROM hang_hoa";
    $row=$sql->query($selectData);
    $arr_san_pham=array();
    while($res=$row->fetch_assoc()){
        array_push($arr_san_pham,$res);
    }

    //  lấy  bảng giỏ hàng
    $selectData = "SELECT * FROM gio_hang";
    $row=$sql->query($selectData);
    $arr_gio_hang =array();
    while($res=$row->fetch_assoc()){
        array_push($arr_gio_hang,$res);
    }

      //  lấy  bảng mã đơn hàng
    $selectData = "SELECT ma_don FROM don_hang";
    $row=$sql->query($selectData);
    $arr_ma_don=array();
    while($res=$row->fetch_assoc()){
        array_push($arr_ma_don,$res);
    }
/************************************************************************************************/
//  thông tin gửi từ shop
$rand= randFunc($arr_ma_don);
$username=$_REQUEST['username'];
$date = getDay();
$tinh_trang=1;
$name=$_REQUEST['name'];
$phone=$_REQUEST['phone'];
$address=$_REQUEST['address'];
$email=$_REQUEST['email'];
$note=$_REQUEST['note'];
$arr = array_filter($arr_gio_hang,"getGioHang" );
/*********************************************************************************************************/
function randFunc($arr){
    $newarr = array();
    for($i=0;$i<count($arr);$i++){
        array_push($newarr,$arr[$i]['ma_don']);
    }
    $res=rand(100,999);
    $check=false;
    while(in_array($res,$newarr)){
        $res=rand(100,999);
    }
    return $res;
}
function getDay(){
    $now = new DateTime();
    return $now->format('Y-m-d');
}
function getGioHang($gh){
    return $gh['user']==$GLOBALS['username'];
}
/********************************************************************************************************/ 

        
        // them vao bang don_hang
        $data ="INSERT INTO don_hang(ma_don,user,date,tinh_trang,ho_va_ten, So_dien_thoai, email, Dia_chi, note) 
                VALUES('$rand','$username',' $date','$tinh_trang','$name','$phone','$email','$address','$note')";
        $sql->query($data);
        // them vao bang don_hang_chi_tiet
        foreach ($arr as $i => $gh){
            $id_sp=$gh['id_sp'];
            $size=$gh['size'];
            $so_luong=$gh['so_luong'];

            $data ="INSERT INTO hoa_don_chi_tiet  (ma_don, ID_san_pham,size,so_luong)
                VALUES('$rand','$id_sp','$size','$so_luong')";
            $sql->query($data);

        }
        // xoa khoi gio hang
        $delete="DELETE FROM gio_hang WHERE user='$username'";
        $sql->query($delete);


        
        

    
/*********************************************************************************************************/
/*********************************************************************************************************/
    header("location: san_pham.php");
    $sql->close();

?> 