<?php

$conn=mysqli_connect('localhost','rhch9wzrtvhr','rbJtWx3u/','lorven_companies');
$url=$_SERVER['HTTP_HOST'];
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
		$ip = $_SERVER['HTTP_CLIENT_IP'];
	} 
	elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	} 
	else {
		$ip = $_SERVER['REMOTE_ADDR'];
	}
//$check_ip=mysqli_query($conn,"SELECT * FROM `website_query` WHERE `ip_addres`='$ip'");

if(isset($_POST['submit'])){
  
   $from='sales@keyoncompanies.com'; 

   $fromName='BrigadeCitadelHyderabad.com';

    $name=$_POST['name'];

    $email=$_POST['email'];

    $phone=$_POST['phone'];

	$honeypot = $_POST['firstname'];
	if(!empty($honeypot)){
	   echo '<script>alert("Thanks for Contacting Us. will get back to you ASAP")</script>'; 
       echo '<script>location.replace("https://www.brigadecitadelhyderabad.com/");</script>';   
	}
	else{
	//get latitude and longitude
$new_arr[]= unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip));
$latitude=$new_arr[0]['geoplugin_latitude'];
$longitude=$new_arr[0]['geoplugin_longitude'];


		$sql=mysqli_query($conn,"INSERT INTO `website_query`( `client_name`, `email`, `phone`, `message`, `query_from`, `assign_to`,`ip_addres`,`Latitude`,`Longitude`) VALUES ('$name','$email','$phone','','$url','','$ip','$latitude','$longitude')");	
	 //ec2 instance api link
         $curl_handle=curl_init();
         curl_setopt($curl_handle,CURLOPT_URL,'http://keyoncompanies.com/api/website_quires');
         curl_setopt($curl_handle, CURLOPT_POST, 1);
         curl_setopt($curl_handle, CURLOPT_POSTFIELDS, "name=$name&email=$email&phone=$phone&message=&url=$url&ip=$ip&lats=$latitude&longi=$longitude");
         curl_exec($curl_handle);
         curl_close($curl_handle);
	    
	
    
//MAIL PROCESS send to User
    $to=$email;
    $subject="Thanks for the query";
    $htmlContent='<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html" charset=utf-8" />
  <title>[SUBJECT]</title>
  <style type="text/css">
  body {
   padding-top: 0 !important;
   padding-bottom: 0 !important;
   padding-top: 0 !important;
   padding-bottom: 0 !important;
   margin:0 !important;
   width: 100% !important;
   -webkit-text-size-adjust: 100% !important;
   -ms-text-size-adjust: 100% !important;
   -webkit-font-smoothing: antialiased !important;
 }
 .tableContent img {
   border: 0 !important;
   display: block !important;
   outline: none !important;
 }
 a{
  color:#382F2E;
}

p, h1,h2,ul,ol,li,div{
  margin:0;
  padding:0;
}

h1,h2{
  font-weight: normal;
  background:transparent !important;
  border:none !important;
}

@media only screen and (max-width:480px)
		
{
		
table[class="MainContainer"], td[class="cell"] 
	{
		width: 100% !important;
		height:auto !important; 
	}
td[class="specbundle"] 
	{
		width: 100% !important;
		float:left !important;
		font-size:13px !important;
		line-height:17px !important;
		display:block !important;
		padding-bottom:15px !important;
	}	
td[class="specbundle2"] 
	{
		width:80% !important;
		float:left !important;
		font-size:13px !important;
		line-height:17px !important;
		display:block !important;
		padding-bottom:10px !important;
		padding-left:10% !important;
		padding-right:10% !important;
	}
		
td[class="spechide"] 
	{
		display:none !important;
	}
	    img[class="banner"] 
	{
	          width: 100% !important;
	          height: auto !important;
	}
		td[class="left_pad"] 
	{
			padding-left:15px !important;
			padding-right:15px !important;
	}
		 
}
	
@media only screen and (max-width:540px) 

{
		
table[class="MainContainer"], td[class="cell"] 
	{
		width: 100% !important;
		height:auto !important; 
	}
td[class="specbundle"] 
	{
		width: 100% !important;
		float:left !important;
		font-size:13px !important;
		line-height:17px !important;
		display:block !important;
		padding-bottom:15px !important;
	}	
td[class="specbundle2"] 
	{
		width:80% !important;
		float:left !important;
		font-size:13px !important;
		line-height:17px !important;
		display:block !important;
		padding-bottom:10px !important;
		padding-left:10% !important;
		padding-right:10% !important;
	}
		
td[class="spechide"] 
	{
		display:none !important;
	}
	    img[class="banner"] 
	{
	          width: 100% !important;
	          height: auto !important;
	}
		td[class="left_pad"] 
	{
			padding-left:15px !important;
			padding-right:15px !important;
	}
		
}

