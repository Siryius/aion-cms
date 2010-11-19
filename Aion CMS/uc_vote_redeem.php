<?php

//includes

require_once("lang/eng.php");
require_once("class/login.php");
include("class/vote.php");
include("class/redeem.php");

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
				<table id="ns-main-table" cellpadding="0" cellspacing="0" width="95%">
					<tbody><tr>
						<td id="ns-left-col">


							<div class="ns-group-outer">
								
	<div class="ns-group-title" id="ns_group_title_Main">
		<a href="?action=usercp" onclick="">
			<img src="graphics/img/admin_setting_group.gif" border="0">Account
		</a>
	</div>
	


<div class="ns-group-link">
	
	<a href="?action=" onclick="">
		<img src="graphics/img/setting_item_bullet.png" alt="" border="0">Inventory editor
	</a>
</div>



<div class="ns-group-link">
	
	<a href="?action=pass_change" onclick="">
		<img src="graphics/img/setting_item_bullet.png" alt="" border="0">Change your password
	</a>
</div>


<div class="ns-group-title" id="ns_group_title_Main">
		<a href="?action=usercp" onclick="">
			<img src="graphics/img/admin_setting_group.gif" border="0">Server
		</a>
	</div>
	
	
<div class="ns-group-link">
	
	<a href="?action=" onclick="">
		<img src="graphics/img/setting_item_bullet.png" alt="" border="0">Statistics
	</a>
</div>		




<div class="ns-group-link">
	
	<a href="?action=vote_redeem" onclick="">
		<img src="graphics/img/setting_item_bullet.png" alt="" border="0">Vote & Redeem
	</a>
</div>

<div class="ns-group-link">
	
	<a href="?action=donate" onclick="">
		<img src="graphics/img/setting_item_bullet.png" alt="" border="0">Donate
	</a>
</div>


							
					
						<td id="ns-left-col" >
							<br><br>
								<div class="ns-msg-none">
									<img alt="information" src="graphics/img/icon_information.gif">
									<p><br></p>
								</div>
							
								
<div id="ns-settings-group-Main-summary" class="ns-settings-ctr" style="">

<a name="summary_debug_and_logs"></a>
                     <div class="ns-setting-group-info">
		<img alt="information" src="graphics/img/icon_information.gif"><h2>Vote & Redeem</h2>
		<p><br>Here you can vote for our server , collect reward_points and redeem them for cool prizes!<br></p>
                                   
	</div>
<br>
                                        <table class="ns-setting-table" border="0" cellpadding="0" cellspacing="0" width="100%">
				</tbody><tbody class="ns-standard-setting" style="">
			<tr class="ns-field-row ns-setting-row-odd">
				<td class="ns-label-cell">
						<label>Your Reward Points</label><br>
						<span>Reward points you have collected so far by voting</span>
				</td>
				<td class="ns-input-cell">

<table><tr><td width="20"></td><td valign="mid"><b><?php echo  $_SESSION['points'];?><b></td></tr></table>
			</tr>
                                                                   
                                                                     </tbody><tbody class="ns-standard-setting" style="">

			<tr class="ns-field-row ns-setting-row-even">
				<td class="ns-label-cell">
						<label>Vote Links:</label><br>
						<span>Choode a vote page and click to proceed to voting</span>
				</td>
				<td class="ns-input-cell">
<table border="0"">
								<tr>             
					<?php echo GetVoteForm1(); ?>
					<?php echo GetVoteForm2(); ?>
					<?php echo GetVoteForm3(); ?>
					<?php echo GetVoteForm4(); ?>
					<?php echo GetVoteForm5(); ?>
					<?php echo GetVoteForm6(); ?>
					<?php echo GetVoteForm7(); ?>
                                                                                                                                                           
								</tr>
							</table>
				</td>
			</tr>        

<tr class="ns-field-row ns-setting-row-odd"><form method="post" action="?action=vote_redeem">
				<td class="ns-label-cell">
						<label>Select Server</label><br>
						<span>Choose server where you want to obtain the prize</span>
				</td>
				<td class="ns-input-cell">
<table border="0"">
								<tr>             
					<select name="realm" id="realm" size="1" style="width:100px;" onchange="getCharacters(); getRewards();"><option value="0">Your browser is outdated.</option></select>
                                                                                                                                                           
								</tr>
							</table>
				</td>
			</tr>       

<tr class="ns-field-row ns-setting-row-even">
				<td class="ns-label-cell">
						<label>Select Player</label><br>
						<span>Choose player where you want to obtain the prize</span>
				</td>
				<td class="ns-input-cell">
<table border="0"">
								<tr>             
					<select name="character" id="character" size="1" style="width:120px;"><option value="0">Your browser is outdated.</option></select>
                                                                                                                                                           
								</tr>
							</table>
				</td>
			</tr>       

