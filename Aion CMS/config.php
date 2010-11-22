<?php



// sql credentials

define("sql_host","localhost");
define("sql_user","root");
define("sql_pass","aion");
define("Logindb","aengine_ls");
define("Gamedb","aengine_gs");
define("Cmsdb","aion_cms");
$conn = @mysql_connect(sql_host, sql_user, sql_pass) or die(mysql_error());

//Vote & Redeem System

define("RPPV1",8); //vote points for vote-link 1 etc
define("RPPV2",3);
define("RPPV3",3);
define("RPPV4",2);
define("RPPV5",2);
define("RPPV6",2);
define("RPPV7",3);
define("RPPV8",2);
define("RPPV9",1);

// Donate System
define(SITE_URL,"http://w3ird.net"); // COMPLETE url to your web site, NO TRAILING SLASH!
define(SYS_PATH,"/cms/"); // Path to the directory this file is in, beginning with a slash.
define(CURRENCY_CODE,"USD"); // Currency code to be used by PayPal.
define(CURRENCY_CHAR,"$"); // Symbol representing your currency code.
define(PAYPAL_URL,"www.paypal.com"); // Only change this for sandbox testing.
define(PAYPAL_EMAIL,"ntemos@live.com"); // The account that donations will go to.

// Survey information.
define(MAIL_SUBJECT,"Thank You"); // Subject of the reward mail.
define(MAIL_BODY,"Thank you for supporting our server! Here is your reward!"); // Mail message.

$sitename = "Floodbox";

//
//-----------------------------------------------
//        ENGLISH - Administrators, enter between 1 username and 1,000,000 usernames :P
//                  NOTE: Every username must start with UPPERCASE must be between 
//                        double quotes and separated by comas.
//
//                  TO POST AS ADMIN: In the name input write your ADMIN NAME followed by an "@"
//				    and the password, explample:
//    
//                  youradminuser@yourpass    george@pass    floodboy@pass
//

$admin = array("George","Jorge","Floodboy","Flood"); 

//
//-----------------------------------------------
//        ENGLISH - Enter your global admin password
//

$password = "admin";

//-----------------------------------------------
//        ENGLISH - This is the time (in seconds) between posts (60 = 1 min), (600 = 10 min), ....
//

$floodtime = 30;

//-----------------------------------------------
//        ENGLISH - Max number of characters in post
//

$maxchar = 101;

//-----------------------------------------------
//        ENGLISH - Max number of characters in usernames
//

$namemaxchar = 11;

//----------------------------------------------
//        ENGLISH - Max number of characters in one sigle word
//                  (This will brake all those laaaaaaaaaaaaaaaarge words)
//

$maxlenword = 16;

//----------------------------------------------
//        ENGLISH - Banned words ;-)
//                  NOTE: Enter your banned words only with lowercase
//

$badwords = array("fuck","suck","shit","joder");

//
//  That's it :D ENJOY !


?>