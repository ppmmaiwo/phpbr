<? if(!defined('IN_GAME')) exit('Access Denied'); ?>
想包扎什么部位？<br>

<input type="hidden" name="mode" value="special">
<input type="radio" name="command" id="menu" value="menu" checked><a onclick=sl('menu'); href="javascript:void(0);" >返回</a><br><br>
<? if($inf && $club == 16) { ?>
<input type="radio" name="command" id="infA" value="infA"><a onclick=sl('infA'); href="javascript:void(0);" ><span class="red">全部包扎</span></a><br>
<? } if(strpos($inf,'b') !== false) { ?>
<input type="radio" name="command" id="infb" value="infb"><a onclick=sl('infb'); href="javascript:void(0);" ><?=$infinfo['b']?><span class="red">部</span></a><br>
<? } if(strpos($inf,'h') !== false) { ?>
<input type="radio" name="command" id="infh" value="infh"><a onclick=sl('infh'); href="javascript:void(0);" ><?=$infinfo['h']?><span class="red">部 </span></a><br>
<? } if(strpos($inf,'a') !== false) { ?>
<input type="radio" name="command" id="infa" value="infa"><a onclick=sl('infa'); href="javascript:void(0);" ><?=$infinfo['a']?><span class="red">部 </span></a><br>
<? } if(strpos($inf,'f') !== false) { ?>
<input type="radio" name="command" id="inff" value="inff"><a onclick=sl('inff'); href="javascript:void(0);" ><?=$infinfo['f']?><span class="red">部</span> </a><br>
<? } ?>
 

