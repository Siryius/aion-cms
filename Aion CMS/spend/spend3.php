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
# Spend Vote Points
# ----------------------------
#
# This file contains settings for spending vote points for category 3 of rewards
# 
#  */

class Spend
{

	function __construct()
	{
		$Realm = addslashes($_POST['realm']);
		$Character = addslashes($_POST['character']);
		$Reward = addslashes($_POST['reward']);
		$Con = mysql_connect(Gamedb_host,Gamedb_user,Gamedb_pass);
		mysql_select_db(Gamedb);
		$uniqueid = rand(200001, 300000);
		//check availability of reward.
		$res = mysql_query("SELECT itemid,points FROM voterewards3 WHERE id='{$Reward}' AND realm='{$Realm}'");
		if(!$Rinfo = mysql_fetch_array($res))
			die("Nonexistant reward or realm.");
			
		
		// check points available
		if((int)$Rinfo['points'] > (int)$_SESSION['points'])
			die("Insufficient points.");
			
		//get realm info
		$res = mysql_query("SELECT sqlhost,sqluser,sqlpass,chardb FROM realms WHERE id='{$Realm}'");
		$Realminfo = mysql_fetch_array($res);
		mysql_close($Con);
		
		// deduct points
		$Con = mysql_connect(Logindb_host,Logindb_user,Logindb_pass);
		mysql_select_db(Logindb);
		mysql_query("UPDATE account_data SET reward_points = reward_points - {$Rinfo['points']} WHERE name='{$_SESSION['account']}'");
		(int)$_SESSION['points'] -= (int)$Rinfo['points'];
		mysql_close($Con);
		
	//send item.
		$Con = mysql_connect(Gamedb_host,Gamedb_user,Gamedb_pass);
		mysql_select_db(Gamedb);
                                    $res = mysql_query("SELECT itemid,description FROM voterewards3 WHERE id='{$Reward}'");
                                    $Row = mysql_fetch_array($res);
                mysql_query("INSERT INTO inventory VALUES('$uniqueid','{$Row['itemid']}','{$Row['description']}','null','$Character','0','0','0','0','0','{$Row['itemid']}','0','0','0')");

		mysql_close($Con);
		die("1");
	}
}


?>