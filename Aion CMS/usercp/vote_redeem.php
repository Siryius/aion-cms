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

<a name="summary_debug_and_logs"></a>
                     <div class="ns-setting-group-info">
		<img alt="information" src="graphics/img/icon_information.gif"><h2>Vote&Redeem</h2>
		<p><br>Here you can vote for our server , collect reward_points and redeem them for cool prizes!<br></p>
                                    <p><br><?php echo $msg; ?><br></p>
	</div>

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

<tr class="ns-field-row ns-setting-row-odd">
				<td class="ns-label-cell">
						<label>Redeem your points:</label><br>
						<span>Spend your reward points by chooding a prize you want
				</td>
				<td class="ns-input-cell">
								
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<script type="text/javascript" src="http://www.aiondatabase.com/js/exsyndication.js"></script>
	<form method="post" action="spendpoints/buy_item.php">

  <table width="180" border="0">
<td>
 <tr> 
        <td width="10"><p align=""><em></em></p></td>
      <td width="40"><p align="center"><em><?php GetCategoryTitleFromDatabase1(); // TITLE?></em></p></td>
      <td width="60"><p align="center"><em></em></p></td>
      <td width="70"><p align="center"><em></em></p></td>
    </tr>
    <tr>
       <td width="10"><p align="left"><em></em></p></td>
      <td width="40"><p align="left"><em>Item name</em></p></td>
      <td width="60"><p align="center"><em>Amount</em></p></td>
      <td width="70"><p align="center"><em>Cost</em></p></td>
    </tr>

 <?php echo GetRewardsFromDatabase1(); ?>


</form>

		   



      
       <tr> 
        <td width="10"><p align=""><em></em></p></td>
      <td width="40"><p align="center"><em></em></p></td>
      <td width="60"><p align="center"><em></em></p></td>
      <td width="70"><p align="center"><em></em></p></td>
    </tr>
          
<tr valign="center">
   <td width="10"><p align=""><em></em></p></td>
								<td width="10">Server:</td>
								<td><select name="realm" id="realm" size="1" style="width:100px;" onchange="getCharacters(); getRewards();"><option value="0">Your browser is outdated.</option></select></td>
<td width="70"><p align="center"><em></em></p></td>
  </p>
    <p>
							</tr>
							<tr valign="center"><td width="10"><p align=""><em></em></p></td>
								<td>Character:</td>
								<td><select name="character" id="character" size="1" style="width:100px;"><option value="0">Your browser is outdated.</option></select></td><td width="70"><p align="center"><em></em></p></td>
  </p>
    <p>
							</tr>
							<tr valign="center"><td width="10"><p align=""><em></em></p></td>
								<td>Reward:</td>
								<td><select name="reward" size="1" id="reward" style="width:100px;" onchange="getInfo();"><option value="0">Your browser is outdated.</option></select></td><td width="70"><p align="center"><em></em></p></td>


 </p>
  
    <tr valign="center">

<td width="10"><p><em></em></p></td>
<td width="40"><p></p></td>
<td width="60"><input id="purchase" type="button" value="Purchase" onclick="onPurchase();" /></td>

<td width="70"><p align="center"><em></em></p></td>
							
</tr>

</td>
						


						</table>




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
				var Rewards = <?php echo GetRewardData1(); ?>;
				
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
							Reward.options[i] = new Option(Rewards[r].name+" x "+(Rewards[r].description/1000000)+"M",r); 
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
					R.open("POST","?action=asdf",true);
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




				</td>
			</tr> 


                                        
		</tbody>

	</table>
	
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