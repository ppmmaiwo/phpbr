﻿生存游戏版权属 loongyou.com所有，未经许可，不得用于任何商业用途。
作者联系方式：azazil@163.com

生存游戏 V3.0版(for discuz)安装说明


假设你的论坛目录为 loongyou.com/bbs，

1.将安装目录下的所有文件上传到论坛目录下，对应关系为
/生存游戏安装包 -〉 /bbs

2.将 bra/gamedata 和 bra/templates 两个文件夹及子文件夹属性全部改为777

3.运行 loongyou.com/bbs/bra/install.php ，根据提示安装游戏

4.安装完成后，务必删除 /bbs/bra/install.php 文件和 /bbs/bra/install/目录

5.进入discuz论坛管理界面，添加游戏插件。步骤：
扩展设置-〉插件设置-〉新增插件-〉编辑插件
编辑插件时，在“插件模块和自定义菜单”中，填写
插件名称：生存游戏
唯一标识符：bra
后台权限等级：管理员
程序模块：bra
菜单名称：生存游戏
直接连接url:braplus.php
模块类型：直接链接（前台菜单）
使用等级：普通用户

6.插件添加完成后，就可以在论坛中进行游戏了。

注意：游戏安装后，第一次运行时会出现类似
“Warning: filemtime() [function.filemtime]: stat failed for D:\Apache\htdocs\bbs\bra\./gamedata/templates/1_news.tpl.php in D:\Apache\htdocs\bbs\bra\include\global.func.php on line 46
”
这样的信息。不用管它，以后就不会出现了。