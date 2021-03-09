<!DOCTYPE html>
<html lang="ja">
@include('site_header')
<body>


    <?php 
        $page = \App\Models\User::where('name', session('simple_auth')[0])->value('page_flg');
    ?>
  
  <section class="example bg-top" style="max-width: 1000px;
    margin: auto;">
        <div class="row">
            <h1 class="ml3" style="font-size: 2.7rem;">Welcome</h1>
            <h1 class="ml4" style="font-size: 2.7rem; margin-top: 100px; padding-top:100px;  white-space: nowrap;">to our Wedding</h1>
        </div>
  </section>   
  
    @if(session("simple_auth")[1] === 1 || $page === 1)
    <form method="post" action="{{ url('logout') }}">
        @csrf 
        <input class="bg-white" type="submit" value="ログアウト" />
    </form>
    <!-- 要素が浮く問題から、いったんスティッキーを使わない回避策に -->
    <!-- <div class="m-1 sticky-top p-1" style="text-align: right;"> -->
    <div class="m-1 p-1" style="text-align: center;">
        <a href="/site/wedding/guidehappouen" class="btn btn-primary">案内状へ戻る</a>
    </div>
    @elseif(session("simple_auth")[1] === 2 || $page === 2)
    <form method="post" action="{{ url('logout') }}">
        @csrf 
        <input class="bg-white" type="submit" value="ログアウト" />
    </form>
    <div class="m-1 sticky-top p-1" style="text-align: right;">
        <a href="/site/wedding/imagehappouen" class="btn btn-primary">前撮りの写真へ</a>
    </div>
    @endif

    <section  class="mt-5 p-3 pt-2 mb-5" data-aos="fade-down" data-aos-delay="10" data-aos-duration="3000" data-aos-offset="200">
        <div class="container box_msg" id="msg" >
            <div class="row align-items-center text-center">
                <div class="col-xs-12 order-lg-1 col-lg-12 p-4 mb-1" >
                        <span class="main-msg gold mb-2 webfont">~message~</span>
                        <br>
                        <br>
                        <p class="h4 content-msg mb-1" style="color:black; font-size:1.3rem">
                        皆様いかがお過ごしでしょうか
                        <br>
                        <br>
                        このたび結婚式を執り行うこととなりました
                        <br>
                        <br>
                        日頃お世話になっておりますみなさまに 
                        <br>
                        <br>
                        私どもの門出をお見守りいただきたく　
                        <br>
                        <br>
                        ささやかながら小宴を催したく存じます
                        <br>
                        <br>
                        ご多用中、誠に恐縮ではございますが
                        <br>
                        <br>
                        ぜひご出席いただきたくご案内申し上げます</p>
                </div>
            </div>
        </div>
    </section>

  <section class="pt-5 pb-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-xs-6 order-lg-2 col-lg-6">
          <div class="m-4">
            <img class="img-fluid rounded-circle" src="{{ asset('img/line_5061427426418137.jpg') }}" alt="">
          </div>
        </div>
        <div class="col-xs-6 order-lg-1 col-lg-6">
          <div class="text-center text-white p-4">
          <h5 class="display-7" style="font-family: 'shippori mincho b1', serif; font-size: 1.0rem;">さとう　　ゆうや</h5>
            <h2 class="display-4" style="font-family: 'shippori mincho b1', serif; font-size: 2.5rem;">佐藤　佑也</h2>
            <p style="font-family: 'shippori mincho b1', serif; font-size: 1.5rem;">1990年6月25日生まれ30歳。エンジニアとしてWEBアプリの開発の仕事をしています。この度は智子さんと結婚することになりました。不束者ですが、これからは二人で幸せ家庭を気付いていきたいと思います。</p>
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
            <img class="img-fluid rounded-circle" src="{{ asset('img/line_2333475898087329.jpg') }}" alt="">
          </div>
        </div>
        <div class="col-xs-6 col-lg-6">
          <div class="text-center text-white p-4">
            <h5 class="display-7" style="font-family: 'shippori mincho b1', serif; font-size: 1.0rem;">ゆかわ　　さとこ</h5>
            <h2 class="display-4" style="font-family: 'shippori mincho b1', serif; font-size: 2.5rem;">湯川　智子</h2>
            <p style="font-family: 'shippori mincho b1', serif; font-size: 1.5rem;">
            1990年10月27日生まれ30歳。化粧品の営業をしています。和歌山で育ち、15歳の時に上京してずっと東京で暮らしています。私が一番感謝を伝えたいのはお母さん、お父さんです。今日は来てくれてありがとう。
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>


  
  
    <section class="mt-4 p-4">
        <div class="container bg-dairiseki p-2" data-aos="fade-up" data-aos-delay="70" data-aos-duration="800" data-aos-offset="200">
            <div class="row align-items-center text-center pt-1 pb-1">
                <div class="col-xs-12 order-lg-1 col-lg-12 bg-dairiseki-text" >
                    <h2><span class="event-msg gold">Events</span></h2>
                    <p>
                        <h3 class="event-msg-1 gold">WEDDING CEREMONY
                            <br>
                            <br>
                            <br>
                            <strogn style="font-size: 2.3rem;"class="mt-5">挙式</strogn>
                        </h3>
                    </p>
                    <p style="font-size:1.8rem" class="mt-5">2022.5.29 sun</p>
                    <p style="font-size:1.8rem">13:15</p>
                    <p style="font-size:1.2rem">受付時間 13:00</p>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-4 p-4">
        <div class="container mt-5 bg-dairiseki2 p-2" data-aos="fade-up" data-aos-delay="70" data-aos-duration="800" data-aos-offset="200">
        <div class="row align-items-center text-center pt-1 pb-1">
            <div class="col-xs-12 order-lg-1 col-lg-12 ">
                <h2><span class="event-msg pink_gold">Events</span></h2>
                <p>
                    <h3 class="event-msg-1 pink_gold">WEDDING CEREMONY
                        <br>
                        <br>
                        <br>
                        <strong style="font-size: 2.3rem;">披露宴</strong>
                    </h3>
                </p>
                <p style="font-size:1.8rem" class="mt-5">2022.5.29 sun</p>
                <p style="font-size:1.8rem">13:15</p>
                <p style="font-size:1.2rem">受付時間 13:00</p>
            </div>
        </div>
        </div>
    </section>

    <section class="mt-2" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800" data-aos-offset="400">
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
                <a href="https://www.google.co.jp/maps/place/%E5%85%AB%E8%8A%B3%E5%9C%92/@35.6381947,139.7257702,17z/data=!3m1!4b1!4m5!3m4!1s0x60188b0131752fdb:0x1329e959bd91ac40!8m2!3d35.6381947!4d139.7279589" target="_blank" class="p-2 h4 text_link_under" style="white-space: nowrap; text-align:center;">
                <p style="text-align:center; font-size: 1.5rem;">GoogleMapで見る</p></a>
                    <div><iframe src="https://www.google.com/maps/d/embed?mid=1fqhy8ZLBTlRoZvouSREKg-eC2QQ&hl=ja" class="w-100 m-1" style="height:500px"></iframe></div>
                <br>
                <br>
                <br>
                <p class="mb-2 h6 fontstyle" style="color: white; text-align:center; font-size:1.2rem;">アクセスの詳細は下記URLをご覧ください。</p>
                <p class="h6 mt-3 fontstyle" style="color: white; text-align:center; font-size:1.2rem;">車、電車、バス、シャトルバス、タクシーでご来場の方</p>
                <br>
                <div class="arrow mb-4" style="margin:0 auto">
                    <div class="down"> </div>
                </div>
                <div class="text-center">
                    <a href="https://www.happo-en.com/access/" target="_blank" class="btn bg-silver rounded-pill h3 pl-4 pr-4" style="white-space: nowrap; font-size:1.5rem; font-style:italic;">
                    アクセスの詳細
                    </a>
                </div>
          </div>
      </div>
    </div>
  </section>


    <!-- 本来はココは使いたくないが、スティッキー問題が解決できないため -->
    <!-- もし解決できたら、トップのスティッキーを活かして、ここを丸々削除 -->
    @if(session("simple_auth")[1] === 1 || $page === 1)
    <form method="post" action="{{ url('logout') }}">
        @csrf 
        <input class="bg-white" type="submit" value="ログアウト" />
    </form>
    <!-- 要素が浮く問題から、いったんスティッキーを使わない回避策に -->
    <!-- <div class="m-1 sticky-top p-1" style="text-align: right;"> -->
    <div class="mb-5 p-1" style="text-align: center;">
        <a href="/site/wedding/guidehappouen" class="btn btn-primary">案内状へ戻る</a>
    </div>
    @elseif(session("simple_auth")[1] === 2 || $page === 2)
    <form method="post" action="{{ url('logout') }}">
        @csrf 
        <input class="bg-white" type="submit" value="ログアウト" />
    </form>
    <div class="mb-5 p-1" style="text-align: center;">
        <a href="/site/wedding/imagehappouen" class="btn btn-primary">前撮りの写真へ</a>
    </div>
    @endif
    
  
    @if(session("simple_auth")[1] === 0 && $page === 0)
    <!-- 登録フォーム↓長いのでinclude -->
    @include('wedding.site.register_form')
    
    @else
    <section style="border: 5px double white;" class="m-3 p-2">
        <div class="col-xs-12 order-lg-1 col-lg-12 bg-map2-text" style="margin:0 auto;">
            <p class="mb-2 h6 fontstyle" style="color: white; text-align:center; font-size:1.3rem;">出席情報は登録済みです。</p>
            <p class="mb-2 h6 fontstyle" style="color: white; text-align:center; font-size:1.3rem;">内容を変更したい場合は、</p>
            <p class="mb-2 h6 fontstyle" style="color: white; text-align:center; font-size:1.3rem;">直接ご連絡ください。</p>
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

<!-- ブラウザバッグ禁止コード 本番反映時-->
<!-- <script type="text/javascript" src="{{ asset('js/not_windows_back.js') }}"></script> -->

</body>
</html>
