<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CharacterClass;

class CharacterClassController extends Controller
{
    public function index()
    {
        $classes = CharacterClass::where(request()->query())->get();

        return response()->json(['data' => $classes, 'results' => $classes->count()]); 
    }
}
