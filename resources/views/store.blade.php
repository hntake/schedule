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
<div class="panel-body">
    <!-- バリデーションエラーの表示 -->
    @include('common.errors')


<h1>保存画面一覧</h1>

    <div class="store-list">
        @foreach($images as $image)
        <tr>
            <td><a href="{{ route('select_picture', $image->id) }}"><img src="{{ asset('storage/' . $image->image) }}" alt="image" style="width: 100px; height: auto;"/></a><td>
        </tr>
        @endforeach
    </div>
    <!--写真アップロード入力エリア-->
    <div class="store">
        <form action="{{ url('store') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
            <div class='form-group'>
                <div class="col-sm-6">
                    <input type="file" name="image" id="image" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <div class="button">
                    <button type="submit" >
                        <i class="fa fa-plus"></i> 保存する
                    </button>
                </div>
           </div>
        </form>
    </div>
</div>
@endsection
