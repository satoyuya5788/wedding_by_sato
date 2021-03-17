<!DOCTYPE html>
<html lang="ja">
@include('site_header')

<!-- 案内状専用のCSS読み込み！桜降らせるアニメーション！ -->
<link href="{{ asset('css/bloom_guide_register.css') }}" rel="stylesheet">

<body class="body_guide_showregister cherry-blossom-container_register">

    <section class="mt-4 p-4 mb-3">
        <div class="container mt-5 mb-2 bg_guide_showregister p-2" data-aos="fade-down" data-aos-delay="70" data-aos-duration="800" data-aos-offset="200">
            <div class="row align-items-center text-center">
                <div class="col-xs-12 order-lg-1 col-lg-12 pt-4 pb-4 show-msg">
                    <p style="font-size:2.0rem;" class="mb-2 p-2">ご登録情報</p>
                    <img src="{{ asset('img/巻物のフリーアイコン (1).svg') }}" alt="" width="30" class="mb-2">
                    <table id="registerdData" class="mb-5" style="margin:auto; font-size:1.1rem;">
                        <tr class="m-2">
                            <th>出欠</th>
                            <td>:</td>
                            @if($registerdData->attend == 1)
                            <td>出席</td>
                            @else
                            <td>欠席</td>
                            @endif
                        </tr>
                        <tr class="m-2">
                            <th>ご友人側</th>
                            <td>:</td>
                            @if($registerdData->human == 1)
                            <td>佐藤 佑也(新郎)</td>
                            @else
                            <td>湯川 智子(新婦)</td>
                            @endif
                        </tr>
                        <tr class="m-2">
                            <th>お名前</th>
                            <td>:</td>
                            <td>{{ $registerdData->name }} {{ $registerdData->name_low }} 様</td>
                        </tr>
                        <tr class="m-2">
                            <th>郵便番号</th>
                            <td>:</td>
                            <td>{{ $registerdData->post_num }}</td>
                        </tr>
                        <tr class="m-2">
                            <th>住所</th>
                            <td>:</td>
                            <td>{{ $registerdData->adress }}</td>
                        </tr>
                        <tr class="m-2">
                            <th>建物名</th>
                            <td>:</td>
                            <td>{{ $registerdData->building }}</td>
                        </tr>
                        <tr class="m-2">
                            <th>電話番号</th>
                            <td>:</td>
                            <td>{{ $registerdData->phone_num }}</td>
                        </tr>

                        @if($partnerCount == 1)
                        <tr class="m-2">
                            <th>お連れ様</th>
                            <td>:</td>
                            <td>{{ $registerdData->partner_name_one }}</td>
                        </tr>
                        @elseif($partnerCount == 2)
                        <tr class="m-2">
                            <th>お連れ様</th>
                            <td>:</td>
                            <td>{{ $registerdData->partner_name_one }}</td>
                        </tr>
                        <tr class="m-2">
                            <th></th>
                            <td>:</td>
                            <td>{{ $registerdData->partner_name_two }}</td>
                        </tr>
                        @elseif($partnerCount == 3)
                        <tr class="m-2">
                            <th>お連れ様</th>
                            <td>:</td>
                            <td>{{ $registerdData->partner_name_one }}</td>
                        </tr>
                        <tr class="m-2">
                            <th></th>
                            <td>:</td>
                            <td>{{ $registerdData->partner_name_two }}</td>
                        </tr>
                        <tr class="m-2">
                            <th></th>
                            <td>:</td>
                            <td>{{ $registerdData->partner_name_three }}</td>
                        </tr>
                        @else
                        <tr class="m-2">
                            <th>お連れ様</th>
                            <td>:</td>
                            <td></td>
                        </tr>
                        @endif

                        <tr class="m-2">
                            <th>アレルギー</th>
                            <td>:</td>
                            <td>{{ $registerdData->allergies }}</td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </section>

    <div class="m-4 mb-5 p-1" style="text-align: center;">
        <a href="/site/wedding/guidehappouen" class="btn btn-pink text-nowrap">案内状へ戻る</a>
    </div>

  <!-- Footer -->
  @include('footer')

<!--桜降らせるJSを読み込み -->
<script type="text/javascript" src="{{ asset('js/bloom_guide_register.js') }}"></script>

<!--スクロールアニメーションを読み込み -->
<script type="text/javascript" src="{{ asset('js/scroll.js') }}"></script>

</body>
</html>
