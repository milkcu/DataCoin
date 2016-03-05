# DataCoin

A demo module of a game website, gave data coins when people download their games.

这是来自一个游戏网站的外包项目，用户下载游戏会赠送流量币。首先通过调用流量汇提供的jar包获得数字签名并构建请求实现充值功能，然后使用PHP实现用户交互、规则设置和后台管理等功能。

## 1. 项目概述

项目程序主要使用PHP和JAVA语言编写，整个项目由两个子项目构成：一是集成到现有的网站系统并实现基本的业务逻辑，主要用于前端展示、用户交互、流程处理等部分；二是调用流量汇的接口实现流量赠送功能，主要实现数字签名与流量赠送功能。

第一个子项目为**[DataCoin](https://github.com/milkcu/DataCoin)**，主要使用PHP语言编写，基于小巧但功能强大的PHP框架CodeIgniter，采用MVC软件架构模式。系统采用的是可扩展的层次结构，采用模块化设计，便于扩展和二次开发。第二个子项目为**[CoinKit](https://github.com/milkcu/CoinKit)**，主要使用JAVA语言编写，通过调用流量汇提供的签名jar包实现数字签名，并通过POST请求实现流量币充值功能。

## 2. 部署说明

### 2.1 子项目DataCoin

DataCoin中的相关变量参数如下：

1. `DataCoin/application/config/config.php`中的`base_url`和`index_page`分别存放着网址和首页文件名；
2. `DataCoin/application/config/database.php`中存放数据库信息，并且可通过分组直接切换；
3. `DataCoin/application/models/Coin_model.php`中的变量`cmd`可修改jar包路径或调用命令。
4. 文件`DataCoin/data/zxf_userinfo_datacoin.php`为新旧系统用户交互文件，将其放于网站目录`bbs`下。
5. 另外，在`DataCoin/datacoin.php`中定义环境为生产模式，并将该项目中的文件目录放于网站更目录下。

### 2.2 子项目CoinKit

CoinKit中的相关变量参数如下：

1. `CoinKit/src/api/Giver.java`存放着`company_code`、`method`、`portalID`、`portalType`四个参数；
2. `CoinKit/src/api/Sender.java`存放着流量汇请求地址`url`；
3. `CoinKit/src/api/Signer.java`存放着密钥文件位置变量`pos`。

修改后可直接运行测试，需要保证程序输出中的第二行字符串为流量汇接口的返回信息。

可通过Eclipse导出jar包供PHP调用，并将生成的jar和依赖文件放于服务器主机的任意位置。

### 2.3 数据库

可通过命令行或phpMyAdmin等工具管理数据库。

创建数据库`datacoin`，导入表的初始化文件`DataCoin/data/table.sql`。

## 3. 维护说明

### 3.1 流量汇交互调试

定位到CoinKit项目生成的二进制文件`CoinKit.jar`，运行就可看到流量汇接口的返回信息。

```
[root@iZ94gqeso7bZ ~]# java -cp /home/data/liuliang/CoinKit.jar api.Main
begin
{"message":"签名错误！","result":{},"status":"fail","code":"1"}
end
```

若在PHP调用过程中该进程长时间没响应，可通过linux的基本命令kill将其杀死。

杀死后不必手动启动，程序将在下次调用时自动启动。

### 3.2 流量汇返回信息

关于调用流量汇接口的返回信息，不仅可以通过后台管理界面查看返回码，而且可以直接在数据库中查看所有的返回信息。

这个返回信息存储在流量赠送记录表`dc_log`中的`response`字段，通过简单的sql查询就可获得。

```
mysql> use datacoin;
mysql> select response from dc_log where lid = 6;
```

### 3.3 PHP运行环境

在生产环境下，一般都是通过将`display_errors`标志设置为`0`来禁用 PHP 的错误报告。 这可以阻止原生的PHP错误被显示到页面上，错误中可能会包含潜在的敏感信息。在子项目DataCoin中，可以将`datacoin.php`文件中的`ENVIRONMENT`常量设置为`'production'`，这样也可以关闭这些错误信息。在开发模式下，建议将它设置为`'development'`。 

例如，将`datacoin.php`文件中的生产环境

```
define('ENVIRONMENT', 'production');
```

改为开发模式或者测试模式，如

```
define('ENVIRONMENT', isset($_SERVER['CI_ENV']) ? $_SERVER['CI_ENV'] : 'development');
```

## 4. 系统设计

使用FreeMind制作的思维导图如下：

![思维导图](https://github.com/milkcu/DataCoin/raw/master/mindmap.png)

## 5. 数据库设计

数据库的设计符合关系数据库的规范化理论，表的定义足够规范，属于范式中的BCNF级别。

* 游戏表 `dc_game`
* 用户表 `dc_user`
* 赠送记录表 `dc_log`
* 选项设置表 `dc_option`

可通过直接导入数据库初始化文件，建表并初始化。

（全文完）
