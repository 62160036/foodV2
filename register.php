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
        <h3 class="mt-4">สมัครสมาชิก</h3>
        <hr>
        <form class="row g-3" action="singnup_db.php" method="post">
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

            <?php if(isset($_SESSION['warning'])) { ?>
            <div class="alert alert-warning" role="alert">
                <?php  
                        echo $_SESSION['warning'];
                        unset($_SESSION['warning']);
                    ?>
            </div>
            <?php } ?>



            <div class="col-md-6">
                <label for="username" class="form-label">Username <span>*</span></label>
                <input type="text" class="form-control" name="username" aria-describedby="username">
            </div>
            <div class="col-md-6">
                <label for="email" class="form-label">Email <span>*</span></label>
                <input type="email" class="form-control" name="email" aria-describedby="email">
            </div>
            <div class="col-md-6">
                <label for="password" class="form-label">Password <span>*</span></label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="col-md-6">
                <label for="confirm password" class="form-label">Confirm Password <span>*</span></label>
                <input type="password" class="form-control" name="c_password">
            </div>
            <div class="col-md-6">
                <label for="firstname" class="form-label">ชื่อ <span>*</span></label>
                <input type="text" class="form-control" name="firstname" aria-describedby="firstname">
            </div>
            <div class="col-md-6">
                <label for="lastname" class="form-label">นามสกุล <span>*</span></label>
                <input type="text" class="form-control" name="lastname" aria-describedby="lastname">
            </div>
            <div class="col-md-6">
                <label for="telephone" class="form-label">เบอร์โทรศัพท์ <span>*</span></label>
                <input type="text" class="form-control" name="telephone" aria-describedby="telephone">
            </div>
            <div class="md-5">
                <label for="address" class="form-label">ที่อยู่ <span>*</span></label>
                <input type="text" class="form-control" name="address" aria-describedby="address">
            </div>
            <div class="col-md-6">
                <label for="district" class="form-label">อำเภอ <span>*</span></label>
                <input type="text" class="form-control" id="district" required>
            </div>
            <div class="col-md-6">
                <label for="province" class="form-label">จังหวัด <span>*</span></label>
                <input type="text" class="form-control" id="province" required>
            </div>
            <div class="col-md-3">
                <label for="zipcode" class="form-label">รหัสไปรษณีย์ <span>*</span></label>
                <input type="text" class="form-control" id="zipcode" required>
            </div>
            <div class="col-12">
                <button type="submit" name="signup" class="btn btn-primary">สมัครสมาชิก</button>
            </div>
        </form>
        <hr>
        <p>เคยสมัครสมาชิกอยู่แล้วใช่ไหม? <a href="login.php">เข้าสู่ระบบ</a></p>
    </div>

    </div>
    <?php require_once 'includes/footer.php';  ?>