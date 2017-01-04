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
                    <li><a href="Home/Index/index.html">首页</a></li>
                    <li><a href="Home/Allclass/allclass.html">课程分类</a></li>
                    <li><a href="Home/News/news.html">教育资讯</a></li>
                    <li><a href="/News/news.html">关于我们</a></li>
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
    <div class="allclasstitle">
        <a>馨隆教育</a>
        <i>>></i>
        <span class="c3">课程分类</span>
    </div>
    <div class="allclasslist">
        <div class="row">
            <span>婴儿期：&nbsp;&nbsp;&nbsp;</span>
            <ul class="clearfix">
                <li class="selected">
                    <a href="http://sh.houxue.com/kecheng/" rel="nofollow">不限</a>
                </li>

                <li>
                    <a href="/kecheng/it1/">成长</a>
                </li>
                <li>
                    <a href="/kecheng/yuyanpeixun2/">语言</a>
                </li>
                <li>
                    <a href="/kecheng/zhiyejineng3/">表情</a>
                </li>
                <li>
                    <a href="/kecheng/qiyeguanli4/">声音</a>
                </li>
                <li>
                    <a href="/kecheng/zigekaoshi5/">图像</a>
                </li>
                <li>
                    <a href="/kecheng/wentiyishu6/">动作</a>
                </li>
                <li>
                    <a href="/kecheng/xueliwenping93/">食物</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <span>幼儿期：&nbsp;&nbsp;&nbsp;</span>
            <ul class="clearfix">
                <li class="selected">
                    <a href="http://sh.houxue.com/kecheng/" rel="nofollow">不限</a>
                </li>

                <li>
                    <a href="/kecheng/it1/">语言</a>
                </li>
                <li>
                    <a href="/kecheng/yuyanpeixun2/">动作</a>
                </li>
                <li>
                    <a href="/kecheng/zhiyejineng3/">礼仪</a>
                </li>
                <li>
                    <a href="/kecheng/qiyeguanli4/">表情</a>
                </li>
                <li>
                    <a href="/kecheng/zigekaoshi5/">声音</a>
                </li>
                <li>
                    <a href="/kecheng/wentiyishu6/">图像</a>
                </li>
                <li>
                    <a href="/kecheng/xueliwenping93/">食物</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <span>学龄前期：</span>
            <ul class="clearfix">
                <li class="selected">
                    <a href="http://sh.houxue.com/kecheng/" rel="nofollow">不限</a>
                </li>

                <li>
                    <a href="/kecheng/it1/">语言</a>
                </li>
                <li>
                    <a href="/kecheng/yuyanpeixun2/">手工</a>
                </li>
                <li>
                    <a href="/kecheng/zhiyejineng3/">动作</a>
                </li>
                <li>
                    <a href="/kecheng/qiyeguanli4/">礼仪</a>
                </li>
                <li>
                    <a href="/kecheng/zigekaoshi5/">表情</a>
                </li>
                <li>
                    <a href="/kecheng/wentiyishu6/">声音</a>
                </li>
                <li>
                    <a href="/kecheng/xueliwenping93/">图像</a>
                </li>
                <li>
                    <a href="/kecheng/xuexifudao104/">食物</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <span>小学：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            <ul class="clearfix">
                <li class="selected">
                    <a href="http://sh.houxue.com/kecheng/" rel="nofollow">不限</a>
                </li>

                <li>
                    <a href="/kecheng/it1/">课程</a>
                </li>
                <li>
                    <a href="/kecheng/yuyanpeixun2/">手工</a>
                </li>
                <li>
                    <a href="/kecheng/zhiyejineng3/">运动</a>
                </li>
                <li>
                    <a href="/kecheng/qiyeguanli4/">礼仪</a>
                </li>
                <li>
                    <a href="/kecheng/zigekaoshi5/">声音</a>
                </li>
                <li>
                    <a href="/kecheng/wentiyishu6/">影像</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <span>初中：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            <ul class="clearfix">
                <li class="selected">
                    <a href="http://sh.houxue.com/kecheng/" rel="nofollow">不限</a>
                </li>

                <li>
                    <a href="/kecheng/it1/">课程</a>
                </li>
                <li>
                    <a href="/kecheng/yuyanpeixun2/">手工</a>
                </li>
                <li>
                    <a href="/kecheng/zhiyejineng3/">运动</a>
                </li>
                <li>
                    <a href="/kecheng/qiyeguanli4/">礼仪</a>
                </li>
                <li>
                    <a href="/kecheng/zigekaoshi5/">声音</a>
                </li>
                <li>
                    <a href="/kecheng/wentiyishu6/">影像</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <span>高中：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            <ul class="clearfix">
                <li class="selected">
                    <a href="http://sh.houxue.com/kecheng/" rel="nofollow">不限</a>
                </li>

                <li>
                    <a href="/kecheng/it1/">课程</a>
                </li>
                <li>
                    <a href="/kecheng/yuyanpeixun2/">手工</a>
                </li>
                <li>
                    <a href="/kecheng/zhiyejineng3/">运动</a>
                </li>
                <li>
                    <a href="/kecheng/qiyeguanli4/">礼仪</a>
                </li>
                <li>
                    <a href="/kecheng/zigekaoshi5/">声音</a>
                </li>
                <li>
                    <a href="/kecheng/wentiyishu6/">影像</a>
                </li>
            </ul>
        </div>
        <div class="row ls">
            <ul>
                <li>
                    <span><a>排序</a></span>
                </li>
                <li>
                    <span><a>综合</a></span>
                </li>
                <li>
                    <span><a>最新</a></span>
                </li>
                <li>
                    <span><a>人气</a></span>
                </li>
                <li>
                    <span><a>价格</a></span>
                </li>
            </ul>
            <div class="allclassoage">
                <a href="javascript:;" target="_self" rel="nofollow"><em>1</em></a>
                /
                <a href="javascript:;" target="_self" rel="nofollow">1017</a>
            </div>
        </div>
    </div>

    <div class="allclass_pros">
        <div class="pro-item">
            <div class="pro-item-logo"><a href="http://www.jiaoyubao.cn/brand/tjyf/" target="_blank" rel="nofollow"><img src="http://img.jiaoyubao.cn/2016/05/16/CompanyNo1/584_151655_logo2.gif"></a>
            </div>
            <div class="pro-item-info">
                <div class="pro-item-title"><a href="http://www.jiaoyubao.cn/brand/tjyf/" target="_blank">天津英孚少儿英语</a></div>
                <div class="pro-item-basic">
                    <ul>
                        <li><i class="icon-school" title="天津英孚少儿英语的校区"></i>7个校区</li>
                        <li><a href="http://tj.jiaoyubao.cn/edu/yf/0.html" target="_blank" title="天津英孚少儿英语的课程"><i class="icon-class" title="天津英孚少儿英语的课程"></i>22节课程</a></li>
                        <li><a href="http://tj.jiaoyubao.cn/edu/yf/pj/" target="_blank" title="天津英孚少儿英语的真实评价"><i class="icon-rate" title="天津英孚少儿英语的真实评价"></i>37条评价</a></li>
                    </ul>
                </div>
                <div class="pro-item-consult">2390人咨询</div>
            </div>
            <a href="http://tj.jiaoyubao.cn/edu/yf/" class="pro-item-go" target="_blank" rel="nofollow">直达机构主页</a>
        </div>
        <div class="pro-item">
            <div class="pro-item-logo"><a href="http://jn.jiaoyubao.cn/edu/blyy/" target="_blank" rel="nofollow"><img src="http://img.jiaoyubao.cn/2011/11/29/CompanyNo1/224_163310_2.jpg"></a>
            </div>
            <div class="pro-item-info">
                <div class="pro-item-title"><a href="http://jn.jiaoyubao.cn/edu/blyy/" target="_blank">济南贝乐学科英语</a></div>
                <div class="pro-item-basic">
                    <ul>
                        <li><i class="icon-school" title="济南贝乐学科英语的校区"></i>4个校区</li>
                        <li><a href="http://jn.jiaoyubao.cn/edu/blyy/0.html" target="_blank" title="济南贝乐学科英语的课程"><i class="icon-class" title="济南贝乐学科英语的课程"></i>3节课程</a></li>
                        <li><a href="http://jn.jiaoyubao.cn/edu/blyy/pj/" target="_blank" title="济南贝乐学科英语的真实评价"><i class="icon-rate" title="济南贝乐学科英语的真实评价"></i>22条评价</a></li>
                    </ul>
                </div>
                <div class="pro-item-consult">1242人咨询</div>
            </div>
            <a href="http://jn.jiaoyubao.cn/edu/blyy/" class="pro-item-go" target="_blank" rel="nofollow">直达机构主页</a>
        </div>
        <div class="pro-item">
            <div class="pro-item-logo"><a href="http://tj.jiaoyubao.cn/edu/tjhj/" target="_blank" rel="nofollow"><img src="http://img.jiaoyubao.cn/2014/01/06/CompanyNo1/772_094959_huanjia.gif"></a>
            </div>
            <div class="pro-item-info">
                <div class="pro-item-title"><a href="http://tj.jiaoyubao.cn/edu/tjhj/" target="_blank">天津皇家少儿英语培训</a></div>
                <div class="pro-item-basic">
                    <ul>
                        <li><i class="icon-school" title="天津皇家少儿英语培训的校区"></i>5个校区</li>
                        <li><a href="http://tj.jiaoyubao.cn/edu/tjhj/0.html" target="_blank" title="天津皇家少儿英语培训的课程"><i class="icon-class" title="天津皇家少儿英语培训的课程"></i>9节课程</a></li>
                        <li><a href="http://tj.jiaoyubao.cn/edu/tjhj/pj/" target="_blank" title="天津皇家少儿英语培训的真实评价"><i class="icon-rate" title="天津皇家少儿英语培训的真实评价"></i>9条评价</a></li>
                    </ul>
                </div>
                <div class="pro-item-consult">1035人咨询</div>
            </div>
            <a href="http://tj.jiaoyubao.cn/edu/tjhj/" class="pro-item-go" target="_blank" rel="nofollow">直达机构主页</a>
        </div>
        <div class="pro-item">
            <div class="pro-item-logo"><a href="http://sjz.jiaoyubao.cn/edu/ellson/" target="_blank" rel="nofollow"><img src="http://img.jiaoyubao.cn/2016/07/15/CompanyNo1/885_095303_logo2.gif"></a>
            </div>
            <div class="pro-item-info">
                <div class="pro-item-title"><a href="http://sjz.jiaoyubao.cn/edu/ellson/" target="_blank">石家庄埃森教育</a></div>
                <div class="pro-item-basic">
                    <ul>
                        <li><i class="icon-school" title="石家庄埃森教育的校区"></i>9个校区</li>
                        <li><a href="http://sjz.jiaoyubao.cn/edu/ellson/0.html" target="_blank" title="石家庄埃森教育的课程"><i class="icon-class" title="石家庄埃森教育的课程"></i>22节课程</a></li>
                        <li><a href="http://sjz.jiaoyubao.cn/edu/ellson/pj/" target="_blank" title="石家庄埃森教育的真实评价"><i class="icon-rate" title="石家庄埃森教育的真实评价"></i>45条评价</a></li>
                    </ul>
                </div>
                <div class="pro-item-consult">1075人咨询</div>
            </div>
            <a href="http://sjz.jiaoyubao.cn/edu/ellson/" class="pro-item-go" target="_blank" rel="nofollow">直达机构主页</a>
        </div>
        <div class="pro-item">
            <div class="pro-item-logo"><a href="http://qd.jiaoyubao.cn/edu/qingdaoyameiou/" target="_blank" rel="nofollow"><img src="http://img.jiaoyubao.cn/2010/11/09/CompanyNo1/264_101814_2.gif"></a>
            </div>
            <div class="pro-item-info">
                <div class="pro-item-title"><a href="http://qd.jiaoyubao.cn/edu/qingdaoyameiou/" target="_blank">青岛亚美欧英语培训学校</a></div>
                <div class="pro-item-basic">
                    <ul>
                        <li><i class="icon-school" title="青岛亚美欧英语培训学校的校区"></i>1个校区</li>
                        <li><a href="http://qd.jiaoyubao.cn/edu/qingdaoyameiou/0.html" target="_blank" title="青岛亚美欧英语培训学校的课程"><i class="icon-class" title="青岛亚美欧英语培训学校的课程"></i>19节课程</a></li>
                    </ul>
                </div>
                <div class="pro-item-consult">823人咨询</div>
            </div>
            <a href="http://qd.jiaoyubao.cn/edu/qingdaoyameiou/" class="pro-item-go" target="_blank" rel="nofollow">直达机构主页</a>
        </div>
        <div class="pro-item">
            <div class="pro-item-logo"><a href="http://sh.jiaoyubao.cn/edu/wbkxd/" target="_blank" rel="nofollow"><img src="http://img.jiaoyubao.cn/2015/02/04/CompanyNo1/462_142810_logo2.gif"></a>
            </div>
            <div class="pro-item-info">
                <div class="pro-item-title"><a href="http://sh.jiaoyubao.cn/edu/wbkxd/" target="_blank">上海韦博开心豆少儿英语</a></div>
                <div class="pro-item-basic">
                    <ul>
                        <li><i class="icon-school" title="上海韦博开心豆少儿英语的校区"></i>15个校区</li>
                        <li><a href="http://sh.jiaoyubao.cn/edu/wbkxd/0.html" target="_blank" title="上海韦博开心豆少儿英语的课程"><i class="icon-class" title="上海韦博开心豆少儿英语的课程"></i>8节课程</a></li>
                        <li><a href="http://sh.jiaoyubao.cn/edu/wbkxd/pj/" target="_blank" title="上海韦博开心豆少儿英语的真实评价"><i class="icon-rate" title="上海韦博开心豆少儿英语的真实评价"></i>4条评价</a></li>
                    </ul>
                </div>
                <div class="pro-item-consult">455人咨询</div>
            </div>
            <a href="http://sh.jiaoyubao.cn/edu/wbkxd/" class="pro-item-go" target="_blank" rel="nofollow">直达机构主页</a>
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