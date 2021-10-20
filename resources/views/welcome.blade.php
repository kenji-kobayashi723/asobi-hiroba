@extends('layouts.app')

@section('content')
<div class="mt-4">
    @if (Auth::check())
        <div class="label">
            <img src="/images/dance_youchien.png" width="200" height="200">
            <div class="center"><img src="/images/label.png"></div>
            <img src="/images/kids_gokko_asobi.png" width="200" height="200">
        </div>
        <style>
            .label{
                display: flex;
                justify-content: center;
                margin-bottom: 15px;
            }
            
            .center{
                margin-right: 40px;
                margin-left: 40px;
            }
        </style>
    
        <div class="text-center">
            <h3>遊びのカテゴリ</h3>
            <p>興味のある遊びを選択してください。</p>
        </div>
    
        <div class="container">
            <div class="row">
                <div class="offset-md-4 col-md-3">{!! link_to_route('questions.index', '〇外遊び', ['asobi' => '外遊び']) !!}</div>
                <div class="col-md-3">{!! link_to_route('questions.index', '〇内遊び', ['asobi' => '内遊び']) !!}</div>
            </div>
        </div>
    @else
        <div class="center jumbotron" style="background-color:#40f7b7;">
            <div class="text-center">
                <h1>子どもの遊び広場へようこそ！</h1>
                <p>このサイトは未就学児までを対象とした遊びに関する疑問や悩みを相談できる場となっています。</p>
                <p>子どもの遊びをさらに楽しく充実したものにできるように情報を共有していきましょう。</p>
                {{-- ユーザ登録ページへのリンク --}}
                {!! link_to_route('signup.get', '会員登録', [], ['class' => 'btn btn-lg btn-success']) !!}
            </div>
        </div>
    @endif
</div>
@endsection