<?php /*
#
# This file is part of Aion CMS Project.
#
# Creator: ntemos
#
# Editors:
#
# Aion CMS is free software: you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation, either version 3 of the License, or
# (at your option) any later version.
#
# Aion CMS is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
#
# ----------------------------
# Redeem points
# ----------------------------
#
# This file contains settings for redeeming vote points (category 3 of rewards)
# 
#  */



class Rewards
{
	function Title()
	{
	?>
        	Redeem Page
        <?php
	}

	function GetRealmData()
	{
		//Get data to use in the form.
		$Con = mysql_connect(Gamedb_host,Gamedb_user,Gamedb_pass,true);
		mysql_select_db(Gamedb,$Con);
		
		$RealmInfo = "{";
		//get each realm
		$res = mysql_query("SELECT id,name,sqlhost,sqluser,sqlpass,chardb FROM realms",$Con);
		echo mysql_error();
		while($Row = mysql_fetch_array($res))
		{
			$RealmInfo .= $Row['id'].":{name:\"".$Row['name']."\"},";
		}
		if(strlen($RealmInfo) > 1)
			$RealmInfo = substr($RealmInfo,0,strlen($RealmInfo)-1)."}";
		else
			$RealmInfo .='}';
		mysql_close($Con);
		return $RealmInfo;
	}
	
	function GetCharData()
	{
		//get data that will be used to select the character.
		$Con = mysql_connect(Gamedb_host,Gamedb_user,Gamedb_pass,true);
		mysql_select_db(Gamedb,$Con);
		
		$CharInfo = "{";
		$Index = 0;
		$res = mysql_query("SELECT id,sqlhost,sqluser,sqlpass,chardb FROM realms");
		while($Row = mysql_fetch_array($res))
		{
			$Con2 = mysql_connect($Row['sqlhost'],$Row['sqluser'],$Row['sqlpass'],true);
			mysql_select_db($Row['chardb'],$Con2);
			$res2 = mysql_query("SELECT id,name FROM players WHERE account_id = '{$_SESSION['id1']}'",$Con);
			while($Row2 = mysql_fetch_array($res2))
			{
				$CharInfo .= $Index.":{id:".$Row2['id'].",realm:".$Row['id'].",name:\"".$Row2['name']."\"},";
				$Index++;
			}
			mysql_close($Con2);
		}
		if(strlen($CharInfo) > 1)
			$CharInfo = substr($CharInfo,0,strlen($CharInfo)-1)."}";
		else
			$CharInfo .='}';
		mysql_close($Con);
		return $CharInfo;
	}

function GetRewardData()
	{
		//rewards.. etc.
		$Con = mysql_connect(Gamedb_host,Gamedb_user,Gamedb_pass,true);
		mysql_select_db(Gamedb,$Con);
		
		$RewardInfo = "{";
		$res = mysql_query("SELECT id,realm,name,description,points FROM voterewards3");
		while($Row = mysql_fetch_array($res))
                                 
		{
			$RewardInfo .= $Row['id'].":{realm:".$Row['realm'].",name:\"".$Row['name']."\",description:\"".$Row['description']."\",cost:".$Row['points']."},";
                                                     
		}
                                    
                                      
                                 
		if(strlen($RewardInfo) > 1)
			$RewardInfo = substr($RewardInfo,0,strlen($RewardInfo)-1)."}";
                                                      
		else
			$RewardInfo .='}';
		$RewardInfo = str_replace("\r\n","<br />",$RewardInfo);
                                    
		mysql_close($Con);
		return $RewardInfo;
	}
	
// GET REWARDS FROM DATABASE
function GetRewardsFromDatabase()
	{
		$Con = mysql_connect(Gamedb_host,Gamedb_user,Gamedb_pass,true);
		mysql_select_db(Gamedb,$Con);
		$res = mysql_query("SELECT * FROM voterewards3 WHERE realm='1'");
		while($Row = mysql_fetch_array($res))
		{
		$item_id = $Row['itemid'];
		$icon = "<img src='".$Row['icon']."' alt='".$Row['name']."' style='width: 32px; height: 32px;' align='absmiddle' border='0'>";
		$class = "aion_q".$Row['class'];
		?>
		<tr>
			<td width="40"><?php echo $icon; ?></td>
			<td><a class="<?php echo $class;?>" target='_BLANK' href='http://www.aiondatabase.com/item/<?php echo $item_id; ?>'> <?php echo $Row['name']; ?> </a></td>
			<td align="center"> <?php echo number_format($Row['description']); ?> </td>
			<td align="center"> <?php echo number_format($Row['points']); ?> </td>
		</tr>
		<?php
		
		}
		mysql_close($Con);
	}
function GetCategoryTitleFromDatabase()
	{
		$Con = mysql_connect(Gamedb_host,Gamedb_user,Gamedb_pass,true);
		mysql_select_db(Gamedb,$Con);
		$res = mysql_query("SELECT * FROM votemodcat WHERE id='3'");
		$Row = mysql_fetch_array($res)
	
		?>
		<h1><?php echo $Row['category']; ?></h1>
		<?php		
	
		mysql_close($Con);
	}
	
function GetCategoryFromDatabase()
	{
		$Con = mysql_connect(Gamedb_host,Gamedb_user,Gamedb_pass,true);
		mysql_select_db(Gamedb,$Con);
		$res = mysql_query("SELECT * FROM votemodcat");
		while($Row = mysql_fetch_array($res))
		{
		
		If ($Row['id'] == 3)
		{$menu_active = "menu_active";}
		else
		{$menu_active = "";}
		
		?>		
			<a class="<?php echo $menu_active;?>" href="?act=rewards<?php echo $Row['id'];?>"><?php echo $Row['category'];?></a> | 
		<?php
		
		}
		mysql_close($Con);
	}

