<?php

Route::get('s/{code}', 'SubscribeController@index'); // 节点订阅地址

Route::group(['middleware' => ['forbidden']], function () {
    Route::get('lang/{locale}', 'UserController@switchLang'); // 语言切换
    Route::any('login', 'LoginController@index'); // 登录
    Route::get('logout', 'LoginController@logout'); // 退出
    Route::any('register', 'RegisterController@index'); // 注册
  Route::any('register2', 'RegisterController@indexByPhone'); // 注册--手机
  Route::any('resetPassword', 'UserController@resetPassword'); // 重设密码
    Route::any('reset/{token}', 'UserController@reset'); // 重设密码
    Route::any('activeUser', 'UserController@activeUser'); // 激活账号
    Route::get('active/{token}', 'UserController@active'); // 激活账号
  Route::get('active_profile/{token}', 'UserController@active_profile'); // 激活账号
  Route::get('free', 'UserController@free'); // 免费邀请码
});

Route::group(['middleware' => ['forbidden', 'user', 'admin']], function () {
    Route::get('wSifGFeO5mQoCWB4', 'AdminController@index'); // 后台首页
    Route::get('wSifGFeO5mQoCWB4/userList', 'AdminController@userList'); // 账号列表
    Route::any('wSifGFeO5mQoCWB4/addUser', 'AdminController@addUser'); // 添加账号
    Route::post('wSifGFeO5mQoCWB4/batchAddUsers', 'AdminController@batchAddUsers'); // 批量生成账号
    Route::any('wSifGFeO5mQoCWB4/editUser', 'AdminController@editUser'); // 编辑账号
    Route::post('wSifGFeO5mQoCWB4/delUser', 'AdminController@delUser'); // 删除账号
    Route::get('wSifGFeO5mQoCWB4/nodeList', 'AdminController@nodeList'); // 节点列表
    Route::any('wSifGFeO5mQoCWB4/addNode', 'AdminController@addNode'); // 添加节点
    Route::any('wSifGFeO5mQoCWB4/editNode', 'AdminController@editNode'); // 编辑节点
    Route::post('wSifGFeO5mQoCWB4/delNode', 'AdminController@delNode'); // 删除节点
    Route::get('wSifGFeO5mQoCWB4/nodeMonitor', 'AdminController@nodeMonitor'); // 节点流量监控
    Route::get('wSifGFeO5mQoCWB4/articleList', 'AdminController@articleList'); // 文章列表
    Route::any('wSifGFeO5mQoCWB4/addArticle', 'AdminController@addArticle'); // 添加文章
    Route::any('wSifGFeO5mQoCWB4/editArticle', 'AdminController@editArticle'); // 编辑文章
    Route::post('wSifGFeO5mQoCWB4/delArticle', 'AdminController@delArticle'); // 删除文章
    Route::get('wSifGFeO5mQoCWB4/groupList', 'AdminController@groupList'); // 分组列表
    Route::any('wSifGFeO5mQoCWB4/addGroup', 'AdminController@addGroup'); // 添加分组
    Route::any('wSifGFeO5mQoCWB4/editGroup', 'AdminController@editGroup'); // 编辑分组
    Route::post('wSifGFeO5mQoCWB4/delGroup', 'AdminController@delGroup'); // 删除分组
    Route::get('wSifGFeO5mQoCWB4/labelList', 'AdminController@labelList'); // 标签列表
    Route::any('wSifGFeO5mQoCWB4/addLabel', 'AdminController@addLabel'); // 添加标签
    Route::any('wSifGFeO5mQoCWB4/editLabel', 'AdminController@editLabel'); // 编辑标签
    Route::post('wSifGFeO5mQoCWB4/delLabel', 'AdminController@delLabel'); // 删除标签
    Route::get('ticket/ticketList', 'TicketController@ticketList'); // 工单列表
    Route::any('ticket/replyTicket', 'TicketController@replyTicket'); // 回复工单
    Route::get('wSifGFeO5mQoCWB4/orderList', 'AdminController@orderList'); // 订单列表
  Route::get('wSifGFeO5mQoCWB4/orderListToday', 'AdminController@orderListToday'); // 今日订单
  Route::post('ticket/closeTicket', 'TicketController@closeTicket'); // 关闭工单
    Route::get('wSifGFeO5mQoCWB4/inviteList', 'AdminController@inviteList'); // 邀请码列表
    Route::post('wSifGFeO5mQoCWB4/makeInvite', 'AdminController@makeInvite'); // 生成邀请码
    Route::get('wSifGFeO5mQoCWB4/exportInvite', 'AdminController@exportInvite'); // 导出邀请码
    Route::get('wSifGFeO5mQoCWB4/applyList', 'AdminController@applyList'); // 提现申请管理
    Route::get('wSifGFeO5mQoCWB4/applyDetail', 'AdminController@applyDetail'); // 提现申请管理
    Route::post('wSifGFeO5mQoCWB4/setApplyStatus', 'AdminController@setApplyStatus'); // 设置提现申请状态
    Route::any('wSifGFeO5mQoCWB4/config', 'AdminController@config'); // 配置列表
    Route::post('wSifGFeO5mQoCWB4/setExtend', 'AdminController@setExtend'); // 设置客服、统计代码
    Route::any('wSifGFeO5mQoCWB4/addConfig', 'AdminController@addConfig'); // 添加配置
    Route::post('wSifGFeO5mQoCWB4/delConfig', 'AdminController@delConfig'); // 删除配置
    Route::post('wSifGFeO5mQoCWB4/addLevel', 'AdminController@addLevel'); // 增加等级
    Route::post('wSifGFeO5mQoCWB4/updateLevel', 'AdminController@updateLevel'); // 更新等级
    Route::post('wSifGFeO5mQoCWB4/delLevel', 'AdminController@delLevel'); // 删除等级
    Route::post('wSifGFeO5mQoCWB4/addCountry', 'AdminController@addCountry'); // 增加国家/地区
    Route::post('wSifGFeO5mQoCWB4/updateCountry', 'AdminController@updateCountry'); // 更新国家/地区
    Route::post('wSifGFeO5mQoCWB4/delCountry', 'AdminController@delCountry'); // 删除国家/地区
    Route::post('wSifGFeO5mQoCWB4/setDefaultConfig', 'AdminController@setDefaultConfig'); // 设置默认配置
    Route::get('wSifGFeO5mQoCWB4/trafficLog', 'AdminController@trafficLog'); // 流量日志
    Route::get('wSifGFeO5mQoCWB4/subscribeLog', 'AdminController@subscribeLog'); // 订阅请求日志
    Route::post('wSifGFeO5mQoCWB4/setSubscribeStatus', 'AdminController@setSubscribeStatus'); // 启用禁用用户的订阅
    Route::any('wSifGFeO5mQoCWB4/export', 'AdminController@export'); // 导出配置信息
    Route::any('wSifGFeO5mQoCWB4/convert', 'AdminController@convert'); // 格式转换
    Route::any('wSifGFeO5mQoCWB4/import', 'AdminController@import'); // 数据导入
    Route::get('wSifGFeO5mQoCWB4/userMonitor', 'AdminController@userMonitor'); // 用户流量监控
    Route::any('wSifGFeO5mQoCWB4/profile', 'AdminController@profile'); // 修改个人信息
    Route::get('wSifGFeO5mQoCWB4/analysis', 'AdminController@analysis'); // 日志分析
    Route::get('wSifGFeO5mQoCWB4/system', 'AdminController@system'); // 系统设置
    Route::post('wSifGFeO5mQoCWB4/setConfig', 'AdminController@setConfig'); // 设置某个配置项
    Route::post('wSifGFeO5mQoCWB4/setReferralPercent', 'AdminController@setReferralPercent'); // 设置返利比例
    Route::post('wSifGFeO5mQoCWB4/setQrcode', 'AdminController@setQrcode'); // 设置充值二维码
    Route::post('wSifGFeO5mQoCWB4/resetUserTraffic', 'AdminController@resetUserTraffic'); // 重置用户流量
    Route::post('wSifGFeO5mQoCWB4/handleUserBalance', 'AdminController@handleUserBalance'); // 余额充值
    Route::get('wSifGFeO5mQoCWB4/userBalanceLogList', 'AdminController@userBalanceLogList'); // 余额变动日志
    Route::get('wSifGFeO5mQoCWB4/userBanLogList', 'AdminController@userBanLogList'); // 用户封禁记录
    Route::get('wSifGFeO5mQoCWB4/makePort', 'AdminController@makePort'); // 生成端口
    Route::get('wSifGFeO5mQoCWB4/makePasswd', 'AdminController@makePasswd'); // 生成密码
    Route::get('wSifGFeO5mQoCWB4/download', 'AdminController@download'); // 下载转换过的JSON配置
    Route::any('shop/goodsList', 'ShopController@goodsList'); // 商品列表
    Route::any('shop/addGoods', 'ShopController@addGoods'); // 添加商品
    Route::any('shop/editGoods', 'ShopController@editGoods'); // 编辑商品
    Route::post('shop/delGoods', 'ShopController@delGoods'); // 删除商品
    Route::any('coupon/couponList', 'CouponController@couponList'); // 优惠券列表
    Route::any('coupon/addCoupon', 'CouponController@addCoupon'); // 添加优惠券
    Route::post('coupon/delCoupon', 'CouponController@delCoupon'); // 删除优惠券
    Route::get('coupon/exportCoupon', 'CouponController@exportCoupon'); // 导出优惠券
    Route::get('emailLog/logList', 'EmailLogController@logList'); // 邮件发送日志
    Route::post("wSifGFeO5mQoCWB4/switchToUser", "AdminController@switchToUser"); // 转换成某个用户的身份
    Route::any("wSifGFeO5mQoCWB4/decompile", "AdminController@decompile"); // SS(R)链接反解析
    Route::any("payment/callbackList", "PaymentController@callbackList"); // 有赞云支付回调日志

  Route::any("wSifGFeO5mQoCWB4/dd", "AdminController@dd"); // 测试

  Route::get('wSifGFeO5mQoCWB4/userListToday', 'AdminController@userListToday'); // 账号列表
  Route::get('wSifGFeO5mQoCWB4/userListTodayActiveInSeven', 'AdminController@userListTodayActiveInSeven'); // 账号列表
  Route::get('wSifGFeO5mQoCWB4/userListTodayActiveOnLine', 'AdminController@userListTodayActiveOnLine'); // 账号列表


});

