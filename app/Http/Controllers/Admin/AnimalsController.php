<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Animal;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class AnimalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $busca = request()->get('busca');
        if ($busca != "" && $busca != null) {
            $animals = Animal::where('name', 'LIKE', "%{$busca}%")
                ->orWhere('race', 'LIKE', "%{$busca}%")
                ->orWhere('weight', 'LIKE', "%{$busca}%")
                ->paginate(10);
        } else {
            $animals = Animal::paginate(10);
        }

        return view('animals.index', compact('animals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('animals.create', ['animal' => new Animal()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $this->_validate($request);
           $data = $request->all();
           Animal::create($data);
        return redirect()->route('animals.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        if (!($animal = Animal::find($id))) {
            throw new ModelNotFoundException("Animal não foi encontrado");
        }
        return view('animals.show', compact('animal'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!($animal = Animal::find($id))) {
            throw new ModelNotFoundException("Animal não foi encontrado");
        }
        $animal = Animal::findOrFail($id);
        return view('animals.edit', compact('animal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (!($animal = Animal::find($id))) {
            throw new ModelNotFoundException("Animal não foi encontrado");
        }

        $this->_validate($request);
        $data = $request->all();
        $animal->fill($data);
        $animal->save();

        return redirect()->route('animals.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!($animal = Animal::find($id))) {
            throw new ModelNotFoundException("Não foi possível realizar a exclusão");
        }
        $animal->delete();
        return redirect()->route('animals.index');
    }

    protected function _validate(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:200',
            'race' => 'required|max:70',
            'weight' => 'required|numeric'
        ]);
    }
}
