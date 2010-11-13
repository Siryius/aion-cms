<?php

//includes
require_once("lang/eng.php");
require_once("class/login.php");

//core class

class pass_change

{ 



//functions

                function Title()  //show the page's title
                {  

                include("lang/eng.php"); echo $local[4];

                }

	function Content()
	{
		

if($_SESSION["access_level"] == "")
{
	echo "<script>location.href='index.php'</script>";
	exit;
}


if ($_POST['Submit']){



if(count($_POST) > 2)
{
	$msg = "<font color=red>An error occured</font>";
    
}
	$objAccountData = new AccountData();	

	$objAccountData->id = $_SESSION["id"];
	$objAccountData->password = cryptPassword($_POST["old_password"]);

	if($objAccountData->isPassword())
	{               
                                 
		$objAccountData->password = cryptPassword($_POST["password"]);
		
		if($objAccountData->Update())
		{
			$msg = "<font color=green>Your password has successfully changed!</font>";
                                                 
		} 
	} else
                       {
		$msg = "<font color=red>Please enter correctly your current password.</font>";
  
	     }
}


                 ?>

<a name="summary_debug_and_logs"></a>
                     <div class="ns-setting-group-info">
		<img alt="information" src="graphics/img/icon_information.gif"><h2>Change your password</h2>
		<p><br>Change your current password to another one..<br></p>
                                    <p><br><?php echo $msg; ?><br></p>
	</div>

<form action="" method="post">
            	<input name="pass_change" type="hidden" />
<table class="ns-setting-table" border="0" cellpadding="0" cellspacing="0" width="100%">
				</tbody><tbody class="ns-standard-setting" style="">
			<tr class="ns-field-row ns-setting-row-odd">
				<td class="ns-label-cell">
						<label>Current password:</label><br>
						<span>Put here the password you use to enter CMS.</span>
				</td>
				<td class="ns-input-cell">
						<input class="ns_text_input" id="old_password" maxlength="255" size="45" value="" name="old_password" type="password">
				</td>
			</tr>
                                                                   
                                                                     </tbody><tbody class="ns-standard-setting" style="">

			<tr class="ns-field-row ns-setting-row-even">
				<td class="ns-label-cell">
						<label>New password:</label><br>
						<span>Write here the new password.</span>
				</td>
				<td class="ns-input-cell">
						<input class="ns_text_input" id="password" maxlength="255" size="45" value="" name="password" type="password">
				</td>
			</tr>        


                                        
		</tbody>

	</table
	
	<div style="text-align: right; margin-top: 10px;">
		<input class="ns-save-button" name="Submit" value="Save" type="submit">
	</div>

                    <?php
	}

                    
 

                     function __construct() //builds the pade by sending its content to the core html 

	{
		include("graphics/core.php");
	}
}
?>