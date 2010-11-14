<?php

//multilang support
//language select
$lang = "en";


//configure
if ($lang == 'en'){
						require_once ("./lang/eng.php");
}elseif ($lang == 'ru'){
						require_once ("./lang/ru.php");
}elseif ($lang == 'am'){
						require_once ("./lang/am.php");
}else {
						echo "No language selected";
						};

// sql credentials

define("sql_host","localhost");
define("sql_user","root");
define("sql_pass","aion");
define("Logindb","aengine_ls");
define("Gamedb","aengine_gs");
$conn = @mysql_connect(sql_host, sql_user, sql_pass) or die(mysql_error());

// mail-function (subject-body of mail)

define("MAIL_SUBJECT","Thanks For Voting!");
define("MAIL_BODY","Thank you for voting for our server. Here is your reward!");

//vote points for each vote link

define("RPPV1",8); //vote points for vote-link 1 etc
define("RPPV2",3);
define("RPPV3",3);
define("RPPV4",2);
define("RPPV5",2);
define("RPPV6",2);
define("RPPV7",3);
define("RPPV8",2);
define("RPPV9",1);

?>