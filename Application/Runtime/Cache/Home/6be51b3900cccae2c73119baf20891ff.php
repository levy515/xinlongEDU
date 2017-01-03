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
        <span class="c3">教育资讯</span>
    </div>

    <div class="news_left l">
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

        <div class="news_lists">
            <ul>
                <li>
                    <div class="clearfix">
                        <div class="news_lists_body">
                            <h4>
                                <i class="picked"></i>
                                <a href="http://sh.houxue.com/news/755012.html" target="_blank">上海高三语文家教机</a>
                            </h4>

                            <p class="list_body">　　上海高三语文家教机？语文难学，语文难学好!那是因为没有找到语文学习的“根”，这个“根”即是办法。今日这篇文章就对于这个“做相关的解说”。　　要寻找适合自己的学习方法!　　如何抓住作者的写作观点
                                　　从剖析文章内容人手。文章中的资料及其所表达的思维，表明晰作者看问题的视点，必定程度上表现了作者的情...</p>

                            <p class="f12 c9 mt10">
                                <span>发表时间：2017-01-02 16:50:00</span><span>1人浏览</span></p>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="clearfix">
                        <div class="news_lists_body">
                            <h4>
                                <i class="picked"></i>
                                <a href="http://sh.houxue.com/news/755011.html" target="_blank">上海高二语文一对一家教报价</a>
                            </h4>

                            <p class="list_body">　　上海高二语文一对一家教报价？我的语文成果极好,在此我结合自个的学习实践,和大家一起沟通一下学习语文的体会。　　要寻找适合自己的学习方法!　　静心读书
                                　　关于现代社会劲爆媒体的多年来的狂轰滥炸，家庭学校甚至社会，已经很难有安静的当地了，但是，“安静以致远”，不静下来读书，在高中期间都难以精心读书...</p>

                            <p class="f12 c9 mt10">
                                <span>发表时间：2017-01-02 16:49:00</span><span>0人浏览</span></p>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="clearfix">
                        <div class="news_lists_body">
                            <h4>
                                <i class="picked"></i>
                                <a href="http://sh.houxue.com/news/755010.html" target="_blank">上海高二语文一对一 价格</a>
                            </h4>

                            <p class="list_body">　　上海高二语文一对一 价格？如何才能学好语文?无妨在以下几个方面下一番功夫。一同看看吧!　　学习方法的要点!　　如何抓住作者的写作观点
                                　　联络文章背景资料。背景资料包含作者一向的思想观点、写作动机。有些文章，特别是文学作品，作者的观点情绪体现得宛转宛转(乃至有意曲折为文，言在此而意在彼)，这时有...</p>

                            <p class="f12 c9 mt10">
                                <span>发表时间：2017-01-02 16:48:00</span><span>1人浏览</span></p>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="clearfix">
                        <div class="news_lists_body">
                            <h4>
                                <i class="picked"></i>
                                <a href="http://sh.houxue.com/news/755009.html" target="_blank">上海高二语文家教一小时多少钱</a>
                            </h4>

                            <p class="list_body">　　上海高二语文家教一小时多少钱？我的语文成果极好,在此我结合自个的学习实践,和大家一起沟通一下学习语文的体会。　　提高学习成绩 这些方法中小学生很有效!　　大声读文
                                　　这儿主要是讲读古文。由于大声读，才可以露出一些字音字义的缺点，才简单督促自个去查找注释或工具书。读出句读，把古文语句中的主要成分...</p>

                            <p class="f12 c9 mt10">
                                <span>发表时间：2017-01-02 16:47:00</span><span>1人浏览</span></p>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="clearfix">
                        <div class="news_lists_body">
                            <h4>
                                <i class="picked"></i>
                                <a href="http://sh.houxue.com/news/755008.html" target="_blank">上海高二语文家教多少钱一小时</a>
                            </h4>

                            <p class="list_body">　　上海高二语文家教多少钱一小时？如何才能学好语文?无妨在以下几个方面下一番功夫。一同看看吧!　　学习很简单 方法最重要!　　如何抓住作者的写作观点
                                　　联络文章背景资料。背景资料包含作者一向的思想观点、写作动机。有些文章，特别是文学作品，作者的观点情绪体现得宛转宛转(乃至有意曲折为文，言在此而意在...</p>

                            <p class="f12 c9 mt10">
                                <span>发表时间：2017-01-02 16:46:00</span><span>0人浏览</span></p>
                        </div>
                    </div>
                </li>

            </ul>

        </div>

        <div class="tcdPageCode"></div>
        <script>
            $(".tcdPageCode").createPage({
                pageCount:100,
                current:1,
                backFn:function(p){
                    //console.log(p);
                }
            });
        </script>
    </div>

    <div class="news_right r">
        <div class="news_right_likes">
            <h4 class="news_right_likes_h4">猜你喜欢</h4>
            <ul class="">
                <li class="clearfix">
                    <div class="hot_school_div">
                        <div class="hot_school_img hot_school_img1 l">
                            <a href="http://sh.houxue.com/xuexiao/67174.html" target="_blank">
                                <img src="http://img.houxue.com/FileStore/51/4950.jpg" title="上海市闸北区佳悦美甲店" alt="上海市闸北区佳悦美甲店" height="51" width="85">
                            </a>
                        </div>
                        <div class="hot_school_con l">
                            <p class="hot_school_name">
                                <a href="http://sh.houxue.com/xuexiao/67174.html" target="_blank">
                                    上海市闸北区佳悦美甲店                                            </a>
                            </p>

                            <p class="hot_school_score">人气：151889</p>
                        </div>
                    </div>
                </li>
                <li class="clearfix">
                    <div class="hot_school_div">
                        <div class="hot_school_img hot_school_img2 l">
                            <a href="http://sh.houxue.com/xuexiao/45674.html" target="_blank">
                                <img src="http://img.houxue.com/FileStore/16/7151.jpg" title="上海同建教育信息咨询有限公司" alt="上海同建教育信息咨询有限公司" height="51" width="85">
                            </a>
                        </div>
                        <div class="hot_school_con l">
                            <p class="hot_school_name">
                                <a href="http://sh.houxue.com/xuexiao/45674.html" target="_blank">
                                    上海同建教育信息咨询有限公司                                            </a>
                            </p>

                            <p class="hot_school_score">人气：42837</p>
                        </div>
                    </div>
                </li>
                <li class="clearfix">
                    <div class="hot_school_div">
                        <div class="hot_school_img hot_school_img3 l">
                            <a href="http://sh.houxue.com/xuexiao/64222.html" target="_blank">
                                <img src="http://img.houxue.com/FileStore/65/0658.jpg" title="上海文汇教育" alt="上海文汇教育" height="51" width="85">
                            </a>
                        </div>
                        <div class="hot_school_con l">
                            <p class="hot_school_name">
                                <a href="http://sh.houxue.com/xuexiao/64222.html" target="_blank">
                                    上海文汇教育                                            </a>
                            </p>

                            <p class="hot_school_score">人气：33309</p>
                        </div>
                    </div>
                </li>
                <li class="clearfix">
                    <div class="hot_school_div">
                        <div class="hot_school_img hot_school_img4 l">
                            <a href="http://sh.houxue.com/xuexiao/54831.html" target="_blank">
                                <img src="http://img.houxue.com/FileStore/53/4676.jpg" title="上海虹口区艺术合子美术进修学校" alt="上海虹口区艺术合子美术进修学校" height="51" width="85">
                            </a>
                        </div>
                        <div class="hot_school_con l">
                            <p class="hot_school_name">
                                <a href="http://sh.houxue.com/xuexiao/54831.html" target="_blank">
                                    上海虹口区艺术合子美术进修学校                                            </a>
                            </p>

                            <p class="hot_school_score">人气：13701</p>
                        </div>
                    </div>
                </li>
                <li class="clearfix">
                    <div class="hot_school_div">
                        <div class="hot_school_img hot_school_img4 l">
                            <a href="http://sh.houxue.com/xuexiao/81907.html" target="_blank">
                                <img src="http://img.houxue.com/FileStore/76/4811.jpg" title="摩根盛通" alt="摩根盛通" height="51" width="85">
                            </a>
                        </div>
                        <div class="hot_school_con l">
                            <p class="hot_school_name">
                                <a href="http://sh.houxue.com/xuexiao/81907.html" target="_blank">
                                    摩根盛通                                            </a>
                            </p>

                            <p class="hot_school_score">人气：9829</p>
                        </div>
                    </div>
                </li>
            </ul>
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