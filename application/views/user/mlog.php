<?php $this->load->view('layout/mheader'); ?>
<style>
    .user-prompt {
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
        margin-left: auto;
        margin-right: auto;
        width: 86%;
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
        width: 150px;
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
    欢迎参与千游网下游戏赠流量活动，您已累计赠送 <strong><?= $user->sum ?></strong> 个流量币，
    每日对多获得流量币 <strong><?= $coinlimit ?></strong> 个，
    流量赠送明细如下。
</div>

<div class="user-log">
    <table class="tab-log">
        <thead>
        <tr>
            <!--th>赠送编号</th-->
            <th>游戏名称</th>
            <!--th>流量币数</th-->
            <th>赠送手机号</th>
            <th>处理时间</th>
            <th>处理结果</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($loglist as $log) : ?>
            <tr>
                <!--td><?= $log->lid ?></td-->
                <td><?= $log->game->pname ?></td>
                <!--td><?= $log->coinnum ?></td-->
                <td><?= $log->mobile ?></td>
                <td><?= $log->dealtime ?></td>
                <td><?php if($log->returncode == 0) echo '赠送成功'; else echo '赠送失败'; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<div class="user-page" style="text-align: center;">
    <?php echo $this->pagination->create_links() ?>
</div>

<pre>
    <?php //print_r($loglist); ?>
</pre>

<?php $this->load->view('layout/mfooter'); ?>
