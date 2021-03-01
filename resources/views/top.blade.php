
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
<!--   
  <section class="example bg-top" style="max-width: 1000px;
    margin: auto;">
        <div class="row">
            <h1 class="ml3">Welcome</h1>
            <h1 class="ml4" style="margin-top: 100px; padding-top:100px;  white-space: nowrap;">to our Wedding</h1>
        </div>
  </section>    -->

    <section class="mt-5 p-2 pb-5">
        <div class="container mt-5 bg-dairiseki_top " data-aos="fade-in" data-aos-delay="200" data-aos-duration="3000" data-aos-offset="200">
            <div class="row align-items-center text-center pt-5">
                <div class="col-xs-12 order-lg-1 col-lg-12 ">

                <!-- <a href="{{ url('/sub') }}">sub</a> -->

                    @if ($errors->any())
                    <div style="color:red; font-size:1.5rem;">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    </div>
                    @endif

                    <form method="post" action="{{ url('wedding') }}">
                    @csrf 

                    <div class="form-group mt-5" >
                    <h2 class="mb-5"><span class="event-msg pink_gold" style="font-style: italic;">~   招待状   ~</span></h2>
                        <label for="name" class="" style="font-size:2.5rem;">
                            お名前(かな)
                        </label>
                        <div class="row">
                            <p class="mt-2" style="font-size:1.3rem; font-family: serif,'arial black';">※フルネームをひらがなでスペースを空けずに入力して下さい。</p>
                            <input id="loginusername" style="text-align:center;" name="loginusername" class="form-control shadow-lg col-xs-12 bg-white rounded center-block" value="{{ old('loginusername') }}" type="text" placeholder="例)さとうゆうや">
                        </div>
                    </div>

                    <div class="form-group m-5 text-center pb-1">
                        <button type="submit" class="btn btn-primary">
                            ログイン
                        </button>
                    </div>            

                    </form>
                </div>
            </div>
        </div>
    </section>





  <!-- Footer -->
  <footer class="py-3 bg-black">
    <div class="container-fluid">
      <p class="m-0 text-center text-white small">Copyright &copy; sato yuya 2021</p>
    </div>
  </footer>

<script>
    function starMaker(n) {
    var star = document.createElement("div");
    console.log(star);
    
    star.className = "star";
    star.textContent = "★";
    for(var i = 0; i < n; i++) {
        starSet(star);
    }
}
//星のセッティングをする関数。
function starSet(clone) {
    var starClone = clone.cloneNode(true);
    var starStyle = starClone.style;

    //星の位置（left）、アニメーションの遅延時間（animation-delay）、サイズ（font-size）をランダムで指定
    starStyle.left = 100 * Math.random() + "%";
    starStyle.animationDelay = 15 * Math.random() + "s";
    starStyle.fontSize = ~~(8 * Math.random() + 2) + "px";
    document.body.appendChild(starClone);

    //星一つのアニメーションが終わったら新しい星を生成
    starClone.addEventListener("animationend", function() {
        this.parentNode.removeChild(this);
        var star = document.createElement("div");
        star.className = "star";
        star.textContent = "★";
        starSet(star);
    }, false)
}
//使用例。星を50個ふらせます。
starMaker(60);
</script>

<script>
    AOS.init();
</script>

<script>
var textWrapper = document.querySelector('.ml3');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml3 .letter',
    opacity: [0,1],
    easing: "easeInOutQuad",
    duration: 2000,
    delay: (el, i) => 150 * (i+1)
  }).add({
    targets: '.ml3',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });

var textWrapper = document.querySelector('.ml4');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml4 .letter',
    opacity: [0,1],
    easing: "easeInOutQuad",
    duration: 1500,
    delay: (el, i) => 150 * (i+1)
  }).add({
    targets: '.ml4',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1200
  });
</script>

<!-- ブラウザバッグ禁止コード 本番反映時-->
<!-- <script type="text/javascript" src="{{ asset('js/not_windows_back.js') }}"></script> -->

</body>
</html>

