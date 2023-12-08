<?php
   // Hàm kết nối cơ sở dữ liệu
function connectdb() {
  
$servername = "localhost"; // Thay bằng tên máy chủ của bạn 
$username = "root"; // Thay bằng tên người dùng cơ sở dữ liệu của bạn
$password = ""; // Thay bằng mật khẩu cơ sở dữ liệu của bạn   
$dbname = "xwatch"; // Thay bằng tên cơ sở dữ liệu của bạn

    

try {
        $conn = new PDO("mysql:host=$servername;dbname=xwatch", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connected successfully";
      } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }
      return $conn;
}
?>
