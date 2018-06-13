@extends('front.layouts2')

@section('css')
    <link href="https://vjs.zencdn.net/6.9.0/video-js.css" rel="stylesheet">


@endsection
@section('content')
    <div class="DownloadsHub">
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
                <div class="ScrollableTabs__paddle"><a class="Link ScrollableTabs__paddle-left" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                             class="SVG SVG--inline c-bw-14" preserveAspectRatio="xMidYMid meet">
                            <path d="M6.667 8l4.666 4.667L10 14 4 8l6-6 1.333 1.333z" fill="#151922"
                                  fill-rule="evenodd"></path>
                        </svg>
                    </a><a class="Link ScrollableTabs__paddle-right" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                             class="SVG SVG--inline c-bw-14" preserveAspectRatio="xMidYMid meet">
                            <path d="M8.667 8L4 3.333 5.333 2l6 6-6 6L4 12.667z" fill="#151922"
                                  fill-rule="evenodd"></path>
                        </svg>
                    </a></div>
            </div>
        </div>
        <hr class="my-0">
        <section class="BannerWrapper">
            <div class="Background Background--hidden-sm-up"
                 style="background-image:url(https://s1.nordwebsite.net/nordvpn/3.85.0/images/download-hub/child/hero-pills-light-right-xs.svg);background-color:#f8f8f8;background-repeat:no-repeat;background-position:center bottom;background-size:100%;">
                <div class="container">
                    <div class="Background Background--hidden-xs"
                         style="background-image:url(https://s1.nordwebsite.net/nordvpn/3.85.0/images/download-hub/child/hero-pills-light-right.svg);background-color:transparent;background-repeat:no-repeat;background-position:center;background-size:100%;">
                        <div class="Banner Banner--light">
                            <div class="d-sm-flex row">


                                <div class="pt-11 py-sm-11 py-md-14 my-auto col-sm-6 col-xs-12">
                                    <h1 class="Title h2 mb-5 mb-sm-6 text-xs-center">下载 Windows 版 NordVPN</h1>
                                    <p class="Text mb-5 mb-sm-6 text-xs-center fwm">只需点击几下，即可保障您的在线隐私和安全。</p>
                                    <div class="mb-5 mb-sm-6"><a
                                                class="Button Button--primary Button--large Button--block-xs d-sm-inline-block"
                                                href="/download_vpn/windows/ShadowsocksR-4.7.0.7z"
                                                role="button" tabindex="0">下载</a></div>

                                </div>
                                <div class="my-auto col-sm-6 col-xs-12"><img
                                            src="https://s1.nordwebsite.net/nordvpn/3.85.0/images/global/devices/banner-laptop-windows-map-light.png"
                                            srcset="https://s1.nordwebsite.net/nordvpn/3.85.0/images/global/devices/banner-laptop-windows-map-light.png 1x, https://s1.nordwebsite.net/nordvpn/3.85.0/images/global/devices/banner-laptop-windows-map-light@2x.png 2x"
                                            class="hidden-xs p-lg-6 my-6 my-sm-0 img-responsive" alt="windows"><img
                                            src="https://s1.nordwebsite.net/nordvpn/3.85.0/images/global/devices/banner-laptop-windows-map-light.png"
                                            srcset="https://s1.nordwebsite.net/nordvpn/3.85.0/images/global/devices/banner-laptop-windows-map-light.png 1x, https://s1.nordwebsite.net/nordvpn/3.85.0/images/global/devices/banner-laptop-windows-map-light@2x.png 2x"
                                            class="py-6 p-lg-6 visible-xs center-block img-responsive" alt="Windows">
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr class="my-0">
    </div>
    <div class="video_main dw">
        <ul>
            <li class="video_main_video left">
                <video id="videoPlay1" width="100%" height="100%" src="//vjs.zencdn.net/v/oceans.mp4" poster="//vjs.zencdn.net/v/oceans.png" loop="loop" x-webkit-airplay="true" webkit-playsinline="true">
                    您的浏览器暂不支持播放该视频，请升级至最新版浏览器。
                </video>
            </li>
        </ul>
    </div>
    <script>
        var video1=document.getElementById("videoPlay1");
        video1.onclick=function(){
            if(video1.paused){
                video1.play();
            }else{
                video1.pause();
            }
        }
    </script>
@endsection

@section('script')

@endsection