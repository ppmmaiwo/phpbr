<?php

/*Game resources*/

//■ 空手武器 ■
$nowep = '拳头';

//■ 无防具 ■
$noarb = '内衣';
//■ 无道具 ■
$noitm = '--';
//■ 无限耐久度 ■
$nosta = '∞';
//■ 无属性 ■
$nospk = '--';
//■ 多种类武器 ■
$mltwk = '泛用兵器';
//■ 多重属性 ■
//$mltspk = '多重属性';


//游戏状态描述
$gstate = Array(0 => '<font color="grey">已结束</font>',10 => '即将开始',20 => '开放激活',30 => '人数已满',40=> '<font color="yellow">连斗中</font>',50=>'<font color="red">死斗中</font>');
$gwin = Array(0 => '程序故障', 1 => '全部死亡',2 => '最后幸存',3 => '锁定解除',4 => '无人参加',5 => '核爆全灭',6 => 'GM中止');
$week = Array('日','一','二','三','四','五','六');
$clubinfo = Array(
	0=>'无',
	1=>'铁拳无敌',
	2=>'见敌必斩',
	3=>'灌篮高手',
	4=>'狙击鹰眼',
	5=>'拆弹专家',
	6=>'宛如疾风',
	7=>'锡安成员',
	8=>'黑衣组织',
	9=>'超能力者',
	10=>'高速成长',
	11=>'富家子弟',
	12=>'全能骑士',
	13=>'根性兄贵',
	14=>'肌肉兄贵',
	15=>'<span class="L5">L5状态</span>',
	16=>'冥土追魂',
	17=>'走路萌物',
	18=>'天赋异禀',
	98=>'换装迷宫',
	99=>'第一形态'
	);
$wthinfo = Array('晴天','大晴','多云','小雨','暴雨','台风','雷雨','下雪','起雾','浓雾','<span class="yellow">瘴气</span>','<span class="red">龙卷风</span>','<span class="clan">暴风雪</span>','<span class="blue">冰雹</span>','<span class="linen">离子暴</span>','<span class="green">辐射尘</span>','<span class="purple">臭氧洞</span>');
$sexinfo = Array(0=> '未定', 'm' => '男生', 'f' => '女生');
$hpinfo = Array('并无大碍','伤痕累累','生命危险','已经死亡');
$spinfo = Array('精力充沛','略有疲惫','精疲力尽','已经死亡');
$rageinfo = Array('平静','愤怒','暴怒','已经死亡');
$wepeinfo = Array('不值一提','略有威胁','威力可观','无敌神器');
$poseinfo = Array('通常','作战姿态','强袭姿态','探物姿态','偷袭姿态','治疗姿态');
$tacinfo = Array('通常','','重视防御','重视反击','重视躲避');
$typeinfo = Array(
	0=>'参战者',
	1=>'红杀将军',
	2=>'全息幻象',
	//3=>'各路党派',
	4=>'拟似意识',
	5=>'代码聚合体',
	6=>'黑幕',
	7=>'幻影执行官',
	8=>'管理员',
	9=>'红杀菁英',
	10=>'',
	11=>'真职人',
	12=>'未名存在',
	13=>'循环使者',
	14=>'数据碎片',
	20=>'英雄',
	21=>'武神',
	22=>'天神',
	90=>'各路党派'
	);
$killmsginfo = Array(
	0=>'',
	1=>'任务完结。',
	2=>'猎杀任务执行中。',
	//3=>'你弱爆了！',
	4=>'………………',
	5=>'记住，轻敌可是会死的。',
	6=>'忘记历史就意味着背叛，背叛就意味着……死亡。',
	7=>'你的实力还远远不及董事长的脚根呢。',
	8=>'死吧。',
	9=>'MISSION COMPLETE',
	10=>'这是我必须做的事，给您添麻烦了……',
	11=>'看看职人的力量！',
	12=>'你要反省的事情还有很多。',
	14=>'死吧。',
	90=>'你弱爆了！'
	);
