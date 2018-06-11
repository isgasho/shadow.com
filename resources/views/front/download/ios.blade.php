@extends('front.layouts2')

@section('title', '穿云梯--VPN应用')
@section('content')
    <div class="DownloadsChild">
        <hr class="my-0">
        <div class="ScrollableTabs js-ScrollableTabs text-center">
            <div class="ScrollableTabs__wrapper">
                <ul class="List ScrollableTabs__items">
                    <li class="ListItem ScrollableTabs__item px-md-5 d-inline-block"><a
                                class="Link ScrollableTabs__link p-5 Link--dark"
                                href="/front/download/"><span class="SVG-wrapper"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        class="SVG SVG--inline text-center scale-24 c-bw-14 mb-3"
                                        preserveAspectRatio="xMidYMid meet"><path
                                            d="M22 1v9.842L11 11V2.533L22 1zM2 3.946L9 3v7.903L2 11V3.946zm9 17.52V13l11 .158V23l-11-1.533zm-9-1.412V13l7 .098V21l-7-.946z"
                                            fill="#151922" fill-rule="evenodd"></path></svg></span>
                            <div class="ScrollableTabs__title-wrapper">
                                <div class="ScrollableTabs__title micro">Windows</div>
                            </div>
                        </a></li>
                    <li class="ListItem ScrollableTabs__item px-md-5 d-inline-block"><a
                                class="Link ScrollableTabs__link p-5 Link--dark"
                                href="/front/download/android/"><span class="SVG-wrapper"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        class="SVG SVG--inline text-center scale-24 c-bw-14 mb-3"
                                        preserveAspectRatio="xMidYMid meet"><path
                                            d="M15.281 2.98A5.992 5.992 0 0 1 18 8H6a5.992 5.992 0 0 1 2.719-5.02L7.584 1.277a.5.5 0 1 1 .832-.554l1.186 1.779a5.975 5.975 0 0 1 4.796 0L15.584.723a.5.5 0 1 1 .832.554L15.281 2.98zM6 19V9h12v10a1 1 0 0 1-1 1h-1v3a1 1 0 0 1-2 0v-3h-4v3a1 1 0 0 1-2 0v-3H7a1 1 0 0 1-1-1zM4 9a1 1 0 0 1 1 1v5a1 1 0 0 1-2 0v-5a1 1 0 0 1 1-1zm16 0a1 1 0 0 1 1 1v5a1 1 0 0 1-2 0v-5a1 1 0 0 1 1-1zM10 6a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm4 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"
                                            fill="#151922"></path></svg></span>
                            <div class="ScrollableTabs__title-wrapper">
                                <div class="ScrollableTabs__title micro">Android</div>
                            </div>
                            <div class="ScrollableTabs__active-divider"></div>
                        </a></li>
                    <li class="ListItem ScrollableTabs__item px-md-5 d-inline-block"><a
                                class="Link ScrollableTabs__link p-5 Link--dark"
                                href="/front/download/ios/"><span class="SVG-wrapper"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        class="SVG SVG--inline text-center scale-24 c-bw-14 mb-3"
                                        preserveAspectRatio="xMidYMid meet"><path
                                            d="M20.652 18.12c-.52 1.149-.767 1.662-1.436 2.677-.931 1.418-2.244 3.185-3.871 3.2-1.446.013-1.818-.94-3.78-.93-1.962.01-2.373.946-3.82.933-1.627-.015-2.87-1.61-3.803-3.029-2.604-3.966-2.877-8.619-1.27-11.092 1.14-1.76 2.942-2.787 4.637-2.787 1.725 0 2.808.945 4.235.945 1.383 0 2.226-.947 4.22-.947 1.508 0 3.106.821 4.243 2.238-3.728 2.045-3.122 7.368.645 8.792zM15.069 4.048C14.19 5.173 12.682 6.045 11.223 6c-.266-1.45.418-2.943 1.246-3.95C13.383.942 14.946.091 16.282 0c.227 1.515-.394 2.998-1.213 4.048z"
                                            fill="#151922"></path></svg></span>
                            <div class="ScrollableTabs__title-wrapper">
                                <div class="ScrollableTabs__title micro">iOS · iPhone · iPad</div>
                            </div>
                        </a></li>
                    <li class="ListItem ScrollableTabs__item px-md-5 d-inline-block"><a
                                class="Link ScrollableTabs__link p-5 Link--dark"
                                href="/front/download/mac/"><span class="SVG-wrapper"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        class="SVG SVG--inline text-center scale-24 c-bw-14 mb-3"
                                        preserveAspectRatio="xMidYMid meet"><path
                                            d="M12 24C5.373 24 0 18.627 0 12S5.373 0 12 0s12 5.373 12 12-5.373 12-12 12zm-6.485-8.51c0 2.079 1.602 3.591 3.6 3.591 1.989 0 3.636-1.539 3.636-3.618 0-2.061-1.611-3.609-3.609-3.609a3.607 3.607 0 0 0-3.627 3.636zm1.161-.027c0-1.431 1.071-2.583 2.457-2.583 1.377 0 2.457 1.152 2.457 2.583 0 1.431-1.08 2.592-2.457 2.592-1.386 0-2.457-1.161-2.457-2.592zm8.932 3.618c1.558 0 2.44-1.035 2.44-2.061 0-1.044-.666-1.791-1.926-2.043l-.892-.171c-.566-.117-.89-.54-.89-.936 0-.54.53-1.026 1.215-1.026.747 0 1.224.558 1.35 1.062l1.025-.324c-.143-.765-.8-1.728-2.393-1.728-1.27 0-2.332.954-2.332 2.115 0 .918.63 1.683 1.791 1.917l.864.18c.595.126 1.044.45 1.044 1.026 0 .594-.576.99-1.277.99-.847 0-1.405-.531-1.558-1.35L13 17.02c.098.999.962 2.061 2.61 2.061zM7.464 7.9V10h.826V7.914c0-.567.308-.945.826-.945.574 0 .798.392.798.924V10h.833V7.69c0-.847-.413-1.512-1.358-1.512-.574 0-.938.21-1.302.616-.21-.378-.581-.616-1.155-.616-.294 0-.756.112-1.113.588v-.504h-.812V10h.833V7.921c0-.567.308-.952.819-.952.574 0 .805.406.805.931zm7.308 2.1V7.62c0-.252-.035-.469-.126-.672-.245-.539-.77-.763-1.4-.763-.273 0-.539.049-.756.147-.518.224-.805.7-.84 1.015l.756.168c.063-.357.364-.616.819-.616.49 0 .735.273.735.567 0 .182-.098.315-.35.315h-.462c-.651 0-1.554.273-1.554 1.141v.042c0 .644.532 1.099 1.26 1.099.35 0 .826-.119 1.099-.574V10h.819zm-.819-1.512c0 .56-.364.91-.931.91-.35 0-.595-.203-.595-.511 0-.35.406-.518.721-.518h.805v.119zm3.591 1.575c1.015 0 1.596-.651 1.764-1.225l-.763-.245c-.112.287-.343.714-.987.714-.637 0-1.106-.497-1.106-1.197 0-.707.49-1.169 1.099-1.169.623 0 .896.406.98.7l.756-.252c-.161-.63-.805-1.204-1.729-1.204-1.113 0-1.96.875-1.96 1.939 0 1.099.847 1.939 1.946 1.939z"
                                            fill="#151922" fill-rule="evenodd"></path></svg></span>
                            <div class="ScrollableTabs__title-wrapper">
                                <div class="ScrollableTabs__title micro">macOS</div>
                            </div>
                        </a></li>
                </ul>
                <div class="ScrollableTabs__paddle"><a class="Link ScrollableTabs__paddle-left" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" class="SVG SVG--inline c-bw-14" preserveAspectRatio="xMidYMid meet"><path d="M6.667 8l4.666 4.667L10 14 4 8l6-6 1.333 1.333z" fill="#151922" fill-rule="evenodd"></path></svg></a><a class="Link ScrollableTabs__paddle-right" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" class="SVG SVG--inline c-bw-14" preserveAspectRatio="xMidYMid meet"><path d="M8.667 8L4 3.333 5.333 2l6 6-6 6L4 12.667z" fill="#151922" fill-rule="evenodd"></path></svg></a></div>
            </div>
        </div>
        <hr class="my-0">
        <section class="BannerWrapper">
            <div class="Background Background--hidden-sm-up" style="background-image:url(https://s1.nordwebsite.net/nordvpn/3.85.0/images/download-hub/child/hero-pills-light-right-xs.svg);background-color:#f8f8f8;background-repeat:no-repeat;background-position:center bottom;background-size:100%;">
                <div class="container">
                    <div class="Background Background--hidden-xs" style="background-image:url(https://s1.nordwebsite.net/nordvpn/3.85.0/images/download-hub/child/hero-pills-light-right.svg);background-color:transparent;background-repeat:no-repeat;background-position:center;background-size:100%;">
                        <div class="Banner Banner--light">
                            <div class="d-sm-flex row">
                                <div class="pt-11 py-sm-11 py-md-14 my-auto col-sm-6 col-xs-12">
                                    <h1 class="Title h2 mb-5 mb-sm-6 text-xs-center">下载 iOS 版 NordVPN</h1>
                                    <p class="Text mb-5 mb-sm-6 text-xs-center fwm">只需点击几下，即可保障您的在线隐私和安全。</p>
                                    <div class="mb-5 mb-sm-6"><a class="Button Button--primary Button--large Button--block-xs d-sm-inline-block" href="" role="button" tabindex="0">暂无</a></div>
                                </div>
                                <div class="my-auto col-sm-6 col-xs-12"><img src="https://s1.nordwebsite.net/nordvpn/3.85.0/images/global/devices/banner-mobile-ios-map-light.png" srcset="https://s1.nordwebsite.net/nordvpn/3.85.0/images/global/devices/banner-mobile-ios-map-light.png 1x, https://s1.nordwebsite.net/nordvpn/3.85.0/images/global/devices/banner-mobile-ios-map-light@2x.png 2x" class="hidden-xs p-lg-6 my-6 my-sm-0 img-responsive" alt="iOS"><img src="https://s1.nordwebsite.net/nordvpn/3.85.0/images/global/devices/banner-mobile-ios-map-light.png" srcset="https://s1.nordwebsite.net/nordvpn/3.85.0/images/global/devices/banner-mobile-ios-map-light.png 1x, https://s1.nordwebsite.net/nordvpn/3.85.0/images/global/devices/banner-mobile-ios-map-light@2x.png 2x" class="py-6 p-lg-6 visible-xs center-block img-responsive" alt="iOS"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr class="my-0">
        {{--<section>--}}
            {{--<div class="SectionWrapper py-11 py-sm-12 py-md-14">--}}
                {{--<div class="container">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-xs-12 col-lg-offset-1 col-lg-10 text-center">--}}
                            {{--<h3 class="Title mb-6">还没有帐户？</h3>--}}
                            {{--<p class="Text mb-7">开始使用最好的 iOS 版 VPN 保护您自己。</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-xs-12 col-sm-4">--}}
                            {{--<div class="FeatureItem text-center px-md-6 py-7 py-sm-8"><img src="https://s1.nordwebsite.net/nordvpn/3.85.0/images/global/illustrations/onboarding/sign-up.svg" class="mb-6" alt="unrestricted-internet">--}}
                                {{--<h6 class="Title base mb-3 fwm">1. 创建您的帐户</h6>--}}
                                {{--<p class="Text small mb-0">要开始使用 NordVPN，请创建您的安全帐户，并选择最适合您需求的 VPN 套餐。</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-xs-12 col-sm-4">--}}
                            {{--<div class="FeatureItem text-center px-md-6 py-7 py-sm-8"><img src="https://s1.nordwebsite.net/nordvpn/3.85.0/images/global/illustrations/onboarding/download.svg" class="mb-6" alt="safe-wifi">--}}
                                {{--<h6 class="Title base mb-3 fwm">2. 获取 NordVPN 应用程序</h6>--}}
                                {{--<p class="Text small mb-0">iOS 版 VPN 客户端包括所有必需的配置，因此您可在一分钟内完成下载、安装和设置。</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-xs-12 col-sm-4">--}}
                            {{--<div class="FeatureItem text-center px-md-6 py-7 py-sm-8"><img src="https://s1.nordwebsite.net/nordvpn/3.85.0/images/global/illustrations/onboarding/login.svg" class="mb-6" alt="complete-privacy">--}}
                                {{--<h6 class="Title base mb-3 fwm">3. 登录并运行</h6>--}}
                                {{--<p class="Text small mb-0">打开应用程序，输入您的登录详细信息，即可登录！点触任何国家或地区，开始保护您的互联网通信。</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="mt-7 text-center"><a class="Button Button--primary Button--block-xs mb-5" href="/zh/order/" role="button" tabindex="0">立即购买</a></div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</section>--}}
        {{--<section class="bg-bw-2">--}}
            {{--<div class="SectionWrapper py-11 py-sm-12 py-md-14">--}}
                {{--<div class="container">--}}
                    {{--<div class="row">--}}
                        {{--<div class="text-center col-lg-10 col-lg-offset-1 col-xs-12">--}}
                            {{--<h3 class="Title mb-6">随时随地浏览的安全优点</h3>--}}
                            {{--<p class="Text mb-7">启动 iOS 设备上的 NordVPN，保护您的在线隐私。</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="row">--}}
                        {{--<div>--}}
                            {{--<div class="col-xs-12 col-sm-6">--}}
                                {{--<div class="FeatureItem px-sm-5 px-md-6 py-7 py-sm-8"><img src="https://s1.nordwebsite.net/nordvpn/3.85.0/images/global/illustrations/features/military-grade-encryption.svg" class="mb-6" alt="Stream Your Favorite Content">--}}
                                    {{--<h6 class="Title base mb-3 fwm">军事级加密</h6>--}}
                                    {{--<p class="Text small mb-0">iOS 版 NordVPN 应用程序采用 IKEv2/​IPsec 安全协议，该协议提供先进的加密、稳定性和高速性能。</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div>--}}
                            {{--<div class="col-xs-12 col-sm-6">--}}
                                {{--<div class="FeatureItem px-sm-5 px-md-6 py-7 py-sm-8"><img src="https://s1.nordwebsite.net/nordvpn/3.85.0/images/global/illustrations/features/easiest-vpn-ever.svg" class="mb-6" alt="Secure Your Internet Traffic">--}}
                                    {{--<h6 class="Title base mb-3 fwm">直观的界面</h6>--}}
                                    {{--<p class="Text small mb-0">只需点击几下，就可完全私密地访问互联网。只需点触 <b>Quick Connect</b>（快速连接）或从地图中选择需要的位置。</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="clearfix"></div>--}}
                        {{--</div>--}}
                        {{--<div>--}}
                            {{--<div class="col-xs-12 col-sm-6">--}}
                                {{--<div class="FeatureItem px-sm-5 px-md-6 py-7 py-sm-8"><img src="https://s1.nordwebsite.net/nordvpn/3.85.0/images/global/illustrations/features/servers-and-locations.svg" class="mb-6" alt="Shield Yourself From Ads and Malware">--}}
                                    {{--<h6 class="Title base mb-3 fwm">遍布 60 个国家或地区的服务器</h6>--}}
                                    {{--<p class="Text small mb-0">无论您在何处，都可保障在线安全：NordVPN 在 62  个国家或地区设有超过 4386 台服务器，包括中东和中国。</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div>--}}
                            {{--<div class="col-xs-12 col-sm-6">--}}
                                {{--<div class="FeatureItem px-sm-5 px-md-6 py-7 py-sm-8"><img src="https://s1.nordwebsite.net/nordvpn/3.85.0/images/global/illustrations/benefits/safe-wifi.svg" class="mb-6" alt="Quickly Switch Between Servers">--}}
                                    {{--<h6 class="Title base mb-3 fwm">安全 Wi-Fi 连接</h6>--}}
                                    {{--<p class="Text small mb-0">当您使用公共 Wi-Fi 在线购物、查看您的银行账户或使用 Facebook 时，NordVPN 可防止讨厌的窥探者偷窥您的私人数据。</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="clearfix"></div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="mt-7 text-center"><a class="Button Button--primary Button--block-xs mb-5" href="/zh/order/" role="button" tabindex="0">立即购买</a></div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</section>--}}
        {{--<div class="TwitterTestimonials bg-bw-1">--}}
            {{--<div class="container py-11 py-sm-12 py-md-14">--}}
                {{--<div class="row text-center">--}}
                    {{--<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">--}}
                        {{--<h2 class="Title h3 pb-7">由用户反馈意见提供强力支持</h2>--}}
                        {{--<p class="Text small c-bw-9 pb-9 pb-md-11">客户对 NordVPN 的赞美之词。</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="row row__flex row--justify-center d-md-flex text-center">--}}
                    {{--<div class="col-xs-12 col-md-4">--}}
                        {{--<div class="d-inline-block d-md-block">--}}
                            {{--<twitterwidget class="twitter-tweet twitter-tweet-rendered" id="twitter-widget-0" style="position: static; visibility: visible; display: block; transform: rotate(0deg); max-width: 100%; width: 500px; min-width: 220px; margin-top: 10px; margin-bottom: 10px;" data-tweet-id="970644016797769728"></twitterwidget>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-xs-12 col-md-4">--}}
                        {{--<div class="d-inline-block d-md-block">--}}
                            {{--<twitterwidget class="twitter-tweet twitter-tweet-rendered" id="twitter-widget-1" style="position: static; visibility: visible; display: block; transform: rotate(0deg); max-width: 100%; width: 500px; min-width: 220px; margin-top: 10px; margin-bottom: 10px;" data-tweet-id="971702998845083650"></twitterwidget>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-xs-12 col-md-4">--}}
                        {{--<div class="d-inline-block d-md-block">--}}
                            {{--<twitterwidget class="twitter-tweet twitter-tweet-rendered" id="twitter-widget-2" style="position: static; visibility: visible; display: block; transform: rotate(0deg); max-width: 100%; width: 500px; min-width: 220px; margin-top: 10px; margin-bottom: 10px;" data-tweet-id="969865131843731456"></twitterwidget>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<script async="" src="https://platform.twitter.com/widgets.js" charset="utf-8">--}}
            {{--</script>--}}
        {{--</div>--}}

        <style>
            .Button--neutral{background-color:#5b5e64;border-color:#5b5e64}
            .Button--neutral.Button--outline{background-color:transparent;color:#5b5e64;border-color:#d0d1d3}
            .Button--neutral.Button--outline{padding:8px 19px;border-width:1px}.Button--neutral.Button--outline:hover{background-color:#5b5e64;border-color:#5b5e64;color:#fff}.Button--neutral.Button--outline:active{background-color:#383c43;border-color:#383c43;color:#fff}.Button--neutral.Button--outline:focus{background-color:#5b5e64;border-color:#383c43;color:#fff;border-width:2px;padding:7px 18px}
        </style>

        {{--<section class="Pricing bg-bw-2">--}}
            {{--<div class="SectionWrapper py-11 py-sm-12 py-md-14">--}}
                {{--<div class="container">--}}
                    {{--<div class="row">--}}
                        {{--<div class="text-center col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">--}}
                            {{--<h3 class="Title mb-6">选择适合您的套餐</h3>--}}
                            {{--<p class="Text mb-6">30 天退款保证。</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="mt-6 mt-sm-7 row">--}}
                        {{--<div class="col-xs-12">--}}
                            {{--<div class="gutter-sm-10 row">--}}
                                {{--<div class="col-sm-4">--}}

                                    {{--<div class="PricingTable PricingTable--clickable">--}}
                                        {{--<a class="Link d-block" href="/front/zh/order/?Monthly=">--}}
                                            {{--<div class="PricingTable__wrapper bg-bw-1 text-center mb-6 ">--}}
                                                {{--<div class="PricingTable__body px-6 py-8 px-lg-8 py-lg-9">--}}
                                                    {{--<p class="Text c-bw-12 fwb mb-5 lead">1月套餐</p>--}}
                                                    {{--<div class="PricingTable__price-box fwb mb-5 mb-lg-5">--}}
                                                        {{--<h3><span class="currency fwm ml-0 mr-2">$</span>11.95<span class="fwm ml-2 micro">/月</span></h3>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="micro c-bw-9 text-center mb-5 mb-md-6"><br class="visible-sm"><span class="mx-1">--}}
                                                    {{--每月支付 11.95 美元--}}
                                                                                            {{--</span></div>--}}
                                                    {{--<div class="mb-6 mb-md-7"><span class="Badge c-bw-11 bg-bw-4">--}}
                        {{--节省 0%</span>--}}
                                                    {{--</div>--}}
                                                    {{--<button class="Button  Button--outline Button--neutral Button--block">--}}
                                                        {{--获取1月套餐</button>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-sm-4">--}}

                                    {{--<div class="PricingTable PricingTable--clickable">--}}
                                        {{--<a class="Link d-block" href="/front/zh/order/?">--}}
                                            {{--<div class="PricingTable__wrapper bg-bw-1 text-center mb-6 PricingTable--best-offer">--}}
                                                {{--<div class="PricingTable__body px-6 py-8 px-lg-8 py-lg-9">--}}
                                                    {{--<p class="Text c-bw-12 fwb mb-5 lead">2年套餐</p>--}}
                                                    {{--<div class="PricingTable__price-box fwb mb-5 mb-lg-5">--}}
                                                        {{--<h3><span class="currency fwm ml-0 mr-2">$</span>3.29<span class="fwm ml-2 micro">/月</span></h3>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="micro c-bw-9 text-center mb-5 mb-md-6"><del class="mx-1 c-bw-9">$286.80</del><br class="visible-sm"><span class="mx-1">--}}
                                                                                                    {{--每24个月支付 79.00 美元--}}
                                            {{--</span></div>--}}
                                                    {{--<div class="mb-6 mb-md-7"><span class="Badge c-red-6 bg-red-2">--}}
                        {{--节省 72%</span>--}}
                                                    {{--</div>--}}
                                                    {{--<button class="Button Button--primary Button--block">--}}
                                                        {{--获取2年套餐</button>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-sm-4">--}}

                                    {{--<div class="PricingTable PricingTable--clickable">--}}
                                        {{--<a class="Link d-block" href="/front/zh/order/?Annual=">--}}
                                            {{--<div class="PricingTable__wrapper bg-bw-1 text-center mb-6 ">--}}
                                                {{--<div class="PricingTable__body px-6 py-8 px-lg-8 py-lg-9">--}}
                                                    {{--<p class="Text c-bw-12 fwb mb-5 lead">1年套餐</p>--}}
                                                    {{--<div class="PricingTable__price-box fwb mb-5 mb-lg-5">--}}
                                                        {{--<h3><span class="currency fwm ml-0 mr-2">$</span>5.75<span class="fwm ml-2 micro">/月</span></h3>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="micro c-bw-9 text-center mb-5 mb-md-6"><del class="mx-1 c-bw-9">$143.40</del><br class="visible-sm"><span class="mx-1">--}}
                                                                            {{--每年支付 69.00 美元--}}
                                                                    {{--</span></div>--}}
                                                    {{--<div class="mb-6 mb-md-7"><span class="Badge c-bw-11 bg-bw-4">--}}
                        {{--节省 52%</span>--}}
                                                    {{--</div>--}}
                                                    {{--<button class="Button  Button--outline Button--neutral Button--block">--}}
                                                        {{--获取1年套餐</button>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="row row__flex mt-6 Pricing__features">--}}
                        {{--<div class="col-md-2 col-sm-3 col-xs-6 py-4">--}}
                        {{--<span class="fwm micro c-bw-13">--}}
                            {{--<div class="lh1 pull-left rtl-flip">--}}
                                {{--<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" class="SVG SVG--inline c-bw-14 mt-1 Pricing__SVG--block" preserveAspectRatio="xMidYMid meet"><path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zM7 11.4L3.6 8 5 6.6l2 2 4-4L12.4 6 7 11.4z" fill="#151922"></path></svg>--}}
                            {{--</div>--}}
                            {{--<div class="ml-6">无日志政策</div>--}}
                        {{--</span>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-2 col-sm-3 col-xs-6 py-4">--}}
                        {{--<span class="fwm micro c-bw-13">--}}
                            {{--<div class="lh1 pull-left rtl-flip">--}}
                                {{--<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" class="SVG SVG--inline c-bw-14 mt-1 Pricing__SVG--block" preserveAspectRatio="xMidYMid meet"><path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zM7 11.4L3.6 8 5 6.6l2 2 4-4L12.4 6 7 11.4z" fill="#151922"></path></svg>--}}
                            {{--</div>--}}
                            {{--<div class="ml-6">支持使用 P2P</div>--}}
                        {{--</span>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-2 col-sm-3 col-xs-6 py-4">--}}
                        {{--<span class="fwm micro c-bw-13">--}}
                            {{--<div class="lh1 pull-left rtl-flip">--}}
                                {{--<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" class="SVG SVG--inline c-bw-14 mt-1 Pricing__SVG--block" preserveAspectRatio="xMidYMid meet"><path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zM7 11.4L3.6 8 5 6.6l2 2 4-4L12.4 6 7 11.4z" fill="#151922"></path></svg>--}}
                            {{--</div>--}}
                            {{--<div class="ml-6">当Onion遇上VPN</div>--}}
                        {{--</span>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-2 col-sm-3 col-xs-6 py-4">--}}
                        {{--<span class="fwm micro c-bw-13">--}}
                            {{--<div class="lh1 pull-left rtl-flip">--}}
                                {{--<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" class="SVG SVG--inline c-bw-14 mt-1 Pricing__SVG--block" preserveAspectRatio="xMidYMid meet"><path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zM7 11.4L3.6 8 5 6.6l2 2 4-4L12.4 6 7 11.4z" fill="#151922"></path></svg>--}}
                            {{--</div>--}}
                            {{--<div class="ml-6">闪电般的速度</div>--}}
                        {{--</span>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-2 col-sm-3 col-xs-6 py-4">--}}
                        {{--<span class="fwm micro c-bw-13">--}}
                            {{--<div class="lh1 pull-left rtl-flip">--}}
                                {{--<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" class="SVG SVG--inline c-bw-14 mt-1 Pricing__SVG--block" preserveAspectRatio="xMidYMid meet"><path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zM7 11.4L3.6 8 5 6.6l2 2 4-4L12.4 6 7 11.4z" fill="#151922"></path></svg>--}}
                            {{--</div>--}}
                            {{--<div class="ml-6">易于使用</div>--}}
                        {{--</span>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-2 col-sm-3 col-xs-6 py-4">--}}
                        {{--<span class="fwm micro c-bw-13">--}}
                            {{--<div class="lh1 pull-left rtl-flip">--}}
                                {{--<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" class="SVG SVG--inline c-bw-14 mt-1 Pricing__SVG--block" preserveAspectRatio="xMidYMid meet"><path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zM7 11.4L3.6 8 5 6.6l2 2 4-4L12.4 6 7 11.4z" fill="#151922"></path></svg>--}}
                            {{--</div>--}}
                            {{--<div class="ml-6">接受比特币</div>--}}
                        {{--</span>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-2 col-sm-3 col-xs-6 py-4">--}}
                        {{--<span class="fwm micro c-bw-13">--}}
                            {{--<div class="lh1 pull-left rtl-flip">--}}
                                {{--<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" class="SVG SVG--inline c-bw-14 mt-1 Pricing__SVG--block" preserveAspectRatio="xMidYMid meet"><path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zM7 11.4L3.6 8 5 6.6l2 2 4-4L12.4 6 7 11.4z" fill="#151922"></path></svg>--}}
                            {{--</div>--}}
                            {{--<div class="ml-6">全球网络</div>--}}
                        {{--</span>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-2 col-sm-3 col-xs-6 py-4">--}}
                        {{--<span class="fwm micro c-bw-13">--}}
                            {{--<div class="lh1 pull-left rtl-flip">--}}
                                {{--<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" class="SVG SVG--inline c-bw-14 mt-1 Pricing__SVG--block" preserveAspectRatio="xMidYMid meet"><path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zM7 11.4L3.6 8 5 6.6l2 2 4-4L12.4 6 7 11.4z" fill="#151922"></path></svg>--}}
                            {{--</div>--}}
                            {{--<div class="ml-6">随时取消</div>--}}
                        {{--</span>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-2 col-sm-3 col-xs-6 py-4">--}}
                        {{--<span class="fwm micro c-bw-13">--}}
                            {{--<div class="lh1 pull-left rtl-flip">--}}
                                {{--<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" class="SVG SVG--inline c-bw-14 mt-1 Pricing__SVG--block" preserveAspectRatio="xMidYMid meet"><path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zM7 11.4L3.6 8 5 6.6l2 2 4-4L12.4 6 7 11.4z" fill="#151922"></path></svg>--}}
                            {{--</div>--}}
                            {{--<div class="ml-6">友好支持</div>--}}
                        {{--</span>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-2 col-sm-3 col-xs-6 py-4">--}}
                        {{--<span class="fwm micro c-bw-13">--}}
                            {{--<div class="lh1 pull-left rtl-flip">--}}
                                {{--<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" class="SVG SVG--inline c-bw-14 mt-1 Pricing__SVG--block" preserveAspectRatio="xMidYMid meet"><path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zM7 11.4L3.6 8 5 6.6l2 2 4-4L12.4 6 7 11.4z" fill="#151922"></path></svg>--}}
                            {{--</div>--}}
                            {{--<div class="ml-6">Kill Switch</div>--}}
                        {{--</span>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-2 col-sm-3 col-xs-6 py-4">--}}
                        {{--<span class="fwm micro c-bw-13">--}}
                            {{--<div class="lh1 pull-left rtl-flip">--}}
                                {{--<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" class="SVG SVG--inline c-bw-14 mt-1 Pricing__SVG--block" preserveAspectRatio="xMidYMid meet"><path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zM7 11.4L3.6 8 5 6.6l2 2 4-4L12.4 6 7 11.4z" fill="#151922"></path></svg>--}}
                            {{--</div>--}}
                            {{--<div class="ml-6">无限带宽</div>--}}
                        {{--</span>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-2 col-sm-3 col-xs-6 py-4">--}}
                        {{--<span class="fwm micro c-bw-13">--}}
                            {{--<div class="lh1 pull-left rtl-flip">--}}
                                {{--<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" class="SVG SVG--inline c-bw-14 mt-1 Pricing__SVG--block" preserveAspectRatio="xMidYMid meet"><path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zM7 11.4L3.6 8 5 6.6l2 2 4-4L12.4 6 7 11.4z" fill="#151922"></path></svg>--}}
                            {{--</div>--}}
                            {{--<div class="ml-6">双重加密</div>--}}
                        {{--</span>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</section>--}}

    </div>
@endsection