Route::group(['middleware' => ['forbidden', 'user']], function () {
    Route::any('user/index', 'UserController@index'); // 用户首页
    Route::any('user', 'UserController@index'); // 用户首页
    Route::any('user/article', 'UserController@article'); // 文章详情
    Route::get('user/subscribe', 'UserController@subscribe'); // 节点订阅
    Route::post('user/exchangeSubscribe', 'UserController@exchangeSubscribe'); // 更换节点订阅地址
    Route::get('user/goodsList', 'UserController@goodsList'); // 商品列表
    Route::get('user/trafficLog', 'UserController@trafficLog'); // 流量日志
    Route::get('user/ticketList', 'UserController@ticketList'); // 工单
    Route::post('user/addTicket', 'UserController@addTicket'); // 快速添加工单
    Route::any('user/replyTicket', 'UserController@replyTicket'); // 回复工单
    Route::post('user/closeTicket', 'UserController@closeTicket'); // 关闭工单
    Route::get('user/orderList', 'UserController@orderList'); // 订单
    Route::any('user/addOrder', 'UserController@addOrder'); // 添加订单
    Route::post('user/redeemCoupon', 'UserController@redeemCoupon'); // 使用优惠券
    Route::get('user/invite', 'UserController@invite'); // 邀请码
    Route::post('user/makeInvite', 'UserController@makeInvite'); // 生成邀请码
    Route::any('user/profile', 'UserController@profile'); // 修改个人信息
    Route::post('user/exchange', 'UserController@exchange'); // 积分兑换流量
    Route::get('user/referral', 'UserController@referral'); // 推广返利
    Route::post('user/extractMoney', 'UserController@extractMoney'); // 申请提现
    Route::post("user/switchToAdmin", "UserController@switchToAdmin"); // 转换成管理员的身份
    Route::post("user/charge", "UserController@charge"); // 卡券余额充值

    Route::post('payment/create', 'PaymentController@create'); // 创建支付
    Route::get('payment/getStatus', 'PaymentController@getStatus'); // 获取支付单状态
    Route::get('payment/{sn}', 'PaymentController@detail'); // 支付单详情
});

//TODO 前台
Route::get('/', 'FrontController@index'); //首页
Route::get('front', 'FrontController@index'); //首页
Route::get('front/features', 'FrontController@features'); //产品特性
Route::get('front/servers', 'FrontController@servers'); //服务器
Route::get('front/download', 'FrontController@download'); //VPN应用--windows
Route::get('front/download/windows', 'FrontController@download'); //VPN应用--windows
Route::get('front/download/android', 'FrontController@android'); //VPN应用--android
Route::get('front/download/mac', 'FrontController@macos'); //VPN应用--mac
Route::get('front/download/ios', 'FrontController@ios'); //VPN应用--ios
Route::get('front/support', 'FrontController@support'); //VPN应用--帮助中心
Route::get('front/order', 'FrontController@order'); //VPN应用--订购
Route::get('front/aboutus', 'FrontController@aboutus'); //VPN应用--关于我们
Route::get('front/privacy', 'FrontController@privacy'); //VPN应用--关于我们
Route::get('front/survice', 'FrontController@survice'); //VPN应用--关于我们

Route::get('sms', 'RegisterController@test2'); //sms测试
Route::get('sendSms', 'RegisterController@sendSms'); //sms测试





