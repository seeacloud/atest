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
<section>
    <img src="img/jifenBanner.png" alt="" class="tuangouBannerImg">
</section>

<section >
    <div class="container">
        <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <table class="userInfo" >
                <tr >
                    <td style="width:30px;"></td>
                    <td class="userIcon"><img src="img/user.png" alt="" ></td>
                    <td class="userNum ">
                        <p><span class="color666">会员号：</span><span class="colorBlue">8888 8888</span></p>
                        <p> <i class="iconfont fz18">&#xe605;</i><i class="iconfont fz18">&#xe605;</i><i class="iconfont fz18">&#xe605;</i><i class="iconfont fz18">&#xe605;</i><i class="iconfont fz18">&#xe601;</i></p>
                    </td>
                    <td class="jifenCurrent"> <p>积分余额：<span class="colorRed fz24">8688</span></p><p>可用积分：<span class="colorRed fz24">8688</span></p></td>
                    <td class="jifenIcon"><img src="img/jifenExchange.png" alt="" >
                    <p class="fz12 color999">积分转赠</p></td>
                    <td class="jifenIcon"><img src="img/jifenSearch.png" alt="" >
                    <p class="fz12 color999">积分查询</p></td>
                    <td class="jifenIcon"><img src="img/jifenMark.png" alt="" >
                    <p class="fz12 color999">我的收藏</p></td>
                    <td class="jifenIcon"><img src="img/jifenUser.png" alt="" >
                    <p class="fz12 color999">用户信息</p></td>
                </tr>
            </table>
        </div>
            
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <table class="giftTable">
                <tr>
                    <th colspan="3">礼品筛选<span class="fz12">(共搜索到1298件礼品)</span></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                <tr>
                    <td>礼品分类</td>
                    <td class="colorRed">不限</td>
                    <td>烹饪厨具(334)</td>
                    <td>手机配件(432)</td>
                    <td>床上用品(993)</td>
                    <td>毛巾浴巾(223)</td>
                    <td>保鲜收纳(987)</td>
                    <td><button class="btn giftMultiBtn ">+多选</button></td>
                    <td>更多</td>
                </tr>

                <tr>
                    <td>品牌</td>
                    <td class="colorRed">不限</td>
                    <td>ELLE</td>
                    <td>爱仕达</td>
                    <td>格兰仕</td>
                    <td>沙宣</td>
                    <td>欧莱雅</td>
                    <td><button class="btn giftMultiBtn ">+多选</button></td>
                    <td>更多</td>
                </tr>

                <tr>
                    <td>积分范围</td>
                    <td class="colorRed">不限</td>
                    <td colspan="4">
                        <ul class="jifenUl">
                            <li>0-999</li>
                            <li>1000-1999</li>
                            <li>2000-2999</li>
                            <li>3000-3999</li>
                            <li>4000+</li>
                        </ul>
                    </td>
                    
                    <td colspan="3" class="taRight">
                        <input type="text" class="giftInput">-
                        <input type="text" class="giftInput">
                        <button class="btn btn-danger  giftConfirmBtn">确定</button>
                    </td>
                </tr>
                <tr>
                    <td>支付方式</td>
                    <td class="colorRed">不限</td>
                    <td>全积分</td>
                    <td>积分+现金</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>

            <div class="sortBar">
                <span style="display:inline-block;float:left;" >排序方式</span>

                <ul class="sortUl">
                    <li><button class="sortActive">兑换排行</button></li>
                    <li><button>新品</button></li>
                    <li><button>积分值</button></li>
                    <li><button>用户评分</button></li>
                </ul>
                <div style="display:inline-block;width:20px;height:100%;float:left;"></div>
                <div class="chkbox">
                    <input type="checkbox">
                    礼品折扣
                </div>
                <div class="sortInput">
                    <input type="text">
                    <button class="btn btn-danger">确认</button>
                </div>
                <div class="sortPage">
                    <span class="colorRed ">1</span>/88 

                    <button><</button>
                    <button>></button>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>


