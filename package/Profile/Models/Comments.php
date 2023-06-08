<?php

namespace Corebase\Profile\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    public function reply() {
        return $this->hasMany(Comments::class,'parent','id');
    }
}
