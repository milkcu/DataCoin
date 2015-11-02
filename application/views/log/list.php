<?php $this->load->view('layout/htheader'); ?>

<style>
    .user-prompt {
        display: none;
        font-size: 15px;
        text-align: center;
        color: #3c763d;
        background: #dff0d8;
        border-color: #d6e9c6;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;
        padding: 15px 20px;
        margin-top: 15px;
        margin-bottom: 20px;
    }
    .user-log {
        width: 100%;
    }
    .tab-log {
        margin-left: auto;
        margin-right: auto;
        text-align: center;
        line-height: 30px;
    }
    .tab-log th {
        font-size: 16px;
        width: 80px;
        font-weight: boldor;
    }
    .tab-log td {
        font-size: 15px;
    }
    .user-page {
        width: 100%;
        margin: 20px auto;
        text-align: center;
        font-size: 15px;
        overflow: hidden;
    }
    .user-page strong {
        margin: 0 5px;
        padding: 3px 9px;
    }
    .user-page a {
        margin: 0 5px;
        padding: 3px 9px;
    }
    .user-page a:hover{
        background:#2ba339;
        color:#fff;
    }
</style>

<div class="user-prompt">
    欢迎参与千游网下游戏赠流量活动，您已累计赠送 <strong><?= 1 ?></strong> 个流量币，
    今日获得流量币 <strong><?= 2 ?></strong> 个，
    流量赠送明细如下.
</div>

<div class="user-log">
    <table class="tab-log">
        <thead>
        <tr>
            <th>赠送编号</th>
            <th>游戏编号</th>
            <th>游戏名称</th>
            <th>用户编号</th>
            <th style="width: 90px;">赠送手机号</th>
            <th>流量币数</th>
            <th style="width: 125px;;">处理时间</th>
            <th style="width: 185px">交易编号</th>
            <th>交易结果</th>
            <th>返回码</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($loglist as $log) : ?>
            <tr>
                <td><?= $log->lid ?></td>
                <td><?= $log->gid ?></td>
                <td><?= $log->game->pname ?></td>
                <td><?= $log->uid ?></td>
                <td><?= $log->mobile ?></td>
                <td><?= $log->coinnum ?></td>
                <td><?= $log->dealtime ?></td>
                <td><?= $log->dealno ?></td>
                <td><?php if($log->returncode == 0) echo '赠送成功'; else echo '赠送失败'; ?></td>
                <td><?= $log->returncode ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<div class="user-page" style="text-align: center;">
    <?php echo $this->pagination->create_links() ?>
</div>

<?php $this->load->view('layout/htfooter'); ?>
