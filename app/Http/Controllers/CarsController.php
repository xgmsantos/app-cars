<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = (new Car())->all();

        return view('cars.index', [
            'cars' => $cars
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'brand' => 'required',
            'model' => 'required',
            'color' => 'required',
            'board' => 'required'
        ]);

        $car = new Car();

        $car->brand = $request->brand;
        $car->name = $request->model;
        $car->color = $request->color;
        $car->board = $request->board;

        $car->save();

        return redirect()->route('cars.index')->with('success', 'O novo carro foi adicionado com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('cars.edit', [
            'car' => Car::find($id)
        ]);
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
        $request->validate([
            'brand' => 'required',
            'model' => 'required',
            'color' => 'required',
            'board' => 'required'
        ]);

        $car = Car::find($id);

        $car->brand = $request->brand;
        $car->name = $request->model;
        $car->color = $request->color;
        $car->board = $request->board;

        $car->save();

        return redirect()->route('cars.index')->with('success', 'O carro foi editado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = Car::find($id);

        $car->delete();

        return redirect()->route('cars.index')->with('success', 'O carro foi excluído com sucesso.');
    }
}
