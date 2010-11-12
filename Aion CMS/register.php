<?php

include("graphics/header.php");
require_once("class/login.php");
require_once("class/captcha.php");


	

if(isset($_POST["user_code"]))
{
    if(PhpCaptcha::Validate($_POST['user_code']))
    {

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
$email = $_POST['email'];
$password = $_POST['pass'];
$sex = $_POST['sex'];
$data = date('d-m-y');
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$nasc = $_POST['nasc'];

$name = stripslashes($name);
$password = stripslashes($pass);
$email = stripslashes($email);
$sex = stripslashes($sex);
$data = stripslashes($data);
$ip = stripslashes($ip);
$cidade = stripslashes($cidade);
$estado = stripslashes($estado);
$nasc = stripslashes($nasc);

$quote = stripslashes($quote);

$name = strip_tags($name);
$email = strip_tags($email);
$password = strip_tags($pass);
$sex = strip_tags($sex);
$data = strip_tags($data);
$ip = strip_tags($ip);
$cidade = strip_tags($cidade);
$estado = strip_tags($estado);
$nasc = strip_tags($nasc);
$ip = $_SERVER['REMOTE_ADDR'];
//$password = mt_rand(11111,99999999);

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

    }else{
        $msg = "<font color=red>You have entered wrong captcha code!</font>";
    }
}
?>

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

      <form name="frm_cadastro" id="frm_cadastro" method="post" action="register.php">
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
				<td class="ns-input-cell">
						<img src="captcha.php" width="200" height="60" alt="" style="border: 1px solid #000000; padding: 2px;" /> 
				</td>
			</tr> 

<tr class="ns-field-row ns-setting-row-odd">
				<td class="ns-label-cell">
						<label>Verify captcha code:</label><br>
						<span>Enter here the letters you see in the picture above
				</td>
				<td class="ns-input-cell">
						<input name="user_code" id="user_code" type="text" class="inputs" style="width:80px;" maxlength="5" /> 
				</td>
			</tr> 


        <tr><td align="center" colspan="2"><br/><input class="text" type="submit" name="Submit" value="Register" /></td></tr>
        </table>  
      </form>


        

