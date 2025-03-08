<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CharacterClass extends Model
{
    protected $fillable = [
        'name',
    ];

    public function spells()
    {
        return $this->belongsToMany(Spell::class, 'class_spells', 'class_id');
    }
}