<section style="margin-top:-30px;" class="giftSection">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-md-3 col-lg-3">
                <div class="giftCard">
                    <div class="giftImgDiv">
                        <img src="img/gift5.jpg" alt="">
                    </div>
                    <h4>维生素C咀嚼片</h4>
                    <p>积分：<span class="colorRed">4300</span> </p>
                    <button class="btn btn-danger">兑换</button>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3">
                <div class="giftCard">
                    <div class="giftImgDiv">
                        <img src="img/gift6.jpg" alt="">
                    </div>
                    <h4>维生素C咀嚼片</h4>
                    <p>积分：<span class="colorRed">4300</span> </p>
                    <button class="btn btn-danger">兑换</button>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3">
                <div class="giftCard">
                    <div class="giftImgDiv">
                        <img src="img/gift7.jpg" alt="">
                    </div>
                    <h4>维生素C咀嚼片</h4>
                    <p>积分：<span class="colorRed">4300</span> </p>
                    <button class="btn btn-danger">兑换</button>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3">
                <div class="giftCard">
                    <div class="giftImgDiv">
                        <img src="img/gift8.jpg" alt="">
                    </div>
                    <h4>维生素C咀嚼片</h4>
                    <p>积分：<span class="colorRed">4300</span> </p>
                    <button class="btn btn-danger">兑换</button>
                </div>
            </div>
        </div>

