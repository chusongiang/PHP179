<?php
$file = $_GET['file'];
// mở file
$file_path= 'upload/'.$file; //lấy đg dẫn
//thông báo tải file
// header("Content-Disposition: attachment; filename = $file"); //tải xuống, filename: lấy mỗi tên
//trình duyệt sẽ trả về định dạng files
header("Content-Type: application/pdf");
//đọc files
readfile($file_path);
?>