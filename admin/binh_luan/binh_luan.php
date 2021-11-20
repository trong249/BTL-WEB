<?php
    require_once "../check_admin.php";
?>

<?php

    $sql=mysqli_connect("localhost","root","","data_ishine");
/****************************************************************************************/  
    $selectData = "SELECT * FROM binh_luan";
    $row=$sql->query($selectData);
    $arr_binh_luan =array();
    while($res=$row->fetch_assoc()){
        array_push($arr_binh_luan,$res);
    }
    $binh_luan=json_encode($arr_binh_luan);
/****************************************************************************************/ 
    $selectData = "SELECT id,ten_hh FROM hang_hoa";
    $row=$sql->query($selectData);
    $arr_sp =array();
    while($res=$row->fetch_assoc()){
        array_push($arr_sp,$res);
    }
    $sp=json_encode($arr_sp);
/****************************************************************************************/ 
    
    $sql->close();
?>  





















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/binh_luan_style.css">

    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap-grid.min.css" /> -->
    <script src="https://kit.fontawesome.com/8f65ebef09.js" crossorigin="anonymous"></script>


    <title>Bình luận sản phẩm</title>
</head>
<body>
    <div class="wrap">  

        <div class="left-side-menu">
            <div class="logo">
                <p>ISHINE</p>
            </div>
            <ul class="menu-list">
                <a href="../trang_chu/trang_chu.php">
                    <li>
                        <i class="fa fa-dashboard"></i>TRANG CHỦ
                    </li>
                </a>       
                <a href="../brand/brand.php">
                    <li>
                        <i class="fa fa-list-alt" aria-hidden="true"></i>NHÃN HIỆU
                    </li>
                </a> 
                <a href="../hang_hoa/hang_hoa.php">
                    <li>
                        <i class="fa fa-qrcode"></i>HÀNG HÓA
                    </li>
                </a> 
                <a href="../user/user.php">
                    <li>
                        <i class="fa fa-user"></i>USER
                    </li>
                </a> 
                <a href="../binh_luan/binh_luan.php">
                    <li>
                        <i class="fa fa-comment-o" aria-hidden="true"></i>BÌNH LUẬN
                    </li>
                </a> 
                <a href="../don_hang/don_hang.php">
                    <li>
                        <i class="fa fa-edit"></i>ĐƠN HÀNG
                    </li>
                </a> 
            </ul>
        </div>

        <div class="right-side-content">
            <div class="header">
                <div class="title">
                    <p>QUẢN LÍ BÌNH LUẬN</p>
                </div>
                <div>
                    <a href="../../index.php">Back to shop!</a>
                    <a href="../../user/doi_mat_khau.php" style=" margin-left:10px">Change password!</a>
                </div>
            </div>
            <div class="content">
                <p style="margin-bottom: 30px;">Dưới đây là danh sách bình luận của từng sản phẩm:</p>
                <div>
                    <table>
                        <!-- <tr>
                            <th>ID</th>
                            <th>TÊN SẢN PHẨM</th>
                            <th>SỐ BÌNH LUẬN</th>
                            <th>MỚI NHẤT</th>
                            <th>CŨ NHẤT</th>
                            <th colspan="2">OPTION</th>
                        </tr> -->
                        <!-- <tr>
                            <td>12</td>
                            <td>YEEZY BOOST 350V2 ASH PEARL</td>
                            <td>2</td>
                            <td>14-10-2021</td>
                            <td>14-1-2021</td>
                            <td><a href="./chi_tiet.php" class="chi_tiet">Chi tiết</a></td>
                        </tr> -->
                        
                    </table>
                </div>
            </div>
        </div>
            
<!-- --------------------------------------------------------------------------------------------------------------------------- -->
    <script>
        let arr_binh_luan=JSON.parse(JSON.stringify(<?php echo $binh_luan ?>));
        let arr_sp=JSON.parse(JSON.stringify(<?php echo $sp ?>));

        function compareDate(date1,date2){
            let d1=date1.split("-");
            let d2=date2.split("-");
            if( parseInt(d1[2]) > parseInt(d2[2]) ){
                return 1;
            }
            else if ( parseInt(d1[2]) < parseInt(d2[2]) ){
                return -1;
            }
            else if ( parseInt(d1[1]) > parseInt(d2[1]) ) {
                return 1;
            }
            else if ( parseInt(d1[1]) < parseInt(d2[1]) ) {
                return -1;
            }
            else if ( parseInt(d1[0]) > parseInt(d2[0]) ){
                return 1;
            }
            else if ( parseInt(d1[0]) < parseInt(d2[0])){
                return -1;
            }
            else return 0;
        }
        function newest(id){
            let res='1-1-1900';
            for(let i=0;i<arr_binh_luan.length;i++){
                if( parseInt(id)==parseInt(arr_binh_luan[i].id) ){
                    if( compareDate(arr_binh_luan[i].date,res) > 0 ){
                        res=arr_binh_luan[i].date;
                    }
                }
            }
            return res;
        }
        function oldest(id){
            let res='31-12-2999';
            for(let i=0;i<arr_binh_luan.length;i++){
                if( parseInt(id)==parseInt(arr_binh_luan[i].id) ){
                    if( compareDate(arr_binh_luan[i].date,res) < 0 ){
                        res=arr_binh_luan[i].date;
                    }
                }
            }
            return res;
        }

        function count(id){
            let res=0;
            for(let i=0;i<arr_binh_luan.length;i++){
                if(parseInt(id)==parseInt(arr_binh_luan[i].id)) res++;
            }
            return res;
        }

        function render(){
            let html=`<tr>
                            <th>ID</th>
                            <th>TÊN SẢN PHẨM</th>
                            <th>SỐ BÌNH LUẬN</th>
                            <th>MỚI NHẤT</th>
                            <th>CŨ NHẤT</th>
                            <th colspan="2">OPTION</th>
                        </tr>`;
            for(let i=0;i<arr_sp.length;i++){
                let c=count(arr_sp[i].id);
                if(c>0){
                    html+=` <tr>
                            <td>${arr_sp[i].id}</td>
                            <td>${arr_sp[i].ten_hh}</td>
                            <td>${c}</td>
                            <td>${newest(arr_sp[i].id)}</td>
                            <td>${oldest(arr_sp[i].id)}</td>
                            <td><a href="./chi_tiet.php?id=${arr_sp[i].id}" class="chi_tiet">Chi tiết</a></td>
                        </tr>`;
                }

            }
            document.querySelector("table").innerHTML=html;
        }
        render();
    </script>

</body>
</html>