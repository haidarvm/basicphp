<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="haidarvm">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Basic-<?=!empty($page_title) ? $page_title :  'Application';?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?=URL;?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=URL;?>assets/css/all.min.css" rel="stylesheet"><!--  FontAwesome 6 -->
    <link href="<?=URL;?>assets/css/custom.css" rel="stylesheet"><!-- Custom styles for this template -->
    <?php function_exists('css') ? css() : ''; ?>
    <style>
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-white">
        <div class="container-fluid  row g-5 justify-content-center text-center ">
        <div class=" ">
            <img class="logo me-2" src="<?=URL;?>assets/img/hydant-logo.png"  alt="">
            <a class="navbar-brand  text-dark" href="#"> Mini Logger</a>
        </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link text-dark active  " aria-current="page" href="<?=URL;?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark  " href="<?=URL;?>json">Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark  " href="<?=URL;?>auth/logout">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>