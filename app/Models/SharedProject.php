<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SharedProject extends Model
{
    use HasFactory;
    protected $fillable = [
        'project_id',
        'creator_id',
        'shared_users',
        'status',
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
