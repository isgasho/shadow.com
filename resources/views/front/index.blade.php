@extends('front.layouts')

@section('title', '穿云梯加速器')
@section('content')
    <style>
        .indexImg{
            height: 96px;
        }
        .title_ohh{
            font-weight: 600;
        }
        .content_ohh{
            color: #333;
        }
        .base{
            font-size: 20px;
        }
    </style>
    <link rel="stylesheet" href="/css/front/base2.css" onload="this.rel='stylesheet'"
          as="style">
    <noscript>
        <link rel="stylesheet" href="/css/front/base2.css" type='text/css'
              media='all'>
    </noscript>
<div class="BaseTemplate HolidayDeal">
    <div class="Hero">
        <div class="Background"
             style="background-image:url(/images/index_banner5.jpg);background-repeat:no-repeat;background-position:left top;background-size:cover">
            <div class="container pt-9 pt-sm-10 Hero__container d-flex">
                <div class="row py-9 py-sm-12 py-lg-13 d-md-flex">
                    <div class="col-xs-12 col-md-12 col-lg-12 text-sm-center text-xs-center">
                        <h1 class="c-bw-1 mb-5 mb-sm-6"><span>突破限制，从我出发!</span></h1>
                        <p class="c-bw-1 fwm mb-5 mb-sm-6"><span>任何的限制，都是从自己的内心开始的</span></p><a
                                class="Button Button--primary Button--large mb-6 mb-sm-7 mb-md-6 mt-3 mt-md-0"
                                href="/front/order" role="button" tabIndex="0"><span>注册免费试用</span></a>
                        <div
                                class="visible-xs clearfix mb-5"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="scroll-down"></div>
    <section>
        <div class="SectionWrapper py-11 py-sm-12 py-md-14">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <h3 class="Title mb-6"><span>不断满足用户需求的网络加速工具</span></h3>
                        <p class="Text mb-7"><span>使用穿云梯，确保您的在线活动安全、私密</span></p>
                    </div>
                </div>
                <div class="row row__flex">
                    <div class="col-xs-12 col-sm-4">
                        <div class="FeatureItem text-center px-md-6 py-7 py-sm-8">
                            <div>
                                <img src="/images/index/1.svg"
                                     class="Image mb-6 indexImg" alt="safe-wifi"/>
                                <h6 class="Title base mb-3 fwm"><span
                                            class="vertical-middle"><span>免费极致体验</span></span>
                                </h6>
                                <p class="Text small mb-0">
                                    <span>
                                        手机注册即送1G流量免费体验
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="FeatureItem text-center px-md-6 py-7 py-sm-8">
                            <div>
                                <img src="/images/index/2.svg"
                                     class="Image mb-6 indexImg" alt="unrestricted-internet"/>
                                <h6 class="Title base mb-3 fwm"><span
                                            class="vertical-middle"><span>快到无法想象</span></span>
                                </h6>
                                <p class="Text small mb-0">
                                    <span>
                                        全球知名品牌服务器供应商提供高速、高品质网路连接服务
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="FeatureItem text-center px-md-6 py-7 py-sm-8">
                            <div>
                                <img src="/images/index/3.svg"
                                     class="Image mb-6 indexImg" alt="complete-privacy"/>
                                <h6 class="Title base mb-3 fwm"><span class="vertical-middle"><span>隐私安全加密</span></span>
                                </h6>
                                <p class="Text small mb-0"><span>
                                        企业级加密、专人系统维护，保障个人隐私。
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row__flex">
                    <div class="col-xs-12 col-sm-4">
                        <div class="FeatureItem text-center px-md-6 py-7 py-sm-8">
                            <div>
                                <img src="/images/index/4.svg"
                                     class="Image mb-6 indexImg" alt="safe-wifi"/>
                                <h6 class="Title base mb-3 fwm"><span
                                            class="vertical-middle"><span>节点遍布全球</span></span>
                                </h6>
                                <p class="Text small mb-0"><span>
                                        无地域限制，无论身处何方，依然畅游互联网每个角落
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="FeatureItem text-center px-md-6 py-7 py-sm-8">
                            <div>
                                <img src="/images/index/5.svg"
                                     class="Image mb-6 indexImg" alt="unrestricted-internet"/>
                                <h6 class="Title base mb-3 fwm"><span
                                            class="vertical-middle"><span>套餐选择多样性</span></span>
                                </h6>
                                <p class="Text small mb-0"><span>
                                        限流量和不限流量套餐可供用户选择，并推出业内最低价格9.9元/月
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="FeatureItem text-center px-md-6 py-7 py-sm-8">
                            <div>
                                <img src="/images/index/6.svg"
                                     class="Image mb-6 indexImg" alt="complete-privacy"/>
                                <h6 class="Title base mb-3 fwm"><span class="vertical-middle"><span>全平台通用，操作简单</span></span>
                                </h6>
                                <p class="Text small mb-0"><span>
                                        简易操作，扫二维码即可完成连接。兼容主流平台，一个账号全平台通用
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-10 col-lg-offset-1">
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <h3 class="Title mb-6"><span>应用场景</span></h3>
                            <br>
                        </div>
                    </div>
                    <div class="row row__flex">
                        <div class="col-xs-12 col-md-3 mb-6">
                            <div class="ArticleCard ArticleCard--vertical">
                                <div class="Paper bg-bw-1 d-flex clearfix sha-1 ">
                                    <div class="col-xs-12 col-sm-5 ArticleCard__image-wrapper px-0 col-md-12">
                                        <div class="ArticleCard__image" style="background-image:url(/images/index/picture1.png)"></div>
                                    </div>
                                    <div class="col-xs-12 col-sm-7 col-md-12 ArticleCard__content-wrapper px-0 d-flex">
                                        <div class="d-flex flex-column w-100 p-6">
                                            <p class="Text ArticleCard__title fwm mb-3 title_ohh">影视爱好者</p>
                                            <p class="Text nano mb-3 c-bw-6 content_ohh" >适合喜欢追美剧，关心国内外时事娱乐动态的用户，能在线流畅观看高清Youtube，Netflix和Twitch等视频影视网站</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-3 mb-6">
                            <div class="ArticleCard ArticleCard--vertical">
                                <div class="Paper bg-bw-1 d-flex clearfix sha-1 ">
                                    <div class="col-xs-12 col-sm-5 ArticleCard__image-wrapper px-0 col-md-12">
                                        <div class="ArticleCard__image" style="background-image:url(/images/index/picture2.png)"></div>
                                    </div>
                                    <div class="col-xs-12 col-sm-7 col-md-12 ArticleCard__content-wrapper px-0 d-flex">
                                        <div class="d-flex flex-column w-100 p-6">
                                            <p class="Text ArticleCard__title fwm mb-3 title_ohh">社交达人</p>
                                            <p class="Text nano mb-3 c-bw-6 content_ohh">适合Facebook，Twitter，Instagram等热爱社交的用户，让社交无地域限制，随时随地结交世界各地的朋友</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-3 mb-6">
                            <div class="ArticleCard ArticleCard--vertical">
                                <div class="Paper bg-bw-1 d-flex clearfix sha-1 ">
                                    <div class="col-xs-12 col-sm-5 ArticleCard__image-wrapper px-0 col-md-12">
                                        <div class="ArticleCard__image" style="background-image:url(/images/index/picture3.png)"></div>
                                    </div>
                                    <div class="col-xs-12 col-sm-7 col-md-12 ArticleCard__content-wrapper px-0 d-flex">
                                        <div class="d-flex flex-column w-100 p-6">
                                            <p class="Text ArticleCard__title fwm mb-3 title_ohh">区块链用户</p>
                                            <p class="Text nano mb-3 c-bw-6 content_ohh">适合炒币，币圈电报群，获取币圈最新资讯的区块链用户，高速无延迟的服务让区块链用户投资获利更胜一筹</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-3 mb-6">
                            <div class="ArticleCard ArticleCard--vertical">
                                <div class="Paper bg-bw-1 d-flex clearfix sha-1">
                                    <div class="col-xs-12 col-sm-5 ArticleCard__image-wrapper px-0 col-md-12">
                                        <div class="ArticleCard__image" style="background-image:url(/images/index/picture4.png)"></div>
                                    </div>
                                    <div class="col-xs-12 col-sm-7 col-md-12 ArticleCard__content-wrapper px-0 d-flex">
                                        <div class="d-flex flex-column w-100 p-6">
                                            <p class="Text ArticleCard__title fwm mb-3 title_ohh">各行各业用户</p>
                                            <p class="Text nano mb-3 c-bw-6 content_ohh">无论你是海淘客，设计师，还是留学党。能让用户越过限制，与其它国家的任何企业或网站自由的沟通合作</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection