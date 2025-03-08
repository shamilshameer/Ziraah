<?php
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $response = array();
    
    try {
        $full_name = trim($_POST['full_name']);
        $email = trim($_POST['email']);
        $phone = trim($_POST['phone']);
        $password = $_POST['password'];
        $farm_location = trim($_POST['farm_location']);
        $farm_size = trim($_POST['farm_size']);
        $main_crops = trim($_POST['main_crops']);

        // Check if email already exists
        $stmt = $pdo->prepare("SELECT id FROM farmers WHERE email = ?");
        $stmt->execute([$email]);
        if ($stmt->rowCount() > 0) {
            throw new Exception("Email already registered");
        }

        // Hash password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Insert new farmer
        $sql = "INSERT INTO farmers (full_name, email, phone, password, farm_location, farm_size, main_crops) 
                VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$full_name, $email, $phone, $hashed_password, $farm_location, $farm_size, $main_crops]);

        $response['success'] = true;
        $response['message'] = "Registration successful! Please login.";
    } catch(Exception $e) {
        $response['success'] = false;
        $response['message'] = $e->getMessage();
    }

    echo json_encode($response);
    exit;
}
?> 