.contentEditable h2.big,.contentEditable h1.big{
  font-size: 26px !important;
}

 .contentEditable h2.bigger,.contentEditable h1.bigger{
  font-size: 37px !important;
}

td,table{
  vertical-align: top;
}
td.middle{
  vertical-align: middle;
}

a.link1{
  font-size:13px;
  color:#27A1E5;
  line-height: 24px;
  text-decoration:none;
}
a{
  text-decoration: none;
}

.link2{
color:#ffffff;
border-top:10px solid #27A1E5;
border-bottom:10px solid #27A1E5;
border-left:18px solid #27A1E5;
border-right:18px solid #27A1E5;
border-radius:3px;
-moz-border-radius:3px;
-webkit-border-radius:3px;
background:#27A1E5;
}

.link3{
color:#555555;
border:1px solid #cccccc;
padding:10px 18px;
border-radius:3px;
-moz-border-radius:3px;
-webkit-border-radius:3px;
background:#ffffff;
}

.link4{
color:#27A1E5;
line-height: 24px;
}

h2,h1{
line-height: 20px;
}
p{
  font-size: 14px;
  line-height: 21px;
  color:#000;
}

.contentEditable li{
 
}

.appart p{
 
}
.bgItem{
background: #ffffff;
}
.bgBody{
background: #ffffff;
}

img { 
  outline:none; 
  text-decoration:none; 
  -ms-interpolation-mode: bicubic;
  width: auto;

  clear: both; 
  display: block;
  float: none;
}
.brand {
    display: inline-block;
    font-family: "Montserrat", sans-serif;
    font-weight: 700;
    font-size: 3.2vmin;
    line-height: 1;
    color: #3d3d3d;
}
.text-primary {
    color: #c5a47e;
}
</style>


<script type="colorScheme" class="swatch active">
{
    "name":"Default",
    "bgBody":"ffffff",
    "link":"27A1E5",
    "color":"AAAAAA",
    "bgItem":"ffffff",
    "title":"444444"
}
</script>


</head>
<body paddingwidth="0" paddingheight="0" bgcolor="#d1d3d4"  style="padding-top: 0; padding-bottom: 0; padding-top: 0; padding-bottom: 0; background-repeat: repeat; width: 100% !important; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased;" offset="0" toppadding="0" leftpadding="0">
  <table width="" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td><table width="600" border="0" cellspacing="0" cellpadding="0" align="center" bgcolor="#ffffff" style="font-family:helvetica, sans-serif;" class="MainContainer">
      <!-- =============== START HEADER =============== -->
  <tbody>
    <tr>
      <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td valign="top" width="20">&nbsp;</td>
      <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td class="movableContentContainer">
      <div class="movableContent" style="border: 0px; padding-top: 0px; position: relative;">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td height="15"></td>
    </tr>
    <tr>
      <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td valign="top" width="60"></td>
      <td width="10" valign="top">&nbsp;</td>
      <td valign="middle" style="vertical-align: middle;">
                          <div class="contentEditableContainer contentTextEditable">
                            <div class="contentEditable" style="text-align: left;font-weight: light; color:#555555;font-size:26;line-height: 39px;font-family: Helvetica Neue;">
                              <h1 class="big"><a target="_blank" href="[CLIENTS.WEBSITE]" style="color:#444444"></a></h1>
                            </div>
                          </div>
                        </td>
    </tr>
  </tbody>
</table>
</td>
      <td valign="top" width="90" class="spechide">&nbsp;</td>
      <td valign="middle" style="vertical-align: middle;" width="150">
                          <div class="">
                            <div  style="text-align: right;">
                            
                                 
                            </div>
                          </div>
                        </td>
    </tr>
  </tbody>
</table></td>
    </tr>
    
    <tr>
       <td ><hr style="height:1px;background:#DDDDDD;border:none;"></td>
     </tr>
  </tbody>
</table>
	  </div>
     
      
  
      <div class="movableContent" style="border: 0px; padding-top: 0px; position: relative;">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
   
    <tr>
      <td style="border: 1px solid #EEEEEE; border-radius:6px;-moz-border-radius:6px;-webkit-border-radius:6px"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td valign="top" width="40">&nbsp;</td>
      <td><table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
                      <tr><td height="25"></td></tr>
                      <tr>
                        <td>
                          <div class="contentEditableContainer contentTextEditable">
                            <div class="contentEditable" style="text-align: center;">
                              <h2 >Thanks for Your Enquiry</h2>
                              <h4>IT S GREAT TO HAVE YOU WITH US</h4>
                              
                              <p align="left"><b>Dear '.$name.'</b><br />
We have received your details and We always work towards offering the best to you. 

Thank you for contacting us, we will get back to You Shortly...</p>

