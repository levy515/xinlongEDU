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
                    <li><a href="Home/About/about.html">课程分类</a></li>
                    <li><a href="/Delivery/delivery.html">教育资讯</a></li>
                    <li><a href="/News/news.html">News</a></li>
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
    <div class="main">
    <div class="content">
        <div class="section group">
            <div class="col_1_of_3 span_1_of_3">
                <h3>Who We Are</h3>
                <img src="images/about_img.jpg" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </div>
            <div class="col_1_of_3 span_1_of_3">
                <h3>Our History</h3>
                <div class="history-desc">
                    <div class="year"><p>1998 -</p></div>
                    <p class="history">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <div class="clear"></div>
                </div>
                <div class="history-desc">
                    <div class="year"><p>2001 -</p></div>
                    <p class="history">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                    <div class="clear"></div>
                </div>
                <div class="history-desc">
                    <div class="year"><p>2006 -</p></div>
                    <p class="history">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <div class="clear"></div>
                </div>
                <div class="history-desc">
                    <div class="year"><p>2010 -</p></div>
                    <p class="history">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <div class="clear"></div>
                </div>
                <div class="history-desc">
                    <div class="year"><p>2013 -</p></div>
                    <p class="history">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="col_1_of_3 span_1_of_3">
                <h3>Opportunities</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                <div class="list">
                    <ul>
                        <li><a href="#">Text of the printing</a></li>
                        <li><a href="#">Lorem Ipsum has been the standard</a></li>
                        <li><a href="#">Dummy text ever since the 1500s</a></li>
                        <li><a href="#">Unknown printer took a galley</a></li>
                        <li><a href="#">Led it to make a type specimen</a></li>
                        <li><a href="#">Not only five centuries</a></li>
                        <li><a href="#">Electronic typesetting</a></li>
                        <li><a href="#">Unchanged. It was popularised</a></li>
                        <li><a href="#">Sheets containing Lorem Ipsume</a></li>
                    </ul>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
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