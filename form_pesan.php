<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Form Pesan </title>

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

            margin-bottom: 24px;
        }

        label {

            display: block;

            margin-top: 16px;

            margin-bottom: 6px;

            font-weight: bold;
        }

        input,
        textarea {

            width: 100%;

            padding: 12px;

            border: 1px solid #90CAF9;

            border-radius: 8px;

            font-family: Arial, sans-serif;

            font-size: 16px;

            background-color: #F8FBFF;
        }

        input:focus,
        textarea:focus {

            outline: 2px solid #2196F3;

            border-color: #2196F3;
        }

        textarea {

            height: 145px;

            resize: vertical;
        }

        button,
        .kembali {

            display: inline-block;

            margin-top: 20px;

            padding: 10px 16px;

            border: none;

            border-radius: 8px;

            font-size: 16px;

            text-decoration: none;

            cursor: pointer;
        }

        button {

            background-color: #2196F3;

            color: white;
        }

        .kembali {

            background-color: #90CAF9;

            color: #23405A;
        }

        button:hover {

            background-color: #1565C0;
        }

        .kembali:hover {

            background-color: #64B5F6;
        }

    </style>

</head>

<body>

    <div class="container">

        <h2>Form Pesan Mahasiswa</h2>

        <form action="hasil_pesan.php" method="POST">

            <label for="nama">
                Nama
            </label>

            <input
                type="text"
                id="nama"
                name="nama"
            >

            <label for="kelas">
                Kelas
            </label>

            <input
                type="text"
                id="kelas"
                name="kelas"
            >

            <label for="pesan">
                Pesan / Kesan
            </label>

            <textarea
                id="pesan"
                name="pesan"
            ></textarea>

            <button type="submit">
                Kirim
            </button>

            <a href="index.php" class="kembali">
                Kembali
            </a>

        </form>

    </div>

</body>

</html>