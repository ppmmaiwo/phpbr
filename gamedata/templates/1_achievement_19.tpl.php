<?php if(!defined('IN_GAME')) exit('Access Denied'); ?>
<table><tr>
<td>
<?php if(($cpl['19']) ) { ?>
<img src="img/ach/19.gif">
<?php } else { ?>
<img src="img/achievement_not_done.gif">
<?php } ?>
</td>
<td valign="top" align="left">
<b>奇迹的篝火</b>
<?php if(($cpl['19']) ) { ?>
<span class="lime">[完成]</span>
<?php } else { ?>
<span class="red">[未完成]</span>
<?php } ?>
<br>
<font color="yellow">完成次数： <?php echo $prc['19']?>次<br></font>
<font color="olive">奖励： 积分1000 切糕 1000 <span class="evergreen">称号 奇迹的篝火</span><br></font> 
完成结局：幻境解离<br>
</td>
</tr></table>
