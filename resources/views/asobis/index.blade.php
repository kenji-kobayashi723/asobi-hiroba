@extends('layouts.app')

@section('content')
    <div class="p-breadcrumb">
        <div class="d-flex flex-row bd-highlight mb-3">
            <a class="pl-2 pt-1" href="/" style="color:#808080;">子どもの遊び広場</a>
            <img src="/images/yajirushi.png" width="30" height="30" style="padding-top: 1px;">
            <a class="pl-0 pt-1">{{ $asobi }}</a>
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
    
    <div class="container">
        <div class="d-flex flex-row justify-content-center">
            <div class="p-2">
                <h1>「{{ $asobi }}」に関する質問</h1>
            </div>
            <div class="p-2">
                {!! link_to_route('questions.create', '質問投稿', [], ['class' => 'btn btn-lg btn-success']) !!}
            </div>
        </div>
    </div>
    
    <div class="center row">
        <div class="col-sm-8 offset-sm-2">
            <div class="search">
                <p>年齢で絞り込む</p>
                {{ Form::open(['method' => 'get', 'route' => ['questions.index']]) }}
                    {!! Form::hidden('asobi', $asobi); !!}
                    <div class="form-check form-check-inline">
                        {{ Form::radio('age', '', true, ['id' => 'radio-one', 'class' => 'form-check-input']) }}
                        {{ Form::label('age-label', 'すべて', ['class' => 'form-check-label']) }}
                    </div>
                    <div class="form-check form-check-inline">
                        {{ Form::radio('age', '0', request()->input('age') == '0' ? true : false, ['id' => 'radio-one', 'class' => 'form-check-input']) }}
                        {{ Form::label('age-label', '0歳', ['class' => 'form-check-label']) }}
                    </div>
                    <div class="form-check form-check-inline">
                        {{ Form::radio('age', '1', request()->input('age') == '1' ? true : false, ['id' => 'radio-one', 'class' => 'form-check-input']) }}
                        {{ Form::label('age-label', '1歳', ['class' => 'form-check-label']) }}
                    </div>
                    <div class="form-check form-check-inline">
                        {{ Form::radio('age', '2', request()->input('age') == '2' ? true : false, ['id' => 'radio-one', 'class' => 'form-check-input']) }}
                        {{ Form::label('age-label', '2歳', ['class' => 'form-check-label']) }}
                    </div>
                    <div class="form-check form-check-inline">
                        {{ Form::radio('age', '3', request()->input('age') == '3' ? true : false, ['id' => 'radio-one', 'class' => 'form-check-input']) }}
                        {{ Form::label('age-label', '3歳', ['class' => 'form-check-label']) }}
                    </div>
                    <div class="form-check form-check-inline">
                        {{ Form::radio('age', '4', request()->input('age') == '4' ? true : false, ['id' => 'radio-one', 'class' => 'form-check-input']) }}
                        {{ Form::label('age-label', '4歳', ['class' => 'form-check-label']) }}
                    </div>
                    <div class="form-check form-check-inline">
                        {{ Form::radio('age', '5', request()->input('age') == '5' ? true : false, ['id' => 'radio-one', 'class' => 'form-check-input']) }}
                        {{ Form::label('age-label', '5歳', ['class' => 'form-check-label']) }}
                    </div>
                    <div class="form-check form-check-inline">
                        {{ Form::radio('age', '6', request()->input('age') == '6' ? true : false, ['id' => 'radio-one', 'class' => 'form-check-input']) }}
                        {{ Form::label('age-label', '6歳', ['class' => 'form-check-label']) }}
                    </div>
                    {!! Form::submit('絞り込み', ['class' => 'btn btn-info btn-block']) !!}
                {{ Form::close() }}
            </div>
            <div class="questionList">
                @include('asobis.asobis')
            </div>
        </div>
    </div>
    
    <style>
        .questionList {
            background-color: #FFFFCC;
        }
    </style>
@endsection