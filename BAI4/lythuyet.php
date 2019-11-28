<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    // Phương thức POST
    //cú pháp: $_POST['name']; // gia tir o input
    // GET va POST giong: deu gui du lieu len server; khac ve do bao mat; get nhanh hon post
    // post chi di kiem tra submit, k kt 2 o con lai
    // if(isset($_POST['sbm'])){
    //     $user = $_POST['user'];
    //     $pass = $_POST['pass'];
    //     echo $user.'<br>'.$pass;
    // }
        // // upload files
        // $name = $_FILES['giá_trị_ô_input']['name'];//lấy theo tên files
        // $_FILES['giá_trị_ô_input']['size'];//lấy theo kích cỡ file
        // $_FILES['giá_trị_ô_input']['type'];//lấy theo kiểu file
        // // sử dụng 1 trong 3 cái trên, dùng để gọi file

        // $_FILES['giá_trị_ô_input']['error'];//lấy file lỗi
        // $tmp_name = $_FILES['giá_trị_ô_input']['tmp_name'];//thư mục tạm
        // move_uploaded_file($tmp_name,'upload/'.$name);

        // ví dụ:
        if(isset($_POST['sbm'])){
            $file = $_FILES['file']['name'];
            $tmp_name = $_FILES['file']['tmp_name'];
            $error = $_FILES['file']['error'];
            if($error > 0){
                echo 'file bi loi';
            }else{
                move_uploaded_file($tmp_name, 'upload/'.$file);
                echo 'da upload thanh cong'.'<hr/>';
            }
        }
    ?>
    <!--  -->
    <img src="<?php echo 'upload/'.$file; ?>" alt="" style="max-width: 30%;">
    <hr/>
    <!-- upload ra man hinh -->
    <form action="" method="POST" enctype="multipart/form-data"> 
        <input type="file" name="file">
        <input type="submit" value="tải lên" name="sbm" >
    </form> 
    <!-- khai bao enctype thì mới upload đc file -->
    <!-- <form action="" method="POST">
      <input type="text" name="user">
      <input type="password" name="pass">  
      <input type="submit" name="sbm">  

    </form> -->
</body>
</html>