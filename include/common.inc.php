<?php

error_reporting(E_ALL);
set_magic_quotes_runtime(0);

define('IN_GAME', TRUE);
define('GAME_ROOT', substr(dirname(__FILE__), 0, -7));
define('GAMENAME', 'bra');

if(PHP_VERSION < '4.3.0') {
	exit('PHP version must >= 4.3.0!');
}
require GAME_ROOT.'./include/global.func.php';
$magic_quotes_gpc = get_magic_quotes_gpc();
$_COOKIE = gstrfilter($_COOKIE);
$_POST = gstrfilter($_POST);
$_FILES = gstrfilter($_FILES);
extract($_POST);

require GAME_ROOT.'./config.inc.php';
$now = time() + $moveut*3600 + $moveutmin*60;   
list($sec,$min,$hour,$day,$month,$year,$wday) = explode(',',date("s,i,H,j,n,Y,w",$now));

//if($attackevasive) {
//	include_once GAME_ROOT.'./include/security.inc.php';
//}

require GAME_ROOT.'./include/db_'.$database.'.class.php';
$db = new dbstuff;
$db->connect($dbhost, $dbuser, $dbpw, $dbname, $pconnect);
//$db->select_db($dbname);
unset($dbhost, $dbuser, $dbpw, $dbname, $pconnect);

require GAME_ROOT.'./gamedata/system.php';
require config('resources',$gamecfg);
require config('gamecfg',$gamecfg);
include GAME_ROOT.'./gamedata/gameinfo.php';
include GAME_ROOT.'./gamedata/combatinfo.php';

ob_start();
//if($gzipcompress && function_exists('ob_gzhandler') && CURSCRIPT != 'wap') {
//	ob_start('ob_gzhandler');
//} else {
//	$gzipcompress = 0;
//	ob_start();
//}

//$gamestate状态：0-上局游戏结束；10-新游戏准备阶段；20-游戏开放激活；30-游戏停止激活；40-游戏连斗；50-游戏死斗。

if(!$gamestate) { 
	if(($starttime)&&($now > $starttime - $startmin*60)) {
		$gamenum++;
		$gamestate = 10;
		$hdamage = 0;
		$hplayer = '';
		$noisemode = '';
		$bossdeath = 0;
		$arealock = 1;
		//save_gameinfo();
		include_once GAME_ROOT.'./include/system.func.php';
		rs_game(1+2+4+8+16+32);
		save_gameinfo();
		naddnews($now,'gameready',$gamenum);
	}
}
if($gamestate == 10) {
	if($now >= $starttime) {
		$gamestate = 20;
		save_gameinfo();
		$msg = "游戏开始！";
		systemchat($msg,$starttime);
		naddnews($starttime,'newgame',$gamenum);
		
	}
}

if (($gamestate > 10)&&($now > $areatime)) {
	include_once GAME_ROOT.'./include/system.func.php';
	while($now>$areatime){
		$o_areatime = $areatime;
		$areatime = $areatime - $areatime % 60 + $areahour * 60;
		//$areatime += $areahour*60;
		save_gameinfo();
		add_once_area($o_areatime);
		save_gameinfo();
	}
	//addarea($areatime);
}

if($gamestate == 20) {
	$arealimit = $arealimit > 0 ? $arealimit : 1; 
	if(($validnum <= 0)&&($areanum >= $arealimit*$areaadd)) {
		gameover($areatime-3599,4);
	} elseif(($areanum >= $arealimit*$areaadd) || ($validnum >= $validlimit)) {
		$gamestate = 30;
		save_gameinfo();
	}
}

if($gamestate >= 20) {
	get_mapweapon();
}

if((($gamestate == 30)&&($alivenum <= $combolimit))||($deathlimit&&($gamestate < 40)&&($gamestate >= 20)&&($deathnum >= $deathlimit))) {
	$gamestate = 40;
	save_gameinfo();
	$msg = "游戏进入连斗！";
	systemchat($msg);
	//$db->query("UPDATE {$tablepre}players SET teamID='',teamPass='' WHERE type=0 ");
	naddnews($now,'combo');
}

if($gamestate == 40 || $gamestate == 50) {
	if($alivenum <= 1) {
		include_once GAME_ROOT.'./include/system.func.php';
		gameover();
	}
}

$cuser = & $_COOKIE[$tablepre.'user'];
$cpass = & $_COOKIE[$tablepre.'pass'];
$ctrl = & $_COOKIE[$tablepre.'ctrl'];

?>