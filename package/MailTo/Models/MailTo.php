<?php

namespace Corebase\MailTo\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class MailTo extends Model
{
    use HasFactory, SoftDeletes, Notifiable;

    protected $guarded = [];
    protected $dates = ['deleted_at'];
}
