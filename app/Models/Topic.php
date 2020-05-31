<?php

namespace App\Models;

class Topic extends Model
{
    protected $fillable = ['title', 'body', 'user_id', 'category_id', 'reply_count', 'view_count', 'last_reply_user_id', 'order', 'excerpt', 'slug'];

    protected $casts = [
        'email_verified_at' => 'datetime:Y-m-d H:i:s',
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
    ];
    // 一个话题属于一个分类
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // 一个话题属于一个作者
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
