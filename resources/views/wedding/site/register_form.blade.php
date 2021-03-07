<section class="mt-5 p-2 mb-5" data-aos="fade-down" data-aos-delay="100" data-aos-duration="800" data-aos-offset="400">
        <div class="container mt-5 w-100 h-100">
      
          <div class="col-xs-12 order-lg-1 col-lg-12 bg-white" style="box-shadow: 20px 10px 20px #cccccc; font-size:1.5rem">
            <div class="row">
                <div class="col-xs-12 text-center col-lg-12 mt-5">
                    <p class="h4 register-msg dark_gold">
                    お手数ですが出席情報をご入力して下さい
                    <br>
                    <br>
                     <span class="strong-msg">2021.2.28</span>
                     <br>
                     <br>
                     までにご返信をお願い申し上げます
                    </p>
                </div>
            </div>

            <hr>
            
          <form method="POST" action="{{ route('store') }}">
            @csrf
            <div class="form-group mt-5 clearfix">
                <div class="row ">
                    <div class="col-xs-6 col-lg-6 text-center attendance" style="float:left; text-align: center; ">
                        <input class="responsive_label p-3 form-control" type="radio" name="attend" value="1" id="attendance" checked="">
                        <label class="label col-xs-6 col-lg-6" for="attendance" style="font-size: 1.7rem;">出席<span class="en_attend_decline">attend</span></label>
                    </div>       
                    <div class="col-xs-6 col-lg-6 text-center absence" style="float:left; text-align: center;">
                        <input class="responsive_label p-3 form-control" type="radio" name="attend" value="0" id="absence">
                        <label class="label col-xs-6 col-lg-6" for="absence">欠席<span class="en_attend_decline">decline</span></label>
                    </div>
                </div>
            </div>
            <hr>
            <div class="form-group mt-5 clearfix">
                <div class="row ">
                    <div class="col-xs-6 col-lg-6 text-center man" style="float:left; text-align: center;">
                        <input class="responsive_label_human p-3 form-control" type="radio" name="human" value="1" id="man" checked="">
                        <label class="label col-xs-6 col-lg-6" for="man">新郎のご友人様<span class="en_attend_decline" style="font-size: 1.5rem;">佐藤 佑也</span></label>
                    </div>       
                    <div class="col-xs-6 col-lg-6 text-center woman" style="float:left; text-align: center;">
                        <input class="responsive_label_human p-3 form-control" type="radio" name="human" value="2" id="woman">
                        <label class="label col-xs-6 col-lg-6" for="woman">新婦のご友人様<span class="en_attend_decline" style="font-size: 1.5rem;">湯川智子</span></label>
                    </div>
                </div>
            </div>
            <hr>

            <div class="form-group mt-5 clearfix">
                <span class="badge badge-danger">必須</span>
                <label for="name" class="ml-3">
                    名前(漢字)
                </label>
                <div class="clearfix row">
                    <input id="name" name="name" class="form-control shadow-lg col-xs-6 bg-white rounded harf-input" value="{{ old('name') }}" type="text" placeholder="(姓)">
                    <input id="name_low" name="name_low" class="form-control shadow-lg col-xs-5 ml-1 round harf-input" value="{{ old('name_low') }}" type="text"placeholder="(名)">
                </div> 
                @if ($errors->has('name'))
                <div class="text-danger" style="font-size:1.1rem;">
                    {{ $errors->first('name') }}
                </div>
                @endif
                @if ($errors->has('name_low'))
                <div class="text-danger" style="font-size:1.1rem;">
                    {{ $errors->first('name_low') }}
                </div>
                @endif
            </div>
            
            <div class="form-group mt-5 clearfix">
                <span class="badge badge-danger">必須</span>
                <label for="name_kana" class=" ml-3">
                    名前(かな)
                </label>
                <div class="clearfix row">
                <input id="name_kana" name="name_kana" class="form-control shadow-lg col-xs-6 bg-white rounded harf-input" value="{{ old('name_kana') }}" type="text" placeholder="(せい)">
                <input id="name_kana_low" name="name_kana_low" class="form-control shadow-lg col-xs-5 ml-1 bg-white rounded harf-input" value="{{ old('name_kana_low') }}" type="text"placeholder="(めい)">
                </div>
                @if ($errors->has('name_kana'))
                <div class="text-danger" style="font-size:1.1rem;">
                    {{ $errors->first('name_kana') }}
                </div>
                @endif
                @if ($errors->has('name_kana_low'))
                <div class="text-danger" style="font-size:1.1rem;">
                    {{ $errors->first('name_kana_low') }}
                </div>
                @endif
            </div>
            <div class="form-group mt-5">
                <span class="badge badge-danger">必須</span>
                <label for="post_num" class=" ml-3">
                    郵便番号 
                </label>
                <div class="row">
                <input id="post_num" name="post_num" class="form-control shadow-lg col-xs-12 bg-white rounded" value="{{ old('post_num') }}" type="text" placeholder="(1112222)">
                <span class="" style="font-size:1.2rem;">※ハイフン（-） なしで入力してください。</span>
                </div>
                @if ($errors->has('post_num'))
                <div class="text-danger" style="font-size:1.1rem;">
                    {{ $errors->first('post_num') }}
                </div>
                @endif
            </div>
            <div class="form-group mt-5">
                <span class="badge badge-danger">必須</span>
                <label for="adress" class=" ml-3">
                    住所
                </label>
                <div class="row">
                <input id="adress" name="adress" class="form-control shadow-lg col-xs-12  bg-white rounded" value="{{ old('adress') }}" type="text" placeholder="都道府県　市町村　番地">
                </div>
                @if ($errors->has('adress'))
                    <div class="text-danger" style="font-size:1.1rem;">
                        {{ $errors->first('adress') }}
                    </div>
                @endif
            </div>
            <div class="form-group mt-5">
                <label for="building" class="">
                    建物名
                </label>
                <div class="row">
                <input id="building" name="building" class="form-control shadow-lg col-xs-12  bg-white rounded" value="{{ old('building') }}" type="text" placeholder="アパート・マンション名・その他">
                </div>
                @if ($errors->has('building'))
                    <div class="text-danger" style="font-size:1.1rem;">
                        {{ $errors->first('building') }}
                    </div>
                @endif
            </div>
            <div class="form-group mt-5">
                <span class="badge badge-danger">必須</span>
                <label for="phone_num" class=" ml-3">
                    電話番号 
                </label>
                <div class="row">
                <input id="phone_num" name="phone_num" placeholder="11122223333" class="form-control shadow-lg col-xs-12  bg-white rounded" value="{{ old('phone_num') }}" type="text">
                <span class="" style="font-size:1.2rem;">※ハイフン（-） なしで入力してください。</span>
                </div>
                @if ($errors->has('phone_num'))
                    <div class="text-danger" style="font-size:1.1rem;">
                        {{ $errors->first('phone_num') }}
                    </div>
                @endif
            </div>
            <div class="form-group mt-5">
                <span class="badge badge-danger">必須</span>
                <label for="mail" class=" ml-3">
                    メールアドレス
                </label>
                <div class="row">
                <input id="mail" name="mail" class="form-control shadow-lg col-xs-12  bg-white rounded" value="{{ old('mail') }}" type="text" placeholder="happouenn@happouenn.com">
                </div>
                @if ($errors->has('mail'))
                    <div class="text-danger" style="font-size:1.1rem;">
                        {{ $errors->first('mail') }}
                    </div>
                @endif
            </div>

            <div class="form-group mt-5 clearfix">
                <label for="name" class="">
                    お連れ様のお名前(漢字)
                </label>
                <div class="clearfix row">
                <input id="partner_name_one" name="partner_name_one" class="form-control shadow-lg col-xs-3 bg-white rounded one-third-input" value="{{ old('partner_name_one') }}" type="text" placeholder="佐藤太郎">
                <input id="partner_name_two" name="partner_name_two" class="form-control shadow-lg col-xs-3 ml-1 round one-third-input" value="{{ old('partner_name_two') }}" type="text"placeholder="佐藤花子">
                <input id="partner_name_three" name="partner_name_three" class="form-control shadow-lg col-xs-3 ml-1 round one-third-input" value="{{ old('partner_name_three') }}" type="text"placeholder="佐藤一郎">
                </div> 
                <span class="" style="font-size:1.2rem;">※お連れ様がいらっしゃる場合はお名前をご記入ください</span>
                @if ($errors->has('partner_name_one'))
                    <div class="text-danger" style="font-size:1.1rem;">
                        {{ $errors->first('partner_name_one') }}
                    </div>
                @endif
                @if ($errors->has('partner_name_two'))
                    <div class="text-danger" style="font-size:1.1rem;">
                        {{ $errors->first('partner_name_two') }}
                    </div>
                @endif
                @if ($errors->has('partner_name_three'))
                    <div class="text-danger" style="font-size:1.1rem;">
                        {{ $errors->first('partner_name_three') }}
                    </div>
                @endif
            </div>

            <div class="form-group mt-5">
                <label for="allergies" class="">
                    アレルギー
                </label>
                <div class="row">
                    <input id="allergies" name="allergies" class="form-control shadow-lg col-xs-12 bg-white rounded " value="{{ old('allergies') }}" type="text" placeholder="(例)　本人:リンゴ,　夫:イチゴ">
                    <span class="" style="font-size:1.2rem;">※お連れ様の分も記入してください</span>
                </div>
                @if ($errors->has('allergies'))
                    <div class="text-danger" style="font-size:1.1rem;">
                        {{ $errors->first('allergies') }}
                    </div>
                @endif
            </div>

            <div class="form-group mt-5">
                <label for="content" class="">
                    メッセージ
                </label>
                <textarea id="content" name="content" class="form-control shadow-lg p-3  bg-white rounded" rows="6">{{ old('content') }}</textarea>
                @if ($errors->has('content'))
                    <div class="text-danger" style="font-size:1.1rem;">
                        {{ $errors->first('content') }}
                    </div>
                @endif
            </div>
            
            <div class="form-group m-5 text-center pb-1">
                <button type="submit" class="btn btn-info">
                    送信する
                </button>
            </div>
          </form>
            <hr>
            <p class="common_font" style="font-family: serif,'arial black';">※一度送信してしまうとご登録内容を修正できなくなります</p>
            <p class="common_font" style="font-family: serif,'arial black';">※ご不明点、またはご登録内容の訂正がしたい場合はラインや電話にてご連絡ください</p>
      </div>
    </div>
  </section>
