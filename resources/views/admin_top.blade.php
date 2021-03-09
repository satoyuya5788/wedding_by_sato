
@extends('layout')
@section('title', '招待状')
@section('content')

    <section class="mt-1 p-2 pb-5">
        <div class="container mt-5 bg-dairiseki2 " data-aos="fade-in" data-aos-delay="70" data-aos-duration="800" data-aos-offset="100">
            <div class="row align-items-center text-center pt-5">
                <div class="col-xs-12 order-lg-1 col-lg-12 ">
                    @if ($errors->any())
                    <div style="color:red; font-size:1.5rem;">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    </div>
                    @endif
                    
                    <form method="post" action="{{ route('admin_login') }}">
                    @csrf 

                    <div class="form-group mt-5" >
                        <h2 class="mb-3"><span class="pink_gold" style="font-style: italic;">出席情報管理ログイン画面</span></h2>
                        <label for="name" class="mt-3" style="font-size:2.5rem;">
                            ユーザーID
                        </label>
                        <div class="row">

                            <input id="admin_user" style="text-align:center;" name="admin_user" class="form-control shadow-lg col-xs-12 bg-white rounded center-block" value="{{ old('admin_user') }}" type="text" >
                        </div>
                        <label for="name" class="" style="font-size:2.5rem;">
                            パスワード
                        </label>
                        <div class="row">

                            <input id="admin_password" style="text-align:center;" name="admin_password" class="form-control shadow-lg col-xs-12 bg-white rounded center-block" value="{{ old('admin_password') }}" type="text">
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
@endsection