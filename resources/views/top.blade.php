
<!DOCTYPE html>
<html lang="ja">
@include('site_header')
<body>
<!--   
  <section class="example bg-top" style="max-width: 1000px;
    margin: auto;">
        <div class="row">
            <h1 class="ml3">Welcome</h1>
            <h1 class="ml4" style="margin-top: 100px; padding-top:100px;  white-space: nowrap;">to our Wedding</h1>
        </div>
  </section>    -->

    <section class="p-4 pb-5">
        <div class="container mt-5 bg-dairiseki_top" data-aos="fade-down" data-aos-delay="200" data-aos-duration="3000" data-aos-offset="200">
            <div class="row align-items-center text-center pt-5">
                <div class="col-xs-12 order-lg-1 col-lg-12 ">

                <!-- <a href="{{ url('/sub') }}">sub</a> -->

                    @if ($errors->any())
                    <div style="color:red; font-size:1.3rem;">
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
                    <h2 class="mb-3"><span class="event-msg pink_gold" style="font-style: italic; font-size: 2.0rem;">~   招待状   ~</span></h2>
                        <label for="name" class="" style="font-size:1.8rem;">
                            お名前(かな)
                        </label>
                        <div class="row text-center">
                            <p class="mt-2 webfont" style="font-size:1.1rem;">※フルネームをひらがなでスペースを空けずに入力して下さい。</p>
                        </div>

                        <input id="loginusername" name="loginusername" class="form-control shadow-lg bg-white rounded" value="{{ old('loginusername') }}" style="text-align: center;" type="text" placeholder="例)さとうゆうや">
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

<!-- 背景に星を降らせるアニメーションを読み込み -->
<script type="text/javascript" src="{{ asset('js/star.js') }}"></script>

<!--スクロールアニメーションを読み込み -->
<script type="text/javascript" src="{{ asset('js/scroll.js') }}"></script>

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

