<?php

namespace Corebase\Page\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Pages extends Model
{
    use HasFactory, SoftDeletes, Notifiable;
    protected $guarded = [];

    public function username()
    {
        return $this->hasOne(User::class,'id','user_id');
    }
}
