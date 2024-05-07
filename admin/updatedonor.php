<html>
    <body>
        <?php
        $id = $_GET['id'];
        $name = $_GET['name'];
        $email = $_GET['email'];
        $pass = $_GET['pass'];
        $mob = $_GET['mob'];

        $con = mysqli_connect('localhost','root','8338','bloodbank');
        $q = "update donors set name='$name', email='$email', password='$pass', mobile='$mob' where id='$id'";
        $result = mysqli_query($con, $q);

        if($result){
            echo "<script>alert('Updated Successfully');
            window.location.assign('donordetails.php')</script>";
        }
        ?>
    </body>
</html>