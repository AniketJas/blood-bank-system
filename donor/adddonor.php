<html>
    <body>
        <?php

        $email = $_GET['email'];
        $name = $_GET['name'];
        $pass = $_GET['pass'];
        $mob = $_GET['mob'];

        $con = mysqli_connect('localhost','root','8338', 'bloodbank');

        $q = "insert into donors(name,email,password,mobile) values('$name','$email','$pass','$mob')";
        $rs = mysqli_query($con,$q);

        while ($rs) {
            echo "<script>alert('Donor registered successfully. Now login to continue.');
            window.location.assign('donorlogin.php');</script>";
        }

        ?>
    </body>
</html>