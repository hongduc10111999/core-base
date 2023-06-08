<?php

namespace Corebase\Post\Models;

use App\Models\User;
use Corebase\Profile\Models\Comments;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Post extends Model
{
    use HasFactory, SoftDeletes, Notifiable;
    protected $guarded = [];

    protected $dates = ['deleted_at'];

    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    public function comments()
    {
        return $this->hasMany(Comments::class, 'post_id', 'id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
