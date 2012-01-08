<?php
if(!defined('IN_GAME')) exit('Access Denied');

$mixinfo = array
	( 
	array('stuff' => array('轻油','肥料'),'result' => array('火药','X',1,1,),),
	array('stuff' => array('水','地雷'),'result' => array('水鸳鸯','WD',32,32,'d'),),
	array('stuff' => array('灯油','钉'),'result' => array('☆仙女棒☆','WD',60,60,d),),
	array('stuff' => array('探测器电池','打火机'),'result' => array('☆自爆电池☆','WD',140,28,'d'),),
	array('stuff' => array('汽油','空瓶'),'result' => array('☆火焰瓶☆','WC',60,24,'ud'),),
	array('stuff' => array('信管','火药'),'result' => array('★炸药★','WD',105,60,'d'),),
	array('stuff' => array('导火线','火药'),'result' => array('★炸药★','WD',105,60,'d'),),
	array('stuff' => array('喷雾器罐','打火机'),'result' => array('★简易火焰放射器★','WG',72,10,'u'),),
	//array('stuff' => array('简易雷达','天线'),'result' => array('雷达','R',1,1,2),),
	array('stuff' => array('生命探测器','增幅设备'),'result' => array('广域生命探测器','R',1,1,2),),
	array('stuff' => array('安雅人体冰雕','解冻药水'),'result' => array('武器师安雅的奖赏','Y',1,1,),),
	array('stuff' => array('手机','笔记本电脑'),'result' => array('移动PC','Z',1,1,),),
	array('stuff' => array('杂炊','松茸'),'result' => array('松茸御饭','HS',120,2,),),
	array('stuff' => array('咖喱','面包'),'result' => array('咖喱面包','HH',120,2,),),
	array('stuff' => array('牛奶','立顿茶包','糯米丸子'),'result' => array('珍珠奶茶','HB',200,4,),),
	array('stuff' => array('《小黄的草帽》','《小黄的钓鱼竿》','《小黄的行军靴》'),'result' => array('《小黄的精灵球》','WC',233,'∞',),),
	array('stuff' => array('《小黄的精灵球》','《小黄的收服特训》'),'result' => array('《小黄的超级球》','WC',233,'∞','r'),),
	//array('stuff' => array('桔黄色的果酱','面包'),'result' => array('不甜的果酱面包','HB',300,5,),),
	array('stuff' => array('月宫 亚由的半身像','神尾 观铃的半身像','古河 渚的半身像'),'result' => array('四季流转的咏叹调','WP',750,1,),),
	array('stuff' => array('天泽 郁末的半身像','长森 瑞佳的半身像','枣 铃的半身像'),'result' => array('旁观轮回的覆唱诗','WK',750,1,),),
	array('stuff' => array('神北 小毬的半身像','一之濑 琴美的半身像','SSS团长的半身像'),'result' => array('天然属性也是很可怕的！','WD',160,46,'zd'),),
	array('stuff' => array('四季流转的咏叹调','旁观轮回的覆唱诗'),'result' => array('【KEY系催泪弹】','WD',3600,4,'zd'),),
	array('stuff' => array('【北斗百裂拳】','《北斗神拳》'),'result' => array('【北斗有情破颜拳】','WP',300,100,'cdr'),),
	array('stuff' => array('恐龙玩偶','天使玩偶','团子玩偶'),'result' => array('观铃的嘎哦嘎哦恐龙喷火分队','WG',217,10,'ur'),),
	array('stuff' => array('『高性能环形激光』','增幅设备','巨大透镜'),'result' => array('【质子撞击炮】','WG',450,200,'udo'),),
	array('stuff' => array('『高性能黑洞激光』','增幅设备','巨大透镜'),'result' => array('【重力冲击炮】','WG',450,240,'ido'),),
	array('stuff' => array('『高性能双重激光』','增幅设备','巨大透镜'),'result' => array('【最终鬼畜兵器】','WG',640,200,'uido'),),
	array('stuff' => array('【最终鬼畜兵器】','『奥丁巨核装备』','增幅设备'),'result' => array('【霜火协奏曲】','WG',1024,256,'uiwdr'),),
	array('stuff' => array('早苗面包','像围棋子一样的饼干','浓厚粘稠果汁'),'result' => array('KEY系儿童套餐','HB',333,10,),),
	array('stuff' => array('红色方块','绿色方块','蓝色方块'),'result' => array('纯真之剑','WK',150,40,),),
	array('stuff' => array('红色方块','黄色方块','金色方块'),'result' => array('热情之枪','WG',150,40,),),
	array('stuff' => array('蓝色方块','黄色方块','水晶方块'),'result' => array('温柔的关怀','HB',150,80,),),
	array('stuff' => array('金色方块','银色方块','水晶方块'),'result' => array('喷发的斗志','WD',150,80,'d'),),
	array('stuff' => array('绿色方块','银色方块'),'result' => array('炙热的手套','DA',150,80,),),
	array('stuff' => array('红色方块','黄色方块'),'result' => array('坚强戒指','DA',150,80,),),
	array('stuff' => array('金色方块','水晶方块'),'result' => array('活力之靴','DF',150,80,),),
	array('stuff' => array('红色方块','银色方块'),'result' => array('红宝石方块','X',1,1,),),
	array('stuff' => array('金色方块','绿色方块'),'result' => array('蓝宝石方块','X',1,1,),),
	array('stuff' => array('蓝色方块','黄色方块'),'result' => array('绿宝石方块','X',1,1,),),
	array('stuff' => array('红宝石方块','蓝宝石方块'),'result' => array('绿宝石方块','X',1,2,),),
	array('stuff' => array('绿宝石方块','黄色方块'),'result' => array('黄色的宝石枪','WG',240,150,'e'),),
	array('stuff' => array('绿宝石方块','红色方块'),'result' => array('红色的宝石刀','WK',240,150,'u'),),
	array('stuff' => array('绿宝石方块','蓝色方块'),'result' => array('蓝色的宝石锤','WP',240,150,'i'),),
	array('stuff' => array('绿宝石方块','绿色方块'),'result' => array('绿色的宝石镖','WC',240,150,'p'),),
	array('stuff' => array('绿宝石方块','金色方块'),'result' => array('金色的宝石炸弹','WD',240,150,'d'),),
	array('stuff' => array('绿宝石方块','银色方块'),'result' => array('银色的宝石符卡','WF',240,150,'w'),),
	array('stuff' => array('红色的宝石刀','悲叹之种'),'result' => array('★恐惧的黑色安息日★','WK',240,240,'rud'),),
	array('stuff' => array('银色的宝石符卡','悲叹之种'),'result' => array('★失落的银色镇魂歌★','WF',240,240,'rwd'),),
	array('stuff' => array('绿宝石方块','水晶方块'),'result' => array('水晶宝石盾','DA',240,150,'PC'),),
	array('stuff' => array('绿宝石方块','红宝石方块'),'result' => array('珍珠头盔','DH',240,150,'KD'),),
	array('stuff' => array('绿宝石方块','蓝宝石方块'),'result' => array('钻石靴子','DF',240,150,'GF'),),
	array('stuff' => array('红宝石方块','红色方块'),'result' => array('深红色的项链','A',240,150,'a'),),
	array('stuff' => array('蓝宝石方块','蓝色方块'),'result' => array('蔚蓝色的项链','A',240,150,'H'),),
	array('stuff' => array('黄色方块','黄色方块','黄色方块'),'result' => array('★高压电击★','WD',152,251,'red'),),
	array('stuff' => array('红色方块','红色方块','红色方块'),'result' => array('★烈焰冲撞★','WP',152,152,'ru'),),
	array('stuff' => array('绿色方块','绿色方块','绿色方块'),'result' => array('★飞叶快刀★','WK',152,152,'rp'),),
	array('stuff' => array('蓝色方块','蓝色方块','蓝色方块'),'result' => array('★急冻光线★','WG',152,152,'ric'),),
	array('stuff' => array('金色方块','金色方块','金色方块'),'result' => array('★齿轮飞碟★','WC',152,386,'rd'),),
	array('stuff' => array('银色方块','银色方块','银色方块'),'result' => array('★精神破坏★','WF',152,152,'rw'),),
	array('stuff' => array('水晶方块','水晶方块','水晶方块'),'result' => array('★灭亡之歌★','TN',900,3,),),
	array('stuff' => array('幻之使魔','永恒之桶'),'result' => array('灵魂的结晶','WC',180,240,'wr'),),
	array('stuff' => array('针筒','疗伤药'),'result' => array('治疗针','HH',120,1,),),
	array('stuff' => array('针筒','毒药'),'result' => array('毒针','WK',32,10,'p'),),
	array('stuff' => array('白色的羽毛','金色方块'),'result' => array('凤凰之羽','WK',20,200,'u'),),
	array('stuff' => array('白色的羽毛','银色方块'),'result' => array('露琪亚之羽','WK',50,200,'i'),),
	array('stuff' => array('凤凰之羽','露琪亚之羽','《小黄的草帽》'),'result' => array('《小黄的常磐之力》','A',233,'∞','c'),),
	array('stuff' => array('《小黄的超级球》','《小黄的常磐之力》'),'result' => array('《小黄的大师球》','WC',466,'∞','cdr'),),
	array('stuff' => array('喷雾器罐','毒药'),'result' => array('简易毒气弹','WD',70,12,'dp'),),
	array('stuff' => array('空白符卡','夜雀歌谱'),'result' => array('声符『枭的夜鸣声』','WF',15,'∞','w'),),
	array('stuff' => array('空白符卡','雏人形'),'result' => array('疵符『破裂的护身符』','WF',15,'∞','p'),),
	array('stuff' => array('空白符卡','被遗忘的伞'),'result' => array('伞符『雨伞的星之交响』','WF',24,'∞','i'),),
	array('stuff' => array('空白符卡','☆博丽护符☆'),'result' => array('梦符『梦想妙珠』','WF',40,'∞','r'),),
	array('stuff' => array('空白符卡','☆山蘑菇粉☆'),'result' => array('星符『星尘狂欢』','WF',60,'∞','u'),),
	array('stuff' => array('空白符卡','☆守矢神签☆'),'result' => array('秘术『一子单传的弹幕』','WF',60,'∞','d'),),
	array('stuff' => array('空白符卡','★时停怀表★'),'result' => array('时符『Private Square』','WF',150,'∞','i'),),
	array('stuff' => array('空白符卡','★瓶装幽灵★'),'result' => array('幽鬼剑『妖童饿鬼之断食』','WF',150,'∞','c'),),
	array('stuff' => array('空白符卡','《文文。新闻》'),'result' => array('风符『风神一扇』','WF',200,'∞','d'),),
	array('stuff' => array('空白符卡','冰冻青蛙','バカ⑨制冰块'),'result' => array('冰符『Icicle Fall』','WF',9,'∞','ir'),),
	array('stuff' => array('西瓜','水果刀','磨刀石'),'result' => array('西瓜刀','WK',99,'∞','c'),),
	array('stuff' => array('冰沙','小棍棒','御神签'),'result' => array('冰棍棒','WP',9,'19','r'),),
	array('stuff' => array('冰符『Icicle Fall』','西瓜刀','冰棍棒'),'result' => array('奥义『超⑨武神霸斩』','WF',166,'∞','cri'),),
	array('stuff' => array('空白符卡','【触手的萃取液】','《东方永夜抄》'),'result' => array('紫奥义『弹幕结界』','WF',300,'∞','rd'),),
	array('stuff' => array('风见 幽香的ID卡','坂持 金发的ID卡','御坂 美琴的ID卡'),'result' => array('游戏解除钥匙','Y',1,1,),),
	array('stuff' => array('社员专用的ID卡','社员专用的ID卡','社员专用的ID卡'),'result' => array('游戏解除钥匙','Y',1,1,),),
	array('stuff' => array('《哲♂学》','增幅设备'),'result' => array('森之妖精的棍棒','WP',150,50,'r'),),
	array('stuff' => array('时符『Private Square』','幻之刃','永恒飞刃'),'result' => array('『收缩的世界』','WF',132,'∞','ir'),),
	array('stuff' => array('幻符【杀人玩偶】','★时停怀表★','永恒飞刃'),'result' => array('幻葬『夜雾幻影杀人鬼』','WC',211,'∞','ir'),),
	array('stuff' => array('幽鬼剑『妖童饿鬼之断食』','☆楼观剑☆','☆白楼剑☆'),'result' => array('空观剑『六根清净斩』','WF',320,'∞','r'),),
	array('stuff' => array('★荆棘式电子地雷★','★阔剑地雷★','★全图不唯一的野生巨大香蕉★'),'result' => array('★一发逆转神话★','TNc',1,1,'x'),),
	array('stuff' => array('「被封印者的左腕」','「被封印者的右腕」'),'result' => array('「被封印者的双腕」','Y',2,1,),),
	array('stuff' => array('「被封印者的左足」','「被封印者的右足」'),'result' => array('「被封印者的双足」','Y',2,1,),),
	array('stuff' => array('「被封印的艾克佐迪亚」','「被封印者的双腕」','「被封印者的双足」'),'result' => array('「被封印的黑暗大法师」','WC',8192,1,),),
	array('stuff' => array('「被封印的黑暗大法师」','★神卡认证★'),'result' => array('『黑暗大法师』','WC',8192,'∞','AaZ'),),
	array('stuff' => array('「隼骑士」-仮','☆四星认证☆'),'result' => array('「隼骑士」','WC',100,'∞','r'),),
	array('stuff' => array('「V-喷气虎」-仮','☆四星认证☆'),'result' => array('「V-喷气虎」','WC',160,'180','p'),),
	array('stuff' => array('「W-弹射飞翼」-仮','☆四星认证☆'),'result' => array('「W-弹射飞翼」','WC',130,'150','u'),),
	array('stuff' => array('「X-首领加农」-仮','☆四星认证☆'),'result' => array('「X-首领加农」','WC',180,'150','i'),),
	array('stuff' => array('「Y-龙头」-仮','☆四星认证☆'),'result' => array('「Y-龙头」','WC',150,'160','e'),),
	array('stuff' => array('「Z-金属履带」-仮','☆四星认证☆'),'result' => array('「Z-金属履带」','WC',150,'130','w'),),
	array('stuff' => array('「V-喷气虎」','「W-弹射飞翼」'),'result' => array('「VW-强击虎」','WC',200,'∞','pu'),),
	array('stuff' => array('「X-首领加农」','「Y-龙头」','「Z-金属履带」'),'result' => array('「XYZ-神龙炮」','WC',280,'∞','iew'),),
	array('stuff' => array('「VW-强击虎」','「XYZ-神龙炮」'),'result' => array('「VWXYZ-神龙强击炮」','WC',300,'∞','puiew'),),
	array('stuff' => array('「绝对防御将军」-仮','☆六星认证☆'),'result' => array('「绝对防御将军」','WC',250,'∞','A'),),
	array('stuff' => array('「人造人-念力震慑者」-仮','☆六星认证☆'),'result' => array('「人造人-念力震慑者」','WC',240,'∞','M'),),
	array('stuff' => array('「恶魔召唤」-仮','☆六星认证☆'),'result' => array('「恶魔召唤」','WC',250,'∞','c'),),
	array('stuff' => array('「真紅眼黑龍」-仮','☆八星认证☆'),'result' => array('「真紅眼黑龍」','WC',240,'∞','u'),),
	array('stuff' => array('「真紅眼黑龍」','★神卡认证★'),'result' => array('「真紅眼闇龍」','WC',2400,'∞','cruZ'),),
	array('stuff' => array('「真紅眼黑龍」','「金属化·魔法反射装甲」'),'result' => array('「真紅眼黑龍鐵龍」','WC',280,'∞','uA'),),
	array('stuff' => array('「恶魔召唤」','「真紅眼黑龍」'),'result' => array('「暗黑魔龙」','WC',320,'∞','cru'),),
	array('stuff' => array('「左轮手枪龙」-仮','☆八星认证☆'),'result' => array('「左轮手枪龙」','WC',260,'∞','r'),),
	array('stuff' => array('「破龙剑士」-仮','☆八星认证☆'),'result' => array('「破龙剑士」','WC',260,'∞','cC'),),
	array('stuff' => array('「黑魔术师」-仮','☆八星认证☆'),'result' => array('「黑魔术师」','WC',250,'∞','cC'),),
	array('stuff' => array('「黑魔术师」','「破龙剑士」'),'result' => array('「超魔导剑士-黑暗帕拉丁」','WC',290,'∞','crdZ'),),
	array('stuff' => array('「青眼白龙」-仮','☆八星认证☆'),'result' => array('「青眼白龙」','WC',300,'∞','d'),),
	array('stuff' => array('「青眼白龙」','「青眼白龙」','【逆转的女神】'),'result' => array('「青眼究极龙」','WC',450,'∞','crud'),),
	array('stuff' => array('「奥西里斯之天空龙」-仮','★神卡认证★'),'result' => array('『奥西里斯之天空龙』','WC',4000,'∞','AcreZ'),),
	array('stuff' => array('「欧贝利斯克之巨神兵」-仮','★神卡认证★'),'result' => array('『欧贝利斯克之巨神兵』','WC',4000,'∞','AcriZ'),),
	array('stuff' => array('「太阳神之翼神龙」-仮','★神卡认证★'),'result' => array('『太阳神之翼神龙』','WC',4000,'∞','AcruZ'),),
	array('stuff' => array('『奥西里斯之天空龙』','『欧贝利斯克之巨神兵』','『太阳神之翼神龙』'),'result' => array('◎光之创造神◎','WC',65535,'∞','AcrdZ'),),
	array('stuff' => array('数据……碎片','电子马克笔','天然属性也是很可怕的！'),'result' => array('黑色夺魂曲','DB',573,765,'ZBb'),),
	array('stuff' => array('『午夜钟声』','『午夜钟声』','『午夜钟声』'),'result' => array('电子马克笔','DA',53,75,'Z'),),
	array('stuff' => array('甜生姜','地雷酥糖','面包'),'result' => array('更改菜谱后的不甜酱包','HB',300,17,'Z'),),
	array('stuff' => array('蓝色方块','水','空白符卡'),'result' => array('水符「Princess Undine」','WF',130,'∞','iI'),),
	array('stuff' => array('红宝石方块','打火机','空白符卡'),'result' => array('火符「Agni Shine」','WF',140,'∞','uU'),),
	array('stuff' => array('绿宝石方块','空白符卡','树叶'),'result' => array('木符『Sylphy Horn』','WF',160,'∞','wWc'),),
	array('stuff' => array('蓝宝石方块','天然水','水符「Princess Undine」'),'result' => array('水符『Jerry Fish Princess 』 ','WF',100,'∞','riI'),),
	array('stuff' => array('土符「Lazy Trilithon」','水符「Princess Undine」',''),'result' => array('土&水符『Noachian Deluge』','WF',520,'50','ic'),),
	array('stuff' => array('黄色方块','岩石','空白符卡'),'result' => array('土符「Lazy Trilithon」','WF',130,'∞','c'),),
	array('stuff' => array('土符「Lazy Trilithon」','火符「Agni Shine」','岩石'),'result' => array('火&土符『Lava Cromlech』','WF',450,'∞','ud'),),
	array('stuff' => array('金色方块','电池','空白符卡'),'result' => array('金符「Metal Fatigue」','WF',130,'∞','eE'),),
	array('stuff' => array('水符「Princess Undine」','金符「Metal Fatigue」'),'result' => array('金&水符『Mercury Poison』','WF',60,'∞','paZ'),),
	array('stuff' => array('鲜红的生血','长矛','造雾设备'),'result' => array('神枪『Spear The Gungnir』 ','WF',5500,'1','c'),),
	array('stuff' => array('《东方幻想乡》','触手的力量','【触手的萃取液】'),'result' => array('梦幻『幻月』 ','WF',900,'∞','rdcm'),),
	array('stuff' => array('空白符卡','☆残页的魔导书☆'),'result' => array('《不完全的魔法书》','VF',4,'2',''),),
	array('stuff' => array('空白符卡','《魔女的魔导书》'),'result' => array('《魔导师速成攻略》','VF',233,'1',''),),
	array('stuff' => array('向日葵','☆残页的魔导书☆','空白符卡'),'result' => array('日符「Royal Flare」-劣','WF',80,'∞','dc'),),
	array('stuff' => array('月光碎片','☆残页的魔导书☆','空白符卡'),'result' => array('月符「Silent Serena」-劣','WF',40,'∞','rc'),),
	array('stuff' => array('日符「Royal Flare」-劣','《魔女的魔导书》'),'result' => array('日符「Royal Flare」','WF',350,'∞','udc'),),
	array('stuff' => array('月符「Silent Serena」-劣','《魔女的魔导书》'),'result' => array('月符「Silent Serena」','WF',150,'∞','irc'),),
	array('stuff' => array('月符「Silent Serena」','日符「Royal Flare」'),'result' => array('日&月符『Royal Diamond Ring』','WF',432,'∞','riudc'),),
	array('stuff' => array('日&月符『Royal Diamond Ring』','梦幻『幻月』','神枪『Spear The Gungnir』'),'result' => array('模式『EX』','WF',60000,'∞','crdZ'),),
	);
?>