<div class="row">
            <div class="col-sm-3 col-md-3 col-lg-3">
                <div class="giftCard">
                    <div class="giftImgDiv">
                        <img src="img/gift9.jpg" alt="">
                    </div>
                    <h4>维生素C咀嚼片</h4>
                    <p>积分：<span class="colorRed">4300</span> </p>
                    <button class="btn btn-danger">兑换</button>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3">
                <div class="giftCard">
                    <div class="giftImgDiv">
                        <img src="img/gift10.jpg" alt="">
                    </div>
                    <h4>维生素C咀嚼片</h4>
                    <p>积分：<span class="colorRed">4300</span> </p>
                    <button class="btn btn-danger">兑换</button>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3">
                <div class="giftCard">
                    <div class="giftImgDiv">
                        <img src="img/gift11.jpg" alt="">
                    </div>
                    <h4>维生素C咀嚼片</h4>
                    <p>积分：<span class="colorRed">4300</span> </p>
                    <button class="btn btn-danger">兑换</button>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3">
                <div class="giftCard">
                    <div class="giftImgDiv">
                        <img src="img/gift12.jpg" alt="">
                    </div>
                    <h4>维生素C咀嚼片</h4>
                    <p>积分：<span class="colorRed">4300</span> </p>
                    <button class="btn btn-danger">兑换</button>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3 col-md-3 col-lg-3">
                <div class="giftCard">
                    <div class="giftImgDiv">
                        <img src="img/gift13.jpg" alt="">
                    </div>
                    <h4>维生素C咀嚼片</h4>
                    <p>积分：<span class="colorRed">4300</span> </p>
                    <button class="btn btn-danger">兑换</button>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3">
                <div class="giftCard">
                    <div class="giftImgDiv">
                        <img src="img/gift14.jpg" alt="">
                    </div>
                    <h4>维生素C咀嚼片</h4>
                    <p>积分：<span class="colorRed">4300</span> </p>
                    <button class="btn btn-danger">兑换</button>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3">
                <div class="giftCard">
                    <div class="giftImgDiv">
                        <img src="img/gift15.jpg" alt="">
                    </div>
                    <h4>维生素C咀嚼片</h4>
                    <p>积分：<span class="colorRed">4300</span> </p>
                    <button class="btn btn-danger">兑换</button>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3">
                <div class="giftCard">
                    <div class="giftImgDiv">
                        <img src="img/gift16.jpg" alt="">
                    </div>
                    <h4>维生素C咀嚼片</h4>
                    <p>积分：<span class="colorRed">4300</span> </p>
                    <button class="btn btn-danger">兑换</button>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3 col-md-3 col-lg-3">
                <div class="giftCard">
                    <div class="giftImgDiv">
                        <img src="img/gift17.jpg" alt="">
                    </div>
                    <h4>维生素C咀嚼片</h4>
                    <p>积分：<span class="colorRed">4300</span> </p>
                    <button class="btn btn-danger">兑换</button>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3">
                <div class="giftCard">
                    <div class="giftImgDiv">
                        <img src="img/gift18.jpg" alt="">
                    </div>
                    <h4>维生素C咀嚼片</h4>
                    <p>积分：<span class="colorRed">4300</span> </p>
                    <button class="btn btn-danger">兑换</button>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3">
                <div class="giftCard">
                    <div class="giftImgDiv">
                        <img src="img/gift19.jpg" alt="">
                    </div>
                    <h4>维生素C咀嚼片</h4>
                    <p>积分：<span class="colorRed">4300</span> </p>
                    <button class="btn btn-danger">兑换</button>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3">
                <div class="giftCard">
                    <div class="giftImgDiv">
                        <img src="img/gift20.jpg" alt="">
                    </div>
                    <h4>维生素C咀嚼片</h4>
                    <p>积分：<span class="colorRed">4300</span> </p>
                    <button class="btn btn-danger">兑换</button>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3 col-md-3 col-lg-3">
                <div class="giftCard">
                    <div class="giftImgDiv">
                        <img src="img/gift5.jpg" alt="">
                    </div>
                    <h4>维生素C咀嚼片</h4>
                    <p>积分：<span class="colorRed">4300</span> </p>
                    <button class="btn btn-danger">兑换</button>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3">
                <div class="giftCard">
                    <div class="giftImgDiv">
                        <img src="img/gift6.jpg" alt="">
                    </div>
                    <h4>维生素C咀嚼片</h4>
                    <p>积分：<span class="colorRed">4300</span> </p>
                    <button class="btn btn-danger">兑换</button>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3">
                <div class="giftCard">
                    <div class="giftImgDiv">
                        <img src="img/gift7.jpg" alt="">
                    </div>
                    <h4>维生素C咀嚼片</h4>
                    <p>积分：<span class="colorRed">4300</span> </p>
                    <button class="btn btn-danger">兑换</button>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3">
                <div class="giftCard">
                    <div class="giftImgDiv">
                        <img src="img/gift8.jpg" alt="">
                    </div>
                    <h4>维生素C咀嚼片</h4>
                    <p>积分：<span class="colorRed">4300</span> </p>
                    <button class="btn btn-danger">兑换</button>
                </div>
            </div>
        </div>

        <div class="row" style="margin-bottom:0;">
            <div class="col-sm-12 col-md-12 col-lg-12" style="text-align:right;float:right;">
            <button class="btn  neimaoPageBtn">Go</button>
            <input type="text" placeholder="请输入页码" class="pageInput">
               <ul class="neimaoPagination">
                   <li><a href="#"><<</a></li>
                   <li><a href="#">1</a></li>
                   <li><a href="#">2</a></li>
                   <li><a href="#">3</a></li>
                   <li class="pageDots">...</li>
                   <li><a href="#">512</a></li>
                   <li><a href="#">>></a></li>
               </ul>
            </div>
        </div>

    </div>
</section>



<footer>
    <?php include 'footer.php'; ?>
</footer>

    <script src="jquery-1.12.4.min.js"></script>
    <script src="bootstrap-3.3.7/dist/js/bootstrap.js"></script>
    <script src="antong.js"></script>
    <script type="text/javascript">
 	setMenu(10);
    // setImgCard();
    setGiftImgDiv();
    </script>

</body>

</html>
