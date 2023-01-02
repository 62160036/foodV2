<?php 

    session_start();
    require_once 'config/config.php';

    if(isset($_POST['signup'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $c_password = $_POST['c_password'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $telephone = $_POST['telephone'];
        $address = $_POST['address'];
        $urole = 'user';

        if(empty($username)) {
            $_SESSION['error'] = 'กรุณากรอก Username';
            header("location: register.php");
        }else if (empty($email)) {
            $_SESSION['error'] = 'กรุณากรอก Email';
            header("location: register.php");
        }else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['error'] = 'รูปแบบ Email ไม่ถูกต้อง';
            header("location: register.php");
        } else if (empty($password)) {
            $_SESSION['error'] = 'กรุณากรอกรหัสผ่าน';
            header("location: register.php");
        } else if (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5) {
            $_SESSION['error'] = 'รหัสผ่านต้องมีความยาวระหว่าง 5 ถึง 20 ตัวอักษร';
            header("location: register.php");   
        }else if (empty($c_password)) {
            $_SESSION['error'] = 'กรุณายืนยันรหัสผ่าน';
            header("location: register.php");
        }else if ($password != $c_password) {
            $_SESSION['error'] = 'รหัสผ่านไม่ตรงกัน';
            header("location: register.php");
        }else if (empty($username)) {
            $_SESSION['error'] = 'กรุณากรอกชื่อ';
            header("location: register.php");
        }else if (empty($lastname)) {
            $_SESSION['error'] = 'กรุณากรอกนามสกุล';
            header("location: register.php");
        }else if (empty($telephone)) {
            $_SESSION['error'] = 'กรุณากรอกเบอร์โทรศัพท์';
            header("location: register.php");
        }else if (empty($address)) {
            $_SESSION['error'] = 'กรุณากรอกที่อยู่';
            header("location: register.php");
        }else{
            try {

                $check_email = $conn->prepare("SELECT email FROM users WHERE email = :email");
                $check_email->bindParam(":email", $email);
                $check_email->execute();
                $row = $check_email->fetch(PDO::FETCH_ASSOC);

                if ($row['email'] == $email) {
                    $_SESSION['warning'] = "มีอีเมลนี้อยู่ในระบบแล้ว <a href='login.php'>คลิ๊กที่นี่</a> เพื่อเข้าสู่ระบบ";
                    header("location: login.php");
                }else if (!isset($_SESSION['error'])) {
                    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
                    $stmt = $conn->prepare("INSERT INTO users(firstname, lastname, email, password, username, telephone, address, urole) 
                                            VALUES(:firstname, :lastname, :email, :password, :username, :telephone, :address, :urole)");
                    $stmt->bindParam(':firstname', $firstname);
                    $stmt->bindParam(':lastname', $lastname);
                    $stmt->bindParam(':email', $email);
                    $stmt->bindParam(":password", $passwordHash);
                    $stmt->bindParam(':username', $username);
                    $stmt->bindParam(':telephone', $telephone);
                    $stmt->bindParam(':address', $address);
                    $stmt->bindParam(':urole', $urole);
                    $stmt->execute();
                    $_SESSION['success'] = "สมัครสมาชิกเรียบร้อยแล้ว! <a href='login.php' class='alert-link'>คลิกที่นี่เพื่อนเข้าสู่ระบบ</a>";
                    header("location: register.php");
                }else {
                    $_SESSION['error'] = "มีบางอย่างผิดพลาด";
                    header("location: login.php");
                }

            }catch(PDOException $e) {
                echo $e->getMessage();   
            } 
        }
    
    }    
        

?>