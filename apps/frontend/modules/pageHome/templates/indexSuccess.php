<div class="col-left">
    <?php include_component('moduleAdvertise','topOne'); ?>
    <?php include_component('moduleArticle','categoryNews',array('limit'=>15)) ?>
</div>

<div class="col-right-new">
    <?php include_component('moduleRight','tinhNang'); ?>
    <?php include_component('moduleRight','linkImages'); ?>
    <?php include_component('moduleVideo','listVideoHome',array('limit'=>5)) ?>

    <?php include_component('moduleMenu','linkRight') ?>
</div>