<h3>If Anything Urgent Please Contact</h3>
<p >

Mobile: <b>+91-98806 37001</b><br>

</p>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr><td height="24"></td></tr>
                    </table></td>
      <td valign="top" width="40">&nbsp;</td>
    </tr>
  </tbody>
</table>
</td>
    </tr>
  </tbody>
</table>
      </div>
      </td>
    </tr>
  </tbody>
</table>
</td>
      <td valign="top" width="20">&nbsp;</td>
    </tr>
  </tbody>
</table>
</td>
    </tr>
  </tbody>
</table>
</td>
    </tr>
  </tbody>
</table>
  </body>
  </html>';
        
// Set content-type header for sending HTML email 
$headers = "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n"; 
 
// Additional headers 
$headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n"; 
 
// Send email 
mail($to, $subject, $htmlContent, $headers);
   

//send to deepvision Mail

    $to='sandip.behera2020@gmail.com';
    $subject_deepvison="New Query";
    $htmlContent_deepvison='<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html" charset=utf-8" />
  <title>[SUBJECT]</title>
  <style type="text/css">
  body {
   padding-top: 0 !important;
   padding-bottom: 0 !important;
   padding-top: 0 !important;
   padding-bottom: 0 !important;
   margin:0 !important;
   width: 100% !important;
   -webkit-text-size-adjust: 100% !important;
   -ms-text-size-adjust: 100% !important;
   -webkit-font-smoothing: antialiased !important;
 }
 .tableContent img {
   border: 0 !important;
   display: block !important;
   outline: none !important;
 }
 a{
  color:#382F2E;
}

p, h1,h2,ul,ol,li,div{
  margin:0;
  padding:0;
}

h1,h2{
  font-weight: normal;
  background:transparent !important;
  border:none !important;
}

@media only screen and (max-width:480px)
		
{
		
table[class="MainContainer"], td[class="cell"] 
	{
		width: 100% !important;
		height:auto !important; 
	}
td[class="specbundle"] 
	{
		width: 100% !important;
		float:left !important;
		font-size:13px !important;
		line-height:17px !important;
		display:block !important;
		padding-bottom:15px !important;
	}	
td[class="specbundle2"] 
	{
		width:80% !important;
		float:left !important;
		font-size:13px !important;
		line-height:17px !important;
		display:block !important;
		padding-bottom:10px !important;
		padding-left:10% !important;
		padding-right:10% !important;
	}
		
td[class="spechide"] 
	{
		display:none !important;
	}
	    img[class="banner"] 
	{
	          width: 100% !important;
	          height: auto !important;
	}
		td[class="left_pad"] 
	{
			padding-left:15px !important;
			padding-right:15px !important;
	}
		 
}
	
@media only screen and (max-width:540px) 

{
		
table[class="MainContainer"], td[class="cell"] 
	{
		width: 100% !important;
		height:auto !important; 
	}
td[class="specbundle"] 
	{
		width: 100% !important;
		float:left !important;
		font-size:13px !important;
		line-height:17px !important;
		display:block !important;
		padding-bottom:15px !important;
	}	
td[class="specbundle2"] 
	{
		width:80% !important;
		float:left !important;
		font-size:13px !important;
		line-height:17px !important;
		display:block !important;
		padding-bottom:10px !important;
		padding-left:10% !important;
		padding-right:10% !important;
	}
		
td[class="spechide"] 
	{
		display:none !important;
	}
	    img[class="banner"] 
	{
	          width: 100% !important;
	          height: auto !important;
	}
		td[class="left_pad"] 
	{
			padding-left:15px !important;
			padding-right:15px !important;
	}
		
}

.contentEditable h2.big,.contentEditable h1.big{
  font-size: 26px !important;
}

 .contentEditable h2.bigger,.contentEditable h1.bigger{
  font-size: 37px !important;
}

td,table{
  vertical-align: top;
}
td.middle{
  vertical-align: middle;
}

a.link1{
  font-size:13px;
  color:#27A1E5;
  line-height: 24px;
  text-decoration:none;
}
a{
  text-decoration: none;
}

.link2{
color:#ffffff;
border-top:10px solid #27A1E5;
border-bottom:10px solid #27A1E5;
border-left:18px solid #27A1E5;
border-right:18px solid #27A1E5;
border-radius:3px;
-moz-border-radius:3px;
-webkit-border-radius:3px;
background:#27A1E5;
}

.link3{
color:#555555;
border:1px solid #cccccc;
padding:10px 18px;
border-radius:3px;
-moz-border-radius:3px;
-webkit-border-radius:3px;
background:#ffffff;
}

.link4{
color:#27A1E5;
line-height: 24px;
}

h2,h1{
line-height: 20px;
}
p{
  font-size: 14px;
  line-height: 21px;
  color:#000;
}

