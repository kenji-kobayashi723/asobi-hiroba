@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>「{{ $question->title }}」の質問</h1>
    </div>
    
    <div class="center row">
        <div class="col-sm-8 offset-sm-2">
            <div class="question">
                @include('asobis.asobi')
            </div>
        </div>
    </div>
    
    <style>
        .question {
            background-color: #FFFFCC;
        }
    </style>
    
    {{-- スクロール確認用 --}}
    <img src="/images/kakurenbo.png">
    <img src="/images/ball.png">
    
    {{-- 固定を確認するためにquestionを利用　後でanswerに変更 --}}
    @if (Auth::id() != $question->user_id)
        <div class="answer-area">
            <div class="d-flex flex-row justify-content-center">
                {!! Form::model($question, ['route' => 'questions.store', 'class' => 'form-inline']) !!}
                    <div class="form-group">
                        {!! Form::textarea('content', null, ['class' => 'form-control', 'cols' => '100', 'rows' => '2']); !!}
                    </div>

                    <div class="form-button">
                        {!! Form::submit('投稿', ['class' => 'btn btn-success']) !!}
                    </div>    
                
                {!! Form::close() !!}
            </div>
        </div>
    
        <style>
            .answer-area {
                left: 0;
                position: fixed;
                bottom: 0;
                width: 100%;
                background-color: #CCFFFF;
            }
        </style>
    @endif
@endsection