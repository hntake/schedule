@extends('layouts.app')
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/schedule.css') }}"> <!-- home.cssと連携 -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script> <!-- jQueryのライブラリを読み込み -->
    <script src="{{ asset('/js/home.js') }}"></script> <!-- home.jsと連携 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ホーム画面</title>
</head>
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="card-header">
                    <tr>
                            <td>{{ $schedule->schedule_name }}</td><br>
                            <td><img src="{{asset('storage/'.$schedule->imageOne->image)}}" alt="image" style="width: 150px; height: auto;"></td>
                            <td><p><div class="arrow"></div></p></td>
                            <td><img src="{{asset('storage/'.$schedule->imageTwo->image)}}" alt="image" style="width: 150px; height: auto;"></td>
                            <td><p><div class="arrow"></div></p></td>
                            <td><img src="{{asset('storage/'.$schedule->imageThree->image)}}" alt="image" style="width: 150px; height: auto;"></td>
                            <td><p><div class="arrow"></div></p></td>
                            <td><img src="{{asset('storage/'.$schedule->imageFour->image)}}" alt="image" style="width: 150px; height: auto;"></td>
                            <td><p><div class="arrow"></div></p></td>
                            <td><img src="{{asset('storage/'.$schedule->imageFive->image)}}" alt="image" style="width: 150px; height: auto;"></td>
                    </tr>

                    </div>
                 
                    <div class="route">
                        <div class="submit_button">
                            <a href="{{ route('create') }}">新規作成</a>
                        </div>
                        <div class="submit_button">
                            <a href="{{ route('search') }}">スケジュール検索</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
