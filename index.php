<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>antong</title>
    <link rel="stylesheet" href="bootstrap-3.3.7/dist/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="header">
</div>

<header>
    
<?php include 'header.php';?>

</header>

<section style="position:relative;">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators carouselDots">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner carouselIndex" role="listbox">
    <div class="item active">
      <img src="img/celebration.jpg" alt="...">

    </div>
    <div class="item">
      <img src="img/2.png" alt="...">

    </div>
    <div class="item">
      <img src="img/3.png" alt="...">

    </div>
  </div>

  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container searchContainer">

<div class="row">
    <div class="col-sm-5 col-md-5 col-lg-5 searchPanel">
        <div class="col-sm-3 col-xs-3 col-md-3 col-lg-3 searchTabs">
            <p>内贸搜索</p>
            <p>货物跟踪</p>
            <p>内贸专线</p>
        </div>
        <div class="col-sm-9 col-xs-9 col-md-9 col-lg-9 searchBoard">
            
            <div class="input-group searchInput ">
                <span class="input-group-addon">起始地点</span>
                <input type="text" class="form-control" placeholder="汉字或拼音">
            </div>
            <div class="input-group searchInput marginTop20">
                <span class="input-group-addon">目的地点</span>
                <input type="text" class="form-control" placeholder="汉字或拼音">
            </div>
            <div class="input-group searchInput marginTop20">
                <span class="input-group-addon">运输时间</span>
                <input type="text" class="form-control" placeholder="汉字或拼音">
            </div>

            <button class="btn btn-warning searchBtn pull-right">搜索</button>
        </div>
    </div>
</div>
    
</div>


</section>

<!-- 团购产品开始 -->
<section >
    <div class="container tuangouCard">

    <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="sectionLabel">团购产品</div>
        </div>

        <div class="col-sm-6 col-md-6 col-lg-6">
            <button class="btn btn-warning pull-right btnMore">更多团购</button>
        </div>
    </div>

    <div class="row tuangouCtntRow">

        <div class="col-sm-6 col-md-6 col-lg-6 " >
            <div class="tuangouImgDiv">
                <img src="img/renjian1.png" alt="" class="tuangouImg">
                <img src="img/antongLogoCircle.png" alt="" class="brand">
            </div>
            <div class="tuangouTitleDiv" >
                <span>泉州--大连</span>  <span class="tuangouPrice ">团购价：￥1220</span> 
            </div>
            
        </div>

        <div class="col-sm-6 col-md-6 col-lg-6 tuangouTxt" >
        <p class="marginTop20"><span class="colorRed fz24 ">【团购价】 ￥1220</span > <span class="fz18 colorGrey pull-right lineThrough">原价：￥2320</span></p>
        <p>投入万吨大船</p>
        <p>船期密度  3天/班</p>
        <p>保障时效、保障仓位</p>
        <div class="timeDown bgRed"><p> <span class="marginLeft10">仅剩  1天4小时12分钟 </span>  <span class="pull-right marginRight10 ">1208人已经订舱</span></p></div>
        <button class="btn btn-warning">立即抢购</button>
        </div>


    </div>
</div>
</section>

