<?php

//includes
require_once("lang/eng.php");
require_once("class/login.php");

//core class

class vote_redeem

{ 



//functions

                function Title()  //show the page's title
                {  

                include("lang/eng.php"); echo $local[4];

                }

	function Content()
	{
		
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
		<img alt="information" src="graphics/img/icon_information.gif"><h2>Vote&Redeem</h2>
		<p><br>Here you can vote for our server , collect reward_points and redeem them for cool prizes!<br></p>
                                    <p><br><?php echo $msg; ?><br></p>
	</div>

<form action="" method="post">
            	<input name="pass_change" type="hidden" />
<table class="ns-setting-table" border="0" cellpadding="0" cellspacing="0" width="100%">
				</tbody><tbody class="ns-standard-setting" style="">
			<tr class="ns-field-row ns-setting-row-odd">
				<td class="ns-label-cell">
						<label>Your Reward Points</label><br>
						<span>Reward points you have collected so far by voting</span>
				</td>
				<td class="ns-input-cell"><?php echo  $_SESSION['points'];?> </td>
			</tr>
                                                                   
                                                                     </tbody><tbody class="ns-standard-setting" style="">

			<tr class="ns-field-row ns-setting-row-even">
				<td class="ns-label-cell">
						<label>Vote Links:</label><br>
						<span>Choode a vote page and click to proceed to voting</span>
				</td>
				<td class="ns-input-cell"><?php include("class/vote.php"); ?>
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