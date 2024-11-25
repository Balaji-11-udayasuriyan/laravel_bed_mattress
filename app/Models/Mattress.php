<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mattress extends Model
{
    use HasFactory;

    protected $fillable = [

        'name',
        'size_id',
        'unit_id',
        'thickness_id'
    ];

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }

    public function size()
    {
        return $this->belongsTo(Size::class);
    }

    public function thickness()
    {
        return $this->belongsTo(Thickness::class);
    }


}


