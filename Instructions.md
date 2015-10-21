# How to install #

**1-Setting config.php**

Open config.php with your text editor and fill all the needed information:

// sql credentials

|"define("sql\_host","localhost");|
|:--------------------------------|
|define("sql\_user","HERE WRITE THE USER OF MYSQL");|
|define("sql\_pass","HERE WRITE THE PASS OF MYSQL USER");|
|define("Logindb","HERE WRITE THE DB OF LOGINSERVER");|
|define("Gamedb","HERE WRITE THE DB OF GAMESERVER");|
|define("Cmsdb","HERE WRITE THE DB OF AION\_CMS");|

**2-Go to php installer**

After uploading the Aion CMS folder into your webserver , open it in browser , it will lead you to installer page.

Fill all the needed gaps and press install.

Delete install folder and refresh page.

# How to setup Donate system for your server #

**1-Edit config.php**

Go to Aion CMS folder open config.php.

Fill the gaps like this:

// Donate System

|define(SITE\_URL,"http://YOUR SITE HERE"); // COMPLETE url to your web site|
|:--------------------------------------------------------------------------|
|example define(SITE\_URL,"http://w3ird.net");                              |
|define(SYS\_PATH,"/HERE ADD THE PATH WHERE AION CMS IS"); // Path to the directory that aion cms is.|
|example, if your cms is in http://w3ird.net/cms define(SYS\_PATH,"/cms/"); |
|example, if it is directly in http://w3ird.net define(SYS\_PATH,"/");      |
|define(CURRENCY\_CODE,"USD"); // Currency code to be used by PayPal.       |
|define(CURRENCY\_CHAR,"$"); // Symbol representing your currency code.     |
|define(PAYPAL\_EMAIL,"ntemos@live.com"); // The account that donations will go to.|

**2-Add rewards**

With Navicat, open Cmsdb and find table donate\_rewards

Add new row with these information:

-entry : number of reward ( it is auto\_increment)
-name : name of the reward that will appear in the dropdown menu in donate page
-realm : number of realm as you have put it in realms table
-description : a short description for the reward
-item : itemid as you can get it from aiondatabase
-quantity : if the reward is not kinah, fill this gap with the amount of the item you want to give to the user
-kinah : if the reward is kinah, leave empty the quantity gap and here put the amount of kinah