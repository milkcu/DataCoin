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
        width: 110px;
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
            <th>用户编号</th>
            <th>原系统编号</th>
            <th>手机号码</th>
            <th>赠送流量总和</th>
            <th>今日赠送流量</th>
            <th>用户操作</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($userlist as $user) : ?>
            <tr>
                <form method="post" action="<?= site_url('user/state') ?>">
                    <input type="hidden" name="uid" value="<?= $user->uid ?>">
                    <td><?= $user->uid ?></td>
                    <td><?= $user->pid ?></td>
                    <td><?= $user->mobile ?></td>
                    <td><?= $user->sum ?></td>
                    <td><?= $user->today ?></td>
                    <td><input type="checkbox" name="black"
                            <?php if($user->state == 'black') echo 'checked'; ?>>黑名单</td>
                    <td><input type="submit" value="修改"></td>
                </form>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<div class="user-page" style="text-align: center;">
    <?php echo $this->pagination->create_links() ?>
</div>

<?php $this->load->view('layout/htfooter'); ?>