<section >
    <div class="container ">

    <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="sectionLabel">特价产品</div>
        </div>

        <div class="col-sm-6 col-md-6 col-lg-6">
            <button class="btn btn-warning pull-right btnMore">更多特价</button>
        </div>
    </div>

    <div class="row saleSection">
        <div class="saleCard col-sm-6 col-md-3 col-lg-3 bdrRight">


            <div class="saleCardInner">
            <p><span class="fz24">泉州--上海</span><span class="colorRed fz24 pull-right">￥920</span></p>
            <p>活动日期：2016.8.1-21</p>
            <img src="img/b1.png" alt="">
            </div>
            
        </div>
        <div class="saleCard col-sm-6 col-md-3 col-lg-3 bdrRight">
            
            <div class="saleCardInner">
            <p><span class="fz24">泉州--上海</span><span class="colorRed fz24 pull-right">￥920</span></p>
            <p>活动日期：2016.8.1-21</p>
            <img src="img/b2.png" alt="">
            </div>
            <span class="sale left5" style="left:15px;">火爆</span>

        </div>
        <div class="saleCard col-sm-6 col-md-3 col-lg-3 bdrRight">
            
            <div class="saleCardInner">
            <p><span class="fz24">泉州--上海</span><span class="colorRed fz24 pull-right">￥920</span></p>
            <p>活动日期：2016.8.1-21</p>
            <img src="img/b3.png" alt="">
            </div>
        </div>
        <div class="saleCard col-sm-6 col-md-3 col-lg-3">
            
            <div class="saleCardInner">
            <p><span class="fz24">泉州--上海</span><span class="colorRed fz24 pull-right">￥920</span></p>
            <p>活动日期：2016.8.1-21</p>
            <img src="img/b4.png" alt="">
            </div>
        </div>
    </div>

    
</div>
</section>

<section >
    <div class="container ">

    <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="sectionLabel bgBlue">航线推荐</div>
        </div>

        <div class="col-sm-6 col-md-6 col-lg-6">
            <button class="btn btn-warning pull-right btnMore">更多航线</button>
        </div>
    </div>


    <div class="row marginBottom20" >
        <div class="col-sm-6 col-md-3 col-lg-3 routeCard" >
            <div class="routeCardInner ">
                <p>泉州<span class="dashLine">--</span>上海</p>
                <div class="routePrice">
                    <div>
                        <p>20GP</p>
                        <p class="colorRed fz18"><span class="fz12">￥</span>2400</p>
                    </div>
                    <div><p>20GP</p>
                        </div>
                    <div><p>20GP</p>
                        <p class="colorRed fz18"><span class="fz12">￥</span>3200</p></div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 routeCard">
            <div class="routeCardInner">
                <div class="beltWrap">
                    <div class="belt">
                        特价
                    </div>
                </div>
                <p>大连<span class="dashLine">--</span>青岛</p>
                <div class="routePrice">
                    <div>
                        <p>20GP</p>
                        <p class="colorRed fz18"><span class="fz12">￥</span>2400</p>
                    </div>
                    <div><p>20GP</p>
                        </div>
                    <div><p>20GP</p>
                        <p class="colorRed fz18"><span class="fz12">￥</span>3200</p></div>
                </div>


                
            </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 routeCard">
            <div class="routeCardInner">
                <p>营口<span class="dashLine">--</span>泉州</p>
                <div class="routePrice">
                    <div>
                        <p>20GP</p>
                        <p class="colorRed fz18"><span class="fz12">￥</span>2400</p>
                    </div>
                    <div><p>20GP</p>
                        </div>
                    <div><p>20GP</p>
                        <p class="colorRed fz18"><span class="fz12">￥</span>3200</p></div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 routeCard" >
            <div class="routeCardInner ">
                <p>海口<span class="dashLine">--</span>深圳</p>
                <div class="routePrice">
                    <div>
                        <p>20GP</p>
                        <p class="colorRed fz18"><span class="fz12">￥</span>2400</p>
                    </div>
                    <div><p>20GP</p>
                        </div>
                    <div><p>20GP</p>
                        <p class="colorRed fz18"><span class="fz12">￥</span>3200</p></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6 col-md-3 col-lg-3 routeCard" >
            <div class="routeCardInner ">
                <p>天津<span class="dashLine">--</span>营口</p>
                <div class="routePrice">
                    <div>
                        <p>20GP</p>
                        <p class="colorRed fz18"><span class="fz12">￥</span>2400</p>
                    </div>
                    <div><p>20GP</p>
                        </div>
                    <div><p>20GP</p>
                        <p class="colorRed fz18"><span class="fz12">￥</span>3200</p></div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 routeCard">
            <div class="routeCardInner">
               
                <p>青岛<span class="dashLine">--</span>大连</p>
                <div class="routePrice">
                    <div>
                        <p>20GP</p>
                        <p class="colorRed fz18"><span class="fz12">￥</span>2400</p>
                    </div>
                    <div><p>20GP</p>
                        </div>
                    <div><p>20GP</p>
                        <p class="colorRed fz18"><span class="fz12">￥</span>3200</p></div>
                </div>


                
            </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 routeCard">
            <div class="routeCardInner">
                <p>厦门<span class="dashLine">--</span>丹东</p>
                <div class="routePrice">
                    <div>
                        <p>20GP</p>
                        <p class="colorRed fz18"><span class="fz12">￥</span>2400</p>
                    </div>
                    <div><p>20GP</p>
                        </div>
                    <div><p>20GP</p>
                        <p class="colorRed fz18"><span class="fz12">￥</span>3200</p></div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 routeCard" >
            <div class="routeCardInner ">
             <div class="beltWrap" >
                    <div class="belt">
                        特价
                    </div>
                </div>
                <p>深圳<span class="dashLine">--</span>海口</p>
                <div class="routePrice">
                    <div>
                        <p>20GP</p>
                        <p class="colorRed fz18"><span class="fz12">￥</span>2400</p>
                    </div>
                    <div><p>20GP</p>
                        </div>
                    <div><p>20GP</p>
                        <p class="colorRed fz18"><span class="fz12">￥</span>3200</p></div>
                </div>
            </div>
        </div>
    </div>


        
    </div>

    
