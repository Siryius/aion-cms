<?php

function GetRealmData()
	{
		//Get data to use in the form.
		$Con = mysql_connect(sql_host,sql_user,sql_pass,true);
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
		$Con = mysql_connect(sql_host,sql_user,sql_pass,true);
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

	function GetRewardData1()
	{
		//rewards.. etc.
		$Con = mysql_connect(sql_host,sql_user,sql_pass,true);
		mysql_select_db(Gamedb,$Con);
		
		$RewardInfo = "{";
		$res = mysql_query("SELECT id,realm,name,description,points FROM voterewards1 WHERE realm='1'");
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

function GetRewardData2()
	{
		//rewards.. etc.
		$Con = mysql_connect(sql_host,sql_user,sql_pass,true);
		mysql_select_db(Gamedb,$Con);
		
		$RewardInfo = "{";
		$res = mysql_query("SELECT id,realm,name,description,points FROM voterewards2 WHERE realm='1'");
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

function GetRewardData3()
	{
		//rewards.. etc.
		$Con = mysql_connect(sql_host,sql_user,sql_pass,true);
		mysql_select_db(Gamedb,$Con);
		
		$RewardInfo = "{";
		$res = mysql_query("SELECT id,realm,name,description,points FROM voterewards3 WHERE realm='1'");
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

function GetRewardData4()
	{
		//rewards.. etc.
		$Con = mysql_connect(sql_host,sql_user,sql_pass,true);
		mysql_select_db(Gamedb,$Con);
		
		$RewardInfo = "{";
		$res = mysql_query("SELECT id,realm,name,description,points FROM voterewards4 WHERE realm='1'");
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

function GetRewardData5()
	{
		//rewards.. etc.
		$Con = mysql_connect(sql_host,sql_user,sql_pass,true);
		mysql_select_db(Gamedb,$Con);
		
		$RewardInfo = "{";
		$res = mysql_query("SELECT id,realm,name,description,points FROM voterewards5 WHERE realm='1'");
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

function GetRewardData6()
	{
		//rewards.. etc.
		$Con = mysql_connect(sql_host,sql_user,sql_pass,true);
		mysql_select_db(Gamedb,$Con);
		
		$RewardInfo = "{";
		$res = mysql_query("SELECT id,realm,name,description,points FROM voterewards6 WHERE realm='1'");
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

function GetRewardData7()
	{
		//rewards.. etc.
		$Con = mysql_connect(sql_host,sql_user,sql_pass,true);
		mysql_select_db(Gamedb,$Con);
		
		$RewardInfo = "{";
		$res = mysql_query("SELECT id,realm,name,description,points FROM voterewards7 WHERE realm='1'");
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

function GetRewardData8()
	{
		//rewards.. etc.
		$Con = mysql_connect(sql_host,sql_user,sql_pass,true);
		mysql_select_db(Gamedb,$Con);
		
		$RewardInfo = "{";
		$res = mysql_query("SELECT id,realm,name,description,points FROM voterewards8 WHERE realm='1'");
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

function GetRewardData9()
	{
		//rewards.. etc.
		$Con = mysql_connect(sql_host,sql_user,sql_pass,true);
		mysql_select_db(Gamedb,$Con);
		
		$RewardInfo = "{";
		$res = mysql_query("SELECT id,realm,name,description,points FROM voterewards9 WHERE realm='1'");
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

function GetRewardsFromDatabase1()
	{
		$Con = mysql_connect(sql_host,sql_user,sql_pass,true);
		mysql_select_db(Gamedb,$Con);
		$res = mysql_query("SELECT * FROM voterewards1 WHERE realm='1'");
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

function GetRewardsFromDatabase2()
	{
		$Con = mysql_connect(sql_host,sql_user,sql_pass,true);
		mysql_select_db(Gamedb,$Con);
		$res = mysql_query("SELECT * FROM voterewards2 WHERE realm='1'");
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

function GetRewardsFromDatabase3()
	{
		$Con = mysql_connect(sql_host,sql_user,sql_pass,true);
		mysql_select_db(Gamedb,$Con);
		$res = mysql_query("SELECT * FROM voterewards3 WHERE realm='1'");
		while($Row = mysql_fetch_array($res))
		{
		$item_id = $Row['itemid'];
		$icon = "<img src='".$Row['icon']."' alt='".$Row['name']."' style='width: 32px; height: 32px;' align='absmiddle' border='0'>";
		$class = "aion_q".$Row['class'];
		?>
		<tr>
			<td ><?php echo $icon; ?></td>
			<td><a class="<?php echo $class;?>" target='_BLANK' href='http://www.aiondatabase.com/item/<?php echo $item_id; ?>'> <?php echo $Row['name']; ?> </a></td>
			<td align="center"> <?php echo number_format($Row['description']); ?> </td>
			<td align="center"> <?php echo number_format($Row['points']); ?> </td>
		</tr>
		<?php
		
		}
		mysql_close($Con);
	}

function GetRewardsFromDatabase4()
	{
		$Con = mysql_connect(sql_host,sql_user,sql_pass,true);
		mysql_select_db(Gamedb,$Con);
		$res = mysql_query("SELECT * FROM voterewards4 WHERE realm='1'");
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

function GetRewardsFromDatabase5()
	{
		$Con = mysql_connect(sql_host,sql_user,sql_pass,true);
		mysql_select_db(Gamedb,$Con);
		$res = mysql_query("SELECT * FROM voterewards5 WHERE realm='1'");
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

function GetRewardsFromDatabase6()
	{
		$Con = mysql_connect(sql_host,sql_user,sql_pass,true);
		mysql_select_db(Gamedb,$Con);
		$res = mysql_query("SELECT * FROM voterewards6 WHERE realm='1'");
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

function GetRewardsFromDatabase7()
	{
		$Con = mysql_connect(sql_host,sql_user,sql_pass,true);
		mysql_select_db(Gamedb,$Con);
		$res = mysql_query("SELECT * FROM voterewards7 WHERE realm='1'");
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

function GetRewardsFromDatabase8()
	{
		$Con = mysql_connect(sql_host,sql_user,sql_pass,true);
		mysql_select_db(Gamedb,$Con);
		$res = mysql_query("SELECT * FROM voterewards8 WHERE realm='1'");
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

function GetRewardsFromDatabase9()
	{
		$Con = mysql_connect(sql_host,sql_user,sql_pass,true);
		mysql_select_db(Gamedb,$Con);
		$res = mysql_query("SELECT * FROM voterewards9 WHERE realm='1'");
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

function GetCategoryTitleFromDatabase1()
	{
		$Con = mysql_connect(sql_host,sql_user,sql_pass,true);
		mysql_select_db(Gamedb,$Con);
		$res = mysql_query("SELECT * FROM votemodcat WHERE id='1'");
		$Row = mysql_fetch_array($res)
	
		?>
		<h1><?php echo $Row['category']; ?></h1>
		<?php		
	
		mysql_close($Con);
	}

function GetCategoryTitleFromDatabase2()
	{
		$Con = mysql_connect(sql_host,sql_user,sql_pass,true);
		mysql_select_db(Gamedb,$Con);
		$res = mysql_query("SELECT * FROM votemodcat WHERE id='2'");
		$Row = mysql_fetch_array($res)
	
		?>
		<h1><?php echo $Row['category']; ?></h1>
		<?php		
	
		mysql_close($Con);
	}

function GetCategoryTitleFromDatabase3()
	{
		$Con = mysql_connect(sql_host,sql_user,sql_pass,true);
		mysql_select_db(Gamedb,$Con);
		$res = mysql_query("SELECT * FROM votemodcat WHERE id='3'");
		$Row = mysql_fetch_array($res)
	
		?>
		<h1><?php echo $Row['category']; ?></h1>
		<?php		
	
		mysql_close($Con);
	}

function GetCategoryTitleFromDatabase4()
	{
		$Con = mysql_connect(sql_host,sql_user,sql_pass,true);
		mysql_select_db(Gamedb,$Con);
		$res = mysql_query("SELECT * FROM votemodcat WHERE id='4'");
		$Row = mysql_fetch_array($res)
	
		?>
		<h1><?php echo $Row['category']; ?></h1>
		<?php		
	
		mysql_close($Con);
	}

function GetCategoryTitleFromDatabase5()
	{
		$Con = mysql_connect(sql_host,sql_user,sql_pass,true);
		mysql_select_db(Gamedb,$Con);
		$res = mysql_query("SELECT * FROM votemodcat WHERE id='5'");
		$Row = mysql_fetch_array($res)
	
		?>
		<h1><?php echo $Row['category']; ?></h1>
		<?php		
	
		mysql_close($Con);
	}

function GetCategoryTitleFromDatabase6()
	{
		$Con = mysql_connect(sql_host,sql_user,sql_pass,true);
		mysql_select_db(Gamedb,$Con);
		$res = mysql_query("SELECT * FROM votemodcat WHERE id='6'");
		$Row = mysql_fetch_array($res)
	
		?>
		<h1><?php echo $Row['category']; ?></h1>
		<?php		
	
		mysql_close($Con);
	}

function GetCategoryTitleFromDatabase7()
	{
		$Con = mysql_connect(sql_host,sql_user,sql_pass,true);
		mysql_select_db(Gamedb,$Con);
		$res = mysql_query("SELECT * FROM votemodcat WHERE id='7'");
		$Row = mysql_fetch_array($res)
	
		?>
		<h1><?php echo $Row['category']; ?></h1>
		<?php		
	
		mysql_close($Con);
	}

function GetCategoryTitleFromDatabase8()
	{
		$Con = mysql_connect(sql_host,sql_user,sql_pass,true);
		mysql_select_db(Gamedb,$Con);
		$res = mysql_query("SELECT * FROM votemodcat WHERE id='8'");
		$Row = mysql_fetch_array($res)
	
		?>
		<h1><?php echo $Row['category']; ?></h1>
		<?php		
	
		mysql_close($Con);
	}

function GetCategoryTitleFromDatabase9()
	{
		$Con = mysql_connect(sql_host,sql_user,sql_pass,true);
		mysql_select_db(Gamedb,$Con);
		$res = mysql_query("SELECT * FROM votemodcat WHERE id='9'");
		$Row = mysql_fetch_array($res)
	
		?>
		<h1><?php echo $Row['category']; ?></h1>
		<?php		
	
		mysql_close($Con);
	}

?>