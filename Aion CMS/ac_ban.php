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

<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<title><?php $this->Title(); ?></title> 
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">

<style type="text/css" media="all">@import url( "graphics/style.css" );</style>

</head><body>

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
			<div id="ns_top_right_links">
				
				<a href="?action=logout">Log out (<?php echo $_SESSION['name'];?>)</a>
			</div>
		
			<ul>
				<li class="ns-on">
                    
					<a href="?action=usercp">
                    <img src="graphics/img/admin_main_settings.gif" border="0">
                    
                    <span>User</span>
                    </a>
				</li>
				
               <?php     if($_SESSION["access_level"] > 2)
{
	echo ('<li class=""><a href="?action=admincp">
                    <img src="graphics/img/admin_modules.gif" border="0">
                    <span>Admin</span>
                    </a>');
	
}
		?>			
				</li>
				<li class="">
					<a href="?action=help">
                    <img src="graphics/img/admin_help.gif" border="0">                
                    <span>Help &amp; Support</span>
                    </a>
				</li>
			</ul>
			<br style="clear: both;">
		</div>

		<form id="nuseo_admin_form" action="" method="post">
			<input id="action" name="action" value="save" type="hidden">
			<input name="tab" value="main" type="hidden">
		
			<div id="ns-nav-bar">
				Aion CMS - User Control Panel
			</div>

			<div id="ns-content">
				<table id="ns-main-table" cellpadding="0" cellspacing="0" width="100%">
					<tbody><tr>
						<td id="ns-left-col">
							<div class="ns-group-outer">
								
	<div class="ns-group-title" id="ns_group_title_Main">
		<a href="?action=usercp" onclick="">
			<img src="graphics/img/admin_setting_group.gif" border="0">User Control Panel
		</a>
	</div>
	
	<div style="height: 100px; overflow: hidden;" class="ns-group-links">
<div class="ns-group-link">
	
	<a href="?action=" onclick="">
		<img src="graphics/img/setting_item_bullet.png" alt="" border="0">Statistics
	</a>
</div>		


<div class="ns-group-link">
	
	<a href="?action=" onclick="">
		<img src="graphics/img/setting_item_bullet.png" alt="" border="0">Inventory editor
	</a>
</div>

<div class="ns-group-link">
	
	<a href="?action=vote_redeem" onclick="">
		<img src="graphics/img/setting_item_bullet.png" alt="" border="0">Vote & Redeem
	</a>
</div>

<div class="ns-group-link">
	
	<a href="?action=" onclick="">
		<img src="graphics/img/setting_item_bullet.png" alt="" border="0">Donate
	</a>
</div>
<div class="ns-group-link">
	
	<a href="?action=pass_change" onclick="">
		<img src="graphics/img/setting_item_bullet.png" alt="" border="0">Change your password
	</a>
</div>


							
					
						<td id="ns-center-col">
							
								<div class="ns-msg-none">
									<img alt="information" src="graphics/img/icon_information.gif">
									<p><br></p>
								</div>
							
								
<div id="ns-settings-group-Main-summary" class="ns-settings-ctr" style="">

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
						<input AUTOCOMPLETE="off" class="ns_text_input" id="old_password" maxlength="255" size="45" value="" name="old_password" type="password">
				</td>
			</tr>
                                                                   
                                                                     </tbody><tbody class="ns-standard-setting" style="">

			<tr class="ns-field-row ns-setting-row-even">
				<td class="ns-label-cell">
						<label>New password:</label><br>
						<span>Write here the new password.</span>
				</td>
				<td class="ns-input-cell">
						<input AUTOCOMPLETE="off" class="ns_text_input" id="password" maxlength="255" size="45" value="" name="password" type="password">
				</td>
			</tr>        


                                        
		</tbody>

	</table
	
	<div style="text-align: right; margin-top: 10px;">
		<input class="ns-save-button" name="Submit" value="Save" type="submit">
	</div>
</body></html>	

                    <?php
	}

                    
 

                     function __construct() //builds the pade by sending its content to the core html 

	{
		$this->Content();
	}
}
?>