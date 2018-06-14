<!DOCTYPE html>
<!--[if IE 8]> <html lang="{{app()->getLocale()}}" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="{{app()->getLocale()}}" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="{{app()->getLocale()}}">
<!--<![endif]-->

<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    @yield('css')
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="/assets/global/css/components-rounded.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="/assets/layouts/layout4/css/layout.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/layouts/layout4/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
    <link href="/assets/layouts/layout4/css/custom.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="{{asset('favicon2.ico')}}" />
    <style>
        .page-header.navbar{
            background:#3A74FF ;
        }
    </style>
</head>

<body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner ">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="{{url('/')}}">
                <img src="/assets/images/logo.png" alt="logo" class="logo-default" /> </a>
            <div class="menu-toggler sidebar-toggler">
                <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
            </div>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN PAGE TOP -->
        <div class="page-top">
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">
                    <li class="separator hide"> </li>
                    <!-- BEGIN USER LOGIN DROPDOWN -->
                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                    <li class="dropdown dropdown-user dropdown-dark">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <span class="username username-hide-on-mobile"> {{Session::get('user')['username']}} </span>
                            <!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->
                            <img alt="" class="img-circle" src="/assets/images/avatar.png" /> </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            <li>
                                <a href="{{url('/user')}}"> <i class="icon-home"></i> 个人中心 </a>
                            </li>
                            <li>
                                <a href="{{url('wSifGFeO5mQoCWB4/profile')}}"> <i class="icon-user"></i> 个人资料 </a>
                            </li>
                            <li>
                                <a href="{{url('logout')}}"> <i class="icon-key"></i> 退出 </a>
                            </li>
                        </ul>
                    </li>
                    <!-- END USER LOGIN DROPDOWN -->
                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
        </div>
        <!-- END PAGE TOP -->
    </div>
    <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<!-- BEGIN HEADER & CONTENT DIVIDER -->
