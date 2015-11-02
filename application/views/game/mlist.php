<?php $this->load->view('layout/mheader'); ?>

<!--div class="yxk_lb">
    <?php foreach($gamelist as $game) : ?>
        <div class="yxk_nr">
            <div class="yxk_nr_tu">
                <a onclick="alert('欢迎参与下游戏赠流量活动，流量币赠送结果可在个人中心查询！');location.href='<?= site_url('coin/give/'.$game->gid) ?>';" href="<?= $game->pfile ?>" target="_blank">
                    <img src="<?= $game->pimg ?>" width="100" height="100" alt="<?= $game->pname ?>">
                    <span class="yxk_nr_imgkk"></span><br><b><?= $game->pname ?></b>
                </a>
            </div>
            <div class="xx"><span class="stars star4"></span></div>
            <div class="yxk_nr_2">
                <div class="pt"><em class="em1"></em> <span>下载赠送流量币</span></div>
                <p><span>还剩<?= $game->coinnow ?>个</span>| 总共<?= $game->coinlimit ?>个</p>
            </div>
        </div>
    <?php endforeach; ?>
</div-->

<pre>
    <?php print_r($gamelist); ?>
</pre>

<div class="gy_page">
    <?php echo $this->pagination->create_links() ?>
</div>

<?php $this->load->view('layout/mfooter'); ?>
