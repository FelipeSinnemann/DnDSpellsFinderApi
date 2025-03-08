<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Spell extends Model
{
    protected $fillable = [
        'school_id',
        'name',
        'level',
        'description',
        'special_description',
        'range',
        'casting_time',
        'duration',
        'concentration',
        'ritual',
        'verbal',
        'somatic',
        'material',
        'material_components',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function school()
    {
        return $this->belongsTo(School::class);
    }

    public function classes()
    {
        return $this->belongsToMany(CharacterClass::class, 'class_spells', relatedPivotKey: 'class_id');
    }
}