$stateinfo = Array(0=>'正常存活',1=>'睡眠状态',2=>'治疗状态',3=>'静养状态',5=>'最后幸存',6=>'解除禁区',10 => '莫名身亡',11 => '禁区停留',12 => '毒发身亡', 13 => '意外死亡',14 => '入侵失败', 15 => '黑幕抹杀', 16 => '黑幕抹杀', 17 => '遭遇天灾',18 => '烧伤不治', 20 => '玩家杀害', 21 => '玩家杀害', 22 => '玩家杀害', 23 => '玩家杀害', 24 => '玩家杀害', 25 => '玩家杀害', 26 => '误食毒物', 27 => '误触陷阱', 28 => '死亡笔记',29 => '玩家杀害', 30 => '误触机关', 31 => 'L5病发', 32 => '挂机受罚', 33 => '天降软妹，无福消受', 34 => '溶剂作用', 35 => '救济',36 => '惨遭腰斩', 37 => '身首异处', 38 => '业火灼烧');
$lwinfo = Array(
	0 => '',
	1 => '任务失败了啊，撤退。',
	2 => '机体受损过重，任务被迫中止。',
	//3 => '我觉得我还可以抢救一下……',
	4 =>'…………还真的是优秀的个体呢……',
	5 => Array(
		'冴月 麟' => '控血果然容易出意外啊。',
		'四面' => '果然又被杀掉了啊，高速脱离战场。'
	),
	6 => '不……不准拿走……快还给我……还给我……',
	7 => Array(
		'电击使 御坂 美琴' => '力尽了……我还……不够强大啊……',
		'班主任 坂持 金发' => '记住吧：如果你憎恨一个人，便要为此付出代价。',
		'花之领主 风见 幽香' => '输掉了啊，不过下次死的就是你了哦！'
	),
	8 => '系统出错了吗？',
	9 => '我已经没有什么可以教给你的了。',
	10 => '……',
	11 => '咳，时代变了么……',
	12 => Array(
		'Dark Force幼体' => '我……!',
		'Dark Force' => '请记住，我是由人类的欲望而生的存在，只要人类存在，我也一样会。'
	),
	13 => Array(
		'库特' => '我……我还不能死在这里……还有人在等着我……！',
		'莱卡' => 'Dangerous Situation...Retreat.',
		'卡玛·克莱因' => '干得不错！在新的世界里再会吧，勇敢的挑战者。'
	),
	14 => Array(
		'讲解员 梦美' => '出了故障的，并不是我，而是——',
		'吉祥物 库特' => '我……我还不能死在这里……还有人在等着我……！',
		'风纪委员 静流' => '………………………………！',
		'战斗模式 梦美' => '受损超出预期值……放弃武装、脱出。',
		'本气（？） 叶留佳' => '输掉了？这不可能！我的LP难道不是你的80倍么？！',
//		'科学监察 莱卡' => 'Dangerous situation...Escape capsule launched.',
		'守卫者 静流' => '………………………………？！',
	),
	90 => '我觉得我还可以抢救一下……'
);
$infinfo = Array('b' => '<span class="red">胸</span>', 'h' => '<span class="red">头</span>', 'a' => '<span class="red">腕</span>', 'f' => '<span class="red">足</span>', 'p' => '<span class="purple">毒</span>', 'u' => '<span class="red">烧</span>', 'i' => '<span class="clan">冻</span>', 'e' => '<span class="yellow">麻</span>','w' => '<span class="grey">乱</span>');
$attinfo = Array('N' => '徒手殴打', 'P' => '殴打','K' => '斩刺', 'G' => '射击', 'C' => '投掷', 'D' => '设置引信伏击', 'F' => '释放灵力攻击', 'J' => '狙击');
$skillinfo = Array('N' => 'wp', 'P' => 'wp', 'K' => 'wk', 'G' => 'wg', 'C' => 'wc', 'D' => 'wd', 'F'=> 'wf', 'J'=> 'wg');
//$rangeinfo = Array('N' => 'S', 'P' => 'S', 'K' => 'S', 'G' => 'M', 'C' => 'M', 'D' => 'L', 'F'=> 'M'); #各种攻击方式的射程，移动到combatcfg.php
$restinfo = Array('通常','睡眠','治疗','静养');
$noiseinfo = Array(
	'G' => '枪声',
	'J'=> '枪声',
	'D' => '爆炸声',
	'F'=>'灵气',
	'缩写歌名'=>'这是一个很长很长的歌名，不过至少需要3个字符才能识别！',
	'abs'=>'这就是最短的歌名的一个例子',
	'Crow Song'=>'Crow Song',
	'Alicemagic'=>'Alicemagic',
	'恋歌'=>'恋歌',
	'鸡肉之歌'=>'鸡肉之歌'
	);
