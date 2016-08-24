<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>antong</title>
    <link rel="stylesheet" href="bootstrap-3.3.7/dist/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <style>
    #hoverUl {
        z-index: 2;
        position: relative;
        overflow: hidden;
    }
    
    #hoverUl li {
        float: left;
        width: 100px;
        height: 40px;
        background: #6cf;
        margin-left: 5px;
        text-align: center;
        line-height: 40px;
        color: #fff;
        position: relative;
    }
    
    #hoverUl li:hover {
        /*background: #c33;*/
        cursor: pointer;
    }
    
    #hoverUl li:hover .divbg {
        top: 0;
    }
    
    .divbg {
        position: absolute;
        width: 100%;
        height: 100%;
        background: #0a0;
        top: 40px;
        transition: top .2s ease-out;
    }
    
    .divlabel {
        position: absolute;
        z-index: 10;
        width: 100%;
        height: 100%;
        text-align: center;
    }
    </style>
</head>

<body>
    <header>
            <div class="container">
                <!-- style="background:#2577E3;" -->
                <div class="row logoRow">
                    <img src="img/antongLogo-sm.png" alt="" class="logoImg">
                    <div class="navPhoneBox pull-right">
                    <img src="img/phoneico.png" alt=""><div class="phoneNum"><p>客服电话</p><p>400-866-5656</p></div><img src="img/code.png" alt="">
                    </div>
                </div>
            </div>
            <div class="container-fluid menuContainer ">
                <div class="container">
                    <div class="row">
                        <nav>
                            <ul>
                                <li><a href="hover.html" target="_self">首页</a>
                                    <div class="menuBg"></div>
                                </li>
                                <li><a href="">内贸航线</a>
                                    <div class="menuBg"></div>
                                </li>
                                <li><a href="">外贸航线</a>
                                    <div class="menuBg"></div>
                                </li>
                                <li><a href="">准运宝</a>
                                    <div class="menuBg"></div>
                                </li>
                                <li><a href="">特价团购</a>
                                    <div class="menuBg"></div>
                                </li>
                                <li><a href="">滞期宝</a>
                                    <div class="menuBg"></div>
                                </li>
                                <li><a href="">货物跟踪</a>
                                    <div class="menuBg"></div>
                                </li>
                                <li><a href="">网上营业厅</a>
                                    <div class="menuBg"></div>
                                </li>
                                <li><a href="">保险服务</a>
                                    <div class="menuBg"></div>
                                </li>
                                <li><a href="">帮助中心</a>
                                    <div class="menuBg"></div>
                                </li>
                                <li><a href="">积分兑换</a>
                                    <div class="menuBg"></div>
                                </li>

                                <li class="pull-right logLi"><div><a href="">注册</a> <a href="">登陆</a> </div></li>

                            </ul>
                        </nav>

                    </div>
                </div>
            </div>
        </nav>
    </header>
    <section>
        <div class="container" style="height:100px;margin-top:100px;">
            <div class="row">
                <ul style="list-style:none;" id="hoverUl">
                    <li>
                        <div class="divbg"></div> <a href="hover.html" target="_self">Btn-1</a></li>
                    <li>
                        <div class="divbg"></div>
                        <div class="divlabel">Btn-1</div>
                    </li>
                    <li>
                        <div class="divbg"></div>
                        <div class="divlabel">Btn-1</div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <div>div test</div>
    <button class="btn btn-danger">btn</button>
    <button class="btn btn-warning  btn-lg"> Btn test</button>
    <span class="glyphicon glyphicon-star colorRed"></span><span class="glyphicon glyphicon-star colorRed"></span><span class="glyphicon glyphicon-star colorRed"></span><span class="glyphicon glyphicon-star colorRed"></span>
    <span class="glyphicon glyphicon-star-empty "></span>
    <button class="btn btn-yellow"><span class="glyphicon glyphicon-fire colorRed "></span></button>
    <span class="speech">NEW</span>
    <span class="speech">促销</span>
    <div class="shipLine">
        <span class="belt">特价</span>
    </div>
    <span class="phone">
    <span class="glyphicon glyphicon-earphone"></span>
    </span>
    <span class="rmb"><span class="glyphicon glyphicon-yen"></span></span>
    <span class="tag">抢</span>
    <span class="tag-left">抢</span>
    <a href="#">链接测试</a>
    <i class="iconfont">&#xe601;</i>
    <i class="iconfont">&#xe64f;</i>
    <i class="iconfont ">&#xf00c4;</i>
    <i class="iconfont">&#xf0030;&#xe627;</i>
    <i class="fly">fly</i>
    <i class="iconfont">&#xe602;</i>
    <i class="iconfont">&#xe604;</i>
    <div class="inheritFont">2B or not 2B, it's a question!</div>
    <img src="img/girl.png" alt="" class="img-thumbnail">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-lg-3">
                <div class="thumbnail">
                    <img src="img/girl.png" alt="">
                    <div class="caption">
                        <h2>asdfasd</h2>
                        <p>adfasdfdas</p>
                        <p><a href="#" class="btn btn-success">Buy</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="img/1.png" alt="...">
                <div class="carousel-caption">111
                </div>
            </div>
            <div class="item">
                <img src="img/2.png" alt="...">
                <div class="carousel-caption">222
                </div>
            </div>
            <div class="item">
                <img src="img/3.png" alt="...">
                <div class="carousel-caption">333
                </div>
            </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        </a>
    </div>
    <!-- <script src="jquery.1.12.4.min.js"></script> -->
    <script src="jquery-3.1.0.js"></script>
    <script src="bootstrap-3.3.7/dist/js/bootstrap.js"></script>
</body>

</html>
