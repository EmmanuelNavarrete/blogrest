<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model 
{
    protected $fillable = [
        'id', 'user', 'topic_id', 'mensaje', 'created_at', 'updated_at'
    ];

    protected $hidden = [
        
    ];
}