$exdmgname = Array('p' => '毒性攻击', 'u' => '火焰燃烧', 'i'=>'冻气缠绕', 'd'=>'爆炸','e'=>'电击','w'=>'音波攻击','f' => '<span class="yellow">炽热之焰</span>','k' => '<span class="clan">凝结之息</span>');
$exdmginf = Array('h' => '<span class="red">头部受伤</span>', 'b' => '<span class="red">胸部受伤</span>', 'a'=> '<span class="red">腕部受伤</span>', 'f'=> '<span class="red">足部受伤</span>', 'p'=> '<span class="purple">中毒</span>', 'u'=> '<span class="red">烧伤</span>', 'i'=> '<span class="clan">冻结</span>', 'e'=> '<span class="yellow">身体麻痹</span>', 'w'=> '<span class="grey">混乱</span>');
$infwords = Array('h' => '<span class="red">头部受伤</span>', 'b' => '<span class="red">胸部受伤</span>', 'a'=> '<span class="red">腕部受伤</span>', 'f'=> '<span class="red">足部受伤</span>', 'p'=> '<span class="purple">毒发</span>', 'u'=> '<span class="red">烧伤发作</span>', 'i'=> '<span class="clan">冻结影响</span>', 'e'=> '<span class="yellow">身体麻痹</span>', 'w'=> '<span class="grey">混乱</span>');
$chatinfo = Array(0 => '全员', 1 => '队伍', 2 => '密语', 3 => '遗言', 4 => '公告', 5 => '系统');
$npcchat = Array(
	1 => Array(
		'林无月' => Array(
			0 => '“竟然有能力闯到这里，还以为这次会轻松些呢……看来咱得亲自上阵了。”',
			1 => '“身手不错，不过咱是不会留情的。”',
			2 => '“咱很欣赏你的实力，可不要让咱太失望了。”',
			3 => '“能将咱逼到这个地步……你，有两下子呢。”',
			4 => '“看来咱不能再抱着玩乐的心态了……你，准备好迎接咱的攻击了么？”',
			5 => '“你觉得你的攻击对咱有效果吗？”',
			6 => '“难道你觉得咱会被这样的招式击倒？”',
			7 => '“咱今日真是棋逢对手啊，越来越有意思了呢。”',
			8 => '“咱可没那么容易倒下！”',
			9 => '“呜……这个躯体……咱还是无法自由运用啊……”',
			10 => '“真是的，这个位置的话没法全力反击啊……”',
			11 => '“真是的，竟然在射程之外啊……”',
			12 => '“咱也是生于常磐森林的人啊！”',
			13 => '“你还不懂得运用你的力量，咱为此感到惋惜。”',
			'color' => 'evergreen'
		),
		'红暮' => Array(
			0 => '“哦，杀回来了么……不过你也就到此为止了！”',
			1 => '“真可惜，如果不是因为我拿钱做事，我们可能是朋友。”',
			2 => '“好身手，那么轮到我了！”',
			3 => '“对手目标警戒等级提升到『黄』，反击开始。”',
			4 => '“对手目标警戒等级提升到『红』，执行消灭流程。”',
			5 => '“去再训练一百年吧，没准能碰到我。”',
			6 => '“去再训练五十年吧，没准能伤到我。”',
			7 => '“重新判定目标威胁等级中……”',
			8 => '“判定自身伤害程度……任务续行。”',
			9 => '“任务执行成功率下降，重新计算成功率。”',
			10 => '“判定目标在有效射程外，还有点运气啊……”',
			11 => '“判定目标完全在射程外，敢面对面打么？”',
			12 => '“你是不可能让一个没有死的概念的存在感到恐惧的！”',
			13 => '“任务完了。”',
			'color' => 'evergreen'
		)
	),
	5 => Array(
		'冴月 麟' => Array(
			0 => '“在咱看来你只是代码而已。咱出手不知轻重，请你原谅。”',
			1 => '“为了摆出攻击姿势，你忽略了隐蔽？”',
			2 => '“为了寻找重要道具，你丢弃了谨慎？”',
			3 => '“记住，NPC先制攻击的几率跟他的HP无关。”',
			4 => '“记住，NPC是不会‘真正意义上’主动进攻的。”',
			5 => '“这样的伤害值……也许你的熟练度还不够高？”',
			6 => '“这样的伤害值……也许你的武器攻击力还不够高？”',
			7 => '“HP有点低啊，或许下次加个自动回复功能会更有趣一点？”',
			8 => '“HP有点低啊，或许下次加个自动躲避功能会更有趣一点？”',
			9 => '“控血果然容易出意外啊。”',
			10 => '“唔，随机数竟然是……你的运气不错呢。”',
			11 => '“唔，攻击范围不够……你很懂得动脑筋呢。”',
			12 => '冴月 麟周身释放出了无数代码：“魂！常磐之力！Unlimited Code Works！”',
			13 => '“记住，轻敌可是会死的。”',
			'color' => 'yellow'
		),
		'四面' => Array(
			0 => '“于是我又乱入战场了，希望这次没被放在重要地区。”',
			1 => '“现在爆炸物的攻击方式变了，所以你接下来没法反击了。”',
			2 => '“毒系攻击是可以用防具防御的，不过这样的防具没那么容易找到。”',
			3 => '“我的内定称号是‘黑衣组织’，所以毒攻命中率有所提升。”',
			4 => '“而冴冴的内定称号是‘超能力者’，小心被她的必杀技秒了。”',
			5 => '“伤害是可以估算的，它与你的攻击力成正比，与敌人的防御力成反比。”',
			6 => '“伤害与熟练度也是成正比的，而且不同系熟练度增长率不一样。”',
			7 => '“把我打惨了啊，小心信四面会落魄到吃⑨冰哦。”',
			8 => '“把我打惨了啊，小心信四面会落魄到踩阔剑哦。”',
			9 => '“果然又被杀掉了啊，高速脱离战场。”',
			10 => '“我实在不知道为什么反击还得有概率……”',
			11 => '“爆系的射程是很蛋疼的啊……”',
			12 => '“那、那个……就这么说吧！冴冴我喜欢你呀！（闭眼按按钮）”',
			13 => '“又杀人了啊，下次再来吧。”',
			'color' => 'yellow'
		)
	),
	6 => Array(
		'Acg_Xilin' => Array(
			0 => '“就凭你也想偷走我重要的东西？我不允许。你去死罢。”',
			1 => '“叽叽咕咕（听不懂的自言自语）”',
			2 => '“为了我的收藏我不会善罢甘休！”',
			3 => '“快看我美丽的收藏品……这样的宝贝，怎么能白送给你！？”',
			4 => '“我跟强盗势不两立！”',
			5 => '“你这样的攻击，没关系么？没关系，没问题。”',
			6 => '“哈哈哈哈，你根本不能让我满足！”',
			7 => '“我诅咒你，妄图打砸抢烧的败类！”',
			8 => '“嘎啊！——（听不懂的嚎叫声）”',
			9 => '“不……不准拿走……快还给我……还给……我……”',
			10 => '“运气真差……运气真差……”',
			11 => '“竟打不到……竟打不到……”',
			12 => 'Acg_Xilin露出了古怪的笑容：“尝尝我的奥义吧，这可是我精心收藏的魔法哟！”',
			13 => '“忘记历史就意味着背叛，背叛就意味着……死亡。”',
			'color' => 'yellow'
		)
	),
	7 => Array(
		'电击使 御坂 美琴' => Array(
			0 => '“擅自侵入禁区的你，应该对自己的下场有所觉悟了吧？”',
			1 => '“只要杀死了你，净化网络的计划就离成功更近一步了吧！”',
			2 => '“知道电磁炮吗？接下这一招，然后死去吧！”',
			3 => '“你的能力竟然这么强吗……看来我必须使出全力了！”',
			4 => '“你这样的随意践踏别人的梦想的人……最差劲了！”',
			5 => '“我可是LEVEL 5的超能力者！普通人的攻击怎么会对我起作用？”',
			6 => '“我还以为入侵禁区的会是什么样的强者……竟然只有你这点实力吗？”',
			7 => '“我才不会因为这样的攻击而倒下！”',
			8 => '“我也有我的立场啊！”',
			9 => '“力尽了……我还……不够强大啊……”',
			10 => '“没预料到这种情况……”',
			11 => '“电磁炮50米的射程竟然不够……”',
			12 => '御坂 美琴周身被蓝色电光层层笼罩：“别以为我的能力只能击飞硬币！”',
			13 => '“所以说，你这样的人最差劲了。”',
			'color' => 'clan'
		),
		'班主任 坂持 金发' => Array(
			0 => '“这个世界没有项圈，那只好由老师我亲手实施惩罚了。”',
			1 => '“现在的年轻人都蔑视成年人，应该煞一煞他们的威风。”',
			2 => '“对蔑视法律的学生就应该先发制人。”',
			3 => '“有两下子，但是你不可能次次都那么走运。”',
			4 => '“老师也有老师的苦衷啊……好好地死去吧。”',
			5 => '“你还很精神嘛，这样的势头很好，继续努力吧。”',
			6 => '“想违抗BR法可不是那么容易的。”',
			7 => '“我好像受了很重的伤呢。”',
			8 => '“我也变成无能的成年人了啊。”',
			9 => '“记住吧：如果你憎恨一个人，便要为此付出代价。”',
			10 => '“这样的情况，暂时撤退吧。”',
			11 => '“距离太远了，暂时撤退吧。”',
			12 => '坂持 金发举枪瞄准：“虽然老师干预游戏是违反规则的……”',
			13 => '“记住这个吧，人生是游戏。”',
			'color' => 'yellow'
		),
		'花之领主 风见 幽香' => Array(
			0 => '“于是，还真有胆敢闯进禁区的人啊，我就奉陪到底吧。”',
			1 => '“把妖力当做伪科学而轻视那就太可笑了。”',
			2 => '“我与你之间究竟谁最强呢，就来分个胜负吧。”',
			3 => '“可不要以为我的能力只是让花朵开放那种程度的哦？”',
			4 => '“竟然能逼我使出全力，真是愉快的战斗啊。”',
			5 => '“这种程度的力量，还不够跟我过招呢。”',
			6 => '“这样的伤痛对于妖怪来说根本不算什么呢。”',
			7 => '“杂草大概是最适合你的植物吧？”',
			8 => '“轮到我反击了呢，我会把你的攻击加倍还给你的哦？”',
			9 => '“输掉了啊，不过下次死的就是你了哦！”',
			10 => '“不妙啊，轻敌了，总之先撤退吧。”',
			11 => '“弹幕射程不够啊，总之先撤退吧。”',
			12 => '风见 幽香张开阳伞做出了一个潇洒的转身：“也许你还没见识过魔炮的力量吧？”',
			13 => '“我还没满足呢，可别就这样轻易地死掉了哦。”',
			'color' => 'lime'
		)
	),
	9 => Array(
	'蓝凝' => Array(
			0 => '“TARGET DETECTED，Commencing FIRST STRIKE。”',
			1 => '“TARGET CONFIRMED，MISSION START。”',
			2 => '“Set, ATTACK STANCE。”',
			3 => '“OPPONENT LEVEL C VERIFIED, begin COUNTER ATTACK。”',
			4 => '“OPPENENT LEVEL B VERIFIED, begin RUNE RELEASE。”',
			5 => '“……too slow。”',
			6 => '“……too weak。”',
			7 => '“……RELOADING RUNES。”',
			8 => '“Set，COUNTER STANCE。”',
			9 => '“Mission in jeopardy, Begin ALT_ROUTINE。”',
			10 => '“……Switching target。”',
			11 => '“……target OUT OF RANGE。”',
			12 => '“……………………………………”',
			13 => '“No Remorse。”',
			'color' => 'clan'
		)
	),
	10 => Array(
		
	),
	12 => Array(
		'Dark Force幼体' => Array(
			0 => '“这么快就过来了么？！”',
			1 => '“……？”',
			2 => '“……！”',
			3 => '“……让开。”',
			4 => '“……”',
			5 => '“唔嗯……”',
			6 => '“…………”',
			7 => '“…………！！”',
			8 => '“回避……！”',
			9 => '“我………！”',
			10 => '“预测失败！？”',
			11 => '“……看我不舒服么？”',
			12 => '“……能成功吧……？”',
			13 => '“虽然情感上很对不起，但这是必要的牺牲。”',
			'color' => 'linen'
		),
		'Dark Force' => Array(
			0 => '“你所作的一切都要被偿还。”',
			1 => '“欲望带来破灭。”',
			2 => '“无视你的欲望就不会死你难道还不明白？！”',
			3 => '“开始反击。”',
			4 => '“让你看看我真正的力量！”',
			5 => '“这就是人类的力量么？”',
			6 => '“干的不错啊你。”',
			7 => '“让我看看你的能力吧！”',
			8 => '“无论是这个时空还是另外一个，人类都是一样的生物。”',
			9 => '“请记住，我是由人类的欲望而生的存在，只要人类存在，我也一样会。<br>我们还会再见的，勇敢的人。”',
			10 => '“你打过来了么？”',
			11 => '“武器的射程，还不够吗？”',
			12 => '“……这样设定的话，应该能成功吧……？”',
			13 => '“反对巴特利安的力量都要被毁灭。”',
			'color' => 'linen'
		)
	),
	21 => Array(
		'虚子' => Array(
			0 => '“没人理我了吗？我被无视了吗？”',//meet
			1 => '“原谅我砍人！但是不砍的话,我就不是人了! ”',//attackfine
			2 => '“原谅我用了“寻星者”这把武器，不是源自我们游戏的武器，但现在斩系砍人离不开这把武器！”',
			3 => '“既想说自己是沙包，又在做不是沙包该做的事！这样的事实，又一次说明这些神触们的无药可救！”',
			4 => '“你还能有正常人的意识吗？明知前面是悬崖也要跳！无知！无聊！”',
			5 => '“哈哈！玩家！你牛！但我更牛!  ”',//defendfine
			6 => '“你不懂的话，就不是中国人！”',
			7 => '“这样的伤害还有存在的意义！”',//defendhurt
			8 => '“你们啊！能清醒点儿吗？”',
			9 => '“你做完后，你的心理得到什么样的满足感，你自己清楚！”',//retreat
			10 => '“哎！现在就算听《蜀绣》，我的心情也好不起来！”',//can't counterattack
			11 => '“留下可怜的我独自哀伤，有人同情却无人理解！哎！”',//out of range
			12 => '“水月这个id，老是拿什么必杀技说事，其实是什么都搞不清楚，还一直说！”',//critical
			13 => '“已经被砍死了！大快人心啊！”',
			'color' => 'linen'
			),
		'水月' => Array(
//		    0 => '“Love your neighbor as yourself.”',//meet
//			1 => '“作恶的，必被剪除!”',//attackfine
//			2 => '“愚昧人若静默不言，也可算为智慧。闭口不说，也可算为聪明。”',
//			3 => '“……”',
//			4 => '“……”',
//			5 => '“宽恕人的过失，便是自己的荣耀！”',//defendfine
//			6 => '“……北斗要讲毛笑话……”',
//			7 => '“……唔”',//defendhurt
//			8 => '“……”',
//			9 => '“……”',//retreat
//			10 => '“……”',//can't counterattack
//			11 => '“……Avoid godless chatter……”',//out of range
//			12 => '“野驴有草岂能叫唤，牛有料，岂能吼叫？！”',//critical
//			13 => '“……JOB 38:11”',
		  0 => '“【MEET】”',//meet
			1 => '“【ATTACK_FINE】”',//attackfine
			2 => '“【TAUNT_1】”',
			3 => '“【TAUNT_2】”',
			4 => '“【TAUNT_3】”',
			5 => '“【DEFEND_FINE】”',//defendfine
			6 => '“【TAUNT_4】”',
			7 => '“【DEFEND_HURT】”',//defendhurt
			8 => '“【TAUNT_5】”',
			9 => '“【RETREAT】”',//retreat
			10 => '“【NO_COUNTER】”',//can't counterattack
			11 => '“【OUT_OF_RANGE_COUNTER】”',//out of range
			12 => '“【CRITICAL_COUNTER】”',//critical
			13 => '“【DEAD】”',			
			'color' => 'clan'
			),
		'北京推倒你' => Array(
		    0 => '“虽然我自称是<span class="blue">历史的眼泪</span>。但很可惜，历史这东西是不相信眼泪的。”',//meet
			1 => '“所谓<span class="red">铁拳无敌</span>，那么就一定是用拳头来证明一切的。”',//attackfine
			2 => '“力道不错，那么该我的反击了！”',
			3 => '“不错啊，也许我也应该重新审视审视你了。”',
			4 => '“很久没有遇到过你这种强力的人物了。”',
			5 => '“离开这里吧，这里不是你这种弱者应该呆的地方。”',//defendfine
			6 => '“离开这里吧，你这种弱者只有再去进行训练才能伤害到我啊。”',
			7 => '“很强，很强啊！”',//defendhurt
			8 => '“唔.....看起来身体有些力不从心了呢。”',
			9 => '“看起来快结束了呢。小心不要一时疏忽领便当了哦。”',//retreat
			10 => '“闪避能力很高啊，但是下一招你还能闪过去吗？”',//can't counterattack
			11 => '“用远程武器打游击战术啊！那么小心，不要让我捕捉到你的身影哦。”',//out of range
			12 => '<span class="white">不知从何而来的数据附着在面前那人的拳头上，使其发出了异样的光芒</span>，“如果说之前都是小意思的话，那么就尝试接下这招吧！”',//critical
			13 => '“弱者，就应该去弱者应该呆的地方。”',
			'color' => 'clan'
		)
	),
	13 => Array(
		'卡玛·克莱因' => Array(
			0 => '“幸会，勇敢的挑战者。我是循环的使者卡玛。”',
			1 => '“我的回合。”',
			2 => '“携带备用武器是我的原则。”',
			3 => '“你们管这个叫什么来着？快枪手？”',
			4 => '“你们管这个叫什么来着？二刀流？”',
			5 => '“你们管这个叫什么来着？武器炼金术士？”',
			6 => '“你们管这个叫什么来着？秒间十割……什么来的？”',
			7 => '“武器不好用啊，看来得换把更称手的。”',
			8 => '“依然受伤了？这批人似乎还不赖。”',
			9 => '“干得不错！在新的世界里再会吧，勇敢的挑战者。”',
			10 => '“换武器的时间还需要缩短。”',
			11 => '“用远程武器？懦弱。”',
			12 => '“破绽百出啊！你真的打算认真打么？”',
			13 => '“呵……想要与我们一较高下，你还有得练呢。”',
			'color' => 'yellow'
		),
		'库特' => Array(
			0 => '“哇呼，被发现了吗！？”',
			1 => '“瞄准旁边攻击的话，不会致死的吧……？”',
			2 => '“为了试验，我必须加油了！”',
			3 => '“随便攻击别人是不对的！”',
			4 => '“就算是斯特勒鲁卡，这个时候也会bite a man的！”',
			5 => '“已经满身疮痍了，怎么样才能结束呢……”',
			6 => '“这样下去会出事的啊，快住手吧！”',
			7 => '“好疼好疼，出手太重了啦！”',
			8 => '“就算是试验，也太乱来了……”',
			9 => '“我……我还不能死在这里……还有人在等着我……！”',
			10 => '“哇呼——这就attack过来了啊！？”',
			11 => '“武器的射程，还不够吗？”',
			12 => '“……这样设定的话，应该能成功吧……？”',
			13 => '“这是我必须做的事，给您添麻烦了……”',
			'color' => 'linen'
		),
		'莱卡' => Array(
			0 => '“我似乎沉浸在过去的回忆和相似的人的眷恋里了呢。”',
			1 => '“人类总是在自相残杀……你觉得呢？”',
			2 => '“以前那个不愿意开枪的小女孩，早已被暴徒杀死了。”',
			3 => '“You are a good rival. Counterattack.”',
			4 => '“就没思考过，这种冤冤相报的循环，会导致自灭么？”',
			5 => '“曾经……我也像你一样，有着单纯而快乐的生活。”',
			6 => '“可惜有一天，残酷的命运碾碎了我，就像巨大的机器碾碎变形的齿轮一样。”',
			7 => '“当我再次醒来的时候，属于我的世界已经不存在了。”',
			8 => '“那种踽踽独行的滋味，像你这样的人，难道能理解么！？”',
			9 => '“Dangerous Situation...Retreat.”',
			10 => '“突然袭击呢，很快我们会再会的。”',
			11 => '“射程不足？……怎么会发生这种事？”',
			12 => '莱卡的身后，展开了蝙蝠状的翅膀！<br>“就让你，被牢牢锁死在这濒死的幻想世界里吧，一直到世界崩坏的那一刻……”',
			13 => '“无论是这个世界，还是那个世界，都把你永久放逐了呢。”',
			'color' => 'linen'
		)
	)
);
$iteminfo = Array(//注意顺序，AB必须在A的前面，以此类推
	'Ag' => '同志饰物',
	'Al' => '热恋饰物',
	'A'  => '饰物',
	'B' => '电池',
	'C' => '药剂',
	'DN' => '内衣',#内衣
	'DB' => '身体装备',
	'DH' => '头部装备',
	'DA' => '手臂装备',
	'DF' => '腿部装备',
	'EE' => '电脑设备',
	'EW' => '天气控制',
	'ER' => '探测仪器',
	'HH' => '生命恢复',
	'HS' => '体力恢复',
	'HB' => '命体恢复',
	'HM' => '歌魂增加',
	'HT' => '歌魂恢复',
	'GBr' => '机枪弹药',
	'GBi' => '气体弹药',
	'GBh' => '重型弹药',
	'GBe' => '能源弹药',
	'GB' => '手枪弹药',	
	'M'=> '强化药物',
	'N' => '无',	
	'PM' => '歌魂增加',
	'PT' => '歌魂恢复',
	'PH' => '生命恢复',
	'PS' => '体力恢复',
	'PB' => '命体恢复',
	'p' => '礼物',
	'ygo' => '卡包',
	//'R' => '探测仪器',	
	'ss' => '歌词卡片',
	'T' => '陷阱',
	'V'=> '技能书籍',
	'WN' => '空手',#空手
	'WGK' => '枪刃',
	'WCF' => '灵弹',
	'WFK' => '烈刃',
	'WKP' => '暴斩',
	'WCP' => '巨力',
	'WDG' => '重炮',
	'WJ' => '重型枪械',
	'WP' => '钝器',
	'WG' => '远程兵器',
	'WK' => '锐器',
	'WC' => '投掷兵器',
	'WD' => '爆炸物',
	'WF' => '灵力兵器',	
	'WQ' =>'？？？？',
	'X'=> '合成专用',
	'Y' => '特殊',
	'Z' => '特殊',#不可合并
	);
