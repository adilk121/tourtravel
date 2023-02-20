<?php

//******************SMS SENDING START***************************//
$varPhNo="";
$mob=array("mymob"=>"9319302246");
//echo $mob['mymob'];
//$mob="9319302246";
	$varUserName="t1mohitlalroy";
	$varPWD="70654847";
	$varSenderID="NEWREG";
	$varPhNo=$mob['mymob'];

	
	$varMSG=urlencode("this is my testing msg from www.indiatourismincredible.com");
	$url="http://sms4power.com/api/swsendSingle.asp?";
	$data="username=$varUserName&password=$varPWD&sender=$varSenderID&sendto=$varPhNo&message=$varMSG";
	
  function postdata($url,$data)
    {
    //The function uses CURL for posting data to
      $objURL = curl_init($url);
      curl_setopt($objURL, CURLOPT_RETURNTRANSFER,1); 
      curl_setopt($objURL,CURLOPT_POST,1);
      curl_setopt($objURL, CURLOPT_POSTFIELDS,$data);
      $retval = trim(curl_exec($objURL));
      curl_close($objURL);
      return $retval;
    }
	echo $sendSMS = postData($url,$data);	


//******************SMS SENDING END***************************//

?>