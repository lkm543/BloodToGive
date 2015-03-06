<?php
session_start();
require_once('src/facebook.php');  // Include facebook SDK file
function checkuser($fuid,$ffname,$femail){
  $currtimestr=date("Y-m-d H:i:s");
  include_once('mysql_info.php');
  $check = mysqli_query($link,"select * from user where fb_id='$fuid'");
  $check = mysqli_num_rows($check);
  if ($check==0) {
  // if new user . Insert a new record   
  $query = "INSERT INTO user (fb_id,email,name,license_date) VALUES ('$fuid','$femail','$ffname','$currtimestr')";
  mysqli_query($link,$query); 
  }
  $_SESSION['MM_UserID'] = $fuid;
}

$facebook = new Facebook(array(
  'appId'  => '611716732295222',   // Facebook App ID 
  'secret' => '059793b3235275578d2fd43d050a3e32',  // Facebook App Secret
  'cookie' => true,	
  'version' => 'v2.1'
));

$user = $facebook->getUser();

if ($user) {
  try {
      $user_profile = $facebook->api('/me');
  	  $fbid = $user_profile['id'];                 // To Get Facebook ID
 	    //$fbuname = $user_profile['username'];  // To Get Facebook Username
 	    $fbfullname = $user_profile['name']; // To Get Facebook full name
	    $femail = $user_profile['email'];    // To Get Facebook email ID
	/* ---- Session Variables -----*/
	    $_SESSION['FBID'] = $fbid;           
	    //$_SESSION['USERNAME'] = $fbuname;
      $_SESSION['FULLNAME'] = $fbfullname;
	    $_SESSION['EMAIL'] =  $femail;
      $_SESSION['MM_Username'] =  $fbid;

      //$username=$fbuname;


      //echo "hahahahahahahahahahahahahahahahahahahahahaha-";
      checkuser($fbid,$fbfullname,$femail);    // To update local DB
      //echo "-hahahahahahahahahahahahahahahahahahahahahaha";
  } catch (FacebookApiException $e) {
    error_log($e);
   $user = null;
  }
}
if ($user) {
	header("Location: diary.php");
} else {
 $loginUrl = $facebook->getLoginUrl(array(
		'scope'		=> 'email', // Permissions to request from the user
		));
 header("Location: ".$loginUrl);
}
?>
