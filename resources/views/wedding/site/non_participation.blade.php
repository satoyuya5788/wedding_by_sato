<!DOCTYPE html>
<html lang="ja">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=yes">  
  <meta name="description" content="">
  <meta name="author" content="">

  <title>八芳園～招待状～</title>

  <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

  <!-- テキストアニメーション↓ -->
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic' rel='stylesheet' type='text/css'>  
  

  <!-- Custom styles for this template -->
  <link href="{{ asset('css/one-page-wonder.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/index.css') }}" rel="stylesheet">

  <!-- ↓AOS -->
  <link href="{{ asset('css/aos.css') }}" rel="stylesheet">

  <!-- フォントSP版対応 -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho+B1&display=swap" rel="stylesheet">  
  
  <script type="text/javascript" src="{{ asset('js/jquery.textAnimation.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/jquery.textAnimation.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/jquery.textillate.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/jquery.fittext.js') }}"></script>
  
  
  <!-- Bootstrap core JavaScript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
  
  <script type="text/javascript" src="{{ asset('js/index_jquery.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/index.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/jquery.raty.js') }}"></script>

    <!-- テキストアニメーション↓ -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>  
  
  <!-- スクロールアニメーション↓ -->
  <script type="text/javascript" src="{{ asset('js/aos.js') }}"></script>

</head>

<body>

<video src="{{ asset('img/countDown_video.mp4') }}" autoplay playsinline muted loop style="opacity:0.7;"></video>
  
    <section class="mt-3 p-4 pt-2">
        <div class="container box_msg p-5" style="box-shadow: 20px 20px 20px #ddd8d8;" data-aos="fade-down" data-aos-delay="200" data-aos-duration="3000" data-aos-offset="200" >
            <div class="col-xs-12 order-lg-1 col-lg-12 text-center webfont" style="font-size:0.8rem; display:inline-block;" >
                    <p class="thanks-msg">
                    ご入力ありがとうございました。
                    </p>
                    <p class="thanks-msg">
                    結婚式ではお会いできませんが、
                    </p>
                    <p class="thanks-msg">
                    私たちのこれからを温かく見守ってくださるよう
                    </p>
                    <p class="thanks-msg" style="white-space: nowrap;">
                    お願い申し上げます。
                    </p>
                    <br>
                    <br>
                    <p class="thanks-msg">
                        心ばかりではございますが、
                    </p>
                    <p class="thanks-msg">
                        前撮りの写真をお送りいたします。
                    </p>
            </div>
        </div>
    </section>

    @if(session("simple_auth"))
        <form method="post" action="{{ url('logout') }}">
        @csrf 
        <input type="submit" value="ログアウト" />
        </form>

        <div class="m-1 mt-5 mb-5 sticky-top p-1" style="text-align: right;">
            <a href="{{ route('site') }}" class="btn btn-primary">招待状へ戻る</a>
        </div>
    @endif
  

        <p class="mb-2 h6 fontstyle" style="color: white; text-align:center; font-size:1.2rem;">ダウンロードしたい場合は</p>
        <p class="h6  mt-3 fontstyle" style="color: white; text-align:center; font-size:1.2rem;">写真を長押しして下さい</p>
        <br>
        <div class="arrow" style="margin:0 auto">
            <div class="down"> </div>
        </div>

  
    <section class="p-2 pt-5">
        <div class="container p-5" data-aos="fade-up" data-aos-delay="70" data-aos-duration="500" data-aos-offset="200">
            <div class="row align-items-center text-center" >
                <div class="col-xs-12 order-lg-1 col-lg-12 bg-dairiseki-text" >
                    <img id="image-main" class="img-fluid" src="{{ asset('img/line_87933838578839.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="mt-3 p-2 pt-5">
        <div class="container p-5" data-aos="fade-up" data-aos-delay="70" data-aos-duration="500" data-aos-offset="200">
            <div class="row align-items-center text-center" >
                <div class="col-xs-12 order-lg-1 col-lg-12 bg-dairiseki-text" >
                    <img id="image-main" class="img-fluid" src="{{ asset('img/line_1078987987022302.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="mt-3 p-2 pt-5">
        <div class="container p-5" data-aos="fade-up" data-aos-delay="70" data-aos-duration="500" data-aos-offset="200">
            <div class="row align-items-center text-center" >
                <div class="col-xs-12 order-lg-1 col-lg-12 bg-dairiseki-text" >
                    <img id="image-main" class="img-fluid" src="{{ asset('img/line_46120250566561.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="mt-3 p-2 pt-5">
        <div class="container p-5" data-aos="fade-up" data-aos-delay="70" data-aos-duration="500" data-aos-offset="200">
            <div class="row align-items-center text-center" >
                <div class="col-xs-12 order-lg-1 col-lg-12 bg-dairiseki-text" >
                    <img id="image-main" class="img-fluid" src="{{ asset('img/line_1189422905858979.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>
  
  <!-- Footer -->
  <footer class="py-5 bg-black">
    <div class="container">
      <p class="m-0 text-center text-white small">Copyright &copy; sato yuya 2021</p>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 
<script>
    AOS.init();
</script>

<!-- ブラウザバッグ禁止コード 本番反映時-->
<!-- <script type="text/javascript" src="{{ asset('js/not_windows_back.js') }}"></script> -->
</body>
</html>
