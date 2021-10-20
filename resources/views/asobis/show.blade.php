@extends('layouts.app')

@section('content')
    <div class="p-breadcrumb">
        <div class="d-flex flex-row bd-highlight mb-3">
            <a class="pl-2 pt-1" href="/" style="color:#808080;">子どもの遊び広場</a>
            <img src="/images/yajirushi.png" width="30" height="30" style="padding-top: 1px;">
            <div class="text-muted pl-2 pt-1">{!! link_to_route('questions.index', $question->category, ['asobi' => $question->category], ['style' => 'color:#808080;']) !!}</div>
            <img src="/images/yajirushi.png" width="30" height="30" style="padding-top: 1px;">
            <a class="pl-0 pt-1">質問詳細</a>
        </div>
    </div>
    
    <style>
        .p-breadcrumb {
            left: 0;
            margin-right: calc(50% - 50vw);
            margin-left: calc(50% - 50vw);
            padding-right: calc(50vw - 50%);
            padding-left: calc(50vw - 50%);
            background-color: #FFCCFF;
        }
    </style>
    
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
    
    <div class="center row">
        <div class="col-sm-8 offset-sm-2">
            <div class="question">
                <p class="text-center">回答</p>
                @include('asobis.asobi_answer')
            </div>
        </div>
    </div>
    
    <style>
        .question {
            background-color: #FFFFCC;
            margin-bottom: 60px;
        }
    </style>
    
    @if (Auth::id() != $question->user_id)
        <div class="answer-area">
            <div class="d-flex flex-row justify-content-center">
                {!! Form::open(['route' => ['answers.answer', $question->id], 'class' => 'form-inline']) !!}
                    <div class="form-group">
                        {!! Form::textarea('content', null, ['class' => 'form-control', 'cols' => '100', 'rows' => '2', 'placeholder' => '回答']); !!}
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