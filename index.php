<?php
// membuat array berisi data mahasiswa
$mahasiswa = [
    [
        "nim" => "2509075",
        "nama" => "Tahta Pramesti",
        "jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
        "email" => "Tahta.pr@upi.edu",
        "nilai" => 58,
        "grade" => "D"
    ],
    [
        "nim" => "2503075",
        "nama" => "Futriani",
        "jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
        "email" => "futriani@upi.edu",
        "nilai" => 80,
        "grade" => "B"
    ],
    [
        "nim" => "250006",
        "nama" => "Wuri Handayani",
        "jurusan" => "Pendidikan Guru Sekolah Dasar",
        "email" => "Wuri@upi.edu",
        "nilai" => 60,
        "grade" => "C"
    ],
    [
        "nim" => "2501234",
        "nama" => "Amelia",
        "jurusan" => "Pendidikan Guru Pendidikan Anak Usia Dini",
        "email" => "Amel@upi.edu",
        "nilai" => 65,
        "grade" => "C"
    ],
    [
        "nim" => "2407439",
        "nama" => "Misar",
        "jurusan" => "Sistem Telekomunikasi",
        "email" => "Misar@upi.edu",
        "nilai" => 95,
        "grade" => "A"
    ]
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>

    <style>
        * {
            box-sizing: border-box;
        }
        body {
            font-family: 'Arial', sans-serif;
            background-color: #EAF4FF;
            color: #23405A;
            margin: 0;
            padding: 40px 5%;
        }
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 18px;
            box-shadow: 0 5px 18px rgba(35, 64, 90, 0.12);
            overflow-x: auto;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            margin-bottom: 35px;
        }
        h2 {
            color: #1976D2;
            margin-top: 0;
        }
        .header p {
            font-size: 18px;
            margin-bottom: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
        }

        th, td {
            border: 1px solid #CFE2F3;
            padding: 14px 12px;
            text-align: left;
        }

        th {
            background-color: #4A90E2;
            color: white;
        }

        tr:hover {
            background-color: #EAF4FF;
        }

        .btn {
            display: inline-block;
            padding: 10px 16px;
            border: none;
            border-radius: 8px;
            background-color: #2196F3;
            color: white;
            text-decoration: none;
            font-size: 15px;
            cursor: pointer;
            white-space: nowrap;
        }

        .btn:hover {
            background-color: #1565C0;
            color: white;
        }

        .lulus {
            color: #197A5A;
            font-weight: bold;
        }

        .tidak-lulus {
            color: #C62828;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <div class="container">

        <div class="header">

            <div>
                <h2>Daftar Mahasiswa</h2>
                <p>Mini Website PHP Dasar</p>
            </div>

            <a href="form_pesan.php" class="btn">
                Isi Form Pesan
            </a>

        </div>

        <table>

            <thead>
                <tr>
                    <th>No.</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>Email</th>
                    <th>Nilai</th>
                    <th>Grade</th>
                    <th>Status</th>
                    <th>Detail</th>
                </tr>
            </thead>

            <tbody>

                <?php foreach ($mahasiswa as $index => $mhs): ?>

                <tr>

                    <td><?= $index + 1 ?></td>
                    <td><?= ($mhs["nim"]) ?></td>
                    <td><?= ($mhs["nama"]) ?></td>
                    <td><?= ($mhs["jurusan"]) ?></td>
                    <td><?= ($mhs["email"]) ?></td>
                    <td><?= $mhs["nilai"] ?></td>
                    <td><?= ($mhs["grade"]) ?></td>

                    <td>

                        <?php

                        if ($mhs["nilai"] >= 70) {

                            echo '<span class="lulus">Lulus</span>';

                        } else {

                            echo '<span class="tidak-lulus">Tidak Lulus</span>';

                        }

                        ?>
                    </td>

                    <td>

                        <a class="btn"
                            href="detail.php?nim=<?= $mhs["nim"] ?>&nama=<?= $mhs["nama"] 
                            ?>&jurusan=<?= $mhs["jurusan"] ?>&email=<?= $mhs["email"] ?>&nilai=<?= $mhs["nilai"] 
                            ?>&grade=<?= $mhs["grade"] ?>">
                            Lihat Detail
                        </a>

                    </td>

                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>