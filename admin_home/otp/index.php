<?php
$servername = "localhost";
$username = "admin89_lol";
$password = "mrec1234";

// Create connection
$conn = new mysqli($servername, $username, $password,"admin89_lol");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$Cont_sql = "SELECT COUNT(*) as count FROM otps";
$result_sql="SELECT * FROM otps";
$result_Count = $conn->query($Cont_sql);
$result=$conn->query($result_sql);
$count_row = mysqli_fetch_assoc($result_Count);
$count = $count_row[ "count" ];




mysqli_close($conn);
?>
<html>
<head>
     <meta charset="utf-8">
		<link rel="icon" href="https://mrec.freecse.me/admin_home/mreclogo.png" type="image/gif" sizes="32x32"/>
		<link rel="stylesheet" href="https://mrec.freecse.me/admin_home/menu_style.css">
    <title>OTP Generator</title>
<style>
body{
	 background-image:url("bg.jpg");
}
#headingtxt{
	 -webkit-text-stroke: 1px black;
   color: white;
   text-shadow:
       3px 3px 0 #000,
     -1px -1px 0 #000,  
      1px -1px 0 #000,
      -1px 1px 0 #000,
       1px 1px 0 #000;
	   font-family: "Times New Roman", Times, serif;
	   font-size: 60px;
}
#otpdisplay{
	border: 5px solid #6e6d59;
	position: relative;
	border-radius: 0px 40px 40px 40px;
	width:500px;
	height:200px;
	overflow-y:auto;
	overflow-x:auto;
	align:center;
}
#otptable{
	
	padding-top:20px;
	align:center;
	border-spacing: 20px;
	
	
}
.inputtbl td 
{
    padding-left:20px;
    padding-bottom:20px;
}

</style>
			  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
			  <link rel="stylesheet" href="bootstrap-select.min.css">
			   
    <link rel="stylesheet" href="fstyle.css">
	<script>
function init(){

firebase.auth().onAuthStateChanged(function(user) {
  if (user) {
   
	//console.log(user);
  } else {
    // User is signed out.
    // ...
	//console.log("lol");
	window.location.replace("https://mrec.freecse.me/");

  }
});

}
</script>

<script>
function Logout(){
firebase.auth().signOut()
  .then(function() {
  location.reload(true);
  })
  .catch(function(error) {
    // An error happened
	alert("somthing went wrong Pls contact admin");
	console.log(error);
  });
}
</script>

</head>
<body onload="init();rndd();">
    
    <div class="menu-section">
  <div class="menu-toggle">
    <div class="one"></div>
    <div class="two"></div>
    <div class="three"></div>
  </div>
  <nav>
		<ul role="navigation" class="hidden">
		<li><a href="https://mrec.freecse.me/admin_home/">Home</a></li>
		 <li><a href="https://mrec.freecse.me/admin_home/facutly/">Faculty</a></li>   
            <li><a href="#">REPORT</a></li>
            <li><a href="#">CHANGE PASSWORD</a></li>
            <li><a href="javascript:void(0);" onclick="Logout();">LOGOUT</a></li>
            <li><a href="#">CONTACT US</a></li>
		
		</ul>
	</nav>
</div>
    
<center>
<h1 id="headingtxt">Generate OTP for Student Feedback Access</h1></br>
<div id="otpdisplay" >
<img src="ca.png" title="Clear All" style="position: absolute; top: 0; right: 10;transform: scaleX(-1);height:60px;width:60px;cursor: pointer;" alt="Clear All" onclick="cleardb();"/>
<p id="hide_otp_norecentotps" style="padding-top:60px; color:#627ea6;">No Recent OTP's</p>
<?php

if($count>0){
echo "<script>document.getElementById('hide_otp_norecentotps').style.display='none';</script>";	
	echo "<table id='otptable' class='table table-striped'><tr><th>Date</th><th>OTP</th><th>SEC</th></tr>";

while ($row_users = mysqli_fetch_array($result)) {
    //output a row here
    echo "<tr><td>".($row_users['date'])."</td>"."<td>".($row_users['otp'])."</td>"."<td>".($row_users['sec'])."</td></tr>";
}

echo "</table>";
}
else{
	
}
?>
</div>
<table  class="inputtbl" border="0" align="center" style="margin-top:10px;">
<tr><td>
<select id="OtpUsec"  class="selectpicker">

<option value="select" disabled selected>Pls select section</option>
<option value="csea">CseA</option>
<option value="cseb">CseB</option>
<option value="csec">CseC</option>
<option value="csed">CseD</option>

</select>

</td>

