<?php
session_start();
require '../../php/connect.php';

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "select * from login WHERE email='$email'";

    $res = mysqli_query($conn, $sql);
    if ($res) {
        $num = mysqli_num_rows($res);
        if ($num > 0) {
            $row = mysqli_fetch_assoc($res);
            if($password==$row['password']) {
                $status = $row['status'];
                if ($status == 1) {
                    $usertype = $row['usertype'];
                    $_SESSION['email']="$email";

                    if ($usertype == 1) {
                        ?>
                        <script>
                            alert("User");
                             window.location.replace("../../user/");
                        </script>
                    <?php                        
                       
                    } else if ($usertype == 2) {
                        echo "Tailors";
                    } else if ($usertype == 3) {

                        echo "Organisation";
                    } else if ($usertype == 4) {
                        echo "Textiles";
                    } else {
                        echo "Invalid Usertype";
                    }
                } else {
                    ?>
                        <script>
                            alert("User not verified");
                            window.location.replace("../../");
                        </script>
                    <?php
                }
            } else {
                ?>
                    <script>
                        alert("incorrect");
                        window.location.replace("../login.php");
                    </script>
                <?php
            }
        } else {
            echo "Account does't exist";
              ?>
                  <script>
                alert("User not verified");
                window.location.replace("../../");
            </script>
        <?php

        }
    } else {
        echo "Error Occoured";
    }
}
?>