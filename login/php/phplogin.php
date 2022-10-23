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
                          ?>
                        <script>
                            alert("User");
                             window.location.replace("../../tailor/");
                        </script>
                    <?php                        
                       
                    }
                    else if ($usertype == 0) {
                          ?>
                        <script>
                            alert("User");
                             window.location.replace("../../admin/");
                        </script>
                    <?php                        
                       
                    }
                     else if ($usertype == 3) {

                          ?>
                        <script>
                            alert("User");
                             window.location.replace("../../textile/");
                        </script>
                    <?php                        
                       
                    } else if ($usertype == 4) {
                         ?>
                        <script>
                            alert("User");
                             window.location.replace("../../organization/");
                        </script>
                    <?php                        
                       
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