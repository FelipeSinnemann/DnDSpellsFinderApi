<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Spell;

class SpellController extends Controller
{
    public function index()
    {
        $requestQuery = request()->query();
        
        if(isset($requestQuery['name'])){
            $nameQuery = '%'.$requestQuery['name'].'%';
            unset($requestQuery['name']);
        }

        if(isset($requestQuery['class_id'])){
            $classId = $requestQuery['class_id'];
            unset($requestQuery['class_id']);
        }

        $spellQuery = Spell::where($requestQuery);

        if(isset($nameQuery)){
            $spellQuery->where('name', 'like', $nameQuery);
        }

        if(isset($classId)){
            $spellQuery->whereHas('classes', function($query) use ($classId){
                $query->where('class_id', $classId);
            });
        }

        $spells = $spellQuery->orderBy('name')->get();

        return response()->json(['data' => $spells, 'results' => $spells->count()]); 
    }
}
