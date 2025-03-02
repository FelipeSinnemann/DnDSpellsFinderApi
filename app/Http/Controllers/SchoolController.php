<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\School;

class SchoolController extends Controller
{
    public function index()
    {
        $schools = School::where(request()->query())->get();

        return response()->json(['data' => $schools, 'results' => $schools->count()]); 
    }
}
