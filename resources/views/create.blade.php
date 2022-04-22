@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/schedule.css') }}"> <!-- schedule.cssと連携 -->
@section('content')

<div class="header-logo-menu">
  <div id="nav-drawer">
      <input id="nav-input" type="checkbox" class="nav-unshown">
      <label id="nav-open" for="nav-input"><span></span></label>
      <label class="nav-unshown" id="nav-close" for="nav-input"></label>
      <div id="nav-content">
          <ul>
              <li><a href="{{ url('home') }}"><h3>ホーム画面に戻る</h3></a></li>
              <li><a href="{{ url('list') }}"><h3>保存リストへ</h3></a></li>
              <li><a href="{{ url('search') }}"><h3>リスト検索へ</h3></a></li>
              <li><a href="{{ url('store') }}"><h3>画像一覧</h3></a></li>
              <li><a href="{{ url('create') }}"><h3>新規作成</h3></a></li>
          </ul>
      </div>
      <script>
        $(function() {
         $('#nav-content li a').on('click', function(event) {
        $('#nav-input').prop('checked', false);
        });
        });
      </script>
    </div>
  </div>
<!-- 新規スケジュール作成パネル… -->
<div class="panel-body">
    <!-- バリデーションエラーの表示 -->
    @include('common.errors')


  <h1>新規スケジュール作成</h1>
     <form action="{{ url('create') }}" method="post">
                {{ csrf_field() }}
                <div class='form-group'>
                    <div class="schedule">
                    {{ Form::select('type',$types, null, ['class' => 'form', 'id' => 'type']) }}
                    </div>
                    <div class="schedule">
                        <input type="text" name="student_name" id="student_name" class="form-control" size="15" placeholder="生徒名を入力">
                    </div>
                    <div class="schedule">
                        <input type="text" name="schedule_name" id="schedule_name" class="form-control" size="15" placeholder="スケジュール名を入力">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="image0" id="image0" class="form-control" size="15" placeholder="正しい画像番号を入力">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="image1" id="image1" class="form-control" size="15" placeholder="正しい画像番号を入力してください">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="image2" id="image2" class="form-control" size="15" placeholder="正しい画像番号を入力してください">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="image3" id="image3" class="form-control"  size="15"placeholder="正しい画像番号を入力してください">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="image4" id="image4" class="form-control" size="15" placeholder="正しい画像番号を入力してください">
                    </div>
            </div>
            <div class="form-group">
                    <div class="button">
                        <button type="submit" >
                            <i class="fa fa-plus"></i> 作成する
                        </button>
                    </div>
            </div>
    </form>
    <h2>保存画面一覧</h2>
    <div class="table_main">
        <div class="image-list">
            <table>
               <!--  <thead>
                    <tr  class="cell" >
                        <th >画像番号</th>
                        <th >画像</th>
                    </tr>
                </thead> -->
                <tbody >
                @foreach($images as $image)
                <tr class="cell">
                    <td >{{$image->id}}</td>
                    <td ><img src="{{ asset('storage/' . $image->image) }}" alt="image" ><td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
