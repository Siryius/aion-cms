<?php

class Spend
{

    function __construct() 

	{                

		$Realm = addslashes($_POST['realm']);
		$Character = addslashes($_POST['character']);
		$Reward = addslashes($_POST['reward']);
                                    $uniqueid = rand(10, 1000000);
		$Con = mysql_connect(sql_host,sql_user,sql_pass);
		mysql_select_db(Cmsdb);
		
		//check availability of reward.
		$res = mysql_query("SELECT itemid,points FROM vote_rewards WHERE id='{$Reward}' AND realm='{$Realm}'");
		if(!$Rinfo = mysql_fetch_array($res))
			die("Nonexistant reward or realm.");
			
		
		// check points available
		if((int)$Rinfo['points'] > (int)$_SESSION['points'])
			die("Insufficient points.");

		// deduct points
		$Con = mysql_connect(sql_host,sql_user,sql_pass);
		mysql_select_db(Logindb);
		mysql_query("UPDATE account_data SET reward_points = reward_points - {$Rinfo['points']} WHERE name='{$_SESSION['account']}'");
		(int)$_SESSION['points'] -= (int)$Rinfo['points'];
		mysql_close($Con);
		
		
                                    $res = mysql_query("SELECT description,points FROM voterewards1 WHERE id='{$Reward}'");
                                    $Row = mysql_fetch_array($res);
                mysql_query("INSERT INTO mail VALUES('$uniqueid','$Character','Test  Server','".MAIL_SUBJECT."','".MAIL_BODY."','1','null','{$Row['description']}','null','2010-08-28 02:00:00')");
                                    //send item.
		$Con = mysql_connect(sql_host,sql_user,sql_pass);
		mysql_select_db(Cmsdb);
                                     $res = mysql_query("SELECT itemid,description FROM vote_rewards WHERE id='{$Reward}'");
                                      $Row = mysql_fetch_array($res);
                                     $itemid = $Row[itemid];
                                     $description = $Row[description];
                                    mysql_select_db(Gamedb);
                                    mysql_query("INSERT INTO surveys VALUES(null,'$Character','".MAIL_SUBJECT."','".MAIL_BODY."','1','{$itemid}','{$description}')");
		mysql_close($Con);
                                
		die("1");

}
}


?>