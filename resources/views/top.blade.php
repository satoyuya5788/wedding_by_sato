
<!DOCTYPE html>
<html lang="ja">
@include('site_header')
<body class="body_index">
    <section class="p-4 pb-5">
        <div class="container mt-5 bg-dairiseki_top" data-aos="fade-down" data-aos-delay="200" data-aos-duration="3000" data-aos-offset="200">
            <div class="row align-items-center text-center pt-5">
                <div class="col-xs-12 order-lg-1 col-lg-12 ">

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
                        <button type="submit" class="btn btn-primary" style="box-shadow: 8px 8px 8px #ffcdf3;">
                            ログイン
                        </button>
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </section>

  <!-- Footer -->
  @include('footer')

<!-- 背景に星を降らせるアニメーションを読み込み -->
<script type="text/javascript" src="{{ asset('js/star.js') }}"></script>

<!--スクロールアニメーションを読み込み -->
<script type="text/javascript" src="{{ asset('js/scroll.js') }}"></script>

</body>
</html>