	function Form()
	{
		?>
		
   <center> <table border="0" cellpadding="0" cellspacing="0" width="400" height="35">
	<tbody><tr>
			<td colspan="3" style="background: url(&quot;images/newpanelbgtop.png&quot;) repeat scroll 0% 0% transparent; font-size: 11px; color: rgb(255, 255, 255,255); font-weight: bold; font-family: Arial,Helvetica,sans-serif;" align="center">
				<?php $this->GetCategoryTitleFromDatabase(); // TITLE?>
				| <?php $this->GetCategoryFromDatabase(); // CATEGORY LIST?>
			</td>
    </tr></tbody>
	</table>
	<table><tbody>
    <tr>
	<hr>
	<tr>
	<td align="center">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<script type="text/javascript" src="http://www.aiondatabase.com/js/exsyndication.js"></script>
	<form method="post" action="spendpoints/buy_item.php">
<div>
  <table width="418" border="0">
    <tr>
      <td width="40">&nbsp;</td>
      <td width="200"><p align="left"><em>Item name</em></p></td>
      <td width="100"><div align="center"><em>Amount</em></div></td>
      <td width="60"><div align="center"><em>Cost</em></div></td>
    </tr>

 <?php $this->GetRewardsFromDatabase(); ?>

</table>
</div>
</form>
</td>
</tr>
</tr>
</tbody>
</table>
		   
</p><p><br>

        <table align="center" border="0" cellpadding="0" cellspacing="0" width="559">
         <tbody><tr>
          <td colspan="3" style="background: url(&quot;images/newpanelbgtop.png&quot;) repeat scroll 0% 0% transparent; letter-spacing: 3px; font-size: 11px; color: rgb(255, 255, 255,255); font-weight: bold; font-family: Arial,Helvetica,sans-serif;" align="center" height="35" valign="top" width="559"><h1>Spend your Vote Points!<h1></td>
          
   
<tr valign="top">
                                                                                                                               
								<td>Points:</td>
								<td><span id="points"><?php echo $_SESSION['points']; ?></span></td>
  </p>
    <p>
							</tr>
							<tr valign="top">
								<td width="75px">Server:</td>
								<td><select name="realm" id="realm" size="1" style="width:150px;" onchange="getCharacters(); getRewards();"><option value="0">Your browser is outdated.</option></select></td>
  </p>
    <p>
							</tr>
							<tr valign="center">
								<td>Character:</td>
								<td><select name="character" id="character" size="1" style="width:150px;"><option value="0">Your browser is outdated.</option></select></td>
  </p>
    <p>
							</tr>
							<tr valign="center">
								<td>Reward:</td>
								<td><select name="reward" size="1" id="reward" style="width:150px;" onchange="getInfo();"><option value="0">Your browser is outdated.</option></select></td>


 </p>
  
    <tr valign="center">
								<td colspan="2" align="center"><input id="purchase" type="button" value="Purchase" onclick="onPurchase();" /></td>
							
</tr>
    
	
							
							

						</table>







							
         

</tr>
						</table>



							
						</table>

        



			<script type="text/javascript">
				var Realm = document.getElementById("realm");
				var Character = document.getElementById("character");
				var Reward = document.getElementById("reward");
				var Description = document.getElementById("description");
				var Cost = document.getElementById("cost");
				var Points = document.getElementById("points");
				var Purchase = document.getElementById("purchase");
				
				var Realms = <?php echo $this->GetRealmData(); ?>;
				var Characters = <?php echo $this->GetCharData(); ?>;
				var Rewards = <?php echo $this->GetRewardData(); ?>;
				
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
							Reward.options[i] = new Option(Rewards[r].name+" x "+(Rewards[r].description),r); 
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
								alert("Transaction failed:\r\n"+R.responseText);
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
					R.open("POST","?act=spend3",true);
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
							Character.options[i] = new Option(Characters[r].name,Characters[r].guid);
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



		<?php

	}

	function Content()
	{
		$this->Form();
	}

	function __construct()
	{
		include("html/main3.php");
	}

}

?>