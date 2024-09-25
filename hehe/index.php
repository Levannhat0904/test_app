<?php
$host = 'database-1.cp80m0wgc1ht.ap-southeast-1.rds.amazonaws.com';
$port = '3306';  // Cổng mặc định của MySQL
$dbname = 'database-1';  // Tên cơ sở dữ liệu của bạn
$username = 'admin';  // Tên người dùng
$password = 'Levannhat0904?';  // Mật khẩu của bạn

// Tạo kết nối với MySQL bằng PDO
try {
    $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Kết nối thành công!";
} catch (PDOException $e) {
    echo "Lỗi kết nối: " . $e->getMessage();
}
?>
