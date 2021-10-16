<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = ['question_id', 'content'];

    /**
     * この回答を所有するユーザ。（ Userモデルとの関係を定義）
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    /**
     * この回答はどの質問に対してなのか。（ Questionモデルとの関係を定義）
     */
    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
