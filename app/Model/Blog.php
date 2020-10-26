<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $casts = [
      'publish_at' => 'datetime',
      'publish_until' => 'datetime',
    ];

    public function user(){
        return $this->belongsTo(\App\User::class);
    }

}
