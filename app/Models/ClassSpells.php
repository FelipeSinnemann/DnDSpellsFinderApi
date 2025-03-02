<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassSpells extends Model
{
    protected $fillable = [
        'class_id',
        'spell_id',
    ];
}
