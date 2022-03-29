@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/schedule.css') }}"> <!-- products.cssと連携 -->
@section('content')

<div class="side"> <!-- サイドバー -->
            <nav class="sidebar">
            <p><a href="{{ url('home') }}"><h3>ホーム画面に戻る</h3></a></p>
                <p><a href="{{ url('list') }}"><h3>保存リストへ</h3></a></p>
                <p><a href="{{ url('search') }}"><h3>リスト検索へ</h3></a></p>
                <p><a href="{{ url('store') }}"><h3>画像登録へ</h3></a></p>
                <p><a href="{{ url('create') }}"><h3>新規作成</h3></a></p>
            </nav>
            <div class="logout_buttom">
                <form action="{{ route('logout') }}" method="post">
                    @csrf <!-- CSRF保護 -->
                    <input type="submit" value="ログアウト"> <!-- ログアウトしてログイン画面に戻る -->
                </form>
            </div>
        </div>
<!-- 新規スケジュール作成パネル… -->
<div class="panel-body">
    <!-- バリデーションエラーの表示 -->
    @include('common.errors')
        <div class="container-fluid">
            <div class="row">

            <!--↓↓ 検索フォーム ↓↓-->
            <div class="col-sm-4" style="padding:20px 0; padding-left:0px;">
                <form class="form-inline" action="{{url('/search')}}" method="GET">
                    <div class="form-group">
                    <input type="text" name="keyword" value="{{$keyword}}" class="form-control" placeholder="スケジュール名を入力してください">
                    </div>
                    <input type="submit" value="検索" class="btn btn-info">
                </form>
            </div>
            <!--↑↑ 検索フォーム ↑↑-->

            @if($schedules->count())

                <table border="1">
                    @foreach ($schedules as $schedule)
                    <tr>
                        <td>{{ $schedule->schedule_name}}</td>
                        <td style="width:10%"><a href="schedule/{{ $schedule->id }}" class="button">表示</a></td>
                    </tr>
                    @endforeach
                </table>

            @else
            <p>見つかりませんでした。</p>
            @endif


        </div>
    </div>
</div>
@endsection
