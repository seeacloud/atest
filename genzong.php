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

<section style="margin-top:20px;">
    <div class="container" >
        <div class="row" >

            <div class="col-sm-12 col-md-12 col-lg-12 ">
                <div class="tracePanel">

                    <div class="col-sm-3 col-md-3 col-lg-3">
                        <div class="input-group neimaoInput">
                          <span class="input-group-addon" id="basic-addon1">订舱单号</span>
                          <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1">
                        </div>
                    </div>    
                    <div class="col-sm-3 col-md-3 col-lg-3">
                        <div class="input-group neimaoInput">
                          <span class="input-group-addon" id="basic-addon1">运单号</span>
                          <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-3">
                        <div class="input-group neimaoInput">
                          <span class="input-group-addon" id="basic-addon1">箱号</span>
                          <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1">
                        </div>
                    </div>        

                      
                    <div class="col-sm-3 col-md-3 col-lg-3" style="position:relative;">
                        <button class="btn btn-warning traceBtn">搜索</button>
                    </div>    

                </div>
            </div>


        </div>
    </div>
</section>



<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="traceWrap">
                <div class="traceTitle">订单信息</div>
                <table class="traceTable">
                    <tr>
                        <td><img src="img/t1.png" alt="">提交订舱</td>
                        <td><img src="img/t2.png" alt="">接受订舱</td>
                        <td><img src="img/t3.png" alt="">派车</td>
                        <td><img src="img/t4.png" alt="">提柜</td>
                        <td><img src="img/t5.png" alt="">返港</td>
                        <td><img src="img/t6.png" alt="">装船</td>
                        <td><img src="img/t7.png" alt="">离港</td>
                        <td><img src="img/t8.png" alt="">到港</td>
                        <td><img src="img/t9.png" alt="">派车</td>
                        <td><img src="img/t10.png" alt="">签收</td>
                    </tr>
                </table>
                <div class="traceDashLine"></div>

                <div class="traceStatus"><span>您的货物已经签收</span></div>
                <div class="datePanel">
                    <table class="dateTable">
                        <tr>
                            <td class="traceDot"><span>2016-07-26</span></td>
                            <td><span>周二</span></td>
                            <td> <span>13:31:52</span></td>
                            <td><span>【泉州】</span></td> 
                            <td colspan="5" class="col5"><span>提交订舱</span></td>
                        </tr>
                        <tr>
                            <td class="traceDot"><span></span></td>
                            <td><span></span></td>
                            <td> <span>13:31:52</span></td>
                            <td><span>【泉州】</span></td> 
                            <td colspan="5" class="col5"><span>订单确认</span></td>
                        </tr>
                        <tr>
                            <td class="traceDot"><span></span></td>
                            <td><span></span></td>
                            <td> <span>13:31:52</span></td>
                            <td><span>【上海】</span></td> 
                            <td colspan="5" class="col5"><span>开始派车</span></td>
                        </tr>
                        <tr>
                            <td class="traceDot"><span>2016-07-27</span></td>
                            <td><span>周三</span></td>
                            <td> <span>13:31:52</span></td>
                            <td><span>【连云港】</span></td> 
                            <td colspan="5" class="col5"><span>接货完毕，准备返港</span></td>
                        </tr>
                        <tr>
                            <td class="traceDot"><span>2016-07-29</span></td>
                            <td><span>周五</span></td>
                            <td> <span>13:31:52</span></td>
                            <td><span>【青岛】</span></td> 
                            <td colspan="5" class="col5"><span>正在装船</span></td>
                        </tr>
                        <tr>
                            <td class="traceDot"><span></span></td>
                            <td><span></span></td>
                            <td> <span>13:31:52</span></td>
                            <td><span>【泉州】</span></td> 
                            <td colspan="5" class="col5"><span>船舶离港，正在运输途中...</span></td>
                        </tr>
                        <tr>
                            <td class="traceDot"><span>2016-07-26</span></td>
                            <td><span>周二</span></td>
                            <td> <span>13:31:52</span></td>
                            <td><span>【泉州】</span></td> 
                            <td colspan="5" class="col5"><span>船舶靠港，正在卸货...</span></td>
                        </tr>
                        <tr>
                            <td class="traceDot"><span></span></td>
                            <td><span></span></td>
                            <td> <span>13:31:52</span></td>
                            <td><span>【泉州】</span></td> 
                            <td colspan="5" class="col5"><span>船舶靠港，正在卸货...</span></td>
                        </tr>
                        <tr>
                            <td class="traceDot"><span></span></td>
                            <td><span></span></td>
                            <td> <span>13:31:52</span></td>
                            <td><span>【泉州】</span></td> 
                            <td colspan="5" class="col5"><span>船舶靠港，正在卸货...</span></td>
                        </tr>
                        <tr>
                            <td class="traceDot"><span></span></td>
                            <td><span></span></td>
                            <td> <span>13:31:52</span></td>
                            <td><span>【泉州】</span></td> 
                            <td colspan="5" class="col5"><span>船舶靠港，正在卸货...</span></td>
                        </tr>
                        <tr>
                            <td class="traceDot"><span></span></td>
                            <td><span></span></td>
                            <td> <span>13:31:52</span></td>
                            <td><span>【泉州】</span></td> 
                            <td colspan="5" class="col5"><span>正在为您派送，请保持电话畅通</span></td>
                        </tr>
                        <tr>
                            <td class="traceDot"><span></span></td>
                            <td><span></span></td>
                            <td> <span>13:31:52</span></td>
                            <td><span>【泉州】</span></td> 
                            <td colspan="5" class="col5"><span>客户签收。签收人为xxx.安通物流 期待再次为您服务</span></td>
                        </tr>
                    </table>
                </div>
                </div> <!-- trace wrap end -->

            </div> <!-- col- end -->
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
 	setMenu(6);
    // setImgCard();
    // setGiftImgDiv();
    </script>

</body>

</html>
