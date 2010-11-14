<?php

//includes

include("graphics/header.php");
//include("class/salt.php");
include("config.php");

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
$msg = "<font color=red>$local[214]</font>";
  } else {

if ($_POST['Submit']){

// Define post fields into simple variables
$login = $_POST['name'];
$password = $_POST['pass'];

if(empty($_POST["name"])) { 
 $msg = "<font color=red>$local[215]</font>";
}

if(empty($_POST["pass"])) { 
$msg = "<font color=red>$local[215]</font>";
}

$conn=@mysql_connect(sql_host,sql_user,sql_pass);
	$db = @mysql_select_db(Logindb,$conn) or die($msg = "error");	
	
	$query = "SELECT * FROM account_data WHERE (name = '$login')";
	$r = @mysql_query($query) or die(xml_lang('errquery'));
	
	if (@mysql_num_rows($r) > 0) {
		$msg = '<font color=red>$local[216]</font>';
	} else {
		$conn=@mysql_connect(sql_host,sql_user,sql_pass);
	$db = @mysql_select_db(Logindb,$conn) or die($msg="error");

	$encode_password= base64_encode(sha1($password,true)); // encoding

	@mysql_query(
		"INSERT INTO account_data (name,password) 
				VALUES ('$login','$encode_password')") 
		or die(xml_lang('errquery'));
   $msg = '<script>
      var seconds = 5;
      setInterval(
        function(){
          document.getElementById("seconds").innerHTML = --seconds;
        }, 1000
      );
    </script><meta http-equiv="REFRESH" content="5;url=index.php"><font color=green>$local[217] (<span id="seconds">5</span>)</font>';
        
	
	}

}
}  
}
?>

<script type="text/javascript" src="http://www.google.com/recaptcha/api/js/recaptcha_ajax.js"></script>        <!-- Wrapping the Recaptcha create method in a javascript function -->       <script type="text/javascript">          function showRecaptcha(element) {            Recaptcha.create("6Lc2s74SAAAAAKWm22vGk_RGryNo-vvsZ2V_92On", element, {              theme: "blackglass",              callback: Recaptcha.focus_response_field});          }       </script> 

<div id="ns-top-bar">
			
		
<ul>
				<li class="">
					<a href="."><?php echo $local[200];?></a>
				</li>
			</ul>			
<ul>
				<li class="ns-on">
					<a href="register.php"><?php echo $local[201];?></a>
				</li>
			</ul>
                        
 

			<br style="clear: both;">
		</div>
		
		<div id="ns-nav-bar">
			<?php echo $local[202];?>
		</div>
		
		<div id="ns-content">


                                      
                                                  
<div class="ns-setting-group-info">
		<img alt="information" src="graphics/img/icon_information.gif"><h2><?php echo $local[203];?></h2>
		<p><br><?php echo $local[204];?><br></p>
                                                  <p><br> <?php echo $msg;?><br></p>
	</div>

       <form method="post" action="register.php">
      

       <table class="ns-setting-table" border="0" cellpadding="0" cellspacing="0" width="100%">
				</tbody><tbody class="ns-standard-setting" style="">


			<tr class="ns-field-row ns-setting-row-odd">
				<td class="ns-label-cell">
						<label><?php echo $local[205];?></label><br>
						<span><?php echo $local[206];?>
				</td>
				<td class="ns-input-cell">
						<input name="name" type="text" id="name"  />
				</td>
			</tr> 


         <tr class="ns-field-row ns-setting-row-even">
				<td class="ns-label-cell">
						<label><?php echo $local[207];?></label><br>
						<span><?php echo $local[208];?>
				</td>
				<td class="ns-input-cell">
						<input type="password" name="pass" id="pass" />
				</td>
			</tr> 

   
         <tr class="ns-field-row ns-setting-row-odd">
				<td class="ns-label-cell">
						<label><?php echo $local[209];?></label><br>
						<span><?php echo $local[210];?>
				</td>
				<td class="ns-input-cell">
						<input name="password" type="password" class="inputs" id="password" style="width:100px;" maxlength="65"/>  
				</td>
			</tr> 


         <tr class="ns-field-row ns-setting-row-even">
				<td class="ns-label-cell">
						<label><?php echo $local[211];?></label><br>
						<span><?php echo $local[212];?>
				</td>
				<td class="ns-input-cell">
						<div id="recaptcha_div"></div>        <input type="button" value="<?php echo $local[218];?>" onclick="showRecaptcha('recaptcha_div');"></input> 
				</td>
			</tr> 



        <tr><td align="center" colspan="2"><br/><input class="text" type="submit" name="Submit" value="<?php echo $local[213];?>" /></td></tr>
        </table>  
      </form>


        

