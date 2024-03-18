<?php
// Thông tin kết nối MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shop";

// Tạo kết nối
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Thiết lập chế độ lỗi
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Câu lệnh UPDATE
    $sql = "UPDATE table_name SET name = :name, description = :description WHERE id = :id";
    
    // Chuẩn bị câu lệnh SQL
    $stmt = $conn->prepare($sql);
    
    // Gán giá trị cho các tham số
    $stmt->bindParam(':name', $new_value1);
    $stmt->bindParam(':description', $new_value2);
    $stmt->bindParam(':id', $id);
    
    // Gán giá trị cho các biến
    $new_value1 = 'new_value1';
    $new_value2 = 'new_value2';
    $id = 1;
    
    // Thực thi câu lệnh SQL
    $stmt->execute();
    
    echo "Record updated successfully";
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Đóng kết nối
$conn = null;