<?php

namespace App\Http\Controllers;

use App\Models\AnimalApi;
use Illuminate\Http\Request;

class AnimalsApiController extends Controller
{
    public function index()
    {
        return AnimalApi::all();
    }
}
