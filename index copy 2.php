<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>antong</title>
    <link rel="stylesheet" href="bootstrap-3.3.7/dist/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="header">
</div>

<header>
    
<?php include 'header.php';?>

</header>

<section style="position:relative;">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators carouselDots">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
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

  <!-- Controls -->
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
        <div class="col-sm-3 col-xs-3 searchTabs">
            <p>内贸搜索</p>
            <p>货物跟踪</p>
            <p>内贸专线</p>
        </div>
        <div class="col-sm-9 col-xs-9">
            
            <div class="input-group input-group searchInput">
                <span class="input-group-addon">起始地点</span>
                <input type="text" class="form-control" placeholder="汉字或拼音">
            </div>
            <div class="input-group input-group searchInput">
                <span class="input-group-addon">目的地点</span>
                <input type="text" class="form-control" placeholder="汉字或拼音">
            </div>
            <div class="input-group input-group searchInput">
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
<section>
    <div class="container tuangouCard">
        <div class="col-sm-6 col-md-6 col-lg-6">
            团购产品
        </div>

        <div class="col-sm-6 col-md-6 col-lg-6">
            asdfasdfasd
        </div>
    </div>
</section>



<footer>
    <?php include 'footer.php'; ?>
</footer>

    <script src="jquery-3.1.0.js"></script>
    <script src="bootstrap-3.3.7/dist/js/bootstrap.js"></script>
    <script src="antong.js"></script>
    <script type="text/javascript">
        setMenu(0);
    </script>
</body>

</html>