</section>


<section >
    <div class="container ">

    <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="sectionLabel bgBlue">积分兑换</div>
        </div>

        <div class="col-sm-6 col-md-6 col-lg-6">
            <button class="btn btn-warning pull-right btnMore">更多礼品</button>
        </div>
    </div>


    <div class="row marginBottom20" >
        <div class="col-sm-3 col-md-3 col-lg-3 giftCard" >
            <img src="img/gift1.png" alt="">
            <p class="giftCaption">家庭收纳好帮手 <span class="pull-right colorRed">500分</span></p>

        </div>
        <div class="col-sm-3 col-md-3 col-lg-3 giftCard">
           <img src="img/gift2.png" alt="">
            <p class="giftCaption">家庭收纳好帮手 <span class="pull-right colorRed">500分</span></p>
        </div>
        <div class="col-sm-3 col-md-3 col-lg-3 giftCard">
           <img src="img/gift3.png" alt="">
            <p class="giftCaption">家庭收纳好帮手 <span class="pull-right colorRed">500分</span></p>
        </div>
        <div class="col-sm-3 col-md-3 col-lg-3 giftCard" >
           <img src="img/gift4.png" alt="">
        <p class="giftCaption">家庭收纳好帮手 <span class="pull-right colorRed">500分</span></p>
        </div>
    </div>

    


        
    </div>

    
</section>

<section style="margin-top:-30px;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12" style="">
                <!--  -->
                <div ><img src="img/banner1.png" alt="" style="width:100%;"></div>
            </div>
        </div>
    </div>
</section>

<div id="popBg"></div>
<div id="pop"><button class="btn" onclick="closePop()"><i class="iconfont fz12 colorWhite" >&#xe61e;</i></button><img src="img/celebrate.jpg" alt=""></div>


<footer>
    <?php include 'footer.php'; ?>
</footer>

    <!-- <script src="jquery-3.1.0.js"></script> -->
    <script src="jquery-1.12.4.min.js"></script>

    <script src="bootstrap-3.3.7/dist/js/bootstrap.js"></script>
    <script src="jquery.rotate.js"></script>
    <script src="antong.js"></script>
    <script type="text/javascript">
        setMenu(0);
        $('.belt').css('rotate',45);

        // $(window).load(function()
        // {
        //     $('#pop').animate({top:'+100px'},500);
        //     $('#pop').delay(6000).animate({top:'-500px'},500);
        //     $('#pop').delay(7000).hide(0);
        //     $('#popBg').delay(7000).hide(0);
        // });
    </script>
</body>

</html>











