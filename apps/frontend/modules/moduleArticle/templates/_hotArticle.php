<?php
if (isset($articles) && $articles):
    ?>
    <div class="box-notic">
        <div class="btn-hot">TIN MỚI NHẬN</div>
        <div class="box-mequ">
            <marquee direction="left" width="480px" style="width: 480px;">
                <?php
                foreach($articles as $value):
                    ?>
                    <a href="<?php echo url_for2('article_detail',array('slug'=>$value['slug'])) ?>" title="<?php echo htmlspecialchars($value['title']); ?>">
                        <?php echo htmlspecialchars($value['title']); ?>
                    </a>
                <?php endforeach; ?>
            </marquee>

        </div>
    </div>
<?php endif; ?>