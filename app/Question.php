<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['category', 'age', 'title', 'content'];

    // この投稿を所有するユーザUserモデルとの関係を定義
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function answer()
    {
        return $this->hasMany(Answer::class);
    }
}
