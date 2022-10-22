<?php
session_start();

require '../../connect.php';
?>
<html>

<head>
  <script type="text/javascript" src="swal/jquery.min.js"></script>
  <script type="text/javascript" src="swal/bootstrap.min.js"></script>
  <script type="text/javascript" src="swal/sweetalert2@11.js"></script>
</head>
<body>


<?php


$email=$_SESSION['email'];


$target_dir = "../profile/";
$pic=basename($_FILES["profile_pic"]["name"]);
$target_file = $target_dir . basename($_FILES["profile_pic"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) 
{
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

if ($uploadOk == 0) {
  
  ?>
        <script>
            Swal.fire({
                icon: 'error',
                text: 'updation failed ',
                didClose: () => {
                    window.location.replace('../profile.php');
                }
            });
        </script>
            
          <?php
} 
else 
{

  $target_file=$target_dir.$email.".".$imageFileType;
  $imgname=$email.".".$imageFileType;
  unlink($target_file);
  if (move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $target_file)) {
  $sql1="update userreg SET pic='$imgname' WHERE email='$email'";  
  if($a=mysqli_query($conn,$sql1));
  {
   ?>
        <script>
            Swal.fire({
                icon: 'success',
                text: 'Profile Updated',
                didClose: () => {
                    window.location.replace('../profile.php');
                }
            });
        </script>
            
          <?php
  } 

  } else {
    ?>
        <script>
            Swal.fire({
                icon: 'error',
                text: 'updation failed ',
                didClose: () => {
                    window.location.replace('../profile.php');
                }
            });
        </script>
            
          <?php
  }
}

?>

</body>
</html>
