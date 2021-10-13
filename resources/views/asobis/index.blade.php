@extends('layouts.app')

@section('content')
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
                {{ Form::radio('age', '0', false, array('id' => '0')) }} {{ Form::label('0', '0') }}
                {{ Form::radio('age', '1', false, array('id' => '1')) }} {{ Form::label('1', '1') }}
                {{ Form::radio('age', '2', false, array('id' => '2')) }} {{ Form::label('2', '2') }}
                {{ Form::radio('age', '3', false, array('id' => '3')) }} {{ Form::label('3', '3') }}
                {{ Form::radio('age', '4', false, array('id' => '4')) }} {{ Form::label('4', '4') }}
                {{ Form::radio('age', '5', false, array('id' => '5')) }} {{ Form::label('5', '5') }}
                {{ Form::radio('age', '6', false, array('id' => '6')) }} {{ Form::label('6', '6') }}
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