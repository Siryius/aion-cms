<?php

//includes
include("lang/eng.php");
include("class/login.class.php");


//core class

class pass_change

{

//functions

                function Title()  //show the page's title
                {  

                include("lang/eng.php"); echo $local[4];

                }
 
                 function Form() //contain the html code
                {   
                    if($_SESSION["pass_change"] > 0)
                     
                    {
                    echo('<a name="summary_debug_and_logs"></a>
                                <div class="ns-setting-group-info">
		<img alt="information" src="graphics/img/icon_information.gif"><h2>Your password has successfully changed!</h2>
		<p><br>For security reasons you are not allowed to change your password more than once in the same session.To change it again just re-login.<br></p>
	</div>

<table class="ns-setting-table" border="0" cellpadding="0" cellspacing="0" width="100%">
<div id="ns-settings-group-main_settings" class="ns-settings-ctr" style="display: none;">');

                     }
                    
                          ?>
<a name="summary_debug_and_logs"></a>
                     <div class="ns-setting-group-info">
		<img alt="information" src="graphics/img/icon_information.gif"><h2>Change your password</h2>
		<p><br>Change your current password to another one..<br></p>
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
			<tr class="ns-field-row ns-setting-row-odd">
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
		<input class="ns-save-button" name="save" value="Save" type="submit">
	</div>

                    <?php

                     
                 }    

	function Content()
	{
		

if($_SESSION["access_level"] == "")
{
	echo "<script>location.href='index.php'</script>";
	exit;
}


if(count($_POST) > 2)
{
	$msg = "<font color=red>".LG_ERROR_OCCURRED."</font>";

	$objAccountData = new AccountData();	

	$objAccountData->id = $_SESSION["id"];
	$objAccountData->password = cryptPassword($_POST["old_password"]);

	if($objAccountData->isPassword())
	{
	     if($_POST["password"] = $_POST["password2"])	
                {

                $objAccountData->password = cryptPassword($_POST["password"]);
		
		      if($objAccountData->Update())
		         {
		   	   $this->Success();
		         }
	         }
 
                 else
                  {
		$this->Fail;
	          }
        }

        
         else
         {
		$this->Fail;
	 }
}







                  $this->Form();
	}

                     function Success()
                     {

                     $_SESSION["pass_change"]= 1;
                       ?>

                       <?php 
                      }

                      function Fail()
                     {

                     $status = 0;
                       
                      }
 

                     function __construct() //builds the pade by sending its content to the core html 

	{
		include("graphics/core.php");
	}
}
?>