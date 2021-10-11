@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>質問投稿</h1>
    </div>

    <div class="row">
        <div class="col-sm-6 offset-sm-3">

            {!! Form::model($question, ['route' => 'questions.store']) !!}
                <div class="form-group">
                    {!! Form::label('category', 'カテゴリー') !!}
                    {!! Form::select('category', ['外遊び' => '外遊び', '内遊び' => '内遊び'], null, ['placeholder' => '遊びを選択してください']); !!}
                </div>

                <div class="form-group">
                    {!! Form::label('age', 'お子様の年齢') !!}
                    {!! Form::selectRange('age', 0, 6, null, ['placeholder' => '']); !!}{{ ' 歳' }}
                </div>

                <div class="form-group">
                    {!! Form::label('title', 'タイトル') !!}
                    {!! Form::text('title', null, ['class' => 'form-control']); !!}
                </div>

                <div class="form-group">
                    {!! Form::label('content', '質問詳細') !!}
                    {!! Form::textarea('content', null, ['class' => 'form-control']); !!}
                </div>

                <div class="form-button">
                    {!! Form::submit('投稿', ['class' => 'btn btn-success btn-block']) !!}
                </div>    
                
                <style>
                    .form-button {
                        margin-bottom: 20px;
                    }
                </style>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
    