@extends('layouts.app')

@section('content')
    <img src="{{ asset('asobiphoto/dance_youchien.png') }}" alt="">
    
    <div class="text-center">
        <h3>遊びのカテゴリ</h3>
        <p>興味のある遊びを選択してください。</p>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-md-6"><a href="#" class="link">〇外遊び</a></div>
            <div class="col-md-6"><a href="#" class="link">〇内遊び</a></div>
        </div>
    </div>
@endsection
    