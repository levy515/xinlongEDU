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
        <span class="c3">教育资讯</span>
    </div>

    <div class="edu-news">
        <ul>
            <li>
                <h2>
                    <a href="#" target="_self">
                        <span class="edu-news_img edu-news_img0"></span>
                        <span>学习辅导</span>
                    </a>
                </h2>
            </li>
            <li>
                <h2>
                    <a href="#" target="_self">
                        <span class="edu-news_img edu-news_img1"></span>
                        <span>文体艺术</span>
                    </a>
                </h2>
            </li>
            <li>
                <h2>
                    <a href="#" target="_self">
                        <span class="edu-news_img edu-news_img2"></span>
                        <span>语言培训</span>
                    </a>
                </h2>
            </li>
            <li>
                <h2>
                    <a href="#" target="_self">
                        <span class="edu-news_img edu-news_img3"></span>
                        <span>电脑与IT</span>
                    </a>
                </h2>
            </li>
            <li>
                <h2>
                    <a href="#" target="_self">
                        <span class="edu-news_img edu-news_img4"></span>
                        <span>职业技能</span>
                    </a>
                </h2>
            </li>
            <li>
                <h2>
                    <a href="#" target="_self">
                        <span class="edu-news_img edu-news_img5"></span>
                        <span>资格考试</span>
                    </a>
                </h2>
            </li>
            <li>
                <h2>
                    <a href="" target="_self">
                        <span class="edu-news_img edu-news_img6"></span>
                        <span>企业管理</span>
                    </a>
                </h2>
            </li>
            <li>
                <h2>
                    <a href="#" target="_self">
                        <span class="edu-news_img edu-news_img7"></span>
                        <span>学历文凭</span>
                    </a>
                </h2>
            </li>
            <li>
                <h2>
                    <a href="#" target="_self">
                        <span class="edu-news_img edu-news_img8"></span>
                        <span>出国留学</span>
                    </a>
                </h2>
            </li>
            <li>
                <h2>
                    <a href="#" target="_self">
                        <span class="edu-news_img edu-news_img9"></span>
                        <span>远程教育</span>
                    </a>
                </h2>
            </li>
            <li>
                <h2>
                    <a href="#" target="_self">
                        <span class="edu-news_img edu-news_img10"></span>
                        <span>远程教育</span>
                    </a>
                </h2>
            </li>
            <li>
                <h2>
                    <a href="#" target="_self">
                        <span class="edu-news_img edu-news_img11"></span>
                        <span>远程教育</span>
                    </a>
                </h2>
            </li>
        </ul>
    </div>

</div>


<!-- <div class="footer">
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

 -->