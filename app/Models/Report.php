<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{

    protected $fillable = [
        'img_path',
        'user_id',
        'title',
        'description',
        'location',
        'state'
    ];

    public function User(){
        return $this->belongsTo(User::class);
    }

}

