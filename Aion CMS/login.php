<?php

//includes
require_once("class/login.php");
include("config.php");


class login // core class -needed by index.php



{

                function Title()   //show the page's title
                {  

             $local[100]; 

                }

              
 
                 function Form()       //contains the html code
                {   

                     if(file_exists('install/install.php'))
                        {  ?>

<meta HTTP-EQUIV="REFRESH" content="0; url=install/install.php">

                     <?php  

                                          }
                        else 

                                          { ?>


<div id="ns-top-bar">
			
		
			<ul>
				<li class="ns-on">
					<a href="#">Login</a>
				</li>
			</ul>

                        <ul>
				<li class="">
					<a href="register.php">Register</a>
				</li>
			</ul>
 

			<br style="clear: both;">
		</div>
		
		<div id="ns-nav-bar">
			Aion CMS - Login
		</div>
		
		<div id="ns-content">
		
			<?php if($_SESSION['fail'] > 0)
                                                              
                                                                    {    echo('<div class="ns-msg-error">
				<img alt="information" src="graphics/img/icon_information.gif">
				<p>Invalid username or password.<br></p>
			                 </div>');
		                             }
                                                                      ?>
			<form id="ns_login_form" action="" method="post"">
				<input name="action" value="login" type="hidden">
		                                    <table id="ns_login_table" align="center">
					<tbody><tr>
						<th><label for="ns_username"><?php include("lang/eng.php"); echo $local[101]; ?> :</label></th>
						<td><input name="name" id="name" value="" size="17" type="text"></td>
						
					</tr>
					<tr>
						<th><label for="ns_password"><?php include("lang/eng.php"); echo $local[102]; ?> :</label></th>
						<td><input name="password" id="password" value="" size="17" type="password"></td>
					</tr>
					<tr>
						<th>&nbsp;</th>
						<td>
							<input name=".save" value="Sign In" type="submit">	
						</td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<span class="ns-small-text">Please enter your in-game account's credentials.</span>
						</td>
					</tr>
					
				</tbody></table>
				
			</form>
		</div>
                        </div>
</body></html> <?php
                                            }
                     }
  
                     function Fail()
	{                
		$this->Form;
                
?>
        
        <?php
	}

	function Success()
	{
		?>
        	Successfully logged in. Please wait while we redirect you.
            <script type="text/javascript">window.setTimeout("window.location=''");</script>
        <?php
	}

	function Content()
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

			$this->Success();
			return;

		}else{
                                                       $_SESSION['fail'] = 1;
			 $this->Fail();
                                                    

		}



}
                  $this->Form();
                 
	}

                     function __construct()
	{
include("config.php");
		include("graphics/login.php");
	}
}
?>