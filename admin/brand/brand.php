<?php
    require_once "../check_admin.php";
?>

<?php

    $sql=mysqli_connect("mysql5037.site4now.net","a7cc8e_dapoet1","123456aA@","db_a7cc8e_dapoet1");
/****************************************************************************************/  
    $selectData = "SELECT * FROM brand";
    $row=$sql->query($selectData);
    $arr =array();
    while($res=$row->fetch_assoc()){
        array_push($arr,$res);
    }
/****************************************************************************************/ 
    // thêm
    if(isset($_REQUEST['ID'])){
        $id=$_REQUEST['ID'];
        $ten_loai=$_REQUEST['ten_loai'];

        $data ="INSERT INTO brand  (ID, ten_loai)
                VALUES('$id','$ten_loai')";
        $sql->query($data);
    }
    /********************************************/ 
    // xóa
    if(isset($_REQUEST['delete'])){
        $id=$_REQUEST['ID'];
        $delete="DELETE FROM brand WHERE ID=$id";
        $sql->query($delete);
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
    <script src="https://kit.fontawesome.com/8f65ebef09.js" crossorigin="anonymous"></script>


    <title>Các nhãn hiệu</title>
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
                    <p>QUẢN LÍ CÁC THƯƠNG HIỆU ĐỐI TÁC</p>
                </div>
                <div>
                    <a href="../../index.php">Back to shop!</a>
                    <a href="../../user/doi_mat_khau.php" style=" margin-left:10px">Change password!</a>
                </div>
            </div>
            <div class="content">
                <p style="margin-bottom: 30px;">Dưới đây là danh sách các thương hiệu đối tác đã được thêm vào:</p>
                <div>
                    <table>
                        <tr>
                            <th>MÃ LOẠI</th>
                            <th>TÊN LOẠI</th>
                            <th>OPTION</th>
                        </tr>
                        
                        <!-- element go here -->
                        
                        <tr id='add'>
                            <td><input type="text" id="random" readonly value=""></td>
                            <td ><input type="text" value="" id="name"></td>
                            <td>
                                <button class="them" onclick="add()">Thêm</button>
                            </td>
                        </tr>


                    </table>
                </div>
            </div>
        </div>
            
<!------------------------------------------------------------------------------------------------------------------------------->
<script>
    
    let arr=JSON.parse( JSON.stringify(<?php echo json_encode($arr) ?>))   // lấy ra mảng các nhãn hiệu
    
    document.querySelector('#random').value= randomID();
    // hàm tạo ra và kiểm tra so random hợp lệ
    function randomID(){
        let check=true;
        let res=Math.floor(Math.random()*100);

        for(let i=0;i<arr.length;i++){
            if(res==arr[i].ID)
            check=false;
            break;
        }
        if(check&&res>=10) return res;
        else return randomID();
    }

    
    // hàm thêm 1 nhãn hiệu mới
    function add(){
        let html='';
        let name=document.querySelector("#name").value;
        for (let i=0;i<arr.length;i++){
            if(arr[i].ten_loai.toLowerCase()===name.toLowerCase())
            {
                alert ('Nhãn hiệu này đã tồn tại trước đó')
                return;
            }
        }

        html+=` <tr id="#id_element_${document.querySelector('#random').value}">
                    <td>${document.querySelector('#random').value}</td>
                    <td><input type="text" value="${name}" readonly></td>
                    <td> 
                        <button class="xoa">Xóa</button>
                    </td>
                </tr> `;
        document.querySelector('#add').insertAdjacentHTML("beforebegin",html);

        fetch(`brand.php?ID=${document.querySelector('#random').value}&ten_loai=${name}`);
        
        document.querySelector("#name").value='';
        document.querySelector('#random').value= randomID();
        window.location.reload();
    }




    // hàm xóa 
    function deleteID(id){
        if(confirm('Bạn có chắc muốn xóa brand này không !')){
            fetch(`brand.php?ID=${id}&delete=1`);
            document.getElementById(`#id_element_${id}`).remove();
        }
    }




    // hàm hiển thi dư liệu các nhãn hiệu
    function render(){  
        let html='';
        for(let i=0;i<arr.length;i++){
            html+=`<tr id="#id_element_${arr[i].ID}">
                            <td>${arr[i].ID}</td>
                            <td><input type="text" value="${arr[i].ten_loai}" readonly></td>
                            <td> 
                                <button class="xoa" onclick="deleteID(${arr[i].ID})">Xóa</button>
                            </td>
                    </tr> `;
        }
        document.querySelector('#add').insertAdjacentHTML("beforebegin",html);
    }
    render()
    
    
</script>

</body>
</html>