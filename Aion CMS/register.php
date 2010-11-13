<?php

include("graphics/header.php");
require_once("class/login.php");

//Verify And Registration Code

if ($_POST['Submit']){

  require_once('recaptchalib.php');
  $privatekey = "6Lc2s74SAAAAAJeg0lb6O_xiu5X7CE4JhZoOHb0w";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);


  if (!$resp->is_valid) 
{
$msg = "<font color=red>The reCAPTCHA wasn't entered correctly. Please try again!</font>";
  } else {

$mysql_server = "localhost"; 
$mysql_user = "root"; 
$mysql_password = "aion"; 
$mysql_database = "aengine_ls"; 
$connection = mysql_connect("$mysql_server","$mysql_user","$mysql_password") or die ("Unable to connect to MySQL server.");
$db = mysql_select_db("$mysql_database") or die ("Unable to select requested database.");	
					
$from_user=strip_tags($_POST['ref']);

if ($_POST['Submit']){

// Define post fields into simple variables
$name = $_POST['name'];
$password = $_POST['pass'];
$name = stripslashes($name);
$password = stripslashes($pass);
$ip = stripslashes($ip);
$name = strip_tags($name);
$password = strip_tags($pass);
$ip = strip_tags($ip);
$ip = $_SERVER['REMOTE_ADDR'];

if(empty($_POST["name"])) { 
 $msg = "<font color=red>Please fill all the gaps!</font>";
}

if(empty($_POST["pass"])) { 
$msg = "<font color=red>Please fill all the gaps!</font>";
}


$mysql = mysql_query("SELECT * FROM account_data WHERE name='$name'");
if (mysql_num_rows($mysql) > 0) 
{
$msg = "<font color=red>The username you provided is already taken!</font>";
}else{

$encode_password= base64_encode(sha1($password,true)); 

mysql_query("INSERT INTO account_data(id,name, password, activated, access_level, membership, last_server, last_ip, ip_force, expire, reward_points) VALUE(null,'$name','$encode_password',1,0,0,0,'$ip',null,null,0)");
$msg = "<font color=green>Your registration has been completed!</font>";

}
}
}  
}
?>

<script type="text/javascript" src="http://www.google.com/recaptcha/api/js/recaptcha_ajax.js"></script>        <!-- Wrapping the Recaptcha create method in a javascript function -->       <script type="text/javascript">          function showRecaptcha(element) {            Recaptcha.create("6Lc2s74SAAAAAKWm22vGk_RGryNo-vvsZ2V_92On", element, {              theme: "blackglass",              callback: Recaptcha.focus_response_field});          }       </script> 

<div id="ns-top-bar">
			
		
<ul>
				<li class="">
					<a href=".">Login</a>
				</li>
			</ul>			
<ul>
				<li class="ns-on">
					<a href="register.php">Register</a>
				</li>
			</ul>
                        
 

			<br style="clear: both;">
		</div>
		
		<div id="ns-nav-bar">
			Aion CMS - Register
		</div>
		
		<div id="ns-content">


                                      
                                                  
<div class="ns-setting-group-info">
		<img alt="information" src="graphics/img/icon_information.gif"><h2>Account registration</h2>
		<p><br>Create an account in order to enjoy the services of Aion CMS!<br></p>
                                                  <p><br> <?php echo $msg;?><br></p>
	</div>

       <form method="post" action="register.php">
      

       <table class="ns-setting-table" border="0" cellpadding="0" cellspacing="0" width="100%">
				</tbody><tbody class="ns-standard-setting" style="">


			<tr class="ns-field-row ns-setting-row-odd">
				<td class="ns-label-cell">
						<label>Username:</label><br>
						<span>Write the username you want to use
				</td>
				<td class="ns-input-cell">
						<input name="name" type="text" id="name"  />
				</td>
			</tr> 


         <tr class="ns-field-row ns-setting-row-even">
				<td class="ns-label-cell">
						<label>Password:</label><br>
						<span>Write here the password you will use to login
				</td>
				<td class="ns-input-cell">
						<input type="password" name="pass" id="pass" />
				</td>
			</tr> 

   
         <tr class="ns-field-row ns-setting-row-odd">
				<td class="ns-label-cell">
						<label>Password Verification:</label><br>
						<span>For verification reasons write again your password
				</td>
				<td class="ns-input-cell">
						<input name="password" type="password" class="inputs" id="password" style="width:100px;" maxlength="65"/>  
				</td>
			</tr> 


         <tr class="ns-field-row ns-setting-row-even">
				<td class="ns-label-cell">
						<label>Captcha Code:</label><br>
						<span></td>
				</td>
				<td class="ns-input-cell">
						<div id="recaptcha_div"></div>        <input type="button" value="Show reCAPTCHA" onclick="showRecaptcha('recaptcha_div');"></input> 
				</td>
			</tr> 



        <tr><td align="center" colspan="2"><br/><input class="text" type="submit" name="Submit" value="Register" /></td></tr>
        </table>  
      </form>


        

