<!DOCTYPE html>
<html lang="ja">
@include('site_header')

<!-- 案内状専用のCSS読み込み！桜降らせるアニメーション！ -->
<link href="{{ asset('css/bloom_guide.css') }}" rel="stylesheet">

<body class="body_guide cherry-blossom-container">

    <section class="">
        <div class="row bg-top2 image-fuild">
            <div class="text-center text-white p-5 mt-2" style="font-size: 1.2rem; ">
                <div id="guide_msg">
                    <span class="text-wrapper">
                        <p class="mb-5"><span class="letters fontstyle">Thank You</span></p>
                        <p class="mt-5"><span class="letters fontstyle">会える日を楽しみにしています</span></p>
                </div>
            </div>
        </div>
    </section>

    @if(session("simple_auth"))
    <div class="m-5 p-1" style="text-align: center;">
        <a href="{{ route('site') }}" class="btn btn-pink text-nowrap">招待状へ戻る</a>
    </div>
    @endif

    <section class="mt-4 p-4">
        <div class="container bg_guide_1 p-2" data-aos="fade-up" data-aos-delay="70" data-aos-duration="800"
            data-aos-offset="200">
            <div class="row align-items-center text-center">
                <div class="col-xs-12 order-lg-1 col-lg-12 bg-dairiseki-text pt-4 pb-4">
                    <h2><span class="event-msg gold">Events</span></h2>
                    <p>
                    <div class="event-msg-1 gold text-nowrap">WEDDING CEREMONY
                        <br>
                        <br>
                        <br>
                        <strogn style="font-size: 2.3rem;">挙式</strogn>
                    </div>
                    </p>
                    <img src="{{ asset('img/松の葉の無料アイコン (1).svg') }}" alt="" width="30" class="mt-4">
                    <p style="font-size:1.8rem" class="mt-3">2022.5.29 sun</p>
                    <p style="font-size:1.8rem">13:15</p>
                    <p style="font-size:1.2rem">受付時間 13:00</p>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-4 p-4 mb-5">
        <div class="container mt-5 mb-5 bg_guide_2 p-2" data-aos="fade-up" data-aos-delay="70" data-aos-duration="800"
            data-aos-offset="200">
            <div class="row align-items-center text-center">
                <div class="col-xs-12 order-lg-1 col-lg-12 pt-4 pb-4">
                    <h2><span class="event-msg pink_gold">Events</span></h2>
                    <p>
                    <div class="event-msg-1 pink_gold">WEDDING CEREMONY
                        <br>
                        <br>
                        <br>
                        <strong style="font-size: 2.3rem;">披露宴</strong>
                    </div>
                    </p>
                    <img src="{{ asset('img/笹の葉のアイコン (1).svg') }}" alt="" width="30" class="mt-4">
                    <p style="font-size:1.8rem" class="mt-3">2022.5.29 sun</p>
                    <p style="font-size:1.8rem">13:15</p>
                    <p style="font-size:1.2rem">受付時間 13:00</p>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-5 p-4 mb-4">
        <div class="container bg-countdown p-3" data-aos="fade-down" data-aos-delay="70" data-aos-duration="800"
            data-aos-offset="200">
            <div class="row align-items-center text-center">
                <div class="col-xs-12 order-lg-1 col-lg-12 bg-countdown-text" style="font-style: italic;">
                    @if(date('Y/m/d H:i:s' ) <= date('2022/05/29 00:00:00')) <span
                        style=" font-size: 2.5rem; white-space: nowrap;">count down</span>
                        <br>
                        <br>
                        <span style="font-size: 1.9rem;">to 2020.5.29</span>
                        <br>
                        <img src="{{ asset('img/event_ttl_bg01.svg') }}" alt="" class="mt-3" width="30">
                        <br>
                        <div class="p-2" style="text-align: center; white-space: nowrap; width: 100%">
                            <div style="font-size:1.5rem"><span style=" font-size: 2.5rem;" class="countDownText"
                                    id="countDown_date"></span>days
                                <span style="font-size: 2.0rem;" class="countDownText"
                                    id="countDown_date_hours"></span>hours
                            </div>
                        </div>
                        <div class="mb-4" style="text-align: center; white-space: nowrap;">
                            <div style=" font-size:1rem"><span style="font-size: 2.0rem;" class="countDownText"
                                    id="countDown_date_minutes"></span>minutes
                                <span style="font-size: 2.0rem;" class="countDownText"
                                    id="countDown_date_seconds"></span>seconds
                            </div>
                        </div>
                        @else
                        <span style="font-size: 3rem; white-space: nowrap;">count down</span>
                        <br>
                        <br>
                        <span style="font-size: 2rem;">to 2020.5.29</span>
                        <br>
                        <br>
                        <br>
                        <span style="font-size: 2rem;">~結婚式当日~</span>
                        <br>
                        @endif
                </div>
            </div>
        </div>
    </section>

    <section class="mt-2 p-4 mb-5" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800"
        data-aos-offset="400">
        <div class="container mt-5 bg_guide_3 p-5">
            <div class="row align-items-center text-center">
                <div class="col-xs-12 order-lg-1 col-lg-12 bg-map2-text dark_gold"
                    style="text-align: left; margin:0 auto;">
                    <p class="fontstyle mb-4" style="font-size: 1.8rem; text-align:center;">～式場案内～</p>
                    <p class="fontstyle" style="font-size: 1.6rem;">八芳園</p>
                    <br>
                    <p class="fontstyle" style="font-size: 1.2rem; white-space: nowrap;">東京都港区白金台1-1-1</p>
                    <br>
                    <p class="fontstyle" style="white-space: nowrap; ">03-3443-3111</p>
                    <br>
                    <a href="https://www.google.co.jp/maps/place/%E5%85%AB%E8%8A%B3%E5%9C%92/@35.6381947,139.7257702,17z/data=!3m1!4b1!4m5!3m4!1s0x60188b0131752fdb:0x1329e959bd91ac40!8m2!3d35.6381947!4d139.7279589"
                        target="_blank" rel="noopener noreferrer" class="p-2 h4 text_link_under"
                        style="white-space: nowrap; text-align:center;">
                        <p style="text-align:center; font-size: 1.5rem;">GoogleMapで見る</p>
                    </a>
                    <div><iframe src="https://www.google.com/maps/d/embed?mid=1fqhy8ZLBTlRoZvouSREKg-eC2QQ&hl=ja"
                            class="w-100 m-1" style="height:300px"></iframe></div>
                    <br>
                    <p class="mb-2 h6 fontstyle" style="text-align:center; font-size:1.2rem;">アクセスの詳細は</p>
                    <p class="mb-2 h6 fontstyle text-nowrap" style="text-align:center; font-size:1.2rem;">下記URLをご覧ください。
                    </p>
                    <p class="h6  mt-3 fontstyle" style="text-align:center; font-size:1.2rem;">車、電車</p>
                    <p class="fontstyle text-nowrap" style="text-align:center; font-size:1.2rem;">バス、タクシーで</p>
                    <p class=" fontstyle" style="text-align:center; font-size:1.2rem;">ご来場の方</p>
                    <br>
                    <div class="text-center">
                        <a href="https://happo-en.com/banquet/access/" target="_blank"
                            class="btn btn-blue rounded-pill h3 pl-4 pr-4"
                            style="white-space: nowrap; font-size:1.4rem; font-style:italic;">
                            アクセスの詳細
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if(session("simple_auth")[0] == "さとうとしお" || session("simple_auth")[0] == "さとうりょうた" || session("simple_auth")[0] ==
    "さとうけいすけ" || session("simple_auth")[0] == "ゆかわじゅんじ" || session("simple_auth")[0] == "うえぶせさとし")
    <section class="mt-4 p-4 mb-3">
        <div class="container mt-5 mb-2 bg_guide_family p-2" data-aos="fade-up" data-aos-delay="70"
            data-aos-duration="800" data-aos-offset="200">
            <div class="row align-items-center text-center">
                <div class="col-xs-12 order-lg-1 col-lg-12 pt-5 pb-4 family-msg">
                    <p style="font-size:1.5rem;">ご家族の皆様へ</p>
                    <img src="{{ asset('img/笹の葉のフリーアイコン.svg') }}" alt="" class="m-3" width="25">
                    <p style="font-size:1.3rem;">
                        前撮りの写真を
                    </p>
                    <p style="font-size:1.3rem;">
                        お送り致します。
                    </p>
                    <br>
                    <p style="font-size:1.3rem;">
                        下のボタンより
                    </p>
                    <p style="font-size:1.3rem;">
                        閲覧してください。
                    </p>
                    <div class="m-5 p-1" style="text-align: center;">
                        <a href="/site/wedding/imagehappouen" class="btn btn-blue text-nowrap">前撮りの写真へ</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif

    <section class="mt-4 p-4 mb-3">
        <div class="container mt-5 mb-2 bg_guide_show p-2" data-aos="fade-up" data-aos-delay="70"
            data-aos-duration="800" data-aos-offset="200">
            <div class="row align-items-center text-center">
                <div class="col-xs-12 order-lg-1 col-lg-12 pt-4 pb-4 show-msg">
                    <p style="font-size:1.5rem;">ご登録情報の確認</p>
                    <!-- <img src="{{ asset('img/竹アイコン1.svg') }}" alt="" class="m-5" width="25"> -->
                    <div class="p-1 mt-3" style="text-align: center;">
                        <a href="{{ route('showregister') }}" class="btn btn-green text-nowrap">ご登録情報へ</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if(session("simple_auth"))
    <div class="m-5 p-1" style="text-align: center;">
        <a href="{{ route('site') }}" class="btn btn-pink text-nowrap">招待状へ戻る</a>
    </div>
    @endif

    <!-- Footer -->
    @include('footer')

    <!--桜降らせるJSを読み込み -->
    <script type="text/javascript" src="{{ asset('js/bloom_guide.js') }}"></script>

    <!--スクロールアニメーションを読み込み -->
    <script type="text/javascript" src="{{ asset('js/scroll.js') }}"></script>

    <!--countdownを読み込み -->
    <script type="text/javascript" src="{{ asset('js/countdown.js') }}"></script>

    <!--ヘッダー画像のテキストアニメーションを読み込み -->
    <script type="text/javascript" src="{{ asset('js/animation_for_guide.js') }}"></script>

</body>

</html>