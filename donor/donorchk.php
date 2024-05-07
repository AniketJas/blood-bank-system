<html>
    <body>
        <?php
        $id = $_GET['id'];
        $pass = $_GET['pass'];
        
        $con = mysqli_connect('localhost','root','8338', 'bloodbank');
        $q = "select * from donors where email='$id' and password='$pass' ";

        $rs = mysqli_query($con,$q);

        if($row = mysqli_fetch_array($rs)){
            echo "<script>window.location.assign('donordashboard.php');</script>";

            session_start();
            $_SESSION['id'] = $row['id'];
            $_SESSION['name'] = $row['name'];

        }else{
            echo "<script>alert('invalid Username or Password');
            window.location.assign('donorlogin.php');
            </script>";
        }
        ?>
    </body>
</html>