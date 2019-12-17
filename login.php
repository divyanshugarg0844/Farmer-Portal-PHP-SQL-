<?php
	if($_POST)
	{
		ob_start();
		$email2=$_POST["email2"];
		$pass2=$_POST["pass2"];
		$db = mysqli_connect('localhost','root','','test');
		if($email2=='Prashant@iwp.com' && $pass2=='Prashant')
		{
			echo "<script>location.href='admin_home.html'</script>";
		}
		else
		{
			$sql = "SELECT Email, Password FROM try WHERE Email='$email2' && Password='$pass2'";
		    $result = mysqli_query($db,$sql);
		    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		    $count = mysqli_num_rows($result);
			if($count == 1)
			{
				header('Location:client_home.html');
				exit;
			}
			else
			{	
				header('Location:index.php');
			}
		}
	}	
?>