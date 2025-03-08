<?php
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $response = array();
    
    try {
        $email = trim($_POST['email']);
        $password = $_POST['password'];

        // Check if email and password are provided
        if (empty($email) || empty($password)) {
            throw new Exception("Email and password are required");
        }

        // Get user
        $stmt = $pdo->prepare("SELECT * FROM farmers WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['full_name'];
            
            $response['success'] = true;
            $response['message'] = "Login successful!";
            $response['redirect'] = "dashboard.php";
        } else {
            throw new Exception("Invalid email or password");
        }
    } catch(Exception $e) {
        error_log($e->getMessage()); // Log the error message
        $response['success'] = false;
        $response['message'] = $e->getMessage();
    }

    echo json_encode($response);
    exit;
}
?>