@extends('front.layouts')

@section('content')
    <style>
        .PlanCard__total-full-price:after{
            border-bottom: 2px solid #999;
        }
        .mb-sm-11{
                margin-bottom: 10px;
        }
    </style>
    <hr class="bg-bw-4 my-0">
    <main>
        <div class="bg-bw-2">
            <div class="container" style="margin-top: 10px">
                <img src="/images/buy_center.png" class="img-responsive" alt="Responsive image">
            </div>
            <div id="plan-section" class="PlanCardsSection">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="SectionLabel fwm lead mb-5 mb-sm-7"><span
                                        class="SectionLabel__badge mr-4"><span class="Badge c-bw-1 bg-bw-11"><span>计划一</span></span></span>
                                <h2 class="Title lead SectionLabel__text c-bw-12 fwm"><span>活力潮人</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="row row__flex mb-9 mb-sm-11">
                        <div class="col-xs-12 col-sm-8 col-sm-offset-2 pb-6 pb-sm-7">
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
                                        </div>
                                        <div class="PlanCard__name pb-3 pt-5 pt-sm-7 pt-md-5"><p
                                                    class="Text fwb c-bw-12"><span><span>1 月</span>计划</span></p>
                                        </div>
                                        <div class="PlanCard__pricing fwb mt-2 c-bw-12"><span>¥</span>
                                            <h2 class="Title d-inline-block pl-2 lh1">9.9</h2><span
                                                    class="d-block small fwm mb-4 mb-md-5 mt-2"><span>30G/月</span></span>
                                        </div>
                                        <div class="PlanCard__description">
                                            <div class="mb-6"><span
                                                        class="Badge c-red-6 bg-red-2"><span>6.2折</span></span>
                                            </div>
                                            <div class="mb-5"><p class="Text micro fwm c-bw-6"><span
                                                            class="PlanCard__total-full-price mr-2 "><span>15.9元</span></span><span class="c-red-6">9.9元每<span>月</span></span>
                                                </p></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="SectionLabel fwm lead mb-5 mb-sm-7"><span
                                        class="SectionLabel__badge mr-4"><span class="Badge c-bw-1 bg-bw-11"><span>计划二</span></span></span>
                                <h2 class="Title lead SectionLabel__text c-bw-12 fwm"><span>至尊VIP</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="row row__flex mb-9 mb-sm-11">

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
                                        </div>
                                        <div class="PlanCard__name pb-3 pt-5 pt-sm-7 pt-md-5"><p
                                                    class="Text fwb c-bw-12"><span><span>1 月</span>计划</span></p>
                                        </div>
                                        <div class="PlanCard__pricing fwb mt-2 c-bw-12"><span>¥</span>
                                            <h2 class="Title d-inline-block pl-2 lh1">25.9</h2><span
                                                    class="d-block small fwm mb-4 mb-md-5 mt-2"><span>无限流量</span></span>
                                        </div>
                                        <div class="PlanCard__description">
                                            <div class="mb-6"><span
                                                        class="Badge c-red-6 bg-red-2"><span>6.4折</span></span>
                                            </div>
                                            <div class="mb-5"><p class="Text micro fwm c-bw-6"><span
                                                            class="PlanCard__total-full-price mr-2 "><span>39.9元</span></span><span class="c-red-6">25.9元每<span>月</span></span>
                                                </p></div>
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
                                        </div>
                                        <div class="PlanCard__name pb-3 pt-5 pt-sm-7 pt-md-5"><p
                                                    class="Text fwb c-bw-12"><span><span>3 月</span>计划</span></p>
                                        </div>
                                        <div class="PlanCard__pricing fwb mt-2 c-bw-12"><span>¥</span>
                                            <h2 class="Title d-inline-block pl-2 lh1">69.9</h2><span
                                                    class="d-block small fwm mb-4 mb-md-5 mt-2"><span>无限流量</span></span>
                                        </div>
                                        <div class="PlanCard__description">
                                            <div class="mb-6"><span
                                                        class="Badge c-red-6 bg-red-2"><span>6.3折</span></span>
                                            </div>
                                            <div class="mb-5"><p class="Text micro fwm c-bw-6"><span
                                                            class="PlanCard__total-full-price mr-2 "><span>109.9元</span></span><span class="c-red-6">69.9元每<span>月</span></span>
                                                </p></div>
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
                                        </div>
                                        <div class="PlanCard__name pb-3 pt-5 pt-sm-7 pt-md-5"><p
                                                    class="Text fwb c-bw-12"><span><span>12 月</span>计划</span></p>
                                        </div>
                                        <div class="PlanCard__pricing fwb mt-2 c-bw-12"><span>¥</span>
                                            <h2 class="Title d-inline-block pl-2 lh1">239.9</h2><span
                                                    class="d-block small fwm mb-4 mb-md-5 mt-2"><span>无限流量</span></span>
                                        </div>
                                        <div class="PlanCard__description">
                                            <div class="mb-6"><span
                                                        class="Badge c-red-6 bg-red-2"><span>5.9折</span></span>
                                            </div>
                                            <div class="mb-5"><p class="Text micro fwm c-bw-6"><span
                                                            class="PlanCard__total-full-price mr-2 "><span>399.9元</span></span><span class="c-red-6">239.9元每<span>月</span></span>
                                                </p></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="SectionLabel fwm lead mb-5 mb-sm-7"><span
                                        class="SectionLabel__badge mr-4"><span class="Badge c-bw-1 bg-bw-11"><span>计划三</span></span></span>
                                <h2 class="Title lead SectionLabel__text c-bw-12 fwm"><span>视频一族</span></h2>
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
                                        <div class="PlanCard__pricing fwb mt-2 c-bw-12"><span>¥</span>
                                            <h2 class="Title d-inline-block pl-2 lh1">19.9</h2><span
                                                    class="d-block small fwm mb-4 mb-md-5 mt-2"><span>80G/月</span></span>
                                        </div>
                                        <div class="PlanCard__description">
                                            <div class="mb-6"><span class="Badge c-bw-11 bg-bw-4"><span>无折扣</span></span>
                                            </div>
                                            <div class="mb-5"><p class="Text micro fwm c-bw-6">
                                                    <span>19.9元每<span>月</span></span></p></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
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
                                                    class="Text fwb c-bw-12"><span><span>3 个月</span>计划</span></p>
                                        </div>
                                        <div class="PlanCard__pricing fwb mt-2 c-bw-12"><span>¥</span>
                                            <h2 class="Title d-inline-block pl-2 lh1">49.9</h2><span
                                                    class="d-block small fwm mb-4 mb-md-5 mt-2"><span>80G/月</span></span>
                                        </div>
                                        <div class="PlanCard__description">
                                            <div class="mb-6"><span class="Badge c-bw-11 bg-bw-4"><span>8.3折</span></span>
                                            </div>
                                            <div class="mb-5"><p class="Text micro fwm c-bw-6">
                                                    <span>49.9元每<span>月</span></span></p></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
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
                                                    class="Text fwb c-bw-12"><span><span>12 个月</span>计划</span></p>
                                        </div>
                                        <div class="PlanCard__pricing fwb mt-2 c-bw-12"><span>¥</span>
                                            <h2 class="Title d-inline-block pl-2 lh1">189.9</h2><span
                                                    class="d-block small fwm mb-4 mb-md-5 mt-2"><span>80G/月</span></span>
                                        </div>
                                        <div class="PlanCard__description">
                                            <div class="mb-6"><span class="Badge c-bw-11 bg-bw-4"><span>7.9折</span></span>
                                            </div>
                                            <div class="mb-5"><p class="Text micro fwm c-bw-6">
                                                    <span>189.9元每<span>月</span></span></p></div>
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