<?php
$nim = $_GET["nim"];
$nama = $_GET["nama"];
$jurusan = $_GET["jurusan"];
$email = $_GET["email"];
$nilai = $_GET["nilai"];
$grade = $_GET["grade"];
?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Detail Mahasiswa</title>

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #EAF4FF;
            margin: 0;
            padding: 40px 20px;
            color: #23405A;
        }

        .container {

            max-width: 840px;
            margin: auto;
            padding: 30px;
            background-color: white;
            border-radius: 18px;
            box-shadow: 0 5px 18px rgba(35, 64, 90, 0.12);
        }

        h2 {

            color: #1976D2;
            font-size: 28px;
            margin: 20px 0 24px;
        }

        .item {

            background-color: #EAF4FF;
            padding: 14px;
            margin-bottom: 14px;
            border-radius: 8px;
            font-size: 18px;
            border-left: 5px solid #2196F3;

            overflow-wrap: anywhere;
        }

        .btn {

            display: inline-block;

            margin-top: 18px;

            padding: 10px 16px;

            background-color: #2196F3;

            color: white;

            text-decoration: none;

            border-radius: 8px;
        }

        .btn:hover {

            background-color: #1565C0;
        }

    </style>

</head>

<body>

    <div class="container">

        <h2>Detail Mahasiswa</h2>

        <div class="item">
            <strong>NIM:</strong> <?= $nim ?>
        </div>

        <div class="item">
            <strong>Nama:</strong> <?= $nama ?>
        </div>

        <div class="item">
            <strong>Jurusan:</strong> <?= $jurusan ?>
        </div>

        <div class="item">
            <strong>Email:</strong> <?= $email ?>
        </div>

        <div class="item">
            <strong>Nilai:</strong> <?= $nilai ?>
        </div>

        <div class="item">
            <strong>Grade:</strong> <?= $grade ?>
        </div>

        <div class="item">

            <strong>Status:</strong>

            <?php

            if ($nilai >= 70) {

                echo "Lulus";

            } else {

                echo "Tidak Lulus";
            }

            ?>

        </div>

        <a href="index.php" class="btn">
            Kembali
        </a>

    </div>

</body>

</html>