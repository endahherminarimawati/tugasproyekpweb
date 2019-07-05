<!DOCTYPE html> 
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="asset/css/bootstrap/bootstrap.min.css">
    <!-- MyStyle CSS -->
    <link rel="stylesheet" href="asset/css/mystyle.css">
    <!-- Font Awesome icon CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Jquery JS -->
    <script src="asset/js/jquery.js"></script>
    <!-- Ajax JS -->
    <script src="asset/js/ajax.js"></script>
    <!-- Bootstrap JS -->
    <script src="asset/js/bootstrap.min.js"></script>
     

    <title>Tampil Data</title> 
</head>
<body>
    <!-- Menu Nav -->
    <div class="menu-nav">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light ">
                <a class="navbar-brand" href="#">ENDAH HERMINARIMAWATI</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
               <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ml-auto">
                        <a class="nav-item nav-link" href="index.html">Profile</a>
                        <a class="nav-item nav-link" href="kampus.html">Kampus</a>
                        <a class="nav-item nav-link" href="daftar.html">Daftar</a>
                        <a class="nav-item nav-link" href="#">Tampil</a>
                    </div>
                </div>
            </nav> 
        </div>
    </div>
    <!-- Akhir Menu Nav -->
    <h1>Daftar data dari pendaftaran</h1>  
            <?php
                $shownama = file('../tugas/data/formulir.txt');
                foreach($shownama as $nama)
                    echo $nama; 
                    echo '<br>';
                }
                    ?>
<!-- $shownama = file('../tugas/data/formulir.txt'); membuka file data.txt dengan hasil berupa data array bukan string -->
<!-- foreach($shownama as $nama)//Perulangan foreach akan menampilkan semua isi array dengan perintah yang lebih singkat daripada menggunakan perulangan for -->
<!-- echo $nama digunakan untuk mengeluarkan isi file dari nama -->
<!-- echo '<br>'digunakan untuk memberi enter -->
</body>
</html>