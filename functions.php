<?php
function checkLogin ($con)
{
   if(isset($_SESSION['USERID']))
   {
       $id = $_SESSION['USERID'];
       $query = " SELECT * FROM USERS WHERE USERID = '$id' LIMIT 1";

       $result = mysqli_query($con, $query);
       if($result && mysqli_num_rows($result) > 0)
       {
         $userData = mysqli_fetch_assoc($result);
         return $userData;
       }
   }
   //redirect to login
   header('location: login.php');
   die;
} 

function randomNum($length)
{

	$text = "";
	if($length < 5)
	{
		$length = 5;
	}

	$len = rand(4,$length);

	for ($i=0; $i < $len; $i++) { 
		# code...

		$text .= rand(0,9);
    }

}