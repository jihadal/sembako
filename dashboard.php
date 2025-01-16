<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Sembako Berma</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        header {
            background-color: #4CAF50;
            color: white;
            padding: 15px 20px;
            text-align: center;
        }
        .container {
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }
        .card {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }
        .card h3 {
            margin: 0 0 10px;
        }
        .card p {
            margin: 0;
            color: #555;
        }
        .nav {
            display: flex;
            justify-content: space-between;
            background-color: #333;
            padding: 10px 20px;
        }
        .nav a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
        }
        .nav a:hover {
            text-decoration: underline;
        }
        .hero {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        .hero img {
            max-width: 40%;
            border-radius: 10px;
        }
        .hero-content {
            max-width: 55%;
        }
        .hero-content h1 {
            font-size: 2rem;
            margin: 0;
        }
        .hero-content p {
            margin: 10px 0;
            color: #333;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            color: white;
            background-color: #4CAF50;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 10px;
        }
        .btn:hover {
            background-color: #45a049;
        }
        .video-container {
            text-align: center;
            margin: 20px 0;
        }
        .video-container iframe {
            max-width: 100%;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <header>
        <h1>Dashboard Kasir Sembako Berma</h1>
    </header>
    
    <div class="nav">
        <a href="dashboard.php">Home</a>
        <a href="produk.php">Produk</a>
        <a href="tentang_kami.php">Tentang Kami</a>
        <a href="admin/login_admin.php">Login Admin</a>
    </div>

    <div class="container">
        <div class="hero">
            <div class="hero-content">
                <h1>Selamat Datang di Sembako Berma</h1>
                <p>Kelola penjualan Anda dengan mudah menggunakan sistem kami yang dirancang khusus untuk toko sembako.</p>
                <a href="#" class="btn">Mulai Sekarang</a>
            </div>
        </div>

        <div class="video-container">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/aQTPA3JhmWs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

        <div class="card">
            <h3>Produk Terlaris</h3>
            <p>Tampilkan daftar produk yang paling sering terjual di toko Anda.</p>
        </div>
        
        <div class="card">
            <h3>Transaksi Hari Ini</h3>
            <p>Jumlah total transaksi yang telah dilakukan hari ini: <strong>Rp 1.000.000</strong></p>
        </div>
        
        <div class="card">
            <h3>Laporan Mingguan</h3>
            <p>Unduh laporan mingguan Anda untuk analisis lebih lanjut.</p>
        </div>
    </div>
</body>
</html>
