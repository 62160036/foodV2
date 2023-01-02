<?php
    session_start();
    require_once 'config/config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="img/lo1.png" alt="Bootstrap" width="70" height="50">
            </a>
            <!-- <a class="navbar-brand" href="#">Navbar</a> -->
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
                        <a class="nav-link">สินค้าแนะนำ</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <form action="signin_db.php" method="post">
            <?php if(isset($_SESSION['error'])) { ?>
            <div class="alert alert-danger" role="alert">
                <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
            </div>
            <?php } ?>
            <?php if(isset($_SESSION['success'])) { ?>
            <div class="alert alert-success" role="alert">
                <?php 
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
            </div>
            <?php } ?>
            <!-- class="p-4 p-md-5 border rounded-3 bg-light" -->
            <div class="col-md-10 mx-auto col-lg-5">
                <h3 class="mt-4 text-center">เข้าสู่ระบบ</h3>
                <hr>
                <form action="signin_db.php" method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username :</label>
                        <input type="text" class="form-control" name="username" aria-describedby="username">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password :</label>
                        <input type="password" class="form-control" name="password">
                        <small class="form-text"><p><a href="password_reset.php" class="float-end">ลืมรหัสผ่าน?</a></small>
                    </div>
                    <button class="w-100 btn btn-lg btn-success mt-4" name="signin" type="submit">Login</button>
                    <hr class="my-4">
                    <p>ยังไม่เป็นสมาชิก? <a href="register.php">กดที่นี่</a></p>
                    
                </form>
            </div>         
</body>

</html>