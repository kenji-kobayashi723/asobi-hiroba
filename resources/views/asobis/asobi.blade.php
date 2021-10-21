<ul class="list-unstyled">
    <li class="media mb-3">
        <img class="m-2 rounded-circle" src="{{ Gravatar::get($question->user->email, ['size' => 100]) }}" alt="">
        <div class="media-body">
            <div class="title-link">
                <p class="mb-0">{!! nl2br(e($question->content)) !!}</p><br/>
                <p style="color: #808080;">{{ $question->user->name }}({{ $question->age }}歳)</p>
            </div>
            <style>
                /* 吹き出し本体 - 普通の吹き出し */
                .title-link{
                    position: relative;
                    padding: 20px;
                    margin: 10px;
                    background-color: #f7d2d2;
                    border-radius: 10px;         /* 角丸を指定 */
                }
                /* 三角アイコン - 普通の吹き出し */
                .title-link::before{
                    content: '';
                    position: absolute;
                    display: block;
                    width: 0;
                    height: 0;
                    left: -15px;
                    top: 20px;
                    border-right: 15px solid #f7d2d2;
                    border-top: 15px solid transparent;
                    border-bottom: 15px solid transparent;
                }
            </style>
        </div>
    </li>
</ul>
