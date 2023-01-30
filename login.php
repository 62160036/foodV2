<?php
    session_start();
    require_once 'config/config.php';
?>
<?php 
require_once 'config/config.php'; 

include('includes/header.php'); 
include('includes/navbarnos.php'); 
?>

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
            <?php require_once 'includes/footer.php';  ?>