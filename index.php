<?php
    require_once 'config/config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
    <!-- class="p-3 m-0 border-0 bd-example" -->

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="img/lo1.png" alt="Bootstrap" width="100" height="100">
            </a>
            <!-- <a class="navbar-brand" href="#">Navbar</a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse col-md-6" id="navbarSupportedContent">

                <form class="mr-2 my-auto w-100 d-inline-block order-1">
                    <div class="input-group">
                        <input type="text" class="form-control border border-right-0" placeholder="Search...">
                        <span class="input-group-append">
                            <button class="btn btn-light border border-left-0" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>

            </div>
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register.php">Register</a>
                </li>
            </ul>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid px-md-3">           
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">หมวดหมู่สินค้า</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            ประเภทอาหาร
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">เนื้อสัตว์แช่แข็ง</a></li>
                            <li><a class="dropdown-item" href="#">ผักและผลไม้</a></li>
                            <li><a class="dropdown-item" href="#">อาหารทะเลแช่แข็ง</a></li>
                            <li><a class="dropdown-item" href="#">อาหารสำเร็จรูป</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">สินค้าแนะนำ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        <div class="p-4 p-md-5 mb-4 rounded text-bg-dark">
            <div class="col-md-6 px-0">
                <h1 class="display-4 fst-italic">Title of a longer featured blog post</h1>
                <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and
                    efficiently about what’s most interesting in this post’s contents.</p>
            </div>
        </div>
        <section>
            <div class="container marketing">
                <p>หมวดหมู่ยอดนิยม</p>
                <hr>
            </div>
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xxl-6 g-6">
                <!-- col -->
                <div class="col"> <a href="#" class="text-decoration-none text-inherit">
                        <!-- card -->
                        <div class="card card-product">
                            <div class="card-body text-center py-8">
                                <!-- img -->
                                <img src="img/vgt1.jpg"
                                    alt="logo1" class="mb-3">
                                <!-- text -->
                                <div class="text-truncate">ผักและผลไม้</div>
                            </div>
                        </div>
                    </a></div>
                <!-- col -->
                <div class="col"> <a href="#" class="text-decoration-none text-inherit">
                        <!-- card -->
                        <div class="card card-product">
                            <div class="card-body text-center py-8">
                                <!-- img -->
                                <img src="img/vgt1.jpg"
                                    alt="logo1" class="mb-3">
                                <!-- text -->
                                <div class="text-truncate">เนื้อสัตว์แช่แข็ง</div>
                            </div>
                        </div>
                    </a></div>
                <!-- col -->
                <div class="col"> <a href="#" class="text-decoration-none text-inherit">
                        <!-- card -->
                        <div class="card card-product">
                            <div class="card-body text-center py-8">
                                <!-- img -->
                                <img src="img/vgt1.jpg"
                                    alt="logo1" class="mb-3">
                                <!-- text -->
                                <div class="text-truncate">อาหารทะเลแช่แข็ง</div>
                            </div>
                        </div>
                    </a></div>
                <div class="col"> <a href="#" class="text-decoration-none text-inherit">
                        <!-- card -->
                        <div class="card card-product">
                            <div class="card-body text-center py-8">
                                <!-- img -->
                                <img src="img/vgt1.jpg"
                                    alt="logo1" class="mb-3">
                                <!-- text -->
                                <div class="text-truncate">อาหารสำเร็จรูป</div>
                            </div>
                        </div>
                    </a></div>


            </div>
        </section>
</body </html>