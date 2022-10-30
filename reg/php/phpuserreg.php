<?php

require('../../php/connect.php');
$utype=$_POST['usertype'];





$firstname = $_POST["fname"];
$lastname = $_POST["sname"];
$email = $_POST["email"];
$phonenumber = $_POST["phoneno"];
$dateofbirth = $_POST["dob"];
$usertype = $_POST["usertype"];
$gender = $_POST["gender"];
$district = $_POST["district"];
$distid =$_POST["district"];
$city =$_POST["city"];
$address = $_POST["address"];
$password = $_POST["password1"];
$confirmpassword = $_POST["password2"];

$name=$firstname." ".$lastname;

$numrow = getrows("select * from login where email='$email';");

echo $numrow;

if ($numrow == 0) 
{
	if($password==$confirmpassword)
	{
		$sqllogin="insert into login(email,password,usertype) values('$email','$password','$utype')";
		if(insert($sqllogin))
		{

			///Success of login

	        $sqlreg = "insert into registration(email,name,phone,dateofbirth,city,gender) values('$email','$name','$phonenumber','$dateofbirth','$city','$gender')";

	        if(insert($sqlreg))
	        {
	        	 ?>
			    <script>
			        alert("Error Occoured in Registration");
			        window.location.replace('../../user/index.php');
			    </script>

				<?php

	        }

	        else
	        {
	        	 ?>
			    <script>
			        alert("Error Occoured in login.. ");

			    </script>

				<?php

	        }
			
    	}
		else
		{
			 ?>
		    <script>
		        alert("Error Occoured in Registration");
		      //  window.location.replace('../userreg.php');
		    </script>

			<?php

		}


	}
	else 
	{
	    ?>
	    <script>
	        alert("password Doesnot Match");
	        window.location.replace('../userreg.php');
	    </script>

		<?php

	}

    
} 
else 
{
    ?>
    <script>
        alert("Email already Registered... Try another email!!");
        window.location.replace('../medhya/');
    </script>

<?php

}
?>