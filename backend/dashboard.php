<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Inventaris Yayasan Ummul Quro' Semarang</title>
    <link rel="icon" href="logo.jpeg" type="image/x-icon">
    <style>
        /* Reset Default */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9; /* Ganti dengan background statis */
            height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Navbar Style */
        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #5cb85c;
            color: #fff;
            padding: 10px 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .navbar .logo {
            display: flex;
            align-items: center;
        }

        .navbar .logo img {
            height: 40px; /* Ukuran logo */
            margin-right: 10px;
        }

        .navbar h1 {
            font-size: 20px;
            font-weight: bold;
            margin: 0;
        }

        .navbar .logout-btn {
            background-color: #d9534f;
            color: white;
            padding: 8px 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }

        .navbar .logout-btn:hover {
            background-color: #c9302c;
        }

        /* Dashboard Container */
        .dashboard-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex: 1;
            padding: 20px;
            background-color: #fff;
        }

        .pdf-container {
            width: 80%;
            height: 80vh;
            border: 2px solid #ddd;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Footer Style */
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: relative;
            width: 100%;
        }

        footer p {
            font-size: 14px;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">
            <img src="logo.jpeg" alt="Logo"> <!-- Ganti dengan path logo Anda -->
            <h1>Dashboard Inventaris Yayasan Ummul Quro' Semarang</h1>
        </div>
        <button class="logout-btn" onclick="window.location.href='logout.php'">Logout</button>
    </nav>

    <!-- Dashboard Container -->
    <div class="dashboard-container">
        <div class="pdf-container">
            <!-- PDF Embedded in Iframe -->
            <iframe src="Kelas 1A.pdf" width="100%" height="100%" frameborder="0"></iframe>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Inventaris Yayasan Ummul Quro' Website. by. ZIIYOU CREATOR.</p>
    </footer>

</body>
</html>