$itemspkinfo = Array(
	'A' => '全系防御',
	'a' => '属性防御',
	'B' => '伤害抹消',
	'b' => '属性抹消',
	'C' => '防投',
	'c' => '重击辅助',
	'D' => '防爆',
	'd' => '爆炸',
	'E' => '绝缘',
	'e' => '电击',	
	'F' => '防符',
	'f' => '灼焰',
	'G' => '防弹',
	'g' => '同志',
	'H' => 'HP制御',
	'h' => '伤害制御',//废弃
	'I' => '防冻',
	'i' => '冻气',
	'J' => '超量素材', //中国玩家没素质
	'j' => '多重',
	'K' => '防斩',
	'k' => '冰华',
	'l' => '热恋',
	'M' => '陷阱探测',
	'm' => '陷阱迎击',
	'N' => '冲击',
	'n' => '贯穿',
	'o' => '一发',
	'P' => '防殴',
	'p' => '带毒',
	'q' => '防毒',
	'r' => '连击',
	'S' => '消音',
	's' => '调整',
	'U' => '防火',
	'u' => '火焰',
	'W' => '隔音',
	'w' => '音波',
	'x' => '奇迹',
	'Z' => '菁英',
	'z' => '天然',
	);
$shops = Array(0,14,27);
$hospitals = Array(11,19,32);
$plsinfo = Array(
	0=>'无月之影',
	1=>'端点',
	2=>'RF高校',
	3=>'雪之镇',
	4=>'索拉利斯',
	5=>'指挥中心',
	6=>'梦幻馆',
	7=>'清水池',
	8=>'白穗神社',
	9=>'墓地',
	10=>'麦斯克林',
	11=>'对天使用作战本部',
	12=>'夏之镇',
	13=>'三体星',
	14=>'光坂高校',
	15=>'守矢神社',
	16=>'常磐森林',
	17=>'常磐台中学',
	18=>'秋之镇',
	19=>'精灵中心',
	20=>'春之镇',
	21=>'圣Gradius学园',
	22=>'初始之树',
	23=>'幻想世界',
	24=>'永恒的世界',
	25=>'妖精驿站',
	26=>'冰封墓场',
	27=>'花菱商厦',
	28=>'FARGO前基地',
	29=>'风祭森林',
	30=>'天使队移动格纳库',
	31=>'和田町研究所',
	32=>'SCP研究设施',
	33=>'雏菊之丘',
	34=>'英灵殿'
);
$xyinfo = Array(
	0=>'B-2',
	1=>'A-6',
	2=>'H-3',
	3=>'B-6',
	4=>'F-10',
	5=>'D-6',
	6=>'H-6',
	7=>'F-3',
	8=>'E-10',
	9=>'J-4',
	10=>'I-8',
	11=>'D-8',
	12=>'F-9',
	13=>'H-4',
	14=>'H-8',
	15=>'G-1',
	16=>'I-2',
	17=>'A-5',
	18=>'G-4',
	19=>'D-4',
	20=>'I-7',
	21=>'F-7',
	22=>'J-6',
	23=>'A-8',
	24=>'C-9',
	25=>'D-2',
	26=>'A-1',
	27=>'F-8',
	28=>'E-1',
	29=>'F-5',
	30=>'F-6',
	31=>'J-1',
	32=>'J-2',
	33=>'F-4',
	34=>'J-10',
);
$areainfo = Array
	(
	0=>"充满了灵力的永久禁区，也是整个战场的入口。<br>逗留在这里也许会被时空吞噬……<br><span class=\"yellow\">买完东西就快点离开吧。</span><br>",
	1=>"蓝白色的大地上仿佛有种令人心悸的波动在回荡。<br>还是快离开吧。<br>",
	2=>"这是一所位于郊区的高校。<br>之前毕业旅行的学生似乎遇到了惨烈的交通事故，幸存的学生们大概接受心理疏导去了吧。<br>",
	3=>"飘着雪花的北国小镇，俄罗斯风格的建筑使人愈发感到寒冷。<br>",
	4=>"柔软的大地不断变化，在人眼前生长成巨大而诡异的形状，然后在海水的冲刷下四散崩溃。<br>这究竟是什么地方？<br>",
	5=>"海风的腥味表明这幢建筑似乎是从某个岛屿上移动过来的。<br><span class=\"yellow\">自动防御系统还在忠实地工作着，看来需要随时保持警惕。</span><br>",
	6=>"建筑里外都充满了向日葵的香味，然而四处散布的妖怪气息依然让人不寒而栗。<br><span class=\"yellow\">自动防御系统还在忠实地工作着，看来需要随时保持警惕。</span><br>",
	7=>"各种各样的雕像环绕着一个欧式的大水池。<br>池水十分清澈，也许可以直接饮用。<br>",
	8=>"神社空无一人。<br>但是，在这里仰望天空的话，总觉得会被某种忧伤的思绪所感染。<br>",
	9=>"这里埋葬着很多被当做祭品杀死的怪兽。<br>不知道是怎样奇怪的召唤仪式呢……<br>",
	10=>"一踏入这里，身躯就觉得沉重，而且气压也好像陡然增加了许多。<br>大概是个不宜久留的地方。<br>",
	11=>"充满了各种夸张的陷阱的房间，似乎是某所高校的校长室。<br><span class=\"yellow\">在这里，似乎不管受到怎样的伤害也会很快回复。</span><br>",
	12=>"洒满了阳光的靠海的村庄，青色的天空吸引人久久凝望、不能罢怀。<br>",
	13=>"这里连时令都错乱了么？<br>不仅昼夜错乱、忽冷忽热，有时甚至有两三个太阳同时升起……<br>",
	14=>"长长的坂道的尽头是一所学校。<BR>学校规模不小，但总给人寂寥无人之感。<br><span class=\"yellow\">从校内的自动售货机似乎能买到些什么。</span><br>",
	15=>"高大的御柱环绕在山中湖泊周围。尽管景色美丽，却找不见本应在此的巫女。<br>",
	16=>"浓郁的树叶遮住了阳光，是容易被袭击的地方啊……<br>林间不时还有奇怪的生物出没……<br>听说这附近每隔十年都会有超能力者诞生。<br>",
	17=>"不同于现世的先进设备兀自运转着，令人觉得是不是来到了某个技术先进的域外之城。<br><span class=\"yellow\">自动防御系统还在忠实地工作着，看来需要随时保持警惕。</span><br>",
	18=>"与其他住宅区相比，这里的商店特别多。<BR>虽然如此，整个城市弥漫着一种莫名的悲伤的气氛……<br>",
	19=>"巨大的建筑物内，不知名的设备依然在运转。<br>根据残缺不全的说明，<span class=\"yellow\">也许这些机器可以为人治疗伤口和恢复精力？</span><br>",
	20=>"尽管处于春季，也无法掩饰衰败的萧条小镇。<br>逗留在这里总使人感到命运无情……<br>",
	21=>"表面上看去像是标准的贵族女校，<br>有着与学校不相称的停机坪和地下仓库。<br>",
	22=>"在绿地上孤零零矗立的大树，像是一座纪念碑。<BR>这到底意味着什么呢？<br>",
	23=>"被白雪笼罩，一片荒芜的空间……<BR>时空错乱了吗？为什么我会在这里？<br>",
	24=>"诡异的地方……脚下已经看不见什么地面了……<BR>这个地方究竟是什么？<br>",
	25=>"一间孤独的小屋子。<br>貌似没有人住在这里了。<br>门上贴着告示：<br>TRAIN WITH MY HOLOGRAM IF YOU WANT TO --- GA-04<br>",
	26=>"代表火与血的牺牲的曾经的战场。<BR>现在被未明的力量全部冰封，不过看起来地上的武器还勉强能用……<br><span class=\"yellow\">你感觉到一股苍凉的杀气！还是快逃跑吧！</span><br>",
	27=>"荒废的都市里，顶层有着天象馆的废弃商场。<BR>虽然大部分区域都停电了，<span class=\"yellow\">角落里的自动售货机似乎还能运行。</span><br>",
	28=>"现在已经是一团废墟的遗迹。<BR>可能能找到有用的物品也说不定。<br>",
	29=>"传说有神秘力量的森林。<BR>谁知道这个地方会出现什么。<br>",
	30=>"在远处看这个建筑你还以为那是一个集装箱，<BR>走进去以后才发现这里别有洞天。<br>庞大的电脑系统正在忠实地工作着。<br>",
	31=>"最近突然在地平线远端出现的大型建筑，<BR>你注意到建筑的后院时空裂缝之外貌似还有一个小镇……<br>",
	32=>"最近突然在地平线远端出现的第二座大型建筑，<BR>感觉有种不祥的气息……<br>",
	33=>"风祭森林的最深处。<BR>被盛开的雏菊花覆盖着的山丘。<BR>山丘上貌似有个身影坐着，<BR>还是离她远一点为妙。<BR>",
	34=>"总而言之这里就是英灵殿了。<BR>",
);

