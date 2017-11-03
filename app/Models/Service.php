<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = 
    [
        'name', 
        'description', 
        'target_public', 
        'quick_help', 
        'requirements',
        'sector_id',
        'slt_id', 
    ];

    public $timestamps = false;

    public function sector(){
        return $this->belongsTo(\App\Models\Sector::class);
    }

}