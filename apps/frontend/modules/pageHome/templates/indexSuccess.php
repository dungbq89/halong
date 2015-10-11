<div class="col-left">
    <?php include_component('moduleAdvertise','topOne'); ?>
</div>

<div class="col-right-new">
    <div class="tinh-nang">
        <h3 class="h3-tinh-nang"><?php echo __("Tính năng thường dùng"); ?></h3>
        <ul class="ul-tinh-nang">
            <li style="background: url('../img/icon-mess.jpg') no-repeat;"><a href="#">Diễn Đàn</a></li>
            <li style="background: url('../img/totnghiep.jpg') no-repeat;"><a href="#">Danh sách tốt nghiệp tạm thời</a></li>
            <li style="background: url('../img/hopthu.jpg') no-repeat;"><a href="#">Hộp thư giảng viên</a></li>
            <li style="background: url('../img/icon-mess.jpg') no-repeat;"><a href="#">Hộp thư sinh viên</a></li>
            <li style="background: url('../img/totnghiep.jpg') no-repeat;"><a href="#">Nhân sự</a></li>
            <li style="background: url('../img/hopthu.jpg') no-repeat;"><a href="#">Quản lý lớp học</a></li>
            <li style="background: url('../img/icon-mess.jpg') no-repeat;"><a href="#">Sàn giao dịch công nghệ</a></li>
            <li style="background: url('../img/totnghiep.jpg') no-repeat;"><a href="#">Tra cứu TT đăng ký xét tuyển</a></li>
            <li style="background: url('../img/hopthu.jpg') no-repeat;"><a href="#">Xem điểm trực tuyến</a></li>

        </ul>
    </div>
</div>



<div class="box-hot">
    
    <div class="clear"></div>
    <div class="line"></div>
    <?php include_component('moduleArticle','focusNews',array('limit'=>5,'att'=>8)) ?>
    <div class="clear"></div>
    <div class="main">
        <div class="col-main">
        <?php include_component('moduleAdvertise','left',array('location'=>'left')) ?>
        <?php include_component('moduleArticle','categoryNews',array('limit'=>15)) ?>
        </div>
        <div class="col-right">
            <?php include_component('moduleVideo','listVideoHome',array('limit'=>5)) ?>
            <?php include_component('moduleAdvertise','advertise',array('location'=>'right_middle')); ?>
            <?php include_component('moduleArticle','readNews',array('limit'=>5)) ?>
            <?php include_component('moduleDocument','hotDocument',array('limit'=>3)) ?>
            <?php include_component('moduleArticle','categoryHot',array('limit'=>3)) ?>
            <?php include_component('moduleMenu','linkRight') ?>
            <?php include_component('moduleAdvertise','advertise',array('location'=>'right')); ?>

        </div>
    </div>
    <div class="clear"></div>
</div>

<?php include_component('moduleAdvertise','advertise',array('location'=>'bottom')); ?>