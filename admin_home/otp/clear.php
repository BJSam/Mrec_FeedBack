<?php
if(isset($_POST["ClearAll_js"])){
	if($_POST["ClearAll_js"]==="clear_all_pls_js"){
$servername = "localhost";
$username = "admin89_lol";
$password = "mrec1234";

// Create connection
$conn = new mysqli($servername, $username, $password,"admin89_lol");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "TRUNCATE TABLE otps";
$result = $conn->query($sql);
//$result=$conn->query($result_sql);

echo $result;

}
else echo "php:Somthing Went Wrong Pls Contact Admin";
}
//else echo "You came to wrong place LOL Contact Adminstrator";





if(isset($_POST["SetOpt_Js"]) && isset($_POST["OTP_LOL"]) && isset($_POST["Secotpu"])){
	if($_POST["SetOpt_Js"]==="Set_OTP_JSqwmjuS"){
		
		$servername = "localhost";
$username = "admin89_lol";
$password = "mrec1234";

// Create connection
$conn = new mysqli($servername, $username, $password,"admin89_lol");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//$otpS = mysqli_real_escape_string($conn,$_POST["OTP_LOL"] );
$otpS=$_POST["OTP_LOL"];
$sec=$_POST["Secotpu"];
$sql = "INSERT INTO otps (otp,sec) VALUES ($otpS,'$sec')";
//$result = mysqli_query($conn,$sql);
//$result=$conn->query($result_sql);
if ($conn->query($sql) === TRUE) {
  echo "success";
} 

else {
	echo $conn->error;
}
//echo $result;
		
	}
}

mysqli_close($conn);

?>