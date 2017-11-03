<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    protected $fillable = 
    [
        'name', 
        'description'
    ];
    public $timestamps = false;

    public function services()
    {
        return $this->hasMany(\App\Models\Service::class);
    }
}
