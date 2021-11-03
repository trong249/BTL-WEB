<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

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
                                 
                        <tr>
                            <td>Converse</td>
                            <td>2</td>
                            <td>2,000,000 <sup>đ</sup></td>
                            <td>1,990,000 <sup>đ</sup></td>
                            <td>3,990,000 <sup>đ</sup></td>
                        </tr>
                                 
                        <tr>
                          <td>Blazer</td>
                          <td>4</td>
                          <td>2,010,000 <sup>đ</sup></td>
                          <td>1,250,000 <sup>đ</sup></td>
                          <td>6,090,000 <sup>đ</sup></td>
                        </tr>
                        
                        <tr>
                          <td>Jordan</td>
                          <td>4</td>
                          <td>2,080,000 <sup>đ</sup></td>
                          <td>1,320,000 <sup>đ</sup></td>
                           <td>6,670,000 <sup>đ</sup></td>
                         </tr>
                                 
                        <tr>
                          <td>Pegasus</td>
                          <td>4</td>
                          <td>2,120,000 <sup>đ</sup></td>
                          <td>880,000 <sup>đ</sup></td>
                          <td>5,680,000 <sup>đ</sup></td>
                        </tr>
                                 
                        <tr>
                          <td>Adidas</td>
                          <td>10</td>
                          <td>8,000,000 <sup>đ</sup></td>
                          <td>990,000 <sup>đ</sup></td>
                          <td>22,440,000 <sup>đ</sup></td>
                        </tr>
                                 
                        <tr>
                          <td>Nike</td>
                          <td>5</td>
                          <td>2,500,000 <sup>đ</sup></td>
                          <td>1,100,000 <sup>đ</sup></td>
                          <td>8,060,000 <sup>đ</sup></td>
                        </tr>
                                 
                        <tr>
                          <td>MLB</td>
                          <td>2</td>
                          <td>3,250,000 <sup>đ</sup></td>
                          <td>1,499,999 <sup>đ</sup></td>
                          <td>4,749,999 <sup>đ</sup></td>
                        </tr>
                                 
                        <tr>
                          <td>Bitis</td>
                          <td>3</td>
                          <td>1,490,000 <sup>đ</sup></td>
                          <td>899,000 <sup>đ</sup></td>
                          <td>3,288,000 <sup>đ</sup></td>
                        </tr>
                                                
                    </table>
                </div>
            </div>
        </div>

    </div>
<!-- --------------------------------------------------------------------------------------------------------------------------- -->
<!-- Script for char -->

<script>
const ctx = document.querySelector('#mychart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Converse', 'Blazer', 'Jordan', 'Pegasus', 'Adidas', 'Nike', 'MLB', 'Bitis'],
        datasets: [{
            label: 'BIỂU ĐỒ THỐNG KÊ LOẠI HÀNG (theo số lượng)',
            data: [2,4,4,4,10,5,2,3],
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