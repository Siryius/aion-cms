<?php

class Spend1 
{

    function __construct() 

	{                

		$Realm = addslashes($_POST['realm']);
		$Character = addslashes($_POST['character']);
		$Reward = addslashes($_POST['reward']);
                                    $uniqueid = rand(10, 1000000);
		$Con = mysql_connect(sql_host,sql_user,sql_pass);
		mysql_select_db(Gamedb);
		
		//check availability of reward.
		$res = mysql_query("SELECT itemid,points FROM voterewards1 WHERE id='{$Reward}' AND realm='{$Realm}'");
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
		$Con = mysql_connect(sql_host,sql_user,sql_pass);
		mysql_select_db(Logindb);
		mysql_query("UPDATE account_data SET reward_points = reward_points - {$Rinfo['points']} WHERE name='{$_SESSION['account']}'");
		(int)$_SESSION['points'] -= (int)$Rinfo['points'];
		mysql_close($Con);
		
		//send item.
		$Con = mysql_connect(sql_host,sql_user,sql_pass);
		mysql_select_db(Gamedb);
                                    $res = mysql_query("SELECT description,points FROM voterewards1 WHERE id='{$Reward}'");
                                    $Row = mysql_fetch_array($res);
                mysql_query("INSERT INTO mail VALUES('$uniqueid','$Character','Test  Server','".MAIL_SUBJECT."','".MAIL_BODY."','1','null','{$Row['description']}','null','2010-08-28 02:00:00')");

		mysql_close($Con);
                                    $_SESSION['msg'] = " You have successfully redeemed your price !";
		die("1");

}
}

class Spend2
{

    function __construct() 

	{                

		$Realm = addslashes($_POST['realm']);
		$Character = addslashes($_POST['character']);
		$Reward = addslashes($_POST['reward']);
                                    $uniqueid = rand(10, 1000000);
		$Con = mysql_connect(sql_host,sql_user,sql_pass);
		mysql_select_db(Gamedb);
		
		//check availability of reward.
		$res = mysql_query("SELECT itemid,points FROM voterewards2 WHERE id='{$Reward}' AND realm='{$Realm}'");
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
		$Con = mysql_connect(sql_host,sql_user,sql_pass);
		mysql_select_db(Logindb);
		mysql_query("UPDATE account_data SET reward_points = reward_points - {$Rinfo['points']} WHERE name='{$_SESSION['account']}'");
		(int)$_SESSION['points'] -= (int)$Rinfo['points'];
		mysql_close($Con);
		
		//send item.
		$Con = mysql_connect(sql_host,sql_user,sql_pass);
		mysql_select_db(Gamedb);
                                    $res = mysql_query("SELECT description,points FROM voterewards2 WHERE id='{$Reward}'");
                                    $Row = mysql_fetch_array($res);
                mysql_query("INSERT INTO mail VALUES('$uniqueid','$Character','Test  Server','".MAIL_SUBJECT."','".MAIL_BODY."','1','null','{$Row['description']}','null','2010-08-28 02:00:00')");

		mysql_close($Con);
                                    $_SESSION['msg'] = " You have successfully redeemed your price !";
		die("1");

}
}

class Spend3
{

    function __construct() 

	{                

		$Realm = addslashes($_POST['realm']);
		$Character = addslashes($_POST['character']);
		$Reward = addslashes($_POST['reward']);
                                    $uniqueid = rand(10, 1000000);
		$Con = mysql_connect(sql_host,sql_user,sql_pass);
		mysql_select_db(Gamedb);
		
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
		$Con = mysql_connect(sql_host,sql_user,sql_pass);
		mysql_select_db(Logindb);
		mysql_query("UPDATE account_data SET reward_points = reward_points - {$Rinfo['points']} WHERE name='{$_SESSION['account']}'");
		(int)$_SESSION['points'] -= (int)$Rinfo['points'];
		mysql_close($Con);
		
		//send item.
		$Con = mysql_connect(sql_host,sql_user,sql_pass);
		mysql_select_db(Gamedb);
                                    $res = mysql_query("SELECT description,points FROM voterewards3 WHERE id='{$Reward}'");
                                    $Row = mysql_fetch_array($res);
                mysql_query("INSERT INTO mail VALUES('$uniqueid','$Character','Test  Server','".MAIL_SUBJECT."','".MAIL_BODY."','1','null','{$Row['description']}','null','2010-08-28 02:00:00')");

		mysql_close($Con);
                                    $_SESSION['msg'] = " You have successfully redeemed your price !";
		die("1");

}
}

class Spend4
{

    function __construct() 

