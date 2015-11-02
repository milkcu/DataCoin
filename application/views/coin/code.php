<?php $this->load->view('layout/htheader'); ?>


<p>
    <br/>
</p>

<table>
    <colgroup>
        <col/>
        <col/>
        <col/>
        <col/>
        <col/>
    </colgroup>
    <tbody>
    <tr class="firstRow">
        <td>
            <p>
                返回码类型
            </p>
        </td>
        <td>
            <p>
                编号
            </p>
        </td>
        <td>
            <p>
                返回值意义
            </p>
        </td>
        <td>
            <p>
                返回方式
            </p>
        </td>
        <td>
            <p>
                所属接口
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                公共返回码
            </p>
        </td>
        <td>
            <p>
                <span style="">0</span>
            </p>
        </td>
        <td>
            <p>
                成功
            </p>
        </td>
        <td>
            <p>
                提示
            </p>
        </td>
        <td>
            <p>
                所有
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span style="">1</span>
            </p>
        </td>
        <td>
            <p>
                未知错误
            </p>
        </td>
        <td>
            <p>
                提示
            </p>
        </td>
        <td>
            <p>
                所有
            </p>
        </td>
        <td></td>
    </tr>
    <tr>
        <td>
            <p>
                <span style="">99</span>
            </p>
        </td>
        <td>
            <p>
                签名错误
            </p>
        </td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>
            <p>
                <span style="">30001</span>
            </p>
        </td>
        <td>
            <p>
                数据异常
            </p>
        </td>
        <td>
            <p>
                提示
            </p>
        </td>
        <td>
            <p>
                所有
            </p>
        </td>
        <td></td>
    </tr>
    <tr>
        <td>
            <p>
                <span style="">30005</span>
            </p>
        </td>
        <td>
            <p>
                <span style=""><span style="">XML</span></span>文件格式不正确，操作失败。
            </p>
        </td>
        <td>
            <p>
                提示
            </p>
        </td>
        <td>
            <p>
                所有
            </p>
        </td>
        <td></td>
    </tr>
    <tr>
        <td>
            <p>
                <span style="">30006</span>
            </p>
        </td>
        <td>
            <p>
                <span style="">节点校验描述</span>
            </p>
        </td>
        <td>
            <p>
                提示
            </p>
        </td>
        <td>
            <p>
                所有
            </p>
        </td>
        <td></td>
    </tr>
    <tr>
        <td>
            <p>
                <span style="">30007</span>
            </p>
        </td>
        <td>
            <p>
                <span style=""><span style="">Ip</span>鉴权失败</span>
            </p>
        </td>
        <td>
            <p>
                提示
            </p>
        </td>
        <td>
            <p>
                所有
            </p>
        </td>
        <td></td>
    </tr>
    <tr>
        <td>
            <p>
                <span style="">30008</span>
            </p>
        </td>
        <td>
            <p>
                <span style=""><span style="">PortalType</span>错误</span>
            </p>
        </td>
        <td>
            <p>
                提示
            </p>
        </td>
        <td>
            <p>
                所有
            </p>
        </td>
        <td></td>
    </tr>
    <tr>
        <td>
            <p>
                <span style="">30009</span>
            </p>
        </td>
        <td>
            <p>
                <span style=""><span style="">PortalID</span>错误</span>
            </p>
        </td>
        <td>
            <p>
                提示
            </p>
        </td>
        <td>
            <p>
                所有
            </p>
        </td>
        <td></td>
    </tr>
    <tr>
        <td>
            <p>
                <span style="">40000</span>
            </p>
        </td>
        <td>
            <p>
                <span style="">transactionId</span>不能为空
            </p>
        </td>
        <td>
            <p>
                提示
            </p>
        </td>
        <td>
            <p>
                所有
            </p>
        </td>
        <td></td>
    </tr>
    <tr>
        <td>
            <p>
                <span style="">40001</span>
            </p>
        </td>
        <td>
            <p>
                数字签名错误
            </p>
        </td>
        <td>
            <p>
                提示
            </p>
        </td>
        <td>
            <p>
                所有
            </p>
        </td>
        <td></td>
    </tr>
    <tr>
        <td>
            <p>
                <span style="">40002</span>
            </p>
        </td>
        <td>
            <p>
                <span style="">method</span>方法不支持
            </p>
        </td>
        <td>
            <p>
                提示
            </p>
        </td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td>
            <p>
                <span style="">49999</span>
            </p>
        </td>
        <td>
            <p>
                请求业务参数<span style="">%s</span>校验错误，
            </p>
            <p>
                错误原因：<span style="">%s</span>
            </p>
        </td>
        <td>
            <p>
                提示
            </p>
        </td>
        <td></td>
    </tr>
    <tr>
        <td>
            <p>
                业务返回码
            </p>
        </td>
        <td>
            <p>
                <span style="">64000</span>
            </p>
        </td>
        <td>
            <p>
                企业不存在
            </p>
        </td>
        <td>
            <p>
                提示
            </p>
        </td>
        <td></td>
    </tr>
    <tr>
        <td>
            <p>
                <span style="">64001</span>
            </p>
        </td>
        <td>
            <p>
                流量币余额不足
            </p>
        </td>
        <td>
            <p>
                提示
            </p>
        </td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>
            <p>
                <span style="">64002</span>
            </p>
        </td>
        <td>
            <p>
                产品不存在
            </p>
        </td>
        <td>
            <p>
                提示
            </p>
        </td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>
            <p>
                <span style="">64003</span>
            </p>
        </td>
        <td>
            <p>
                用户为非本省用户
            </p>
        </td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>
            <p>
                <span style="">64004</span>
            </p>
        </td>
        <td>
            <p>
                流量币帐号不存在
            </p>
        </td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>
            <p>
                <span style="">64007</span>
            </p>
        </td>
        <td>
            <p>
                交易重复
            </p>
        </td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td>
            <p>
                <span style="">10001</span>
            </p>
        </td>
        <td>
            <p>
                更新用户流量币失败
            </p>
        </td>
        <td>
            <p>
                提示
            </p>
        </td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td>
            <p>
                <span style="">10002</span>
            </p>
        </td>
        <td>
            <p>
                更新用户预付流量币失败
            </p>
        </td>
        <td>
            <p>
                提示
            </p>
        </td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td>
            <p>
                <span style="">10003</span>
            </p>
        </td>
        <td>
            <p>
                更新企业流量币失败
            </p>
        </td>
        <td>
            <p>
                提示
            </p>
        </td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td>
            <p>
                <span style="">10004</span>
            </p>
        </td>
        <td>
            <p>
                预付记录未找到
            </p>
        </td>
        <td>
            <p>
                提示
            </p>
        </td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td>
            <p>
                <span style="">10005</span>
            </p>
        </td>
        <td>
            <p>
                用户账户不存在
            </p>
        </td>
        <td>
            <p>
                提示
            </p>
        </td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td>
            <p>
                <span style="">10006</span>
            </p>
        </td>
        <td>
            <p>
                企业账户余额不足
            </p>
        </td>
        <td>
            <p>
                提示
            </p>
        </td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td>
            <p>
                <span style="">10007</span>
            </p>
        </td>
        <td>
            <p>
                用户账户余额不足
            </p>
        </td>
        <td>
            <p>
                提示
            </p>
        </td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td>
            <p>
                <span style="">10008</span>
            </p>
        </td>
        <td>
            <p>
                企业账户不存在
            </p>
        </td>
        <td>
            <p>
                提示
            </p>
        </td>
        <td></td>
    </tr>
    </tbody>
