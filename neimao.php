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
        <div class="row neimaoSearchRow" >

            <div class="col-sm-12 col-md-12 col-lg-12">
                <div style="background:#D3E4F9;height:130px; border:1px solid #7CADEE;">

                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="input-group neimaoInput">
                          <span class="input-group-addon" id="basic-addon1">出发地</span>
                          <input type="text" class="form-control" placeholder="汉字或拼音" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group neimaoInput">
                          <span class="input-group-addon" id="basic-addon1">目的地</span>
                          <input type="text" class="form-control" placeholder="汉字或拼音" aria-describedby="basic-addon1">
                        </div>

                    </div>    
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="input-group neimaoInput">
                          <span class="input-group-addon" id="basic-addon1">运输时间</span>
                          <input type="text" class="form-control" placeholder="汉字或拼音" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group neimaoInput">
                          <span class="input-group-addon" id="basic-addon1">运输条款</span>
                          <input type="text" class="form-control" placeholder="汉字或拼音" aria-describedby="basic-addon1">
                        </div>
                    </div>    

                    <div class="col-sm-2 col-md-2 col-lg-2">
                        <div class="checkbox neimaoCheck" style="margin-top:18px;">
                        <label>
                          <input type="checkbox">会员专享
                        </label>
                      </div>
                      <div class="checkbox neimaoCheck">
                        <label>
                          <input type="checkbox"> 带钢专线
                        </label>
                      </div>
                      <div class="checkbox neimaoCheck">
                        <label>
                          <input type="checkbox"> 水渣粉专线
                        </label>
                      </div>
                      <div class="checkbox neimaoCheck">
                        <label>
                          <input type="checkbox"> 煤渣专线
                        </label>
                      </div>
                    </div>    
                    <div class="col-sm-2 col-md-2 col-lg-2" style="position:relative;">
                        <button class="btn btn-warning neimaoSearchBtn">搜索</button>
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
                <div >
                    <table class="table table-striped  table-hover neimaoTable">
                        <tr>
                            <th>起始</th>
                            <th>装港</th>
                            <th>航线</th>
                            <th>卸港</th>
                            <th>目的地</th>
                            <th></th>
                            <th>20'</th>
                            <th>40'</th>
                            <th>40H'</th>
                            <th>20RF</th>
                            <th>40RF</th>
                        </tr>
                        <tr>
                            <td>泉州
                            <p class="infoTxt">
                                条款：<span class="colorRed">港到港</span>
                            </p></td>
                            <td>泉州港
                            <p class="fz12 colorGrey">ETD:08-20</p>
                            </td>
                            <td class="routeNumTd">
                                <p class="routeNum">HAISI-1 668</p>
                                <p>CF18</p>
                                <p class="infoTxt">预计航程：<span class="colorRed">3</span> 天</p>
                            </td>
                            <td>上海</td>
                            <td>上海</td>
                            <td> </td>
                            <td class="colorRed">￥1325</td>
                            <td class="colorRed">￥2535</td>
                            <td class="colorRed">￥2700</td>
                            <td class="colorRed">---</td>
                            <td class="colorRed">---
                                <button class="btn btn-warning btnOrder">订舱</button>
                            </td>
                        </tr>
                        <tr>
                            <td>泉州
                            <p class="infoTxt">
                                条款：<span class="colorRed">港到港</span>
                            </p></td>
                            <td>泉州港
                            <p class="fz12 colorGrey">ETD:08-20</p>
                            </td>
                            <td class="routeNumTd">
                                <p class="routeNum">HAISI-1 668</p>
                                <p>CF18</p>
                                <p class="infoTxt">预计航程：<span class="colorRed">3</span> 天</p>
                            </td>
                            <td>上海</td>
                            <td>上海</td>
                            <td> </td>
                            <td class="colorRed">￥1325</td>
                            <td class="colorRed">￥2535</td>
                            <td class="colorRed">￥2700</td>
                            <td class="colorRed">---</td>
                            <td class="colorRed">---
                                <button class="btn btn-warning btnOrder">订舱</button>
                            </td>
                        </tr>
                        <tr>
                            <td>泉州
                            <p class="infoTxt">
                                条款：<span class="colorRed">港到港</span>
                            </p></td>
                            <td>泉州港
                            <p class="fz12 colorGrey">ETD:08-20</p>
                            </td>
                            <td class="routeNumTd">
                                <p class="routeNum">HAISI-1 668</p>
                                <p>CF18</p>
                                <p class="infoTxt">预计航程：<span class="colorRed">3</span> 天</p>
                            </td>
                            <td>上海</td>
                            <td>上海</td>
                            <td> </td>
                            <td class="colorRed">￥1325</td>
                            <td class="colorRed">￥2535</td>
                            <td class="colorRed">￥2700</td>
                            <td class="colorRed">---</td>
                            <td class="colorRed">---
                                <button class="btn btn-warning btnOrder">订舱</button>
                            </td>
                        </tr>
                        <tr>
                            <td>泉州
                            <p class="infoTxt">
                                条款：<span class="colorRed">港到港</span>
                            </p></td>
                            <td>泉州港
                            <p class="fz12 colorGrey">ETD:08-20</p>
                            </td>
                            <td class="routeNumTd">
                                <p class="routeNum">HAISI-1 668</p>
                                <p>CF18</p>
                                <p class="infoTxt">预计航程：<span class="colorRed">3</span> 天</p>
                            </td>
                            <td>上海</td>
                            <td>上海</td>
                            <td> </td>
                            <td class="colorRed">￥1325</td>
                            <td class="colorRed">￥2535</td>
                            <td class="colorRed">￥2700</td>
                            <td class="colorRed">---</td>
                            <td class="colorRed">---
                                <button class="btn btn-warning btnOrder">订舱</button>
                            </td>
                        </tr>
                        <tr>
                            <td>泉州
                            <p class="infoTxt">
                                条款：<span class="colorRed">港到港</span>
                            </p></td>
                            <td>泉州港
                            <p class="fz12 colorGrey">ETD:08-20</p>
                            </td>
                            <td class="routeNumTd">
                                <p class="routeNum">HAISI-1 668</p>
                                <p>CF18</p>
                                <p class="infoTxt">预计航程：<span class="colorRed">3</span> 天</p>
                            </td>
                            <td>上海</td>
                            <td>上海</td>
                            <td> </td>
                            <td class="colorRed">￥1325</td>
                            <td class="colorRed">￥2535</td>
                            <td class="colorRed">￥2700</td>
                            <td class="colorRed">---</td>
                            <td class="colorRed">---
                                <button class="btn btn-warning btnOrder">订舱</button>
                            </td>
                        </tr>
                        <tr>
                            <td>泉州
                            <p class="infoTxt">
                                条款：<span class="colorRed">港到港</span>
                            </p></td>
                            <td>泉州港
                            <p class="fz12 colorGrey">ETD:08-20</p>
                            </td>
                            <td class="routeNumTd">
                                <p class="routeNum">HAISI-1 668</p>
                                <p>CF18</p>
                                <p class="infoTxt">预计航程：<span class="colorRed">3</span> 天</p>
                            </td>
                            <td>上海</td>
                            <td>上海</td>
                            <td> </td>
                            <td class="colorRed">￥1325</td>
                            <td class="colorRed">￥2535</td>
                            <td class="colorRed">￥2700</td>
                            <td class="colorRed">---</td>
                            <td class="colorRed">---
                                <button class="btn btn-warning btnOrder">订舱</button>
                            </td>
                        </tr>

                        <tr>
                            <td>泉州
                            <p class="infoTxt">
                                条款：<span class="colorRed">港到港</span>
                            </p></td>
                            <td>泉州港
                            <p class="fz12 colorGrey">ETD:08-20</p>
                            </td>
                            <td class="routeNumTd">
                                <p class="routeNum">HAISI-1 668</p>
                                <p>CF18</p>
                                <p class="infoTxt">预计航程：<span class="colorRed">3</span> 天</p>
                            </td>
                            <td>上海</td>
                            <td>上海</td>
                            <td> </td>
                            <td class="colorRed">￥1325</td>
                            <td class="colorRed">￥2535</td>
                            <td class="colorRed">￥2700</td>
                            <td class="colorRed">---</td>
                            <td class="colorRed">---
                                <button class="btn btn-warning btnOrder">订舱</button>
                            </td>
                        </tr>

                        <tr>
                            <td>泉州
                            <p class="infoTxt">
                                条款：<span class="colorRed">港到港</span>
                            </p></td>
                            <td>泉州港
                            <p class="fz12 colorGrey">ETD:08-20</p>
                            </td>
                            <td class="routeNumTd">
                                <p class="routeNum">HAISI-1 668</p>
                                <p>CF18</p>
                                <p class="infoTxt">预计航程：<span class="colorRed">3</span> 天</p>
                            </td>
                            <td>上海</td>
                            <td>上海</td>
                            <td> </td>
                            <td class="colorRed">￥1325</td>
                            <td class="colorRed">￥2535</td>
                            <td class="colorRed">￥2700</td>
                            <td class="colorRed">---</td>
                            <td class="colorRed">---
                                <button class="btn btn-warning btnOrder">订舱</button>
                            </td>
                        </tr>

                        <tr>
                            <td>泉州
                            <p class="infoTxt">
                                条款：<span class="colorRed">港到港</span>
                            </p></td>
                            <td>泉州港
                            <p class="fz12 colorGrey">ETD:08-20</p>
                            </td>
                            <td class="routeNumTd">
                                <p class="routeNum">HAISI-1 668</p>
                                <p>CF18</p>
                                <p class="infoTxt">预计航程：<span class="colorRed">3</span> 天</p>
                            </td>
                            <td>上海</td>
                            <td>上海</td>
                            <td> </td>
                            <td class="colorRed">￥1325</td>
                            <td class="colorRed">￥2535</td>
                            <td class="colorRed">￥2700</td>
                            <td class="colorRed">---</td>
                            <td class="colorRed">---
                                <button class="btn btn-warning btnOrder">订舱</button>
                            </td>
                        </tr>

                        <tr>
                            <td>泉州
                            <p class="infoTxt">
                                条款：<span class="colorRed">港到港</span>
                            </p></td>
                            <td>泉州港
                            <p class="fz12 colorGrey">ETD:08-20</p>
                            </td>
                            <td class="routeNumTd">
                                <p class="routeNum">HAISI-1 668</p>
                                <p>CF18</p>
                                <p class="infoTxt">预计航程：<span class="colorRed">3</span> 天</p>
                            </td>
                            <td>上海</td>
                            <td>上海</td>
                            <td> </td>
                            <td class="colorRed">￥1325</td>
                            <td class="colorRed">￥2535</td>
                            <td class="colorRed">￥2700</td>
                            <td class="colorRed">---</td>
                            <td class="colorRed">---
                                <button class="btn btn-warning btnOrder">订舱</button>
                            </td>
                        </tr>

                        <tr>
                            <td>泉州
                            <p class="infoTxt">
                                条款：<span class="colorRed">港到港</span>
                            </p></td>
                            <td>泉州港
                            <p class="fz12 colorGrey">ETD:08-20</p>
                            </td>
                            <td class="routeNumTd">
                                <p class="routeNum">HAISI-1 668</p>
                                <p>CF18</p>
                                <p class="infoTxt">预计航程：<span class="colorRed">3</span> 天</p>
                            </td>
                            <td>上海</td>
                            <td>上海</td>
                            <td> </td>
                            <td class="colorRed">￥1325</td>
                            <td class="colorRed">￥2535</td>
                            <td class="colorRed">￥2700</td>
                            <td class="colorRed">---</td>
                            <td class="colorRed">---
                                <button class="btn btn-warning btnOrder">订舱</button>
                            </td>
                        </tr>
                        
                    </table>
                </div>
            </div>
            
        </div>

        <div class="row">
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

    <!-- <script src="jquery-3.1.0.js"></script> -->
    <script src="jquery-1.12.4.min.js"></script>
    <script src="bootstrap-3.3.7/dist/js/bootstrap.js"></script>
    <script src="antong.js"></script>
    <script type="text/javascript">
 	setMenu(1);
    </script>

</body>

</html>
