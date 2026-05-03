<html>
    <body>
        <?php
        $id = $_GET['id'];
        $pass = $_GET['pass'];

        require_once '../config.php';
        $q = "select * from patients where email='$id' and password='$pass' ";

        $rs = mysqli_query($con,$q);

        if($row = mysqli_fetch_array($rs)){
            echo "<script>
            window.location.assign('patientdashboard.php');</script>";

            session_start();
            $_SESSION['name'] = $row['name'];
            $_SESSION['id'] = $row['id'];
        }else{
            echo "<script>alert('Invalid Username or Password');
            window.location.assign('patientlogin.php');
            </script>";
        }
        ?>
    </body>
</html>