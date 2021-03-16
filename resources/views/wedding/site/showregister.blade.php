<!DOCTYPE html>
<html lang="ja">
@include('site_header')

<body class="body_guide_showregister">

    <section class="mt-4 p-4 mb-3">
        <div class="container mt-5 mb-2 bg_guide_showregister p-2" data-aos="fade-down" data-aos-delay="70" data-aos-duration="800" data-aos-offset="200">
            <div class="row align-items-center text-center">
                <div class="col-xs-12 order-lg-1 col-lg-12 pt-4 pb-4 show-msg">
                    <p style="font-size:1.5rem;">ご登録情報の確認</p>
                    <!-- <img src="{{ asset('img/竹アイコン1.svg') }}" alt="" class="m-5" width="25"> -->
                    <div class="p-1 mt-3" style="text-align: center;">
                        <a href="{{ route('showregister') }}" class="btn btn-blue text-nowrap">ご登録情報へ</a>
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

<!--スクロールアニメーションを読み込み -->
<script type="text/javascript" src="{{ asset('js/scroll.js') }}"></script>

</body>
</html>
