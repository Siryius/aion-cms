<?php

function GetRealmData()
	{
		//Get data to use in the form.
		$Con = mysql_connect(sql_host,sql_user,sql_pass,true);
		mysql_select_db(Cmsdb,$Con);
		
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
		mysql_select_db(Cmsdb,$Con);
		
		$CharInfo = "{";
		$Index = 0;
		$res = mysql_query("SELECT id,sqlhost,sqluser,sqlpass,chardb FROM realms");
		while($Row = mysql_fetch_array($res))
		{
			//$Con2 = mysql_connect($Row['sqlhost'],$Row['sqluser'],$Row['sqlpass'],true);
			//mysql_select_db($Row['chardb'],$Con2);

			mysql_select_db(Gamedb,$Con);
			$res2 = mysql_query("SELECT id,name FROM players WHERE account_id = '{$_SESSION['id1']}'",$Con);
			while($Row2 = mysql_fetch_array($res2))
			{
				$CharInfo .= $Index.":{id:".$Row2['id'].",realm:".$Row['id'].",name:\"".$Row2['name']."\"},";
				$Index++;
			}
			
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
		$Con = mysql_connect(sql_host,sql_user,sql_pass,true);
		mysql_select_db(Cmsdb,$Con);
		
		$RewardInfo = "{";
		$res = mysql_query("SELECT id,realm,name,description,points FROM vote_rewards WHERE realm='1'");
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



?>