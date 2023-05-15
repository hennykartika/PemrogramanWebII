<?php
require "Login.php";

session_start();
if (isset($_SESSION['nomor_member'])):
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/14edc419b7.js"></script>
    <title>Peminjaman Buku</title>
    <style>
        .welcome {
            color: #FF5733;
            font-size: 36px;
            margin-top: 20px;
        }
        
        .card-info-header {
            background-color: #F8D7DA;
            color: #721C24;
            font-weight: bold;
        }
        
        .info-text {
            margin-bottom: 10px;
        }
        
        .btn-danger {
            background-color: #DC3545;
            border-color: #DC3545;
        }
        
        .btn-danger:hover {
            background-color: #C82333;
            border-color: #C82333;
        }
    </style>
</head>
<body>
    <div class="custom-container">
        <div class="text-center">
            <h1 class="welcome">Peminjaman Buku</h1>
            <div class="btn-group">
                <a class="btn btn-primary" href="Member.php">Member</a>
                <a class="btn btn-success" href="Buku.php">Buku</a>
                <a class="btn btn-danger" href="Peminjaman.php">Peminjaman</a>
            </div>
        </div>
        <div class="card card-info mx-auto">
            <div class="card-header card-info-header"><i class="fa fa-info-circle"></i> INFO</div>
            <div class="card-body">
                Tombol <b>Member</b> Untuk Cek List Member<br>
                Tombol <b>Buku</b> Untuk Cek List Buku<br>
                Tombol <b>Peminjaman</b> Untuk Cek Peminjaman<br>
            </div>
        </div>
        <div class="text-center" style="padding-top: 20px;">
            <a class="btn btn-danger" href="Logout.php"><i class="fas fa-sign-out-alt"></i> Keluar</a>
        </div>
    </div>
</body>
</html>
<?php
else:
    header("location:FormLogin.php");
endif;
?>