</table>
<p>
    <br/>
</p>
<p>
    <br/>
</p>
<p>
    <br/>
</p>
<table>
    <colgroup>
        <col/>
        <col/>
        <col/>
        <col/>
    </colgroup>
    <tbody>
    <tr class="firstRow">
        <td>
            <p>
                编号
            </p>
        </td>
        <td>
            <p>
                返回值意义
            </p>
        </td>
        <td>
            <p>
                返回方式
            </p>
        </td>
        <td>
            <p>
                所属接口
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span style="">0</span>
            </p>
        </td>
        <td>
            <p>
                成功
            </p>
        </td>
        <td>
            <p>
                提示
            </p>
        </td>
        <td>
            <p>
                所有
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span style="">1</span>
            </p>
        </td>
        <td>
            <p>
                未知错误
            </p>
        </td>
        <td>
            <p>
                提示
            </p>
        </td>
        <td>
            <p>
                所有
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span style="">30001</span>
            </p>
        </td>
        <td>
            <p>
                数据异常
            </p>
        </td>
        <td>
            <p>
                提示
            </p>
        </td>
        <td>
            <p>
                所有
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span style="">30005</span>
            </p>
        </td>
        <td>
            <p>
                <span style=""><span style="">XML</span></span>文件格式不正确，操作失败。
            </p>
        </td>
        <td>
            <p>
                提示
            </p>
        </td>
        <td>
            <p>
                所有
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span style="">30006</span>
            </p>
        </td>
        <td>
            <p>
                <span style="">节点校验描述</span>
            </p>
        </td>
        <td>
            <p>
                提示
            </p>
        </td>
        <td>
            <p>
                所有
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span style="">30007</span>
            </p>
        </td>
        <td>
            <p>
                <span style="">数据请求重复</span>
            </p>
        </td>
        <td></td>
        <td>
            <p>
                所有
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span style="">30010</span>
            </p>
        </td>
        <td>
            <p>
                <span style="">请求参数错误</span>
            </p>
        </td>
        <td></td>
        <td>
            <p>
                所有
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span style="">4000</span>
            </p>
        </td>
        <td>
            <p>
                <span style="">首次登陆</span>
            </p>
        </td>
        <td></td>
        <td>
            <p>
                登陆
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span style="">40001</span>
            </p>
        </td>
        <td>
            <p>
                <span style="">登陆错误</span>
            </p>
        </td>
        <td></td>
        <td>
            <p>
                登陆
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span style="">40002</span>
            </p>
        </td>
        <td>
            <p>
                <span style="">非山东移动号码</span>
            </p>
        </td>
        <td></td>
        <td>
            <p>
                登陆
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span style="">40003</span>
            </p>
        </td>
        <td>
            <p>
                <span style="">用户不存在</span>
            </p>
        </td>
        <td></td>
        <td>
            <p>
                流量汇所有接口
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span style="">40004</span>
            </p>
        </td>
        <td>
            <p>
                <span style="">同一个手机每月通过客户端最多登录<span style="">5</span>个号码</span>
            </p>
        </td>
        <td></td>
        <td>
            <p>
                登陆和登陆查询<span style="">(android)</span>
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span style="">40005</span>
            </p>
        </td>
        <td>
            <p>
                <span style="">不是首次登录</span>
            </p>
        </td>
        <td></td>
        <td>
            <p>
                登陆查询<span style="">(android)</span>
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span style="">40006</span>
            </p>
        </td>
        <td>
            <p>
                <span style="">流量币不足</span>
            </p>
        </td>
        <td></td>
        <td>
            <p>
                所有接口
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span style="">40007</span>
            </p>
        </td>
        <td>
            <p>
                <span style="">预付流量币不足</span>
            </p>
        </td>
        <td></td>
        <td>
            <p>
                所有接口
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span style="">50001</span>
            </p>
        </td>
        <td>
            <p>
                <span style="">摇奖次数用完</span>
            </p>
        </td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>
            <p>
                <span style="">50003</span>
            </p>
        </td>
        <td>
            <p>
                <span style="">手机号码不正确（号段问题）</span>
            </p>
        </td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>
            <p>
                <span style="">50004</span>
            </p>
        </td>
        <td>
            <p>
                <span style="">起始页大于结束页</span>
            </p>
        </td>
        <td>
            <p>
                提示
            </p>
        </td>
        <td>
            <p>
                查询获奖列表、参与活动人数接口
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span style="">50005</span>
            </p>
        </td>
        <td>
            <p>
                <span style="">请求流量币不为数字</span>
            </p>
        </td>
        <td></td>
        <td>
            <p>
                流量币接口
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span style="">50006</span>
            </p>
        </td>
        <td>
            <p>
                <span style="">流量币计算错误，或者计算后的结果为负数</span>
            </p>
        </td>
        <td></td>
        <td>
            <p>
                流量币接口
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span style="">50007</span>
            </p>
        </td>
        <td>
            <p>
                <span style="">奖品不存在</span>
            </p>
        </td>
        <td></td>
        <td>
            <p>
                流量币兑换
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span style="">50008</span>
            </p>
        </td>
        <td>
            <p>
                <span style="">兑换记录入库失败</span>
            </p>
        </td>
        <td></td>
        <td>
            <p>
                流量币兑换
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span style="">50009</span>
            </p>
        </td>
        <td>
            <p>
                <span style="">与上一次兑换间隔不足</span><span style=""><span style=""><span style="">xx</span></span></span><span style="">分钟</span>
            </p>
        </td>
        <td></td>
        <td>
            <p>
                流量币兑换
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span style="">50010</span>
            </p>
        </td>
        <td>
            <p>
                <span style="">流量池流量币余额不足</span>
            </p>
        </td>
        <td></td>
        <td>
            <p>
                流量币兑换
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span style="">50011</span>
            </p>
        </td>
        <td>
            <p>
                <span style="">兑换的账号或账期不存在</span>
            </p>
        </td>
        <td></td>
        <td>
            <p>
                流量币兑换
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span style="">50012</span>
            </p>
        </td>
        <td>
            <p>
                <span style="">超出兑换时间</span>
            </p>
        </td>
        <td></td>
        <td>
            <p>
                流量币兑换
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span style="">51001</span>
            </p>
        </td>
        <td>
            <p>
                <span style="">亲</span><span style=""><span style=""><span style="">,</span></span></span><span style="">游戏次数仅当天有效</span><span style=""><span style=""><span style="">,</span></span></span><span style="">今天即将结束</span><span style=""><span style=""><span style="">,</span></span></span><span style="">请</span><span style=""><span style=""><span style="">12</span></span></span><span style="">点后再来兑换吧</span><span style=""><span style=""><span style="">!</span></span></span>
            </p>
        </td>
        <td></td>
        <td>
            <p>
                流量币兑换
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span style="">50018</span>
            </p>
        </td>
        <td>
            <p>
                <span style="">流量币数额不正确（必须大于零）</span>
            </p>
        </td>
        <td></td>
        <td>
            <p>
                流量币更新
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span style="">50019</span>
            </p>
        </td>
        <td>
            <p>
                <span style="">流量币更新类型不正确</span>
            </p>
        </td>
        <td></td>
        <td>
            <p>
                流量币更新
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span style="">50020</span>
            </p>
        </td>
        <td>
            <p>
                <span style="">流量币操作类型为空</span>
            </p>
        </td>
        <td></td>
        <td>
            <p>
                流量币更新
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span style="">50021</span>
            </p>
        </td>
        <td>
            <p>
                <span style="">流量币更新失败</span>
            </p>
        </td>
        <td></td>
        <td>
            <p>
                流量币更新
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span style="">50022</span>
            </p>
        </td>
        <td>
            <p>
                <span style=""><span style=""><span style="">APP</span></span></span><span style="">信息不存在</span>
            </p>
        </td>
        <td></td>
        <td>
            <p>
                <span style="">APP</span>下载成功通知
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span style="">61000</span>
            </p>
        </td>
        <td>
            <p>
                <span style="">不能转赠流量币给自己</span>
            </p>
        </td>
        <td></td>
        <td>
            <p>
                流量币转赠接口
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span style="">61001</span>
            </p>
        </td>
        <td>
            <p>
                <span style="">您今天的转赠次数已达上限，请明天再来吧</span>
            </p>
        </td>
        <td></td>
        <td>
            <p>
                流量币转赠接口
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span style=""><span style=""><span style="">61002</span></span></span>
            </p>
        </td>
        <td>
            <p>
                <span style="">您的朋友今天被赠送次数已达上限，请明天再向他转赠，或者换个朋友继续赠送吧</span>
            </p>
        </td>
        <td></td>
        <td>
            <p>
                流量币转赠接口
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span style=""><span style=""><span style="">61003</span></span></span>
            </p>
        </td>
        <td>
            <p>
                <span style="">流量币数额不正确（必须大于</span><span style=""><span style=""><span style="">0.01</span></span></span><span style="">）</span>
            </p>
        </td>
        <td></td>
        <td>
            <p>
                流量币转赠接口
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span style=""><span style=""><span style="">61004</span></span></span>
            </p>
        </td>
        <td>
            <p>
                <span style="">流量币余额不足</span>
            </p>
        </td>
        <td></td>
        <td>
            <p>
                流量币转赠接口
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span style=""><span style=""><span style="">61005</span></span></span>
            </p>
        </td>
        <td>
            <p>
                <span style="">转赠用户不存在</span>
            </p>
        </td>
        <td></td>
        <td>
            <p>
                流量币转赠接口
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span style=""><span style=""><span style=""><span style="">61006</span></span></span></span>
            </p>
        </td>
        <td>
            <p>
                <span style="">转赠用户与被赠用户不是同一省份</span>
            </p>
        </td>
        <td></td>
        <td>
            <p>
                流量币转赠接口
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span style=""><span style=""><span style=""><span style="">61007</span></span></span></span>
            </p>
        </td>
        <td>
            <p>
                <span style="">转赠额超过</span><span style=""><span style=""><span style="">1000</span></span></span>
            </p>
        </td>
        <td></td>
        <td>
            <p>
                流量币转赠接口
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span style=""><span style=""><span style=""><span style="">61008</span></span></span></span>
            </p>
        </td>
        <td>
            <p>
                <span style="">当月转赠用户超过</span><span style=""><span style=""><span style="">10</span></span></span><span style="">个</span>
            </p>
        </td>
        <td></td>
        <td>
            <p>
                流量币转赠接口
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span style=""><span style=""><span style=""><span style="">65000</span></span></span></span>
            </p>
        </td>
        <td>
            <p>
                <span style=""><span style="">请求参数错误</span></span>
            </p>
        </td>
        <td></td>
        <td>
            <p>
                <span style=""><span style="">营销活动流量币赠送</span><span style=""><span style=""><span style="">(</span></span></span><span style="">组件</span><span style=""><span style=""><span style="">)</span></span></span></span>
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span style=""><span style=""><span style=""><span style="">65001</span></span></span></span>
            </p>
        </td>
        <td>
            <p>
                <span style=""><span style="">操作类型错误</span></span>
            </p>
        </td>
        <td></td>
        <td>
            <p>
                <span style=""><span style="">营销活动流量币赠送</span><span style=""><span style=""><span style="">(</span></span></span><span style="">组件</span><span style=""><span style=""><span style="">)</span></span></span></span>
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span style=""><span style=""><span style=""><span style="">65002</span></span></span></span>
            </p>
        </td>
        <td>
            <p>
                <span style="">流量币数额不正确（必须大于</span><span style=""><span style=""><span style="">0.01</span></span></span><span style="">）</span>
            </p>
        </td>
        <td></td>
        <td>
            <p>
                <span style=""><span style="">营销活动流量币赠送</span><span style=""><span style=""><span style="">(</span></span></span><span style="">组件</span><span style=""><span style=""><span style="">)</span></span></span></span>
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span style=""><span style=""><span style=""><span style="">65003</span></span></span></span>
            </p>
        </td>
        <td>
            <p>
                <span style="">描述字段内容过长（必须小于</span><span style=""><span style=""><span style="">20</span></span></span><span style="">个字符，每个中文长度为</span><span style=""><span style=""><span style="">2</span></span></span><span style="">）</span>
            </p>
        </td>
        <td></td>
        <td>
            <p>
                <span style=""><span style="">营销活动流量币赠送</span><span style=""><span style=""><span style="">(</span></span></span><span style="">组件</span><span style=""><span style=""><span style="">)</span></span></span></span>
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span style=""><span style=""><span style=""><span style="">66000</span></span></span></span>
            </p>
            <p>
                <br/>
            </p>
        </td>
        <td>
            <p>
                <span style="">活动不存在</span>
            </p>
        </td>
        <td></td>
        <td>
            <p>
                <span style="">activityGive</span>（活动赠送）
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span style=""><span style=""><span style=""><span style="">66001</span></span></span></span>
            </p>
            <p>
                <br/>
            </p>
        </td>
        <td>
            <p>
                <span style="">当天已赠送</span>
            </p>
        </td>
        <td></td>
        <td>
            <p>
                <span style="">activityGive</span>（活动赠送）
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span style=""><span style=""><span style=""><span style="">66002</span></span></span></span>
            </p>
            <p>
                <br/>
            </p>
        </td>
        <td>
            <p>
                <span style="">活动已失效</span>
            </p>
        </td>
        <td></td>
        <td>
            <p>
                <span style="">activityGive</span>（活动赠送）
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span style=""><span style=""><span style=""><span style="">66003</span></span></span></span>
            </p>
            <p>
                <br/>
            </p>
        </td>
        <td>
            <p>
                <span style="">活动不需要赠送</span>
            </p>
        </td>
        <td></td>
        <td>
            <p>
                <span style="">activityGive</span>（活动赠送）
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span style=""><span style=""><span style=""><span style="">66004</span></span></span></span>
            </p>
        </td>
        <td>
            <p>
                <span style="">扣除企业流量币失败</span>
            </p>
        </td>
        <td></td>
        <td>
            <p>
                <span style=""><span style=""><span style=""><span style="">ShakMarketGive</span></span></span></span>
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span style=""><span style=""><span style=""><span style="">66005</span></span></span></span>
            </p>
        </td>
        <td>
            <p>
                <span style=""><span style=""><span style="">activityCode</span></span></span><span style="">与</span><span style=""><span style=""><span style="">companyCode</span></span></span><span style="">不匹配</span>
            </p>
        </td>
        <td></td>
        <td>
            <p>
                <span style=""><span style=""><span style=""><span style="">ShakMarketGive</span></span></span></span>
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span style=""><span style=""><span style=""><span style="">66006</span></span></span></span>
            </p>
        </td>
        <td>
            <p>
                <span style="">活动规则配置错误</span>
            </p>
        </td>
        <td></td>
        <td>
            <p>
                <span style="">activityGive</span>（活动赠送）
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span style=""><span style=""><span style=""><span style="">66007</span></span></span></span>
            </p>
        </td>
        <td>
            <p>
                <span style="">超过活动赠送最大限额</span>
            </p>
        </td>
        <td></td>
        <td>
            <p>
                <span style=""><span style=""><span style=""><span style="">ShakMarketGive</span></span></span></span>
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span style=""><span style=""><span style=""><span style="">66008</span></span></span></span>
            </p>
        </td>
        <td>
            <p>
                <span style="">超过单用户获赠最大限额</span>
            </p>
        </td>
        <td></td>
        <td>
            <p>
                <span style=""><span style=""><span style=""><span style="">ShakMarketGive</span></span></span></span>
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span style=""><span style=""><span style=""><span style="">64444</span></span></span></span>
            </p>
        </td>
        <td>
            <p>
                <span style=""><span style=""><span style="">Imei</span></span></span><span style="">不匹配</span>
            </p>
        </td>
        <td></td>
        <td>
            <p>
                <span style="">uploadPhonebook</span>
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span style=""><span style=""><span style=""><span style="">67004</span></span></span></span>
            </p>
        </td>
        <td>
            <p>
                <span style=""><span style=""><span style="">押注流量币不合法</span></span></span>
            </p>
        </td>
        <td></td>
        <td>
            <p>
                <span style=""><span style=""><span style=""><span style="">tigerDraw</span></span></span></span>
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span style=""><span style=""><span style=""><span style="">67003</span></span></span></span>
            </p>
        </td>
        <td>
            <p>
                <span style=""><span style=""><span style="">余额不足</span></span></span>
            </p>
        </td>
        <td></td>
        <td>
            <p>
                <span style=""><span style=""><span style=""><span style="">tigerDraw</span></span></span></span>
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span style=""><span style=""><span style=""><span style="">67005</span></span></span></span>
            </p>
        </td>
        <td>
            <p>
                <span style=""><span style=""><span style="">超过每日限额</span></span></span>
            </p>
        </td>
        <td></td>
        <td>
            <p>
                <span style=""><span style=""><span style=""><span style="">tigerDraw</span></span></span></span>
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span style=""><span style=""><span style=""><span style="">67000</span></span></span></span>
            </p>
        </td>
        <td>
            <p>
                <span style=""><span style=""><span style="">规则不存在</span></span></span>
            </p>
        </td>
        <td></td>
        <td>
            <p>
                <span style=""><span style=""><span style=""><span style="">tigerDraw</span></span></span></span>
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span style=""><span style=""><span style=""><span style="">68001</span></span></span></span>
            </p>
        </td>
        <td>
            <p>
                <span style="">昵称已存在</span>
            </p>
        </td>
        <td></td>
        <td>
            <p>
                昵称接口
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span style=""><span style=""><span style=""><span style="">69001</span></span></span></span>
            </p>
        </td>
        <td>
            <p>
                <span style="">充值间隔不足</span><span style=""><span style=""><span style="">30</span></span></span><span style="">分钟</span>
            </p>
        </td>
        <td></td>
        <td>
            <p>
                流量币充值
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span style=""><span style=""><span style=""><span style="">69002</span></span></span></span>
            </p>
        </td>
        <td>
            <p>
                <span style="">超过日限额</span>
            </p>
        </td>
        <td></td>
        <td>
            <p>
                流量币充值
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span style=""><span style=""><span style=""><span style="">69003</span></span></span></span>
            </p>
        </td>
        <td>
            <p>
                <span style="">超过月限额</span>
            </p>
        </td>
        <td></td>
        <td>
            <p>
                流量币充值
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span style=""><span style=""><span style=""><span style="">69005</span></span></span></span>
            </p>
        </td>
        <td>
            <p>
                <span style="">充值产品不存在或已下线</span>
            </p>
        </td>
        <td></td>
        <td>
            <p>
                流量币充值
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span style=""><span style=""><span style=""><span style="">69007</span></span></span></span>
            </p>
        </td>
        <td>
            <p>
                <span style="">充值产品与手机号不同省份</span>
            </p>
        </td>
        <td></td>
        <td>
            <p>
                流量币充值
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span style=""><span style=""><span style=""><span style="">69008</span></span></span></span>
            </p>
        </td>
        <td>
            <p>
                <span style="">充值记录插入失败</span>
            </p>
        </td>
        <td></td>
        <td>
            <p>
                流量币充值
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span style=""><span style=""><span style=""><span style="">69009</span></span></span></span>
            </p>
        </td>
        <td>
            <p>
                <span style="">充值记录不存在</span>
            </p>
        </td>
        <td></td>
        <td>
            <p>
                流量币充值
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span style=""><span style=""><span style=""><span style="">69010</span></span></span></span>
            </p>
        </td>
        <td>
            <p>
                <span style="">充值产品不存在</span>
            </p>
        </td>
        <td></td>
        <td>
            <p>
                <span style="">充值获取</span><span style=""><span style=""><span style="">sessionid</span></span></span>
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span style=""><span style=""><span style=""><span style="">69100</span></span></span></span>
            </p>
        </td>
        <td>
            <p>
                <span style=""><span style=""><span style=""><span style="">isSound</span></span></span><span style=""><span style="">参数不合法</span></span></span>
            </p>
        </td>
        <td style="word-break: break-all;"></td>
        <td style="word-break: break-all;">
            <p>
                声音设置
            </p>
        </td>
    </tr>
    </tbody>
</table>
<p>
    <br/>
</p>



<?php $this->load->view('layout/htfooter'); ?>