	{                

		$Realm = addslashes($_POST['realm']);
		$Character = addslashes($_POST['character']);
		$Reward = addslashes($_POST['reward']);
                                    $uniqueid = rand(10, 1000000);
		$Con = mysql_connect(sql_host,sql_user,sql_pass);
		mysql_select_db(Gamedb);
		
		//check availability of reward.
		$res = mysql_query("SELECT itemid,points FROM voterewards4 WHERE id='{$Reward}' AND realm='{$Realm}'");
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
		$Con = mysql_connect(sql_host,sql_user,sql_pass);
		mysql_select_db(Logindb);
		mysql_query("UPDATE account_data SET reward_points = reward_points - {$Rinfo['points']} WHERE name='{$_SESSION['account']}'");
		(int)$_SESSION['points'] -= (int)$Rinfo['points'];
		mysql_close($Con);
		
		//send item.
		$Con = mysql_connect(sql_host,sql_user,sql_pass);
		mysql_select_db(Gamedb);
                                    $res = mysql_query("SELECT description,points FROM voterewards4 WHERE id='{$Reward}'");
                                    $Row = mysql_fetch_array($res);
                mysql_query("INSERT INTO mail VALUES('$uniqueid','$Character','Test  Server','".MAIL_SUBJECT."','".MAIL_BODY."','1','null','{$Row['description']}','null','2010-08-28 02:00:00')");

		mysql_close($Con);
                                    $_SESSION['msg'] = " You have successfully redeemed your price !";
		die("1");

}
}

class Spend5
{

    function __construct() 

	{                

		$Realm = addslashes($_POST['realm']);
		$Character = addslashes($_POST['character']);
		$Reward = addslashes($_POST['reward']);
                                    $uniqueid = rand(10, 1000000);
		$Con = mysql_connect(sql_host,sql_user,sql_pass);
		mysql_select_db(Gamedb);
		
		//check availability of reward.
		$res = mysql_query("SELECT itemid,points FROM voterewards5 WHERE id='{$Reward}' AND realm='{$Realm}'");
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
		$Con = mysql_connect(sql_host,sql_user,sql_pass);
		mysql_select_db(Logindb);
		mysql_query("UPDATE account_data SET reward_points = reward_points - {$Rinfo['points']} WHERE name='{$_SESSION['account']}'");
		(int)$_SESSION['points'] -= (int)$Rinfo['points'];
		mysql_close($Con);
		
		//send item.
		$Con = mysql_connect(sql_host,sql_user,sql_pass);
		mysql_select_db(Gamedb);
                                    $res = mysql_query("SELECT description,points FROM voterewards5 WHERE id='{$Reward}'");
                                    $Row = mysql_fetch_array($res);
                mysql_query("INSERT INTO mail VALUES('$uniqueid','$Character','Test  Server','".MAIL_SUBJECT."','".MAIL_BODY."','1','null','{$Row['description']}','null','2010-08-28 02:00:00')");

		mysql_close($Con);
                                    $_SESSION['msg'] = " You have successfully redeemed your price !";
		die("1");

}
}

class Spend6 
{

    function __construct() 

	{                

		$Realm = addslashes($_POST['realm']);
		$Character = addslashes($_POST['character']);
		$Reward = addslashes($_POST['reward']);
                                    $uniqueid = rand(10, 1000000);
		$Con = mysql_connect(sql_host,sql_user,sql_pass);
		mysql_select_db(Gamedb);
		
		//check availability of reward.
		$res = mysql_query("SELECT itemid,points FROM voterewards6 WHERE id='{$Reward}' AND realm='{$Realm}'");
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
		$Con = mysql_connect(sql_host,sql_user,sql_pass);
		mysql_select_db(Logindb);
		mysql_query("UPDATE account_data SET reward_points = reward_points - {$Rinfo['points']} WHERE name='{$_SESSION['account']}'");
		(int)$_SESSION['points'] -= (int)$Rinfo['points'];
		mysql_close($Con);
		
		//send item.
		$Con = mysql_connect(sql_host,sql_user,sql_pass);
		mysql_select_db(Gamedb);
                                    $res = mysql_query("SELECT description,points FROM voterewards6 WHERE id='{$Reward}'");
                                    $Row = mysql_fetch_array($res);
                mysql_query("INSERT INTO mail VALUES('$uniqueid','$Character','Test  Server','".MAIL_SUBJECT."','".MAIL_BODY."','1','null','{$Row['description']}','null','2010-08-28 02:00:00')");

		mysql_close($Con);
                                    $_SESSION['msg'] = " You have successfully redeemed your price !";
		die("1");

}
}

class Spend7
{

    function __construct() 

