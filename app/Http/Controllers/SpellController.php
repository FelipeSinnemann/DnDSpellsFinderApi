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
        $nameQuery = null;
        
        if(isset($requestQuery['name'])){
            $nameQuery = '%'.$requestQuery['name'].'%';
            unset($requestQuery['name']);
        }

        $spellQuery = Spell::where($requestQuery);

        if($nameQuery){
            $spellQuery->where('name', 'like', $nameQuery);
        }

        $spells = $spellQuery->orderBy('name')->get();

        return response()->json(['data' => $spells, 'results' => $spells->count()]); 
    }
}
