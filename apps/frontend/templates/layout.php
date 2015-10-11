<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--[if IE]>
    <link rel="stylesheet" type="text/css" href="all-ie-only.css"/>
    <![endif]-->
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico"/>
    <?php include_stylesheets() ?>
<!--    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
    <?php include_javascripts() ?>
</head>
<body>
<div id="main-header">
    <div class="top-header">
        <div class="content-top-header">
            <span class="txt-date-day"><?php echo VtHelper::getFormatDate(date('Y-m-d h:i:s')) . ' | GMT+7'; ?></span>
            <span class="txt-language">Ngôn ngữ: </span>
            <a class="a-language-viet" href="#">&nbsp;</a>
            <a class="a-language-eng" href="#">&nbsp;</a>
            <div class="split-header">
                <a href="#" class="txt-header">Đăng nhập</a>
            </div>
        </div>
        <div class="logo-halong">
            <a href="#"><img src="../img/logo-halong.jpg"/></a>

        </div>
        <div id="menu">
            <div class="nav">
                <?php include_component('moduleMenu','mainMenu'); ?>
            </div>
        </div>

    </div>
    <div class="new-header">

    </div>
</div>
<div class="container wrapper">
    <div id="box-news-top">
        <?php include_component('moduleArticle','hotArticle',array('limit'=>10,'att'=>1)) ?>
        <div class="yahoo">
            <a><img src="../img/yahoo.jpg" alt=""/></a>
        </div>
        <div id="form-search">
            <form class="frm-search" method="get" action="<?php echo url_for1('@page_search') ?>">
                <input type="text" class="in-search" name="query" placeholder="Nhập từ khóa tìm kiếm" value="">
                <input type="submit" value="">
            </form>
        </div>
    </div>


    <?php echo $sf_content ?>
    <div class="clear"></div>
</div>
<div id="dfooter">
    <div class="footer">
        <div class="foothr"></div>
        <div class="copyright">
            <div class="ilog">
                <?php include_component('moduleMenu','contentFooter') ?>
            </div>
            <div class="info vcard hide-on-small">
                Liên hệ quảng cáo<br>
                Thông tin Tòa soạn: <a style="font-weight:bold" href="mailto:hatinhdientu@gmail.com">nguoilambao168@gmail.com</a><br>
				<div align='right'><a href='http://hoinhabaohatinh.vn'>Lượt truy cập</a><br /><a href='http://hoinhabaohatinh.vn'><img src='http://www.hit-counts.com/counter.php?t=MTM2NTEyOA==' border='0' alt='Lượt truy cập'></a></div>
            </div>
            <div style="clear:both"></div>
        </div>
    </div>
    <div id='bttop' class="back-to-top"></div>
</div>
</body>

</html>
