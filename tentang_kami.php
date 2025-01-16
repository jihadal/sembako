<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Sembako Berma</title>
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
        .container {
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }
        .hero {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .hero h1 {
            font-size: 2rem;
            margin-bottom: 10px;
            color: #333;
        }
        .hero p {
            color: #555;
            line-height: 1.6;
        }
        .team {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 20px;
        }
        .team-member {
            background-color: white;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
            flex: 1 1 300px;
            border-radius: 8px;
        }
        .team-member h3 {
            margin: 0;
            font-size: 1.2rem;
            color: #333;
        }
        .team-member p {
            margin-top: 5px;
            color: #777;
        }
    </style>
</head>
<body>

    <header>
        <h1>Tentang Kami - Sembako Berma</h1>
    </header>

    <div class="nav">
        <a href="dashboard.php">Home</a>
        <a href="produk.php">Produk</a>
        <a href="tentang_kami.php">Tentang Kami</a>
        <a href="login_admin.php">Login Admin</a>
        <a href="profil.php">Profil</a>
        <a href="logout.php">logout</a>
    </div>

    <div class="container">
        <div class="hero">
            <h1>Visi dan Misi Sembako Berma</h1>
            <p>Sembako Berma didirikan dengan tujuan untuk menyediakan kebutuhan sembako yang berkualitas dengan harga yang terjangkau bagi masyarakat. Kami percaya bahwa setiap keluarga berhak mendapatkan akses ke bahan pangan yang sehat dan berkualitas. Kami berkomitmen untuk terus meningkatkan kualitas pelayanan dan menjangkau lebih banyak pelanggan di seluruh Indonesia.</p>
        </div>

        <div class="hero">
            <h1>Tim Kami</h1>
            <p>Berikut adalah beberapa anggota tim yang berperan penting dalam kesuksesan Sembako Berma:</p>

            <div class="team">
                <div class="team-member">
                    <h3>muhammad jihad</h3>
                    <p>CEO & Founder</p>
                </div>
                <div class="team-member">
                    <h3>joe smit</h3>
                    <p>Marketing Manager</p>
                </div>
                <div class="team-member">
                    <h3>Sarah Lee</h3>
                    <p>Product Manager</p>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
