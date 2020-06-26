<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'title', 'description', 'status', 'user_id', 'views_count', 'like_count'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