<tr class="ns-field-row ns-setting-row-odd">
				<td class="ns-label-cell">
						<label>Select Reward</label><br>
						<span>Choose player where you want to obtain the prize</span>
				</td>
				<td class="ns-input-cell">
<table border="0"">
								<tr>             
					<select name="reward" size="1" id="reward" style="width:200px;" onchange="getInfo();"><option value="0">Your browser is outdated.</option>
                                                                                                                                                           
								</tr>
							</table>
				</td>
			</tr>       

<tr class="ns-field-row ns-setting-row-even">
				<td class="ns-label-cell">
						<label>Buy reward</label><br>
						<span>Press here to buy the selected reward</span>
				</td>
				<td class="ns-input-cell">
<table border="0"">
								<tr>             
					<input id="purchase" type="submit" value="Purchase" onclick="onPurchase();" /
                                                                                                                                                           
								</tr></form>
							</table>
				</td>
			</tr>             
 

          	


<script type="text/javascript">
				var Realm = document.getElementById("realm");
				var Character = document.getElementById("character");
				var Reward = document.getElementById("reward");
				var Description = document.getElementById("description");
				var Cost = document.getElementById("cost");
				var Points = document.getElementById("points");
				var Purchase = document.getElementById("purchase");
				
				var Realms = <?php echo GetRealmData(); ?>;
				var Characters = <?php echo GetCharData(); ?>;
				var Rewards = <?php echo GetRewardData(); ?>;
				
				var PointCount = <?php echo $_SESSION['points']; ?>;
				
				function getCharacters()
				{
					var i=0;
					Character.options.length = 0;
					for(var r in Characters)
					{
						if(Characters[r].realm == parseInt(Realm.value))
						{
							Character.options[i] = new Option(Characters[r].name,Characters[r].id);
							i++;
						}
					}
				}
				
				function getRewards()
				{
					var i=0;
					Reward.options.length = 0;
					for(var r in Rewards)
					{
						if(Rewards[r].realm == parseInt(Realm.value))
						{
							Reward.options[i] = new Option(Rewards[r].description+" - //"+(Rewards[r].name)+"// ("+(Rewards[r].cost)+" VP)",r); 
							i++;
						}
					}
					getInfo();
				}
				
				function getInfo()
				{

					Description.innerHTML = Rewards[Reward.value].description
                                                                                           

					Cost.innerHTML = Rewards[Reward.value].cost;
				}
				
                                                           

				function onPurchase()
				{
					if(Character.options.length == 0)
					{
						alert("You don't have a character on that realm!");
						return false;
					}
					if(Rewards[Reward.value].cost > PointCount)
					{
						alert("You don't have enough points!");
						return false;
					}
					if(!confirm("Are you sure you wish to spend\r\n"+Rewards[Reward.value].cost+" reward points?"))
						return false;
					Purchase.disabled = true;
					
					var R;
					var Sub = Rewards[Reward.value].cost;
					if(window.XMLHttpRequest)
					{
						R = new XMLHttpRequest();
					}
					else if(window.ActiveX)
					{
						R = new ActiveXObject("Microsoft.XMLHTTP");
					}
					R.onreadystatechange = function()
					{
						if(R.readyState == 4)
						{
							Purchase.disabled = false;
							if(R.responseText != "1")
							{
								alert("Transaction Completed:\r\n"+Rewards[Reward.value].cost+" Points were deducted from your account!");
								
							}
							else
							{
								PointCount -= Sub;
								Points.innerHTML = PointCount;
								alert("Transaction Completed:\r\n"+Rewards[Reward.value].cost+" Points were deducted from your account!");
								location.reload(true)
							}
						}
					}
					R.open("POST","?action=spend",true);
					var params = "realm="+Realm.value+"&reward="+Reward.value+"&character="+Character.value;
					R.setRequestHeader("Content-type","application/x-www-form-urlencoded");
					R.setRequestHeader("Content-length",params.length);
					R.setRequestHeader("Connection","close");
					R.send(params);
				} 

		 function Initialize()
				{
					// Setup realm list, char list, etc.
					var i = 0;
					for(var r in Realms)
					{
						Realm.options[i] = new Option(Realms[r].name,r);
						i++;
					}
					
					i=0;
					for(var r in Characters)
					{
						if(Characters[r].realm == parseInt(Realm.value))
						{
							Character.options[i] = new Option(Characters[r].name,Characters[r].id);
							i++;
						}
					}
					
					i=0;
					for(var r in Rewards)
					{
						if(Rewards[r].realm == parseInt(Realm.value))
						{
							Reward.options[i] = new Option(Rewards[r].name,r);
							i++;
						}
					}
					getCharacters();
					getRewards();
					getInfo();
				}
				Initialize();

				
			</script>
						


						</table>


				</td>
			</tr> 


                                        
		</tbody>

	</table>
	
	
</body></html>	
                    <?php

                    }

                     function __construct() //builds the pade by sending its content to the core html 

	{                
                                
		$this->Content();
	}
}
?>