<?php
require_once 'config.php';

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit;
}

// Get user data
$stmt = $pdo->prepare("SELECT * FROM farmers WHERE id = ?");
$stmt->execute([$_SESSION['user_id']]);
$user = $stmt->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZIRAAH - Dashboard</title>
    <style>
        /* Add your dashboard styling here */
    </style>
</head>
<body>
    <div class="dashboard">
        <h1>Welcome, <?php echo htmlspecialchars($user['full_name']); ?>!</h1>
        <div class="farmer-info">
            <h2>Your Information</h2>
            <p>Email: <?php echo htmlspecialchars($user['email']); ?></p>
            <p>Phone: <?php echo htmlspecialchars($user['phone']); ?></p>
            <p>Farm Location: <?php echo htmlspecialchars($user['farm_location']); ?></p>
            <p>Farm Size: <?php echo htmlspecialchars($user['farm_size']); ?> acres</p>
            <p>Main Crops: <?php echo htmlspecialchars($user['main_crops']); ?></p>
        </div>
        <a href="logout.php" class="btn">Logout</a>
    </div>
</body>
</html> 