$dinfo = Array(
	10 => '不知道什么原因，你死去了。<br>这应该是一个BUG，请通知管理员。<br>',
	11 => '“滴滴滴——”<br>这是……手机闹铃的提示音？<br>“糟糕！还没确认这次的禁区情况——”<br>还没等你有所反应，死神一般的空间裂缝已经把你吞没了。<br>等待你的只有死亡……<br>',
	12 => '“呜……到此为止了吗……”<br>毒素造成的痛苦让你无法再坚持下去了。<br>你吐出嘴里最后一点深黑的血液，仰面倒了下去。<br>',
	13 => '“不好！”<br>也许在平时的你看来，这只是小菜一碟……<br>但对于此刻遍体鳞伤的你来说，<br>眼前的突发状况无异于压垮骆驼的最后一根稻草。<br>你不甘心地倒下了，再也没有起来。<br>',
	14 => '“也许咱应该断定你上网成瘾？”<br>这是……林无月的声音！<br>从哪里传来的？<br>她怎么会知道我试图入侵虚拟世界的控制系统？<br>还没等你反应过来，你就两眼一黑，什么都不知道了。<br>',
	15 => '“我很抱歉，不过这是林无月的意思。”<br>面前突然出现的，是一个陌生男子。<br>这人说些什么怪话呢？<br>你正要上前问个究竟，只见男子手中白光一闪，你的意识就此烟消云散。<br>',
	16 => '“我很抱歉，不过这是林无月的意思。”<br>面前突然出现的，是一个陌生男子。<br>这人说些什么怪话呢？<br>你正要上前问个究竟，只见男子手中白光一闪，你的意识就此烟消云散。<br>',
	17 => '“呜……到此为止了吗……”<br>身体已被冰雹砸得千疮百孔，伤痛让你无法再坚持下去了。<br>你脚下一软，向前栽倒，失去了意识。<br>',
	18 => '“呜……到此为止了吗……”<br>烧伤导致的伤痛让你无法再坚持下去了。<br>你脚下一软，向前栽倒，失去了意识。<br>',
	20 => '一切……都结束了吧……<br>你无力地倒在地上，<br>眼睁睁地看着血液从致命的伤口喷涌而出。<br>一个挥舞双拳的身影，在你失神的瞳孔中逐渐淡去……<br>',
	21 => '一切……都结束了吧……<br>你无力地倒在地上，<br>眼睁睁地看着血液从致命的伤口喷涌而出。<br>一个紧握钝器的身影，在你失神的瞳孔中逐渐淡去……<br>',
	22 => '一切……都结束了吧……<br>你无力地倒在地上，<br>眼睁睁地看着血液从致命的伤口喷涌而出。<br>一个腰佩刀剑的身影，在你失神的瞳孔中逐渐淡去……<br>',
	23 => '一切……都结束了吧……<br>你无力地倒在地上，<br>眼睁睁地看着血液从致命的伤口喷涌而出。<br>一个扛着枪械的身影，在你失神的瞳孔中逐渐淡去……<br>',
	24 => '一切……都结束了吧……<br>你无力地倒在地上，<br>眼睁睁地看着血液从致命的伤口喷涌而出。<br>一个手持投掷武器的身影，在你失神的瞳孔中逐渐淡去……<br>',
	25 => '一切……都结束了吧……<br>你无力地倒在地上，<br>眼睁睁地看着血液从致命的伤口喷涌而出。<br>一个手持爆炸物的身影，在你失神的瞳孔中逐渐淡去……<br>',
	26 => '“这味道……不对！”<br>饥渴难耐的你才咬了一口手中的补给品，就觉得不对劲。<br>然而，你发现得太晚了……<br>剧毒在几秒钟之内就夺去了你的生命。<br>',
	27 => '“什么！这里竟然……”<br>没能留意到陷阱的你，只能眼睁睁看着轰然启动的陷阱无情地撕碎你的身躯。<br>“啊啊……这是……哪个混蛋……”<br>你的双眼被鲜血永远地掩盖了。<br>',
	28 => '你被很奇怪的事情夺去了生命。<br>也许这跟一个名叫夜什么月的人有一星半点的关系。<br>具体情况请参见游戏状况。<br>',
	29 => '一切……都结束了吧……<br>你无力地倒在地上，<br>眼睁睁地看着血液从致命的伤口喷涌而出。<br>一个攥着符札的身影，在你失神的瞳孔中逐渐淡去……<br>',
	30 => '好奇心果然杀死猫啊……<br>你勉强支起破碎的身躯，<br>看着那个你刚才按下的带按钮的小盒子无奈地笑着。<br>这真是残酷的恶作剧啊。<br>你的意识逐渐模糊了……<br>',
	31 => '注射器里的药液才打进一半，你就觉得身体有异样。<br>“脖子……好痒……”<br>你疯狂地抠着脖子上的淋巴腺，<br>很快就倒在动脉破裂而流出的血泊中……<br>',
	32 => '“就躲在这里，让那些人自相残杀去吧。”<br>你正打着自己的小算盘，却被一声怒喝打断了。<br>“来人，这里有个挂机党！”<br>你惊愕地看着不知从哪里冒出来的玩家们把你团团围住。<br>“浪费时间，快去死吧！”<br>之后的事情，就太猎奇了……<br>',
	33 => '“对不起、对不起！能让我迫降一下吗？”<br>勉强躲过弹幕的你，忽然听到头上传来这样焦急的道歉声。<br>少女的迫降……？莫非是指……<br>少女娇柔的话音让你放松了警惕。<br>还没等你反应过来，少女——以及她乘坐的、几十吨重的机体——便把你的整个世界压得粉碎……<br>',
	34 => '将手中的溶剂一饮而尽之后，你感到全身就像燃烧起来一样。<br>“没错，我需要的就是这种力量！”<br>然而，当你看到自己像奶油般融化了的手掌在地上扑腾的时候，你才发现这场豪赌押错了边。<br>“那么，你就燃烧殆尽吧。”在意识崩解前，传来了一个女声的叹息。<br>',
	35 => '在你失去意识之前，你仿佛听到了一个冰冷的声音。<br>“像你这样的Homo-Speculator……”<br>“……真是最差劲的个体了”<br>然后，你看着你的身体和意识在一道圣光中溶解了。<br>',
	36 => '你徒劳地想挣脱丝带的束缚，<br>但是从丝带上传来的巨大压力，简简单单地将你一分两半。<br>真是杂鱼一样的死法……<br>',
	37 => '你徒劳地想躲避丝带，<br>但是说时迟那时快，你发现你的头正在骨碌碌地往山脚下滚去。<br>真是杂鱼一样的死法……<br>',
	38 => '你成功地躲避了丝带，<br>没想到从丝带中竟然喷出了岩浆！<br>你的意识在烈火中消失了。<br>'
);

/*Infomations*/
$_INFO = Array(
	'reg_success' => '注册成功！请返回首页登陆游戏。',
	'pass_success' => '修改密码成功。',
	'pass_failure' => '未修改密码。',
	'data_success' => '接受对帐户资料的修改。',
	'data_failure' => '未修改帐户资料。'
);

/*Error settings*/
$_ERROR = Array(
	'db_failure' => '数据库读写异常，请重试或通知管理员',
	'name_not_set' => '用户名不能为空，请检查用户名输入',
	'name_too_long' => '用户名过长，请检查用户名输入',
	'name_invalid' => '用户名含有非法字符，请检查用户名输入',
	'name_banned' => '用户名含有违禁用语，请检查用户名输入',
	'name_exists' => '用户名已被注册，请更换用户名',
	'pass_not_set' => '密码不能为空，请检查密码输入',
	'pass_not_match' => '两次输入的密码不一致，请检查密码输入',
	'pass_too_short' => '密码过短，请检查密码输入',
	'pass_too_long' => '密码过长，请检查密码输入',
	'ip_banned' => '此IP已被封禁，请与管理员联系',
	'logged_in' => '用户已登录，请先退出登陆再注册',
	'user_not_exists' => '用户不存在，请检查用户名输入',
	
	'no_login' => '用户未登陆，请从首页登录后再进入游戏',
	'login_check' => '用户信息验证失败，请清空缓存后进入游戏',
	'login_time' => '登录间隔时间过长，请重新登录后进入游戏',
	'login_info' => '用户信息不正确，请清空缓存和Cookie后进入游戏',
	'player_limit' => '本局游戏参加人数已达上限，无法进入，请下局再来',
	'wrong_pw' => '用户名或密码错误，请检查输入',
	'player_exist' => '角色已经存在，请不要重复激活',
	'no_start' => '游戏尚未开始，请稍后再登录',
	'valid_stop' => '本游戏已经停止激活，无法进入，请下局再来',
	'user_ban' => '此账号禁止进入游戏，请与管理员联系',
	'no_admin' => '你不是管理员，不能使用此功能',
	'ip_limit' => '本局此IP激活人数已满，请下局再来',
	'no_power' => '你的管理权限不够，不能进行此操作',
	'wrong_adcmd' => '指令错误，请重新输入',
	//'invalid_name' => '用户名含有非法字符，请重新输入',
	//'banned_name' => '用户名含有违禁用语，请更改用户名',
	//'banned_ip' => '此IP已被封禁，请与管理员联系',
	//'long_name' => '用户名过长，请重新输入用户名'
);

?>