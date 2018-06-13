@extends('front.layouts2')

@section('css')

@endsection
@section('content')
    <style>
        .icon{
            font-size: 45px;
        }

    </style>
    <div class="row" style="border-bottom: 1px solid #f8f8f8;margin-bottom: 20px;padding-left: 18%;padding-right: 18%">
        <div class="col-md-6 col-xs-12 col-sm-12">
            <img src="/images/down.png" class="img-responsive" alt="Responsive image">
        </div>
        <div class="col-md-6 col-xs-12 col-sm-12" style="margin-top: 20px">
            <h3 class="Title">支持各主流系统平台使用</h3>
            <p class="Text">本站提供SS/SSR协议节点，是目前加速最流行的解决方案。支持Windows、Mac、iOS、Android 终端，下载软件添加节点即可使用。如果您是新手用户不清楚如何使用，建议花一点时间查看下面使用教程。</p>
        </div>
    </div>
    <div class="row" style="padding-left: 18%;padding-right: 18%">
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            <div>
                <div class="Paper bg-bw-1 PlanCard text-center PlanCard--type-special sha-1 sha-3-hover">
                    <div class="PlanCard__body p-5">
                        <div class="PlanCard__name pb-3 pt-5 pt-sm-7 pt-md-5">
                            <img src="/images/Android.svg" width="50px" height="50px">
                            {{--<i class="icon fab fa-android" style="color: #424242"></i>--}}
                            <p class="Text fwb c-bw-12">
                                <span>
                                    <span>
                                        ShadowsocksR for
                                    </span>
                                    <br/>
                                    Android
                                </span>
                            </p>
                        </div>
                        <div class="PlanCard__pricing fwb mt-2 c-bw-12">
                            <span class="d-block small fwm mb-4 mb-md-5 mt-2">
                                <p style="font-size: 10px">系统要求：Android 4.4 及以上</p>
                                <p>完美支持 穿云梯加速 服务所有特性的客户端，适用于Android。</p>
                            </span>
                        </div>
                        <div class="PlanCard__description">
                            <button class="Button Button--primary"> 下载 </button>
                            <button class="Button" style="background-color: #ffffff;color: #f64f64;font-size: 14px"> 查看教程 </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            <div>
                <div class="Paper bg-bw-1 PlanCard text-center PlanCard--type-special sha-1 sha-3-hover">
                    <div class="PlanCard__body p-5">
                        <div class="PlanCard__name pb-3 pt-5 pt-sm-7 pt-md-5">
                            <img src="/images/Mac.svg" width="50px" height="50px">
                            {{--<i class="icon fab fa-android" style="color: #424242"></i>--}}
                            <p class="Text fwb c-bw-12">
                                <span>
                                    <span>
                                        ShadowsocksR for
                                    </span>
                                    <br/>
                                    Mac
                                </span>
                            </p>
                        </div>
                        <div class="PlanCard__pricing fwb mt-2 c-bw-12">
                            <span class="d-block small fwm mb-4 mb-md-5 mt-2">
                                <p style="font-size: 10px">系统要求：OS X Mavericks 及以上</p>
                                <p>完美支持 穿云梯加速 服务所有特性的客户端，适用于 Mac</p>
                            </span>
                        </div>
                        <div class="PlanCard__description">
                            <button class="Button Button--primary"> 下载 </button>
                            <button class="Button" style="background-color: #ffffff;color: #f64f64;font-size: 14px"> 查看教程 </button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            <div>
                <div class="Paper bg-bw-1 PlanCard text-center PlanCard--type-special sha-1 sha-3-hover">
                    <div class="PlanCard__body p-5">
                        <div class="PlanCard__name pb-3 pt-5 pt-sm-7 pt-md-5">
                            <img src="/images/window.svg" width="50px" height="50px">
                            {{--<i class="icon fab fa-android" style="color: #424242"></i>--}}
                            <p class="Text fwb c-bw-12">
                                <span>
                                    <span>
                                        ShadowsocksR for
                                    </span>
                                    <br/>
                                    Windows
                                </span>
                            </p>
                        </div>
                        <div class="PlanCard__pricing fwb mt-2 c-bw-12">
                            <span class="d-block small fwm mb-4 mb-md-5 mt-2">
                                <p style="font-size: 10px">系统要求：Windows XP 及以上</p>
                                <p>完美支持 穿云梯 服务所有特性的客户端，适用于Windows PC。</p>
                            </span>
                        </div>
                        <div class="PlanCard__description">
                            <button class="Button Button--primary"> 下载 </button>
                            <button class="Button" style="background-color: #ffffff;color: #f64f64;font-size: 14px"> 查看教程 </button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            <div>
                <div class="Paper bg-bw-1 PlanCard text-center PlanCard--type-special sha-1 sha-3-hover">
                    <div class="PlanCard__body p-5">
                        <div class="PlanCard__name pb-3 pt-5 pt-sm-7 pt-md-5">
                            <img src="/images/ios.svg" width="50px" height="50px">
                            {{--<i class="icon fab fa-android" style="color: #424242"></i>--}}
                            <p class="Text fwb c-bw-12">
                                <span>
                                    <span>
                                        ShadowsocksR for
                                    </span>
                                    <br/>
                                    IOS
                                </span>
                            </p>
                        </div>
                        <div class="PlanCard__pricing fwb mt-2 c-bw-12">
                            <span class="d-block small fwm mb-4 mb-md-5 mt-2">
                                <p style="font-size: 10px">系统要求：IOS 8.0以上</p>
                                <p>完美支持 穿云梯加速 服务所有特性的客户端，适用于IOS。</p>
                            </span>
                        </div>
                        <div class="PlanCard__description">
                            <button class="Button Button--primary"> 查看教程 </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-bottom: 200px">

    </div>
@endsection

@section('script')

@endsection