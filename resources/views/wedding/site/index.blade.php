<!DOCTYPE html>
<html lang="ja">
@include('site_header')

<body class="body_index">
    <?php
    $page = \App\Models\User::where('name', session('simple_auth')[0])->value('page_flg');
    ?>

    <section class="example bg-top" style="margin: auto;">
        <div class="row">
            <h1 class="ml3" style="font-size: 2.7rem;">Welcome</h1>
            <h1 class="ml4" style="font-size: 2.7rem; margin-top: 100px; padding-top:100px;  white-space: nowrap;">to
                our Wedding</h1>
        </div>
    </section>

    @if(session("simple_auth")[1] == 1 || $page == 1)
    <div class="m-5 p-1" style="text-align: center;">
        <a href="/site/wedding/guidehappouen" class="btn btn-pink text-nowrap" data-aos="fade-down" data-aos-delay="400" data-aos-duration="2000" data-aos-offset="120">案内状へ戻る</a>
    </div>
    @elseif(session("simple_auth")[1] == 2 || $page == 2)
    <div class="m-5 p-1" style="text-align: center;">
        <a href="/site/wedding/imagehappouen" class="btn btn-pink text-nowrap" data-aos="fade-down" data-aos-delay="400" data-aos-duration="2000" data-aos-offset="120">前撮りの写真へ</a>
    </div>
    @endif

    <section class="mt-5 p-3 pt-2 mb-5" data-aos="fade-up" data-aos-delay="600" data-aos-duration="2000" data-aos-offset="200">
        <div class="container box_msg" id="msg">
            <div class="row align-items-center text-center">
                <div class="col-xs-12 order-lg-1 col-lg-12 p-4 mb-1">
                    <span class="main-msg gold mb-2 webfont">~message~</span>
                    <br>
                    <br>
                    <p class="h4 content-msg mb-1" style="color:black; font-size:1.3rem">
                        初夏の侯
                        <br>
                        <br>
                        皆様におかれましては
                        <br>
                        お健やかにお過ごしの事と
                        <br>
                        お慶び申し上げます
                        <br>
                        <br>
                        日頃より
                        <br>
                        お世話になっております
                        <br>
                        皆様に
                        <br>
                        <br>
                        私どもの門出を　
                        <br>
                        お見守りいただきたく
                        <br>
                        <br>
                        心ばかりの祝宴を
                        <br>
                        催したいと存じます
                        <br>
                        <br>
                        ご多用中
                        <br>
                        誠に恐縮ではございますが
                        <br>
                        <br>
                        ぜひご出席いただきたく
                        <br>
                        ご案内申し上げます
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xs-6 order-lg-2 col-lg-6">
                    <div class="m-4">
                        <img class="img-fluid rounded-circle" src="{{ asset('img/IMG_20210502_155709.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-xs-6 order-lg-1 col-lg-6">
                    <div class="text-center text-white p-4">
                        <h5 class="display-7" style="font-family: 'shippori mincho b1', serif; font-size: 0.8rem;">
                            さとう　　ゆうや</h5>
                        <h2 class="display-4" style="font-family: 'shippori mincho b1', serif; font-size: 2.2rem;">佐藤　佑也
                        </h2>
                        <p style="font-family: 'shippori mincho b1', serif; font-size: 1.3rem;">
                            1990年6月25日生まれ30歳。エンジニアとしてWEBアプリの開発の仕事をしています。この度は智子さんと結婚することになりました。不束者ですが、これからは二人で幸せ家庭を気付いていきたいと思います。
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-5 pb-5">
        <div class="container ">
            <div class="row align-items-center">
                <div class="col-xs-6 col-lg-6">
                    <div class="m-4">
                        <img class="img-fluid rounded-circle" src="{{ asset('img/IMG_20210502_155558.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-xs-6 col-lg-6">
                    <div class="text-center text-white p-4">
                        <h5 class="display-7" style="font-family: 'shippori mincho b1', serif; font-size: 0.8rem;">
                            ゆかわ　　さとこ</h5>
                        <h2 class="display-4" style="font-family: 'shippori mincho b1', serif; font-size: 2.2rem;">湯川　智子
                        </h2>
                        <p style="font-family: 'shippori mincho b1', serif; font-size: 1.3rem;">
                            1990年10月27日生まれ30歳。化粧品の営業をしています。和歌山で育ち、15歳の時に上京してずっと東京で暮らしています。私が一番感謝を伝えたいのはお母さん、お父さんです。今日は来てくれてありがとう。
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="mt-4 p-4">
        <div class="container bg-dairiseki p-2" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-offset="120">
            <div class="row align-items-center text-center">
                <div class="col-xs-12 order-lg-1 col-lg-12 bg-dairiseki-text pt-4 pb-4">
                    <h2><span class="event-msg gold">Events</span></h2>
                    <p>
                    <div class="event-msg-1 gold">WEDDING CEREMONY
                        <br>
                        <br>
                        <br>
                        <strogn style="font-size: 2.3rem;">挙式</strogn>
                    </div>
                    </p>
                    <p style="font-size:1.8rem" class="mt-3">2022.5.29 sun</p>
                    <p style="font-size:1.8rem">13:15</p>
                    <p style="font-size:1.2rem">受付時間 13:00</p>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-4 p-4">
        <div class="container mt-5 mb-5 bg-dairiseki2 p-2" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-offset="120">
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
                    <p style="font-size:1.8rem" class="mt-3">2022.5.29 sun</p>
                    <p style="font-size:1.8rem">13:15</p>
                    <p style="font-size:1.2rem">受付時間 13:00</p>
                </div>
            </div>
        </div>
    </section>

    <section data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-offset="400">
        <div class="container mt-5 p-5">
            <div class="row align-items-center text-center">
                <div class="col-xs-12 order-lg-1 col-lg-12 bg-map2-text" style="text-align: left; margin:0 auto;">
                    <p class="fontstyle mb-4" style="color: white; font-size: 1.8rem; text-align:center;">～式場案内～</p>
                    <p class="fontstyle" style="color: white; font-size: 1.6rem;">八芳園</p>
                    <br>
                    <p class="fontstyle" style="color: white; font-size: 1.6rem; white-space: nowrap;">東京都港区白金台1-1-1</p>
                    <br>
                    <p class="fontstyle" style="white-space: nowrap; color: white;">03-3443-3111</p>
                    <br>
                    <a href="https://www.google.co.jp/maps/place/%E5%85%AB%E8%8A%B3%E5%9C%92/@35.6381947,139.7257702,17z/data=!3m1!4b1!4m5!3m4!1s0x60188b0131752fdb:0x1329e959bd91ac40!8m2!3d35.6381947!4d139.7279589" target="_blank" rel="noopener noreferrer" class="p-2 h4 text_link_under" style="white-space: nowrap; text-align:center;">
                        <p style="text-align:center; font-size: 1.5rem;">GoogleMapで見る</p>
                    </a>
                    <div><iframe src="https://www.google.com/maps/d/embed?mid=1fqhy8ZLBTlRoZvouSREKg-eC2QQ&hl=ja" class="w-100 m-1" style="height:300px"></iframe></div>
                </div>
            </div>
        </div>
    </section>


    <!-- 本来はココは使いたくないが、スティッキー問題が解決できないため -->
    <!-- もし解決できたら、トップのスティッキーを活かして、ここを丸々削除 -->
    @if(session("simple_auth")[1] == 1 || $page == 1)
    <div class="mb-5 p-1" style="text-align: center;">
        <a href="/site/wedding/guidehappouen" class="btn btn-pink text-nowrap" data-aos="fade-down" data-aos-delay="400" data-aos-duration="2000" data-aos-offset="120">案内状へ戻る</a>
    </div>
    @elseif(session("simple_auth")[1] == 2 || $page == 2)
    <div class="mb-5 p-1" style="text-align: center;">
        <a href="/site/wedding/imagehappouen" class="btn btn-pink text-nowrap" data-aos="fade-down" data-aos-delay="400" data-aos-duration="2000" data-aos-offset="120">前撮りの写真へ</a>
    </div>
    @endif


    @if(session("simple_auth")[1] == 0 && $page == 0)
    <!-- 登録フォーム↓長いのでinclude -->
    @include('wedding.site.register_form')

    @else
    <section style="border: 5px double white;" class="m-3 p-2">
        <div class="col-xs-12 order-lg-1 col-lg-12 bg-map2-text" style="margin:0 auto;">
            <p class="mb-2 h6 fontstyle" style="color: white; text-align:center; font-size:1.3rem;">出席情報は登録済みです。</p>
            <p class="mb-2 h6 fontstyle" style="color: white; text-align:center; font-size:1.3rem;">内容を変更したい場合は、</p>
            <p class="mb-2 h6 fontstyle" style="color: white; text-align:center; font-size:1.3rem;">直接ご連絡下さい。</p>
        </div>
    </section>
    @endif

    <!-- Footer -->
    @include('footer')

    <!-- 背景に星を降らせるアニメーションを読み込み -->
    <script type="text/javascript" src="{{ asset('js/star.js') }}"></script>

    <!--スクロールアニメーションを読み込み -->
    <script type="text/javascript" src="{{ asset('js/scroll.js') }}"></script>

    <!--ヘッダー画像のテキストアニメーションを読み込み -->
    <script type="text/javascript" src="{{ asset('js/animation_for_index.js') }}"></script>

</body>

</html>