<?php if(!defined('IN_GAME')) exit('Access Denied'); ?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<?php include template('header'); ?>
<div align="middle">
<table border="0" cellspacing="0" cellpadding="0" valign="middle">
<tr>
<td>
<br>
<p><span class="lime"><font size="3">ACFUN大逃杀 物品掉落表：</font></span></p>
<p><span class="grey">请利用浏览器的查找功能（Ctrl+F）查找你所需的内容。</span></p>
<p><span>小提示： <br>如果你只是想查找<span class="yellow">合成表中的物品</span>的掉落位置，只需<a href="help.php"><u>返回帮助</u></a>，并<span class="yellow">将鼠标停留在合成表中该物品上</span>，就会出现这个物品的获取方式了。</span></p>
<br>
</td>
</tr>
</table>
<div align="middle">
<?php include template('itemhelp'); ?>
</div>
<form method="post" name="backindex" action="help.php"><input
type="submit" name="enter" value="返回帮助页面"></form>
<?php include template('footer'); ?>
