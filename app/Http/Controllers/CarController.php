<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
class CarController extends Controller
{    private $columns = ['Title','price','description','published'];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {$cars=Car::get();

return view('car',compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $car=new Car();
        $car->title=$request->Title;
        $car->price=$request->price;
        $car->description=$request->description;
        $published=$request->published;
        if(isset($request->published)){
            $car->published = true;
        }else{
            $car->published = false;
        }
        $car->save();
         return "car data add succefully";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cars = Car::findOrFail($id);
        return view('cardetails',compact('cars'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {$car=Car::findOrFail($id);
         return view('updatecar',compact('car'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->only($this->columns);
        $data['published'] = isset($data['published'])? 1:0;
        Car::where('id', $id)->update($data);
        return 'Updated';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Car::where('id', $id)->delete();
        return 'deleted';
    }
}
