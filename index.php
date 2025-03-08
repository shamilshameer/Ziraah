<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZIRAAH - Agricultural Marketplace</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
                            url('https://images.unsplash.com/photo-1500382017468-9049fed747ef');
            background-size: cover;
            background-position: center;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            background: rgba(255, 255, 255, 0.95);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
        }

        .logo {
            text-align: center;
            margin-bottom: 30px;
        }

        .logo h1 {
            color: #2c5f2d;
            font-size: 2.5em;
            margin-bottom: 10px;
        }

        .logo p {
            color: #666;
        }

        .input-group {
            margin-bottom: 20px;
        }

        .input-group label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        .input-group input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        .btn {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin-bottom: 10px;
            transition: background-color 0.3s;
        }

        .btn-primary {
            background-color: #2c5f2d;
            color: white;
        }

        .btn-primary:hover {
            background-color: #224b23;
        }

        .btn-sell {
            background-color: #1a4173;
            color: white;
        }

        .btn-sell:hover {
            background-color: #153358;
        }

        .marketplace-container {
            display: none;
            padding: 40px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .sections-container {
            display: flex;
            gap: 30px;
        }

        .section {
            flex: 1;
            background: rgba(255, 255, 255, 0.95);
            padding: 30px;
            border-radius: 10px;
        }

        .section-title {
            color: #2c5f2d;
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
            padding-bottom: 10px;
            border-bottom: 2px solid #2c5f2d;
        }

        .action-btn {
            display: block;
            width: 100%;
            padding: 12px;
            margin-bottom: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .seller-btn {
            background-color: #2c5f2d;
            color: white;
        }

        .seller-btn:hover {
            background-color: #224b23;
        }

        .buyer-btn {
            background-color: #1a4173;
            color: white;
        }

        .buyer-btn:hover {
            background-color: #153358;
        }
    </style>
</head>
<body>
    <!-- Login Container -->
    <div class="login-container" id="loginSection">
        <div class="logo">
            <h1>ZIRAAH</h1>
            <p>Agricultural Marketplace</p>
        </div>
        <form id="loginForm">
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
            <button type="button" class="btn btn-sell" onclick="showMarketplace()">Sell</button>
        </form>
    </div>

    <!-- Marketplace Container -->
    <div class="marketplace-container" id="marketplaceSection">
        <div class="sections-container">
            <!-- Selling Section -->
            <div class="section">
                <h2 class="section-title">Selling</h2>
                <button class="action-btn seller-btn">Seller Dashboard</button>
                <button class="action-btn seller-btn">Add/Edit Product Listing</button>
                <button class="action-btn seller-btn">Order Management</button>
            </div>

            <!-- Buying Section -->
            <div class="section">
                <h2 class="section-title">Buying</h2>
                <button class="action-btn buyer-btn">Browse Products and Search</button>
                <button class="action-btn buyer-btn">View Product Details</button>
                <button class="action-btn buyer-btn">Add to Cart</button>
                <button class="action-btn buyer-btn">Leave Feedback and Ratings</button>
            </div>
        </div>
    </div>

    <script>
        function showMarketplace() {
            document.getElementById('loginSection').style.display = 'none';
            document.getElementById('marketplaceSection').style.display = 'block';
        }

        // Handle login form submission
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            // Add your login logic here
            showMarketplace(); // For demonstration, directly show marketplace after login
        });

        // Initialize the page
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('marketplaceSection').style.display = 'none';
        });
    </script>
</body>
</html> 