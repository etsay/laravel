<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
     body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }

        nav {
            margin-top: 10px;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            text-align: center;
        }

        nav li {
            display: inline;
            margin-right: 20px;
        }

        main {
            margin: 20px;
        }

        .card {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        form {
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #333;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #555;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Form Pendaftaran</h1>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="card"  data-aos="zoom-in"  data-aos-duration="1500">
            
            <h2>Form Pendaftaran</h2>
            <form id="registrationForm" action="#" method="post">
                @csrf
                <label for="nama_lengkap">Nama Lengkap:</label>
                <input type="text" name="nama_lengkap" required>

                <label for="tanggal_lahir">Tanggal Lahir:</label>
                <input type="date" name="tanggal_lahir" required>

                <label for="alamat">Alamat:</label>
                <input type="text" name="alamat" required>

                <label for="no_hp">No. HP:</label>
                <input type="text" name="no_hp" required>

                <label for="alamat_email">Alamat Email</label>
                <input type="text" name="alamat_email" required>

                <label for="pendidikan_terakhir">Pendidikan Terakhir:</label>
                <input type="text" name="pendidikan_terakhir" required>

                <label for="file_pdf">Unggah File PDF:</label>
                <input type="file" name="file_pdf" accept=".pdf" required>

                <button type="submit">Daftar</button>
            </form>
        </div>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('registrationForm');

            form.addEventListener('submit', function (event) {
                event.preventDefault();

                Swal.fire({
                    title: 'Sukses',
                    text: 'Pendaftaran berhasil!',
                    icon: 'success',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "{{ url('/') }}";
                    }
                });
            });
        });
    </script>
    
    <footer>
        <p>© 2024 Final Project Kelompok 3</p>
    </footer>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>
