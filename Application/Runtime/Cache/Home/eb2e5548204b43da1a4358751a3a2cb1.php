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
                    <li><a href="#">注册</a></li>
                    <li><a href="../Login/login.html">登录</a></li>
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
                    <li><a href="../Index/index.html">首页</a></li>
                    <li><a href="../About/about.html">About</a></li>
                    <li><a href="../Delivery/delivery.html">Delivery</a></li>
                    <li><a href="../News/news.html">News</a></li>
                    <li><a href="../Contact/contact.html">Contact</a></li>
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
                <div class="col span_2_of_3">
                    <div class="contact-form">
                        <h2>Contact Us</h2>
                        <form method="post" action="contact-post.html">
                            <div>
                                <span><label>Name</label></span>
                                <span><input name="userName" type="text" class="textbox" ></span>
                            </div>
                            <div>
                                <span><label>E-mail</label></span>
                                <span><input name="userEmail" type="text" class="textbox"></span>
                            </div>
                            <div>
                                <span><label>Company Name</label></span>
                                <span><input name="userPhone" type="text" class="textbox"></span>
                            </div>
                            <div>
                                <span><label>Subject</label></span>
                                <span><textarea name="userMsg"> </textarea></span>
                            </div>
                            <div>
                                <span><input type="submit" value="Submit"  class="myButton"></span>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col span_1_of_3">
                    <div class="contact_info">
                        <h3>Find Us Here</h3>
                        <div class="map">
                            <iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color:#666;text-align:left;font-size:12px">View Larger Map</a></small>
                        </div>
                    </div>
                    <div class="company_address">
                        <h3>Company Information :</h3>
                        <p>500 Lorem Ipsum Dolor Sit,</p>
                        <p>22-56-2-9 Sit Amet, Lorem,</p>
                        <p>USA</p>
                        <p>Phone:(00) 222 666 444</p>
                        <p>Fax: (000) 000 00 00 0</p>
                        <p>Email: <span>info@mycompany.com</span></p>
                        <p>Follow on: <span>Facebook</span>, <span>Twitter</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="footer">
    <div class="wrap">
        <div class="section group">
            <div class="col_1_of_4 span_1_of_4">
                <h4>Information</h4>
                <ul>
                    <li><a href="../About/about.html">About Us</a></li>
                    <li><a href="contact.html">Customer Service</a></li>
                    <li><a href="#">Advanced Search</a></li>
                    <li><a href="delivery.html">Orders and Returns</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
            </div>
            <div class="col_1_of_4 span_1_of_4">
                <h4>Why buy from us</h4>
                <ul>
                    <li><a href="../About/about.html">About Us</a></li>
                    <li><a href="contact.html">Customer Service</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="contact.html">Site Map</a></li>
                    <li><a href="#">Search Terms</a></li>
                </ul>
            </div>
            <div class="col_1_of_4 span_1_of_4">
                <h4>My account</h4>
                <ul>
                    <li><a href="contact.html">Sign In</a></li>
                    <li><a href="index.html">View Cart</a></li>
                    <li><a href="#">My Wishlist</a></li>
                    <li><a href="#">Track My Order</a></li>
                    <li><a href="contact.html">Help</a></li>
                </ul>
            </div>
            <div class="col_1_of_4 span_1_of_4">
                <h4>Contact</h4>
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
        <p>Copyright &copy; 2017.Company name All rights reserved</p>
    </div>
</div>