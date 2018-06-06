SSR后台部署与使用
========

### 市面上的SSR服务端版本太多，由于本项目是公司使用，所以需要搭配后台。挑选之下，选用了开源项目[SSR](https://github.com/ouhaohan8023/SSR_server)与[SSRPanel](https://github.com/ouhaohan8023/shadow.com)
### [博客地址](http://www.ohh.ink/#/novel?id=30)
### [Github](https://github.com/ouhaohan8023/SSR_server)
### 在此，衷心感谢作者：
### 1.[Bruskyii Panda](https://github.com/ssrpanel)

### 因为站在巨人的肩膀上才有的此项目，谢谢各位的奉献！

### 本项目搭建完毕以后，需要在大陆以外的vps上搭建服务端，[传送门](https://github.com/ouhaohan8023/SSR_server)

### 后台客户端展示
![client](https://github.com/ouhaohan8023/shadow.com/raw/master/pre/client.png)

### 后台管理员展示
![server](https://github.com/ouhaohan8023/shadow.com/raw/master/pre/admin.png)

### 项目描述
````
1.多节点账号管理面板，兼容SS、SSRR
2.需配合SSR或SSRR版后端使用
3.强大的管理后台、美观的界面、简单易用的开关、支持移动端自适应
4.内含简单的购物、卡券、邀请码、推广返利&提现、文章管理、工单（回复带邮件提醒）等模块
5.用户、节点标签化，不同用户可见不同节点
6.SS配置转SSR(R)配置，轻松一键导入SS账号
7.单机单节点日志分析功能
8.账号、节点24小时和近30天内的流量监控
9.邮件、serverChan投递都有记录
10.账号临近到期、流量不够会自动发邮件提醒，自动禁用到期、流量异常的账号，自动清除日志等各种强大的定时任务
11.后台一键添加加密方式、混淆、协议、等级
12.强大的后台一键配置功能
13.屏蔽常见爬虫、屏蔽机器人
14.支持单端口多用户
15.支持节点订阅功能，可自由更换订阅地址、封禁账号订阅地址
16.节点宕机提醒（邮件、ServerChan微信提醒）
17.支持多国语言，自带英文语言包
18.订阅防投毒机制
19.自动释放端口机制，防止端口被大量长期占用
20.封特定国家、地区、封IP段
21.有赞云支付
22.开放API，方便自行定制改造客户端
````

### 官方演示&交流
````
官方站：http://www.ssrpanel.com
演示站：http://demo.ssrpanel.com （用户名：admin 密码：123456，请勿修改密码）
telegram订阅频道：https://t.me/ssrpanel
````

#### 环境要求
````
PHP 7.1 （必须）
MYSQL 5.5 （推荐5.6+）
内存 1G+ 
磁盘空间 10G+
PHP必须开启curl、gd、fileinfo、openssl、mbstring组件
安装完成后记得编辑config/app.php中 'debug' => true, 改为 false
````


### 本项目部署方式如下：

##### 1.安装`lnmp`，`mysql`版本选择`5.7`，`php`版本选择`7.1`，其他可以直接回车。[官方文档传送门](https://lnmp.org/)
>wget -c http://soft.vpser.net/lnmp/lnmp1.4.tar.gz && tar zxf lnmp1.4.tar.gz && cd lnmp1.4 && ./install.sh

##### 2.`lnmp`安装的`php7.1`版本不含`fileinfo`组件，具体可以在`lnmp`安装结束以后，查看`phpinfo`。解决方法为[补充]()
##### 3.lnmp添加虚拟站点，本示例中，虚拟站点为`shadow3.com`
>lnmp vhost add

![增加虚拟站点](https://github.com/ouhaohan8023/shadow.com/raw/master/pre/addvhost.png)
##### 4.在`nginx`中加入`url`重写规则和根目录(不会用`vi`编辑器的同学，自行百度操作方法)
```$xslt
vi /usr/local/nginx/conf/vhost/shadow3.com.conf
root  /home/wwwroot/shadow3.com/public;
location / {
     try_files $uri $uri/ /index.php$is_args$args;
 }
保存退出
```

![nginx配置](https://github.com/ouhaohan8023/shadow.com/raw/master/pre/nginx.png)

##### 5.修改`php.ini`目录，取消`proc`函数限制
```$xslt
vi /usr/local/php/etc/php.ini
/proc
上一部找到proc的函数(一般是两个)，删除即可
```

[删除proc函数示例](https://github.com/ouhaohan8023/shadow.com/raw/master/pre/disable.png)

##### 6.修改`open_basedir`限制
```$xslt
vi /usr/local/nginx/conf/fastcgi.conf
修改为
fastcgi_param PHP_ADMIN_VALUE "open_basedir=/home/wwwroot/ssmanager/:/tmp/:/proc/";

```

[修改fastcgi_param示例](https://github.com/ouhaohan8023/shadow.com/raw/master/pre/fastcgi.png)

##### 7.进入项目根目录（系统自动生成），拉取`github`项目
```$xslt
cd /home/wwwroot/shadow3.com
git clone https://github.com/ouhaohan8023/shadow.com.git tmp && mv tmp/.git . && rm -rf tmp && git reset --hard
```


##### 8.`composer`加载拓展（如果提示没有`fileinfo`组件，[传送门]()）
>composer install

##### 9.配置项目目录权限
```$xslt
cd /home/wwwroot/shadow3.com
php artisan key:generate
chown -R www:www storage/
chmod -R 777 storage/
```

##### 10.配置数据库
```$xslt
1.创建一个`utf8mb4`,`general_ci`的数据库
2.导入shadow3_cons.sql文件
3.在项目根目录下，生成.env文件，配置数据库信息，内容如下
```

```$xslt
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=shadow3
DB_USERNAME=root
DB_PASSWORD=root
```
##### 11.重启`lnmp`
>lnmp restart

##### 12.截至到这一步，项目是可以正常打开的，浏览器中访问
>shadow3.com

```$xslt
这一步有两种情况：
1.项目搭建在本地：
    此种情况下，需要在hosts文件中，加入
    127.0.0.1   shadow3.com
2.项目搭建在服务器上，但是暂时没有域名指向（国内云主机是不开放80端口的，所以你需要将后台站点设置成8088或者其他可用端口）
    此种情况下，需要在hosts文件中，加入
    服务器ip   shadow3.com
    国外vps，直接访问shadow3.com
    国内云主机，设置nginx监听的端口，然后访问shadow3.com:8088（这一步的成功，是基于nginx的配置的，nginx默认配置端口80，需要改成8088）
3.项目搭建在国外vps，并且有域名指向；或者项目搭建在国内，已通过备案
    可以直接访问
```

##### 13.定时任务设置
```$xslt
* * * * * php /home/wwwroot/shadow3.com/artisan schedule:run >> /dev/null 2>&1
```
##### 14.邮件配置
````
编辑 config\mail.php

请自行配置如下内容
'driver' => 'smtp',
'host' => 'smtp.exmail.qq.com',
'port' => 465,
'from' => [
    'address' => 'xxx@qq.com',
    'name' => 'SSRPanel',
],
'encryption' => 'ssl',
'username' => 'xxx@qq.com',
'password' => 'xxxxxx',
````