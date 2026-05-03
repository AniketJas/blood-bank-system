<html>
    <body>
        <?php
        require_once '../config.php';
        
        $id = $_GET['id'];
        $pass = $_GET['pass'];
        $q = "select * from admin where email='$id' and password='$pass' ";

        $rs = mysqli_query($con,$q);

        if($row = mysqli_fetch_array($rs)){
            echo "<script>
            window.location.assign('admindashboard.php');</script>";

            session_start();
            $_SESSION['uid'] = $row['name'];
        }else{
            echo "<script>alert('invalid Username or Password');
            window.location.assign('adminlogin.php');
            </script>";
        }
        ?>
    </body>
</html>