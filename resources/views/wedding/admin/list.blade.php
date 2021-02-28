@extends('layout')
@section('title', '招待状')
@section('content')
<div class="row">
    <div class="col-lg-12 col-xs-12" >
        @if($humanFlg == 1)
        <h4 class="text-info" style="text-align:center;">参加者一覧(<span class="text-danger">ゆうや</span> )</h4>


        <form method="post" action="{{ url('admin/logout') }}">
        @csrf 
        <input type="submit" value="ログアウト" />
        </form>




        
        <div class="h4" style="text-align: center;">
            <div>
                    計：<span class="text-danger">{{ $friendCount }}</span>人
            </div>
            <div>
                    (出席<span class="text-danger">{{ $attendCount }}</span>:
                    欠席<span class="text-danger">{{ $friendCount-$attendCount }}</span>)
            </div>
        </div>
        @elseif($humanFlg == 2)
        <h4 class="text-info" style="text-align:center;">参加者一覧(<span class="text-danger">さとこ</span> )</h4>
        <div class="h4" style="text-align: center;">
            <div>
                    計：<span class="text-danger">{{ $friendCount }}</span>人
            </div>
            <div>
                    (出席<span class="text-danger">{{ $attendCount }}</span>:
                    欠席<span class="text-danger">{{ $friendCount-$attendCount }}</span>)
            </div>
        </div>
        @elseif($friendCount == 0)
        <h2 class="text-info" style="text-align:center;">まだ回答されていません。</span></h2>
        </div>
        </div>
        @endif

        @if(session('flash_message'))
            <p class="text-danger">
            {{ session('flash_message') }}
            </p>
        @endif
        <button type="button" class="btn btn-primary mb-3 m-3" onclick="location.href='/admin/wedding/create'">
        出席情報追加登録
        </button>
        <button type="button" style="float:right;" class="btn btn-warning mb-3 m-3" onclick="location.href='/admin/wedding/loginuser/create'">
        サイト側：ユーザー登録/一覧
        </button>
        <table class="table table-striped table-hover table-condensed col-lg-12 col-xs-12 col-sm-12">
            <tr>
                <th style="white-space: nowrap;">ID</th>
                <th style="white-space: nowrap;">名前(かな)</th>
                <th style="white-space: nowrap;">参加/不参加</th>
                <th style="white-space: nowrap;">{{ __('messages.list.phone_num') }}</th>
                <th style="white-space: nowrap;">メール</th>
                <th style="white-space: nowrap;">お連れ様</th>
                <th style="white-space: nowrap;">アレルギー</th>
                <th style="white-space: nowrap;">{{ __('messages.button.detail') }}</th>
                <th style="white-space: nowrap;">席次表</th>
                <th style="white-space: nowrap;">お渡し代</th>
                <th style="white-space: nowrap;">{{ __('messages.button.edit') }}</th>
            </tr>
            @foreach ($weddings as $wedding)
            <tr>
                <td>{{ $wedding->id }}</td>
                <td>{{ $wedding->full_name }}</td>
                @if($wedding->attend)
                <td style="color: blue;">〇</td>
                @else
                <td style="color: red;">×</td>
                @endif
                <td style="word-break: break-all;">{{ $wedding->phone_num }}</td>
                <td style="word-break: break-all;">{{ $wedding->mail }}</td>
                <td>{{ $wedding->partner }}</td>
                <td>{{ $wedding->allergies }}</td>
                <td><button type="button" class="btn btn-success" onclick="location.href='/admin/wedding/{{ $wedding->id }}'">詳細</button></td>
                <td>
                    @if($wedding->listchart)
                    <strong style="color: blue;"> 〇</strong>
                    @else
                    <strong> 未</strong>
                    @endif
                </td>
                <td>
                    @if($wedding->present)
                    <strong>￥{{ $wedding->present }}</strong>
                    @else
                    <strong></strong>
                    @endif
                </td>
                <td><button type="button" class="btn btn-info" onclick="location.href='/admin/wedding/edit/{{ $wedding->id }}'">編集</button></td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection('content')
