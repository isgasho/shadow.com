@extends('front.layouts')

@section('title', '穿云梯--订购')
@section('content')
    <hr class="bg-bw-4 my-0">
    <main>
        <div class="bg-bw-2">
            <div class="container">
                <div class="TrustMark hidden-xs"><img
                            src="https://s1.nordwebsite.net/nordvpn/media/0.42.0/images/global/logos/vertical/pcmag-ec.svg"
                            alt="PCmag logo" class="TrustMark__image TrustMark__image--right"></div>
                <div class="row mb-11 mt-9">
                    <div class="col-xs-12 col-sm-8">
                        <div><h1 class="Title h4"><span>获取视用户隐私为生命的VPN</span></h1>
                            <div class="mt-4">
                                <ul class="List List--small List--custom">
                                    <li class="ListItem mb-3">
                                        <div class="clearfix">
                                            <div class="pull-left rtl-flip"><span
                                                        class="ListItem__bullet inline-vertical-middle"><span
                                                            class="isvg loaded SVG-wrapper SVG-loaded"><svg
                                                                width="16" height="16" viewBox="0 0 16 16"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                class="SVG SVG--inline c-gre-8"><defs><path
                                                                        id="a___c42NqVvG"
                                                                        d="M6.773 11.945L2.6 7.773l1.718-1.718 2.455 2.454L11.682 3.6 13.4 5.318z"></path></defs><use
                                                                    fill="#151922" xlink:href="#a___c42NqVvG"></use></svg></span></span>
                                            </div>
                                            <div class="ml-7"><span>访问全球 4,386 台服务器</span></div>
                                        </div>
                                    </li>
                                    <li class="ListItem mb-3">
                                        <div class="clearfix">
                                            <div class="pull-left rtl-flip"><span
                                                        class="ListItem__bullet inline-vertical-middle"><span
                                                            class="isvg loaded SVG-wrapper SVG-loaded"><svg
                                                                width="16" height="16" viewBox="0 0 16 16"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                class="SVG SVG--inline c-gre-8"><defs><path
                                                                        id="a___c42NqVvG"
                                                                        d="M6.773 11.945L2.6 7.773l1.718-1.718 2.455 2.454L11.682 3.6 13.4 5.318z"></path></defs><use
                                                                    fill="#151922" xlink:href="#a___c42NqVvG"></use></svg></span></span>
                                            </div>
                                            <div class="ml-7"><span>不保留客户使用记录政策</span></div>
                                        </div>
                                    </li>
                                    <li class="ListItem mb-3">
                                        <div class="clearfix">
                                            <div class="pull-left rtl-flip"><span
                                                        class="ListItem__bullet inline-vertical-middle"><span
                                                            class="isvg loaded SVG-wrapper SVG-loaded"><svg
                                                                width="16" height="16" viewBox="0 0 16 16"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                class="SVG SVG--inline c-gre-8"><defs><path
                                                                        id="a___c42NqVvG"
                                                                        d="M6.773 11.945L2.6 7.773l1.718-1.718 2.455 2.454L11.682 3.6 13.4 5.318z"></path></defs><use
                                                                    fill="#151922" xlink:href="#a___c42NqVvG"></use></svg></span></span>
                                            </div>
                                            <div class="ml-7"><span>可以同时连接6 个设备</span></div>
                                        </div>
                                    </li>
                                    <li class="ListItem mb-3">
                                        <div class="clearfix">
                                            <div class="pull-left rtl-flip"><span
                                                        class="ListItem__bullet inline-vertical-middle"><span
                                                            class="isvg loaded SVG-wrapper SVG-loaded"><svg
                                                                width="16" height="16" viewBox="0 0 16 16"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                class="SVG SVG--inline c-gre-8"><defs><path
                                                                        id="a___c42NqVvG"
                                                                        d="M6.773 11.945L2.6 7.773l1.718-1.718 2.455 2.454L11.682 3.6 13.4 5.318z"></path></defs><use
                                                                    fill="#151922" xlink:href="#a___c42NqVvG"></use></svg></span></span>
                                            </div>
                                            <div class="ml-7"><span>30 天退款保证</span></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="plan-section" class="PlanCardsSection">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="SectionLabel fwm lead mb-5 mb-sm-7"><span
                                        class="SectionLabel__badge mr-4"><span class="Badge c-bw-1 bg-bw-11"><span>计划</span></span></span>
                                <h2 class="Title lead SectionLabel__text c-bw-12 fwm"><span>选择适合您的VPN计划</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="row row__flex mb-9 mb-sm-11">
                        <div class="col-xs-12 col-sm-4 pb-6 pb-sm-7" onclick="buy(2)">
                            <div>
                                <div class="Paper bg-bw-1 PlanCard text-center PlanCard--type-default sha-1 sha-3-hover">
                                    <div class="PlanCard__body p-5">
                                        <div class="PlanCard__indicators">
                                            <div class="PlanCard__radio"><span
                                                        class="isvg loaded SVG-wrapper SVG-loaded"><svg
                                                            viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"
                                                            class="SVG SVG--inline scale-24 js-SVG--with-scale c-bw-1"><path
                                                                d="M13 5.496L11.571 4 6.47 9.342 4.43 7.205 3 8.701l3.47 3.632z"
                                                                fill="#151922"></path></svg></span></div>
                                        </div>
                                        <div class="PlanCard__name pb-3 pt-5 pt-sm-7 pt-md-5"><p
                                                    class="Text fwb c-bw-12"><span><span>1 个月</span>计划</span></p>
                                        </div>
                                        <div class="PlanCard__pricing fwb mt-2 c-bw-12"><span>$</span>
                                            <h2 class="Title d-inline-block pl-2 lh1">11.95</h2><span
                                                    class="d-block small fwm mb-4 mb-md-5 mt-2"><span>每月</span></span>
                                        </div>
                                        <div class="PlanCard__description">
                                            <div class="mb-6"><span class="Badge c-bw-11 bg-bw-4"><span>节省0%</span></span>
                                            </div>
                                            <div class="mb-5"><p class="Text micro fwm c-bw-6">
                                                    <span>11.95美元每<span>月</span></span></p></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 pb-6 pb-sm-7">
                            <div>
                                <div class="Paper bg-bw-1 PlanCard text-center PlanCard--type-special sha-1 sha-3-hover">
                                    <div class="PlanCard__body p-5">
                                        <div class="PlanCard__indicators">
                                            <div class="PlanCard__radio"><span
                                                        class="isvg loaded SVG-wrapper SVG-loaded"><svg
                                                            viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"
                                                            class="SVG SVG--inline scale-24 js-SVG--with-scale c-bw-1"><path
                                                                d="M13 5.496L11.571 4 6.47 9.342 4.43 7.205 3 8.701l3.47 3.632z"
                                                                fill="#151922"></path></svg></span></div>
                                            <div class="PlanCard__popup small fwm c-bw-1"><span>最热销</span></div>
                                        </div>
                                        <div class="PlanCard__name pb-3 pt-5 pt-sm-7 pt-md-5"><p
                                                    class="Text fwb c-bw-12"><span><span>2 年</span>计划</span></p>
                                        </div>
                                        <div class="PlanCard__pricing fwb mt-2 c-bw-12"><span>$</span>
                                            <h2 class="Title d-inline-block pl-2 lh1">3.29</h2><span
                                                    class="d-block small fwm mb-4 mb-md-5 mt-2"><span>每月</span></span>
                                        </div>
                                        <div class="PlanCard__description">
                                            <div class="mb-6"><span
                                                        class="Badge c-red-6 bg-red-2"><span>节省72%</span></span>
                                            </div>
                                            <div class="mb-5"><p class="Text micro fwm c-bw-6"><span
                                                            class="PlanCard__total-full-price mr-2 c-red-6"><span>286.80美元</span></span><span>79.00美元每<span>2年</span></span>
                                                </p></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 pb-6 pb-sm-7">
                            <div>
                                <div class="Paper bg-bw-1 PlanCard text-center PlanCard--type-default sha-1 sha-3-hover">
                                    <div class="PlanCard__body p-5">
                                        <div class="PlanCard__indicators">
                                            <div class="PlanCard__radio"><span
                                                        class="isvg loaded SVG-wrapper SVG-loaded"><svg
                                                            viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"
                                                            class="SVG SVG--inline scale-24 js-SVG--with-scale c-bw-1"><path
                                                                d="M13 5.496L11.571 4 6.47 9.342 4.43 7.205 3 8.701l3.47 3.632z"
                                                                fill="#151922"></path></svg></span></div>
                                        </div>
                                        <div class="PlanCard__name pb-3 pt-5 pt-sm-7 pt-md-5"><p
                                                    class="Text fwb c-bw-12"><span><span>1 年</span>计划</span></p>
                                        </div>
                                        <div class="PlanCard__pricing fwb mt-2 c-bw-12"><span>$</span>
                                            <h2 class="Title d-inline-block pl-2 lh1">5.75</h2><span
                                                    class="d-block small fwm mb-4 mb-md-5 mt-2"><span>每月</span></span>
                                        </div>
                                        <div class="PlanCard__description">
                                            <div class="mb-6"><span class="Badge c-bw-11 bg-bw-4"><span>节省52%</span></span>
                                            </div>
                                            <div class="mb-5"><p class="Text micro fwm c-bw-6"><span
                                                            class="PlanCard__total-full-price mr-2 c-red-6"><span>143.40美元</span></span><span>69.00美元每<span>1年</span></span>
                                                </p></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
        function buy(id) {
            window.location.href='/user/addOrder?goods_id='+id;
        }
    </script>
@endsection