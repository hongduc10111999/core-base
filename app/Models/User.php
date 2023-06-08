<?php

namespace App\Models;

use BNK\Page\Models\Pages;
use Corebase\Post\Models\Post;
use Corebase\Profile\Models\Description;
use Corebase\Profile\Models\Skill;
use Corebase\Profile\Models\Slide;
use Corebase\Profile\Models\Social;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'gender',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $guarded = [];
    public function posts() {
        return $this->hasMany(Post::class,'user_id','id');
    }
    public function page() {
        return $this->hasMany(Pages::class,'user_id','id');
    }

    public function social() {
        return $this->hasMany(Social::class,'user_id','id');
    }

    public function slide() {
        return $this->hasMany(Slide::class,'user_id','id');
    }

    public function description() {
        return $this->hasOne(Description::class,'user_id','id');
    }

    public function skill() {
        return $this->hasMany(Skill::class,'user_id','id');
    }
}
