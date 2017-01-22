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
        <div class="header_top">
            <div class="logo">
                <a href="index.html"><img src="/Public/Home/images/logo.png" alt="" /></a>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>



<div class="login-warp">
    <div class="w">
        <div class="login-form">
            <div class="login-tab login-tab-r">
                <a href="javascript:void(0)" class="checked" style="outline: rgb(109, 109, 109) none 0px;">用户注册</a>
            </div>
            <div class="login-box" style="display: block; visibility: visible;">
                <div class="mt tab-h">
                </div>
                <div class="mc">
                    <div class="form">
                        <form id="formlogin" method="post" action="userRegister">
                            <div class="itemlg itemlg-fore1">
                                <label for="loginname" class="login-label name-label"></label>
                                <input id="loginname" type="text" class="itxt" name="username" tabindex="1" autocomplete="off" placeholder="请输入登录名">
                                <span class="clear-btn"></span>
                            </div>
                            <div id="entry" class="itemlg itemlg-fore2" style="visibility: visible;">
                                <label class="login-label pwd-label" for="nloginpwd"></label>
                                <input type="password" id="nloginpwd" name="password" class="itxt itxt-error" tabindex="2" autocomplete="off" placeholder="请输入密码">
                                <span class="clear-btn"></span>
                                <span class="capslock" style="display: none;"><b></b>大小写锁定已打开</span>
                            </div>
                            <div class="itemlg itemlg-fore2" style="visibility: visible;">
                                <label class="login-label pwd-label" for="nloginpwd"></label>
                                <input type="password" name="phone" class="itxt itxt-error" tabindex="2" autocomplete="off" placeholder="请输入手机号">
                                <span class="clear-btn"></span>
                            </div>
                            <div class="itemlg itemlg-fore2" style="visibility: visible;">
                                <label class="login-label pwd-label" for="nloginpwd"></label>
                                <input type="password" name="phonecode" class="itxt itxt-error" tabindex="2" autocomplete="off" placeholder="请输入手机验证码">
                                <span class="clear-btn"></span>
                            </div>
                            <div class="itemlg itemlg-fore5">
                                <div class="login-btn">
                                    <input type="submit" class="btn-img btn-entry" value="立即注册">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="login-banner" style="background-color: #E8C99A">
            <div class="w">
                <img src="/Public/Home/images/login_banner.jpg" />
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