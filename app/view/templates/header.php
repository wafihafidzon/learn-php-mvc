<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul'] ?></title>
    <link href="<?= BASEURL; ?>/css/bootstrap.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?= BASEURL; ?>">PHP MVC</a>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASEURL; ?>/mahasiswa">Menu</a>
                        </li>
                        <li>
                            <a class="nav-link" href="<?= BASEURL; ?>/about">About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    