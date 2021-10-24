@if (count($answers) > 0)
    <ul class="list-unstyled">
        @foreach ($answers as $answer)
            <li class="media mb-3">
                <div class="media-body">
                    <div class="answer">
                        <p class="mb-0">{!! nl2br(e($answer->content)) !!}</p><br/>
                        <p style="color: #808080;">{{ $answer->user->name }}</p>
                    </div>
                    <style>
                        /* 吹き出し本体 - 普通の吹き出し */
                        .answer{
                            position: relative;
                            padding: 20px;
                            margin: 10px;
                            background-color: #f7d2d2;
                            border-radius: 10px;         /* 角丸を指定 */
                        }
                        /* 三角アイコン - 普通の吹き出し */
                        .answer::before{
                            content: '';
                            position: absolute;
                            display: block;
                            width: 0;
                            height: 0;
                            right: -15px;
                            top: 20px;
                            border-left: 15px solid #f7d2d2;
                            border-top: 15px solid transparent;
                            border-bottom: 15px solid transparent;
                        }
                    </style>
                </div>
                <div class="flexbox">
                    <img class="m-2 rounded-circle" src="{{ Gravatar::get($answer->user->email, ['size' => 100]) }}" alt="">
                    <div class="ml-3 p-2">
                        @if (Auth::id() == $answer->user_id)
                            {{-- 投稿削除ボタンのフォーム --}}
                            {!! Form::open(['route' => ['answers.destroy', $answer->id], 'method' => 'delete']) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!}
                        @endif
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
    {{-- ページネーションのリンク --}}
    {{ $answers->links() }}
@else
    <p>まだ回答がありません。是非ご意見をお聞かせください。</p>
@endif