	{                

		$Realm = addslashes($_POST['realm']);
		$Character = addslashes($_POST['character']);
		$Reward = addslashes($_POST['reward']);
                                    $uniqueid = rand(10, 1000000);
		$Con = mysql_connect(sql_host,sql_user,sql_pass);
		mysql_select_db(Gamedb);
		
		//check availability of reward.
		$res = mysql_query("SELECT itemid,points FROM voterewards7 WHERE id='{$Reward}' AND realm='{$Realm}'");
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
		$Con = mysql_connect(sql_host,sql_user,sql_pass);
		mysql_select_db(Logindb);
		mysql_query("UPDATE account_data SET reward_points = reward_points - {$Rinfo['points']} WHERE name='{$_SESSION['account']}'");
		(int)$_SESSION['points'] -= (int)$Rinfo['points'];
		mysql_close($Con);
		
		//send item.
		$Con = mysql_connect(sql_host,sql_user,sql_pass);
		mysql_select_db(Gamedb);
                                    $res = mysql_query("SELECT description,points FROM voterewards7 WHERE id='{$Reward}'");
                                    $Row = mysql_fetch_array($res);
                mysql_query("INSERT INTO mail VALUES('$uniqueid','$Character','Test  Server','".MAIL_SUBJECT."','".MAIL_BODY."','1','null','{$Row['description']}','null','2010-08-28 02:00:00')");

		mysql_close($Con);
                                    $_SESSION['msg'] = " You have successfully redeemed your price !";
		die("1");

}
}

class Spend8
{

    function __construct() 

	{                

		$Realm = addslashes($_POST['realm']);
		$Character = addslashes($_POST['character']);
		$Reward = addslashes($_POST['reward']);
                                    $uniqueid = rand(10, 1000000);
		$Con = mysql_connect(sql_host,sql_user,sql_pass);
		mysql_select_db(Gamedb);
		
		//check availability of reward.
		$res = mysql_query("SELECT itemid,points FROM voterewards8 WHERE id='{$Reward}' AND realm='{$Realm}'");
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
		$Con = mysql_connect(sql_host,sql_user,sql_pass);
		mysql_select_db(Logindb);
		mysql_query("UPDATE account_data SET reward_points = reward_points - {$Rinfo['points']} WHERE name='{$_SESSION['account']}'");
		(int)$_SESSION['points'] -= (int)$Rinfo['points'];
		mysql_close($Con);
		
		//send item.
		$Con = mysql_connect(sql_host,sql_user,sql_pass);
		mysql_select_db(Gamedb);
                                    $res = mysql_query("SELECT description,points FROM voterewards8 WHERE id='{$Reward}'");
                                    $Row = mysql_fetch_array($res);
                mysql_query("INSERT INTO mail VALUES('$uniqueid','$Character','Test  Server','".MAIL_SUBJECT."','".MAIL_BODY."','1','null','{$Row['description']}','null','2010-08-28 02:00:00')");

		mysql_close($Con);
                                    $_SESSION['msg'] = " You have successfully redeemed your price !";
		die("1");

}
}

class Spend9 
{

    function __construct() 

	{                

		$Realm = addslashes($_POST['realm']);
		$Character = addslashes($_POST['character']);
		$Reward = addslashes($_POST['reward']);
                                    $uniqueid = rand(10, 1000000);
		$Con = mysql_connect(sql_host,sql_user,sql_pass);
		mysql_select_db(Gamedb);
		
		//check availability of reward.
		$res = mysql_query("SELECT itemid,points FROM voterewards9 WHERE id='{$Reward}' AND realm='{$Realm}'");
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
		$Con = mysql_connect(sql_host,sql_user,sql_pass);
		mysql_select_db(Logindb);
		mysql_query("UPDATE account_data SET reward_points = reward_points - {$Rinfo['points']} WHERE name='{$_SESSION['account']}'");
		(int)$_SESSION['points'] -= (int)$Rinfo['points'];
		mysql_close($Con);
		
		//send item.
		$Con = mysql_connect(sql_host,sql_user,sql_pass);
		mysql_select_db(Gamedb);
                                    $res = mysql_query("SELECT description,points FROM voterewards9 WHERE id='{$Reward}'");
                                    $Row = mysql_fetch_array($res);
                mysql_query("INSERT INTO mail VALUES('$uniqueid','$Character','Test  Server','".MAIL_SUBJECT."','".MAIL_BODY."','1','null','{$Row['description']}','null','2010-08-28 02:00:00')");

		mysql_close($Con);
                                    $_SESSION['msg'] = " You have successfully redeemed your price !";
		die("1");

}
}
?>