.contentEditable li{
 
}

.appart p{
 
}
.bgItem{
background: #ffffff;
}
.bgBody{
background: #ffffff;
}

img { 
  outline:none; 
  text-decoration:none; 
  -ms-interpolation-mode: bicubic;
  width: auto;

  clear: both; 
  display: block;
  float: none;
}
.brand {
    display: inline-block;
    font-family: "Montserrat", sans-serif;
    font-weight: 700;
    font-size: 3.2vmin;
    line-height: 1;
    color: #3d3d3d;
}
.text-primary {
    color: #c5a47e;
}
</style>


<script type="colorScheme" class="swatch active">
{
    "name":"Default",
    "bgBody":"ffffff",
    "link":"27A1E5",
    "color":"AAAAAA",
    "bgItem":"ffffff",
    "title":"444444"
}
</script>


</head>
<body paddingwidth="0" paddingheight="0" bgcolor="#d1d3d4"  style="padding-top: 0; padding-bottom: 0; padding-top: 0; padding-bottom: 0; background-repeat: repeat; width: 100% !important; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased;" offset="0" toppadding="0" leftpadding="0">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td><table width="600" border="0" cellspacing="0" cellpadding="0" align="center" bgcolor="#ffffff" style="font-family:helvetica, sans-serif;" class="MainContainer">
      <!-- =============== START HEADER =============== -->
  <tbody>
    <tr>
      <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td valign="top" width="20">&nbsp;</td>
      <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td class="movableContentContainer">
      <div class="movableContent" style="border: 0px; padding-top: 0px; position: relative;">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td height="15"></td>
    </tr>
    <tr>
      <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td valign="top" width="60"></td>
      <td width="10" valign="top">&nbsp;</td>
      <td valign="middle" style="vertical-align: middle;">
                          <div class="contentEditableContainer contentTextEditable">
                            <div class="contentEditable" style="text-align: left;font-weight: light; color:#555555;font-size:26;line-height: 39px;font-family: Helvetica Neue;">
                              <h1 class="big"><a target="_blank" href="[CLIENTS.WEBSITE]" style="color:#444444"></a></h1>
                            </div>
                          </div>
                        </td>
    </tr>
  </tbody>
</table>
</td>
      <td valign="top" width="90" class="spechide">&nbsp;</td>
      <td valign="middle" style="vertical-align: middle;" width="150">
                          <div class="">
                            <div  style="text-align: right;">
                            </a>
                                 
                            </div>
                          </div>
                        </td>
    </tr>
  </tbody>
</table></td>
    </tr>
    
    <tr>
       <td ><hr style="height:1px;background:#DDDDDD;border:none;"></td>
     </tr>
  </tbody>
</table>
	  </div>
     
      
  
      <div class="movableContent" style="border: 0px; padding-top: 0px; position: relative;">
   <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td height="40"></td>
    </tr>
    <tr>
      <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td class="specbundle" width="20%" height="30"><b>Name</b></td>
     
      <td class="specbundle">'.$name.'</td>
    </tr>
     <tr>
      <td class="specbundle" width="20%" height="30"><b>Email</b></td>
     
      <td class="specbundle">'.$email.'</td>
    </tr>
     <tr>
      <td class="specbundle" width="20%" height="30"><b>Phone</b></td>
     
      <td class="specbundle">'.$phone.'</td>
    </tr>


     
</table>
</td>
    </tr>
  </tbody>
</table>
      </div>
      
     
      </td>
    </tr>
  </tbody>
</table>
</td>
      <td valign="top" width="20">&nbsp;</td>
    </tr>
  </tbody>
</table>
</td>
    </tr>
  </tbody>
</table>
</td>
    </tr>
  </tbody>
</table>
  </body>
  </html>';
        
// Set content-type header for sending HTML email 
$headers_deep = "MIME-Version: 1.0" . "\r\n"; 
$headers_deep .= "Content-type:text/html;charset=iso-8859-1" . "\r\n"; 
 
// Additional headers 
$headers_deep .= 'From: '.$fromName.'<'.$from.'>' . "\r\n"; 
 
// Send email 
if(mail('r.pavankumar6666@gmail.com', $subject_deepvison, $htmlContent_deepvison, $headers_deep)){ 
    echo '<script>alert("Thanks for Contacting Us. will get back to you ASAP")</script>';
    echo'
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-582667319"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag("js", new Date());

  gtag("config", "AW-582667319");
</script>
    ';
    echo '<script>location.replace("https://www.brigadecitadelhyderabad.com/");</script>'; 
}else{ 
   echo '<script>alert("Email Sending Failed....");</script>'; 
   echo '<script>location.replace("404.html");</script>'; 
}

}
}
?>