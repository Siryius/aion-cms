<?php

//includes
require_once("class/login.php");
require_once("config.php");

class login // core class -needed by index.php

{

   
                 function Content()       //contains the html code
                {   

                     if(file_exists('install/install.php'))
                        {  ?>

<meta HTTP-EQUIV="REFRESH" content="0; url=install/install.php">

                     <?php  

                                          }
                        else 

                                          { 

 if(file_exists('install/install.php'))
	echo('<div style="font-size: 20px; background-color: #FFF; color:#000;"><strong><center><br />Warning: The install folder exists. Please delete install folder, before start Aion CMS on your live server.<br /><br /></center></strong></div>');
		if(isset($_POST["password"]))
{
 
                                
		$objAccountData = new AccountData();	
		$objAccountData->LoadByPost();

		if($objAccountData->FazerLogin())
		{
                                                  
			$_SESSION['id'] = $objAccountData->id;
			$_SESSION['name'] = $objAccountData->name;
			$_SESSION['access_level'] = $objAccountData->access_level;
                                                      $_SESSION['id1'] = $objAccountData->id;
                                                       $_SESSION['points'] = $objAccountData->reward_points;
                                                         $_SESSION['account'] = $objAccountData->name;
                                                      $_SESSION['authenticated']= true;
			$_SESSION['fail'] = 0;

			  $msg = '<table id="ns_login_table" align="center">
					<tr>
						
						<td><font color=green>You have logged in successfully . You will be redirected to Home in 3 seconds!</font></td>
						
					</tr>
					
					
				</table>';
                                                        ?></script><meta http-equiv="REFRESH" content="3;url=index.php"><?php
			

		}else{         require_once('./slang.php');
                                                       $msg = '<table id="ns_login_table" align="center">
					<tr>
						
						<td><font color=red>The username or password provided are wrong!</font></td>
						
					</tr>
					
					
				</table>';

		}



}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<script src="graphics/js/SpryTooltip.js" type="text/javascript"></script>
<link href="graphics/js/SpryTooltip.css" rel="stylesheet" type="text/css">
<head>
<title><?php require_once('./slang.php'); echo $local[100]; ?></title>

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
			
		
			<ul>
				<li class="ns-on">
					<a href="?action=login"><?php require_once('./slang.php'); echo $local[101]; ?></a>
				</li>
			</ul>

                        <ul>
				<li class="">
					<a href="?action=register"><?php require_once('./slang.php'); echo $local[102]; ?></a>
				</li>
			</ul>
 

			<br style="clear: both;">
  </div>
		
		<div id="ns-nav-bar">
			<?php require_once('./slang.php'); echo $local[103]; ?>

<div id="ns_top_right_links">

<a href="index.php?lang=en" target=""><img src="graphics/img/en.jpg"  alt="Click here to change the language to English" /></a>
<a href="index.php?lang=ru" target=""><img src="graphics/img/ru.gif"  alt="Click here to change the language to Russian" /></a>

                                                                      
			</div>
		</div>
		
		<div id="ns-content">



			


			<form id="ns_login_form" action="" method="post"">
				<input name="action" value="login" type="hidden">
<?php echo $msg;?>
		                                    <table id="ns_login_table" align="center">
					<tbody><tr>
						<th><label for="ns_username"><?php require_once('./slang.php'); echo $local[104]; ?> :</label></th>
						<td><input name="name" id="name" value="" size="17" type="text"></td>
						
					</tr>
					<tr>
						<th><label for="ns_password"><?php  echo $local[105]; ?> :</label></th>
						<td><input AUTOCOMPLETE="off" name="password" id="password" value="" size="17" type="password"></td>
					</tr>
					<tr>
						<th>&nbsp;</th>
						<td>
							<input name=".save" value="<?php require_once('./slang.php'); echo $local[106]; ?>" type="submit">	
						</td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<span class="ns-small-text"><?php  echo $local[107]; ?></span><br>
                                                                                                                             
						</td>
					</tr>
					
				</tbody></table>

                                                                                                                  
				
			</form>
		</div>
</div>
<div class="tooltipContent" id="sprytooltip1"><?php  echo $local[108]; ?></div>
<script type="text/javascript">
var sprytooltip1 = new Spry.Widget.Tooltip("sprytooltip1", "#name");
</script>
</body></html> <?php
                                            }        	
                

}
                 
                 
	

                                             function __construct()
	                                           {        
		                                  $this->Content();
	                                           }
                     
}



?>