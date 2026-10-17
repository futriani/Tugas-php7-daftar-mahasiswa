<?php
$nama = $_POST["nama"];
$kelas = $_POST["kelas"];
$pesan = $_POST["pesan"];
?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tinggalkan Pesan</title>

    <style>

        * {
            box-sizing: border-box;
        }

        body {

            font-family: 'Trebuchet MS', sans-serif;

            background-color: #EAF4FF;

            margin: 0;

            padding: 40px 20px;

            color: #23405A;
        }

        .container {

            max-width: 780px;

            margin: auto;

            padding: 30px;

            background-color: white;

            border-radius: 18px;

            box-shadow: 0 5px 18px rgba(35, 64, 90, 0.12);
        }

        h2 {

            color: #1976D2;

            margin-top: 20px;
        }

        .item {

            background-color: #EAF4FF;

            padding: 14px;

            margin-bottom: 14px;

            border-radius: 8px;

            border-left: 5px solid #90CAF9;

            overflow-wrap: anywhere;
        }

        .btn {

            display: inline-block;

            margin-top: 15px;

            padding: 10px 16px;

            background-color: #2196F3;

            color: white;

            text-decoration: none;

            border-radius: 8px;
        }

        .btn:hover {

            background-color: #1565C0;
        }

        .pesan {

            white-space: pre-wrap;
        }

    </style>

</head>

<body>

    <div class="container">

        <h2>Tinggalkan Pesan</h2>

        <p>
            Pesan kamu Terkirim!
        </p>

        <div class="item">

            <strong>Nama:</strong>

            <?= ($nama) ?>

        </div>

        <div class="item">

            <strong>Kelas:</strong>

            <?= ($kelas) ?>

        </div>

        <div class="item">

            <strong>Pesan / Kesan:</strong>

            <p class="pesan">
                <?= ($pesan) ?>
            </p>

        </div>

        <a href="form_pesan.php" class="btn">
            Kembali ke Form
        </a>

        <a href="index.php" class="btn">
            Daftar Mahasiswa
        </a>

    </div>

</body>

</html>