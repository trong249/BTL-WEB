<?php
    require_once "../check_admin.php";
?>

<?php

    $sql=mysqli_connect("mysql5037.site4now.net","a7cc8e_dapoet1","123456aA@","db_a7cc8e_dapoet1");
/****************************************************************************************/ 
    // Lấy dữ liệu sản phẩm
    $selectData = "SELECT * FROM hang_hoa";
    $row=$sql->query($selectData);
    $arr1=array();
    while($res=$row->fetch_assoc()){
        array_push($arr1,$res);
    }
/****************************************************************************************/ 
    // Lấy dữ liệu nhãn hiệu
    $selectData = "SELECT * FROM brand";
    $row=$sql->query($selectData);
    $arr2=array();
    while($res=$row->fetch_assoc()){
        array_push($arr2,$res);
    }
/****************************************************************************************/ 
    $sql->close();
?> 














<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="../../img/tachnen.png" type="image/x-icon">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap-grid.min.css" /> -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://kit.fontawesome.com/8f65ebef09.js" crossorigin="anonymous"></script>


    <title>Trang chủ</title>
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
                    <p>QUẢN TRỊ WEBSITE</p>
                </div>
                <div>
                    <a href="../../index.php">Back to shop!</a>
                    <a href="../../user/doi_mat_khau.php" style=" margin-left:10px">Change password!</a>
                </div>
            </div>
            <!-- --------------CHART-------------------- -->
            <div class="chart">
                <div class="title"style="margin-bottom: 10px;">Dưới đây là những số liệu thống kê hàng hóa của ISHINE hiện tại có trong kho:</div>
                <div>
                    <canvas id="mychart">
                        <!-- Chart go here -->
                    </canvas>
                </div>
                
            </div>
            <!-- --------------TABLE-------------------- -->
            <div class="table">
                <div class="title" style="margin-bottom: 10px;">
                    <p>Số liệu thống kê cụ thể như sau:</p>
                </div>
                <div>
                    <table>

                        <tr>
                            <th>LOẠI HÀNG</th>
                            <th>SỐ LƯỢNG</th>
                            <th>GIÁ CAO NHẤT</th>
                            <th>GIÁ THẤP NHẤT</th>
                            <th>TỔNG GIÁ TRỊ</th>
                        </tr>
                                 
                        <!-- <tr>
                            <td>Converse</td>
                            <td>2</td>
                            <td>2,000,000 <sup>đ</sup></td>
                            <td>1,990,000 <sup>đ</sup></td>
                            <td>3,990,000 <sup>đ</sup></td>
                        </tr> -->
                                 
                                                
                    </table>
                </div>
            </div>
        </div>

    </div>
<!-- --------------------------------------------------------------------------------------------------------------------------- -->

<script>
    let arr1=JSON.parse( JSON.stringify(<?php echo json_encode($arr1) ?>)); // sản phẩm
    let arr2=JSON.parse( JSON.stringify(<?php echo json_encode($arr2) ?>)); // nhãn hiệu

    let arrBrand=[];       //array chứa tên brand
    let arrCount=[];       //array chưa số lương sản phẩm từng brand
    let arrMin=[];         //array chứa giá nhỏ nhất của từng brand
    let arrMax=[];         //array chứa giá lớn nhất của từng brand
    let arrSum=[];         //array chứa tổng giá trị của từng brand
    for(let i=0;i<arr2.length;i++){

        arrCount[i]=0;
        arrSum[i]=0;
        arrMin[i]=9999999;
        arrMax[i]=0;

        arrBrand.push(arr2[i].ten_loai);

        for(let j=0;j<arr1.length;j++){
            if(arr1[j].brand==arr2[i].ID){
                    arrCount[i]++;
                    arrSum[i]=arrSum[i]+parseInt(arr1[j].don_gia);
                    if( parseInt(arr1[j].don_gia) < arrMin[i] )
                            arrMin[i]=arr1[j].don_gia;
                    if( parseInt(arr1[j].don_gia) > arrMax[i] )
                            arrMax[i]=arr1[j].don_gia;
                }
        }
    }

    for(let i=0;i<arrMin.length;i++){
        if(arrMin[i]==9999999) arrMin[i]=0;
    }

    function render(){
        let html='';
        for(let i=0;i<arr2.length;i++){
            html+=`<tr>
                        <td>${arrBrand[i]}</td>
                        <td>${arrCount[i]}</td>
                        <td>${formatMoney(arrMax[i].toString())}<sup>đ</sup></td>
                        <td>${formatMoney(arrMin[i].toString())}<sup>đ</sup></td>
                        <td>${formatMoney(arrSum[i].toString())}<sup>đ</sup></td>
                    </tr>`;
        }
        document.querySelector("table").insertAdjacentHTML("beforeend",html);
    }
    render()
    
    function formatMoney(str) {
        return str.split('').reverse().reduce((prev, next, index) => {
            return ((index % 3) ? next : (next + ',')) + prev
        })
    }


// <!-- Script for char -->
const ctx = document.querySelector('#mychart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: arrBrand,
        datasets: [{
            label: 'BIỂU ĐỒ THỐNG KÊ LOẠI HÀNG (theo số lượng)',
            data: arrCount,
            backgroundColor: [
                'rgb(184, 115, 51)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>





</body>
</html>