<div class="clearfix"> </div>
<!-- END HEADER & CONTENT DIVIDER -->
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
        <!-- BEGIN SIDEBAR -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <div class="page-sidebar navbar-collapse collapse">
            <!-- BEGIN SIDEBAR MENU -->
            <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
            <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
            <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
            <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
            <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
            <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
            <ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                <li class="nav-item start {{in_array(Request::path(), ['admin']) ? 'active open' : ''}}">
                    <a href="{{url('wSifGFeO5mQoCWB4')}}" class="nav-link nav-toggle">
                        <i class="fa fa-home"></i>
                        <span class="title">管理中心</span>
                        <span class="selected"></span>
                    </a>
                </li>
                <li class="nav-item {{in_array(Request::path(), ['wSifGFeO5mQoCWB4/inviteList']) ? 'active open' : ''}}">
                    <a href="{{url('wSifGFeO5mQoCWB4/inviteList')}}" class="nav-link nav-toggle">
                        <i class="fa fa-puzzle-piece"></i>
                        <span class="title">邀请管理</span>
                    </a>
                </li>
                <li class="nav-item {{in_array(Request::path(), ['wSifGFeO5mQoCWB4/applyList', 'wSifGFeO5mQoCWB4/applyDetail']) ? 'active open' : ''}}">
                    <a href="{{url('wSifGFeO5mQoCWB4/applyList')}}" class="nav-link nav-toggle">
                        <i class="fa fa-credit-card"></i>
                        <span class="title">提现管理</span>
                    </a>
                </li>
                <li class="nav-item {{in_array(Request::path(), ['shop/goodsList', 'shop/addGoods', 'shop/editGoods']) ? 'active open' : ''}}">
                    <a href="{{url('shop/goodsList')}}" class="nav-link nav-toggle">
                        <i class="fa fa-shopping-cart"></i>
                        <span class="title">商品管理</span>
                    </a>
                </li>
                <li class="nav-item {{in_array(Request::path(), ['coupon/couponList', 'coupon/addCoupon']) ? 'active open' : ''}}">
                    <a href="{{url('coupon/couponList')}}" class="nav-link nav-toggle">
                        <i class="fa fa-ticket"></i>
                        <span class="title">卡券管理</span>
                    </a>
                </li>
                <li class="nav-item {{in_array(Request::path(), ['ticket/ticketList', 'ticket/replyTicket']) ? 'active open' : ''}}">
                    <a href="{{url('ticket/ticketList')}}" class="nav-link nav-toggle">
                        <i class="fa fa-question-circle"></i>
                        <span class="title">工单管理</span>
                    </a>
                </li>
                <li class="nav-item {{in_array(Request::path(), ['wSifGFeO5mQoCWB4/labelList', 'wSifGFeO5mQoCWB4/addLabel', 'wSifGFeO5mQoCWB4/editLabel']) ? 'active open' : ''}}">
                    <a href="{{url('wSifGFeO5mQoCWB4/labelList')}}" class="nav-link nav-toggle">
                        <i class="fa fa-sticky-note-o"></i>
                        <span class="title">标签管理</span>
                    </a>
                </li>
                <li class="nav-item {{in_array(Request::path(), ['wSifGFeO5mQoCWB4/orderList']) ? 'active open' : ''}}">
                    <a href="{{url('wSifGFeO5mQoCWB4/orderList')}}" class="nav-link nav-toggle">
                        <i class="fa fa-reorder"></i>
                        <span class="title">订单管理</span>
                    </a>
                </li>
                <li class="nav-item {{in_array(Request::path(), ['wSifGFeO5mQoCWB4/articleList', 'wSifGFeO5mQoCWB4/addArticle', 'wSifGFeO5mQoCWB4/editArticle', 'wSifGFeO5mQoCWB4/articleLogList']) ? 'active open' : ''}}">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="fa fa-file-word-o"></i>
                        <span class="title">文章管理</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item {{in_array(Request::path(), ['wSifGFeO5mQoCWB4/articleList', 'wSifGFeO5mQoCWB4/addArticle', 'wSifGFeO5mQoCWB4/editArticle']) ? 'active open' : ''}}">
                            <a href="{{url('wSifGFeO5mQoCWB4/articleList')}}" class="nav-link ">
                                <i class="fa fa-file-archive-o"></i>
                                <span class="title">文章列表</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item {{in_array(Request::path(), ['wSifGFeO5mQoCWB4/userList', 'wSifGFeO5mQoCWB4/addUser', 'wSifGFeO5mQoCWB4/editUser', 'wSifGFeO5mQoCWB4/userOrderList', 'wSifGFeO5mQoCWB4/userBalanceLogList', 'wSifGFeO5mQoCWB4/userBanLogList', 'wSifGFeO5mQoCWB4/export', 'wSifGFeO5mQoCWB4/userMonitor']) ? 'active open' : ''}}">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="fa fa-users"></i>
                        <span class="title">用户管理</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item {{in_array(Request::path(), ['wSifGFeO5mQoCWB4/userList', 'wSifGFeO5mQoCWB4/addUser', 'wSifGFeO5mQoCWB4/editUser', 'wSifGFeO5mQoCWB4/export', 'wSifGFeO5mQoCWB4/userMonitor']) ? 'active open' : ''}}">
                            <a href="{{url('wSifGFeO5mQoCWB4/userList')}}" class="nav-link ">
                                <i class="fa fa-user"></i>
                                <span class="title">用户列表</span>
                            </a>
                        </li>
                        <li class="nav-item {{in_array(Request::path(), ['wSifGFeO5mQoCWB4/userBalanceLogList']) ? 'active open' : ''}}">
                            <a href="{{url('wSifGFeO5mQoCWB4/userBalanceLogList')}}" class="nav-link ">
                                <i class="fa fa-money"></i>
                                <span class="title">余额变动记录</span>
                            </a>
                        </li>
                        <li class="nav-item {{in_array(Request::path(), ['wSifGFeO5mQoCWB4/userBanLogList']) ? 'active open' : ''}}">
                            <a href="{{url('wSifGFeO5mQoCWB4/userBanLogList')}}" class="nav-link ">
                                <i class="fa fa-user-times"></i>
                                <span class="title">用户封禁记录</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item {{in_array(Request::path(), ['wSifGFeO5mQoCWB4/nodeList', 'wSifGFeO5mQoCWB4/addNode', 'wSifGFeO5mQoCWB4/editNode', 'wSifGFeO5mQoCWB4/groupList', 'wSifGFeO5mQoCWB4/addGroup', 'wSifGFeO5mQoCWB4/editGroup', 'wSifGFeO5mQoCWB4/nodeMonitor']) ? 'active open' : ''}}">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="fa fa-list-alt"></i>
                        <span class="title">节点管理</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item {{in_array(Request::path(), ['wSifGFeO5mQoCWB4/nodeList', 'wSifGFeO5mQoCWB4/addNode', 'wSifGFeO5mQoCWB4/editNode', 'wSifGFeO5mQoCWB4/nodeMonitor']) ? 'active open' : ''}}">
                            <a href="{{url('wSifGFeO5mQoCWB4/nodeList')}}" class="nav-link ">
                                <i class="fa fa-list"></i>
                                <span class="title">节点列表</span>
                            </a>
                        </li>
                        <li class="nav-item {{in_array(Request::path(), ['wSifGFeO5mQoCWB4/groupList', 'wSifGFeO5mQoCWB4/addGroup', 'wSifGFeO5mQoCWB4/editGroup']) ? 'active open' : ''}}">
                            <a href="{{url('wSifGFeO5mQoCWB4/groupList')}}" class="nav-link ">
                                <i class="fa fa-list-ul"></i>
                                <span class="title">节点分组</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item {{in_array(Request::path(), ['wSifGFeO5mQoCWB4/decompile', 'wSifGFeO5mQoCWB4/convert', 'wSifGFeO5mQoCWB4/import', 'wSifGFeO5mQoCWB4/trafficLog', 'wSifGFeO5mQoCWB4/analysis', 'wSifGFeO5mQoCWB4/subscribeLog', 'emailLog/logList', 'payment/callbackList']) ? 'active open' : ''}}">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="fa fa-wrench"></i>
                        <span class="title">工具箱</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item {{in_array(Request::path(), ['wSifGFeO5mQoCWB4/decompile']) ? 'active open' : ''}}">
                            <a href="{{url('wSifGFeO5mQoCWB4/decompile')}}" class="nav-link">
                                <i class="icon-reload"></i>
                                <span class="title">反解析</span>
                            </a>
                        </li>
                        <li class="nav-item {{in_array(Request::path(), ['wSifGFeO5mQoCWB4/convert']) ? 'active open' : ''}}">
                            <a href="{{url('wSifGFeO5mQoCWB4/convert')}}" class="nav-link">
                                <i class="icon-refresh"></i>
                                <span class="title">格式转换</span>
                            </a>
                        </li>
                        <li class="nav-item {{in_array(Request::path(), ['wSifGFeO5mQoCWB4/import']) ? 'active open' : ''}}">
                            <a href="{{url('wSifGFeO5mQoCWB4/import')}}" class="nav-link">
                                <i class="icon-plus"></i>
                                <span class="title">数据导入</span>
                            </a>
                        </li>
                        <li class="nav-item {{in_array(Request::path(), ['wSifGFeO5mQoCWB4/trafficLog']) ? 'active open' : ''}}">
                            <a href="{{url('wSifGFeO5mQoCWB4/trafficLog')}}" class="nav-link">
                                <i class="fa fa-bar-chart"></i>
                                <span class="title">流量日志</span>
                            </a>
                        </li>
                        <li class="nav-item {{in_array(Request::path(), ['wSifGFeO5mQoCWB4/analysis']) ? 'active open' : ''}}">
                            <a href="{{url('wSifGFeO5mQoCWB4/analysis')}}" class="nav-link">
                                <i class="icon-bar-chart"></i>
                                <span class="title">日志分析</span>
                            </a>
                        </li>
                        <li class="nav-item {{in_array(Request::path(), ['wSifGFeO5mQoCWB4/subscribeLog']) ? 'active open' : ''}}">
                            <a href="{{url('wSifGFeO5mQoCWB4/subscribeLog')}}" class="nav-link">
                                <i class="icon-list"></i>
                                <span class="title">订阅请求日志</span>
                            </a>
                        </li>
                        <li class="nav-item {{in_array(Request::path(), ['emailLog/logList']) ? 'active open' : ''}}">
                            <a href="{{url('emailLog/logList')}}" class="nav-link">
                                <i class="fa fa-envelope-o"></i>
                                <span class="title">邮件投递记录</span>
                            </a>
                        </li>
                        <li class="nav-item {{in_array(Request::path(), ['payment/callbackList']) ? 'active open' : ''}}">
                            <a href="{{url('payment/callbackList')}}" class="nav-link">
                                <i class="fa fa-th"></i>
                                <span class="title">有赞回调日志</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item {{in_array(Request::path(), ['wSifGFeO5mQoCWB4/config', 'wSifGFeO5mQoCWB4/addConfig', 'wSifGFeO5mQoCWB4/system']) ? 'active open' : ''}}">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="fa fa-gear"></i>
                        <span class="title">设置</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item {{in_array(Request::path(), ['wSifGFeO5mQoCWB4/config']) ? 'active open' : ''}}">
                            <a href="{{url('wSifGFeO5mQoCWB4/config')}}" class="nav-link ">
                                <i class="fa fa-cog"></i>
                                <span class="title">通用配置</span>
                            </a>
                        </li>
                        <li class="nav-item {{in_array(Request::path(), ['wSifGFeO5mQoCWB4/system']) ? 'active open' : ''}}">
                            <a href="{{url('wSifGFeO5mQoCWB4/system')}}" class="nav-link ">
                                <i class="fa fa-cogs"></i>
                                <span class="title">系统设置</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- END SIDEBAR MENU -->
        </div>
        <!-- END SIDEBAR -->
    </div>
    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        @yield('content')
    </div>
    <!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
    <div class="page-footer-inner"> 2017 - 2018 &copy; <a href="http://www.chuanyunti.com" target="_blank">穿云梯</a> </div>
    <div class="scroll-to-top">
        <i class="icon-arrow-up"></i>
    </div>
</div>
<!-- END FOOTER -->
<!--[if lt IE 9]>
<script src="/assets/global/plugins/respond.min.js"></script>
<script src="/assets/global/plugins/excanvas.min.js"></script>
<script src="/assets/global/plugins/ie8.fix.min.js"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
@yield('script')
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="/assets/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="/assets/layouts/layout4/scripts/layout.min.js" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->
</body>

</html>