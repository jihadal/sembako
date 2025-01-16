<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Saya - Sembako Berma</title>
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
            padding: 10px 20px;
            text-align: center;
        }
        .nav {
            background-color: #333;
            padding: 10px 20px;
            text-align: center;
        }
        .nav a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
        }
        .container {
            padding: 20px;
            max-width: 600px;
            margin: 0 auto;
        }
        .card {
            background: white;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            font-size: 1rem;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
        .profile-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin: 0 auto;
            display: block;
            border: 3px solid #4CAF50;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <header>
        <h1>Profil Saya</h1>
    </header>

    <div class="nav">
        <a href="dashboard.php">Home</a>
        <a href="produk.php">Produk</a>
        <a href="tentang_kami.php">Tentang Kami</a>
        <a href="profil.php">Profil</a>
    </div>

    <div class="container">
        <div class="card">
            <h3>Informasi Profil</h3>

            <!-- Foto Profil -->
            <img src="https://via.placeholder.com/150" alt="Foto Profil" class="profile-img">

            <div class="form-group">
                <label for="nama">Nama Lengkap:</label>
                <input type="text" id="nama" value="Muhammad Jihad Al afgani" disabled>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <input type="text" id="alamat" value="Jl. Teratai Raya No. 123, Rancaekek Kencana" disabled>
            </div>
        </div>
    </div>

</body>
</html>
