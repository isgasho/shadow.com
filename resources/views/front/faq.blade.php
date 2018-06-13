@extends('front.layouts2')

@section('content')
    <style>
        .wp-AccordionCardItem__wrapper{
            background-color: #FFFFFF;
        }
    </style>
    <div class="BaseTemplate FAQ bg-bw-2">
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">
                        <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=2747305744&site=qq&menu=yes">
                            <img src="/images/kefu.jpg" class="img-responsive" alt="Responsive image" style="margin-top: 10px">
                        </a>
                        <div id="section-general" class="mb-11 mb-md-13" style="margin-bottom: 40px">
                            <h2 class="Title h5 pb-5" style="margin-top: 10px">功能使用疑问</h2>
                            <div class="wp-Accordion wp-Accordion--card" id="general" role="tablist"
                                 aria-multiselectable="true">
                                <div class="wp-AccordionCardItem js-AccordionCardItem panel py-3">
                                    <div class="wp-AccordionCardItem__wrapper p-5 py-sm-6 px-sm-7 sha-1 sha-2-hover d-block"
                                         role="button" data-toggle="collapse" data-parent="#general"
                                         href="#collapse-general-1" aria-expanded="false"
                                         aria-controls="collapse-general-1">
                                        <div role="tab" id="heading-1">
                                            <div class="wp-AccordionCardItem__title">
                                                <div class="c-bw-12 d-flex">
                                                    <h3 class="Title base fwm c-bw-12 pr-4">
                                                        设备数量限制是什么意思？
                                                    </h3>
                                                    <span class="SVG-wrapper">
                                                        <img
                                                                src="/images/chevrons-down.svg"
                                                                alt="chevrons up"
                                                                class="SVG scale-16 js-SVG--with-scale">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapse-general-1" class="wp-AccordionCardItem__content collapse"
                                             role="tabpanel" aria-labelledby="heading-1">
                                            <div class="pt-3 pt-sm-5 c-bw-9 small">
                                                <span>
                                                    设备数量是指同时在线的设备个数。比如您购买的套餐设备数量限制是2台，这意味着您可以在多个设备上使用我们的节点，但最多可以只支持2台设备同时使用客户端联网。
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wp-AccordionCardItem js-AccordionCardItem panel py-3">
                                    <div class="wp-AccordionCardItem__wrapper p-5 py-sm-6 px-sm-7 sha-1 sha-2-hover d-block"
                                         role="button" data-toggle="collapse" data-parent="#general"
                                         href="#collapse-general-2" aria-expanded="false"
                                         aria-controls="collapse-general-2">
                                        <div role="tab" id="heading-2">
                                            <div class="wp-AccordionCardItem__title">
                                                <div class="c-bw-12 d-flex">
                                                    <h3 class="Title base fwm c-bw-12 pr-4">
                                                        有没有免费获得试用的机会？
                                                    </h3>
                                                    <span class="SVG-wrapper">
                                                        <img
                                                                src="/images/chevrons-down.svg"
                                                                alt="chevrons up"
                                                                class="SVG scale-16 js-SVG--with-scale">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapse-general-2" class="wp-AccordionCardItem__content collapse"
                                             role="tabpanel" aria-labelledby="heading-2">
                                            <div class="pt-3 pt-sm-5 c-bw-9 small">
                                                <span>
                                                    可以通过手机注册获得一天3G流量免费使用。
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wp-AccordionCardItem js-AccordionCardItem panel py-3">
                                    <div class="wp-AccordionCardItem__wrapper p-5 py-sm-6 px-sm-7 sha-1 sha-2-hover d-block"
                                         role="button" data-toggle="collapse" data-parent="#general"
                                         href="#collapse-general-3" aria-expanded="false"
                                         aria-controls="collapse-general-3">
                                        <div role="tab" id="heading-3">
                                            <div class="wp-AccordionCardItem__title">
                                                <div class="c-bw-12 d-flex">
                                                    <h3 class="Title base fwm c-bw-12 pr-4">
                                                        国内和国外节点有什么区别？
                                                    </h3>
                                                    <span class="SVG-wrapper">
                                                        <img
                                                                src="/images/chevrons-down.svg"
                                                                alt="chevrons up"
                                                                class="SVG scale-16 js-SVG--with-scale">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapse-general-3" class="wp-AccordionCardItem__content collapse"
                                             role="tabpanel" aria-labelledby="heading-3">
                                            <div class="pt-3 pt-sm-5 c-bw-9 small">
                                                <span>
                                                    如果需要查看海外网站的用户，可以选择负载率低的国外节点。如果需要查看国内网站的用户，则可选择负载率低的国内节点。穿云梯VPN服务为用户提供了数十个国内外节点。
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wp-AccordionCardItem js-AccordionCardItem panel py-3">
                                    <div class="wp-AccordionCardItem__wrapper p-5 py-sm-6 px-sm-7 sha-1 sha-2-hover d-block"
                                         role="button" data-toggle="collapse" data-parent="#general"
                                         href="#collapse-general-4" aria-expanded="false"
                                         aria-controls="collapse-general-4">
                                        <div role="tab" id="heading-4">
                                            <div class="wp-AccordionCardItem__title">
                                                <div class="c-bw-12 d-flex">
                                                    <h3 class="Title base fwm c-bw-12 pr-4">
                                                        Windows客户端，线路连接之后，无法登录网站？
                                                    </h3>
                                                    <span class="SVG-wrapper">
                                                        <img
                                                                src="/images/chevrons-down.svg"
                                                                alt="chevrons up"
                                                                class="SVG scale-16 js-SVG--with-scale">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapse-general-4" class="wp-AccordionCardItem__content collapse"
                                             role="tabpanel" aria-labelledby="heading-4">
                                            <div class="pt-3 pt-sm-5 c-bw-9 small">
                                                <span>
                                                    出现这种情况，有可能是受到浏览器插件干扰或者360安全卫士等软件拦截的缘故。请您关闭360安全卫士或查看所使用的浏览器，在设置中找到影响浏览器的插件，关闭插件即可。如问题持续，可提交工单或联系客服。
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wp-AccordionCardItem js-AccordionCardItem panel py-3">
                                    <div class="wp-AccordionCardItem__wrapper p-5 py-sm-6 px-sm-7 sha-1 sha-2-hover d-block"
                                         role="button" data-toggle="collapse" data-parent="#general"
                                         href="#collapse-general-5" aria-expanded="false"
                                         aria-controls="collapse-general-5">
                                        <div role="tab" id="heading-5">
                                            <div class="wp-AccordionCardItem__title">
                                                <div class="c-bw-12 d-flex">
                                                    <h3 class="Title base fwm c-bw-12 pr-4">
                                                        穿云梯VPN提供的节点速度如何，稳定吗？
                                                    </h3>
                                                    <span class="SVG-wrapper">
                                                        <img
                                                                src="/images/chevrons-down.svg"
                                                                alt="chevrons up"
                                                                class="SVG scale-16 js-SVG--with-scale">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapse-general-5" class="wp-AccordionCardItem__content collapse"
                                             role="tabpanel" aria-labelledby="heading-5">
                                            <div class="pt-3 pt-sm-5 c-bw-9 small">
                                                <span>
                                                    我们承诺使用高质量高带宽服务器节点，保证各类型网络都能告诉接入，保证国内外线路常年24小时高速稳定。同时，我们会用户提供大量优质节点，能有效避免突发大流量引起的服务器不稳定。
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wp-AccordionCardItem js-AccordionCardItem panel py-3">
                                    <div class="wp-AccordionCardItem__wrapper p-5 py-sm-6 px-sm-7 sha-1 sha-2-hover d-block"
                                         role="button" data-toggle="collapse" data-parent="#general"
                                         href="#collapse-general-6" aria-expanded="false"
                                         aria-controls="collapse-general-6">
                                        <div role="tab" id="heading-6">
                                            <div class="wp-AccordionCardItem__title">
                                                <div class="c-bw-12 d-flex">
                                                    <h3 class="Title base fwm c-bw-12 pr-4">
                                                        Windows、安卓和Mac客户端是不是一定要安装ShadowsocksR才能使用你们提供的节点？
                                                    </h3>
                                                    <span class="SVG-wrapper">
                                                        <img
                                                                src="/images/chevrons-down.svg"
                                                                alt="chevrons up"
                                                                class="SVG scale-16 js-SVG--with-scale">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapse-general-6" class="wp-AccordionCardItem__content collapse"
                                             role="tabpanel" aria-labelledby="heading-6">
                                            <div class="pt-3 pt-sm-5 c-bw-9 small">
                                                <span>
                                                    是的。详细可以查看安装使用教程。
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wp-AccordionCardItem js-AccordionCardItem panel py-3">
                                    <div class="wp-AccordionCardItem__wrapper p-5 py-sm-6 px-sm-7 sha-1 sha-2-hover d-block"
                                         role="button" data-toggle="collapse" data-parent="#general"
                                         href="#collapse-general-7" aria-expanded="false"
                                         aria-controls="collapse-general-7">
                                        <div role="tab" id="heading-7">
                                            <div class="wp-AccordionCardItem__title">
                                                <div class="c-bw-12 d-flex">
                                                    <h3 class="Title base fwm c-bw-12 pr-4">
                                                        苹果客户端除了美服能够下载Potatso以外，还有其他方法能够下载或者使用你们的节点吗？
                                                    </h3>
                                                    <span class="SVG-wrapper">
                                                        <img
                                                                src="/images/chevrons-down.svg"
                                                                alt="chevrons up"
                                                                class="SVG scale-16 js-SVG--with-scale">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapse-general-7" class="wp-AccordionCardItem__content collapse"
                                             role="tabpanel" aria-labelledby="heading-7">
                                            <div class="pt-3 pt-sm-5 c-bw-9 small">
                                                <span>
                                                    暂时没有，目前免费第三方并且能够使用SSR节点的软件只有Potatso，并且需要使用我们提供的美服账号登录下载Potatso使用。
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wp-AccordionCardItem js-AccordionCardItem panel py-3">
                                    <div class="wp-AccordionCardItem__wrapper p-5 py-sm-6 px-sm-7 sha-1 sha-2-hover d-block"
                                         role="button" data-toggle="collapse" data-parent="#general"
                                         href="#collapse-general-8" aria-expanded="false"
                                         aria-controls="collapse-general-8">
                                        <div role="tab" id="heading-8">
                                            <div class="wp-AccordionCardItem__title">
                                                <div class="c-bw-12 d-flex">
                                                    <h3 class="Title base fwm c-bw-12 pr-4">
                                                        提交工单后一般多长时间会得到你们的回复？
                                                    </h3>
                                                    <span class="SVG-wrapper">
                                                        <img
                                                                src="/images/chevrons-down.svg"
                                                                alt="chevrons up"
                                                                class="SVG scale-16 js-SVG--with-scale">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapse-general-8" class="wp-AccordionCardItem__content collapse"
                                             role="tabpanel" aria-labelledby="heading-8">
                                            <div class="pt-3 pt-sm-5 c-bw-9 small">
                                                <span>
                                                    首先我们承诺会用最快速度解决您的问题，同时您可以咨询或留言QQ客服，我们会不超过24小时回复您的疑问。
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wp-AccordionCardItem js-AccordionCardItem panel py-3">
                                    <div class="wp-AccordionCardItem__wrapper p-5 py-sm-6 px-sm-7 sha-1 sha-2-hover d-block"
                                         role="button" data-toggle="collapse" data-parent="#general"
                                         href="#collapse-general-9" aria-expanded="false"
                                         aria-controls="collapse-general-9">
                                        <div role="tab" id="heading-9">
                                            <div class="wp-AccordionCardItem__title">
                                                <div class="c-bw-12 d-flex">
                                                    <h3 class="Title base fwm c-bw-12 pr-4">
                                                        你们会不定期更新节点吗？
                                                    </h3>
                                                    <span class="SVG-wrapper">
                                                        <img
                                                                src="/images/chevrons-down.svg"
                                                                alt="chevrons up"
                                                                class="SVG scale-16 js-SVG--with-scale">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapse-general-9" class="wp-AccordionCardItem__content collapse"
                                             role="tabpanel" aria-labelledby="heading-9">
                                            <div class="pt-3 pt-sm-5 c-bw-9 small">
                                                <span>
                                                    会的，为了更好服务穿云梯VPN用户，我们将不定时增加服务器节点，务求会用户提供更多高质量、稳定的节点服务。
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wp-AccordionCardItem js-AccordionCardItem panel py-3">
                                    <div class="wp-AccordionCardItem__wrapper p-5 py-sm-6 px-sm-7 sha-1 sha-2-hover d-block"
                                         role="button" data-toggle="collapse" data-parent="#general"
                                         href="#collapse-general-10" aria-expanded="false"
                                         aria-controls="collapse-general-10">
                                        <div role="tab" id="heading-10">
                                            <div class="wp-AccordionCardItem__title">
                                                <div class="c-bw-12 d-flex">
                                                    <h3 class="Title base fwm c-bw-12 pr-4">
                                                        更新节点后，我的客户端会自动更新吗？
                                                    </h3>
                                                    <span class="SVG-wrapper">
                                                        <img
                                                                src="/images/chevrons-down.svg"
                                                                alt="chevrons up"
                                                                class="SVG scale-16 js-SVG--with-scale">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapse-general-10" class="wp-AccordionCardItem__content collapse"
                                             role="tabpanel" aria-labelledby="heading-10">
                                            <div class="pt-3 pt-sm-5 c-bw-9 small">
                                                <span>
                                                    只要你是我们的套餐会员，并且提交了订阅节点服务（可在用户中心点击订阅节点），那么套餐用户的客户端的节点也会自动更新。
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="section-billing-and-sales" class="mb-11 mb-md-13">
                            <h2 class="Title h5 pb-5">套餐使用疑问</h2>
                            <div class="wp-Accordion wp-Accordion--card" id="billing-and-sales" role="tablist"
                                 aria-multiselectable="true">
                                <div class="wp-AccordionCardItem js-AccordionCardItem panel py-3">
                                    <div class="wp-AccordionCardItem__wrapper p-5 py-sm-6 px-sm-7 sha-1 sha-2-hover d-block"
                                         role="button" data-toggle="collapse" data-parent="#billing-and-sales"
                                         href="#collapse-billing-and-sales-1" aria-expanded="false"
                                         aria-controls="collapse-billing-and-sales-1">
                                        <div role="tab" id="heading-1">
                                            <div class="wp-AccordionCardItem__title">
                                                <div class="c-bw-12 d-flex">
                                                    <h3 class="Title base fwm c-bw-12 pr-4">
                                                        服务计时没有结束时能否续费？
                                                    </h3>
                                                    <span class="SVG-wrapper">
                                                        <img
                                                                src="/images/chevrons-down.svg"
                                                                alt="chevrons up"
                                                                class="SVG scale-16 js-SVG--with-scale">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapse-billing-and-sales-1"
                                             class="wp-AccordionCardItem__content collapse" role="tabpanel"
                                             aria-labelledby="heading-1">
                                            <div class="pt-3 pt-sm-5 c-bw-9 small">
                                                <span>
                                                    能续费。续费之后的天数等于套餐包含的天数加上之前剩余的天数。
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wp-AccordionCardItem js-AccordionCardItem panel py-3">
                                    <div class="wp-AccordionCardItem__wrapper p-5 py-sm-6 px-sm-7 sha-1 sha-2-hover d-block"
                                         role="button" data-toggle="collapse" data-parent="#billing-and-sales"
                                         href="#collapse-billing-and-sales-2" aria-expanded="false"
                                         aria-controls="collapse-billing-and-sales-2">
                                        <div role="tab" id="heading-2">
                                            <div class="wp-AccordionCardItem__title">
                                                <div class="c-bw-12 d-flex">
                                                    <h3 class="Title base fwm c-bw-12 pr-4">
                                                        套餐结束日期还没到，但流量已经完成怎么办？
                                                    </h3>
                                                    <span class="SVG-wrapper">
                                                        <img
                                                                src="/images/chevrons-down.svg"
                                                                alt="chevrons up"
                                                                class="SVG scale-16 js-SVG--with-scale">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapse-billing-and-sales-2"
                                             class="wp-AccordionCardItem__content collapse" role="tabpanel"
                                             aria-labelledby="heading-2">
                                            <div class="pt-3 pt-sm-5 c-bw-9 small">
                                                <span>
                                                   只能重新订阅套餐，计费日期从订购新套餐日期开始。（例如：用户本来的结束日期在2018-6-25，但在2018-6-18的时候已经把流量用完了，那么如果他在当天重新订阅套餐日期是一个月，那么新套餐的计算时间是从2018-6-18开始顺数30天）
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wp-AccordionCardItem js-AccordionCardItem panel py-3">
                                    <div class="wp-AccordionCardItem__wrapper p-5 py-sm-6 px-sm-7 sha-1 sha-2-hover d-block"
                                         role="button" data-toggle="collapse" data-parent="#billing-and-sales"
                                         href="#collapse-billing-and-sales-3" aria-expanded="false"
                                         aria-controls="collapse-billing-and-sales-3">
                                        <div role="tab" id="heading-3">
                                            <div class="wp-AccordionCardItem__title">
                                                <div class="c-bw-12 d-flex">
                                                    <h3 class="Title base fwm c-bw-12 pr-4">
                                                        流量还用完，到套餐结束日已经到了怎么办？
                                                    </h3>
                                                    <span class="SVG-wrapper">
                                                        <img
                                                                src="/images/chevrons-down.svg"
                                                                alt="chevrons up"
                                                                class="SVG scale-16 js-SVG--with-scale">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapse-billing-and-sales-3"
                                             class="wp-AccordionCardItem__content collapse" role="tabpanel"
                                             aria-labelledby="heading-3">
                                            <div class="pt-3 pt-sm-5 c-bw-9 small">
                                                <span>
                                                    套餐流量会在服务到期后清零并且不累积。另外，订购了季度或者一年服务的朋友要留意，流量同样会在30天后清零一次，不会累计计算。
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wp-AccordionCardItem js-AccordionCardItem panel py-3">
                                    <div class="wp-AccordionCardItem__wrapper p-5 py-sm-6 px-sm-7 sha-1 sha-2-hover d-block"
                                         role="button" data-toggle="collapse" data-parent="#billing-and-sales"
                                         href="#collapse-billing-and-sales-4" aria-expanded="false"
                                         aria-controls="collapse-billing-and-sales-4">
                                        <div role="tab" id="heading-4">
                                            <div class="wp-AccordionCardItem__title">
                                                <div class="c-bw-12 d-flex">
                                                    <h3 class="Title base fwm c-bw-12 pr-4">
                                                        穿云梯VPN支持哪些支付渠道？
                                                    </h3>
                                                    <span class="SVG-wrapper">
                                                        <img
                                                                src="/images/chevrons-down.svg"
                                                                alt="chevrons up"
                                                                class="SVG scale-16 js-SVG--with-scale">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapse-billing-and-sales-4"
                                             class="wp-AccordionCardItem__content collapse" role="tabpanel"
                                             aria-labelledby="heading-4">
                                            <div class="pt-3 pt-sm-5 c-bw-9 small">
                                                <span>
                                                    穿云梯VPN目前支持以下支付方式：微信，支付宝，PayPal和信用卡。
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wp-AccordionCardItem js-AccordionCardItem panel py-3">
                                    <div class="wp-AccordionCardItem__wrapper p-5 py-sm-6 px-sm-7 sha-1 sha-2-hover d-block"
                                         role="button" data-toggle="collapse" data-parent="#billing-and-sales"
                                         href="#collapse-billing-and-sales-5" aria-expanded="false"
                                         aria-controls="collapse-billing-and-sales-5">
                                        <div role="tab" id="heading-5">
                                            <div class="wp-AccordionCardItem__title">
                                                <div class="c-bw-12 d-flex">
                                                    <h3 class="Title base fwm c-bw-12 pr-4">
                                                        套餐流量是怎样计算监控的？
                                                    </h3>
                                                    <span class="SVG-wrapper">
                                                        <img
                                                                src="/images/chevrons-down.svg"
                                                                alt="chevrons up"
                                                                class="SVG scale-16 js-SVG--with-scale">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapse-billing-and-sales-5"
                                             class="wp-AccordionCardItem__content collapse" role="tabpanel"
                                             aria-labelledby="heading-5">
                                            <div class="pt-3 pt-sm-5 c-bw-9 small">
                                                <span>
                                                    用户中心有流量日志，能够查看各自24小时和30天的流量使用情况。
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wp-AccordionCardItem js-AccordionCardItem panel py-3">
                                    <div class="wp-AccordionCardItem__wrapper p-5 py-sm-6 px-sm-7 sha-1 sha-2-hover d-block"
                                         role="button" data-toggle="collapse" data-parent="#billing-and-sales"
                                         href="#collapse-billing-and-sales-6" aria-expanded="false"
                                         aria-controls="collapse-billing-and-sales-6">
                                        <div role="tab" id="heading-6">
                                            <div class="wp-AccordionCardItem__title">
                                                <div class="c-bw-12 d-flex">
                                                    <h3 class="Title base fwm c-bw-12 pr-4">
                                                        如果不想用了，可以退款吗？
                                                    </h3>
                                                    <span class="SVG-wrapper">
                                                        <img
                                                                src="/images/chevrons-down.svg"
                                                                alt="chevrons up"
                                                                class="SVG scale-16 js-SVG--with-scale">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapse-billing-and-sales-6"
                                             class="wp-AccordionCardItem__content collapse" role="tabpanel"
                                             aria-labelledby="heading-6">
                                            <div class="pt-3 pt-sm-5 c-bw-9 small">
                                                <span>
                                                    非常遗憾的告诉用户，我们将会竭尽所能为您解决所有问题，而且由于用户使用套餐节点服务期间产生了成本，因此目前我们没有退款的办理，请谅解。
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--<div id="section-setup-questions" class="mb-11 mb-md-13">--}}
                            {{--<h2 class="Title h5 pb-5">Set up questions</h2>--}}
                            {{--<div class="wp-Accordion wp-Accordion--card" id="setup-questions" role="tablist"--}}
                                 {{--aria-multiselectable="true">--}}
                                {{--<div class="wp-AccordionCardItem js-AccordionCardItem panel py-3">--}}
                                    {{--<div class="wp-AccordionCardItem__wrapper p-5 py-sm-6 px-sm-7 sha-1 sha-2-hover d-block"--}}
                                         {{--role="button" data-toggle="collapse" data-parent="#setup-questions"--}}
                                         {{--href="#collapse-setup-questions-1" aria-expanded="false"--}}
                                         {{--aria-controls="collapse-setup-questions-1">--}}
                                        {{--<div role="tab" id="heading-1">--}}
                                            {{--<div class="wp-AccordionCardItem__title">--}}
                                                {{--<div class="c-bw-12 d-flex">--}}
                                                    {{--<h3 class="Title base fwm c-bw-12 pr-4">Can I set up NordVPN on my--}}
                                                        {{--smart TV or Apple TV?</h3><span class="SVG-wrapper"><img--}}
                                                                {{--src="/images/chevrons-down.svg"--}}
                                                                {{--alt="chevrons up"--}}
                                                                {{--class="SVG scale-16 js-SVG--with-scale"></span></div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div id="collapse-setup-questions-1"--}}
                                             {{--class="wp-AccordionCardItem__content collapse" role="tabpanel"--}}
                                             {{--aria-labelledby="heading-1">--}}
                                            {{--<div class="pt-3 pt-sm-5 c-bw-9 small"><span>Smart TV and Apple TV do not support built-in VPN. The only way to set it up is by configuring VPN on your router. That way, your smart TV or Apple TV will get the VPN connection from your router.</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="wp-AccordionCardItem js-AccordionCardItem panel py-3">--}}
                                    {{--<div class="wp-AccordionCardItem__wrapper p-5 py-sm-6 px-sm-7 sha-1 sha-2-hover d-block"--}}
                                         {{--role="button" data-toggle="collapse" data-parent="#setup-questions"--}}
                                         {{--href="#collapse-setup-questions-2" aria-expanded="false"--}}
                                         {{--aria-controls="collapse-setup-questions-2">--}}
                                        {{--<div role="tab" id="heading-2">--}}
                                            {{--<div class="wp-AccordionCardItem__title">--}}
                                                {{--<div class="c-bw-12 d-flex">--}}
                                                    {{--<h3 class="Title base fwm c-bw-12 pr-4">What router do you recommend--}}
                                                        {{--to use with NordVPN?</h3><span class="SVG-wrapper"><img--}}
                                                                {{--src="/images/chevrons-down.svg"--}}
                                                                {{--alt="chevrons up"--}}
                                                                {{--class="SVG scale-16 js-SVG--with-scale"></span></div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div id="collapse-setup-questions-2"--}}
                                             {{--class="wp-AccordionCardItem__content collapse" role="tabpanel"--}}
                                             {{--aria-labelledby="heading-2">--}}
                                            {{--<div class="pt-3 pt-sm-5 c-bw-9 small"><span>We would recommend you to purchase <a--}}
                                                            {{--class="Link Link--alt"--}}
                                                            {{--href="https://nordwebsite.net/flashrouters/">DD-WRT or Tomato-compatible router</a> and set it up with NordVPN.</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="wp-AccordionCardItem js-AccordionCardItem panel py-3">--}}
                                    {{--<div class="wp-AccordionCardItem__wrapper p-5 py-sm-6 px-sm-7 sha-1 sha-2-hover d-block"--}}
                                         {{--role="button" data-toggle="collapse" data-parent="#setup-questions"--}}
                                         {{--href="#collapse-setup-questions-3" aria-expanded="false"--}}
                                         {{--aria-controls="collapse-setup-questions-3">--}}
                                        {{--<div role="tab" id="heading-3">--}}
                                            {{--<div class="wp-AccordionCardItem__title">--}}
                                                {{--<div class="c-bw-12 d-flex">--}}
                                                    {{--<h3 class="Title base fwm c-bw-12 pr-4">How does an IP address--}}
                                                        {{--relate to online security &amp; privacy?</h3><span--}}
                                                            {{--class="SVG-wrapper"><img--}}
                                                                {{--src="/images/chevrons-down.svg"--}}
                                                                {{--alt="chevrons up"--}}
                                                                {{--class="SVG scale-16 js-SVG--with-scale"></span></div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div id="collapse-setup-questions-3"--}}
                                             {{--class="wp-AccordionCardItem__content collapse" role="tabpanel"--}}
                                             {{--aria-labelledby="heading-3">--}}
                                            {{--<div class="pt-3 pt-sm-5 c-bw-9 small"><span>Since every computer on a network is assigned with an IP address to retrieve information, all activity performed online has an IP signature. Just like your Internet Service Provider (ISP), every webpage tracks the IP addresses of their visitors to collect user-oriented data, and this is done without the agreement of the visitors.<br><br>All kinds of user identification can be collected by tracking IP addresses. For example, a website can gather information such as user’s ISP, actual location and other data that can be stored and used at the discretion of the website owners.<br><br>At present, search engine giants such as Google use IP addresses as well to associate a search pattern and online activity with every single user. This is done to deliver more targeted ads, but with the kind of information that is being collected, it is worrying to note that Google is in a position to profile Internet users quite accurately.</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="wp-AccordionCardItem js-AccordionCardItem panel py-3">--}}
                                    {{--<div class="wp-AccordionCardItem__wrapper p-5 py-sm-6 px-sm-7 sha-1 sha-2-hover d-block"--}}
                                         {{--role="button" data-toggle="collapse" data-parent="#setup-questions"--}}
                                         {{--href="#collapse-setup-questions-4" aria-expanded="false"--}}
                                         {{--aria-controls="collapse-setup-questions-4">--}}
                                        {{--<div role="tab" id="heading-4">--}}
                                            {{--<div class="wp-AccordionCardItem__title">--}}
                                                {{--<div class="c-bw-12 d-flex">--}}
                                                    {{--<h3 class="Title base fwm c-bw-12 pr-4">Do you have a DD-WRT--}}
                                                        {{--configuration guide?</h3><span class="SVG-wrapper"><img--}}
                                                                {{--src="/images/chevrons-down.svg"--}}
                                                                {{--alt="chevrons up"--}}
                                                                {{--class="SVG scale-16 js-SVG--with-scale"></span></div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div id="collapse-setup-questions-4"--}}
                                             {{--class="wp-AccordionCardItem__content collapse" role="tabpanel"--}}
                                             {{--aria-labelledby="heading-4">--}}
                                            {{--<div class="pt-3 pt-sm-5 c-bw-9 small"><span>Here are the instructions on how to set up your <a--}}
                                                            {{--class="Link Link--alt"--}}
                                                            {{--href="https://support.nordwebsite.net/#/Connectivity/Router/1047410342/DD-WRT-setup.htm">DD-WRT router with NordVPN’s</a> configuration.</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div id="section-connection-issues" class="mb-11 mb-md-13">--}}
                            {{--<h2 class="Title h5 pb-5">Connection issues</h2>--}}
                            {{--<div class="wp-Accordion wp-Accordion--card" id="connection-issues" role="tablist"--}}
                                 {{--aria-multiselectable="true">--}}
                                {{--<div class="wp-AccordionCardItem js-AccordionCardItem panel py-3">--}}
                                    {{--<div class="wp-AccordionCardItem__wrapper p-5 py-sm-6 px-sm-7 sha-1 sha-2-hover d-block"--}}
                                         {{--role="button" data-toggle="collapse" data-parent="#connection-issues"--}}
                                         {{--href="#collapse-connection-issues-1" aria-expanded="false"--}}
                                         {{--aria-controls="collapse-connection-issues-1">--}}
                                        {{--<div role="tab" id="heading-1">--}}
                                            {{--<div class="wp-AccordionCardItem__title">--}}
                                                {{--<div class="c-bw-12 d-flex">--}}
                                                    {{--<h3 class="Title base fwm c-bw-12 pr-4">Why my connection is--}}
                                                        {{--slow?</h3><span class="SVG-wrapper"><img--}}
                                                                {{--src="/images/chevrons-down.svg"--}}
                                                                {{--alt="chevrons up"--}}
                                                                {{--class="SVG scale-16 js-SVG--with-scale"></span></div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div id="collapse-connection-issues-1"--}}
                                             {{--class="wp-AccordionCardItem__content collapse" role="tabpanel"--}}
                                             {{--aria-labelledby="heading-1">--}}
                                            {{--<div class="pt-3 pt-sm-5 c-bw-9 small"><span>Like on any route, congestion can slow a fast connection to a halt. When you connect to nordwebsite.net, you have to go through your ISP who then connects you to us. If it happens to take a route that is either very busy or very long, it means your connection will be slow. This can happen anywhere along the route, although we monitor our network 24/7 to ensure we are not the cause.</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div id="section-technical-information" class="mb-11 mb-md-13">--}}
                            {{--<h2 class="Title h5 pb-5">Technical information</h2>--}}
                            {{--<div class="wp-Accordion wp-Accordion--card" id="technical-information" role="tablist"--}}
                                 {{--aria-multiselectable="true">--}}
                                {{--<div class="wp-AccordionCardItem js-AccordionCardItem panel py-3">--}}
                                    {{--<div class="wp-AccordionCardItem__wrapper p-5 py-sm-6 px-sm-7 sha-1 sha-2-hover d-block"--}}
                                         {{--role="button" data-toggle="collapse" data-parent="#technical-information"--}}
                                         {{--href="#collapse-technical-information-1" aria-expanded="false"--}}
                                         {{--aria-controls="collapse-technical-information-1">--}}
                                        {{--<div role="tab" id="heading-1">--}}
                                            {{--<div class="wp-AccordionCardItem__title">--}}
                                                {{--<div class="c-bw-12 d-flex">--}}
                                                    {{--<h3 class="Title base fwm c-bw-12 pr-4">What is a proxy server?</h3>--}}
                                                    {{--<span class="SVG-wrapper"><img--}}
                                                                {{--src="/images/chevrons-down.svg"--}}
                                                                {{--alt="chevrons up"--}}
                                                                {{--class="SVG scale-16 js-SVG--with-scale"></span></div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div id="collapse-technical-information-1"--}}
                                             {{--class="wp-AccordionCardItem__content collapse" role="tabpanel"--}}
                                             {{--aria-labelledby="heading-1">--}}
                                            {{--<div class="pt-3 pt-sm-5 c-bw-9 small"><span>A proxy server, or a “proxy,” is a device that acts as a gateway between a local network (e.g., all the computers at one company or in one building) and a larger-scale network such as the Internet. When you try to access a website or any other resource available from various servers over the Internet, your computer sends a request to the proxy server, which then processes the request and returns the result you were looking for.<br><br>Proxies are used for a number of reasons such as to filter web content, to go around restrictions such as parental blocks, to screen downloads and uploads and to provide privacy when surfing the Internet.<br><br>If you want to browse privately, using a proxy can hide your IP address. For example, if you visit a website via a proxy server, the website will see a request from the proxy IP rather than your own, which makes it difficult (but not impossible) to track you.</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="wp-AccordionCardItem js-AccordionCardItem panel py-3">--}}
                                    {{--<div class="wp-AccordionCardItem__wrapper p-5 py-sm-6 px-sm-7 sha-1 sha-2-hover d-block"--}}
                                         {{--role="button" data-toggle="collapse" data-parent="#technical-information"--}}
                                         {{--href="#collapse-technical-information-2" aria-expanded="false"--}}
                                         {{--aria-controls="collapse-technical-information-2">--}}
                                        {{--<div role="tab" id="heading-2">--}}
                                            {{--<div class="wp-AccordionCardItem__title">--}}
                                                {{--<div class="c-bw-12 d-flex">--}}
                                                    {{--<h3 class="Title base fwm c-bw-12 pr-4">What is SOCKS?</h3><span--}}
                                                            {{--class="SVG-wrapper"><img--}}
                                                                {{--src="/images/chevrons-down.svg"--}}
                                                                {{--alt="chevrons up"--}}
                                                                {{--class="SVG scale-16 js-SVG--with-scale"></span></div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div id="collapse-technical-information-2"--}}
                                             {{--class="wp-AccordionCardItem__content collapse" role="tabpanel"--}}
                                             {{--aria-labelledby="heading-2">--}}
                                            {{--<div class="pt-3 pt-sm-5 c-bw-9 small"><span>Socket secure (or “SOCKS”) is a protocol for handling TCP traffic through a proxy server. SOCKS Version 5 adds additional support for security and UDP. SOCKS proxies do not interpret network traffic, which means they are not able to understand what is being passed from the client to the server and vice versa, and that makes the connection secure.<br><br>SOCKS uses a handshake protocol to inform the proxy software about the connection that the client is trying to make. It’s capable of transferring all information from a client to a server even through firewalls because the web server views the SOCKS proxy as the client.<br><br><br><h3--}}
                                                            {{--class="Title h6">Comparison to HTTP proxies</h3><br>HTTP protocol is the standard proxy protocol for the Internet, specifically designed to transfer website data. HTTP proxies are mainly used to fetch and receive within that protocol, rather than other types of network connections (unlike SOCKS, which can accommodate virtually any protocol, program or type of traffic). That includes specific network ports, through which all HTTP traffic is usually routed.<br><br>Due to these factors, HTTP proxies are the more common of the two types, and usually, people refer to them when they talk about proxy use.<br><br>Also, SOCKS proxies operate at what’s called a “lower level” than the HTTP proxy. However, that actually makes them more secure. Unlike a SOCKS server, an HTTP proxy server does understand and interpret the network traffic that passes between the client and downstream server, which means that the company that owns it could be logging users’ data.</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="wp-AccordionCardItem js-AccordionCardItem panel py-3">--}}
                                    {{--<div class="wp-AccordionCardItem__wrapper p-5 py-sm-6 px-sm-7 sha-1 sha-2-hover d-block"--}}
                                         {{--role="button" data-toggle="collapse" data-parent="#technical-information"--}}
                                         {{--href="#collapse-technical-information-3" aria-expanded="false"--}}
                                         {{--aria-controls="collapse-technical-information-3">--}}
                                        {{--<div role="tab" id="heading-3">--}}
                                            {{--<div class="wp-AccordionCardItem__title">--}}
                                                {{--<div class="c-bw-12 d-flex">--}}
                                                    {{--<h3 class="Title base fwm c-bw-12 pr-4">What is an IP address?</h3>--}}
                                                    {{--<span class="SVG-wrapper"><img--}}
                                                                {{--src="/images/chevrons-down.svg"--}}
                                                                {{--alt="chevrons up"--}}
                                                                {{--class="SVG scale-16 js-SVG--with-scale"></span></div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div id="collapse-technical-information-3"--}}
                                             {{--class="wp-AccordionCardItem__content collapse" role="tabpanel"--}}
                                             {{--aria-labelledby="heading-3">--}}
                                            {{--<div class="pt-3 pt-sm-5 c-bw-9 small"><span>An IP address stands for an Internet Protocol address and serves as a personal identifier for your computing device. Your Internet Service Provider (ISP) assigns a unique IP address to identify your device or network among all the others connected to the Internet.<br><br>Thanks to IP addresses, data can successfully reach its destination on the web – similarly to your home address, which allows a letter carrier to deliver your mail. To put it simply, IP addresses are necessary for sending and receiving data on the Internet: when connected devices talk to each other, they address themselves by IP address.<br><br><br><h3--}}
                                                            {{--class="Title h6">What does an IP address look like?</h3><br>An IP address is a numeric label. The way it is composed depends on the Internet Protocol version. Currently, most ISPs use IPv4 to assign IP addresses to their clients. IPv4 addresses are based on 32 binary bits and consist of four numbers, varying from 0 to 255 and separated by dots, for example, 13.155.0.232.<br><br>With the evolution of the Internet technology and growing demand for IP addresses, a slight panic for running out of possible unique identifiers had risen. For this reason, the IPv6 version of the Internet protocol was introduced to expand numeric labeling options.<br><br>IPv6 addressing is based on 128 binary bits. An IPv6 address consists of 8 segments separated by colons instead of dots, for example, fr28:3ffe:0000:0000:0000:0000:4587:9312. Number groups containing only 0 are often omitted to save space. Instead, a double colon is used to indicate the gap so that it is fr28:3ffe::4587:9312.</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="wp-AccordionCardItem js-AccordionCardItem panel py-3">--}}
                                    {{--<div class="wp-AccordionCardItem__wrapper p-5 py-sm-6 px-sm-7 sha-1 sha-2-hover d-block"--}}
                                         {{--role="button" data-toggle="collapse" data-parent="#technical-information"--}}
                                         {{--href="#collapse-technical-information-4" aria-expanded="false"--}}
                                         {{--aria-controls="collapse-technical-information-4">--}}
                                        {{--<div role="tab" id="heading-4">--}}
                                            {{--<div class="wp-AccordionCardItem__title">--}}
                                                {{--<div class="c-bw-12 d-flex">--}}
                                                    {{--<h3 class="Title base fwm c-bw-12 pr-4">What is Virtual Private--}}
                                                        {{--Network?</h3><span class="SVG-wrapper"><img--}}
                                                                {{--src="/images/chevrons-down.svg"--}}
                                                                {{--alt="chevrons up"--}}
                                                                {{--class="SVG scale-16 js-SVG--with-scale"></span></div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div id="collapse-technical-information-4"--}}
                                             {{--class="wp-AccordionCardItem__content collapse" role="tabpanel"--}}
                                             {{--aria-labelledby="heading-4">--}}
                                            {{--<div class="pt-3 pt-sm-5 c-bw-9 small"><span>A personal <a--}}
                                                            {{--class="Link Link--alt"--}}
                                                            {{--href="https://nordwebsite.net/what-is-a-vpn/">Virtual Private Network</a> (VPN) refers to a network solution that is used to encrypt users’ Internet traffic and mask their online identity by hiding their IP address. Therefore, the main purpose of this technology is to help you stay secure and private when browsing the Internet.<br><br><br><h3--}}
                                                            {{--class="Title h6">How does it work?</h3><br>Typically, when you connect to the Internet, your Internet Service Provider (ISP) receives the request and redirects you to the website you intend to visit. As your Internet traffic passes through your ISP, they can see everything you do online. What’s more, they can track users’ behavior and sell their personal details to advertisers and other third parties.<br><br>Here’s when a VPN comes into play. It redirects your Internet traffic through a remote VPN server, this way hiding your IP address and encrypting all of the information that is sent or received. With a VPN on, all the data you send and receive travels via an encrypted tunnel, so that nobody can steal your private information or spy on your online activities.</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="wp-AccordionCardItem js-AccordionCardItem panel py-3">--}}
                                    {{--<div class="wp-AccordionCardItem__wrapper p-5 py-sm-6 px-sm-7 sha-1 sha-2-hover d-block"--}}
                                         {{--role="button" data-toggle="collapse" data-parent="#technical-information"--}}
                                         {{--href="#collapse-technical-information-5" aria-expanded="false"--}}
                                         {{--aria-controls="collapse-technical-information-5">--}}
                                        {{--<div role="tab" id="heading-5">--}}
                                            {{--<div class="wp-AccordionCardItem__title">--}}
                                                {{--<div class="c-bw-12 d-flex">--}}
                                                    {{--<h3 class="Title base fwm c-bw-12 pr-4">VPN Tunnel</h3><span--}}
                                                            {{--class="SVG-wrapper"><img--}}
                                                                {{--src="/images/chevrons-down.svg"--}}
                                                                {{--alt="chevrons up"--}}
                                                                {{--class="SVG scale-16 js-SVG--with-scale"></span></div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div id="collapse-technical-information-5"--}}
                                             {{--class="wp-AccordionCardItem__content collapse" role="tabpanel"--}}
                                             {{--aria-labelledby="heading-5">--}}
                                            {{--<div class="pt-3 pt-sm-5 c-bw-9 small"><span>Virtual private network technology is based on the concept of tunneling. VPN tunneling involves generating and retaining a logical network connection (which may contain intermediate hops). In this connection, packets built in a specific VPN protocol format are encapsulated inside some other base or carrier protocol, then transmitted between server and VPN client and finally de-encapsulated on the receiving side.<br><br>For Internet-based Virtual Private Networks, packets in one of several VPN protocols are encapsulated within (IP) packets. VPN protocols also support encryption and authentication to keep the tunnels secure.</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="wp-AccordionCardItem js-AccordionCardItem panel py-3">--}}
                                    {{--<div class="wp-AccordionCardItem__wrapper p-5 py-sm-6 px-sm-7 sha-1 sha-2-hover d-block"--}}
                                         {{--role="button" data-toggle="collapse" data-parent="#technical-information"--}}
                                         {{--href="#collapse-technical-information-6" aria-expanded="false"--}}
                                         {{--aria-controls="collapse-technical-information-6">--}}
                                        {{--<div role="tab" id="heading-6">--}}
                                            {{--<div class="wp-AccordionCardItem__title">--}}
                                                {{--<div class="c-bw-12 d-flex">--}}
                                                    {{--<h3 class="Title base fwm c-bw-12 pr-4">Types of protocols</h3><span--}}
                                                            {{--class="SVG-wrapper"><img--}}
                                                                {{--src="/images/chevrons-down.svg"--}}
                                                                {{--alt="chevrons up"--}}
                                                                {{--class="SVG scale-16 js-SVG--with-scale"></span></div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div id="collapse-technical-information-6"--}}
                                             {{--class="wp-AccordionCardItem__content collapse" role="tabpanel"--}}
                                             {{--aria-labelledby="heading-6">--}}
                                            {{--<div class="pt-3 pt-sm-5 c-bw-9 small"><span>There are a number of VPN protocols which are used to secure the transferring of data traffic over a public network. Each protocol differs fractionally in the way data is kept secure. NordVPN uses OpenVPN and IKEv2/IPSec as standard protocols for its desktop and mobile applications and TLS v1.2 for its encrypted browser extensions.<br><br><br><h3--}}
                                                            {{--class="Title h6">What is OpenVPN?</h3><br>OpenVPN is an open source software application that executes virtual private network (VPN) techniques for producing safe site-to-site or point-to-point connections in remote access facilities and bridged or routed configurations. OpenVPN uses a custom security protocol which utilizes TLS/SSL for key exchange. It is able to traverse firewalls and network address translators (NATs).<br><br>OpenVPN allows peers to authenticate each other using username and password, certificates, or a pre-shared secret key. When used in a multi-client server configuration, it allows the server to launch an authentication certificate for every user using certificate authority and signature. It uses the OpenSSL encryption library broadly as well as TLSv1.2/SSLv3 protocols and consists of many control and security features.<br><br><br><h3--}}
                                                            {{--class="Title h6">What is IKEv2/IPSec?</h3><br>IKEv2 is a state-of-the-art protocol option, which combines speed with stability and security. A unique aspect of IKEv2 lies in its ability to hop between connections. For example, it can automatically jump from WiFi to a cell network without losing or dropping the secure VPN connection. When combined with Internet Protocol Security (IPsec), it significantly increases security and privacy of the user by employing very strong cryptographic algorithms and keys.<br><br>NordVPN uses NGE (Next Generation Encryption) in IKEv2/IPsec. The ciphers used to generate Phase1 keys are AES-256-GCM for encryption, coupled with SHA2-384 to ensure integrity, combined with PFS (Perfect Forward Secrecy) using 3072-bit Diffie Hellmann keys. IPsec then secures the tunnel between the client and server using the strong AES256.</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="wp-AccordionCardItem js-AccordionCardItem panel py-3">--}}
                                    {{--<div class="wp-AccordionCardItem__wrapper p-5 py-sm-6 px-sm-7 sha-1 sha-2-hover d-block"--}}
                                         {{--role="button" data-toggle="collapse" data-parent="#technical-information"--}}
                                         {{--href="#collapse-technical-information-7" aria-expanded="false"--}}
                                         {{--aria-controls="collapse-technical-information-7">--}}
                                        {{--<div role="tab" id="heading-7">--}}
                                            {{--<div class="wp-AccordionCardItem__title">--}}
                                                {{--<div class="c-bw-12 d-flex">--}}
                                                    {{--<h3 class="Title base fwm c-bw-12 pr-4">What is a DNS leak?</h3>--}}
                                                    {{--<span class="SVG-wrapper"><img--}}
                                                                {{--src="/images/chevrons-down.svg"--}}
                                                                {{--alt="chevrons up"--}}
                                                                {{--class="SVG scale-16 js-SVG--with-scale"></span></div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div id="collapse-technical-information-7"--}}
                                             {{--class="wp-AccordionCardItem__content collapse" role="tabpanel"--}}
                                             {{--aria-labelledby="heading-7">--}}
                                            {{--<div class="pt-3 pt-sm-5 c-bw-9 small"><span>The Domain Name System (DNS) is responsible for resolving domain names such as “nordwebsite.net” into actual IP addresses to connect to. It translates the long, complex and hard-to-remember numeric names of web servers into human language, and the other way around.<br><br>So whenever your computer needs to connect to a certain website, such as when you enter “www.google.com” into your browser, it first contacts a DNS server and requests the unique IP address of that site. This procedure is a crucial piece of how the Internet works.<br><br>If you are trying to keep your online activities secure and private with a VPN service, it is extremely important that all the traffic originating from your computer is routed through the VPN network. That includes the above-mentioned DNS requests – they should go through the VPN tunnel to your VPN provider’s DNS servers, rather than those of your ISP.<br><br>However, your system may for some reason revert to the default DNS servers, resulting in your ISP being able to see what websites you are visiting.<br><br><br><h3--}}
                                                            {{--class="Title h6">How to solve the DNS leak?</h3><br><ul--}}
                                                            {{--class="List List--custom"><li>1. Our custom application for Windows, macOS, Android and iOS has a DNS leak protection feature implemented automatically, which will prevent your DNS from leaking.</li><li>2. Use NordVPN DNS servers.</li></ul><br>In order to get NordVPN’s DNS servers please contact our support team. <strong>To set it, go to:</strong><br><br><strong>Windows</strong>: Control Panel → Network and Sharing Center → Change Adapter Settings → Right-click on your ‘Local Area Connection’ and select <strong>Properties</strong> → Click on the ‘Internet Protocol Version 4 (TCP/IPv4) and select <strong>Properties</strong> → Click on the ‘Use the following DNS server addresses’ and type in the selected DNS server addresses. Please mind that you need to set DNS servers for <strong>ALL</strong> your Local Area Connections!<br><br><strong>Mac</strong>: System Preferences → Network → Choose your network device → Advanced → DNS tab and type in the selected DNS server addresses. Please mind that you need to set DNS servers for <strong>ALL</strong> your network devices!<br><br><strong>Linux</strong>: Network applet → Edit Connections → <strong>Edit</strong> your network device → Ipv4 Settings → Choose <strong>Automatic (DHCP) addresses only</strong> and add DNS servers in the textbox with every server address to be separated by a comma. Please mind that you need to set DNS servers for <strong>ALL</strong> your network devices!<br><br>You can check your DNS leak at the <a--}}
                                                            {{--class="Link Link--alt" href="http://dnsleaktest.com/">DNS leak test webpage</a>.</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="wp-AccordionCardItem js-AccordionCardItem panel py-3">--}}
                                    {{--<div class="wp-AccordionCardItem__wrapper p-5 py-sm-6 px-sm-7 sha-1 sha-2-hover d-block"--}}
                                         {{--role="button" data-toggle="collapse" data-parent="#technical-information"--}}
                                         {{--href="#collapse-technical-information-8" aria-expanded="false"--}}
                                         {{--aria-controls="collapse-technical-information-8">--}}
                                        {{--<div role="tab" id="heading-8">--}}
                                            {{--<div class="wp-AccordionCardItem__title">--}}
                                                {{--<div class="c-bw-12 d-flex">--}}
                                                    {{--<h3 class="Title base fwm c-bw-12 pr-4">What are Anti-DDoS--}}
                                                        {{--servers?</h3><span class="SVG-wrapper"><img--}}
                                                                {{--src="/images/chevrons-down.svg"--}}
                                                                {{--alt="chevrons up"--}}
                                                                {{--class="SVG scale-16 js-SVG--with-scale"></span></div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div id="collapse-technical-information-8"--}}
                                             {{--class="wp-AccordionCardItem__content collapse" role="tabpanel"--}}
                                             {{--aria-labelledby="heading-8">--}}
                                            {{--<div class="pt-3 pt-sm-5 c-bw-9 small"><span>Anti-DDos servers are suggested for a less interrupting connection, since they have an advanced stability checking system.</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="wp-AccordionCardItem js-AccordionCardItem panel py-3">--}}
                                    {{--<div class="wp-AccordionCardItem__wrapper p-5 py-sm-6 px-sm-7 sha-1 sha-2-hover d-block"--}}
                                         {{--role="button" data-toggle="collapse" data-parent="#technical-information"--}}
                                         {{--href="#collapse-technical-information-9" aria-expanded="false"--}}
                                         {{--aria-controls="collapse-technical-information-9">--}}
                                        {{--<div role="tab" id="heading-9">--}}
                                            {{--<div class="wp-AccordionCardItem__title">--}}
                                                {{--<div class="c-bw-12 d-flex">--}}
                                                    {{--<h3 class="Title base fwm c-bw-12 pr-4">What encryption do you use--}}
                                                        {{--to secure the connection?</h3><span class="SVG-wrapper"><img--}}
                                                                {{--src="/images/chevrons-down.svg"--}}
                                                                {{--alt="chevrons up"--}}
                                                                {{--class="SVG scale-16 js-SVG--with-scale"></span></div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div id="collapse-technical-information-9"--}}
                                             {{--class="wp-AccordionCardItem__content collapse" role="tabpanel"--}}
                                             {{--aria-labelledby="heading-9">--}}
                                            {{--<div class="pt-3 pt-sm-5 c-bw-9 small"><span>For OpenVPN connection, we use the AES 256 CBC algorithm. IKEv2/IPSec ciphers used to generate Phase1 keys are AES-256-GCM for encryption, coupled with SHA2-384 to ensure integrity, combined with PFS (Perfect Forward Secrecy) using 3072-bit Diffie Hellmann keys.</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="wp-AccordionCardItem js-AccordionCardItem panel py-3">--}}
                                    {{--<div class="wp-AccordionCardItem__wrapper p-5 py-sm-6 px-sm-7 sha-1 sha-2-hover d-block"--}}
                                         {{--role="button" data-toggle="collapse" data-parent="#technical-information"--}}
                                         {{--href="#collapse-technical-information-10" aria-expanded="false"--}}
                                         {{--aria-controls="collapse-technical-information-10">--}}
                                        {{--<div role="tab" id="heading-10">--}}
                                            {{--<div class="wp-AccordionCardItem__title">--}}
                                                {{--<div class="c-bw-12 d-flex">--}}
                                                    {{--<h3 class="Title base fwm c-bw-12 pr-4">Should I choose the--}}
                                                        {{--Transmission Control Protocol (TCP) or the User Datagram--}}
                                                        {{--Protocol (UDP) when using OpenVPN?</h3><span--}}
                                                            {{--class="SVG-wrapper"><img--}}
                                                                {{--src="/images/chevrons-down.svg"--}}
                                                                {{--alt="chevrons up"--}}
                                                                {{--class="SVG scale-16 js-SVG--with-scale"></span></div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div id="collapse-technical-information-10"--}}
                                             {{--class="wp-AccordionCardItem__content collapse" role="tabpanel"--}}
                                             {{--aria-labelledby="heading-10">--}}
                                            {{--<div class="pt-3 pt-sm-5 c-bw-9 small"><span>UDP is mainly used for online streaming and downloading. TCP is more reliable but a little slower than UDP and usually used for web browsing.</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="wp-AccordionCardItem js-AccordionCardItem panel py-3">--}}
                                    {{--<div class="wp-AccordionCardItem__wrapper p-5 py-sm-6 px-sm-7 sha-1 sha-2-hover d-block"--}}
                                         {{--role="button" data-toggle="collapse" data-parent="#technical-information"--}}
                                         {{--href="#collapse-technical-information-11" aria-expanded="false"--}}
                                         {{--aria-controls="collapse-technical-information-11">--}}
                                        {{--<div role="tab" id="heading-11">--}}
                                            {{--<div class="wp-AccordionCardItem__title">--}}
                                                {{--<div class="c-bw-12 d-flex">--}}
                                                    {{--<h3 class="Title base fwm c-bw-12 pr-4">How do I uninstall--}}
                                                        {{--NordVPN?</h3><span class="SVG-wrapper"><img--}}
                                                                {{--src="/images/chevrons-down.svg"--}}
                                                                {{--alt="chevrons up"--}}
                                                                {{--class="SVG scale-16 js-SVG--with-scale"></span></div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div id="collapse-technical-information-11"--}}
                                             {{--class="wp-AccordionCardItem__content collapse" role="tabpanel"--}}
                                             {{--aria-labelledby="heading-11">--}}
                                            {{--<div class="pt-3 pt-sm-5 c-bw-9 small"><span>If you want to uninstall any of our applications, please refer to this tutorial <a--}}
                                                            {{--class="Link Link--alt"--}}
                                                            {{--href="https://support.nordwebsite.net/#/General-Info/1047410452/How-to-uninstall-NordVPN-software.htm">here</a>.</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="wp-AccordionCardItem js-AccordionCardItem panel py-3">--}}
                                    {{--<div class="wp-AccordionCardItem__wrapper p-5 py-sm-6 px-sm-7 sha-1 sha-2-hover d-block"--}}
                                         {{--role="button" data-toggle="collapse" data-parent="#technical-information"--}}
                                         {{--href="#collapse-technical-information-12" aria-expanded="false"--}}
                                         {{--aria-controls="collapse-technical-information-12">--}}
                                        {{--<div role="tab" id="heading-12">--}}
                                            {{--<div class="wp-AccordionCardItem__title">--}}
                                                {{--<div class="c-bw-12 d-flex">--}}
                                                    {{--<h3 class="Title base fwm c-bw-12 pr-4">What ports should be open on--}}
                                                        {{--firewall/router for it to work?</h3><span--}}
                                                            {{--class="SVG-wrapper"><img--}}
                                                                {{--src="/images/chevrons-down.svg"--}}
                                                                {{--alt="chevrons up"--}}
                                                                {{--class="SVG scale-16 js-SVG--with-scale"></span></div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div id="collapse-technical-information-12"--}}
                                             {{--class="wp-AccordionCardItem__content collapse" role="tabpanel"--}}
                                             {{--aria-labelledby="heading-12">--}}
                                            {{--<div class="pt-3 pt-sm-5 c-bw-9 small"><span>1723, 443 TCP and 1194 UDP ports should be open; also your firewall/router/ISP must allow pass-through for PPTP/VPN. Typically working: embedded Microsoft firewall in Windows, Linksys/D-Link/TP-Link/ASUS Router manufactured after year 2007, ADSL broadband. Typically not-working: not-Microsoft firewall, Netgear/Trend Router, all router-integrated ADSL modems. If you get error 619 with ADSL connection, please remove home router and disable not-Microsoft firewall software.</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="wp-AccordionCardItem js-AccordionCardItem panel py-3">--}}
                                    {{--<div class="wp-AccordionCardItem__wrapper p-5 py-sm-6 px-sm-7 sha-1 sha-2-hover d-block"--}}
                                         {{--role="button" data-toggle="collapse" data-parent="#technical-information"--}}
                                         {{--href="#collapse-technical-information-13" aria-expanded="false"--}}
                                         {{--aria-controls="collapse-technical-information-13">--}}
                                        {{--<div role="tab" id="heading-13">--}}
                                            {{--<div class="wp-AccordionCardItem__title">--}}
                                                {{--<div class="c-bw-12 d-flex">--}}
                                                    {{--<h3 class="Title base fwm c-bw-12 pr-4">How does a VPN account--}}
                                                        {{--work?</h3><span class="SVG-wrapper"><img--}}
                                                                {{--src="/images/chevrons-down.svg"--}}
                                                                {{--alt="chevrons up"--}}
                                                                {{--class="SVG scale-16 js-SVG--with-scale"></span></div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div id="collapse-technical-information-13"--}}
                                             {{--class="wp-AccordionCardItem__content collapse" role="tabpanel"--}}
                                             {{--aria-labelledby="heading-13">--}}
                                            {{--<div class="pt-3 pt-sm-5 c-bw-9 small"><span>As soon as you connect to our VPN server, your device is assigned a new IP address and new DNS resolvers. All of your Internet traffic is encrypted and tunneled to our VPN server. Once there, it is decrypted and allowed to travel to its intended destination. Your local ISP will only see a single encrypted data stream between you and our VPN server. Your ISP can no longer monitor, log or control your Internet usage and you can bypass your ISP restrictions.</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection