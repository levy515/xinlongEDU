<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <title>Title</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="/Public/Home/css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="/Public/Home/css/slider.css" rel="stylesheet" type="text/css" media="all"/>
    <script type="text/javascript" src="/Public/Home/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="/Public/Home/js/move-top.js"></script>
    <script type="text/javascript" src="/Public/Home/js/easing.js"></script>
    <script type="text/javascript" src="/Public/Home/js/startstop-slider.js"></script>

    <link href="/Public/Home/css/login.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="/Public/Home/css/register.css" rel="stylesheet" type="text/css" media="all"/>

    <link href="/Public/Home/css/brands.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="/Public/Home/css/comman.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="/Public/Home/css/w1210.css" rel="stylesheet" type="text/css" media="all"/>
    <script type="text/javascript" src="/Public/Home/js/class-js.js"></script>
    <script type="text/javascript" src="/Public/Home/js/jquery-class-js.min.js"></script>

    <script type="text/javascript" src="/Public/Home/js/home.js"></script>

    <link href="/Public/Home/css/allclass.css" rel="stylesheet" type="text/css" media="all"/>
    <script type="text/javascript" src="/Public/Home/js/jquery.page.js"></script>

</head>
</html>


<script type="text/javascript">
    $(document).ready(function() {
        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<a href="#" id="toTop"><span id="toTopHover"> </span></a>
<div class="wrap">
    <div class="header">
        <div class="headertop_desc">
            <div class="call">
                <p><span>热线电话：</span> call us <span class="number">000-88888888</span></span></p>
            </div>
            <div class="account_desc">
                <ul>
                    <li><a href="Home/Index/register">注册</a></li>
                    <li><a href="Home/Index/login">登录</a></li>
                    <li><a href="#">收藏</a></li>
                    <li><a href="#">会员中心</a></li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
        <div class="header_top">
            <div class="logo">
                <a href="index.html"><img src="/Public/Home/images/logo.png" alt="" /></a>
            </div>
            <div class="cart">
                <p>购物车：<div id="dd" class="wrapper-dropdown-2"> 0
                <ul class="dropdown">
                    <li>请选择商品加入购物车！</li>
                </ul></div></p>
            </div>
            <script type="text/javascript">
                function DropDown(el) {
                    this.dd = el;
                    this.initEvents();
                }
                DropDown.prototype = {
                    initEvents : function() {
                        var obj = this;

                        obj.dd.on('click', function(event){
                            $(this).toggleClass('active');
                            event.stopPropagation();
                        });
                    }
                }

                $(function() {

                    var dd = new DropDown( $('#dd') );

                    $(document).click(function() {
                        // all dropdowns
                        $('.wrapper-dropdown-2').removeClass('active');
                    });

                });

            </script>
            <div class="clear"></div>
        </div>
        <div class="header_bottom">
            <div class="menu">
                <ul>
                    <li><a href="<?php echo U('Home/Index/Index');?>">首页</a></li>
                    <li><a href="<?php echo U('Home/Allclass/Allclass');?>">课程分类</a></li>
                    <li><a href="<?php echo U('Home/News/News');?>">教育资讯</a></li>
                    <li><a href="<?php echo U('Home/News/News');?>">关于我们</a></li>
                    <div class="clear"></div>
                </ul>
            </div>
            <div class="search_box">
                <form>
                    <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
                </form>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>




<div class="wrap">
    <div class="header_slide">

        <div class="brands">
            <div class="br-nav">
                <div class="mt">
                    <h2>全部课程分类</h2>
                    <h3>中小幼教育</h3>
                </div>
                <div class="mc">
                    <div class="item">
                        <a class="lab" href="#">婴儿期</a>
                        <a class="ch" href="#">0～1岁</a>
                        <div class="item-down">
                            <ul>
                                <li><a href="#">成长</a></li>
                                <li><a href="#">语言</a></li>
                                <li><a href="#">表情</a></li>
                                <li><a href="#">声音</a></li>
                                <li><a href="#">图像</a></li>
                                <li><a href="#">动作</a></li>
                                <li><a href="#">食物</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <a class="lab" href="#">幼儿期</a>
                        <a class="ch"  href="#">1～3岁</a>
                        <div class="item-down">
                            <ul>
                                <li><a href="#">语言</a></li>
                                <li><a href="#">动作</a></li>
                                <li><a href="#">礼仪</a></li>
                                <li><a href="#">表情</a></li>
                                <li><a href="#">声音</a></li>
                                <li><a href="#">图像</a></li>
                                <li><a href="#">食物</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <a class="lab" href="#">学龄前期</a>
                        <a class="ch" href="#">3～6岁</a>
                        <div class="item-down">
                            <ul>
                                <li><a href="#">语言</a></li>
                                <li><a href="#">手工</a></li>
                                <li><a href="#">动作</a></li>
                                <li><a href="#">礼仪</a></li>
                                <li><a href="#">表情</a></li>
                                <li><a href="#">声音</a></li>
                                <li><a href="#">图像</a></li>
                                <li><a href="#">食物</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <a class="lab" href="#">小学</a>
                        <a class="ch" href="#">6～12岁</a>
                        <div class="item-down">
                            <ul>
                                <li><a href="#">课程</a></li>
                                <li><a href="#">手工</a></li>
                                <li><a href="#">运动</a></li>
                                <li><a href="#">礼仪</a></li>
                                <li><a href="#">声音</a></li>
                                <li><a href="#">影像</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <a class="lab" href="#">初中</a>
                        <a class="ch" href="#">13～15岁</a>
                        <div class="item-down">
                            <ul>
                                <li><a href="#">课程</a></li>
                                <li><a href="#">手工</a></li>
                                <li><a href="#">运动</a></li>
                                <li><a href="#">礼仪</a></li>
                                <li><a href="#">声音</a></li>
                                <li><a href="#">影像</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <a class="lab" href="#">高中</a>
                        <a class="ch" href="#">16～18岁</a>
                        <div class="item-down">
                            <ul>
                                <li><a href="#">课程</a></li>
                                <li><a href="#">手工</a></li>
                                <li><a href="#">运动</a></li>
                                <li><a href="#">礼仪</a></li>
                                <li><a href="#">声音</a></li>
                                <li><a href="#">影像</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item" style="border-bottom:none; height:48px">
                        <a class="lab" href="#">VIP学习中心</a>
                        <a class="ch" href="#"></a>
                        <div class="item-down">
                            <ul>
                                <li><a href="#">学习中心</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="banner" class="banner">
            <ul>
                <li><img src="/Public/Home/images/banner-1.jpg"></li>
                <li><img src="/Public/Home/images/banner-2.jpg"></li>
                <li><img src="/Public/Home/images/banner-3.jpg"></li>
                <li><img src="/Public/Home/images/banner-4.jpg"></li>
                <li><img src="/Public/Home/images/banner-5.jpg"></li>
            </ul>
            <ol>
                <li class="current"></li>
                <li></li>
                <li></li>
                <li></li>
            </ol>
        </div>

    <div class="clear"></div>
</div>

    <div class="main">
        <div class="content">
            <div class="con-title">
                <i class="left-line"></i>
                <span>精选课程</span><small></small>
                <div class="see">
                    <p><a href="#">更多精选</a></p>
                </div>
            </div>
            <div class="section group">
                <div class="grid_1_of_4 images_1_of_4">
                    <a href="<?php echo U('Home/Products/Products');?>"><img src="/Public/Home/images/feature-pic1.jpg" alt="" /></a>
                    <h2>Lorem Ipsum is simply </h2>
                    <div class="price-details">
                        <div class="price-number">
                            <p><span class="rupees">精选课程一</span></p>
                        </div>
                        <div class="add-cart">
                            <h4><a href="<?php echo U('Home/Products/Products');?>">查看</a></h4>
                        </div>
                        <div class="clear"></div>
                    </div>

                </div>
                <div class="grid_1_of_4 images_1_of_4">
                    <a href="<?php echo U('Home/Products/Products');?>"><img src="/Public/Home/images/feature-pic2.jpg" alt="" /></a>
                    <h2>Lorem Ipsum is simply </h2>
                    <div class="price-details">
                        <div class="price-number">
                            <p><span class="rupees">精选课程二</span></p>
                        </div>
                        <div class="add-cart">
                            <h4><a href="<?php echo U('Home/Products/Products');?>">查看</a></h4>
                        </div>
                        <div class="clear"></div>
                    </div>

                </div>
                <div class="grid_1_of_4 images_1_of_4">
                    <a href="<?php echo U('Home/Products/Products');?>"><img src="/Public/Home/images/feature-pic3.jpg" alt="" /></a>
                    <h2>Lorem Ipsum is simply </h2>
                    <div class="price-details">
                        <div class="price-number">
                            <p><span class="rupees">精选课程三</span></p>
                        </div>
                        <div class="add-cart">
                            <h4><a href="<?php echo U('Home/Products/Products');?>">查看</a></h4>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="grid_1_of_4 images_1_of_4">
                    <a href="<?php echo U('Home/Products/Products');?>"><img src="/Public/Home/images/feature-pic4.jpg" alt="" /></a>
                    <h2>Lorem Ipsum is simply </h2>
                    <div class="price-details">
                        <div class="price-number">
                            <p><span class="rupees">精选课程四</span></p>
                        </div>
                        <div class="add-cart">
                            <h4><a href="<?php echo U('Home/Products/Products');?>">查看</a></h4>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>

            <div class="con-title">
                <i class="left-line"></i>
                <span>课程分类</span>
                <div class="see">
                    <p><a href="<?php echo U('Home/Allclass/Allclass');?>">更多分类</a></p>
                </div>
            </div>
            <div class="class-area">
                <div class="class-area-left">
                    <div class="class-group">
                        <div class="class-group-con">
                            <div class="class-group-title"><i class="class-icon-1"></i>婴儿期</div>
                            <ul class="class-group-sub">
                                <li><a href="/list/zaojiao/" data-bh="zaojiao" target="_blank" class="">成长</a></li>
                                <li><a href="/list/shaoeryingyu/" data-bh="shaoeryingyu" target="_blank" class="">语言</a></li>
                                <li><a href="/list/xiaochugao/" data-bh="xiaochugao" target="_blank" class="on">表情</a></li>
                                <li><a href="#" data-bh="" target="_blank" class="">声音</a></li>
                                <li><a href="/list/ykpx/" data-bh="ykpx" target="_blank" class="">图像</a></li>
                                <li><a href="#" data-bh="" target="_blank" class="">动作</a></li>
                                <li><a href="#" data-bh="" target="_blank" class="">食物</a></li>
                            </ul>
                            <ul class="class-group-sub-group" data-bh="zaojiao">
                                <li><a href="/list/03sui/" target="_blank">早教课程</a></li>
                                <li><a href="/list/youxiaoxianjie/" target="_blank">幼小衔接</a></li>
                                <li><a href="/list/mengshijiao/" target="_blank">蒙氏教育</a></li>
                                <li><a href="/list/zhilikaifa/" target="_blank">右脑/智力开发</a></li>
                                <li><a href="/list/gantong/" target="_blank">感统训练</a></li>
                                <li><a href="/list/taijiao/" target="_blank">胎教/孕育</a></li>
                                <li><a href="/list/bantuoban/" target="_blank">托管班</a></li>
                                <li><a href="/list/yingeryou/" target="_blank">婴儿游泳</a></li>
                            </ul>
                            <ul class="class-group-sub-group" data-bh="shaoeryingyu">
                                <li><a href="/list/shaoeryingyu/" target="_blank">少儿英语</a></li>
                            </ul>
                            <ul class="class-group-sub-group on" data-bh="xiaochugao">
                                <li><a href="/list/youxiaoxianjie/" target="_blank">幼小衔接</a></li>
                                <li><a href="/list/xiaoshengchu/" target="_blank">小升初</a></li>
                                <li><a href="/list/chuzhong/" target="_blank">初升高</a></li>
                                <li><a href="/list/zhongkao/" target="_blank">中考辅导</a></li>
                                <li><a href="/list/gaokao/" target="_blank">高考辅导</a></li>
                                <li><a href="/list/yishu/" target="_blank">艺考生文化课</a></li>
                                <li><a href="/list/junkao/" target="_blank">军考辅导</a></li>
                                <li><a href="/list/zizhuzhao/" target="_blank">自主招生辅导</a></li>
                            </ul>
                            <ul class="class-group-sub-group" data-bh="">
                                <li><a href="/list/koucai/" target="_blank">口才训练</a></li>
                                <li><a href="/list/yueqi/" target="_blank">乐器培训</a></li>
                                <li><a href="/list/wudaoxingti/" target="_blank">少儿舞蹈</a></li>
                                <li><a href="/list/taiquandao/" target="_blank">跆拳道培训</a></li>
                                <li><a href="/list/youyong/" target="_blank">游泳培训</a></li>
                                <li><a href="/list/lunhua/" target="_blank">轮滑培训</a></li>
                                <li><a href="/list/shaoerbiaoyan/" target="_blank">少儿表演</a></li>
                                <li><a href="/list/qilei/" target="_blank">棋牌培训</a></li>
                                <li><a href="/list/semspx/" target="_blank">少儿美术培训</a></li>
                                <li><a href="/list/qiannengkaifa/" target="_blank">潜能开发</a></li>
                                <li><a href="/list/shufameishu/" target="_blank">书法培训</a></li>
                                <li><a href="/list/jingjijianshen/" target="_blank">竞技健身</a></li>
                                <li><a href="/list/wushu/" target="_blank">武术培训</a></li>
                                <li><a href="/list/shengyue/" target="_blank">声乐/唱歌培训</a></li>
                                <li><a href="/list/xialing/" target="_blank">冬夏令营</a></li>
                                <li><a href="/list/jiqiren/" target="_blank">机器人培训</a></li>
                            </ul>
                            <ul class="class-group-sub-group" data-bh="ykpx">
                                <li><a href="/list/yishu/" target="_blank">艺考文化课</a></li>
                                <li><a href="/list/meishupeixun/" target="_blank">美术培训</a></li>
                                <li><a href="/list/biandao/" target="_blank">编导培训</a></li>
                                <li><a href="/list/boyinzhuchi/" target="_blank">播音主持</a></li>
                                <li><a href="/list/wenguan/" target="_blank">文管培训</a></li>
                                <li><a href="/list/kongcheng/" target="_blank">空乘培训</a></li>
                                <li><a href="/list/wudaoyikao/" target="_blank">艺考舞蹈</a></li>
                                <li><a href="/list/yinyue/" target="_blank">艺考音乐</a></li>
                                <li><a href="/list/biaoyan/" target="_blank">表演培训</a></li>
                                <li><a href="/list/yingshixiju/" target="_blank">影视戏剧</a></li>
                                <li><a href="/list/yingxiang/" target="_blank">摄影培训</a></li>
                                <li><a href="/list/tiyuwudao/" target="_blank">体育舞蹈</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="class-group">
                        <div class="class-group-con">
                            <div class="class-group-title"><i class="class-icon-3"></i>幼儿期</div>
                            <ul class="class-group-sub">
                                <li><a href="/list/wudaoxingti/" data-bh="wudaoxingti" target="_blank" class="on">语言</a></li>
                                <li><a href="/list/yuga/" data-bh="yuga" target="_blank" class="">动作</a></li>
                                <li><a href="#" data-bh="" target="_blank" class="">礼仪</a></li>
                                <li><a href="#" data-bh="" target="_blank" class="">表情</a></li>
                                <li><a href="#" data-bh="" target="_blank" class="">声音</a></li>
                                <li><a href="#" data-bh="" target="_blank" class="">图像</a></li>
                                <li><a href="#" data-bh="" target="_blank" class="">食物</a></li>
                            </ul>
                            <ul class="class-group-sub-group on" data-bh="wudaoxingti">
                                <li><a href="/list/jueshiwu/" target="_blank">爵士舞</a></li>
                                <li><a href="/list/DSlingwu/" target="_blank">DS领舞</a></li>
                                <li><a href="/list/jiewu/" target="_blank">街舞</a></li>
                                <li><a href="/list/baleiwu/" target="_blank">芭蕾舞</a></li>
                                <li><a href="/list/dupiwu/" target="_blank">肚皮舞</a></li>
                                <li><a href="/list/gangguanwu/" target="_blank">钢管舞</a></li>
                                <li><a href="/list/ladingwu/" target="_blank">拉丁舞</a></li>
                                <li><a href="/list/minzuwu/" target="_blank">民族舞蹈</a></li>
                            </ul>
                            <ul class="class-group-sub-group" data-bh="yuga">
                            </ul>
                            <ul class="class-group-sub-group" data-bh="">
                                <li><a href="/list/yueqi/" target="_blank">乐器培训</a></li>
                                <li><a href="/list/koucai/" target="_blank">口才训练</a></li>
                                <li><a href="/list/tuozhan/" target="_blank">拓展训练</a></li>
                                <li><a href="/list/taiquandao/" target="_blank">跆拳道培训</a></li>
                                <li><a href="/list/youyong/" target="_blank">游泳培训</a></li>
                                <li><a href="/list/jingjijianshen/" target="_blank">竞技健身</a></li>
                                <li><a href="/list/wushu/" target="_blank">武术培训</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="class-group">
                        <div class="class-group-con">
                            <div class="class-group-title"><i class="class-icon-5"></i>学龄前期</div>
                            <ul class="class-group-sub">
                                <li><a href="/list/xueli/" data-bh="xueli" target="_blank" class="on">语言</a></li>
                                <li><a href="#" data-bh="" target="_blank" class="">手工</a></li>
                                <li><a href="#" data-bh="" target="_blank" class="">动作</a></li>
                                <li><a href="#" data-bh="" target="_blank" class="">礼仪</a></li>
                                <li><a href="#" data-bh="" target="_blank" class="">表情</a></li>
                                <li><a href="#" data-bh="" target="_blank" class="">声音</a></li>
                                <li><a href="#" data-bh="" target="_blank" class="">图像</a></li>
                                <li><a href="#" data-bh="" target="_blank" class="">食物</a></li>
                            </ul>
                            <ul class="class-group-sub-group on" data-bh="xueli">
                                <li><a href="/list/chengrengaokao/" target="_blank">成人高考</a></li>
                                <li><a href="/list/yuanchengjiaoyu/" target="_blank">远程教育</a></li>
                                <li><a href="/list/zixuekaoshi/" target="_blank">自学考试</a></li>
                                <li><a href="/list/puzhuansheng/" target="_blank">专升本</a></li>
                                <li><a href="/list/yanjiusheng/" target="_blank">在职研究生</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="class-area-right">
                    <div class="class-group">
                        <div class="class-group-con">
                            <div class="class-group-title"><i class="class-icon-2"></i>小学</div>
                            <ul class="class-group-sub">
                                <li><a href="/list/kuaiji/" data-bh="kuaiji" target="_blank" class="">课程</a></li>
                                <li><a href="/list/jianzhu/" data-bh="jianzhu" target="_blank" class="">手工</a></li>
                                <li><a href="/list/zhiye/" data-bh="zhiye" target="_blank" class="">运动</a></li>
                                <li><a href="/list/sheji/" data-bh="sheji" target="_blank" class="">礼仪</a></li>
                                <li><a href="/list/diannao/" data-bh="diannao" target="_blank" class="">声音</a></li>
                                <li><a href="/list/jineng/" data-bh="jineng" target="_blank" class="on">影像</a></li>
                            </ul>
                            <ul class="class-group-sub-group" data-bh="kuaiji">
                                <li><a href="/list/kuaijiquan/" target="_blank">会计全科</a></li>
                                <li><a href="/list/kuaijizige/" target="_blank">会计从业资格(会计证)</a></li>
                                <li><a href="/list/diansuanhua/" target="_blank">会计电算化</a></li>
                                <li><a href="/list/kuaijizhang/" target="_blank">会计实帐</a></li>
                                <li><a href="/list/kuaijizhi/" target="_blank">会计职称培训</a></li>
                                <li><a href="/list/zhuce/" target="_blank">注册会计师培训</a></li>
                            </ul>
                            <ul class="class-group-sub-group" data-bh="jianzhu">
                                <li><a href="/list/zaojia/" target="_blank">造价员培训</a></li>
                                <li><a href="/list/yusuan/" target="_blank">预算员培训</a></li>
                                <li><a href="/list/jianzao/" target="_blank">建造师培训</a></li>
                                <li><a href="/list/zaojiashi/" target="_blank">造价工程师培训</a></li>
                                <li><a href="/list/jianli/" target="_blank">监理工程师培训</a></li>
                                <li><a href="/list/aqgcs/" target="_blank">安全工程师培训</a></li>
                                <li><a href="/list/xfgcs/" target="_blank">消防工程师</a></li>
                            </ul>
                            <ul class="class-group-sub-group" data-bh="zhiye">
                                <li><a href="/list/gongwuyuan/" target="_blank">公务员培训</a></li>
                                <li><a href="/list/renliziyuan/" target="_blank">人力资源管理师培训</a></li>
                                <li><a href="/list/yingyangshi/" target="_blank">公共营养师培训</a></li>
                                <li><a href="/list/xinlizixun/" target="_blank">心理咨询师培训</a></li>
                                <li><a href="/list/jiaoshi/" target="_blank">教师资格证培训</a></li>
                                <li><a href="/list/sifa/" target="_blank">司法考试培训</a></li>
                                <li><a href="/list/licai/" target="_blank">理财规划师培训</a></li>
                                <li><a href="/list/peixunshi/" target="_blank">企业培训师培训</a></li>
                            </ul>
                            <ul class="class-group-sub-group" data-bh="sheji">
                                <li><a href="/list/pingmian/" target="_blank">平面设计培训</a></li>
                                <li><a href="/list/wangyesheji/" target="_blank">网页设计培训</a></li>
                                <li><a href="/list/yingshipeixun/" target="_blank">影视培训</a></li>
                            </ul>
                            <ul class="class-group-sub-group" data-bh="diannao">
                                <li><a href="/list/office/" target="_blank">OFFICE培训</a></li>
                                <li><a href="/list/diannaoweixiu/" target="_blank">电脑维修培训</a></li>
                                <li><a href="/list/wangluo/" target="_blank">网络工程师培训</a></li>
                                <li><a href="/list/ruanjian/" target="_blank">软件工程师培训</a></li>
                                <li><a href="/list/wangzhan/" target="_blank">网站建设培训</a></li>
                                <li><a href="/list/dongmanyouxi/" target="_blank">动漫游戏培训</a></li>
                            </ul>
                            <ul class="class-group-sub-group on" data-bh="jineng">
                                <li><a href="/list/huazhuangzaoxing/" target="_blank">化妆培训</a></li>
                                <li><a href="/list/meirongmeifa/" target="_blank">美容美发培训</a></li>
                                <li><a href="/list/wenxiumeijia/" target="_blank">纹绣美甲培训</a></li>
                                <li><a href="/list/sheying/" target="_blank">摄影培训</a></li>
                                <li><a href="/list/zhongyiji/" target="_blank">中医技能培训</a></li>
                                <li><a href="/list/yuesao/" target="_blank">母婴护理培训</a></li>
                                <li><a href="/list/chushi/" target="_blank">厨师/西餐培训</a></li>
                                <li><a href="/list/tiaojiu/" target="_blank">咖啡调酒</a></li>
                                <li><a href="/list/qicheweixiu/" target="_blank">汽车维修/美容</a></li>
                                <li><a href="/list/siyi/" target="_blank">司仪培训</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="class-group">
                        <div class="class-group-con">
                            <div class="class-group-title"><i class="class-icon-4"></i>初中</div>
                            <ul class="class-group-sub">
                                <li><a href="/list/yingyu/" data-bh="yingyu" target="_blank" class="">课程</a></li>
                                <li><a href="/list/xiaoyuzhong/" data-bh="xiaoyuzhong" target="_blank" class="on">手工</a></li>
                                <li><a href="/list/liuxue/" data-bh="liuxue" target="_blank" class="">运动</a></li>
                                <li><a href="#" data-bh="" target="_blank" class="">礼仪</a></li>
                                <li><a href="#" data-bh="" target="_blank" class="">声音</a></li>
                                <li><a href="#" data-bh="" target="_blank" class="">影像</a></li>
                            </ul>
                            <ul class="class-group-sub-group" data-bh="yingyu">
                                <li><a href="/list/kouyutingli/" target="_blank">口语听力</a></li>
                                <li><a href="/list/yasi/" target="_blank">雅思</a></li>
                                <li><a href="/list/tuofu/" target="_blank">托福</a></li>
                                <li><a href="/list/sat/" target="_blank">SAT</a></li>
                                <li><a href="/list/gre/" target="_blank">GRE</a></li>
                                <li><a href="/list/yiminyingyu/" target="_blank">出国英语培训</a></li>
                                <li><a href="/list/shaoeryingyu/" target="_blank">少儿英语</a></li>
                                <li><a href="/list/xingainian/" target="_blank">新概念英语</a></li>
                                <li><a href="/list/jianqiaoyingyu/" target="_blank">剑桥英语</a></li>
                                <li><a href="/list/sijiliuji/" target="_blank">四级六级</a></li>
                                <li><a href="/list/bec/" target="_blank">BEC</a></li>
                                <li><a href="/list/zhichenyingyu/" target="_blank">职称英语</a></li>
                                <li><a href="/list/kouyibiyi/" target="_blank">口译笔译</a></li>
                                <li><a href="/list/yingyutuanxun/" target="_blank">企业团训</a></li>
                                <li><a href="/list/chengrenyingyu/" target="_blank">成人英语</a></li>
                                <li><a href="/list/vip/" target="_blank">一对一英语</a></li>
                                <li><a href="/list/kaoyanyingyu/" target="_blank">考研英语</a></li>
                                <li><a href="/list/cihuiyufa/" target="_blank">词汇语法</a></li>
                            </ul>
                            <ul class="class-group-sub-group on" data-bh="xiaoyuzhong">
                                <li><a href="/list/riyu/" target="_blank">日语培训</a></li>
                                <li><a href="/list/hanyu/" target="_blank">韩语培训</a></li>
                                <li><a href="/list/fayu/" target="_blank">法语培训</a></li>
                                <li><a href="/list/deyu/" target="_blank">德语培训</a></li>
                                <li><a href="/list/eyu/" target="_blank">俄语培训</a></li>
                                <li><a href="/list/yidaliyu/" target="_blank">意大利语培训</a></li>
                                <li><a href="/list/xibanyayu/" target="_blank">西班牙语培训</a></li>
                                <li><a href="/list/alaboyu/" target="_blank">阿拉伯语培训</a></li>
                                <li><a href="/list/putaoyayu/" target="_blank">葡萄牙语培训</a></li>
                            </ul>
                            <ul class="class-group-sub-group" data-bh="liuxue">
                                <li><a href="/list/yimin/" target="_blank">移民公司</a></li>
                                <li><a href="/list/liuxuemeiguo/" target="_blank">美国留学</a></li>
                                <li><a href="/list/liuxuejianada/" target="_blank">加拿大留学</a></li>
                                <li><a href="/list/liuxueyingguo/" target="_blank">英国留学</a></li>
                                <li><a href="/list/liuxuefaguo/" target="_blank">法国留学</a></li>
                                <li><a href="/list/liuxuexinjiapo/" target="_blank">新加坡留学</a></li>
                                <li><a href="/list/liuxueriben/" target="_blank">日本留学</a></li>
                                <li><a href="/list/liuxueaodaliya/" target="_blank">澳大利亚留学</a></li>
                                <li><a href="/list/liuxuehanguo/" target="_blank">韩国留学</a></li>
                                <li><a href="/list/liuxuedeguo/" target="_blank">德国留学</a></li>
                                <li><a href="/list/liuxueyidali/" target="_blank">意大利留学</a></li>
                                <li><a href="/list/liuxuexinxilan/" target="_blank">新西兰留学</a></li>
                                <li><a href="/list/guojishixi/" target="_blank">带薪实习</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="class-group">
                        <div class="class-group-con">
                            <div class="class-group-title"><i class="class-icon-4"></i>高中</div>
                            <ul class="class-group-sub">
                                <li><a href="/list/yingyu/" data-bh="yingyu" target="_blank" class="">课程</a></li>
                                <li><a href="/list/xiaoyuzhong/" data-bh="xiaoyuzhong" target="_blank" class="on">手工</a></li>
                                <li><a href="/list/liuxue/" data-bh="liuxue" target="_blank" class="">运动</a></li>
                                <li><a href="#" data-bh="" target="_blank" class="">礼仪</a></li>
                                <li><a href="#" data-bh="" target="_blank" class="">声音</a></li>
                                <li><a href="#" data-bh="" target="_blank" class="">影像</a></li>
                            </ul>
                            <ul class="class-group-sub-group" data-bh="yingyu">
                                <li><a href="/list/kouyutingli/" target="_blank">口语听力</a></li>
                                <li><a href="/list/yasi/" target="_blank">雅思</a></li>
                                <li><a href="/list/tuofu/" target="_blank">托福</a></li>
                                <li><a href="/list/sat/" target="_blank">SAT</a></li>
                                <li><a href="/list/gre/" target="_blank">GRE</a></li>
                                <li><a href="/list/yiminyingyu/" target="_blank">出国英语培训</a></li>
                                <li><a href="/list/shaoeryingyu/" target="_blank">少儿英语</a></li>
                                <li><a href="/list/xingainian/" target="_blank">新概念英语</a></li>
                                <li><a href="/list/jianqiaoyingyu/" target="_blank">剑桥英语</a></li>
                                <li><a href="/list/sijiliuji/" target="_blank">四级六级</a></li>
                                <li><a href="/list/bec/" target="_blank">BEC</a></li>
                                <li><a href="/list/zhichenyingyu/" target="_blank">职称英语</a></li>
                                <li><a href="/list/kouyibiyi/" target="_blank">口译笔译</a></li>
                                <li><a href="/list/yingyutuanxun/" target="_blank">企业团训</a></li>
                                <li><a href="/list/chengrenyingyu/" target="_blank">成人英语</a></li>
                                <li><a href="/list/vip/" target="_blank">一对一英语</a></li>
                                <li><a href="/list/kaoyanyingyu/" target="_blank">考研英语</a></li>
                                <li><a href="/list/cihuiyufa/" target="_blank">词汇语法</a></li>
                            </ul>
                            <ul class="class-group-sub-group on" data-bh="xiaoyuzhong">
                                <li><a href="/list/riyu/" target="_blank">日语培训</a></li>
                                <li><a href="/list/hanyu/" target="_blank">韩语培训</a></li>
                                <li><a href="/list/fayu/" target="_blank">法语培训</a></li>
                                <li><a href="/list/deyu/" target="_blank">德语培训</a></li>
                                <li><a href="/list/eyu/" target="_blank">俄语培训</a></li>
                                <li><a href="/list/yidaliyu/" target="_blank">意大利语培训</a></li>
                                <li><a href="/list/xibanyayu/" target="_blank">西班牙语培训</a></li>
                                <li><a href="/list/alaboyu/" target="_blank">阿拉伯语培训</a></li>
                                <li><a href="/list/putaoyayu/" target="_blank">葡萄牙语培训</a></li>
                            </ul>
                            <ul class="class-group-sub-group" data-bh="liuxue">
                                <li><a href="/list/yimin/" target="_blank">移民公司</a></li>
                                <li><a href="/list/liuxuemeiguo/" target="_blank">美国留学</a></li>
                                <li><a href="/list/liuxuejianada/" target="_blank">加拿大留学</a></li>
                                <li><a href="/list/liuxueyingguo/" target="_blank">英国留学</a></li>
                                <li><a href="/list/liuxuefaguo/" target="_blank">法国留学</a></li>
                                <li><a href="/list/liuxuexinjiapo/" target="_blank">新加坡留学</a></li>
                                <li><a href="/list/liuxueriben/" target="_blank">日本留学</a></li>
                                <li><a href="/list/liuxueaodaliya/" target="_blank">澳大利亚留学</a></li>
                                <li><a href="/list/liuxuehanguo/" target="_blank">韩国留学</a></li>
                                <li><a href="/list/liuxuedeguo/" target="_blank">德国留学</a></li>
                                <li><a href="/list/liuxueyidali/" target="_blank">意大利留学</a></li>
                                <li><a href="/list/liuxuexinxilan/" target="_blank">新西兰留学</a></li>
                                <li><a href="/list/guojishixi/" target="_blank">带薪实习</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="full-bg-white">
                <div class="full-content">
                    <div class="con-title">
                        <i class="left-line"></i><span>平台优势</span><small></small>
                    </div>
                    <ul class="advantage">
                        <li>
                            <i></i>
                            <h5>行业权威平台</h5>
                            <!-- <span>教育部门批准，国内领先的一站式<br>教育培训资源整合平台</span> -->
                        </li>
                        <li>
                            <i></i>
                            <h5>教育资源丰富</h5>
                            <!-- <span>覆盖全国上百个城市30000多家优质机构<br>优质教育品牌，老师好，学校多，课程全</span> -->
                        </li>
                        <li>
                            <i></i>
                            <h5>机构真实认证</h5>
                            <!-- <span>合作机构100%人工真实性审核<br>机构缴纳保证金，学员学习有保障</span> -->
                        </li>
                        <li>
                            <i></i>
                            <h5>保证数据真实</h5>
                            <!-- <span>累计数十万条真实用户点评信息和成交数据<br>透明化展现帮您实实在在选出好机构</span> -->
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>


<div class="footer">
    <div class="wrap">
        <div class="section group">
            <div class="col_1_of_4 span_1_of_4">
                <h4>馨隆教育</h4>
                <ul>
                    <li><a href="../About/about.html">About Us</a></li>
                    <li><a href="contact.html">Customer Service</a></li>
                    <li><a href="#">Advanced Search</a></li>
                    <li><a href="delivery.html">Orders and Returns</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
            </div>
            <div class="col_1_of_4 span_1_of_4">
                <h4>新手指南</h4>
                <ul>
                    <li><a href="../About/about.html">About Us</a></li>
                    <li><a href="contact.html">Customer Service</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="contact.html">Site Map</a></li>
                    <li><a href="#">Search Terms</a></li>
                </ul>
            </div>
            <div class="col_1_of_4 span_1_of_4">
                <h4>客服中心</h4>
                <ul>
                    <li><a href="contact.html">常见问题</a></li>
                    <li><a href="index.html">View Cart</a></li>
                    <li><a href="#">My Wishlist</a></li>
                    <li><a href="#">Track My Order</a></li>
                    <li><a href="contact.html">Help</a></li>
                </ul>
            </div>
            <div class="col_1_of_4 span_1_of_4">
                <h4>联系我们</h4>
                <ul>
                    <li><span>+91-123-456789</span></li>
                    <li><span>+00-123-000000</span></li>
                </ul>
                <div class="social-icons">
                    <h4>Follow Us</h4>
                    <ul>
                        <li><a href="#" target="_blank"><img src="/Public/Home/images/facebook.png" alt="" /></a></li>
                        <li><a href="#" target="_blank"><img src="/Public/Home/images/twitter.png" alt="" /></a></li>
                        <li><a href="#" target="_blank"><img src="/Public/Home/images/skype.png" alt="" /> </a></li>
                        <li><a href="#" target="_blank"> <img src="/Public/Home/images/dribbble.png" alt="" /></a></li>
                        <li><a href="#" target="_blank"> <img src="/Public/Home/images/linkedin.png" alt="" /></a></li>
                        <div class="clear"></div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copy_right">
        <p>Copyright &copy; 2017 馨隆教育 版权所有</p>
    </div>
</div>