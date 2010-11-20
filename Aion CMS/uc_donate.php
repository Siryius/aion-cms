<?php 
 require_once("config.php");
header("Cache-control: no-cache, must-revalidate\r\n");

	if(isset($_GET['char']))
	{
		$con = mysql_connect(sql_host,sql_user,sql_pass);
		mysql_select_db(Cmsdb);
		$Name = mysql_real_escape_string($_GET['char']);
		$Realm = mysql_real_escape_string($_GET['realm']);
		$Realm = (int)$Realm+1;
		$res = mysql_query("SELECT sqlhost,sqluser,sqlpass,chardb FROM realms WHERE id='{$Realm}'");
		$row = mysql_fetch_array($res);
		mysql_close($con);
		$con = mysql_connect($row['sqlhost'],$row['sqluser'],$row['sqlpass']);
		mysql_select_db($row['chardb']);
		$res = mysql_query("SELECT id FROM players WHERE name='{$Name}'");
		if(mysql_num_rows($res) == 1)
		{
			$row = mysql_fetch_array($res);
			echo $row['id'];
		}
		else
		{
			echo "0";
			die;
		}
		mysql_close($con);
	}
	else
	{
		$con = mysql_connect(sql_host,sql_user,sql_pass);
		mysql_select_db(Cmsdb);
		$res = mysql_query("SELECT id,name FROM realms");
		$REALMS = "{";
		while($row = mysql_fetch_array($res))
		{
			$REALMS .= ((int)$row['id']-1).":\"".$row['name']."\",";
		}
		$REALMS .= "\"undefined\":0}";
		$res = mysql_query("SELECT entry,name,realm,description,price FROM donate_rewards");
		$REWARDS = "{";
		while($row = mysql_fetch_array($res))
		{
			$REWARDS .= ((int)$row['entry']-1).":{name:\"".$row['name']."\",realm:".((int)$row['realm']-1).",description:\"".addslashes($row['description'])."\",price:".$row['price']."},";
			$DESCRIPTIONS .= "<div class=\"\" style=\"padding:2px;\">".$row['description']."</div>";
		}
		$REWARDS .= "\"undefined\":0}";
		$REWARDS = str_replace("\r","\\r",$REWARDS);
		$REWARDS = str_replace("\n","\\n",$REWARDS);


                                  ?> 

<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<title><?php ?></title> 
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">

<link href="graphics/js/SprySlidingPanels.css" rel="stylesheet" type="text/css" />
<script src="graphics/js/SprySlidingPanels.js" type="text/javascript"></script>
<script src="graphics/js/SpryEffects.js" type="text/javascript"></script>
<script src="graphics/js/SpryUtils.js" type="text/javascript"></script>
<script src="graphics/js/xpath.js" type="text/javascript"></script>
<script src="graphics/js/SpryData.js" type="text/javascript"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<script type="text/javascript" src="http://www.aiondatabase.com/js/exsyndication.js"></script>
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

		
			<input id="action" name="action" value="save" type="hidden">
			<input name="tab" value="main" type="hidden">
		
			<div id="ns-nav-bar">
				Aion CMS - User Control Panel
			</div>

			<div id="ns-content">
				<table id="ns-main-table" cellpadding="0" cellspacing="0" width="78%">
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
		<img alt="information" src="graphics/img/icon_information.gif"><h2>Donate</h2>
		<p><br>Here you can donate for our server and depending on the amount of donation you can earn cool prizes!<br></p>
                                   
	</div>
<br>
                                        <table class="ns-setting-table" border="0" cellpadding="0" cellspacing="0" width="100%">
				</tbody><tbody class="ns-standard-setting" style="">

			<tr class="ns-field-row ns-setting-row-odd">
				<td class="ns-label-cell">
						<label>Server :</label><br>
						<span>Select the server in which you have the character , which will earn the prize.</span>
				</td>
				<td class="ns-input-cell">
<select id="realm" name="realm" style="width:150px;" onchange="getRewards(this.value);">
        <option>Your browser does not support this page.</option>
      </select></tr>

<tr class="ns-field-row ns-setting-row-even">
			<td class="ns-label-cell">
						<label>Character :</label><br>
						<span>Select the character who will earn the prize. If the icon is red, you have entered a non-existing character name.</span></td>
		<td class="ns-input-cell">

<input type="text" onblur="checkChar(this.value);" name="character" id="character" maxlength="16" style="width:150px;" />
    <img id="status" src="graphics/img/notok.png" style="margin-left:5px; vertical-align:middle;" alt="Status" />      
			</tr>

<tr class="ns-field-row ns-setting-row-odd" >
				<td class="ns-label-cell">
						<label>Reward :</label><br>
						<span>Select the reward , which you will earn because of the donation.</span>
				</td>
				<td class="ns-input-cell">

<select id="reward" name="reward" style="width:150px;" onchange="getPrice(this.value);">
        <option>Your browser does not support this page.</option>
      </select>
			</tr>

<tr class="ns-field-row ns-setting-row-even">
				<td class="ns-label-cell">
						<label>Amount of money needed :</label><br>
						<span>In order to get the reward you have selected you must donate the above amount of money.</span>
				</td>
				<td class="ns-input-cell">

<?php echo CURRENCY_CHAR; ?><span id="price"></span>
			</tr>

<tr class="ns-field-row ns-setting-row-odd">
				<td class="ns-label-cell">
						<label>Preview your reward :</label><br>
						<span>Here you can see the item you will earn.</span>
				</td>
				<td class="ns-input-cell">

  <div id="description" class="">
         <?php echo $DESCRIPTIONS; ?> <a class="<?php echo $class;?>" target='_BLANK' href='http://www.aiondatabase.com/item/<?php echo $item_id; ?>'> <?php echo $Row['name']; ?> </a>
      </div>
      </td>
			</tr>

<tr class="ns-field-row ns-setting-row-even">
				<td class="ns-label-cell">
						<label>Complete the donation :</label><br>
						<span>Press add to cart button and you will be redirected to paypal, in order to finish your donation.</span>
				</td>
				<td class="ns-input-cell">
<form onsubmit="return prepForm();" action="https://<?php echo PAYPAL_URL; ?>/cgi-bin/webscr" method="post" target="paypal">
          <!--
          Don't bother trying to change anything here,
          you won't get your reward.
          -->
          <input type="hidden" name="add" value="1" />
          <input type="hidden" name="cmd" value="_cart" />
          <input type="hidden" name="notify_url" value="<?php echo SITE_URL.SYS_PATH?>?action=donated" />

          <input type="hidden" id="item_name" name="item_name" value="" />
          <input type="hidden" id="amount" name="amount" value="" />
          <input type="hidden" id="item_number" name="item_number" value="" />
          <input type="hidden" name="quantity" value="1" />
          <input type="hidden" name="business" value="<?php echo PAYPAL_EMAIL; ?>" />
          <input type="hidden" name="currency_code" value="<?php echo CURRENCY_CODE; ?>" />
          <input type="image" src="https://www.paypal.com/en_US/i/btn/btn_cart_SM.gif" name="submit" alt="PayPal - The safer, easier way to pay online!" />
      	  <!--
          Donation system by 1337D00D
          -->
      </form>
</td>

			</tr>



</body>
  </table>

<script type="text/javascript">

	Description = new Spry.Widget.SlidingPanels("description",{transition:Spry.circleTransition});

	var Realms = <?php echo $REALMS; ?>;
	var Rewards = <?php echo $REWARDS; ?>;
	
	var Status = document.getElementById("status");
	var Realm = document.getElementById("realm");
	var Reward = document.getElementById("reward");
	var Price = document.getElementById("price");
	var Character = document.getElementById("character");
	var CharId = "0";
	
	function setupRealmlist()
	{
		var val;
		Realm.options.length = 0;
		for(val in Realms)
		{
			Realm.options[val] = new Option(Realms[val],val);
		}
	}
	
	function getRewards(realm)
	{
		var val;
		var i = 0;
		Reward.options.length = 0;
		for(val in Rewards)
		{
			if(Rewards[val].realm == realm)
			{
				Reward.options[i] = new Option(Rewards[val].name,val);
				i++;
			}
		}
		getPrice(Reward.value);
		checkChar(Character.value);
	}
	
	function getPrice(id)
	{
		Price.innerHTML = Rewards[id].price;
		Description.showPanel(parseInt(id));
	}
	
	function checkChar(name)
	{
		CharId = "0";
		Status.src = "graphics/img/loading.gif";
		Spry.Utils.loadURL("GET","uc_donate.php?char="+name+"&realm="+Realm.value,true,function(r)
		{
			var res = r.xhRequest.responseText;
			if(res == "0")
			{
				document.getElementById("status").src = "graphics/img/notok.png";
				CharId = "0";
			}
			else
			{
				CharId = res;
				document.getElementById("status").src = "graphics/img/ok.png";
			}
		}
		);
	}
	
	function prepForm()
	{
		document.getElementById("item_name").value = Rewards[Reward.value].name;
		document.getElementById("amount").value = Rewards[Reward.value].price;
		document.getElementById("item_number").value = (parseInt(Realm.value)+1) +"-"+(parseInt(Reward.value)+1) +"-"+CharId;
		if(CharId == "0")
		{
			return confirm("That character does not exist.\nIf you continue you might not receive your reward.");
		}
		if(isNaN(CharId))
		{
			alert("There is a problem with the donation system.\nIt may not have been properly configured.\nPlease contact the administrator.");
			return false;
		}
		return true;
	}
	setupRealmlist();
	getRewards(0);
	
</script>  

</html>
<?php
		mysql_close($con);

	}


?>




