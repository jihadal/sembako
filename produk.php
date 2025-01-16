<?php
include 'db_config.php';

$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk - Sembako Berma</title>
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
        .product-card {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .product-card img {
            max-width: 100%;
            border-radius: 8px;
            margin-bottom: 10px;
        }
        .product-card h3 {
            margin: 0 0 10px;
        }
        .product-card p {
            margin: 0;
            color: #555;
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
    </style>
</head>
<body>
    <header>
        <h1>Daftar Produk - Sembako Berma</h1>
    </header>
    
    <div class="nav">
        <a href="dashboard.php">home</a>
        <a href="produk.php">Produk</a>
        <a href="tentang_kami.php">Tentang Kami</a>
        <a href="login_admin.php">Login Admin</a>
        <a href="profil.php">Profil</a>
    </div>

    <div class="container">
        <h1>Daftar Produk</h1>
        <div class="products">
            <?php while ($row = $result->fetch_assoc()) { ?>
                <div class="product">
                    <!-- Menampilkan gambar produk -->
                    <img src="uploads/<?php echo $row['image']; ?>" alt="Gambar Produk">
                    <h3><?php echo $row['name']; ?></h3>
                    <p>Harga: Rp <?php echo number_format($row['price'], 2, ',', '.'); ?></p>
                    <p><?php echo $row['description']; ?></p>
                    <button onclick="location.href='payment.php'">Shop Now</button>
                </div>
            <?php } ?>
        </div>
    </div>
    <th>Nama Produk</th>
    <th>Harga</th>
    <th>Deskripsi</th>
    <th>Gambar</th>
    <th>Aksi</th>
</tr>
<?php while ($row = $result->fetch_assoc()) { ?>
<tr>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['price']; ?></td>
    <td><?php echo $row['description']; ?></td>
    <td><img src="<?php echo $row['image']; ?>" alt="Image" width="100"></td>
    <td>
        <a href="edit_product.php?id=<?php echo $row['id']; ?>">Edit</a> |
        <a href="delete_product.php?id=<?php echo $row['id']; ?>">Hapus</a>
    </td>
</tr>
<?php } ?>

</body>
</html>