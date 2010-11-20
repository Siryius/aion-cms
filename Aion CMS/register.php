<?php

//includes
require_once("class/login.php");
include("config.php");



class register // core class -needed by index.php

{

                 function Content()       //contains the html code
                                   {   


//Verify And Registration Code

if ($_POST['Submit']){

  require_once('class/recaptchalib.php');
  $privatekey = "6Ld04b4SAAAAAG3UU176OffDas8QNEIfiul2ZkSP ";
  $resp = recaptcha_check_answer ($privatekey,
  $_SERVER["REMOTE_ADDR"],
  $_POST["recaptcha_challenge_field"],
  $_POST["recaptcha_response_field"]);

if ($resp->is_valid) 
{
 $msg = '<table id="ns_login_table" align="center">
					<tr>
						
						<td><font color=red>You have entered wrong Captcha Code!</font></td>
						
					</tr>

				</table>'; 


  } else {
// Define post fields into simple variables
$login = $_POST['name'];
$password = $_POST['pass'];

$conn=@mysql_connect(sql_host,sql_user,sql_pass);
	$db = @mysql_select_db(Logindb,$conn) or die($msg = "error");	
	
	$query = "SELECT * FROM account_data WHERE (name = '$login')";
	$r = @mysql_query($query) or die(xml_lang('errquery'));
	
	if (@mysql_num_rows($r) > 0)
                 {
		$msg = '<font color=red>Username already taken</font>';
	} 

                  else 
                 {
		$conn=@mysql_connect(sql_host,sql_user,sql_pass);
	$db = @mysql_select_db(Logindb,$conn) or die($msg="error");

	$encode_password= base64_encode(sha1($password,true)); // encoding

	@mysql_query(
		"INSERT INTO account_data (name,password) 
				VALUES ('$login','$encode_password')") 
		or die(xml_lang('errquery'));

     $msg = '<table id="ns_login_table" align="center">
					<tr>
						
						<td><font color=green>Your registration has beed successfully completed  , you will be redirected in login page in 5 seconds!</font></td>
						
					</tr>
					
					
				</table>';
       
?></script><meta http-equiv="REFRESH" content="5;url=index.php"><?php     

                           }
 

}

}


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.:: Aion CMS : Login ::.</title>

 
<style type="text/css" media="all">@import url( "graphics/style.css" );</style>

</head><body>

<script src="graphics/js/SpryValidationTextField.js" type="text/javascript"></script>
<script src="graphics/js/SpryValidationPassword.js" type="text/javascript"></script>
<script src="graphics/js/SpryValidationConfirm.js" type="text/javascript"></script>
<link href="graphics/js/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="graphics/js/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<link href="graphics/js/SpryValidationConfirm.css" rel="stylesheet" type="text/css" />
</head>

<style>
#demo-notice	{ background: #4558A4 url(graphics/img/bg-gradient3.gif) repeat-x scroll left top; color: #FFF; 
					margin: 10px; padding: 10px; border: 1px solid red; text-align: left; font-size: 14px; 
					border: 1px solid #35447F;
					-moz-border-radius-bottomleft:10px; -moz-border-radius-bottomright:10px; 
						-moz-border-radius-topleft:0px; -moz-border-radius-topright:0px;
				}

#demo-links		{ float: right; }
#demo-links a,
#demo-links a:visited	{ color: #fff; font-weight: bold; }
#demo-links a:hover		{ color: #0f0; }

a.cms-link,
a.cms-link:visited	{ color: #fff; font-weight: bold; }
a.cms-link:hover		{ color: #0f0; }

a.preorder,
a.preorder:visited	{ color: #0F0; font-weight: bold; }
</style>
<div id="demo-notice">
Welcome to <a class="preorder" href="">Aion CMS</a>. Feel free to browse and explore all the features and modules currently available .
<br>
<br>The project is still under development .
<br>
<br>For further information or/and suggestions about Aion CMS visit <a class="cms-link" href="http://www.aion-engine.com/t540/">project's url</a>
<br>
<br>Project creator and leader <a class="preorder">ntemos</a>
</div>

<div id="ns-global-wrapper">

<div id="ns-top-bar">
			
		
			<ul>
				<li class="">
					<a href="?action=login">Login</a>
				</li>
			</ul>

                        <ul>
				<li class="ns-on">
					<a href="?action=register">Register</a>
				</li>
			</ul>
 

			<br style="clear: both;">
		</div>
		
		<div id="ns-nav-bar">
			Aion CMS - Register 
		</div>
		
		<div id="ns-content">

<table id="ns-main-table" cellpadding="0" cellspacing="0" width="35%" align="center">
					<tbody><tr>
						<td id="ns-left-col"><br><br><br><br>
				
<div id="ns-settings-group-Main-summary" class="ns-settings-ctr" style="">

<table class="ns-setting-table" border="0" cellpadding="0" cellspacing="0" width="100%">
				</tbody><tbody class="ns-standard-setting" style="">
<form id="form1" name="form1" method="post" action="?action=register">

    
  
        <tr class="ns-field-row ns-setting-row-odd">
         <td class="ns-label-cell">
						<label>Username:</label>
						<span><br>It must be between 5 and 18 letters. 
				</td>
     
<td><span id="sprytextfield1">   
            <input type="text" name="name" id="name" />
            <span class="textfieldRequiredMsg"><br />
            A value is required.</span></td>
          </tr>

      
           <tr class="ns-field-row ns-setting-row-even">
         <td class="ns-label-cell" align="center">
        <label>Password:</label>
          <span><br>It must be between 5 and 18 letters. </td>
          <td><span id="sprypassword1">
          <input type="password" name="pass" id="pass" />
          <span class="passwordRequiredMsg"><br />
A value is required.</span><span class="passwordMinCharsMsg">Minimum number of characters not met.</span><span class="passwordMaxCharsMsg">Exceeded maximum number of characters.</span></span></td>
        </tr>


        <tr class="ns-field-row ns-setting-row-odd">
          <td class="ns-label-cell">
	<label>Password Verification:</label>
	<span><br>Enter your password again.</td>
          <td><span id="spryconfirm1">
            <input type="password" name="password" id="password" />
            <span class="confirmRequiredMsg"><br />
            A value is required.</span><span class="confirmInvalidMsg">The values don't match.</span></span></td>
        </tr>


          <tr class="ns-field-row ns-setting-row-even">
           <td class="ns-label-cell">
	<label>Captcha code:</label>
	<span><br>Write here the letter you see in picture.</td>
          <td><script type="text/javascript"
     src="http://www.google.com/recaptcha/api/challenge?k=6Ld04b4SAAAAAFYHJsgtP3sQmFmZgayZQ7g1L0bU">
  </script>
  <noscript>
     <iframe src="http://www.google.com/recaptcha/api/noscript?k=6Ld04b4SAAAAAFYHJsgtP3sQmFmZgayZQ7g1L0bU"
         height="300" width="500" frameborder="0"></iframe><br>
     <textarea name="recaptcha_challenge_field" rows="3" cols="40">
     </textarea>
     <input type="hidden" name="recaptcha_response_field"
         value="manual_challenge">
  </noscript></input> 
        </tr>


    <tr><td></td>
      <th scope="row" align="left"><input class="text" type="submit" name="Submit" value="Register" /></th>
    </tr>


  </table>


</form>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["blur", "change"], minChars:5, maxChars:18});
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1", {validateOn:["blur", "change"], minChars:5, maxChars:18});
var spryconfirm1 = new Spry.Widget.ValidationConfirm("spryconfirm1", "pass", {validateOn:["blur", "change"]});
</script>
</body>

<?php echo $msg;?>
</html><?php
 
}
                  
   

            function __construct()
	                                           {
		                                  $this->Content();
	                                           }
                     
}
 
?>
