<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GaleryModel extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "galery";

    public function user()
    {
        return $this->belongsTo(User::class, 'user_created');
    }
}
