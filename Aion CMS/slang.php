<?php //multilang support
//language select
preg_match('/en/i',$_GET['lang']);
preg_match('/ru/i',$_GET['lang']);
if(isset($_GET['lang']))
{
$lang = $_GET['lang'];

// register the session and set the cookie
$_SESSION['lang'] = $lang;

}
else if(isset($_SESSION['lang']))
{
$lang = $_SESSION['lang'];
}
else if(isset($_COOKIE['lang']))
{
$lang = $_COOKIE['lang'];
}
else
{
$lang = 'en';
}

switch ($lang) {
  case 'en':
  include_once './lang/eng.php';
  break;

  case 'ru':
  include_once './lang/ru.php';
  break;

  case 'es':
  include_once './lang/es.php';
  break;

  default:
  include_once './lang/eng.php';

}
?>