<td>
 <div class="input-group" style="width:150px; ">
      <input id="otp" type="text" class="form-control" name="otp" placeholder="OTP" maxlength="5" onkeypress='return restrictAlphabets(event)'>
      <span class="input-group-addon"><i style="margin-left:10px;" ><img style="width:35px;height:40px; cursor: pointer; padding-top:5px;" src="https://img.icons8.com/ios/50/000000/update-left-rotation.png" title="Generate Random OTP"  onclick="document.getElementById('otp').value=Math.floor(Math.random() * 90000) + 10000;"/></i></span>
    </div>
</td></tr>
<tr><td colspan="2" align="center">
<button class="btn btn-outline-primary" onclick="submitotpjs();" style="margin-top:10px;">Set OTP</button>
</td></tr>
</table>

</center>


<div class="footer">
  <div id="button"  ></div>
<div id="container">
<div id="cont">
<div class="footer_center">
	   <h3 id="ftxt"></h3>
</div>
</div>
</div>
</div>


	<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/6.4.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/6.4.0/firebase-auth.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#config-web-app -->

<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyC_JAPZKFMhaoYzTnnwBx6vNS68B0Q1HH0",
    authDomain: "mrecfeed.firebaseapp.com",
    databaseURL: "https://mrecfeed.firebaseio.com",
    projectId: "mrecfeed",
    storageBucket: "",
    messagingSenderId: "553177136316",
    appId: "1:553177136316:web:159b202706cad7e3"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
</script>


<script>
function restrictAlphabets(e){
				var x=e.which||e.keycode;
				if((x>=48 && x<=57) || x==8 ||
					(x>=35 && x<=40)|| x==46)
					return true;
				else
					return false;
			}
function cleardb(){
	if($('#hide_otp_norecentotps').css('display') == 'none')
{


   $.ajax
    ({
    
        type: "POST",
        url: "https://mrec.freecse.me/admin_home/otp/clear.php/",
        data: {"ClearAll_js" : "clear_all_pls_js"},
        success: function (data) //giving null from response 
        {
            //alert(data);
            if(data){ 
             if(data==1){
				 console.log(data);
				 alert("Cleared Pls Refresh");
			 window.location.replace("https://mrec.freecse.me/admin_home/otp/");
			 
			 
			  }
			  else {
				  alert("Somthing Went Wrong PLS Contact Admin");
			  }
            
            }
        }
    }); 
	}
	else alert("No previous data");
	
}
function submitotpjs(){
	var otp=document.getElementById('otp').value;
	var Secotpu=document.getElementById('OtpUsec').value;
	if(otp>=10000 && Secotpu!=""){
		
		//else iSotpUnq ="true";
		
	 $.ajax
    ({
    
        type: "POST",
        url: "clear.php",
        data: {"SetOpt_Js" : "Set_OTP_JSqwmjuS","OTP_LOL":otp,"Secotpu":Secotpu},
        success: function (data)  
        {
            //alert(data);
            if(data){ 
             if(data==="success"){
				 console.log(data);
			 window.location.replace("https://mrec.freecse.me/admin_home/otp/");
			 //alert("Set: " +data);
			 
			  }
			  else {
			    var Derror=  data.split(" ");
			      if(Derror[0]=="Duplicate"){
			          alert(Derror[2]+" already exist. so, please clear that value and reenter it");
			      }
			      else
				  alert("Somthing Went Wrong PLS Contact Admin");
				  //console.log(data);
			  }
            
            }
			else alert(data);
        }
    }); 
	
}
else alert("Please fill a 5 digit valid OTP in OTP field Above");
}
</script>


<script>

function merge_array(array1, array2) {
    var result_array = [];
    var arr = array1.concat(array2);
    var len = arr.length;
    var assoc = {};

    while(len--) {
        var item = arr[len];

        if(!assoc[item]) 
        { 
            result_array.unshift(item);
            assoc[item] = true;
        }
    }

    return result_array;
}




function random_item(items)
{
  
return items[Math.floor(Math.random()*items.length)];
     
}
function rndd(){
var itm=[];
var items = ["abcd", "xyz", "xcv", "ll"];
  for(var k=0;k<=items.length;k++){
	itm[k]=random_item(items);
  }
                                   
   const uniqueArray = Array.from(new Set(itm));
   if(uniqueArray.length==items.length){
  // document.getElementById("ftxt").value="By:- "+uniqueArray;
//console.log(uniqueArray);
window.rnddd=uniqueArray;
                                   }
    else{
   //  var array3={};   
 //array3 = items.concat(uniqueArray).unique(); 
   
var k= merge_array(items, uniqueArray); 
//console.log("lol"+k);                  
window.rnddd=   k;
rndl();	
                                   }
								   }
								   
			function rndl(){
			console.log(window.rnddd);
document.getElementById("ftxt").innerHTML ="By:- "+ window.rnddd;
			}	


	
</script>




<script
			  src="https://code.jquery.com/jquery-3.4.1.min.js"
			  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
			  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="bootstrap-select.min.js"></script>
<script  src="https://mrec.freecse.me/admin_home/menu_script.js"></script>


</body>
</html>