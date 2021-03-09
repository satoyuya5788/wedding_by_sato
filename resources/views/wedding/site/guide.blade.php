<!DOCTYPE html>
<html lang="ja">
@include('site_header')
<body>
<video src="{{ asset('img/Pexels Videos 2098988.mp4') }}" autoplay playsinline muted loop></video>
  
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
        <form method="post" action="{{ url('logout') }}">
        @csrf 
        <input type="submit" value="ログアウト" />
        </form>

        <div class="m-1 sticky-top p-1" style="text-align: right;">
            <a href="{{ route('site') }}" class="btn btn-primary">招待状へ戻る</a>
        </div>
    @endif
  
    <section class="mt-3 p-3 pt-5">
        <div class="container bg-dairiseki p-5" data-aos="fade-up" data-aos-delay="70" data-aos-duration="800" data-aos-offset="200">
            <div class="row align-items-center text-center" >
            <div class="col-xs-12 order-lg-1 col-lg-12 bg-dairiseki-text" >
                <h2><span class="event-msg gold">Events</span></h2>
                <p>
                    <h3 class="event-msg-1 gold" >WEDDING CEREMONY
                        <br>
                        <br>
                        <br>
                        <strogn style="font-size: 3rem;">挙式</strogn>
                    </h3>
                </p>
                <p style="font-size:1.8rem" class="mt-5">2022.5.29 sun</p>
                <p style="font-size:1.8rem">13:15</p>
                <p style="font-size:1.2rem">受付時間 13:00</p>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-3 p-3 pb-5">
        <div class="container mt-5 mb-5 bg-dairiseki2 p-5" data-aos="fade-up" data-aos-delay="70" data-aos-duration="800" data-aos-offset="200">
        <div class="row align-items-center text-center">
            <div class="col-xs-12 order-lg-1 col-lg-12">
                <h2><span class="event-msg pink_gold">Events</span></h2>
                <p>
                    <h3 class="event-msg-1 pink_gold">WEDDING CEREMONY
                        <br>
                        <br>
                        <br>
                        <strong style="font-size: 3rem;">披露宴</strong>
                    </h3>
                </p>
                <p style="font-size:1.8rem" class="mt-5">2022.5.29 sun</p>
                <p style="font-size:1.8rem">13:15</p>
                <p style="font-size:1.2rem">受付時間 13:00</p>
            </div>
        </div>
    </div>
  </section>

<section class="mt-3 p-2">
    <div class="container bg-countdown p-5" data-aos="fade-down" data-aos-delay="70" data-aos-duration="800" data-aos-offset="200">
        <div class="row align-items-center text-center" >
            <div class="col-xs-12 order-lg-1 col-lg-12 bg-countdown-text" style="font-style: italic;">
                @if(date('Y/m/d H:i:s' ) <= date('2022/05/29 00:00:00'))
                <span style="background-color: black; opacity:0.7; font-size: 3rem; white-space: nowrap;">count down</span>
                <br>
                <br>
                <span style="background-color: black; opacity:0.7; font-size: 2rem;">to 2020.5.29</span>
                <br>
                <br>
                <div class="mt-5 p-2" style="background-color: black; opacity:0.7; text-align: center; white-space: nowrap; width: 100%">
                    <div style="font-size:1.5rem"><span style=" font-size: 2.5rem;" class="countDownText" id="countDown_date"></span>days
                    <span style="font-size: 2.0rem;" class="countDownText" id="countDown_date_hours"></span>hours</div>
                </div>
                <div class="mt-5 -2" style="background-color: black; opacity:0.7; text-align: center; white-space: nowrap;">
                    <div style=" font-size:1rem"><span style="font-size: 2.0rem;" class="countDownText" id="countDown_date_minutes"></span>minutes
                    <span style="font-size: 2.0rem;" class="countDownText" id="countDown_date_seconds"></span>seconds</div>
                </div>
                @else
                <span style="background-color: black; opacity:0.7; font-size: 3rem; white-space: nowrap;">count down</span>
                <br>
                <br>
                <span style="background-color: black; opacity:0.7; font-size: 2rem;">to 2020.5.29</span>
                <br>
                <br>
                <br>
                <span style="background-color: black; opacity:0.7; font-size: 2rem;">~結婚式当日~</span>
                <br>
                @endif
            </div>
        </div>
    </div>
</section>

<section class="mt-2" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800" data-aos-offset="400">
        <div class="container mt-5 bg-gradient p-5">
            <div class="row align-items-center text-center">
            <div class="col-xs-12 order-lg-1 col-lg-12 bg-map2-text" style="text-align: left; margin:0 auto;">
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
                <p class="h6  mt-3 fontstyle" style="color: white; text-align:center; font-size:1.2rem;">車、電車、バス、シャトルバス、タクシーでご来場の方</p>
                <br>
                <div class="arrow" style="margin:0 auto">
                    <div class="down"> </div>
                </div>
                <a href="https://www.happo-en.com/access/" target="_blank" class="p-5 h3" style="white-space: nowrap; ">
                <p style="text-align:center; color:aqua;" class="text_link_under fontstyle">アクセスの詳細</p></a>
          </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  @include('footer')

<!--スクロールアニメーションを読み込み -->
<script type="text/javascript" src="{{ asset('js/scroll.js') }}"></script>

<!--countdownを読み込み -->
<script type="text/javascript" src="{{ asset('js/countdown.js') }}"></script>

<!--ヘッダー画像のテキストアニメーションを読み込み -->
<script type="text/javascript" src="{{ asset('js/animation_for_guide.js') }}"></script>

<!-- ブラウザバッグ禁止コード 本番反映時-->
<!-- <script type="text/javascript" src="{{ asset('js/not_windows_back.js') }}"></script> -->

</body>
</html>
