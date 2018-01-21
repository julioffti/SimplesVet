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

    public function store(Request $request)
    {
        return AnimalApi::create($request->all());
    }

    public function update(Request $request, AnimalApi $animal)
    {
         $animal->update($request->all());
         return $animal;
    }

    /**
     * @param Animal $animal
     * @return Animal
     */
    public function show(AnimalApi $animal)
    {
        return $animal;
    }

    public function destroy(Request $request, AnimalApi $animal)
    {
        $animal->delete($request->all());
        return $animal;
    }
}
