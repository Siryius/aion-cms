<?php

//includes
include("lang/eng.php");


//core class

class home

{

//functions

                function Title()  //show the page's title
                {  

                include("lang/eng.php"); echo $local[4];

                }
 
                 function Form() //contain the html code
                {   

                    ?>
<a name="summary_debug_and_logs"></a>
<div class="ns-setting-group-info">
		<img alt="information" src="graphics/img/icon_information.gif"><h2>Aion Content Management System (CMS)</h2>
		<p><br>Welcome <?php echo $_SESSION['name'];?> ! Here you can enjoy premium services such as management of your account, collecting and redeeming your vote-points etc..<br></p>
	</div>

	<table class="ns-setting-table" border="0" cellpadding="0" cellspacing="0" width="100%">
					<tbody><tr class="ns-module-summary-row  ns-setting-row-odd">
				<td class="ns-setting-group-cell" align="left">
				    <a class="ns-module-setting-link" href="?action=pass_change" onclick="">
					Change your password
					</a><br>
					Change your current password to another one..
				</td>						
			</tr>
			<tr class="ns-module-summary-row  ns-setting-row-even">
				<td class="ns-setting-group-cell" align="left">
				    <a class="ns-module-setting-link" href="?action=vote" onclick="">
					Vote & Redeem
					</a><br>
					Here you can vote for the server , earn vote points and redeem them for special in-game rewards..
				</td>						
			
                     <?php  
                 }    

	function Content() //calls the form function
	{

                  $this->Form();

	}

                     function __construct() //builds the pade by sending its content to the core html 
	{
		include("graphics/core.php");
	}
}
?>