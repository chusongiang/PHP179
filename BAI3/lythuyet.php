<!DOCTYPE html>
<html>

</html>
<body>
    <!-- <a href="index.php?tham_so1=gia_tr1&tham_so2=gia_tri2"></a>
    hứng bằng GET -->
    <?php
//phương thức GET
    //cú pháp tham số trên url
    //temiem.com/index.php?tham_so1=gia_tr1&tham_so2=gia_tri2&tham_so3=gia_tri3
    //$GET['tham_so']; //biến toàn cục lưu trữ dưới dạng mảng bất tuần tự 
    //form hạn chế dùng phương thức GET công khai trên url, dùng PORT để bảo mật hơn

   //hàm isset($ten_bien) kiểm tra xem biến có tồn tại hay chưa ok->TRUE else FALSE
   // truyền trực tiếp qua url
//    vd:
    // if(isset($_GET['email']) && isset($_GET['pass'])){
    //     //hứng giá trị các ô input
    //     $email = $_GET['email'];
    //     $pass = $_GET['pass'];
    //     echo $email.'<br>'.$pass;
    // }
// Mảng
    // $array = array(bt1, bt2, nt3);
    // $array = [bt1, bt2, bt3]
//vd:
    // // 01234567
    // $array =[1,2,'ba','bốn',true,6.5,'bàn','ghế'];
    // //gán key một012giang345
    // $array2 =['một'=>1,2,'ba','bốn','giang'=>true,6.5,'bàn','ghế'];
    //     // echo $array; k chay dc
    //     // var_dump($array);  in mang de test code
    //     // print_r($array);   in mang de test code
    //     foreach($array as $key => $value){
    //         echo $key.'=>'.$value.'<br>';
    //     }
    //     foreach($array as $value){
    //         echo $value.'<br>';
    //     }
// JSON:
    // đọc file json
    // ở đây file nằm ngang hàng
    $data_json = file_get_contents('data.json');
    //php k thuwc hien truc tiep json
    //chuyen sang dang mang
    $result_json=json_decode($data_json, true);//true ->mang false-> object
    // echo '<pre>';
    // print_r($result_json);
    foreach($result_json as $key =>$value){
        echo $value.'<br>';
    }
//thêm vào json: ghi vào dữ liệu mới thi dữ liệu cũ mất đi (ghi đè)
    // JSON_UNESCAPED_UNICODE ghi đc tiếng Việt
    $data_en_json=json_encode($result_json,JSON_UNESCAPED_UNICODE);
    //pull vao json
    file_put_contents('data.json', $data_en_json);
    ?>
    <!-- form là phải có method -->
    <!-- <form action="" method="GET">
        <input type="email" name="email" placeholder="Nhập email vào đây">
        <input type="password" name="pass" placeholder="Nhập password vào đây">
        <input type="submit" name="sbm" value="đăng nhập">
    </form> -->
</body>
    
